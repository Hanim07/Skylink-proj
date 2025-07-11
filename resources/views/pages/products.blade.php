@extends('layouts.master')

@section('content')
<div class="container my-5">
    <h1 class="text-center mb-4">Explore Our Products</h1>

    <!-- Search and Filter Controls -->
    <div class="row mb-4 g-3">
        <div class="col-md-6">
            <input type="text" id="searchInput" class="form-control form-control-lg shadow-sm" placeholder="🔍 Search products...">
        </div>
        <div class="col-md-6">
            <select id="categoryFilter" class="form-select form-select-lg shadow-sm">
                <option value="all">📂 All Categories</option>
                @foreach ($products as $category => $items)
                    <option value="{{ $category }}">{{ ucfirst(str_replace('-', ' ', $category)) }}</option>
                @endforeach
            </select>
        </div>
    </div>

    <!-- Product Listing -->
    <div id="productList">
        @foreach ($products as $category => $items)
            @foreach ($items as $product)
                <div class="product-item row align-items-center mb-4 p-4 rounded-4 border shadow-sm bg-white"
                     data-category="{{ $category }}"
                     data-name="{{ strtolower($product['name']) }}">
                    <div class="col-md-3 text-center">
                        <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}" class="img-fluid rounded-3 product-img">
                    </div>
                    <div class="col-md-7">
                        <h4 class="mb-1">{{ $product['name'] }}</h4>
                        <p class="text-muted mb-2">{{ $product['description'] }}</p>
                        <ul class="list-unstyled small">
                            @foreach ($product['features'] as $feature)
                                <li><i class="bi bi-check2-circle text-success me-2"></i>{{ $feature }}</li>
                            @endforeach
                        </ul>
                        <span class="badge bg-info fs-6 mt-2 text-dark">ETB {{ number_format($product['price']) }}</span>
                    </div>
                    <div class="col-md-2 text-end d-flex flex-column align-items-end justify-content-center">
                        <a href="{{ url('products/'.$category.'/'.$product['slug']) }}" 
                           class="btn btn-primary btn-lg fw-bold w-100 d-flex align-items-center justify-content-center gap-2 shadow detail-btn" 
                           title="View Product Details">
                            🔎 View Details
                        </a>
                    </div>
                </div>
            @endforeach
        @endforeach
    </div>
</div>

<!-- Custom Styles -->
<style>
    .product-img {
        max-height: 160px;
        transition: transform 0.4s ease;
    }
    .product-item:hover .product-img {
        transform: scale(1.05);
    }

    .detail-btn {
        transition: all 0.3s ease;
        font-size: 1rem;
        padding: 0.6rem 1rem;
        border-radius: 1rem;
    }

    .detail-btn:hover {
        background-color: #0a58ca;
        color: #fff;
    }
</style>

<!-- JavaScript for Filtering & Search -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const searchInput = document.getElementById('searchInput');
        const categoryFilter = document.getElementById('categoryFilter');
        const products = document.querySelectorAll('.product-item');

        function filterProducts() {
            const searchTerm = searchInput.value.toLowerCase();
            const selectedCategory = categoryFilter.value;

            products.forEach(item => {
                const name = item.getAttribute('data-name');
                const category = item.getAttribute('data-category');

                const matchesSearch = name.includes(searchTerm);
                const matchesCategory = selectedCategory === 'all' || selectedCategory === category;

                if (matchesSearch && matchesCategory) {
                    item.style.display = 'flex';
                } else {
                    item.style.display = 'none';
                }
            });
        }

        searchInput.addEventListener('input', filterProducts);
        categoryFilter.addEventListener('change', filterProducts);
    });
</script>
@endsection
