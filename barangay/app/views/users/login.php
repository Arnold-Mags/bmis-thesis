<?php
    require APPROOT . '/views/includes/head.php';
?>


<div id="layoutSidenav_content">
                <main style="height:100vh;">
                    <div class="container-fluid d-flex align-items-center login-container"style="height:100vh;">
                        <div class="row  px-4 ">
                            <div class="col-12 offset-md-1 col-md-5 d-flex align-items-center">
                            
                                <img src="<?php echo URLROOT. '/img/2.png' ?>" class="img-fluid rounded-circle mx-auto  border border-dark d-none d-md-block" style="width: 360px;" alt="...">
                                <div class="row">
                                    <!-- <div class="col-12 offset-col-md-6 col-md-6"> -->
                                        <h4 class="text-center text-primary brgy-title fw-bold">BRGY CABUGO</h4>
                                    <!-- </div> -->
                                    <div clas="">
                                        <h4 class="text-center brgy-subtitle fw-bold " >Claver SDN</h4>
                                    </div>
                                </div>

                            </div>
                            <div class="col-12 col-md-6 d-flex align-items-center px-4">
                                <div class="card  mb-2 col-12 offset-md-2  col-md-8">

                                    <div class="card-body">
                                        <form action="<?php echo URLROOT; ?>/users/login" method="POST">
                                            <div class="row g-3 bg-transparent">
                                            <div class="col-12 col-md-12">
                                                  <!-- <h3 class="text-secondary text-center fw-bold">Login to continue</h3> -->
                                                </div>
                                                <div class="col-12 col-md-12">
                                                    <input type="text" class="form-control form-control-lg " value="<?php echo $data['username'] ?>" name="username" placeholder="Username" aria-label="First name">
                                                </div>
                                                <div class="validation-invalid"><?php echo $data['usernameError'] ?></div>
                                                <div class="col-12 col-md-12 password-container">
                                                    <input type="password" id="password" class="form-control form-control-lg " name="password" placeholder="password" aria-label="Password">
                                                    <!-- <i class="" aria-hidden="true"id="togglePassword"></i> -->
                                                    <!-- <span id="field-icon" toggle="#password" class="fa fa-fw fa-eye  toggle-password"></span> -->
                                                </div>
                                                <div class="validation-invalid"><?php echo $data['passwordError'] ?></div>
                                                <div class="d-grid gap-2">
                                                    <button class="btn btn-primary btn-lg " type="submit">Login</button>
                                                </div>
                                                <div class="col-12 col-md-12 text-center">
                                                    <p><a  class="text-secondary forgot-pass" href="#">Forgot password?</a></p>
                                                    <hr>
                                                </div>

                                                <div class="col-12 col-md-12 text-center pb-3">
                                                    <!-- <button type="button" data-bs-toggle="modal" data-bs-target="#modalRegister" class="btn btn-secondary btn-lg rounded-pill">Create new account</button> -->
                                                    <a href="<?php echo URLROOT .'/users/register' ?>" type="button"  class="btn btn-secondary btn-lg rounded-pill">Create new account</a>
                                                </div>
                                            </div>



                                        </form>   
                                    </div>

                                    </div>

                                </div>
                        </div>


 

                        <!-- Modal for certificate of register -->
                        <?php
                            require APPROOT . '/views/users/modals/modal-register.php';
                        ?>




                    </div>
                </main>
                                     

<?php

    require APPROOT . '/views/includes/footer.php';
?>