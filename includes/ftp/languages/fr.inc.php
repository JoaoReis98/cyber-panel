<?php

//   -------------------------------------------------------------------------------
//  |                  net2ftp: a web based FTP client                              |
//  |              Copyright (c) 2003-2013 by David Gartner                         |
//  |                                                                               |
//  | This program is free software; you can redistribute it and/or                 |
//  | modify it under the terms of the GNU General Public License                   |
//  | as published by the Free Software Foundation; either version 2                |
//  | of the License, or (at your option) any later version.                        |
//  |                                                                               |
//   -------------------------------------------------------------------------------

//   -------------------------------------------------------------------------------
//  | For credits, see the credits.txt file                                         |
//   -------------------------------------------------------------------------------
//  |                                                                               |
//  |                              INSTRUCTIONS                                     |
//  |                                                                               |
//  |  The messages to translate are listed below.                                  |
//  |  The structure of each line is like this:                                     |
//  |     $message["Hello world!"] = "Hello world!";                                |
//  |                                                                               |
//  |  Keep the text between square brackets [] as it is.                           |
//  |  Translate the 2nd part, keeping the same punctuation and HTML tags.          |
//  |                                                                               |
//  |  The English message, for example                                             |
//  |     $message["net2ftp is written in PHP!"] = "net2ftp is written in PHP!";    |
//  |  should become after translation:                                             |
//  |     $message["net2ftp is written in PHP!"] = "net2ftp est ecrit en PHP!";     |
//  |     $message["net2ftp is written in PHP!"] = "net2ftp is geschreven in PHP!"; |
//  |                                                                               |
//  |  Note that the variable starts with a dollar sign $, that the value is        |
//  |  enclosed in double quotes " and that the line ends with a semi-colon ;       |
//  |  Be careful when editing this file, do not erase those special characters.    |
//  |                                                                               |
//  |  Some messages also contain one or more variables which start with a percent  |
//  |  sign, for example %1\$s or %2\$s. The English message, for example           |
//  |     $messages[...] = ["The file %1\$s was copied to %2\$s "]                  |
//  |  should becomes after translation:                                            |
//  |     $messages[...] = ["Le fichier %1\$s a �t� copi� vers %2\$s "]             |
//  |                                                                               |
//  |  When a real percent sign % is needed in the text it is entered as %%         |
//  |  otherwise it is interpreted as a variable. So no, it's not a mistake.        |
//  |                                                                               |
//  |  Between the messages to translate there is additional PHP code, for example: |
//  |      if ($net2ftp_globals["state2"] == "rename") {           // <-- PHP code  |
//  |          $net2ftp_messages["Rename file"] = "Rename file";   // <-- message   |
//  |      }                                                       // <-- PHP code  |
//  |  This code is needed to load the messages only when they are actually needed. |
//  |  There is no need to change or delete any of that PHP code; translate only    |
//  |  the message.                                                                 |
//  |                                                                               |
//  |  Thanks in advance to all the translators!                                    |
//  |  David.                                                                       |
//  |                                                                               |
//   -------------------------------------------------------------------------------


// -------------------------------------------------------------------------
// Language settings
// -------------------------------------------------------------------------

// HTML lang attribute
$net2ftp_messages["en"] = "fr";

// HTML dir attribute: left-to-right (LTR) or right-to-left (RTL)
$net2ftp_messages["ltr"] = "ltr";

// CSS style: align left or right (use in combination with LTR or RTL)
$net2ftp_messages["left"] = "left";
$net2ftp_messages["right"] = "right";

// Encoding
$net2ftp_messages["iso-8859-1"] = "iso-8859-1";


// -------------------------------------------------------------------------
// Status messages
// -------------------------------------------------------------------------

// When translating these messages, keep in mind that the text should not be too long
// It should fit in the status textbox

$net2ftp_messages["Connecting to the FTP server"] = "Connexion au serveur FTP";
$net2ftp_messages["Logging into the FTP server"] = "Identification au serveur FTPr";
$net2ftp_messages["Setting the passive mode"] = "R�glage du mode passif";
$net2ftp_messages["Getting the FTP system type"] = "R�cup�ration du type de syst�me FTP";
$net2ftp_messages["Changing the directory"] = "Changement de r�pertoire";
$net2ftp_messages["Getting the current directory"] = "R�cup�ration du r�pertoire courant";
$net2ftp_messages["Getting the list of directories and files"] = "Obtention de la liste des r�pertoires et fichiers";
$net2ftp_messages["Parsing the list of directories and files"] = "Analyse de la liste des r�pertoires et fichiers";
$net2ftp_messages["Logging out of the FTP server"] = "D�connexion du serveur FTP";
$net2ftp_messages["Getting the list of directories and files"] = "Obtention de la liste des r�pertoires et fichiers";
$net2ftp_messages["Printing the list of directories and files"] = "Affichage de la liste des r�pertoires et fichiers";
$net2ftp_messages["Processing the entries"] = "Traitements des �l�ments";
$net2ftp_messages["Processing entry %1\$s"] = "Traitement de l'�l�ment %1\$s";
$net2ftp_messages["Checking files"] = "Contr�le des fichiers";
$net2ftp_messages["Transferring files to the FTP server"] = "Transfert des fichiers sur le serveur FTP";
$net2ftp_messages["Decompressing archives and transferring files"] = "D�compression des archives et transfert des fichiers";
$net2ftp_messages["Searching the files..."] = "Recherche des fichiers...";
$net2ftp_messages["Uploading new file"] = "Upload du nouveau fichier";
$net2ftp_messages["Reading the file"] = "Lecture du fichier";
$net2ftp_messages["Parsing the file"] = "Analyse du fichier";
$net2ftp_messages["Reading the new file"] = "Lecture du nouveau fichier";
$net2ftp_messages["Reading the old file"] = "Lecture de l'ancien fichier";
$net2ftp_messages["Comparing the 2 files"] = "Comparaison des 2 fichiers";
$net2ftp_messages["Printing the comparison"] = "Affichage de la comparaison";
$net2ftp_messages["Sending FTP command %1\$s of %2\$s"] = "Envoi de la commande FTP %1\$s sur %2\$s";
$net2ftp_messages["Getting archive %1\$s of %2\$s from the FTP server"] = "R�cup�ration de l'archive %1\$s sur %2\$s depuis le serveur FTP";
$net2ftp_messages["Creating a temporary directory on the FTP server"] = "Cr�ation d'un r�pertoire temporaire sur le serveur FTP";
$net2ftp_messages["Setting the permissions of the temporary directory"] = "Changement des permission sur le r�pertoire temporaire";
$net2ftp_messages["Copying the net2ftp installer script to the FTP server"] = "Copie du script d'installation sur le serveur FTP";
$net2ftp_messages["Script finished in %1\$s seconds"] = "Script ex�cut� en %1\$s secondes";
$net2ftp_messages["Script halted"] = "Script arr�t�";

// Used on various screens
$net2ftp_messages["Please wait..."] = "Merci de patienter...";


// -------------------------------------------------------------------------
// index.php
// -------------------------------------------------------------------------
$net2ftp_messages["Unexpected state string: %1\$s. Exiting."] = "�tat inattendu: %1\$s. Terminaison.";
$net2ftp_messages["This beta function is not activated on this server."] = "Cette fonction est en phase de test; elle n'est pas encore activ�e sur ce serveur.";
$net2ftp_messages["This function has been disabled by the Administrator of this website."] = "Cette fonction a �t� d�sactiv�e par l'Administrateur de ce site web.";


// -------------------------------------------------------------------------
// /includes/browse.inc.php
// -------------------------------------------------------------------------
$net2ftp_messages["The directory <b>%1\$s</b> does not exist or could not be selected, so the directory <b>%2\$s</b> is shown instead."] = "Le r�pertoire <b>%1\$s</b> n'existe pas ou ne peux pas �tre affich�. Le r�pertoire <b>%2\$s</b> est donc affich� � la place.";
$net2ftp_messages["Your root directory <b>%1\$s</b> does not exist or could not be selected."] = "Le r�pertoire racine <b>%1\$s</b> n'existe pas, ou ne peux pas �tre affich�.";
$net2ftp_messages["The directory <b>%1\$s</b> could not be selected - you may not have sufficient rights to view this directory, or it may not exist."] = "Le r�pertoire <b>%1\$s</b> ne peux �tre affich� - Il est possible que vous n'ayez pas de droits d'acc�s � ce r�pertoire, ou bien de r�pertoire n'existe pas.";
$net2ftp_messages["Entries which contain banned keywords can't be managed using net2ftp. This is to avoid Paypal or Ebay scams from being uploaded through net2ftp."] = "Une entr�e contient des mots clef bannis, ceci pour eviter les risque phishing";
$net2ftp_messages["Files which are too big can't be downloaded, uploaded, copied, moved, searched, zipped, unzipped, viewed or edited; they can only be renamed, chmodded or deleted."] = "Les fichiers trop gros ne pourrons �tre t�l�charg�s, upload�s, copi�s, d�plac�s, vus ou �dit�s; Ils ne pourrons qu'�tre renomm�s ou effac�s.";
$net2ftp_messages["Execute %1\$s in a new window"] = "Ex�cuter %1\$s dans une nouvelle fen�tre";


// -------------------------------------------------------------------------
// /includes/main.inc.php
// -------------------------------------------------------------------------
$net2ftp_messages["Please select at least one directory or file!"] = "Veuillez s�lectioner au moins un r�pertoire ou un fichier !";


// -------------------------------------------------------------------------
// /includes/authorizations.inc.php
// -------------------------------------------------------------------------

// checkAuthorization()
$net2ftp_messages["The FTP server <b>%1\$s</b> is not in the list of allowed FTP servers."] = "Le serveur FTP <b>%1\$s</b> ne fait pas partie des serveur FTP autoris�s.";
$net2ftp_messages["The FTP server <b>%1\$s</b> is in the list of banned FTP servers."] = "Le serveur FTP <b>%1\$s</b> fait partie des serveurs FTP bannis.";
$net2ftp_messages["The FTP server port %1\$s may not be used."] = "Le port %1\$s du seveur FTP ne peut pas �tre utilis�.";
$net2ftp_messages["Your IP address (%1\$s) is not in the list of allowed IP addresses."] = "Votre adresse IP (%1\$s) n'est pas dans la liste des IP autoris�es.";
$net2ftp_messages["Your IP address (%1\$s) is in the list of banned IP addresses."] = "Votre adresse IP (%1\$s) a �t� bannie de ce serveur FTP.";

// isAuthorizedDirectory()
$net2ftp_messages["Table net2ftp_users contains duplicate rows."] = "La table net2ftp_users contient des entr�es en double.";

// checkAdminUsernamePassword()
$net2ftp_messages["You did not enter your Administrator username or password."] = "Vous devez saisir un identifiant et un mot de passe Administrateur.";
$net2ftp_messages["Wrong username or password. Please try again."] = "Identifiant ou mot de passe invalide. Veuillez r�essayer.";

// -------------------------------------------------------------------------
// /includes/consumption.inc.php
// -------------------------------------------------------------------------
$net2ftp_messages["Unable to determine your IP address."] = "Impossible de d�terminer votre adresse IP.";
$net2ftp_messages["Table net2ftp_log_consumption_ipaddress contains duplicate rows."] = "La table net2ftp_log_consumption_ipaddress contient des doubles records.";
$net2ftp_messages["Table net2ftp_log_consumption_ftpserver contains duplicate rows."] = "La table net2ftp_log_consumption_ftpserver contient des doubles records.";
$net2ftp_messages["The variable <b>consumption_ipaddress_datatransfer</b> is not numeric."] = "La variable <b>consumption_ipaddress_datatransfer</b> n'est pas num�rique.";
$net2ftp_messages["Table net2ftp_log_consumption_ipaddress could not be updated."] = "La table net2ftp_log_consumption_ipaddress n'a pas pu �tre mise � jour.";
$net2ftp_messages["Table net2ftp_log_consumption_ipaddress contains duplicate entries."] = "La table net2ftp_log_consumption_ipaddress contient des �l�ments en doubles.";
$net2ftp_messages["Table net2ftp_log_consumption_ftpserver could not be updated."] = "La table net2ftp_log_consumption_ftpserver n'a pas pu �tre mise � jour.";
$net2ftp_messages["Table net2ftp_log_consumption_ftpserver contains duplicate entries."] = "La table net2ftp_log_consumption_ftpserver contient des �l�ments en doubles.";
$net2ftp_messages["Table net2ftp_log_access could not be updated."] = "La table net2ftp_log_access ne peut pas �tre mise � jour.";
$net2ftp_messages["Table net2ftp_log_access contains duplicate entries."] = "La table net2ftp_log_access contient des �l�ments en doubles.";


// -------------------------------------------------------------------------
// /includes/database.inc.php
// -------------------------------------------------------------------------
$net2ftp_messages["Unable to connect to the MySQL database. Please check your MySQL database settings in net2ftp's configuration file settings.inc.php."] = "Impossible de se connecter a la base MySQL. V�rifiez vos pr�f�rences de base MySQL dans le fichier de configuration de net2ftp settings.inc.php.";
$net2ftp_messages["Unable to select the MySQL database. Please check your MySQL database settings in net2ftp's configuration file settings.inc.php."] = "Impossible de selectionner la base MySQL. V�rifiez vos pr�f�rences de base MySQL dans le fichier de configuration de net2ftp settings.inc.php.";


// -------------------------------------------------------------------------
// /includes/errorhandling.inc.php
// -------------------------------------------------------------------------
$net2ftp_messages["An error has occured"] = "Une erreur s'est produite";
$net2ftp_messages["Go back"] = "Revenir en arri�re";
$net2ftp_messages["Go to the login page"] = "Aller � la page de connexion";


// -------------------------------------------------------------------------
// /includes/filesystem.inc.php
// -------------------------------------------------------------------------

// ftp_openconnection()
$net2ftp_messages["The <a href=\"http://www.php.net/manual/en/ref.ftp.php\" target=\"_blank\">FTP module of PHP</a> is not installed.<br /><br /> The administrator of this website should install this module. Installation instructions are given on <a href=\"http://www.php.net/manual/en/ftp.installation.php\" target=\"_blank\">php.net</a><br />"] = "The <a href=\"http://www.php.net/manual/en/ref.ftp.php\" target=\"_blank\">FTP module of PHP</a> is not installed.<br /><br /> The administrator of this website should install this module. Installation instructions are given on <a href=\"http://www.php.net/manual/en/ftp.installation.php\" target=\"_blank\">php.net</a><br />";
$net2ftp_messages["The <a href=\"http://www.php.net/manual/en/function.ftp-ssl-connect.php\" target=\"_blank\">FTP and/or OpenSSL modules of PHP</a> is not installed.<br /><br /> The administrator of this website should install these modules. Installation instructions are given on php.net: <a href=\"http://www.php.net/manual/en/ftp.installation.php\" target=\"_blank\">here for FTP</a>, and <a href=\"http://www.php.net/manual/en/openssl.installation.php\" target=\"_blank\">here for OpenSSL</a><br />"] = "The <a href=\"http://www.php.net/manual/en/function.ftp-ssl-connect.php\" target=\"_blank\">FTP and/or OpenSSL modules of PHP</a> is not installed.<br /><br /> The administrator of this website should install these modules. Installation instructions are given on php.net: <a href=\"http://www.php.net/manual/en/ftp.installation.php\" target=\"_blank\">here for FTP</a>, and <a href=\"http://www.php.net/manual/en/openssl.installation.php\" target=\"_blank\">here for OpenSSL</a><br />";
$net2ftp_messages["The <a href=\"http://www.php.net/manual/en/function.ssh2-sftp.php\" target=\"_blank\">SSH2 module of PHP</a> is not installed.<br /><br /> The administrator of this website should install this module. Installation instructions are given on <a href=\"http://www.php.net/manual/en/ssh2.installation.php\" target=\"_blank\">php.net</a><br />"] = "The <a href=\"http://www.php.net/manual/en/function.ssh2-sftp.php\" target=\"_blank\">SSH2 module of PHP</a> is not installed.<br /><br /> The administrator of this website should install this module. Installation instructions are given on <a href=\"http://www.php.net/manual/en/ssh2.installation.php\" target=\"_blank\">php.net</a><br />";
$net2ftp_messages["Unable to connect to FTP server <b>%1\$s</b> on port <b>%2\$s</b>.<br /><br />Are you sure this is the address of the FTP server? This is often different from that of the HTTP (web) server. Please contact your ISP helpdesk or system administrator for help.<br />"] = "Impossible de se connecter au serveur FTP <b>%1\$s</b> sur le port <b>%2\$s</b>.<br /><br />�tes-vous s�r que c'est la bonne adresse du serveur FTP ? Cette adresse est souvent diff�rente de celle du serveur HTTP (web). Veuillez contacter votre fournisseur internet ou l'administrateur du syst�me pour obtenir de l'aide.<br />";
$net2ftp_messages["Unable to login to FTP server <b>%1\$s</b> with username <b>%2\$s</b>.<br /><br />Are you sure your username and password are correct? Please contact your ISP helpdesk or system administrator for help.<br />"] = "Impossible de se connecter au serveur FTP <b>%1\$s</b> avec le nom d'utilisateur <b>%2\$s</b>.<br /><br />�tes-vous s�r que votre nom d'utilisateur et mot de passe sont corrects? Veuillez contacter votre fournisseur internet ou l'administrateur du syst�me pour obtenir de l'aide.<br />";
$net2ftp_messages["Unable to switch to the passive mode on FTP server <b>%1\$s</b>."] = "Impossible de se mettre en mode passif sur le serveur FTP <b>%1\$s</b>.";

// ftp_openconnection2()
$net2ftp_messages["Unable to connect to the second (target) FTP server <b>%1\$s</b> on port <b>%2\$s</b>.<br /><br />Are you sure this is the address of the second (target) FTP server? This is often different from that of the HTTP (web) server. Please contact your ISP helpdesk or system administrator for help.<br />"] = "Impossible de se connecter au deuxi�me serveur FTP <b>%1\$s</b> sur le port <b>%2\$s</b>.<br /><br />�tes-vous s�r que c'est la bonne adresse du serveur FTP ? Cette adresse est souvent diff�rente de celle du serveur HTTP (web). Veuillez contacter votre fournisseur internet ou l'administrateur du syst�me pour obtenir de l'aide.<br />";
$net2ftp_messages["Unable to login to the second (target) FTP server <b>%1\$s</b> with username <b>%2\$s</b>.<br /><br />Are you sure your username and password are correct? Please contact your ISP helpdesk or system administrator for help.<br />"] = "Impossible de se connecter au deuxi�me serveur FTP <b>%1\$s</b> sur le port <b>%2\$s</b>.<br /><br />�tes-vous s�r que c'est la bonne adresse du serveur FTP ? Cette adresse est souvent diff�rente de celle du serveur HTTP (web). Veuillez contacter votre fournisseur internet ou l'administrateur du syst�me pour obtenir de l'aide.<br />";
$net2ftp_messages["Unable to switch to the passive mode on the second (target) FTP server <b>%1\$s</b>."] = "Impossible de se mettre en mode passif sur le deuxi�me serveur FTP <b>%1\$s</b>.";

// ftp_myrename()
$net2ftp_messages["Unable to rename directory or file <b>%1\$s</b> into <b>%2\$s</b>"] = "Impossible de renommer le r�pertoire/fichier <b>%1\$s</b> en <b>%2\$s</b>";

// ftp_mychmod()
$net2ftp_messages["Unable to execute site command <b>%1\$s</b>. Note that the CHMOD command is only available on Unix FTP servers, not on Windows FTP servers."] = "Impossible d'ex�cuter la commande <b>%1\$s</b>. Remarque : les commandes CHMOD sont uniquement possibles sur les serveurs FTP Unix, non sur les serveurs FTP Windows.";
$net2ftp_messages["Directory <b>%1\$s</b> successfully chmodded to <b>%2\$s</b>"] = "Le CHMOD du r�pertoire <b>%1\$s</b> a �t� chang� avec succ�s pour <b>%2\$s</b>";
$net2ftp_messages["Processing entries within directory <b>%1\$s</b>:"] = "Analyse des �l�ments du r�pertoire <b>%1\$s</b>:";
$net2ftp_messages["File <b>%1\$s</b> was successfully chmodded to <b>%2\$s</b>"] = "Le CHMOD du fichier <b>%1\$s</b> a �t� chang� avec succ�s pour <b>%2\$s</b>";
$net2ftp_messages["All the selected directories and files have been processed."] = "Tous les r�pertoires et fichiers s�lectionn�s ont �t� trait�s avec succ�s.";

// ftp_rmdir2()
$net2ftp_messages["Unable to delete the directory <b>%1\$s</b>"] = "Impossible de supprimer le r�pertoire <b>%1\$s</b>";

// ftp_delete2()
$net2ftp_messages["Unable to delete the file <b>%1\$s</b>"] = "Impossible de supprimer le fichier <b>%1\$s</b>";

// ftp_newdirectory()
$net2ftp_messages["Unable to create the directory <b>%1\$s</b>"] = "Impossible de cr�er le r�pertoire <b>%1\$s</b>";

// ftp_readfile()
$net2ftp_messages["Unable to create the temporary file"] = "Impossible de cr�er le fichier temporaire";
$net2ftp_messages["Unable to get the file <b>%1\$s</b> from the FTP server and to save it as temporary file <b>%2\$s</b>.<br />Check the permissions of the %3\$s directory.<br />"] = "Impossible d'acc�der au fichier <b>%1\$s</b> sur le serveur FTP et de le sauvegarder comme le fichier temporaire <b>%2\$s</b>.<br />V�rifiez les permissions du r�pertoire %3\$s .<br />";
$net2ftp_messages["Unable to open the temporary file. Check the permissions of the %1\$s directory."] = "Impossible d'ouvrir le fichier temporaire. Verifiez les permissions du r�pertoire %1\$s .";
$net2ftp_messages["Unable to read the temporary file"] = "Impossible de lire le fichier temporaire";
$net2ftp_messages["Unable to close the handle of the temporary file"] = "Impossible de fermer le pointeur du fichier temporaire.";
$net2ftp_messages["Unable to delete the temporary file"] = "Impossible de supprimer le fichier temporaire";

// ftp_writefile()
$net2ftp_messages["Unable to create the temporary file. Check the permissions of the %1\$s directory."] = "Impossible de cr�er le fichier temporaire. V�rifiez les permissions du r�pertoire %1\$s .";
$net2ftp_messages["Unable to open the temporary file. Check the permissions of the %1\$s directory."] = "Impossible d'ouvrir le fichier temporaire. Verifiez les permissions du r�pertoire %1\$s .";
$net2ftp_messages["Unable to write the string to the temporary file <b>%1\$s</b>.<br />Check the permissions of the %2\$s directory."] = "Impossible d'�crire la cha�ne de caract�res dans le fichier temporaire <b>%1\$s</b>.<br />V�rifiez les permissions du r�pertoire %2\$s .";
$net2ftp_messages["Unable to close the handle of the temporary file"] = "Impossible de fermer le pointeur du fichier temporaire.";
$net2ftp_messages["Unable to put the file <b>%1\$s</b> on the FTP server.<br />You may not have write permissions on the directory."] = "Impossible de mettre le fichier <b>%1\$s</b> sur le serveur FTP.<br />Il est possible que vous ne puissiez pas d'�crire dans ce r�pertoire.";
$net2ftp_messages["Unable to delete the temporary file"] = "Impossible de supprimer le fichier temporaire";

// ftp_copymovedelete()
$net2ftp_messages["Processing directory <b>%1\$s</b>"] = "Traitement du r�petoire <b>%1\$s</b>";
$net2ftp_messages["The target directory <b>%1\$s</b> is the same as or a subdirectory of the source directory <b>%2\$s</b>, so this directory will be skipped"] = "Le r�pertoire de destination <b>%1\$s</b> est identique ou est un sous-r�pertoire du r�pertoire source <b>%2\$s</b>, et donc ce r�pertoire va �tre omis";
$net2ftp_messages["The directory <b>%1\$s</b> contains a banned keyword, so this directory will be skipped"] = "The directory <b>%1\$s</b> contains a banned keyword, so this directory will be skipped";
$net2ftp_messages["The directory <b>%1\$s</b> contains a banned keyword, aborting the move"] = "The directory <b>%1\$s</b> contains a banned keyword, aborting the move";
$net2ftp_messages["Unable to create the subdirectory <b>%1\$s</b>. It may already exist. Continuing the copy/move process..."] = "Impossible de cr�er le sous-r�pertoire <b>%1\$s</b>. Il existe peut-�tre d�j�. Le processus de copie/d�placement continue...";
$net2ftp_messages["Created target subdirectory <b>%1\$s</b>"] = "Sous-r�pertoire cible cr�� <b>%1\$s</b>";
$net2ftp_messages["The directory <b>%1\$s</b> could not be selected, so this directory will be skipped"] = "Le r�pertoire <b>%1\$s</b> ne peut pas �tre lu, il sera donc omis";
$net2ftp_messages["Unable to delete the subdirectory <b>%1\$s</b> - it may not be empty"] = "Impossible de supprimer le sous-r�pertoire <b>%1\$s</b> - il n'est peut-�tre pas vide";
$net2ftp_messages["Deleted subdirectory <b>%1\$s</b>"] = "Sous-r�pertoire <b>%1\$s</b> effac�";
$net2ftp_messages["Deleted subdirectory <b>%1\$s</b>"] = "Sous-r�pertoire <b>%1\$s</b> effac�";
$net2ftp_messages["Unable to move the directory <b>%1\$s</b>"] = "Unable to move the directory <b>%1\$s</b>";
$net2ftp_messages["Moved directory <b>%1\$s</b>"] = "Moved directory <b>%1\$s</b>";
$net2ftp_messages["Processing of directory <b>%1\$s</b> completed"] = "Traitement du r�pertoire <b>%1\$s</b> achev�";
$net2ftp_messages["The target for file <b>%1\$s</b> is the same as the source, so this file will be skipped"] = "La destination du fichier <b>%1\$s</b> est la m�me que la source, donc ce fichier sera omis";
$net2ftp_messages["The file <b>%1\$s</b> contains a banned keyword, so this file will be skipped"] = "Le fichier <b>%1\$s</b> contient un mot clef interdit, ce fichier sera omis";
$net2ftp_messages["The file <b>%1\$s</b> contains a banned keyword, aborting the move"] = "Le fichier <b>%1\$s</b> contient un mot clef interdit, d�placement avort�";
$net2ftp_messages["The file <b>%1\$s</b> is too big to be copied, so this file will be skipped"] = "Le fichier <b>%1\$s</b> est trop gros pour �tre copi�, il sera omis";
$net2ftp_messages["The file <b>%1\$s</b> is too big to be moved, aborting the move"] = "Le fichier <b>%1\$s</b> est trop gros pour �tre d�plac�, d�placement avort�";
$net2ftp_messages["Unable to copy the file <b>%1\$s</b>"] = "Impossible de copier le fichier <b>%1\$s</b>";
$net2ftp_messages["Copied file <b>%1\$s</b>"] = "Fichier <b>%1\$s</b> copi�";
$net2ftp_messages["Unable to move the file <b>%1\$s</b>, aborting the move"] = "Impossible de d�placer le fichier <b>%1\$s</b>, d�placement avort�";
$net2ftp_messages["Unable to move the file <b>%1\$s</b>"] = "Unable to move the file <b>%1\$s</b>";
$net2ftp_messages["Moved file <b>%1\$s</b>"] = "Fichier <b>%1\$s</b> d�plac�";
$net2ftp_messages["Unable to delete the file <b>%1\$s</b>"] = "Impossible de supprimer le fichier <b>%1\$s</b>";
$net2ftp_messages["Deleted file <b>%1\$s</b>"] = "Fichier <b>%1\$s</b> supprim�";
$net2ftp_messages["All the selected directories and files have been processed."] = "Tous les r�pertoires et fichiers s�lectionn�s ont �t� trait�s avec succ�s.";

// ftp_processfiles()

// ftp_getfile()
$net2ftp_messages["Unable to copy the remote file <b>%1\$s</b> to the local file using FTP mode <b>%2\$s</b>"] = "Impossible de copier le fichier distant <b>%1\$s</b> vers le fichier local en utilisant le mode FTP <b>%2\$s</b>";
$net2ftp_messages["Unable to delete file <b>%1\$s</b>"] = "Impossible de supprimer le fichier <b>%1\$s</b>";

// ftp_putfile()
$net2ftp_messages["The file is too big to be transferred"] = "Le fichier est trop gros pour �tre transfer�";
$net2ftp_messages["Daily limit reached: the file <b>%1\$s</b> will not be transferred"] = "Limite journali�re atteinte: le fichier <b>%1\$s</b> ne sera pas transf�r�";
$net2ftp_messages["Unable to copy the local file to the remote file <b>%1\$s</b> using FTP mode <b>%2\$s</b>"] = "Impossible de copier le fichier local vers le fichier distant <b>%1\$s</b> en utilisant le mode FTP<b>%2\$s</b>";
$net2ftp_messages["Unable to delete the local file"] = "Impossible de supprimer le fichier local";

// ftp_downloadfile()
$net2ftp_messages["Unable to delete the temporary file"] = "Impossible de supprimer le fichier temporaire";
$net2ftp_messages["Unable to send the file to the browser"] = "Impossible d'envoyer le fichier au navigateur";

// ftp_zip()
$net2ftp_messages["Unable to create the temporary file"] = "Impossible de cr�er le fichier temporaire";
$net2ftp_messages["The zip file has been saved on the FTP server as <b>%1\$s</b>"] = "Le fichier zip a �t� sauvegard� sur le serveur FTP en tant que <b>%1\$s</b>";
$net2ftp_messages["Requested files"] = "Fichiers demand�s";

$net2ftp_messages["Dear,"] = "Cher,";
$net2ftp_messages["Someone has requested the files in attachment to be sent to this email account (%1\$s)."] = "Quelqu'un a demand� que les fichiers joints soient envoy�s � cette adresse �lectronique (%1\$s).";
$net2ftp_messages["If you know nothing about this or if you don't trust that person, please delete this email without opening the Zip file in attachment."] = "Si vous n'avez aucune id�e de ce que c'est ou vous ne faites pas confiance � cette personne, veuillez supprimer ce courriel sans ouvrir le fichier zip attach�.";
$net2ftp_messages["Note that if you don't open the Zip file, the files inside cannot harm your computer."] = "Notez que si nous n'ouvrez pas le fichier zip, les fichiers � l'int�rieur de celui-ci ne peuvent pas endommager votre ordinateur.";
$net2ftp_messages["Information about the sender: "] = "Informations � propos de l'exp�diteur: ";
$net2ftp_messages["IP address: "] = "Adresse IP: ";
$net2ftp_messages["Time of sending: "] = "Heure de l'envoi: ";
$net2ftp_messages["Sent via the net2ftp application installed on this website: "] = "Envoy� via le programme net2ftp install� sur ce serveur: ";
$net2ftp_messages["Webmaster's email: "] = "Adresse email du Webmaster: ";
$net2ftp_messages["Message of the sender: "] = "Message de l'exp�diteur: ";
$net2ftp_messages["net2ftp is free software, released under the GNU/GPL license. For more information, go to http://www.net2ftp.com."] = "net2ftp est un logiciel libre, publi� sous la licence GNU/GPL. Pour plus d'informations, veuillez visiter http://www.net2ftp.com.";

$net2ftp_messages["The zip file has been sent to <b>%1\$s</b>."] = "Le fichier zip a bien �t� envoy� � <b>%1\$s</b>.";

// acceptFiles()
$net2ftp_messages["File <b>%1\$s</b> is too big. This file will not be uploaded."] = "Le fichier <b>%1\$s</b> est trop gros : il n'a donc pas �t� upload�";
$net2ftp_messages["File <b>%1\$s</b> is contains a banned keyword. This file will not be uploaded."] = "Le fichier <b>%1\$s</b> contient un mot clef interdit. Ce fichier ne sera pas upload�.";
$net2ftp_messages["Could not generate a temporary file."] = "Impossible de g�n�rer le fichier temporaire.";
$net2ftp_messages["File <b>%1\$s</b> could not be moved"] = "Le fichier <b>%1\$s</b> ne peut �tre d�plac�";
$net2ftp_messages["File <b>%1\$s</b> is OK"] = "Le fichier <b>%1\$s</b> est correct";
$net2ftp_messages["Unable to move the uploaded file to the temp directory.<br /><br />The administrator of this website has to <b>chmod 777</b> the /temp directory of net2ftp."] = "Impossible de d�placer le fichier upload� vers le r�pertoire /temp.<br /><br />L'administrateur de ce site doit mettre le <b>chmod</b> du r�pertoire /temp de net2ftp � <b>777</b>.";
$net2ftp_messages["You did not provide any file to upload."] = "Vous n'avez fourni aucun fichier � uploader.";

// ftp_transferfiles()
$net2ftp_messages["File <b>%1\$s</b> could not be transferred to the FTP server"] = "Le fichier <b>%1\$s</b> n'a pu �tre transf�r� vers le serveur FTP";
$net2ftp_messages["File <b>%1\$s</b> has been transferred to the FTP server using FTP mode <b>%2\$s</b>"] = "Le fichier <b>%1\$s</b> a �t� transf�r� vers le serveur FTP en utilisant le mode FTP <b>%2\$s</b>";
$net2ftp_messages["Transferring files to the FTP server"] = "Transfert des fichiers sur le serveur FTP";

// ftp_unziptransferfiles()
$net2ftp_messages["Processing archive nr %1\$s: <b>%2\$s</b>"] = "Traitement de l'archive num�ro %1\$s: <b>%2\$s</b>";
$net2ftp_messages["Archive <b>%1\$s</b> was not processed because its filename extension was not recognized. Only zip, tar, tgz and gz archives are supported at the moment."] = "L'archive <b>%1\$s</b> n'a pas �t� trait�e parce que son extension n'a pas �t� reconnue. Seulement les archives zip, tar, tgz et gz sont support�es pour le moment.";
$net2ftp_messages["Unable to extract the files and directories from the archive"] = "Impossible d'extraire les fichiers et r�pertoire de cette archive";
$net2ftp_messages["Archive contains filenames with ../ or ..\\ - aborting the extraction"] = "L'archive contient des noms de fichier avec ../ or ..\\ - extraction avort�";
$net2ftp_messages["Could not unzip entry %1\$s (error code %2\$s)"] = "Could not unzip entry %1\$s (error code %2\$s)";
$net2ftp_messages["Created directory %1\$s"] = "R�pertoire %1\$s cr��";
$net2ftp_messages["Could not create directory %1\$s"] = "Ne peut cr�er le r�pertoire %1\$s";
$net2ftp_messages["Copied file %1\$s"] = "Fichier %1\$s copi�";
$net2ftp_messages["Could not copy file %1\$s"] = "Ne peut copier le fichier %1\$s";
$net2ftp_messages["Unable to delete the temporary directory"] = "Impossible d'effacer le r�pertoire temporaire";
$net2ftp_messages["Unable to delete the temporary file %1\$s"] = "Impossible d'effacer le fichier temporaire %1\$s";

// ftp_mysite()
$net2ftp_messages["Unable to execute site command <b>%1\$s</b>"] = "Impossible d'ex�cuter la commande de site <b>%1\$s</b>";

// shutdown()
$net2ftp_messages["Your task was stopped"] = "Votre t�che a �t� interrompue";
$net2ftp_messages["The task you wanted to perform with net2ftp took more time than the allowed %1\$s seconds, and therefor that task was stopped."] = "La t�che que vous avez tent� d'ex�cuter avec net2ftp a pris plus de temps que les %1\$s secondes permises, ce pourquoi cette t�che a �t� interrompue.";
$net2ftp_messages["This time limit guarantees the fair use of the web server for everyone."] = "Cette limite de temps garantit un usage ad�quat du serveur pour tout le monde.";
$net2ftp_messages["Try to split your task in smaller tasks: restrict your selection of files, and omit the biggest files."] = "Essayez de s�parer votre t�che en t�ches plus petites: restreignez votre s�lection de fichiers et d�s�lectionnez les plus gros.";
$net2ftp_messages["If you really need net2ftp to be able to handle big tasks which take a long time, consider installing net2ftp on your own server."] = "Si vous avez vraiment besoin que netftp puisse g�rer des t�ches plus lourdes, veuillez consid�rez d'installer net2ftp sur votre propre serveur.";

// SendMail()
$net2ftp_messages["You did not provide any text to send by email!"] = "Vous n'avez sp�cifi� aucun texte � envoyer par courriel!";
$net2ftp_messages["You did not supply a From address."] = "Vous n'avez pas sp�cifi� une adresse d'exp�diteur.";
$net2ftp_messages["You did not supply a To address."] = "Vous n'avez pas sp�cifi� une adresse de destinataire.";
$net2ftp_messages["Due to technical problems the email to <b>%1\$s</b> could not be sent."] = "D� � des probl�mes techniques, le courriel destin� � <b>%1\$s</b> n'a pu �tre envoy�.";

// tempdir2()
$net2ftp_messages["Unable to create a temporary directory because (unvalid parent directory)"] = "Unable to create a temporary directory because (unvalid parent directory)";
$net2ftp_messages["Unable to create a temporary directory because (parent directory is not writeable)"] = "Unable to create a temporary directory because (parent directory is not writeable)";
$net2ftp_messages["Unable to create a temporary directory (too many tries)"] = "Unable to create a temporary directory (too many tries)";

// -------------------------------------------------------------------------
// /includes/logging.inc.php
// -------------------------------------------------------------------------
// logAccess(), logLogin(), logError()
$net2ftp_messages["Unable to execute the SQL query."] = "Impossible d'ex�cuter la requ�te SQL.";
$net2ftp_messages["Unable to open the system log."] = "Impossible d'ouvrir le journal syst�me.";
$net2ftp_messages["Unable to write a message to the system log."] = "Impossible d'�crire dans le journal syst�me.";

// getLogStatus(), putLogStatus()
$net2ftp_messages["Table net2ftp_log_status contains duplicate entries."] = "Table net2ftp_log_status contains duplicate entries.";
$net2ftp_messages["Table net2ftp_log_status could not be updated."] = "Table net2ftp_log_status could not be updated.";

// rotateLogs()
$net2ftp_messages["The log tables were renamed successfully."] = "The log tables were renamed successfully.";
$net2ftp_messages["The log tables could not be renamed."] = "The log tables could not be renamed.";
$net2ftp_messages["The log tables were copied successfully."] = "The log tables were copied successfully.";
$net2ftp_messages["The log tables could not be copied."] = "The log tables could not be copied.";
$net2ftp_messages["The oldest log table was dropped successfully."] = "The oldest log table was dropped successfully.";
$net2ftp_messages["The oldest log table could not be dropped."] = "The oldest log table could not be dropped.";


// -------------------------------------------------------------------------
// /includes/registerglobals.inc.php
// -------------------------------------------------------------------------
$net2ftp_messages["Please enter your username and password for FTP server "] = "Veuillez saisir votre nom d'utilisateur et votre mot de passe du serveur FTP ";
$net2ftp_messages["You did not fill in your login information in the popup window.<br />Click on \"Go to the login page\" below."] = "Vous n'avez pas entr� correctement vos information de connexion dans la fen�tre pop-up.<br />Cliquez sur \"Aller � la page de connexion\" ci-dessous.";
$net2ftp_messages["Access to the net2ftp Admin panel is disabled, because no password has been set in the file settings.inc.php. Enter a password in that file, and reload this page."] = "L'acc�s au panneau d'administration a �t� d�sactiv� parce qu'aucun mot de passe n'a �t� pr�cis� dans le fichier settings.inc.php. Pr�cisez un mot de passe dans ce fichier, et rechargez cette page.";
$net2ftp_messages["Please enter your Admin username and password"] = "Veuillez saisir votre nom d'utilisateur et votre mot de passe administrateur";
$net2ftp_messages["You did not fill in your login information in the popup window.<br />Click on \"Go to the login page\" below."] = "Vous n'avez pas entr� correctement vos information de connexion dans la fen�tre pop-up.<br />Cliquez sur \"Aller � la page de connexion\" ci-dessous.";
$net2ftp_messages["Wrong username or password for the net2ftp Admin panel. The username and password can be set in the file settings.inc.php."] = "Mauvais nom d'utilisateur ou mot de passe pour le panneau d'administration de net2ftp. Le nom d'utilisateur et le mot de passe peuvent �tre configur�s dans le fichier settings.inc.php.";


// -------------------------------------------------------------------------
// /skins/skins.inc.php
// -------------------------------------------------------------------------
$net2ftp_messages["Blue"] = "Bleu";
$net2ftp_messages["Grey"] = "Gris";
$net2ftp_messages["Black"] = "Noir";
$net2ftp_messages["Yellow"] = "Jaune";
$net2ftp_messages["Pastel"] = "Pastel";

// getMime()
$net2ftp_messages["Directory"] = "R�pertoire";
$net2ftp_messages["Symlink"] = "Lien symbolique";
$net2ftp_messages["ASP script"] = "Script ASP";
$net2ftp_messages["Cascading Style Sheet"] = "Feuille de style CSS";
$net2ftp_messages["HTML file"] = "Fichier HTML";
$net2ftp_messages["Java source file"] = "Fichier source Java";
$net2ftp_messages["JavaScript file"] = "Fichier JavaScript";
$net2ftp_messages["PHP Source"] = "Source PHP";
$net2ftp_messages["PHP script"] = "Script PHP";
$net2ftp_messages["Text file"] = "Fichier Texte";
$net2ftp_messages["Bitmap file"] = "Image bitmap";
$net2ftp_messages["GIF file"] = "Image GIF";
$net2ftp_messages["JPEG file"] = "Image JPEG";
$net2ftp_messages["PNG file"] = "Image PNG";
$net2ftp_messages["TIF file"] = "Image TIFF";
$net2ftp_messages["GIMP file"] = "Fichier GIMP";
$net2ftp_messages["Executable"] = "Ex�cutable";
$net2ftp_messages["Shell script"] = "Script shell";
$net2ftp_messages["MS Office - Word document"] = "MS Office - Document Word";
$net2ftp_messages["MS Office - Excel spreadsheet"] = "MS Office - Tableur Excel";
$net2ftp_messages["MS Office - PowerPoint presentation"] = "MS Office - Pr�sentation PowerPoint ";
$net2ftp_messages["MS Office - Access database"] = "MS Office - Base de donn�es Access";
$net2ftp_messages["MS Office - Visio drawing"] = "MS Office - Document Visio";
$net2ftp_messages["MS Office - Project file"] = "MS Office - Fichier de projet";
$net2ftp_messages["OpenOffice - Writer 6.0 document"] = "OpenOffice - Document Writer 6.0";
$net2ftp_messages["OpenOffice - Writer 6.0 template"] = "OpenOffice - Fichier de description Writer 6.0";
$net2ftp_messages["OpenOffice - Calc 6.0 spreadsheet"] = "OpenOffice - Tableur Calc 6.0";
$net2ftp_messages["OpenOffice - Calc 6.0 template"] = "OpenOffice - Fichier de description Calc 6.0";
$net2ftp_messages["OpenOffice - Draw 6.0 document"] = "OpenOffice - Document Draw 6.0";
$net2ftp_messages["OpenOffice - Draw 6.0 template"] = "OpenOffice - Fichier de description Draw 6.0";
$net2ftp_messages["OpenOffice - Impress 6.0 presentation"] = "OpenOffice - Pr�sentation Impress 6.0";
$net2ftp_messages["OpenOffice - Impress 6.0 template"] = "OpenOffice - Fichier de description Impress 6.0";
$net2ftp_messages["OpenOffice - Writer 6.0 global document"] = "OpenOffice - Document global Writer 6.0";
$net2ftp_messages["OpenOffice - Math 6.0 document"] = "OpenOffice - Document Math 6.0";
$net2ftp_messages["StarOffice - StarWriter 5.x document"] = "StarOffice - Document StarWriter 5.x";
$net2ftp_messages["StarOffice - StarWriter 5.x global document"] = "StarOffice - Document global StarWriter 5.x";
$net2ftp_messages["StarOffice - StarCalc 5.x spreadsheet"] = "StarOffice - Tableur StarCalc 5.x";
$net2ftp_messages["StarOffice - StarDraw 5.x document"] = "StarOffice - Document StarDraw 5.x";
$net2ftp_messages["StarOffice - StarImpress 5.x presentation"] = "StarOffice - Pr�sentation StarImpress 5.x";
$net2ftp_messages["StarOffice - StarImpress Packed 5.x file"] = "StarOffice - Fichier StarImpress 5.x paquet�";
$net2ftp_messages["StarOffice - StarMath 5.x document"] = "StarOffice - Document StarMath 5.x";
$net2ftp_messages["StarOffice - StarChart 5.x document"] = "StarOffice - Document StarChart 5.x";
$net2ftp_messages["StarOffice - StarMail 5.x mail file"] = "StarOffice - Fichier mail StarMail 5.x";
$net2ftp_messages["Adobe Acrobat document"] = "Document Adobe Acrobat";
$net2ftp_messages["ARC archive"] = "Archive ARC";
$net2ftp_messages["ARJ archive"] = "Archive ARJ";
$net2ftp_messages["RPM"] = "RPM";
$net2ftp_messages["GZ archive"] = "Archive GZ";
$net2ftp_messages["TAR archive"] = "Archive TAR";
$net2ftp_messages["Zip archive"] = "Archive ZIP";
$net2ftp_messages["MOV movie file"] = "Fichier film MOV";
$net2ftp_messages["MPEG movie file"] = "Fichier film MPEG";
$net2ftp_messages["Real movie file"] = "Fichier film Real";
$net2ftp_messages["Quicktime movie file"] = "Fichier film Quicktime";
$net2ftp_messages["Shockwave flash file"] = "Fichier shockwave flash";
$net2ftp_messages["Shockwave file"] = "Fichier shockwave";
$net2ftp_messages["WAV sound file"] = "Fichier son WAV";
$net2ftp_messages["Font file"] = "Fichier de police";
$net2ftp_messages["%1\$s File"] = "Fichier %1\$s";
$net2ftp_messages["File"] = "Fichier";

// getAction()
$net2ftp_messages["Back"] = "Retour";
$net2ftp_messages["Submit"] = "Soumettre";
$net2ftp_messages["Refresh"] = "Actualiser";
$net2ftp_messages["Details"] = "D�tails";
$net2ftp_messages["Icons"] = "Ic�nes";
$net2ftp_messages["List"] = "Liste";
$net2ftp_messages["Logout"] = "D�connexion";
$net2ftp_messages["Help"] = "Aide";
$net2ftp_messages["Bookmark"] = "Favoris";
$net2ftp_messages["Save"] = "Sauvegarder";
$net2ftp_messages["Default"] = "D�faut";


// -------------------------------------------------------------------------
// /skins/[skin]/header.template.php and footer.template.php
// -------------------------------------------------------------------------
$net2ftp_messages["Help Guide"] = "Aide";
$net2ftp_messages["Forums"] = "Forums";
$net2ftp_messages["License"] = "Licence";
$net2ftp_messages["Powered by"] = "Soutenu par";
$net2ftp_messages["You are now taken to the net2ftp forums. These forums are for net2ftp related topics only - not for generic webhosting questions."] = "Vous allez �tre redirig� sur le forum de net2ftp. Ce forum est d�di� aux sujets concernant net2ftp, et pas pour des probl�mes d\\'h�bergement web.";
$net2ftp_messages["Standard"] = "Standard";
$net2ftp_messages["Mobile"] = "Mobile";

// -------------------------------------------------------------------------
// Admin module
if ($net2ftp_globals["state"] == "admin") {
// -------------------------------------------------------------------------

// /modules/admin/admin.inc.php
$net2ftp_messages["Admin functions"] = "Fonctions administratives";

// /skins/[skin]/admin1.template.php
$net2ftp_messages["Version information"] = "Informations sur la version";
$net2ftp_messages["This version of net2ftp is up-to-date."] = "Cette version de net2ftp est � jour.";
$net2ftp_messages["The latest version information could not be retrieved from the net2ftp.com server. Check the security settings of your browser, which may prevent the loading of a small file from the net2ftp.com server."] = "Les informations de mise-�-jour n'ont pas pu �tre r�cup�r�es. Veuillez v�rifier les param�tres de s�curit� de votre navigateur, qui pourrait emp�cher le t�l�chargement d'un petit fichier depuis le serveur net2ftp.com.";
$net2ftp_messages["Logging"] = "Archivage";
$net2ftp_messages["Date from:"] = "A partir de la date : ";
$net2ftp_messages["to:"] = "jusqu'� : ";
$net2ftp_messages["Empty logs"] = "Archives vides";
$net2ftp_messages["View logs"] = "Visualiser les archives";
$net2ftp_messages["Go"] = "Go";
$net2ftp_messages["Setup MySQL tables"] = "Configurer les tables MySQL";
$net2ftp_messages["Create the MySQL database tables"] = "Cr�er les tables de la base de donn�es MySQL";

} // end admin

// -------------------------------------------------------------------------
// Admin_createtables module
if ($net2ftp_globals["state"] == "admin_createtables") {
// -------------------------------------------------------------------------

// /modules/admin_createtables/admin_createtables.inc.php
$net2ftp_messages["Admin functions"] = "Fonctions administratives";
$net2ftp_messages["The handle of file %1\$s could not be opened."] = "Le pointeur sur le fichier %1\$s n'a pas pu �tre ouvert.";
$net2ftp_messages["The file %1\$s could not be opened."] = "Le fichier %1\$s n'a pas pu �tre ouvert.";
$net2ftp_messages["The handle of file %1\$s could not be closed."] = "Le pointeur sur le fichier %1\$s n'a pas pu �tre ferm�.";
$net2ftp_messages["The connection to the server <b>%1\$s</b> could not be set up. Please check the database settings you've entered."] = "La connexion au serveur <b>%1\$s</b> a �chou�e. Veuillez v�rifier les param�tres d'acc�s � la base de donn�es.";
$net2ftp_messages["Unable to select the database <b>%1\$s</b>."] = "Impossible de s�lectionner la base <b>%1\$s</b>.";
$net2ftp_messages["The SQL query nr <b>%1\$s</b> could not be executed."] = "La requ�te SQL n� <b>%1\$s</b> n'a pas pu �tre ex�cut�e.";
$net2ftp_messages["The SQL query nr <b>%1\$s</b> was executed successfully."] = "La requ�te SQL n� <b>%1\$s</b> a �t� ex�cut�e avec succ�s.";

// /skins/[skin]/admin_createtables1.template.php
$net2ftp_messages["Please enter your MySQL settings:"] = "Veuillez saisir vos param�tres MySQL : ";
$net2ftp_messages["MySQL username"] = "Utilisateur MySQL";
$net2ftp_messages["MySQL password"] = "Mot de passe MySQL";
$net2ftp_messages["MySQL database"] = "Nom de la base de donn�es MySQL";
$net2ftp_messages["MySQL server"] = "Serveur MySQL";
$net2ftp_messages["This SQL query is going to be executed:"] = "Cette requ�te SQL va �tre ex�cut�e : ";
$net2ftp_messages["Execute"] = "Ex�cuter";

// /skins/[skin]/admin_createtables2.template.php
$net2ftp_messages["Settings used:"] = "Param�tres utilis�s : ";
$net2ftp_messages["MySQL password length"] = "Longueur du mot de passe MySQL";
$net2ftp_messages["Results:"] = "R�sultats : ";

} // end admin_createtables


// -------------------------------------------------------------------------
// Admin_viewlogs module
if ($net2ftp_globals["state"] == "admin_viewlogs") {
// -------------------------------------------------------------------------

// /modules/admin_createtables/admin_viewlogs.inc.php
$net2ftp_messages["Admin functions"] = "Fonctions administratives";
$net2ftp_messages["Unable to execute the SQL query <b>%1\$s</b>."] = "Impossible d'ex�cuter la requ�te SQL <b>%1\$s</b>.";
$net2ftp_messages["No data"] = "Aucune donn�es";

} // end admin_viewlogs


// -------------------------------------------------------------------------
// Admin_emptylogs module
if ($net2ftp_globals["state"] == "admin_emptylogs") {
// -------------------------------------------------------------------------

// /modules/admin_createtables/admin_emptylogs.inc.php
$net2ftp_messages["Admin functions"] = "Fonctions administratives";
$net2ftp_messages["The table <b>%1\$s</b> was emptied successfully."] = "La table <b>%1\$s</b> a �t� vid�e avec succ�s.";
$net2ftp_messages["The table <b>%1\$s</b> could not be emptied."] = "La table <b>%1\$s</b> n'a pu �tre vid�e.";
$net2ftp_messages["The table <b>%1\$s</b> was optimized successfully."] = "La table <b>%1\$s</b> a �t� optimis�e.";
$net2ftp_messages["The table <b>%1\$s</b> could not be optimized."] = "La table <b>%1\$s</b> n'a pas pu �tre optimis�e.";

} // end admin_emptylogs


// -------------------------------------------------------------------------
// Advanced module
if ($net2ftp_globals["state"] == "advanced") {
// -------------------------------------------------------------------------

// /modules/advanced/advanced.inc.php
$net2ftp_messages["Advanced functions"] = "Options avanc�es";

// /skins/[skin]/advanced1.template.php
$net2ftp_messages["Go"] = "Go";
$net2ftp_messages["Disabled"] = "D�sactiv�";
$net2ftp_messages["Advanced FTP functions"] = "Fonctions FTP avanc�es";
$net2ftp_messages["Send arbitrary FTP commands to the FTP server"] = "Envoyer des commandes FTP arbitraires au serveur FTP";
$net2ftp_messages["This function is available on PHP 5 only"] = "Cette fonctionnalit� n'est disponible qu'avec PHP5";
$net2ftp_messages["Troubleshooting functions"] = "Fonctions de d�pannage";
$net2ftp_messages["Troubleshoot net2ftp on this webserver"] = "D�panner net2ftp sur ce serveur";
$net2ftp_messages["Troubleshoot an FTP server"] = "D�panner un serveur FTP";
$net2ftp_messages["Test the net2ftp list parsing rules"] = "Tester les r�gles d'analyse de listes de net2ftp";
$net2ftp_messages["Translation functions"] = "Fonctions de traduction";
$net2ftp_messages["Introduction to the translation functions"] = "Introduction aux fonctions de traduction";
$net2ftp_messages["Extract messages to translate from code files"] = "Extraire les messages pour traduire � partir des fichiers de code";
$net2ftp_messages["Check if there are new or obsolete messages"] = "V�rifier s'il y a de nouveaux ou d�suets messages";

$net2ftp_messages["Beta functions"] = "Fonctions Beta";
$net2ftp_messages["Send a site command to the FTP server"] = "Envoyer une commande site au serveur FTP";
$net2ftp_messages["Apache: password-protect a directory, create custom error pages"] = "Apache : prot�ger un r�pertoire par mot de passe, cr�er des pages d'erreur personnalis�es";
$net2ftp_messages["MySQL: execute an SQL query"] = "MySQL : ex�cuter une requ�te SQL";


// advanced()
$net2ftp_messages["The site command functions are not available on this webserver."] = "Les fonctions de commande ne sont pas disponibles sur ce serveur.";
$net2ftp_messages["The Apache functions are not available on this webserver."] = "Les fonctions d'Apache ne sont pas disponibles sur ce serveur.";
$net2ftp_messages["The MySQL functions are not available on this webserver."] = "Les fonctions de MySQL ne sont pas disponibles sur ce serveur.";
$net2ftp_messages["Unexpected state2 string. Exiting."] = "Chaine de caracteres inattendue. Quitter.";

} // end advanced


// -------------------------------------------------------------------------
// Advanced_ftpserver module
if ($net2ftp_globals["state"] == "advanced_ftpserver") {
// -------------------------------------------------------------------------

// /modules/advanced_ftpserver/advanced_ftpserver.inc.php
$net2ftp_messages["Troubleshoot an FTP server"] = "D�panner un serveur FTP";

// /skins/[skin]/advanced_ftpserver1.template.php
$net2ftp_messages["Connection settings:"] = "Param�tres de connexion :";
$net2ftp_messages["FTP server"] = "Serveur FTP";
$net2ftp_messages["FTP server port"] = "Port du serveur FTP";
$net2ftp_messages["Username"] = "Nom d'utilisateur";
$net2ftp_messages["Password"] = "Mot de passe";
$net2ftp_messages["Password length"] = "Longueur du mot de passe";
$net2ftp_messages["Passive mode"] = "Mode passif";
$net2ftp_messages["Directory"] = "R�pertoire";
$net2ftp_messages["Printing the result"] = "Impression du r�sultat";

// /skins/[skin]/advanced_ftpserver2.template.php
$net2ftp_messages["Connecting to the FTP server: "] = "Connexion au serveur FTP : ";
$net2ftp_messages["Logging into the FTP server: "] = "Identification sur le serveur FTP : ";
$net2ftp_messages["Setting the passive mode: "] = "R�glage du mode passif : ";
$net2ftp_messages["Getting the FTP server system type: "] = "Obtention du type de syst�me du serveur FTP: ";
$net2ftp_messages["Changing to the directory %1\$s: "] = "Changement pour le r�pertoire %1\$s: ";
$net2ftp_messages["The directory from the FTP server is: %1\$s "] = "Le r�pertoire du serveur FTP est: %1\$s ";
$net2ftp_messages["Getting the raw list of directories and files: "] = "Obtention de la liste des r�pertoires et fichiers: ";
$net2ftp_messages["Trying a second time to get the raw list of directories and files: "] = "Seconde tentative d'obtention de la liste des r�pertoires et fichiers: ";
$net2ftp_messages["Closing the connection: "] = "Fermeture de la connexion : ";
$net2ftp_messages["Raw list of directories and files:"] = "Liste des r�pertoires et fichiers : ";
$net2ftp_messages["Parsed list of directories and files:"] = "Liste des r�pertoires et fichiers analys�s : ";

$net2ftp_messages["OK"] = "OK";
$net2ftp_messages["not OK"] = "pas OK";

} // end advanced_ftpserver


// -------------------------------------------------------------------------
// Advanced_parsing module
if ($net2ftp_globals["state"] == "advanced_parsing") {
// -------------------------------------------------------------------------

$net2ftp_messages["Test the net2ftp list parsing rules"] = "Tester les r�gles d'analyse de listes de net2ftp";
$net2ftp_messages["Sample input"] = "Entr�e de test";
$net2ftp_messages["Parsed output"] = "Sortie analys�e";

} // end advanced_parsing


// -------------------------------------------------------------------------
// Advanced_webserver module
if ($net2ftp_globals["state"] == "advanced_webserver") {
// -------------------------------------------------------------------------

$net2ftp_messages["Troubleshoot your net2ftp installation"] = "D�panner votre installation net2ftp";
$net2ftp_messages["Printing the result"] = "Impression du r�sultat";

$net2ftp_messages["Checking if the FTP module of PHP is installed: "] = "V�rifier si le module PHP est pr�sent sur ce FTP: ";
$net2ftp_messages["yes"] = "oui";
$net2ftp_messages["no - please install it!"] = "non - installez-le svp!";

$net2ftp_messages["Checking the permissions of the directory on the web server: a small file will be written to the /temp folder and then deleted."] = "Contr�le des permissions du r�pertoire sur le serveur : un petit fichiers va �tre cr�� dans le r�pertoire /temp puis effac�.";
$net2ftp_messages["Creating filename: "] = "Nom du fichier: ";
$net2ftp_messages["OK. Filename: %1\$s"] = "Ok. Nom du fichier: %1\$s";
$net2ftp_messages["not OK"] = "pas OK";
$net2ftp_messages["OK"] = "OK";
$net2ftp_messages["not OK. Check the permissions of the %1\$s directory"] = "Incorrect. V�rifiez les permissions du r�pertoire %1\$s ";
$net2ftp_messages["Opening the file in write mode: "] = "Ouvrir le fichier en mode �criture : ";
$net2ftp_messages["Writing some text to the file: "] = "�crire du texte dans le fichier : ";
$net2ftp_messages["Closing the file: "] = "Fermeture du fichier : ";
$net2ftp_messages["Deleting the file: "] = "Suppression du fichier : ";

$net2ftp_messages["Testing the FTP functions"] = "Test des fonctions FTP";
$net2ftp_messages["Connecting to a test FTP server: "] = "Connexion � un serveur FTP de test : ";
$net2ftp_messages["Connecting to the FTP server: "] = "Connexion au serveur FTP : ";
$net2ftp_messages["Logging into the FTP server: "] = "Identification sur le serveur FTP : ";
$net2ftp_messages["Setting the passive mode: "] = "R�glage du mode passif : ";
$net2ftp_messages["Getting the FTP server system type: "] = "Obtention du type de syst�me du serveur FTP: ";
$net2ftp_messages["Changing to the directory %1\$s: "] = "Changement pour le r�pertoire %1\$s: ";
$net2ftp_messages["The directory from the FTP server is: %1\$s "] = "Le r�pertoire du serveur FTP est: %1\$s ";
$net2ftp_messages["Getting the raw list of directories and files: "] = "Obtention de la liste des r�pertoires et fichiers: ";
$net2ftp_messages["Trying a second time to get the raw list of directories and files: "] = "Seconde tentative d'obtention de la liste des r�pertoires et fichiers: ";
$net2ftp_messages["Closing the connection: "] = "Fermeture de la connexion : ";
$net2ftp_messages["Raw list of directories and files:"] = "Liste des r�pertoires et fichiers : ";
$net2ftp_messages["Parsed list of directories and files:"] = "Liste des r�pertoires et fichiers analys�s : ";
$net2ftp_messages["OK"] = "OK";
$net2ftp_messages["not OK"] = "pas OK";

} // end advanced_webserver


// -------------------------------------------------------------------------
// Bookmark module
if ($net2ftp_globals["state"] == "bookmark") {
// -------------------------------------------------------------------------

$net2ftp_messages["Drag and drop one of the links below to the bookmarks bar"] = "Drag and drop one of the links below to the bookmarks bar";
$net2ftp_messages["Right-click on one of the links below and choose \"Add to Favorites...\""] = "Right-click on one of the links below and choose \"Add to Favorites...\"";
$net2ftp_messages["Right-click on one the links below and choose \"Add Link to Bookmarks...\""] = "Right-click on one the links below and choose \"Add Link to Bookmarks...\"";
$net2ftp_messages["Right-click on one of the links below and choose \"Bookmark link...\""] = "Right-click on one of the links below and choose \"Bookmark link...\"";
$net2ftp_messages["Right-click on one of the links below and choose \"Bookmark This Link...\""] = "Right-click on one of the links below and choose \"Bookmark This Link...\"";
$net2ftp_messages["One click access (net2ftp won't ask for a password - less safe)"] = "One click access (net2ftp won't ask for a password - less safe)";
$net2ftp_messages["Two click access (net2ftp will ask for a password - safer)"] = "Two click access (net2ftp will ask for a password - safer)";
$net2ftp_messages["Note: when you will use this bookmark, a popup window will ask you for your username and password."] = "Remarque : quand vous cliquerez ce lien, une fen�tre pop-up vous demandera votre nom d'utilisateur et votre mot de passe.";

} // end bookmark


// -------------------------------------------------------------------------
// Browse module
if ($net2ftp_globals["state"] == "browse") {
// -------------------------------------------------------------------------

// /modules/browse/browse.inc.php
$net2ftp_messages["Choose a directory"] = "Choisir un r�pertoire";
$net2ftp_messages["Please wait..."] = "Merci de patienter...";

// browse()
$net2ftp_messages["Directories with names containing \' cannot be displayed correctly. They can only be deleted. Please go back and select another subdirectory."] = "Les r�pertoires dont le nom contient \' ne peuvent pas �tre affich�s correctement. Ils ne peuvent qu'�tre effac�s , revenez en arriere et choisissez un autre sous-r�pertoire.";

$net2ftp_messages["Daily limit reached: you will not be able to transfer data"] = "Limite journali�re atteinte : vous ne pourrez plus transf�rer des donn�es";
$net2ftp_messages["In order to guarantee the fair use of the web server for everyone, the data transfer volume and script execution time are limited per user, and per day. Once this limit is reached, you can still browse the FTP server but not transfer data to/from it."] = "Afin de garantir un usage �quitable du serveur web pour tout le monde, le volume de transfert de donn�es ainsi que le temps d'ex�cution du script sont limit�s par utilisateur, et par jour. Une fois cette limite atteinte, vous pouvez toujours naviguer le serveur FTP mais plus transf�rer de donn�es.";
$net2ftp_messages["If you need unlimited usage, please install net2ftp on your own web server."] = "Si vous avez besoin d'un acc�s illimit�, veuillez installer net2ftp sur votre propre serveur web.";

// printdirfilelist()
// Keep this short, it must fit in a small button!
$net2ftp_messages["New dir"] = "Nouveau r�pertoire";
$net2ftp_messages["New file"] = "Nouveau fichier";
$net2ftp_messages["HTML templates"] = "Mod�les HTML";
$net2ftp_messages["Upload"] = "Upload";
$net2ftp_messages["Java Upload"] = "Upload Java";
$net2ftp_messages["Flash Upload"] = "Flash Upload";
$net2ftp_messages["Install"] = "Install";
$net2ftp_messages["Advanced"] = "Avanc�";
$net2ftp_messages["Copy"] = "Copier";
$net2ftp_messages["Move"] = "D�placer";
$net2ftp_messages["Delete"] = "Effacer";
$net2ftp_messages["Rename"] = "Renommer";
$net2ftp_messages["Chmod"] = "Chmod";
$net2ftp_messages["Download"] = "T�l�charger";
$net2ftp_messages["Unzip"] = "Unzip";
$net2ftp_messages["Zip"] = "Zip";
$net2ftp_messages["Size"] = "Taille";
$net2ftp_messages["Search"] = "Rechercher";
$net2ftp_messages["Go to the parent directory"] = "Aller dans le r�pertoire superieur";
$net2ftp_messages["Go"] = "Go";
$net2ftp_messages["Transform selected entries: "] = "Transformer les entr�es selectionn�es: ";
$net2ftp_messages["Transform selected entry: "] = "Transformer l'entr�e selectionn�e: ";
$net2ftp_messages["Make a new subdirectory in directory %1\$s"] = "Cr�er un nouveau sous-r�pertoire dans le r�pertoire %1\$s";
$net2ftp_messages["Create a new file in directory %1\$s"] = "Cr�er un nouveau fichier dans le r�pertoire %1\$s";
$net2ftp_messages["Create a website easily using ready-made templates"] = "Cr�er facilement un site web en utilisant un mod�le pr�t-�-l'emploi";
$net2ftp_messages["Upload new files in directory %1\$s"] = "Upload d'un nouveau fichier dans le r�pertoire %1\$s";
$net2ftp_messages["Upload directories and files using a Java applet"] = "Upload de r�pertoires et de fichiers � travers une applet Java";
$net2ftp_messages["Upload files using a Flash applet"] = "Uploader des fichiers avec une applet Flash";
$net2ftp_messages["Install software packages (requires PHP on web server)"] = "Intalle des applications web (requiert PHP sur le serveur Web)";
$net2ftp_messages["Go to the advanced functions"] = "Aller dans les fonctions avanc�es";
$net2ftp_messages["Copy the selected entries"] = "Copier les �l�ments selectionn�s";
$net2ftp_messages["Move the selected entries"] = "D�placer les �l�ments selectionn�s";
$net2ftp_messages["Delete the selected entries"] = "Effacer les �l�ments selectionn�s";
$net2ftp_messages["Rename the selected entries"] = "Renommer les �l�ments selectionn�s";
$net2ftp_messages["Chmod the selected entries (only works on Unix/Linux/BSD servers)"] = "R�gler le CHMOD des �l�ments selectionn�s (fonctionne uniquement sur les serveurs Unix/Linux/BSD)";
$net2ftp_messages["Download a zip file containing all selected entries"] = "T�l�charger un fichier .ZIP contenant tous les �l�ments s�lectionn�s";
$net2ftp_messages["Unzip the selected archives on the FTP server"] = "D�zipper les archives s�lectionn�es sur le serveur FTP";
$net2ftp_messages["Zip the selected entries to save or email them"] = "Cr�er un fichier .ZIP pour sauvegarder les �l�ments selectionn�s ou les envoyer par courriel";
$net2ftp_messages["Calculate the size of the selected entries"] = "Calculer la taille des �l�ments selectionn�s";
$net2ftp_messages["Find files which contain a particular word"] = "Trouver les fichiers qui contiennent un mot en particulier";
$net2ftp_messages["Click to sort by %1\$s in descending order"] = "Cliquer pour classer par %1\$s en ordre d�croissant";
$net2ftp_messages["Click to sort by %1\$s in ascending order"] = "Cliquer pour classer par %1\$s en ordre croissant";
$net2ftp_messages["Ascending order"] = "Ordre croissant";
$net2ftp_messages["Descending order"] = "Ordre d�croissant";
$net2ftp_messages["Upload files"] = "Uploader des fichiers";
$net2ftp_messages["Up"] = "Remonter";
$net2ftp_messages["Click to check or uncheck all rows"] = "Cliquer pour cocher ou decocher tous les �l�ments";
$net2ftp_messages["All"] = "Tous";
$net2ftp_messages["Name"] = "Nom";
$net2ftp_messages["Type"] = "Type";
//$net2ftp_messages["Size"] = "Size";
$net2ftp_messages["Owner"] = "Propri�taire";
$net2ftp_messages["Group"] = "Groupe";
$net2ftp_messages["Perms"] = "Permissions";
$net2ftp_messages["Mod Time"] = "Modifi� le";
$net2ftp_messages["Actions"] = "Actions";
$net2ftp_messages["Select the directory %1\$s"] = "S�lectionner le r�pertoire %1\$s";
$net2ftp_messages["Select the file %1\$s"] = "S�lectionner le fichier %1\$s";
$net2ftp_messages["Select the symlink %1\$s"] = "Select the symlink %1\$s";
$net2ftp_messages["Go to the subdirectory %1\$s"] = "Aller dans le sous-r�pertoire %1\$s";
$net2ftp_messages["Download the file %1\$s"] = "T�l�charger le fichier %1\$s";
$net2ftp_messages["Follow symlink %1\$s"] = "Follow symlink %1\$s";
$net2ftp_messages["View"] = "Voir";
$net2ftp_messages["Edit"] = "�diter";
$net2ftp_messages["Update"] = "Mettre � jour";
$net2ftp_messages["Open"] = "Ouvrir";
$net2ftp_messages["View the highlighted source code of file %1\$s"] = "Voir le code source surlign� du fichier %1\$s";
$net2ftp_messages["Edit the source code of file %1\$s"] = "�diter le code source du fichier %1\$s";
$net2ftp_messages["Upload a new version of the file %1\$s and merge the changes"] = "Uploader une nouvelle version du fichier %1\$s et fusionner les changements";
$net2ftp_messages["View image %1\$s"] = "Voir l'image %1\$s";
$net2ftp_messages["View the file %1\$s from your HTTP web server"] = "Voir le fichier %1\$s � partir de votre serveur HTTP";
$net2ftp_messages["(Note: This link may not work if you don't have your own domain name.)"] = "(Note: Ce lien peut ne pas fonctionner si vous n'avez pas votre propre nom de domaine.)";
$net2ftp_messages["This folder is empty"] = "Ce r�pertoire est vide";

// printSeparatorRow()
$net2ftp_messages["Directories"] = "R�pertoires";
$net2ftp_messages["Files"] = "Fichiers";
$net2ftp_messages["Symlinks"] = "Liens symboliques";
$net2ftp_messages["Unrecognized FTP output"] = "Sortie FTP non reconnue";
$net2ftp_messages["Number"] = "Num�ro";
$net2ftp_messages["Size"] = "Taille";
$net2ftp_messages["Skipped"] = "Omis";
$net2ftp_messages["Data transferred from this IP address today"] = "Donn�es transferr� depuis cette IP aujourd'hui";
$net2ftp_messages["Data transferred to this FTP server today"] = "Donn�es transferr� sur ce serveur FTP aujourd'hui";

// printLocationActions()
$net2ftp_messages["Language:"] = "Langue : ";
$net2ftp_messages["Skin:"] = "Habillement : ";
$net2ftp_messages["View mode:"] = "Mode d'affichage : ";
$net2ftp_messages["Directory Tree"] = "Chemin actuel";

// ftp2http()
$net2ftp_messages["Execute %1\$s in a new window"] = "Ex�cuter %1\$s dans une nouvelle fen�tre";
$net2ftp_messages["This file is not accessible from the web"] = "Ce fichier n'est pas accessible depuis le web.";

// printDirectorySelect()
$net2ftp_messages["Double-click to go to a subdirectory:"] = "Double-cliquer pour acc�der � un sous-r�pertoire:";
$net2ftp_messages["Choose"] = "Choisir";
$net2ftp_messages["Up"] = "Remonter";

} // end browse


// -------------------------------------------------------------------------
// Calculate size module
if ($net2ftp_globals["state"] == "calculatesize") {
// -------------------------------------------------------------------------
$net2ftp_messages["Size of selected directories and files"] = "Taille des r�pertoires et fichiers s�lectionn�s";
$net2ftp_messages["The total size taken by the selected directories and files is:"] = "La taille totale des r�pertoires et fichiers s�lectionn�s est de : ";
$net2ftp_messages["The number of files which were skipped is:"] = "Le nombre de fichiers omis est de : ";

} // end calculatesize


// -------------------------------------------------------------------------
// Chmod module
if ($net2ftp_globals["state"] == "chmod") {
// -------------------------------------------------------------------------
$net2ftp_messages["Chmod directories and files"] = "Changer le chmod des r�pertoires et des fichiers";
$net2ftp_messages["Set all permissions"] = "�tablir toutes les permissions";
$net2ftp_messages["Read"] = "Lire";
$net2ftp_messages["Write"] = "�crire";
$net2ftp_messages["Execute"] = "Ex�cuter";
$net2ftp_messages["Owner"] = "Propri�taire";
$net2ftp_messages["Group"] = "Groupe";
$net2ftp_messages["Everyone"] = "Tout le monde";
$net2ftp_messages["To set all permissions to the same values, enter those permissions and click on the button \"Set all permissions\""] = "Pour r�gler toutes les permissions aux m�mes valeurs, entrez ces permissions et cliquez sur le bouton \"�tablir toutes les permissions\"";
$net2ftp_messages["Set the permissions of directory <b>%1\$s</b> to: "] = "�tablir les permissions du r�pertoire <b>%1\$s</b> �: ";
$net2ftp_messages["Set the permissions of file <b>%1\$s</b> to: "] = "�tablir les permissions du fichier <b>%1\$s</b> �: ";
$net2ftp_messages["Set the permissions of symlink <b>%1\$s</b> to: "] = "�tablir les permissions du symlink <b>%1\$s</b> �: ";
$net2ftp_messages["Chmod value"] = "Valeur chmod";
$net2ftp_messages["Chmod also the subdirectories within this directory"] = "�tablir le chmod sur les sous-r�pertoires dans ce r�pertoire �galement";
$net2ftp_messages["Chmod also the files within this directory"] = "�tablir le chmod sur les fichiers dans ce r�pertoire �galement";
$net2ftp_messages["The chmod nr <b>%1\$s</b> is out of the range 000-777. Please try again."] = "Le chmod <b>%1\$s</b> est � l'ext�rieur de l'intervalle 000-777. Veuillez essayer � nouveau.";

} // end chmod


// -------------------------------------------------------------------------
// Clear cookies module
// -------------------------------------------------------------------------
// No messages


// -------------------------------------------------------------------------
// Copy/Move/Delete module
if ($net2ftp_globals["state"] == "copymovedelete") {
// -------------------------------------------------------------------------
$net2ftp_messages["Choose a directory"] = "Choisir un r�pertoire";
$net2ftp_messages["Copy directories and files"] = "Copier les r�pertoires et les fichiers";
$net2ftp_messages["Move directories and files"] = "D�placer les r�pertoires et les fichiers";
$net2ftp_messages["Delete directories and files"] = "Supprimer les r�pertoires et les fichiers";
$net2ftp_messages["Are you sure you want to delete these directories and files?"] = "�tes-vous sur de vouloir supprimer ces r�pertoires et fichiers?";
$net2ftp_messages["All the subdirectories and files of the selected directories will also be deleted!"] = "Tous les sous-r�pertoires et fichiers des r�pertoires s�lectionn�s vont aussi �tre supprim�s";
$net2ftp_messages["Set all targetdirectories"] = "�tablir tous les r�pertoires cible";
$net2ftp_messages["To set a common target directory, enter that target directory in the textbox above and click on the button \"Set all targetdirectories\"."] = "Pour �tablir un r�pertoire cible commun, saisissez le r�pertoire cible dans la bo�te de texte ci-dessus et cliquez sur \"�tablir tous les r�pertoires cible\".";
$net2ftp_messages["Note: the target directory must already exist before anything can be copied into it."] = "Remarque : le r�pertoire cible doit d�ja exister avant que quelque chose y soit copi�.";
$net2ftp_messages["Different target FTP server:"] = "Diff�rent serveur FTP comme cible:";
$net2ftp_messages["Username"] = "Nom d'utilisateur";
$net2ftp_messages["Password"] = "Mot de passe";
$net2ftp_messages["Leave empty if you want to copy the files to the same FTP server."] = "Laisser vide si vous copiez les fichiers vers le m�me serveur FTP.";
$net2ftp_messages["If you want to copy the files to another FTP server, enter your login data."] = "Si vous voulez copier les fichiers vers un autre serveur FTP, veuillez saisir vos informations de connexion.";
$net2ftp_messages["Leave empty if you want to move the files to the same FTP server."] = "Laissez ce champ vide si vous voulez d�placer des fichiers sur le m�me serveur FTP.";
$net2ftp_messages["If you want to move the files to another FTP server, enter your login data."] = "Si vous voulez d�placer ces ficheirs sur un autre serveur FTP, veuillez saisir vos identifiants.";
$net2ftp_messages["Copy directory <b>%1\$s</b> to:"] = "Copier le r�pertoire <b>%1\$s</b> vers : ";
$net2ftp_messages["Move directory <b>%1\$s</b> to:"] = "D�placer le r�pertoire <b>%1\$s</b> vers : ";
$net2ftp_messages["Directory <b>%1\$s</b>"] = "R�pertoire <b>%1\$s</b>";
$net2ftp_messages["Copy file <b>%1\$s</b> to:"] = "Copier le fichier <b>%1\$s</b> vers : ";
$net2ftp_messages["Move file <b>%1\$s</b> to:"] = "D�placer le fichier <b>%1\$s</b> vers : ";
$net2ftp_messages["File <b>%1\$s</b>"] = "Fichier <b>%1\$s</b>";
$net2ftp_messages["Copy symlink <b>%1\$s</b> to:"] = "Copier le lien symbolique <b>%1\$s</b> vers : ";
$net2ftp_messages["Move symlink <b>%1\$s</b> to:"] = "D�placer le lien symbolique <b>%1\$s</b> vers : ";
$net2ftp_messages["Symlink <b>%1\$s</b>"] = "Lien symbolique <b>%1\$s</b>";
$net2ftp_messages["Target directory:"] = "R�pertoire cible : ";
$net2ftp_messages["Target name:"] = "Nom de la cible : ";
$net2ftp_messages["Processing the entries:"] = "Traitement des �l�ments : ";

} // end copymovedelete


// -------------------------------------------------------------------------
// Download file module
// -------------------------------------------------------------------------
// No messages


// -------------------------------------------------------------------------
// EasyWebsite module
if ($net2ftp_globals["state"] == "easyWebsite") {
// -------------------------------------------------------------------------
$net2ftp_messages["Create a website in 4 easy steps"] = "Cr�ez un site web en 4 pas";
$net2ftp_messages["Template overview"] = "Aper�u";
$net2ftp_messages["Template details"] = "D�tails";
$net2ftp_messages["Files are copied"] = "Fichiers sont copi�s";
$net2ftp_messages["Edit your pages"] = "Editez vos pages";

// Screen 1 - printTemplateOverview
$net2ftp_messages["Click on the image to view the details of a template."] = "Cliquer sur l'image pour voir les d�tails d'un mod�le.";
$net2ftp_messages["Back to the Browse screen"] = "Revenir � la page de navigation";
$net2ftp_messages["Template"] = "Mod�le";
$net2ftp_messages["Copyright"] = "Copyright";
$net2ftp_messages["Click on the image to view the details of this template"] = "Cliquer sur l'image pour voir les d�tails de ce mod�le.";

// Screen 2 - printTemplateDetails
$net2ftp_messages["The template files will be copied to your FTP server. Existing files with the same filename will be overwritten. Do you want to continue?"] = "Les fichiers du mod�le vont �tre copi�s sur votre serveur FTP. Les fichiers existants ayant le m�me nom seront d�truits. Voulez-vous continuer ?";
$net2ftp_messages["Install template to directory: "] = "Installer le mod�le dans le r�pertoire : ";
$net2ftp_messages["Install"] = "Install";
$net2ftp_messages["Size"] = "Taille";
$net2ftp_messages["Preview page"] = "Afficher l'aper�u de la page";
$net2ftp_messages["opens in a new window"] = "ouvre dans une nouvelle fen�tre";

// Screen 3
$net2ftp_messages["Please wait while the template files are being transferred to your server: "] = "Veuillez patienter pendant que les fichiers du mod�le sont transf�r�s sur le serveur: ";
$net2ftp_messages["Done."] = "Fini.";
$net2ftp_messages["Continue"] = "Continuer";

// Screen 4 - printEasyAdminPanel
$net2ftp_messages["Edit page"] = "�diter la page";
$net2ftp_messages["Browse the FTP server"] = "Naviguer sur le serveur FTP";
$net2ftp_messages["Add this link to your favorites to return to this page later on!"] = "Ajouter ce lien � vos favoris pour revenir plus tard sur cette page ! ";
$net2ftp_messages["Edit website at %1\$s"] = "�diter le site Web � %1\$s";
$net2ftp_messages["Internet Explorer: right-click on the link and choose \"Add to Favorites...\""] = "Internet Explorer : clic droit sur le lien et choisir \"Ajouter aux favoris...\"";
$net2ftp_messages["Netscape, Mozilla, Firefox: right-click on the link and choose \"Bookmark This Link...\""] = "Netscape, Mozilla, Firefox : clic droit sur le lien et choisir \"Marque-page sur ce lien\"";

// ftp_copy_local2ftp
$net2ftp_messages["WARNING: Unable to create the subdirectory <b>%1\$s</b>. It may already exist. Continuing..."] = "ATTENTION : Impossible de cr�er le sous-r�pertoire <b>%1\$s</b>. Il est possible qu'il existe d�j�. On continue...";
$net2ftp_messages["Created target subdirectory <b>%1\$s</b>"] = "Sous-r�pertoire cible cr�� <b>%1\$s</b>";
$net2ftp_messages["WARNING: Unable to copy the file <b>%1\$s</b>. Continuing..."] = "ATTENTION : impossible de copier le fichier <b>%1\$s</b>. On continue...";
$net2ftp_messages["Copied file <b>%1\$s</b>"] = "Fichier <b>%1\$s</b> copi�";
}


// -------------------------------------------------------------------------
// Edit module
if ($net2ftp_globals["state"] == "edit") {
// -------------------------------------------------------------------------

// /modules/edit/edit.inc.php
$net2ftp_messages["Unable to open the template file"] = "Impossible d'ouvrir le fichier de description";
$net2ftp_messages["Unable to read the template file"] = "Impossible de lire le fichier de description";
$net2ftp_messages["Please specify a filename"] = "Veuillez sp�cifier un nom de fichier";
$net2ftp_messages["Status: This file has not yet been saved"] = "Statut : Ce fichier n'a pas encore �t� sauvegard�";
$net2ftp_messages["Status: Saved on <b>%1\$s</b> using mode %2\$s"] = "Statut : Sauvegard� dans <b>%1\$s</b> en utilisant le mode %2\$s";
$net2ftp_messages["Status: <b>This file could not be saved</b>"] = "Statut : <b>Ce fichier n'a pas pu �tre sauvegard�</b>";
$net2ftp_messages["Not yet saved"] = "Not yet saved";
$net2ftp_messages["Could not be saved"] = "Could not be saved";
$net2ftp_messages["Saved at %1\$s"] = "Saved at %1\$s";

// /skins/[skin]/edit.template.php
$net2ftp_messages["Directory: "] = "R�pertoire : ";
$net2ftp_messages["File: "] = "Fichier : ";
$net2ftp_messages["New file name: "] = "Nom du nouveau fichier : ";
$net2ftp_messages["Character encoding: "] = "Character encoding: ";
$net2ftp_messages["Note: changing the textarea type will save the changes"] = "Remarque : changer le type de la zone de texte sauvegardera les changements";
$net2ftp_messages["Copy up"] = "Copier vers le haut";
$net2ftp_messages["Copy down"] = "Copier vers le bas";

} // end if edit


// -------------------------------------------------------------------------
// Find string module
if ($net2ftp_globals["state"] == "findstring") {
// -------------------------------------------------------------------------

// /modules/findstring/findstring.inc.php 
$net2ftp_messages["Search directories and files"] = "Rechercher dans des r�pertoires et fichiers";
$net2ftp_messages["Search again"] = "R�p�ter la recherche";
$net2ftp_messages["Search results"] = "R�sultats de la recherche";
$net2ftp_messages["Please enter a valid search word or phrase."] = "Veuillez saisir un mot ou une phrase de recherche valide.";
$net2ftp_messages["Please enter a valid filename."] = "Veuillez saisir un nom de fichier valide.";
$net2ftp_messages["Please enter a valid file size in the \"from\" textbox, for example 0."] = "Veuillez saisir une taille de fichier valide dans le champ de saisie \"de\", comme par exemple 0.";
$net2ftp_messages["Please enter a valid file size in the \"to\" textbox, for example 500000."] = "Veuillez saisir une taille de fichier valide dans le champ de saisie \"�\", comme par exemple 500000.";
$net2ftp_messages["Please enter a valid date in Y-m-d format in the \"from\" textbox."] = "Veuillez saisir la date en utilisant le format A-m-j dans le champ de saisie \"de\".";
$net2ftp_messages["Please enter a valid date in Y-m-d format in the \"to\" textbox."] = "Veuillez saisir la date en utilisant le format A-m-j dans le champ de saisie \"�\".";
$net2ftp_messages["The word <b>%1\$s</b> was not found in the selected directories and files."] = "Le mot <b>%1\$s</b> n'a pas �t� trouv� dans les r�pertoires et fichiers s�lectionn�s.";
$net2ftp_messages["The word <b>%1\$s</b> was found in the following files:"] = "Le mot <b>%1\$s</b> a �t� trouv� dans les fichiers suivants:";

// /skins/[skin]/findstring1.template.php
$net2ftp_messages["Search for a word or phrase"] = "Rechercher un mot ou une phrase";
$net2ftp_messages["Case sensitive search"] = "Recherche sensible � la casse";
$net2ftp_messages["Restrict the search to:"] = "Restreindre la recherche �:";
$net2ftp_messages["files with a filename like"] = "fichiers avec un nom de fichier comme";
$net2ftp_messages["(wildcard character is *)"] = "(caract�re joker est *)";
$net2ftp_messages["files with a size"] = "fichiers avec une taille";
$net2ftp_messages["files which were last modified"] = "fichiers r�cemments modifi�s";
$net2ftp_messages["from"] = "de";
$net2ftp_messages["to"] = "�";

$net2ftp_messages["Directory"] = "R�pertoire";
$net2ftp_messages["File"] = "Fichier";
$net2ftp_messages["Line"] = "Ligne";
$net2ftp_messages["Action"] = "Action";
$net2ftp_messages["View"] = "Voir";
$net2ftp_messages["Edit"] = "�diter";
$net2ftp_messages["View the highlighted source code of file %1\$s"] = "Voir le code source surlign� du fichier %1\$s";
$net2ftp_messages["Edit the source code of file %1\$s"] = "�diter le code source du fichier %1\$s";

} // end findstring


// -------------------------------------------------------------------------
// Help module
// -------------------------------------------------------------------------
// No messages yet


// -------------------------------------------------------------------------
// Install size module
if ($net2ftp_globals["state"] == "install") {
// -------------------------------------------------------------------------

// /modules/install/install.inc.php
$net2ftp_messages["Install software packages"] = "Install software packages";
$net2ftp_messages["Unable to open the template file"] = "Impossible d'ouvrir le fichier de description";
$net2ftp_messages["Unable to read the template file"] = "Impossible de lire le fichier de description";
$net2ftp_messages["Unable to get the list of packages"] = "Impossible de r�cup�rer la liste des paquets";

// /skins/blue/install1.template.php
$net2ftp_messages["The net2ftp installer script has been copied to the FTP server."] = "Le script d'installation net2ftp a �t� copi� sur le serveur FTP.";
$net2ftp_messages["This script runs on your web server and requires PHP to be installed."] = "Ce script est lanc� sur votre serveur web et requiert que PHP soit install�.";
$net2ftp_messages["In order to run it, click on the link below."] = "Pour le lancer, cliquer sur le lien ci-dessous.";
$net2ftp_messages["net2ftp has tried to determine the directory mapping between the FTP server and the web server."] = "net2ftp a essay� de determiner la correspondance entre le serveur FTP et votre serveur web.";
$net2ftp_messages["Should this link not be correct, enter the URL manually in your web browser."] = "Si ce lien n'est pas correct, entrer l'URL manuellement dans votre navigateur web.";

} // end install


// -------------------------------------------------------------------------
// Java upload module
if ($net2ftp_globals["state"] == "jupload") {
// -------------------------------------------------------------------------
$net2ftp_messages["Upload directories and files using a Java applet"] = "Upload de r�pertoires et de fichiers � travers une applet Java";
$net2ftp_messages["Your browser does not support applets, or you have disabled applets in your browser settings."] = "Your browser does not support applets, or you have disabled applets in your browser settings.";
$net2ftp_messages["To use this applet, please install the newest version of Sun's java. You can get it from <a href=\"http://www.java.com/\">java.com</a>. Click on Get It Now."] = "To use this applet, please install the newest version of Sun's java. You can get it from <a href=\"http://www.java.com/\">java.com</a>. Click on Get It Now.";
$net2ftp_messages["The online installation is about 1-2 MB and the offline installation is about 13 MB. This 'end-user' java is called JRE (Java Runtime Environment)."] = "The online installation is about 1-2 MB and the offline installation is about 13 MB. This 'end-user' java is called JRE (Java Runtime Environment).";
$net2ftp_messages["Alternatively, use net2ftp's normal upload or upload-and-unzip functionality."] = "Alternatively, use net2ftp's normal upload or upload-and-unzip functionality.";

} // end jupload



// -------------------------------------------------------------------------
// Login module
if ($net2ftp_globals["state"] == "login") {
// -------------------------------------------------------------------------
$net2ftp_messages["Login!"] = "Login!";
$net2ftp_messages["Once you are logged in, you will be able to:"] = "Une fois que vous vous serez identifi�, vous pourrez:";
$net2ftp_messages["Navigate the FTP server"] = "Naviguer sur le serveur FTP";
$net2ftp_messages["Once you have logged in, you can browse from directory to directory and see all the subdirectories and files."] = "Une fois identifi�, vous pourrez naviguer de r�pertoire en r�pertoire, voir tous les sous-r�pertoires ainsi que les fichiers.";
$net2ftp_messages["Upload files"] = "Uploader des fichiers";
$net2ftp_messages["There are 3 different ways to upload files: the standard upload form, the upload-and-unzip functionality, and the Java Applet."] = "Il existe 3 mani�res diff�rentes d'uploader des fichiers. Le formulaire standard, le mode upload & unzip et l'applet Java";
$net2ftp_messages["Download files"] = "T�l�charger des fichiers";
$net2ftp_messages["Click on a filename to quickly download one file.<br />Select multiple files and click on Download; the selected files will be downloaded in a zip archive."] = "Cliquer sur un fichier pour le t�l�charger directement.<br>En s�lectionnant plusieurs fichiers, cliquer sur \"T�l�charger\" vous permettra de t�l�charger tous les fichiers dans une seule archive Zip";
$net2ftp_messages["Zip files"] = "Compresser des fichiers au format Zip";
$net2ftp_messages["... and save the zip archive on the FTP server, or email it to someone."] = "... et sauvegarder cette archive zip sur le serveur FTP, ou bien l'envoyer par courriel";
$net2ftp_messages["Unzip files"] = "Unzip files";
$net2ftp_messages["Different formats are supported: .zip, .tar, .tgz and .gz."] = "Differents formats sont support�s: .zip, .tar, .tgz and .gz.";
$net2ftp_messages["Install software"] = "Install software";
$net2ftp_messages["Choose from a list of popular applications (PHP required)."] = "Choisissez parmi une liste d'applications (PHP requit).";
$net2ftp_messages["Copy, move and delete"] = "Copier, d�placer ou supprimer";
$net2ftp_messages["Directories are handled recursively, meaning that their content (subdirectories and files) will also be copied, moved or deleted."] = "Les r�pertoires sont trait�s r�cursivement. Tout leur contenu (sous-r�pertoires et fichiers) sera �galement copi�, d�plac� ou supprim�.";
$net2ftp_messages["Copy or move to a 2nd FTP server"] = "Copier ou d�placer sur un deuxi�me serveur FTP";
$net2ftp_messages["Handy to import files to your FTP server, or to export files from your FTP server to another FTP server."] = "Il est facile d'importer des fichiers sur votre serveur FTP, ou bien d'exporter des fichiers depuis votre serveur FTP sur un autre serveur FTP";
$net2ftp_messages["Rename and chmod"] = "Renommer et modifier les permissions (chmod)";
$net2ftp_messages["Chmod handles directories recursively."] = "Modifier les permissions se fait de mani�re r�cursive sur les r�pertoires.";
$net2ftp_messages["View code with syntax highlighting"] = "Afficher du code avec de la coloration syntaxique";
$net2ftp_messages["PHP functions are linked to the documentation on php.net."] = "Les fonctions PHP pointent sur la documentation disponible sur php.net.";
$net2ftp_messages["Plain text editor"] = "�diteur de texte brut";
$net2ftp_messages["Edit text right from your browser; every time you save the changes the new file is transferred to the FTP server."] = "�diter du texte depuis votre navigateur. Chaque fois que vous sauvegardez les changements, le fichier est automatiquement transf�r� sur le serveur FTP.";
$net2ftp_messages["HTML editors"] = "�diteurs HTML";
$net2ftp_messages["Edit HTML a What-You-See-Is-What-You-Get (WYSIWYG) form; there are 2 different editors to choose from."] = "Editer le HTML avec un formulaire WYSIWYG; vous avez le choix entre deux �diteurs";
$net2ftp_messages["Code editor"] = "�diteur de code";
$net2ftp_messages["Edit HTML and PHP in an editor with syntax highlighting."] = "�diter du code HTML et PHP avec de la coloration syntaxique.";
$net2ftp_messages["Search for words or phrases"] = "Rechercher des mots ou des expressions";
$net2ftp_messages["Filter out files based on the filename, last modification time and filesize."] = "Filtrer les fichiers par leur nom, leur date de derni�re modification ou leur taille.";
$net2ftp_messages["Calculate size"] = "Calculer la taille";
$net2ftp_messages["Calculate the size of directories and files."] = "Calculer la taille des r�pertoire et des fichiers.";

$net2ftp_messages["FTP server"] = "Serveur FTP";
$net2ftp_messages["Example"] = "Exemple";
$net2ftp_messages["Port"] = "Port";
$net2ftp_messages["Protocol"] = "Protocol";
$net2ftp_messages["Username"] = "Nom d'utilisateur";
$net2ftp_messages["Password"] = "Mot de passe";
$net2ftp_messages["Anonymous"] = "Anonyme";
$net2ftp_messages["Passive mode"] = "Mode passif";
$net2ftp_messages["Initial directory"] = "R�pertoire de d�part";
$net2ftp_messages["Language"] = "Langue";
$net2ftp_messages["Skin"] = "Habillement";
$net2ftp_messages["FTP mode"] = "Mode FTP";
$net2ftp_messages["Automatic"] = "Automatique";
$net2ftp_messages["Login"] = "Soumettre";
$net2ftp_messages["Clear cookies"] = "Effacer les cookies";
$net2ftp_messages["Admin"] = "Admin";
$net2ftp_messages["Please enter an FTP server."] = "Veuillez saisir un serveur FTP.";
$net2ftp_messages["Please enter a username."] = "Veuillez saisir un nom d'utilisateur.";
$net2ftp_messages["Please enter a password."] = "Veuillez saisir un mot de passe.";

} // end login


// -------------------------------------------------------------------------
// Login module
if ($net2ftp_globals["state"] == "login_small") {
// -------------------------------------------------------------------------

$net2ftp_messages["Please enter your Administrator username and password."] = "Veuillez saisir votre identifiant et votre mot de passe Administrateur.";
$net2ftp_messages["Please enter your username and password for FTP server <b>%1\$s</b>."] = "Veuillez entrer votre identifiant et mot de passe pour le serveur FTP <b>%1\$s</b>.";
$net2ftp_messages["Username"] = "Nom d'utilisateur";
$net2ftp_messages["Your session has expired; please enter your password for FTP server <b>%1\$s</b> to continue."] = "Votre session a expir�e, veuillez entrer votre mot de passe pour le serveur FTP  <b>%1\$s</b> pour continuer.";
$net2ftp_messages["Your IP address has changed; please enter your password for FTP server <b>%1\$s</b> to continue."] = "Votre IP a chang�, veuillez entrer votre mot de passe pour le serveur FTP <b>%1\$s</b> pour continuer.";
$net2ftp_messages["Password"] = "Mot de passe";
$net2ftp_messages["Login"] = "Soumettre";
$net2ftp_messages["Continue"] = "Continuer";

} // end login_small


// -------------------------------------------------------------------------
// Logout module
if ($net2ftp_globals["state"] == "logout") {
// -------------------------------------------------------------------------

// logout.inc.php
$net2ftp_messages["Login page"] = "Page de connexion";

// logout.template.php
$net2ftp_messages["You have logged out from the FTP server. To log back in, <a href=\"%1\$s\" title=\"Login page (accesskey l)\" accesskey=\"l\">follow this link</a>."] = "Vous vous �tes d�connect� du serveur FTP. Pour vous reconnecter, <a href=\"%1\$s\" title=\"Login page (accesskey l)\" accesskey=\"l\">suivez ce lien</a>.";
$net2ftp_messages["Note: other users of this computer could click on the browser's Back button and access the FTP server."] = "Remarque : les autres utilisateurs de cet ordinateur peuvent encore cliquez sur le bouton \"Pr�c�dent\" du navigateur et acc�der au serveur FTP.";
$net2ftp_messages["To prevent this, you must close all browser windows."] = "Pour �viter ceci, il faut fermer toutes les fen�tres du navigateur.";
$net2ftp_messages["Close"] = "Fermer";
$net2ftp_messages["Click here to close this window"] = "Cliquer ici pour fermer cette fen�tre";

} // end logout


// -------------------------------------------------------------------------
// New directory module
if ($net2ftp_globals["state"] == "newdir") {
// -------------------------------------------------------------------------
$net2ftp_messages["Create new directories"] = "Cr�er des nouveaux r�pertoires";
$net2ftp_messages["The new directories will be created in <b>%1\$s</b>."] = "Les nouveaux r�pertoires seront cr��s dans <b>%1\$s</b>.";
$net2ftp_messages["New directory name:"] = "Nom du nouveau r�pertoire:";
$net2ftp_messages["Directory <b>%1\$s</b> was successfully created."] = "Le r�pertoire <b>%1\$s</b> a �t� cr�� avec succ�s.";
$net2ftp_messages["Directory <b>%1\$s</b> could not be created."] = "Le r�pertoire <b>%1\$s</b> n'a pas pu �tre cr��.";

} // end newdir


// -------------------------------------------------------------------------
// Raw module
if ($net2ftp_globals["state"] == "raw") {
// -------------------------------------------------------------------------

// /modules/raw/raw.inc.php
$net2ftp_messages["Send arbitrary FTP commands"] = "Envoyer des commandes FTP arbitraires";


// /skins/[skin]/raw1.template.php
$net2ftp_messages["List of commands:"] = "Liste des commandes : ";
$net2ftp_messages["FTP server response:"] = "R�ponse du serveur FTP : ";

} // end raw


// -------------------------------------------------------------------------
// Rename module
if ($net2ftp_globals["state"] == "rename") {
// -------------------------------------------------------------------------
$net2ftp_messages["Rename directories and files"] = "Renommer des r�pertoires et des fichiers";
$net2ftp_messages["Old name: "] = "Ancien nom : ";
$net2ftp_messages["New name: "] = "Nouveau nom : ";
$net2ftp_messages["The new name may not contain any dots. This entry was not renamed to <b>%1\$s</b>"] = "Le nouveau nom ne doit contenir aucun point. Cette entr�e n'a pas �t� renomm�e en <b>%1\$s</b>";
$net2ftp_messages["The new name may not contain any banned keywords. This entry was not renamed to <b>%1\$s</b>"] = "Le nouveau nom ne peut pas contenir de mot clef interdis. cette entr�e n'a pas �t� renomm�e <b>%1\$s</b>";
$net2ftp_messages["<b>%1\$s</b> was successfully renamed to <b>%2\$s</b>"] = "<b>%1\$s</b> a �t� renomm� avec succ�s en <b>%2\$s</b>";
$net2ftp_messages["<b>%1\$s</b> could not be renamed to <b>%2\$s</b>"] = "<b>%1\$s</b> n'a pu �tre renomm� en <b>%2\$s</b>";

} // end rename


// -------------------------------------------------------------------------
// Unzip module
if ($net2ftp_globals["state"] == "unzip") {
// -------------------------------------------------------------------------

// /modules/unzip/unzip.inc.php
$net2ftp_messages["Unzip archives"] = "D�zipper les archives";
$net2ftp_messages["Getting archive %1\$s of %2\$s from the FTP server"] = "R�cup�ration de l'archive %1\$s sur %2\$s depuis le serveur FTP";
$net2ftp_messages["Unable to get the archive <b>%1\$s</b> from the FTP server"] = "Impossible de r�cup�rer l'archive <b>%1\$s</b> depuis le serveur FTP";

// /skins/[skin]/unzip1.template.php
$net2ftp_messages["Set all targetdirectories"] = "�tablir tous les r�pertoires cible";
$net2ftp_messages["To set a common target directory, enter that target directory in the textbox above and click on the button \"Set all targetdirectories\"."] = "Pour �tablir un r�pertoire cible commun, saisissez le r�pertoire cible dans la bo�te de texte ci-dessus et cliquez sur \"�tablir tous les r�pertoires cible\".";
$net2ftp_messages["Note: the target directory must already exist before anything can be copied into it."] = "Remarque : le r�pertoire cible doit d�ja exister avant que quelque chose y soit copi�.";
$net2ftp_messages["Unzip archive <b>%1\$s</b> to:"] = "Unzip archive <b>%1\$s</b> to:";
$net2ftp_messages["Target directory:"] = "R�pertoire cible : ";
$net2ftp_messages["Use folder names (creates subdirectories automatically)"] = "Utiliser les noms des r�pertoires (cr�er les sous-r�pertoires automatiquement)";

} // end unzip


// -------------------------------------------------------------------------
// Upload module
if ($net2ftp_globals["state"] == "upload") {
// -------------------------------------------------------------------------
$net2ftp_messages["Upload to directory:"] = "Uploader vers le r�pertoire:";
$net2ftp_messages["Files"] = "Fichiers";
$net2ftp_messages["Archives"] = "Archives";
$net2ftp_messages["Files entered here will be transferred to the FTP server."] = "Les fichiers entr�s ici seront transf�r�s vers le serveur FTP.";
$net2ftp_messages["Archives entered here will be decompressed, and the files inside will be transferred to the FTP server."] = "Les archives entr�es ici vont �tre d�compress�es et les fichiers � l'int�rieur de celles-ci vont �tre transf�r�s vers le serveur FTP.";
$net2ftp_messages["Add another"] = "Ajouter un autre";
$net2ftp_messages["Use folder names (creates subdirectories automatically)"] = "Utiliser les noms des r�pertoires (cr�er les sous-r�pertoires automatiquement)";

$net2ftp_messages["Choose a directory"] = "Choisir un r�pertoire";
$net2ftp_messages["Please wait..."] = "Merci de patienter...";
$net2ftp_messages["Uploading... please wait..."] = "Upload en cours... Merci de patienter...";
$net2ftp_messages["If the upload takes more than the allowed <b>%1\$s seconds<\/b>, you will have to try again with less/smaller files."] = "Si l\'upload prend plus que les <b>%1\$s secondes<\/b> permises, vous devrez reessayer avec moins de fichiers ou avec des fichiers plus petits.";
$net2ftp_messages["This window will close automatically in a few seconds."] = "Cette fen�tre se fermera automatiquement dans quelques secondes.";
$net2ftp_messages["Close window now"] = "Fermer la fen�tre maintenant";

$net2ftp_messages["Upload files and archives"] = "Uploader des fichiers et des archives";
$net2ftp_messages["Upload results"] = "R�sultats de l'upload";
$net2ftp_messages["Checking files:"] = "V�rification des fichiers:";
$net2ftp_messages["Transferring files to the FTP server:"] = "Transfer des fichiers vers le serveur FTP:";
$net2ftp_messages["Decompressing archives and transferring files to the FTP server:"] = "Decompression des archives et transfer des fichiers vers le serveur FTP:";
$net2ftp_messages["Upload more files and archives"] = "Uploader plus de fichiers et d'archives";

} // end upload


// -------------------------------------------------------------------------
// Messages which are shared by upload and jupload
if ($net2ftp_globals["state"] == "upload" || $net2ftp_globals["state"] == "jupload") {
// -------------------------------------------------------------------------
$net2ftp_messages["Restrictions:"] = "Restrictions : ";
$net2ftp_messages["The maximum size of one file is restricted by net2ftp to <b>%1\$s</b> and by PHP to <b>%2\$s</b>"] = "La taille maximale d'un fichier est restreinte � <b>%1\$s</b> par net2ftp et � <b>%2\$s</b> par PHP";
$net2ftp_messages["The maximum execution time is <b>%1\$s seconds</b>"] = "Le temps d'ex�cution maximum est de <b>%1\$s secondes</b>";
$net2ftp_messages["The FTP transfer mode (ASCII or BINARY) will be automatically determined, based on the filename extension"] = "Le mode de transfert FTP (ASCII ou BINARY) sera automatiquement d�termin� selon l'extension du fichier";
$net2ftp_messages["If the destination file already exists, it will be overwritten"] = "Si le fichier de destination existe d�ja il sera remplac� par celui-ci";

} // end upload or jupload


// -------------------------------------------------------------------------
// View module
if ($net2ftp_globals["state"] == "view") {
// -------------------------------------------------------------------------

// /modules/view/view.inc.php
$net2ftp_messages["View file %1\$s"] = "Visualiser le fichier %1\$s";
$net2ftp_messages["View image %1\$s"] = "Voir l'image %1\$s";
$net2ftp_messages["View Macromedia ShockWave Flash movie %1\$s"] = "Visualiser le film Macromedia ShockWave Flash %1\$s";
$net2ftp_messages["Image"] = "Image";

// /skins/[skin]/view1.template.php
$net2ftp_messages["Syntax highlighting powered by <a href=\"http://luminous.asgaard.co.uk\">Luminous</a>"] = "La coloration syntaxique est r�alis� par <a href=\"http://luminous.asgaard.co.uk\">Luminous</a>";
$net2ftp_messages["To save the image, right-click on it and choose 'Save picture as...'"] = "Pour sauvegarder l'image, faites un click droit sur l'image et choisissez 'Save picture as...'";

} // end view


// -------------------------------------------------------------------------
// Zip module
if ($net2ftp_globals["state"] == "zip") {
// -------------------------------------------------------------------------

// /modules/zip/zip.inc.php
$net2ftp_messages["Zip entries"] = "Entr�es zip";

// /skins/[skin]/zip1.template.php
$net2ftp_messages["Save the zip file on the FTP server as:"] = "Sauvegarder le fichier zip sur le serveur comme : ";
$net2ftp_messages["Email the zip file in attachment to:"] = "Envoyer le fichier zip comme attachement par courriel �:";
$net2ftp_messages["Note that sending files is not anonymous: your IP address as well as the time of the sending will be added to the email."] = "Remarquez qu'envoyer des fichiers n'est pas anonyme : votre adresse IP ainsi que le temps et la date d'envoie seront ajout�s au courriel.";
$net2ftp_messages["Some additional comments to add in the email:"] = "Quelques commentaires additionnels � ajouter au courriel : ";

$net2ftp_messages["You did not enter a filename for the zipfile. Go back and enter a filename."] = "Vous n'avez pas entr� un nom de fichier pour le fichier zip. Retournez en arri�re et entrez un nom de fichier.";
$net2ftp_messages["The email address you have entered (%1\$s) does not seem to be valid.<br />Please enter an address in the format <b>username@domain.com</b>"] = "L'adresse de courriel que vous avez saisie (%1\$s) ne semble pas �tre valide.<br />Veuillez saisir une adresse du type <b>utilisateur@domaine.com</b>";

} // end zip

?>