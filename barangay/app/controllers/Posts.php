<?php
class Posts extends Controller {
    public function __construct(){
        $this->postModel = $this->model('Post');
    }

    public function index() {
        $posts = $this->postModel->findAllPost();
        $data = [
            'posts' => $posts
        ];
        $this->view('posts/index', $data);
    }

    public function modalAddPost() {
        if(!isLoggedIn()) {
            header("Location: " .URLROOT . "/posts");
        }

        $data = [
            'title' => '',
            'body' => '',
            'titleError' => '',
            'bodyError' => ''
        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            
            $data = [
                'user_id' => $_SESSION['user_id'],
                'title' => trim($_POST['title']),
                'body' => trim($_POST['body']),
                'titleError' => '',
                'bodyError' => ''
            ];

            if (empty($data['title'])) {
                $data['titleError'] = 'The title of a post cannot be empty';
            }

            if (empty($data['body'])) {
                $data['bodyError'] = 'The body of a post cannot be empty';
            }

            if (empty($data['titleError']) && empty($data['bodyError'])) {
                if($this->postModel->addPost($data)) {
                    header("Location: " .URLROOT . "/posts");
                }else {
                    die("Something wnet wrong, please try again!");
                }
            }else {
                $this->view('posts/index', $data);
            }


        }


        $this->view('posts/create', $data);
    }


    public function modalEditPost($id = "") {

        $post = $this->postModel->findPostById($id);

        if(!isLoggedIn()){
            header("Location: " . URLROOT . "/posts");
        }elseif($post->user_id != $_SESSION['user_id']) {
            header("Location: " . URLROOT . "/posts");
        } 

        $data = [
            'post' => $post,
            'title' => '',
            'body' => '',
            'titleError' => '',
            'bodyError' => '',
            'nothingChange' => ''

        ];

        if($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            
            $data = [
                'id' => trim($_POST['id']),
                'user_id' => $_SESSION['user_id'],
                'title' => trim($_POST['title']),
                'body' => trim($_POST['body']),
                'titleError' => '',
                'bodyError' => '',
                'nothingChange' => ''
            ];

            if (empty($data['title'])) {
                $data['titleError'] = 'The title of a post cannot be empty';
            }

            if (empty($data['body'])) {
                $data['bodyError'] = 'The body of a post cannot be empty';
            }

            if($data['title'] == $this->postModel->findPostById($id)->title){
                $data['nothingChange'] = 'At least change the title!';
            }
            if($data['body'] == $this->postModel->findPostById($id)->body){
                $data['nothingChange'] = 'At least change the body!';
            }

            if (empty($data['titleError']) && empty($data['bodyError'])) {
                if($this->postModel->updatePost($data)) {
                    header("Location: " .URLROOT . "/posts");
                }else {
                    die("Something wnet wrong, please try again!");
                }
            }else {
                $this->view('posts/index', $data);
            }
        }


            $this->view('posts/index', $data);
        }


    public function delete_posts($id) {
        if (!isLoggedIn()) {
            header("Location: " . URLROOT . "/posts");
        }

        
        
        $post = $this->postModel->findPostById($id);
        
        if ($post->user_id != $_SESSION['user_id']) {
            header("Location: " . URLROOT . "/posts");
        }
    
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    
            if ($this->postModel->deletePost($id)) {
                header("Location: " . URLROOT . "/posts");
            } else {
                die('Something went wrong!');
            }
        }
    }

    public function view_post($id = '') {
        $data = [
            'id' => $id,
        ];


        $post = $this->postModel->findPostById($data);



        if(!isLoggedIn()) {
            header("Location: " .URLROOT . "/posts/index");
        }

        $data = [
            'post' => $post,
            'title' => 'View Detail',
            
        ];
         echo json_encode($post);
    }
    

    
    

}