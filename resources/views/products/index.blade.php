<!DOCTYPE html>
<html>
<head>
    <title>Products</title>
</head>
<body>

    <h1>Products</h1>

    @if(session('success'))
        <p style="color: green;">
            {{ session('success') }}
        </p>
    @endif 

    <a href="{{ route('products.create') }}">
        Add Product
    </a>

    <br><br>

    @if($products->count())

        <table border="1" cellpadding="10">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>

                        <td>
                            {{ $product->name }}
                        </td>

                        <td>
                            ${{ number_format($product->price, 2) }}
                        </td>

                        <td>
                            {{ $product->quantity }}
                        </td>

                        <td>

                            <a href="{{ route('products.show', $product) }}">
                                Show
                            </a>

                            |

                            <a href="{{ route('products.edit', $product) }}">
                                Edit
                            </a>

                            |

                            <form
                                action="{{ route('products.destroy', $product) }}"
                                method="POST"
                                style="display:inline;"
                            >
                                @csrf
                                @method('DELETE')

                                <button
                                    type="submit"
                                    onclick="return confirm('Delete this product?')"
                                >
                                    Delete
                                </button>
                            </form>

                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

    @else

        <p>No products found.</p>

    @endif

</body>
</html>