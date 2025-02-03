<?php 
namespace app\controllers;

use app\core\Controller;
use app\core\Flasher;

class Sell extends Controller {
    public function index() {
        // Load the ProductModel
        $productModel = $this->model('Product_model');

        if( !isset($_SESSION['user_id'])) {
            header('Location: ' . BASEURL . '/login');
        } else {
            // Get the user ID from the session
            $userId = $_SESSION['user_id'];
        }

        // Fetch products for the logged-in user
        $data['products'] = $productModel->getProductsByOrderedId($userId);
        $data['judul'] = 'Ordered Product';

        // Load the view
        $this->view('templates/header', $data);
        $this->view('order/index', $data); // Adjust the view path as necessary
        $this->view('templates/footer');
    }

    
}