<!DOCTYPE html>
<html>
<head>
    <title>Data Posyandu</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; background: #f9f9f9; }
        h1 { color: #333; }
        a.button {
            display: inline-block; padding: 8px 12px; margin-bottom: 15px;
            background: #4CAF50; color: white; text-decoration: none;
            border-radius: 5px; font-size: 14px;
        }
        table { width: 100%; border-collapse: collapse; background: white; }
        th, td { padding: 10px; border: 1px solid #ccc; text-align: left; }
        th { background: #4CAF50; color: white; }
        tr:nth-child(even) { background: #f2f2f2; }
        .action a {
            color: #2196F3; text-decoration: none; margin-right: 5px;
        }
    </style>
</head>
<body>
    <h1>📋 Daftar Posyandu</h1>
    <a href="{{ route('posyandu.create') }}" class="button">+ Tambah Posyandu</a>
    
    <table>
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>RT</th>
        <th>RW</th>
        <th>Kontak</th>
        <th>Foto</th>
        <th>Alat / Media</th>
        <th>Aksi</th>
    </tr>
    @foreach($data as $p)
    <tr>
        <td>{{ $p['id'] }}</td>
        <td>{{ $p['nama'] }}</td>
        <td>{{ $p['alamat'] }}</td>
        <td>{{ $p['rt'] }}</td>
        <td>{{ $p['rw'] }}</td>
        <td>{{ $p['kontak'] }}</td>
        <td>
            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTylvfx5RAWQyIcGiuumgYY_rNDQ6qt1KiP1Q&s" alt="Foto Posyandu" width="80">
        </td>
        <td>{{ $p['alat_media'] }}</td>
        <td>
            <a href="{{ route('posyandu.edit', $p['id']) }}">✏️ Edit</a>
        </td>
    </tr>
    @endforeach
</table>
</body>
</html>