<?php 
    class database{
        public $que;
        private $servername='localhost';
        private $username='root';
        private $password='password';
        private $dbname='crud';
        private $result=array();
        private $mysqli='';

        public function __construct(){
            $this->mysqli = new mysqli($this->servername,$this->username,$this->password,$this->dbname);
        }

        public function insert($table,$para=array()){
            $table_columns = implode(',', array_keys($para));
            $table_value = implode("','", $para);

            $sql="INSERT INTO $table($table_columns) VALUES('$table_value')";
            $result = $this->mysqli->query($sql);
        }

        public function update($table,$para=array(),$id){
            $args = array();

            foreach ($para as $key => $value) {
                $args[] = "$key = '$value'"; 
            }

            $sql="UPDATE  $table SET " . implode(',', $args);

            $sql .=" WHERE $id";

            $result = $this->mysqli->query($sql);
        }

        public function delete($table,$id){
            $sql="DELETE FROM $table";
            $sql .=" WHERE $id ";
            $sql;
            $result = $this->mysqli->query($sql);
        }

        public $sql;

        public function select($table,$rows="*",$where = null){
            if ($where != null) {
                $sql="SELECT $rows FROM $table WHERE $where";
            }else{
                $sql="SELECT $rows FROM $table";
            }
            
            $this->sql = $result = $this->mysqli->query($sql);
        }
        
        public function login($table,$para=array()){
            $table = $table;
            $email = $para['email'];
            $phone = $para['phone'];
            $sql="SELECT * FROM $table WHERE `email`='$email' AND `phone`='$phone' ";
            $result = $this->mysqli->query($sql);
            echo mysqli_error($this->mysqli);
            $num = mysqli_num_rows($result);
            if($num == 1){
                $this->num = $num;
            }
        }
        
        public function emailExist($table,$para=array()){
            $table = $table;
            $email = $para['email'];
            $sql="SELECT * FROM $table WHERE `email`='$email'";
            $result = $this->mysqli->query($sql);
            echo mysqli_error($this->mysqli);
            $num = mysqli_num_rows($result);
            if($num == 1){
                $this->exist = $num;
            }
        }
        
        public function __destruct(){
            $this->mysqli->close();
        }
    }
    ?>