<?php
	$idnya = $_GET['id'];
	$sql = $koneksi->query("delete  from size where id_size='$idnya'");
?>

<script type="text/javascript">
					alert("Data Berhasil di Hapus");
					window.location.href="?page=size";
</script> 