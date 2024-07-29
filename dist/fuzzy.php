<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bumil";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$gejala_input = isset($_POST['gejala']) ? $_POST['gejala'] : [];

if (empty($gejala_input)) {
    echo "<script>alert('Tidak ada gejala yang dipilih');</script>";
    echo "<script>window.location.href='Trimester 1.php';</script>";
    //echo "Tidak ada gejala yang dipilih.";
    exit;
}

$penyakit_score = [];

foreach ($gejala_input as $gejala) {
    $sql = "SELECT kode_penyakit, nilai_fuzzy FROM aturan WHERE kode_gejala = '$gejala'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $penyakit = $row['kode_penyakit'];
            $nilai_fuzzy = $row['nilai_fuzzy'];
            
            if (!isset($penyakit_score[$penyakit])) {
                $penyakit_score[$penyakit] = 0;
            }
            $penyakit_score[$penyakit] += $nilai_fuzzy;
        }
    }
}



arsort($penyakit_score);

$kode_penyakit_terdiagnosis = key($penyakit_score);
$sql = "SELECT nama_penyakit FROM penyakit WHERE kode_penyakit = '$kode_penyakit_terdiagnosis'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $nama_penyakit_terdiagnosis = $row['nama_penyakit'];
    echo "<script>alert('Penyakit yang terdiagnosis:  $nama_penyakit_terdiagnosis');</script>";
    echo "<script>window.location.href='Trimester 1.php';</script>";
    //echo "Penyakit yang terdiagnosis: " . $nama_penyakit_terdiagnosis;
} else {
    echo "<script>alert('Tidak ada diagnosis yang sesuai');</script>";
    echo "<script>window.location.href='Trimester 1.php';</script>";
    //echo "Tidak ada diagnosis yang sesuai.";
}

$conn->close();
?>
 