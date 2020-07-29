<?php 

    class accountcontroller extends Controller
    {
        public function __construct(){
            parent::__construct();
        }   
        
        function index(){
            $this->load->load_view('login');
        }

        function login(){
            $this->load->load_model('account',"acc");
            $response = $this->acc->login(isset($_POST["Username"]) ? $_POST["Username"] : "",isset($_POST["Password"]) ? $_POST["Password"] : "");
            if(((json_decode($response)->login)) == "successful"){
                $_SESSION['user'] = 'true';
                $fileurl = $_SESSION["download_link"];
                unset($_SESSION["download_link"]);
                header("Location: ".$fileurl);
            }
            else{
                header("Location: ".base_url()."account");
            }
        }
    }
?>
    