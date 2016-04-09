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
$net2ftp_messages["en"] = "hu";

// HTML dir attribute: left-to-right (LTR) or right-to-left (RTL)
$net2ftp_messages["ltr"] = "ltr";

// CSS style: align left or right (use in combination with LTR or RTL)
$net2ftp_messages["left"] = "bal";
$net2ftp_messages["right"] = "jobb";

// Encoding
$net2ftp_messages["iso-8859-1"] = "iso-8859-2";


// -------------------------------------------------------------------------
// Status messages
// -------------------------------------------------------------------------

// When translating these messages, keep in mind that the text should not be too long
// It should fit in the status textbox

$net2ftp_messages["Connecting to the FTP server"] = "Kapcsol�d�s FTP szerverhez";
$net2ftp_messages["Logging into the FTP server"] = "Kil�p�s az FTP szerverb�l";
$net2ftp_messages["Setting the passive mode"] = "Passz�v m�d be�ll�t�sa";
$net2ftp_messages["Getting the FTP system type"] = "Megismeri az FTP-rendszer t�pus�t";
$net2ftp_messages["Changing the directory"] = "K�nyvt�r m�dos�t�sa";
$net2ftp_messages["Getting the current directory"] = "Megismeri az aktu�lis k�nyvt�rat";
$net2ftp_messages["Getting the list of directories and files"] = "Megismeri ak�nyvt�rak  list�j�t �s  a f�jlokat";
$net2ftp_messages["Parsing the list of directories and files"] = "Elemzi a k�nyvt�rak list�j�t �s a f�jlokat";
$net2ftp_messages["Logging out of the FTP server"] = "Kil�p�s az FTP szerverb�l";
$net2ftp_messages["Getting the list of directories and files"] = "Megismeri ak�nyvt�rak  list�j�t �s  a f�jlokat";
$net2ftp_messages["Printing the list of directories and files"] = "Nyomtatja a k�nyvt�rak list�j�t �s a f�jlokat";
$net2ftp_messages["Processing the entries"] = "Feldolgoz� bejegyz�sek";
$net2ftp_messages["Processing entry %1\$s"] = "Feldolgoz�s bejegyz�s %1\$s";
$net2ftp_messages["Checking files"] = "F�jlok ellen�rz�se";
$net2ftp_messages["Transferring files to the FTP server"] = "F�jlok �tvitele az FTP szerverre";
$net2ftp_messages["Decompressing archives and transferring files"] = "Kicsomagol�skor arh�v �s f�jlok �tvitele";
$net2ftp_messages["Searching the files..."] = "F�jlok keres�se...";
$net2ftp_messages["Uploading new file"] = "�j f�jl felt�lt�se";
$net2ftp_messages["Reading the file"] = "Olvasni a f�jlt";
$net2ftp_messages["Parsing the file"] = "Feldongozni a f�jlt";
$net2ftp_messages["Reading the new file"] = "Olvasni az �j f�jlt";
$net2ftp_messages["Reading the old file"] = "Olvasni a r�gi f�jlt";
$net2ftp_messages["Comparing the 2 files"] = "�sszehasonl�tani 2 f�jlt";
$net2ftp_messages["Printing the comparison"] = "Printing the comparison";
$net2ftp_messages["Sending FTP command %1\$s of %2\$s"] = "K�ld�s FTP parancs %1\$s of %2\$s";
$net2ftp_messages["Getting archive %1\$s of %2\$s from the FTP server"] = "Arh�v kinyer�se  %1\$s k�z�l %2\$s az FTP szerveren";
$net2ftp_messages["Creating a temporary directory on the FTP server"] = "L�trehoz�sa egy ideiglenes k�nyvt�rba az FTP szerveren";
$net2ftp_messages["Setting the permissions of the temporary directory"] = "Enged�lyeinek be�ll�t�s�t az ideiglenes k�nyvt�r";
$net2ftp_messages["Copying the net2ftp installer script to the FTP server"] = "M�sol�s a net2ftp telep�t� script az FTP szerverre";
$net2ftp_messages["Script finished in %1\$s seconds"] = "A script fejez�d�tt %1\$s m�sodpercen bel�l";
$net2ftp_messages["Script halted"] = "A script meg�llt";

// Used on various screens
$net2ftp_messages["Please wait..."] = "K�rem v�rjon...";


// -------------------------------------------------------------------------
// index.php
// -------------------------------------------------------------------------
$net2ftp_messages["Unexpected state string: %1\$s. Exiting."] = "A string v�ralanul: %1\$s. Kil�pett.";
$net2ftp_messages["This beta function is not activated on this server."] = "Ez a b�ta funkci� nem akt�v ezen a szerveren.";
$net2ftp_messages["This function has been disabled by the Administrator of this website."] = "Ez a funkci� le van tiltva a rendszergazda �ltal az ezen a weboldalon.";


// -------------------------------------------------------------------------
// /includes/browse.inc.php
// -------------------------------------------------------------------------
$net2ftp_messages["The directory <b>%1\$s</b> does not exist or could not be selected, so the directory <b>%2\$s</b> is shown instead."] = "A k�nyvt�r <b>%1\$s</b> nem l�tezik, vagy nem lehet kiv�lasztani, ez�rt a k�nyvt�r <b>%2\$s</b> jelenik meg helyette.";
$net2ftp_messages["Your root directory <b>%1\$s</b> does not exist or could not be selected."] = "A gy�k�r k�nyvt�rban <b>%1\$s</b> nem l�tezik, vagy nem lehet kiv�lasztani.";
$net2ftp_messages["The directory <b>%1\$s</b> could not be selected - you may not have sufficient rights to view this directory, or it may not exist."] = "A k�nyvt�r <b>%1\$s</b> nem lehet kiv�lasztani - lehet, hogy nem rendelkezik megfelel� jogokkal, hogy megtekinthesse ezt a k�nyvt�rat, vagy nem is l�tezik.";
$net2ftp_messages["Entries which contain banned keywords can't be managed using net2ftp. This is to avoid Paypal or Ebay scams from being uploaded through net2ftp."] = "Bejegyz�seket tartalmaz� tiltott kulcsszavak nem lehet felhaszn�l�s�val net2ftp. Ennek c�lja, hogy elker�lj�k, vagy Ebay Paypal csal�sok att�l, hogy felt�lt�tt kereszt�l net2ftp.";
$net2ftp_messages["Files which are too big can't be downloaded, uploaded, copied, moved, searched, zipped, unzipped, viewed or edited; they can only be renamed, chmodded or deleted."] = "F�jlok, amelyek t�l nagy, nem lehet let�lteni, felt�lt�tt, m�solhat�k, mozgathat�k, kereshet�, t�m�r�tett, cipz�rat kinyitni, megtekintett vagy szerkesztett, csak akkor lehet �tnevezni, chmodded vagy t�r�lni.";
$net2ftp_messages["Execute %1\$s in a new window"] = "V�grehajtaja %1\$s egy �j ablakban";


// -------------------------------------------------------------------------
// /includes/main.inc.php
// -------------------------------------------------------------------------
$net2ftp_messages["Please select at least one directory or file!"] = "K�rj�k, v�lasszon legal�bb egy k�nyvt�rat vagy f�jl!";


// -------------------------------------------------------------------------
// /includes/authorizations.inc.php
// -------------------------------------------------------------------------

// checkAuthorization()
$net2ftp_messages["The FTP server <b>%1\$s</b> is not in the list of allowed FTP servers."] = "Az FTP szerver <b>%1\$s</b> nem szerepel a list�n enged�lyezett FTP szervereken.";
$net2ftp_messages["The FTP server <b>%1\$s</b> is in the list of banned FTP servers."] = "Az FTP szerver <b>%1\$s</b> van a tilalmi list�n szerepl� FTP-szervereket.";
$net2ftp_messages["The FTP server port %1\$s may not be used."] = "Az FTP szerver portja %1\$s nem lehet felhaszn�lni.";
$net2ftp_messages["Your IP address (%1\$s) is not in the list of allowed IP addresses."] = "Az �n IP c�me (%1\$s) nem szerepel a list�n az enged�lyezett IP-c�mek.";
$net2ftp_messages["Your IP address (%1\$s) is in the list of banned IP addresses."] = "Az �n IP c�me (%1\$s) van a tilalmi list�n szerepl� IP-c�mek.";

// isAuthorizedDirectory()
$net2ftp_messages["Table net2ftp_users contains duplicate rows."] = "T�bl�zat tartalmazza net2ftp_users ism�tl�d� sorokban.";

// checkAdminUsernamePassword()
$net2ftp_messages["You did not enter your Administrator username or password."] = "Nem adta meg a rendszergazda felhaszn�l�i n�v vagy jelsz�.";
$net2ftp_messages["Wrong username or password. Please try again."] = "Nem vagy bejelentkezve. K�rj�k, pr�b�lja �jra.";

// -------------------------------------------------------------------------
// /includes/consumption.inc.php
// -------------------------------------------------------------------------
$net2ftp_messages["Unable to determine your IP address."] = "Nem siker�lt meghat�rozni az IP c�met.";
$net2ftp_messages["Table net2ftp_log_consumption_ipaddress contains duplicate rows."] = "T�bl�zat tartalmazza net2ftp_log_consumption_ipaddress ism�tl�d� sorokban.";
$net2ftp_messages["Table net2ftp_log_consumption_ftpserver contains duplicate rows."] = "T�bl�zat tartalmazza net2ftp_log_consumption_ftpserver ism�tl�d� sorokban.";
$net2ftp_messages["The variable <b>consumption_ipaddress_datatransfer</b> is not numeric."] = "A v�ltoz� <b>consumption_ipaddress_datatransfer</b> nem sz�m�rt�k.";
$net2ftp_messages["Table net2ftp_log_consumption_ipaddress could not be updated."] = "T�bl�zat net2ftp_log_consumption_ipaddress nem lehet friss�teni.";
$net2ftp_messages["Table net2ftp_log_consumption_ipaddress contains duplicate entries."] = "T�bl�zat tartalmazza net2ftp_log_consumption_ipaddress ism�tl�d� bejegyz�seket.";
$net2ftp_messages["Table net2ftp_log_consumption_ftpserver could not be updated."] = "T�bl�zat net2ftp_log_consumption_ftpserver nem lehet friss�teni.";
$net2ftp_messages["Table net2ftp_log_consumption_ftpserver contains duplicate entries."] = "Tk�pes net2ftp_log_consumption_ftpserver ism�tl�d� bejegyz�seket tartalmaz.";
$net2ftp_messages["Table net2ftp_log_access could not be updated."] = "T�bl�zat net2ftp_log_access nem lehet friss�teni.";
$net2ftp_messages["Table net2ftp_log_access contains duplicate entries."] = "T�bl�zat tartalmazza net2ftp_log_access ism�tl�d� bejegyz�seket.";


// -------------------------------------------------------------------------
// /includes/database.inc.php
// -------------------------------------------------------------------------
$net2ftp_messages["Unable to connect to the MySQL database. Please check your MySQL database settings in net2ftp's configuration file settings.inc.php."] = "Nem siker�lt csatlakozni a MySQL adatb�zishoz. K�rj�k, ellen�rizze a MySQL adatb�zis be�ll�t�sait net2ftp konfigur�ci�s f�jl settings.inc.php.";
$net2ftp_messages["Unable to select the MySQL database. Please check your MySQL database settings in net2ftp's configuration file settings.inc.php."] = "Nem v�laszthatja a MySQL adatb�zisban. K�rj�k, ellen�rizze a MySQL adatb�zis be�ll�t�sait net2ftp konfigur�ci�s f�jl settings.inc.php.";


// -------------------------------------------------------------------------
// /includes/errorhandling.inc.php
// -------------------------------------------------------------------------
$net2ftp_messages["An error has occured"] = "Egy hiba l�pett fel";
$net2ftp_messages["Go back"] = "Menj vissza";
$net2ftp_messages["Go to the login page"] = "Menjen a bejelentkez� oldalra";


// -------------------------------------------------------------------------
// /includes/filesystem.inc.php
// -------------------------------------------------------------------------

// ftp_openconnection()
$net2ftp_messages["The <a href=\"http://www.php.net/manual/en/ref.ftp.php\" target=\"_blank\">FTP module of PHP</a> is not installed.<br /><br /> The administrator of this website should install this module. Installation instructions are given on <a href=\"http://www.php.net/manual/en/ftp.installation.php\" target=\"_blank\">php.net</a><br />"] = "The <a href=\"http://www.php.net/manual/en/ref.ftp.php\" target=\"_blank\">FTP module of PHP</a> is not installed.<br /><br /> The administrator of this website should install this module. Installation instructions are given on <a href=\"http://www.php.net/manual/en/ftp.installation.php\" target=\"_blank\">php.net</a><br />";
$net2ftp_messages["The <a href=\"http://www.php.net/manual/en/function.ftp-ssl-connect.php\" target=\"_blank\">FTP and/or OpenSSL modules of PHP</a> is not installed.<br /><br /> The administrator of this website should install these modules. Installation instructions are given on php.net: <a href=\"http://www.php.net/manual/en/ftp.installation.php\" target=\"_blank\">here for FTP</a>, and <a href=\"http://www.php.net/manual/en/openssl.installation.php\" target=\"_blank\">here for OpenSSL</a><br />"] = "The <a href=\"http://www.php.net/manual/en/function.ftp-ssl-connect.php\" target=\"_blank\">FTP and/or OpenSSL modules of PHP</a> is not installed.<br /><br /> The administrator of this website should install these modules. Installation instructions are given on php.net: <a href=\"http://www.php.net/manual/en/ftp.installation.php\" target=\"_blank\">here for FTP</a>, and <a href=\"http://www.php.net/manual/en/openssl.installation.php\" target=\"_blank\">here for OpenSSL</a><br />";
$net2ftp_messages["The <a href=\"http://www.php.net/manual/en/function.ssh2-sftp.php\" target=\"_blank\">SSH2 module of PHP</a> is not installed.<br /><br /> The administrator of this website should install this module. Installation instructions are given on <a href=\"http://www.php.net/manual/en/ssh2.installation.php\" target=\"_blank\">php.net</a><br />"] = "The <a href=\"http://www.php.net/manual/en/function.ssh2-sftp.php\" target=\"_blank\">SSH2 module of PHP</a> is not installed.<br /><br /> The administrator of this website should install this module. Installation instructions are given on <a href=\"http://www.php.net/manual/en/ssh2.installation.php\" target=\"_blank\">php.net</a><br />";
$net2ftp_messages["Unable to connect to FTP server <b>%1\$s</b> on port <b>%2\$s</b>.<br /><br />Are you sure this is the address of the FTP server? This is often different from that of the HTTP (web) server. Please contact your ISP helpdesk or system administrator for help.<br />"] = "Nem lehet kapcsol�dni az FTP szerverre <b>%1\$s</b> a port <b>%2\$s</b>.<br /><br />Biztos vagy benne, hogy ez a c�m az FTP szerver? Ez gyakran elt�r a HTTP (web) szervert. K�rj�k, l�pjen kapcsolatba az ISP helpdesk vagy a rendszergazda seg�ts�g�t.<br />";
$net2ftp_messages["Unable to login to FTP server <b>%1\$s</b> with username <b>%2\$s</b>.<br /><br />Are you sure your username and password are correct? Please contact your ISP helpdesk or system administrator for help.<br />"] = "Nem siker�lt bejelentkezni az FTP-kiszolg�l� <b>%1\$s</b> a felhaszn�l�neveddel <b>%2\$s</b>.<br /><br />Biztos vagy benne, hogy a felhaszn�l�n�v �s jelsz� helyes? K�rj�k, l�pjen kapcsolatba az ISP helpdesk vagy a rendszergazda seg�ts�g�t.<br />";
$net2ftp_messages["Unable to switch to the passive mode on FTP server <b>%1\$s</b>."] = "Nem siker�lt v�ltani a passz�v m�dban az FTP szerveren <b>%1\$s</b>.";

// ftp_openconnection2()
$net2ftp_messages["Unable to connect to the second (target) FTP server <b>%1\$s</b> on port <b>%2\$s</b>.<br /><br />Are you sure this is the address of the second (target) FTP server? This is often different from that of the HTTP (web) server. Please contact your ISP helpdesk or system administrator for help.<br />"] = "Nem siker�lt kapcsol�dni a m�sodik (c�l) FTP szerver <b>%1\$s</b> a port <b>%2\$s</b>.<br /><br />Biztos vagy benne, hogy ez a c�me a m�sodik (c�l) FTP szerver? Ez gyakran elt�r a HTTP (web) szervert. K�rj�k, l�pjen kapcsolatba az ISP helpdesk vagy a rendszergazda seg�ts�g�t.<br />";
$net2ftp_messages["Unable to login to the second (target) FTP server <b>%1\$s</b> with username <b>%2\$s</b>.<br /><br />Are you sure your username and password are correct? Please contact your ISP helpdesk or system administrator for help.<br />"] = "Nem siker�lt bejelentkezni a m�sodik (c�l) FTP szerver <b>%1\$s</b> a felhaszn�l�neveddel <b>%2\$s</b>.<br /><br />Biztos vagy benne, hogy a felhaszn�l�n�v �s jelsz� helyes? K�rj�k, l�pjen kapcsolatba az ISP helpdesk vagy a rendszergazda seg�ts�g�t.<br />";
$net2ftp_messages["Unable to switch to the passive mode on the second (target) FTP server <b>%1\$s</b>."] = "Nem siker�lt v�ltani a passz�v m�dban a m�sodik (c�l) FTP szerver <b>%1\$s</b>.";

// ftp_myrename()
$net2ftp_messages["Unable to rename directory or file <b>%1\$s</b> into <b>%2\$s</b>"] = "Nem siker�lt �tnevezni k�nyvt�r vagy f�jl <b>%1\$s</b> ba <b>%2\$s</b>";

// ftp_mychmod()
$net2ftp_messages["Unable to execute site command <b>%1\$s</b>. Note that the CHMOD command is only available on Unix FTP servers, not on Windows FTP servers."] = "Nem lehet v�grehajtani a parancsot site <b>%1\$s</b>. Ne feledje, hogy a chmod parancs csak Unix FTP szerverek, nem pedig a Windows FTP szervereken.";
$net2ftp_messages["Directory <b>%1\$s</b> successfully chmodded to <b>%2\$s</b>"] = "K�nyvt�r <b>%1\$s</b> sikeresen chmodded a <b>%2\$s</b>";
$net2ftp_messages["Processing entries within directory <b>%1\$s</b>:"] = "Feldolgoz�s bejegyz�sek bel�l k�nyvt�rban <b>%1\$s</b>:";
$net2ftp_messages["File <b>%1\$s</b> was successfully chmodded to <b>%2\$s</b>"] = "F�jl <b>%1\$s</b> sikeresen chmodded, hogy <b>%2\$s</b>";
$net2ftp_messages["All the selected directories and files have been processed."] = "Az �sszes kiv�lasztott k�nyvt�rak �s f�jlok ker�ltek feldolgoz�sra.";

// ftp_rmdir2()
$net2ftp_messages["Unable to delete the directory <b>%1\$s</b>"] = "Nem siker�lt t�r�lni a k�nyvt�rat <b>%1\$s</b>";

// ftp_delete2()
$net2ftp_messages["Unable to delete the file <b>%1\$s</b>"] = "Nem siker�lt t�r�lni a f�jlt<b>%1\$s</b>";

// ftp_newdirectory()
$net2ftp_messages["Unable to create the directory <b>%1\$s</b>"] = "Nem siker�lt l�trehozni a k�nyvt�rat <b>%1\$s</b>";

// ftp_readfile()
$net2ftp_messages["Unable to create the temporary file"] = "Nem siker�lt l�trehozni az ideiglenes f�jlt";
$net2ftp_messages["Unable to get the file <b>%1\$s</b> from the FTP server and to save it as temporary file <b>%2\$s</b>.<br />Check the permissions of the %3\$s directory.<br />"] = "Nem siker�lt beolvasni a f�jlt <b>%1\$s</b> Az FTP-kiszolg�l�, �s mentse el az ideiglenes f�jlt <b>%2\$s</b>.<br />Ellen�rizze a jogosults�gait a %3\$s k�nyvt�rat.<br />";
$net2ftp_messages["Unable to open the temporary file. Check the permissions of the %1\$s directory."] = "Nem siker�lt megnyitni az ideiglenes f�jlt. Ellen�rizze a jogosults�gait a %1\$s k�nyvt�rat.";
$net2ftp_messages["Unable to read the temporary file"] = "Nem siker�lt beolvasni az ideiglenes f�jlt";
$net2ftp_messages["Unable to close the handle of the temporary file"] = "Nem siker�lt bez�rni a kilincset az ideiglenes f�jl";
$net2ftp_messages["Unable to delete the temporary file"] = "Nem siker�lt t�r�lni az ideiglenes f�jlt";

// ftp_writefile()
$net2ftp_messages["Unable to create the temporary file. Check the permissions of the %1\$s directory."] = "Nem siker�lt l�trehozni az ideiglenes f�jlt. Ellen�rizze a jogosults�gait a%1\$s k�nyvt�rat.";
$net2ftp_messages["Unable to open the temporary file. Check the permissions of the %1\$s directory."] = "Nem siker�lt megnyitni az ideiglenes f�jlt. Ellen�rizze a jogosults�gait a %1\$s k�nyvt�rat.";
$net2ftp_messages["Unable to write the string to the temporary file <b>%1\$s</b>.<br />Check the permissions of the %2\$s directory."] = "Nem lehet �rni a h�r az ideiglenes f�jl <b>%1\$s</b>.<br />Ellen�rizze a jogosults�gait a %2\$s k�nyvt�rat.";
$net2ftp_messages["Unable to close the handle of the temporary file"] = "Nem siker�lt bez�rni a kilincset az ideiglenes f�jl";
$net2ftp_messages["Unable to put the file <b>%1\$s</b> on the FTP server.<br />You may not have write permissions on the directory."] = "Nem siker�lt tenni a f�jlt <b>%1\$s</b>az FTP-kiszolg�l�ra.<br />Lehet, hogy nincs �r�si jogosults�ga a k�nyvt�rban.";
$net2ftp_messages["Unable to delete the temporary file"] = "Nem siker�lt t�r�lni az ideiglenes f�jlt";

// ftp_copymovedelete()
$net2ftp_messages["Processing directory <b>%1\$s</b>"] = "Feldolgoz�s k�nyvt�r <b>%1\$s</b>";
$net2ftp_messages["The target directory <b>%1\$s</b> is the same as or a subdirectory of the source directory <b>%2\$s</b>, so this directory will be skipped"] = "A c�l k�nyvt�r <b>%1\$s</b> megegyezik, vagy egy alk�nyvt�r a forr�s k�nyvt�r<b>%2\$s</b>, �gy ez a k�nyvt�r kimarad";
$net2ftp_messages["The directory <b>%1\$s</b> contains a banned keyword, so this directory will be skipped"] = "A k�nyvt�r <b>%1\$s</b> tartalmaz egy tiltott kulcssz�t, �gy ez a k�nyvt�r kimarad";
$net2ftp_messages["The directory <b>%1\$s</b> contains a banned keyword, aborting the move"] = "A k�nyvt�r <b>%1\$s</b> tartalmaz egy tiltott kulcssz�t, megszak�tva a l�p�s";
$net2ftp_messages["Unable to create the subdirectory <b>%1\$s</b>. It may already exist. Continuing the copy/move process..."] = "Nem siker�lt l�trehozni a alk�nyvt�rba <b>%1\$s</b>. Tal�n m�r l�teznek. Folytatva a m�sol�s / �thelyez�s folyamata...";
$net2ftp_messages["Created target subdirectory <b>%1\$s</b>"] = "Created c�l alk�nyvt�r <b>%1\$s</b>";
$net2ftp_messages["The directory <b>%1\$s</b> could not be selected, so this directory will be skipped"] = "A k�nyvt�r <b>%1\$s</b> nem lehet kiv�lasztani, �gy ez a k�nyvt�r kimarad";
$net2ftp_messages["Unable to delete the subdirectory <b>%1\$s</b> - it may not be empty"] = "Nem siker�lt t�r�lni a alk�nyvt�rba <b>%1\$s</b> - ez nem lehet �res";
$net2ftp_messages["Deleted subdirectory <b>%1\$s</b>"] = "T�r�lt alk�nyvt�r <b>%1\$s</b>";
$net2ftp_messages["Deleted subdirectory <b>%1\$s</b>"] = "T�r�lt alk�nyvt�r <b>%1\$s</b>";
$net2ftp_messages["Unable to move the directory <b>%1\$s</b>"] = "Unable to move the directory <b>%1\$s</b>";
$net2ftp_messages["Moved directory <b>%1\$s</b>"] = "Moved directory <b>%1\$s</b>";
$net2ftp_messages["Processing of directory <b>%1\$s</b> completed"] = "T�r�lt alk�nyvt�r <b>%1\$s</b> befejezve";
$net2ftp_messages["The target for file <b>%1\$s</b> is the same as the source, so this file will be skipped"] = "A c�l az, f�jl <b>%1\$s</b> ugyanaz, mint a forr�s, ez�rt ez a f�jl kihagy�sra";
$net2ftp_messages["The file <b>%1\$s</b> contains a banned keyword, so this file will be skipped"] = "A f�jl <b>%1\$s</b> tartalmaz egy tiltott kulcssz�t, �gy ez a f�jl kihagy�sra";
$net2ftp_messages["The file <b>%1\$s</b> contains a banned keyword, aborting the move"] = "A f�jl <b>%1\$s</b> tartalmaz egy tiltott kulcssz�t, megszak�tva a l�p�s";
$net2ftp_messages["The file <b>%1\$s</b> is too big to be copied, so this file will be skipped"] = "A f�jl <b>%1\$s</b> t�l nagy ahhoz, hogy m�solhat�, �gy ez a f�jl kihagy�sra";
$net2ftp_messages["The file <b>%1\$s</b> is too big to be moved, aborting the move"] = "A f�jl <b>%1\$s</b> t�l nagy ahhoz, hogy mozgatni, megszak�tva a l�p�s";
$net2ftp_messages["Unable to copy the file <b>%1\$s</b>"] = "Nem lehet m�solni a f�jlt <b>%1\$s</b>";
$net2ftp_messages["Copied file <b>%1\$s</b>"] = "M�solhat�k f�jlt <b>%1\$s</b>";
$net2ftp_messages["Unable to move the file <b>%1\$s</b>, aborting the move"] = "Nem siker�lt �thelyezni a f�jlt <b>%1\$s</b>, megszak�tva a l�p�s";
$net2ftp_messages["Unable to move the file <b>%1\$s</b>"] = "Unable to move the file <b>%1\$s</b>";
$net2ftp_messages["Moved file <b>%1\$s</b>"] = "�thelyzett f�jl <b>%1\$s</b>";
$net2ftp_messages["Unable to delete the file <b>%1\$s</b>"] = "Nem siker�lt t�r�lni a f�jlt<b>%1\$s</b>";
$net2ftp_messages["Deleted file <b>%1\$s</b>"] = "T�r�lt f�jl <b>%1\$s</b>";
$net2ftp_messages["All the selected directories and files have been processed."] = "Az �sszes kiv�lasztott k�nyvt�rak �s f�jlok ker�ltek feldolgoz�sra.";

// ftp_processfiles()

// ftp_getfile()
$net2ftp_messages["Unable to copy the remote file <b>%1\$s</b> to the local file using FTP mode <b>%2\$s</b>"] = "Nem lehet m�solni a t�voli f�jl <b>%1\$s</b> a helyi f�jl FTP-m�dban <b>%2\$s</b>";
$net2ftp_messages["Unable to delete file <b>%1\$s</b>"] = "Nem siker�lt t�r�lni a f�jlt <b>%1\$s</b>";

// ftp_putfile()
$net2ftp_messages["The file is too big to be transferred"] = "A f�jl t�l nagy ahhoz, hogy �t";
$net2ftp_messages["Daily limit reached: the file <b>%1\$s</b> will not be transferred"] = "Napi El�rte: a f�jl <b>%1\$s</b> nem ker�lnek �t";
$net2ftp_messages["Unable to copy the local file to the remote file <b>%1\$s</b> using FTP mode <b>%2\$s</b>"] = "Nem lehet m�solni a helyi f�jlt a t�voli f�jl <b>%1\$s</b> az FTP m�d <b>%2\$s</b>";
$net2ftp_messages["Unable to delete the local file"] = "Nem siker�lt t�r�lni a helyi f�jl";

// ftp_downloadfile()
$net2ftp_messages["Unable to delete the temporary file"] = "Nem siker�lt t�r�lni az ideiglenes f�jlt";
$net2ftp_messages["Unable to send the file to the browser"] = "Nem siker�lt elk�ldeni a f�jlt a b�ng�sz�";

// ftp_zip()
$net2ftp_messages["Unable to create the temporary file"] = "Nem siker�lt l�trehozni az ideiglenes f�jlt";
$net2ftp_messages["The zip file has been saved on the FTP server as <b>%1\$s</b>"] = "A zip f�jl mentett az FTP szerverre <b>%1\$s</b>";
$net2ftp_messages["Requested files"] = "K�rt f�jlok";

$net2ftp_messages["Dear,"] = "Kedves,";
$net2ftp_messages["Someone has requested the files in attachment to be sent to this email account (%1\$s)."] = "Valaki azt k�rte a csatolt f�jlokat k�ldeni az e-mail fi�k (%1\$s).";
$net2ftp_messages["If you know nothing about this or if you don't trust that person, please delete this email without opening the Zip file in attachment."] = "Ha nem tudsz semmit err�l, vagy ha nem b�zol a szem�ly, t�r�lje az e-mail megnyit�sa n�lk�l a zip f�jlt mell�kletk�nt.";
$net2ftp_messages["Note that if you don't open the Zip file, the files inside cannot harm your computer."] = "Ne feledj�k, hogy ha nem tudja megnyitni a zip f�jlt, a f�jlok belsej�ben ne k�ros�tsa a sz�m�t�g�pet.";
$net2ftp_messages["Information about the sender: "] = "Inform�ci� a felad�nak: ";
$net2ftp_messages["IP address: "] = "IP address: ";
$net2ftp_messages["Time of sending: "] = "K�ld�s id�pontja: ";
$net2ftp_messages["Sent via the net2ftp application installed on this website: "] = "Kereszt�l k�ld�tt net2ftp alkalmaz�s telep�tve van ezen a honlapon: ";
$net2ftp_messages["Webmaster's email: "] = "Webmaster e-mail c�me: ";
$net2ftp_messages["Message of the sender: "] = "�zenet a felad�nak: ";
$net2ftp_messages["net2ftp is free software, released under the GNU/GPL license. For more information, go to http://www.net2ftp.com."] = "net2ftp szabad szoftver, megjelent a GNU / GPL licensz �rv�nyes. Tov�bbi inform�ci�k�rt l�togasson el ahttp://www.net2ftp.com.";

$net2ftp_messages["The zip file has been sent to <b>%1\$s</b>."] = "A zip f�jl nem �rkezett <b>%1\$s</b>.";

// acceptFiles()
$net2ftp_messages["File <b>%1\$s</b> is too big. This file will not be uploaded."] = "F�jl <b>%1\$s</b> t�l nagy. Ez a f�jl nem lesz felt�ltve.";
$net2ftp_messages["File <b>%1\$s</b> is contains a banned keyword. This file will not be uploaded."] = "F�jl <b>%1\$s</b> nem tartalmaz egy tiltott kulcssz�t. Ez a f�jl nem lesz felt�ltve.";
$net2ftp_messages["Could not generate a temporary file."] = "Nem siker�lt l�trehozni egy ideiglenes f�jlt.";
$net2ftp_messages["File <b>%1\$s</b> could not be moved"] = "F�jl <b>%1\$s</b> volna nem lehet mozgatni";
$net2ftp_messages["File <b>%1\$s</b> is OK"] = "F�jl <b>%1\$s</b> rendben van";
$net2ftp_messages["Unable to move the uploaded file to the temp directory.<br /><br />The administrator of this website has to <b>chmod 777</b> the /temp directory of net2ftp."] = "Nem tud mozogni a felt�lt�tt f�jlt a Temp k�nyvt�rba.<br /><br />A rendszergazda ezen a honlapon, hogy <b>chmod 777</b> a / temp c�mjegyz�ke net2ftp.";
$net2ftp_messages["You did not provide any file to upload."] = "�n nem adott ki a felt�ltend� f�jlt.";

// ftp_transferfiles()
$net2ftp_messages["File <b>%1\$s</b> could not be transferred to the FTP server"] = "F�jl <b>%1\$s</b> nem lehetett �t az FTP szerver";
$net2ftp_messages["File <b>%1\$s</b> has been transferred to the FTP server using FTP mode <b>%2\$s</b>"] = "F�jl <b>%1\$s</b> �tker�lt az FTP szerver az FTP m�d <b>%2\$s</b>";
$net2ftp_messages["Transferring files to the FTP server"] = "F�jlok �tvitele az FTP szerverre";

// ftp_unziptransferfiles()
$net2ftp_messages["Processing archive nr %1\$s: <b>%2\$s</b>"] = "Feldolgoz�s arch�vum nr %1\$s: <b>%2\$s</b>";
$net2ftp_messages["Archive <b>%1\$s</b> was not processed because its filename extension was not recognized. Only zip, tar, tgz and gz archives are supported at the moment."] = "Arh�v <b>%1\$s</b> nem volt feldolgozni, mert a f�jl kiterjeszt�se nem volt ismert. Csak a zip, tar, tgz, �s gz arch�vum t�mogatott abban a pillanatban.";
$net2ftp_messages["Unable to extract the files and directories from the archive"] = "K�ptelen-hoz kivonat a f�jlokat �s k�nyvt�rakat az arch�vumb�l";
$net2ftp_messages["Archive contains filenames with ../ or ..\\ - aborting the extraction"] = "Arch�vum f�jlnevek a ../ vagy ..\\ - megszak�tva a kitermel�si";
$net2ftp_messages["Could not unzip entry %1\$s (error code %2\$s)"] = "Could not unzip entry %1\$s (error code %2\$s)";
$net2ftp_messages["Created directory %1\$s"] = "K�nyvt�r l�trehoz�sa %1\$s";
$net2ftp_messages["Could not create directory %1\$s"] = "Nem siker�lt l�trehozni a k�nyvt�rat %1\$s";
$net2ftp_messages["Copied file %1\$s"] = "M�solhat�k f�jlt %1\$s";
$net2ftp_messages["Could not copy file %1\$s"] = "Nem lehet m�solni file %1\$s";
$net2ftp_messages["Unable to delete the temporary directory"] = "Nem siker�lt t�r�lni az ideiglenes k�nyvt�r";
$net2ftp_messages["Unable to delete the temporary file %1\$s"] = "Nem siker�lt t�r�lni az ideiglenes f�jlt %1\$s";

// ftp_mysite()
$net2ftp_messages["Unable to execute site command <b>%1\$s</b>"] = "Nem lehet v�grehajtani a parancsot site <b>%1\$s</b>";

// shutdown()
$net2ftp_messages["Your task was stopped"] = "Az �n feladata az volt, abbahagyta";
$net2ftp_messages["The task you wanted to perform with net2ftp took more time than the allowed %1\$s seconds, and therefor that task was stopped."] = "A feladat akart�l v�grehajthat� net2ftp t�bb id�t, mint a megengedett %1\$s m�sodperc, �s ennek feladata az volt, hogy meg�llt.";
$net2ftp_messages["This time limit guarantees the fair use of the web server for everyone."] = "Ez a hat�rid� garant�lja a tisztess�ges felhaszn�l�sa a webszerver mindenki sz�m�ra.";
$net2ftp_messages["Try to split your task in smaller tasks: restrict your selection of files, and omit the biggest files."] = "Pr�b�lja meg osztott a feladatot kisebb feladatok: korl�tozz�k a kijel�lt f�jlok, �s ki lehet hagyni a legnagyobb f�jl.";
$net2ftp_messages["If you really need net2ftp to be able to handle big tasks which take a long time, consider installing net2ftp on your own server."] = "Ha t�nyleg sz�ks�g van net2ftp, hogy k�pes legyen kezelni a nagy feladatokat, amelyek hossz� id�t vesz ig�nybe, helyezzen �zembe net2ftp saj�t szerveren.";

// SendMail()
$net2ftp_messages["You did not provide any text to send by email!"] = "�n nem adott sz�veget k�ldeni e-mailben!";
$net2ftp_messages["You did not supply a From address."] = "�n nem a szolg�ltat�s Felad� c�m.";
$net2ftp_messages["You did not supply a To address."] = "Te nem a szolg�ltat�s foglalkozzanak.";
$net2ftp_messages["Due to technical problems the email to <b>%1\$s</b> could not be sent."] = "M�szaki probl�m�k miatt az e-mail <b>%1\$s</b> nem lehet elk�ldeni.";

// tempdir2()
$net2ftp_messages["Unable to create a temporary directory because (unvalid parent directory)"] = "Unable to create a temporary directory because (unvalid parent directory)";
$net2ftp_messages["Unable to create a temporary directory because (parent directory is not writeable)"] = "Unable to create a temporary directory because (parent directory is not writeable)";
$net2ftp_messages["Unable to create a temporary directory (too many tries)"] = "Unable to create a temporary directory (too many tries)";

// -------------------------------------------------------------------------
// /includes/logging.inc.php
// -------------------------------------------------------------------------
// logAccess(), logLogin(), logError()
$net2ftp_messages["Unable to execute the SQL query."] = "Nem lehet v�grehajtani az SQL lek�rdez�st.";
$net2ftp_messages["Unable to open the system log."] = "Nem siker�lt megnyitni a rendszer napl�t.";
$net2ftp_messages["Unable to write a message to the system log."] = "Nem lehet �rni egy �zenetet a rendszer napl�t.";

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
$net2ftp_messages["Please enter your username and password for FTP server "] = "K�rj�k, adja meg felhaszn�l�nev�t �s jelszav�t az FTP-kiszolg�l� ";
$net2ftp_messages["You did not fill in your login information in the popup window.<br />Click on \"Go to the login page\" below."] = "�n nem adja meg a szem�lyes bejelentkez�si adatait a felugr� ablakban.<br />Kattintson \"Menjen a bejelentkez� oldalra\"lent.";
$net2ftp_messages["Access to the net2ftp Admin panel is disabled, because no password has been set in the file settings.inc.php. Enter a password in that file, and reload this page."] = "Hozz�f�r�s a net2ftp Admin panel le van tiltva, mert nincs jelsz� �llap�tottak meg a f�jlban settings.inc.php. �rja be a jelsz�t az adott f�jlt, �s �jra t�lteni az oldalt.";
$net2ftp_messages["Please enter your Admin username and password"] = "K�rj�k, adja meg az Adminisztr�tor felhaszn�l�nev�t �s jelszav�t "; 
$net2ftp_messages["You did not fill in your login information in the popup window.<br />Click on \"Go to the login page\" below."] = "�n nem adja meg a szem�lyes bejelentkez�si adatait a felugr� ablakban.<br />Kattintson \"Menjen a bejelentkez� oldalra\"lent.";
$net2ftp_messages["Wrong username or password for the net2ftp Admin panel. The username and password can be set in the file settings.inc.php."] = "Hib�s a felhaszn�l� n�v, vagy jelsz� a net2ftp Admin panel. A felhaszn�l�n�v �s a jelsz� lehet be�ll�tani a f�jl settings.inc.php.";


// -------------------------------------------------------------------------
// /skins/skins.inc.php
// -------------------------------------------------------------------------
$net2ftp_messages["Blue"] = "K�k";
$net2ftp_messages["Grey"] = "Sz�rke";
$net2ftp_messages["Black"] = "Feket";
$net2ftp_messages["Yellow"] = "S�rga";
$net2ftp_messages["Pastel"] = "Pasztell";

// getMime()
$net2ftp_messages["Directory"] = "K�nyvt�r";
$net2ftp_messages["Symlink"] = "Symlink";
$net2ftp_messages["ASP script"] = "ASP script";
$net2ftp_messages["Cascading Style Sheet"] = "Cascading Style Sheet";
$net2ftp_messages["HTML file"] = "HTML f�jl";
$net2ftp_messages["Java source file"] = "Java forr�sf�jl";
$net2ftp_messages["JavaScript file"] = "JavaScript file";
$net2ftp_messages["PHP Source"] = "PHP Source";
$net2ftp_messages["PHP script"] = "PHP script";
$net2ftp_messages["Text file"] = "Sz�veges f�jl";
$net2ftp_messages["Bitmap file"] = "Bitmap f�jl";
$net2ftp_messages["GIF file"] = "GIF f�jl";
$net2ftp_messages["JPEG file"] = "JPEG f�jl";
$net2ftp_messages["PNG file"] = "PNG f�jl";
$net2ftp_messages["TIF file"] = "TIF f�jl";
$net2ftp_messages["GIMP file"] = "GIMP f�jl";
$net2ftp_messages["Executable"] = "Kivihet�";
$net2ftp_messages["Shell script"] = "Shell script";
$net2ftp_messages["MS Office - Word document"] = "MS Office - Word dokumentum";
$net2ftp_messages["MS Office - Excel spreadsheet"] = "MS Office - Excel t�bl�zat";
$net2ftp_messages["MS Office - PowerPoint presentation"] = "MS Office - PowerPoint prezent�ci�";
$net2ftp_messages["MS Office - Access database"] = "MS Office - Access adatb�zis";
$net2ftp_messages["MS Office - Visio drawing"] = "MS Office - Visio rajz";
$net2ftp_messages["MS Office - Project file"] = "MS Office - Project f�jl";
$net2ftp_messages["OpenOffice - Writer 6.0 document"] = "OpenOffice - Writer 6.0 dokumentum";
$net2ftp_messages["OpenOffice - Writer 6.0 template"] = "OpenOffice - Writer 6.0 sablon";
$net2ftp_messages["OpenOffice - Calc 6.0 spreadsheet"] = "OpenOffice - Calc 6.0 t�bl�zat";
$net2ftp_messages["OpenOffice - Calc 6.0 template"] = "OpenOffice - Calc 6.0 sablon";
$net2ftp_messages["OpenOffice - Draw 6.0 document"] = "OpenOffice - Draw 6.0 dokumentum";
$net2ftp_messages["OpenOffice - Draw 6.0 template"] = "OpenOffice - Draw 6.0 sablon";
$net2ftp_messages["OpenOffice - Impress 6.0 presentation"] = "OpenOffice - Impress 6.0 prezent�ci�";
$net2ftp_messages["OpenOffice - Impress 6.0 template"] = "OpenOffice - Impress 6.0 sablon";
$net2ftp_messages["OpenOffice - Writer 6.0 global document"] = "OpenOffice - Writer 6.0 nemzetk�zi dokumentum";
$net2ftp_messages["OpenOffice - Math 6.0 document"] = "OpenOffice - Math 6.0 dokumentum";
$net2ftp_messages["StarOffice - StarWriter 5.x document"] = "StarOffice - StarWriter 5.x dokumentum";
$net2ftp_messages["StarOffice - StarWriter 5.x global document"] = "StarOffice - StarWriter 5.x nemzetk�zi dokumentum";
$net2ftp_messages["StarOffice - StarCalc 5.x spreadsheet"] = "StarOffice - StarCalc 5.x t�bl�zat";
$net2ftp_messages["StarOffice - StarDraw 5.x document"] = "StarOffice - StarDraw 5.x nemzetk�zi dokumentum";
$net2ftp_messages["StarOffice - StarImpress 5.x presentation"] = "StarOffice - StarImpress 5.x prezent�ci�";
$net2ftp_messages["StarOffice - StarImpress Packed 5.x file"] = "StarOffice - StarImpress Packed 5.x f�jl";
$net2ftp_messages["StarOffice - StarMath 5.x document"] = "StarOffice - StarMath 5.x nemzetk�zi dokumentum";
$net2ftp_messages["StarOffice - StarChart 5.x document"] = "StarOffice - StarChart 5.x nemzetk�zi dokumentum";
$net2ftp_messages["StarOffice - StarMail 5.x mail file"] = "StarOffice - StarMail 5.x e-mail f�jl";
$net2ftp_messages["Adobe Acrobat document"] = "Adobe Acrobat dokumentum";
$net2ftp_messages["ARC archive"] = "ARC arch�vuma";
$net2ftp_messages["ARJ archive"] = "ARJ arch�vuma";
$net2ftp_messages["RPM"] = "RPM";
$net2ftp_messages["GZ archive"] = "GZ arch�vuma";
$net2ftp_messages["TAR archive"] = "TAR arch�vuma";
$net2ftp_messages["Zip archive"] = "Zip arch�vuma";
$net2ftp_messages["MOV movie file"] = "MOV filmf�jlt";
$net2ftp_messages["MPEG movie file"] = "MPEG filmf�jlt";
$net2ftp_messages["Real movie file"] = "Real filmf�jlt";
$net2ftp_messages["Quicktime movie file"] = "Quicktime filmf�jlt";
$net2ftp_messages["Shockwave flash file"] = "Shockwave flash f�jl";
$net2ftp_messages["Shockwave file"] = "Shockwave f�jl";
$net2ftp_messages["WAV sound file"] = "WAV hangf�jlra";
$net2ftp_messages["Font file"] = "Font f�jl";
$net2ftp_messages["%1\$s File"] = "%1\$s F�jl";
$net2ftp_messages["File"] = "F�jl";

// getAction()
$net2ftp_messages["Back"] = "Vissza";
$net2ftp_messages["Submit"] = "Tov�bb";
$net2ftp_messages["Refresh"] = "Friss�t�s";
$net2ftp_messages["Details"] = "R�szletek";
$net2ftp_messages["Icons"] = "Ikonok";
$net2ftp_messages["List"] = "Lista";
$net2ftp_messages["Logout"] = "Kil�p�s";
$net2ftp_messages["Help"] = "S�g�";
$net2ftp_messages["Bookmark"] = "K�nyvjelz�";
$net2ftp_messages["Save"] = "Ment�s";
$net2ftp_messages["Default"] = "Alap�rtelmezett";


// -------------------------------------------------------------------------
// /skins/[skin]/header.template.php and footer.template.php
// -------------------------------------------------------------------------
$net2ftp_messages["Help Guide"] = "Seg�ts�g �tmutat� ";
$net2ftp_messages["Forums"] = "F�rumok";
$net2ftp_messages["License"] = "Enged�ly";
$net2ftp_messages["Powered by"] = "K�sz�tett";
$net2ftp_messages["You are now taken to the net2ftp forums. These forums are for net2ftp related topics only - not for generic webhosting questions."] = "�n most m�r bevitt�k a net2ftp f�rumokon. E f�rumok sz�m�ra net2ftp kapcsolatos t�m�k csak - nem a generikus webhosting k�rd�sek.";
$net2ftp_messages["Standard"] = "Standard";
$net2ftp_messages["Mobile"] = "Mobile";

// -------------------------------------------------------------------------
// Admin module
if ($net2ftp_globals["state"] == "admin") {
// -------------------------------------------------------------------------

// /modules/admin/admin.inc.php
$net2ftp_messages["Admin functions"] = "Admin funkci�k";

// /skins/[skin]/admin1.template.php
$net2ftp_messages["Version information"] = "Verzi� inform�ci�";
$net2ftp_messages["This version of net2ftp is up-to-date."] = "Ez a v�ltozat a net2ftp naprak�sz.";
$net2ftp_messages["The latest version information could not be retrieved from the net2ftp.com server. Check the security settings of your browser, which may prevent the loading of a small file from the net2ftp.com server."] = "Ez a v�ltozat a net2ftp is up-to-date.";
$net2ftp_messages["Logging"] = "Napl�z�s";
$net2ftp_messages["Date from:"] = "Id�pontot:";
$net2ftp_messages["to:"] = "to:";
$net2ftp_messages["Empty logs"] = "�res napl�k";
$net2ftp_messages["View logs"] = "Napl�k megtekint�se";
$net2ftp_messages["Go"] = "Go";
$net2ftp_messages["Setup MySQL tables"] = "Setup MySQL t�bl�k";
$net2ftp_messages["Create the MySQL database tables"] = "L�tre a MySQL adatb�zis-t�bl�k";

} // end admin

// -------------------------------------------------------------------------
// Admin_createtables module
if ($net2ftp_globals["state"] == "admin_createtables") {
// -------------------------------------------------------------------------

// /modules/admin_createtables/admin_createtables.inc.php
$net2ftp_messages["Admin functions"] = "Admin funkci�k";
$net2ftp_messages["The handle of file %1\$s could not be opened."] = "A f�jl megfogva %1\$s nem lehet megnyitni.";
$net2ftp_messages["The file %1\$s could not be opened."] = "A f�jl %1\$s nem lehet megnyitni.";
$net2ftp_messages["The handle of file %1\$s could not be closed."] = "A f�jl megfogva %1\$s nem lehet bez�rni.";
$net2ftp_messages["The connection to the server <b>%1\$s</b> could not be set up. Please check the database settings you've entered."] = "A kapcsolat a kiszolg�l�val <b>%1\$s</b> nem lehetett l�trehozni. K�rj�k, ellen�rizze az adatb�zis be�ll�t�sokat l�pett.";
$net2ftp_messages["Unable to select the database <b>%1\$s</b>."] = "Nem v�laszthatja az adatb�zis <b>%1\$s</b>.";
$net2ftp_messages["The SQL query nr <b>%1\$s</b> could not be executed."] = "Az SQL lek�rdez�s nr <b>%1\$s</b> is nem hajthat� v�gre.";
$net2ftp_messages["The SQL query nr <b>%1\$s</b> was executed successfully."] = "Az SQL lek�rdez�snr <b>%1\$s</b> hajtott�k v�gre sikeresen.";

// /skins/[skin]/admin_createtables1.template.php
$net2ftp_messages["Please enter your MySQL settings:"] = "K�rj�k, adja meg a MySQL be�ll�t�sok:";
$net2ftp_messages["MySQL username"] = "MySQL felhaszn�l�nev�t";
$net2ftp_messages["MySQL password"] = "MySQL jelszav�t";
$net2ftp_messages["MySQL database"] = "MySQL adatb�zis";
$net2ftp_messages["MySQL server"] = "MySQL szerver";
$net2ftp_messages["This SQL query is going to be executed:"] = "Ez az SQL-lek�rdez�s lesz v�gre:";
$net2ftp_messages["Execute"] = "V�grehajt";

// /skins/[skin]/admin_createtables2.template.php
$net2ftp_messages["Settings used:"] = "Be�ll�t�sok:";
$net2ftp_messages["MySQL password length"] = "A MySQL jelsz� hossza";
$net2ftp_messages["Results:"] = "Eredm�ny:";

} // end admin_createtables


// -------------------------------------------------------------------------
// Admin_viewlogs module
if ($net2ftp_globals["state"] == "admin_viewlogs") {
// -------------------------------------------------------------------------

// /modules/admin_createtables/admin_viewlogs.inc.php
$net2ftp_messages["Admin functions"] = "Admin funkci�k";
$net2ftp_messages["Unable to execute the SQL query <b>%1\$s</b>."] = "Nem lehet v�grehajtani az SQL lek�rdez�st <b>%1\$s</b>.";
$net2ftp_messages["No data"] = "Nincs adat";

} // end admin_viewlogs


// -------------------------------------------------------------------------
// Admin_emptylogs module
if ($net2ftp_globals["state"] == "admin_emptylogs") {
// -------------------------------------------------------------------------

// /modules/admin_createtables/admin_emptylogs.inc.php
$net2ftp_messages["Admin functions"] = "Admin funkci�k";
$net2ftp_messages["The table <b>%1\$s</b> was emptied successfully."] = "A t�bl�zat <b>%1\$s</b> ki�r�lt sikeresen.";
$net2ftp_messages["The table <b>%1\$s</b> could not be emptied."] = "A t�bl�zat <b>%1\$s</b> nem kell �r�teni.";
$net2ftp_messages["The table <b>%1\$s</b> was optimized successfully."] = "A t�bl�zat <b>%1\$s</b> sikeres volt optimaliz�lva.";
$net2ftp_messages["The table <b>%1\$s</b> could not be optimized."] = "A t�bl�zat <b>%1\$s</b> nem lehetne optimaliz�lni.";

} // end admin_emptylogs


// -------------------------------------------------------------------------
// Advanced module
if ($net2ftp_globals["state"] == "advanced") {
// -------------------------------------------------------------------------

// /modules/advanced/advanced.inc.php
$net2ftp_messages["Advanced functions"] = "Halad� funkci�k";

// /skins/[skin]/advanced1.template.php
$net2ftp_messages["Go"] = "Go";
$net2ftp_messages["Disabled"] = "Tiltva";
$net2ftp_messages["Advanced FTP functions"] = "Advanced FTP f�ggv�nyek";
$net2ftp_messages["Send arbitrary FTP commands to the FTP server"] = "K�ldj�n tetsz�leges FTP-parancsok az FTP-kiszolg�l�";
$net2ftp_messages["This function is available on PHP 5 only"] = "Ez a funkci� csak a PHP 5";
$net2ftp_messages["Troubleshooting functions"] = "Hibaelh�r�t�si feladatok";
$net2ftp_messages["Troubleshoot net2ftp on this webserver"] = "Elh�r�t�sa net2ftp ezen a webszerveren";
$net2ftp_messages["Troubleshoot an FTP server"] = "Elh�r�t�sa az FTP szerver";
$net2ftp_messages["Test the net2ftp list parsing rules"] = "Pr�b�lja ki a net2ftp lista parsing szab�lyok";
$net2ftp_messages["Translation functions"] = "Ford�t�si feladatok";
$net2ftp_messages["Introduction to the translation functions"] = "Bevezet�s a ford�t�si feladatok";
$net2ftp_messages["Extract messages to translate from code files"] = "Kivonat �zenetek leford�tani a k�dot k�p";
$net2ftp_messages["Check if there are new or obsolete messages"] = "Ellen�rizze, hogy vannak �j �zenetek vagy elavult";

$net2ftp_messages["Beta functions"] = "B�ta funkci�k";
$net2ftp_messages["Send a site command to the FTP server"] = "K�ldje el egy webhely parancsot az FTP szerver";
$net2ftp_messages["Apache: password-protect a directory, create custom error pages"] = "Apache: jelsz�val v�deni egy k�nyvt�rat, hozzon l�tre egy�ni lapokat";
$net2ftp_messages["MySQL: execute an SQL query"] = "MySQL: kiv�gez egy SQL lek�rdez�s";


// advanced()
$net2ftp_messages["The site command functions are not available on this webserver."] = "A weboldal ir�ny�t� funkci�k nem �llnak rendelkez�sre ezen a webszerveren.";
$net2ftp_messages["The Apache functions are not available on this webserver."] = "Az Apache funkci�k nem �rhet�k el ezen a webszerveren.";
$net2ftp_messages["The MySQL functions are not available on this webserver."] = "A MySQL f�ggv�nyek nem �rhet�k el ezen a webszerveren.";
$net2ftp_messages["Unexpected state2 string. Exiting."] = "V�ratlan state2 string. Kil�pett.";

} // end advanced


// -------------------------------------------------------------------------
// Advanced_ftpserver module
if ($net2ftp_globals["state"] == "advanced_ftpserver") {
// -------------------------------------------------------------------------

// /modules/advanced_ftpserver/advanced_ftpserver.inc.php
$net2ftp_messages["Troubleshoot an FTP server"] = "Elh�r�t�sa az FTP szerver";

// /skins/[skin]/advanced_ftpserver1.template.php
$net2ftp_messages["Connection settings:"] = "Kapcsolat be�ll�t�sai:";
$net2ftp_messages["FTP server"] = "FTP szerver";
$net2ftp_messages["FTP server port"] = "FTP szerver port";
$net2ftp_messages["Username"] = "Felhaszn�l�n�v";
$net2ftp_messages["Password"] = "Jelsz�";
$net2ftp_messages["Password length"] = "Jelsz� hossza";
$net2ftp_messages["Passive mode"] = "Passz�v m�d";
$net2ftp_messages["Directory"] = "K�nyvt�r";
$net2ftp_messages["Printing the result"] = "Nyomtat�s eredm�nye";

// /skins/[skin]/advanced_ftpserver2.template.php
$net2ftp_messages["Connecting to the FTP server: "] = "Kapcsol�d�s az FTP szerver: ";
$net2ftp_messages["Logging into the FTP server: "] = "Bejelentkezik az FTP szerver: ";
$net2ftp_messages["Setting the passive mode: "] = "A passz�v m�d be�ll�t�sa: ";
$net2ftp_messages["Getting the FTP server system type: "] = "Megismeri az FTP-kiszolg�l� rendszer t�pus�t: ";
$net2ftp_messages["Changing to the directory %1\$s: "] = "Megv�ltoztat�sa a k�nyvt�r %1\$s: ";
$net2ftp_messages["The directory from the FTP server is: %1\$s "] = "A k�nyvt�rat az FTP szerver: %1\$s ";
$net2ftp_messages["Getting the raw list of directories and files: "] = "Hogyan lehet a nyers list�ja k�nyvt�rakat �s f�jlokat: ";
$net2ftp_messages["Trying a second time to get the raw list of directories and files: "] = "Kipr�b�l�s m�sodik alkalommal kap a nyers list�t k�nyvt�rakat �s f�jlokat: ";
$net2ftp_messages["Closing the connection: "] = "A kapcsolat bez�r�sa: ";
$net2ftp_messages["Raw list of directories and files:"] = "Nyers list�ja k�nyvt�rakat �s f�jlokat:";
$net2ftp_messages["Parsed list of directories and files:"] = "Parsed list�ja k�nyvt�rakat �s f�jlokat:";

$net2ftp_messages["OK"] = "OK";
$net2ftp_messages["not OK"] = "nem OK";

} // end advanced_ftpserver


// -------------------------------------------------------------------------
// Advanced_parsing module
if ($net2ftp_globals["state"] == "advanced_parsing") {
// -------------------------------------------------------------------------

$net2ftp_messages["Test the net2ftp list parsing rules"] = "Pr�b�lja ki a net2ftp lista parsing szab�lyok";
$net2ftp_messages["Sample input"] = "Minta bemenet";
$net2ftp_messages["Parsed output"] = "�tvizsg�lt bemenet";

} // end advanced_parsing


// -------------------------------------------------------------------------
// Advanced_webserver module
if ($net2ftp_globals["state"] == "advanced_webserver") {
// -------------------------------------------------------------------------

$net2ftp_messages["Troubleshoot your net2ftp installation"] = "Elh�r�t�sa a telep�t� net2ftp";
$net2ftp_messages["Printing the result"] = "Nyomtat�s eredm�nye";

$net2ftp_messages["Checking if the FTP module of PHP is installed: "] = "Ellen�rz�se, ha az FTP modul a PHP telep�t�s�t: ";
$net2ftp_messages["yes"] = "igen";
$net2ftp_messages["no - please install it!"] = "nem - K�rj�k, telep�tse azt!";

$net2ftp_messages["Checking the permissions of the directory on the web server: a small file will be written to the /temp folder and then deleted."] = "Ellen�rzi a jogosults�gait a k�nyvt�rat a webszerveren: egy kis f�jlt kell �rni a / temp mapp�t, majd el kell hagyni.";
$net2ftp_messages["Creating filename: "] = "F�jln�v l�trehoz�sa: ";
$net2ftp_messages["OK. Filename: %1\$s"] = "OK. F�jlneve: %1\$s";
$net2ftp_messages["not OK"] = "nem OK";
$net2ftp_messages["OK"] = "OK";
$net2ftp_messages["not OK. Check the permissions of the %1\$s directory"] = "nem OK. Ellen�rizze a jogosults�gait a %1\$s k�nyvt�rat";
$net2ftp_messages["Opening the file in write mode: "] = "A f�jl �r�sra haszn�lni: ";
$net2ftp_messages["Writing some text to the file: "] = "�r�s n�h�ny sz�veget a f�jlba: ";
$net2ftp_messages["Closing the file: "] = "A f�jl bez�r�sa: ";
$net2ftp_messages["Deleting the file: "] = "T�rli a f�jlt: ";

$net2ftp_messages["Testing the FTP functions"] = "Tesztel�s az FTP f�ggv�nyek";
$net2ftp_messages["Connecting to a test FTP server: "] = "Csatlakoz�s teszt FTP szerver: ";
$net2ftp_messages["Connecting to the FTP server: "] = "Kapcsol�d�s az FTP szerver: ";
$net2ftp_messages["Logging into the FTP server: "] = "Bejelentkezik az FTP szerver: ";
$net2ftp_messages["Setting the passive mode: "] = "A passz�v m�d be�ll�t�sa: ";
$net2ftp_messages["Getting the FTP server system type: "] = "Megismeri az FTP-kiszolg�l� rendszer t�pus�t: ";
$net2ftp_messages["Changing to the directory %1\$s: "] = "Megv�ltoztat�sa a k�nyvt�r %1\$s: ";
$net2ftp_messages["The directory from the FTP server is: %1\$s "] = "A k�nyvt�rat az FTP szerver: %1\$s ";
$net2ftp_messages["Getting the raw list of directories and files: "] = "Hogyan lehet a nyers list�ja k�nyvt�rakat �s f�jlokat: ";
$net2ftp_messages["Trying a second time to get the raw list of directories and files: "] = "Kipr�b�l�s m�sodik alkalommal kap a nyers list�t k�nyvt�rakat �s f�jlokat: ";
$net2ftp_messages["Closing the connection: "] = "A kapcsolat bez�r�sa: ";
$net2ftp_messages["Raw list of directories and files:"] = "Nyers list�ja k�nyvt�rakat �s f�jlokat:";
$net2ftp_messages["Parsed list of directories and files:"] = "Parsed list�ja k�nyvt�rakat �s f�jlokat:";
$net2ftp_messages["OK"] = "OK";
$net2ftp_messages["not OK"] = "nem OK";

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
$net2ftp_messages["Note: when you will use this bookmark, a popup window will ask you for your username and password."] =  "Megjegyz�s:: mikor fogja haszn�lni ezt a k�nyvjelz�t, egy felugr� ablak fogja k�rni a felhaszn�l�nev�t �s jelszav�t.";

} // end bookmark


// -------------------------------------------------------------------------
// Browse module
if ($net2ftp_globals["state"] == "browse") {
// -------------------------------------------------------------------------

// /modules/browse/browse.inc.php
$net2ftp_messages["Choose a directory"] = "V�lassza ki a k�nyvt�rat";
$net2ftp_messages["Please wait..."] = "K�rem v�rjon...";

// browse()
$net2ftp_messages["Directories with names containing \' cannot be displayed correctly. They can only be deleted. Please go back and select another subdirectory."] = "K�nyvt�rak neveit tartalmaz� \' nem jelen�thet� meg helyesen. Csak akkor lehet hagyni. K�rj�k, l�pjen vissza �s v�lasszon m�sik alk�nyvt�r.";

$net2ftp_messages["Daily limit reached: you will not be able to transfer data"] = "Napi El�rte: nem lesz k�pes adat�tvitelre";
$net2ftp_messages["In order to guarantee the fair use of the web server for everyone, the data transfer volume and script execution time are limited per user, and per day. Once this limit is reached, you can still browse the FTP server but not transfer data to/from it."] = "Annak �rdek�ben, hogy biztos�tsa a tisztess�ges felhaszn�l�sa a webszerver mindenki sz�m�ra, az adat�tvitel volumene �s szkript v�grehajt�si idej�t korl�tozz�k egy felhaszn�l�, vagy naponta. Amint el�rik a limitet, akkor is b�ng�szni az FTP szerver, de nem adja �t az adatokat / t�le.";
$net2ftp_messages["If you need unlimited usage, please install net2ftp on your own web server."] = "Ha sz�ks�g van korl�tlan haszn�lata, k�rj�k telep�tse net2ftp saj�t webszerveren.";

// printdirfilelist()
// Keep this short, it must fit in a small button!
$net2ftp_messages["New dir"] = "�j k�nyvt�r";
$net2ftp_messages["New file"] = "�j f�jl";
$net2ftp_messages["HTML templates"] = "HTML sablon";
$net2ftp_messages["Upload"] = "Felt�lt�s";
$net2ftp_messages["Java Upload"] = "Java felt�lt�s";
$net2ftp_messages["Flash Upload"] = "Flash felt�lt�s";
$net2ftp_messages["Install"] = "Install�ci�";
$net2ftp_messages["Advanced"] = "Speci�lis";
$net2ftp_messages["Copy"] = "M�sol";
$net2ftp_messages["Move"] = "Mozgat";
$net2ftp_messages["Delete"] = "T�rl�s";
$net2ftp_messages["Rename"] = "�tnevez�s";
$net2ftp_messages["Chmod"] = "Chmod";
$net2ftp_messages["Download"] = "Let�lt�s";
$net2ftp_messages["Unzip"] = "Unzip";
$net2ftp_messages["Zip"] = "Zip";
$net2ftp_messages["Size"] = "M�ret";
$net2ftp_messages["Search"] = "Keres�s";
$net2ftp_messages["Go to the parent directory"] = "Menj a sz�l� k�nyvt�r";
$net2ftp_messages["Go"] = "Go";
$net2ftp_messages["Transform selected entries: "] = "Transform kiv�lasztott bejegyz�sek: ";
$net2ftp_messages["Transform selected entry: "] = "Transform kijel�lt bejegyz�st: ";
$net2ftp_messages["Make a new subdirectory in directory %1\$s"] = "K�sz�ts egy �j alk�nyvt�r a k�nyvt�rban %1\$s";
$net2ftp_messages["Create a new file in directory %1\$s"] = "Hozzon l�tre egy �j f�jlt a k�nyvt�rban %1\$s";
$net2ftp_messages["Create a website easily using ready-made templates"] = "Hozzon l�tre egy weboldal seg�ts�g�vel k�nnyen k�sz sablonok";
$net2ftp_messages["Upload new files in directory %1\$s"] = "Felt�lt�s �j f�jlokat a k�nyvt�rban %1\$s";
$net2ftp_messages["Upload directories and files using a Java applet"] = "Upload k�nyvt�rakat �s f�jlokat haszn�l Java applet";
$net2ftp_messages["Upload files using a Flash applet"] = "Felt�lteni f�jlokat Flash kisalkalmaz�s";
$net2ftp_messages["Install software packages (requires PHP on web server)"] = "Telep�t�s�hez szoftvercsomagok (requires PHP webszerver)";
$net2ftp_messages["Go to the advanced functions"] = "Menj a speci�lis funkci�kat";
$net2ftp_messages["Copy the selected entries"] = "A kijel�lt t�telek m�sol�sa";
$net2ftp_messages["Move the selected entries"] = "A kijel�lt t�telek  mozgat�sa";
$net2ftp_messages["Delete the selected entries"] = "A kijel�lt t�telek t�rl�se";
$net2ftp_messages["Rename the selected entries"] = "A kijel�lt t�telek �tnevez�se";
$net2ftp_messages["Chmod the selected entries (only works on Unix/Linux/BSD servers)"] = "Chmod a kiv�lasztott pont (csak akkor m�k�dik, Unix / Linux / BSD szerverek)";
$net2ftp_messages["Download a zip file containing all selected entries"] = "Le egy zip f�jl tartalmazza az �sszes kiv�lasztott pont";
$net2ftp_messages["Unzip the selected archives on the FTP server"] = "Unzip a kiv�lasztott arch�vumokat az FTP szerveren";
$net2ftp_messages["Zip the selected entries to save or email them"] = "Zip a kiv�lasztott pont menteni, vagy elk�ldheti e-mailben";
$net2ftp_messages["Calculate the size of the selected entries"] = "Ki kell sz�m�tani a m�rete a kiv�lasztott pont";
$net2ftp_messages["Find files which contain a particular word"] = "Keresse meg a f�jlokat, amelyek tartalmazz�k az adott sz�t";
$net2ftp_messages["Click to sort by %1\$s in descending order"] = "Kattintson ide a rendez�shez %1\$s a cs�kken� sorrendben";
$net2ftp_messages["Click to sort by %1\$s in ascending order"] = "Kattintson ide a rendez�shez %1\$s a n�vekv� sorrendben";
$net2ftp_messages["Ascending order"] = "N�vekv� sorrendben";
$net2ftp_messages["Descending order"] = "Cs�kken� sorrendben";
$net2ftp_messages["Upload files"] = "Felt�lt f�jlokat";
$net2ftp_messages["Up"] = "Fel";
$net2ftp_messages["Click to check or uncheck all rows"] = "Jel�lje be vagy t�r�lje az �sszes sorok";
$net2ftp_messages["All"] = "�sszes";
$net2ftp_messages["Name"] = "N�v";
$net2ftp_messages["Type"] = "T�pus";
//$net2ftp_messages["Size"] = "Size";
$net2ftp_messages["Owner"] = "Tulajdonos";
$net2ftp_messages["Group"] = "Csoport";
$net2ftp_messages["Perms"] = "Perms";
$net2ftp_messages["Mod Time"] = "M�d. id�";
$net2ftp_messages["Actions"] = "Akci�";
$net2ftp_messages["Select the directory %1\$s"] = "V�lassza ki a k�nyvt�rat %1\$s";
$net2ftp_messages["Select the file %1\$s"] = "V�lassza ki a f�jlt %1\$s";
$net2ftp_messages["Select the symlink %1\$s"] = "V�lassza ki a symlink - %1\$s";
$net2ftp_messages["Go to the subdirectory %1\$s"] = "Menj a alk�nyvt�rba %1\$s";
$net2ftp_messages["Download the file %1\$s"] = "A f�jl let�lt�s�hez %1\$s";
$net2ftp_messages["Follow symlink %1\$s"] = "Symlinket k�vesse %1\$s";
$net2ftp_messages["View"] = "N�zet";
$net2ftp_messages["Edit"] = "Szerkeszt";
$net2ftp_messages["Update"] = "Friss�t�s";
$net2ftp_messages["Open"] = "Megnyit�s";
$net2ftp_messages["View the highlighted source code of file %1\$s"] = "Tekintse meg a kijel�lt f�jl forr�sk�dj�t %1\$s";
$net2ftp_messages["Edit the source code of file %1\$s"] = "Szerkessze a forr�sk�d f�jl %1\$s";
$net2ftp_messages["Upload a new version of the file %1\$s and merge the changes"] = "A f�jl �jabb verzi�j�t a f�jl %1\$s �s egyes�t�se a v�ltoz�sok";
$net2ftp_messages["View image %1\$s"] = "K�p megtekint�se %1\$s";
$net2ftp_messages["View the file %1\$s from your HTTP web server"] = "N�zzem meg, hogy a f�jl %1\$s az �n HTTP webszerver�n van";
$net2ftp_messages["(Note: This link may not work if you don't have your own domain name.)"] = "(Megjegyz�s: Ez a kapcsolat nem m�k�dik, ha �n nem rendelkezik saj�t domain n�v.)";
$net2ftp_messages["This folder is empty"] = "Ez a mappa �res";

// printSeparatorRow()
$net2ftp_messages["Directories"] = "Directories";
$net2ftp_messages["Files"] = "Files";
$net2ftp_messages["Symlinks"] = "Symlinks";
$net2ftp_messages["Unrecognized FTP output"] = "Unrecognized FTP output";
$net2ftp_messages["Number"] = "Number";
$net2ftp_messages["Size"] = "M�ret";
$net2ftp_messages["Skipped"] = "Skipped";
$net2ftp_messages["Data transferred from this IP address today"] = "Data transferred from this IP address today";
$net2ftp_messages["Data transferred to this FTP server today"] = "Data transferred to this FTP server today";

// printLocationActions()
$net2ftp_messages["Language:"] = "Nyelv:";
$net2ftp_messages["Skin:"] = "Fel�let:";
$net2ftp_messages["View mode:"] = "N�zetm�d:";
$net2ftp_messages["Directory Tree"] = "K�nyvt�rfa";

// ftp2http()
$net2ftp_messages["Execute %1\$s in a new window"] = "V�grehajtaja %1\$s egy �j ablakban";
$net2ftp_messages["This file is not accessible from the web"] = "This file is not accessible from the web";

// printDirectorySelect()
$net2ftp_messages["Double-click to go to a subdirectory:"] = "Kattintson dupl�n az alk�nyvt�rba l�p�shez:";
$net2ftp_messages["Choose"] = "V�laszt�s";
$net2ftp_messages["Up"] = "Fel";

} // end browse


// -------------------------------------------------------------------------
// Calculate size module
if ($net2ftp_globals["state"] == "calculatesize") {
// -------------------------------------------------------------------------
$net2ftp_messages["Size of selected directories and files"] = "Size of selected directories and files";
$net2ftp_messages["The total size taken by the selected directories and files is:"] = "The total size taken by the selected directories and files is:";
$net2ftp_messages["The number of files which were skipped is:"] = "The number of files which were skipped is:";

} // end calculatesize


// -------------------------------------------------------------------------
// Chmod module
if ($net2ftp_globals["state"] == "chmod") {
// -------------------------------------------------------------------------
$net2ftp_messages["Chmod directories and files"] = "Chmod k�nyvt�rak �s f�jlok";
$net2ftp_messages["Set all permissions"] = "Minden enged�ly be�ll�t�sa";
$net2ftp_messages["Read"] = "Olvas�s";
$net2ftp_messages["Write"] = "�r�s";
$net2ftp_messages["Execute"] = "V�grehajt";
$net2ftp_messages["Owner"] = "Tulajdonos";
$net2ftp_messages["Group"] = "Csoport";
$net2ftp_messages["Everyone"] = "Mindenki";
$net2ftp_messages["To set all permissions to the same values, enter those permissions and click on the button \"Set all permissions\""] = "A minden enged�ly be�ll�t�sa �rv�nyes�t�s�hez �rja be a fent eml�tett enged�lyeket �s kattintson a gombra \"Minden enged�ly be�ll�t�sa\"";
$net2ftp_messages["Set the permissions of directory <b>%1\$s</b> to: "] = "Set the permissions of directory <b>%1\$s</b> to: ";
$net2ftp_messages["Set the permissions of file <b>%1\$s</b> to: "] = "Set the permissions of file <b>%1\$s</b> to: ";
$net2ftp_messages["Set the permissions of symlink <b>%1\$s</b> to: "] = "Set the permissions of symlink <b>%1\$s</b> to: ";
$net2ftp_messages["Chmod value"] = "Chmod �rt�k";
$net2ftp_messages["Chmod also the subdirectories within this directory"] = "Chmod also the subdirectories within this directory";
$net2ftp_messages["Chmod also the files within this directory"] = "Chmod also the files within this directory";
$net2ftp_messages["The chmod nr <b>%1\$s</b> is out of the range 000-777. Please try again."] = "The chmod nr <b>%1\$s</b> is out of the range 000-777. Please try again.";

} // end chmod


// -------------------------------------------------------------------------
// Clear cookies module
// -------------------------------------------------------------------------
// No messages


// -------------------------------------------------------------------------
// Copy/Move/Delete module
if ($net2ftp_globals["state"] == "copymovedelete") {
// -------------------------------------------------------------------------
$net2ftp_messages["Choose a directory"] = "V�lassza ki a k�nyvt�rat";
$net2ftp_messages["Copy directories and files"] = "Copy directories and files";
$net2ftp_messages["Move directories and files"] = "Move directories and files";
$net2ftp_messages["Delete directories and files"] = "Delete directories and files";
$net2ftp_messages["Are you sure you want to delete these directories and files?"] = "Are you sure you want to delete these directories and files?";
$net2ftp_messages["All the subdirectories and files of the selected directories will also be deleted!"] = "All the subdirectories and files of the selected directories will also be deleted!";
$net2ftp_messages["Set all targetdirectories"] = "Set all targetdirectories";
$net2ftp_messages["To set a common target directory, enter that target directory in the textbox above and click on the button \"Set all targetdirectories\"."] = "To set a common target directory, enter that target directory in the textbox above and click on the button \"Set all targetdirectories\".";
$net2ftp_messages["Note: the target directory must already exist before anything can be copied into it."] = "Note: the target directory must already exist before anything can be copied into it.";
$net2ftp_messages["Different target FTP server:"] = "Different target FTP server:";
$net2ftp_messages["Username"] = "Felhaszn�l�n�v";
$net2ftp_messages["Password"] = "Jelsz�";
$net2ftp_messages["Leave empty if you want to copy the files to the same FTP server."] = "Leave empty if you want to copy the files to the same FTP server.";
$net2ftp_messages["If you want to copy the files to another FTP server, enter your login data."] = "If you want to copy the files to another FTP server, enter your login data.";
$net2ftp_messages["Leave empty if you want to move the files to the same FTP server."] = "Leave empty if you want to move the files to the same FTP server.";
$net2ftp_messages["If you want to move the files to another FTP server, enter your login data."] = "If you want to move the files to another FTP server, enter your login data.";
$net2ftp_messages["Copy directory <b>%1\$s</b> to:"] = "Copy directory <b>%1\$s</b> to:";
$net2ftp_messages["Move directory <b>%1\$s</b> to:"] = "Move directory <b>%1\$s</b> to:";
$net2ftp_messages["Directory <b>%1\$s</b>"] = "Directory <b>%1\$s</b>";
$net2ftp_messages["Copy file <b>%1\$s</b> to:"] = "Copy file <b>%1\$s</b> to:";
$net2ftp_messages["Move file <b>%1\$s</b> to:"] = "Move file <b>%1\$s</b> to:";
$net2ftp_messages["File <b>%1\$s</b>"] = "File <b>%1\$s</b>";
$net2ftp_messages["Copy symlink <b>%1\$s</b> to:"] = "Copy symlink <b>%1\$s</b> to:";
$net2ftp_messages["Move symlink <b>%1\$s</b> to:"] = "Move symlink <b>%1\$s</b> to:";
$net2ftp_messages["Symlink <b>%1\$s</b>"] = "Symlink <b>%1\$s</b>";
$net2ftp_messages["Target directory:"] = "Target directory:";
$net2ftp_messages["Target name:"] = "Target name:";
$net2ftp_messages["Processing the entries:"] = "Processing the entries:";

} // end copymovedelete


// -------------------------------------------------------------------------
// Download file module
// -------------------------------------------------------------------------
// No messages


// -------------------------------------------------------------------------
// EasyWebsite module
if ($net2ftp_globals["state"] == "easyWebsite") {
// -------------------------------------------------------------------------
$net2ftp_messages["Create a website in 4 easy steps"] = "Create a website in 4 easy steps";
$net2ftp_messages["Template overview"] = "Template overview";
$net2ftp_messages["Template details"] = "Template details";
$net2ftp_messages["Files are copied"] = "Files are copied";
$net2ftp_messages["Edit your pages"] = "Edit your pages";

// Screen 1 - printTemplateOverview
$net2ftp_messages["Click on the image to view the details of a template."] = "Click on the image to view the details of a template.";
$net2ftp_messages["Back to the Browse screen"] = "Back to the Browse screen";
$net2ftp_messages["Template"] = "Template";
$net2ftp_messages["Copyright"] = "Copyright";
$net2ftp_messages["Click on the image to view the details of this template"] = "Click on the image to view the details of this template";

// Screen 2 - printTemplateDetails
$net2ftp_messages["The template files will be copied to your FTP server. Existing files with the same filename will be overwritten. Do you want to continue?"] = "The template files will be copied to your FTP server. Existing files with the same filename will be overwritten. Do you want to continue?";
$net2ftp_messages["Install template to directory: "] = "Install template to directory: ";
$net2ftp_messages["Install"] = "Install�ci�";
$net2ftp_messages["Size"] = "M�ret";
$net2ftp_messages["Preview page"] = "Preview page";
$net2ftp_messages["opens in a new window"] = "opens in a new window";

// Screen 3
$net2ftp_messages["Please wait while the template files are being transferred to your server: "] = "Please wait while the template files are being transferred to your server: ";
$net2ftp_messages["Done."] = "Done.";
$net2ftp_messages["Continue"] = "Continue";

// Screen 4 - printEasyAdminPanel
$net2ftp_messages["Edit page"] = "Edit page";
$net2ftp_messages["Browse the FTP server"] = "Browse the FTP server";
$net2ftp_messages["Add this link to your favorites to return to this page later on!"] = "Add this link to your favorites to return to this page later on!";
$net2ftp_messages["Edit website at %1\$s"] = "Edit website at %1\$s";
$net2ftp_messages["Internet Explorer: right-click on the link and choose \"Add to Favorites...\""] = "Internet Explorer: jobb gombbal a hivatkoz�sra, �s v�lassza a \"Add a kedvencekhez...\"";
$net2ftp_messages["Netscape, Mozilla, Firefox: right-click on the link and choose \"Bookmark This Link...\""] = "Netscape, Mozilla, Firefox: right-click on the link and choose \"Linket adja a K�nyvjelz�h�z ...\"";

// ftp_copy_local2ftp
$net2ftp_messages["WARNING: Unable to create the subdirectory <b>%1\$s</b>. It may already exist. Continuing..."] = "WARNING: Unable to create the subdirectory <b>%1\$s</b>. It may already exist. Continuing...";
$net2ftp_messages["Created target subdirectory <b>%1\$s</b>"] = "Created c�l alk�nyvt�r <b>%1\$s</b>";
$net2ftp_messages["WARNING: Unable to copy the file <b>%1\$s</b>. Continuing..."] = "WARNING: Unable to copy the file <b>%1\$s</b>. Continuing...";
$net2ftp_messages["Copied file <b>%1\$s</b>"] = "M�solhat�k f�jlt <b>%1\$s</b>";
}


// -------------------------------------------------------------------------
// Edit module
if ($net2ftp_globals["state"] == "edit") {
// -------------------------------------------------------------------------

// /modules/edit/edit.inc.php
$net2ftp_messages["Unable to open the template file"] = "Unable to open the template file";
$net2ftp_messages["Unable to read the template file"] = "Unable to read the template file";
$net2ftp_messages["Please specify a filename"] = "Please specify a filename";
$net2ftp_messages["Status: This file has not yet been saved"] = "Status: This file has not yet been saved";
$net2ftp_messages["Status: Saved on <b>%1\$s</b> using mode %2\$s"] = "Status: Saved on <b>%1\$s</b> using mode %2\$s";
$net2ftp_messages["Status: <b>This file could not be saved</b>"] = "Status: <b>This file could not be saved</b>";
$net2ftp_messages["Not yet saved"] = "Not yet saved";
$net2ftp_messages["Could not be saved"] = "Could not be saved";
$net2ftp_messages["Saved at %1\$s"] = "Saved at %1\$s";

// /skins/[skin]/edit.template.php
$net2ftp_messages["Directory: "] = "Directory: ";
$net2ftp_messages["File: "] = "File: ";
$net2ftp_messages["New file name: "] = "New file name: ";
$net2ftp_messages["Character encoding: "] = "Character encoding: ";
$net2ftp_messages["Note: changing the textarea type will save the changes"] = "Note: changing the textarea type will save the changes";
$net2ftp_messages["Copy up"] = "Copy up";
$net2ftp_messages["Copy down"] = "Copy down";

} // end if edit


// -------------------------------------------------------------------------
// Find string module
if ($net2ftp_globals["state"] == "findstring") {
// -------------------------------------------------------------------------

// /modules/findstring/findstring.inc.php 
$net2ftp_messages["Search directories and files"] = "Search directories and files";
$net2ftp_messages["Search again"] = "Search again";
$net2ftp_messages["Search results"] = "Search results";
$net2ftp_messages["Please enter a valid search word or phrase."] = "Please enter a valid search word or phrase.";
$net2ftp_messages["Please enter a valid filename."] = "Please enter a valid filename.";
$net2ftp_messages["Please enter a valid file size in the \"from\" textbox, for example 0."] = "Please enter a valid file size in the \"from\" textbox, for example 0.";
$net2ftp_messages["Please enter a valid file size in the \"to\" textbox, for example 500000."] = "Please enter a valid file size in the \"to\" textbox, for example 500000.";
$net2ftp_messages["Please enter a valid date in Y-m-d format in the \"from\" textbox."] = "Please enter a valid date in Y-m-d format in the \"from\" textbox.";
$net2ftp_messages["Please enter a valid date in Y-m-d format in the \"to\" textbox."] = "Please enter a valid date in Y-m-d format in the \"to\" textbox.";
$net2ftp_messages["The word <b>%1\$s</b> was not found in the selected directories and files."] = "The word <b>%1\$s</b> was not found in the selected directories and files.";
$net2ftp_messages["The word <b>%1\$s</b> was found in the following files:"] = "The word <b>%1\$s</b> was found in the following files:";

// /skins/[skin]/findstring1.template.php
$net2ftp_messages["Search for a word or phrase"] = "Search for a word or phrase";
$net2ftp_messages["Case sensitive search"] = "Case sensitive search";
$net2ftp_messages["Restrict the search to:"] = "Restrict the search to:";
$net2ftp_messages["files with a filename like"] = "files with a filename like";
$net2ftp_messages["(wildcard character is *)"] = "(wildcard character is *)";
$net2ftp_messages["files with a size"] = "files with a size";
$net2ftp_messages["files which were last modified"] = "files which were last modified";
$net2ftp_messages["from"] = "from";
$net2ftp_messages["to"] = "to";

$net2ftp_messages["Directory"] = "K�nyvt�r";
$net2ftp_messages["File"] = "F�jl";
$net2ftp_messages["Line"] = "Line";
$net2ftp_messages["Action"] = "Action";
$net2ftp_messages["View"] = "N�zet";
$net2ftp_messages["Edit"] = "Szerkeszt";
$net2ftp_messages["View the highlighted source code of file %1\$s"] = "Tekintse meg a kijel�lt f�jl forr�sk�dj�t %1\$s";
$net2ftp_messages["Edit the source code of file %1\$s"] = "Szerkessze a forr�sk�d f�jl %1\$s";

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
$net2ftp_messages["Unable to open the template file"] = "Unable to open the template file";
$net2ftp_messages["Unable to read the template file"] = "Unable to read the template file";
$net2ftp_messages["Unable to get the list of packages"] = "Unable to get the list of packages";

// /skins/blue/install1.template.php
$net2ftp_messages["The net2ftp installer script has been copied to the FTP server."] = "The net2ftp installer script has been copied to the FTP server.";
$net2ftp_messages["This script runs on your web server and requires PHP to be installed."] = "This script runs on your web server and requires PHP to be installed.";
$net2ftp_messages["In order to run it, click on the link below."] = "In order to run it, click on the link below.";
$net2ftp_messages["net2ftp has tried to determine the directory mapping between the FTP server and the web server."] = "net2ftp has tried to determine the directory mapping between the FTP server and the web server.";
$net2ftp_messages["Should this link not be correct, enter the URL manually in your web browser."] = "Should this link not be correct, enter the URL manually in your web browser.";

} // end install


// -------------------------------------------------------------------------
// Java upload module
if ($net2ftp_globals["state"] == "jupload") {
// -------------------------------------------------------------------------
$net2ftp_messages["Upload directories and files using a Java applet"] = "Upload k�nyvt�rakat �s f�jlokat haszn�l Java applet";
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
$net2ftp_messages["Once you are logged in, you will be able to:"] = "Miut�n bejelentkezett, �n k�pes lesz:";
$net2ftp_messages["Navigate the FTP server"] = "Navig�lni az FTP szerveren";
$net2ftp_messages["Once you have logged in, you can browse from directory to directory and see all the subdirectories and files."] = "Ha m�r bejelentkezett, akkor b�ng�szhet�nk a k�nyvt�rb�l k�nyvt�rba, �s l�tni az alk�nyvt�rakat �s f�jlokat.";
$net2ftp_messages["Upload files"] = "Felt�lt f�jlokat";
$net2ftp_messages["There are 3 different ways to upload files: the standard upload form, the upload-and-unzip functionality, and the Java Applet."] = "Jelenleg 3 k�l�nb�z� m�don lehet felt�lteni f�jlokat: a szabv�nyos felt�lt�si �rlapon, a felt�lt�s-�s unzip funkci�, �s a Java kisalkalmaz�ssal.";
$net2ftp_messages["Download files"] = "F�jlok let�lt�se";
$net2ftp_messages["Click on a filename to quickly download one file.<br />Select multiple files and click on Download; the selected files will be downloaded in a zip archive."] = "Kattintson egy f�jlnev�vre gyorsan let�lt egy f�jlt. <br /> V�lasszon ki t�bb f�jlt, �s kattintson a Downloadra, a kiv�lasztott f�jlok let�lt�s�t a zip arch�vumban.";
$net2ftp_messages["Zip files"] = "Zip f�jlok";
$net2ftp_messages["... and save the zip archive on the FTP server, or email it to someone."] = "... and save the zip archive on the FTP server, or email it to someone.";
$net2ftp_messages["Unzip files"] = "Unzip files";
$net2ftp_messages["Different formats are supported: .zip, .tar, .tgz and .gz."] = "Different formats are supported: .zip, .tar, .tgz and .gz.";
$net2ftp_messages["Install software"] = "Install software";
$net2ftp_messages["Choose from a list of popular applications (PHP required)."] = "Choose from a list of popular applications (PHP required).";
$net2ftp_messages["Copy, move and delete"] = "Copy, move and delete";
$net2ftp_messages["Directories are handled recursively, meaning that their content (subdirectories and files) will also be copied, moved or deleted."] = "Directories are handled recursively, meaning that their content (subdirectories and files) will also be copied, moved or deleted.";
$net2ftp_messages["Copy or move to a 2nd FTP server"] = "Copy or move to a 2nd FTP server";
$net2ftp_messages["Handy to import files to your FTP server, or to export files from your FTP server to another FTP server."] = "Handy to import files to your FTP server, or to export files from your FTP server to another FTP server.";
$net2ftp_messages["Rename and chmod"] = "Rename and chmod";
$net2ftp_messages["Chmod handles directories recursively."] = "Chmod handles directories recursively.";
$net2ftp_messages["View code with syntax highlighting"] = "View code with syntax highlighting";
$net2ftp_messages["PHP functions are linked to the documentation on php.net."] = "PHP functions are linked to the documentation on php.net.";
$net2ftp_messages["Plain text editor"] = "Plain text editor";
$net2ftp_messages["Edit text right from your browser; every time you save the changes the new file is transferred to the FTP server."] = "Edit text right from your browser; every time you save the changes the new file is transferred to the FTP server.";
$net2ftp_messages["HTML editors"] = "HTML editors";
$net2ftp_messages["Edit HTML a What-You-See-Is-What-You-Get (WYSIWYG) form; there are 2 different editors to choose from."] = "Edit HTML a What-You-See-Is-What-You-Get (WYSIWYG) form; there are 2 different editors to choose from.";
$net2ftp_messages["Code editor"] = "Code editor";
$net2ftp_messages["Edit HTML and PHP in an editor with syntax highlighting."] = "Edit HTML and PHP in an editor with syntax highlighting.";
$net2ftp_messages["Search for words or phrases"] = "Search for words or phrases";
$net2ftp_messages["Filter out files based on the filename, last modification time and filesize."] = "Filter out files based on the filename, last modification time and filesize.";
$net2ftp_messages["Calculate size"] = "Calculate size";
$net2ftp_messages["Calculate the size of directories and files."] = "Calculate the size of directories and files.";

$net2ftp_messages["FTP server"] = "FTP szerver";
$net2ftp_messages["Example"] = "P�lda";
$net2ftp_messages["Port"] = "Port";
$net2ftp_messages["Protocol"] = "Protocol";
$net2ftp_messages["Username"] = "Felhaszn�l�n�v";
$net2ftp_messages["Password"] = "Jelsz�";
$net2ftp_messages["Anonymous"] = "N�vtelen";
$net2ftp_messages["Passive mode"] = "Passz�v m�d";
$net2ftp_messages["Initial directory"] = "Kezd� k�nyvt�r";
$net2ftp_messages["Language"] = "Nyelv";
$net2ftp_messages["Skin"] = "Fel�let";
$net2ftp_messages["FTP mode"] = "FTP m�d";
$net2ftp_messages["Automatic"] = "Automatikus";
$net2ftp_messages["Login"] = "Bel�p�s";
$net2ftp_messages["Clear cookies"] = "S�tik t�rl�se";
$net2ftp_messages["Admin"] = "Adminisztr�tor";
$net2ftp_messages["Please enter an FTP server."] = "Please enter an FTP server.";
$net2ftp_messages["Please enter a username."] = "K�rem adja meg a felhaszn�l�i nev�t.";
$net2ftp_messages["Please enter a password."] = "K�rem adja meg a jelsz�t.";

} // end login


// -------------------------------------------------------------------------
// Login module
if ($net2ftp_globals["state"] == "login_small") {
// -------------------------------------------------------------------------

$net2ftp_messages["Please enter your Administrator username and password."] = "K�rem adja meg az Adminisztr�tor felhaszn�l�i nev�t �s jelszav�t.";
$net2ftp_messages["Please enter your username and password for FTP server <b>%1\$s</b>."] = "K�rj�k, adja meg felhaszn�l�nev�t �s jelszav�t az FTP-kiszolg�l�hoz <b>%1\$s</b>.";
$net2ftp_messages["Username"] = "Felhaszn�l�n�v";
$net2ftp_messages["Your session has expired; please enter your password for FTP server <b>%1\$s</b> to continue."] = "M�veleti ideje lej�rt, k�rj�k adja meg a jelsz�t az FTP-kiszolg�l� <b>%1\$s</b> folytat�s�hoz.";
$net2ftp_messages["Your IP address has changed; please enter your password for FTP server <b>%1\$s</b> to continue."] = "Az �n IP c�me megv�ltozott; K�rj�k, adja meg a jelszav�t az FTP-kiszolg�l� <b>%1\$s</b> folytat�s�hoz.";
$net2ftp_messages["Password"] = "Jelsz�";
$net2ftp_messages["Login"] = "Bel�p�s";
$net2ftp_messages["Continue"] = "Continue";

} // end login_small


// -------------------------------------------------------------------------
// Logout module
if ($net2ftp_globals["state"] == "logout") {
// -------------------------------------------------------------------------

// logout.inc.php
$net2ftp_messages["Login page"] = "Login page";

// logout.template.php
$net2ftp_messages["You have logged out from the FTP server. To log back in, <a href=\"%1\$s\" title=\"Login page (accesskey l)\" accesskey=\"l\">follow this link</a>."] = "You have logged out from the FTP server. To log back in, <a href=\"%1\$s\" title=\"Login page (accesskey l)\" accesskey=\"l\">follow this link</a>.";
$net2ftp_messages["Note: other users of this computer could click on the browser's Back button and access the FTP server."] = "Note: other users of this computer could click on the browser's Back button and access the FTP server.";
$net2ftp_messages["To prevent this, you must close all browser windows."] = "To prevent this, you must close all browser windows.";
$net2ftp_messages["Close"] = "Close";
$net2ftp_messages["Click here to close this window"] = "Click here to close this window";

} // end logout


// -------------------------------------------------------------------------
// New directory module
if ($net2ftp_globals["state"] == "newdir") {
// -------------------------------------------------------------------------
$net2ftp_messages["Create new directories"] = "Create new directories";
$net2ftp_messages["The new directories will be created in <b>%1\$s</b>."] = "The new directories will be created in <b>%1\$s</b>.";
$net2ftp_messages["New directory name:"] = "New directory name:";
$net2ftp_messages["Directory <b>%1\$s</b> was successfully created."] = "Directory <b>%1\$s</b> was successfully created.";
$net2ftp_messages["Directory <b>%1\$s</b> could not be created."] = "Directory <b>%1\$s</b> could not be created.";

} // end newdir


// -------------------------------------------------------------------------
// Raw module
if ($net2ftp_globals["state"] == "raw") {
// -------------------------------------------------------------------------

// /modules/raw/raw.inc.php
$net2ftp_messages["Send arbitrary FTP commands"] = "Send arbitrary FTP commands";


// /skins/[skin]/raw1.template.php
$net2ftp_messages["List of commands:"] = "List of commands:";
$net2ftp_messages["FTP server response:"] = "FTP server response:";

} // end raw


// -------------------------------------------------------------------------
// Rename module
if ($net2ftp_globals["state"] == "rename") {
// -------------------------------------------------------------------------
$net2ftp_messages["Rename directories and files"] = "Rename directories and files";
$net2ftp_messages["Old name: "] = "Old name: ";
$net2ftp_messages["New name: "] = "New name: ";
$net2ftp_messages["The new name may not contain any dots. This entry was not renamed to <b>%1\$s</b>"] = "The new name may not contain any dots. This entry was not renamed to <b>%1\$s</b>";
$net2ftp_messages["The new name may not contain any banned keywords. This entry was not renamed to <b>%1\$s</b>"] = "The new name may not contain any banned keywords. This entry was not renamed to <b>%1\$s</b>";
$net2ftp_messages["<b>%1\$s</b> was successfully renamed to <b>%2\$s</b>"] = "<b>%1\$s</b> was successfully renamed to <b>%2\$s</b>";
$net2ftp_messages["<b>%1\$s</b> could not be renamed to <b>%2\$s</b>"] = "<b>%1\$s</b> could not be renamed to <b>%2\$s</b>";

} // end rename


// -------------------------------------------------------------------------
// Unzip module
if ($net2ftp_globals["state"] == "unzip") {
// -------------------------------------------------------------------------

// /modules/unzip/unzip.inc.php
$net2ftp_messages["Unzip archives"] = "Unzip archives";
$net2ftp_messages["Getting archive %1\$s of %2\$s from the FTP server"] = "Arh�v kinyer�se  %1\$s k�z�l %2\$s az FTP szerveren";
$net2ftp_messages["Unable to get the archive <b>%1\$s</b> from the FTP server"] = "Unable to get the archive <b>%1\$s</b> from the FTP server";

// /skins/[skin]/unzip1.template.php
$net2ftp_messages["Set all targetdirectories"] = "Set all targetdirectories";
$net2ftp_messages["To set a common target directory, enter that target directory in the textbox above and click on the button \"Set all targetdirectories\"."] = "To set a common target directory, enter that target directory in the textbox above and click on the button \"Set all targetdirectories\".";
$net2ftp_messages["Note: the target directory must already exist before anything can be copied into it."] = "Note: the target directory must already exist before anything can be copied into it.";
$net2ftp_messages["Unzip archive <b>%1\$s</b> to:"] = "Unzip archive <b>%1\$s</b> to:";
$net2ftp_messages["Target directory:"] = "Target directory:";
$net2ftp_messages["Use folder names (creates subdirectories automatically)"] = "Use folder names (creates subdirectories automatically)";

} // end unzip


// -------------------------------------------------------------------------
// Upload module
if ($net2ftp_globals["state"] == "upload") {
// -------------------------------------------------------------------------
$net2ftp_messages["Upload to directory:"] = "Upload to directory:";
$net2ftp_messages["Files"] = "Files";
$net2ftp_messages["Archives"] = "Archives";
$net2ftp_messages["Files entered here will be transferred to the FTP server."] = "Files entered here will be transferred to the FTP server.";
$net2ftp_messages["Archives entered here will be decompressed, and the files inside will be transferred to the FTP server."] = "Archives entered here will be decompressed, and the files inside will be transferred to the FTP server.";
$net2ftp_messages["Add another"] = "Add another";
$net2ftp_messages["Use folder names (creates subdirectories automatically)"] = "Use folder names (creates subdirectories automatically)";

$net2ftp_messages["Choose a directory"] = "V�lassza ki a k�nyvt�rat";
$net2ftp_messages["Please wait..."] = "K�rem v�rjon...";
$net2ftp_messages["Uploading... please wait..."] = "Uploading... please wait...";
$net2ftp_messages["If the upload takes more than the allowed <b>%1\$s seconds<\/b>, you will have to try again with less/smaller files."] = "If the upload takes more than the allowed <b>%1\$s seconds<\/b>, you will have to try again with less/smaller files.";
$net2ftp_messages["This window will close automatically in a few seconds."] = "This window will close automatically in a few seconds.";
$net2ftp_messages["Close window now"] = "Close window now";

$net2ftp_messages["Upload files and archives"] = "Upload files and archives";
$net2ftp_messages["Upload results"] = "Upload results";
$net2ftp_messages["Checking files:"] = "Checking files:";
$net2ftp_messages["Transferring files to the FTP server:"] = "Transferring files to the FTP server:";
$net2ftp_messages["Decompressing archives and transferring files to the FTP server:"] = "Decompressing archives and transferring files to the FTP server:";
$net2ftp_messages["Upload more files and archives"] = "Upload more files and archives";

} // end upload


// -------------------------------------------------------------------------
// Messages which are shared by upload and jupload
if ($net2ftp_globals["state"] == "upload" || $net2ftp_globals["state"] == "jupload") {
// -------------------------------------------------------------------------
$net2ftp_messages["Restrictions:"] = "Restrictions:";
$net2ftp_messages["The maximum size of one file is restricted by net2ftp to <b>%1\$s</b> and by PHP to <b>%2\$s</b>"] = "The maximum size of one file is restricted by net2ftp to <b>%1\$s</b> and by PHP to <b>%2\$s</b>";
$net2ftp_messages["The maximum execution time is <b>%1\$s seconds</b>"] = "The maximum execution time is <b>%1\$s seconds</b>";
$net2ftp_messages["The FTP transfer mode (ASCII or BINARY) will be automatically determined, based on the filename extension"] = "The FTP transfer mode (ASCII or BINARY) will be automatically determined, based on the filename extension";
$net2ftp_messages["If the destination file already exists, it will be overwritten"] = "If the destination file already exists, it will be overwritten";

} // end upload or jupload


// -------------------------------------------------------------------------
// View module
if ($net2ftp_globals["state"] == "view") {
// -------------------------------------------------------------------------

// /modules/view/view.inc.php
$net2ftp_messages["View file %1\$s"] = "View file %1\$s";
$net2ftp_messages["View image %1\$s"] = "K�p megtekint�se %1\$s";
$net2ftp_messages["View Macromedia ShockWave Flash movie %1\$s"] = "View Macromedia ShockWave Flash movie %1\$s";
$net2ftp_messages["Image"] = "Image";

// /skins/[skin]/view1.template.php
$net2ftp_messages["Syntax highlighting powered by <a href=\"http://luminous.asgaard.co.uk\">Luminous</a>"] = "Syntax highlighting powered by <a href=\"http://luminous.asgaard.co.uk\">Luminous</a>";
$net2ftp_messages["To save the image, right-click on it and choose 'Save picture as...'"] = "To save the image, right-click on it and choose 'Save picture as...'";

} // end view


// -------------------------------------------------------------------------
// Zip module
if ($net2ftp_globals["state"] == "zip") {
// -------------------------------------------------------------------------

// /modules/zip/zip.inc.php
$net2ftp_messages["Zip entries"] = "Zip entries";

// /skins/[skin]/zip1.template.php
$net2ftp_messages["Save the zip file on the FTP server as:"] = "Save the zip file on the FTP server as:";
$net2ftp_messages["Email the zip file in attachment to:"] = "Email the zip file in attachment to:";
$net2ftp_messages["Note that sending files is not anonymous: your IP address as well as the time of the sending will be added to the email."] = "Note that sending files is not anonymous: your IP address as well as the time of the sending will be added to the email.";
$net2ftp_messages["Some additional comments to add in the email:"] = "Some additional comments to add in the email:";

$net2ftp_messages["You did not enter a filename for the zipfile. Go back and enter a filename."] = "You did not enter a filename for the zipfile. Go back and enter a filename.";
$net2ftp_messages["The email address you have entered (%1\$s) does not seem to be valid.<br />Please enter an address in the format <b>username@domain.com</b>"] = "The email address you have entered (%1\$s) does not seem to be valid.<br />Please enter an address in the format <b>username@domain.com</b>";

} // end zip

?>