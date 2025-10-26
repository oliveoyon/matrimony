<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Profile;
use App\Models\PartnerPreference;
use App\Models\Photo;
use Illuminate\Support\Facades\Storage;

class RegisterStepperController extends Controller
{
    protected $maxStep = 7;

    public function showStep(Request $request, $step)
    {
        $step = intval($step);
        if ($step < 1 || $step > $this->maxStep) abort(404);

        $draft = session('registration.draft', []);
        return view('auth.stepper.register-stepper', compact('step', 'draft'));
    }

    public function storeStep(Request $request, $step)
    {
        $step = intval($step);
        if ($step < 1 || $step > $this->maxStep) abort(404);

        $rules = $this->rulesForStep($step);
        $validated = $request->validate($rules);

        $draft = session('registration.draft', []);

        // Handle boolean fields
        foreach ($rules as $key => $rule) {
            if (str_contains($rule, 'boolean')) {
                $validated[$key] = $request->has($key);
            }
        }

        // ===== Step 5: Photo upload handling =====
        if ($step == 5) {
            $photos = $draft[5]['photos'] ?? [];

            if ($request->hasFile('photos')) {
                foreach ($request->file('photos') as $index => $file) {
                    $tmpPath = $file->store('tmp/photos', 'public');
                    $photos[] = [
                        'tmp_path' => $tmpPath,
                        'caption' => $request->photo_captions[$index] ?? null,
                        'is_primary' => ($request->primary_photo == $index),
                    ];
                }
            } else {
                // Update captions / primary photo for existing
                foreach ($photos as $index => &$photo) {
                    $photo['caption'] = $request->photo_captions[$index] ?? $photo['caption'];
                    $photo['is_primary'] = ($request->primary_photo == $index);
                }
            }

            $draft[$step] = ['photos' => $photos];
        }
        elseif ($step == 7) {
            $draft[$step] = ['accept_terms' => $request->has('accept_terms')];
        } else {
            $draft[$step] = $validated;
        }

        session(['registration.draft' => $draft]);

        // ===== Go to next step =====
        if ($step < $this->maxStep) {
            return redirect()->route('register.step.show', ['step' => $step + 1]);
        }

        // ===== Final Step: Save to DB =====
        try {
            DB::transaction(function () use ($draft) {

                // Step 1: Create User
                $s1 = $draft[1] ?? [];
                $user = User::create([
                    'name' => $s1['name'] ?? ($s1['first_name'] ?? 'Unnamed'),
                    'email' => $s1['email'] ?? null,
                    'password' => Hash::make($s1['password'] ?? Str::random(10)),
                    'role' => 'user',
                    'is_active' => false,
                    'profile_completed' => false,
                ]);

                // ===== Steps 2 & 3: Profile =====
                $profileData = array_merge($draft[2] ?? [], $draft[3] ?? []);

                // ✅ Inject email & phone from Step 1 into profile
                if (!empty($s1['email'])) {
                    $profileData['email'] = $s1['email'];
                }
                if (!empty($s1['phone'])) {
                    $profileData['phone'] = $s1['phone'];
                }

                $user->profile()->create($profileData);

                // ===== Step 4: Partner Preferences =====
                $prefs = $draft[4] ?? [];
                $prefs['accepts_children'] = $prefs['accepts_children'] ?? false;
                $user->partnerPreference()->create($prefs);

                // ===== Step 5: Photos =====
                foreach ($draft[5]['photos'] ?? [] as $photo) {
                    if (isset($photo['tmp_path']) && Storage::disk('public')->exists($photo['tmp_path'])) {
                        $finalPath = 'photos/' . basename($photo['tmp_path']);
                        Storage::disk('public')->move($photo['tmp_path'], $finalPath);

                        $user->photos()->create([
                            'path' => $finalPath,
                            'caption' => $photo['caption'] ?? null,
                            'is_primary' => $photo['is_primary'] ?? false,
                            'approved' => false,
                            'is_verified' => false,
                        ]);
                    }
                }

                $user->update(['profile_completed' => true]);
            });

            session()->forget('registration.draft');

            return redirect()->route('register.step.complete');

        } catch (\Throwable $e) {
            Log::error('Registration stepper error: ' . $e->getMessage());
            return back()->withInput()->withErrors(['general' => 'An error occurred while saving your data.']);
        }
    }

    public function complete()
    {
        return view('auth.stepper.complete');
    }

    protected function rulesForStep($step)
    {
        switch ($step) {
            case 1:
                return [
                    'name' => 'required|string|max:255',
                    'email' => 'required|email|unique:users,email',
                    'phone' => 'nullable|string|max:20',
                    'password' => 'required|string|min:6|confirmed',
                ];

            case 2: // Personal Profile
                return [
                    'first_name' => 'required|string|max:255',
                    'last_name' => 'nullable|string|max:255',
                    'gender' => 'required|in:male,female,other',
                    'dob' => 'nullable|date',
                    'height_cm' => 'nullable|integer|min:30|max:300',
                    'weight_kg' => 'nullable|integer|min:10|max:500',
                    'marital_status' => 'nullable|in:Never Married,Divorced,Widowed',
                    'has_children' => 'boolean',
                    'blood_group' => 'nullable|in:A+,A-,B+,B-,AB+,AB-,O+,O-',
                    'disability' => 'nullable|string|max:255',
                    'eye_color' => 'nullable|in:Brown,Blue,Green,Hazel,Gray,Other',
                    'hair_color' => 'nullable|in:Black,Brown,Blonde,Red,Gray,Other',
                    'complexion' => 'nullable|in:Fair,Medium,Olive,Brown,Dark',
                ];

            case 3:
                return [
                    'religion' => 'nullable|in:Islam,Hindu,Christian,Buddhist,Other',
                    'caste' => 'nullable|string|max:255',
                    'sect' => 'nullable|string|max:255',
                    'mother_tongue' => 'nullable|string|max:255',
                    'education_level' => 'nullable|in:High School,BSc,MSc,PhD,Other',
                    'education_field' => 'nullable|string|max:255',
                    'education_institution' => 'nullable|string|max:255',
                    'profession' => 'nullable|string|max:255',
                    'designation' => 'nullable|string|max:255',
                    'organization' => 'nullable|string|max:255',
                    'annual_income' => 'nullable|integer|min:0',
                    'career_description' => 'nullable|string|max:2000',
                    'country' => 'nullable|string|max:255',
                    'division' => 'nullable|string|max:255',
                    'district' => 'nullable|string|max:255',
                    'city' => 'nullable|string|max:255',
                    'address' => 'nullable|string|max:1000',
                    'home_district' => 'nullable|string|max:255',
                    'diet' => 'nullable|in:Vegetarian,Non-Vegetarian,Vegan,Other',
                    'smoking' => 'nullable|in:Yes,No,Occasionally',
                    'drinking' => 'nullable|in:Yes,No,Occasionally',
                    'hobbies' => 'nullable|string|max:255',
                    'interests' => 'nullable|string|max:255',
                    'father_name' => 'nullable|string|max:255',
                    'father_occupation' => 'nullable|string|max:255',
                    'mother_name' => 'nullable|string|max:255',
                    'mother_occupation' => 'nullable|string|max:255',
                    'brothers' => 'nullable|integer|min:0',
                    'sisters' => 'nullable|integer|min:0',
                    'family_type' => 'nullable|in:Joint,Nuclear',
                    'family_values' => 'nullable|string|max:1000',
                    'about_me' => 'nullable|string|max:2000',
                    'expectation' => 'nullable|string|max:2000',
                ];

            case 4:
                return [
                    'religion' => 'nullable|in:Islam,Hindu,Christian,Buddhist,Other',
                    'caste' => 'nullable|string|max:255',
                    'sect' => 'nullable|string|max:255',
                    'mother_tongue' => 'nullable|string|max:255',
                    'education_level' => 'nullable|in:High School,BSc,MSc,PhD,Other',
                    'profession' => 'nullable|string|max:255',
                    'country' => 'nullable|string|max:255',
                    'division' => 'nullable|string|max:255',
                    'district' => 'nullable|string|max:255',
                    'diet' => 'nullable|in:Vegetarian,Non-Vegetarian,Vegan,Other',
                    'smoking' => 'nullable|in:Yes,No,Occasionally',
                    'drinking' => 'nullable|in:Yes,No,Occasionally',
                    'min_age' => 'nullable|integer|min:18|max:100',
                    'max_age' => 'nullable|integer|min:18|max:100',
                    'min_height_cm' => 'nullable|integer|min:30|max:300',
                    'max_height_cm' => 'nullable|integer|min:30|max:300',
                    'marital_status' => 'nullable|in:Never Married,Divorced,Widowed',
                    'accepts_children' => 'boolean',
                    'other_preferences' => 'nullable|string|max:1000',
                    'min_annual_income' => 'nullable|integer|min:0',
                    'max_annual_income' => 'nullable|integer|min:0',
                ];

            case 5:
                return [
                    'photos.*' => 'image|mimes:jpeg,png,jpg,gif,webp|max:5120',
                    'photo_captions.*' => 'nullable|string|max:255',
                    'primary_photo' => 'nullable|integer',
                ];

            case 6:
                return [
                    'additional_info' => 'nullable|string|max:2000',
                ];

            case 7:
                return [];

            default:
                return [];
        }
    }
}
