<?php
    class Controller_New extends controller {
        function __construct() {
            $this->view = new View();
            $this->model = new Model_New();
        }

        function action_index() {
            //перенести html-код изначальной страницы в массив
            $this->model->get('../engine/views/old_view.php');
            //проверить массив на наличие данных к удалению
            $this->model->check();
            //удалить данные
            $this->model->delete($this->model->deleteData);
            //создать файл с html-кодом новой страницы
            $this->model->set();
            //сгенерировать вид
            $this->view->generate('new_view.php');
        }
    }
?>