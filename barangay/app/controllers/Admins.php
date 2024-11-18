<?php 
class Admins extends Controller {
    public $session;
    public function __construct() {
        $this->adminModel = $this->model('Admin');
        $this->userModel = $this->model('User');
        $this->session = new Session;
    }

    public function index(){

        if(!isLoggedIn()) {
            header("Location: " .URLROOT . "/users/login");
        }else if( $_SESSION['account_type'] != 1) {
            header("Location: " .URLROOT . "/users/index");
        }



        $data = [
            'title' => 'Home page',
        ];

        $totalPendingRequest = $this->adminModel->countPendingRequest();
        $totalResidents = $this->adminModel->countAll();
        $totalSingleMother = $this->adminModel->countSingleMother();
        $totalSeniorCitizen = $this->adminModel->countSeniorCitizen();
        $totalVoters = $this->adminModel->countVoters();
        $totalPwd = $this->adminModel->countPwd();
        $totalVaccinated = $this->adminModel->countVaccinated();
        $totalCovidPositive = $this->adminModel->countCovidPositive();
        $totalMale = $this->adminModel->countAllMale();
        $totalFemale = $this->adminModel->countAllFemale();
        $totalToVerify = $this->adminModel->countToVerify();
        $totalIndigent = $this->adminModel->countIndigent();
        $total4ps = $this->adminModel->count4ps();

        $content = $this->adminModel->getContent();

        
        if(isset($_POST['saveContent'])) {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [

                'photo' => 'content0001.' . pathinfo($_FILES['changeContent']['name'], PATHINFO_EXTENSION)
            ];



            if($data['photo'] == 'content0001.'){
                $data['photo'] = $content->photo;
            }else{
                if($oldContent = '../public/img/layout/' . $content->photo){
                    unlink($oldContent);
                    $target = '../public/img/layout/' . $data['photo'];
                }
            }

            
            if(move_uploaded_file($_FILES['changeContent']['tmp_name'], $target)){
                $_SESSION['msg'] = "Image uploaded";
                $_SESSION['css_class'] = "alert-success";
            }else {
                $_SESSION['msg'] = "Failed to upload";
                $_SESSION['css_class'] = "alert-danger";
            }
            if($this->adminModel->updateContent($data)) {
                $this->session->setFlash('status', 'Update content successfully!');
                $this->session->setFlash('status_icon', 'success');
                header("Location: " .URLROOT . "/admins/index");
            }else {
                die("Something went wrong, please try again!");
            }
            

        }

        $data = [
            'totalPendingRequest' => $totalPendingRequest,
            'totalResidents' => $totalResidents,
            'totalSingleMother' => $totalSingleMother,
            'totalSeniorCitizen' => $totalSeniorCitizen,
            'totalVoters' => $totalVoters,
            'totalPwd' => $totalPwd,
            'totalVaccinated' => $totalVaccinated,
            'totalCovidPositive' => $totalCovidPositive,
            'totalMale' => $totalMale,
            'totalFemale' => $totalFemale,
            'totalToVerify' => $totalToVerify,
            'totalIndigent' => $totalIndigent,
            'total4ps' => $total4ps,
            'content' => $content
        ];

        





        $this->view('admins/index', $data);
    }

    public function password(){

        if(!isLoggedIn()) {
            header("Location: " .URLROOT . "/users/login");
        }else if( $_SESSION['account_type'] != 1) {
            header("Location: " .URLROOT . "/users/index");
        }

        $data = [
            
            'current_passwordError' =>'' ,
            'new_passwordError' => '',
            'confirm_new_passwordError' => ''
        ];


        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'username' => $_SESSION['username'],
                'current_password' => $_POST['currentPassword'],
                'new_password' => $_POST['newPassword'],
                'confirm_new_password' => $_POST['confirmNewPassword'],

                'current_passwordError' =>'' ,
                'new_passwordError' => '',
                'confirm_new_passwordError' => ''
            ];

            if(empty($data['current_password'])){
                $data['current_passwordError'] = 'Enter your current password';
            }

            if(empty($data['new_password'])){
                $data['new_passwordError'] = 'Password cannot be empty!';
            }
            if($data['new_password'] != $data['confirm_new_password']){
                $data['confirm_new_passwordError'] = 'Passwords do not match';
            }



            //
            if(empty($data['current_passwordError']) && empty($data['new_passwordError']) && empty($data['confirm_new_passwordError'])){
                $data['new_password'] = password_hash($data['new_password'],PASSWORD_DEFAULT);
                if($this->userModel->changePassword($data)){
                    header('location:' . URLROOT . '/users/index');
                }else {
                    $data['current_passwordError'] = 'Enter a valid password and try again.';
                }
            }

            

        }

        $this->view('admins/password', $data);
    }

    public function barangay_detail() {

        $detail = $this->adminModel->getBrgyDetail();

        if(!isLoggedIn()) {
            header("Location: " .URLROOT . "/users/login");
        }else if( $_SESSION['account_type'] != 1) {
            header("Location: " .URLROOT . "/users/index");
        }

        $data = [
            'detail' => $detail,
            'title' => 'Barangay Details',
            'brgy_name' => '',
            'address' => '',
            'mobile_number' => '',
            'brgy_captain' => '',
            'pic_logo' => ''
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST') {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'detail' => $detail,
                'title' => 'Barangay Details',
                'brgy_name' => trim($_POST['brgyName']),
                'address' => trim($_POST['address']),
                'mobile_number' => trim($_POST['mobileNumber']),
                'brgy_captain' => trim($_POST['brgyCaptain']),
                'pic_logo' => 'brgy-logo.' . pathinfo($_FILES['changeLogo']['name'], PATHINFO_EXTENSION)
            ];



            if($data['pic_logo'] == 'brgy-logo.'){
                $data['pic_logo'] = $detail->pic_logo;
            }else{
                if($oldLogo = '../public/img/' . $detail->pic_logo){
                    unlink($oldLogo);
                    $target = '../public/img/' . $data['pic_logo'];
                }
            }

            
            if(move_uploaded_file($_FILES['changeLogo']['tmp_name'], $target)){
                $_SESSION['msg'] = "Image uploaded";
                $_SESSION['css_class'] = "alert-success";
            }else {
                $_SESSION['msg'] = "Failed to upload";
                $_SESSION['css_class'] = "alert-danger";
            }
            if($this->adminModel->updateBrgyDetail($data)) {
                $this->session->setFlash('status', 'Update successfully!');
                $this->session->setFlash('status_icon', 'success');
                header("Location: " .URLROOT . "/admins/barangay_detail");
            }else {
                die("Something went wrong, please try again!");
            }
            

        }

        $this->view('admins/barangay_detail', $data);
    }


    public function brgy_official() {

        $officials = $this->adminModel->getBrgyOfficial();

        if(!isLoggedIn()) {
            header("Location: " .URLROOT . "/users/login");
        }else if( $_SESSION['account_type'] != 1) {
            header("Location: " .URLROOT . "/users/index");
        }

        $data = [
            'officials' => $officials 
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST') {

            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

            $data = [
                'id' => trim($_POST['id']),
                'fullname' => trim($_POST['fullname']),
                'committee' => trim($_POST['committee']),
                'position' => trim($_POST['position']),
                'contact_number' => trim($_POST['contactNum']),
                'status' => trim($_POST['status']),
            ];


            if($this->adminModel->updateBrgyOfficial($data)) {
                header("Location: " .URLROOT . "/admins/brgy_official");
            }else {
                die("Something went wrong, please try again!");
            }
            

        }




        $this->view('admins/brgy_official', $data);
    }

    public function view_official($id = '') {
        $data = [
            'id' => $id,
        ];


        $official = $this->adminModel->findOfficialById($data);



        if(!isLoggedIn()) {
            header("Location: " .URLROOT . "/users/login");
        }

        $data = [
            'official' => $official,
            'title' => 'View Detail',
            
        ];
         echo json_encode($official);
    }



    






}