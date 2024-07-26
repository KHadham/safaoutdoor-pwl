<?php
$idnya = $_GET['idx'];
$sql = $koneksi->query("delete from rentals where id_rental = '$idnya'");
?>

<script type="text/javascript">
	alert("Data Berhasil di Hapus");
	window.location.href = "?page=rentals";
</script>