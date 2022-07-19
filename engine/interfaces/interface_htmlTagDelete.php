<?php
    interface HtmlTagDelete {
        public function set();
        public function current();
        public function key();
        public function next();
        public function rewind();
        public function valid();
        public function get($oldHtml);
        public function check(); 
        public function delete($data);
    }