<?php
    namespace app\models;
    use PDO;


    abstract class Model {
        
        protected $connection;
        
        function __construct(){
            $this->connection = Connection::connect();            
        }

        public function all(){

            $sql = "select * from {$this->table}";

            $all = $this->connection->prepare($sql);

            $all->execute();

            return $all->fetchAll();                        
        }

        public function allClient(){

            $sql = "select * from client";

            $all = $this->connection->prepare($sql);

            $all->execute();
            $results = $all->fetchAll();
            
            $json = json_encode($results);
            return $json;                        
        }

        public function _delete($id){        
            var_dump($id);
            
            $stmt = $this->connection->prepare('DELETE FROM client WHERE id = :id');
            $stmt->bindParam(':id', $id, \PDO::PARAM_INT); 
            $stmt->execute();

            return $stmt->rowCount(); 
            //return $stmt->rowCount() ; 
        }
        public function update($name, $age, $kind_person, $active, $client_at, $registerCode, $updated_at,$id){
            
            $sql = "UPDATE client SET name=?, age=?, kind_person=? active=? client_at =? registerCode=? updated_at=? WHERE id=?";
            
            $stmt= $this->connection->prepare($sql);
            $stmt->execute([$name, $age, $kind_person, $active, $client_at, $registerCode, $updated_at,$id]);
            
            return $stmt;
        }

        public function find($field, $value){            
            
            $sql = "select * from {$this->table} where {$field} = ?";

            $find = $this->connection->prepare($sql);
            $find->bindValue(1,$value);

            $find->execute();

            return $find->fetch();
        }

        public function login($username, $password){       
                             
            $stmt = $this->connection->prepare("SELECT * FROM {$this->table} WHERE username=:username AND password=:password");
            $stmt->execute(['username' => $username, 'password' => $password]); 
            $user = $stmt->fetch();

            return $user;
        }
        
        

        public function create($name, $age, $kind_person, $active, $client_at , $registerCode){            
            $sql = "INSERT INTO {$this->table} (name, age, kind_person, active, client_at , registerCode) VALUES (?,?,?,?,?,?)";
            $stmt= $this->connection->prepare($sql);
            $stmt->execute([$name, $age, $kind_person, $active, $client_at , $registerCode]);

            return $this->connection->lastInsertId();
        }
    } 
?>