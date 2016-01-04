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
    $sql = "SELECT id_categoria, nombre FROM categorias";
    $query = $this->db->query($sql);
    $data = array(); 
    if ($query->num_rows() > 0) {
    foreach ($query->result_array() as $row) {
    $data[$row['id_categoria']] = strtoupper($row['nombre']); 
    }
    return $data;
   
    }
   // return $data;

}
   function obtener_usuario(){

     $query = $this->db-> query('SELECT nombre, password FROM usuarios');
    if ($query->num_rows() > 0) {
       foreach ($query->result_array() as $row )
       {
           $datos_usuario = array(
           'nombre' => $row['nombre'],
           'password' => $row['password'],
               );
        }
        

     return $datos_usuario;
           
     }
}
}
