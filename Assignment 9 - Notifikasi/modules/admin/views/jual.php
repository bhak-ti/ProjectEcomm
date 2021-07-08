<div class="container-fluid">
    <h4>Data Pemesanan Produk</h4>
   
    <table class="table table-bordered table-striped table-hover">
        <tr>
            <th>Id Rekap</th>
            <th>Nama Pemesan</th>
            <th>Alamat Pengiriman</th>
            <th>Tanggal Pemesanan</th>
            <th>Batas Pembayaran</th>
            <th>Aksi</th>
        </tr>
       
            <?php foreach ($jual as $jl): ?>
                <tr>
                    <td>
                        <?php echo $jl->id ?>
                    </td>
                    <td>
                        <?php echo $jl->nama ?>
                    </td>
                    <td>
                        <?php echo $jl->alamat ?>
                    </td>
                    <td>
                        <?php echo $jl->tgl_pesan ?>
                    </td>
                    <td>
                        <?php echo $jl->batas_bayar ?>
                    </td>
                    <td>  <?php echo anchor('admin/jual/detail/'.$jl->id,'<div class="btn btn-sm btn-primary">Detail</div>')?></td>
                    
                </tr>
            <?php endforeach; ?>

        
    </table>
</div>