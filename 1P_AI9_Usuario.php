
<?php

include_once('1P_AI9_BDConnection.php');

class Usuario{
    public $id;
    public $nombre;
    public $edad;


    public function save(){

        try{
            $dbConnection = new BDConnection();

            if($this->id){

                $sql = "UPDATE usuario set nombre = :nombre, edad = :edad WHERE id = :id";
                $statement = $dbConnection->conexion->prepare($sql);
                $statement->bindParam(":nombre", $this->nombre, PDO::PARAM_STR);
                $statement->bindParam(":edad", $this->edad, PDO::PARAM_INT);
                $statement->bindParam(":id", $this->id, PDO::PARAM_INT);
                $statement->execute();


            }else{
                //INSERT
                $sql = "INSERT INTO usuario (nombre, edad) VALUES (:nombre, :edad)";
                $statement = $dbConnection->conexion->prepare($sql);
                $statement->bindParam(":nombre", $this->nombre, PDO::PARAM_STR);
                $statement->bindParam(":edad", $this->edad, PDO::PARAM_INT);
                $statement->execute();
                $this->id = intval($dbConnection->conexion->lastInsertId());
                
            }

            $dbConnection->cierraConexion();
        }catch(PDOException $e){
            echo 'Falló el guardado: ' . $e->getMessage();
            exit;
        }
    }

    public static function find($id){

        try{
            $dbConnection = new BDConnection();
            $sql = "SELECT * FROM usuario WHERE id = :id";
            $statement = $dbConnection->conexion->prepare($sql);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            $statement->execute();
            //OPCION 1
            $usuario = null;
            $rows = $statement->fetchAll();
            foreach($rows as $row){
                $usuario = new Usuario();
                $usuario->nombre = $row["nombre"];
                $usuario->edad = intVal($row["edad"]);
                $usuario->id = intVal($row["id"]);
            }
            //OPCION 2
            #$usuario = $statement->fetchObject('Usuario');
            $dbConnection->cierraConexion();
            return $usuario;
        }catch(PDOException $e){
            echo 'Falló la busqueda: ' . $e->getMessage();
            exit;
        }

    }

    public function delete(){

        try{
            $dbConnection = new BDConnection();
            
            $sql = "DELETE FROM usuario WHERE id = :id";
            $statement = $dbConnection->conexion->prepare($sql);
            $statement->bindParam(":id", $this->id, PDO::PARAM_INT);
            $statement->execute();
            $dbConnection->cierraConexion();
            
        }catch(PDOException $e){
            echo 'Falló la eliminacion: ' . $e->getMessage();
            exit;
        }

    }

    public static function all(){

        try{
            $dbConnection = new BDConnection();
            $sql = "SELECT * FROM usuario";
            $statement = $dbConnection->conexion->prepare($sql);
            $statement->bindParam(":id", $id, PDO::PARAM_INT);
            $statement->execute();
            //OPCION 1
            $usuarios = [];
            $rows = $statement->fetchAll();
            foreach($rows as $row){
                $usuario = new Usuario();
                $usuario->nombre = $row["nombre"];
                $usuario->edad = intVal($row["edad"]);
                $usuario->id = intVal($row["id"]);
                array_push($usuarios, $usuario);
            }
            //OPCION 2
            #$usuario = $statement->fetchObject('Usuario');
            $dbConnection->cierraConexion();
            return $usuarios;
        }catch(PDOException $e){
            echo 'Falló la busqueda: ' . $e->getMessage();
            exit;
        }

    }

}