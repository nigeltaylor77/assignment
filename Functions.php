<?php
$title = "Functions";

include 'includes/header.php'
?>

<body>
    <h1>Functions</h1>


    <?php

    function writemessage()
    {
        echo "You are a really nice person, have a nice time!<br/>";
    }
    writemessage();



    function changenum(&$num)
    {
        $num = $num + 10;
    }






    function addfunction($num1, $num2)
    {
        $sum = $num1 + $num2;
        echo "the sum of $num1 and $num2 is: $sum <br/>";
    }


    function returnproduct($num1, $num2)
    {
        $prod = $num1 * $num2;
        return $prod;
    }



    $num = 500;
    addfunction(10, 20);
    addfunction(10, $num);
    addfunction(50, 10);

    changenum($num);
    echo $num . '<br/>'; {
    }


    $return_value = returnproduct(10, 200);
    echo $return_value . '<br/>';

    ?>



    <?php require 'includes/footer.php'

    ?>
</body>

</html>