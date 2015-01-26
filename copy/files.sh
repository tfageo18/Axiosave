#!/bin/sh 
date >> /home/pi/save_axioweb/log
cd /mnt/cifs
heuredebut=$(date +%H:%M)
echo "Debut de la sauvegarde a $heuredebut" >> /chemin/vers/fichier/log
wget --mirror ftp://user:mot_de_passe@mon_serveur_ftp
heurefin=$(date +%H:%M)
echo "Fin de la sauvegarde a $heurefin" >> /chemin/vers/fichier/log
echo "--------------------------------------------" >> /chemin/vers/fichier/log

