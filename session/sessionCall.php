<?
session_start();
?>
<html>

<body>
    <?
    echo "Favorite color is " . $_SESSION['favcolor'] . "<br>";
    echo "Favorite animal is " . $_SESSION['favanimal'] . ".";
    ?>
</body>

</html>