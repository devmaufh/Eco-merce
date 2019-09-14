<?php
include_once('../core/functions.php');
class ProductoController
{
    private $app;
    public function __construct($app) {
        $this->app=$app;
    }
    public function insert(){
        $data = $_POST['data'];
        $data['query'] = 'insert';
        $res = $this->app->insertUser($data);
        $response = array();
        if($res != false || $res != null){
            $response['success'] = true;
            $response['idUser'] = $res['idUser'];
        }else $response['success'] =false;
        echo json_encode($response);
    }
   
}
$app = new myApp();
$e = new ProductoController($app);
if(isset($_POST['action'])  && !empty($_POST['action'])) {
    $action=$_POST['action'];
    switch ($action) {
        case 'insert':$e->insert();break;

    }
}
?>