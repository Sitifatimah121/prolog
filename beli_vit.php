<?php

$jumlah_vit = $_POST['jumlah_vit'];
// $harga_obat = $id;

// function beli_obat($psy,$psj)
function beli_vit($psj)
{
    // modul2
    $file = fopen("beli_vit.pl", "a+") or die("Unable to open file!");

    // if (!empty($psy, $psj)) {
    if (!empty($psj)) {

        //modul2
        // fprintf($file, "listPertama($psy).\n");
        fprintf($file, "listKedua($psj).\n");
    }

    fclose($file);
}


// echo beli_obat($jumlah_obat, $jenis_sakit);
echo beli_vit($jumlah_vit);
$cmd = "\"c:/program files/swipl/bin/swipl.exe\" -f beli_vit.pl -g tambah_vit,halt"; 
$cmd2 = "\"c:/program files/swipl/bin/swipl.exe\" -f beli_vit.pl -g jumlah_pesanan,halt";  
$out1 = exec($cmd); 
$out2 = exec($cmd2);

?>


        <h2>Daftar belanja Anda adalah : <span style="color: coral">[<?php echo $out1 ?>]</span></h2>
        <h2>Total belanja Anda adalah Rp. <span style="color: coral"><?php echo $out2 ?></span></h2>
            <form action="bayar_obat.php" method="POST">
                <div class="form-group">
                    <label for="exampleInputEmail1">Masukkan Nama : </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Angka list" name="nama">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Masukkan Alamat : </label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Angka list" name="alamat">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
    