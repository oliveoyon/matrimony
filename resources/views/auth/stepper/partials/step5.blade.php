{{-- resources/views/auth/stepper/partials/step5.blade.php --}}
@php
    $draftPhotos = $draft[5]['photos'] ?? [];
@endphp

<div class="step step-5">
    <h5 class="mb-3">Upload Your Photos</h5>

    {{-- File input --}}
    <div class="mb-3">
        <label for="photos" class="form-label">Upload Your Photos</label>
        <input type="file" name="photos[]" id="photos" class="form-control" multiple accept="image/*">
        @error('photos.*') <small class="text-danger">{{ $message }}</small> @enderror
    </div>

    {{-- Captions --}}
    <div class="mb-3">
        <label class="form-label">Photo Captions (optional)</label>
        <div id="photo-captions-container">
            @foreach($draftPhotos as $index => $photo)
                <input type="text" name="photo_captions[{{ $index }}]" class="form-control mb-2"
                       placeholder="Caption (optional)" value="{{ $photo['caption'] ?? '' }}">
            @endforeach
        </div>
    </div>

    {{-- Primary photo --}}
    <div class="mb-3">
        <label class="form-label">Select Primary Photo</label>
        <div id="primary-photo-container" class="d-flex flex-wrap gap-2">
            @foreach($draftPhotos as $index => $photo)
                <div class="position-relative text-center">
                    @if(isset($photo['tmp_path']))
                        <img src="{{ asset('storage/' . $photo['tmp_path']) }}" 
                             style="width:100px;height:100px;object-fit:cover;" class="rounded border">
                    @endif
                    <input type="radio" name="primary_photo" value="{{ $index }}"
                           class="form-check-input position-absolute top-0 start-0 m-1"
                           {{ ($photo['is_primary'] ?? false) ? 'checked' : '' }}>
                </div>
            @endforeach
        </div>
        @error('primary_photo') <small class="text-danger">{{ $message }}</small> @enderror
    </div>
</div>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const photosInput = document.getElementById('photos');
    const captionsContainer = document.getElementById('photo-captions-container');
    const primaryContainer = document.getElementById('primary-photo-container');

    photosInput.addEventListener('change', function() {
        const files = Array.from(this.files);

        // Get existing photos from PHP draft
        const existingPhotos = @json($draftPhotos);

        // Reset containers
        captionsContainer.innerHTML = '';
        primaryContainer.innerHTML = '';

        // Render existing photos first
        existingPhotos.forEach((photo, index) => {
            // Caption
            const captionInput = document.createElement('input');
            captionInput.type = 'text';
            captionInput.name = `photo_captions[${index}]`;
            captionInput.placeholder = 'Caption (optional)';
            captionInput.classList.add('form-control', 'mb-2');
            captionInput.value = photo.caption || '';
            captionsContainer.appendChild(captionInput);

            // Photo preview + radio
            const div = document.createElement('div');
            div.classList.add('position-relative', 'text-center');

            if (photo.tmp_path) {
                const img = document.createElement('img');
                img.src = `{{ asset('storage') }}/${photo.tmp_path}`;
                img.style.width = '100px';
                img.style.height = '100px';
                img.style.objectFit = 'cover';
                img.classList.add('rounded', 'border');
                div.appendChild(img);
            }

            const radio = document.createElement('input');
            radio.type = 'radio';
            radio.name = 'primary_photo';
            radio.value = index;
            radio.classList.add('form-check-input', 'position-absolute', 'top-0', 'start-0', 'm-1');
            if (photo.is_primary) radio.checked = true;

            div.appendChild(radio);
            primaryContainer.appendChild(div);
        });

        // Render new uploaded files
        files.forEach((file, i) => {
            const index = existingPhotos.length + i;

            // Caption
            const captionInput = document.createElement('input');
            captionInput.type = 'text';
            captionInput.name = `photo_captions[${index}]`;
            captionInput.placeholder = 'Caption (optional)';
            captionInput.classList.add('form-control', 'mb-2');
            captionsContainer.appendChild(captionInput);

            // Photo preview + radio
            const div = document.createElement('div');
            div.classList.add('position-relative', 'text-center');

            const img = document.createElement('img');
            img.src = URL.createObjectURL(file);
            img.style.width = '100px';
            img.style.height = '100px';
            img.style.objectFit = 'cover';
            img.classList.add('rounded', 'border');

            const radio = document.createElement('input');
            radio.type = 'radio';
            radio.name = 'primary_photo';
            radio.value = index;
            radio.classList.add('form-check-input', 'position-absolute', 'top-0', 'start-0', 'm-1');

            div.appendChild(img);
            div.appendChild(radio);
            primaryContainer.appendChild(div);
        });
    });
});
</script>
@endpush
