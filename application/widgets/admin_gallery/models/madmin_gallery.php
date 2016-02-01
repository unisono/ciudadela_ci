<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

    /*
     * To change this template, choose Tools | Templates
     * and open the template in the editor.
     */

    class MAdmin_gallery extends CI_Model {

        public function multimedia() {
            $sql = '*';
            $this->db->select($sql);
            //$this->db->join('proyectos', 'proyectos.id_multimedia = multimedia.id_multimedia', 'left');
           // $this->db->where('multimedia.id_proyectos', 1);
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
