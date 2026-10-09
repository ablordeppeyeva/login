<x-layout :sidebar="true" title="Create Category">
    <div class="container-fluid">
        <div class="content-panel p-4 p-lg-5">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <div>
                    <p class="eyebrow">Catalog</p>
                    <h2 class="mb-0">Create Category</h2>
                </div>
                <a href="{{ route('categories.index') }}" class="btn btn-outline-secondary rounded-pill">
                    <i class="bi bi-arrow-left me-2"></i>Back to Categories
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
            
            <form action="{{ route('categories.store') }}" method="POST" class="row g-3">
                @csrf

                <div class="col-12">
                    <label for="name" class="form-label fw-semibold">Category Name</label>
                    <input id="name" type="text" name="name" value="{{ old('name') }}" class="form-control rounded-3" maxlength="255" required autofocus placeholder="Enter category name">
                </div>

                <div class="col-12">
                    <label for="description" class="form-label fw-semibold">Description <span class="text-muted fw-normal">(optional)</span></label>
                    <textarea id="description" name="description" class="form-control rounded-3" rows="5" placeholder="Describe this category">{{ old('description') }}</textarea>
                </div>
                <div class="col-12 d-flex justify-content-end gap-2 pt-2">
                    <a href="{{ route('categories.index') }}" class="btn btn-outline-secondary rounded-pill">Cancel</a>
                    <button type="submit" class="btn btn-primary rounded-pill">
                        <i class="bi bi-check-circle me-2"></i>Save Category
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-layout>