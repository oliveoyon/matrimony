{{-- resources/views/auth/stepper/partials/step6.blade.php --}}
<div class="step step-6">
    <h5 class="mb-3">Additional Information</h5>

    <div class="mb-3">
        <label for="additional_info" class="form-label">Anything else you want to share</label>
        <textarea name="additional_info" id="additional_info" rows="4"
                  class="form-control @error('additional_info') is-invalid @enderror">{{ old('additional_info', $draft[6]['additional_info'] ?? '') }}</textarea>
        @error('additional_info')
            <span class="invalid-feedback">{{ $message }}</span>
        @enderror
    </div>
</div>
