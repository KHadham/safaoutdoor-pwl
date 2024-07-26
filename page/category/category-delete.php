<?php
$idnya = $_GET['idx'];
$sql = $koneksi->query("delete from category where id_category='$idnya'");
?>

<script type="text/javascript">
	alert("Data Berhasil di Hapus");
	window.location.href = "?page=category";
</script>