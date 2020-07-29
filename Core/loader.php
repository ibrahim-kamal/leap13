<?php 
    class loader {

        public $class;
        public function __construct($obj)
        {
            $this->class = $obj;
            // print_r($obj);
		}
        function load_view($page_name , $data = array()){
            foreach ($data as $key => $value) {
                ${$key}= $value;
            }
            require_once("./View/".$page_name."view.php");
        }
    
    
        function load_model($model,$modelname = ""){

            // $this->class->{$modelname} = "sadsa";
            // print_r($this->class);
            // exit();
            require_once("./Model/".$model."model.php");

            if(isset($modelname)){
                // $GLOBALS['this']->{$modelname} = new $model();
                $this->class->{$modelname} = new $model();
            }
            else{
                // $GLOBALS['this']->{$model} = new $model();
                $this->class->{$model} = new $model();
            }
            
        }
    }
    
        
    function load_controller($class,$function = "index"){
        $filename = "./Controller/".$class."controller.php";
        if(file_exists ($filename)){
            require_once($filename);
            $class = $class."controller";
            $controller = new $class();
            if(method_exists($controller,$function)){
                $controller->{$function}();
            }
            else{
                load_controller("error");
            }
        }
        else{
            load_controller("error");
        }

    }

    function base_url(){
        return ($GLOBALS['setting'])["base_url"];
    }

    function segment($item = 0){
        if($item == 0){
            return implode('/',($GLOBALS["setting"])['segment']);
        }
        return ($GLOBALS["setting"])['segment'][$item];
    }
?>