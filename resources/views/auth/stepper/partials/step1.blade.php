{{-- resources/views/auth/stepper/partials/step1.blade.php --}}
<div class="step step-1">
    <h5 class="mb-3">Account Information</h5>

    {{-- Display general errors --}}
    @if ($errors->has('general'))
        <div class="alert alert-danger">{{ $errors->first('general') }}</div>
    @endif

    <div class="row g-3">
        {{-- Full Name --}}
        <div class="col-md-6">
            <label for="name" class="form-label">Full Name <span class="text-danger">*</span></label>
            <input type="text" name="name" id="name"
                   class="form-control @error('name') is-invalid @enderror"
                   value="{{ old('name', $draft[1]['name'] ?? '') }}" required>
            @error('name')
            <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        {{-- Email --}}
        <div class="col-md-6">
            <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
            <input type="email" name="email" id="email"
                   class="form-control @error('email') is-invalid @enderror"
                   value="{{ old('email', $draft[1]['email'] ?? '') }}" required>
            @error('email')
            <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="row g-3 mt-3">
        {{-- Phone --}}
        <div class="col-md-6">
            <label for="phone" class="form-label">Phone Number <span class="text-danger">*</span></label>
            <input type="text" name="phone" id="phone"
                   class="form-control @error('phone') is-invalid @enderror"
                   value="{{ old('phone', $draft[1]['phone'] ?? '') }}" required>
            @error('phone')
            <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>

        {{-- Password --}}
        <div class="col-md-6">
            <label for="password" class="form-label">Password <span class="text-danger">*</span></label>
            <input type="password" name="password" id="password"
                   class="form-control @error('password') is-invalid @enderror" required>
            @error('password')
            <span class="invalid-feedback">{{ $message }}</span>
            @enderror
        </div>
    </div>

    <div class="row g-3 mt-3">
        {{-- Confirm Password --}}
        <div class="col-md-6">
            <label for="password_confirmation" class="form-label">Confirm Password <span class="text-danger">*</span></label>
            <input type="password" name="password_confirmation" id="password_confirmation"
                   class="form-control" required>
        </div>
    </div>

    {{-- Hidden fields --}}
    <input type="hidden" name="role" value="user">
    <input type="hidden" name="is_admin" value="0">
    <input type="hidden" name="is_active" value="0">
    <input type="hidden" name="profile_completed" value="0">
</div>
