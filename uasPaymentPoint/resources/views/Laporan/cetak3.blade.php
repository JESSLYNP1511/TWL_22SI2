<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Laporan Pengguna</title>
 <style>
 body { font-family: Arial, sans-serif; }
 table { width: 100%; border-collapse: collapse; }
 th, td { padding: 8px; text-align: left; border: 1px solid #ddd; }
 </style>
</head>
<body>
    <h2>Laporan History</h2>
    <table>
        <thead>
                <tr>
                    <th>Customer ID</th>
                    <th>Jenis Transaksi</th>
                    <th>Harga</th>
                    <th>Status</th>
                    <th>Pembayaran Melalui</th>
                </tr>
        </thead>
        <tbody>
            @foreach($data as $history)
                <tr>
                    <td>{{ $history->cust_id }}</td>
                    <td>{{ $history->type }}</td>
                    <td>{{ $history->price }}</td>
                    <td>{{ $history->status }}</td>
                    <td>{{ $history->paymentMethod }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>