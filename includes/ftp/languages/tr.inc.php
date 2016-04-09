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
$net2ftp_messages["en"] = "tr";

// HTML dir attribute: left-to-right (LTR) or right-to-left (RTL)
$net2ftp_messages["ltr"] = "ltr";

// CSS style: align left or right (use in combination with LTR or RTL)
$net2ftp_messages["left"] = "left";
$net2ftp_messages["right"] = "right";

// Encoding
$net2ftp_messages["iso-8859-1"] = "iso-8859-9";


// -------------------------------------------------------------------------
// Status messages
// -------------------------------------------------------------------------

// When translating these messages, keep in mind that the text should not be too long
// It should fit in the status textbox

$net2ftp_messages["Connecting to the FTP server"] = "FTP sunucusuna baglaniyor";
$net2ftp_messages["Logging into the FTP server"] = "FTP sunucusuna giris yapiyor";
$net2ftp_messages["Setting the passive mode"] = "Pasif moda geciyor";                 //ge�iyor: ayarl�yor
$net2ftp_messages["Getting the FTP system type"] = "FTP sistem t�r�n� aliyor";
$net2ftp_messages["Changing the directory"] = "Dizini degistiriyor";                  //dizini: klas�r�
$net2ftp_messages["Getting the current directory"] = "G�ncel dizini aliyor";          //dizini: klas�r�
$net2ftp_messages["Getting the list of directories and files"] = "Dosya ve dizinlerin listesini aliyor";           //dizinlerin: klas�rlerin
$net2ftp_messages["Parsing the list of directories and files"] = "Dosya ve dizinlerin listesini c�z�ml�yor";       //parsing: ?
$net2ftp_messages["Logging out of the FTP server"] = "FTP sunucusundan cikis yapiyor";
$net2ftp_messages["Getting the list of directories and files"] = "Dosya ve dizinlerin listesini aliyor";           //dizinlerin: klas�rlerin
$net2ftp_messages["Printing the list of directories and files"] = "Dosya ve dizinlerin listesini yazdiriyor";      //dizinlerin: klas�rlerin
$net2ftp_messages["Processing the entries"] = "Girisi isleme aliyor";
$net2ftp_messages["Processing entry %1\$s"] = "Girisi isleme aliyor %1\$s";
$net2ftp_messages["Checking files"] = "Dosyalari denetliyor";
$net2ftp_messages["Transferring files to the FTP server"] = "FTP sunucusuna dosyalari aktariyor";
$net2ftp_messages["Decompressing archives and transferring files"] = "Arsiv paketini aciyor ve dosyalari aktariyor";
$net2ftp_messages["Searching the files..."] = "Dosyalari ariyor...";
$net2ftp_messages["Uploading new file"] = "Yeni dosya y�kl�yor";
$net2ftp_messages["Reading the file"] = "Dosyayi okuyor";
$net2ftp_messages["Parsing the file"] = "Dosyayi ��z�ml�yor";
$net2ftp_messages["Reading the new file"] = "Yeni dosyayi okuyor";
$net2ftp_messages["Reading the old file"] = "Eski dosyayi okuyor";
$net2ftp_messages["Comparing the 2 files"] = "2 Dosyayi karsilastiriyor";
$net2ftp_messages["Printing the comparison"] = "Karsilastirmayi yazdiriyor";
$net2ftp_messages["Sending FTP command %1\$s of %2\$s"] = "FTP komutu g�nderiyor %1\$s - %2\$s";
$net2ftp_messages["Getting archive %1\$s of %2\$s from the FTP server"] = "FTP sunucusundan arsiv paketini aliyor %1\$s - %2\$s";
$net2ftp_messages["Creating a temporary directory on the FTP server"] = "FTP sunucusunda gecici dizin olu�turuyor";           //dizin: klas�r
$net2ftp_messages["Setting the permissions of the temporary directory"] = "Gecici diznin iznini ayarliyor";
$net2ftp_messages["Copying the net2ftp installer script to the FTP server"] = "FTP sunucusuna net2ftp y�kleyici yazilimini kopyaliyor";
$net2ftp_messages["Script finished in %1\$s seconds"] = "Yazilim %1\$s saniyede bitti";
$net2ftp_messages["Script halted"] = "Yaz�l�m durdu";

// Used on various screens
$net2ftp_messages["Please wait..."] = "L�tfen bekleyin...";


// -------------------------------------------------------------------------
// index.php
// -------------------------------------------------------------------------
$net2ftp_messages["Unexpected state string: %1\$s. Exiting."] = "Beklenmeyen durum dizisi: %1\$s. ��k�yor.";
$net2ftp_messages["This beta function is not activated on this server."] = "Bu beta i�levi, bu sunucuda a��lmad�.";    //activated: ?
$net2ftp_messages["This function has been disabled by the Administrator of this website."] = "Bu i�lev bu websitenin Y�neticisi taraf�ndan kapat�ld�.";    //disabled: ?


// -------------------------------------------------------------------------
// /includes/browse.inc.php
// -------------------------------------------------------------------------
$net2ftp_messages["The directory <b>%1\$s</b> does not exist or could not be selected, so the directory <b>%2\$s</b> is shown instead."] = "Dizin <b>%1\$s</b> yok veya se�ilemiyor, bu y�zden yerine <b>%2\$s</b> dizini g�steriliyor.";
$net2ftp_messages["Your root directory <b>%1\$s</b> does not exist or could not be selected."] = "Ana dizininiz <b>%1\$s</b> yok veya se�ilemiyor.";
$net2ftp_messages["The directory <b>%1\$s</b> could not be selected - you may not have sufficient rights to view this directory, or it may not exist."] = "Dizin <b>%1\$s</b> se�ilemiyor - bu dizini g�r�nt�leyebilmek i�in yeterli haklara sahip olmayabilirsiniz veya o, var de�il.";
$net2ftp_messages["Entries which contain banned keywords can't be managed using net2ftp. This is to avoid Paypal or Ebay scams from being uploaded through net2ftp."] = "Yasakl� anahtar kelimeleri i�eren giri�ler net2ftp kullan�larak y�netilemez. Bu, net2ftp yoluyla Paypal veya Ebay doland�r�c�l���n�n y�klenmesini �nlemek i�indir.";
$net2ftp_messages["Files which are too big can't be downloaded, uploaded, copied, moved, searched, zipped, unzipped, viewed or edited; they can only be renamed, chmodded or deleted."] = "�ok b�y�k olan dosyalar, indirilemez, y�klenemez, kopyalanamaz, ta��namaz, aranamaz, ar�iv paketine eklenemez, ar�iv paketinden ��kart�lamaz, g�r�nt�lemez veya d�zenlemez; sadece yeniden adland�r�labilir, izinleri de�i�tirilebilir veya silinebilir.";
$net2ftp_messages["Execute %1\$s in a new window"] = "Yeni pencerede %1\$s ger�ekle�tir";


// -------------------------------------------------------------------------
// /includes/main.inc.php
// -------------------------------------------------------------------------
$net2ftp_messages["Please select at least one directory or file!"] = "L�tfen en az�ndan bir dizin veya dosya se�in!";


// -------------------------------------------------------------------------
// /includes/authorizations.inc.php
// -------------------------------------------------------------------------

// checkAuthorization()
$net2ftp_messages["The FTP server <b>%1\$s</b> is not in the list of allowed FTP servers."] = "FTP sunucusu <b>%1\$s</b> izin verilen FTP sunucular� listesinde de�il.";
$net2ftp_messages["The FTP server <b>%1\$s</b> is in the list of banned FTP servers."] = "FTP sunucusu <b>%1\$s</b> yasakl� FTP sunucular� listesinde.";
$net2ftp_messages["The FTP server port %1\$s may not be used."] = "FTP sunucusu portu %1\$s kullan�lmayabilir.";
$net2ftp_messages["Your IP address (%1\$s) is not in the list of allowed IP addresses."] = "Your IP address (%1\$s) is not in the list of allowed IP addresses.";
$net2ftp_messages["Your IP address (%1\$s) is in the list of banned IP addresses."] = "IP adresiniz (%1\$s) yasakl� IP adresleri listesinde.";

// isAuthorizedDirectory()
$net2ftp_messages["Table net2ftp_users contains duplicate rows."] = "net2ftp_users tablosu �ift dizeler i�eriyor.";     //dublicate: ?

// checkAdminUsernamePassword()
$net2ftp_messages["You did not enter your Administrator username or password."] = "Y�netici kullan�c� ad�n�z� veya �ifrenizi girmediniz.";
$net2ftp_messages["Wrong username or password. Please try again."] = "Yanl�� kullan�c� ad� veya �ifre. L�tfen tekrar deneyin.";

// -------------------------------------------------------------------------
// /includes/consumption.inc.php
// -------------------------------------------------------------------------
$net2ftp_messages["Unable to determine your IP address."] = "IP adresinizi belirleyemiyor.";
$net2ftp_messages["Table net2ftp_log_consumption_ipaddress contains duplicate rows."] = "net2ftp_log_consumption_ipaddress tablosu �ift dizeler i�eriyor.";
$net2ftp_messages["Table net2ftp_log_consumption_ftpserver contains duplicate rows."] = "net2ftp_log_consumption_ftpserver tablosu �ift dizeler i�eriyor.";
$net2ftp_messages["The variable <b>consumption_ipaddress_datatransfer</b> is not numeric."] = "<b>consumption_ipaddress_datatransfer</b> de�i�keni say�sal de�il.";
$net2ftp_messages["Table net2ftp_log_consumption_ipaddress could not be updated."] = "net2ftp_log_consumption_ipaddress tablosu g�ncellenemiyor.";
$net2ftp_messages["Table net2ftp_log_consumption_ipaddress contains duplicate entries."] = "net2ftp_log_consumption_ipaddress tablosu contains �ift giri�ler i�eriyor.";
$net2ftp_messages["Table net2ftp_log_consumption_ftpserver could not be updated."] = "net2ftp_log_consumption_ftpserver tablosu g�ncellenemiyor.";
$net2ftp_messages["Table net2ftp_log_consumption_ftpserver contains duplicate entries."] = "net2ftp_log_consumption_ftpserver tablosu �ift giri�ler i�eriyor.";
$net2ftp_messages["Table net2ftp_log_access could not be updated."] = "Table net2ftp_log_access could not be updated.";
$net2ftp_messages["Table net2ftp_log_access contains duplicate entries."] = "Table net2ftp_log_access contains duplicate entries.";


// -------------------------------------------------------------------------
// /includes/database.inc.php
// -------------------------------------------------------------------------
$net2ftp_messages["Unable to connect to the MySQL database. Please check your MySQL database settings in net2ftp's configuration file settings.inc.php."] = "MySQL veritaban�na ba�lanam�yor. L�tfen MySQL veritaban� ayarlar�n�z� net2ftp'nin ayar dosyas� settings.inc.php de denetleyin.";
$net2ftp_messages["Unable to select the MySQL database. Please check your MySQL database settings in net2ftp's configuration file settings.inc.php."] = "MySQL veritaban�n� se�emiyor. L�tfen MySQL veritaban� ayarlar�n�z� net2ftp'nin ayar dosyas� settings.inc.php de denetleyin.";


// -------------------------------------------------------------------------
// /includes/errorhandling.inc.php
// -------------------------------------------------------------------------
$net2ftp_messages["An error has occured"] = "Bir hata olu�tu";
$net2ftp_messages["Go back"] = "Geri d�n";
$net2ftp_messages["Go to the login page"] = "Giri� sayfas�na git";


// -------------------------------------------------------------------------
// /includes/filesystem.inc.php
// -------------------------------------------------------------------------

// ftp_openconnection()
$net2ftp_messages["The <a href=\"http://www.php.net/manual/en/ref.ftp.php\" target=\"_blank\">FTP module of PHP</a> is not installed.<br /><br /> The administrator of this website should install this module. Installation instructions are given on <a href=\"http://www.php.net/manual/en/ftp.installation.php\" target=\"_blank\">php.net</a><br />"] = "The <a href=\"http://www.php.net/manual/en/ref.ftp.php\" target=\"_blank\">FTP module of PHP</a> is not installed.<br /><br /> The administrator of this website should install this module. Installation instructions are given on <a href=\"http://www.php.net/manual/en/ftp.installation.php\" target=\"_blank\">php.net</a><br />";
$net2ftp_messages["The <a href=\"http://www.php.net/manual/en/function.ftp-ssl-connect.php\" target=\"_blank\">FTP and/or OpenSSL modules of PHP</a> is not installed.<br /><br /> The administrator of this website should install these modules. Installation instructions are given on php.net: <a href=\"http://www.php.net/manual/en/ftp.installation.php\" target=\"_blank\">here for FTP</a>, and <a href=\"http://www.php.net/manual/en/openssl.installation.php\" target=\"_blank\">here for OpenSSL</a><br />"] = "The <a href=\"http://www.php.net/manual/en/function.ftp-ssl-connect.php\" target=\"_blank\">FTP and/or OpenSSL modules of PHP</a> is not installed.<br /><br /> The administrator of this website should install these modules. Installation instructions are given on php.net: <a href=\"http://www.php.net/manual/en/ftp.installation.php\" target=\"_blank\">here for FTP</a>, and <a href=\"http://www.php.net/manual/en/openssl.installation.php\" target=\"_blank\">here for OpenSSL</a><br />";
$net2ftp_messages["The <a href=\"http://www.php.net/manual/en/function.ssh2-sftp.php\" target=\"_blank\">SSH2 module of PHP</a> is not installed.<br /><br /> The administrator of this website should install this module. Installation instructions are given on <a href=\"http://www.php.net/manual/en/ssh2.installation.php\" target=\"_blank\">php.net</a><br />"] = "The <a href=\"http://www.php.net/manual/en/function.ssh2-sftp.php\" target=\"_blank\">SSH2 module of PHP</a> is not installed.<br /><br /> The administrator of this website should install this module. Installation instructions are given on <a href=\"http://www.php.net/manual/en/ssh2.installation.php\" target=\"_blank\">php.net</a><br />";
$net2ftp_messages["Unable to connect to FTP server <b>%1\$s</b> on port <b>%2\$s</b>.<br /><br />Are you sure this is the address of the FTP server? This is often different from that of the HTTP (web) server. Please contact your ISP helpdesk or system administrator for help.<br />"] = "FTP sunucusuna <b>%1\$s</b> portunda <b>%2\$s</b> ba�lanam�yor.<br /><br />FTP sunucusunun adresinin bu oldu�undan emin misiniz? Bu s�kl�kla HTTP (web) sunucusununkinden farkl�d�r. L�tfen yard�m i�in ISS yard�m masan�zla ya da sistem y�neticinizle ileti�im kurun.<br />";
$net2ftp_messages["Unable to login to FTP server <b>%1\$s</b> with username <b>%2\$s</b>.<br /><br />Are you sure your username and password are correct? Please contact your ISP helpdesk or system administrator for help.<br />"] = "FTP sunucusuna <b>%1\$s</b> kullan�c� ad�yla <b>%2\$s</b> giri� yapam�yor.<br /><br />Kullan�c� ad�n�z�n ve �ifrenizin do�ru oldu�undan emin misiniz? L�tfen yard�m i�in ISS yard�m masan�zla ya da sistem y�neticinizle ileti�im kurun.<br />";
$net2ftp_messages["Unable to switch to the passive mode on FTP server <b>%1\$s</b>."] = "FTP sunucusunda <b>%1\$s</b> pasif moda ge�emiyor.";    //switch: ?

// ftp_openconnection2()
$net2ftp_messages["Unable to connect to the second (target) FTP server <b>%1\$s</b> on port <b>%2\$s</b>.<br /><br />Are you sure this is the address of the second (target) FTP server? This is often different from that of the HTTP (web) server. Please contact your ISP helpdesk or system administrator for help.<br />"] = "�kinci (hedef) FTP sunucusuna <b>%1\$s</b> portunda <b>%2\$s</b> ba�lanam�yor.<br /><br />�kinci (hedef) FTP sunucusunun adresinin bu oldu�undan emin misiniz? Bu s�kl�kla HTTP (web) sunucusununkinden farkl�d�r. L�tfen yard�m i�in ISS yard�m masan�zla ya da sistem y�neticinizle ileti�im kurun.<br />";
$net2ftp_messages["Unable to login to the second (target) FTP server <b>%1\$s</b> with username <b>%2\$s</b>.<br /><br />Are you sure your username and password are correct? Please contact your ISP helpdesk or system administrator for help.<br />"] = "�kinci (hedef) FTP sunucusuna <b>%1\$s</b> kullan�c� ad�yla <b>%2\$s</b> giri� yapam�yor.<br /><br />Kullan�c� ad�n�z�n ve �ifrenizin do�ru oldu�undan emin misiniz? L�tfen yard�m i�in ISS yard�m masan�zla ya da sistem y�neticinizle ileti�im kurun.<br />";
$net2ftp_messages["Unable to switch to the passive mode on the second (target) FTP server <b>%1\$s</b>."] = "�kinci (hedef) FTP sunucusunda <b>%1\$s</b> pasif moda ge�emiyor.";   //switch: ?

// ftp_myrename()
$net2ftp_messages["Unable to rename directory or file <b>%1\$s</b> into <b>%2\$s</b>"] = "<b>%1\$s</b> dosya ya da dizinini <b>%2\$s</b>e yeniden adland�ram�yor";

// ftp_mychmod()
$net2ftp_messages["Unable to execute site command <b>%1\$s</b>. Note that the CHMOD command is only available on Unix FTP servers, not on Windows FTP servers."] = "Site komutunu <b>%1\$s</b> ger�ekle�tiremiyor. CHMOD komutunun, Windows FTP sunucular�nda de�il de sadece Unix FTP sunucular�nda m�mk�n oldu�una dikkat edin.";    //note: ?
$net2ftp_messages["Directory <b>%1\$s</b> successfully chmodded to <b>%2\$s</b>"] = "Dizin <b>%1\$s</b> ba�ar�l� bir �ekilde <b>%2\$s</b> e chmod yap�ld�.";
$net2ftp_messages["Processing entries within directory <b>%1\$s</b>:"] = "<b>%1\$s</b> dizin i�erisindeki giri�leri i�leme al�yor:";
$net2ftp_messages["File <b>%1\$s</b> was successfully chmodded to <b>%2\$s</b>"] = "<b>%1\$s</b> Dosya ba�ar�l� bir �ekilde <b>%2\$s</b>e chmod yap�ld�";
$net2ftp_messages["All the selected directories and files have been processed."] = "T�m se�ili dosya ve dizinler i�leme al�nd�.";

// ftp_rmdir2()
$net2ftp_messages["Unable to delete the directory <b>%1\$s</b>"] = "<b>%1\$s</b> dizini silemiyor";

// ftp_delete2()
$net2ftp_messages["Unable to delete the file <b>%1\$s</b>"] = "<b>%1\$s</b> dosyay� silemiyor";

// ftp_newdirectory()
$net2ftp_messages["Unable to create the directory <b>%1\$s</b>"] = "<b>%1\$s</b> dizini olu�turam�yor";

// ftp_readfile()
$net2ftp_messages["Unable to create the temporary file"] = "Ge�ici dosya olu�turam�yor";
$net2ftp_messages["Unable to get the file <b>%1\$s</b> from the FTP server and to save it as temporary file <b>%2\$s</b>.<br />Check the permissions of the %3\$s directory.<br />"] = "FTP sunucusundan <b>%1\$s</b> dosyas�n� alam�yor ve <b>%2\$s</b> ge�ici dosya olarak kaydedemiyor.<br /> %3\$s dizininin izinlerini denetleyin.<br />";
$net2ftp_messages["Unable to open the temporary file. Check the permissions of the %1\$s directory."] = "Ge�ici dosyay� a�am�yor. %1\$s dizininin izinlerini denetleyin.";
$net2ftp_messages["Unable to read the temporary file"] = "Ge�ici dosyay� okuyam�yor";
$net2ftp_messages["Unable to close the handle of the temporary file"] = "Ge�ici dosyan�n idaresini kapatam�yor";    //handle: ?
$net2ftp_messages["Unable to delete the temporary file"] = "Ge�ici dosyay� silemiyor";

// ftp_writefile()
$net2ftp_messages["Unable to create the temporary file. Check the permissions of the %1\$s directory."] = "Ge�ici dosya olu�turam�yor. %1\$s dizininin izinlerini denetleyin.";
$net2ftp_messages["Unable to open the temporary file. Check the permissions of the %1\$s directory."] = "Ge�ici dosyay� a�am�yor. %1\$s dizininin izinlerini denetleyin.";
$net2ftp_messages["Unable to write the string to the temporary file <b>%1\$s</b>.<br />Check the permissions of the %2\$s directory."] = "<b>%1\$s</b> ge�ici dosyaya diziyi yazam�yor.<br />%1\$s dizininin izinlerini denetleyin.";
$net2ftp_messages["Unable to close the handle of the temporary file"] = "Ge�ici dosyan�n idaresini kapatam�yor";    //handle: ?
$net2ftp_messages["Unable to put the file <b>%1\$s</b> on the FTP server.<br />You may not have write permissions on the directory."] = "FTP sunucusuna <b>%1\$s</b> dosyas�n� yerle�tiremiyor.<br />Dizinde yazma iznine sahip olamayabilirsiniz.";
$net2ftp_messages["Unable to delete the temporary file"] = "Ge�ici dosyay� silemiyor";

// ftp_copymovedelete()
$net2ftp_messages["Processing directory <b>%1\$s</b>"] = "<b>%1\$s</b> dizinini i�leme al�yor";
$net2ftp_messages["The target directory <b>%1\$s</b> is the same as or a subdirectory of the source directory <b>%2\$s</b>, so this directory will be skipped"] = "<b>%1\$s</b> hedef dizini <b>%2\$s</b> kaynak dizininin ayn�s� veya bir alt dizini , bu y�zden bu dizin atlan�lacak";
$net2ftp_messages["The directory <b>%1\$s</b> contains a banned keyword, so this directory will be skipped"] = "The directory <b>%1\$s</b> contains a banned keyword,bu y�zden bu dizin atlan�lacak";
$net2ftp_messages["The directory <b>%1\$s</b> contains a banned keyword, aborting the move"] = "<b>%1\$s</b> dizini yasakl� bir anahtar kelime i�eriyor, ta��may� iptal ediyor";
$net2ftp_messages["Unable to create the subdirectory <b>%1\$s</b>. It may already exist. Continuing the copy/move process..."] = "<b>%1\$s</b> alt dizini olu�turam�yor. �nceden var olabilir. Kopyalama/ta��ma i�lemine devam ediyor...";
$net2ftp_messages["Created target subdirectory <b>%1\$s</b>"] = "Hedef alt dizin <b>%1\$s</b> olu�turuldu";
$net2ftp_messages["The directory <b>%1\$s</b> could not be selected, so this directory will be skipped"] = "Dizin <b>%1\$s</b> se�ilemiyor,bu y�zden bu dizin atlan�lacak";
$net2ftp_messages["Unable to delete the subdirectory <b>%1\$s</b> - it may not be empty"] = "Alt dizini <b>%1\$s</b> silemiyor - bo� olmayabilir";
$net2ftp_messages["Deleted subdirectory <b>%1\$s</b>"] = "Alt dizin <b>%1\$s</b> silindi";
$net2ftp_messages["Deleted subdirectory <b>%1\$s</b>"] = "Alt dizin <b>%1\$s</b> silindi";
$net2ftp_messages["Unable to move the directory <b>%1\$s</b>"] = "Unable to move the directory <b>%1\$s</b>";
$net2ftp_messages["Moved directory <b>%1\$s</b>"] = "Moved directory <b>%1\$s</b>";
$net2ftp_messages["Processing of directory <b>%1\$s</b> completed"] = "Dizinin <b>%1\$s</b> i�leme al�nmas� tamamland�";
$net2ftp_messages["The target for file <b>%1\$s</b> is the same as the source, so this file will be skipped"] = "Dosya i�in hedef <b>%1\$s</b> kayna��n ayn�s�, bu y�zden bu dosya atlan�lacak";
$net2ftp_messages["The file <b>%1\$s</b> contains a banned keyword, so this file will be skipped"] = "Dosya <b>%1\$s</b> yasakl� anahtar s�zc�k i�eriyor, bu y�zden bu dosya atlan�lacak";
$net2ftp_messages["The file <b>%1\$s</b> contains a banned keyword, aborting the move"] = "Dosya <b>%1\$s</b> yasakl� anahtar s�zc�k i�eriyor, ta��may� iptal ediyor";
$net2ftp_messages["The file <b>%1\$s</b> is too big to be copied, so this file will be skipped"] = "Dosya <b>%1\$s</b> kopyalayabilmek i�in �ok b�y�k, bu y�zden bu dosya atlan�lacak";
$net2ftp_messages["The file <b>%1\$s</b> is too big to be moved, aborting the move"] = "Dosya <b>%1\$s</b> ta��mak i�in �ok b�y�k, ta��may� iptal ediyor";
$net2ftp_messages["Unable to copy the file <b>%1\$s</b>"] = "Dosyay� <b>%1\$s</b> kopyalayam�yor";
$net2ftp_messages["Copied file <b>%1\$s</b>"] = "Dosyay� <b>%1\$s</b> kopyalad�";
$net2ftp_messages["Unable to move the file <b>%1\$s</b>, aborting the move"] = "Dosyay� <b>%1\$s</b> ta��yam�yor, ta��may� iptal ediyor";
$net2ftp_messages["Unable to move the file <b>%1\$s</b>"] = "Unable to move the file <b>%1\$s</b>";
$net2ftp_messages["Moved file <b>%1\$s</b>"] = "Dosya <b>%1\$s</b> ta��nd�";
$net2ftp_messages["Unable to delete the file <b>%1\$s</b>"] = "<b>%1\$s</b> dosyay� silemiyor";
$net2ftp_messages["Deleted file <b>%1\$s</b>"] = "Dosyay� <b>%1\$s</b> sildi";
$net2ftp_messages["All the selected directories and files have been processed."] = "T�m se�ili dosya ve dizinler i�leme al�nd�.";

// ftp_processfiles()

// ftp_getfile()
$net2ftp_messages["Unable to copy the remote file <b>%1\$s</b> to the local file using FTP mode <b>%2\$s</b>"] = "Uzaktaki dosyay� <b>%1\$s</b> yerel dosyaya  FTP <b>%2\$s</b> modunu kullanarak kopyalayam�yor";
$net2ftp_messages["Unable to delete file <b>%1\$s</b>"] = "Dosyay� <b>%1\$s</b> silemiyor";

// ftp_putfile()
$net2ftp_messages["The file is too big to be transferred"] = "Dosya aktarabilmek i�in �ok b�y�k";
$net2ftp_messages["Daily limit reached: the file <b>%1\$s</b> will not be transferred"] = "G�nl�k s�n�ra ula�t�: dosya <b>%1\$s</b> aktar�lamayacak";
$net2ftp_messages["Unable to copy the local file to the remote file <b>%1\$s</b> using FTP mode <b>%2\$s</b>"] = "Yerel dosyay�, uzaktaki dosyaya <b>%1\$s</b> FTP <b>%2\$s</b> modunu kullanarak kopyalayam�yor";
$net2ftp_messages["Unable to delete the local file"] = "Yerel dosyay� silemiyor";

// ftp_downloadfile()
$net2ftp_messages["Unable to delete the temporary file"] = "Ge�ici dosyay� silemiyor";
$net2ftp_messages["Unable to send the file to the browser"] = "Taray�c�ya dosyay� g�nderemiyor";

// ftp_zip()
$net2ftp_messages["Unable to create the temporary file"] = "Ge�ici dosya olu�turam�yor";
$net2ftp_messages["The zip file has been saved on the FTP server as <b>%1\$s</b>"] = "Zip ar�iv paketi dosyas�, FTP sunucusuna <b>%1\$s</b> olarak kaydedildi";
$net2ftp_messages["Requested files"] = "�stenilen dosyalar";

$net2ftp_messages["Dear,"] = "Say�n,";
$net2ftp_messages["Someone has requested the files in attachment to be sent to this email account (%1\$s)."] = "Birisi bu e-posta hesab�na (%1\$s) ekteki dosyan�n g�nderilemsini istedi.";
$net2ftp_messages["If you know nothing about this or if you don't trust that person, please delete this email without opening the Zip file in attachment."] = "E�er bunun hakk�nda hi�bir �ey bilmiyorsan�z ya da bu ki�iye g�venmiyorsan�z, l�tfen ekteki zip ar�iv paketi dosyas�n� a�madan bu e-postay� silin.";
$net2ftp_messages["Note that if you don't open the Zip file, the files inside cannot harm your computer."] = "Zip ar�iv paketi dosyas�n� a�mazsan�z, i�erisindeki dosyalar�n bilgisayar�n�za zarar veremeyece�ine dikkat edin.";   //note: ?
$net2ftp_messages["Information about the sender: "] = "G�nderen hakk�nda bilgiler: ";
$net2ftp_messages["IP address: "] = "IP adres: ";
$net2ftp_messages["Time of sending: "] = "G�nderme zaman�: ";
$net2ftp_messages["Sent via the net2ftp application installed on this website: "] = "Bu websitesine y�klenen net2ftp uygulamas� yoluyla g�nderildi: ";
$net2ftp_messages["Webmaster's email: "] = "Web sahibi'nin e-postas�: ";
$net2ftp_messages["Message of the sender: "] = "G�nderenin iletisi: ";
$net2ftp_messages["net2ftp is free software, released under the GNU/GPL license. For more information, go to http://www.net2ftp.com."] = "net2ftp GNU/GPL lisans� alt�nda piyasaya s�r�len bedava bir yaz�l�md�r. Daha fazla bilgi i�in, http://www.net2ftp.com ye gidin.";

$net2ftp_messages["The zip file has been sent to <b>%1\$s</b>."] = "Zip ar�ivi paketi, <b>%1\$s</b>e g�nderildi.";

// acceptFiles()
$net2ftp_messages["File <b>%1\$s</b> is too big. This file will not be uploaded."] = "Dosya <b>%1\$s</b> �ok b�y�k. Bu dosya y�klenilmeyecek.";
$net2ftp_messages["File <b>%1\$s</b> is contains a banned keyword. This file will not be uploaded."] = "Dosya <b>%1\$s</b> yasakl� anahtar s�zc�k i�eriyor. Bu dosya y�klenilmeyecek.";
$net2ftp_messages["Could not generate a temporary file."] = "Ge�ici bir dosya olu�turam�yor.";
$net2ftp_messages["File <b>%1\$s</b> could not be moved"] = "Dosya <b>%1\$s</b> ta��nam�yor";
$net2ftp_messages["File <b>%1\$s</b> is OK"] = "Dosya <b>%1\$s</b> TAMAM";
$net2ftp_messages["Unable to move the uploaded file to the temp directory.<br /><br />The administrator of this website has to <b>chmod 777</b> the /temp directory of net2ftp."] = "Y�klenen dosyay� temp dizinine ta��yam�yor.<br /><br />Bu websitesinin y�neticisi net2ftp nin temp dizinini <b>777 chmod</b> yapmal�.";
$net2ftp_messages["You did not provide any file to upload."] = "Y�klemek i�in herhangi bir dosya sa�lamad�n�z.";

// ftp_transferfiles()
$net2ftp_messages["File <b>%1\$s</b> could not be transferred to the FTP server"] = "Dosya <b>%1\$s</b> FTP sunucusuna aktar�lam�yor";
$net2ftp_messages["File <b>%1\$s</b> has been transferred to the FTP server using FTP mode <b>%2\$s</b>"] = "Dosya <b>%1\$s</b> FTP sunucusuna, FTP <b>%2\$s</b> modu kullanarak aktar�ld�";
$net2ftp_messages["Transferring files to the FTP server"] = "FTP sunucusuna dosyalari aktariyor";

// ftp_unziptransferfiles()
$net2ftp_messages["Processing archive nr %1\$s: <b>%2\$s</b>"] = "Ar�iv paketini %1\$s i�leme al�yor: <b>%2\$s</b>";
$net2ftp_messages["Archive <b>%1\$s</b> was not processed because its filename extension was not recognized. Only zip, tar, tgz and gz archives are supported at the moment."] = "Ar�iv paketi <b>%1\$s</b> i�leme al�nmad� ��nk� dosya uzant�s� tan�nmad�. �u an sadece zip, tar, tgz ve gz ar�iv paketleri destekleniyor.";
$net2ftp_messages["Unable to extract the files and directories from the archive"] = "Ar�iv paketinden dosya ve dizinleri ��kartam�yor";
$net2ftp_messages["Archive contains filenames with ../ or ..\\ - aborting the extraction"] = "Archive contains filenames with ../ or ..\\ - aborting the extraction";
$net2ftp_messages["Could not unzip entry %1\$s (error code %2\$s)"] = "Could not unzip entry %1\$s (error code %2\$s)";
$net2ftp_messages["Created directory %1\$s"] = "Dizini %1\$s olu�turuldu";
$net2ftp_messages["Could not create directory %1\$s"] = "Dizini %1\$s olu�turam�yor";
$net2ftp_messages["Copied file %1\$s"] = "Dosyay� %1\$s kopyalad�";
$net2ftp_messages["Could not copy file %1\$s"] = "Dosyay� %1\$s kopyalayam�yor";
$net2ftp_messages["Unable to delete the temporary directory"] = "Ge�ici dizini silemiyor";
$net2ftp_messages["Unable to delete the temporary file %1\$s"] = "Ge�ici dosyay� %1\$s silemiyor";

// ftp_mysite()
$net2ftp_messages["Unable to execute site command <b>%1\$s</b>"] = "Site komutunu <b>%1\$s</b> ger�ekle�tiremiyor";

// shutdown()
$net2ftp_messages["Your task was stopped"] = "��leminiz durduruldu";
$net2ftp_messages["The task you wanted to perform with net2ftp took more time than the allowed %1\$s seconds, and therefor that task was stopped."] = "Net2ftp ile ger�ekle�tirmek istedi�iniz i�lem izin verilen %1\$s saniyeden daha fazla s�rd� ve bu nedenle i�lem durduruldu.";
$net2ftp_messages["This time limit guarantees the fair use of the web server for everyone."] = "Bu s�re s�n�r�, web sunucusunu herkes taraf�ndan adil kullan�m�n� garantiler.";
$net2ftp_messages["Try to split your task in smaller tasks: restrict your selection of files, and omit the biggest files."] = "��leminizi daha k���k i�lemlere b�lmeye �al���n: dosyalar�n�z�n se�imini k�s�tlay�n ve en b�y�k dosyalar� atlay�n.";
$net2ftp_messages["If you really need net2ftp to be able to handle big tasks which take a long time, consider installing net2ftp on your own server."] = "E�er ger�ekten net2ftp  nin daha uzun s�re alan b�y�k i�lemleri ele alabilmesi i�in, net2ftp yi kendi sunucunuza y�klemeyi d���n�n.";

// SendMail()
$net2ftp_messages["You did not provide any text to send by email!"] = "E-postayla g�ndermek i�in herhangi bir metin sa�lamad�n�z!";
$net2ftp_messages["You did not supply a From address."] = "Kimden adresi sa�lamad�n�z.";
$net2ftp_messages["You did not supply a To address."] = "Kime adresi sa�lamd�n�z.";
$net2ftp_messages["Due to technical problems the email to <b>%1\$s</b> could not be sent."] = "Teknik problemler y�z�nden e-posta <b>%1\$s</b>a g�nderilemiyor.";

// tempdir2()
$net2ftp_messages["Unable to create a temporary directory because (unvalid parent directory)"] = "Unable to create a temporary directory because (unvalid parent directory)";
$net2ftp_messages["Unable to create a temporary directory because (parent directory is not writeable)"] = "Unable to create a temporary directory because (parent directory is not writeable)";
$net2ftp_messages["Unable to create a temporary directory (too many tries)"] = "Unable to create a temporary directory (too many tries)";

// -------------------------------------------------------------------------
// /includes/logging.inc.php
// -------------------------------------------------------------------------
// logAccess(), logLogin(), logError()
$net2ftp_messages["Unable to execute the SQL query."] = "SQL sorgusunu ger�ekle�tiremiyor.";
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
$net2ftp_messages["Please enter your username and password for FTP server "] = "L�tfen FTP sunucusu i�in kullan�c� ad�n�z� ve �ifrenizi girin ";
$net2ftp_messages["You did not fill in your login information in the popup window.<br />Click on \"Go to the login page\" below."] = "Pop a��lan pencereye giri� bilginizi doldurmad�n�z.<br />A�a��daki \"Giri� sayfas�na git\" �zerine t�klay�n.";
$net2ftp_messages["Access to the net2ftp Admin panel is disabled, because no password has been set in the file settings.inc.php. Enter a password in that file, and reload this page."] = "Net2ftp Y�netici paneline giri� kapat�ld�, ��nk� settings.inc.php dosyas�nda �ifre ayarlanmad�. O dosyaya �ifre girin ve bu sayfay� tekrar y�kleyin.";
$net2ftp_messages["Please enter your Admin username and password"] = "L�tfen Y�netici kullan�c� ad�n�z� ve �ifrenizi girin"; 
$net2ftp_messages["You did not fill in your login information in the popup window.<br />Click on \"Go to the login page\" below."] = "Pop a��lan pencereye giri� bilginizi doldurmad�n�z.<br />A�a��daki \"Giri� sayfas�na git\" �zerine t�klay�n.";
$net2ftp_messages["Wrong username or password for the net2ftp Admin panel. The username and password can be set in the file settings.inc.php."] = "Net2ftp Y�netici paneli i�in yanl�� kullan�c� ad� veya �ifre. Kullanc� ad� veya �ifre, settings.inc.php dosyas�nda ayarlanabilir.";


// -------------------------------------------------------------------------
// /skins/skins.inc.php
// -------------------------------------------------------------------------
$net2ftp_messages["Blue"] = "Mavi";
$net2ftp_messages["Grey"] = "Gri";
$net2ftp_messages["Black"] = "Siyah";
$net2ftp_messages["Yellow"] = "Sar�";
$net2ftp_messages["Pastel"] = "Pastel";

// getMime()
$net2ftp_messages["Directory"] = "Dizin";
$net2ftp_messages["Symlink"] = "Symlink";
$net2ftp_messages["ASP script"] = "ASP yaz�l�m";
$net2ftp_messages["Cascading Style Sheet"] = "Cascading Style Sheet";
$net2ftp_messages["HTML file"] = "HTML dosyas�";
$net2ftp_messages["Java source file"] = "Java kaynak dosyas�";
$net2ftp_messages["JavaScript file"] = "JavaScript dosyas�";
$net2ftp_messages["PHP Source"] = "PHP Kaynak";
$net2ftp_messages["PHP script"] = "PHP yaz�l�m�";
$net2ftp_messages["Text file"] = "Metin dosyas�";
$net2ftp_messages["Bitmap file"] = "Bitmap dosyas�";
$net2ftp_messages["GIF file"] = "GIF dosyas�";
$net2ftp_messages["JPEG file"] = "JPEG dosyas�";
$net2ftp_messages["PNG file"] = "PNG dosyas�";
$net2ftp_messages["TIF file"] = "TIF dosyas�";
$net2ftp_messages["GIMP file"] = "GIMP dosyas�";
$net2ftp_messages["Executable"] = "Uygulama";
$net2ftp_messages["Shell script"] = "Shell yaz�l�m�";
$net2ftp_messages["MS Office - Word document"] = "MS Ofis - Word belgesi";
$net2ftp_messages["MS Office - Excel spreadsheet"] = "MS Ofis - Excel �izelgesi";
$net2ftp_messages["MS Office - PowerPoint presentation"] = "MS Ofis - PowerPoint sunumu";
$net2ftp_messages["MS Office - Access database"] = "MS Ofis - Access veritaban�";
$net2ftp_messages["MS Office - Visio drawing"] = "MS Ofis - Visio �izimi";
$net2ftp_messages["MS Office - Project file"] = "MS Ofis - Project dosyas�";
$net2ftp_messages["OpenOffice - Writer 6.0 document"] = "OpenOffice - Writer 6.0 belgesi";
$net2ftp_messages["OpenOffice - Writer 6.0 template"] = "OpenOffice - Writer 6.0 �ablonu";
$net2ftp_messages["OpenOffice - Calc 6.0 spreadsheet"] = "OpenOffice - Calc 6.0 �izelgesi";
$net2ftp_messages["OpenOffice - Calc 6.0 template"] = "OpenOffice - Calc 6.0 �ablonu";
$net2ftp_messages["OpenOffice - Draw 6.0 document"] = "OpenOffice - Draw 6.0 belgesi";
$net2ftp_messages["OpenOffice - Draw 6.0 template"] = "OpenOffice - Draw 6.0 �ablonu";
$net2ftp_messages["OpenOffice - Impress 6.0 presentation"] = "OpenOffice - Impress 6.0 sunumu";
$net2ftp_messages["OpenOffice - Impress 6.0 template"] = "OpenOffice - Impress 6.0 �ablonu";
$net2ftp_messages["OpenOffice - Writer 6.0 global document"] = "OpenOffice - Writer 6.0 evrensel belge";
$net2ftp_messages["OpenOffice - Math 6.0 document"] = "OpenOffice - Math 6.0 belgesi";
$net2ftp_messages["StarOffice - StarWriter 5.x document"] = "StarOffice - StarWriter 5.x belgesi";
$net2ftp_messages["StarOffice - StarWriter 5.x global document"] = "StarOffice - StarWriter 5.x evrensel belge";
$net2ftp_messages["StarOffice - StarCalc 5.x spreadsheet"] = "StarOffice - StarCalc 5.x ��z�m�";
$net2ftp_messages["StarOffice - StarDraw 5.x document"] = "StarOffice - StarDraw 5.x belgesi";
$net2ftp_messages["StarOffice - StarImpress 5.x presentation"] = "StarOffice - StarImpress 5.x sunumu";
$net2ftp_messages["StarOffice - StarImpress Packed 5.x file"] = "StarOffice - StarImpress Packed 5.x dosyas�";
$net2ftp_messages["StarOffice - StarMath 5.x document"] = "StarOffice - StarMath 5.x belgesi";
$net2ftp_messages["StarOffice - StarChart 5.x document"] = "StarOffice - StarChart 5.x belgesi";
$net2ftp_messages["StarOffice - StarMail 5.x mail file"] = "StarOffice - StarMail 5.x posta dosyas�";
$net2ftp_messages["Adobe Acrobat document"] = "Adobe Acrobat belgesi";
$net2ftp_messages["ARC archive"] = "ARC ar�iv paketi";
$net2ftp_messages["ARJ archive"] = "ARJ ar�iv paketi";
$net2ftp_messages["RPM"] = "RPM";
$net2ftp_messages["GZ archive"] = "GZ ar�iv paketi";
$net2ftp_messages["TAR archive"] = "TAR ar�iv paketi";
$net2ftp_messages["Zip archive"] = "Zip ar�iv paketi";
$net2ftp_messages["MOV movie file"] = "MOV film dosyas�";
$net2ftp_messages["MPEG movie file"] = "MPEG film dosyas�";
$net2ftp_messages["Real movie file"] = "Real film dosyas�";
$net2ftp_messages["Quicktime movie file"] = "Quicktime film dosyas�";
$net2ftp_messages["Shockwave flash file"] = "Shockwave fla� dosyas�";
$net2ftp_messages["Shockwave file"] = "Shockwave dosyas�";
$net2ftp_messages["WAV sound file"] = "WAV ses dosyas�";
$net2ftp_messages["Font file"] = "Font dosyas�";
$net2ftp_messages["%1\$s File"] = "%1\$s Dosyas�";
$net2ftp_messages["File"] = "Dosya";

// getAction()
$net2ftp_messages["Back"] = "Geri";
$net2ftp_messages["Submit"] = "G�nder";
$net2ftp_messages["Refresh"] = "Yenile";
$net2ftp_messages["Details"] = "Detaylar";
$net2ftp_messages["Icons"] = "Ikonlar";
$net2ftp_messages["List"] = "Liste";
$net2ftp_messages["Logout"] = "��k��";
$net2ftp_messages["Help"] = "Yard�m";
$net2ftp_messages["Bookmark"] = "S�k Kullan�lanlar";
$net2ftp_messages["Save"] = "Kaydet";
$net2ftp_messages["Default"] = "Varsay�lan";


// -------------------------------------------------------------------------
// /skins/[skin]/header.template.php and footer.template.php
// -------------------------------------------------------------------------
$net2ftp_messages["Help Guide"] = "Yard�m Rehberi";
$net2ftp_messages["Forums"] = "Forumlar";
$net2ftp_messages["License"] = "Lisans";
$net2ftp_messages["Powered by"] = "Katk�lar�yla";
$net2ftp_messages["You are now taken to the net2ftp forums. These forums are for net2ftp related topics only - not for generic webhosting questions."] = "�imdi net2ftp forumlar�na g�t�r�l�yorsunuz. Bu forumlar, sadece net2ftp alakal� konular i�indir - genel web bar�nd�rma sorular� i�in de�il.";
$net2ftp_messages["Standard"] = "Standard";
$net2ftp_messages["Mobile"] = "Mobile";

// -------------------------------------------------------------------------
// Admin module
if ($net2ftp_globals["state"] == "admin") {
// -------------------------------------------------------------------------

// /modules/admin/admin.inc.php
$net2ftp_messages["Admin functions"] = "Y�netici i�levleri";

// /skins/[skin]/admin1.template.php
$net2ftp_messages["Version information"] = "S�r�m bilgisi";
$net2ftp_messages["This version of net2ftp is up-to-date."] = "Net2ftp nin bu s�r�m� g�ncel.";
$net2ftp_messages["The latest version information could not be retrieved from the net2ftp.com server. Check the security settings of your browser, which may prevent the loading of a small file from the net2ftp.com server."] = "En son s�r�m bilgisi, net2ftp.com sunucusundan al�nam�yor. Taray�c�n�z�n net2ftp.com sunucusundan k���k bir dosya y�klemesini engelleyebilen g�venlik ayarlar�n� denetleyin.";   //retrieved: ?
$net2ftp_messages["Logging"] = "Giriyor";
$net2ftp_messages["Date from:"] = "Tarih den:";
$net2ftp_messages["to:"] = "e:";
$net2ftp_messages["Empty logs"] = "Bo� kay�tlar";
$net2ftp_messages["View logs"] = "Kay�tlar� g�r�nt�le";
$net2ftp_messages["Go"] = "Git";
$net2ftp_messages["Setup MySQL tables"] = "MySQL tablolar�n� kur";
$net2ftp_messages["Create the MySQL database tables"] = "MySQL veritaban� tablolar� olu�tur";

} // end admin

// -------------------------------------------------------------------------
// Admin_createtables module
if ($net2ftp_globals["state"] == "admin_createtables") {
// -------------------------------------------------------------------------

// /modules/admin_createtables/admin_createtables.inc.php
$net2ftp_messages["Admin functions"] = "Y�netici i�levleri";
$net2ftp_messages["The handle of file %1\$s could not be opened."] = "Dosyan�n idaresi %1\$s a��lam�yor.";   //handle: ?
$net2ftp_messages["The file %1\$s could not be opened."] = "Dosya %1\$s a��lam�yor.";
$net2ftp_messages["The handle of file %1\$s could not be closed."] = "Dosyan�n idaresi %1\$s kapat�lam�yor."; //handle: ?
$net2ftp_messages["The connection to the server <b>%1\$s</b> could not be set up. Please check the database settings you've entered."] = "Sunucuya <b>%1\$s</b> ba�lant� kurulam�yor. L�tfen girdi�iniz veritaban� ayarlar�n� denetleyin.";
$net2ftp_messages["Unable to select the database <b>%1\$s</b>."] = "Veritaban� <b>%1\$s</b> se�emiyor.";
$net2ftp_messages["The SQL query nr <b>%1\$s</b> could not be executed."] = "SQL sorgu say�s� <b>%1\$s</b> ger�ekle�tirilemiyor.";
$net2ftp_messages["The SQL query nr <b>%1\$s</b> was executed successfully."] = "SQL sorgu say�s� <b>%1\$s</b> ba�ar�l� bir �ekilde ger�ekle�tirildi.";

// /skins/[skin]/admin_createtables1.template.php
$net2ftp_messages["Please enter your MySQL settings:"] = "L�tfen MySQL ayarlar�n�z� girin:";
$net2ftp_messages["MySQL username"] = "MySQL kullan�c� ad�";
$net2ftp_messages["MySQL password"] = "MySQL �ifresi";
$net2ftp_messages["MySQL database"] = "MySQL veritaban�";
$net2ftp_messages["MySQL server"] = "MySQL sunucusu";
$net2ftp_messages["This SQL query is going to be executed:"] = "Bu SQL sorgusu ger�ekle�tirilecek:";
$net2ftp_messages["Execute"] = "Ger�ekle�tir";

// /skins/[skin]/admin_createtables2.template.php
$net2ftp_messages["Settings used:"] = "Kullan�lan ayarlar:";
$net2ftp_messages["MySQL password length"] = "MySQL �ifre uzunlu�u";
$net2ftp_messages["Results:"] = "Sonu�lar:";

} // end admin_createtables


// -------------------------------------------------------------------------
// Admin_viewlogs module
if ($net2ftp_globals["state"] == "admin_viewlogs") {
// -------------------------------------------------------------------------

// /modules/admin_createtables/admin_viewlogs.inc.php
$net2ftp_messages["Admin functions"] = "Y�netici i�levleri";
$net2ftp_messages["Unable to execute the SQL query <b>%1\$s</b>."] = "SQL sorgusunu <b>%1\$s</b> ger�ekle�tiremiyor.";
$net2ftp_messages["No data"] = "Bilgi yok";

} // end admin_viewlogs


// -------------------------------------------------------------------------
// Admin_emptylogs module
if ($net2ftp_globals["state"] == "admin_emptylogs") {
// -------------------------------------------------------------------------

// /modules/admin_createtables/admin_emptylogs.inc.php
$net2ftp_messages["Admin functions"] = "Y�netici i�levleri";
$net2ftp_messages["The table <b>%1\$s</b> was emptied successfully."] = "Tablo <b>%1\$s</b> ba�ar�l� bir �ekilde bo�alt�ld�.";
$net2ftp_messages["The table <b>%1\$s</b> could not be emptied."] = "Tablo <b>%1\$s</b> bo�alt�lam�yor.";
$net2ftp_messages["The table <b>%1\$s</b> was optimized successfully."] = "Tablo <b>%1\$s</b> ba�ar�l� bir �ekilde onar�ld�.";
$net2ftp_messages["The table <b>%1\$s</b> could not be optimized."] = "Tablo <b>%1\$s</b> onar�lam�yor.";

} // end admin_emptylogs


// -------------------------------------------------------------------------
// Advanced module
if ($net2ftp_globals["state"] == "advanced") {
// -------------------------------------------------------------------------

// /modules/advanced/advanced.inc.php
$net2ftp_messages["Advanced functions"] = "Geli�mi� i�levler";

// /skins/[skin]/advanced1.template.php
$net2ftp_messages["Go"] = "Git";
$net2ftp_messages["Disabled"] = "Kapat�ld�";    //disabled: ?
$net2ftp_messages["Advanced FTP functions"] = "Geli�mi� FTP i�levleri";
$net2ftp_messages["Send arbitrary FTP commands to the FTP server"] = "FTP sunucusuna rastgele FTP komutlar� g�nder";
$net2ftp_messages["This function is available on PHP 5 only"] = "Bu i�lev sadece PHP 5 de m�mk�n";
$net2ftp_messages["Troubleshooting functions"] = "��levlerin sorunlar�n� gider";
$net2ftp_messages["Troubleshoot net2ftp on this webserver"] = "Bu websunucusunda net2ftp nin sorunlar�n� gider";
$net2ftp_messages["Troubleshoot an FTP server"] = "FTP sunucusunun sorunlar�n� gider";
$net2ftp_messages["Test the net2ftp list parsing rules"] = "Net2ftp liste ��z�mleme kurallar�n� test et";
$net2ftp_messages["Translation functions"] = "�eviri i�levleri";
$net2ftp_messages["Introduction to the translation functions"] = "�eviri i�levlerine giri�";
$net2ftp_messages["Extract messages to translate from code files"] = "Kod dosyalar�ndan �evrilecek metin ��kart";
$net2ftp_messages["Check if there are new or obsolete messages"] = "Yeni ya da eskimi� ileti olup olmad���n� denetle";

$net2ftp_messages["Beta functions"] = "Beta i�levleri";
$net2ftp_messages["Send a site command to the FTP server"] = "FTP sunucusuna bir site komutu g�nder";
$net2ftp_messages["Apache: password-protect a directory, create custom error pages"] = "Apache: �ifre-korumal� dizin, tasarlanm�� hata sayfalar� olu�tur";   //custom: ?
$net2ftp_messages["MySQL: execute an SQL query"] = "MySQL: SQL sorgusu ger�ekle�tir";


// advanced()
$net2ftp_messages["The site command functions are not available on this webserver."] = "Site komut i�levleri bu web sunucusunda m�m�k�n de�il.";
$net2ftp_messages["The Apache functions are not available on this webserver."] = "Apache i�levleri bu web sunucusunda m�m�k�n de�il.";
$net2ftp_messages["The MySQL functions are not available on this webserver."] = "MySQL i�levleri bu web sunucusunda m�m�k�n de�il.";
$net2ftp_messages["Unexpected state2 string. Exiting."] = "Beklenmedik state2 dizisi. ��k�yor.";

} // end advanced


// -------------------------------------------------------------------------
// Advanced_ftpserver module
if ($net2ftp_globals["state"] == "advanced_ftpserver") {
// -------------------------------------------------------------------------

// /modules/advanced_ftpserver/advanced_ftpserver.inc.php
$net2ftp_messages["Troubleshoot an FTP server"] = "FTP sunucusunun sorunlar�n� gider";

// /skins/[skin]/advanced_ftpserver1.template.php
$net2ftp_messages["Connection settings:"] = "Ba�lant� ayarlar�:";
$net2ftp_messages["FTP server"] = "FTP sunucusu";
$net2ftp_messages["FTP server port"] = "FTP sunucu port";
$net2ftp_messages["Username"] = "Kullan�c� ad�";
$net2ftp_messages["Password"] = "�ifre";
$net2ftp_messages["Password length"] = "�ifre uzunlu�u";
$net2ftp_messages["Passive mode"] = "Pasif mod";
$net2ftp_messages["Directory"] = "Dizin";
$net2ftp_messages["Printing the result"] = "Sonu�lar� yazd�r�yor";

// /skins/[skin]/advanced_ftpserver2.template.php
$net2ftp_messages["Connecting to the FTP server: "] = "FTP sunucusuna ba�lan�yor: ";
$net2ftp_messages["Logging into the FTP server: "] = "FTP sunucusuna giri� yap�yor: ";
$net2ftp_messages["Setting the passive mode: "] = "Pasif moda ge�iyor: ";
$net2ftp_messages["Getting the FTP server system type: "] = "FTP sunucusu sistem t�r�n� al�yor: ";
$net2ftp_messages["Changing to the directory %1\$s: "] = "Dizini %1\$s de�i�tiriyor: ";
$net2ftp_messages["The directory from the FTP server is: %1\$s "] = "FTP sunucusundan dizin: %1\$s ";
$net2ftp_messages["Getting the raw list of directories and files: "] = "Dosya ve dizinlerin ham listesini al�yor: ";
$net2ftp_messages["Trying a second time to get the raw list of directories and files: "] = "Dosya ve dizinlerin ham listesini almak i�in ikince bir defa deniyor: ";
$net2ftp_messages["Closing the connection: "] = "Ba�lant�y� kapat�yor: ";
$net2ftp_messages["Raw list of directories and files:"] = "Dosya ve dizinlerin ham listesi:";
$net2ftp_messages["Parsed list of directories and files:"] = "Dosya ve dizinlerin ��z�mlenmi� listesi:";   //parsed: ?

$net2ftp_messages["OK"] = "TAMAM";
$net2ftp_messages["not OK"] = "TAMAM de�il";

} // end advanced_ftpserver


// -------------------------------------------------------------------------
// Advanced_parsing module
if ($net2ftp_globals["state"] == "advanced_parsing") {
// -------------------------------------------------------------------------

$net2ftp_messages["Test the net2ftp list parsing rules"] = "Net2ftp liste ��z�mleme kurallar�n� test et";
$net2ftp_messages["Sample input"] = "�rnek girdi";
$net2ftp_messages["Parsed output"] = "��z�mlenmi� sonu�";   //parsed: ?

} // end advanced_parsing


// -------------------------------------------------------------------------
// Advanced_webserver module
if ($net2ftp_globals["state"] == "advanced_webserver") {
// -------------------------------------------------------------------------

$net2ftp_messages["Troubleshoot your net2ftp installation"] = "Net2ftp y�klemenizin sorunu ��z�n";
$net2ftp_messages["Printing the result"] = "Sonu�lar� yazd�r�yor";

$net2ftp_messages["Checking if the FTP module of PHP is installed: "] = "Checking if the FTP module of PHP is installed: ";
$net2ftp_messages["yes"] = "evet";
$net2ftp_messages["no - please install it!"] = "hay�r - l�tfen onu y�kle!";

$net2ftp_messages["Checking the permissions of the directory on the web server: a small file will be written to the /temp folder and then deleted."] = "Web sunucunuzdaki dizinin iznini denetliyor: k���k bir dosya /temp klas�r�ne yaz�lacak ve sonra silinecek.";
$net2ftp_messages["Creating filename: "] = "Dosya ad� olu�turuyor: ";
$net2ftp_messages["OK. Filename: %1\$s"] = "TAMAM. Dosya ad�: %1\$s";
$net2ftp_messages["not OK"] = "TAMAM de�il";
$net2ftp_messages["OK"] = "TAMAM";
$net2ftp_messages["not OK. Check the permissions of the %1\$s directory"] = "TAMAM de�il. %1\$s dizinin iznini denetliyor";
$net2ftp_messages["Opening the file in write mode: "] = "Dosyay� yazma modunda a��yor: ";
$net2ftp_messages["Writing some text to the file: "] = "Dosyaya herhangi bir metin yaz�or : ";
$net2ftp_messages["Closing the file: "] = "Dosyay� kapat�or: ";
$net2ftp_messages["Deleting the file: "] = "Dosyay� siliyor: ";

$net2ftp_messages["Testing the FTP functions"] = "FTP i�levlerini test ediyor";
$net2ftp_messages["Connecting to a test FTP server: "] = "Test FTP sunucusuna ba�lan�yor: ";
$net2ftp_messages["Connecting to the FTP server: "] = "FTP sunucusuna ba�lan�yor: ";
$net2ftp_messages["Logging into the FTP server: "] = "FTP sunucusuna giri� yap�yor: ";
$net2ftp_messages["Setting the passive mode: "] = "Pasif moda ge�iyor: ";
$net2ftp_messages["Getting the FTP server system type: "] = "FTP sunucusu sistem t�r�n� al�yor: ";
$net2ftp_messages["Changing to the directory %1\$s: "] = "Dizini %1\$s de�i�tiriyor: ";
$net2ftp_messages["The directory from the FTP server is: %1\$s "] = "FTP sunucusundan dizin: %1\$s ";
$net2ftp_messages["Getting the raw list of directories and files: "] = "Dosya ve dizinlerin ham listesini al�yor: ";
$net2ftp_messages["Trying a second time to get the raw list of directories and files: "] = "Dosya ve dizinlerin ham listesini almak i�in ikince bir defa deniyor: ";
$net2ftp_messages["Closing the connection: "] = "Ba�lant�y� kapat�yor: ";
$net2ftp_messages["Raw list of directories and files:"] = "Dosya ve dizinlerin ham listesi:";
$net2ftp_messages["Parsed list of directories and files:"] = "Dosya ve dizinlerin ��z�mlenmi� listesi:";   //parsed: ?
$net2ftp_messages["OK"] = "TAMAM";
$net2ftp_messages["not OK"] = "TAMAM de�il";

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
$net2ftp_messages["Note: when you will use this bookmark, a popup window will ask you for your username and password."] = "Not: bu s�k kullan�lanlar� kulland���n�z zaman, pop a��lan pencere size kullan�c� ad�n�z� ve �ifrenizi soracak.";

} // end bookmark


// -------------------------------------------------------------------------
// Browse module
if ($net2ftp_globals["state"] == "browse") {
// -------------------------------------------------------------------------

// /modules/browse/browse.inc.php
$net2ftp_messages["Choose a directory"] = "Dizin se�";
$net2ftp_messages["Please wait..."] = "L�tfen bekleyin...";

// browse()
$net2ftp_messages["Directories with names containing \' cannot be displayed correctly. They can only be deleted. Please go back and select another subdirectory."] = " \' ad�n� i�eren dizinler do�ru bir �ekilde g�sterilemez. sadece silinebilir. L�tfen geri d�n�n ve bir ba�ka alt dizin se�in.";

$net2ftp_messages["Daily limit reached: you will not be able to transfer data"] = "G�nl�k s�n�r� a�t�: bilgi aktaramayacaks�n�z";
$net2ftp_messages["In order to guarantee the fair use of the web server for everyone, the data transfer volume and script execution time are limited per user, and per day. Once this limit is reached, you can still browse the FTP server but not transfer data to/from it."] = "Herkesin web sunucusunu adil bir �ekilde kullan�m�n� garanti etmek i�in, bilgi aktar�m hacmi ve yaz�l�m uygulama s�resi, kullan�c� ba��na ve g�nl�k olarak s�n�rland�r�lm��t�r. Bir kez bu s�n�ra ula��ld���nda, FTP sunucusunu hala gezebilir fakat ondan/ona bilgi aktaramazs�n�z.";
$net2ftp_messages["If you need unlimited usage, please install net2ftp on your own web server."] = "E�er s�n�rs�z kullan�ma ihtiya� duyuyorsan�z, l�tfen net2ftpyi kendi web sunucunuza y�kleyin.";

// printdirfilelist()
// Keep this short, it must fit in a small button!
$net2ftp_messages["New dir"] = "Yeni Dizin";
$net2ftp_messages["New file"] = "Yeni Dosya";
$net2ftp_messages["HTML templates"] = "HTML �ablonlar�";
$net2ftp_messages["Upload"] = "Y�kle";
$net2ftp_messages["Java Upload"] = "Java ile Y�kle";
$net2ftp_messages["Flash Upload"] = "Flash ile Y�kle";
$net2ftp_messages["Install"] = "Kur";
$net2ftp_messages["Advanced"] = "Geli�mi�";
$net2ftp_messages["Copy"] = "Kopyala";
$net2ftp_messages["Move"] = "Ta��";
$net2ftp_messages["Delete"] = "Sil";
$net2ftp_messages["Rename"] = "Yeniden Adland�r";
$net2ftp_messages["Chmod"] = "Chmod";
$net2ftp_messages["Download"] = "�ndir";
$net2ftp_messages["Unzip"] = "Ar�iv a�";
$net2ftp_messages["Zip"] = "Zip";
$net2ftp_messages["Size"] = "Boyut";
$net2ftp_messages["Search"] = "Arama";
$net2ftp_messages["Go to the parent directory"] = "Ana dizine git";
$net2ftp_messages["Go"] = "Git";
$net2ftp_messages["Transform selected entries: "] = "Se�ili giri�leri d�n��t�r: ";
$net2ftp_messages["Transform selected entry: "] = "Se�ili giri�i d�n��t�r: ";
$net2ftp_messages["Make a new subdirectory in directory %1\$s"] = "%1\$s dizininde yeni bir alt dizin yap";
$net2ftp_messages["Create a new file in directory %1\$s"] = "%1\$s dizininde yeni bir dosya olu�tur";
$net2ftp_messages["Create a website easily using ready-made templates"] = "Haz�r-yap�lm�� �ablon kullanarak kolayca bir websitesi olu�turun";
$net2ftp_messages["Upload new files in directory %1\$s"] = "%1\$s dizinine yeni dosya y�kle";
$net2ftp_messages["Upload directories and files using a Java applet"] = "Java aplet kullanarak dizin ve dosyalar� y�kle";
$net2ftp_messages["Upload files using a Flash applet"] = "Upload files using a Flash applet";
$net2ftp_messages["Install software packages (requires PHP on web server)"] = "Yaz�l�m paketlerini y�kle (web sunucusunda PHP gerektirir)";
$net2ftp_messages["Go to the advanced functions"] = "Geli�mi� i�levlere git";
$net2ftp_messages["Copy the selected entries"] = "Se�ili giri�leri kopyala";
$net2ftp_messages["Move the selected entries"] = "Se�ili giri�leri ta��";
$net2ftp_messages["Delete the selected entries"] = "Se�ili giri�leri sil";
$net2ftp_messages["Rename the selected entries"] = "Se�ili giri�leri yeniden adland�r";
$net2ftp_messages["Chmod the selected entries (only works on Unix/Linux/BSD servers)"] = "Se�ili giri�leri chmod (sadece Unix/Linux/BSD sunucular�nda �al���yor)";
$net2ftp_messages["Download a zip file containing all selected entries"] = "T�m se�ili giri�leri i�eren bir zip dosyas� indir";
$net2ftp_messages["Unzip the selected archives on the FTP server"] = "FTP sunucusundaki se�ili ar�iv paketlerini a�";
$net2ftp_messages["Zip the selected entries to save or email them"] = "Kaydedebilmek veya e-posta ile g�nderebilmek i�in, se�ili giri�leri ziple";
$net2ftp_messages["Calculate the size of the selected entries"] = "Se�ili giri�lerin boyutunu hesapla";
$net2ftp_messages["Find files which contain a particular word"] = "Belirli bir s�zc��� i�eren dosyalar� bul";
$net2ftp_messages["Click to sort by %1\$s in descending order"] = "Al�alan s�rada %1\$s ile s�ralamak i�in t�klay�n";
$net2ftp_messages["Click to sort by %1\$s in ascending order"] = "Y�kselen s�rada %1\$s ile s�ralamak i�in t�klay�n";
$net2ftp_messages["Ascending order"] = "Y�kselen s�ralama";
$net2ftp_messages["Descending order"] = "Al�alan s�ralama";
$net2ftp_messages["Upload files"] = "Dosyalar� y�kle";
$net2ftp_messages["Up"] = "Yukar�";
$net2ftp_messages["Click to check or uncheck all rows"] = "T�m dizileri i�aretlemek ya da i�areti kald�rmak i�in t�klay�n";
$net2ftp_messages["All"] = "T�m�";
$net2ftp_messages["Name"] = "Ad";
$net2ftp_messages["Type"] = "T�r";
//$net2ftp_messages["Size"] = "Size";
$net2ftp_messages["Owner"] = "sahip";
$net2ftp_messages["Group"] = "Grup";
$net2ftp_messages["Perms"] = "�zinler";
$net2ftp_messages["Mod Time"] = "Mod Zaman�";
$net2ftp_messages["Actions"] = "Eylemler";
$net2ftp_messages["Select the directory %1\$s"] = "Dizini %1\$s se�";
$net2ftp_messages["Select the file %1\$s"] = "Dosyay� %1\$s se�";
$net2ftp_messages["Select the symlink %1\$s"] = "Symlink %1\$s se�";
$net2ftp_messages["Go to the subdirectory %1\$s"] = "Alt dizine %1\$s git";
$net2ftp_messages["Download the file %1\$s"] = "Dosyay� %1\$s indir";
$net2ftp_messages["Follow symlink %1\$s"] = "Symlink %1\$s takip et";
$net2ftp_messages["View"] = "G�r�nt�le";
$net2ftp_messages["Edit"] = "D�zenle";
$net2ftp_messages["Update"] = "G�ncelle";
$net2ftp_messages["Open"] = "A�";
$net2ftp_messages["View the highlighted source code of file %1\$s"] = "Dosyan�n %1\$s vurgulanm�� kaynak kodunu g�r�nt�le";
$net2ftp_messages["Edit the source code of file %1\$s"] = "Dosyan�n %1\$s kaynak kodunu d�zenle";
$net2ftp_messages["Upload a new version of the file %1\$s and merge the changes"] = "Dosyan�n %1\$s yeni s�r�m�n� y�kle ve de�i�iklikleri birle�tir";   //mere: ?
$net2ftp_messages["View image %1\$s"] = "Resmi %1\$s g�r�nt�le";
$net2ftp_messages["View the file %1\$s from your HTTP web server"] = "HTTP web sunucunuzdan %1\$s dosyay� g�r�nt�le";
$net2ftp_messages["(Note: This link may not work if you don't have your own domain name.)"] = "(Not: E�er kendi alan ad�n�za sahip de�ilseniz, bu ba�lant� �al��mayabilir.)";
$net2ftp_messages["This folder is empty"] = "Bu klas�r bo�";

// printSeparatorRow()
$net2ftp_messages["Directories"] = "Dizinler";
$net2ftp_messages["Files"] = "Dosyalar";
$net2ftp_messages["Symlinks"] = "Symlinks";
$net2ftp_messages["Unrecognized FTP output"] = "Tan�nmayan FTP sonucu";
$net2ftp_messages["Number"] = "Say�";
$net2ftp_messages["Size"] = "Boyut";
$net2ftp_messages["Skipped"] = "Atlan�lan";
$net2ftp_messages["Data transferred from this IP address today"] = "Data transferred from this IP address today";
$net2ftp_messages["Data transferred to this FTP server today"] = "Data transferred to this FTP server today";

// printLocationActions()
$net2ftp_messages["Language:"] = "Dil:";
$net2ftp_messages["Skin:"] = "Kaplama:";
$net2ftp_messages["View mode:"] = "G�r�nt�leme modu:";
$net2ftp_messages["Directory Tree"] = "Dizin a�ac�";

// ftp2http()
$net2ftp_messages["Execute %1\$s in a new window"] = "Yeni pencerede %1\$s ger�ekle�tir";
$net2ftp_messages["This file is not accessible from the web"] = "Bu sayfaya webten ula��labilir de�il";

// printDirectorySelect()
$net2ftp_messages["Double-click to go to a subdirectory:"] = "Alt dizine gitmek i�in �ift t�klay�n:";
$net2ftp_messages["Choose"] = "Se�";
$net2ftp_messages["Up"] = "Yukar�";

} // end browse


// -------------------------------------------------------------------------
// Calculate size module
if ($net2ftp_globals["state"] == "calculatesize") {
// -------------------------------------------------------------------------
$net2ftp_messages["Size of selected directories and files"] = "Se�ili dizin ve dosyalar�n boyutu";
$net2ftp_messages["The total size taken by the selected directories and files is:"] = "Se�ili dizin ve dosyalar�n ald��� toplam boyut:";
$net2ftp_messages["The number of files which were skipped is:"] = "Atlan�lan dosyalar�n say�s�:";

} // end calculatesize


// -------------------------------------------------------------------------
// Chmod module
if ($net2ftp_globals["state"] == "chmod") {
// -------------------------------------------------------------------------
$net2ftp_messages["Chmod directories and files"] = "Dizin ve dosyalar� chmod";
$net2ftp_messages["Set all permissions"] = "T�m izinleri ayarla";
$net2ftp_messages["Read"] = "Oku";
$net2ftp_messages["Write"] = "Yaz";
$net2ftp_messages["Execute"] = "Ger�ekle�tir";
$net2ftp_messages["Owner"] = "sahip";
$net2ftp_messages["Group"] = "Grup";
$net2ftp_messages["Everyone"] = "Herkes";
$net2ftp_messages["To set all permissions to the same values, enter those permissions and click on the button \"Set all permissions\""] = "T�m izinleri ayn� de�ere ayarlamak i�in, yukar�daki o izinleri girin ve \"T�m izinleri ayarla\" d��mesine t�klay�n";
$net2ftp_messages["Set the permissions of directory <b>%1\$s</b> to: "] = "Diznin <b>%1\$s</b> izinlerini �una ayarla: ";
$net2ftp_messages["Set the permissions of file <b>%1\$s</b> to: "] = "Dosyan�n <b>%1\$s</b> izinlerini �una ayarla: ";
$net2ftp_messages["Set the permissions of symlink <b>%1\$s</b> to: "] = "symlink <b>%1\$s</b> izinlerini �una ayarla: ";      //smlink: ?
$net2ftp_messages["Chmod value"] = "Chmod de�eri";
$net2ftp_messages["Chmod also the subdirectories within this directory"] = "Bu dizin i�erisindeki alt dizinleri de chmod";
$net2ftp_messages["Chmod also the files within this directory"] = "Bu dizin i�erisindeki dosyalar� da chmod";
$net2ftp_messages["The chmod nr <b>%1\$s</b> is out of the range 000-777. Please try again."] = "chmod say�s� <b>%1\$s</b> 000-777 aral���n�n d���ndad�r. L�tfen tekrar deneyin.";

} // end chmod


// -------------------------------------------------------------------------
// Clear cookies module
// -------------------------------------------------------------------------
// No messages


// -------------------------------------------------------------------------
// Copy/Move/Delete module
if ($net2ftp_globals["state"] == "copymovedelete") {
// -------------------------------------------------------------------------
$net2ftp_messages["Choose a directory"] = "Dizin se�";
$net2ftp_messages["Copy directories and files"] = "Dizin ve dosyalar� kopyala";
$net2ftp_messages["Move directories and files"] = "Dizin ve dosyalar� ta��";
$net2ftp_messages["Delete directories and files"] = "Dizin ve dosyalar� sil";
$net2ftp_messages["Are you sure you want to delete these directories and files?"] = "Bu dizin ve dosyalar� silmek istedi�inizden emin misiniz?";
$net2ftp_messages["All the subdirectories and files of the selected directories will also be deleted!"] = "Se�ili dizinlerin t�m dosyalar� ve alt dizinleri ayr�ca silinecek!";
$net2ftp_messages["Set all targetdirectories"] = "T�m hedef dizinleri ayarla";
$net2ftp_messages["To set a common target directory, enter that target directory in the textbox above and click on the button \"Set all targetdirectories\"."] = "S�radan bir hedef dizin ayarlamak i�in, yukar�daki metin kutusuna hedef dizini girin ve \"T�m hedef dizinleri ayarla\"d��mesine t�klay�n.";
$net2ftp_messages["Note: the target directory must already exist before anything can be copied into it."] = "Not: i�erisine herhangi bir �ey kopyalanmadan �nce, hedef dizin �nceden var olmal�.";
$net2ftp_messages["Different target FTP server:"] = "Farkl� hedef FTP sunucusu:";
$net2ftp_messages["Username"] = "Kullan�c� ad�";
$net2ftp_messages["Password"] = "�ifre";
$net2ftp_messages["Leave empty if you want to copy the files to the same FTP server."] = "E�er dosyalar�, ayn� FTP sunucusuna kopyalamak istiyorsan�z, bo� b�rak�n.";
$net2ftp_messages["If you want to copy the files to another FTP server, enter your login data."] = "E�er dosyalar� bir ba�ka FTP sunucusuna kopyalamak istiyorsan�z, giri� bilginizi girin.";
$net2ftp_messages["Leave empty if you want to move the files to the same FTP server."] = "E�er dosyalar�, ayn� FTP sunucusuna ta��mak istiyorsan�z, bo� b�rak�n.";
$net2ftp_messages["If you want to move the files to another FTP server, enter your login data."] = "E�er dosyalar� bir ba�ka FTP sunucusuna ta��mak istiyorsan�z, giri� bilginizi girin.";
$net2ftp_messages["Copy directory <b>%1\$s</b> to:"] = "Dizini <b>%1\$s</b> �una kopyala:";
$net2ftp_messages["Move directory <b>%1\$s</b> to:"] = "Dizini <b>%1\$s</b> �una ta��:";
$net2ftp_messages["Directory <b>%1\$s</b>"] = "Dizin <b>%1\$s</b>";
$net2ftp_messages["Copy file <b>%1\$s</b> to:"] = "Dosyay� <b>%1\$s</b> �una kopyala:";
$net2ftp_messages["Move file <b>%1\$s</b> to:"] = "Dosyay� <b>%1\$s</b> �una ta��:";
$net2ftp_messages["File <b>%1\$s</b>"] = "Dosya <b>%1\$s</b>";
$net2ftp_messages["Copy symlink <b>%1\$s</b> to:"] = "symlink <b>%1\$s</b> �una kopyala:";    //symlink: ?
$net2ftp_messages["Move symlink <b>%1\$s</b> to:"] = "symlink <b>%1\$s</b> �una ta��:";       //symlink: ?
$net2ftp_messages["Symlink <b>%1\$s</b>"] = "Symlink <b>%1\$s</b>";
$net2ftp_messages["Target directory:"] = "Hedef dizin:";
$net2ftp_messages["Target name:"] = "Hedef ad�:";
$net2ftp_messages["Processing the entries:"] = "Giri�i i�leme al�yor:";

} // end copymovedelete


// -------------------------------------------------------------------------
// Download file module
// -------------------------------------------------------------------------
// No messages


// -------------------------------------------------------------------------
// EasyWebsite module
if ($net2ftp_globals["state"] == "easyWebsite") {
// -------------------------------------------------------------------------
$net2ftp_messages["Create a website in 4 easy steps"] = "4 kolay ad�mda bir websitesi olu�tur";
$net2ftp_messages["Template overview"] = "�ablon �nizleme";
$net2ftp_messages["Template details"] = "�ablon detaylar�";
$net2ftp_messages["Files are copied"] = "Dosyalar kopyaland�";
$net2ftp_messages["Edit your pages"] = "Sayfalar�n� d�zenle";

// Screen 1 - printTemplateOverview
$net2ftp_messages["Click on the image to view the details of a template."] = "Bir �ablonun detaylar�n� g�r�nt�lemek i�in resme t�klay�n.";
$net2ftp_messages["Back to the Browse screen"] = "Tarama ekran�na geri d�n";
$net2ftp_messages["Template"] = "�ablon";
$net2ftp_messages["Copyright"] = "Telif hakk�";
$net2ftp_messages["Click on the image to view the details of this template"] = "Bu �ablonun detaylar�n� g�r�nt�lemek i�in resme t�klay�n";

// Screen 2 - printTemplateDetails
$net2ftp_messages["The template files will be copied to your FTP server. Existing files with the same filename will be overwritten. Do you want to continue?"] = "�ablon dosyalar�, FTP sunucunuza kopyalanacak. Ayn� isimle var olan dosyalar �zerine yaz�lacak. Devam etmek istiyor musunuz?";
$net2ftp_messages["Install template to directory: "] = "�ablonu dizine y�kle: ";
$net2ftp_messages["Install"] = "Kur";
$net2ftp_messages["Size"] = "Boyut";
$net2ftp_messages["Preview page"] = "�nizleme sayfas�";
$net2ftp_messages["opens in a new window"] = "yeni pencerede a�ar";

// Screen 3
$net2ftp_messages["Please wait while the template files are being transferred to your server: "] = "�ablon dosyalar� sunucunuza aktar�l�rken l�tfen bekleyin: ";
$net2ftp_messages["Done."] = "Bitti.";
$net2ftp_messages["Continue"] = "Devam";

// Screen 4 - printEasyAdminPanel
$net2ftp_messages["Edit page"] = "Sayfay� d�zenle";
$net2ftp_messages["Browse the FTP server"] = "FTP sunucusunu gez";
$net2ftp_messages["Add this link to your favorites to return to this page later on!"] = "Daha sonra bu sayfaya geri d�nebilmek i�in bu ba�lant�y� s�k kullan�lanlar�n�za ekleyin!";
$net2ftp_messages["Edit website at %1\$s"] = "%1\$s de websiteni d�zenle";
$net2ftp_messages["Internet Explorer: right-click on the link and choose \"Add to Favorites...\""] = "Internet Explorer: ba�lant�a sa� t�klay�n ve \"S�k Kullan�lanlara Ekle...\"se�in ";
$net2ftp_messages["Netscape, Mozilla, Firefox: right-click on the link and choose \"Bookmark This Link...\""] = "Netscape, Mozilla, Firefox: ba�lant�ya sa� t�klay�n ve \"Yer imlerine ekle...\"se�in";

// ftp_copy_local2ftp
$net2ftp_messages["WARNING: Unable to create the subdirectory <b>%1\$s</b>. It may already exist. Continuing..."] = "UYARI: <b>%1\$s</b> alt dizinini olu�turam�yor. �nceden var olabilir. Devam ediyor...";
$net2ftp_messages["Created target subdirectory <b>%1\$s</b>"] = "Hedef alt dizin <b>%1\$s</b> olu�turuldu";
$net2ftp_messages["WARNING: Unable to copy the file <b>%1\$s</b>. Continuing..."] = "UYARI: <b>%1\$s</b> dosyas�n� kopyalayam�yor. Devam ediyor...";
$net2ftp_messages["Copied file <b>%1\$s</b>"] = "Dosyay� <b>%1\$s</b> kopyalad�";
}


// -------------------------------------------------------------------------
// Edit module
if ($net2ftp_globals["state"] == "edit") {
// -------------------------------------------------------------------------

// /modules/edit/edit.inc.php
$net2ftp_messages["Unable to open the template file"] = "�ablon dosyas�n� a�am�yor";
$net2ftp_messages["Unable to read the template file"] = "�ablon dosyas�n� okuyam�yor";
$net2ftp_messages["Please specify a filename"] = "L�tfen bir dosya ad� belirtin";
$net2ftp_messages["Status: This file has not yet been saved"] = "Durum: Bu sayfa hen�z kaydedilmedi";
$net2ftp_messages["Status: Saved on <b>%1\$s</b> using mode %2\$s"] = "Durum: <b>%1\$s</b>de %2\$s modu kullan�larak kaydedildi";
$net2ftp_messages["Status: <b>This file could not be saved</b>"] = "Durum: <b>Bu sayfa kaydedilemiyor</b>";
$net2ftp_messages["Not yet saved"] = "Not yet saved";
$net2ftp_messages["Could not be saved"] = "Could not be saved";
$net2ftp_messages["Saved at %1\$s"] = "Saved at %1\$s";

// /skins/[skin]/edit.template.php
$net2ftp_messages["Directory: "] = "Dizin: ";
$net2ftp_messages["File: "] = "Dosya: ";
$net2ftp_messages["New file name: "] = "Yeni dosya ad�: ";
$net2ftp_messages["Character encoding: "] = "Karakter kodlamas�: ";
$net2ftp_messages["Note: changing the textarea type will save the changes"] = "Not: metin alan� t�r�n� de�i�tirmek, de�i�iklikleri kaydedecektir";
$net2ftp_messages["Copy up"] = "Yukar�y� kopyala";     //copy up: ?
$net2ftp_messages["Copy down"] = "A�a��y� kopyala";    //copy down: ?

} // end if edit


// -------------------------------------------------------------------------
// Find string module
if ($net2ftp_globals["state"] == "findstring") {
// -------------------------------------------------------------------------

// /modules/findstring/findstring.inc.php 
$net2ftp_messages["Search directories and files"] = "Dosya ve dizinleri ara";
$net2ftp_messages["Search again"] = "Tekrar ara";
$net2ftp_messages["Search results"] = "Arama sonu�lar�";
$net2ftp_messages["Please enter a valid search word or phrase."] = "L�tfen ge�erli bir arama szc��� ya da sz �be�i girin.";
$net2ftp_messages["Please enter a valid filename."] = "L�tfen ge�erli bir dosya ad� girin.";
$net2ftp_messages["Please enter a valid file size in the \"from\" textbox, for example 0."] = "L�tfen \"kimden\" metin kutusuna ge�erli bir dosya boyutu girin, �rne�in 0.";      //from: ?
$net2ftp_messages["Please enter a valid file size in the \"to\" textbox, for example 500000."] = "L�tfen \"kime\" metin kutusuna ge�erli bir dosya boyutu girin, �rne�in 500000.";
$net2ftp_messages["Please enter a valid date in Y-m-d format in the \"from\" textbox."] = "L�tfen \"kimden\" metin kutusuna y�l-ay-g�n bi�iminde ge�erli bir tarih girin.";
$net2ftp_messages["Please enter a valid date in Y-m-d format in the \"to\" textbox."] = "L�tfen \"kime\" metin kutusuna y�l-ay-g�n bi�iminde ge�erli bir tarih girin.";
$net2ftp_messages["The word <b>%1\$s</b> was not found in the selected directories and files."] = "S�zc�k <b>%1\$s</b>, se�ili alt dizinlerde ve dosyalarda bulunamad�.";
$net2ftp_messages["The word <b>%1\$s</b> was found in the following files:"] = "S�zc�k <b>%1\$s</b>, a�a��daki dosyalarda bulundu:";

// /skins/[skin]/findstring1.template.php
$net2ftp_messages["Search for a word or phrase"] = "Kelime ya da s�z �be�i ara";
$net2ftp_messages["Case sensitive search"] = "B�y�k/k���k harf hassas arama";
$net2ftp_messages["Restrict the search to:"] = "Aramay� �una k�s�tla:";
$net2ftp_messages["files with a filename like"] = "Benzer adl� dosyalar";
$net2ftp_messages["(wildcard character is *)"] = "(joker karakter: *)";              //wildcard: ?
$net2ftp_messages["files with a size"] = "boyutlu dosyalar";
$net2ftp_messages["files which were last modified"] = "son de�i�tirilen dosyalar";
$net2ftp_messages["from"] = "kimden";
$net2ftp_messages["to"] = "kime";

$net2ftp_messages["Directory"] = "Dizin";
$net2ftp_messages["File"] = "Dosya";
$net2ftp_messages["Line"] = "Sat�r";
$net2ftp_messages["Action"] = "Eylem";
$net2ftp_messages["View"] = "G�r�nt�le";
$net2ftp_messages["Edit"] = "D�zenle";
$net2ftp_messages["View the highlighted source code of file %1\$s"] = "Dosyan�n %1\$s vurgulanm�� kaynak kodunu g�r�nt�le";
$net2ftp_messages["Edit the source code of file %1\$s"] = "Dosyan�n %1\$s kaynak kodunu d�zenle";

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
$net2ftp_messages["Install software packages"] = "Yaz�l�m paketlerini y�kle";
$net2ftp_messages["Unable to open the template file"] = "�ablon dosyas�n� a�am�yor";
$net2ftp_messages["Unable to read the template file"] = "�ablon dosyas�n� okuyam�yor";
$net2ftp_messages["Unable to get the list of packages"] = "Paketlerin listesini alam�yor";

// /skins/blue/install1.template.php
$net2ftp_messages["The net2ftp installer script has been copied to the FTP server."] = "Net2ftp y�kleyici yaz�l�m� FTP sunucusuna kopyaland�.";
$net2ftp_messages["This script runs on your web server and requires PHP to be installed."] = "Bu yaz�l�m, web sunucunuzda �al���r ve y�klenebilmesi i�in PHP gerektirir.";
$net2ftp_messages["In order to run it, click on the link below."] = "�al��t�rmak i�in, a�a��daki ba�lant�ya t�klay�n.";
$net2ftp_messages["net2ftp has tried to determine the directory mapping between the FTP server and the web server."] = "net2ftp, FTP sunucusu ile web sunucusu aras�nda dizin haritas� belirlemeyi denedi .";    //mapping: ?
$net2ftp_messages["Should this link not be correct, enter the URL manually in your web browser."] = "E�er bu ba�lant� do�ru de�ilse, URL yi web taray�c�n�za elinizle girin.";

} // end install


// -------------------------------------------------------------------------
// Java upload module
if ($net2ftp_globals["state"] == "jupload") {
// -------------------------------------------------------------------------
$net2ftp_messages["Upload directories and files using a Java applet"] = "Java aplet kullanarak dizin ve dosyalar� y�kle";
$net2ftp_messages["Your browser does not support applets, or you have disabled applets in your browser settings."] = "Your browser does not support applets, or you have disabled applets in your browser settings.";
$net2ftp_messages["To use this applet, please install the newest version of Sun's java. You can get it from <a href=\"http://www.java.com/\">java.com</a>. Click on Get It Now."] = "To use this applet, please install the newest version of Sun's java. You can get it from <a href=\"http://www.java.com/\">java.com</a>. Click on Get It Now.";
$net2ftp_messages["The online installation is about 1-2 MB and the offline installation is about 13 MB. This 'end-user' java is called JRE (Java Runtime Environment)."] = "The online installation is about 1-2 MB and the offline installation is about 13 MB. This 'end-user' java is called JRE (Java Runtime Environment).";
$net2ftp_messages["Alternatively, use net2ftp's normal upload or upload-and-unzip functionality."] = "Alternatively, use net2ftp's normal upload or upload-and-unzip functionality.";

} // end jupload



// -------------------------------------------------------------------------
// Login module
if ($net2ftp_globals["state"] == "login") {
// -------------------------------------------------------------------------
$net2ftp_messages["Login!"] = "Giri�!";
$net2ftp_messages["Once you are logged in, you will be able to:"] = "Bir kez giri� yapt���n�z zaman, �unu yapabileceksiniz:";
$net2ftp_messages["Navigate the FTP server"] = "FTP sunucusunu y�nlendirme";
$net2ftp_messages["Once you have logged in, you can browse from directory to directory and see all the subdirectories and files."] = "Bir kez giri� yapt���n�z zaman, dizinden dizine tarama yapabilir ve t�m alt dizinleri ve dosyalar� g�rebilirsiniz.";
$net2ftp_messages["Upload files"] = "Dosyalar� y�kle";
$net2ftp_messages["There are 3 different ways to upload files: the standard upload form, the upload-and-unzip functionality, and the Java Applet."] = "Dosyalar� y�klemek i�in 3 farkl� yol var: standard y�kleme formu, y�kle-ve-a� i�levselli�i, ve Java Apleti.";          //Applet: ?
$net2ftp_messages["Download files"] = "Dosyalar� indir";
$net2ftp_messages["Click on a filename to quickly download one file.<br />Select multiple files and click on Download; the selected files will be downloaded in a zip archive."] = "Bir dosyay� h�zl�ca indirmek i�in dosya ad�na t�klay�n.<br />�oklu dosya se�in ve �ndir e t�klay�n; se�ili dosyalar, zip ar�iv paketi olarak indirilecektir.";
$net2ftp_messages["Zip files"] = "Zip dosyalar�";
$net2ftp_messages["... and save the zip archive on the FTP server, or email it to someone."] = "... ve zip ar�iv paketini FTP sunucusunda kaydet, veya birisine e-posta ile g�nder.";
$net2ftp_messages["Unzip files"] = "Dosyalar� ��kart";
$net2ftp_messages["Different formats are supported: .zip, .tar, .tgz and .gz."] = "Farkl� bi�imler destekleniyor: .zip, .tar, .tgz ve .gz.";
$net2ftp_messages["Install software"] = "Yaz�l�m y�kle";
$net2ftp_messages["Choose from a list of popular applications (PHP required)."] = "Sevilen uygulamalar�n listesinden se�in(PHP gerekli).";
$net2ftp_messages["Copy, move and delete"] = "Kopyala, ta�� ve sil";
$net2ftp_messages["Directories are handled recursively, meaning that their content (subdirectories and files) will also be copied, moved or deleted."] = "Dizinler ak�c� bir �ekilde ele al�n�r, yani i�eri�i (alt dizinler ve dosyalar) ayr�ca kopyalancak, ta��ncak veya silinecek.";            //recursively: ?
$net2ftp_messages["Copy or move to a 2nd FTP server"] = "2. FTP sunucusuna kopyala veya ta��";
$net2ftp_messages["Handy to import files to your FTP server, or to export files from your FTP server to another FTP server."] = "FTP sunucunuza dosya aktarmak veya FTP sunucunuzdan bir ba�ka FTP sunucusuna dosya aktarmak i�in kullan��l�d�r.";
$net2ftp_messages["Rename and chmod"] = "Yenidenn adland�r ve chmod";
$net2ftp_messages["Chmod handles directories recursively."] = "Chmod dizinleri ak�c� bir �ekilde ele al�r.";              //recursively: ?
$net2ftp_messages["View code with syntax highlighting"] = "S�zdizim vurgulamas� ile kodu g�r�nt�le";
$net2ftp_messages["PHP functions are linked to the documentation on php.net."] = "PHP i�levleri, php.net deki destek belgelerine ba�l�d�r.";
$net2ftp_messages["Plain text editor"] = "Basit metin edit�r�";
$net2ftp_messages["Edit text right from your browser; every time you save the changes the new file is transferred to the FTP server."] = "Taray�c�n�zdan metni d�zenleyin; her ne zaman de�i�iklikleri kaydederseniz, yeni dosya FTP sunucusuna aktar�lacakt�r.";
$net2ftp_messages["HTML editors"] = "HTML edit�rleri";
$net2ftp_messages["Edit HTML a What-You-See-Is-What-You-Get (WYSIWYG) form; there are 2 different editors to choose from."] = "Ne-G�rd���n-Ne-Elde-Etti�indir (WYSIWYG) formunda HTML yi d�zenle; se�ebilece�iniz 2 farkl� edit�r var.";
$net2ftp_messages["Code editor"] = "Kod edit�r�";
$net2ftp_messages["Edit HTML and PHP in an editor with syntax highlighting."] = "S�zdizim vurgulamal� bir edit�rde HTML ve PHP d�zenle.";
$net2ftp_messages["Search for words or phrases"] = "S�zc�k ya da s�z �be�i aray�n";
$net2ftp_messages["Filter out files based on the filename, last modification time and filesize."] = "Dosyalar� ad�na,son de�i�tirme zaman�na ve boyutuna dayal� olarak filtrele.";
$net2ftp_messages["Calculate size"] = "Boyutu hesapla";
$net2ftp_messages["Calculate the size of directories and files."] = "Dosya ve dizinlerin boyutunu hesapla.";

$net2ftp_messages["FTP server"] = "FTP sunucusu";
$net2ftp_messages["Example"] = "�rnek";
$net2ftp_messages["Port"] = "Port";
$net2ftp_messages["Protocol"] = "Protocol";
$net2ftp_messages["Username"] = "Kullan�c� ad�";
$net2ftp_messages["Password"] = "�ifre";
$net2ftp_messages["Anonymous"] = "Anonim";
$net2ftp_messages["Passive mode"] = "Pasif mod";
$net2ftp_messages["Initial directory"] = "�lk dizin";
$net2ftp_messages["Language"] = "Dil";
$net2ftp_messages["Skin"] = "Kaplama";
$net2ftp_messages["FTP mode"] = "FTP modu";
$net2ftp_messages["Automatic"] = "Otomatik";
$net2ftp_messages["Login"] = "Giri�";
$net2ftp_messages["Clear cookies"] = "�erezleri temizle";
$net2ftp_messages["Admin"] = "Y�netici";
$net2ftp_messages["Please enter an FTP server."] = "L�tfen bir FTP sunucusu girin.";
$net2ftp_messages["Please enter a username."] = "L�tfen bir kullan�c� ad� girin.";
$net2ftp_messages["Please enter a password."] = "L�tfen bir �ifre girin.";

} // end login


// -------------------------------------------------------------------------
// Login module
if ($net2ftp_globals["state"] == "login_small") {
// -------------------------------------------------------------------------

$net2ftp_messages["Please enter your Administrator username and password."] = "L�tfen y�netici kullan�c� ad�n�z� ve �ifrenizi girin.";
$net2ftp_messages["Please enter your username and password for FTP server <b>%1\$s</b>."] = "L�tfen FTP sunucusu i�in kullan�c� ad�n�z� ve �ifrenizi girin<b>%1\$s</b>.";
$net2ftp_messages["Username"] = "Kullan�c� ad�";
$net2ftp_messages["Your session has expired; please enter your password for FTP server <b>%1\$s</b> to continue."] = "Oturumunuz sona erdi; l�tfen <b>%1\$s</b> devam etmek i�in,FTP sunucusu i�in �ifrenizi girin.";
$net2ftp_messages["Your IP address has changed; please enter your password for FTP server <b>%1\$s</b> to continue."] = "IP adresiniz de�i�ti; l�tfen <b>%1\$s</b> devam etmek i�in,FTP sunucusu i�in �ifrenizi girin.";
$net2ftp_messages["Password"] = "�ifre";
$net2ftp_messages["Login"] = "Giri�";
$net2ftp_messages["Continue"] = "Devam";

} // end login_small


// -------------------------------------------------------------------------
// Logout module
if ($net2ftp_globals["state"] == "logout") {
// -------------------------------------------------------------------------

// logout.inc.php
$net2ftp_messages["Login page"] = "Giri� sayfas�";

// logout.template.php
$net2ftp_messages["You have logged out from the FTP server. To log back in, <a href=\"%1\$s\" title=\"Login page (accesskey l)\" accesskey=\"l\">follow this link</a>."] = "FTP sunucusundan ��k�� yapt�n�z. Geri giri� yapmak i�in, <a href=\"%1\$s\" title=\"Giri� sayfas� (accesskey l)\" accesskey=\"l\">bu ba�lant�y� takip edin</a>.";
$net2ftp_messages["Note: other users of this computer could click on the browser's Back button and access the FTP server."] = "Not: bu bilgisayar�n di�er kullan�c�lar�,taray�c�n�n Geri d��mesine t�klayabilir ve FTP sunucusuna ula�abilir.";
$net2ftp_messages["To prevent this, you must close all browser windows."] = "Bunu �nlemek i�in, t�m taray�c� pencerelerini kapatmal�s�n�z.";
$net2ftp_messages["Close"] = "Kapat";
$net2ftp_messages["Click here to close this window"] = "Bu pencereyi kapatmak i�in buraya t�klay�n�z";

} // end logout


// -------------------------------------------------------------------------
// New directory module
if ($net2ftp_globals["state"] == "newdir") {
// -------------------------------------------------------------------------
$net2ftp_messages["Create new directories"] = "Yeni dizinler olu�tur";
$net2ftp_messages["The new directories will be created in <b>%1\$s</b>."] = "Yeni dizinler, <b>%1\$s</b>de olu�turulacakt�r.";
$net2ftp_messages["New directory name:"] = "Yeni dizin ad�:";
$net2ftp_messages["Directory <b>%1\$s</b> was successfully created."] = "Dizin <b>%1\$s</b> ba�ar�l� bir �ekilde olu�turuldu.";
$net2ftp_messages["Directory <b>%1\$s</b> could not be created."] = "Dizin <b>%1\$s</b> olu�turam�yor.";

} // end newdir


// -------------------------------------------------------------------------
// Raw module
if ($net2ftp_globals["state"] == "raw") {
// -------------------------------------------------------------------------

// /modules/raw/raw.inc.php
$net2ftp_messages["Send arbitrary FTP commands"] = "Rastgele FTP komutlar� g�nder";


// /skins/[skin]/raw1.template.php
$net2ftp_messages["List of commands:"] = "Komutlar�n listesi:";
$net2ftp_messages["FTP server response:"] = "FTP sunucusu cevab�:";

} // end raw


// -------------------------------------------------------------------------
// Rename module
if ($net2ftp_globals["state"] == "rename") {
// -------------------------------------------------------------------------
$net2ftp_messages["Rename directories and files"] = "Dosya ve dizileri yeniden adland�r";
$net2ftp_messages["Old name: "] = "Eski ad: ";
$net2ftp_messages["New name: "] = "Yeni ad: ";
$net2ftp_messages["The new name may not contain any dots. This entry was not renamed to <b>%1\$s</b>"] = "Yeni ad nokta i�eremez. Bu giri�, <b>%1\$s</b>e yeniden adland�r�lmad�";
$net2ftp_messages["The new name may not contain any banned keywords. This entry was not renamed to <b>%1\$s</b>"] = "Yeni ad yasakl� anahtar kelime i�eremez. Bu giri�, <b>%1\$s</b>e yeniden adland�r�lmad�";
$net2ftp_messages["<b>%1\$s</b> was successfully renamed to <b>%2\$s</b>"] = "<b>%1\$s</b> ba�ar�l� bir �ekilde <b>%2\$s</b>e yeniden adland�r�ld�";
$net2ftp_messages["<b>%1\$s</b> could not be renamed to <b>%2\$s</b>"] = "<b>%1\$s</b> ,<b>%2\$s</b>e yeniden adland�r�lam�yor";

} // end rename


// -------------------------------------------------------------------------
// Unzip module
if ($net2ftp_globals["state"] == "unzip") {
// -------------------------------------------------------------------------

// /modules/unzip/unzip.inc.php
$net2ftp_messages["Unzip archives"] = "Ar�iv paketlerini a�";
$net2ftp_messages["Getting archive %1\$s of %2\$s from the FTP server"] = "FTP sunucusundan arsiv paketini aliyor %1\$s - %2\$s";
$net2ftp_messages["Unable to get the archive <b>%1\$s</b> from the FTP server"] = "FTP sunucusundan ar�iv paketini alam�yor <b>%1\$s</b>";

// /skins/[skin]/unzip1.template.php
$net2ftp_messages["Set all targetdirectories"] = "T�m hedef dizinleri ayarla";
$net2ftp_messages["To set a common target directory, enter that target directory in the textbox above and click on the button \"Set all targetdirectories\"."] = "S�radan bir hedef dizin ayarlamak i�in, yukar�daki metin kutusuna hedef dizini girin ve \"T�m hedef dizinleri ayarla\"d��mesine t�klay�n.";
$net2ftp_messages["Note: the target directory must already exist before anything can be copied into it."] = "Not: i�erisine herhangi bir �ey kopyalanmadan �nce, hedef dizin �nceden var olmal�.";
$net2ftp_messages["Unzip archive <b>%1\$s</b> to:"] = "Ar�iv paketlerini <b>%1\$s</b> �una a�:";
$net2ftp_messages["Target directory:"] = "Hedef dizin:";
$net2ftp_messages["Use folder names (creates subdirectories automatically)"] = "Klas�r adlar�n� kullan (otomatik alt dizinler olu�turur)";

} // end unzip


// -------------------------------------------------------------------------
// Upload module
if ($net2ftp_globals["state"] == "upload") {
// -------------------------------------------------------------------------
$net2ftp_messages["Upload to directory:"] = "Dizine y�kle:";    //dizine: klas�re
$net2ftp_messages["Files"] = "Dosyalar";
$net2ftp_messages["Archives"] = "Ar�iv paketleri";
$net2ftp_messages["Files entered here will be transferred to the FTP server."] = "Buraya girilen dosyalar FTP sunucusuna aktar�lacakt�r.";
$net2ftp_messages["Archives entered here will be decompressed, and the files inside will be transferred to the FTP server."] = "Buraya girilen ar�iv paketleri a��lacakt�r ve i�erisindeki dosyalar FTP sunucusuna aktar�lacakt�r.";
$net2ftp_messages["Add another"] = "Bir ba�kas�n� ekle";
$net2ftp_messages["Use folder names (creates subdirectories automatically)"] = "Klas�r adlar�n� kullan (otomatik alt dizinler olu�turur)";

$net2ftp_messages["Choose a directory"] = "Dizin se�";
$net2ftp_messages["Please wait..."] = "L�tfen bekleyin...";
$net2ftp_messages["Uploading... please wait..."] = "Y�kl�yor... l�tfen bekleyin...";
$net2ftp_messages["If the upload takes more than the allowed <b>%1\$s seconds<\/b>, you will have to try again with less/smaller files."] = "E�er y�kleme izin verilen <b>%1\$s saniye<\/b>den daha fazla s�rerse, daha az/daha k���k dosyalar ile tekrar denemek zorunda kalacaks�n�z.";
$net2ftp_messages["This window will close automatically in a few seconds."] = "Bu pencere birka� saniye i�inde otomatik olarak kapancakt�r.";
$net2ftp_messages["Close window now"] = "Pencereyi �imdi kapat";

$net2ftp_messages["Upload files and archives"] = "Dosyalar� ve ar�iv paketlerini y�kle";
$net2ftp_messages["Upload results"] = "Y�kleme sonu�lar�";
$net2ftp_messages["Checking files:"] = "Dosyalar� denetliyor:";
$net2ftp_messages["Transferring files to the FTP server:"] = "Dosyalar� FTP sunucusuna aktar�yor:";
$net2ftp_messages["Decompressing archives and transferring files to the FTP server:"] = "Ar�iv paketlerini a��yor ve FTP sunucusuna aktar�yor:";
$net2ftp_messages["Upload more files and archives"] = "Daha fazla ar�iv paketi ve dosya y�kle";

} // end upload


// -------------------------------------------------------------------------
// Messages which are shared by upload and jupload
if ($net2ftp_globals["state"] == "upload" || $net2ftp_globals["state"] == "jupload") {
// -------------------------------------------------------------------------
$net2ftp_messages["Restrictions:"] = "K�s�tlamalar:";
$net2ftp_messages["The maximum size of one file is restricted by net2ftp to <b>%1\$s</b> and by PHP to <b>%2\$s</b>"] = "The maximum size of one file is restricted by net2ftp to <b>%1\$s</b> and by PHP to <b>%2\$s</b>";
$net2ftp_messages["The maximum execution time is <b>%1\$s seconds</b>"] = "Maksimum uygulama s�resi <b>%1\$s saniye</b>dir";
$net2ftp_messages["The FTP transfer mode (ASCII or BINARY) will be automatically determined, based on the filename extension"] = "FTP aktar�m modu (ASCII veya BINARY) dosya uzant�s�na ba�l� olarak ,otomatik belirlenecektir";
$net2ftp_messages["If the destination file already exists, it will be overwritten"] = "E�er hedef dosya zaten varsa, �zerine yaz�lacakt�r";

} // end upload or jupload


// -------------------------------------------------------------------------
// View module
if ($net2ftp_globals["state"] == "view") {
// -------------------------------------------------------------------------

// /modules/view/view.inc.php
$net2ftp_messages["View file %1\$s"] = "Dosyay� g�ster %1\$s";
$net2ftp_messages["View image %1\$s"] = "Resmi %1\$s g�r�nt�le";
$net2ftp_messages["View Macromedia ShockWave Flash movie %1\$s"] = "Macromedia ShockWave Fla� filmini g�ster %1\$s";
$net2ftp_messages["Image"] = "Resim";

// /skins/[skin]/view1.template.php
$net2ftp_messages["Syntax highlighting powered by <a href=\"http://luminous.asgaard.co.uk\">Luminous</a>"] = "S�zdizim vurgulama <a href=\"http://luminous.asgaard.co.uk\">Luminous</a> ile g��lendirilmi�tir";
$net2ftp_messages["To save the image, right-click on it and choose 'Save picture as...'"] = "Resmi kaydetmek i�in, �zerine sa� t�klay�n ve 'Resmi Farkl� Kaydet...'i se�in";

} // end view


// -------------------------------------------------------------------------
// Zip module
if ($net2ftp_globals["state"] == "zip") {
// -------------------------------------------------------------------------

// /modules/zip/zip.inc.php
$net2ftp_messages["Zip entries"] = "Zip giri�leri";

// /skins/[skin]/zip1.template.php
$net2ftp_messages["Save the zip file on the FTP server as:"] = "FTP sunucusunda zip dosyas� olarak kaydet:";
$net2ftp_messages["Email the zip file in attachment to:"] = "Zip dosyas�n� ek �eklinde birisine, e-posta ile g�nder:";
$net2ftp_messages["Note that sending files is not anonymous: your IP address as well as the time of the sending will be added to the email."] = "Dosya g�ndermenin anonim olmad���na dikkat edin: G�nderme zaman�n�za ek olarak, IP adresiniz e-postaya eklenecek.";
$net2ftp_messages["Some additional comments to add in the email:"] = "E-postaya eklenecek baz� ek yorumlar:";

$net2ftp_messages["You did not enter a filename for the zipfile. Go back and enter a filename."] = "Zip dosyas� i�in bir dosya ad� girmediniz. Geri d�n�n ve bir dosya ad� girin.";
$net2ftp_messages["The email address you have entered (%1\$s) does not seem to be valid.<br />Please enter an address in the format <b>username@domain.com</b>"] = "Girdi�iniz e-posta adresi (%1\$s) ge�erli g�z�km�yor.<br />L�tfen <b>kullan�c�ad�@alanad�.com</b> bi�iminde bir adres girin";

} // end zip

?>