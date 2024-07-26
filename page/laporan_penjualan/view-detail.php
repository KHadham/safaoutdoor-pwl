<div class="row clearfix">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <div class="card">
            <div class="header">
                <h2>
                    DATA LAPORAN PENJUALAN
                </h2>
            </div>
            <div class="body">
                <form method="post" action="page/laporan_penjualan/cetak.php" target="_blank">
                    <div><br>
                        <label>Bulan :</label>
                        <select name="bulan" class="number_format">
                            <option value="">Pilih</option>
                            <option value="1">Januari</option>
                            <option value="2">Februari</option>
                            <option value="3">Maret</option>
                            <option value="4">April</option>
                            <option value="5">Mei</option>
                            <option value="6">Juni</option>
                            <option value="7">Juli</option>
                            <option value="8">Agustus</option>
                            <option value="9">September</option>
                            <option value="10">Oktober</option>
                            <option value="11">November</option>
                            <option value="12">Desember</option>
                        </select>
                        <input type="submit" name="cetak" value="cetak" class="btn btn-primary">
                    </div>
                </form>
            </div>

            <div class="body">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped table-hover js-basic-example dataTable">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Barang</th>
                                <th>Harga Jual</th>
                                <th>Total Harga</th>
                                <th>Untung</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                                include "koneksi.php";
                                $no = 1;
                                $kode = $_GET['kode_penjualan'];
                                $sql = $koneksi->query("SELECT pd.kode_penjualan, brg.*, (pd.jumlah * brg.harga_jual) AS total, (pd.jumlah * (brg.harga_jual - brg.harga_beli)) AS profit FROM tb_penjualan_detail pd JOIN tb_barang brg ON pd.kode_barcode = brg.kode_barcode WHERE pd.kode_penjualan = '$kode'");
                                $total_profit = 0;

                                while ($data = $sql->fetch_assoc()) {
                            ?>
                            <tr>
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $data['nama_barang']; ?></td>
                                <td><?php echo "Rp. " . number_format($data['harga_jual']); ?></td>
                                <td><?php echo "Rp. " . number_format(floatval($data['total'])); ?></td>
                                <td><?php echo "Rp. " . number_format(floatval($data['profit'])); ?></td>
                            </tr>
                            <?php 
                                $total_profit += $data['profit'];
                            } ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th colspan="4" style="text-align: center;">Jumlah Keuntungan</th>
                                <td align="left"><?php echo "Rp. " . number_format($total_profit); ?></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
