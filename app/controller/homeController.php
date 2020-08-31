<?php
class homeController extends Controller
{   
    public $modelFashionModel;

    public function __construct()
    {
        $this->modelFashionModel = $this->model('modelFashion');
    }
    public function index(){
        $this->view('home\index', [
            'data' => $this->modelFashionModel->getHostModel(),
            'model' => $this->modelFashionModel->getModels()
        ]);
        $this->view->render();

    }

    public function modelSingle($id){
        $this->view('model-single\index', [
            'data' => $this->modelFashionModel->getModelSingle($id),
            'albums'=> $this->modelFashionModel->getImageAlbum($id),
        ]);
        $this->view->render();
    }

    public function hoang(){
        echo "i am in " . __CLASS__ . ' method ' . __METHOD__ . 'prams ';
    }
}