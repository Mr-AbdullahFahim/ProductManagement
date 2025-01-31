<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product: {{$product->id}}</title>
    <style>
        /* Basic styling for the page */
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f7fc;
            margin: 0;
            padding: 0;
        }

        /* Table styling */
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px auto;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }

        /* Header row */
        thead {
            background-color: #4CAF50;
            color: #fff;
        }

        thead th {
            padding: 12px 15px;
            text-align: left;
            font-size: 16px;
        }

        /* Table body rows */
        tbody tr {
            border-bottom: 1px solid #ddd;
        }

        tbody td {
            padding: 12px 15px;
            text-align: left;
            font-size: 14px;
            color: #333;
        }

        tbody tr:hover {
            background-color: #f1f1f1;
        }

        /* Last row without border */
        tbody tr:last-child {
            border-bottom: none;
        }

        /* Add spacing between rows */
        tr {
            transition: background-color 0.3s ease;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Product ID</th>
                <th>Product Name</th>
                <th>Quantity</th>
                <th>Price</th> <!-- Added price column -->
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $product->id }}</td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->quantity }}</td>
                <td>{{ $product->price }}</td>
            </tr>
        </tbody>
    </table>
</body>
</html>
