<?php
	$kode = $_GET['id'];
	$sql = $koneksi->query("delete from customers where id_customer='$kode'");
?>

<script type="text/javascript">
					alert("Data Berhasil di Hapus");
					window.location.href="?page=konsumen";
</script> 