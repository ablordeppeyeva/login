<x-layout :sidebar="true" title="Dashboard">
    <div class="container-fluid">
        <div class="row g-4 mb-4">
            <div class="col-xl-4 col-md-6">
                <div class="card stat-card primary h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div>
                                <div class="stat-label">Total Users</div>
                                 <div class="stat-number">{{ $totalUsers }}</div>
                            </div>
                            <div class="bg-white bg-opacity-15 rounded-4 p-3">
                                <i class="bi bi-people-fill fs-4"></i>
                            </div>
                        </div>
                   
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6">
                <div class="card stat-card success h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div>
                                <div class="stat-label">Total Products</div>
                                <div class="stat-number">{{ $totalProducts }}</div>
                            </div>
                            <div class="bg-white bg-opacity-15 rounded-4 p-3">
                                <i class="bi bi-box-seam-fill fs-4"></i>
                            </div>
                        </div>
                        {{-- <div class="stat-meta"><i class="bi bi-check-circle"></i> Active stock</div> --}}
                    </div>
                </div>
            </div>

            {{-- <div class="col-xl-4 col-md-6">
                <div class="card stat-card warning h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div>
                                <div class="stat-label">Categories</div>
                                <div class="stat-number"></div>
                            </div>
                            <div class="bg-white bg-opacity-15 rounded-4 p-3">
                                <i class="bi bi-grid-fill fs-4"></i>
                            </div>
                        </div>
                        <div class="stat-meta"><i class="bi bi-tags-fill"></i> Organized</div>
                    </div>
                </div>
            </div> --}}
        </div>

        {{-- <div class="row g-4">
            <div class="col-xl-8">
                <div class="content-panel p-4">
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div>
                            <h5 class="fw-bold mb-1">Recent Activity</h5>
                            <p class="text-muted mb-0">Your latest updates and metrics</p>
                        </div>
                        <button class="btn btn-sm btn-primary rounded-pill">View report</button>
                    </div>

                    <div class="table-responsive">
                        <table class="table align-middle mb-0">
                            <thead>
                                <tr class="text-muted small">
                                    <th>Item</th>
                                    <th>Status</th>
                                    <th>Owner</th>
                                    <th>Value</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><strong>Wireless Headphones</strong></td>
                                    <td><span class="badge bg-success-subtle text-success rounded-pill">Published</span></td>
                                    <td>Jane</td>
                                    <td>$149</td>
                                </tr>
                                <tr>
                                    <td><strong>Office Chair</strong></td>
                                    <td><span class="badge bg-warning-subtle text-warning rounded-pill">Draft</span></td>
                                    <td>Frank</td>
                                    <td>$240</td>
                                </tr>
                                <tr>
                                    <td><strong>Smart Watch</strong></td>
                                    <td><span class="badge bg-primary-subtle text-primary rounded-pill">Featured</span></td>
                                    <td>Grace</td>
                                    <td>$199</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="col-xl-4">
                <div class="content-panel p-4 h-100">
                    <h5 class="fw-bold mb-3">Quick Actions</h5>

                    <div class="d-grid gap-3">
                        <button class="btn btn-primary rounded-3 text-start">
                            <i class="bi bi-plus-circle me-2"></i> Add new product
                        </button>
                        <button class="btn btn-outline-secondary rounded-3 text-start">
                            <i class="bi bi-tags me-2"></i> Manage categories
                        </button>
                        <button class="btn btn-outline-secondary rounded-3 text-start">
                            <i class="bi bi-people me-2"></i> View customers
                        </button>
                    </div>

                    <div class="mt-4 p-3 bg-light rounded-4">
                        <div class="text-muted small mb-2">Revenue</div>
                        <div class="fw-bold fs-3">$24,680</div>
                        <div class="text-success small mt-2"><i class="bi bi-arrow-up-right"></i> +8.2% vs last month</div>
                    </div>
                </div>
            </div>
        </div>// --}}
    </div>
</x-layout>
