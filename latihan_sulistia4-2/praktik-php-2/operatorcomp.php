<html>
    <head><title>Comparision Operators</title></head>
    <body>
        <?php
        $a = 42;
        $b = 20;

        if( $a == $b){
            echo "TEST1 : a is equal to b<br/>";
        }else{
            echo "TEST1 : a is not equal to b<br/>";
        }
        if( $a > $b){
            echo "TEST2 : a is greater than b<br/>";
        }else{
            echo "TEST2 : a is not greater than b<br/>";
        }
        if( $a < $b){
            echo "TEST3 : a is less than b<br/>";
        }else{
            echo "TEST3 : a is not less than b<br/>";
        }
        if( $a != $b){
            echo "TEST4 : a is not equal to b<br/>";
        }else{
            echo "TEST4 : a is equal to b<br/>";
        }
        if( $a >= $b){
            echo "TEST5 : a is either grater than or equal to b<br/>";
        }else{
            echo "TEST5 : a is either grater than nor equal to b<br/>";
        }
        if( $a < $b){
            echo "TEST6 : a is either less than or equal to b<br/>";
        }else{
            echo "TEST6 : a is either less than nor equal to b<br/>";
        }
        ?>
    </body>
</html>