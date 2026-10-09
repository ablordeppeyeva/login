<x-layout :sidebar="true" title="Edit Category">
	<div class="container-fluid">
		<div class="content-panel p-4 p-lg-5">
			<div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3">
				<div>
					<p class="eyebrow">Catalog</p>
					<h2 class="mb-0">Edit Category</h2>
				</div>
				<a href="{{ route('categories.show', $category) }}" class="btn btn-outline-secondary rounded-pill">
					<i class="bi bi-arrow-left me-2"></i>View Category
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

			<form action="{{ route('categories.update', $category) }}" method="POST" class="row g-3">
				@csrf
				@method('PUT')

				<div class="col-12">
					<label for="name" class="form-label fw-semibold">Category Name</label>
					<input id="name" type="text" name="name" value="{{ old('name', $category->name) }}" class="form-control rounded-3" maxlength="255" required autofocus>
				</div>

				<div class="col-12">
					<label for="description" class="form-label fw-semibold">Description <span class="text-muted fw-normal">(optional)</span></label>
					<textarea id="description" name="description" class="form-control rounded-3" rows="5">{{ old('description', $category->description) }}</textarea>
				</div>

				<div class="col-12 d-flex justify-content-end gap-2 pt-2">
					<a href="{{ route('categories.show', $category) }}" class="btn btn-outline-secondary rounded-pill">Cancel</a>
					<button type="submit" class="btn btn-primary rounded-pill">
						<i class="bi bi-check-circle me-2"></i>Update Category
					</button>
				</div>
			</form>
		</div>
	</div>
</x-layout>
