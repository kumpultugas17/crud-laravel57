<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Product</title>
</head>

<body>
    <h1>Edit Product</h1>
    <form action="/product/{{ $product->id }}" method="POST">
        @method('put')
        @csrf
        Product Name : <input type="text" name="product" value="{{ $product->name }}" required><br>
        Price : <input type="number" name="price" value="{{ $product->price }}" required><br>
        Description : <textarea name="description" cols="30" rows="5">{{ $product->description }}</textarea><br>
        <input type="submit" value="Update">
    </form>
</body>

</html>
