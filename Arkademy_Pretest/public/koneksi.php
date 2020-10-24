<?php 
class database{
	var $host = "localhost";
	var $username = "root";
	var $password = "";
	var $database = "arkademy";
 
	function __construct(){
		$this->koneksi = mysqli_connect($this->host, $this->username, $this->password,$this->database);
			if (mysqli_connect_errno()){
			echo "Koneksi database gagal : " . mysqli_connect_error();
		}
	}
		function tampil_data()
	{
		$data = mysqli_query($this->koneksi,"select * from produk");
		while($row = mysqli_fetch_array($data)){
			if ($row != '') {
				$hasil[] = $row;
			}else{
				echo'Data Kosong';
			}
			
		}
		return $hasil;
	}
		function tambah_data($nama_product,$keterangan,$harga,$jumlah)
	{
		mysqli_query($this->koneksi,"insert into produk values ('','$nama_product','$keterangan','$harga','$jumlah')");
	}
		function update_data($nama_product,$keterangan,$harga,$jumlah,$id_product)
	{
		$query = mysqli_query($this->koneksi,"update produk set nama_product='$nama_product',keterangan='$keterangan',harga='$harga',jumlah='$jumlah' where id='$id_product'");
	}	
		function delete_data($id_product)
	{
		$query = mysqli_query($this->koneksi,"delete from produk where id='$id_product'");
	}
} 

$koneksi = new database();
