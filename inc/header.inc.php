    <?php 
        require"init.inc.php";
        session_start();
        if(isset($_POST["lang"])){
            $_SESSION['lang']=$_POST["lang"];
        }
    ?>
    <meta charset="utf-8">
    <meta name="description" content="3.Louvre">
    <link rel="icon"       href="imgs/logo.png">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">