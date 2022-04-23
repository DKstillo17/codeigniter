<?php

    class datosModel  extends CI_model{
        public function __construct(){
            $this->load->database();
        }
        
        public function registro($nombre, $telefono, $correo){

            return $this->db->insert("datos", ["nombre" => $nombre, "telefono" => $telefono, "correo" => $correo]);

        }
    }

?>