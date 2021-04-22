<?php defined('BASEPATH') or exit('No direct script accessallowed'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>Register</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url('bootstrap/css/bootstrap.min.css') ?>" rel="stylesheet">


    <!-- Custom styles for this template -->
    <link href="<?php echo base_url('bootstrap/css/signin.css') ?>" rel="stylesheet">
</head>

<body class="text-center">

    <main class="form-signin">
        <?php echo form_open('../login/register'); ?>
        <?php // Cetak jika ada notifikasi
        if ($this->session->flashdata('berhasil')) {
            echo "<div class='alert alert-success' role='alert'>" . $this->session->flashdata('berhasil') . '</div>';
        } ?>
        <form>
            <H3>Register Account</H3>

            <div class="form-floating">
                <input type="name" class="form-control" id="floatingInput" name="name" placeholder="name" value="<?php echo set_value('name'); ?>">
                <label for="floatingInput">Name</label>
            </div>
            <div class="form-floating">
                <input type="username" class="form-control" id="floatingInput" name="username" placeholder="username" value="<?php echo set_value('username'); ?>">
                <label for="floatingInput">Username</label>
            </div>
            <div class="form-floating">
                <input type="email" class="form-control" id="floatingInput" name="email" placeholder="email" value="<?php echo set_value('email'); ?>">
                <label for="floatingInput">Email</label>
            </div>

            <div class="form-floating">
                <input type="password" class="form-control" id="floatingInput" name="password" placeholder="password" value="<?php echo set_value('password'); ?>">
                <label for="floatingInput">Password</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingInput" name="password_conf" placeholder="password" value="<?php echo set_value('password_conf'); ?>">
                <label for="floatingInput">Retype Password</label>
            </div>

            <button class="w-100 btn btn-lg btn-success" name="btnDaftar" value="Daftar" type="submit">Daftar</button>
            <?php echo form_close(); ?>
            <?php echo anchor(
                "../login/login",
                "<button class='w-100 btn btn-lg btn-primary' type='submit'>Login</button>"
            ); ?>


        </form>

    </main>


</body>

</html>