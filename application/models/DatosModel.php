<?php

    class datos  extends CI_model{
        public function __construct(){
            $this->load->database();
        }
        
        public function registro($nombre, $telefono, $correo){
            $this->db->insert();
        }
    }

?>