<!DOCTYPE html>
<html>
<head>
    <title>Laporan Jenis</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Laporan Jenis: {{ $type }}</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Email</th>
                <th>Transaction Type</th>
                <th>Price</th>
                <th>Status</th>
                <th>Payment Method</th>
                <th>Date</th>
                <th>Reference Number</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
                <tr>
                    <td>{{ $item->cust_id }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->type }}</td>
                    <td>{{ $item->price }}</td>
                    <td>{{ $item->status }}</td>
                    <td>{{ $item->paymentMethod }}</td>
                    <td>{{ $item->date }}</td>
                    <td>{{ $item->refNo }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
