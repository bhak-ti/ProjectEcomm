<div class="container-fluid">
    <div class="row">
        <div class="col-md-2"></div>
        
        <div class="col-md-8">
            <div class="btn btn-sm btn-success">
                <?php $total_bayar = 0;
                if($keranjang = $this->cart->contents())
                {
                    foreach($keranjang as $item)
                    {
                        $total_bayar= $total_bayar + $item['subtotal'];
                    }
                    echo "Total Belanja Anda: Rp. ".number_format($total_bayar,00,',','.');
                 ?>
            </div><br><br>
            <h3>Input Alamat Pengiriman dan Pembayaran</h3>
            <form method="post" action="<?php echo base_url() ?>toko/dashboard/proses_pesanan">
               <div class="form-group">
                   <label >Nama Lengkap</label>
                   <input class="form-control" type="text" name="nama" placeholder="Nama Lengkap Anda">
               </div> 

               <div class="form-group">
                   <label >Alamat Lengkap</label>
                   <input class="form-control" type="text" name="alamat" placeholder="Alamat Lengkap Anda">
               </div> 
               
               <div class="form-group">
                   <label >Nomor Telepon</label>
                   <input class="form-control" type="number" name="telp" placeholder="08XXXXXXXXX">
               </div> 

               <div class="form-group">
                   <label>Jasa Pengiriman</label>
                   <select class="form-control" >
                       <option >JNE</option>
                       <option >TIKI</option>
                       <option >GOJEK</option>
                       <option >GRAB</option>
                   </select>
               </div> 

               <div class="form-group">
                   <label>Pilih BANK</label>
                   <select class="form-control">
                       <option >BCA-XXXXXXX</option>
                       <option >MANDIRI-XXXXXXX</option>
                       <option >BRI-XXXXXXXX</option>
                       <option >BNI-XXXXXXXX</option>
                   </select>
               </div> 
               
                <button type="submit" class="btn btn-sm btn-primary mb-3S">Pesan</button>
            </form>
            <?php
            } else
            {
                echo "<h4>KERANJANG BELANJA ANDA MASIH KOSONG!!!!</h4>";
            }
            ?>
        </div>


        <div class="col-md-2"></div>
    </div>
</div>