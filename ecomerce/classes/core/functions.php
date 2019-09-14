<?php
class myApp{
	function conectarBD(){
		$serverName = "Mauricio"; //serverName\instanceName
		$serverName ="LAPTOP-O77FNC78\SQLEXPRESS";
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
	/*
			USUARIOS
	*/
	public function insertUser($data){
		$idTipo = $data['idTipo'];
		$user = $this->cleanString($data['user']);
		$password = $this->enc($data['password']);
		$sql = "insert into usuarios(idTipo, usuario, password) OUTPUT inserted.idUser values($idTipo,'$user','$password')";
		return $this->execQuery3($sql)[0];
	}
	//Login pendiente
	/*
			Productos
	*/
	public function selectProductos($data){
		return $this->execQuery3("SELECT * FROM productos");
	}
	public function insertProducto($data){
		$nombre = $this->cleanString($data['nombre']);
		$descripcion = $this->cleanString($data['descripcion']);
		$precioMay = $this->cleanString($data['precionMay']);
		$precioMen = $this->cleanString($data['precionMen']);
		$cantidad = $this->execQuery3($data['cantidad']);
		$idProvedor = $this->execQuery3($data['idProvedor']);
		$sql = "insert into productos(nombre,descripcion,precioMayoreo,precioMenudeo,cantidad,idProvedor) OUTPUT INSERTED.idProd values('$nombre','$descripcion',$precioMay,$precioMen,$cantidad,$idProvedor)";
		return $this->execQuery3($sql);
	}
	public function updateProducto($data){
		$idProducto = $this->cleanString($data['idProducto']);
		$nombre = $this->cleanString($data['nombre']);
		$descripcion = $this->cleanString($data['descripcion']);
		$precioMay = $this->cleanString($data['precionMay']);
		$precioMen = $this->cleanString($data['precionMen']);
		$cantidad = $this->execQuery3($data['cantidad']);
		$idProvedor = $this->execQuery3($data['idProvedor']);
		$sql = "update productos set nombre = '$nombre', descripcion = '$descripcion', precioMayoreo = $precioMay, precioMenudeo = $precioMen, cantidad = $cantidad where idProd =$idProducto";
		return $this->execQuery3($sql);
	}
	public function deleteProducto($data){
		$idProducto = $data['idProducto'];
		return $this->execQuery3("DELETE FROM productos where idProducto = $idProducto");
	}
	public function solicitud($data){
		$idProducto = $data['idProducto'];
		$preg1 = $this->cleanString($data['pregunta1']);
		$preg2 = $this->cleanString($data['pregunta2']);
		$sql = "insert into solicitud(idProducto,pregunta1,pregunta2) OUTPUT inserted.idProducto values($idProducto,'$preg1','$preg2')";
		return execQuery3($sql)[0];
	}
    public function insertTipoUsuario($data){
        $tipo = $this->cleanString($data['tipo']);
        return $this->execQuery3("INSERT INTO tipoUsuario(tipo) OUTPUT inserted.idTipo values('$tipo')")[0];
	}
	public function selectProvedor(){
		return $this->execQuery3("SELECT * from proveedor");
	}
	public function deleteProvedor($data){
		$idProvedor = $data['idProvedor'];
		return $this->execQuery3("DELETE FROM proveedor where idProvedor = $idProvedor");
	}
    public function insertUpdateProvedores($data){
        //rfc, nombre,direccion,provincia,email,telefono,cp,password
        $rfc = $this->cleanString($data['rfc']);
        $nombre = $this->cleanString($data['nombre']);
        $direccion = $this->cleanString($data['direccion']);
        $provincia =$this->cleanString($data['provincia']);
        $email = $data['email'];
        $telefono =$this->cleanString($data['telefono']);
        $cp = $this->cleanString($data['cp']);
		$pass = $this->enc($data['password']);
		$sql = "";
		if($data['query']=='insert') $sql = "INSERT INTO proveedor(rfc, nombre,direccion, provincia,email,telefono,cp,password) OUTPUT INSERTED.idProvedor values('$rfc','$nombre','$direccion','$provincia','$email','$telefono','$cp','$pass')";
		if($data['query'] =='update') $sql = "UPDATE proveedor set rfc = '$rfc', nombre = '$nombre', direccion = '$direccion', $provincia = '$provincia', telefono = '$telefono', cp = '$cp', password = '$pass' OUTPUT inserted.rfc where idProvedor = '".$data['idProveedor']."'";
		return $this->execQuery3($sql)[0];
	}
	public function insertCliente($data){
		$email = $this->cleanString($data['email']);
		$nom = $this->cleanString($data['nombre']);
		$tel = $this->cleanString($data['tel']);
		$dir = $this->cleanString($data['direccion']);
		$rfc = $this->cleanString($data['rfc']);
		$pass = $this->enc($data['password']);
		$sql = "INSERT INTO cliente(email, nombre, tel, direccion, rfc, password) OUTPUT INSERTED.idCliente  VALUES ('$email', '$nom', '$tel', '$dir', '$rfc', '$pass')";
		return $this->execQuery3($sql)[0];
	}
	public function updateCliente($data){
		$idCliente = $this->cleanString($data['idCliente']);
		$email = $this->cleanString($data['email']);
		$nom = $this->cleanString($data['nombre']);
		$tel = $this->cleanString($data['tel']);
		$dir = $this->cleanString($data['direccion']);
		$rfc = $this->cleanString($data['rfc']);
		$pass = $this->enc($data['password']);
		$sql = "UPDATE cliente SET email = '$email', nombre = '$nom', tel = '$tel', direccion = '$dir', rfc = '$rfc', password = '$pass' WHERE idCliente = '$idCliente'";
		return $this->execQuery3($sql)[0];
	}   
	public function deleteCliente($data){
		$idCliente = $data['idCliente'];
		$sql = "DELETE FROM cliente WHERE idCliente = $idCliente";
		return $this->execQuery3($sql)[0];
	} 
}
?>