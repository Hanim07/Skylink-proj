@extends('admin.layouts.master')

@section('title', 'Admin Dashboard')
@section('page-title', 'Dashboard')

@section('content')
<div class="row">
    <!-- Statistics Cards -->
    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card stat-card">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-uppercase mb-1">Total Users</div>
                        <div class="h5 mb-0 font-weight-bold">2,543</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-users fa-2x"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card stat-card-success">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-uppercase mb-1">Total Orders</div>
                        <div class="h5 mb-0 font-weight-bold">1,234</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-shopping-cart fa-2x"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card stat-card-warning">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-uppercase mb-1">Revenue</div>
                        <div class="h5 mb-0 font-weight-bold">$45,231</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-dollar-sign fa-2x"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="col-xl-3 col-md-6 mb-4">
        <div class="card stat-card-info">
            <div class="card-body">
                <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                        <div class="text-xs font-weight-bold text-uppercase mb-1">Products</div>
                        <div class="h5 mb-0 font-weight-bold">456</div>
                    </div>
                    <div class="col-auto">
                        <i class="fas fa-box fa-2x"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <!-- Recent Activity -->
    <div class="col-lg-8 mb-4">
        <div class="card">
            <div class="card-header">
                <h6 class="m-0 font-weight-bold text-primary">
                    <i class="fas fa-list me-2"></i>Recent Activity
                </h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead>
                            <tr>
                                <th>Activity</th>
                                <th>User</th>
                                <th>Time</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><i class="fas fa-user-plus text-success me-2"></i>New user registered</td>
                                <td>john@example.com</td>
                                <td>2 minutes ago</td>
                                <td><span class="badge bg-success">Success</span></td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-shopping-cart text-primary me-2"></i>Order completed</td>
                                <td>Order #1234</td>
                                <td>5 minutes ago</td>
                                <td><span class="badge bg-primary">Completed</span></td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-edit text-warning me-2"></i>Product updated</td>
                                <td>iPhone 15 Pro</td>
                                <td>10 minutes ago</td>
                                <td><span class="badge bg-warning">Updated</span></td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-sign-in-alt text-info me-2"></i>User logged in</td>
                                <td>admin@example.com</td>
                                <td>15 minutes ago</td>
                                <td><span class="badge bg-info">Login</span></td>
                            </tr>
                            <tr>
                                <td><i class="fas fa-trash text-danger me-2"></i>Product deleted</td>
                                <td>Old Product</td>
                                <td>1 hour ago</td>
                                <td><span class="badge bg-danger">Deleted</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Quick Stats -->
    <div class="col-lg-4 mb-4">
        <div class="card">
            <div class="card-header">
                <h6 class="m-0 font-weight-bold text-primary">
                    <i class="fas fa-chart-pie me-2"></i>Quick Stats
                </h6>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <div class="d-flex justify-content-between">
                        <span>Active Users</span>
                        <strong>1,234</strong>
                    </div>
                    <div class="progress mt-1">
                        <div class="progress-bar bg-success" style="width: 75%"></div>
                    </div>
                </div>
                
                <div class="mb-3">
                    <div class="d-flex justify-content-between">
                        <span>Pending Orders</span>
                        <strong>56</strong>
                    </div>
                    <div class="progress mt-1">
                        <div class="progress-bar bg-warning" style="width: 45%"></div>
                    </div>
                </div>
                
                <div class="mb-3">
                    <div class="d-flex justify-content-between">
                        <span>Low Stock Items</span>
                        <strong>12</strong>
                    </div>
                    <div class="progress mt-1">
                        <div class="progress-bar bg-danger" style="width: 25%"></div>
                    </div>
                </div>
                
                <div class="mb-3">
                    <div class="d-flex justify-content-between">
                        <span>System Status</span>
                        <span class="badge bg-success">Online</span>
                    </div>
                </div>
                
                <hr>
                
                <div class="text-center">
                    <button class="btn btn-primary btn-sm me-2">
                        <i class="fas fa-sync-alt me-1"></i>Refresh
                    </button>
                    <button class="btn btn-outline-secondary btn-sm">
                        <i class="fas fa-download me-1"></i>Export
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Charts Row -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h6 class="m-0 font-weight-bold text-primary">
                    <i class="fas fa-chart-area me-2"></i>Monthly Overview
                </h6>
            </div>
            <div class="card-body">
                <div class="text-center py-5">
                    <i class="fas fa-chart-line fa-3x text-muted mb-3"></i>
                    <p class="text-muted">Chart will be displayed here</p>
                    <small class="text-muted">Integrate with Chart.js or similar library for data visualization</small>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    // Auto-refresh dashboard every 30 seconds
    setInterval(function() {
        // You can add AJAX calls here to refresh specific sections
        console.log('Dashboard auto-refresh');
    }, 30000);
</script>
@endpush
