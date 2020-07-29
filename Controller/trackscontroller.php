<?php 

    class trackscontroller extends Controller
    {
        public function __construct(){
            parent::__construct();
        }   
        
        function index(){
            $this->load->load_view("tracks");
        }
        function download(){
            $fileurl = explode("download/",segment())[1];
            if(!isset($_SESSION["user"])){
                $_SESSION["download_link"] = $fileurl;
                header("Location: ".base_url()."account");
            }
            else{
                header("Location: ".$fileurl);

            }
        }
    }
?>
    