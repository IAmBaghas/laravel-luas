<!DOCTYPE html>
<html>
<head>
    <title>Hitung Persegi Panjang</title>
</head>
<body>
    <h2>Hitung Persegi Panjang</h2>
    <form action="/hitung-persegi-panjang" method="post">
        @csrf
        <label for="panjang">Masukkan Panjang:</label><br>
        <input type="number" id="panjang" name="panjang"><br><br>
        <label for="lebar">Masukkan Lebar:</label><br>
        <input type="number" id="lebar" name="lebar"><br><br>
        <button type="submit">Hitung</button>
    </form>
</body>
</html>
