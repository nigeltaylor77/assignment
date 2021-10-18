<?php
$title = "index";
include 'includes/header.php'

?>


<h1>Hello world- PHP primer</h1>



<?php
echo 'Hello PHP';
echo ' <br/>';
echo 'Second Line';


?>

<?php
$name = 'Trevoir Williams';
$age = 22;

echo $name;
echo '<h1> My name is :' . $name . ' </h1>';
echo '<h1> my age is : ' . $age . '</h1>';



?>
<button type="button" class="btn btn-dark"> click Me </button>

<?php require 'includes/footer.php'

?>

</html>