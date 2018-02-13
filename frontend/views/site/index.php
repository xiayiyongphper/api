
<?php

if (isset($exception)){
    echo '<pre>';
    print_r($exception);
    exit();
}

if (isset($methods)){
    echo '<pre>';
    //print_r($methods);
    foreach ($methods as $method){
        if(strpos($method,'action') !== false){
            $method = strtolower(substr($method,6));
            echo "<a href=\"http://test.laile.com/site/$method\">$method</a>";
            echo "<br/>";
        }
    }
    echo '</pre>';
    exit();
}

    echo '<pre>';
    echo 'Request:';
    print_r($request);
    echo '</pre>';
    echo '<pre>';
    echo 'Route:';
    print_r($route);
    echo '</pre>';
    echo '<pre>';
    echo 'Response Header:';
    print_r($header);
    echo '</pre>';
    if(isset($body)){
        echo '<pre>';
        echo 'Response Body:';
        print_r($body);
        echo '</pre>';
    }
    
