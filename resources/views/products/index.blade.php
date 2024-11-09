<form method="GET" action="{{ route('products.index') }}">
    <input type="text" name="search" placeholder="Search by ID or description" value="{{ request('search') }}">
    <button type="submit">Search</button>
</form>

<table>
    <tr>
        <th><a href="{{ route('products.index', ['sort_by' => 'name', 'sort_order' => request('sort_order') == 'asc' ? 'desc' : 'asc']) }}">Name</a></th>
        <th><a href="{{ route('products.index', ['sort_by' => 'price', 'sort_order' => request('sort_order') == 'asc' ? 'desc' : 'asc']) }}">Price</a></th>

    </tr>
    @foreach($products as $product)
        <tr>
            <td>{{ $product->name }}</td>
            <td>{{ $product->price }}</td>

        </tr>
    @endforeach
</table>
{{ $products->links() }}

