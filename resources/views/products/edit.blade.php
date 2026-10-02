<x-layout :sidebar="true" title="Edit Product">
    <div class="container-fluid">
        <div class="content-panel p-4 p-lg-5">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <p class="eyebrow">Catalog</p>
                    <h2 class="mb-0">Edit Product</h2>
                </div>
                <a href="{{ route('products.show', $product) }}" class="btn btn-outline-secondary rounded-pill">
                    <i class="bi bi-arrow-left me-2"></i>View Product
                </a>
            </div>

            @if($errors->any())
                <div class="alert alert-danger" role="alert">
                    <ul class="mb-0 ps-3">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('products.update', $product) }}" method="POST" class="row g-3">
                @csrf
                @method('PUT')

                <div class="col-12">
                    <label class="form-label fw-semibold">Product Name</label>
                    <input type="text" name="name" value="{{ old('name', $product->name) }}" class="form-control rounded-3">
                </div>

                <div class="col-12">
                    <label class="form-label fw-semibold">Description</label>
                    <textarea name="description" class="form-control rounded-3" rows="5">{{ old('description', $product->description) }}</textarea>
                </div>

                <div class="col-md-6">
                    <label class="form-label fw-semibold">Price</label>
                    <input type="number" name="price" step="0.01" value="{{ old('price', $product->price) }}" class="form-control rounded-3">
                </div>

                <div class="col-md-6">
                    <label class="form-label fw-semibold">Quantity</label>
                    <input type="number" name="quantity" value="{{ old('quantity', $product->quantity) }}" class="form-control rounded-3">
                </div>

                <div class="col-12 d-flex justify-content-end gap-2 pt-2">
                    <a href="{{ route('products.show', $product) }}" class="btn btn-outline-secondary rounded-pill">Cancel</a>
                    <button type="submit" class="btn btn-primary rounded-pill">
                        <i class="bi bi-check-circle me-2"></i>Update Product
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-layout>