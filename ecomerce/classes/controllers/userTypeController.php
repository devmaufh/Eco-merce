<?php
include_once('../core/functions.php');
class UserTypeController
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
            $response['idTipo'] = $res['idTipo'];
        }else $response['success'] =false;
        echo json_encode($response);
    }
    public function update(){
        
    }
}
$app = new myApp();
$e = new UserTypeController($app);

if(isset($_POST['action'])  && !empty($_POST['action'])) {
    $action=$_POST['action'];
    switch ($action) {
        case 'insert':$e->insert();break;
        case 'update': $e->update();break;
    }
}
?>