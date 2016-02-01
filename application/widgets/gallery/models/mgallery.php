<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

    /*
     * To change this template, choose Tools | Templates
     * and open the template in the editor.
     */

    class MGallery extends CI_Model {

        public function multimedia($id) {
            $sql = '*';
            $this->db->select($sql);
            $this->db->join('proyectos', 'proyectos.id_multimedia = multimedia.id_multimedia', 'left');
            $this->db->where('multimedia.id_proyectos', $id);
            $Q = $this->db->get('multimedia');
            if ($Q->num_rows() > 0) {
                foreach ($Q->result_array() as $row) {
                    $data[] = $row;
                }
            }
            return $data;
        }

    }

?>
