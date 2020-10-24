<?php 
include('koneksi.php');
$koneksi = new database();
$action = $_GET['action'];
if($action == "add")
{
	$koneksi->tambah_data(htmlspecialchars($_POST['nama_product']),htmlspecialchars($_POST['keterangan']),htmlspecialchars($_POST['harga']),htmlspecialchars($_POST['jumlah']));
	echo "<script>alert(\"Product Berhasil dimasukan\");
            window.location.href=\"index.php\"
        </script>";

}elseif($action=="update")
{
	$koneksi->update_data(htmlspecialchars($_POST['nama_product']),htmlspecialchars($_POST['keterangan']),htmlspecialchars($_POST['harga']),htmlspecialchars($_POST['jumlah']),htmlspecialchars($_POST['id_product']));
	echo "<script>alert(\"Product Berhasil diedit\");
            window.location.href=\"index.php\"
        </script>";
}elseif($action=="delete")
{
    $id_product = $_GET['id'];
	$koneksi->delete_data($id_product);
	echo "<script>alert(\"Product Berhasil dihapus\");
            window.location.href=\"index.php\"
        </script>";
}
 