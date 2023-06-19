<?php

    class TempModel extends Model
    {

        private $host = "localhost";
        private $username = "root";
        private $password = "";
        private $database = "";
        private $mysqli;

        public function __construct() {
            $this->mysqli = new mysqli($this->host, $this->username, $this->password, $this->database);

            if ($this->mysqli->connect_error) {
                die("Connection failed: " . $this->mysqli->connect_error);
            }
        }

        function getData($templateId = null)
        {

            if($templateId != null){
                $result = $this->mysqli->query("SELECT * FROM `templates_table` WHERE `id` = '$templateId'");

                while($row = $result->fetch_array()){
                    $data[] = $row;
                }
            }else{
                $result = $this->mysqli->query("SELECT * FROM `templates_table`");

                while($row = $result->fetch_array()){
                    $data[] = $row;
                }
            }
            return $data;
        }
    }

?>