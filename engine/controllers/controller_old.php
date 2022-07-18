<?php
    class Controller_Old extends controller {
        function __construct() {
            $this->view = new View();
            $this->model = new Model_Old();
        }

        function action_index() {
            $this->view->generate('old_view.php');
        }
    }
?>