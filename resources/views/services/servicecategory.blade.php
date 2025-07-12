@extends('layouts.master')

@section('title', 'Explore ' . ucfirst(str_replace('-', ' ', $category)) . ' Services')
@section('meta_description', 'Discover high-quality services in ' . ucfirst(str_replace('-', ' ', $category)) . ' tailored to your needs.')

@section('content')

@php
  $bannerPath = 'assets/images/categories/' . $category . '.jpg';
  $bannerExists = file_exists(public_path($bannerPath));
@endphp

<!-- Hero Section -->
<section class="bg-black text-white py-5" style="background: url('{{ asset($bannerExists ? $bannerPath : 'assets/images/service-banner.jpg') }}') center/cover no-repeat;">
  <div class="container text-center">
    <h1 class="display-4 fw-bold">Explore {{ ucfirst(str_replace('-', ' ', $category)) }}</h1>
    <p class="lead">Premium services tailored to meet your business goals.</p>
  </div>
</section>

<div class="container py-5">
  <h2 class="mb-4 text-center">Our Services in {{ ucfirst(str_replace('-', ' ', $category)) }}</h2>

  <div class="row">
    @forelse($items as $item)
      <div class="col-md-6 col-lg-4 mb-4">
        <div class="card h-100 shadow-sm border-0">
          <img 
            src="{{ asset('assets/images/services/' . ($item->image ?? 'placeholder.png')) }}" 
            onerror="this.onerror=null; this.src='{{ asset('assets/images/placeholder.png') }}';" 
            class="card-img-top" 
            alt="Image for {{ $item->title ?? 'Service' }}" 
            style="height: 200px; object-fit: cover;"
          >
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">{{ $item->title ?? 'Untitled' }}</h5>
            <p class="card-text text-muted">{{ \Illuminate\Support\Str::limit($item->desc ?? 'No description available.', 100) }}</p>
            <p class="fw-bold">
                Price: {{ $item->price_formatted ?? 'N/A' }} {{ $item->currency ?? '' }}
            </p>


            <a 
              href="{{ route('services.detail', ['subcategory' => $item->slug ?? '']) }}" 
              class="btn btn-outline-primary mt-auto w-100"
            >
              View Details & Purchase
            </a>
          </div>
        </div>
      </div>
    @empty
      <div class="col-12">
        <div class="alert alert-warning text-center">
          No services found in this category.<br>
          <a href="{{ route('services') }}" class="btn btn-sm btn-outline-secondary mt-2">Browse All Services</a>
        </div>
      </div>
    @endforelse
  </div>

  @if($items->hasPages())
    <div class="d-flex justify-content-center mt-4">
      {{ $items->links() }}
    </div>
  @endif
</div>

@endsection
