<?php

class cliente{
    
        private $_nombre;
        private $_mail;
        private $_clave;
        private $_sexo;
    
        public function __construct($nomb, $mail, $clave, $sex){
            $this->_nombre = $nombre;
            $this->_mail = $mail;
            $this->_clave = $clave;
            $this->_sexo = $sex;
        }
    
        public function getNombre(){
            return $this->_nombre;
        }
    
    
        public function getMail(){
            return $this->_mail;
        }
    
        public function getClave(){
            return $this->_clave;
        }
    
        public function getSexo(){
            return $this->_sexo;
        }

        public static function Leer(){
            $clientes = array();
    
            $gestor = fopen("cliente\clientesActuales.txt", "r");
            while ($userinfo = fscanf($gestor, "%s\t%s\t%s\t%s\n")) {
            list ($nombre, $mail, $clave, $sexo) = $userinfo;
            $cliente = new Cliente ($nombre, $mail, $clave, $sexo);
            array_push($clientes, $cliente);
            }
            fclose($gestor);
            return $clientes;
        }

        public static function GuardaLInea($emp){
            
            $myfile = fopen("cliente\clientesActuales.txt", "a") or die("Unable to open file!");
            fwrite($myfile, $emp->getNombre()." ".$emp->getMail()." ".$emp->getClave()." ".$emp->getSexo()."\n");
            fclose($myfile);
        }

    }
?>