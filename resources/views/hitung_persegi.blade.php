<!DOCTYPE html>
<html>
<head>
    <title>Hitung Persegi</title>
</head>
<body>
    <h2>Hitung Persegi</h2>
    <form action="/hitung-persegi" method="post">
        @csrf
        <label for="sisi">Masukkan Panjang Sisi:</label><br>
        <input type="number" id="sisi" name="sisi"><br><br>
        <button type="submit">Hitung</button>
    </form>
</body>
</html>
