{{-- resources/views/auth/stepper/partials/step2.blade.php --}}
<div class="step step-2">
    <h5 class="mb-3">Personal Profile Information</h5>

    <div class="row g-3">
        {{-- First Name --}}
        <div class="col-md-6">
            <label for="first_name" class="form-label">First Name <span class="text-danger">*</span></label>
            <input type="text" name="first_name" id="first_name"
                   class="form-control @error('first_name') is-invalid @enderror"
                   value="{{ old('first_name', $draft[2]['first_name'] ?? '') }}" required>
            @error('first_name')
            <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        {{-- Last Name --}}
        <div class="col-md-6">
            <label for="last_name" class="form-label">Last Name</label>
            <input type="text" name="last_name" id="last_name"
                   class="form-control @error('last_name') is-invalid @enderror"
                   value="{{ old('last_name', $draft[2]['last_name'] ?? '') }}">
            @error('last_name')
            <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        {{-- Gender --}}
        <div class="col-md-4">
            <label for="gender" class="form-label">Gender <span class="text-danger">*</span></label>
            <select name="gender" id="gender" class="form-select @error('gender') is-invalid @enderror" required>
                <option value="">Select Gender</option>
                @foreach(['male'=>'Male','female'=>'Female','other'=>'Other'] as $key=>$val)
                    <option value="{{ $key }}" {{ (old('gender', $draft[2]['gender'] ?? '') == $key) ? 'selected' : '' }}>{{ $val }}</option>
                @endforeach
            </select>
            @error('gender')
            <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        {{-- Date of Birth --}}
        <div class="col-md-4">
            <label for="dob" class="form-label">Date of Birth</label>
            <input type="date" name="dob" id="dob"
                   class="form-control @error('dob') is-invalid @enderror"
                   value="{{ old('dob', $draft[2]['dob'] ?? '') }}">
            @error('dob')
            <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        {{-- Height --}}
        <div class="col-md-2">
            <label for="height_cm" class="form-label">Height (cm)</label>
            <input type="number" name="height_cm" id="height_cm"
                   class="form-control @error('height_cm') is-invalid @enderror"
                   value="{{ old('height_cm', $draft[2]['height_cm'] ?? '') }}">
            @error('height_cm')
            <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        {{-- Weight --}}
        <div class="col-md-2">
            <label for="weight_kg" class="form-label">Weight (kg)</label>
            <input type="number" name="weight_kg" id="weight_kg"
                   class="form-control @error('weight_kg') is-invalid @enderror"
                   value="{{ old('weight_kg', $draft[2]['weight_kg'] ?? '') }}">
            @error('weight_kg')
            <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        {{-- Marital Status --}}
        <div class="col-md-4">
            <label for="marital_status" class="form-label">Marital Status</label>
            <select name="marital_status" id="marital_status" class="form-select @error('marital_status') is-invalid @enderror">
                <option value="">Select</option>
                @foreach(['Never Married','Divorced','Widowed'] as $status)
                    <option value="{{ $status }}" {{ (old('marital_status', $draft[2]['marital_status'] ?? '') == $status) ? 'selected' : '' }}>{{ $status }}</option>
                @endforeach
            </select>
            @error('marital_status')
            <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        {{-- Has Children --}}
        <div class="col-md-4 d-flex align-items-center">
            <div class="form-check mt-2">
                <input type="checkbox" name="has_children" id="has_children" class="form-check-input"
                       value="1" {{ old('has_children', $draft[2]['has_children'] ?? false) ? 'checked' : '' }}>
                <label for="has_children" class="form-check-label">Has Children</label>
            </div>
        </div>

        {{-- Blood Group --}}
        <div class="col-md-4">
            <label for="blood_group" class="form-label">Blood Group</label>
            <select name="blood_group" id="blood_group" class="form-select @error('blood_group') is-invalid @enderror">
                <option value="">Select</option>
                @foreach(['A+','A-','B+','B-','AB+','AB-','O+','O-'] as $bg)
                    <option value="{{ $bg }}" {{ (old('blood_group', $draft[2]['blood_group'] ?? '') == $bg) ? 'selected' : '' }}>{{ $bg }}</option>
                @endforeach
            </select>
            @error('blood_group')
            <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        {{-- Disability --}}
        <div class="col-md-6">
            <label for="disability" class="form-label">Disability</label>
            <input type="text" name="disability" id="disability"
                   class="form-control @error('disability') is-invalid @enderror"
                   value="{{ old('disability', $draft[2]['disability'] ?? '') }}">
            @error('disability')
            <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        {{-- Eye Color --}}
        <div class="col-md-6">
            <label for="eye_color" class="form-label">Eye Color</label>
            <select name="eye_color" id="eye_color" class="form-select @error('eye_color') is-invalid @enderror">
                <option value="">Select</option>
                @foreach(['Brown','Blue','Green','Hazel','Gray','Other'] as $color)
                    <option value="{{ $color }}" {{ (old('eye_color', $draft[2]['eye_color'] ?? '') == $color) ? 'selected' : '' }}>{{ $color }}</option>
                @endforeach
            </select>
            @error('eye_color')
            <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        {{-- Hair Color --}}
        <div class="col-md-6">
            <label for="hair_color" class="form-label">Hair Color</label>
            <select name="hair_color" id="hair_color" class="form-select @error('hair_color') is-invalid @enderror">
                <option value="">Select</option>
                @foreach(['Black','Brown','Blonde','Red','Gray','Other'] as $color)
                    <option value="{{ $color }}" {{ (old('hair_color', $draft[2]['hair_color'] ?? '') == $color) ? 'selected' : '' }}>{{ $color }}</option>
                @endforeach
            </select>
            @error('hair_color')
            <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        {{-- Complexion --}}
        <div class="col-md-6">
            <label for="complexion" class="form-label">Complexion</label>
            <select name="complexion" id="complexion" class="form-select @error('complexion') is-invalid @enderror">
                <option value="">Select</option>
                @foreach(['Fair','Medium','Olive','Brown','Dark'] as $c)
                    <option value="{{ $c }}" {{ (old('complexion', $draft[2]['complexion'] ?? '') == $c) ? 'selected' : '' }}>{{ $c }}</option>
                @endforeach
            </select>
            @error('complexion')
            <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
    </div>
</div>
