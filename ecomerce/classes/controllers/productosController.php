<?php
include_once('../core/functions.php');
class ProductoController
{
    private $app;
    public function __construct($app) {
        $this->app=$app;
    }
    public function selectTop(){
        $res = $this->app->selectProductos();
        $response = array();
        if($res != null || $res != false){
            foreach ($res as $key => $value) {
                $response['data'][$key] = $value;
            }
        }else $response['success'] = true; 
        echo json_encode($response);
    }
    public function insert(){
        $data = $_POST['data'];
        $data['query'] = 'insert';
        $res = $this->app->insertProducto($data);
        $response = array();
        if($res != false || $res != null){
            $response['success'] = true;
            $response['idProducto'] = $res['idProducto'];
        }else $response['success'] =false;
        echo json_encode($response);
    }
    public function delete(){
        $response = array();
        $data = $_POST['data'];
        $res = $this->deleteProducto($data);
        if($res) $response['sucess'] = true;
        else $response['success'] = false;
        echo json_encode($response);
    }
    public function update(){
        $data = $_POST['data'];
        $res = $this->app->updateProducto($data);
        $response =  array();
        if($response != false || $response!= null){
            $response['success'] = true;
            $response['data'] = $res;
        }else $response['success'] = false;
        echo json_encode($response);
    }
    public function pedidos(){
        $response = array();
        $data = $_POST['data'];
        $res = $this->app->pedidos($data);
        if($res != null || $res != false){
            $response['status'] = true;
            $response['data'] = $res;
        }else $response['status'] = false;
    }
    public function solicitud(){
        $data = $_POST['data'];
        $res = $this->app->solicitud($data);
        $response =  array();
        if($response != false || $response!= null){
            $response['success'] = true;
            $response['data'] = $res;
        }else $response['success'] = false;
        echo json_encode($response);   
    }
}
$app = new myApp();
$e = new ProductoController($app);

if(isset($_POST['action'])  && !empty($_POST['action'])) {
    $action=$_POST['action'];
    switch ($action) {
        case 'insert':$e->insert();break;
        case 'update':$e->update();break;
        case 'delete':$e->delete();break;
        case 'solicitud':$e->solicitud();break;
        case 'pedidos':$e->pedidos();break;
        case 'selectTop':$e->selectTop();break;
    }
}
?>