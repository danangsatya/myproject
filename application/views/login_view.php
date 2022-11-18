<!DOCTYPE html> 
<html lang="en"> 
  <head> 
    <meta charset="utf-8"> 
    <title>This Is Login View</title> 
    <!-- load bootstrap css file --> 
    <link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet"> 
    <?php if($this->session->flashdata('msg')){ ?>
$('.confirm-div').html('
<?php echo $this->session->flashdata('msg'); ?>').show();
<?php } ?>
  </head> 
  <body>
  <section class="vh-100" style="background-color: #40E0D0;">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col col-xl-10">
        <div class="card" style="border-radius: 1rem;">
          <div class="row g-0">
            <div class="col-md-6 col-lg-5 d-none d-md-block">
              <img src="assets\image\img1.jpg"
                alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
            </div>
            <div class="col-md-6 col-lg-7 d-flex align-items-center">
              <div class="card-body p-4 p-lg-5 text-black">

                <form action="login/aksi_login" method="post">
                  <div class="d-flex align-items-center mb-3 pb-1">
                    <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                  </div>

                  <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>

                  <div class="form-outline mb-4">
                    <input type="text" name="username" class="form-control form-control-lg" />
                    <label class="form-label" for="form2Example17">Email address</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" name="password" class="form-control form-control-lg" />
                    <label class="form-label" for="form2Example27">Password</label>
                  </div>

                  <div class="pt-1 mb-4">
                  <?php if ($this->session->flashdata('category_error')) { ?>
                  <div class="alert alert-danger"> <?= $this->session->flashdata('category_error') ?> </div>
                  <?php } ?>
                    <button class="btn btn-dark btn-lg btn-block" input type="submit" value="Login">Login</button>
                  </div>

                    <a href="#!" class="small text-muted">Terms of use.</a>
                  <a href="#!" class="small text-muted">Privacy policy</a>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </section>
    <!-- load jquery js file --> 
    <script src="<?php echo base_url('assets/js/jquery.min.js');?>"></script> 
    <!-- load bootstrap js file --> 
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>"></script> 
  </body> 
</html> 