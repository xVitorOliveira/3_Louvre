    <?php 
        if($_SESSION['lang']=='eng'){
            $contact="Contact us";
            $retourhaut="Return to Top"; 
            $mentions="Legal Mentions";
        }else{
            $contact="Contactez Nous";
            $retourhaut="Retour en haut"; 
            $mentions="Mentions légales";
        }
    ?>    
    <footer>
        <a href="mailto:3Louvre@yopmail.com" title="Contactez Moi"><?php echo $contact; ?></a>
        | © | Nom du Site |
        <a href="#top"                       title="Retour en haut de la page"><?php echo $retourhaut; ?></a>
        |
        <a href="mentions.html"              title="Acceder au mentions légales"><?php echo $mentions; ?></a>
        |
        <a href="login.php"                  title="Administration">Administration</a>
        |
        <form id="flag" method="POST" action="
            <?= $_SERVER['PHP_SELF']; ?>">
                <input type="submit" id="lang" value="<?php 
                    if($_SESSION['lang']=='fr'){
                        echo 'eng';
                    }else{
                        echo 'fr';
                    }
            ?>" name="lang">
        </form>
        |
        <?
        if(isset($_SESSION['admin']) && $_SESSION['admin']==true){
            echo '<form method="POST" action="<?= $_SERVER[\'PHP_SELF\']; ?>">';
            echo '<input type="submit" id="lang" value="';
            if($_SESSION['lang']=='fr'){
                echo 'eng';
            }else{
                echo 'fr';
            }
            echo '" name="lang">';
        </form>
        }
    </footer>