<div class="container-fluid">
    <h3 ><i class="fas da-edit"></i> EDIT DATA BARANG</h3>
    <?php foreach($produk as $prd) :?>
        <form method="post" action="<?php echo base_url().'admin/data_produk/update'; ?>" enctype="multipart/form-data">
        <div class="form-group">
                   <label >ID Produk</label>
                   <input class="form-control" type="number" name="id" value="<?php echo $prd->id_brg ?>" readonly>
               </div> 

               <div class="form-group">
                   <label >Nama Produk</label>
                   <input class="form-control" type="text" name="nm_brg"  value="<?php echo $prd->nm_brg ?>">
               </div> 

               <div class="form-group">
                   <label >Merk Produk</label>
                   <input class="form-control" type="text" name="merk"value="<?php echo $prd->merk ?>">
               </div> 

               <div class="form-group">
                   <label >Stok Produk</label>
                   <input class="form-control" type="text" name="stok" value="<?php echo $prd->stok ?>">
               </div> 

               <div class="form-group">
                   <label >Harga</label>
                   <input class="form-control" type="number" name="harga" value="<?php echo $prd->harga ?>">
               </div> 

             <div class="form-group">
                   <label >Gambar</label>
                   <div>
             <img src="<?php echo base_url().'/gambar/'.$prd->gambar ?>" class="card-img-top" alt="..." style="height:200px; width:200px">
             </div>
                   <input class="form-control" type="file" name="gambar" value="<?php echo $prd->gambar ?>">
               </div> 
     

              
             <div class="modal-footer">
      <?php echo anchor('admin/data_produk','<div class="btn btn-md btn-danger">Kembali</div>')?> 
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
        </form>

    <?php endforeach; ?>
</div>