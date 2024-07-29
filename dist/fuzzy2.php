<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bumil";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$gejala_input = isset($_POST['gejala2']) ? $_POST['gejala2'] : [];

if (empty($gejala_input)) {
    echo "<script>alert('Tidak ada gejala yang dipilih');</script>";
    echo "<script>window.location.href='Trimester 2.php';</script>";
    //echo "Tidak ada gejala yang dipilih.";
    exit;
}

$penyakit_score = [];

foreach ($gejala_input as $gejala2) {
    $sql = "SELECT kode_penyakit, nilai_fuzzy FROM aturan2 WHERE kode_gejala = '$gejala2'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $penyakit2 = $row['kode_penyakit'];
            $nilai_fuzzy = $row['nilai_fuzzy'];
            
            if (!isset($penyakit_score[$penyakit2])) {
                $penyakit_score[$penyakit2] = 0;
            }
            $penyakit_score[$penyakit2] += $nilai_fuzzy;
        }
    }
}



arsort($penyakit_score);

$kode_penyakit_terdiagnosis = key($penyakit_score);
$sql = "SELECT nama_penyakit FROM penyakit2 WHERE kode_penyakit = '$kode_penyakit_terdiagnosis'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $nama_penyakit_terdiagnosis = $row['nama_penyakit'];
    echo "<script>alert('Penyakit yang terdiagnosis:  $nama_penyakit_terdiagnosis');</script>";
    echo "<script>window.location.href='Trimester 2.php';</script>";
    //echo "Penyakit yang terdiagnosis: " . $nama_penyakit_terdiagnosis;
} else {
    echo "<script>alert('Tidak ada diagnosis yang sesuai');</script>";
    echo "<script>window.location.href='Trimester 2.php';</script>";
    //echo "Tidak ada diagnosis yang sesuai.";
}

$conn->close();
?>
 