{{-- resources/views/auth/stepper/partials/step3.blade.php --}}
<div class="step step-3">
    <h5 class="mb-3">Additional Profile Information</h5>

    <div class="row g-3">
        {{-- Religion --}}
        <div class="col-md-4">
            <label for="religion" class="form-label">Religion</label>
            <select name="religion" id="religion" class="form-select @error('religion') is-invalid @enderror">
                <option value="">Select</option>
                @foreach (['Islam', 'Hindu', 'Christian', 'Buddhist', 'Other'] as $r)
                    <option value="{{ $r }}"
                        {{ old('religion', $draft[3]['religion'] ?? '') == $r ? 'selected' : '' }}>{{ $r }}
                    </option>
                @endforeach
            </select>
            @error('religion')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>


        {{-- Caste --}}
        <div class="col-md-4">
            <label for="caste" class="form-label">Caste</label>
            <input type="text" name="caste" id="caste"
                class="form-control @error('caste') is-invalid @enderror"
                value="{{ old('caste', $draft[3]['caste'] ?? '') }}">
            @error('caste')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        {{-- Sect --}}
        <div class="col-md-4">
            <label for="sect" class="form-label">Sect</label>
            <input type="text" name="sect" id="sect" class="form-control @error('sect') is-invalid @enderror"
                value="{{ old('sect', $draft[3]['sect'] ?? '') }}">
            @error('sect')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        {{-- Mother Tongue --}}
        <div class="col-md-4">
            <label for="mother_tongue" class="form-label">Mother Tongue</label>
            <input type="text" name="mother_tongue" id="mother_tongue"
                class="form-control @error('mother_tongue') is-invalid @enderror"
                value="{{ old('mother_tongue', $draft[3]['mother_tongue'] ?? '') }}">
            @error('mother_tongue')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        {{-- Education Level --}}
        <div class="col-md-4">
            <label for="education_level" class="form-label">Education Level</label>
            <select name="education_level" id="education_level"
                class="form-select @error('education_level') is-invalid @enderror">
                <option value="">Select</option>
                @foreach (['High School', 'BSc', 'MSc', 'PhD', 'Other'] as $edu)
                    <option value="{{ $edu }}"
                        {{ old('education_level', $draft[3]['education_level'] ?? '') == $edu ? 'selected' : '' }}>
                        {{ $edu }}</option>
                @endforeach
            </select>
            @error('education_level')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        {{-- Education Field --}}
        <div class="col-md-4">
            <label for="education_field" class="form-label">Education Field</label>
            <input type="text" name="education_field" id="education_field"
                class="form-control @error('education_field') is-invalid @enderror"
                value="{{ old('education_field', $draft[3]['education_field'] ?? '') }}">
            @error('education_field')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        {{-- Education Institution --}}
        <div class="col-md-4">
            <label for="education_institution" class="form-label">Education Institution</label>
            <input type="text" name="education_institution" id="education_institution"
                class="form-control @error('education_institution') is-invalid @enderror"
                value="{{ old('education_institution', $draft[3]['education_institution'] ?? '') }}">
            @error('education_institution')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        {{-- Profession --}}
        <div class="col-md-4">
            <label for="profession" class="form-label">Profession</label>
            <input type="text" name="profession" id="profession"
                class="form-control @error('profession') is-invalid @enderror"
                value="{{ old('profession', $draft[3]['profession'] ?? '') }}">
            @error('profession')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        {{-- Designation --}}
        <div class="col-md-4">
            <label for="designation" class="form-label">Designation</label>
            <input type="text" name="designation" id="designation"
                class="form-control @error('designation') is-invalid @enderror"
                value="{{ old('designation', $draft[3]['designation'] ?? '') }}">
            @error('designation')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        {{-- Organization --}}
        <div class="col-md-4">
            <label for="organization" class="form-label">Organization</label>
            <input type="text" name="organization" id="organization"
                class="form-control @error('organization') is-invalid @enderror"
                value="{{ old('organization', $draft[3]['organization'] ?? '') }}">
            @error('organization')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        {{-- Annual Income --}}
        <div class="col-md-4">
            <label for="annual_income" class="form-label">Annual Income</label>
            <input type="number" name="annual_income" id="annual_income"
                class="form-control @error('annual_income') is-invalid @enderror"
                value="{{ old('annual_income', $draft[3]['annual_income'] ?? '') }}">
            @error('annual_income')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        {{-- Career Description --}}
        <div class="col-md-12">
            <label for="career_description" class="form-label">Career Description</label>
            <textarea name="career_description" id="career_description" rows="3"
                class="form-control @error('career_description') is-invalid @enderror">{{ old('career_description', $draft[3]['career_description'] ?? '') }}</textarea>
            @error('career_description')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        {{-- Country --}}
        <div class="col-md-4">
            <label for="country" class="form-label">Country</label>
            <select name="country" id="country" class="form-select @error('country') is-invalid @enderror">
                <option value="">Select</option>
                @foreach (['Bangladesh', 'India', 'Pakistan', 'Other'] as $c)
                    <option value="{{ $c }}"
                        {{ old('country', $draft[3]['country'] ?? '') == $c ? 'selected' : '' }}>{{ $c }}
                    </option>
                @endforeach
            </select>
            @error('country')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        {{-- Division --}}
        <div class="col-md-4">
            <label for="division" class="form-label">Division</label>
            <input type="text" name="division" id="division"
                class="form-control @error('division') is-invalid @enderror"
                value="{{ old('division', $draft[3]['division'] ?? '') }}">
            @error('division')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        {{-- District --}}
        <div class="col-md-4">
            <label for="district" class="form-label">District</label>
            <input type="text" name="district" id="district"
                class="form-control @error('district') is-invalid @enderror"
                value="{{ old('district', $draft[3]['district'] ?? '') }}">
            @error('district')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        {{-- City --}}
        <div class="col-md-6">
            <label for="city" class="form-label">City</label>
            <input type="text" name="city" id="city"
                class="form-control @error('city') is-invalid @enderror"
                value="{{ old('city', $draft[3]['city'] ?? '') }}">
            @error('city')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        {{-- Address --}}
        <div class="col-md-6">
            <label for="address" class="form-label">Address</label>
            <textarea name="address" id="address" rows="2" class="form-control @error('address') is-invalid @enderror">{{ old('address', $draft[3]['address'] ?? '') }}</textarea>
            @error('address')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        {{-- Home District --}}
        <div class="col-md-6">
            <label for="home_district" class="form-label">Home District</label>
            <input type="text" name="home_district" id="home_district"
                class="form-control @error('home_district') is-invalid @enderror"
                value="{{ old('home_district', $draft[3]['home_district'] ?? '') }}">
            @error('home_district')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        {{-- Diet --}}
        <div class="col-md-3">
            <label for="diet" class="form-label">Diet</label>
            <select name="diet" id="diet" class="form-select @error('diet') is-invalid @enderror">
                <option value="">Select</option>
                @foreach (['Vegetarian', 'Non-Vegetarian', 'Vegan', 'Other'] as $d)
                    <option value="{{ $d }}"
                        {{ old('diet', $draft[3]['diet'] ?? '') == $d ? 'selected' : '' }}>{{ $d }}
                    </option>
                @endforeach
            </select>
            @error('diet')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        {{-- Smoking --}}
        <div class="col-md-3">
            <label for="smoking" class="form-label">Smoking</label>
            <select name="smoking" id="smoking" class="form-select @error('smoking') is-invalid @enderror">
                <option value="">Select</option>
                @foreach (['Yes', 'No', 'Occasionally'] as $s)
                    <option value="{{ $s }}"
                        {{ old('smoking', $draft[3]['smoking'] ?? '') == $s ? 'selected' : '' }}>{{ $s }}
                    </option>
                @endforeach
            </select>
            @error('smoking')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        {{-- Drinking --}}
        <div class="col-md-3">
            <label for="drinking" class="form-label">Drinking</label>
            <select name="drinking" id="drinking" class="form-select @error('drinking') is-invalid @enderror">
                <option value="">Select</option>
                @foreach (['Yes', 'No', 'Occasionally'] as $d)
                    <option value="{{ $d }}"
                        {{ old('drinking', $draft[3]['drinking'] ?? '') == $d ? 'selected' : '' }}>
                        {{ $d }}</option>
                @endforeach
            </select>
            @error('drinking')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        {{-- Hobbies --}}
        <div class="col-md-6">
            <label for="hobbies" class="form-label">Hobbies</label>
            <input type="text" name="hobbies" id="hobbies"
                class="form-control @error('hobbies') is-invalid @enderror"
                value="{{ old('hobbies', $draft[3]['hobbies'] ?? '') }}">
            @error('hobbies')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        {{-- Interests --}}
        <div class="col-md-6">
            <label for="interests" class="form-label">Interests</label>
            <input type="text" name="interests" id="interests"
                class="form-control @error('interests') is-invalid @enderror"
                value="{{ old('interests', $draft[3]['interests'] ?? '') }}">
            @error('interests')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
    </div>

    {{-- Family Details (Father, Mother, Siblings) --}}
    <div class="row g-3 mt-3">
        <div class="col-md-4">
            <label for="father_name" class="form-label">Father's Name</label>
            <input type="text" name="father_name" id="father_name"
                class="form-control @error('father_name') is-invalid @enderror"
                value="{{ old('father_name', $draft[3]['father_name'] ?? '') }}">
            @error('father_name')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-md-4">
            <label for="father_occupation" class="form-label">Father's Occupation</label>
            <input type="text" name="father_occupation" id="father_occupation"
                class="form-control @error('father_occupation') is-invalid @enderror"
                value="{{ old('father_occupation', $draft[3]['father_occupation'] ?? '') }}">
            @error('father_occupation')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-md-4">
            <label for="mother_name" class="form-label">Mother's Name</label>
            <input type="text" name="mother_name" id="mother_name"
                class="form-control @error('mother_name') is-invalid @enderror"
                value="{{ old('mother_name', $draft[3]['mother_name'] ?? '') }}">
            @error('mother_name')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
        <div class="col-md-4">
            <label for="mother_occupation" class="form-label">Mother's Occupation</label>
            <input type="text" name="mother_occupation" id="mother_occupation"
                class="form-control @error('mother_occupation') is-invalid @enderror"
                value="{{ old('mother_occupation', $draft[3]['mother_occupation'] ?? '') }}">
            @error('mother_occupation')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        <div class="col-md-2">
            <label for="brothers" class="form-label">Brothers</label>
            <input type="number" name="brothers" id="brothers"
                class="form-control @error('brothers') is-invalid @enderror"
                value="{{ old('brothers', $draft[3]['brothers'] ?? '') }}">
            @error('brothers')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        <div class="col-md-2">
            <label for="sisters" class="form-label">Sisters</label>
            <input type="number" name="sisters" id="sisters"
                class="form-control @error('sisters') is-invalid @enderror"
                value="{{ old('sisters', $draft[3]['sisters'] ?? '') }}">
            @error('sisters')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        <div class="col-md-4">
            <label for="family_type" class="form-label">Family Type</label>
            <select name="family_type" id="family_type"
                class="form-select @error('family_type') is-invalid @enderror">
                <option value="">Select</option>
                @foreach (['Joint', 'Nuclear'] as $ft)
                    <option value="{{ $ft }}"
                        {{ old('family_type', $draft[3]['family_type'] ?? '') == $ft ? 'selected' : '' }}>
                        {{ $ft }}</option>
                @endforeach
            </select>
            @error('family_type')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        <div class="col-md-6">
            <label for="family_values" class="form-label">Family Values</label>
            <textarea name="family_values" id="family_values" rows="3"
                class="form-control @error('family_values') is-invalid @enderror">{{ old('family_values', $draft[3]['family_values'] ?? '') }}</textarea>
            @error('family_values')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        <div class="col-md-6">
            <label for="about_me" class="form-label">About Me</label>
            <textarea name="about_me" id="about_me" rows="3"
                class="form-control @error('about_me') is-invalid @enderror">{{ old('about_me', $draft[3]['about_me'] ?? '') }}</textarea>
            @error('about_me')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        <div class="col-md-6">
            <label for="expectation" class="form-label">Expectation</label>
            <textarea name="expectation" id="expectation" rows="3"
                class="form-control @error('expectation') is-invalid @enderror">{{ old('expectation', $draft[3]['expectation'] ?? '') }}</textarea>
            @error('expectation')
                <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
    </div>
</div>
