<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Insert new Data</h1>
    <form action="/product" method="post">
        {{csrf_field()}}
        <div>
            <label for="">Nama Produk</label>
            <input type="text" name="nama_produk">
        </div>
        <div>
            <label for="">Harga Produk</label>
            <input type="number" name="harga_produk">
        </div>
        <div>
            <label for="">Stok Produk</label>
            <input type="number" name="stok_produk">
        </div>
        <div>
            <label for="">Nama Produk</label>
            <textarea name="deskripsi_produk" id="" cols="30" rows="10"></textarea>
        </div>
        <div>
            <button type="submit">Simpan</button>
        </div>
    </form>
</body>
</html>