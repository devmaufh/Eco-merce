<?php
include_once('../core/functions.php');
class ProvedorController
{
    private $app;
    public function __construct($app) {
        $this->app=$app;
    }
    public function insert(){
        $data = $_POST['data'];
        $res = $this->app->insertTipoUsuario($data);
        $response = array();
        if($res != false || $res != null){
            $response['success'] = true;
            $response['idProvedor'] = $res['idProvedor'];
        }else $response['success'] =false;
        echo json_encode($response);
    }
}
$app = new myApp();
$e = new ProvedorController($app);
$_POST['action'] = 'insert';
$_POST['data'] = array(
    'tipo' => 'insertado desde codigo',
);
if(isset($_POST['action'])  && !empty($_POST['action'])) {
    $action=$_POST['action'];
    switch ($action) {
        case 'insert':$e->insert();break;
    }
}
?>