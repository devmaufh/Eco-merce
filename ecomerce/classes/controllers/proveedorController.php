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
        $data['query'] = 'insert';
        $res = $this->app->insertUpdateProvedores($data);
        $_SESSION['userID']= $res;
        $response = array();
        if($res != false || $res != null){
            $response['success'] = true;
            $response['idProvedor'] = $res['idProvedor'];
        }else $response['success'] =false;
        echo json_encode($response);
    }
    public function delete(){
        $response = array();
        $data = $_POST['data'];
        $res = $this->deleteProvedor($data);
        if($res) $response['sucess'] = true;
        else $response['success'] = false;
        echo json_encode($response);
    }
    public function update(){
        $data = $_POST['data'];
        $data['query'] = 'update';
        $res = $this->app->insertUpdateProvedores($data);
        $response =  array();
        if($response != false || $response!= null){
            $response['success'] = true;
            $response['data'] = $res;
        }else $response['success'] = false;
        echo json_encode($response);
    }
}
$app = new myApp();
$e = new ProvedorController($app);
if(isset($_POST['action'])  && !empty($_POST['action'])) {
    $action=$_POST['action'];
    switch ($action) {
        case 'insert':$e->insert();break;
        case 'update':$e->update();break;
        case 'delete':$e->delete();break;
    }
}
?>