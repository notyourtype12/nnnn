<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>


<form method="POST">
    <b>Cek Oksigen terlarut / DO</b><br>
    <div class="">
        <div class="input-group mt-2">
            <input type="text" class="" placeholder="Nominal (mg/l)" name="nominal">
            <button class="btn btn-primary" type="submit">Cek</button>
        </div>
    </div>
</form>
<?php
if ($_POST) {
    $swep = htmlspecialchars($_REQUEST['nominal']);;
    if ($swep > 3) {
        $ket = "Sesuai baku mutu";
    } elseif ($swep < 3) {
        $ket = "Dibawah standar baku mutu";
    } elseif ($swep = 3) {
        $ket = "Sesuai baku mutu";
    } else {
        $ket = "eror";
    }

    echo "Hasil Pengecekan";
    echo "<br>";
    echo "Nominal (mg/l) : " . $swep;
    echo "<br>";
    echo "Keterangan : " . $ket;
    echo "<br>";
}
?>