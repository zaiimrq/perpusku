


<?php

 use Perpus\Perpusku\Core\Flasher;

 include_once __DIR__ . "/Layouts/Head.php"; 
 
 ?>



<body class="bg-gradient-primary">

    <div class="container min-vh-100 align-items-center py-5">

        <div class="card o-hidden border-0 shadow-lg my-5"  >
            <div class="card-body p-0">
                <div class="row">
                    <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                    <div class="col-lg-7">
                        
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <?php Flasher::flash('register') ?>
                            <form class="user" action="<?= BASEURL ?>/register" method="POST" id="Register" >
                                <div class="form-group">
                                    <input type="text" name="nama" class="form-control form-control-user" id="InputName"
                                        placeholder="Name">
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control form-control-user" id="InputEmail"
                                        placeholder="Email Address">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-sm-0 d-flex align-items-center">
                                        <input type="password" name="password" class="form-control form-control-user mb-0" id="InputPassword" placeholder="Password">
                                        <i class="fa-regular fa-eye position-absolute end-0 mr-4 EyeInput"></i>
                                        <i class="fa-regular fa-eye-slash position-absolute end-0 mr-4 EyeInput"></i>
                                    </div>
                                    <div class="col-sm-6 d-flex align-items-center">
                                        <input type="password" class="form-control form-control-user mb-0" id="RepeatPassword" placeholder="Repeat Password">
                                        <i class="fa-regular fa-eye position-absolute end-0 mr-4 EyeRepeat"></i>
                                        <i class="fa-regular fa-eye-slash position-absolute end-0 mr-4 EyeRepeat"></i>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-user btn-block">
                                    Register Account
                                </button>
                            
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="<?= BASEURL ?>/login">Already have an account? Login!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>



</body>

<?php include_once __DIR__ . "/Layouts/Foot.php"; ?>
<script src="<?= BASEURL ?>/assets/js/script.js" ></script>
