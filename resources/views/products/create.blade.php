<!DOCTYPE html>
<html>
<head>
    <title>Create Product</title>
</head>
<body>

    <h1>Create Product</h1>

    @if($errors->any())
        <div style="color: red;">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('products.store') }}" method="POST">

        @csrf

        <div>
            <label>Product Name</label>

            <input
                type="text"
                name="name"
                value="{{ old('name') }}"
            >
        </div>

        <br>

        <div>
            <label>Description</label>

            <textarea name="description">{{ old('description') }}</textarea>
        </div>

        <br>

        <div>
            <label>Price</label>

            <input
                type="number"
                name="price"
                step="0.01"
                value="{{ old('price') }}"
            >
        </div>

        <br>

        <div>
            <label>Quantity</label>

            <input
                type="number"
                name="quantity"
                value="{{ old('quantity', 0) }}"
            >
        </div>

        <br>

        <button type="submit">
            Save Product
        </button>

    </form>

    <br>

    <a href="{{ route('products.index') }}">
        Back to Products
    </a>

</body>
</html>