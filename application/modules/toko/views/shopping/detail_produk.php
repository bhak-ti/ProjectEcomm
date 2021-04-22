<h2><?php echo $produk['nama_produk']; ?></h2>
<form method="post" action="<?php echo base_url(); ?>toko/shopping/tambah" method="post" accept-charset="utf-8">
    <div class="kotak2">
        <img class="img-responsive" src="<?php echo base_url() . 'assets/images/' . $produk['gambar']; ?>" />
        <h5>Harga: Rp. <?php echo number_format($produk['harga'], 0, ",", "."); ?></h5>
        <p class="card-text">
            <strong> <u>Deskripsi</u></strong><br>
            <?php echo $produk['deskripsi']; ?>
        </p>
        <input type="hidden" name="id" value="<?php echo $produk['id_produk']; ?>" />
        <input type="hidden" name="nama" value="<?php echo $produk['nama_produk']; ?>" />
        <input type="hidden" name="harga" value="<?php echo $produk['harga']; ?>" />
        <input type="hidden" name="gambar" value="<?php echo $produk['gambar']; ?>" />
        <input type="hidden" name="qty" value="1" />
        <button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-shopping-cart"></i> Beli Produk Ini</button>
    </div>
</form>