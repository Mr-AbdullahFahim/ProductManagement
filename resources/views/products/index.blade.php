<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>

    <!-- Add custom CSS styles -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f4f6f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        table {
            width: 80%;
            border-collapse: collapse;
            margin: 20px 0;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            background-color: #fff;
        }

        th, td {
            padding: 12px;
            text-align: center;
            border: 1px solid #ddd;
        }

        th {
            background-color: #007bff;
            color: white;
            font-weight: bold;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #e2e6ea;
        }

        td input[type="submit"] {
            padding: 6px 12px;
            margin: 4px;
            background-color: #007bff;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        td input[type="submit"]:hover {
            background-color: #0056b3;
        }

        a {
            display: inline-block;
            padding: 10px 20px;
            margin-top: 20px;
            background-color: #28a745;
            color: white;
            text-decoration: none;
            border-radius: 4px;
            font-weight: bold;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: #218838;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
        }
    </style>
</head>
<body>

    <div class="container">
        <h1>Product List</h1>

        <!-- Table -->
        <table>
            <thead>
                <tr>
                    <th>Product ID</th>
                    <th>Product Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($products as $product)
                <tr>
                    <td>{{$product->id}}</td>
                    <td>{{$product->name}}</td>
                    <td>{{$product->quantity}}</td>
                    <td>{{$product->price}}</td>
                    <td>
                        <form action="{{route('products.show',['id'=>$product->id])}}" method="get" style="display:inline;">
                            <input type="submit" value="Show">
                        </form>
                        <form action="{{route('products.edit',['id'=>$product->id])}}" method="get" style="display:inline;">
                            <input type="submit" value="Edit">
                        </form>
                        <form action="{{route('products.delete',['id'=>$product->id])}}" method="post" style="display:inline;">
                            @csrf
                            <input type="submit" value="Delete">
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Add Product Link -->
        <a href="{{route('products.create')}}">Add Product</a>
    </div>

</body>
</html>
