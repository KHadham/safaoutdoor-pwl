<?php
include_once("../../koneksi.php"); 
?>
<html>
<head>
  <title>LAPORAN PENJUALAN BARANG</title>
  <style>
    table {
      width: 100%;
      border-collapse: collapse;
    }
    table, th, td {
      border: 1px solid black;
    }
    th, td {
      padding: 8px;
      text-align: left;
    }
    th {
      background-color: #f2f2f2;
    }
  </style>
</head>
<body>
  <center>
    <h2>LAPORAN PENJUALAN BARANG</h2>
    <h2>PT. SAFA OUTDOORS</h2>
  </center>
  <?php
  $nama_bulan = array(' ', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember');
  if (isset($_POST['bulan']) && isset($nama_bulan[$_POST['bulan']])) {
    echo '<b>Data Transaksi Bulan ' . $nama_bulan[$_POST['bulan']] . '</b><br /><br />';
  } else {
    echo 'Bulan tidak tersedia atau tidak valid.<br /><br />';
  }
  ?>
  <table>
    <tr>
      <th width="1%">No</th>
      <th>Tanggal</th>
      <th>Nama Barang</th>
      <th>Harga Beli</th>
      <th>Jumlah Terjual</th>
      <th>Harga Jual</th>
      <th>Diskon</th>
      <th>Total Harga</th>
      <th>Untung</th>
    </tr>
    <?php 
    $no = 1;
    $total_profit = 0;
    $sql = mysqli_query($koneksi, "SELECT p.tgl_penjualan, b.nama_barang, b.harga_beli, d.jumlah, b.harga_jual, d.potongan, ((b.harga_jual * d.jumlah - d.potongan)) AS total, (d.jumlah * ((b.harga_jual - d.potongan) - b.harga_beli)) AS profit FROM tb_penjualan p LEFT JOIN tb_penjualan_detail d ON p.kode_penjualan = d.kode_penjualan LEFT JOIN tb_barang b ON b.kode_barcode = d.kode_barcode WHERE MONTH(p.tgl_penjualan) = '$_POST[bulan]'");
    while($data = mysqli_fetch_array($sql)){
    ?>
    <tr>
      <td><?php echo $no++; ?></td>
      <td><?php echo $data['tgl_penjualan']; ?></td>
      <td><?php echo $data['nama_barang']; ?></td>
      <td><?php echo "Rp. " . number_format($data['harga_beli']); ?></td>
      <td><?php echo $data['jumlah']; ?></td>
      <td><?php echo "Rp. " . number_format($data['harga_jual']); ?></td>
      <td><?php echo "Rp. " . number_format($data['potongan']); ?></td>
      <td><?php echo "Rp. " . number_format($data['total']); ?></td>
      <td><?php echo "Rp. " . number_format($data['profit']); ?></td>
    </tr>
    <?php 
    $total_profit += $data['profit'];
    } 
    ?>
    <tr>
      <th colspan="8" style="text-align: center;">Jumlah Keuntungan</th>
      <td align="left"><?php echo "Rp. " . number_format($total_profit); ?></td>
    </tr>
  </table>
  <br>
  <div align="right">Pimpinan</div>
  <br>
  <div align="right">Safa Outdoor</div>
  <script>
    window.print();
  </script>
</body>
</html>
