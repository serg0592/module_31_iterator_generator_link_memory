<?php
    class Model_New extends Model implements HtmlTagDelete {
        private $htmlStringArray = [];

        public function current(){
            return current($this->htmlStringArray);
        }

        public function key() {
            return key($this->htmlStringArray);
        }

        public function next() {
            next($this->htmlStringArray);
        }

        public function valid() {
            return current($this->htmlStringArray) !== false;
        }

        function getString($key) {
            return $this->htmlStringArray[$key];
        }

        function deleteString($key) {
            unset($htmlStringArray[$key]);
        }
        
        function moderate(){
            $oldFile = fopen('../engine/views/old_view.php', 'r');
            while ($row = fgets($oldFile, null)) {
                $htmlStringArray[] = $row;
            }
            fclose($oldFile);
        }        
    }
?>