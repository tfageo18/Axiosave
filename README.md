# Axiosave
Scripts de sauvegarde d'un serveur web permettant de faire un dump de MySQL et une copie des fichiers en mode mirroir sur une autre machine que le serveur Web.

Comprends : 
 - 1 exemple de dump SQL journalier
 - 1 script de copie des fichiers du serveur web vers une autre machine à l'aide de la commande WGET
 
 Infrastructure 
 
 |      |                                |      |
 |      | -------------------------------|      |
 |______|                                |______|
Serveur WEB                             Site distant (rasperry pi, machine linux)
Dump du sql                             Script de sauvegarde des fichiers
