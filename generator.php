<?php
    function nums() {
        for ($i = 0; $i < 5; ++$i) {
            // get a value from the caller
            $cmd = (yield $i);
            if ($cmd == 'stop') {
                return; // exit the generator
            }
        }
    }
    
    $gen = nums();
    
    foreach ($gen as $v) {
        // we are satisfied
        if ($v == 3) {
            $gen->send('stop');
        }
        echo "{$v}n<br>";
    }
    /*function getRange ($max) {
        $array = [];
        for ($i = 1; $i <= $max; $i++) {
            $array[] = $i;
        } 
        return $array;
    }*/

    /*function getRange ($max = 10) {
        for ($i = 1; $i <= $max; $i++) {
            yield $i;
        }
    }*/

    function getRange ($max = 10) {
        for ($i = 1; $i < $max; $i++) { 
            $injected = yield $i;
            if ($injected === 'stop') return;
        }
    }
    
    /*foreach (getRange(15) as $range) {
        echo "Dataset {$range}<br>";
    };*/

    $generator = getRange(PHP_INT_MAX);
 
    foreach ($generator as $range => $value) {
        if ($range === 100) {
            $generator->send('stop');
        }
        echo "Dataset {$range} has {$value} value<br>";
    }

    /*foreach (getRange(PHP_INT_MAX) as $range => $value) {
        echo "Dataset {$range} has {$value} value<br>";
    }*/
?>