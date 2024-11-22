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
    <h2>Laporan Pengguna</h2>
    <table>
        <thead>
                <tr>
                    <th>Nama</th>
                    <th>Jabatan</th>
                </tr>
        </thead>
        <tbody>
            @foreach($data as $pegawai)
                <tr>
                    <td>{{ $pegawai->namaPegawai }}</td>
                    <td>{{ $pegawai->jabatan }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>