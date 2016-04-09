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
$net2ftp_messages["en"] = "se";

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

$net2ftp_messages["Connecting to the FTP server"] = "Ansluter till FTP server";
$net2ftp_messages["Logging into the FTP server"] = "Loggar in p� FTP server";
$net2ftp_messages["Setting the passive mode"] = "St�ller in passive mode";
$net2ftp_messages["Getting the FTP system type"] = "Mottar FTP system typ";
$net2ftp_messages["Changing the directory"] = "�ndrar i biblioteket";
$net2ftp_messages["Getting the current directory"] = "Mottar aktuellt bibliotek";
$net2ftp_messages["Getting the list of directories and files"] = "Mottar lista med bibliotek och filer";
$net2ftp_messages["Parsing the list of directories and files"] = "Analyserar listan med bibliotek och filer";
$net2ftp_messages["Logging out of the FTP server"] = "Loggar ut fr�n FTP server";
$net2ftp_messages["Getting the list of directories and files"] = "Mottar lista med bibliotek och filer";
$net2ftp_messages["Printing the list of directories and files"] = "Skriver ut lista med bibliotek och filer";
$net2ftp_messages["Processing the entries"] = "Bearbetar inmatningarna";
$net2ftp_messages["Processing entry %1\$s"] = "Bearbetar inmatning %1\$s";
$net2ftp_messages["Checking files"] = "Kontrollerar filer";
$net2ftp_messages["Transferring files to the FTP server"] = "�verf�r filer till FTP server";
$net2ftp_messages["Decompressing archives and transferring files"] = "Dekomprimerar arkiv och �verf�r filer";
$net2ftp_messages["Searching the files..."] = "Letar efter filer...";
$net2ftp_messages["Uploading new file"] = "Laddar upp ny fil";
$net2ftp_messages["Reading the file"] = "L�ser filen";
$net2ftp_messages["Parsing the file"] = "Analyserar filen";
$net2ftp_messages["Reading the new file"] = "L�ser den nya filen";
$net2ftp_messages["Reading the old file"] = "L�ser den gamla filen";
$net2ftp_messages["Comparing the 2 files"] = "J�mf�r de 2 filerna";
$net2ftp_messages["Printing the comparison"] = "Skriver ut j�mf�relse";
$net2ftp_messages["Sending FTP command %1\$s of %2\$s"] = "Skickar FTP order %1\$s of %2\$s";
$net2ftp_messages["Getting archive %1\$s of %2\$s from the FTP server"] = "Mottar arkiv %1\$s av %2\$s fr�n FTP server";
$net2ftp_messages["Creating a temporary directory on the FTP server"] = "Skapar tempor�rt bibliotek p� FTP server";
$net2ftp_messages["Setting the permissions of the temporary directory"] = "St�ller in r�ttigheter f�r tempor�rt bibliotek";
$net2ftp_messages["Copying the net2ftp installer script to the FTP server"] = "Kopierar net2ftp instalationsscript till FTP server";
$net2ftp_messages["Script finished in %1\$s seconds"] = "Script avslutat efter %1\$s sekunder";
$net2ftp_messages["Script halted"] = "Script pausat";

// Used on various screens
$net2ftp_messages["Please wait..."] = "V�nta...";


// -------------------------------------------------------------------------
// index.php
// -------------------------------------------------------------------------
$net2ftp_messages["Unexpected state string: %1\$s. Exiting."] = "Ov�ntad meddelande rad: %1\$s. Avslutar.";
$net2ftp_messages["This beta function is not activated on this server."] = "Denna beta funktion �r inte aktiverad p� denna server.";
$net2ftp_messages["This function has been disabled by the Administrator of this website."] = "Denna funktion har st�ngts av Administratorn f�r denna websida.";


// -------------------------------------------------------------------------
// /includes/browse.inc.php
// -------------------------------------------------------------------------
$net2ftp_messages["The directory <b>%1\$s</b> does not exist or could not be selected, so the directory <b>%2\$s</b> is shown instead."] = "Biblioteket <b>%1\$s</b> existerar inte eller kunde inte v�ljas, s� biblioteket <b>%2\$s</b> visas ist�llet.";
$net2ftp_messages["Your root directory <b>%1\$s</b> does not exist or could not be selected."] = "Ditt root bibliotek <b>%1\$s</b> existerar inte eller kunde inte v�ljas.";
$net2ftp_messages["The directory <b>%1\$s</b> could not be selected - you may not have sufficient rights to view this directory, or it may not exist."] = "Biblioteket <b>%1\$s</b> kunde inte v�ljas - du kanske inte har r�ttigheter att se detta bibliotek, eller s� existerar det inte.";
$net2ftp_messages["Entries which contain banned keywords can't be managed using net2ftp. This is to avoid Paypal or Ebay scams from being uploaded through net2ftp."] = "Entries which contain banned keywords can't be managed using net2ftp. This is to avoid Paypal or Ebay scams from being uploaded through net2ftp.";
$net2ftp_messages["Files which are too big can't be downloaded, uploaded, copied, moved, searched, zipped, unzipped, viewed or edited; they can only be renamed, chmodded or deleted."] = "Files which are too big can't be downloaded, uploaded, copied, moved, searched, zipped, unzipped, viewed or edited; they can only be renamed, chmodded or deleted.";
$net2ftp_messages["Execute %1\$s in a new window"] = "Utf�r %1\$s i ett nytt f�nster";


// -------------------------------------------------------------------------
// /includes/main.inc.php
// -------------------------------------------------------------------------
$net2ftp_messages["Please select at least one directory or file!"] = "V�lj minst ett bibliotek eller fil!";


// -------------------------------------------------------------------------
// /includes/authorizations.inc.php
// -------------------------------------------------------------------------

// checkAuthorization()
$net2ftp_messages["The FTP server <b>%1\$s</b> is not in the list of allowed FTP servers."] = "FTP servern <b>%1\$s</b> finns inte i listan  med till�tna FTP servers.";
$net2ftp_messages["The FTP server <b>%1\$s</b> is in the list of banned FTP servers."] = "FTP servern <b>%1\$s</b> finns i listan med bannlysta FTP servers.";
$net2ftp_messages["The FTP server port %1\$s may not be used."] = "FTP server porten %1\$s f�r inte anv�ndas.";
$net2ftp_messages["Your IP address (%1\$s) is not in the list of allowed IP addresses."] = "Your IP address (%1\$s) is not in the list of allowed IP addresses.";
$net2ftp_messages["Your IP address (%1\$s) is in the list of banned IP addresses."] = "Din IP address (%1\$s) finns i listan med bannlysta IP addresser.";

// isAuthorizedDirectory()
$net2ftp_messages["Table net2ftp_users contains duplicate rows."] = "Tabellen net2ftp_users inneh�ller dubblettrader.";

// checkAdminUsernamePassword()
$net2ftp_messages["You did not enter your Administrator username or password."] = "Du skrev inte in ditt Administrat�rs anv�ndarnamn eller l�senord.";
$net2ftp_messages["Wrong username or password. Please try again."] = "Fel anv�ndarnamn eller l�senord. F�rs�k igen.";

// -------------------------------------------------------------------------
// /includes/consumption.inc.php
// -------------------------------------------------------------------------
$net2ftp_messages["Unable to determine your IP address."] = "Kunde inte fastst�lla din IP address.";
$net2ftp_messages["Table net2ftp_log_consumption_ipaddress contains duplicate rows."] = "Tabell net2ftp_log_consumption_ipaddress ineh�ller dubblettrader.";
$net2ftp_messages["Table net2ftp_log_consumption_ftpserver contains duplicate rows."] = "Tabell net2ftp_log_consumption_ftpserver ineh�ller dubblettrader.";
$net2ftp_messages["The variable <b>consumption_ipaddress_datatransfer</b> is not numeric."] = "Variabeln <b>consumption_ipaddress_datatransfer</b> �r inte numerisk.";
$net2ftp_messages["Table net2ftp_log_consumption_ipaddress could not be updated."] = "Tabell net2ftp_log_consumption_ipaddress kunde inte uppdateras.";
$net2ftp_messages["Table net2ftp_log_consumption_ipaddress contains duplicate entries."] = "Tabell net2ftp_log_consumption_ipaddress ineh�ller dubblettinmatningar.";
$net2ftp_messages["Table net2ftp_log_consumption_ftpserver could not be updated."] = "Tabell net2ftp_log_consumption_ftpserver kunde inte uppdateras.";
$net2ftp_messages["Table net2ftp_log_consumption_ftpserver contains duplicate entries."] = "Tabell net2ftp_log_consumption_ftpserver ineh�ller dubblettinmatningar.";
$net2ftp_messages["Table net2ftp_log_access could not be updated."] = "Table net2ftp_log_access could not be updated.";
$net2ftp_messages["Table net2ftp_log_access contains duplicate entries."] = "Table net2ftp_log_access contains duplicate entries.";


// -------------------------------------------------------------------------
// /includes/database.inc.php
// -------------------------------------------------------------------------
$net2ftp_messages["Unable to connect to the MySQL database. Please check your MySQL database settings in net2ftp's configuration file settings.inc.php."] = "Kunde inte ansluta till MySQL databasen. Kontrollera dina MySQL databas inst�llningar i net2ftp's konfigurationsfil settings.inc.php.";
$net2ftp_messages["Unable to select the MySQL database. Please check your MySQL database settings in net2ftp's configuration file settings.inc.php."] = "Kunde inte v�lja MySQL databas. Kontrollera dina MySQL databas inst�llningar i net2ftp's konfigurationsfil settings.inc.php.";


// -------------------------------------------------------------------------
// /includes/errorhandling.inc.php
// -------------------------------------------------------------------------
$net2ftp_messages["An error has occured"] = "Ett fel har uppst�tt";
$net2ftp_messages["Go back"] = "Go back";
$net2ftp_messages["Go to the login page"] = "G� till login sidan";


// -------------------------------------------------------------------------
// /includes/filesystem.inc.php
// -------------------------------------------------------------------------

// ftp_openconnection()
$net2ftp_messages["The <a href=\"http://www.php.net/manual/en/ref.ftp.php\" target=\"_blank\">FTP module of PHP</a> is not installed.<br /><br /> The administrator of this website should install this module. Installation instructions are given on <a href=\"http://www.php.net/manual/en/ftp.installation.php\" target=\"_blank\">php.net</a><br />"] = "The <a href=\"http://www.php.net/manual/en/ref.ftp.php\" target=\"_blank\">FTP module of PHP</a> is not installed.<br /><br /> The administrator of this website should install this module. Installation instructions are given on <a href=\"http://www.php.net/manual/en/ftp.installation.php\" target=\"_blank\">php.net</a><br />";
$net2ftp_messages["The <a href=\"http://www.php.net/manual/en/function.ftp-ssl-connect.php\" target=\"_blank\">FTP and/or OpenSSL modules of PHP</a> is not installed.<br /><br /> The administrator of this website should install these modules. Installation instructions are given on php.net: <a href=\"http://www.php.net/manual/en/ftp.installation.php\" target=\"_blank\">here for FTP</a>, and <a href=\"http://www.php.net/manual/en/openssl.installation.php\" target=\"_blank\">here for OpenSSL</a><br />"] = "The <a href=\"http://www.php.net/manual/en/function.ftp-ssl-connect.php\" target=\"_blank\">FTP and/or OpenSSL modules of PHP</a> is not installed.<br /><br /> The administrator of this website should install these modules. Installation instructions are given on php.net: <a href=\"http://www.php.net/manual/en/ftp.installation.php\" target=\"_blank\">here for FTP</a>, and <a href=\"http://www.php.net/manual/en/openssl.installation.php\" target=\"_blank\">here for OpenSSL</a><br />";
$net2ftp_messages["The <a href=\"http://www.php.net/manual/en/function.ssh2-sftp.php\" target=\"_blank\">SSH2 module of PHP</a> is not installed.<br /><br /> The administrator of this website should install this module. Installation instructions are given on <a href=\"http://www.php.net/manual/en/ssh2.installation.php\" target=\"_blank\">php.net</a><br />"] = "The <a href=\"http://www.php.net/manual/en/function.ssh2-sftp.php\" target=\"_blank\">SSH2 module of PHP</a> is not installed.<br /><br /> The administrator of this website should install this module. Installation instructions are given on <a href=\"http://www.php.net/manual/en/ssh2.installation.php\" target=\"_blank\">php.net</a><br />";
$net2ftp_messages["Unable to connect to FTP server <b>%1\$s</b> on port <b>%2\$s</b>.<br /><br />Are you sure this is the address of the FTP server? This is often different from that of the HTTP (web) server. Please contact your ISP helpdesk or system administrator for help.<br />"] = "Kunde inte ansluta till FTP server <b>%1\$s</b> p� port <b>%2\$s</b>.<br /><br />�r du s�ker att det �r r�tt adress till FTP servern? Denna �r ofta annorlunda �n den till HTTP (web) servern. Kontakta din ISP�s support eller systemadministrat�r f�r hj�lp.<br />";
$net2ftp_messages["Unable to login to FTP server <b>%1\$s</b> with username <b>%2\$s</b>.<br /><br />Are you sure your username and password are correct? Please contact your ISP helpdesk or system administrator for help.<br />"] = "Kunde inte logga in p� FTP servern <b>%1\$s</b> med anv�ndarnamn <b>%2\$s</b>.<br /><br />�r du s�ker att ditt anv�ndarnamn och l�senord �r korrekt? Kontakta din ISP�s support eller systemadministrat�r f�r hj�lp.<br />";
$net2ftp_messages["Unable to switch to the passive mode on FTP server <b>%1\$s</b>."] = "Kunde inte v�lja passive mode p� FTP servern <b>%1\$s</b>.";

// ftp_openconnection2()
$net2ftp_messages["Unable to connect to the second (target) FTP server <b>%1\$s</b> on port <b>%2\$s</b>.<br /><br />Are you sure this is the address of the second (target) FTP server? This is often different from that of the HTTP (web) server. Please contact your ISP helpdesk or system administrator for help.<br />"] = "Kunde inte ansluta till den andra (target) FTP servern <b>%1\$s</b> p� port <b>%2\$s</b>.<br /><br />�r du s�ker att detta �r adressen till den andra (target) FTP servern? Denna �r ofta annorlunda �n den till HTTP (web) servern. Kontakta din ISP�s support eller systemadministrat�r f�r hj�lp.<br />";
$net2ftp_messages["Unable to login to the second (target) FTP server <b>%1\$s</b> with username <b>%2\$s</b>.<br /><br />Are you sure your username and password are correct? Please contact your ISP helpdesk or system administrator for help.<br />"] = "Kunde inte logga in p� den andra (target) FTP servern <b>%1\$s</b> med anv�ndarnamn <b>%2\$s</b>.<br /><br />�r du s�ker att ditt anv�ndarnamn och l�senord �r korrekt? Kontakta din ISP�s support eller systemadministrat�r f�r hj�lp.<br />";
$net2ftp_messages["Unable to switch to the passive mode on the second (target) FTP server <b>%1\$s</b>."] = "Kunde inte v�lja passive mode p� den andra (target) FTP servern <b>%1\$s</b>.";

// ftp_myrename()
$net2ftp_messages["Unable to rename directory or file <b>%1\$s</b> into <b>%2\$s</b>"] = "Kunde inte d�pa om bibliotek eller fil <b>%1\$s</b> till <b>%2\$s</b>";

// ftp_mychmod()
$net2ftp_messages["Unable to execute site command <b>%1\$s</b>. Note that the CHMOD command is only available on Unix FTP servers, not on Windows FTP servers."] = "Kunde inte utf�ra site command <b>%1\$s</b>. Notera att CHMOD command bara �r tillg�ngligt p� Unix FTP servrar, inte p� Windows FTP servrar.";
$net2ftp_messages["Directory <b>%1\$s</b> successfully chmodded to <b>%2\$s</b>"] = "Bibliotek <b>%1\$s</b> framg�ngsrikt chmodded till <b>%2\$s</b>";
$net2ftp_messages["Processing entries within directory <b>%1\$s</b>:"] = "Bearbetar inmatningar i biblioteket <b>%1\$s</b>:";
$net2ftp_messages["File <b>%1\$s</b> was successfully chmodded to <b>%2\$s</b>"] = "Fil <b>%1\$s</b> framg�ngsrikt chmodded till <b>%2\$s</b>";
$net2ftp_messages["All the selected directories and files have been processed."] = "Alla valda bibliotek och filer har bearbetats.";

// ftp_rmdir2()
$net2ftp_messages["Unable to delete the directory <b>%1\$s</b>"] = "Kunde inte radera biblioteket <b>%1\$s</b>";

// ftp_delete2()
$net2ftp_messages["Unable to delete the file <b>%1\$s</b>"] = "Kunde inte radera filen <b>%1\$s</b>";

// ftp_newdirectory()
$net2ftp_messages["Unable to create the directory <b>%1\$s</b>"] = "Kunde inte skapa biblioteket <b>%1\$s</b>";

// ftp_readfile()
$net2ftp_messages["Unable to create the temporary file"] = "Kunde inte skapa tillf�llig fil";
$net2ftp_messages["Unable to get the file <b>%1\$s</b> from the FTP server and to save it as temporary file <b>%2\$s</b>.<br />Check the permissions of the %3\$s directory.<br />"] = "Kunde inte ladda filen <b>%1\$s</b> fr�n FTP servern och spara den som tempor�r fil <b>%2\$s</b>.<br />Kontrollera r�ttigheter f�r %3\$s biblioteket.<br />";
$net2ftp_messages["Unable to open the temporary file. Check the permissions of the %1\$s directory."] = "Kunde inte �ppna den tempor�ra filen. Kontrollera r�ttigheter f�r %1\$s biblioteket.";
$net2ftp_messages["Unable to read the temporary file"] = "Kunde inte l�sa den tempor�ra filen";
$net2ftp_messages["Unable to close the handle of the temporary file"] = "Kunde inte avsluta hanteringen av den tempor�ra filen";
$net2ftp_messages["Unable to delete the temporary file"] = "Kunde inte radera den tempor�ra filen";

// ftp_writefile()
$net2ftp_messages["Unable to create the temporary file. Check the permissions of the %1\$s directory."] = "Kunde inte skapa den tempor�ra filen. Kontrollera r�ttigheter f�r %1\$s biblioteket.";
$net2ftp_messages["Unable to open the temporary file. Check the permissions of the %1\$s directory."] = "Kunde inte �ppna den tempor�ra filen. Kontrollera r�ttigheter f�r %1\$s biblioteket.";
$net2ftp_messages["Unable to write the string to the temporary file <b>%1\$s</b>.<br />Check the permissions of the %2\$s directory."] = "Kunde inte skriva raden till den tempor�ra filen <b>%1\$s</b>.<br />Kontrollera r�ttigheter f�r %2\$s biblioteket.";
$net2ftp_messages["Unable to close the handle of the temporary file"] = "Kunde inte avsluta hanteringen av den tempor�ra filen";
$net2ftp_messages["Unable to put the file <b>%1\$s</b> on the FTP server.<br />You may not have write permissions on the directory."] = "Kunde inte placera filen <b>%1\$s</b> p� FTP servern.<br />Du kanske inte har r�ttigheter att skriva till biblioteket.";
$net2ftp_messages["Unable to delete the temporary file"] = "Kunde inte radera den tempor�ra filen";

// ftp_copymovedelete()
$net2ftp_messages["Processing directory <b>%1\$s</b>"] = "Bearbetar bibliotek <b>%1\$s</b>";
$net2ftp_messages["The target directory <b>%1\$s</b> is the same as or a subdirectory of the source directory <b>%2\$s</b>, so this directory will be skipped"] = "M�lbibliotek <b>%1\$s</b> �r samma som eller ett underbibliotek till k�llbiblioteket <b>%2\$s</b>, s� detta bibliotek skapas inte";
$net2ftp_messages["The directory <b>%1\$s</b> contains a banned keyword, so this directory will be skipped"] = "The directory <b>%1\$s</b> contains a banned keyword, so this directory will be skipped";
$net2ftp_messages["The directory <b>%1\$s</b> contains a banned keyword, aborting the move"] = "The directory <b>%1\$s</b> contains a banned keyword, aborting the move";
$net2ftp_messages["Unable to create the subdirectory <b>%1\$s</b>. It may already exist. Continuing the copy/move process..."] = "Kunde inte skapa underbibliotek <b>%1\$s</b>. Det kanske redan finns. Forts�tter kopiera/flytta processen...";
$net2ftp_messages["Created target subdirectory <b>%1\$s</b>"] = "Skapat m�lunderbibliotek <b>%1\$s</b>";
$net2ftp_messages["The directory <b>%1\$s</b> could not be selected, so this directory will be skipped"] = "Biblioteket <b>%1\$s</b> kunde inte v�ljas, s� detta bibliotek skapas inte";
$net2ftp_messages["Unable to delete the subdirectory <b>%1\$s</b> - it may not be empty"] = "Kunde inte radera underbiblioteket <b>%1\$s</b> - det kan inneh�lla filer";
$net2ftp_messages["Deleted subdirectory <b>%1\$s</b>"] = "Raderat underbibliotek <b>%1\$s</b>";
$net2ftp_messages["Deleted subdirectory <b>%1\$s</b>"] = "Raderat underbibliotek <b>%1\$s</b>";
$net2ftp_messages["Unable to move the directory <b>%1\$s</b>"] = "Unable to move the directory <b>%1\$s</b>";
$net2ftp_messages["Moved directory <b>%1\$s</b>"] = "Moved directory <b>%1\$s</b>";
$net2ftp_messages["Processing of directory <b>%1\$s</b> completed"] = "Bearbetande av bibliotek <b>%1\$s</b> f�rdigt";
$net2ftp_messages["The target for file <b>%1\$s</b> is the same as the source, so this file will be skipped"] = "M�let f�r filen <b>%1\$s</b> �r samma som k�llan, s� denna fil skapas inte";
$net2ftp_messages["The file <b>%1\$s</b> contains a banned keyword, so this file will be skipped"] = "The file <b>%1\$s</b> contains a banned keyword, so this file will be skipped";
$net2ftp_messages["The file <b>%1\$s</b> contains a banned keyword, aborting the move"] = "The file <b>%1\$s</b> contains a banned keyword, aborting the move";
$net2ftp_messages["The file <b>%1\$s</b> is too big to be copied, so this file will be skipped"] = "Filen <b>%1\$s</b> �r f�r stor f�r att kopieras, s� denna fil skapas inte";
$net2ftp_messages["The file <b>%1\$s</b> is too big to be moved, aborting the move"] = "Filen <b>%1\$s</b> �r f�r stor f�r att flyttas, avbryter flytt";
$net2ftp_messages["Unable to copy the file <b>%1\$s</b>"] = "Unable to copy the file <b>%1\$s</b>";
$net2ftp_messages["Copied file <b>%1\$s</b>"] = "Copied file <b>%1\$s</b>";
$net2ftp_messages["Unable to move the file <b>%1\$s</b>, aborting the move"] = "Unable to move the file <b>%1\$s</b>, aborting the move";
$net2ftp_messages["Unable to move the file <b>%1\$s</b>"] = "Unable to move the file <b>%1\$s</b>";
$net2ftp_messages["Moved file <b>%1\$s</b>"] = "Flyttade fil <b>%1\$s</b>";
$net2ftp_messages["Unable to delete the file <b>%1\$s</b>"] = "Kunde inte radera filen <b>%1\$s</b>";
$net2ftp_messages["Deleted file <b>%1\$s</b>"] = "Raderade filen <b>%1\$s</b>";
$net2ftp_messages["All the selected directories and files have been processed."] = "Alla valda bibliotek och filer har bearbetats.";

// ftp_processfiles()

// ftp_getfile()
$net2ftp_messages["Unable to copy the remote file <b>%1\$s</b> to the local file using FTP mode <b>%2\$s</b>"] = "Kunde inte kopiera fj�rrfilen <b>%1\$s</b> till den lokala filen med FTP mode <b>%2\$s</b>";
$net2ftp_messages["Unable to delete file <b>%1\$s</b>"] = "Kunde inte radera filen <b>%1\$s</b>";

// ftp_putfile()
$net2ftp_messages["The file is too big to be transferred"] = "The file is too big to be transferred";
$net2ftp_messages["Daily limit reached: the file <b>%1\$s</b> will not be transferred"] = "Daglig gr�ns uppn�dd: filen <b>%1\$s</b> kommer inte �verf�ras";
$net2ftp_messages["Unable to copy the local file to the remote file <b>%1\$s</b> using FTP mode <b>%2\$s</b>"] = "Kunde inte kopiera den lokala filen till fj�rrfilen <b>%1\$s</b> med FTP mode <b>%2\$s</b>";
$net2ftp_messages["Unable to delete the local file"] = "Kunde inte radera den lokala filen";

// ftp_downloadfile()
$net2ftp_messages["Unable to delete the temporary file"] = "Kunde inte radera den tempor�ra filen";
$net2ftp_messages["Unable to send the file to the browser"] = "Kunde inte skicka filen till webbl�saren";

// ftp_zip()
$net2ftp_messages["Unable to create the temporary file"] = "Kunde inte skapa tillf�llig fil";
$net2ftp_messages["The zip file has been saved on the FTP server as <b>%1\$s</b>"] = "Zip filen har sparats p� FTP servern som <b>%1\$s</b>";
$net2ftp_messages["Requested files"] = "Beg�rd fil";

$net2ftp_messages["Dear,"] = "K�ra,";
$net2ftp_messages["Someone has requested the files in attachment to be sent to this email account (%1\$s)."] = "N�gon har beg�rt att filen i bilagan skickas till denna emailadress (%1\$s).";
$net2ftp_messages["If you know nothing about this or if you don't trust that person, please delete this email without opening the Zip file in attachment."] = "Om du inte k�nner till detta eller litar p� den personen, radera detta email utan att �ppna bifogad Zip fil.";
$net2ftp_messages["Note that if you don't open the Zip file, the files inside cannot harm your computer."] = "Kom ih�g att om du inte �ppnar Zip filen, kan inte filer inuti ziparkivet skada din dator.";
$net2ftp_messages["Information about the sender: "] = "Information om avs�ndaren: ";
$net2ftp_messages["IP address: "] = "IP adress: ";
$net2ftp_messages["Time of sending: "] = "Skickat den: ";
$net2ftp_messages["Sent via the net2ftp application installed on this website: "] = "Skickat via net2ftp applikationen installerad p� denna webbsida: ";
$net2ftp_messages["Webmaster's email: "] = "Webmaster's email: ";
$net2ftp_messages["Message of the sender: "] = "Meddelande fr�n avs�ndaren: ";
$net2ftp_messages["net2ftp is free software, released under the GNU/GPL license. For more information, go to http://www.net2ftp.com."] = "net2ftp �r fri programvara, sl�ppt under GNU/GPL licens. F�r mer information, http://www.net2ftp.com.";

$net2ftp_messages["The zip file has been sent to <b>%1\$s</b>."] = "Zip fil skickad till <b>%1\$s</b>.";

// acceptFiles()
$net2ftp_messages["File <b>%1\$s</b> is too big. This file will not be uploaded."] = "Filen <b>%1\$s</b> �r f�r stor. Denna fil kommer inte att laddas upp.";
$net2ftp_messages["File <b>%1\$s</b> is contains a banned keyword. This file will not be uploaded."] = "File <b>%1\$s</b> is contains a banned keyword. This file will not be uploaded.";
$net2ftp_messages["Could not generate a temporary file."] = "Kunde inte skapa tempor�r fil.";
$net2ftp_messages["File <b>%1\$s</b> could not be moved"] = "Filen <b>%1\$s</b> kunde inte flyttas";
$net2ftp_messages["File <b>%1\$s</b> is OK"] = "Filen <b>%1\$s</b> �r OK";
$net2ftp_messages["Unable to move the uploaded file to the temp directory.<br /><br />The administrator of this website has to <b>chmod 777</b> the /temp directory of net2ftp."] = "Kunde inte flytta den uppladdade filen till tempor�rt bibliotek.<br /><br />Administrat�ren f�r denna webbsida m�ste <b>chmod 777</b> /temp biblioteket av net2ftp.";
$net2ftp_messages["You did not provide any file to upload."] = "Du valde ingen fil att ladda upp.";

// ftp_transferfiles()
$net2ftp_messages["File <b>%1\$s</b> could not be transferred to the FTP server"] = "Filen <b>%1\$s</b> kunde inte �verf�ras till FTP servern";
$net2ftp_messages["File <b>%1\$s</b> has been transferred to the FTP server using FTP mode <b>%2\$s</b>"] = "Filen <b>%1\$s</b> har �verf�rts till FTP servern med FTP mode <b>%2\$s</b>";
$net2ftp_messages["Transferring files to the FTP server"] = "�verf�r filer till FTP server";

// ftp_unziptransferfiles()
$net2ftp_messages["Processing archive nr %1\$s: <b>%2\$s</b>"] = "Bearbetar arkiv nr %1\$s: <b>%2\$s</b>";
$net2ftp_messages["Archive <b>%1\$s</b> was not processed because its filename extension was not recognized. Only zip, tar, tgz and gz archives are supported at the moment."] = "Arkiv <b>%1\$s</b> ej bearbetat, filnamnsf�rl�ngning inte igenk�nt. Bara zip, tar, tgz och gz arkiv st�djs f�r tillf�llet.";
$net2ftp_messages["Unable to extract the files and directories from the archive"] = "Kunde inte extrahera filer och bibliotek fr�n arkivet";
$net2ftp_messages["Archive contains filenames with ../ or ..\\ - aborting the extraction"] = "Archive contains filenames with ../ or ..\\ - aborting the extraction";
$net2ftp_messages["Could not unzip entry %1\$s (error code %2\$s)"] = "Could not unzip entry %1\$s (error code %2\$s)";
$net2ftp_messages["Created directory %1\$s"] = "Skapade bibliotek %1\$s";
$net2ftp_messages["Could not create directory %1\$s"] = "Kunde inte skapa bibliotek %1\$s";
$net2ftp_messages["Copied file %1\$s"] = "Kopierade fil %1\$s";
$net2ftp_messages["Could not copy file %1\$s"] = "Kunde inte kopiera fil %1\$s";
$net2ftp_messages["Unable to delete the temporary directory"] = "Kunde inte radera det tempor�ra biblioteket";
$net2ftp_messages["Unable to delete the temporary file %1\$s"] = "Kunde inte radera den tempor�ra filen %1\$s";

// ftp_mysite()
$net2ftp_messages["Unable to execute site command <b>%1\$s</b>"] = "Kunde inte utf�ra site command <b>%1\$s</b>";

// shutdown()
$net2ftp_messages["Your task was stopped"] = "Din uppgift stoppades";
$net2ftp_messages["The task you wanted to perform with net2ftp took more time than the allowed %1\$s seconds, and therefor that task was stopped."] = "Den uppgift du ville utf�ra med net2ftp tog l�ngre tid �n till�tna %1\$s sekunder, d�rf�r stoppades uppgiften.";
$net2ftp_messages["This time limit guarantees the fair use of the web server for everyone."] = "Denna tidsgr�ns garanterar r�ttvist utnyttjande av webbservern f�r alla.";
$net2ftp_messages["Try to split your task in smaller tasks: restrict your selection of files, and omit the biggest files."] = "F�rs�k dela upp din uppgift i mindre bitar: begr�nsa ditt val av filer och uteslut de st�rsta filerna.";
$net2ftp_messages["If you really need net2ftp to be able to handle big tasks which take a long time, consider installing net2ftp on your own server."] = "Om du verkligen vill att net2ftp ska kunna hantera stora uppgifter som tar l�ngre tid, �verv�g att installera net2ftp p� din egen server.";

// SendMail()
$net2ftp_messages["You did not provide any text to send by email!"] = "Du skrev ingen text att s�nda via email!";
$net2ftp_messages["You did not supply a From address."] = "Du skrev ingen Fr�n adress.";
$net2ftp_messages["You did not supply a To address."] = "Du skrev ingen Till adress.";
$net2ftp_messages["Due to technical problems the email to <b>%1\$s</b> could not be sent."] = "Pga tekniska problem kunde inte email till <b>%1\$s</b> skickas.";

// tempdir2()
$net2ftp_messages["Unable to create a temporary directory because (unvalid parent directory)"] = "Unable to create a temporary directory because (unvalid parent directory)";
$net2ftp_messages["Unable to create a temporary directory because (parent directory is not writeable)"] = "Unable to create a temporary directory because (parent directory is not writeable)";
$net2ftp_messages["Unable to create a temporary directory (too many tries)"] = "Unable to create a temporary directory (too many tries)";

// -------------------------------------------------------------------------
// /includes/logging.inc.php
// -------------------------------------------------------------------------
// logAccess(), logLogin(), logError()
$net2ftp_messages["Unable to execute the SQL query."] = "Kunde inte utf�ra SQL fr�ga.";
$net2ftp_messages["Unable to open the system log."] = "Unable to open the system log.";
$net2ftp_messages["Unable to write a message to the system log."] = "Unable to write a message to the system log.";

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
$net2ftp_messages["Please enter your username and password for FTP server "] = "Fyll i anv�ndarnamn och l�senord f�r FTP servern ";
$net2ftp_messages["You did not fill in your login information in the popup window.<br />Click on \"Go to the login page\" below."] = "Du fyllde inte i dina inloggningsuppgifter i popup f�nstret.<br />Klicka p� \"G� till login sida\" nedan.";
$net2ftp_messages["Access to the net2ftp Admin panel is disabled, because no password has been set in the file settings.inc.php. Enter a password in that file, and reload this page."] = "�tkomst av net2ftp Admin panel �r avst�ngd, d�rf�r inget l�senord angivits i file settings.inc.php. Fyll i l�senord i den filen och ladda om den h�r sidan.";
$net2ftp_messages["Please enter your Admin username and password"] = "Fyll i ditt Admin anv�ndarnamn och l�senord"; 
$net2ftp_messages["You did not fill in your login information in the popup window.<br />Click on \"Go to the login page\" below."] = "Du fyllde inte i dina inloggningsuppgifter i popup f�nstret.<br />Klicka p� \"G� till login sida\" nedan.";
$net2ftp_messages["Wrong username or password for the net2ftp Admin panel. The username and password can be set in the file settings.inc.php."] = "Fel anv�ndarnamn eller l�senord f�r net2ftp Admin panel. Anv�ndarnamn och l�senord anges i file settings.inc.php.";


// -------------------------------------------------------------------------
// /skins/skins.inc.php
// -------------------------------------------------------------------------
$net2ftp_messages["Blue"] = "Bl�";
$net2ftp_messages["Grey"] = "Gr�";
$net2ftp_messages["Black"] = "Svart";
$net2ftp_messages["Yellow"] = "Gul";
$net2ftp_messages["Pastel"] = "Pastell";

// getMime()
$net2ftp_messages["Directory"] = "Bibliotek";
$net2ftp_messages["Symlink"] = "Symlink";
$net2ftp_messages["ASP script"] = "ASP script";
$net2ftp_messages["Cascading Style Sheet"] = "Cascading Style Sheet";
$net2ftp_messages["HTML file"] = "HTML fil";
$net2ftp_messages["Java source file"] = "Java source fil";
$net2ftp_messages["JavaScript file"] = "JavaScript fil";
$net2ftp_messages["PHP Source"] = "PHP Source";
$net2ftp_messages["PHP script"] = "PHP script";
$net2ftp_messages["Text file"] = "Text fil";
$net2ftp_messages["Bitmap file"] = "Bitmap fil";
$net2ftp_messages["GIF file"] = "GIF fil";
$net2ftp_messages["JPEG file"] = "JPEG fil";
$net2ftp_messages["PNG file"] = "PNG fil";
$net2ftp_messages["TIF file"] = "TIF fil";
$net2ftp_messages["GIMP file"] = "GIMP fil";
$net2ftp_messages["Executable"] = "Executable";
$net2ftp_messages["Shell script"] = "Shell script";
$net2ftp_messages["MS Office - Word document"] = "MS Office - Word dokument";
$net2ftp_messages["MS Office - Excel spreadsheet"] = "MS Office - Excel kalkylblad";
$net2ftp_messages["MS Office - PowerPoint presentation"] = "MS Office - PowerPoint presentation";
$net2ftp_messages["MS Office - Access database"] = "MS Office - Access databas";
$net2ftp_messages["MS Office - Visio drawing"] = "MS Office - Visio drawing";
$net2ftp_messages["MS Office - Project file"] = "MS Office - Projekt fil";
$net2ftp_messages["OpenOffice - Writer 6.0 document"] = "OpenOffice - Writer 6.0 dokument";
$net2ftp_messages["OpenOffice - Writer 6.0 template"] = "OpenOffice - Writer 6.0 mall";
$net2ftp_messages["OpenOffice - Calc 6.0 spreadsheet"] = "OpenOffice - Calc 6.0 kalkylblad";
$net2ftp_messages["OpenOffice - Calc 6.0 template"] = "OpenOffice - Calc 6.0 mall";
$net2ftp_messages["OpenOffice - Draw 6.0 document"] = "OpenOffice - Draw 6.0 dokument";
$net2ftp_messages["OpenOffice - Draw 6.0 template"] = "OpenOffice - Draw 6.0 mall";
$net2ftp_messages["OpenOffice - Impress 6.0 presentation"] = "OpenOffice - Impress 6.0 presentation";
$net2ftp_messages["OpenOffice - Impress 6.0 template"] = "OpenOffice - Impress 6.0 mall";
$net2ftp_messages["OpenOffice - Writer 6.0 global document"] = "OpenOffice - Writer 6.0 global dokument";
$net2ftp_messages["OpenOffice - Math 6.0 document"] = "OpenOffice - Math 6.0 dokument";
$net2ftp_messages["StarOffice - StarWriter 5.x document"] = "StarOffice - StarWriter 5.x dokument";
$net2ftp_messages["StarOffice - StarWriter 5.x global document"] = "StarOffice - StarWriter 5.x global dokument";
$net2ftp_messages["StarOffice - StarCalc 5.x spreadsheet"] = "StarOffice - StarCalc 5.x kalkylblad";
$net2ftp_messages["StarOffice - StarDraw 5.x document"] = "StarOffice - StarDraw 5.x dokument";
$net2ftp_messages["StarOffice - StarImpress 5.x presentation"] = "StarOffice - StarImpress 5.x presentation";
$net2ftp_messages["StarOffice - StarImpress Packed 5.x file"] = "StarOffice - StarImpress Packed 5.x fil";
$net2ftp_messages["StarOffice - StarMath 5.x document"] = "StarOffice - StarMath 5.x dokument";
$net2ftp_messages["StarOffice - StarChart 5.x document"] = "StarOffice - StarChart 5.x dokument";
$net2ftp_messages["StarOffice - StarMail 5.x mail file"] = "StarOffice - StarMail 5.x mail fil";
$net2ftp_messages["Adobe Acrobat document"] = "Adobe Acrobat dokument";
$net2ftp_messages["ARC archive"] = "ARC arkiv";
$net2ftp_messages["ARJ archive"] = "ARJ arkiv";
$net2ftp_messages["RPM"] = "RPM";
$net2ftp_messages["GZ archive"] = "GZ arkiv";
$net2ftp_messages["TAR archive"] = "TAR arkiv";
$net2ftp_messages["Zip archive"] = "Zip arkiv";
$net2ftp_messages["MOV movie file"] = "MOV film fil";
$net2ftp_messages["MPEG movie file"] = "MPEG film fil";
$net2ftp_messages["Real movie file"] = "Real film fil";
$net2ftp_messages["Quicktime movie file"] = "Quicktime film fil";
$net2ftp_messages["Shockwave flash file"] = "Shockwave flash fil";
$net2ftp_messages["Shockwave file"] = "Shockwave fil";
$net2ftp_messages["WAV sound file"] = "WAV sound fil";
$net2ftp_messages["Font file"] = "Font fil";
$net2ftp_messages["%1\$s File"] = "%1\$s Fil";
$net2ftp_messages["File"] = "Fil";

// getAction()
$net2ftp_messages["Back"] = "Bak�t";
$net2ftp_messages["Submit"] = "Skicka in";
$net2ftp_messages["Refresh"] = "Uppdatera";
$net2ftp_messages["Details"] = "Details";
$net2ftp_messages["Icons"] = "Ikoner";
$net2ftp_messages["List"] = "Lista";
$net2ftp_messages["Logout"] = "Logga ut";
$net2ftp_messages["Help"] = "Hj�lp";
$net2ftp_messages["Bookmark"] = "Bokm�rke";
$net2ftp_messages["Save"] = "Spara";
$net2ftp_messages["Default"] = "F�rvalt";


// -------------------------------------------------------------------------
// /skins/[skin]/header.template.php and footer.template.php
// -------------------------------------------------------------------------
$net2ftp_messages["Help Guide"] = "Hj�lp Guide";
$net2ftp_messages["Forums"] = "Forum";
$net2ftp_messages["License"] = "Licens";
$net2ftp_messages["Powered by"] = "Powered by";
$net2ftp_messages["You are now taken to the net2ftp forums. These forums are for net2ftp related topics only - not for generic webhosting questions."] = "Du skickas nu till net2ftp forum. Dessa forum �r endast till f�r net2ftp relaterade �mnen - inte f�r allm�nna webhotellsfr�gor.";
$net2ftp_messages["Standard"] = "Standard";
$net2ftp_messages["Mobile"] = "Mobile";

// -------------------------------------------------------------------------
// Admin module
if ($net2ftp_globals["state"] == "admin") {
// -------------------------------------------------------------------------

// /modules/admin/admin.inc.php
$net2ftp_messages["Admin functions"] = "Admin funktioner";

// /skins/[skin]/admin1.template.php
$net2ftp_messages["Version information"] = "Versions information";
$net2ftp_messages["This version of net2ftp is up-to-date."] = "Denna version av net2ftp �r up-to-date.";
$net2ftp_messages["The latest version information could not be retrieved from the net2ftp.com server. Check the security settings of your browser, which may prevent the loading of a small file from the net2ftp.com server."] = "Information om senaste version kunde inte laddas ner fr�n net2ftp.com�s server. Kontrollera s�kerhetsinst�llningarna i din webbl�sare, dessa kan hindra nedladdning av en liten fil fr�n net2ftp.com�s server.";
$net2ftp_messages["Logging"] = "Loggar";
$net2ftp_messages["Date from:"] = "Datum fr�n:";
$net2ftp_messages["to:"] = "till:";
$net2ftp_messages["Empty logs"] = "T�m logg";
$net2ftp_messages["View logs"] = "Visa logg";
$net2ftp_messages["Go"] = "K�r";
$net2ftp_messages["Setup MySQL tables"] = "Setup MySQL tabell";
$net2ftp_messages["Create the MySQL database tables"] = "Skapa MySQL databastabell";

} // end admin

// -------------------------------------------------------------------------
// Admin_createtables module
if ($net2ftp_globals["state"] == "admin_createtables") {
// -------------------------------------------------------------------------

// /modules/admin_createtables/admin_createtables.inc.php
$net2ftp_messages["Admin functions"] = "Admin funktioner";
$net2ftp_messages["The handle of file %1\$s could not be opened."] = "Hanteringen av filen %1\$s kunde inte startas.";
$net2ftp_messages["The file %1\$s could not be opened."] = "Filen %1\$s kunde inte �ppnas.";
$net2ftp_messages["The handle of file %1\$s could not be closed."] = "Hanteringen av filen %1\$s kunde inte avslutas.";
$net2ftp_messages["The connection to the server <b>%1\$s</b> could not be set up. Please check the database settings you've entered."] = "Anslutningen till servern <b>%1\$s</b> kunde inte uppr�ttas. kontrollera databasinst�llningarna du angett.";
$net2ftp_messages["Unable to select the database <b>%1\$s</b>."] = "Kunde inte v�lja databasen <b>%1\$s</b>.";
$net2ftp_messages["The SQL query nr <b>%1\$s</b> could not be executed."] = "SQL fr�ga nr <b>%1\$s</b> kunde inte utf�ras.";
$net2ftp_messages["The SQL query nr <b>%1\$s</b> was executed successfully."] = "SQL fr�ga nr <b>%1\$s</b> utf�rd framg�ngsrikt.";

// /skins/[skin]/admin_createtables1.template.php
$net2ftp_messages["Please enter your MySQL settings:"] = "Fyll i dina MySQL inst�llningar:";
$net2ftp_messages["MySQL username"] = "MySQL anv�ndarnamn";
$net2ftp_messages["MySQL password"] = "MySQL l�senord";
$net2ftp_messages["MySQL database"] = "MySQL databas";
$net2ftp_messages["MySQL server"] = "MySQL server";
$net2ftp_messages["This SQL query is going to be executed:"] = "Denna SQL fr�ga kommer utf�ras:";
$net2ftp_messages["Execute"] = "Utf�r";

// /skins/[skin]/admin_createtables2.template.php
$net2ftp_messages["Settings used:"] = "Anv�nda inst�llningar:";
$net2ftp_messages["MySQL password length"] = "MySQL l�senord l�ngd";
$net2ftp_messages["Results:"] = "Resultat:";

} // end admin_createtables


// -------------------------------------------------------------------------
// Admin_viewlogs module
if ($net2ftp_globals["state"] == "admin_viewlogs") {
// -------------------------------------------------------------------------

// /modules/admin_createtables/admin_viewlogs.inc.php
$net2ftp_messages["Admin functions"] = "Admin funktioner";
$net2ftp_messages["Unable to execute the SQL query <b>%1\$s</b>."] = "Kunde inte utf�ra SQL fr�ga <b>%1\$s</b>.";
$net2ftp_messages["No data"] = "Inga data";

} // end admin_viewlogs


// -------------------------------------------------------------------------
// Admin_emptylogs module
if ($net2ftp_globals["state"] == "admin_emptylogs") {
// -------------------------------------------------------------------------

// /modules/admin_createtables/admin_emptylogs.inc.php
$net2ftp_messages["Admin functions"] = "Admin funktioner";
$net2ftp_messages["The table <b>%1\$s</b> was emptied successfully."] = "Tabellen <b>%1\$s</b> t�mdes.";
$net2ftp_messages["The table <b>%1\$s</b> could not be emptied."] = "Tabellen <b>%1\$s</b> kunde inte t�mmas.";
$net2ftp_messages["The table <b>%1\$s</b> was optimized successfully."] = "Tabellen <b>%1\$s</b> optimerades.";
$net2ftp_messages["The table <b>%1\$s</b> could not be optimized."] = "Tabellen <b>%1\$s</b> kunde inte optimeras.";

} // end admin_emptylogs


// -------------------------------------------------------------------------
// Advanced module
if ($net2ftp_globals["state"] == "advanced") {
// -------------------------------------------------------------------------

// /modules/advanced/advanced.inc.php
$net2ftp_messages["Advanced functions"] = "Avancerade funktioner";

// /skins/[skin]/advanced1.template.php
$net2ftp_messages["Go"] = "K�r";
$net2ftp_messages["Disabled"] = "Avst�ngd";
$net2ftp_messages["Advanced FTP functions"] = "Avancerade FTP funktioner";
$net2ftp_messages["Send arbitrary FTP commands to the FTP server"] = "Skicka godtyckligt FTP kommando till FTP servern";
$net2ftp_messages["This function is available on PHP 5 only"] = "Denna funktion �r endast tillg�nglig med PHP 5";
$net2ftp_messages["Troubleshooting functions"] = "Fels�kningsfunktioner";
$net2ftp_messages["Troubleshoot net2ftp on this webserver"] = "Fels�k net2ftp p� denna webbserver";
$net2ftp_messages["Troubleshoot an FTP server"] = "Fels�k en FTP server";
$net2ftp_messages["Test the net2ftp list parsing rules"] = "Testa net2ftp listanalysregler";
$net2ftp_messages["Translation functions"] = "�vers�ttningsfunktioner";
$net2ftp_messages["Introduction to the translation functions"] = "Introduktion till �vers�ttningsfunktioner";
$net2ftp_messages["Extract messages to translate from code files"] = "Extrhera meddelande f�r att �vers�tta fr�n kodade filer";
$net2ftp_messages["Check if there are new or obsolete messages"] = "S�k nya och gamla meddelanden";

$net2ftp_messages["Beta functions"] = "Beta funktioner";
$net2ftp_messages["Send a site command to the FTP server"] = "Skicka site command till FTP servern";
$net2ftp_messages["Apache: password-protect a directory, create custom error pages"] = "Apache: l�senordsskydda ett bibliotek, skapa egna felsidor";
$net2ftp_messages["MySQL: execute an SQL query"] = "MySQL: utf�r en SQL fr�ga";


// advanced()
$net2ftp_messages["The site command functions are not available on this webserver."] = "Site command funktioner inte tillg�ngliga p� denna webbserver.";
$net2ftp_messages["The Apache functions are not available on this webserver."] = "Apache funktioner inte tillg�ngliga p� denna webbserver.";
$net2ftp_messages["The MySQL functions are not available on this webserver."] = "MySQL funktioner inte tillg�ngliga p� denna webbserver.";
$net2ftp_messages["Unexpected state2 string. Exiting."] = "Ov�ntad state2 rad. Avslutar.";

} // end advanced


// -------------------------------------------------------------------------
// Advanced_ftpserver module
if ($net2ftp_globals["state"] == "advanced_ftpserver") {
// -------------------------------------------------------------------------

// /modules/advanced_ftpserver/advanced_ftpserver.inc.php
$net2ftp_messages["Troubleshoot an FTP server"] = "Fels�k en FTP server";

// /skins/[skin]/advanced_ftpserver1.template.php
$net2ftp_messages["Connection settings:"] = "Anslutningsinst�llningar:";
$net2ftp_messages["FTP server"] = "FTP server";
$net2ftp_messages["FTP server port"] = "FTP server port";
$net2ftp_messages["Username"] = "Anv�ndarnamn";
$net2ftp_messages["Password"] = "L�senord";
$net2ftp_messages["Password length"] = "L�senord l�ngd";
$net2ftp_messages["Passive mode"] = "Passive mode";
$net2ftp_messages["Directory"] = "Bibliotek";
$net2ftp_messages["Printing the result"] = "Skriver ut resultat";

// /skins/[skin]/advanced_ftpserver2.template.php
$net2ftp_messages["Connecting to the FTP server: "] = "Ansluter till FTP servern: ";
$net2ftp_messages["Logging into the FTP server: "] = "Loggar in p� FTP servern: ";
$net2ftp_messages["Setting the passive mode: "] = "St�ller in passive mode: ";
$net2ftp_messages["Getting the FTP server system type: "] = "Mottar FTP server system typ: ";
$net2ftp_messages["Changing to the directory %1\$s: "] = "�ndrar till bibliotek %1\$s: ";
$net2ftp_messages["The directory from the FTP server is: %1\$s "] = "Biblioteket fr�n FTP servern �r: %1\$s ";
$net2ftp_messages["Getting the raw list of directories and files: "] = "Mottar r�lista med bibliotek och filer: ";
$net2ftp_messages["Trying a second time to get the raw list of directories and files: "] = "F�rs�ker en andra g�ng att motta r�listan med bibliotek och filer: ";
$net2ftp_messages["Closing the connection: "] = "St�nger anslutning: ";
$net2ftp_messages["Raw list of directories and files:"] = "R�lista med bibliotek och filer:";
$net2ftp_messages["Parsed list of directories and files:"] = "Analyserad lista med bibliotek och filer:";

$net2ftp_messages["OK"] = "OK";
$net2ftp_messages["not OK"] = "inte OK";

} // end advanced_ftpserver


// -------------------------------------------------------------------------
// Advanced_parsing module
if ($net2ftp_globals["state"] == "advanced_parsing") {
// -------------------------------------------------------------------------

$net2ftp_messages["Test the net2ftp list parsing rules"] = "Testa net2ftp listanalysregler";
$net2ftp_messages["Sample input"] = "Exempelinmatning";
$net2ftp_messages["Parsed output"] = "Analyserat resultat";

} // end advanced_parsing


// -------------------------------------------------------------------------
// Advanced_webserver module
if ($net2ftp_globals["state"] == "advanced_webserver") {
// -------------------------------------------------------------------------

$net2ftp_messages["Troubleshoot your net2ftp installation"] = "Fels�k din net2ftp installation";
$net2ftp_messages["Printing the result"] = "Skriver ut resultat";

$net2ftp_messages["Checking if the FTP module of PHP is installed: "] = "Kontrollerar om FTP modul i PHP �r installerad: ";
$net2ftp_messages["yes"] = "ja";
$net2ftp_messages["no - please install it!"] = "nej - installera den!";

$net2ftp_messages["Checking the permissions of the directory on the web server: a small file will be written to the /temp folder and then deleted."] = "Kontrollerar r�ttigheter f�r biblioteket p� webbservern: en liten fil kommer skrivas till /temp mappen och sen raderas.";
$net2ftp_messages["Creating filename: "] = "Skapar filenamn: ";
$net2ftp_messages["OK. Filename: %1\$s"] = "OK. Filnamn: %1\$s";
$net2ftp_messages["not OK"] = "inte OK";
$net2ftp_messages["OK"] = "OK";
$net2ftp_messages["not OK. Check the permissions of the %1\$s directory"] = "inte OK. Kontrollera r�ttigheter f�r %1\$s biblioteket";
$net2ftp_messages["Opening the file in write mode: "] = "�ppnar filen i skrivl�ge: ";
$net2ftp_messages["Writing some text to the file: "] = "Skriver text till filen: ";
$net2ftp_messages["Closing the file: "] = "St�nger filen: ";
$net2ftp_messages["Deleting the file: "] = "Raderar filen: ";

$net2ftp_messages["Testing the FTP functions"] = "Testar FTP funktioner";
$net2ftp_messages["Connecting to a test FTP server: "] = "Ansluter till en test FTP server: ";
$net2ftp_messages["Connecting to the FTP server: "] = "Ansluter till FTP servern: ";
$net2ftp_messages["Logging into the FTP server: "] = "Loggar in p� FTP servern: ";
$net2ftp_messages["Setting the passive mode: "] = "St�ller in passive mode: ";
$net2ftp_messages["Getting the FTP server system type: "] = "Mottar FTP server system typ: ";
$net2ftp_messages["Changing to the directory %1\$s: "] = "�ndrar till bibliotek %1\$s: ";
$net2ftp_messages["The directory from the FTP server is: %1\$s "] = "Biblioteket fr�n FTP servern �r: %1\$s ";
$net2ftp_messages["Getting the raw list of directories and files: "] = "Mottar r�lista med bibliotek och filer: ";
$net2ftp_messages["Trying a second time to get the raw list of directories and files: "] = "F�rs�ker en andra g�ng att motta r�listan med bibliotek och filer: ";
$net2ftp_messages["Closing the connection: "] = "St�nger anslutning: ";
$net2ftp_messages["Raw list of directories and files:"] = "R�lista med bibliotek och filer:";
$net2ftp_messages["Parsed list of directories and files:"] = "Analyserad lista med bibliotek och filer:";
$net2ftp_messages["OK"] = "OK";
$net2ftp_messages["not OK"] = "inte OK";

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
$net2ftp_messages["Note: when you will use this bookmark, a popup window will ask you for your username and password."] = "Anm�rkning: n�r du anv�nder detta bokm�rke, kommer ett popup f�nster �ppnas och fr�ga efter anv�ndarnamn och l�senord.";

} // end bookmark


// -------------------------------------------------------------------------
// Browse module
if ($net2ftp_globals["state"] == "browse") {
// -------------------------------------------------------------------------

// /modules/browse/browse.inc.php
$net2ftp_messages["Choose a directory"] = "V�lj bibliotek";
$net2ftp_messages["Please wait..."] = "V�nta...";

// browse()
$net2ftp_messages["Directories with names containing \' cannot be displayed correctly. They can only be deleted. Please go back and select another subdirectory."] = "Bibliotek med namn som inneh�ller \' kan inte visas korrekt. De kan bara raderas. Backa och v�lj ett annat underbibliotek.";

$net2ftp_messages["Daily limit reached: you will not be able to transfer data"] = "Daglig gr�ns uppn�dd: du kommer inte kunna �verf�ra data";
$net2ftp_messages["In order to guarantee the fair use of the web server for everyone, the data transfer volume and script execution time are limited per user, and per day. Once this limit is reached, you can still browse the FTP server but not transfer data to/from it."] = "F�r att garantera r�ttvist anv�ndande av webbservern f�r alla, �r data�verf�ringsvolymer och scriptk�rningar begr�nsade f�r alla anv�ndare och per dag. Vid uppn�dd gr�ns kan du fortfarande navigera p� FTP servern men inte �verf�ra data till/fr�n den.";
$net2ftp_messages["If you need unlimited usage, please install net2ftp on your own web server."] = "Beh�ver du obegr�nsat anv�ndande, Installera net2ftp p� din egen webbserver.";

// printdirfilelist()
// Keep this short, it must fit in a small button!
$net2ftp_messages["New dir"] = "Nytt dir";
$net2ftp_messages["New file"] = "Ny fil";
$net2ftp_messages["HTML templates"] = "HTML mallar";
$net2ftp_messages["Upload"] = "Upload";
$net2ftp_messages["Java Upload"] = "Java Upload";
$net2ftp_messages["Flash Upload"] = "Flash Upload";
$net2ftp_messages["Install"] = "Install";
$net2ftp_messages["Advanced"] = "Avancerat";
$net2ftp_messages["Copy"] = "Kopiera";
$net2ftp_messages["Move"] = "Flytta";
$net2ftp_messages["Delete"] = "Radera";
$net2ftp_messages["Rename"] = "Byt namn";
$net2ftp_messages["Chmod"] = "Chmod";
$net2ftp_messages["Download"] = "Download";
$net2ftp_messages["Unzip"] = "Unzip";
$net2ftp_messages["Zip"] = "Zip";
$net2ftp_messages["Size"] = "Storlek";
$net2ftp_messages["Search"] = "S�k";
$net2ftp_messages["Go to the parent directory"] = "G� till huvudbibliotek";
$net2ftp_messages["Go"] = "K�r";
$net2ftp_messages["Transform selected entries: "] = "Omvandla valda inmatningar: ";
$net2ftp_messages["Transform selected entry: "] = "Omvandla vald inmatning: ";
$net2ftp_messages["Make a new subdirectory in directory %1\$s"] = "Skapa nytt underbibliotek i bibliotek %1\$s";
$net2ftp_messages["Create a new file in directory %1\$s"] = "Skapa ny fil i bibliotek %1\$s";
$net2ftp_messages["Create a website easily using ready-made templates"] = "Skapa webbsida l�tt med f�rdiga mallar";
$net2ftp_messages["Upload new files in directory %1\$s"] = "Ladda upp nya filer i bibliotek %1\$s";
$net2ftp_messages["Upload directories and files using a Java applet"] = "Ladda upp bibliotek och filer med en Java applet";
$net2ftp_messages["Upload files using a Flash applet"] = "Upload files using a Flash applet";
$net2ftp_messages["Install software packages (requires PHP on web server)"] = "Installera mjukvarupaket (kr�ver PHP p� webbservern)";
$net2ftp_messages["Go to the advanced functions"] = "G� till avancerade funktioner";
$net2ftp_messages["Copy the selected entries"] = "Kopiera valda inmatningar";
$net2ftp_messages["Move the selected entries"] = "Flytta valda inmatningar";
$net2ftp_messages["Delete the selected entries"] = "Radera valda inmatningar";
$net2ftp_messages["Rename the selected entries"] = "D�p om valda inmatningar";
$net2ftp_messages["Chmod the selected entries (only works on Unix/Linux/BSD servers)"] = "Chmod valda inmatningar (fungerar endast p� Unix/Linux/BSD serverar)";
$net2ftp_messages["Download a zip file containing all selected entries"] = "Ladda ner en zip fil inneh�llande alla valda inmatningar";
$net2ftp_messages["Unzip the selected archives on the FTP server"] = "Unzip valda arkiv p� FTP servern";
$net2ftp_messages["Zip the selected entries to save or email them"] = "Zippa valda inmatningar f�r att spara eller skicka med email";
$net2ftp_messages["Calculate the size of the selected entries"] = "Ber�kna storlek p� valda inmatningar";
$net2ftp_messages["Find files which contain a particular word"] = "Hitta filer som inneh�ller ett s�rskillt ord";
$net2ftp_messages["Click to sort by %1\$s in descending order"] = "Klicka f�r att sortera efter %1\$s i fallande ordning";
$net2ftp_messages["Click to sort by %1\$s in ascending order"] = "Klicka f�r att sortera efter %1\$s i stigande ordning";
$net2ftp_messages["Ascending order"] = "Stigande ordning";
$net2ftp_messages["Descending order"] = "Fallande ordning";
$net2ftp_messages["Upload files"] = "Upload files";
$net2ftp_messages["Up"] = "Upp";
$net2ftp_messages["Click to check or uncheck all rows"] = "Klicka f�r att markera eller avmarkera alla rader";
$net2ftp_messages["All"] = "Alla";
$net2ftp_messages["Name"] = "Namn";
$net2ftp_messages["Type"] = "Typ";
//$net2ftp_messages["Size"] = "Size";
$net2ftp_messages["Owner"] = "�gare";
$net2ftp_messages["Group"] = "Grupp";
$net2ftp_messages["Perms"] = "R�ttigh";
$net2ftp_messages["Mod Time"] = "Mod Tid";
$net2ftp_messages["Actions"] = "Funktion";
$net2ftp_messages["Select the directory %1\$s"] = "V�lj bibliotek %1\$s";
$net2ftp_messages["Select the file %1\$s"] = "V�lj filen %1\$s";
$net2ftp_messages["Select the symlink %1\$s"] = "V�lj symlink %1\$s";
$net2ftp_messages["Go to the subdirectory %1\$s"] = "G� till underbibliotek %1\$s";
$net2ftp_messages["Download the file %1\$s"] = "Ladda ner filen %1\$s";
$net2ftp_messages["Follow symlink %1\$s"] = "F�lj symlink %1\$s";
$net2ftp_messages["View"] = "Visa";
$net2ftp_messages["Edit"] = "�ndra";
$net2ftp_messages["Update"] = "Upddatera";
$net2ftp_messages["Open"] = "�ppna";
$net2ftp_messages["View the highlighted source code of file %1\$s"] = "Visa markerad k�llkod f�r fil %1\$s";
$net2ftp_messages["Edit the source code of file %1\$s"] = "�ndra k�llkod f�r fil %1\$s";
$net2ftp_messages["Upload a new version of the file %1\$s and merge the changes"] = "Ladda upp ny version av filen %1\$s och f�rena �ndringar";
$net2ftp_messages["View image %1\$s"] = "Visa bild %1\$s";
$net2ftp_messages["View the file %1\$s from your HTTP web server"] = "Visa filen %1\$s fr�n din HTTP webbserver";
$net2ftp_messages["(Note: This link may not work if you don't have your own domain name.)"] = "(Notering: Denna l�nk kanske inte fungerar om du inte har eget dom�nnamn.)";
$net2ftp_messages["This folder is empty"] = "Denna mapp �r tom";

// printSeparatorRow()
$net2ftp_messages["Directories"] = "Bibliotek";
$net2ftp_messages["Files"] = "Filer";
$net2ftp_messages["Symlinks"] = "Symlinks";
$net2ftp_messages["Unrecognized FTP output"] = "Ok�nd FTP utdata";
$net2ftp_messages["Number"] = "Nummer";
$net2ftp_messages["Size"] = "Storlek";
$net2ftp_messages["Skipped"] = "Hoppa �ver";
$net2ftp_messages["Data transferred from this IP address today"] = "Data transferred from this IP address today";
$net2ftp_messages["Data transferred to this FTP server today"] = "Data transferred to this FTP server today";

// printLocationActions()
$net2ftp_messages["Language:"] = "Spr�k:";
$net2ftp_messages["Skin:"] = "Skin:";
$net2ftp_messages["View mode:"] = "Visa mode:";
$net2ftp_messages["Directory Tree"] = "Bibliotek";

// ftp2http()
$net2ftp_messages["Execute %1\$s in a new window"] = "Utf�r %1\$s i ett nytt f�nster";
$net2ftp_messages["This file is not accessible from the web"] = "Ingen �tkomst av denna fil fr�n webben";

// printDirectorySelect()
$net2ftp_messages["Double-click to go to a subdirectory:"] = "Dubbel-klicka f�r attg� till underbibliotek:";
$net2ftp_messages["Choose"] = "V�lj";
$net2ftp_messages["Up"] = "Upp";

} // end browse


// -------------------------------------------------------------------------
// Calculate size module
if ($net2ftp_globals["state"] == "calculatesize") {
// -------------------------------------------------------------------------
$net2ftp_messages["Size of selected directories and files"] = "Storlek av valda bibliotek och filer";
$net2ftp_messages["The total size taken by the selected directories and files is:"] = "Total storlek av valda bibliotek och filer �r:";
$net2ftp_messages["The number of files which were skipped is:"] = "Antal filer som hoppades �ver �r:";

} // end calculatesize


// -------------------------------------------------------------------------
// Chmod module
if ($net2ftp_globals["state"] == "chmod") {
// -------------------------------------------------------------------------
$net2ftp_messages["Chmod directories and files"] = "Chmod bibliotek och filer";
$net2ftp_messages["Set all permissions"] = "St�ll in alla beh�righeter";
$net2ftp_messages["Read"] = "L�s";
$net2ftp_messages["Write"] = "Skriv";
$net2ftp_messages["Execute"] = "Utf�r";
$net2ftp_messages["Owner"] = "�gare";
$net2ftp_messages["Group"] = "Grupp";
$net2ftp_messages["Everyone"] = "Alla";
$net2ftp_messages["To set all permissions to the same values, enter those permissions and click on the button \"Set all permissions\""] = "F�r att st�lla in samma v�rde p� alla beh�righeter, Skriv i beh�righeter ovanf�r och klicka p� knappen \"St�ll in alla beh�righeter\"";
$net2ftp_messages["Set the permissions of directory <b>%1\$s</b> to: "] = "St�ll in beh�righeter f�r bibliotek <b>%1\$s</b> till: ";
$net2ftp_messages["Set the permissions of file <b>%1\$s</b> to: "] = "St�ll in beh�righeter f�r fil <b>%1\$s</b> till: ";
$net2ftp_messages["Set the permissions of symlink <b>%1\$s</b> to: "] = "St�ll in beh�righeter f�r symlink <b>%1\$s</b> till: ";
$net2ftp_messages["Chmod value"] = "Chmod v�rde";
$net2ftp_messages["Chmod also the subdirectories within this directory"] = "Chmod �ven underbibliotek i detta bibliotek";
$net2ftp_messages["Chmod also the files within this directory"] = "Chmod �ven filer i detta bibliotek";
$net2ftp_messages["The chmod nr <b>%1\$s</b> is out of the range 000-777. Please try again."] = "Chmod nr <b>%1\$s</b> �r utanf�r intervallet 000-777. F�rs�k igen.";

} // end chmod


// -------------------------------------------------------------------------
// Clear cookies module
// -------------------------------------------------------------------------
// No messages


// -------------------------------------------------------------------------
// Copy/Move/Delete module
if ($net2ftp_globals["state"] == "copymovedelete") {
// -------------------------------------------------------------------------
$net2ftp_messages["Choose a directory"] = "V�lj bibliotek";
$net2ftp_messages["Copy directories and files"] = "Kopiera bibliotek och filer";
$net2ftp_messages["Move directories and files"] = "Flytta bibliotek och filer";
$net2ftp_messages["Delete directories and files"] = "Radera bibliotek och filer";
$net2ftp_messages["Are you sure you want to delete these directories and files?"] = "�r du s�ker du vill radera dessa bibliotek och filer?";
$net2ftp_messages["All the subdirectories and files of the selected directories will also be deleted!"] = "Alla underbibliotek och filer i de valda biblioteken kommer ocks� raderas!";
$net2ftp_messages["Set all targetdirectories"] = "Ange m�lbibliotek";
$net2ftp_messages["To set a common target directory, enter that target directory in the textbox above and click on the button \"Set all targetdirectories\"."] = "F�r att st�lla in ett vanligt m�lbibliotek, ange det m�lbiblioteket i textf�ltet ovan och klicka p� knappen \"Ange alla m�lbibliotek\".";
$net2ftp_messages["Note: the target directory must already exist before anything can be copied into it."] = "Notering: m�lbiblioteket m�ste vara skapat innan n�got kan kopieras in i det.";
$net2ftp_messages["Different target FTP server:"] = "Annan m�lFTP server:";
$net2ftp_messages["Username"] = "Anv�ndarnamn";
$net2ftp_messages["Password"] = "L�senord";
$net2ftp_messages["Leave empty if you want to copy the files to the same FTP server."] = "L�mna tomt om du vill kopiera filerna till samma FTP server.";
$net2ftp_messages["If you want to copy the files to another FTP server, enter your login data."] = "Om du vill kopiera filerna till en annan FTP server, ange dina inloggningsuppgifter.";
$net2ftp_messages["Leave empty if you want to move the files to the same FTP server."] = "L�mna tomt om du vill flytta filer till samma FTP server.";
$net2ftp_messages["If you want to move the files to another FTP server, enter your login data."] = "Om du vill flytta filer till en annan FTP server, ange dina inloggningsuppgifter.";
$net2ftp_messages["Copy directory <b>%1\$s</b> to:"] = "Kopiera bibliotek <b>%1\$s</b> till:";
$net2ftp_messages["Move directory <b>%1\$s</b> to:"] = "Flytta bibliotek <b>%1\$s</b> till:";
$net2ftp_messages["Directory <b>%1\$s</b>"] = "Bibliotek <b>%1\$s</b>";
$net2ftp_messages["Copy file <b>%1\$s</b> to:"] = "Kopiera fil <b>%1\$s</b> till:";
$net2ftp_messages["Move file <b>%1\$s</b> to:"] = "Flytta fil <b>%1\$s</b> till:";
$net2ftp_messages["File <b>%1\$s</b>"] = "Fil <b>%1\$s</b>";
$net2ftp_messages["Copy symlink <b>%1\$s</b> to:"] = "Kopiera symlink <b>%1\$s</b> till:";
$net2ftp_messages["Move symlink <b>%1\$s</b> to:"] = "Flytta symlink <b>%1\$s</b> till:";
$net2ftp_messages["Symlink <b>%1\$s</b>"] = "Symlink <b>%1\$s</b>";
$net2ftp_messages["Target directory:"] = "M�lbibliotek:";
$net2ftp_messages["Target name:"] = "M�lnamn:";
$net2ftp_messages["Processing the entries:"] = "Bearbetar inmatningarna:";

} // end copymovedelete


// -------------------------------------------------------------------------
// Download file module
// -------------------------------------------------------------------------
// No messages


// -------------------------------------------------------------------------
// EasyWebsite module
if ($net2ftp_globals["state"] == "easyWebsite") {
// -------------------------------------------------------------------------
$net2ftp_messages["Create a website in 4 easy steps"] = "Skapa webbsite i 4 enkla steg";
$net2ftp_messages["Template overview"] = "Mall�versikt";
$net2ftp_messages["Template details"] = "Mallegenskaper";
$net2ftp_messages["Files are copied"] = "Filer �r kopierade";
$net2ftp_messages["Edit your pages"] = "�ndra dina sidor";

// Screen 1 - printTemplateOverview
$net2ftp_messages["Click on the image to view the details of a template."] = "Klicka p� bilden f�r att visa mallegenskaper.";
$net2ftp_messages["Back to the Browse screen"] = "Tillbaka till bl�ddringssk�rm";
$net2ftp_messages["Template"] = "Mall";
$net2ftp_messages["Copyright"] = "Copyright";
$net2ftp_messages["Click on the image to view the details of this template"] = "Klick p� bilden f�r att visa egenskaper f�r denna mall";

// Screen 2 - printTemplateDetails
$net2ftp_messages["The template files will be copied to your FTP server. Existing files with the same filename will be overwritten. Do you want to continue?"] = "Mallfiler kommer att kopieras till din FTP server. Existerande filer med samma namn kommer att skrivas �ver. Vill du forts�tta?";
$net2ftp_messages["Install template to directory: "] = "Installera mall i bibliotek: ";
$net2ftp_messages["Install"] = "Install";
$net2ftp_messages["Size"] = "Storlek";
$net2ftp_messages["Preview page"] = "�versiktssida";
$net2ftp_messages["opens in a new window"] = "�ppnas i nytt f�nster";

// Screen 3
$net2ftp_messages["Please wait while the template files are being transferred to your server: "] = "V�nta medans mallfiler �verf�rs till din server: ";
$net2ftp_messages["Done."] = "F�rdig.";
$net2ftp_messages["Continue"] = "Forts�tt";

// Screen 4 - printEasyAdminPanel
$net2ftp_messages["Edit page"] = "�ndra sida";
$net2ftp_messages["Browse the FTP server"] = "Bl�ddra i FTP servern";
$net2ftp_messages["Add this link to your favorites to return to this page later on!"] = "L�gg till denna l�nk i dina favoriter f�r att �terv�nda till denna sida senare!";
$net2ftp_messages["Edit website at %1\$s"] = "�ndra website hos %1\$s";
$net2ftp_messages["Internet Explorer: right-click on the link and choose \"Add to Favorites...\""] = "Internet Explorer: h�ger-klicka p� l�nken och v�lj \"L�gg till i Favoriter...\"";
$net2ftp_messages["Netscape, Mozilla, Firefox: right-click on the link and choose \"Bookmark This Link...\""] = "Netscape, Mozilla, Firefox: h�ger-klicka p� l�nken och v�lj \"L�gg till bokm�rke...\"";

// ftp_copy_local2ftp
$net2ftp_messages["WARNING: Unable to create the subdirectory <b>%1\$s</b>. It may already exist. Continuing..."] = "VARNING: Kunde inte skapa underbibliotek <b>%1\$s</b>. Det kan redan finnas. Forts�tter...";
$net2ftp_messages["Created target subdirectory <b>%1\$s</b>"] = "Skapat m�lunderbibliotek <b>%1\$s</b>";
$net2ftp_messages["WARNING: Unable to copy the file <b>%1\$s</b>. Continuing..."] = "WARNING: Unable to copy the file <b>%1\$s</b>. Continuing...";
$net2ftp_messages["Copied file <b>%1\$s</b>"] = "Copied file <b>%1\$s</b>";
}


// -------------------------------------------------------------------------
// Edit module
if ($net2ftp_globals["state"] == "edit") {
// -------------------------------------------------------------------------

// /modules/edit/edit.inc.php
$net2ftp_messages["Unable to open the template file"] = "Kunde inte �ppna mallfilen";
$net2ftp_messages["Unable to read the template file"] = "kunde inte l�sa mallfilen";
$net2ftp_messages["Please specify a filename"] = "Specificera filnamn";
$net2ftp_messages["Status: This file has not yet been saved"] = "Status: Denna fil �r inte sparad";
$net2ftp_messages["Status: Saved on <b>%1\$s</b> using mode %2\$s"] = "Status: Sparad p� <b>%1\$s</b> med mode %2\$s";
$net2ftp_messages["Status: <b>This file could not be saved</b>"] = "Status: <b>Denna fil kunde inte sparas</b>";
$net2ftp_messages["Not yet saved"] = "Not yet saved";
$net2ftp_messages["Could not be saved"] = "Could not be saved";
$net2ftp_messages["Saved at %1\$s"] = "Saved at %1\$s";

// /skins/[skin]/edit.template.php
$net2ftp_messages["Directory: "] = "Bibliotek: ";
$net2ftp_messages["File: "] = "Fil: ";
$net2ftp_messages["New file name: "] = "Nytt filnamn: ";
$net2ftp_messages["Character encoding: "] = "Character encoding: ";
$net2ftp_messages["Note: changing the textarea type will save the changes"] = "Notering: f�r�ndring av textareatyp kommer sparas";
$net2ftp_messages["Copy up"] = "Kopiera upp";
$net2ftp_messages["Copy down"] = "Kopiera ner";

} // end if edit


// -------------------------------------------------------------------------
// Find string module
if ($net2ftp_globals["state"] == "findstring") {
// -------------------------------------------------------------------------

// /modules/findstring/findstring.inc.php 
$net2ftp_messages["Search directories and files"] = "S�k bibliotek och filer";
$net2ftp_messages["Search again"] = "S�k igen";
$net2ftp_messages["Search results"] = "S�kresultat";
$net2ftp_messages["Please enter a valid search word or phrase."] = "Skriv in giltigt s�kord eller fras.";
$net2ftp_messages["Please enter a valid filename."] = "Skriv in giltigt filnamn.";
$net2ftp_messages["Please enter a valid file size in the \"from\" textbox, for example 0."] = "Skriv in giltig storlek i \"fr�n\" textruta, till exempel 0.";
$net2ftp_messages["Please enter a valid file size in the \"to\" textbox, for example 500000."] = "Skriv in giltig storlek i \"till\" textruta, till exempel 500000.";
$net2ftp_messages["Please enter a valid date in Y-m-d format in the \"from\" textbox."] = "Skriv in giltigt datum i �-m-d format i \"fr�n\" textruta.";
$net2ftp_messages["Please enter a valid date in Y-m-d format in the \"to\" textbox."] = "Skriv in giltigt datum i �-m-d format i \"till\" textruta.";
$net2ftp_messages["The word <b>%1\$s</b> was not found in the selected directories and files."] = "Ordet <b>%1\$s</b> hittades inte i de valda biblioteken och filerna.";
$net2ftp_messages["The word <b>%1\$s</b> was found in the following files:"] = "Ordet <b>%1\$s</b> hittades i f�ljande filer:";

// /skins/[skin]/findstring1.template.php
$net2ftp_messages["Search for a word or phrase"] = "S�k ord eller fras";
$net2ftp_messages["Case sensitive search"] = "Case sensitive s�kning";
$net2ftp_messages["Restrict the search to:"] = "Begr�nsa s�kningen till:";
$net2ftp_messages["files with a filename like"] = "filer med filnamn som";
$net2ftp_messages["(wildcard character is *)"] = "(wildcard tecken �r *)";
$net2ftp_messages["files with a size"] = "filer med storlek";
$net2ftp_messages["files which were last modified"] = "filer som var senast �ndrade";
$net2ftp_messages["from"] = "fr�n";
$net2ftp_messages["to"] = "till";

$net2ftp_messages["Directory"] = "Bibliotek";
$net2ftp_messages["File"] = "Fil";
$net2ftp_messages["Line"] = "Rad";
$net2ftp_messages["Action"] = "Funktion";
$net2ftp_messages["View"] = "Visa";
$net2ftp_messages["Edit"] = "�ndra";
$net2ftp_messages["View the highlighted source code of file %1\$s"] = "Visa markerad k�llkod f�r fil %1\$s";
$net2ftp_messages["Edit the source code of file %1\$s"] = "�ndra k�llkod f�r fil %1\$s";

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
$net2ftp_messages["Install software packages"] = "Installera mjukvarupaket";
$net2ftp_messages["Unable to open the template file"] = "Kunde inte �ppna mallfilen";
$net2ftp_messages["Unable to read the template file"] = "kunde inte l�sa mallfilen";
$net2ftp_messages["Unable to get the list of packages"] = "Kunde inte motta lisa med paket";

// /skins/blue/install1.template.php
$net2ftp_messages["The net2ftp installer script has been copied to the FTP server."] = "net2ftp installationsscript har kopierats till FTP servern.";
$net2ftp_messages["This script runs on your web server and requires PHP to be installed."] = "Detta script k�rs p� din webbserver och kr�ver att PHP installeras.";
$net2ftp_messages["In order to run it, click on the link below."] = "F�r att k�ra det, klicka p� l�nken nedan.";
$net2ftp_messages["net2ftp has tried to determine the directory mapping between the FTP server and the web server."] = "net2ftp har f�rs�kt best�mma bibliotekskopplingar mellan FTP server och webbserver.";
$net2ftp_messages["Should this link not be correct, enter the URL manually in your web browser."] = "�r denna l�nk fel, skriv URL manuellt i din webbl�sare.";

} // end install


// -------------------------------------------------------------------------
// Java upload module
if ($net2ftp_globals["state"] == "jupload") {
// -------------------------------------------------------------------------
$net2ftp_messages["Upload directories and files using a Java applet"] = "Ladda upp bibliotek och filer med en Java applet";
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
$net2ftp_messages["Once you are logged in, you will be able to:"] = "N�r du loggat in, kan du:";
$net2ftp_messages["Navigate the FTP server"] = "Navigera p� FTP servern";
$net2ftp_messages["Once you have logged in, you can browse from directory to directory and see all the subdirectories and files."] = "N�r du loggat in,kan du bl�ddra fr�n bibliotek till bibliotek och se alla underbibliotek och filer.";
$net2ftp_messages["Upload files"] = "Upload files";
$net2ftp_messages["There are 3 different ways to upload files: the standard upload form, the upload-and-unzip functionality, and the Java Applet."] = "Det finns 3 olika s�tt att ladda upp filer: standard uppladdningsformul�r, uppladdnings-och-unzip funktionen, och en Java Applet.";
$net2ftp_messages["Download files"] = "Download files";
$net2ftp_messages["Click on a filename to quickly download one file.<br />Select multiple files and click on Download; the selected files will be downloaded in a zip archive."] = "Klicka p� ett filnamn f�r att snabbt ladda ner en fil.<br />V�lj flera filer och klicka p� Ladda ner; valda filer laddas ner i ett zip arkiv.";
$net2ftp_messages["Zip files"] = "Zip files";
$net2ftp_messages["... and save the zip archive on the FTP server, or email it to someone."] = "... och spara zip arkivet p� FTP servern, eller emaila det till n�gon.";
$net2ftp_messages["Unzip files"] = "Unzip files";
$net2ftp_messages["Different formats are supported: .zip, .tar, .tgz and .gz."] = "Different formats are supported: .zip, .tar, .tgz and .gz.";
$net2ftp_messages["Install software"] = "Install software";
$net2ftp_messages["Choose from a list of popular applications (PHP required)."] = "Choose from a list of popular applications (PHP required).";
$net2ftp_messages["Copy, move and delete"] = "Copy, move and delete";
$net2ftp_messages["Directories are handled recursively, meaning that their content (subdirectories and files) will also be copied, moved or deleted."] = "Bibliotek hanteras enhetligt, allt inneh�ll (underbibliotek och filer) kommer ocks� kopieras, flyttas eller raderas.";
$net2ftp_messages["Copy or move to a 2nd FTP server"] = "Copy or move to a 2nd FTP server";
$net2ftp_messages["Handy to import files to your FTP server, or to export files from your FTP server to another FTP server."] = "Enkelt at importera filer till din FTP server, eller att exportera filer fr�n din FTP server till en annan FTP server.";
$net2ftp_messages["Rename and chmod"] = "Byt namn och chmod";
$net2ftp_messages["Chmod handles directories recursively."] = "Chmod hanterar bibliotek enhetligt.";
$net2ftp_messages["View code with syntax highlighting"] = "Visa kod med syntaxmarkering";
$net2ftp_messages["PHP functions are linked to the documentation on php.net."] = "PHP funktioner �r l�nkade till dokumentationen av php.net.";
$net2ftp_messages["Plain text editor"] = "Enkel texteditor";
$net2ftp_messages["Edit text right from your browser; every time you save the changes the new file is transferred to the FTP server."] = "�ndra text direkt fr�n din webbl�sare; varje g�ng du sparar f�rs den nya filen �ver till FTP servern.";
$net2ftp_messages["HTML editors"] = "HTML editors";
$net2ftp_messages["Edit HTML a What-You-See-Is-What-You-Get (WYSIWYG) form; there are 2 different editors to choose from."] = "Edit HTML a What-You-See-Is-What-You-Get (WYSIWYG) form; there are 2 different editors to choose from.";
$net2ftp_messages["Code editor"] = "Code editor";
$net2ftp_messages["Edit HTML and PHP in an editor with syntax highlighting."] = "�ndra HTML och PHP i en editor med syntaxmarkering.";
$net2ftp_messages["Search for words or phrases"] = "S�k efter ord eller fraser";
$net2ftp_messages["Filter out files based on the filename, last modification time and filesize."] = "Filtrera ut filer baserat p� filnamnet, tid f�r senast modifierat och filstorlek.";
$net2ftp_messages["Calculate size"] = "Ber�kna storlek";
$net2ftp_messages["Calculate the size of directories and files."] = "Ber�kna storlek p� bibliotek och filer.";

$net2ftp_messages["FTP server"] = "FTP server";
$net2ftp_messages["Example"] = "Exempel";
$net2ftp_messages["Port"] = "Port";
$net2ftp_messages["Protocol"] = "Protocol";
$net2ftp_messages["Username"] = "Anv�ndarnamn";
$net2ftp_messages["Password"] = "L�senord";
$net2ftp_messages["Anonymous"] = "Anonym";
$net2ftp_messages["Passive mode"] = "Passive mode";
$net2ftp_messages["Initial directory"] = "Initialt bibliotek";
$net2ftp_messages["Language"] = "Spr�k";
$net2ftp_messages["Skin"] = "Skin";
$net2ftp_messages["FTP mode"] = "FTP mode";
$net2ftp_messages["Automatic"] = "Automatiskt";
$net2ftp_messages["Login"] = "Logga in";
$net2ftp_messages["Clear cookies"] = "Rensa cookies";
$net2ftp_messages["Admin"] = "Admin";
$net2ftp_messages["Please enter an FTP server."] = "Skriv in FTP server.";
$net2ftp_messages["Please enter a username."] = "Skriv in anv�ndarnamn.";
$net2ftp_messages["Please enter a password."] = "Skriv in l�senord.";

} // end login


// -------------------------------------------------------------------------
// Login module
if ($net2ftp_globals["state"] == "login_small") {
// -------------------------------------------------------------------------

$net2ftp_messages["Please enter your Administrator username and password."] = "Skriv in ditt Administrat�rs anv�ndarnamn och l�senord.";
$net2ftp_messages["Please enter your username and password for FTP server <b>%1\$s</b>."] = "Please enter your username and password for FTP server <b>%1\$s</b>.";
$net2ftp_messages["Username"] = "Anv�ndarnamn";
$net2ftp_messages["Your session has expired; please enter your password for FTP server <b>%1\$s</b> to continue."] = "Your session has expired; please enter your password for FTP server <b>%1\$s</b> to continue.";
$net2ftp_messages["Your IP address has changed; please enter your password for FTP server <b>%1\$s</b> to continue."] = "Your IP address has changed; please enter your password for FTP server <b>%1\$s</b> to continue.";
$net2ftp_messages["Password"] = "L�senord";
$net2ftp_messages["Login"] = "Logga in";
$net2ftp_messages["Continue"] = "Forts�tt";

} // end login_small


// -------------------------------------------------------------------------
// Logout module
if ($net2ftp_globals["state"] == "logout") {
// -------------------------------------------------------------------------

// logout.inc.php
$net2ftp_messages["Login page"] = "Login sida";

// logout.template.php
$net2ftp_messages["You have logged out from the FTP server. To log back in, <a href=\"%1\$s\" title=\"Login page (accesskey l)\" accesskey=\"l\">follow this link</a>."] = "You have logged out from the FTP server. To log back in, <a href=\"%1\$s\" title=\"Login page (accesskey l)\" accesskey=\"l\">follow this link</a>.";
$net2ftp_messages["Note: other users of this computer could click on the browser's Back button and access the FTP server."] = "Notering: andra anv�ndare p� denna dator kan anv�nda webbl�sarens bak�tknapp och komma in p� FTP servern.";
$net2ftp_messages["To prevent this, you must close all browser windows."] = "F�r att hindra detta m�ste du st�nga alla �ppna webbl�sarf�nster.";
$net2ftp_messages["Close"] = "St�ng";
$net2ftp_messages["Click here to close this window"] = "Klicka h�r f�r att st�nga detta f�nster";

} // end logout


// -------------------------------------------------------------------------
// New directory module
if ($net2ftp_globals["state"] == "newdir") {
// -------------------------------------------------------------------------
$net2ftp_messages["Create new directories"] = "Skapa nya bibliotek";
$net2ftp_messages["The new directories will be created in <b>%1\$s</b>."] = "De nya biblioteken kommer skapas i <b>%1\$s</b>.";
$net2ftp_messages["New directory name:"] = "Nytt biblioteks namn:";
$net2ftp_messages["Directory <b>%1\$s</b> was successfully created."] = "Bibliotek <b>%1\$s</b> skapades framg�ngsrikt.";
$net2ftp_messages["Directory <b>%1\$s</b> could not be created."] = "Bibliotek <b>%1\$s</b> kunde inte skapas.";

} // end newdir


// -------------------------------------------------------------------------
// Raw module
if ($net2ftp_globals["state"] == "raw") {
// -------------------------------------------------------------------------

// /modules/raw/raw.inc.php
$net2ftp_messages["Send arbitrary FTP commands"] = "Skicka slumpm�ssig FTP kommando";


// /skins/[skin]/raw1.template.php
$net2ftp_messages["List of commands:"] = "Lista med kommandon:";
$net2ftp_messages["FTP server response:"] = "FTP server svar:";

} // end raw


// -------------------------------------------------------------------------
// Rename module
if ($net2ftp_globals["state"] == "rename") {
// -------------------------------------------------------------------------
$net2ftp_messages["Rename directories and files"] = "Byt namn p� bibliotek och filer";
$net2ftp_messages["Old name: "] = "Gammalt namn: ";
$net2ftp_messages["New name: "] = "Nytt namn: ";
$net2ftp_messages["The new name may not contain any dots. This entry was not renamed to <b>%1\$s</b>"] = "Det nya namnet f�r inte inneh�lla punkter. Denna inmatning d�ptes om till <b>%1\$s</b>";
$net2ftp_messages["The new name may not contain any banned keywords. This entry was not renamed to <b>%1\$s</b>"] = "The new name may not contain any banned keywords. This entry was not renamed to <b>%1\$s</b>";
$net2ftp_messages["<b>%1\$s</b> was successfully renamed to <b>%2\$s</b>"] = "<b>%1\$s</b> d�ptes framg�ngsrikt om till <b>%2\$s</b>";
$net2ftp_messages["<b>%1\$s</b> could not be renamed to <b>%2\$s</b>"] = "<b>%1\$s</b> kunde inte d�pas om till <b>%2\$s</b>";

} // end rename


// -------------------------------------------------------------------------
// Unzip module
if ($net2ftp_globals["state"] == "unzip") {
// -------------------------------------------------------------------------

// /modules/unzip/unzip.inc.php
$net2ftp_messages["Unzip archives"] = "Unzip arkive";
$net2ftp_messages["Getting archive %1\$s of %2\$s from the FTP server"] = "Mottar arkiv %1\$s av %2\$s fr�n FTP server";
$net2ftp_messages["Unable to get the archive <b>%1\$s</b> from the FTP server"] = "Kunde inte ladda ner arkivet <b>%1\$s</b> fr�n FTP servern";

// /skins/[skin]/unzip1.template.php
$net2ftp_messages["Set all targetdirectories"] = "Ange m�lbibliotek";
$net2ftp_messages["To set a common target directory, enter that target directory in the textbox above and click on the button \"Set all targetdirectories\"."] = "F�r att st�lla in ett vanligt m�lbibliotek, ange det m�lbiblioteket i textf�ltet ovan och klicka p� knappen \"Ange alla m�lbibliotek\".";
$net2ftp_messages["Note: the target directory must already exist before anything can be copied into it."] = "Notering: m�lbiblioteket m�ste vara skapat innan n�got kan kopieras in i det.";
$net2ftp_messages["Unzip archive <b>%1\$s</b> to:"] = "Unzip arkiv <b>%1\$s</b> till:";
$net2ftp_messages["Target directory:"] = "M�lbibliotek:";
$net2ftp_messages["Use folder names (creates subdirectories automatically)"] = "Anv�nd mappnamn (skapar underbibliotek automatiskt)";

} // end unzip


// -------------------------------------------------------------------------
// Upload module
if ($net2ftp_globals["state"] == "upload") {
// -------------------------------------------------------------------------
$net2ftp_messages["Upload to directory:"] = "Ladda upp till bibliotek:";
$net2ftp_messages["Files"] = "Filer";
$net2ftp_messages["Archives"] = "Arkive";
$net2ftp_messages["Files entered here will be transferred to the FTP server."] = "Filer inmatade h�r kommer �verf�ras till FTP servern.";
$net2ftp_messages["Archives entered here will be decompressed, and the files inside will be transferred to the FTP server."] = "Arkive inmatade h�r kommer dekomprimeras och filer inuti �verf�ras till FTP servern.";
$net2ftp_messages["Add another"] = "L�gg till n�sta";
$net2ftp_messages["Use folder names (creates subdirectories automatically)"] = "Anv�nd mappnamn (skapar underbibliotek automatiskt)";

$net2ftp_messages["Choose a directory"] = "V�lj bibliotek";
$net2ftp_messages["Please wait..."] = "V�nta...";
$net2ftp_messages["Uploading... please wait..."] = "Laddar upp... v�nta...";
$net2ftp_messages["If the upload takes more than the allowed <b>%1\$s seconds<\/b>, you will have to try again with less/smaller files."] = "Om uppladdning tar mer �n till�tna <b>%1\$s sekunder<\/b>, f�r du f�rs�ka igen med f�rre/mindre filer.";
$net2ftp_messages["This window will close automatically in a few seconds."] = "Detta f�nster st�ngs automatiskt om n�gra sekunder.";
$net2ftp_messages["Close window now"] = "St�ng f�nster nu";

$net2ftp_messages["Upload files and archives"] = "Ladda upp filer och arkiv";
$net2ftp_messages["Upload results"] = "Uppladdningsresultat";
$net2ftp_messages["Checking files:"] = "Kontrollerar filer:";
$net2ftp_messages["Transferring files to the FTP server:"] = "�verf�r filer till FTP servern:";
$net2ftp_messages["Decompressing archives and transferring files to the FTP server:"] = "Dekomprimerar arkiv och �verf�r filer till FTP servern:";
$net2ftp_messages["Upload more files and archives"] = "Ladda upp fler filer och arkiv";

} // end upload


// -------------------------------------------------------------------------
// Messages which are shared by upload and jupload
if ($net2ftp_globals["state"] == "upload" || $net2ftp_globals["state"] == "jupload") {
// -------------------------------------------------------------------------
$net2ftp_messages["Restrictions:"] = "Begr�nsningar:";
$net2ftp_messages["The maximum size of one file is restricted by net2ftp to <b>%1\$s</b> and by PHP to <b>%2\$s</b>"] = "Maximal storlek f�r en fil �r begr�nsad av net2ftp till <b>%1\$s</b> och av PHP till <b>%2\$s</b>";
$net2ftp_messages["The maximum execution time is <b>%1\$s seconds</b>"] = "Maximal exekveringstid �r <b>%1\$s sekunder</b>";
$net2ftp_messages["The FTP transfer mode (ASCII or BINARY) will be automatically determined, based on the filename extension"] = "FTP transfer mode (ASCII eller BINARY) kommer automatiskt best�mmas, baserat p� filenamns�ndelse";
$net2ftp_messages["If the destination file already exists, it will be overwritten"] = "Om destinationsfil redan finns, kommer den skrivas �ver";

} // end upload or jupload


// -------------------------------------------------------------------------
// View module
if ($net2ftp_globals["state"] == "view") {
// -------------------------------------------------------------------------

// /modules/view/view.inc.php
$net2ftp_messages["View file %1\$s"] = "Visa fil %1\$s";
$net2ftp_messages["View image %1\$s"] = "Visa bild %1\$s";
$net2ftp_messages["View Macromedia ShockWave Flash movie %1\$s"] = "Visa Macromedia ShockWave Flash film %1\$s";
$net2ftp_messages["Image"] = "Bild";

// /skins/[skin]/view1.template.php
$net2ftp_messages["Syntax highlighting powered by <a href=\"http://luminous.asgaard.co.uk\">Luminous</a>"] = "Syntax markerad powered by <a href=\"http://luminous.asgaard.co.uk\">Luminous</a>";
$net2ftp_messages["To save the image, right-click on it and choose 'Save picture as...'"] = "F�r att spara bild, h�ger-klicka p� den och v�lj 'Spara bild som...'";

} // end view


// -------------------------------------------------------------------------
// Zip module
if ($net2ftp_globals["state"] == "zip") {
// -------------------------------------------------------------------------

// /modules/zip/zip.inc.php
$net2ftp_messages["Zip entries"] = "Zip entries";

// /skins/[skin]/zip1.template.php
$net2ftp_messages["Save the zip file on the FTP server as:"] = "Spara zip fil p� FTP servern som:";
$net2ftp_messages["Email the zip file in attachment to:"] = "Email zip fil som bilaga till:";
$net2ftp_messages["Note that sending files is not anonymous: your IP address as well as the time of the sending will be added to the email."] = "Notera att skicka filer ej �r anonymt: din IP adress och tid vid avs�ndande l�ggs till i e-mailet.";
$net2ftp_messages["Some additional comments to add in the email:"] = "L�gg till �vriga kommentarer i email:";

$net2ftp_messages["You did not enter a filename for the zipfile. Go back and enter a filename."] = "Du angav inget filnamn f�r zipfilen. Backa och ange filnamn.";
$net2ftp_messages["The email address you have entered (%1\$s) does not seem to be valid.<br />Please enter an address in the format <b>username@domain.com</b>"] = "Email adressen du angav (%1\$s) verkar inte vara giltig.<br />Ange en adress i formatet <b>anv�ndarnamn@dom�n.com</b>";

} // end zip

?>