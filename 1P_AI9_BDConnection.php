 <?php

include_once('1P_AI9_BDConfig.php');

class BDConnection {

    public $conexion;

    function __construct(){

    try {
        $dsn = 'mysql:dbname='. BDConfig::$DBNAME . ';host=' .BDConfig::$DBSERVER;
        $usuario = BDConfig::$DBUSER;
        $password = BDConfig::$DBPASSWORD;
    $this->conexion = new PDO($dsn, $usuario, $password);
    } catch (PDOException $e) {
    echo 'Falló la conexión: ' . $e->getMessage();
    exit;
    }

    }

    function cierraConexion(){
        $this->conexion = null;
    }
}






