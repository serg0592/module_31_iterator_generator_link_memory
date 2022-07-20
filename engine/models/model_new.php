<?php
    class Model_New extends Model implements HtmlTagDelete {
        //массив для изначального html-кода
        private $htmlStringArray = [];

        //записать обработанный html-код
        public function set() {
            $file = fopen('../engine/views/new_view.php', 'w+');
            foreach ($this->htmlStringArray as $key => $value) {
                fwrite($file, $value);
            }
            fclose($file);
        }

        //получить изначальный html-код
        public function get($oldHtml) {
            $oldFile = fopen($oldHtml, 'r');
            //читаем построчно данные из файла
            while ($row = fgets($oldFile, null)) {
                //записать в массив
                $this->htmlStringArray[] = $row;
            }
            fclose($oldFile);
            return $this->htmlStringArray;
        }

        public function current(){
            return current($this->htmlStringArray);
        }

        public function key() {
            return key($this->htmlStringArray);
        }

        public function next() {
            next($this->htmlStringArray);
        }

        public function rewind() {
            reset($this->htmlStringArray);
        }

        public function valid() {
            return current($this->htmlStringArray) !== false;
        }
        
        function check() {
            //обходим массив, пока не получим пустую строку
            while ($this->valid()) {
                $string = $this->current();
                //проверяем наличие данных к удалению
                if ((strpos($string, '<title>')) || (strpos($string, 'description')) || (strpos($string, 'keywords'))) {
                    //сохраняем данные к удалению
                    $this->deleteData[$this->key()] = $string;
                };
                $this->next();
            };
        }

        public function delete($data) {
            //цикл обхода массива данных к удалению
            foreach ($data as $key => $value) {
                //удалить данные из массива с изначальным html-кодом
                unset($this->htmlStringArray[$key]);
            };
        }
    }
?>