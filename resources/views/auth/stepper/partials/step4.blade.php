{{-- resources/views/auth/stepper/partials/step4.blade.php --}}
<div class="step step-4">
    <h5 class="mb-3">Partner Preferences</h5>

    <div class="row g-3">
        {{-- Age --}}
        <div class="col-md-3">
            <label for="min_age" class="form-label">Min Age</label>
            <input type="number" name="min_age" id="min_age"
                   class="form-control @error('min_age') is-invalid @enderror"
                   value="{{ old('min_age', $draft[4]['min_age'] ?? '') }}">
            @error('min_age')<span class="invalid-feedback">{{ $message }}</span>@enderror
        </div>
        <div class="col-md-3">
            <label for="max_age" class="form-label">Max Age</label>
            <input type="number" name="max_age" id="max_age"
                   class="form-control @error('max_age') is-invalid @enderror"
                   value="{{ old('max_age', $draft[4]['max_age'] ?? '') }}">
            @error('max_age')<span class="invalid-feedback">{{ $message }}</span>@enderror
        </div>

        {{-- Height --}}
        <div class="col-md-3">
            <label for="min_height_cm" class="form-label">Min Height (cm)</label>
            <input type="number" name="min_height_cm" id="min_height_cm"
                   class="form-control @error('min_height_cm') is-invalid @enderror"
                   value="{{ old('min_height_cm', $draft[4]['min_height_cm'] ?? '') }}">
            @error('min_height_cm')<span class="invalid-feedback">{{ $message }}</span>@enderror
        </div>
        <div class="col-md-3">
            <label for="max_height_cm" class="form-label">Max Height (cm)</label>
            <input type="number" name="max_height_cm" id="max_height_cm"
                   class="form-control @error('max_height_cm') is-invalid @enderror"
                   value="{{ old('max_height_cm', $draft[4]['max_height_cm'] ?? '') }}">
            @error('max_height_cm')<span class="invalid-feedback">{{ $message }}</span>@enderror
        </div>

        {{-- Marital Status --}}
        <div class="col-md-3">
            <label for="marital_status" class="form-label">Marital Status</label>
            <select name="marital_status" id="marital_status" class="form-select @error('marital_status') is-invalid @enderror">
                <option value="">Select</option>
                @foreach(['Never Married','Divorced','Widowed'] as $ms)
                    <option value="{{ $ms }}" {{ old('marital_status', $draft[4]['marital_status'] ?? '') == $ms ? 'selected' : '' }}>{{ $ms }}</option>
                @endforeach
            </select>
            @error('marital_status')<span class="invalid-feedback">{{ $message }}</span>@enderror
        </div>

        {{-- Accepts Children --}}
        <div class="col-md-3 d-flex align-items-center">
            <div class="form-check mt-3">
                <input type="checkbox" name="accepts_children" id="accepts_children" value="1"
                       class="form-check-input @error('accepts_children') is-invalid @enderror"
                       {{ old('accepts_children', $draft[4]['accepts_children'] ?? false) ? 'checked' : '' }}>
                <label class="form-check-label" for="accepts_children">Accepts Children</label>
                @error('accepts_children')<span class="invalid-feedback">{{ $message }}</span>@enderror
            </div>
        </div>

        {{-- Religion, Caste, Sect --}}
        <div class="col-md-3">
            <label for="religion" class="form-label">Religion</label>
            <select name="religion" id="religion" class="form-select @error('religion') is-invalid @enderror">
                <option value="">Select</option>
                @foreach(['Islam','Hindu','Christian','Buddhist','Other'] as $r)
                    <option value="{{ $r }}" {{ old('religion', $draft[4]['religion'] ?? '') == $r ? 'selected' : '' }}>{{ $r }}</option>
                @endforeach
            </select>
            @error('religion')<span class="invalid-feedback">{{ $message }}</span>@enderror
        </div>
        <div class="col-md-3">
            <label for="caste" class="form-label">Caste</label>
            <input type="text" name="caste" id="caste"
                   class="form-control @error('caste') is-invalid @enderror"
                   value="{{ old('caste', $draft[4]['caste'] ?? '') }}">
            @error('caste')<span class="invalid-feedback">{{ $message }}</span>@enderror
        </div>
        <div class="col-md-3">
            <label for="sect" class="form-label">Sect</label>
            <input type="text" name="sect" id="sect"
                   class="form-control @error('sect') is-invalid @enderror"
                   value="{{ old('sect', $draft[4]['sect'] ?? '') }}">
            @error('sect')<span class="invalid-feedback">{{ $message }}</span>@enderror
        </div>

        {{-- Mother Tongue, Education Level, Profession --}}
        <div class="col-md-3">
            <label for="mother_tongue" class="form-label">Mother Tongue</label>
            <input type="text" name="mother_tongue" id="mother_tongue"
                   class="form-control @error('mother_tongue') is-invalid @enderror"
                   value="{{ old('mother_tongue', $draft[4]['mother_tongue'] ?? '') }}">
            @error('mother_tongue')<span class="invalid-feedback">{{ $message }}</span>@enderror
        </div>
        <div class="col-md-3">
            <label for="education_level" class="form-label">Education Level</label>
            <select name="education_level" id="education_level" class="form-select @error('education_level') is-invalid @enderror">
                <option value="">Select</option>
                @foreach(['High School','BSc','MSc','PhD','Other'] as $edu)
                    <option value="{{ $edu }}" {{ old('education_level', $draft[4]['education_level'] ?? '') == $edu ? 'selected' : '' }}>{{ $edu }}</option>
                @endforeach
            </select>
            @error('education_level')<span class="invalid-feedback">{{ $message }}</span>@enderror
        </div>
        <div class="col-md-3">
            <label for="profession" class="form-label">Profession</label>
            <input type="text" name="profession" id="profession"
                   class="form-control @error('profession') is-invalid @enderror"
                   value="{{ old('profession', $draft[4]['profession'] ?? '') }}">
            @error('profession')<span class="invalid-feedback">{{ $message }}</span>@enderror
        </div>

        {{-- Location: Country, Division, District --}}
        <div class="col-md-3">
            <label for="country" class="form-label">Country</label>
            <select name="country" id="country" class="form-select @error('country') is-invalid @enderror">
                <option value="">Select</option>
                @foreach(['Bangladesh','India','Pakistan','Other'] as $c)
                    <option value="{{ $c }}" {{ old('country', $draft[4]['country'] ?? '') == $c ? 'selected' : '' }}>{{ $c }}</option>
                @endforeach
            </select>
            @error('country')<span class="invalid-feedback">{{ $message }}</span>@enderror
        </div>
        <div class="col-md-3">
            <label for="division" class="form-label">Division</label>
            <input type="text" name="division" id="division"
                   class="form-control @error('division') is-invalid @enderror"
                   value="{{ old('division', $draft[4]['division'] ?? '') }}">
            @error('division')<span class="invalid-feedback">{{ $message }}</span>@enderror
        </div>
        <div class="col-md-3">
            <label for="district" class="form-label">District</label>
            <input type="text" name="district" id="district"
                   class="form-control @error('district') is-invalid @enderror"
                   value="{{ old('district', $draft[4]['district'] ?? '') }}">
            @error('district')<span class="invalid-feedback">{{ $message }}</span>@enderror
        </div>

        {{-- Lifestyle: Diet, Smoking, Drinking --}}
        <div class="col-md-3">
            <label for="diet" class="form-label">Diet</label>
            <select name="diet" id="diet" class="form-select @error('diet') is-invalid @enderror">
                <option value="">Select</option>
                @foreach(['Vegetarian','Non-Vegetarian','Vegan','Other'] as $d)
                    <option value="{{ $d }}" {{ old('diet', $draft[4]['diet'] ?? '') == $d ? 'selected' : '' }}>{{ $d }}</option>
                @endforeach
            </select>
            @error('diet')<span class="invalid-feedback">{{ $message }}</span>@enderror
        </div>
        <div class="col-md-3">
            <label for="smoking" class="form-label">Smoking</label>
            <select name="smoking" id="smoking" class="form-select @error('smoking') is-invalid @enderror">
                <option value="">Select</option>
                @foreach(['Yes','No','Occasionally'] as $s)
                    <option value="{{ $s }}" {{ old('smoking', $draft[4]['smoking'] ?? '') == $s ? 'selected' : '' }}>{{ $s }}</option>
                @endforeach
            </select>
            @error('smoking')<span class="invalid-feedback">{{ $message }}</span>@enderror
        </div>
        <div class="col-md-3">
            <label for="drinking" class="form-label">Drinking</label>
            <select name="drinking" id="drinking" class="form-select @error('drinking') is-invalid @enderror">
                <option value="">Select</option>
                @foreach(['Yes','No','Occasionally'] as $d)
                    <option value="{{ $d }}" {{ old('drinking', $draft[4]['drinking'] ?? '') == $d ? 'selected' : '' }}>{{ $d }}</option>
                @endforeach
            </select>
            @error('drinking')<span class="invalid-feedback">{{ $message }}</span>@enderror
        </div>

        {{-- Annual Income --}}
        <div class="col-md-3">
            <label for="min_annual_income" class="form-label">Min Annual Income</label>
            <input type="number" name="min_annual_income" id="min_annual_income"
                   class="form-control @error('min_annual_income') is-invalid @enderror"
                   value="{{ old('min_annual_income', $draft[4]['min_annual_income'] ?? '') }}">
            @error('min_annual_income')<span class="invalid-feedback">{{ $message }}</span>@enderror
        </div>
        <div class="col-md-3">
            <label for="max_annual_income" class="form-label">Max Annual Income</label>
            <input type="number" name="max_annual_income" id="max_annual_income"
                   class="form-control @error('max_annual_income') is-invalid @enderror"
                   value="{{ old('max_annual_income', $draft[4]['max_annual_income'] ?? '') }}">
            @error('max_annual_income')<span class="invalid-feedback">{{ $message }}</span>@enderror
        </div>

        {{-- Other Preferences --}}
        <div class="col-md-12">
            <label for="other_preferences" class="form-label">Other Preferences</label>
            <textarea name="other_preferences" id="other_preferences" rows="3"
                      class="form-control @error('other_preferences') is-invalid @enderror">{{ old('other_preferences', $draft[4]['other_preferences'] ?? '') }}</textarea>
            @error('other_preferences')<span class="invalid-feedback">{{ $message }}</span>@enderror
        </div>
    </div>
</div>
