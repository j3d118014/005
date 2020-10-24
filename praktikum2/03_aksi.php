<?php
    if ($_GET['aksi']=="Edit"){
        echo "<h2>Form Edit</h2>";
        ?>
        <form>
            <input type="text" name="nm">
            <input type="submit" name="sub" value="simpan perubahan">
            <input type="submit" name="sub" value="kembali ke tampilan data">
            echo"<input type="hidden" name="idupdate" value="<?php echo $_GET['id'] ?>">

        </form>
        <?php
        if (isset($_GET['sub'])){
            if ($_GET['sub']=="kembali ke tampilan data"){
                header("location:01_tampildata.php");
            }
            else{
                if (strlen ($_GET['nm'])){
                    include "koneksi.php";
                    mysqli_query($kon,"UPDATE `mahasiswa` SET `nama` = '".$_GET[."' WHERE `mahasiswa`.`id` = ";);
                    echo "Nama Baru". $_GET['nm']."telah disimpan";
                }
            }
        }


    }

    else {
        echo "Akan delete";
    }

?>