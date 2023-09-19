<?php
    class mysqlconex{
        private $host='localhost';
        private $user='root';
        private $password='';
        private $database='myshop';
        public function conex(){
            $enlace=mysqli_connect('localhost','root','', $this->database);
            if (!$enlace) {
                die("Conexión fallida: " . mysqli_connect_error());
            }
            return $enlace;
        }
    }

?>