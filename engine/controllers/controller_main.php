<?php
    class Controller_Main extends controller {
        function __construct() {
            $this->view = new View();
            $this->model = new Model_Main();
        }

        function action_index() {
            $this->view->generate('main_view.php');
        }
    }
?>