@extends('layouts.master')

@section('title', 'Subscribe Now | Sky Link')
@section('description', 'Subscribe to one of our premium service packages.')

@push('styles')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
@endpush

@section('content')

<section class="py-5" style="background: #f0f8ff;">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8 col-lg-6">
        <div class="card shadow-lg rounded-4 border-0">
          <div class="card-body">
            <h2 class="mb-4 text-primary text-center">Subscribe to <span class="fw-bold">{{ ucfirst($plan ?? 'Premium') }} Plan</span></h2>
            <form method="POST" action="{{ url('/subscribe/process') }}">
              @csrf
              <input type="hidden" name="plan" value="{{ $plan }}">
              <div class="mb-3">
                <label class="form-label">Full Name</label>
                <input type="text" class="form-control" name="name" placeholder="Your full name" required>
              </div>
              <div class="mb-3">
                <label class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" placeholder="you@example.com" required>
              </div>
              <div class="mb-3">
                <label class="form-label">Phone Number</label>
                <input type="tel" class="form-control" name="phone" placeholder="+1 234 567 890" required>
              </div>
              <div class="mb-3">
                <label class="form-label">Additional Notes</label>
                <textarea class="form-control" name="notes" rows="3" placeholder="Any specific requests?"></textarea>
              </div>
              <button type="submit" class="btn btn-primary w-100">Complete Subscription</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
