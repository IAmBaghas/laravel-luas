<!DOCTYPE html>
<html>
<head>
    <title>Hitung Lingkaran</title>
</head>
<body>
    <h2>Hitung Lingkaran</h2>
    <form action="/hitung-lingkaran" method="post">
        @csrf
        <label for="jari_jari">Masukkan Jari-Jari:</label><br>
        <input type="number" id="jari_jari" name="jari_jari"><br><br>
        <button type="submit">Hitung</button>
    </form>
</body>
</html>
