<?php
$title = "String Manipulation";

include 'includes/header.php'
?>

<body>
    <h1>String Manipulation</h1>

    <?php
    $phrase1 = "student who came late";
    $phrase2 = "in class, stand with rock";
    $name = "trevior williams";

    echo $phrase1 . ", named Tiffany " . $phrase2;
    echo '<br/>';

    echo '<hr/>';
    echo 'uppercase first letter :' . ucfirst($name) . '<br/>';
    echo 'uppercase first letter of each word :' . ucwords($name) . '<br/>';


    echo 'uppercase:' . strtoupper($name) . '<br/>';
    echo 'lowercase:' . strtolower($name) . '<br/>';

    echo '<hr/>';
    echo 'Repeat string-Nested Function:' . strtoupper(str_repeat('a', 10)) . '<br/>';
    '<br/>';

    echo 'get a substring:' . substr($name, 3, 5) . '<br/>';

    echo 'Get position of string:' . strpos($name, 'w') . '<br/>';

    echo 'find character "R":' . strchr($name, 'R') . '<br/>';
    echo 'find character "r":' . strchr($name, 'r') . '<br/>';
    echo 'find character "s":' . strchr($name, 's') . '<br/>';
    echo 'find character "e":' . strchr($name, 'e') . '<br/>';


    echo 'Find the lenght of a string:' . strlen($name) . '<br/>';

    echo 'without trim:' . "A" . "B C D" . "E" . '<br/>';
    echo 'Trim spaces on both sides:' . "A" . trim("B C D") . "E" . '<br/>';
    echo 'Trim spaces on both sides:' . "A" . ltrim("B C D") . "E" . '<br/>';
    echo 'Trim spaces on both sides:' . "A" . rtrim("B C D") . "E" . '<br/>';


    echo 'replace string with another:' . str_replace("stand", "sit", $phrase2) . '<br/>';


    ?>

    <?php require 'includes/footer.php'

    ?>

</body>

</html>