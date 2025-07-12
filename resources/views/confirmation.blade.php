@extends('layouts.app')
@section('title', 'contact')
@section('content')
    <!-- Page content-->
    <section class="py-5">
        <div class="container px-5">
            <!-- Contact form-->
            <div class="bg-light rounded-4 py-5 px-4 px-md-5">
                <div class="text-center mb-5">
                    <div class="feature bg-primary bg-gradient-primary-to-secondary text-white rounded-3 mb-3"><i
                            class="bi bi-envelope"></i></div>
                     <h1 class="fw-bolder">Confirmation</h1>
                    <p class="lead fw-normal text-muted mb-0">Your message has been submitted successfully!</p>
                </div>
                <div class="row gx-5 justify-content-center">
                    <div class="container">
                        <h2>Message Submitted Successfully</h2>

                        @if ($data)
                            <p><strong>Name:</strong> {{ $data->name }}</p>
                            <p><strong>Email:</strong> {{ $data->email }}</p>
                            <p><strong>Message:</strong> {{ $data->message }}</p>
                        @else
                            <p>No data found.</p>
                        @endif

                        <a href="{{ route('contact') }}">Back to Contact</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
