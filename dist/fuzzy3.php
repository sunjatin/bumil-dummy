<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bumil";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$gejala_input = isset($_POST['gejala3']) ? $_POST['gejala3'] : [];

if (empty($gejala_input)) {
    echo "<script>alert('Tidak ada gejala yang dipilih');</script>";
    echo "<script>window.location.href='Trimester 3.php';</script>";
    //echo "Tidak ada gejala yang dipilih.";
    exit;
}

$penyakit_score = [];

foreach ($gejala_input as $gejala3) {
    $sql = "SELECT kode_penyakit, nilai_fuzzy FROM aturan3 WHERE kode_gejala = '$gejala3'";
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $penyakit3 = $row['kode_penyakit'];
            $nilai_fuzzy = $row['nilai_fuzzy'];
            
            if (!isset($penyakit_score[$penyakit3])) {
                $penyakit_score[$penyakit3] = 0;
            }
            $penyakit_score[$penyakit3] += $nilai_fuzzy;
        }
    }
}



arsort($penyakit_score);

$kode_penyakit_terdiagnosis = key($penyakit_score);
$sql = "SELECT nama_penyakit FROM penyakit3 WHERE kode_penyakit = '$kode_penyakit_terdiagnosis'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $nama_penyakit_terdiagnosis = $row['nama_penyakit'];
    echo "<script>alert('Penyakit yang terdiagnosis:  $nama_penyakit_terdiagnosis');</script>";
    echo "<script>window.location.href='Trimester 3.php';</script>";
    //echo "Penyakit yang terdiagnosis: " . $nama_penyakit_terdiagnosis;
} else {
    echo "<script>alert('Tidak ada diagnosis yang sesuai');</script>";
    echo "<script>window.location.href='Trimester 3.php';</script>";
    //echo "Tidak ada diagnosis yang sesuai.";
}

$conn->close();
?>
 