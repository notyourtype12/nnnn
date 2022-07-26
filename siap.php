<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

<div class="dark_mode">

</div>

<style>
    .member-icon,
    .smaller_icons,
    .main_logo,
    .footer_lower_part img,
    .first_smalls {
        filter: invert(0);
    }

    html,
    img,
    .partnerimg,
    .b_l_contacts,
    .logo_holder,
    .dark_mode {
        filter: invert(1);
    }
</style>


<form action="" method="POST">
    <b>Cek Bahan Organik Maksimal</b><br>
    <div class="input-group mt-2">
        <input type="text" class="" placeholder="Nominal (mg/l)" name="nominal">
        <button class="btn btn-primary" type="submit">Go</button>
    </div>
</form>
<?php
if ($_POST) {
    $nilai = $_POST['nominal'];

    if ($nilai > 55) {
        $keterangan = "Melebihi baku mutu";
    } elseif ($nilai < 55) {
        $keterangan = "Sesuai baku mutu";
    } elseif ($nilai = 55) {
        $keterangan = "Sesuai baku mutu";
    }
    echo "Hasil Pengecekan";
    echo "<br>";
    echo "Nominal (mg/l) : " . $nilai;
    echo "<br>";
    echo "Keterangan : " . $keterangan;
    echo "<br>";
}


?>
<br>
<br>
<br>