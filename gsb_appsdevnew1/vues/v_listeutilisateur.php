<?php
if (isset($userselection)) {
    echo 'Cette variable existe, donc je peux la faire afficher';
    
}
?>
<h2> fiches utilisateur</h2>
<div class="row">
    <div class="col-md-4">
        <h3>Sélectionner un utilisateur :
            <?php
                echo $userselection;
                     
            ?>
        </h3>
    </div>
    <div class="col-md-4">
        <form action="index.php?uc=etatutilisateur&action=listefraisutilisateur"
              method="post" role="form">
            <div class="form-group">
                <label for="lstuser" accesskey="n">Utilisateur : </label>
                <select id="lstuser" name="lstuser" class="form-control">
                    <?php
                           
                    foreach ($lesdata as $unedata)
                    {
                            $iduser = $unedata[0];
//                           $iduser = '555';
                           
                            if ($iduser == $userselection)
                            
                            {
                                ?>
                                <option selected value="<?php echo $iduser?>">                     
                                    <?php
                                    echo ($unedata[1].' // ID => '. $unedata[0])
                                    ?>
                                    
                                </option>
                                <?php
                            }
                                else
                                {
                                ?>
                                <option value="<?php echo $iduser ?>">
                                    <?php
                                     echo ($unedata[1].' / ID => '. $unedata[0])
                                    ?>
                                </option>
                                <?php
                                }
                    }         
                    
              
?>
                </select>
            </div>
            <div class="form-group">
                <label for="lstMois" accesskey="n">Mois : </label>
                <select id="lstMois" name="lstMois" class="form-control">
                    <?php
                    foreach ($lesMois as $unMois) {
                        $mois = $unMois['mois'];
                        $numAnnee = $unMois['numAnnee'];
                        $numMois = $unMois['numMois'];
                        if ($mois == $moisASelectionner) {
                            ?>
                            <option selected value="<?php echo $mois ?>">
                                <?php echo $numMois . ' m // ' . $numAnnee ?> </option>
                            <?php
                        } else {
                            ?>
                            <option value="<?php echo $mois ?>">
                                <?php echo $numMois . ' m / ' . $numAnnee ?> </option>
                            <?php
                        }
                    }
                    ?>    

                </select>
            </div>
           
            <input id="ok" type="submit" value="Valider" class="btn btn-success" 
                   role="button">
            <input id="annuler" type="reset" value="Effacer" class="btn btn-danger" 
                   role="button">
           
        </form>
    </div>
</div>

