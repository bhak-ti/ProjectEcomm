<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body class="sb-nav-fixed">
    <?php $this->load->view("admin/_partials/navbar.php") ?>

    <div id="layoutSidenav">
        <?php $this->load->view("admin/_partials/sidebar.php") ?>

        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid">
                    <h1 class="mt-4">Edit Data Barang</h1>
                    <?php $this->load->view("admin/_partials/breadcrumb.php") ?>

                    <!--Content-->
                    <?php if ($this->session->flashdata('success')) : ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo $this->session->flashdata('success'); ?>
                        </div>
                    <?php endif; ?>

                    <div class="card mb-3">
                        <div class="card-header">

                            <a href="<?php echo site_url('admin/barang') ?>"><i class="fas fa-arrow-left"></i>
                                Back</a>
                        </div>
                        <div class="card-body">

                            <form action="" method="post" enctype="multipart/form-data">
                                <!-- Note: atribut action dikosongkan, artinya action-nya akan diproses 
							oleh controller tempat vuew ini digunakan. Yakni index.php/admin/user/edit/ID --->

                                <input type="hidden" name="id" value="<?php echo $barang->id_produk ?>" />

                                <div class="form-group">
                                    <label for="nama_produk">Nama Produk*</label>
                                    <input class="form-control <?php echo form_error('nama_produk') ? 'is-invalid' : '' ?>" type="text" name="nama_produk" placeholder="Nama Produk" value="<?php echo $barang->nama_produk ?>" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('nama_produk') ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="deskripsi">Deskripsi*</label>
                                    <textarea class="form-control <?php echo form_error('deskripsi') ? 'is-invalid' : '' ?>" name="deskripsi" placeholder="Deskripsi"><?php echo $barang->deskripsi ?></textarea>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('deskripsi') ?>
                                    </div>
                                </div>


                                <div class="form-group">
                                    <label for="harga">Harga*</label>
                                    <input class="form-control <?php echo form_error('harga') ? 'is-invalid' : '' ?>" type="text" name="harga" placeholder="Harga" value="<?php echo $barang->harga ?>" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('harga') ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="gambar">Gambar*</label>
                                    <input class="form-control-file <?php echo form_error('gambar') ? 'is-invalid' : '' ?>" type="file" name="gambar" />
                                    <input type="hidden" name="old_image" value="<?php echo $barang->gambar ?>" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('gambar') ?>
                                    </div>
                                </div>

                                <div class="form-group ">
                                    <label for="kategori">Kategori*</label></br>
                                    <?php $kategori = $barang->kategori; ?>
                                    <select class=" form-control bootstrap-select <?php echo form_error('kategori') ? 'is-invalid' : '' ?>" type="select" name="kategori" placeholder="Kategori" aria-label="Default select example">
                                        <option value="">Pilih Kategori</option>
                                        <option <?php echo ($kategori == '1') ? "selected" : "" ?> value="1">Laptop</option>
                                        <option <?php echo ($kategori == '2') ? "selected" : "" ?> value="2">Smartphone</option>
                                        <option <?php echo ($kategori == '3') ? "selected" : "" ?> value="3">Robot</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('kategori') ?>
                                    </div>
                                </div>

                                <input class="btn btn-success" type="submit" name="btn" value="Save" />
                            </form>

                        </div>

                        <div class="card-footer small text-muted">
                            * required fields
                        </div>


                    </div>

                    <!--End of Content-->

                </div>
            </main>
            <?php $this->load->view("admin/_partials/footer.php") ?>
        </div>
    </div>
    <?php $this->load->view("admin/_partials/js.php") ?>
</body>

</html>