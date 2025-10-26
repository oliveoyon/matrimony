{{-- resources/views/auth/stepper/partials/step7.blade.php --}}
<div class="step step-7">
    <h5 class="mb-3">Confirmation & Terms</h5>

    <div class="mb-3 form-check">
        <input type="checkbox" name="accept_terms" id="accept_terms" value="1"
               class="form-check-input @error('accept_terms') is-invalid @enderror"
               {{ old('accept_terms', $draft[7]['accept_terms'] ?? false) ? 'checked' : '' }}>
        <label for="accept_terms" class="form-check-label">
            I accept the <a href="#">Terms & Conditions</a> and Privacy Policy
        </label>
        @error('accept_terms')
            <span class="invalid-feedback">{{ $message }}</span>
        @enderror
    </div>

    <div class="mb-3">
        <button type="submit" class="btn btn-primary">Complete Registration</button>
    </div>
</div>
