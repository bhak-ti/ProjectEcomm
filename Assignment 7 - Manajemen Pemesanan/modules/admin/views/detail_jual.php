<div class="container-fluid">
    <h4>Detail Penjualan <div class="btn btn-sm btn-succes">No. Jual:
        <?php echo $jual->id ?>
      
    </div></h4>
    
    <table class="table table-bordered table-striped table-hover">
        <tr>
            <th>Nomor</th>
            <th>Nama Produk</th>
            <th>Jumlah Pesanan</th>
            <th>Harga Satuan</th>
            <th>Sub Total</th>
          
        </tr>
       
            <?php $total=0;
            foreach ($pesanan as $psn):
            $subtotal=$psn->jumlah * $psn->harga;
            $total += $subtotal; ?>
                <tr>
                    <td>
                        <?php echo $psn->id_brg ?>
                    </td>
                    <td>
                        <?php echo $psn->nm_brg ?>
                    </td>
                    <td>
                        <?php echo $psn->jumlah ?>
                    </td>
                    <td>
                        <?php echo number_format($psn->harga,0,',','.') ?>
                    </td>
                    <td>
                        <?php echo number_format($subtotal,0,',','.') ?>
                    </td>
                   
                    
                </tr>
            <?php endforeach; ?>
            <tr>
                <td colspan="4">Total Bayar</td>
                <td>
                Rp. <?php echo number_format($total,0,',','.') ?>
                </td>
            </tr>

        
    </table>
    <a href=" <?php echo base_url('admin/jual/index') ?>"><div class="btn btn-sm btn-primary">Kembali</div></a>
</div>