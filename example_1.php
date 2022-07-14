<?php
    include('func.php');
    
    echo "Array memory usage example.";
    $base_memory_usage = memory_get_usage();
    $base_memory_usage = memory_get_usage();
    
    echo 'Base usage.'.PHP_EOL;
    memoryUsage(memory_get_usage(), $base_memory_usage);
    
    $a = array(someBigValue(), someBigValue(), someBigValue(), someBigValue());
    
    echo 'Array is set.'.PHP_EOL;
    memoryUsage(memory_get_usage(), $base_memory_usage);
    
    foreach ($a as $k=>$v) {
    $a[$k] = someBigValue();
    unset($k, $v);
    echo 'In FOREACH cycle.'.PHP_EOL;
    memoryUsage(memory_get_usage(), $base_memory_usage);
    }
    
    echo 'Usage right after FOREACH.'.PHP_EOL;
    memoryUsage(memory_get_usage(), $base_memory_usage);
    
    unset($a);
    echo 'Array unset.'.PHP_EOL;
    memoryUsage(memory_get_usage(), $base_memory_usage);
?>