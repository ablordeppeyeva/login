<x-layout :sidebar="true" title="{{ $product->name }}">
    <div class="container-fluid">
        <div class="content-panel p-4 p-lg-5">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <p class="eyebrow">Catalog</p>
                    <h2 class="mb-0">{{ $product->name }}</h2>
                </div>

                <div class="d-flex gap-2 flex-wrap">
                    <a href="{{ route('products.edit', $product) }}" class="btn btn-primary rounded-pill">
                        <i class="bi bi-pencil-square me-2"></i>Edit Product
                    </a>
                    <a href="{{ route('products.index') }}" class="btn btn-outline-secondary rounded-pill">
                        <i class="bi bi-arrow-left me-2"></i>Back to Products
                    </a>
                </div>
            </div>

            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif

            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="card border-0 shadow-sm rounded-4 h-100">
                        <div class="card-body p-4">
                            <h5 class="fw-bold mb-3">Product Details</h5>
                            <dl class="row mb-0">
                                <dt class="col-sm-3 text-muted">ID</dt>
                                <dd class="col-sm-9">#{{ $product->id }}</dd>

                                <dt class="col-sm-3 text-muted">Name</dt>
                                <dd class="col-sm-9">{{ $product->name }}</dd>

                                <dt class="col-sm-3 text-muted">Price</dt>
                                <dd class="col-sm-9">${{ number_format($product->price, 2) }}</dd>

                                <dt class="col-sm-3 text-muted">Quantity</dt>
                                <dd class="col-sm-9">{{ $product->quantity }}</dd>

                                <dt class="col-sm-3 text-muted">Description</dt>
                                <dd class="col-sm-9">{{ $product->description ?? 'No description' }}</dd>
                            </dl>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card border-0 shadow-sm rounded-4 h-100">
                        <div class="card-body p-4">
                            <h5 class="fw-bold mb-3">Actions</h5>
                            <div class="d-grid gap-2">
                                <a href="{{ route('products.edit', $product) }}" class="btn btn-primary rounded-3">
                                    <i class="bi bi-pencil-square me-2"></i>Edit Product
                                </a>
                                <form action="{{ route('products.destroy', $product) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger w-100 rounded-3" onclick="return confirm('Delete this product?')">
                                        <i class="bi bi-trash me-2"></i>Delete Product
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>