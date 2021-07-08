<div class="container-fluid" >
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" >
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner" >
      <div class="carousel-item active">
        <img src="<?php echo base_url('assets/img/road.jpg') ?>" class="d-block w-100" alt="..." style="height:400px">
      </div>
      <div class="carousel-item">
        <img src="<?php echo base_url('assets/img/ice.jpg') ?>" class="d-block w-100" alt="..." style="height:400px">
      </div>
      <div class="carousel-item">
        <img src="<?php echo base_url('assets/img/tree.jpg') ?>" class="d-block w-100" alt="..." style="height:400px">
      </div>
    
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <div class="row text-center mt-3">
    <?php foreach ($produk as $prd) : ?>
      <div class="card ml-3 mb-3" style="width: 18rem; ">
       <center><img src="<?php echo base_url().'/gambar/'.$prd->gambar ?>" class="card-img-top" alt="..." style="height:200px; width:200px"></center> 
        <div class="card-body">
          <h6 class="card-title " ><?php echo $prd->nm_brg?></h6>
        
        <p><small style="padding-top: 3rem;"><?php echo $prd->merk?></small>
        
        <span class="badge badge-pill badge-success mb-2">Rp. <?php echo number_format($prd->harga,0,',','.')?> </span></p>
          
          <?php echo anchor('toko/dashboard/tambah_keranjang/'.$prd->id_brg,'<div class="btn btn-sm btn-primary">Tambah ke Keranjang</div>')?>
          <?php echo anchor('toko/dashboard/detail/'.$prd->id_brg,'<div class="btn btn-sm btn-success" >Detail</div>')?>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>