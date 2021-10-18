<?php
$title = "Date and Time Manipulation";
include 'includes/header.php'
?>


<body>
    <h1>Date, Time Manipulation</h1>


    <?php
    $datenow = getdate();
    echo "today's Date:<br/>";

    echo  $datenow['mday'] . '<br/>';

    echo  $datenow['mon'] . '<br/>';
    echo  $datenow['year'] . '<br/>';

    echo "Today's date:" . $datenow['mday'] . '/' . $datenow['mon'] . '/' . $datenow['year'];
    echo '<br/>';

    //echo time();

    print date("m/d/y G.i:s<br.", time()) . '<br/>';

    echo '<br/>';
    print "today is";

    print date("j of F y,\a\\t g.i a", time());
    ?>



    <?php require 'includes/footer.php'

    ?>
</body>

</html>