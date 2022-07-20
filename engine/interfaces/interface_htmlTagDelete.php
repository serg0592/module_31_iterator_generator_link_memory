<?php
    //интерфейс для удаления html-тэгов из готового html-кода
    interface HtmlTagDelete {
        public function current(); //возвращает текущий элемент коллекции
        public function key(); //возвращает ключ текущего элемента
        public function next(); //возвращает следующий элемент
        public function rewind(); //возвращает первый элемент коллекции (начинает обход с начала)
        public function valid(); //проверка конца коллекции (наличия элемента)
        public function get($oldHtml); //получить изначальный html-код в массив
        public function check(); //проверить начличие в массиве элементов к удалению
        public function delete($data); //удалить элементы из массива
        public function set(); //создать новый файл с html-кодом из обработанного массива
    }