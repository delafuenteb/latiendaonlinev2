<?php

class claseconsultas extends CI_Model{
    
    public function _construct()
    {
        parent::_construct();
    }
    
    public function seleccionar_datos()
    {
       $query= $this->db->query("Select * from Categorias");
        foreach ($query->result_array() as $row)
            {
               echo $row['nombre'];
               
            }
            
            
    }
   function obtener_categorias(){

     $query = $this->db-> query('SELECT id_categoria, nombre FROM categorias');
    if ($query->num_rows() > 0) {
       foreach ($query->result_array() as $row )
       {
           $datos_obtenidos = array(
           'nombre' => $row['nombre'],
           'id_categoria' => $row['id_categoria'],
               );
        }
       
        return $datos_obtenidos;
           
     }
}
}
