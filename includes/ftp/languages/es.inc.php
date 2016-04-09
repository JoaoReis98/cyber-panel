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
$net2ftp_messages["en"] = "es";

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

$net2ftp_messages["Connecting to the FTP server"] = "Conectando con el servidor FTP";
$net2ftp_messages["Logging into the FTP server"] = "iniciando sesion";
$net2ftp_messages["Setting the passive mode"] = "Modo pasivo";
$net2ftp_messages["Getting the FTP system type"] = "Obteniendo tipo de sistema FTP";
$net2ftp_messages["Changing the directory"] = "Cambiando de carpeta";
$net2ftp_messages["Getting the current directory"] = "Obteniendo directorio";
$net2ftp_messages["Getting the list of directories and files"] = "Obteniendo la lista de directorios y archivos";
$net2ftp_messages["Parsing the list of directories and files"] = "Parseando lista de directorios y archivos";
$net2ftp_messages["Logging out of the FTP server"] = "Cerrando sesion";
$net2ftp_messages["Getting the list of directories and files"] = "Obteniendo la lista de directorios y archivos";
$net2ftp_messages["Printing the list of directories and files"] = "Organizando la lista de archivos y directorios";
$net2ftp_messages["Processing the entries"] = "Procesando las peticiones";
$net2ftp_messages["Processing entry %1\$s"] = "Procesando entrada %1\$s";
$net2ftp_messages["Checking files"] = "Comprobando la estructura de los archivos";
$net2ftp_messages["Transferring files to the FTP server"] = "Transfiriendo archivos al servidor FTP";
$net2ftp_messages["Decompressing archives and transferring files"] = "Descomprimiendo y transfiriendo archivos";
$net2ftp_messages["Searching the files..."] = "Buscando en los archivos...";
$net2ftp_messages["Uploading new file"] = "Transfiriendo el archivo nuevo";
$net2ftp_messages["Reading the file"] = "leyendo archivo";
$net2ftp_messages["Parsing the file"] = "Parseando archivo";
$net2ftp_messages["Reading the new file"] = "Leyendo el archivo nuevo";
$net2ftp_messages["Reading the old file"] = "Leyendo el archivo viejo";
$net2ftp_messages["Comparing the 2 files"] = "Comparando los dos archivos";
$net2ftp_messages["Printing the comparison"] = "Imprimiendo la comparaci�n de archivos";
$net2ftp_messages["Sending FTP command %1\$s of %2\$s"] = "Mandando comandos FTP %1\$s de %2\$s";
$net2ftp_messages["Getting archive %1\$s of %2\$s from the FTP server"] = "Obteniendo archivos %1\$s de %2\$s desde sitio FTP";
$net2ftp_messages["Creating a temporary directory on the FTP server"] = "creando un directorio temporal en el sitio FTP";
$net2ftp_messages["Setting the permissions of the temporary directory"] = "Configurando los permisos del directorio temporal en el sitio FTP";
$net2ftp_messages["Copying the net2ftp installer script to the FTP server"] = "copiando el instalador net2ftp script al servidor FTP";
$net2ftp_messages["Script finished in %1\$s seconds"] = "El programa termino en %1\$s segundos";
$net2ftp_messages["Script halted"] = "El programa se ha detenido";

// Used on various screens
$net2ftp_messages["Please wait..."] = "Por favor espera...";


// -------------------------------------------------------------------------
// index.php
// -------------------------------------------------------------------------
$net2ftp_messages["Unexpected state string: %1\$s. Exiting."] = "Estado inesperado string: %1\$s. Exiting.";
$net2ftp_messages["This beta function is not activated on this server."] = "Esta funci�n beta no esta activada en el servidor.";
$net2ftp_messages["This function has been disabled by the Administrator of this website."] = "Esta funcion a sido deshabilitada por el administrador del sitio web.";


// -------------------------------------------------------------------------
// /includes/browse.inc.php
// -------------------------------------------------------------------------
$net2ftp_messages["The directory <b>%1\$s</b> does not exist or could not be selected, so the directory <b>%2\$s</b> is shown instead."] = "The directory <b>%1\$s</b> does not exist or could not be selected, so the directory <b>%2\$s</b> is shown instead.";
$net2ftp_messages["Your root directory <b>%1\$s</b> does not exist or could not be selected."] = "Tu directorio root <b>%1\$s</b> no existe o no a sido seleccionado.";
$net2ftp_messages["The directory <b>%1\$s</b> could not be selected - you may not have sufficient rights to view this directory, or it may not exist."] = "El directorio <b>%1\$s</b> No ha sido seleccionado - you may not have sufficient rights to view this directory, or it may not exist.";
$net2ftp_messages["Entries which contain banned keywords can't be managed using net2ftp. This is to avoid Paypal or Ebay scams from being uploaded through net2ftp."] = "Entries which contain banned keywords can't be managed using net2ftp. This is to avoid Paypal or Ebay scams from being uploaded through net2ftp.";
$net2ftp_messages["Files which are too big can't be downloaded, uploaded, copied, moved, searched, zipped, unzipped, viewed or edited; they can only be renamed, chmodded or deleted."] = "Files which are too big can't be downloaded, uploaded, copied, moved, searched, zipped, unzipped, viewed or edited; they can only be renamed, chmodded or deleted.";
$net2ftp_messages["Execute %1\$s in a new window"] = "Ejecutar %1\$s en una ventana nueva";


// -------------------------------------------------------------------------
// /includes/main.inc.php
// -------------------------------------------------------------------------
$net2ftp_messages["Please select at least one directory or file!"] = "�Por favor selecciona por lo menos un archivo o directorio!";


// -------------------------------------------------------------------------
// /includes/authorizations.inc.php
// -------------------------------------------------------------------------

// checkAuthorization()
$net2ftp_messages["The FTP server <b>%1\$s</b> is not in the list of allowed FTP servers."] = "El servidor FTP <b>%1\$s</b> no esta en la lista de servidores permitidos.";
$net2ftp_messages["The FTP server <b>%1\$s</b> is in the list of banned FTP servers."] = "El servidor FTP <b>%1\$s</b> esta en la lista de servidores no permitidos.";
$net2ftp_messages["The FTP server port %1\$s may not be used."] = "El puerto %1\$s del servidor FTP no puede ser utilizado.";
$net2ftp_messages["Your IP address (%1\$s) is not in the list of allowed IP addresses."] = "Your IP address (%1\$s) is not in the list of allowed IP addresses.";
$net2ftp_messages["Your IP address (%1\$s) is in the list of banned IP addresses."] = "Tu direcci�n IP (%1\$s) esta en la lista de IPS no permitidas.";

// isAuthorizedDirectory()
$net2ftp_messages["Table net2ftp_users contains duplicate rows."] = "Table net2ftp_users contains duplicate rows.";

// checkAdminUsernamePassword()
$net2ftp_messages["You did not enter your Administrator username or password."] = "You did not enter your Administrator username or password.";
$net2ftp_messages["Wrong username or password. Please try again."] = "Wrong username or password. Please try again.";

// -------------------------------------------------------------------------
// /includes/consumption.inc.php
// -------------------------------------------------------------------------
$net2ftp_messages["Unable to determine your IP address."] = "Unable to determine your IP address.";
$net2ftp_messages["Table net2ftp_log_consumption_ipaddress contains duplicate rows."] = "Table net2ftp_log_consumption_ipaddress contains duplicate rows.";
$net2ftp_messages["Table net2ftp_log_consumption_ftpserver contains duplicate rows."] = "Table net2ftp_log_consumption_ftpserver contains duplicate rows.";
$net2ftp_messages["The variable <b>consumption_ipaddress_datatransfer</b> is not numeric."] = "The variable <b>consumption_ipaddress_datatransfer</b> is not numeric.";
$net2ftp_messages["Table net2ftp_log_consumption_ipaddress could not be updated."] = "Table net2ftp_log_consumption_ipaddress could not be updated.";
$net2ftp_messages["Table net2ftp_log_consumption_ipaddress contains duplicate entries."] = "Table net2ftp_log_consumption_ipaddress contains duplicate entries.";
$net2ftp_messages["Table net2ftp_log_consumption_ftpserver could not be updated."] = "Table net2ftp_log_consumption_ftpserver could not be updated.";
$net2ftp_messages["Table net2ftp_log_consumption_ftpserver contains duplicate entries."] = "Table net2ftp_log_consumption_ftpserver contains duplicate entries.";
$net2ftp_messages["Table net2ftp_log_access could not be updated."] = "Table net2ftp_log_access could not be updated.";
$net2ftp_messages["Table net2ftp_log_access contains duplicate entries."] = "Table net2ftp_log_access contains duplicate entries.";


// -------------------------------------------------------------------------
// /includes/database.inc.php
// -------------------------------------------------------------------------
$net2ftp_messages["Unable to connect to the MySQL database. Please check your MySQL database settings in net2ftp's configuration file settings.inc.php."] = "Unable to connect to the MySQL database. Please check your MySQL database settings in net2ftp's configuration file settings.inc.php.";
$net2ftp_messages["Unable to select the MySQL database. Please check your MySQL database settings in net2ftp's configuration file settings.inc.php."] = "Unable to select the MySQL database. Please check your MySQL database settings in net2ftp's configuration file settings.inc.php.";


// -------------------------------------------------------------------------
// /includes/errorhandling.inc.php
// -------------------------------------------------------------------------
$net2ftp_messages["An error has occured"] = "Se ha producido un error";
$net2ftp_messages["Go back"] = "Volver";
$net2ftp_messages["Go to the login page"] = "Volver a iniciar sesi�n";


// -------------------------------------------------------------------------
// /includes/filesystem.inc.php
// -------------------------------------------------------------------------

// ftp_openconnection()
$net2ftp_messages["The <a href=\"http://www.php.net/manual/en/ref.ftp.php\" target=\"_blank\">FTP module of PHP</a> is not installed.<br /><br /> The administrator of this website should install this module. Installation instructions are given on <a href=\"http://www.php.net/manual/en/ftp.installation.php\" target=\"_blank\">php.net</a><br />"] = "The <a href=\"http://www.php.net/manual/en/ref.ftp.php\" target=\"_blank\">FTP module of PHP</a> is not installed.<br /><br /> The administrator of this website should install this module. Installation instructions are given on <a href=\"http://www.php.net/manual/en/ftp.installation.php\" target=\"_blank\">php.net</a><br />";
$net2ftp_messages["The <a href=\"http://www.php.net/manual/en/function.ftp-ssl-connect.php\" target=\"_blank\">FTP and/or OpenSSL modules of PHP</a> is not installed.<br /><br /> The administrator of this website should install these modules. Installation instructions are given on php.net: <a href=\"http://www.php.net/manual/en/ftp.installation.php\" target=\"_blank\">here for FTP</a>, and <a href=\"http://www.php.net/manual/en/openssl.installation.php\" target=\"_blank\">here for OpenSSL</a><br />"] = "The <a href=\"http://www.php.net/manual/en/function.ftp-ssl-connect.php\" target=\"_blank\">FTP and/or OpenSSL modules of PHP</a> is not installed.<br /><br /> The administrator of this website should install these modules. Installation instructions are given on php.net: <a href=\"http://www.php.net/manual/en/ftp.installation.php\" target=\"_blank\">here for FTP</a>, and <a href=\"http://www.php.net/manual/en/openssl.installation.php\" target=\"_blank\">here for OpenSSL</a><br />";
$net2ftp_messages["The <a href=\"http://www.php.net/manual/en/function.ssh2-sftp.php\" target=\"_blank\">SSH2 module of PHP</a> is not installed.<br /><br /> The administrator of this website should install this module. Installation instructions are given on <a href=\"http://www.php.net/manual/en/ssh2.installation.php\" target=\"_blank\">php.net</a><br />"] = "The <a href=\"http://www.php.net/manual/en/function.ssh2-sftp.php\" target=\"_blank\">SSH2 module of PHP</a> is not installed.<br /><br /> The administrator of this website should install this module. Installation instructions are given on <a href=\"http://www.php.net/manual/en/ssh2.installation.php\" target=\"_blank\">php.net</a><br />";
$net2ftp_messages["Unable to connect to FTP server <b>%1\$s</b> on port <b>%2\$s</b>.<br /><br />Are you sure this is the address of the FTP server? This is often different from that of the HTTP (web) server. Please contact your ISP helpdesk or system administrator for help.<br />"] = "Imposible conectarse al servidor FTP <b>%1\$s</b> en el puerto <b>%2\$s</b>.<br /><br />�Estas seguro que esta es la direcci�n correcta del servidor FTP? Normalmente esta direcci�n es distinta a la direcci�n para acceder por web. Por favor comun�cate con tu proveedor de Internet o tu administrador de sistemas para solicitar ayuda.<br />";
$net2ftp_messages["Unable to login to FTP server <b>%1\$s</b> with username <b>%2\$s</b>.<br /><br />Are you sure your username and password are correct? Please contact your ISP helpdesk or system administrator for help.<br />"] = "Imposible iniciar sesi�n en el servidor FTP <b>%1\$s</b> utilizando el nombre de usuario <b>%2\$s</b>.<br /><br />�Estas seguro que tu nombre de usuario y contrase�a son correctos? <br />";
$net2ftp_messages["Unable to switch to the passive mode on FTP server <b>%1\$s</b>."] = "Imposible cambiar a modo pasivo en el servidor <b>%1\$s</b>.";

// ftp_openconnection2()
$net2ftp_messages["Unable to connect to the second (target) FTP server <b>%1\$s</b> on port <b>%2\$s</b>.<br /><br />Are you sure this is the address of the second (target) FTP server? This is often different from that of the HTTP (web) server. Please contact your ISP helpdesk or system administrator for help.<br />"] = "Imposible conectar al segundo servidor FTP <b>%1\$s</b> en el puerto <b>%2\$s</b>.<br /><br />�Estas seguro que esta es la direcci�n correcta del servidor FTP? Normalmente esta direcci�n es distinta a la direcci�n para acceder por HTTP. Por favor comun�cate con tu proveedor de Internet o tu administrador de sistemas para solicitar ayuda.<br />";
$net2ftp_messages["Unable to login to the second (target) FTP server <b>%1\$s</b> with username <b>%2\$s</b>.<br /><br />Are you sure your username and password are correct? Please contact your ISP helpdesk or system administrator for help.<br />"] = "Imposible iniciar sesi�n en el segundo servidor FTP <b>%1\$s</b> utilizando el nombre de usuario <b>%2\$s</b>.<br /><br />�Estas seguro que tu nombre de usuario y contrase�a son correctos? Por favor comun�cate con tu proveedor de Internet o tu administrador de sistemas para solicitar ayuda.<br />";
$net2ftp_messages["Unable to switch to the passive mode on the second (target) FTP server <b>%1\$s</b>."] = "Imposible cambiar a modo pasivo de transferencia en el segundo servidor FTP <b>%1\$s</b>.";

// ftp_myrename()
$net2ftp_messages["Unable to rename directory or file <b>%1\$s</b> into <b>%2\$s</b>"] = "Imposible renombrar el archivo o directorio <b>%1\$s</b> a <b>%2\$s</b>";

// ftp_mychmod()
$net2ftp_messages["Unable to execute site command <b>%1\$s</b>. Note that the CHMOD command is only available on Unix FTP servers, not on Windows FTP servers."] = "Imposible ejecutar el comando <b>%1\$s</b>. El comando CHMOD solo esta disponible en servidores Unix, no en servidores Windows.";
$net2ftp_messages["Directory <b>%1\$s</b> successfully chmodded to <b>%2\$s</b>"] = "Se cambiaron los permisos del directorio <b>%1\$s</b> a <b>%2\$s</b>";
$net2ftp_messages["Processing entries within directory <b>%1\$s</b>:"] = "Processing entries within directory <b>%1\$s</b>:";
$net2ftp_messages["File <b>%1\$s</b> was successfully chmodded to <b>%2\$s</b>"] = "Se cambiaron los permisos del archivo <b>%1\$s</b> a <b>%2\$s</b>";
$net2ftp_messages["All the selected directories and files have been processed."] = "Todos los directorios y archivos seleccionados fueron procesados exitosamente.";

// ftp_rmdir2()
$net2ftp_messages["Unable to delete the directory <b>%1\$s</b>"] = "Unable to delete the directory <b>%1\$s</b>";

// ftp_delete2()
$net2ftp_messages["Unable to delete the file <b>%1\$s</b>"] = "Unable to delete the file <b>%1\$s</b>";

// ftp_newdirectory()
$net2ftp_messages["Unable to create the directory <b>%1\$s</b>"] = "Imposible crear el directorio <b>%1\$s</b>";

// ftp_readfile()
$net2ftp_messages["Unable to create the temporary file"] = "Imposible crear el archivo temporal";
$net2ftp_messages["Unable to get the file <b>%1\$s</b> from the FTP server and to save it as temporary file <b>%2\$s</b>.<br />Check the permissions of the %3\$s directory.<br />"] = "Imposible descargar el archivo <b>%1\$s</b> del servidor FTP y guardarlo temporalmente como <b>%2\$s</b>.<br />Revisa los permisos del directorio %3\$s .<br />";
$net2ftp_messages["Unable to open the temporary file. Check the permissions of the %1\$s directory."] = "Imposible abrir el archivo temporal. Revisa los permisos del directorio %1\$s .";
$net2ftp_messages["Unable to read the temporary file"] = "Imposible leer el archivo temporal";
$net2ftp_messages["Unable to close the handle of the temporary file"] = "Imposible cerrar el archivo temporal";
$net2ftp_messages["Unable to delete the temporary file"] = "Imposible eliminar el archivo temporal";

// ftp_writefile()
$net2ftp_messages["Unable to create the temporary file. Check the permissions of the %1\$s directory."] = "Imposible crear el archivo temporal. Revisa los permisos del directorio %1\$s .";
$net2ftp_messages["Unable to open the temporary file. Check the permissions of the %1\$s directory."] = "Imposible abrir el archivo temporal. Revisa los permisos del directorio %1\$s .";
$net2ftp_messages["Unable to write the string to the temporary file <b>%1\$s</b>.<br />Check the permissions of the %2\$s directory."] = "Imposible escribir en el archivo temporal <b>%1\$s</b>.<br />Revisa los permisos del directorio %1\$s .";
$net2ftp_messages["Unable to close the handle of the temporary file"] = "Imposible cerrar el archivo temporal";
$net2ftp_messages["Unable to put the file <b>%1\$s</b> on the FTP server.<br />You may not have write permissions on the directory."] = "Imposible transferir el archivo <b>%1\$s</b> al servidor FTP.<br />Es posible que no tengas los permisos adecuados.";
$net2ftp_messages["Unable to delete the temporary file"] = "Imposible eliminar el archivo temporal";

// ftp_copymovedelete()
$net2ftp_messages["Processing directory <b>%1\$s</b>"] = "Procesando el directorio <b>%1\$s</b>";
$net2ftp_messages["The target directory <b>%1\$s</b> is the same as or a subdirectory of the source directory <b>%2\$s</b>, so this directory will be skipped"] = "El directorio <b>%1\$s</b> es el mismo que el subdirectorio<b>%2\$s</b>, este directorio sera omitido.";
$net2ftp_messages["The directory <b>%1\$s</b> contains a banned keyword, so this directory will be skipped"] = "The directory <b>%1\$s</b> contains a banned keyword, so this directory will be skipped";
$net2ftp_messages["The directory <b>%1\$s</b> contains a banned keyword, aborting the move"] = "The directory <b>%1\$s</b> contains a banned keyword, aborting the move";
$net2ftp_messages["Unable to create the subdirectory <b>%1\$s</b>. It may already exist. Continuing the copy/move process..."] = "Imposible crear el directorio <b>%1\$s</b>. Puede que ya exista. Continuando con el proceso de copiar y mover...";
$net2ftp_messages["Created target subdirectory <b>%1\$s</b>"] = "Created target subdirectory <b>%1\$s</b>";
$net2ftp_messages["The directory <b>%1\$s</b> could not be selected, so this directory will be skipped"] = "The directory <b>%1\$s</b> could not be selected, so this directory will be skipped";
$net2ftp_messages["Unable to delete the subdirectory <b>%1\$s</b> - it may not be empty"] = "Imposible eliminar el subdirectorio <b>%1\$s</b> - es posible que no este vaci�";
$net2ftp_messages["Deleted subdirectory <b>%1\$s</b>"] = "Subdirectorio eliminado <b>%1\$s</b>";
$net2ftp_messages["Deleted subdirectory <b>%1\$s</b>"] = "Subdirectorio eliminado <b>%1\$s</b>";
$net2ftp_messages["Unable to move the directory <b>%1\$s</b>"] = "Unable to move the directory <b>%1\$s</b>";
$net2ftp_messages["Moved directory <b>%1\$s</b>"] = "Moved directory <b>%1\$s</b>";
$net2ftp_messages["Processing of directory <b>%1\$s</b> completed"] = "Procesamiento del directorio <b>%1\$s</b> completado";
$net2ftp_messages["The target for file <b>%1\$s</b> is the same as the source, so this file will be skipped"] = "El destino del archivo <b>%1\$s</b> es el mismo que su origen, este archivo sera omitido";
$net2ftp_messages["The file <b>%1\$s</b> contains a banned keyword, so this file will be skipped"] = "The file <b>%1\$s</b> contains a banned keyword, so this file will be skipped";
$net2ftp_messages["The file <b>%1\$s</b> contains a banned keyword, aborting the move"] = "The file <b>%1\$s</b> contains a banned keyword, aborting the move";
$net2ftp_messages["The file <b>%1\$s</b> is too big to be copied, so this file will be skipped"] = "The file <b>%1\$s</b> is too big to be copied, so this file will be skipped";
$net2ftp_messages["The file <b>%1\$s</b> is too big to be moved, aborting the move"] = "The file <b>%1\$s</b> is too big to be moved, aborting the move";
$net2ftp_messages["Unable to copy the file <b>%1\$s</b>"] = "Imposible copiar el archivo <b>%1\$s</b>";
$net2ftp_messages["Copied file <b>%1\$s</b>"] = "Copied file <b>%1\$s</b>";
$net2ftp_messages["Unable to move the file <b>%1\$s</b>, aborting the move"] = "Unable to move the file <b>%1\$s</b>, aborting the move";
$net2ftp_messages["Unable to move the file <b>%1\$s</b>"] = "Unable to move the file <b>%1\$s</b>";
$net2ftp_messages["Moved file <b>%1\$s</b>"] = "El archivo <b>%1\$s</b> fue movido";
$net2ftp_messages["Unable to delete the file <b>%1\$s</b>"] = "Unable to delete the file <b>%1\$s</b>";
$net2ftp_messages["Deleted file <b>%1\$s</b>"] = "El archivo <b>%1\$s</b> fue eliminado";
$net2ftp_messages["All the selected directories and files have been processed."] = "Todos los directorios y archivos seleccionados fueron procesados exitosamente.";

// ftp_processfiles()

// ftp_getfile()
$net2ftp_messages["Unable to copy the remote file <b>%1\$s</b> to the local file using FTP mode <b>%2\$s</b>"] = "Imposible copiar el archivo remoto <b>%1\$s</b> al directorio local utilizando <b>%2\$s</b>";
$net2ftp_messages["Unable to delete file <b>%1\$s</b>"] = "Imposible eliminar el archivo <b>%1\$s</b>";

// ftp_putfile()
$net2ftp_messages["The file is too big to be transferred"] = "The file is too big to be transferred";
$net2ftp_messages["Daily limit reached: the file <b>%1\$s</b> will not be transferred"] = "Daily limit reached: the file <b>%1\$s</b> will not be transferred";
$net2ftp_messages["Unable to copy the local file to the remote file <b>%1\$s</b> using FTP mode <b>%2\$s</b>"] = "Imposible copiar el archivo local <b>%1\$s</b> al servidor remoto utilizando <b>%2\$s</b>";
$net2ftp_messages["Unable to delete the local file"] = "Imposible eliminar el archivo local";

// ftp_downloadfile()
$net2ftp_messages["Unable to delete the temporary file"] = "Imposible eliminar el archivo temporal";
$net2ftp_messages["Unable to send the file to the browser"] = "Unable to send the file to the browser";

// ftp_zip()
$net2ftp_messages["Unable to create the temporary file"] = "Imposible crear el archivo temporal";
$net2ftp_messages["The zip file has been saved on the FTP server as <b>%1\$s</b>"] = "El archivo comprimido fue guardado en el servidor como <b>%1\$s</b>";
$net2ftp_messages["Requested files"] = "Archivos solicitados";

$net2ftp_messages["Dear,"] = "Estimado/a,";
$net2ftp_messages["Someone has requested the files in attachment to be sent to this email account (%1\$s)."] = "Alguien ah solicitado que los archivos adjuntos en este correo electr�nico fueran enviados a esta direcci�n (%1\$s).";
$net2ftp_messages["If you know nothing about this or if you don't trust that person, please delete this email without opening the Zip file in attachment."] = "Si no sabes de que se trata, o no conf�as en esta persona, por favor elimina este correo sin abrir los archivos adjuntos.";
$net2ftp_messages["Note that if you don't open the Zip file, the files inside cannot harm your computer."] = "Si no abres los archivos adjuntos, tu ordenador no puede sufrir ning�n tipo de da�o.";
$net2ftp_messages["Information about the sender: "] = "Informacion del remitente: ";
$net2ftp_messages["IP address: "] = "Direccion IP: ";
$net2ftp_messages["Time of sending: "] = "Hora en la que fue enviado: ";
$net2ftp_messages["Sent via the net2ftp application installed on this website: "] = "Enviado por medio del programa net2ftp en este servidor: ";
$net2ftp_messages["Webmaster's email: "] = "Correo electr�nico del encargado: ";
$net2ftp_messages["Message of the sender: "] = "Mensaje: ";
$net2ftp_messages["net2ftp is free software, released under the GNU/GPL license. For more information, go to http://www.net2ftp.com."] = "net2ftp es software gratuito, distribuido bajo la licencia GNU/GPL. Para mas informaci�n, visita http://www.net2ftp.com.";

$net2ftp_messages["The zip file has been sent to <b>%1\$s</b>."] = "El archivo comprimido ha sido enviado a <b>%1\$s</b>.";

// acceptFiles()
$net2ftp_messages["File <b>%1\$s</b> is too big. This file will not be uploaded."] = "El archivo <b>%1\$s</b> es demasiado grande. Este archivo no ser� subido al servidor.";
$net2ftp_messages["File <b>%1\$s</b> is contains a banned keyword. This file will not be uploaded."] = "File <b>%1\$s</b> is contains a banned keyword. This file will not be uploaded.";
$net2ftp_messages["Could not generate a temporary file."] = "Imposible generar el archivo temporal.";
$net2ftp_messages["File <b>%1\$s</b> could not be moved"] = "El archivo <b>%1\$s</b> no pudo ser movido.";
$net2ftp_messages["File <b>%1\$s</b> is OK"] = "El archivo <b>%1\$s</b> es correcto";
$net2ftp_messages["Unable to move the uploaded file to the temp directory.<br /><br />The administrator of this website has to <b>chmod 777</b> the /temp directory of net2ftp."] = "Imposible mover el archivo transferido al directorio temporal.<br /><br />El administrador de este servidor debe dar permisos con <b>chmod 777</b> el directorio /temp que utiliza net2ftp.";
$net2ftp_messages["You did not provide any file to upload."] = "No has seleccionado ning�n archivo para ser subido.";

// ftp_transferfiles()
$net2ftp_messages["File <b>%1\$s</b> could not be transferred to the FTP server"] = "El archivo <b>%1\$s</b> no pudo ser transferido al servidor FTP";
$net2ftp_messages["File <b>%1\$s</b> has been transferred to the FTP server using FTP mode <b>%2\$s</b>"] = "El archivo <b>%1\$s</b> ha sido transferido al servidor utilizando <b>%2\$s</b>";
$net2ftp_messages["Transferring files to the FTP server"] = "Transfiriendo archivos al servidor FTP";

// ftp_unziptransferfiles()
$net2ftp_messages["Processing archive nr %1\$s: <b>%2\$s</b>"] = "Procesando el archivo %1\$s: <b>%2\$s</b>";
$net2ftp_messages["Archive <b>%1\$s</b> was not processed because its filename extension was not recognized. Only zip, tar, tgz and gz archives are supported at the moment."] = "El archivo <b>%1\$s</b> no fue procesado porque su extensi�n no es reconocida. Por el momento net2ftp solo soporta archivos comprimidos zip, tar, tgz o gz.";
$net2ftp_messages["Unable to extract the files and directories from the archive"] = "Unable to extract the files and directories from the archive";
$net2ftp_messages["Archive contains filenames with ../ or ..\\ - aborting the extraction"] = "Archive contains filenames with ../ or ..\\ - aborting the extraction";
$net2ftp_messages["Could not unzip entry %1\$s (error code %2\$s)"] = "Could not unzip entry %1\$s (error code %2\$s)";
$net2ftp_messages["Created directory %1\$s"] = "Created directory %1\$s";
$net2ftp_messages["Could not create directory %1\$s"] = "Could not create directory %1\$s";
$net2ftp_messages["Copied file %1\$s"] = "Copied file %1\$s";
$net2ftp_messages["Could not copy file %1\$s"] = "Could not copy file %1\$s";
$net2ftp_messages["Unable to delete the temporary directory"] = "Unable to delete the temporary directory";
$net2ftp_messages["Unable to delete the temporary file %1\$s"] = "Unable to delete the temporary file %1\$s";

// ftp_mysite()
$net2ftp_messages["Unable to execute site command <b>%1\$s</b>"] = "Imposible ejecutar el comando <b>%1\$s</b>";

// shutdown()
$net2ftp_messages["Your task was stopped"] = "Tu proceso fue detenido";
$net2ftp_messages["The task you wanted to perform with net2ftp took more time than the allowed %1\$s seconds, and therefor that task was stopped."] = "El proceso que ejecutaste con net2ftp tard� mas de %1\$s segundos, y por lo tanto fue detenido.";
$net2ftp_messages["This time limit guarantees the fair use of the web server for everyone."] = "Este tiempo limite garantiza una distribuci�n equitativa para todos los usuarios.";
$net2ftp_messages["Try to split your task in smaller tasks: restrict your selection of files, and omit the biggest files."] = "Intenta dividir tu proceso: intenta transferir menos archivos, intenta transferir los archivos mas grandes por separado.";
$net2ftp_messages["If you really need net2ftp to be able to handle big tasks which take a long time, consider installing net2ftp on your own server."] = "Si en verdad necesitas que net2ftp ejecute procesos tan grandes, considera instalar net2ftp en tu propio servidor.";

// SendMail()
$net2ftp_messages["You did not provide any text to send by email!"] = "�No escribiste nada para ser enviado por correo electr�nico!";
$net2ftp_messages["You did not supply a From address."] = "No especificaste la direcci�n del remitente.";
$net2ftp_messages["You did not supply a To address."] = "No especificaste la direcci�n del destinatario.";
$net2ftp_messages["Due to technical problems the email to <b>%1\$s</b> could not be sent."] = "Debido a problemas t�cnicos el correo electronico a <b>%1\$s</b> no pudo ser enviado.";

// tempdir2()
$net2ftp_messages["Unable to create a temporary directory because (unvalid parent directory)"] = "Unable to create a temporary directory because (unvalid parent directory)";
$net2ftp_messages["Unable to create a temporary directory because (parent directory is not writeable)"] = "Unable to create a temporary directory because (parent directory is not writeable)";
$net2ftp_messages["Unable to create a temporary directory (too many tries)"] = "Unable to create a temporary directory (too many tries)";

// -------------------------------------------------------------------------
// /includes/logging.inc.php
// -------------------------------------------------------------------------
// logAccess(), logLogin(), logError()
$net2ftp_messages["Unable to execute the SQL query."] = "Unable to execute the SQL query.";
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
$net2ftp_messages["Please enter your username and password for FTP server "] = "Please enter your username and password for FTP server ";
$net2ftp_messages["You did not fill in your login information in the popup window.<br />Click on \"Go to the login page\" below."] = "You did not fill in your login information in the popup window.<br />Click on \"Go to the login page\" below.";
$net2ftp_messages["Access to the net2ftp Admin panel is disabled, because no password has been set in the file settings.inc.php. Enter a password in that file, and reload this page."] = "Access to the net2ftp Admin panel is disabled, because no password has been set in the file settings.inc.php. Enter a password in that file, and reload this page.";
$net2ftp_messages["Please enter your Admin username and password"] = "Please enter your Admin username and password"; 
$net2ftp_messages["You did not fill in your login information in the popup window.<br />Click on \"Go to the login page\" below."] = "You did not fill in your login information in the popup window.<br />Click on \"Go to the login page\" below.";
$net2ftp_messages["Wrong username or password for the net2ftp Admin panel. The username and password can be set in the file settings.inc.php."] = "Wrong username or password for the net2ftp Admin panel. The username and password can be set in the file settings.inc.php.";


// -------------------------------------------------------------------------
// /skins/skins.inc.php
// -------------------------------------------------------------------------
$net2ftp_messages["Blue"] = "Azul";
$net2ftp_messages["Grey"] = "Gris";
$net2ftp_messages["Black"] = "Negro";
$net2ftp_messages["Yellow"] = "Amarillo";
$net2ftp_messages["Pastel"] = "Pastel";

// getMime()
$net2ftp_messages["Directory"] = "Directorio";
$net2ftp_messages["Symlink"] = "Enlace";
$net2ftp_messages["ASP script"] = "Script ASP";
$net2ftp_messages["Cascading Style Sheet"] = "Hoja de estilos";
$net2ftp_messages["HTML file"] = "Archivo HTML";
$net2ftp_messages["Java source file"] = "Archivo de codigo JAVA";
$net2ftp_messages["JavaScript file"] = "Archivo JavaScript";
$net2ftp_messages["PHP Source"] = "Codigo PHP";
$net2ftp_messages["PHP script"] = "Script PHP";
$net2ftp_messages["Text file"] = "Archivo de texto";
$net2ftp_messages["Bitmap file"] = "Imagen Bitmap";
$net2ftp_messages["GIF file"] = "Imagen GIF";
$net2ftp_messages["JPEG file"] = "Imagen JPEG";
$net2ftp_messages["PNG file"] = "Imagen PNG";
$net2ftp_messages["TIF file"] = "Imagen TIF";
$net2ftp_messages["GIMP file"] = "Imagen GIMP";
$net2ftp_messages["Executable"] = "Ejecutable";
$net2ftp_messages["Shell script"] = "Script de shell";
$net2ftp_messages["MS Office - Word document"] = "MS Office - Documento Word";
$net2ftp_messages["MS Office - Excel spreadsheet"] = "MS Office - Tabla Excel";
$net2ftp_messages["MS Office - PowerPoint presentation"] = "MS Office - Presentacion PowerPoint";
$net2ftp_messages["MS Office - Access database"] = "MS Office - Base de datos Access";
$net2ftp_messages["MS Office - Visio drawing"] = "MS Office - Imagen Visio";
$net2ftp_messages["MS Office - Project file"] = "MS Office - Archivo de proyecto";
$net2ftp_messages["OpenOffice - Writer 6.0 document"] = "OpenOffice - Documento Writer 6.0";
$net2ftp_messages["OpenOffice - Writer 6.0 template"] = "OpenOffice - Plantilla Writer 6.0";
$net2ftp_messages["OpenOffice - Calc 6.0 spreadsheet"] = "OpenOffice - Tabla Calc 6.0";
$net2ftp_messages["OpenOffice - Calc 6.0 template"] = "OpenOffice - Plantilla Calc 6.0";
$net2ftp_messages["OpenOffice - Draw 6.0 document"] = "OpenOffice - Docuemento Draw 6.0";
$net2ftp_messages["OpenOffice - Draw 6.0 template"] = "OpenOffice - Plantilla Draw 6.0";
$net2ftp_messages["OpenOffice - Impress 6.0 presentation"] = "OpenOffice - Presentacion Impress 6.0";
$net2ftp_messages["OpenOffice - Impress 6.0 template"] = "OpenOffice - Plantilla Impress 6.0";
$net2ftp_messages["OpenOffice - Writer 6.0 global document"] = "OpenOffice - Documento global Writer 6.0";
$net2ftp_messages["OpenOffice - Math 6.0 document"] = "OpenOffice - Documento Math 6.0";
$net2ftp_messages["StarOffice - StarWriter 5.x document"] = "StarOffice - Documento StarWriter 5.x";
$net2ftp_messages["StarOffice - StarWriter 5.x global document"] = "StarOffice - Documento global StarWriter 5.x";
$net2ftp_messages["StarOffice - StarCalc 5.x spreadsheet"] = "StarOffice - Tabla StarCalc 5.x";
$net2ftp_messages["StarOffice - StarDraw 5.x document"] = "StarOffice - Documento StarDraw 5.x";
$net2ftp_messages["StarOffice - StarImpress 5.x presentation"] = "StarOffice - Presentacion StarImpress 5.x";
$net2ftp_messages["StarOffice - StarImpress Packed 5.x file"] = "StarOffice - Archivo StarImpress Packed 5.x";
$net2ftp_messages["StarOffice - StarMath 5.x document"] = "StarOffice - Documento StarMath 5.x";
$net2ftp_messages["StarOffice - StarChart 5.x document"] = "StarOffice - Documento StarChart 5.x";
$net2ftp_messages["StarOffice - StarMail 5.x mail file"] = "StarOffice - Archivo de correo StarMail 5.x";
$net2ftp_messages["Adobe Acrobat document"] = "Documento Adobe Acrobat";
$net2ftp_messages["ARC archive"] = "Archivo ARC";
$net2ftp_messages["ARJ archive"] = "Archivo ARJ";
$net2ftp_messages["RPM"] = "RPM";
$net2ftp_messages["GZ archive"] = "Archivo GZ";
$net2ftp_messages["TAR archive"] = "Archivo TAR";
$net2ftp_messages["Zip archive"] = "Archivo Zip";
$net2ftp_messages["MOV movie file"] = "Pelicula MOV";
$net2ftp_messages["MPEG movie file"] = "Pelicula MPEG";
$net2ftp_messages["Real movie file"] = "Pelicula Real";
$net2ftp_messages["Quicktime movie file"] = "Pelicula Quicktime";
$net2ftp_messages["Shockwave flash file"] = "Pelicula Flash Shockwave";
$net2ftp_messages["Shockwave file"] = "Archivo Shockwave";
$net2ftp_messages["WAV sound file"] = "Archivo de sonido WAV";
$net2ftp_messages["Font file"] = "Archivo de fuente";
$net2ftp_messages["%1\$s File"] = "Archivo %1\$s";
$net2ftp_messages["File"] = "Archivo";

// getAction()
$net2ftp_messages["Back"] = "Volver";
$net2ftp_messages["Submit"] = "Aceptar";
$net2ftp_messages["Refresh"] = "Actualizar";
$net2ftp_messages["Details"] = "Detalles";
$net2ftp_messages["Icons"] = "Iconos";
$net2ftp_messages["List"] = "Lista";
$net2ftp_messages["Logout"] = "Cerrar sesi�n";
$net2ftp_messages["Help"] = "Ayuda";
$net2ftp_messages["Bookmark"] = "Favorito";
$net2ftp_messages["Save"] = "Salvar";
$net2ftp_messages["Default"] = "Defecto";


// -------------------------------------------------------------------------
// /skins/[skin]/header.template.php and footer.template.php
// -------------------------------------------------------------------------
$net2ftp_messages["Help Guide"] = "Help Guide";
$net2ftp_messages["Forums"] = "Forums";
$net2ftp_messages["License"] = "Licencia";
$net2ftp_messages["Powered by"] = "Powered by";
$net2ftp_messages["You are now taken to the net2ftp forums. These forums are for net2ftp related topics only - not for generic webhosting questions."] = "You are now taken to the net2ftp forums. These forums are for net2ftp related topics only - not for generic webhosting questions.";
$net2ftp_messages["Standard"] = "Standard";
$net2ftp_messages["Mobile"] = "Mobile";

// -------------------------------------------------------------------------
// Admin module
if ($net2ftp_globals["state"] == "admin") {
// -------------------------------------------------------------------------

// /modules/admin/admin.inc.php
$net2ftp_messages["Admin functions"] = "Admin functions";

// /skins/[skin]/admin1.template.php
$net2ftp_messages["Version information"] = "Version information";
$net2ftp_messages["This version of net2ftp is up-to-date."] = "This version of net2ftp is up-to-date.";
$net2ftp_messages["The latest version information could not be retrieved from the net2ftp.com server. Check the security settings of your browser, which may prevent the loading of a small file from the net2ftp.com server."] = "The latest version information could not be retrieved from the net2ftp.com server. Check the security settings of your browser, which may prevent the loading of a small file from the net2ftp.com server.";
$net2ftp_messages["Logging"] = "Logging";
$net2ftp_messages["Date from:"] = "Date from:";
$net2ftp_messages["to:"] = "to:";
$net2ftp_messages["Empty logs"] = "Empty";
$net2ftp_messages["View logs"] = "View logs";
$net2ftp_messages["Go"] = "Go";
$net2ftp_messages["Setup MySQL tables"] = "Setup MySQL tables";
$net2ftp_messages["Create the MySQL database tables"] = "Create the MySQL database tables";

} // end admin

// -------------------------------------------------------------------------
// Admin_createtables module
if ($net2ftp_globals["state"] == "admin_createtables") {
// -------------------------------------------------------------------------

// /modules/admin_createtables/admin_createtables.inc.php
$net2ftp_messages["Admin functions"] = "Admin functions";
$net2ftp_messages["The handle of file %1\$s could not be opened."] = "The handle of file %1\$s could not be opened.";
$net2ftp_messages["The file %1\$s could not be opened."] = "The file %1\$s could not be opened.";
$net2ftp_messages["The handle of file %1\$s could not be closed."] = "The handle of file %1\$s could not be closed.";
$net2ftp_messages["The connection to the server <b>%1\$s</b> could not be set up. Please check the database settings you've entered."] = "The connection to the server <b>%1\$s</b> could not be set up. Please check the database settings you've entered.";
$net2ftp_messages["Unable to select the database <b>%1\$s</b>."] = "Unable to select the database <b>%1\$s</b>.";
$net2ftp_messages["The SQL query nr <b>%1\$s</b> could not be executed."] = "The SQL query nr <b>%1\$s</b> could not be executed.";
$net2ftp_messages["The SQL query nr <b>%1\$s</b> was executed successfully."] = "The SQL query nr <b>%1\$s</b> was executed successfully.";

// /skins/[skin]/admin_createtables1.template.php
$net2ftp_messages["Please enter your MySQL settings:"] = "Please enter your MySQL settings:";
$net2ftp_messages["MySQL username"] = "MySQL username";
$net2ftp_messages["MySQL password"] = "MySQL password";
$net2ftp_messages["MySQL database"] = "MySQL database";
$net2ftp_messages["MySQL server"] = "MySQL server";
$net2ftp_messages["This SQL query is going to be executed:"] = "This SQL query is going to be executed:";
$net2ftp_messages["Execute"] = "Ejecutar";

// /skins/[skin]/admin_createtables2.template.php
$net2ftp_messages["Settings used:"] = "Settings used:";
$net2ftp_messages["MySQL password length"] = "MySQL password length";
$net2ftp_messages["Results:"] = "Results:";

} // end admin_createtables


// -------------------------------------------------------------------------
// Admin_viewlogs module
if ($net2ftp_globals["state"] == "admin_viewlogs") {
// -------------------------------------------------------------------------

// /modules/admin_createtables/admin_viewlogs.inc.php
$net2ftp_messages["Admin functions"] = "Admin functions";
$net2ftp_messages["Unable to execute the SQL query <b>%1\$s</b>."] = "Unable to execute the SQL query <b>%1\$s</b>.";
$net2ftp_messages["No data"] = "No data";

} // end admin_viewlogs


// -------------------------------------------------------------------------
// Admin_emptylogs module
if ($net2ftp_globals["state"] == "admin_emptylogs") {
// -------------------------------------------------------------------------

// /modules/admin_createtables/admin_emptylogs.inc.php
$net2ftp_messages["Admin functions"] = "Admin functions";
$net2ftp_messages["The table <b>%1\$s</b> was emptied successfully."] = "The table <b>%1\$s</b> was emptied successfully.";
$net2ftp_messages["The table <b>%1\$s</b> could not be emptied."] = "The table <b>%1\$s</b> could not be emptied.";
$net2ftp_messages["The table <b>%1\$s</b> was optimized successfully."] = "The table <b>%1\$s</b> was optimized successfully.";
$net2ftp_messages["The table <b>%1\$s</b> could not be optimized."] = "The table <b>%1\$s</b> could not be optimized.";

} // end admin_emptylogs


// -------------------------------------------------------------------------
// Advanced module
if ($net2ftp_globals["state"] == "advanced") {
// -------------------------------------------------------------------------

// /modules/advanced/advanced.inc.php
$net2ftp_messages["Advanced functions"] = "Funciones avanzadas";

// /skins/[skin]/advanced1.template.php
$net2ftp_messages["Go"] = "Go";
$net2ftp_messages["Disabled"] = "Disabled";
$net2ftp_messages["Advanced FTP functions"] = "Advanced FTP functions";
$net2ftp_messages["Send arbitrary FTP commands to the FTP server"] = "Send arbitrary FTP commands to the FTP server";
$net2ftp_messages["This function is available on PHP 5 only"] = "This function is available on PHP 5 only";
$net2ftp_messages["Troubleshooting functions"] = "Troubleshooting functions";
$net2ftp_messages["Troubleshoot net2ftp on this webserver"] = "Depurar net2ftp en este servidor";
$net2ftp_messages["Troubleshoot an FTP server"] = "Depurar un servidor FTP externo";
$net2ftp_messages["Test the net2ftp list parsing rules"] = "Test the net2ftp list parsing rules";
$net2ftp_messages["Translation functions"] = "Translation functions";
$net2ftp_messages["Introduction to the translation functions"] = "Introduction to the translation functions";
$net2ftp_messages["Extract messages to translate from code files"] = "Extract messages to translate from code files";
$net2ftp_messages["Check if there are new or obsolete messages"] = "Check if there are new or obsolete messages";

$net2ftp_messages["Beta functions"] = "Beta functions";
$net2ftp_messages["Send a site command to the FTP server"] = "Send a site command to the FTP server";
$net2ftp_messages["Apache: password-protect a directory, create custom error pages"] = "Apache: password-protect a directory, create custom error pages";
$net2ftp_messages["MySQL: execute an SQL query"] = "MySQL: execute an SQL query";


// advanced()
$net2ftp_messages["The site command functions are not available on this webserver."] = "Las funciones de comando de sitio no est�n disponibles en este servidor.";
$net2ftp_messages["The Apache functions are not available on this webserver."] = "Las funciones integradas de Apache no est�n disponibles en este servidor.";
$net2ftp_messages["The MySQL functions are not available on this webserver."] = "Las funciones integradas de MySQL no est�n disponibles en este servidor.";
$net2ftp_messages["Unexpected state2 string. Exiting."] = "Cadena de estado dos inesperada. Terminando.";

} // end advanced


// -------------------------------------------------------------------------
// Advanced_ftpserver module
if ($net2ftp_globals["state"] == "advanced_ftpserver") {
// -------------------------------------------------------------------------

// /modules/advanced_ftpserver/advanced_ftpserver.inc.php
$net2ftp_messages["Troubleshoot an FTP server"] = "Depurar un servidor FTP externo";

// /skins/[skin]/advanced_ftpserver1.template.php
$net2ftp_messages["Connection settings:"] = "Configuracion de la conexion:";
$net2ftp_messages["FTP server"] = "Servidor FTP";
$net2ftp_messages["FTP server port"] = "Puerto del servidor FTP";
$net2ftp_messages["Username"] = "Nombre de Usuario";
$net2ftp_messages["Password"] = "Contrase�a";
$net2ftp_messages["Password length"] = "Tama�o de la contrase�a";
$net2ftp_messages["Passive mode"] = "Modo pasivo";
$net2ftp_messages["Directory"] = "Directorio";
$net2ftp_messages["Printing the result"] = "Printing the result";

// /skins/[skin]/advanced_ftpserver2.template.php
$net2ftp_messages["Connecting to the FTP server: "] = "Conectando al servidor FTP: ";
$net2ftp_messages["Logging into the FTP server: "] = "Iniciando sesi�n en el servidor FTP: ";
$net2ftp_messages["Setting the passive mode: "] = "Iniciando modo pasivo de transferencia: ";
$net2ftp_messages["Getting the FTP server system type: "] = "Getting the FTP server system type: ";
$net2ftp_messages["Changing to the directory %1\$s: "] = "Cambiando al directorio %1\$s: ";
$net2ftp_messages["The directory from the FTP server is: %1\$s "] = "El directorio en el servidor FTP es: %1\$s ";
$net2ftp_messages["Getting the raw list of directories and files: "] = "Obteniendo la lista de archivos y directorios: ";
$net2ftp_messages["Trying a second time to get the raw list of directories and files: "] = "Intentando por segunda vez obtener la lista de directorios y archivos: ";
$net2ftp_messages["Closing the connection: "] = "Cerrando la conexion: ";
$net2ftp_messages["Raw list of directories and files:"] = "Lista de directorios y archivos:";
$net2ftp_messages["Parsed list of directories and files:"] = "Lista organizada de directorios y archivos:";

$net2ftp_messages["OK"] = "OK";
$net2ftp_messages["not OK"] = "not OK";

} // end advanced_ftpserver


// -------------------------------------------------------------------------
// Advanced_parsing module
if ($net2ftp_globals["state"] == "advanced_parsing") {
// -------------------------------------------------------------------------

$net2ftp_messages["Test the net2ftp list parsing rules"] = "Test the net2ftp list parsing rules";
$net2ftp_messages["Sample input"] = "Sample input";
$net2ftp_messages["Parsed output"] = "Parsed output";

} // end advanced_parsing


// -------------------------------------------------------------------------
// Advanced_webserver module
if ($net2ftp_globals["state"] == "advanced_webserver") {
// -------------------------------------------------------------------------

$net2ftp_messages["Troubleshoot your net2ftp installation"] = "Depurar tu instalacion de net2ftp";
$net2ftp_messages["Printing the result"] = "Printing the result";

$net2ftp_messages["Checking if the FTP module of PHP is installed: "] = "Revisando si el modulo FTP de PHP esta activado";
$net2ftp_messages["yes"] = "si";
$net2ftp_messages["no - please install it!"] = "no - �por favor instalalo!";

$net2ftp_messages["Checking the permissions of the directory on the web server: a small file will be written to the /temp folder and then deleted."] = "Revisando los permisos del directorio en el Servidor: un peque�o archivo ser� colocado en tu directorio /temp y despu�s ser� eliminado.";
$net2ftp_messages["Creating filename: "] = "Creando el archivo llamado: ";
$net2ftp_messages["OK. Filename: %1\$s"] = "OK. Nombre de archivo: %tempfilename";
$net2ftp_messages["not OK"] = "not OK";
$net2ftp_messages["OK"] = "OK";
$net2ftp_messages["not OK. Check the permissions of the %1\$s directory"] = "Error. Revisa los permisos del directorio %1\$s";
$net2ftp_messages["Opening the file in write mode: "] = "Opening the file in write mode: ";
$net2ftp_messages["Writing some text to the file: "] = "Escribiendo texto en el archivo: ";
$net2ftp_messages["Closing the file: "] = "Cerrando el archivo: ";
$net2ftp_messages["Deleting the file: "] = "Eliminando el archivo: ";

$net2ftp_messages["Testing the FTP functions"] = "Testing the FTP functions";
$net2ftp_messages["Connecting to a test FTP server: "] = "Connecting to a test FTP server: ";
$net2ftp_messages["Connecting to the FTP server: "] = "Conectando al servidor FTP: ";
$net2ftp_messages["Logging into the FTP server: "] = "Iniciando sesi�n en el servidor FTP: ";
$net2ftp_messages["Setting the passive mode: "] = "Iniciando modo pasivo de transferencia: ";
$net2ftp_messages["Getting the FTP server system type: "] = "Getting the FTP server system type: ";
$net2ftp_messages["Changing to the directory %1\$s: "] = "Cambiando al directorio %1\$s: ";
$net2ftp_messages["The directory from the FTP server is: %1\$s "] = "El directorio en el servidor FTP es: %1\$s ";
$net2ftp_messages["Getting the raw list of directories and files: "] = "Obteniendo la lista de archivos y directorios: ";
$net2ftp_messages["Trying a second time to get the raw list of directories and files: "] = "Intentando por segunda vez obtener la lista de directorios y archivos: ";
$net2ftp_messages["Closing the connection: "] = "Cerrando la conexion: ";
$net2ftp_messages["Raw list of directories and files:"] = "Lista de directorios y archivos:";
$net2ftp_messages["Parsed list of directories and files:"] = "Lista organizada de directorios y archivos:";
$net2ftp_messages["OK"] = "OK";
$net2ftp_messages["not OK"] = "not OK";

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
$net2ftp_messages["Note: when you will use this bookmark, a popup window will ask you for your username and password."] = "Nota: cuando uses este Favorito, aparecer� una ventana pidi�ndote nombre de usuario y contrase�a.";

} // end bookmark


// -------------------------------------------------------------------------
// Browse module
if ($net2ftp_globals["state"] == "browse") {
// -------------------------------------------------------------------------

// /modules/browse/browse.inc.php
$net2ftp_messages["Choose a directory"] = "Selecciona un directorio";
$net2ftp_messages["Please wait..."] = "Por favor espera...";

// browse()
$net2ftp_messages["Directories with names containing \' cannot be displayed correctly. They can only be deleted. Please go back and select another subdirectory."] = "Los directorios que contienen el car�cter \' no pueden ser vistos correctamente. Solo pueden ser eliminados. Por favor vuelve atr�s y elige otro subdirectorio.";

$net2ftp_messages["Daily limit reached: you will not be able to transfer data"] = "Daily limit reached: you will not be able to transfer data";
$net2ftp_messages["In order to guarantee the fair use of the web server for everyone, the data transfer volume and script execution time are limited per user, and per day. Once this limit is reached, you can still browse the FTP server but not transfer data to/from it."] = "In order to guarantee the fair use of the web server for everyone, the data transfer volume and script execution time are limited per user, and per day. Once this limit is reached, you can still browse the FTP server but not transfer data to/from it.";
$net2ftp_messages["If you need unlimited usage, please install net2ftp on your own web server."] = "If you need unlimited usage, please install net2ftp on your own web server.";

// printdirfilelist()
// Keep this short, it must fit in a small button!
$net2ftp_messages["New dir"] = "Nuevo directorio";
$net2ftp_messages["New file"] = "Nuevo archivo";
$net2ftp_messages["HTML templates"] = "HTML templates";
$net2ftp_messages["Upload"] = "Subir archivo";
$net2ftp_messages["Java Upload"] = "Java Upload";
$net2ftp_messages["Flash Upload"] = "Flash Upload";
$net2ftp_messages["Install"] = "Install";
$net2ftp_messages["Advanced"] = "Avanzado";
$net2ftp_messages["Copy"] = "Copiar";
$net2ftp_messages["Move"] = "Mover";
$net2ftp_messages["Delete"] = "Eliminar";
$net2ftp_messages["Rename"] = "Renombrar";
$net2ftp_messages["Chmod"] = "Chmod";
$net2ftp_messages["Download"] = "Descargar";
$net2ftp_messages["Unzip"] = "Unzip";
$net2ftp_messages["Zip"] = "Comprimir";
$net2ftp_messages["Size"] = "Tama�o";
$net2ftp_messages["Search"] = "Buscar";
$net2ftp_messages["Go to the parent directory"] = "Go to the parent directory";
$net2ftp_messages["Go"] = "Go";
$net2ftp_messages["Transform selected entries: "] = "Transformar los elementos seleccionados: ";
$net2ftp_messages["Transform selected entry: "] = "Transform selected entry: ";
$net2ftp_messages["Make a new subdirectory in directory %1\$s"] = "Crear un nuevo subdirectorio en el directorio %1\$s";
$net2ftp_messages["Create a new file in directory %1\$s"] = "Crear nuevo archivo en el directorio %1\$s";
$net2ftp_messages["Create a website easily using ready-made templates"] = "Create a website easily using ready-made templates";
$net2ftp_messages["Upload new files in directory %1\$s"] = "Transferir un archivo al directorio %1\$s";
$net2ftp_messages["Upload directories and files using a Java applet"] = "Upload directories and files using a Java applet";
$net2ftp_messages["Upload files using a Flash applet"] = "Upload files using a Flash applet";
$net2ftp_messages["Install software packages (requires PHP on web server)"] = "Install software packages (requires PHP on web server)";
$net2ftp_messages["Go to the advanced functions"] = "Ir a las funciones avanzadas";
$net2ftp_messages["Copy the selected entries"] = "Copiar los elementos seleccionados";
$net2ftp_messages["Move the selected entries"] = "Mover los elementos seleccionados";
$net2ftp_messages["Delete the selected entries"] = "Eliminar los elementos seleccionados";
$net2ftp_messages["Rename the selected entries"] = "Renombrar los elementos seleccionados";
$net2ftp_messages["Chmod the selected entries (only works on Unix/Linux/BSD servers)"] = "Configurar permisos de los elementos seleccionados (solo funciona en servidor Unix/Linux/BSD)";
$net2ftp_messages["Download a zip file containing all selected entries"] = "Descargar un archivo comprimido con todos los elementos";
$net2ftp_messages["Unzip the selected archives on the FTP server"] = "Unzip the selected archives on the FTP server";
$net2ftp_messages["Zip the selected entries to save or email them"] = "Comprimir los elementos seleccionados para guardarlos o mandarlos por correo electr�nico";
$net2ftp_messages["Calculate the size of the selected entries"] = "Calcular el tama�o de los elementos seleccionados";
$net2ftp_messages["Find files which contain a particular word"] = "Buscar archivos que contengan una palabra";
$net2ftp_messages["Click to sort by %1\$s in descending order"] = "Haz click para organizar los %1\$s en orden descendente";
$net2ftp_messages["Click to sort by %1\$s in ascending order"] = "Haz click para organizar los %1\$s en orden ascendente";
$net2ftp_messages["Ascending order"] = "Orden ascendente";
$net2ftp_messages["Descending order"] = "Orden descendente";
$net2ftp_messages["Upload files"] = "Subir tus archivos";
$net2ftp_messages["Up"] = "Arriba";
$net2ftp_messages["Click to check or uncheck all rows"] = "Click to check or uncheck all rows";
$net2ftp_messages["All"] = "All";
$net2ftp_messages["Name"] = "Nombre";
$net2ftp_messages["Type"] = "Tipo";
//$net2ftp_messages["Size"] = "Size";
$net2ftp_messages["Owner"] = "Propietario";
$net2ftp_messages["Group"] = "Grupo";
$net2ftp_messages["Perms"] = "Permisos";
$net2ftp_messages["Mod Time"] = "Hora de mod.";
$net2ftp_messages["Actions"] = "Acciones";
$net2ftp_messages["Select the directory %1\$s"] = "Select the directory %1\$s";
$net2ftp_messages["Select the file %1\$s"] = "Select the file %1\$s";
$net2ftp_messages["Select the symlink %1\$s"] = "Select the symlink %1\$s";
$net2ftp_messages["Go to the subdirectory %1\$s"] = "Go to the subdirectory %1\$s";
$net2ftp_messages["Download the file %1\$s"] = "Download the file %1\$s";
$net2ftp_messages["Follow symlink %1\$s"] = "Follow symlink %1\$s";
$net2ftp_messages["View"] = "Ver";
$net2ftp_messages["Edit"] = "Editar";
$net2ftp_messages["Update"] = "Actualizar";
$net2ftp_messages["Open"] = "Abrir";
$net2ftp_messages["View the highlighted source code of file %1\$s"] = "Ver el codigo seleccionado del archivo %1\$s";
$net2ftp_messages["Edit the source code of file %1\$s"] = "Editar el codigo del archivo %1\$s";
$net2ftp_messages["Upload a new version of the file %1\$s and merge the changes"] = "Subir una nueva version del archivo %1\$s y actualiza los cambios";
$net2ftp_messages["View image %1\$s"] = "Ver imagen %1\$s";
$net2ftp_messages["View the file %1\$s from your HTTP web server"] = "Ver los archivos %1\$s desde tu servidor web";
$net2ftp_messages["(Note: This link may not work if you don't have your own domain name.)"] = "(Nota: Este link puede que no funcione si no tienes tu propio nombre de dominio.)";
$net2ftp_messages["This folder is empty"] = "El directorio esta vacio";

// printSeparatorRow()
$net2ftp_messages["Directories"] = "Directorios";
$net2ftp_messages["Files"] = "Archivos";
$net2ftp_messages["Symlinks"] = "Enlaces";
$net2ftp_messages["Unrecognized FTP output"] = "Respuesta FTP no reconocida";
$net2ftp_messages["Number"] = "Number";
$net2ftp_messages["Size"] = "Tama�o";
$net2ftp_messages["Skipped"] = "Skipped";
$net2ftp_messages["Data transferred from this IP address today"] = "Data transferred from this IP address today";
$net2ftp_messages["Data transferred to this FTP server today"] = "Data transferred to this FTP server today";

// printLocationActions()
$net2ftp_messages["Language:"] = "Idioma:";
$net2ftp_messages["Skin:"] = "Plantilla:";
$net2ftp_messages["View mode:"] = "Modo de vista:";
$net2ftp_messages["Directory Tree"] = "Arbol de directorios";

// ftp2http()
$net2ftp_messages["Execute %1\$s in a new window"] = "Ejecutar %1\$s en una ventana nueva";
$net2ftp_messages["This file is not accessible from the web"] = "This file is not accessible from the web";

// printDirectorySelect()
$net2ftp_messages["Double-click to go to a subdirectory:"] = "Haz doble click para ir al subdirectorio:";
$net2ftp_messages["Choose"] = "Elegir";
$net2ftp_messages["Up"] = "Arriba";

} // end browse


// -------------------------------------------------------------------------
// Calculate size module
if ($net2ftp_globals["state"] == "calculatesize") {
// -------------------------------------------------------------------------
$net2ftp_messages["Size of selected directories and files"] = "Tama�o de los directorios y archivos seleccionados";
$net2ftp_messages["The total size taken by the selected directories and files is:"] = "El tama�o total de los archivos y directorios seleccionados es de:";
$net2ftp_messages["The number of files which were skipped is:"] = "The number of files which were skipped is:";

} // end calculatesize


// -------------------------------------------------------------------------
// Chmod module
if ($net2ftp_globals["state"] == "chmod") {
// -------------------------------------------------------------------------
$net2ftp_messages["Chmod directories and files"] = "Cambiar permisos de directorios y archivos";
$net2ftp_messages["Set all permissions"] = "Cambiar todos los permidos";
$net2ftp_messages["Read"] = "Leer";
$net2ftp_messages["Write"] = "Escribir";
$net2ftp_messages["Execute"] = "Ejecutar";
$net2ftp_messages["Owner"] = "Propietario";
$net2ftp_messages["Group"] = "Grupo";
$net2ftp_messages["Everyone"] = "Todos";
$net2ftp_messages["To set all permissions to the same values, enter those permissions and click on the button \"Set all permissions\""] = "Para dar permisos a todos de igual manera, elige los permisos y haz click en \"Dar permisos a todos\"";
$net2ftp_messages["Set the permissions of directory <b>%1\$s</b> to: "] = "Dar permisos al directorio <b>%1\$s</b> como: ";
$net2ftp_messages["Set the permissions of file <b>%1\$s</b> to: "] = "Dar permisos al archivo <b>%1\$s</b> como: ";
$net2ftp_messages["Set the permissions of symlink <b>%1\$s</b> to: "] = "Dar permisos al enlace <b>%1\$s</b> como: ";
$net2ftp_messages["Chmod value"] = "Valor Chmod";
$net2ftp_messages["Chmod also the subdirectories within this directory"] = "Dar permisos tambien los subdirectorios dentro de este directorio";
$net2ftp_messages["Chmod also the files within this directory"] = "Dar permisos tambien los archivos dentro de este directorio";
$net2ftp_messages["The chmod nr <b>%1\$s</b> is out of the range 000-777. Please try again."] = "El c�digo de permiso <b>%1\$s</b> esta fuera del rango 000-777. Porfavor intenta de nuevo.";

} // end chmod


// -------------------------------------------------------------------------
// Clear cookies module
// -------------------------------------------------------------------------
// No messages


// -------------------------------------------------------------------------
// Copy/Move/Delete module
if ($net2ftp_globals["state"] == "copymovedelete") {
// -------------------------------------------------------------------------
$net2ftp_messages["Choose a directory"] = "Selecciona un directorio";
$net2ftp_messages["Copy directories and files"] = "Copiar directorios y archivos";
$net2ftp_messages["Move directories and files"] = "Mover directorios y archivos";
$net2ftp_messages["Delete directories and files"] = "Eliminar directorios y archivos";
$net2ftp_messages["Are you sure you want to delete these directories and files?"] = "�Estas seguro que quieres eliminar estos directorios y archivos?";
$net2ftp_messages["All the subdirectories and files of the selected directories will also be deleted!"] = "�Todos los archivos y subdirectorios dentro de los directorios seleccionados ser�n eliminados!";
$net2ftp_messages["Set all targetdirectories"] = "Especificar el directorio destino";
$net2ftp_messages["To set a common target directory, enter that target directory in the textbox above and click on the button \"Set all targetdirectories\"."] = "Para especificar un directorio destino com�n, escribe el nombre del directorio en el campo que esta arriba y haz clic en \"Especificar directorio destino comun\".";
$net2ftp_messages["Note: the target directory must already exist before anything can be copied into it."] = "Nota: El directorio destino debe existir antes de poder copiar archivos dentro de el.";
$net2ftp_messages["Different target FTP server:"] = "Servidor FTP de destino:";
$net2ftp_messages["Username"] = "Nombre de Usuario";
$net2ftp_messages["Password"] = "Contrase�a";
$net2ftp_messages["Leave empty if you want to copy the files to the same FTP server."] = "Deja en blanco si quieres copiar los archivos al mismo servidor FTP.";
$net2ftp_messages["If you want to copy the files to another FTP server, enter your login data."] = "Si quieres copiar los archivos a un servidor FTP distingo, escribe tu nombre de usuario, contrase�a y otros datos.";
$net2ftp_messages["Leave empty if you want to move the files to the same FTP server."] = "Deja en blanco si quieres mover los archivos al mismo servidor FTP.";
$net2ftp_messages["If you want to move the files to another FTP server, enter your login data."] = "Si quieres mover los archivos a un servidor FTP distingo, escribe tu nombre de usuario, contrase�a y otros datos.";
$net2ftp_messages["Copy directory <b>%1\$s</b> to:"] = "Copiar directorio <b>%1\$s</b> to:";
$net2ftp_messages["Move directory <b>%1\$s</b> to:"] = "Mover directorio <b>%1\$s</b> to:";
$net2ftp_messages["Directory <b>%1\$s</b>"] = "Directorio <b>%1\$s</b>";
$net2ftp_messages["Copy file <b>%1\$s</b> to:"] = "Copiar archivo <b>%1\$s</b> to:";
$net2ftp_messages["Move file <b>%1\$s</b> to:"] = "Mover archivo <b>%1\$s</b> to:";
$net2ftp_messages["File <b>%1\$s</b>"] = "Archivo <b>%1\$s</b>";
$net2ftp_messages["Copy symlink <b>%1\$s</b> to:"] = "Copiar enlace <b>%1\$s</b> to:";
$net2ftp_messages["Move symlink <b>%1\$s</b> to:"] = "Mover enlace <b>%1\$s</b> to:";
$net2ftp_messages["Symlink <b>%1\$s</b>"] = "Enlace <b>%1\$s</b>";
$net2ftp_messages["Target directory:"] = "Directorio destino:";
$net2ftp_messages["Target name:"] = "Nombre de destino:";
$net2ftp_messages["Processing the entries:"] = "Procesando los elementos:";

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
$net2ftp_messages["Install"] = "Install";
$net2ftp_messages["Size"] = "Tama�o";
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
$net2ftp_messages["Internet Explorer: right-click on the link and choose \"Add to Favorites...\""] = "Internet Explorer: haz clic derecho en el link y elige \"Agregar a Favoritos...\"";
$net2ftp_messages["Netscape, Mozilla, Firefox: right-click on the link and choose \"Bookmark This Link...\""] = "Netscape, Mozilla y Firefox: haz clic derecho en el link y elige \"Agregar a Favoritos...\"";

// ftp_copy_local2ftp
$net2ftp_messages["WARNING: Unable to create the subdirectory <b>%1\$s</b>. It may already exist. Continuing..."] = "WARNING: Unable to create the subdirectory <b>%1\$s</b>. It may already exist. Continuing...";
$net2ftp_messages["Created target subdirectory <b>%1\$s</b>"] = "Created target subdirectory <b>%1\$s</b>";
$net2ftp_messages["WARNING: Unable to copy the file <b>%1\$s</b>. Continuing..."] = "WARNING: Unable to copy the file <b>%1\$s</b>. Continuing...";
$net2ftp_messages["Copied file <b>%1\$s</b>"] = "Copied file <b>%1\$s</b>";
}


// -------------------------------------------------------------------------
// Edit module
if ($net2ftp_globals["state"] == "edit") {
// -------------------------------------------------------------------------

// /modules/edit/edit.inc.php
$net2ftp_messages["Unable to open the template file"] = "Error al abrir la plantilla";
$net2ftp_messages["Unable to read the template file"] = "Error al leer la plantilla";
$net2ftp_messages["Please specify a filename"] = "Por favor espicifique un nombre de archivo";
$net2ftp_messages["Status: This file has not yet been saved"] = "Estado: Este archivo no ha sido guardado";
$net2ftp_messages["Status: Saved on <b>%1\$s</b> using mode %2\$s"] = "Estado: Guardado <b>%1\$s</b> mediante modo %2\$s";
$net2ftp_messages["Status: <b>This file could not be saved</b>"] = "Estado: <b>Este archivo no pudo ser guardado</b>";
$net2ftp_messages["Not yet saved"] = "Not yet saved";
$net2ftp_messages["Could not be saved"] = "Could not be saved";
$net2ftp_messages["Saved at %1\$s"] = "Saved at %1\$s";

// /skins/[skin]/edit.template.php
$net2ftp_messages["Directory: "] = "Directorio: ";
$net2ftp_messages["File: "] = "Archivo: ";
$net2ftp_messages["New file name: "] = "Nuevo nombre de archivo: ";
$net2ftp_messages["Character encoding: "] = "Character encoding: ";
$net2ftp_messages["Note: changing the textarea type will save the changes"] = "Nota: Al cambiar el tipo de texto se guardaran los cambios";
$net2ftp_messages["Copy up"] = "Copy up";
$net2ftp_messages["Copy down"] = "Copy down";

} // end if edit


// -------------------------------------------------------------------------
// Find string module
if ($net2ftp_globals["state"] == "findstring") {
// -------------------------------------------------------------------------

// /modules/findstring/findstring.inc.php 
$net2ftp_messages["Search directories and files"] = "Buscar directorios y archivos";
$net2ftp_messages["Search again"] = "Buscar de nuevo";
$net2ftp_messages["Search results"] = "Resultados de la b�squeda";
$net2ftp_messages["Please enter a valid search word or phrase."] = "Por favor escribe una palabra o frase valida de b�squeda.";
$net2ftp_messages["Please enter a valid filename."] = "Por favor escribe un nombre de archivo valido.";
$net2ftp_messages["Please enter a valid file size in the \"from\" textbox, for example 0."] = "Por favor escribe un tama�o de archivo valido en el cuadro de texto \"De\", por ejemplo: 0.";
$net2ftp_messages["Please enter a valid file size in the \"to\" textbox, for example 500000."] = "Por favor escribe un tama�o de archivo valido en la caja de texto \"A\",  por ejemplo: 500000.";
$net2ftp_messages["Please enter a valid date in Y-m-d format in the \"from\" textbox."] = "Por favor escribe un fecha valida en formato A-m-d en la caja de texto \"De\".";
$net2ftp_messages["Please enter a valid date in Y-m-d format in the \"to\" textbox."] = "Por favor escribe un fecha valida en formato A-m-d en la caja de texto \"A\".";
$net2ftp_messages["The word <b>%1\$s</b> was not found in the selected directories and files."] = "La palabra <b>%1\$s</b> no fue encontrada en los archivos y directorios seleccionados.";
$net2ftp_messages["The word <b>%1\$s</b> was found in the following files:"] = "La palabra <b>%1\$s</b> fue encontrada en los siguientes archivos:";

// /skins/[skin]/findstring1.template.php
$net2ftp_messages["Search for a word or phrase"] = "Buscar frase o palabra";
$net2ftp_messages["Case sensitive search"] = "Buscar frase o palabra exacta incluyendo min�sculas y may�sculas";
$net2ftp_messages["Restrict the search to:"] = "Restringir la busqueda a:";
$net2ftp_messages["files with a filename like"] = "archivos con un nombre como";
$net2ftp_messages["(wildcard character is *)"] = "(el caracter comodin es *)";
$net2ftp_messages["files with a size"] = "archivos del tama�o";
$net2ftp_messages["files which were last modified"] = "archivos que fueron modificados por ultima vez";
$net2ftp_messages["from"] = "De";
$net2ftp_messages["to"] = "A";

$net2ftp_messages["Directory"] = "Directorio";
$net2ftp_messages["File"] = "Archivo";
$net2ftp_messages["Line"] = "Line";
$net2ftp_messages["Action"] = "Action";
$net2ftp_messages["View"] = "Ver";
$net2ftp_messages["Edit"] = "Editar";
$net2ftp_messages["View the highlighted source code of file %1\$s"] = "Ver el codigo seleccionado del archivo %1\$s";
$net2ftp_messages["Edit the source code of file %1\$s"] = "Editar el codigo del archivo %1\$s";

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
$net2ftp_messages["Unable to open the template file"] = "Error al abrir la plantilla";
$net2ftp_messages["Unable to read the template file"] = "Error al leer la plantilla";
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
$net2ftp_messages["Upload directories and files using a Java applet"] = "Upload directories and files using a Java applet";
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
$net2ftp_messages["Once you are logged in, you will be able to:"] = "Una vez iniciada la sesion, podras ...";
$net2ftp_messages["Navigate the FTP server"] = "Navegar en el FTP server";
$net2ftp_messages["Once you have logged in, you can browse from directory to directory and see all the subdirectories and files."] = "Si has iniciado una sesion podras ver tus directorios y archivos.";
$net2ftp_messages["Upload files"] = "Subir tus archivos";
$net2ftp_messages["There are 3 different ways to upload files: the standard upload form, the upload-and-unzip functionality, and the Java Applet."] = "Hay tres formas diferentes de subir archivos: la estandar, subir y compimir, and mediante un java applet.";
$net2ftp_messages["Download files"] = "Descargar archivos";
$net2ftp_messages["Click on a filename to quickly download one file.<br />Select multiple files and click on Download; the selected files will be downloaded in a zip archive."] = "Hacer click en el nombre de archivo para su descarga instantanea.<br />Seleccionar varios archivos a la vez y pulsar en el boton de descarga; Los archivos seleccionados seran descargados en un archivo .zip.";
$net2ftp_messages["Zip files"] = "Archivos zip";
$net2ftp_messages["... and save the zip archive on the FTP server, or email it to someone."] = "... y guardar el archivo zip en el servidor FTP, o mandarlo de la misma manera por correo.";
$net2ftp_messages["Unzip files"] = "Descomprimir archivos";
$net2ftp_messages["Different formats are supported: .zip, .tar, .tgz and .gz."] = "Diferentes formatos soportados: .zip, .tar, .tgz and .gz.";
$net2ftp_messages["Install software"] = "";
$net2ftp_messages["Choose from a list of popular applications (PHP required)."] = "Elegir en una lista de aplicaciones (requerido PHP).";
$net2ftp_messages["Copy, move and delete"] = "Copiar, mover y borrar";
$net2ftp_messages["Directories are handled recursively, meaning that their content (subdirectories and files) will also be copied, moved or deleted."] = "El contenido de los subdirectories y los archivos tambi�n ser� copiado, movido o suprimido.";
$net2ftp_messages["Copy or move to a 2nd FTP server"] = "Copiar o mover directorios a un segundo FTP server";
$net2ftp_messages["Handy to import files to your FTP server, or to export files from your FTP server to another FTP server."] = "Puedes exportar tus archivos de un servidor FTP a otro.";
$net2ftp_messages["Rename and chmod"] = "renombrar y cambiar permisos";
$net2ftp_messages["Chmod handles directories recursively."] = "Manejar permisos (chmod) en subdirectorios y archivos de carpetas las cuales manejas.";
$net2ftp_messages["View code with syntax highlighting"] = "Ver el codigo destacando las sintaxis.";
$net2ftp_messages["PHP functions are linked to the documentation on php.net."] = "las funciones PHP estan vincualadas a la documentacion en php.net.";
$net2ftp_messages["Plain text editor"] = "Editor de texto plano";
$net2ftp_messages["Edit text right from your browser; every time you save the changes the new file is transferred to the FTP server."] = "Editar el texto desde tu explorador; siempre que guardes los cambios se transferiran al servidor FTP.";
$net2ftp_messages["HTML editors"] = "Editores de HTML";
$net2ftp_messages["Edit HTML a What-You-See-Is-What-You-Get (WYSIWYG) form; there are 2 different editors to choose from."] = "Puedes elegir entre dos editores de HTML.";
$net2ftp_messages["Code editor"] = "Editor de codigor";
$net2ftp_messages["Edit HTML and PHP in an editor with syntax highlighting."] = "Editar HTML y PHP usando un editor editor destacando la sintaxis.";
$net2ftp_messages["Search for words or phrases"] = "B�squeda para las palabras o las frases";
$net2ftp_messages["Filter out files based on the filename, last modification time and filesize."] = "Filtrar los listados archivos basandose en el nombre de fichero, la vez pasada de la modificaci�n y filesize.";
$net2ftp_messages["Calculate size"] = "Calcular tama�o";
$net2ftp_messages["Calculate the size of directories and files."] = "Calcular el tama�o de directorios y archivos.";

$net2ftp_messages["FTP server"] = "Servidor FTP";
$net2ftp_messages["Example"] = "Ejemplo";
$net2ftp_messages["Port"] = "Port";
$net2ftp_messages["Protocol"] = "Protocol";
$net2ftp_messages["Username"] = "Nombre de Usuario";
$net2ftp_messages["Password"] = "Contrase�a";
$net2ftp_messages["Anonymous"] = "Anonimo";
$net2ftp_messages["Passive mode"] = "Modo pasivo";
$net2ftp_messages["Initial directory"] = "Directorio inicial";
$net2ftp_messages["Language"] = "Idioma";
$net2ftp_messages["Skin"] = "Plantilla";
$net2ftp_messages["FTP mode"] = "FTP mode";
$net2ftp_messages["Automatic"] = "Automatic";
$net2ftp_messages["Login"] = "Iniciar";
$net2ftp_messages["Clear cookies"] = "Borrar cookies";
$net2ftp_messages["Admin"] = "Admin";
$net2ftp_messages["Please enter an FTP server."] = "Porfavor introduzca un servidor FTP.";
$net2ftp_messages["Please enter a username."] = "Porfavor, introduczca un nombre de usuario.";
$net2ftp_messages["Please enter a password."] = "Porfavor, introduczca una contrase�a.";

} // end login


// -------------------------------------------------------------------------
// Login module
if ($net2ftp_globals["state"] == "login_small") {
// -------------------------------------------------------------------------

$net2ftp_messages["Please enter your Administrator username and password."] = "Porfavor introduzca su nombre de usuario y contrase�a de administrador.";
$net2ftp_messages["Please enter your username and password for FTP server <b>%1\$s</b>."] = "Porfqavor introduce tu usuario y contrase�a para <b>%1\$s</b>.";
$net2ftp_messages["Username"] = "Nombre de Usuario";
$net2ftp_messages["Your session has expired; please enter your password for FTP server <b>%1\$s</b> to continue."] = "Tu sesion a sido cancelada; porfavor introduce tu contrase�a para el servidor FTP <b>%1\$s</b> y continua.";
$net2ftp_messages["Your IP address has changed; please enter your password for FTP server <b>%1\$s</b> to continue."] = "Tu direccion IP a cambiado; Porfavor introduzca su contrase�a para el servidor FTP <b>%1\$s</b> para continuar.";
$net2ftp_messages["Password"] = "Contrase�a";
$net2ftp_messages["Login"] = "Iniciar";
$net2ftp_messages["Continue"] = "Continue";

} // end login_small


// -------------------------------------------------------------------------
// Logout module
if ($net2ftp_globals["state"] == "logout") {
// -------------------------------------------------------------------------

// logout.inc.php
$net2ftp_messages["Login page"] = "Pagina de login";

// logout.template.php
$net2ftp_messages["You have logged out from the FTP server. To log back in, <a href=\"%1\$s\" title=\"Login page (accesskey l)\" accesskey=\"l\">follow this link</a>."] = "Has cerrado tu sesion en el servidor FTP. Para entrar de nuevo a la pagina de inicio de sesion, <a href=\"%1\$s\" title=\"Login page (accesskey l)\" accesskey=\"l\">Click aqui</a>.";
$net2ftp_messages["Note: other users of this computer could click on the browser's Back button and access the FTP server."] = "";
$net2ftp_messages["To prevent this, you must close all browser windows."] = "Para cerrar el explorador pulsa Cerrar.";
$net2ftp_messages["Close"] = "Cerrar";
$net2ftp_messages["Click here to close this window"] = "Click aqui para cerrar la ventana";

} // end logout


// -------------------------------------------------------------------------
// New directory module
if ($net2ftp_globals["state"] == "newdir") {
// -------------------------------------------------------------------------
$net2ftp_messages["Create new directories"] = "Crear nuevo directorio";
$net2ftp_messages["The new directories will be created in <b>%1\$s</b>."] = "El nuevo directorio ser� creado dentro de <b>%1\$s</b>.";
$net2ftp_messages["New directory name:"] = "Nombre del directorio nuevo:";
$net2ftp_messages["Directory <b>%1\$s</b> was successfully created."] = "El directorio <b>%1\$s</b> fue creado.";
$net2ftp_messages["Directory <b>%1\$s</b> could not be created."] = "El directorio <b>%1\$s</b> no puedo ser creado.";

} // end newdir


// -------------------------------------------------------------------------
// Raw module
if ($net2ftp_globals["state"] == "raw") {
// -------------------------------------------------------------------------

// /modules/raw/raw.inc.php
$net2ftp_messages["Send arbitrary FTP commands"] = "Enviar los comandos arbitrarios del ftp";


// /skins/[skin]/raw1.template.php
$net2ftp_messages["List of commands:"] = "Lista de comandos:";
$net2ftp_messages["FTP server response:"] = "Respuesta del ftp server:";

} // end raw


// -------------------------------------------------------------------------
// Rename module
if ($net2ftp_globals["state"] == "rename") {
// -------------------------------------------------------------------------
$net2ftp_messages["Rename directories and files"] = "Renombrar directorios y archivos";
$net2ftp_messages["Old name: "] = "Nombre antiguo: ";
$net2ftp_messages["New name: "] = "Nombre nuevo: ";
$net2ftp_messages["The new name may not contain any dots. This entry was not renamed to <b>%1\$s</b>"] = "El nombre nuevo no puede contener puntos. El elemento no fue renombrado a <b>%1\$s</b>";
$net2ftp_messages["The new name may not contain any banned keywords. This entry was not renamed to <b>%1\$s</b>"] = "El nuevo nombre no puede contener ninguna de las palabras clave prohibidas.<b>%1\$s</b> no fue renombrado";
$net2ftp_messages["<b>%1\$s</b> was successfully renamed to <b>%2\$s</b>"] = "<b>%1\$s</b> fue renombrado a <b>%2\$s</b>";
$net2ftp_messages["<b>%1\$s</b> could not be renamed to <b>%2\$s</b>"] = "<b>%1\$s</b> no pudo ser renombrado a <b>%2\$s</b>";

} // end rename


// -------------------------------------------------------------------------
// Unzip module
if ($net2ftp_globals["state"] == "unzip") {
// -------------------------------------------------------------------------

// /modules/unzip/unzip.inc.php
$net2ftp_messages["Unzip archives"] = "Unzip archives";
$net2ftp_messages["Getting archive %1\$s of %2\$s from the FTP server"] = "Obteniendo archivos %1\$s de %2\$s desde sitio FTP";
$net2ftp_messages["Unable to get the archive <b>%1\$s</b> from the FTP server"] = "Incapaz de conseguir el archivo <b>%1\$s</b> del servidor FTP";

// /skins/[skin]/unzip1.template.php
$net2ftp_messages["Set all targetdirectories"] = "Especificar el directorio destino";
$net2ftp_messages["To set a common target directory, enter that target directory in the textbox above and click on the button \"Set all targetdirectories\"."] = "Para especificar un directorio destino com�n, escribe el nombre del directorio en el campo que esta arriba y haz clic en \"Especificar directorio destino comun\".";
$net2ftp_messages["Note: the target directory must already exist before anything can be copied into it."] = "Nota: El directorio destino debe existir antes de poder copiar archivos dentro de el.";
$net2ftp_messages["Unzip archive <b>%1\$s</b> to:"] = "Descomprimiendo archivo <b>%1\$s</b> a:";
$net2ftp_messages["Target directory:"] = "Directorio destino:";
$net2ftp_messages["Use folder names (creates subdirectories automatically)"] = "Conservar estructura del directorio (los subdirectorios ser�n creados autom�ticamente)";

} // end unzip


// -------------------------------------------------------------------------
// Upload module
if ($net2ftp_globals["state"] == "upload") {
// -------------------------------------------------------------------------
$net2ftp_messages["Upload to directory:"] = "Transferir al directorio:";
$net2ftp_messages["Files"] = "Archivos";
$net2ftp_messages["Archives"] = "Archivos";
$net2ftp_messages["Files entered here will be transferred to the FTP server."] = "Los archivos seleccionados seran transferidos al servidor FTP.";
$net2ftp_messages["Archives entered here will be decompressed, and the files inside will be transferred to the FTP server."] = "Los archivos seleccionados ser�n descomprimidos y transferidos al servidor FTP.";
$net2ftp_messages["Add another"] = "Agregar nuevo";
$net2ftp_messages["Use folder names (creates subdirectories automatically)"] = "Conservar estructura del directorio (los subdirectorios ser�n creados autom�ticamente)";

$net2ftp_messages["Choose a directory"] = "Selecciona un directorio";
$net2ftp_messages["Please wait..."] = "Por favor espera...";
$net2ftp_messages["Uploading... please wait..."] = "Subiendo al servidor... por favor espera...";
$net2ftp_messages["If the upload takes more than the allowed <b>%1\$s seconds<\/b>, you will have to try again with less/smaller files."] = "Si la transferencia dura mas de <b>%1\$s segundos<\/b>, tendr�s que volver a intentarlo con menos archivos.";
$net2ftp_messages["This window will close automatically in a few seconds."] = "Esta ventana se cerrara autom�ticamente en unos segundos.";
$net2ftp_messages["Close window now"] = "Cerrar ventana";

$net2ftp_messages["Upload files and archives"] = "Subir archivos";
$net2ftp_messages["Upload results"] = "Subir resultados";
$net2ftp_messages["Checking files:"] = "Revisando archivos:";
$net2ftp_messages["Transferring files to the FTP server:"] = "Transfiriendo archivos al servidor FTP:";
$net2ftp_messages["Decompressing archives and transferring files to the FTP server:"] = "Descomprimiendo y transfiriendo los archivos al servidor FTP:";
$net2ftp_messages["Upload more files and archives"] = "Subir mas archivos al servidor";

} // end upload


// -------------------------------------------------------------------------
// Messages which are shared by upload and jupload
if ($net2ftp_globals["state"] == "upload" || $net2ftp_globals["state"] == "jupload") {
// -------------------------------------------------------------------------
$net2ftp_messages["Restrictions:"] = "Restricciones:";
$net2ftp_messages["The maximum size of one file is restricted by net2ftp to <b>%1\$s</b> and by PHP to <b>%2\$s</b>"] = "El tama�o maximo de un archivo esta restringido por net2ftp a <b>%1\$s</b> y por PHP a <b>%2\$s</b>";
$net2ftp_messages["The maximum execution time is <b>%1\$s seconds</b>"] = "El tiempo maximo de ejecucion es de <b>%1\$s segundos</b>";
$net2ftp_messages["The FTP transfer mode (ASCII or BINARY) will be automatically determined, based on the filename extension"] = "El modo de transferencia FTP (ASCII or BINARY) sera elegido automaticamente, basandose en la extencion del archivo";
$net2ftp_messages["If the destination file already exists, it will be overwritten"] = "Si el archivo ya existe, sera sobreescrito";

} // end upload or jupload


// -------------------------------------------------------------------------
// View module
if ($net2ftp_globals["state"] == "view") {
// -------------------------------------------------------------------------

// /modules/view/view.inc.php
$net2ftp_messages["View file %1\$s"] = "Ver archivo %1\$s";
$net2ftp_messages["View image %1\$s"] = "Ver imagen %1\$s";
$net2ftp_messages["View Macromedia ShockWave Flash movie %1\$s"] = "Ver pelicula flash de tipo Macromedia ShockWave %1\$s";
$net2ftp_messages["Image"] = "Image";

// /skins/[skin]/view1.template.php
$net2ftp_messages["Syntax highlighting powered by <a href=\"http://luminous.asgaard.co.uk\">Luminous</a>"] = "Syntax highlighting powered by <a href=\"http://luminous.asgaard.co.uk\">Luminous</a>";
$net2ftp_messages["To save the image, right-click on it and choose 'Save picture as...'"] = "Para guardar la imagen, click-derecho y escoge 'guardar como...'";

} // end view


// -------------------------------------------------------------------------
// Zip module
if ($net2ftp_globals["state"] == "zip") {
// -------------------------------------------------------------------------

// /modules/zip/zip.inc.php
$net2ftp_messages["Zip entries"] = "Archivos comprimidos";

// /skins/[skin]/zip1.template.php
$net2ftp_messages["Save the zip file on the FTP server as:"] = "Salvar el archivo comprimido en el servidor como:";
$net2ftp_messages["Email the zip file in attachment to:"] = "Enviar el archivo comprimido por correo electronico a:";
$net2ftp_messages["Note that sending files is not anonymous: your IP address as well as the time of the sending will be added to the email."] = "Enviar archivos de esta manera no es an�nimo: Tu direcci�n IP y la hora de envi� ser�n visibles en el correo electr�nico.";
$net2ftp_messages["Some additional comments to add in the email:"] = "Comentarios adicionales:";

$net2ftp_messages["You did not enter a filename for the zipfile. Go back and enter a filename."] = "No especificaste un nombre para el archivo comprimido. Por favor vuelve y especifica un nombre.";
$net2ftp_messages["The email address you have entered (%1\$s) does not seem to be valid.<br />Please enter an address in the format <b>username@domain.com</b>"] = "La direccion de correo electronico (%1\$s) no es valida.<br />Porfavor especifica una direccion con el formato <b>usuario@dominio.com</b>";

} // end zip

?>