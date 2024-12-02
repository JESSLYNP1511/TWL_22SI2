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
    <h2>Laporan User</h2>
    <table>
        <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Phone Number</th>
                </tr>
        </thead>
        <tbody>
            @foreach($data as $userInformation)
                <tr>
                    <td>{{ $userInformation->cust_id }}</td>
                    <td>{{ $userInformation->nama }}</td>
                    <td>{{ $userInformation->email }}</td>
                    <td>{{ $userInformation->alamat }}</td>
                    <td>{{ $userInformation->noHp }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>