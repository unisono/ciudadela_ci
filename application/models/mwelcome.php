<?php

    /*
     * To change this template, choose Tools | Templates
     * and open the template in the editor.
     */
    class MWelcome extends CI_Model {

        private $_campos = array();
        private  $_listado = array();

        function __construct()
    {
        // Call the Model constructor
        parent::__construct();
    } 
    
    function get_last_ten_entries()
    {
        $query = $this->db->get('entries', 10);
        return $query->result();
    }

    function insert_entry()
    {
        $this->title   = $_POST['title']; // please read the below note
        $this->content = $_POST['content'];
        $this->date    = time();

        $this->db->insert('entries', $this);
    }

    function update_entry()
    {
        $this->title   = $_POST['title'];
        $this->content = $_POST['content'];
        $this->date    = time();

        $this->db->update('entries', $this, array('id' => $_POST['id']));
    }
    
    
    function proyectosProvincias() {
            $sql = 'provincia_nombre,id_proyectos, localidad_nombre, localidades.id_provincia as id_l, provincias.id_provincia as id_p';
            $this->db->select($sql);
            
            $this->db->join('language', 'language.language_id = proyectos.language_id');
            $this->db->join('provincias', 'provincias.id_provincia = proyectos.id_provincia');
            $this->db->join('localidades', 'localidades.id_localidad = proyectos.id_localidad');
            
            $this->db->where('code', 'es');
            $this->db->where('estado', 1);
            
            $this->db->group_by('provincia_nombre');
            
            $Q = $this->db->get('proyectos');

            if ($Q->num_rows() > 0) {
                foreach ($Q->result_array() as $row) {
                    $data[] = $row;
                }
            }
            return $data;
        }
        function provinciasLocalidades() {
            $sql = 'provincia_nombre, localidad_nombre, localidades.id_provincia as id_l, provincias.id_provincia as id_p';
            $this->db->select($sql);
            
            $this->db->join('language', 'language.language_id = proyectos.language_id');
            $this->db->join('provincias', 'provincias.id_provincia = proyectos.id_provincia');
            $this->db->join('localidades', 'localidades.id_localidad = proyectos.id_localidad');
            
            $this->db->where('code', 'es');
            $this->db->where('estado', 1);
            
            $this->db->group_by('localidad_nombre');
            
            $Q = $this->db->get('proyectos');

            if ($Q->num_rows() > 0) {
                foreach ($Q->result_array() as $row) {
                    $data[] = $row;
                }
            }
            return $data;
        }
        
        
    function fillAllCampos( $tabla, $id, $group_by=false){
   
    $sql='provincia_nombre, localidad_nombre, localidades.id_provincia as id_l, provincias.id_provincia as id_p';
    $this->db->select( $sql);
    switch ($tabla) {
                case 'proyectos':
                    $this->db->join('language', 'language.language_id = proyectos.language_id');
                    $this->db->join('provincias', 'provincias.id_provincia = proyectos.id_provincia');
                    $this->db->join('localidades', 'localidades.id_localidad = proyectos.id_localidad');
                    break;
                case 'historias':
                    $this->db->join('language', 'language.language_id = historias.language_id');
                    break;
            }
    $this->db->where('code', 'es');
    $this->db->where('estado', 1);
    
    
    if(!empty($group_by)){
        echo $group_by;
      $this->db->group_by($group_by);
    }
    

    $Q = $this->db->get($tabla);
       
    if ($Q->num_rows() > 0){
       foreach ($Q->result_array() as $row){
           $this->_listado[] = $row;	
           

       }  
      
    }
    
    }
    
    
    
    
    
    function fillCampos($tabla, $id, $listado = false){
        
    $this->db->select('*');
    switch ($tabla){
    case 'proyectos':
    $this->db->join('language','language.language_id = proyectos.language_id');
    $this->db->join('provincias','provincias.id_provincia = proyectos.id_provincia', 'left');   
    $this->db->join('localidades','localidades.id_provincia = provincias.id_provincia', 'left');
    break;
    case 'historias':
    $this->db->join('language','language.language_id = historias.language_id');
    break;
 case 'novedades':
    $this->db->join('language','language.language_id = novedades.language_id');
    break;
    
    }   
        
    
   
    $this->db->where('code', 'es');
    if(!empty($id)){
    $this->db->where('id_'.$tabla, $id);
    }
    

    $Q = $this->db->get($tabla);
    
     if ($Q->num_rows() > 0) {
                if ($listado) {

                    if ($Q->num_rows() > 0){
       foreach ($Q->result() as $row){
          $data[] = $row;	

       }   
       return $data;
                    }
                } else {
                    foreach ($Q->result_array() as $row) {
                        foreach ($row as $k => $v) {
                            $this->_campos[$k] = $v;
                        }
                    }
                }
            }
    
    }
    function getCampo($campo){
        
       return  $this->_campos[$campo];;
    }
    function getListado() {
            return $this->_listado;
        }
}
?>
