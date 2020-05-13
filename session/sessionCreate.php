<?
session_start();
?>

<html>

<body>
    <?
    $_SESSION["favcolor"] = "green";
    $_SESSION["favanimal"] = "cat";
    echo "Session variables are net"
    ?>
</body>

</html>