<?php 

    class errorcontroller extends Controller
    {
        public function __construct(){
            parent::__construct();
        }   
        
        function index(){
            $this->load->load_view('error');
        }
    }
?>
    