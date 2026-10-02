<!DOCTYPE html>
<html>
<head>
    <title>Edit Product</title>
</head>
<body>

    <h1>Edit Product</h1>

    @if($errors->any())
        <div style="color: red;">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form
        action="{{ route('products.update', $product) }}"
        method="POST"
    >

        @csrf
        @method('PUT')

        <div>
            <label>Product Name</label>

            <input
                type="text"
                name="name"
                value="{{ old('name', $product->name) }}"
            >
        </div>

        <br>

        <div>
            <label>Description</label>

            <textarea name="description">{{ old('description', $product->description) }}</textarea>
        </div>

        <br>

        <div>
            <label>Price</label>

            <input
                type="number"
                name="price"
                step="0.01"
                value="{{ old('price', $product->price) }}"
            >
        </div>

        <br>

        <div>
            <label>Quantity</label>

            <input
                type="number"
                name="quantity"
                value="{{ old('quantity', $product->quantity) }}"
            >
        </div>

        <br>

        <button type="submit">
            Update Product
        </button>

    </form>

    <br>

    <a href="{{ route('products.show', $product) }}">
        Cancel
    </a>

</body>
</html>