<div class="container-fluid">
    <button class="btn btn-sm btn-primary mb-3" data-toggle="modal" data-target="#tambah_produk"><i class="fas fa-plus fa-sm"></i> Tambah Barang</button>
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>NAMA BARANG</th>
            <th>MERK</th>
            <th>STOK</th>
            <th>HARGA</th>
           
            <th colspan="3">AKSI</th>
        </tr>
        <?php 
        $no=1;
        foreach($produk as $prd): ?>
            <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $prd->nm_brg ?></td>
                <td><?php echo $prd->merk ?></td>
                <td><?php echo $prd->stok ?></td>
                <td>Rp. <?php echo number_format($prd->harga,0,',','.') ?></td>
                
              
                <td><?php echo anchor('admin/data_produk/edit/'.$prd->id_brg,'<div class="btn btn-primary btn-sm"><i class="fa fa-edit "></i></div>') ?></td>
                <td><?php echo anchor('admin/data_produk/hapus/'.$prd->id_brg,'<div class="btn btn-danger btn-sm"><i class="fas fa-trash "></i></div>') ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>

<!-- Modal -->
<div class="modal fade" id="tambah_produk" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Form Input Produk</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
            <form action="<?php echo base_url().'admin/data_produk/tambah_aksi'; ?>"method=POST enctype="multipart/form-data">
                <div class="form-group">
                   <label >ID Produk</label>
                   <input class="form-control" type="number" name="id" >
               </div> 

               <div class="form-group">
                   <label >Nama Produk</label>
                   <input class="form-control" type="text" name="nm_brg" >
               </div> 

               <div class="form-group">
                   <label >Merk Produk</label>
                   <input class="form-control" type="text" name="merk" >
               </div> 

               <div class="form-group">
                   <label >Stok Produk</label>
                   <input class="form-control" type="text" name="stok" >
               </div> 

               <div class="form-group">
                   <label >Harga</label>
                   <input class="form-control" type="number" name="harga" >
               </div> 

               <div class="form-group">
                   <label >Gambar (Link)</label>
                   <input class="form-control" type="file" name="gambar" >
               </div> 
            
      </div>
      <div class="modal-footer">
        <button type="close" class="btn btn-danger" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
      </form>
    </div>
  </div>
</div>