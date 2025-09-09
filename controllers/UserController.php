<?php
// controllers/UserController.php
class UserController {
    private $user;

    public function __construct() {
        $this->user = new User();
    }

    // Kullanıcıları listele
    public function index() {
        $users = $this->user->getAll();
        include 'views/users/index.php';
    }

    // Yeni kullanıcı formu
    public function create() {
        include 'views/users/create.php';
    }

    // Kullanıcı kaydet
    public function store() {
        if ($_POST) {
            $this->user->name = $_POST['name'];
            $this->user->email = $_POST['email'];
            
            if ($this->user->save()) {
                header('Location: index.php?message=Kullanıcı eklendi!');
            } else {
                echo "Hata oluştu!";
            }
        }
    }

    // Kullanıcı düzenle
    public function edit() {
        $id = $_GET['id'];
        $user = $this->user->getById($id);
        include 'views/users/edit.php';
    }

    // Kullanıcı güncelle
    public function update() {
        if ($_POST) {
            $id = $_POST['id'];
            $this->user->name = $_POST['name'];
            $this->user->email = $_POST['email'];
            
            if ($this->user->update($id)) {
                header('Location: index.php?message=Kullanıcı güncellendi!');
            } else {
                echo "Hata oluştu!";
            }
        }
    }

    // Kullanıcı sil
    public function delete() {
        $id = $_GET['id'];
        if ($this->user->delete($id)) {
            header('Location: index.php?message=Kullanıcı silindi!');
        } else {
            echo "Hata oluştu!";
        }
    }
}
?>