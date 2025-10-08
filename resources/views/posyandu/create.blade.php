<!DOCTYPE html>
<html>
<head>
    <title>Tambah Posyandu</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; background: #f9f9f9; }
        h1 { color: #333; }
        form { background: white; padding: 20px; border-radius: 8px; width: 350px; }
        label { display: block; margin-top: 10px; font-weight: bold; }
        input { width: 100%; padding: 8px; margin-top: 5px; border: 1px solid #ccc; border-radius: 4px; }
        button {
            margin-top: 15px; padding: 10px; background: #4CAF50; color: white;
            border: none; border-radius: 5px; cursor: pointer; width: 100%;
        }
        button:hover { background: #45a049; }
    </style>
</head>
<body>
    <h1>➕ Tambah Posyandu</h1>
    <form>
        <label>Nama</label>
        <input type="text" name="nama">

        <label>Alamat</label>
        <input type="text" name="alamat">

        <label>RT</label>
        <input type="text" name="rt">

        <label>RW</label>
        <input type="text" name="rw">

        <label>Kontak</label>
        <input type="text" name="kontak">

        <button type="submit">Simpan</button>
    </form>
</body>
</html>