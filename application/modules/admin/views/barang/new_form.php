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
                    <h1 class="mt-4">Tambah Data Barang</h1>
                    <?php $this->load->view("admin/_partials/breadcrumb.php") ?>

                    <!--Content-->

                    <?php if ($this->session->flashdata('success')) : ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo $this->session->flashdata('success'); ?>
                        </div>
                    <?php endif; ?>

                    <div class="card mb-3">
                        <div class="card-header">
                            <a href="<?php echo base_url('admin/barang') ?>"><i class="fas fa-arrow-left"></i> Back</a>
                        </div>
                        <div class="card-body">

                            <form action="<?php echo base_url('admin/barang/add') ?>" method="post" enctype="multipart/form-data">
                                <div class="form-group">
                                    <label for="nama_produk">Nama Produk*</label>
                                    <input class="form-control <?php echo form_error('nama_produk') ? 'is-invalid' : '' ?>" type="text" name="nama_produk" placeholder="Nama Produk" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('nama_produk') ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="deskripsi">Deskripsi*</label>
                                    <textarea class="form-control <?php echo form_error('deskripsi') ? 'is-invalid' : '' ?>" name="deskripsi" placeholder="Deskripsi"></textarea>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('deskripsi') ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="harga">Harga*</label>
                                    <input class="form-control <?php echo form_error('harga') ? 'is-invalid' : '' ?>" type="text" name="harga" placeholder="Harga" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('harga') ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="gambar">Gambar</label>
                                    <input class="form-control-file <?php echo form_error('gambar') ? 'is-invalid' : '' ?>" type="file" name="gambar" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('gambar') ?>
                                    </div>
                                </div>

                                <div class="form-group ">
                                    <label for="kategori">Kategori*</label></br>
                                    <select class=" form-control bootstrap-select <?php echo form_error('kategori') ? 'is-invalid' : '' ?>" type="select" name="kategori" placeholder="Kategori" aria-label="Default select example">
                                        <option value="">Pilih Kategori</option>
                                        <option value="1">Laptop</option>
                                        <option value="2">Smartphone</option>
                                        <option value="3">Robot</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('kategori') ?>
                                    </div>
                                </div>

                                <!--<div class="form-group">
                                    <label for="role">Role*</label>
                                    <input class="form-control <?php echo form_error('role') ? 'is-invalid' : '' ?>" type="text" name="role" placeholder="Role" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('role') ?>
                                    </div>
                                </div>-->

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