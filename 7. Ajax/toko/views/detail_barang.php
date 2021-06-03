<div class="container-fluid">
<div class="card">
  <div class="card-header">
    Detail Produk
  </div>
  <div class="card-body">
      <?php foreach($produk as $prd) : ?>
    <div class="row">
        <div class="col-md-4 mb-3">
            <img src="<?php echo base_url().'/gambar/'.$prd->gambar ?>" alt="" style="width:230px;height:220px;">
        </div>
        <div class="col-md-8">
            <table class="table">
                <tr>
                    <td>Nama Produk</td>
                    <td><strong><?php echo $prd->nm_brg?></strong></td>
                </tr>
                <tr>
                    <td>Jenis</td>
                    <td><strong><?php echo $prd->merk?></strong></td>
                </tr>
                <tr>
                    <td>Stok</td>
                    <td><strong><?php echo $prd->stok?></strong></td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td><strong>Rp. <div class="btn btn-sm btn-success"><?php echo number_format($prd->harga,00,',','.')?></div></strong></td>
                </tr>
            </table>
            <?php echo anchor('toko/dashboard/tambah_keranjang/'.$prd->id_brg,'<div class="btn btn-sm btn-primary">Tambah ke Keranjang</div>')?>
          <?php echo anchor('toko/dashboard','<div class="btn btn-sm btn-danger">Kembali</div>')?>  

            
        </div>
    </div>
        <?php endforeach; ?>
  </div>
</div>
</div>