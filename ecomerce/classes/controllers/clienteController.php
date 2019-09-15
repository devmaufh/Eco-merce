<?php
include_once('../core/functions.php');
class ClienteController
{
    private $app;
    public function __construct($app) {
        $this->app=$app;
    }
    public function insert(){
        $data = $_POST['data'];
        $res = $this->app->insertCliente($data);
        $response = array();
        if($res != false || $res != null){
            $response['success'] = true;
            $response['idCliente'] = $res['idCliente'];
        }else $response['success'] =false;
        echo json_encode($response);
    }
    public function update(){
        $data = $_POST['data'];
        $res = $this->app->updateCliente($data);
        $response = array();
        $response['mensaje']='Se actualizo la tabla';
        echo json_encode($response);
    }
    public function delete(){
        $data = $_POST['data'];
        $res = $this->app->deleteCliente($data);
        $response = array();
        $response['mensaje']='Se elimino un campo de la tabla';
        echo json_encode($response);
    }
    
}
$app = new myApp();
$e = new ClienteController($app);
$_POST['action'] = 'insert';
$_POST['data'] = array(
    'email' => '17981523@gmail.com',
    'nombre' => 'Adrian Camacho',
    'tel' => '4611234567',
    'direccion' => 'asdfghjklñ',
    'rfc' => 'hljhljh',
    'password' => 'hola'
);
$_POST['action'] = 'update';
$_POST['data'] = array(
    'idCliente' => '1',
    'email' => '1523@gmail.com',
    'nombre' => 'Adrian Camacho',
    'tel' => '4611234567',
    'direccion' => 'asdfghjklñ',
    'rfc' => 'hljhljh',
    'password' => 'hola'
);
$_POST['action'] = 'delete';
$_POST['data'] = array(
    'idCliente' => 2
);
if(isset($_POST['action'])  && !empty($_POST['action'])) {
    $action=$_POST['action'];
    switch ($action) {
        case 'insert':$e->insert();break;
        case 'delete':$e->delete();break;
        case 'update':$e->update();break;
    }
}
?>