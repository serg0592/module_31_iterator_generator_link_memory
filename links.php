<?php
    /*$var1 = "Example variable";
    $var2 = "";
     
    function global_references($use_globals)
    {
        global $var1, $var2;
        if (!$use_globals) {
            $var2 =& $var1; // только локально
        } else {
            $GLOBALS["var2"] =& $var1; // глобально
        }
    }
     
    global_references(false);
    echo "значение var2: '$var2'\n"; // значение var2: ''
    global_references(true);
    echo "значение var2: '$var2'\n"; // значение var2: 'Example variable'*/

    /*$ref = 0;
    $row =& $ref;
    foreach (array(1, 2, 3) as $row) {
        echo $ref;
        echo $row;
        // do something
    }
    echo $ref; // 3 - последнее значение, используемое в цикле*/

    /*$top = array(
        'A' => array(),
        'B' => array(
            'B_b' => array(),
        ),
    );
     
    $top['A']['parent'] = &$top;
    $top['B']['parent'] = &$top;
    $top['B']['B_b']['data'] = 'test';
    print_r($top['A']['parent']['B']['B_b']); // array()*/

    /*function &bar()
    {
	    $a = 5;
	    return $a;
    }
    foo(bar());*/

    $foo = 'foo';
    function & get_foo_ref () 
    { 
        global $foo; 
        return $foo; 
    } 
    $bar = & get_foo_ref(); 
    $bar = 'bar';
    echo $foo;
?>