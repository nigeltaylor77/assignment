<?php
$title = "While do while";

include 'includes/header.php'
?>

<body>
    <h1>while Loop</h1>


    <?php

    $grade = 0;

    while ($grade < 10) {
        echo '<p> I AM LESS THAN 10</p>';
        $grade++;
    }
    echo 'exit loop!';
    ?>


    <h1>Do while Loop</h1>


    <?php


    $grade = 0;
    do {
        echo '<p> I AM DO WHILE LOOP</p>';
        $grade++;
    } while ($grade < 10);
    echo 'exit loop!';

    ?>


    <?php require 'includes/footer.php'

    ?>
</body>

</html>