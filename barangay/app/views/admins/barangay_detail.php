<?php
    require APPROOT . '/views/includes/head.php';
?>

<?php
    require APPROOT . '/views/includes/admin/navigation.php';
?>

<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                            <h3 class="mt-4">Barangay Details</h3>
                                <ol class="breadcrumb mb-4">
                                    <li class="breadcrumb-item active">Barangay Details</li>
                                </ol>
                                        <div class="card mb-4">
                                            <div class="card-header">
                                                <i class="fas fa-info-circle"></i>
                                                Barangay Details
                                            </div>
                                            <div class="card-body ">
                                                <form action="<?php echo URLROOT; ?>/admins/barangay_detail" method="POST" enctype="multipart/form-data">
                                                    <div class="row px-5 d-flex align-items-center justify-content-center">
                                                        <div class="col-xl-6">
                                                            <div class="row">
                                                                <div class="col-12 col-md-12 input-group-sm">
                                                                    <label for="formGroupbrgyNameInput" class="col-form-label-sm">BARANGAY NAME</label>
                                                                    <input type="text" class="form-control" id="formGroupbrgyNameInput" name="brgyName" value="<?php echo $data['detail']->brgy_name?>">
                                                                </div>

                                                                <div class="col-12 col-md-12 input-group-sm">
                                                                    <label for="formGroupAddressInput" class="col-form-label-sm">ADDRESS</label>
                                                                    <input type="text" class="form-control" id="formGroupAddressInput" name="address" value="<?php echo $data['detail']->address?>">
                                                                </div>
                                                                <div class="col-12 col-md-12 input-group-sm">
                                                                    <label for="formGroupNumberInput" class="col-form-label-sm">MOBILE NO.</label>
                                                                    <input type="text" class="form-control" id="formGroupbrgyNumberInput" name="mobileNumber" value="<?php echo $data['detail']->mobile_number?>">
                                                                </div>
                                                                <div class="col-12 col-md-12 input-group-sm">
                                                                    <label for="formGroupBrgyCaptInput" class="col-form-label-sm">BARANGAY CAPTAIN</label>
                                                                    <input type="text" class="form-control" id="formGroupBrgyCaptInput" name="brgyCaptain" value="<?php echo $data['detail']->brgy_captain?>">
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-xl-6">
                                                            <div class="">
                                                                <div class="col-6 col-md-6 offset-md-3">
                                                                        <div class="mb-3 text-center">
                                                                        <img src="<?php echo URLROOT .'/img/'. $data['detail']->pic_logo?>" onclick="triggerClick()" class="img-thumbnail rounded-circle" id="logoDisplay" alt="">
                                                                        <label for="formLogo" class="form-label btn btn-secondary rounded-pill btn-sm"><i class="fas fa-edit"></i>&nbsp;Change</label>
                                                                        <input class="form-control" type="file" value ="<?php echo $data['detail']->pic_logo?>" name="changeLogo" onchange="displayLogo(this)" id="formLogo" accept="image/png">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>

                                                        <div class="col-xl-12 d-flex justify-content-end">
                                                        <div class="mb-3">
                                                            <button type="submit" name="btn-update" class="btn btn-success btn-sm rounded-pill btn-block">Save Changes</button>
                                                        </div>

                                                    </div>
                                                    </div>


                                                    
                                                </form>

                                                    

                                            </div>
                                        </div>



                    </div>
                </main>


<?php
    require APPROOT . '/views/includes/footer.php';
?>