<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator Nilai Akhir</title>
</head>
<body>
    <h2>Kalkulator Nilai Akhir</h2>
    <form method="post">
        Nilai Tugas: <input type="number" name="tugas" step="0.1" min="0" max="100" required><br>
        Nilai UTS: <input type="number" name="uts" step="0.1" min="0" max="100" required><br>
        Nilai UAS: <input type="number" name="uas" step="0.1" min="0" max="100" required><br>
        <input type="submit" name="hitung" value="Hitung">
    </form>

    <?php
    if (isset($_POST['hitung'])) {
        $tugas = $_POST['tugas'];
        $uts = $_POST['uts'];
        $uas = $_POST['uas'];
        
        // Hitung nilai total
        $total = (0.2 * $tugas) + (0.3 * $uts) + (0.5 * $uas);
        
        // Tentukan kategori nilai
        if ($total >= 96) {
            $kategori = "A";
        } elseif ($total >= 91) {
            $kategori = "A-";
        } elseif ($total >= 86) {
            $kategori = "B+";
        } elseif ($total >= 81) {
            $kategori = "B";
        } elseif ($total >= 76) {
            $kategori = "B-";
        } elseif ($total >= 71) {
            $kategori = "C+";
        } elseif ($total >= 65) {
            $kategori = "C";
        } elseif ($total >= 60) {
            $kategori = "C-";
        } elseif ($total >= 45) {
            $kategori = "D";
        } else {
            $kategori = "E";
        }
        
        // Tampilkan hasil
        echo "<h3>Hasil Perhitungan:</h3>";
        echo "<table border='1'>";
        echo "<tr><th>Komponen</th><th>Nilai</th><th>Bobot</th><th>Hasil</th></tr>";
        echo "<tr><td>Tugas</td><td>$tugas</td><td>20%</td><td>".(0.2*$tugas)."</td></tr>";
        echo "<tr><td>UTS</td><td>$uts</td><td>30%</td><td>".(0.3*$uts)."</td></tr>";
        echo "<tr><td>UAS</td><td>$uas</td><td>50%</td><td>".(0.5*$uas)."</td></tr>";
        echo "<tr><td colspan='3'><strong>Total Nilai</strong></td><td><strong>$total</strong></td></tr>";
        echo "<tr><td colspan='3'><strong>Kategori Nilai</strong></td><td><strong>$kategori</strong></td></tr>";
        echo "</table>";
    }
    ?>
</body>
</html>