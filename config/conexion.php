<?php
    class Conectar {
        protected $dbh;
        protected function conexion(){
            try{
                $conectar= $this->dbh = new PDO("mysql:host=us-cdbr-east-06.cleardb.net;dbname=heroku_4f7cc8515460237","b93cea35321455","5c78a638");
                return $conectar;
            }catch(Exception $e){
                print "Error :".$e->getMessage();
                die();
            }
        }

        public function set_names(){
            return $this->dbh->query("SET NAMES 'utf8'");
        }
    }
?>