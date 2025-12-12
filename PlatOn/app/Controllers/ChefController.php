<?php
class ChefController extends Controller {
    public function dashboard() {
        if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'chef') {
            $this->redirect('auth/login');
        }
        
        $this->view('chef/dashboard', [
            'title' => 'Dashboard Chef - PlatOn'
        ]);
    }
    
    public function update() {
        if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'chef') {
            $this->redirect('auth/login');
        }
        require_once BASE_PATH . '/app/views/process/update.php';
    }
}
?>