<!DOCTYPE html>
<html>
<head>
    <title>{{ $product->name }}</title>
</head>
<body>

    <h1>{{ $product->name }}</h1>

    @if(session('success'))
        <p style="color: green;">
            {{ session('success') }}
        </p>
    @endif

    <p>
        <strong>ID:</strong>
        {{ $product->id }}
    </p>

    <p>
        <strong>Name:</strong>
        {{ $product->name }}
    </p>

    <p>
        <strong>Description:</strong>
        {{ $product->description ?? 'No description' }}
    </p>

    <p>
        <strong>Price:</strong>
        ${{ number_format($product->price, 2) }}
    </p>

    <p>
        <strong>Quantity:</strong>
        {{ $product->quantity }}
    </p>

    <a href="{{ route('products.edit', $product) }}">
        Edit Product
    </a>

    <br><br>

    <form
        action="{{ route('products.destroy', $product) }}"
        method="POST"
    >
        @csrf
        @method('DELETE')

        <button
            type="submit"
            onclick="return confirm('Delete this product?')"
        >
            Delete Product
        </button>
    </form>

    <br>

    <a href="{{ route('products.index') }}">
        Back to Products
    </a>

</body>
</html>