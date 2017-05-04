<?php
// application/controllers/ProductController.class.php
class IndexController extends Controller{
    public function mainAction(){
        include CURR_VIEW_PATH . "index.php";
        // Load Captcha class
        $this->loader->library("Captcha");
        $captcha = new Captcha;
        $captcha->hello();
        // $productModel = new ProductModel("product");
        // $products = $productModel->getProducts();
    }

    public function indexAction(){
        // $productModel = new ProductModel("product");
        // $products = $productModel->getProducts();

        // Load View template
        include  CURR_VIEW_PATH . "index.php";

    }
    // public function menuAction(){
    //     include CURR_VIEW_PATH . "menu.html";
    // }

    // public function dragAction(){
    //     include CURR_VIEW_PATH . "drag.html";
    // }

    // public function topAction(){
    //     include CURR_VIEW_PATH . "top.html";
    // }

}