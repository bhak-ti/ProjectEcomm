<body class="bg-gradient-secondary">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-5 col-lg-12 col-md-9">

        <div class="card o-hidden border-1 shadow-lg my-5">
          <div class="card-body p-3 ">
            <!-- Nested Row within Card Body -->
            <div class="row">
             
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4">Silahkan Login</h1>
                  </div>
                  <?php echo $this->session->flashdata('pesan') ?>
                  
                  <form class="user" method="post" action="<?php echo base_url('toko/auth/login');?>">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address..." name="username">
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="password">
                    </div>
                   
                    <button type="submit" class="btn btn-secondary form-control">Login</button>
                    <hr>
                    
                  </form>
                  <hr>
                
                  <div class="text-center">
                    <a class="small" href="<?php echo base_url('toko/registrasi/index');?>">Belum Punya Akun? Daftar</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

</body>

</html>
