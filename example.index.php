<!DOCTYPE html>
<html>
<head>
    <title>Sistem Pakar Diagnosis Kelainan Ibu Hamil</title>
</head>
<body>
    <h2>Sistem Pakar Diagnosis Kelainan Ibu Hamil</h2>
    <form method="post" action="scripts/fuzzy.php">
        <label><input type="checkbox" name="gejala[]" value="G01"> Pendarahan</label><br>
        <label><input type="checkbox" name="gejala[]" value="G02"> Nyeri Perut</label><br>
        <label><input type="checkbox" name="gejala[]" value="G03"> Mual</label><br>
        <label><input type="checkbox" name="gejala[]" value="G04"> Muntah Pagi Hari</label><br>
        <label><input type="checkbox" name="gejala[]" value="G05"> Pusing</label><br>
        <label><input type="checkbox" name="gejala[]" value="G06"> Mengganggu Aktivitas</label><br>
        <label><input type="checkbox" name="gejala[]" value="G07"> Kurang Nutrisi</label><br>
        <label><input type="checkbox" name="gejala[]" value="G08"> Flek</label><br>
        <label><input type="checkbox" name="gejala[]" value="G09"> Jaringan Keluar</label><br>
        <label><input type="checkbox" name="gejala[]" value="G010"> Nyeri Perut</label><br>
        <label><input type="checkbox" name="gejala[]" value="G011"> Nyeri Goyang Porsio</label><br>
        <input type="submit" value="Diagnosa">
    </form>
</body>
</html>
