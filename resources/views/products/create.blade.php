<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Product</title>
</head>

<body>
    <h1>Create Product</h1>
    <form action="/product/store" method="POST">
        @csrf
        Product Name : <input type="text" name="product" required><br>
        Price : <input type="number" name="price" required><br>
        Description : <textarea name="description" cols="30" rows="5"></textarea><br>
        <input type="submit" value="Save">
    </form>
</body>

</html>
