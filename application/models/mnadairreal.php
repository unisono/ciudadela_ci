<?php

    /*
     * To change this template, choose Tools | Templates
     * and open the template in the editor.
     */
    class MNadairreal extends CI_Model {

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

    function insertEntry($array)
    {
        //print_r($array);
     
        if(!empty($array['posteo-chat'])){

            $this->db->set('texto', $array['texto']);
            $this->db->set('id_usuario', $_SESSION['user_id']);
            $this->db->set('fecha', date("Y-m-d H:i:s"));
            $this->db->set('id_topico', $array['id_posteo']);
            $this->db->set('tipo', $array['tipo']);
            $this->db->insert('ni_conversacion'); 
            
           
            
        }
        
         if(!empty($array['posteo-topico'])){

            $this->db->set('nombre', $array['titulo']);
            $this->db->set('id_usuario', $_SESSION['user_id']);
            $this->db->set('fecha', date("Y-m-d H:i:s"));
            $this->db->set('id_categoria', $array['id_categoria']);
            $this->db->set('descripcion', $array['descripcion']);
            $this->db->insert('ni_topico'); 
            
           
            
        }
        
        
        
    }
                     
    function update_entry()
    {
        $this->title   = $_POST['title'];
        $this->content = $_POST['content'];
        $this->date    = time();

        $this->db->update('entries', $this, array('id' => $_POST['id']));
    }
                

    
   
        
    function allTable($table){
    $this->db->select( '*');
    $Q = $this->db->get($table);
       
    if ($Q->num_rows() > 0){
       foreach ($Q->result_array() as $row){
           $data[] = $row;	
       }  
      
    }
    return $data;
        }
        
        
        
        
        
    function fillAllCampos( $tabla, $id, $categoria){  
    $this->db->select( '*, ni_topico.fecha as fecha_topico, ni_topico.id_topico as id_topico_topico, ni_topico.nombre as nombre_topico, ni_user.nombre as nombre_user');
   
    $this->db->join('ni_categoria','ni_categoria.id_tema = ni_tema.id_tema', 'left');
    $this->db->join('ni_topico','ni_topico.id_categoria = ni_categoria.id_categoria', 'left');
    $this->db->join('ni_conversacion','ni_conversacion.id_topico = ni_topico.id_topico', 'left');  
    $this->db->join('ni_user','ni_user.id_user = ni_conversacion.id_usuario', 'left');
    
    
    
   
    //$this->db->where('ni_conversacion.id_categoria', $id);
    $this->db->where('ni_tema.id_tema', $id);
    $this->db->where('ni_categoria.id_categoria', $categoria);
    $this->db->order_by('ni_topico.fecha','desc');
    //$this->db->order_by('ni_conversacion.id_topico','desc');
    $this->db->order_by('ni_conversacion.fecha','asc');
  
    $Q = $this->db->get($tabla);
       
    if ($Q->num_rows() > 0){
       foreach ($Q->result_array() as $row){
           $data[] = $row;	
       }  
      return $data;
    }else{ 
        
       //return $data;
    }
    
    
    }
    
    function byIdTopic($id, $categoria){  
        
    $this->db->select( '*, ni_topico.fecha as fecha_topico');
    $this->db->join('ni_categoria','ni_categoria.id_categoria = ni_topico.id_categoria', 'left');
   // $this->db->join('ni_topico','ni_topico.id_categoria = ni_categoria.id_categoria', 'left');
    $this->db->where('ni_categoria.id_categoria', $categoria);
    $this->db->order_by('ni_topico.fecha','desc');
    $Q = $this->db->get('ni_topico'); 
     if ($Q->num_rows() > 0){
       foreach ($Q->result_array() as $row){
           $data[] = $row;	
       }
       return $data;
     }
    }
    
    
     
     function byIdCategory($id){  
        
    $this->db->select( '*');
    //$this->db->join('ni_categoria','ni_categoria.id_categoria = ni_topico.id_categoria', 'left');
    
    $this->db->where('ni_categoria.id_categoria', $id);
  //  $this->db->order_by('ni_topico.fecha','desc');
    $Q = $this->db->get('ni_categoria'); 
     if ($Q->num_rows() > 0){
       foreach ($Q->result_array() as $row){
           $data[] = $row;	
       }
       return $data;
     }
       
    
    
    }
    
     function byIdTema($id){  
        
    $this->db->select( '*');
    //$this->db->join('ni_categoria','ni_categoria.id_categoria = ni_topico.id_categoria', 'left');
   // $this->db->join('ni_topico','ni_topico.id_categoria = ni_categoria.id_categoria', 'left');
    $this->db->where('ni_tema.id_tema', $id);
  //  $this->db->order_by('ni_topico.fecha','desc');
    $Q = $this->db->get('ni_tema'); 
     if ($Q->num_rows() > 0){
       foreach ($Q->result_array() as $row){
           $data[] = $row;	
       }
       return $data;
     }
       
    
    
    }
    
    function allCategory($id){  
        
    $this->db->select( 'ni_categoria.id_categoria, ni_categoria.titulo, COUNT(ni_topico.id_topico) as cantidad_topicos');
   // $this->db->join('ni_categoria','ni_categoria.id_tema = ni_tema.id_tema', 'left');
    $this->db->join('ni_topico','ni_topico.id_categoria = ni_categoria.id_categoria','left');
    $this->db->where('ni_categoria.id_tema', $id);
    $this->db->group_by('ni_categoria.id_categoria');
    $this->db->order_by('cantidad_topicos', 'desc');
    $this->db->order_by('ni_categoria.id_categoria', 'asc');
    $Q = $this->db->get('ni_categoria'); 
     if ($Q->num_rows() > 0){
       foreach ($Q->result_array() as $row){
           $data[] = $row;	
       }
       return $data;
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
    
    
    function usuario($id){
        
    $this->db->select( 'nombre');
   
    
    $this->db->where('ni_user.id_user', $id);
    $Q = $this->db->get('ni_user'); 
    
    $result = $Q->result();
    return $result;
        
    }
    
    
    
    function allUsuario($id){
        
    $this->db->select( 'nombre, mail,token');
   $Q = $this->db->get('ni_user'); 
    
   if ($Q->num_rows() > 0){
       foreach ($Q->result_array() as $row){
           $data[] = $row;	
       }
       return $data;
     }
        
    }
    
    
    function getCampo($campo){
        
       return  $this->_campos[$campo];
    }
    function getListado() {
            return $this->_listado;
        }
        
        
}
?>
