<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/all.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url()?>assets/css/sign-reg.css">
  <title><?php echo $page_title?></title>
</head>
<body>
  <div class="header">
    <div class="container">
       <div class="row">
		   <a href="<?php echo base_url()?>"><img class="logo" src="<?php echo base_url()?>assets/pictures/logo.png" alt="Logo"></a>
       </div>
    </div>
  </div>
  <div class="body">
      <img class="background" src="<?php echo base_url()?>assets/pictures/background.png" alt="Background">
      <div class="form-part">
          <div class="container">
             <div class="row">
               <div class="text-center col-xs-12 col-sm-12 col-md-6 col-lg-5 col-xl-4">
                  <div class="form-container border clearfix">
                      <div class="form-text" >
                              <ul class="nav nav-tabs menu" id="menu" role="tablist">
                                <li class="nav-item" role="presentation">
                                  <a class="nav-link active" id="signin-tab" data-toggle="tab" href="#signin" role="tab" aria-controls="signin" aria-selected="true">SIGN IN</a>
                                </li>
                                <li class="nav-item" role="presentation">
                                  <a class="nav-link" id="register-tab" data-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="false">REGISTER</a>
                                </li>
                              </ul>
                              <div class="tab-content" id="menu-content">
                                  <div class="tab-pane fade show active" id="signin" role="tabpanel" aria-labelledby="signin-tab">
                                      <form class="sign-in-form">
                                          <div class="form-group ">
                                              <input class=" form-control form-control-sm " type="tel" placeholder="Mobile Number" id="number" >
                                          </div>
                                          <div class="form-group ">
                                              <input class=" form-control form-control-sm " type="password" placeholder="Password" id="password" >
                                          </div>
                                          <div class="form-group text-left">
                                              <input class="mt-1 mr-2 checkbox" type="checkbox"  id="checkbox">
                                              <label for="checkbox">Keep me signed in?</label>
                                          </div>
                                          <div class="text-center ">
                                                  <button type="submit" class="btn">Sign In</button>
                                          </div>
                                          <div class="text-center text">
                                                   <p>Forgot your password? <a class="text-danger" href="<?php echo base_url()?>">Click Here.</a></p>
                                          </div>
                                      </form>
                                  </div>
                                  <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
                                      <form class="register-form">
                                          <div class="form-group">
                                              <input class=" form-control form-control-sm " type="tel" placeholder="Mobile Number" id="mobileNo" >
                                          </div>
                                          <div class="form-group ">
                                              <input class=" form-control form-control-sm " type="text" placeholder="First Name" id="firstName" >
                                          </div>
                                          <div class="form-group ">
                                              <input class=" form-control form-control-sm " type="text" placeholder="Last Name" id="lastName" >
                                          </div>
                                          <div class="text-center">
                                                  <button type="submit" class="btn">Submit</button>
                                          </div>
                                          <div class="text-center">
                                                    <p>Do you have an account? <a class="text-danger" href="<?php echo base_url()?>login">Sign In</a></p>
                                          </div>
                                      </form>
                                  </div>
                              </div>
                      </div>
                  </div>
               </div>
             </div>
          </div>
      </div>
  </div>
  <div class="footer">
    <div class="text-center">
      <p class="">2020 E-shoply.All rights reserved.</p>
    </div>
  </div>
    <script src="<?php echo base_url()?>assets/js/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
</body>
</html>
