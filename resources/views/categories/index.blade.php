<x-layout :sidebar="true" title="Categories">
	<div class="container-fluid">
		<div class="content-panel p-4">
			<div class="d-flex justify-content-between align-items-center mb-4 flex-wrap gap-3">
				<div>
					<p class="eyebrow">Catalog</p>
					<h2 class="mb-0">Categories</h2>
				</div>

				<a href="{{ route('categories.create') }}" class="btn btn-primary rounded-pill">
					<i class="bi bi-plus-circle me-2"></i>New Category
				</a>
			</div>

			@if(session('success'))
				<div class="alert alert-success alert-dismissible fade show" role="alert">
					{{ session('success') }}
					<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
				</div>
			@endif

			@if($categories->isNotEmpty())
				<div class="table-responsive">
					<table class="table align-middle mb-0">
						<thead>
							<tr class="text-muted small">
								<th>ID</th>
								<th>Name</th>
								<th>Description</th>
								<th>Created</th>
								<th class="text-end">Actions</th>
							</tr>
						</thead>
						<tbody>
							@foreach($categories as $category)
								<tr>
									<td>#{{ $category->id }}</td>
									<td class="fw-semibold">{{ $category->name }}</td>
									<td>{{ \Illuminate\Support\Str::limit($category->description ?: 'No description', 90) }}</td>
									<td>{{ $category->created_at?->format('M j, Y') }}</td>
									<td class="text-end">
										<div class="d-flex justify-content-end gap-2 flex-wrap">
											<a href="{{ route('categories.show', $category) }}" class="btn btn-sm btn-outline-primary rounded-pill">View</a>
											<a href="{{ route('categories.edit', $category) }}" class="btn btn-sm btn-outline-secondary rounded-pill">Edit</a>
											<form action="{{ route('categories.destroy', $category) }}" method="POST" class="d-inline">
												@csrf
												@method('DELETE')
												<button type="submit" class="btn btn-sm btn-outline-danger rounded-pill" onclick="return confirm('Delete this category?')">Delete</button>
											</form>
										</div>
									</td>
								</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			@else
				<div class="text-center py-5">
					<i class="bi bi-tags text-muted fs-1"></i>
					<h3 class="h5 mt-3">No categories yet</h3>
					<p class="text-muted mb-3">Create a category to organize your catalog.</p>
					<a href="{{ route('categories.create') }}" class="btn btn-primary rounded-pill">
						<i class="bi bi-plus-circle me-2"></i>Create Category
					</a>
				</div>
			@endif
		</div>
	</div>
</x-layout>
