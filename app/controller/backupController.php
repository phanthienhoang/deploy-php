<?php
class backupController extends Controller
{   
    public function index()
    {
        $this->view('backup/index' , [
        ]);
        $this->view->render();
    }
    public function insertData()
    {
        
    }
}