{{-- resources/views/auth/stepper/register-stepper.blade.php --}}
@extends('layouts.front')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h4 class="mb-3 text-center">Create Your Profile</h4>

                    {{-- Progress Bar --}}
                    <div class="mb-4">
                        <div class="progress" style="height: 8px;">
                            <div class="progress-bar" role="progressbar" style="width: 0%">
                            </div>
                        </div>
                        <small class="text-muted">Step {{ $step }} of 7</small>
                    </div>

                    {{-- Stepper Form --}}
                    <form method="POST" action="{{ route('register.step.store', ['step' => $step]) }}"
                          enctype="multipart/form-data" id="stepper-form">
                        @csrf

                        {{-- Step Partial Includes --}}
                        @if ($step == 1)
                            @include('auth.stepper.partials.step1')
                        @elseif ($step == 2)
                            @include('auth.stepper.partials.step2')
                        @elseif ($step == 3)
                            @include('auth.stepper.partials.step3')
                        @elseif ($step == 4)
                            @include('auth.stepper.partials.step4')
                        @elseif ($step == 5)
                            @include('auth.stepper.partials.step5')
                        @elseif ($step == 6)
                            @include('auth.stepper.partials.step6')
                        @elseif ($step == 7)
                            @include('auth.stepper.partials.step7')
                        @endif

                        {{-- Navigation Buttons --}}
                        <div class="d-flex justify-content-between mt-4">
                            <a href="{{ $step > 1 ? route('register.step.show', ['step' => $step - 1]) : url('/') }}"
                               class="btn btn-outline-secondary">Previous</a>

                            <button type="submit" id="nextBtn" class="btn btn-primary">
                                @if ($step < 7)
                                    Next
                                @else
                                    Complete Registration
                                @endif
                            </button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    .progress {
        background-color: #e9ecef;
    }
    .progress-bar {
        background-color: #0d6efd;
        width: 0; /* start from 0 for animation */
        transition: width 0.6s ease;
    }
</style>
@endpush

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Animate progress bar
        document.querySelector('.progress-bar').style.width = "{{ ($step / 7) * 100 }}%";

        // Smooth scroll to top on step load
        window.scrollTo({ top: 0, behavior: 'smooth' });

        // Disable double-click and show loader
        const form = document.getElementById('stepper-form');
        const nextBtn = document.getElementById('nextBtn');

        form.addEventListener('submit', function(e) {
            nextBtn.disabled = true;
            nextBtn.innerHTML = 'Please wait...';
        });

        // Step 7: enable submit only if terms accepted
        @if($step == 7)
        const acceptTerms = document.getElementById('accept_terms');
        if (acceptTerms) {
            nextBtn.disabled = !acceptTerms.checked;
            acceptTerms.addEventListener('change', function() {
                nextBtn.disabled = !this.checked;
            });
        }
        @endif
    });
</script>
@endpush
