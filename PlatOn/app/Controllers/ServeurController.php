<?php
class ServeurController extends Controller {
    public function dashboard() {
        if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'serveur') {
            $this->redirect('auth/login');
        }
        
        $this->view('serveur/dashboard', [
            'title' => 'Dashboard Serveur - PlatOn'
        ]);
    }
    
    public function update() {
        if (!isset($_SESSION['role']) || $_SESSION['role'] !== 'serveur') {
            $this->redirect('auth/login');
        }
        require_once BASE_PATH . '/app/views/process/update.php';
    }
}
?>