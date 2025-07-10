@extends('layouts.master')


@push('styles')
<style>

  /* Category Items */
.category-item {
  cursor: pointer;
  transition: transform 0.3s ease;
}

.category-item:hover {
  transform: translateY(-5px);
}

.category-icon img {
  width: 120px;
  height: 120px;
  object-fit: cover;
  border: 3px solid #f8f9fa;
  transition: border-color 0.3s ease;
}

.category-item:hover .category-icon img {
  border-color: #007bff;
}
  .nav-pills .nav-link {
    border-radius: 50rem;
    font-weight: 500;
    padding: 0.5rem 1.2rem;
    background-color: #f3f4f6;
    color: #111827;
    transition: background-color 0.3s ease;
  }
  .nav-pills .nav-link.active {
    background: linear-gradient(to right, #4f46e5, #3b82f6);
    color: white;
  }
  .nav-pills .nav-link:hover:not(.active) {
    background-color: #e5e7eb;
  }
  .btn-gradient-primary {
    background: linear-gradient(to right, #4f46e5, #3b82f6);
    color: white;
    border: none;
    font-weight: 500;
    transition: opacity 0.3s ease;
  }
  .btn-gradient-primary:hover {
    opacity: 0.9;
  }
  .hover-shadow:hover {
    transform: translateY(-5px);
    box-shadow: 0 12px 20px rgba(0, 0, 0, 0.1);
    transition: all 0.3s ease-in-out;
  }
</style>
@endpush

@section('content')
<header class="bg-white shadow-sm">
        <div class="container">
            <!-- Search Bar Row -->
            <div class="row align-items-center py-3">
                <div class="col-6">
                    <div class="search-container">
                        <div class="input-group">
                            <span class="input-group-text bg-transparent border-end-0">
                                <i class="fas fa-search text-primary"></i>
                            </span>
                            <input type="text" id="searchInput" class="form-control border-start-0" placeholder="Search essentials, groceries and more...">
                            <div id="searchResults" class="search-results"></div>

                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Navigation Dropdowns Row -->
            <div class="row">
                <div class="col-12">
                    <nav class="navbar navbar-expand-lg navbar-light justify-content-end pb-3">
                        <div class="navbar-nav d-flex flex-row">
                            <div class="nav-item dropdown me-3">
                                <a class="nav-link dropdown-toggle text-dark" href="#" role="button" data-bs-toggle="dropdown">
                                    Industry Solutions
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end custom-dropdown">
                                    <li><a class="dropdown-item" href="#"><i class="fas fa-apple-alt me-2"></i>E tourism</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="fas fa-carrot me-2"></i>Smart E-ticketing</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="fas fa-bread-slice me-2"></i>Fleet Management</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="fas fa-fish me-2"></i>RealState Management</a></li>
                                </ul>
                            </div>
                            <div class="nav-item dropdown me-3">
                                <a class="nav-link dropdown-toggle text-dark" href="#" role="button" data-bs-toggle="dropdown">
                                    Business & Office Tools
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end custom-dropdown">
                                    <li><a class="dropdown-item" href="#"><i class="fas fa-mobile-alt me-2"></i>ERP Full Module</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="fas fa-laptop me-2"></i>Document Management</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="fas fa-tv me-2"></i>QMS</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="fas fa-camera me-2"></i>Event Management</a></li>
                                </ul>
                            </div>
                            <div class="nav-item dropdown me-3">
                                <a class="nav-link dropdown-toggle text-dark" href="#" role="button" data-bs-toggle="dropdown">
                                    Web Application
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end custom-dropdown">
                                    <li><a class="dropdown-item" href="#"><i class="fas fa-tools me-2"></i>E commerce</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="fas fa-paint-brush me-2"></i>Web Design </a></li>
                                    <li><a class="dropdown-item" href="#"><i class="fas fa-lightbulb me-2"></i>Graphics Design</a></li>
                                </ul>
                            </div>
                            <div class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle text-dark" href="#" role="button" data-bs-toggle="dropdown">
                                    Digital Services
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end custom-dropdown">
                                    <li><a class="dropdown-item" href="#"><i class="fas fa-football-ball me-2"></i>E-service</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="fas fa-gamepad me-2"></i>Support Systems</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="fas fa-child me-2"></i>System Maintenance</a></li>
                                    <li><a class="dropdown-item" href="#"><i class="fas fa-suitcase me-2"></i>Security</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>

    <!-- Smartphones Section -->
    <section class="py-5">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h3 class="mb-1">Grab the best deal from our products</h3>
                </div>
                <a href="#" class="text-primary text-decoration-none">View All <i class="fas fa-chevron-right"></i></a>
            </div>
        
            <!-- Search Results Container -->
            <div id="searchProductsContainer" class="row" style="display: none;">
                <div class="col-6 mb-3">
                    <h5 class="text-muted">Search Results:</h5>
                </div>
            </div>
        
            <!-- Default Products -->
            <div id="defaultProducts" class="row">
                
                <div class="col-lg-3 col-md-3 col-sm-6 mb-4">
                    <div class="product-card" data-name="CCTV camera">
                        <div class="product-image">
                            <img src="{{ asset('assets/images/cctv3.jfif') }}" alt="CCTV camera" class="img-fluid">
                        </div>
                        <div class="product-info">
                            <h6 class="product-title">Realistic security cameras</h6>
                            <p class="product-price">16999</p>
                            <button class="btn btn-primary btn-sm add-to-cart-btn">Add to cart</button>
                        </div>
                    </div>
                </div>
            
                <div class="col-lg-3 col-md-3 col-sm-6 mb-4">
                    <div class="product-card" data-name="Atteendance Tracker">
                        <div class="product-image">
                            <img src="{{ asset('assets/images/attendance.jfif') }}" alt="Atteendance Tracker" class="img-fluid">
                        </div>
                        <div class="product-info">
                            <h6 class="product-title">Attendance tracking machines</h6>
                            <p class="product-price">31999 </p>
                            <button class="btn btn-primary btn-sm add-to-cart-btn">Add to cart</button>
                        </div>
                    </div>
                </div>
            
                <div class="col-lg-3 col-md-3 col-sm-6 mb-4">
                    <div class="product-card" data-name="Cctv cameras">
                        <div class="product-image">
                            <img src="{{ asset('assets/images/cctv.jfif') }}" alt="cctv camera" class="img-fluid">
                        </div>
                        <div class="product-info">
                            <h6 class="product-title">Cctv Cameras</h6>
                            <p class="product-price">67999</p>
                            <button class="btn btn-primary btn-sm add-to-cart-btn">Add to cart</button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-3 col-sm-6 mb-4">
                    <div class="product-card" data-name="E commerce">
                        <div class="product-image">
                            <img src="{{ asset('assets/images/ecommerce.jfif') }}" alt="E commerce" class="img-fluid">
                        </div>
                        <div class="product-info">
                            <h6 class="product-title">E-commerce web application</h6>
                            <p class="product-price">12999</p>
                            <button class="btn btn-primary btn-sm add-to-cart-btn">Add to cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Categories Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h3 class="mb-1">Shop From <span class="text-primary">Top Categories</span></h3>
                </div>
                <a href="#" class="text-primary text-decoration-none">View All <i class="fas fa-chevron-right"></i></a>
            </div>
            
            <div class="row text-center">
                <div class="col-lg-2 col-md-4 col-6 mb-4">
                    <div class="category-item">
                        <div class="category-icon">
                            <img src="https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?w=80&h=80&fit=crop" alt="Mobile" class="rounded-circle">
                        </div>
                        <h6 class="mt-3">Business Tools</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6 mb-4">
                    <div class="category-item">
                        <div class="category-icon">
                            <img src="https://images.unsplash.com/photo-1550009158-9ebf69173e03?w=80&h=80&fit=crop" alt="Electronics" class="rounded-circle">
                        </div>
                        <h6 class="mt-3">Industry Solutions</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6 mb-4">
                    <div class="category-item">
                        <div class="category-icon">
                            <img src="https://images.unsplash.com/photo-1586023492125-27b2c045efd7?w=80&h=80&fit=crop" alt="Furniture" class="rounded-circle">
                        </div>
                        <h6 class="mt-3">Web Application</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6 mb-4">
                    <div class="category-item">
                        <div class="category-icon">
                            <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=80&h=80&fit=crop" alt="Watches" class="rounded-circle">
                        </div>
                        <h6 class="mt-3">Office Tools</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6 mb-4">
                    <div class="category-item">
                        <div class="category-icon">
                            <img src="https://images.unsplash.com/photo-1578662996442-48f60103fc96?w=80&h=80&fit=crop" alt="Decor" class="rounded-circle">
                        </div>
                        <h6 class="mt-3">Mobile Applications</h6>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4 col-6 mb-4">
                    <div class="category-item">
                        <div class="category-icon">
                            <img src="https://images.unsplash.com/photo-1515562141207-7a88fb7ce338?w=80&h=80&fit=crop" alt="Accessories" class="rounded-circle">
                        </div>
                        <h6 class="mt-3">Digital Services</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Top Electronics Brands - Infinite Slider -->
    <section class="py-5">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <h3 class="mb-1">Top <span class="text-primary">Electronics Brands</span></h3>
                </div>
                <a href="#" class="text-primary text-decoration-none">View All <i class="fas fa-chevron-right"></i></a>
            </div>
            
            <div class="brands-slider-container">
                <div class="brands-slider">
                    <div class="brand-card">
                        <div class="brand-header">
                            <span class="brand-label">IPHONE</span>
                        </div>
                        <div class="brand-content">
                            <div class="brand-logo">
                                <i class="fab fa-apple fa-3x text-white"></i>
                            </div>
                            <div class="brand-image">
                                <img src="https://images.unsplash.com/photo-1592750475338-74b7b21085ab?w=150&h=200&fit=crop" alt="iPhone" class="img-fluid">
                            </div>
                        </div>
                        <div class="brand-offer">
                            <h5 class="text-white mb-0">UP to 80% OFF</h5>
                        </div>
                    </div>
                    
                    <div class="brand-card realme">
                        <div class="brand-header">
                            <span class="brand-label">REALME</span>
                        </div>
                        <div class="brand-content">
                            <div class="brand-logo">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7a/Realme_logo.svg/200px-Realme_logo.svg.png" alt="Realme" class="realme-logo">
                            </div>
                            <div class="brand-image">
                                <img src="https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?w=150&h=200&fit=crop" alt="Realme Phone" class="img-fluid">
                            </div>
                        </div>
                        <div class="brand-offer">
                            <h5 class="text-dark mb-0">UP to 80% OFF</h5>
                        </div>
                    </div>
                    
                    <div class="brand-card xiaomi">
                        <div class="brand-header">
                            <span class="brand-label">XIAOMI</span>
                        </div>
                        <div class="brand-content">
                            <div class="brand-logo">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/29/Xiaomi_logo.svg/200px-Xiaomi_logo.svg.png" alt="Xiaomi" class="xiaomi-logo">
                            </div>
                            <div class="brand-image">
                                <img src="https://images.unsplash.com/photo-1574944985070-8f3ebc6b79d2?w=150&h=200&fit=crop" alt="Xiaomi Phone" class="img-fluid">
                            </div>
                        </div>
                        <div class="brand-offer">
                            <h5 class="text-white mb-0">Up to 80% OFF</h5>
                        </div>
                    </div>
                    
                    <div class="brand-card oneplus">
                        <div class="brand-header">
                            <span class="brand-label">ONEPLUS</span>
                        </div>
                        <div class="brand-content">
                            <div class="brand-logo">
                                <h3 class="text-white mb-0">1+</h3>
                            </div>
                            <div class="brand-image">
                                <img src="https://images.unsplash.com/photo-1556656793-08538906a9f8?w=150&h=200&fit=crop" alt="OnePlus Phone" class="img-fluid">
                            </div>
                        </div>
                        <div class="brand-offer">
                            <h5 class="text-white mb-0">UP to 80% OFF</h5>
                        </div>
                    </div>

                    <!-- Duplicate cards for infinite scroll -->
                    <div class="brand-card">
                        <div class="brand-header">
                            <span class="brand-label">IPHONE</span>
                        </div>
                        <div class="brand-content">
                            <div class="brand-logo">
                                <i class="fab fa-apple fa-3x text-white"></i>
                            </div>
                            <div class="brand-image">
                                <img src="https://images.unsplash.com/photo-1592750475338-74b7b21085ab?w=150&h=200&fit=crop" alt="iPhone" class="img-fluid">
                            </div>
                        </div>
                        <div class="brand-offer">
                            <h5 class="text-white mb-0">UP to 80% OFF</h5>
                        </div>
                    </div>
                    
                    <div class="brand-card realme">
                        <div class="brand-header">
                            <span class="brand-label">REALME</span>
                        </div>
                        <div class="brand-content">
                            <div class="brand-logo">
                                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7a/Realme_logo.svg/200px-Realme_logo.svg.png" alt="Realme" class="realme-logo">
                            </div>
                            <div class="brand-image">
                                <img src="https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?w=150&h=200&fit=crop" alt="Realme Phone" class="img-fluid">
                            </div>
                        </div>
                        <div class="brand-offer">
                            <h5 class="text-dark mb-0">UP to 80% OFF</h5>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Slider Indicators -->
            <div class="text-center mt-4">
                <div class="slider-indicators">
                    <span class="indicator active"></span>
                    <span class="indicator"></span>
                    <span class="indicator"></span>
                    <span class="indicator"></span>
                    <span class="indicator"></span>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section class="py-5 bg-white">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-3 mb-4">
                    <div class="feature-item">
                        <div class="feature-icon mb-3">
                            <i class="fas fa-trophy fa-2x text-warning"></i>
                        </div>
                        <h5>High Quality</h5>
                        <p class="text-muted">crafted from top materials</p>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="feature-item">
                        <div class="feature-icon mb-3">
                            <i class="fas fa-shield-alt fa-2x text-success"></i>
                        </div>
                        <h5>Warranty Protection</h5>
                        <p class="text-muted">Over 2 years</p>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="feature-item">
                        <div class="feature-icon mb-3">
                            <i class="fas fa-shipping-fast fa-2x text-primary"></i>
                        </div>
                        <h5>Fast Delivery</h5>
                        <p class="text-muted">Order over 150 $</p>
                    </div>
                </div>
                <div class="col-md-3 mb-4">
                    <div class="feature-item">
                        <div class="feature-icon mb-3">
                            <i class="fas fa-headset fa-2x text-info"></i>
                        </div>
                        <h5>Support</h5>
                        <p class="text-muted">Dedicated support</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection



@push('scripts')
<script>
  // Interactive functionality
document.addEventListener("DOMContentLoaded", () => {
  // Product card interactions
  const productCards = document.querySelectorAll(".product-card")
  productCards.forEach((card) => {
    card.addEventListener("mouseenter", function () {
      this.style.transform = "translateY(-10px)"
    })

    card.addEventListener("mouseleave", function () {
      this.style.transform = "translateY(0)"
    })
  })

  // Category item interactions
  const categoryItems = document.querySelectorAll(".category-item")
  categoryItems.forEach((item) => {
    item.addEventListener("click", function () {
      const categoryName = this.querySelector("h6").textContent
    })
  })

  // Brand card interactions
  const brandCards = document.querySelectorAll(".brand-card")
  brandCards.forEach((card) => {
    card.addEventListener("click", function () {
      const brandName = this.querySelector(".brand-label").textContent
    })
  })

  // Add to cart functionality
  const addToCartButtons = document.querySelectorAll(".product-card .btn-outline-primary")
  addToCartButtons.forEach((button) => {
    button.addEventListener("click", function (e) {
      e.preventDefault()
      const productName = this.closest(".product-card").querySelector(".product-title").textContent

      // Add animation
      this.innerHTML = '<i class="fas fa-check"></i> Added!'
      this.classList.remove("btn-outline-primary")
      this.classList.add("btn-success")

      setTimeout(() => {
        this.innerHTML = "Add to cart"
        this.classList.remove("btn-success")
        this.classList.add("btn-outline-primary")
      }, 2000)
    })
  })

  // Slider indicators functionality
  const indicators = document.querySelectorAll(".indicator")
  indicators.forEach((indicator, index) => {
    indicator.addEventListener("click", function () {
      indicators.forEach((ind) => ind.classList.remove("active"))
      this.classList.add("active")
    })
  })

  // Search functionality
  const searchInput = document.querySelector('input[placeholder*="Search"]')
  searchInput.addEventListener("keypress", function (e) {
    if (e.key === "Enter") {
      const searchTerm = this.value.trim()
      if (searchTerm) {
        // Here you would typically redirect to search results
      }
    }
  })

  // Smooth scrolling for navigation links
  const navLinks = document.querySelectorAll(".nav-link")
  navLinks.forEach((link) => {
    link.addEventListener("click", function (e) {
      if (this.getAttribute("href") === "#") {
        e.preventDefault()
      }
    })
  })

  // Pause animation on hover for brands slider
  const brandsSlider = document.querySelector(".brands-slider")
  if (brandsSlider) {
    brandsSlider.addEventListener("mouseenter", function () {
      this.style.animationPlayState = "paused"
    })

    brandsSlider.addEventListener("mouseleave", function () {
      this.style.animationPlayState = "running"
    })
  }

  // Auto-update slider indicators
  let currentSlide = 0
  const totalSlides = indicators.length

  setInterval(() => {
    indicators.forEach((ind) => ind.classList.remove("active"))
    indicators[currentSlide].classList.add("active")
    currentSlide = (currentSlide + 1) % totalSlides
  }, 4000)

  // Initial event listeners attachment
  attachEventListeners()
})

// Search functionality - Updated to show product cards
const searchProducts = [
  {
    name: "cctv camera",
    price: "32999",
    image: "https://images.unsplash.com/photo-1592750475338-74b7b21085ab?w=200&h=250&fit=crop",
  },
  {
    name: "Galaxy M13 (4GB | 64 GB)",
    price: "10499",
    image: "https://images.unsplash.com/photo-1511707171634-5f897ff02aa9?w=200&h=250&fit=crop",
  },
  {
    name: "CCTV camera (4GB | 64 GB)",
    price: "16999",
    image: "https://images.unsplash.com/photo-1580910051074-3eb694886505?w=200&h=250&fit=crop",
  },
  {
    name: "Atteendance Tracker (4GB | 64 GB)",
    price: "31999",
    originalPrice: "49999",
    savings: "9000",
    image: "https://images.unsplash.com/photo-1574944985070-8f3ebc6b79d2?w=200&h=250&fit=crop",
  },
  {
    name: "Cctv cameras",
    price: "67999",
    image: "https://images.unsplash.com/photo-1556656793-08538906a9f8?w=200&h=250&fit=crop",
  },
  {
    name: "E commerce (128GB)",
    price: "129999",
    image: "https://images.unsplash.com/photo-1678652197831-2d180705cd2c?w=200&h=250&fit=crop",
  },
  {
    name: "Smart Watch",
    price: "15999",
    image: "https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=200&h=250&fit=crop",
  },
  {
    name: "Wireless Headphones",
    price: "8999",
    image: "https://images.unsplash.com/photo-1505740420928-5e560c06d30e?w=200&h=250&fit=crop",
  },
  {
    name: "Gaming Laptop",
    price: "89999",
    image: "https://images.unsplash.com/photo-1603302576837-37561b2e2302?w=200&h=250&fit=crop",
  },
  {
    name: "4K Smart TV",
    price: "45999",
    image: "https://images.unsplash.com/photo-1593359677879-a4bb92f829d1?w=200&h=250&fit=crop",
  },
]

// Search input functionality - Updated
const searchInputNew = document.getElementById("searchInput")
const searchResults = document.getElementById("searchResults")
const searchProductsContainer = document.getElementById("searchProductsContainer")
const defaultProducts = document.getElementById("defaultProducts")

searchInputNew.addEventListener("input", function () {
  const query = this.value.toLowerCase().trim()

  if (query.length === 0) {
    // Hide search results and show default products
    searchResults.classList.remove("show")
    searchProductsContainer.style.display = "none"
    defaultProducts.style.display = "flex"
    return
  }

  if (query.length < 2) {
    searchResults.classList.remove("show")
    return
  }

  const filteredProducts = searchProducts.filter((product) => product.name.toLowerCase().includes(query))

  // Show dropdown for quick selection
  displaySearchDropdown(filteredProducts, query)

  // Show product cards
  displaySearchProductCards(filteredProducts, query)
})

function displaySearchDropdown(products, query) {
  if (products.length === 0) {
    searchResults.innerHTML = `
      <div class="no-results">
        <i class="fas fa-search fa-2x text-muted mb-2"></i>
        <p>No products found for "${query}"</p>
      </div>
    `
  } else {
    searchResults.innerHTML = products
      .slice(0, 5) // Show only first 5 in dropdown
      .map(
        (product) => `
      <div class="search-item" onclick="selectProduct('${product.name}')">
        <img src="${product.image}" alt="${product.name}">
        <div class="search-item-info">
          <h6>${product.name}</h6>
          <p>${product.price}</p>
        </div>
      </div>
    `,
      )
      .join("")
  }

  searchResults.classList.add("show")
}

function displaySearchProductCards(products, query) {
  if (products.length === 0) {
    searchProductsContainer.innerHTML = `
      <div class="col-12 mb-3">
        <h5 class="text-muted search-results-header">No results found for "${query}"</h5>
      </div>
    `
  } else {
    const productsHTML = products
      .map(
        (product) => `
  <div class="col-lg-2 col-md-4 col-sm-6 mb-4">
    <div class="product-card" data-name="${product.name}">
      <div class="product-image">
        <img src="${product.image}" alt="${product.name}" class="img-fluid">
      </div>
      <div class="product-info">
        <h6 class="product-title">${product.name}</h6>
        <p class="product-price">${product.price}${product.originalPrice ? ` <span class="text-muted text-decoration-line-through">${product.originalPrice}</span>` : ""}</p>
        ${product.savings ? `<p class="text-success small">Save - ${product.savings}</p>` : ""}
        <button class="btn btn-primary btn-sm add-to-cart-btn">Add to cart</button>
      </div>
    </div>
  </div>
`,
      )
      .join("")

    searchProductsContainer.innerHTML = `
      <div class="col-12 mb-3">
        <h5 class="text-muted search-results-header">Search Results for "${query}" (${products.length} found)</h5>
      </div>
      ${productsHTML}
    `
  }

  // Show search results and hide default products
  searchProductsContainer.style.display = "flex"
  defaultProducts.style.display = "none"

  // Re-attach event listeners to new buttons
  attachEventListeners()
}

function selectProduct(productName) {
  searchInputNew.value = productName
  searchResults.classList.remove("show")
}

// Function to attach event listeners to dynamically created elements
function attachEventListeners() {
  // Add to cart buttons only
  const addToCartButtons = document.querySelectorAll(".add-to-cart-btn")
  addToCartButtons.forEach((button) => {
    button.removeEventListener("click", handleAddToCart)
    button.addEventListener("click", handleAddToCart)
  })
}

// Separate handler functions
function handleAddToCart(e) {
  e.preventDefault()

  // Add animation
  this.innerHTML = '<i class="fas fa-check"></i> Added!'
  this.classList.remove("btn-primary")
  this.classList.add("btn-success")

  setTimeout(() => {
    this.innerHTML = "Add to cart"
    this.classList.remove("btn-success")
    this.classList.add("btn-primary")
  }, 2000)
}

// Close search results when clicking outside
document.addEventListener("click", (e) => {
  if (!searchInputNew.contains(e.target) && !searchResults.contains(e.target)) {
    searchResults.classList.remove("show")
  }
})

// Dropdown functionality
const dropdownItems = document.querySelectorAll(".dropdown-item")
dropdownItems.forEach((item) => {
  item.addEventListener("click", function (e) {
    e.preventDefault()
    const category = this.textContent.trim()

    // Add visual feedback
    this.style.transform = "scale(0.95)"
    setTimeout(() => {
      this.style.transform = ""
    }, 150)
  })
})

// Update add to cart functionality for new button position
const addToCartButtonsNew = document.querySelectorAll(".add-to-cart-btn")
addToCartButtonsNew.forEach((button) => {
  button.addEventListener("click", function (e) {
    e.preventDefault()
    const productName = this.closest(".product-card").querySelector(".product-title").textContent

    // Add animation
    this.innerHTML = '<i class="fas fa-check"></i> Added!'
    this.classList.remove("btn-primary")
    this.classList.add("btn-success")

    setTimeout(() => {
      this.innerHTML = "Add to cart"
      this.classList.remove("btn-success")
      this.classList.add("btn-primary")
    }, 2000)
  })
})


</script>

@endpush
