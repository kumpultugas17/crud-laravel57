<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products</title>
</head>

<body>
    <h1>Data Products</h1>
    <a href="/product/create">Add Data</a>
    <table border="1" cellspacing="0" cellpadding="10">
        <thead>
            <th>#</th>
            <th>Product Name</th>
            <th>Price</th>
            <th>Description</th>
            <th>Action</th>
        </thead>
        @php
            $no = 1;
        @endphp
        @foreach ($products as $product)
            <tbody>
                <td>{{ $no++ }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->price }}</td>
                <td>{{ $product->description }}</td>
                <td>
                    <a href="/product/{{ $product->id }}/edit">Edit</a>
                    <form action="/product/{{ $product->id }}/delete" method="POST">
                        @method('delete')
                        @csrf
                        <input type="submit" value="Delete">
                    </form>
                </td>
            </tbody>
        @endforeach
    </table>
    <br>
    {{ $products->links() }}
</body>

</html>
