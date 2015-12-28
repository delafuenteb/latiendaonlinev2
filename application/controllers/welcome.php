<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

  function __construct(){
      parent::__construct();
      
        $this->load->model('claseconsultas');
   }
    
	public function index()
	{
          $datos_obtenidos=$this->claseconsultas->obtener_categorias();       
         //$this->claseconsultas->seleccionar_datos();
           $this->load->view('front/index',$datos_obtenidos);  
        //$this->load->view('front/sidebar',$datos_obtenidos);
                 
	}
        
        public function  obtener_datos_modelo()
        {
            
           
          // $this->load->view('slidebar',$datos_obtenidos);
        }
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */