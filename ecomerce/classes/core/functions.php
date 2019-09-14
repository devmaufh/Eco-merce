<?php
class myApp{
	function conectarBD(){
		$serverName = "Mauricio"; //serverName\instanceName
		$connectionInfo = array( "database"=>"ecomerce", "UID"=>"", "PWD"=>"", "CharacterSet" => "UTF-8");
		$conn = sqlsrv_connect( $serverName, $connectionInfo);
		return $conn;		
    }
    private function execQuery3($query){
		$conn=$this->conectarBD();
		$stmt= sqlsrv_query($conn,$query) or die(print_r( sqlsrv_errors(), true));
		$rowsAffected=sqlsrv_rows_affected($stmt);
		if($rowsAffected==-1){
			$x=array();
			while($row=sqlsrv_fetch_array($stmt,SQLSRV_FETCH_ASSOC)){
				$x[]=$row;
			}
			sqlsrv_close($conn);
			return $x;	
		}elseif($rowsAffected==0){
			return false;
		}elseif($rowsAffected>0){
			return true;
		}
    }
    //Additional functions
	function cleanString($string) {
		return preg_replace('/[^A-Za-z0-9\. -]/', '', $string); // Removes special chars.
     }
     public function enc($var){
		$target=0.05;
		$c=8;
		$x=null;
		do{
			$c++;
			$start=microtime(true);
			$x=password_hash($var, PASSWORD_DEFAULT,["cost"=>$c]);
			$end=microtime(true);
		}while(($end-$start)<$target);
        return $x;
    }
    public function checkHash($var,$hash){
		return password_verify($var,$hash);
    }

    public function insertTipoUsuario($data){
        $tipo = $this->cleanString($data['tipo']);
        return $this->execQuery3("INSERT INTO tipoUsuario(tipo) OUTPUT inserted.idTipo values('$tipo')")[0];
    }
    public function insertProvedor($data){
        //rfc, nombre,direccion,provincia,email,telefono,cp,password
        $rfc = $this->cleanString($data['rfc']);
        $nombre = $this->cleanString($data['nombre']);
        $direccion = $this->cleanString($data['direccion']);
        $provincia =$this->cleanString($data['provincia']);
        $email = $data['email'];
        $telefono =$this->cleanString($data['telefono']);
        $cp = $this->cleanString($data['cp']);
        $pass = $this->enc($data['password']);
        $sql = "INSERT INTO proveedor(rfc, nombre,direccion, provincia,email,telefono,cp,password) OUTPUT INSERTED.idProvedor values('$rfc','$nombre','$direccion','$provincia','$email','$telefono','$cp','$pass')";
        return $this->execQuery3($sql)[0];
    }
    
}
?>