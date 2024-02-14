<!DOCTYPE html>
<html>
<head>
    <title>Hitung Segitiga</title>
</head>
<body>
    <h2>Hitung Segitiga</h2>
    <form action="/hitung-segitiga" method="post">
        @csrf
        <label for="alas">Masukkan Alas:</label><br>
        <input type="number" id="alas" name="alas"><br><br>
        <label for="tinggi">Masukkan Tinggi:</label><br>
        <input type="number" id="tinggi" name="tinggi"><br><br>
        <button type="submit">Hitung</button>
    </form>
</body>
</html>
