    <header>
        <nav>
            <ul>     
                <?php 
                    if($_SESSION['lang']=='eng'){
                        $quartier="District";
                        $evenements="Events";
                    }else{
                        $quartier="Quartier";
                        $evenements="Evenements"; 
                    }
                ?>
                <li id="home"><a href="index.php" title="3Louvre" >3Louvre</a></li>
                <li><a href="quartier.php"        title="Quartier"><?php echo $quartier; ?></a></li> <!-- vitor -->
                <li><a href="culture_loisirs.php" title="Culture & Loisirs">Culture</a></li> <!-- Alexandre tout autor du quartier-->
                <li><a href="infos_pratiques.php" title="Infos Pratiques">Infos</a></li> <!-- Alexis Autour et localization -->
                <li><a href="evenements.php"      title="Evenements"><?php echo $evenements; ?></a></li> <!-- Lecatelier -->
                <li><a href="louvre.php"          title="Louvre">Louvre</a></li> <!-- Jonathan -->
            </ul>
        </nav>
    </header>