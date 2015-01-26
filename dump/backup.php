<?php 
/* Param�tre de date */
$jour = date("D"); 

/* Param�tre MySQL */
$db_server 	= "mon_serveur_sql"; 
$db_name 	= "nom_de_la_base_sql"; 
$db_username 	= "utilisateur_sql"; 
$db_password 	= "mot_de_passe_sql"; 
$socket		= "/tmp/mysql5.sock";

if (system("mysqldump --host=$db_server -S $socket --user=$db_username --password=$db_password -C -Q -e $db_name | gzip -c >  /chemin/vers/dossier/sauvegarde/$jour-$db_name.sql.gz"));
?>

