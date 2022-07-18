<?php
    class Controller_New extends controller {
        function __construct() {
            $this->view = new View();
            $this->model = new Model_New();
        }

        function action_index() {
            $this->model->moderate();
            $this->view->generate('new_view.php');
        }
    }
?>