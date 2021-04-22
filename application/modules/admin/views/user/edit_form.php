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
                    <h1 class="mt-4">Edit Data Pengguna</h1>
                    <?php $this->load->view("admin/_partials/breadcrumb.php") ?>

                    <!--Content-->
                    <?php if ($this->session->flashdata('success')) : ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo $this->session->flashdata('success'); ?>
                        </div>
                    <?php endif; ?>

                    <div class="card mb-3">
                        <div class="card-header">

                            <a href="<?php echo site_url('admin/user') ?>"><i class="fas fa-arrow-left"></i>
                                Back</a>
                        </div>
                        <div class="card-body">

                            <form action="" method="post" enctype="multipart/form-data">
                                <!-- Note: atribut action dikosongkan, artinya action-nya akan diproses 
							oleh controller tempat vuew ini digunakan. Yakni index.php/admin/user/edit/ID --->

                                <input type="hidden" name="id" value="<?php echo $user->id_user ?>" />

                                <div class="form-group">
                                    <label for="nama">Nama*</label>
                                    <input class="form-control <?php echo form_error('name') ? 'is-invalid' : '' ?>" type="text" name="nama" placeholder="Nama User" value="<?php echo $user->nama ?>" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('nama') ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="email">Email*</label>
                                    <input class="form-control <?php echo form_error('email') ? 'is-invalid' : '' ?>" type="text" name="email" placeholder="Email" value="<?php echo $user->email ?>" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('email') ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="username">Username*</label>
                                    <input class="form-control <?php echo form_error('username') ? 'is-invalid' : '' ?>" type="text" name="username" placeholder="Username" value="<?php echo $user->username ?>" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('username') ?>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password">Password*</label>
                                    <input class="form-control <?php echo form_error('password') ? 'is-invalid' : '' ?>" type="text" name="password" placeholder="Password" value="<?php echo $user->password ?>" />
                                    <div class="invalid-feedback">
                                        <?php echo form_error('password') ?>
                                    </div>
                                </div>

                                <div class="form-group ">
                                    <label for="role">Role*</label></br>
                                    <?php $role = $user->role; ?>
                                    <select class=" form-control bootstrap-select <?php echo form_error('role') ? 'is-invalid' : '' ?>" type="select" name="role" placeholder="Role" aria-label="Default select example">
                                        <option <?php echo ($role == 'user') ? "selected" : "" ?> value="user">User Native</option>
                                        <option <?php echo ($role == 'admin') ? "selected" : "" ?> value="admin">Admin</option>
                                    </select>
                                    <div class="invalid-feedback">
                                        <?php echo form_error('role') ?>
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