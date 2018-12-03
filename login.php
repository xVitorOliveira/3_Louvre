<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Administration</title>
    <?php 
        include"inc/header.inc.php";
        if(isset($_POST["submit"])){
            extract($_POST);
            $objStatement = $pdo->query('select id_user from user where login = "'.$login.'" and pwd="'.$pwd.'"');   
            $result=$objStatement->fetch();
            if(isset($result['id_user'])){
                $_SESSION['admin']=true;
                $_SESSION['id_user']=$result['id_user'];
                header('location:index.php');
            }else{
                header('location:login.php?login=false');
            }
            exit(); 
        }
        if(isset($_GET["login"])){
            $content .="<div><b>Identifiants non trouvés</b></div>";
        }
    ?>
</head>
<body>
    <?php include"inc/nav.inc.php";?>
    <main>
        <?php
            echo $content; 
        ?>
        <form method="POST" action="<?= $_SERVER['PHP_SELF']; ?>">
            <label for="login">Login</label>
            <input type="text" id="login" name="login">
            <label for="pwd">password</label>
            <input type="password" id="pwd" name="pwd">
            <input type="submit" name="submit">
        </form>
    </main>
    <?php include"inc/footer.inc.php";?>
</body>
</html>