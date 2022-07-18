<?php
    class Controller_Menu extends controller {
        function __construct() {
            $this->view = new View();
            $this->model = new Model_Menu();
        }

        function action_index() {
            $this->view->generate('menu_view.php');
        }
    }
?>