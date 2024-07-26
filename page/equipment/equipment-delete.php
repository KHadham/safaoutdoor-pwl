<?php
$idnya = $_GET['idx'];
$sql = $koneksi->query("delete from equipment where id_equipment='$idnya'");
?>

<script type="text/javascript">
	alert("Data Berhasil di Hapus");
	window.location.href = "?page=equipment";
</script>