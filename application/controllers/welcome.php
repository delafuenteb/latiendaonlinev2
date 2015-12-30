<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

  function __construct(){
      parent::__construct();
      
        $this->load->model('claseconsultas');
   }
    
	public function index()
	{
          $datos_obtenidos=$this->claseconsultas->obtener_categorias();       
          $this->load->view('front/index',$datos_obtenidos);  
                     
	}
        
        public function  obtener_datos_modelo()
        {
            
         
        }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */