<?php
    class Model_New extends Model implements HtmlTagDelete {
        private $htmlStringArray = [];

        public function set() {
            return $this;
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

        public function get($oldHtml) {
            $oldFile = fopen($oldHtml, 'r');
            while ($row = fgets($oldFile, null)) {
                $this->htmlStringArray[] = $row;
            }
            fclose($oldFile);
            return $this->htmlStringArray;
        }
        
        function check() {
            while ($this->valid()) {
                $string = $this->current();
                if ((strpos($string, '<title>')) || (strpos($string, 'description')) || (strpos($string, 'keywords'))) {
                    $this->deleteData[$this->key()] = $string;
                };
                $this->next();
            };
        }

        public function delete($data) {
            foreach ($data as $key => $value) {
                unset($this->htmlStringArray[$key]);
            };
        }
    }
?>