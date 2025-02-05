<?php 
    namespace app\core;

    class Flasher {

        public static function setflash($keterangan, $aksi, $tipe) {
            $_SESSION['flash'] = ["keterangan" => $keterangan, "aksi" => $aksi, "tipe" => $tipe];
        }

        public static function flash(){
            if (isset($_SESSION['flash'])) {
                echo '<div class="alert alert-' .$_SESSION['flash']['tipe']. ' alert-dismissible fade show" role="alert">
                <strong>' .$_SESSION['flash']['keterangan']. ' </strong> ' .$_SESSION['flash']['aksi']. ' 
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
                unset($_SESSION['flash']);
            }
        }
    }
?>