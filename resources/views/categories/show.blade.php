<x-layout :sidebar="true" :title="$category->name">
	<div class="container-fluid">
		<div class="content-panel p-4 p-lg-5">
			<div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3">
				<div>
					<p class="eyebrow">Catalog / Category #{{ $category->id }}</p>
					<h2 class="mb-0">{{ $category->name }}</h2>
				</div>
				<div class="d-flex gap-2 flex-wrap">
					<a href="{{ route('categories.edit', $category) }}" class="btn btn-primary rounded-pill">
						<i class="bi bi-pencil-square me-2"></i>Edit Category
					</a>
					<a href="{{ route('categories.index') }}" class="btn btn-outline-secondary rounded-pill">
						<i class="bi bi-arrow-left me-2"></i>All Categories
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
							<h3 class="h5 fw-bold mb-4">Category Details</h3>
							<dl class="row mb-0">
								<dt class="col-sm-3 text-muted">Name</dt>
								<dd class="col-sm-9">{{ $category->name }}</dd>

								<dt class="col-sm-3 text-muted">Description</dt>
								<dd class="col-sm-9">{{ $category->description ?: 'No description provided.' }}</dd>

								<dt class="col-sm-3 text-muted">Created</dt>
								<dd class="col-sm-9">{{ $category->created_at?->format('M j, Y g:i A') }}</dd>

								<dt class="col-sm-3 text-muted">Last Updated</dt>
								<dd class="col-sm-9">{{ $category->updated_at?->format('M j, Y g:i A') }}</dd>
							</dl>
						</div>
					</div>
				</div>

				<div class="col-lg-4">
					<div class="card border-0 shadow-sm rounded-4 h-100">
						<div class="card-body p-4">
							<h3 class="h5 fw-bold mb-3">Actions</h3>
							<div class="d-grid gap-2">
								<a href="{{ route('categories.edit', $category) }}" class="btn btn-primary rounded-3">
									<i class="bi bi-pencil-square me-2"></i>Edit Category
								</a>
								<form action="{{ route('categories.destroy', $category) }}" method="POST" onsubmit="return confirm('Delete this category?')">
									@csrf
									@method('DELETE')
									<button type="submit" class="btn btn-outline-danger w-100 rounded-3">
										<i class="bi bi-trash me-2"></i>Delete Category
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
