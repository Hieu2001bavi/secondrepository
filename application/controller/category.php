<?php 
class Category extends Controller
{
    public function index(){
        // $cats = $this->model->getAllCategory();
        $cats = $this->model->getAllData('category');
        require APP . 'view/_templates/header.php';
        require APP . 'view/category/index.php';
        require APP . 'view/_templates/footer.php';
    }

    public function addcat(){
        if (isset($_POST["addnew"])) {
            $_POST["date_create"]=date("Y-m-d");
            $table = 'category';
            $this->model->Save($_POST,$table);
        }
        require APP . 'view/_templates/header.php';
        require APP . 'view/category/addnew.php';
        require APP . 'view/_templates/footer.php';
    }
}
?>