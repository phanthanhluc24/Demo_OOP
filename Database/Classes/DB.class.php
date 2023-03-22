 <?php
    class DB{
        private $severName='localhost';
        private $Name_DB='root';
        private $Pass="";
        private $DB_Name="user";

        protected function connect(){
            $conn="mysql:host=".$this->severName. ";dbname=".$this->DB_Name;
            $pdo=new PDO($conn,$this->Name_DB,$this->Pass);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
            return $pdo;
        }
    }

?>