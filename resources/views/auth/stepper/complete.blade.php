@extends('layouts.front')

@section('content')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
            <div class="card shadow-sm p-4">
                <h3 class="mb-3">Registration Complete!</h3>
                <p>Thank you for completing your registration. Your profile is now created.</p>
                <a href="{{ route('home') }}" class="btn btn-primary mt-3">Go to Dashboard</a>
            </div>
        </div>
    </div>
</div>
@endsection
