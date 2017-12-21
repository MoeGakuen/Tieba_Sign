<?php

//   -------------------------------------------------------------------------------
//  |                  net2ftp: a web based FTP client                              |
//  |              Copyright (c) 2003-2017 by David Gartner                         |
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
//  |     $messages[...] = ["Le fichier %1\$s a été copié vers %2\$s "]             |
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
$net2ftp_messages["en"] = "de";

// HTML dir attribute: left-to-right (LTR) or right-to-left (RTL)
$net2ftp_messages["ltr"] = "ltr";

// CSS style: align left or right (use in combination with LTR or RTL)
$net2ftp_messages["left"] = "left";
$net2ftp_messages["right"] = "right";

// Encoding
$net2ftp_messages["iso-8859-1"] = "iso-8859-1";

// -------------------------------------------------------------------------
// Messages
// -------------------------------------------------------------------------

$net2ftp_messages["%1\$s File"] = "%1\$s Datei";
$net2ftp_messages["(Note: This link may not work if you don't have your own domain name.)"] = "(Achtung: Dieser Link wird nicht funktionieren, wenn Sie keinen eigene Dom&auml;ne haben.)";
$net2ftp_messages["<b>%1\$s</b> could not be renamed to <b>%2\$s</b>"] = "<b>%1\$s</b> konnte nicht in <b>%2\$s</b> umbenannt werden";
$net2ftp_messages["<b>%1\$s</b> was successfully renamed to <b>%2\$s</b>"] = "<b>%1\$s</b> wurde erfolgreich umbenannt in <b>%2\$s</b>";
$net2ftp_messages["ARC archive"] = "ARC Archiv";
$net2ftp_messages["ARJ archive"] = "ARJ Archiv";
$net2ftp_messages["ASP script"] = "ASP Skript";
$net2ftp_messages["Action"] = "Aktion";
$net2ftp_messages["Actions"] = "Aktionen";
$net2ftp_messages["Add another"] = "Weitere hinzuf&uuml;gen";
$net2ftp_messages["Admin functions"] = "Administrationsfunktionen";
$net2ftp_messages["Adobe Acrobat document"] = "Adobe Acrobat Dokument";
$net2ftp_messages["Advanced"] = "Erweitert";
$net2ftp_messages["Advanced FTP functions"] = "Erweiterte FTP Funktionen";
$net2ftp_messages["Advanced functions"] = "Erweiterte Funktionen";
$net2ftp_messages["Advanced login"] = "Advanced login";
$net2ftp_messages["All"] = "Alle";
$net2ftp_messages["All the selected directories and files have been processed."] = "Alle ausgew&auml;hlten Verzeichnisse und Dateien wurden verarbeitet.";
$net2ftp_messages["All the subdirectories and files of the selected directories will also be deleted!"] = "Alle Unterordner und Dateien der ausgew&auml;hlten Verzeichnisse werden ebenfalls gel&ouml;scht!";
$net2ftp_messages["Alternatively, use net2ftp's normal upload or upload-and-unzip functionality."] = "Alternativ k&ouml;nnen Sie auch die normale Upload oder Flash-Upload (erfordert das Flash-Plugin) Funktion nutzen.";
$net2ftp_messages["An error has occured"] = "Ein Fehler ist aufgetreten";
$net2ftp_messages["Anonymous"] = "Anonym";
$net2ftp_messages["Archive <b>%1\$s</b> was not processed because its filename extension was not recognized. Only zip, tar, tgz and gz archives are supported at the moment."] = "Archiv <b>%1\$s</b> wurde nicht verarbeitet, das Format ist unbekannt. Zur Zeit unterst&uuml;tzte Archiv-Formate: zip, tar, tgz (tar-gzip), gz (gzip).";
$net2ftp_messages["Archive contains filenames with ../ or ..\\ - aborting the extraction"] = "Das Archiv enth&auml;lt Dateinamen mit ../ oder ..\\ - auspacken abgebrochen";
$net2ftp_messages["Archives"] = "Archives";
$net2ftp_messages["Archives entered here will be decompressed, and the files inside will be transferred to the FTP server."] = "Hier angegebene Archive werden dekomprimiert und die Dateien werden an den FTP Server &uuml;bermittelt.";
$net2ftp_messages["Are you sure you want to delete these directories and files?"] = "Sind Sie sicher, dass Sie diese Dateien und Verzeichnisse l&ouml;schen wollen?";
$net2ftp_messages["Ascending order"] = "Aufsteigend";
$net2ftp_messages["Automatic"] = "Automatisch";
$net2ftp_messages["Back"] = "Zur&uuml;ck";
$net2ftp_messages["Basic FTP login"] = "Basic FTP login";
$net2ftp_messages["Basic SSH login"] = "Basic SSH login";
$net2ftp_messages["Bitmap file"] = "Bitmap Datei";
$net2ftp_messages["Bookmark"] = "Lesezeichen";
$net2ftp_messages["Calculate the size of the selected entries"] = "Kalkulieren der Gr&ouml;&szlig;e ausgew&auml;hlter Eintr&auml;ge";
$net2ftp_messages["Cascading Style Sheet"] = "Cascading Style Sheet";
$net2ftp_messages["Case sensitive search"] = "Gro&szlig;- und Kleinschreibung bei Suche beachten";
$net2ftp_messages["Changing the directory"] = "Wechsle das Verzeichnis";
$net2ftp_messages["Changing to the directory %1\$s: "] = "Wechseln in das Verzeichniss %1\$s: ";
$net2ftp_messages["Character encoding: "] = "Character encoding: ";
$net2ftp_messages["Check the SSH server's public key fingerprint"] = "Check the SSH server's public key fingerprint";
$net2ftp_messages["Checking files"] = "Verarbeiten der Dateien";
$net2ftp_messages["Checking if the FTP module of PHP is installed: "] = "&Uuml;berpr&uuml;fen ob das FTP Modul von PHP installiert ist";
$net2ftp_messages["Checking the permissions of the directory on the web server: a small file will be written to the /temp folder and then deleted."] = "&Uuml;berpr&uuml;fung der Berechtigungen des Verzeichnisses auf dem Webserver: eine kleine Datei wird in den /temp Ordner geschrieben und anschlie&szlig;end gel&ouml;scht.";
$net2ftp_messages["Chmod"] = "Zugriffsrechte";
$net2ftp_messages["Chmod also the files within this directory"] = "Zugriffsrechte auch f&uuml;r Dateien in diesem Ordner setzen";
$net2ftp_messages["Chmod also the subdirectories within this directory"] = "Zugriffsrechte auch in Unterordnern dieses Ordners setzen";
$net2ftp_messages["Chmod directories and files"] = "Berechtigungen von Ordnern und Dateien &auml;ndern";
$net2ftp_messages["Chmod the selected entries (only works on Unix/Linux/BSD servers)"] = "Zugriffsrechte der ausgew&auml;hlten Eintr&auml;ge &auml;ndern (funktioniert nur auf Unix/Linux/BSD Servern)";
$net2ftp_messages["Choose"] = "Auswahl";
$net2ftp_messages["Choose a directory"] = "Verzeichniss ausw&auml;hlen";
$net2ftp_messages["Click to sort by %1\$s in ascending order"] = "Aufsteigend nach %1\$s sortieren";
$net2ftp_messages["Click to sort by %1\$s in descending order"] = "Absteigend nach %1\$s sortieren";
$net2ftp_messages["Closing the file: "] = "Schlie&szlig;en der Datei: ";
$net2ftp_messages["Connecting to a test FTP server: "] = "Connecting to a test FTP server: ";
$net2ftp_messages["Connecting to the FTP server"] = "Verbindung zum FTP-Server wird hergestellt";
$net2ftp_messages["Connecting to the FTP server: "] = "Verbinden mit dem FTP Server: ";
$net2ftp_messages["Connection settings:"] = "Verbindungseigenschaften:";
$net2ftp_messages["Continue"] = "Fortsetzen";
$net2ftp_messages["Copied file %1\$s"] = "Datei %1\$s wurde kopiert";
$net2ftp_messages["Copied file <b>%1\$s</b>"] = "Datei <b>%1\$s</b> kopiert";
$net2ftp_messages["Copy"] = "Kopieren";
$net2ftp_messages["Copy directories and files"] = "Dateien und Verzeichnisse kopieren";
$net2ftp_messages["Copy directory <b>%1\$s</b> to:"] = "Kopiere Verzeichniss <b>%1\$s</b> nach:";
$net2ftp_messages["Copy file <b>%1\$s</b> to:"] = "Kopiere Datei <b>%1\$s</b> nach:";
$net2ftp_messages["Copy symlink <b>%1\$s</b> to:"] = "Kopiere Symlink <b>%1\$s</b> nach:";
$net2ftp_messages["Copy the selected entries"] = "Kopieren der ausgew&auml;hlten Eintr&auml;ge";
$net2ftp_messages["Copying the net2ftp installer script to the FTP server"] = "Kopiere das net2ftp-Installationsskript zum FTP-Server";
$net2ftp_messages["Could not be saved"] = "Could not be saved";
$net2ftp_messages["Could not connect to SSH server"] = "Could not connect to SSH server";
$net2ftp_messages["Could not copy file %1\$s"] = "Konnte Datei %1\$s nicht kopieren";
$net2ftp_messages["Could not create directory %1\$s"] = "Konnte Verzeichnis %1\$s nicht erstellen";
$net2ftp_messages["Could not generate a temporary file."] = "Tempor&auml;re Datei kann nicht erstellt werden.";
$net2ftp_messages["Could not get fingerprint"] = "Could not get fingerprint";
$net2ftp_messages["Could not get public host key"] = "Could not get public host key";
$net2ftp_messages["Could not unzip entry %1\$s (error code %2\$s)"] = "Der Eintrag %1\$s konnte nicht entpackt werden (Fehlercode: %2\$s)";
$net2ftp_messages["Create a new file in directory %1\$s"] = "Erstellen einer neuen Datein im Ordner %1\$s";
$net2ftp_messages["Create a website easily using ready-made templates"] = "Erstellen einer neuen Webseite mir vorgefertigeten Templates";
$net2ftp_messages["Create new directories"] = "Erstellen neuer Verzeichnisse";
$net2ftp_messages["Create the MySQL database tables"] = "Anlegen der MySQL-Datenbanktabellen";
$net2ftp_messages["Created directory %1\$s"] = "Verzeichnis %1\$s wurde erstellt";
$net2ftp_messages["Created target subdirectory <b>%1\$s</b>"] = "Zielunterverzeichnis <b>%1\$s</b> erstellt";
$net2ftp_messages["Creating a temporary directory on the FTP server"] = "Erzeuge ein tempor&auml;res Verzeichnis auf dem FTP-Server";
$net2ftp_messages["Creating filename: "] = "Dateiname wird erstellt: ";
$net2ftp_messages["Daily limit reached: the file <b>%1\$s</b> will not be transferred"] = "Tages-Beschr&auml;nkung erreicht: die Datei <b>%1\$s</b> wird nicht transferiert";
$net2ftp_messages["Daily limit reached: you will not be able to transfer data"] = "Tages-Beschr&auml;nkung erreicht: Sie k&ouml;nnen keine Daten mehr transferieren.";
$net2ftp_messages["Data transferred from this IP address today"] = "Heute &uuml;bertragene Daten von IP-Adresse";
$net2ftp_messages["Data transferred to this FTP server today"] = "Heute &uuml;bertragene Daten vom FTP-Server";
$net2ftp_messages["Date from:"] = "Datum ab:";
$net2ftp_messages["Dear,"] = "Sehr geehrte(r),";
$net2ftp_messages["Decompressing archives and transferring files"] = "Archive werden entpackt und die Dateien transferiert";
$net2ftp_messages["Default"] = "Standard";
$net2ftp_messages["Delete"] = "L&ouml;schen";
$net2ftp_messages["Delete directories and files"] = "Dateien und Verzeichnisse l&ouml;schen";
$net2ftp_messages["Delete the selected entries"] = "L&ouml;schen der ausgew&auml;hlten Eintr&auml;ge";
$net2ftp_messages["Deleted file <b>%1\$s</b>"] = "Gel&ouml;schte Datei <b>%1\$s</b>";
$net2ftp_messages["Deleted subdirectory <b>%1\$s</b>"] = "Verzeichniss <b>%1\$s</b> gel&ouml;scht";
$net2ftp_messages["Deleting the file: "] = "L&ouml;schen der Datei: ";
$net2ftp_messages["Descending order"] = "Absteigend";
$net2ftp_messages["Details"] = "Details";
$net2ftp_messages["Different target FTP server:"] = "Anderer Ziel FTP Server:";
$net2ftp_messages["Directories"] = "Ordner";
$net2ftp_messages["Directories with names containing \' cannot be displayed correctly. They can only be deleted. Please go back and select another subdirectory."] = "Verzeichnisse, die  \' enthalten, k&ouml;nnen nicht korrekt dargestellt werden. Diese k&ouml;nnen nur gel&ouml;scht werden. Bitte gehen Sie zur&uuml;ck und w&auml;hlen Sie ein anderes Verzeichniss.";
$net2ftp_messages["Directory"] = "Verzeichnis";
$net2ftp_messages["Directory <b>%1\$s</b>"] = "Verzeichniss <b>%1\$s</b>";
$net2ftp_messages["Directory <b>%1\$s</b> could not be created."] = "Verzeichnis <b>%1\$s</b> kann nicht erstellt werden.";
$net2ftp_messages["Directory <b>%1\$s</b> successfully chmodded to <b>%2\$s</b>"] = "Zugriffsrechte des Verzeichnisses <b>%1\$s</b> erfolgreich in <b>%2\$s</b> ge&auml;ndert";
$net2ftp_messages["Directory <b>%1\$s</b> was successfully created."] = "Verzeichnis <b>%1\$s</b> wurde erfolgreich angelegt.";
$net2ftp_messages["Directory Tree"] = "Verzeichnissbaum";
$net2ftp_messages["Disabled"] = "Disabled";
$net2ftp_messages["Double-click to go to a subdirectory:"] = "Doppleklick um in ein Unterverzeichniss zu wechseln:";
$net2ftp_messages["Download"] = "Download";
$net2ftp_messages["Download a zip file containing all selected entries"] = "Download eine ZIP Datei mit allen ausgew&auml;hlten Elementen";
$net2ftp_messages["Download the file %1\$s"] = "Datei %1\$s herunterladen";
$net2ftp_messages["Drag and drop one of the links below to the bookmarks bar"] = "Klicken und ziehen Sie einen der Links in Ihre Lesezeichen- oder Favoritenleiste";
$net2ftp_messages["Due to technical problems the email to <b>%1\$s</b> could not be sent."] = "Aus technischen Gr&uuml;nden konnte die EMail an <b>%1\$s</b> nicht versendet werden.";
$net2ftp_messages["Edit"] = "Bearbeiten";
$net2ftp_messages["Edit the source code of file %1\$s"] = "Den Quellcode der Datei %1\$s bearbeiten";
$net2ftp_messages["Email the zip file in attachment to:"] = "ZIP-Archiv im E-Mail-Anhang versenden an:";
$net2ftp_messages["Empty logs"] = "L&ouml;schen";
$net2ftp_messages["Enter the FTP server port (21 for FTP, 22 for FTP SSH or 990 for FTP SSL) - if you're not sure leave it to 21"] = "Enter the FTP server port (21 for FTP, 22 for FTP SSH or 990 for FTP SSL) - if you're not sure leave it to 21";
$net2ftp_messages["Enter your password"] = "Enter your password";
$net2ftp_messages["Enter your username"] = "Enter your username";
$net2ftp_messages["Entries which contain banned keywords can't be managed using net2ftp. This is to avoid Paypal or Ebay scams from being uploaded through net2ftp."] = "Eintr&auml;ge mit verbotenen Schl&uuml;sselw&ouml;rtern k&ouml;nnen nicht mit net2ftp verwaltet werden. Dies dient dazu, um zu verhindern, dass Paypal or Ebay scams mit net2ftp hochgeladen werden.";
$net2ftp_messages["Example"] = "Beispiel";
$net2ftp_messages["Executable"] = "Ausf&uuml;hrbare Datei";
$net2ftp_messages["Execute %1\$s in a new window"] = "In einem neuen Fenster %1\$s ausf&uuml;hren";
$net2ftp_messages["FTP mode"] = "FTP-Modus";
$net2ftp_messages["FTP server"] = "FTP Server";
$net2ftp_messages["FTP server port"] = "FTP Server Port";
$net2ftp_messages["FTP server response:"] = "Antwort vom FTP-Server:";
$net2ftp_messages["File"] = "Datei";
$net2ftp_messages["File <b>%1\$s</b>"] = "File <b>%1\$s</b>";
$net2ftp_messages["File <b>%1\$s</b> could not be moved"] = "Datei <b>%1\$s</b> konnte nicht verschoben werden";
$net2ftp_messages["File <b>%1\$s</b> could not be transferred to the FTP server"] = "Datei <b>%1\$s</b> konnte nicht auf den FTP-Server geladen werden";
$net2ftp_messages["File <b>%1\$s</b> has been transferred to the FTP server using FTP mode <b>%2\$s</b>"] = "Datei <b>%1\$s</b> wurde erfolgreich auf den FTP-Server im Modus <b>%2\$s</b> &uuml;bertragen";
$net2ftp_messages["File <b>%1\$s</b> is OK"] = "Datei <b>%1\$s</b> ist OK";
$net2ftp_messages["File <b>%1\$s</b> is contains a banned keyword. This file will not be uploaded."] = "Die Datei <b>%1\$s</b> enth&auml;lt ein verbotenes Schl&uuml;sselwort. Die Datei wird nicht hochgeladen.";
$net2ftp_messages["File <b>%1\$s</b> is too big. This file will not be uploaded."] = "Datei <b>%1\$s</b> ist zu gro&szlig;. Diese Datei wird nicht hochgeladen.";
$net2ftp_messages["File <b>%1\$s</b> was successfully chmodded to <b>%2\$s</b>"] = "Zugriffsrechte der Datei <b>%1\$s</b> erfolgreich in <b>%2\$s</b> ge&auml;ndert";
$net2ftp_messages["File: "] = "Datei: ";
$net2ftp_messages["Files"] = "Dateien";
$net2ftp_messages["Files entered here will be transferred to the FTP server."] = "Hier angegebene Dateien werden zum FTP Server &uuml;bertragen.";
$net2ftp_messages["Files which are too big can't be downloaded, uploaded, copied, moved, searched, zipped, unzipped, viewed or edited; they can only be renamed, chmodded or deleted."] = "Dateien, die zu gro&szlig; sind, k&ouml;nnen nicht herunterladen, hochgeladen, kopiert, verschoben, gesucht, gepackt, entpackt, betrachtet oder bearbeitet werden; sie k&ouml;nnen nur umbenannt, gel&ouml;scht oder die Zugriffsrechte ge&auml;ndert werden.";
$net2ftp_messages["Find files which contain a particular word"] = "Suchen nach Dateien mit einem bestimmten Wort im Text";
$net2ftp_messages["Fingerprint"] = "Fingerprint";
$net2ftp_messages["Follow symlink %1\$s"] = "Folge Alias/Symlink %1\$s";
$net2ftp_messages["Font file"] = "Font Datei";
$net2ftp_messages["Forums"] = "Foren";
$net2ftp_messages["GIF file"] = "GIF Datei";
$net2ftp_messages["GIMP file"] = "GIMP Datei";
$net2ftp_messages["GZ archive"] = "GZ Archiv";
$net2ftp_messages["Get fingerprint"] = "Get fingerprint";
$net2ftp_messages["Get the SSH server's public key fingerprint before logging in to verify the server's identity"] = "Get the SSH server's public key fingerprint before logging in to verify the server's identity";
$net2ftp_messages["Getting archive %1\$s of %2\$s from the FTP server"] = "&Uuml;bertrage Archiv %1\$s von %2\$s vom FTP-Server";
$net2ftp_messages["Getting fingerprint, please wait..."] = "Getting fingerprint, please wait...";
$net2ftp_messages["Getting the FTP server system type: "] = "Pr&uuml;fe Systemtyp des FTP-Servers: ";
$net2ftp_messages["Getting the FTP system type"] = "Erfrage den FTP-Systemtyp";
$net2ftp_messages["Getting the current directory"] = "Aktuelles Verzeichnis wird geladen";
$net2ftp_messages["Getting the list of directories and files"] = "Ordner- und Dateiliste wird empfangen";
$net2ftp_messages["Getting the raw list of directories and files: "] = "Empfang einer Rohliste der Dateien und Ordnern: ";
$net2ftp_messages["Go"] = "Weiter";
$net2ftp_messages["Go back"] = "Zur&uuml;ck";
$net2ftp_messages["Go to the advanced functions"] = "Wechseln zu erweiterten Funktionen";
$net2ftp_messages["Go to the login page"] = "Zur&uuml;ck zur Anmeldeseite";
$net2ftp_messages["Go to the parent directory"] = "&Uuml;bergeordneter Ordner";
$net2ftp_messages["Go to the subdirectory %1\$s"] = "Gehe zum Unterverzeichnis %1\$s";
$net2ftp_messages["Group"] = "Gruppe";
$net2ftp_messages["HTML file"] = "HTML Datei";
$net2ftp_messages["HTML templates"] = "HTML templates";
$net2ftp_messages["Help"] = "Hilfe";
$net2ftp_messages["Help Guide"] = "Hilfe/Anleitung";
$net2ftp_messages["IP address: "] = "IP Addresse: ";
$net2ftp_messages["Icons"] = "Icons";
$net2ftp_messages["If the destination file already exists, it will be overwritten"] = "Wenn die Zieldatei bereits existiert wird sie &uuml;berschrieben";
$net2ftp_messages["If you know nothing about this or if you don't trust that person, please delete this email without opening the Zip file in attachment."] = "Wenn Sie nichts davon wissen oder der Person nicht trauen, l&ouml;schen Sie bitte diese E-Mail und den Anhang, ohne Sie zu &ouml;ffnen.";
$net2ftp_messages["If you need unlimited usage, please install net2ftp on your own web server."] = "Wenn Sie unbeschr&auml;nkten Zugang ben&ouml;tigen, installieren Sie net2ftp bitte auf Ihrem eigenen Webserver.";
$net2ftp_messages["If you really need net2ftp to be able to handle big tasks which take a long time, consider installing net2ftp on your own server."] = "Sollten Sie net2ftp ben&ouml;tigen, um gr&ouml;&szlig;ere Arbeitsauftr&auml;ge auszuf&uuml;hren, k&ouml;nnen Sie net2ftp auf Ihrem eigenen Webserver installieren.";
$net2ftp_messages["If you want to copy the files to another FTP server, enter your login data."] = "Um Dateien auf einen anderen FTP-Server zu &uuml;bertragen, geben Sie Ihre Login-Daten ein.";
$net2ftp_messages["Image"] = "Bild";
$net2ftp_messages["In order to guarantee the fair use of the web server for everyone, the data transfer volume and script execution time are limited per user, and per day. Once this limit is reached, you can still browse the FTP server but not transfer data to/from it."] = "Um die faire Nutzung des Webservers f&uuml;r alle Nutzer zu gew&aumlhrleisten, ist das Transfervolumen und die Laufzeit von Skripten pro Nutzer und Tag beschr&auml;nkt. Wird die Beschr&auml;nkung erreicht, k&ouml;nnen Sie immernoch den FTP Server durchsuchen, allerdings k&ouml;nnen keine Daten mehr hoch- oder runtergeladen werden.";
$net2ftp_messages["In order to run it, click on the link below."] = "Um es laufen zu lassen, klicken Sie auf den Link unten.";
$net2ftp_messages["Information about the sender: "] = "Informationen &uuml;ber den Absender: ";
$net2ftp_messages["Initial directory"] = "Anfangsverzeichniss";
$net2ftp_messages["Install"] = "Install";
$net2ftp_messages["Install software packages"] = "Installiere Software Pakete";
$net2ftp_messages["Install software packages (requires PHP on web server)"] = "Installieren von Software-Paketen (ben&ouml;tigt PHP auf dem Webserver)";
$net2ftp_messages["JPEG file"] = "JPEG Datei";
$net2ftp_messages["Java Upload"] = "Java Upload";
$net2ftp_messages["Java source file"] = "Java source Datei";
$net2ftp_messages["JavaScript file"] = "JavaScript Datei";
$net2ftp_messages["Language:"] = "Sprache:";
$net2ftp_messages["Leave empty if you want to copy the files to the same FTP server."] = "Leer lassen, um Dateien auf den gleichen FTP Server zu &uuml;bertragen";
$net2ftp_messages["License"] = "Lizenz";
$net2ftp_messages["Line"] = "Line";
$net2ftp_messages["List"] = "List";
$net2ftp_messages["List of commands:"] = "Liste der Befehle:";
$net2ftp_messages["Logging"] = "Logging";
$net2ftp_messages["Logging into the FTP server"] = "Einloggen beim FTP-Server";
$net2ftp_messages["Logging into the FTP server: "] = "Anmelden am FTP Server: ";
$net2ftp_messages["Logging out of the FTP server"] = "Verbindung wird getrennt";
$net2ftp_messages["Login"] = "Anmeldung";
$net2ftp_messages["Login!"] = "Login!";
$net2ftp_messages["Logout"] = "Abmelden";
$net2ftp_messages["MOV movie file"] = "MOV Videodatei";
$net2ftp_messages["MPEG movie file"] = "MPEG Videodatei";
$net2ftp_messages["MS Office - Access database"] = "MS Office - Access Datenbank";
$net2ftp_messages["MS Office - Excel spreadsheet"] = "MS Office - Excel Tabellendokument";
$net2ftp_messages["MS Office - PowerPoint presentation"] = "MS Office - PowerPoint Pr&auml;sentation";
$net2ftp_messages["MS Office - Project file"] = "MS Office - Project Datei";
$net2ftp_messages["MS Office - Visio drawing"] = "MS Office - Visio Zeichnung";
$net2ftp_messages["MS Office - Word document"] = "MS Office - Word Dokument";
$net2ftp_messages["Make a new subdirectory in directory %1\$s"] = "Erstellen eines neuen Unterverzeichnisses im Ordner %1\$s";
$net2ftp_messages["Message of the sender: "] = "Nachricht des Absenders: ";
$net2ftp_messages["Mobile"] = "Mobile";
$net2ftp_messages["Mod Time"] = "&Auml;nderungs-Datum/Zeit";
$net2ftp_messages["Move"] = "Verschieben";
$net2ftp_messages["Move directories and files"] = "Dateien und Verzeichnisse verschieben";
$net2ftp_messages["Move directory <b>%1\$s</b> to:"] = "Verschiebe Verzeichniss <b>%1\$s</b> nach:";
$net2ftp_messages["Move file <b>%1\$s</b> to:"] = "Verschiebe Datei <b>%1\$s</b> nach:";
$net2ftp_messages["Move symlink <b>%1\$s</b> to:"] = "Verschiebe Symlink <b>%1\$s</b> nach:";
$net2ftp_messages["Move the selected entries"] = "Verschieben der ausgew&auml;hlten Eintr&auml;ge";
$net2ftp_messages["Moved directory <b>%1\$s</b>"] = "Verzeichnis <b>%1\$s</b> wurde verschoben";
$net2ftp_messages["Moved file <b>%1\$s</b>"] = "Datei <b>%1\$s</b> verschoben";
$net2ftp_messages["MySQL database"] = "MySQL Datenbankname";
$net2ftp_messages["MySQL password"] = "MySQL Kennwort";
$net2ftp_messages["MySQL password length"] = "MySQL Kennwortl&auml;nge";
$net2ftp_messages["MySQL server"] = "MySQL Server";
$net2ftp_messages["MySQL username"] = "MySQL Benutzername";
$net2ftp_messages["Name"] = "Name";
$net2ftp_messages["New dir"] = "Neuer Ordner";
$net2ftp_messages["New directory name:"] = "Neuer Verzeichnisname:";
$net2ftp_messages["New file"] = "Neue Text-Datei";
$net2ftp_messages["New file name: "] = "Dateiname: ";
$net2ftp_messages["New name: "] = "Neuer Name: ";
$net2ftp_messages["No data"] = "Keine Daten";
$net2ftp_messages["Not yet saved"] = "Not yet saved";
$net2ftp_messages["Note that if you don't open the Zip file, the files inside cannot harm your computer."] = "Beachten Sie bitte, dass die Dateien im Anhang Ihrem Computer nicht schaden k&ouml;nnen, wenn Sie die Datei nicht &ouml;ffnen.";
$net2ftp_messages["Note that sending files is not anonymous: your IP address as well as the time of the sending will be added to the email."] = "Hinweis: Das Versenden von Dateien ist nicht anonym: Ihre IP-Addresse und die aktuelle Zeit werden an die E-Mail angeh&auml;ngt.";
$net2ftp_messages["Note: other users of this computer could click on the browser's Back button and access the FTP server."] = "Achtung: Andere Benutzer dieses Computers k&ouml;nnen &uuml;ber den Zur&uuml;ck-Button Ihres Browsers auf Ihren FTP-Server zugreifen!";
$net2ftp_messages["Note: the target directory must already exist before anything can be copied into it."] = "Hinweis: der Zielordner muss bereits existieren, bevor Dateien hineinkopiert werden k&ouml;nnen.";
$net2ftp_messages["Note: when you will use this bookmark, a popup window will ask you for your username and password."] = "Achtung: Wenn Sie dieses Lesezeichen benutzen, werden Sie in einem Popup Fenster nach dem Usernamen und Passwort gefragt.";
$net2ftp_messages["OK"] = "OK";
$net2ftp_messages["OK. Filename: %1\$s"] = "OK. Dateiname: %tempfilename";
$net2ftp_messages["Old name: "] = "Alter Name: ";
$net2ftp_messages["One click access (net2ftp won't ask for a password - less safe)"] = "1-Klick Zugang (net2ftp fragt nicht nach Ihrem Passwort - unsicher)";
$net2ftp_messages["Open"] = "&Ouml;ffnen";
$net2ftp_messages["OpenOffice - Calc 6.0 spreadsheet"] = "OpenOffice - Calc 6.0 Tabellemndokument";
$net2ftp_messages["OpenOffice - Calc 6.0 template"] = "OpenOffice - Calc 6.0 Vorlage";
$net2ftp_messages["OpenOffice - Draw 6.0 document"] = "OpenOffice - Draw 6.0 Dokument";
$net2ftp_messages["OpenOffice - Draw 6.0 template"] = "OpenOffice - Draw 6.0 Vorlage";
$net2ftp_messages["OpenOffice - Impress 6.0 presentation"] = "OpenOffice - Impress 6.0 Pr&auml;sentation";
$net2ftp_messages["OpenOffice - Impress 6.0 template"] = "OpenOffice - Impress 6.0 Vorlage";
$net2ftp_messages["OpenOffice - Math 6.0 document"] = "OpenOffice - Math 6.0 Dokument";
$net2ftp_messages["OpenOffice - Writer 6.0 document"] = "OpenOffice - Writer 6.0 Dokument";
$net2ftp_messages["OpenOffice - Writer 6.0 global document"] = "OpenOffice - Writer 6.0 Globaldokument";
$net2ftp_messages["OpenOffice - Writer 6.0 template"] = "OpenOffice - Writer 6.0 Vorlage";
$net2ftp_messages["Opening the file in write mode: "] = "&Ouml;ffnen der Datei im Schreib-Modus: ";
$net2ftp_messages["Owner"] = "Besitzer";
$net2ftp_messages["PHP Source"] = "PHP Source";
$net2ftp_messages["PHP script"] = "PHP Skript";
$net2ftp_messages["PNG file"] = "PNG Datei";
$net2ftp_messages["Parsing the file"] = "Gliederung der Datei";
$net2ftp_messages["Parsing the list of directories and files"] = "Gliedere die Liste der Verzeichnisse und Dateien";
$net2ftp_messages["Passive mode"] = "Passiver Modus";
$net2ftp_messages["Password"] = "Passwort";
$net2ftp_messages["Password length"] = "Passwortl&auml;nge";
$net2ftp_messages["Perms"] = "Berechtigungen";
$net2ftp_messages["Please enter a password."] = "Please enter a password.";
$net2ftp_messages["Please enter a username."] = "Please enter a username.";
$net2ftp_messages["Please enter a valid date in Y-m-d format in the \"from\" textbox."] = "Bitte geben Sie ein g&uuml;ltiges Datum in der Form J-m-t in das \"von\" Textfeld ein.";
$net2ftp_messages["Please enter a valid date in Y-m-d format in the \"to\" textbox."] = "Bitte geben Sie ein g&uuml;ltiges Datum in der Form J-m-t in das \"bis\" Textfeld ein.";
$net2ftp_messages["Please enter a valid file size in the \"from\" textbox, for example 0."] = "Bitte geben Sie eine g&uuml;ltige Dateigr&ouml;&szlig;e im \"von\" Textfeld ein, zum Beispiel 0.";
$net2ftp_messages["Please enter a valid file size in the \"to\" textbox, for example 500000."] = "Bitte geben Sie eine g&uuml;ltige Dateigr&ouml;&szlig;e im \"bis\" Textfeld ein, zum Beispiel 500000.";
$net2ftp_messages["Please enter a valid filename."] = "Bitte geben Sie einen g&uuml;ltigen Dateinamen an.";
$net2ftp_messages["Please enter a valid search word or phrase."] = "Bitte geben Sie ein g&uuml;ltiges Suchwort oder Satzteil ein.";
$net2ftp_messages["Please enter an FTP server."] = "Please enter an FTP server.";
$net2ftp_messages["Please enter your Administrator username and password."] = "Bitte geben Sie den Administrator-Benutzernamen und Passwort ein.";
$net2ftp_messages["Please enter your MySQL settings:"] = "Bitte geben Sie Ihre MySQL-Einstellungen ein:";
$net2ftp_messages["Please enter your username and password for FTP server <b>%1\$s</b>."] = "Bitte geben Sie den Benutzernamen und das Passwort f&uuml;r den FTP-Server <b>%1\$s</b> ein.";
$net2ftp_messages["Please specify a filename"] = "Bitte geben Sie einen Dateinamen an";
$net2ftp_messages["Please wait..."] = "Bitte warten...";
$net2ftp_messages["Powered by"] = "Powered by";
$net2ftp_messages["Printing the list of directories and files"] = "Ordner- und Dateiliste wird erstellt";
$net2ftp_messages["Printing the result"] = "Drucke das Ergebnis";
$net2ftp_messages["Processing archive nr %1\$s: <b>%2\$s</b>"] = "Verarbeitung von Archiv Nr. %1\$s: <b>%2\$s</b>";
$net2ftp_messages["Processing directory <b>%1\$s</b>"] = "Verarbeiten des Ordners <b>%1\$s</b>";
$net2ftp_messages["Processing entries within directory <b>%1\$s</b>:"] = "Verabeiten der Eintr&auml;ge im Verzeichnis <b>%1\$s</b>:";
$net2ftp_messages["Processing entry %1\$s"] = "Verarbeite Eintrag %1\$s";
$net2ftp_messages["Processing of directory <b>%1\$s</b> completed"] = "Verarbeitung des Verzeichnisses <b>%1\$s</b> beendet";
$net2ftp_messages["Processing the entries"] = "Verarbeiten der Eintr&auml;ge";
$net2ftp_messages["Protocol"] = "Protocol";
$net2ftp_messages["Quicktime movie file"] = "Quicktime Datei";
$net2ftp_messages["RPM"] = "RPM";
$net2ftp_messages["Reading the file"] = "Lesen der Datei";
$net2ftp_messages["Real movie file"] = "Real Videodatei";
$net2ftp_messages["Refresh"] = "Aktualisieren";
$net2ftp_messages["Rename"] = "Umbenennen";
$net2ftp_messages["Rename directories and files"] = "Umbenennen von Ordnern und Dateien";
$net2ftp_messages["Rename the selected entries"] = "Umbenennen der ausgew&auml;hlten Eintr&auml;ge";
$net2ftp_messages["Requested files"] = "Angeforderte Dateien";
$net2ftp_messages["Restrict the search to:"] = "Einschr&auml;nken der Suche nach:";
$net2ftp_messages["Restrictions:"] = "Einschr&auml;nkungen:";
$net2ftp_messages["Results:"] = "Ergebnisse:";
$net2ftp_messages["Right-click on one of the links below and choose \"Add to Favorites...\""] = "Rechtsklick auf einen der Links und \"Zu Favoriten hinzuf&uuml;gen ...\" ausw&auml;hlen";
$net2ftp_messages["Right-click on one of the links below and choose \"Bookmark This Link...\""] = "Rechtsklick auf einen der Links und \"Lesezeichen f&uuml;r diesen Link hinzuf&uuml;gen...\" ausw&auml;hlen";
$net2ftp_messages["Right-click on one of the links below and choose \"Bookmark link...\""] = "Rechtsklick auf einen der Links und \"Bookmark link...\" ausw&auml;hlen";
$net2ftp_messages["Right-click on one the links below and choose \"Add Link to Bookmarks...\""] = "Rechtsklick auf einen der Links und \"Add Link to Bookmarks...\" ausw&auml;hlen";
$net2ftp_messages["SSH fingerprint"] = "SSH fingerprint";
$net2ftp_messages["SSH server"] = "SSH server";
$net2ftp_messages["Save"] = "Speichern";
$net2ftp_messages["Save the zip file on the FTP server as:"] = "Datei als ZIP-Datei auf dem FTP-Server speichern als:";
$net2ftp_messages["Saved at %1\$s"] = "Saved at %1\$s";
$net2ftp_messages["Script finished in %1\$s seconds"] = "Skript beendet in %1\$s Sekunden";
$net2ftp_messages["Script halted"] = "Script angehalten";
$net2ftp_messages["Search"] = "Suchen";
$net2ftp_messages["Search directories and files"] = "Suche Ordner und Dateien";
$net2ftp_messages["Search for a word or phrase"] = "Suche nach einem Wort oder Satzteil";
$net2ftp_messages["Search results"] = "Suchergebnisse";
$net2ftp_messages["Searching the files..."] = "Dateien werden gesucht...";
$net2ftp_messages["Select the directory %1\$s"] = "W&auml;hle Verzeichnis %1\$s";
$net2ftp_messages["Select the file %1\$s"] = "W&auml;hle Datei %1\$s";
$net2ftp_messages["Select the symlink %1\$s"] = "W&auml;hle das Alias/Symlink %1\$s";
$net2ftp_messages["Send arbitrary FTP commands"] = "Senden von benutzerdefinierten FTP-Befehlen";
$net2ftp_messages["Send arbitrary FTP commands to the FTP server"] = "Sende benutzerdefinierte FTP-Kommandos zum FTP-Server";
$net2ftp_messages["Sending FTP command %1\$s of %2\$s"] = "Sende FTP-Beefehl %1\$s von %2\$s";
$net2ftp_messages["Sent via the net2ftp application installed on this website: "] = "Versendet durch den net2ftp Dienst der Webseite: ";
$net2ftp_messages["Set all permissions"] = "Setzen aller Berechtigungen";
$net2ftp_messages["Set all targetdirectories"] = "Setzen als Zielverzeichniss f&uuml;r alle";
$net2ftp_messages["Set the permissions of directory <b>%1\$s</b> to: "] = "Setze Zugriffsrechte des Ordners <b>%1\$s</b> auf: ";
$net2ftp_messages["Set the permissions of file <b>%1\$s</b> to: "] = "Setze Zugriffsrechte der Datei<b>%1\$s</b> auf: ";
$net2ftp_messages["Set the permissions of symlink <b>%1\$s</b> to: "] = "Setze Zugriffsrechte des Alias/Symlinks <b>%1\$s</b> auf: ";
$net2ftp_messages["Setting the passive mode"] = "Wechsle in den Passiven Modus";
$net2ftp_messages["Setting the passive mode: "] = "Setzen des passiven Modus:";
$net2ftp_messages["Setting the permissions of the temporary directory"] = "Setze die Berechtigungen des tempor&auml;ren Verzeichnisses ";
$net2ftp_messages["Settings used:"] = "Verwendete Einstellungen:";
$net2ftp_messages["Setup MySQL tables"] = "MySQL-Tabellen einrichten";
$net2ftp_messages["Shell script"] = "Shell script";
$net2ftp_messages["Shockwave file"] = "Shockwave Datei";
$net2ftp_messages["Shockwave flash file"] = "Shockwave Flash Datei";
$net2ftp_messages["Should this link not be correct, enter the URL manually in your web browser."] = "Sollte der Link nicht korrekt sein, geben Sie URL manuell in Ihren Webbrowser ein.";
$net2ftp_messages["Size"] = "Gr&ouml;&szlig;e";
$net2ftp_messages["Size of selected directories and files"] = "Gr&ouml;&szlig;e der ausgew&auml;hlten Ordner und Dateien";
$net2ftp_messages["Skin:"] = "Skin:";
$net2ftp_messages["Some additional comments to add in the email:"] = "Weitere Kommentare an die EMail anh&auml;ngen::";
$net2ftp_messages["Someone has requested the files in attachment to be sent to this email account (%1\$s)."] = "Jemand hat veranlasst, dass diese Datei an Ihre E-Mail Adresse (%1\$s) gesendet wird.";
$net2ftp_messages["Standard"] = "Standard";
$net2ftp_messages["StarOffice - StarCalc 5.x spreadsheet"] = "StarOffice - StarCalc 5.x Tabellendokument";
$net2ftp_messages["StarOffice - StarChart 5.x document"] = "StarOffice - StarChart 5.x Dokument";
$net2ftp_messages["StarOffice - StarDraw 5.x document"] = "StarOffice - StarDraw 5.x Dokument";
$net2ftp_messages["StarOffice - StarImpress 5.x presentation"] = "StarOffice - StarImpress 5.x Pr&auml;sentation";
$net2ftp_messages["StarOffice - StarImpress Packed 5.x file"] = "StarOffice - StarImpress gepackte 5.x Datei";
$net2ftp_messages["StarOffice - StarMail 5.x mail file"] = "StarOffice - StarMail 5.x Maildatei";
$net2ftp_messages["StarOffice - StarMath 5.x document"] = "StarOffice - StarMath 5.x Dokument";
$net2ftp_messages["StarOffice - StarWriter 5.x document"] = "StarOffice - StarWriter 5.x Dokument";
$net2ftp_messages["StarOffice - StarWriter 5.x global document"] = "StarOffice - StarWriter 5.x global Dokument";
$net2ftp_messages["Status: <b>This file could not be saved</b>"] = "Status: <b>Die Datei konnte nicht gespeichert werden</b>";
$net2ftp_messages["Status: Saved on <b>%1\$s</b> using mode %2\$s"] = "Status: Speichern auf <b>%1\$s</b> im Modus %2\$s";
$net2ftp_messages["Status: This file has not yet been saved"] = "Status: Diese Datei wurde noch nicht gespeichert";
$net2ftp_messages["Submit"] = "Senden";
$net2ftp_messages["Symlink"] = "Symlink";
$net2ftp_messages["Symlink <b>%1\$s</b>"] = "Symlink <b>%1\$s</b>";
$net2ftp_messages["Symlinks"] = "Symlinks";
$net2ftp_messages["Syntax highlighting powered by <a href=\"http://luminous.asgaard.co.uk\">Luminous</a>"] = "Syntax-Hervorhebung powered by <a href=\"http://luminous.asgaard.co.uk\">Luminous</a>";
$net2ftp_messages["TAR archive"] = "TAR Archiv";
$net2ftp_messages["TIF file"] = "TIF Datei";
$net2ftp_messages["Table net2ftp_log_access contains duplicate entries."] = "Tabelle net2ftp_log_access enth&auml;lt doppelte Eintr&auml;ge.";
$net2ftp_messages["Table net2ftp_log_access could not be updated."] = "Tabelle net2ftp_log_access konnte nicht aktualisiert werden.";
$net2ftp_messages["Table net2ftp_log_consumption_ftpserver contains duplicate entries."] = "Tabelle net2ftp_log_consumption_ftpserver enth&auml;lt doppelte Eintr&auml;ge.";
$net2ftp_messages["Table net2ftp_log_consumption_ftpserver contains duplicate rows."] = "Tabelle net2ftp_log_consumption_ftpserver enth&auml;lt doppelte Eintr&auml;ge.";
$net2ftp_messages["Table net2ftp_log_consumption_ftpserver could not be updated."] = "Tabelle net2ftp_log_consumption_ftpserver konnte nicht aktualisiert werden.";
$net2ftp_messages["Table net2ftp_log_consumption_ipaddress contains duplicate entries."] = "Tabelle net2ftp_log_consumption_ipaddress enth&auml;lt doppelte Eintr&auml;ge.";
$net2ftp_messages["Table net2ftp_log_consumption_ipaddress contains duplicate rows."] = "Tabelle net2ftp_log_consumption_ipaddress enth&auml;lt doppelte Eintr&auml;ge.";
$net2ftp_messages["Table net2ftp_log_consumption_ipaddress could not be updated."] = "Tabelle net2ftp_log_consumption_ipaddress konnte nicht aktualisiert werden.";
$net2ftp_messages["Table net2ftp_log_status contains duplicate entries."] = "Die Tabelle net2ftp_log_status enth&auml;lt doppelte Eintr&auml;ge.";
$net2ftp_messages["Table net2ftp_log_status could not be updated."] = "Die Tabelle net2ftp_log_status konnte nicht aktualisiert werden.";
$net2ftp_messages["Table net2ftp_users contains duplicate rows."] = "Die Tabelle net2ftp_users enth&auml;lt doppelte Zeilen.";
$net2ftp_messages["Target directory:"] = "Ziel Verzeichniss:";
$net2ftp_messages["Target name:"] = "Ziel Name:";
$net2ftp_messages["Test the net2ftp list parsing rules"] = "Teste die net2ftp Listensatzgliederungsregeln";
$net2ftp_messages["Testing the FTP functions"] = "Testing the FTP functions";
$net2ftp_messages["Text file"] = "Text Datei";
$net2ftp_messages["The <a href=\"http://www.php.net/manual/en/ref.ftp.php\" target=\"_blank\">FTP module of PHP</a> is not installed.<br /><br /> The administrator of this website should install this FTP module. Installation instructions are given on <a href=\"http://www.php.net/manual/en/ref.ftp.php\" target=\"_blank\">php.net</a>.<br />"] = "The <a href=\"http://www.php.net/manual/en/ref.ftp.php\" target=\"_blank\">FTP module of PHP</a> is not installed.<br /><br /> The administrator of this website should install this FTP module. Installation instructions are given on <a href=\"http://www.php.net/manual/en/ref.ftp.php\" target=\"_blank\">php.net</a>.<br />";
$net2ftp_messages["The FTP module of PHP and/or OpenSSL are not installed.<br /><br /> The administrator of this website should install these. Installation instructions are given on php.net: <a href=\"http://www.php.net/manual/en/ref.ftp.php\" target=\"_blank\">FTP module installation</a> and <a href=\"http://php.net/manual/en/openssl.installation.php\">OpenSSL installation</a>.<br />"] = "The FTP module of PHP and/or OpenSSL are not installed.<br /><br /> The administrator of this website should install these. Installation instructions are given on php.net: <a href=\"http://www.php.net/manual/en/ref.ftp.php\" target=\"_blank\">FTP module installation</a> and <a href=\"http://php.net/manual/en/openssl.installation.php\">OpenSSL installation</a>.<br />";
$net2ftp_messages["The FTP server <b>%1\$s</b> is in the list of banned FTP servers."] = "Der FTP Server <b>%1\$s</b> ist in der Liste der verbotenen FTP Server.";
$net2ftp_messages["The FTP server <b>%1\$s</b> is not in the list of allowed FTP servers."] = "Der FTP Server <b>%1\$s</b> ist nicht in der Liste der erlaubten FTP Server.";
$net2ftp_messages["The FTP server port %1\$s may not be used."] = "Der FTP Server Port %1\$s darf nicht genutzt werden.";
$net2ftp_messages["The FTP transfer mode (ASCII or BINARY) will be automatically determined, based on the filename extension"] = "Der FTP Transfer Modus (ASCII oder BINARY) wird automatisch gew&auml;hlt, basierend auf der Dateierweiterung";
$net2ftp_messages["The SQL query nr <b>%1\$s</b> could not be executed."] = "Die SQL-Abfrage Nr. <b>%1\$s</b> konnte nicht ausgef&uuml;hrt werden..";
$net2ftp_messages["The SQL query nr <b>%1\$s</b> was executed successfully."] = "Die SQL-Abfrage Nr. <b>%1\$s</b> wurde erfolgreich ausgef&uuml;hrt.";
$net2ftp_messages["The SSH server's fingerprint does not match the fingerprint which was validated previously.<br /><br />Current fingerprint: %1\$s <br />Fingerprint validated previously: %2\$s <br /><br />"] = "The SSH server's fingerprint does not match the fingerprint which was validated previously.<br /><br />Current fingerprint: %1\$s <br />Fingerprint validated previously: %2\$s <br /><br />";
$net2ftp_messages["The chmod nr <b>%1\$s</b> is out of the range 000-777. Please try again."] = "Das Zugriffsrecht <b>%1\$s</b> ist nicht innerhalb des erlaubten Bereichs 000-777. Bitte versuchen Sie es erneut.";
$net2ftp_messages["The directory <b>%1\$s</b> contains a banned keyword, aborting the move"] = "Das Verzeichnis <b>%1\$s</b> enth&auml;lt ein verbotenes Schl&uuml;sselwort, Abbruch des Verschiebens";
$net2ftp_messages["The directory <b>%1\$s</b> contains a banned keyword, so this directory will be skipped"] = "Das Verzeichnis <b>%1\$s</b> enth&auml;lt ein verbotenes Schl&uuml;sselwort, dieses Verzeichnis wird &uuml;bersprungen";
$net2ftp_messages["The directory <b>%1\$s</b> could not be selected - you may not have sufficient rights to view this directory, or it may not exist."] = "Das Verzeichnis <b>%1\$s</b> kann nicht ausgew&auml;hlt werden - entweder Sie haben nicht die entsprechenden Rechte, um das Verzeichnis anzuzeigen, oder es existiert nicht.";
$net2ftp_messages["The directory <b>%1\$s</b> could not be selected, so this directory will be skipped"] = "Das Verzeichnis <b>%1\$s</b> kann nicht ausgew&auml;lt werden, dieses Verzeichnis wird &uuml;bersprungen";
$net2ftp_messages["The directory <b>%1\$s</b> does not exist or could not be selected, so the directory <b>%2\$s</b> is shown instead."] = "Das Verzeichnis <b>%1\$s</b> existiert nicht oder kann nicht ausgew&auml;hlt werden, deshalb wird das Verzeichnis <b>%2\$s</b> stattdessen angezeigt.";
$net2ftp_messages["The email address you have entered (%1\$s) does not seem to be valid.<br />Please enter an address in the format <b>username@domain.com</b>"] = "Die von Ihnen eingegebene EMail-Adresse (%1\$s) scheint ung&uuml;ltig zu sein.<br />Bitte geben Sie die Adresse in der Form <b>benutzername@domain.tld (.de,.com usw.)</b> ein";
$net2ftp_messages["The file %1\$s could not be opened."] = "Die Datei %1\$s konnte nicht ge&ouml;ffnet werden.";
$net2ftp_messages["The file <b>%1\$s</b> contains a banned keyword, aborting the move"] = "Die Datei <b>%1\$s</b> enth&auml;lt ein verbotenes Schl&uuml;sselwort, Abbruch des Verschiebens";
$net2ftp_messages["The file <b>%1\$s</b> contains a banned keyword, so this file will be skipped"] = "Die Datei <b>%1\$s</b> enth&auml;lt ein verbotenes Schl&uuml;sselwort, diese Datei wird &uuml;bersprungen";
$net2ftp_messages["The file <b>%1\$s</b> is too big to be copied, so this file will be skipped"] = "Die Datei <b>%1\$s</b> ist zum Kopieren zu gro&szlig;, diese Datei wird &uuml;bersprungen";
$net2ftp_messages["The file <b>%1\$s</b> is too big to be moved, aborting the move"] = "Die Datei <b>%1\$s</b> ist zum Verschieben zu gro&szlig;, Abbruch des Verschiebens";
$net2ftp_messages["The file is too big to be transferred"] = "Die Datei ist zu gro&szlig;, um &uuml;bertragen zu werden";
$net2ftp_messages["The handle of file %1\$s could not be closed."] = "The handle of file %1\$s could not be closed.";
$net2ftp_messages["The handle of file %1\$s could not be opened."] = "The handle of file %1\$s could not be opened.";
$net2ftp_messages["The latest version information could not be retrieved from the net2ftp.com server. Check the security settings of your browser, which may prevent the loading of a small file from the net2ftp.com server."] = "Die aktuelle Versionsinformation konnte vom net2ftp.com Server nicht empfangen werden. &Uuml;berpr&uuml;fen Sie die Sicherheitseinstellungen Ihres Browsers, sie verhindern eventuell das Laden einer kleinen Datei vom net2ftp.com Server.";
$net2ftp_messages["The log tables could not be copied."] = "Die Log Tabellen konnten nicht kopiert werden.";
$net2ftp_messages["The log tables could not be renamed."] = "Die Log Tabellen konnten nicht umbenannt werden.";
$net2ftp_messages["The log tables were copied successfully."] = "Die Log Tabellen wurden erfolgreich kopiert.";
$net2ftp_messages["The log tables were renamed successfully."] = "Die Log Tabellen wurden erfolgreich umbenannt.";
$net2ftp_messages["The maximum execution time is <b>%1\$s seconds</b>"] = "Die maximale Zeit zum ausf&uuml;hren ist <b>%1\$s Sekunden</b>";
$net2ftp_messages["The maximum size of one file is restricted by net2ftp to <b>%1\$s</b> and by PHP to <b>%2\$s</b>"] = "Die maximale Gr&ouml;&szlig;e einer Datei ist von net2ftp auf <b>%1\$s</b> und von PHP auf <b>%2\$s</b> begrenzt";
$net2ftp_messages["The net2ftp installer script has been copied to the FTP server."] = "Das net2ftp Installationsskript wurde auf den FTP-Server kopiert.";
$net2ftp_messages["The new directories will be created in <b>%1\$s</b>."] = "Die neuen Verzeichnisse werden erstellt in <b>%1\$s</b>.";
$net2ftp_messages["The new name may not contain any banned keywords. This entry was not renamed to <b>%1\$s</b>"] = "Der neue Name darf keine verbotenen Schl&uuml;sselworte enthalten. Dieser Eintrag wurde nicht umbenannt in <b>%1\$s</b>";
$net2ftp_messages["The new name may not contain any dots. This entry was not renamed to <b>%1\$s</b>"] = "Der neue Name darf kein Punkte beinhalten. Dieser Eintrag wurde nicht umbenannt in <b>%1\$s</b>";
$net2ftp_messages["The number of files which were skipped is:"] = "Anzahl der Dateien, die ausgelassen wurden:";
$net2ftp_messages["The oldest log table could not be dropped."] = "Die &auml;lteste Log Tabelle konnte nicht gel&ouml;scht werden.";
$net2ftp_messages["The oldest log table was dropped successfully."] = "Die &auml;lteste Log Tabelle wurde erfolgreich gel&ouml;scht.";
$net2ftp_messages["The online installation is about 1-2 MB and the offline installation is about 13 MB. This 'end-user' java is called JRE (Java Runtime Environment)."] = "Sie ben&ouml;tigen mindestens die JRE (Java Runtime Environment) Variante. Wenden Sie sich an Ihren Systemadministrator wenn Sie Probleme haben.";
$net2ftp_messages["The table <b>%1\$s</b> could not be emptied."] = "Die Tabelle <b>%1\$s</b> konnte nicht geleert werden.";
$net2ftp_messages["The table <b>%1\$s</b> could not be optimized."] = "Die Tabelle <b>%1\$s</b> konnte nicht optimiert werden.";
$net2ftp_messages["The table <b>%1\$s</b> was emptied successfully."] = "Die Tabelle <b>%1\$s</b> wurde erfolgreich geleert.";
$net2ftp_messages["The table <b>%1\$s</b> was optimized successfully."] = "Die Tabelle <b>%1\$s</b> wurde erfolgreich optimiert.";
$net2ftp_messages["The target directory <b>%1\$s</b> is the same as or a subdirectory of the source directory <b>%2\$s</b>, so this directory will be skipped"] = "Das Ziel-Verzeichnis <b>%1\$s</b> ist das Gleiche als der Quellordner <b>%2\$s</b>, oder ein Unterordner davon, Ordner wird &uuml;bersprungen";
$net2ftp_messages["The target for file <b>%1\$s</b> is the same as the source, so this file will be skipped"] = "Das Ziel f&uuml;r die Datei <b>%1\$s</b> ist die Selbe wie die Quelle, diese Datei wird &uuml;bersprungen";
$net2ftp_messages["The task you wanted to perform with net2ftp took more time than the allowed %1\$s seconds, and therefor that task was stopped."] = "Ihr Arbeitsauftrag den Sie mit net2ftp ausf&uuml;hren wollten, hat mehr Zeit als die erlaubten  %1\$s Sekunden in Anspruch genommen, und wurde deswegen abgebrochen.";
$net2ftp_messages["The total size taken by the selected directories and files is:"] = "Die verbrauchte Gesamtgr&ouml;&szlig;e der ausgew&auml;hlten Ordner und Dateien ist:";
$net2ftp_messages["The variable <b>consumption_ipaddress_datatransfer</b> is not numeric."] = "Die Variable <b>consumption_ipaddress_datatransfer</b> ist nicht numerisch.";
$net2ftp_messages["The word <b>%1\$s</b> was found in the following files:"] = "Das Suchwort <b>%1\$s</b> wurde in folgenden Dateien gefunden:";
$net2ftp_messages["The word <b>%1\$s</b> was not found in the selected directories and files."] = "Das Suchwort <b>%1\$s</b> konnte in den ausgew&auml;hlten Dateien und Ordnern nicht gefunden werden.";
$net2ftp_messages["The zip file has been saved on the FTP server as <b>%1\$s</b>"] = "Das ZIP-Archiv wurde auf dem FTP-Server als <b>%1\$s</b> gespeichert";
$net2ftp_messages["The zip file has been sent to <b>%1\$s</b>."] = "Die Zip Datei wurde versand an <b>%1\$s</b>.";
$net2ftp_messages["This SQL query is going to be executed:"] = "Folgende SQL-Anfrage wird ausgef&uuml;hrt:";
$net2ftp_messages["This file is not accessible from the web"] = "Auf diese Datei kann aus dem Web nicht zugegriffen werden";
$net2ftp_messages["This folder is empty"] = "Dieser Ordner ist leer";
$net2ftp_messages["This function has been disabled by the Administrator of this website."] = "Diese Funktion wurde vom Administrator der Webseite deaktiviert.";
$net2ftp_messages["This function is available on PHP 5 only"] = "Diese Funktion ist nur mit PHP5 verf&uuml;gbar";
$net2ftp_messages["This script runs on your web server and requires PHP to be installed."] = "Dieses Skript l&auml;uft auf Ihrem Webserver und ben&ouml;tigt PHP.";
$net2ftp_messages["This time limit guarantees the fair use of the web server for everyone."] = "Diese Zeitbeschr&auml;nkung gew&auml;hrleistet den Betrieb des Webservers f&uuml;r andere Nutzer.";
$net2ftp_messages["This version of net2ftp is up-to-date."] = "Diese Version von net2ftp ist aktuell.";
$net2ftp_messages["Time of sending: "] = "Gesendet: ";
$net2ftp_messages["To prevent this, you must close all browser windows."] = "Um das zu verhindern, m&uuml;ssen Sie alle Browserfenster schlie&szlig;en.";
$net2ftp_messages["To save the image, right-click on it and choose 'Save picture as...'"] = "Um Bilder abzuspeichern, klicken Sie mit der rechten Maustaste darauf und w&auml;hlen 'Bild speichern unter ...' im Kontextmen&uuml;";
$net2ftp_messages["To set a common target directory, enter that target directory in the textbox above and click on the button \"Set all targetdirectories\"."] = "Um einen gemeinsamen Zielordner anzugeben, tragen Sie das Zielverzeichnis in das obere Eingabefeld ein, und klicken auf \"Set all targetdirectories\" bzw \"Alle Zielordner setzen\".";
$net2ftp_messages["To set all permissions to the same values, enter those permissions above and click on the button \"Set all permissions\""] = "To set all permissions to the same values, enter those permissions above and click on the button \"Set all permissions\"";
$net2ftp_messages["To set all permissions to the same values, enter those permissions and click on the button \"Set all permissions\""] = "To set all permissions to the same values, enter those permissions and click on the button \"Set all permissions\"";
$net2ftp_messages["To use this applet, please install the newest version of Sun's java. You can get it from <a href=\"http://www.java.com/\">java.com</a>. Click on Get It Now."] = "Um diese Funktion nutzen zu k&ouml;nnen ben&ouml;tigen Sie die neueste Java Version. Bitte gehen Sie auf <a href=\"http://www.java.com/\" target=\"_blank\">java.com</a> und installieren oder aktivieren Sie die neueste Version f&uuml;r Ihren Browser.";
$net2ftp_messages["Transferring files to the FTP server"] = "Dateien werden zum FTP-Server geschickt";
$net2ftp_messages["Transform selected entries: "] = "Ausgew&auml;hlte Eintr&auml;ge: ";
$net2ftp_messages["Transform selected entry: "] = "Transform selected entry: ";
$net2ftp_messages["Troubleshoot an FTP server"] = "Fehlersuche bei einem FTP Server";
$net2ftp_messages["Troubleshoot net2ftp on this webserver"] = "Fehlersuche bei net2ftp auf diesem Webserver";
$net2ftp_messages["Troubleshoot your net2ftp installation"] = "Fehlersuche bei der net2ftp Installation";
$net2ftp_messages["Troubleshooting functions"] = "Fehlersuchfunktionen";
$net2ftp_messages["Try to split your task in smaller tasks: restrict your selection of files, and omit the biggest files."] = "Versuchen Sie, Ihren Auftrag in kleinere Schritte aufzutrennen: schr&auml;nken Sie die Auswahl an Dateien ein, und/oder &uuml;berspringen sie die gr&ouml;&szlig;ten Dateien.";
$net2ftp_messages["Two click access (net2ftp will ask for a password - safer)"] = "2-Klick Zugang (net2ftp wird nach Ihrem Passwort fragen - sicher)";
$net2ftp_messages["Type"] = "Typ";
$net2ftp_messages["Unable to close the handle of the temporary file"] = "Die Verarbeitung der tempor&auml;ren Datei konnte nicht beendet werden";
$net2ftp_messages["Unable to connect to FTP server <b>%1\$s</b> on port <b>%2\$s</b>.<br /><br />Are you sure this is the address of the FTP server? This is often different from that of the HTTP (web) server. Please contact your ISP helpdesk or system administrator for help.<br />"] = "Konnte keine Verbindung zum FTP Server <b>%1\$s</b> auf Port <b>%2\$s</b> herstellen.<br /><br />Bitte pr&uuml;fen Sie die Adresse des FTP-Servers - diese unterscheidet sich oft von der Adresse des HTTP (Web) Servers. Bitte kontaktieren Sie die Hotline Ihres Providers oder Ihren Systemadministrator.<br />";
$net2ftp_messages["Unable to connect to SSH server <b>%1\$s</b> on port <b>%2\$s</b> (%3\$s).<br /><br />Are you sure this is the address of the FTP server? This is often different from that of the HTTP (web) server. Please contact your ISP helpdesk or system administrator for help.<br />"] = "Unable to connect to SSH server <b>%1\$s</b> on port <b>%2\$s</b> (%3\$s).<br /><br />Are you sure this is the address of the FTP server? This is often different from that of the HTTP (web) server. Please contact your ISP helpdesk or system administrator for help.<br />";
$net2ftp_messages["Unable to connect to the MySQL database. Please check your MySQL database settings in net2ftp's configuration file settings.inc.php."] = "Die Verbindung zur MySQL Datenbank konnte nicht hergestellt werden. Bitte pr&uuml;fen Sie die MySQL Datenbankeinstellungen in net2ftp's Konfigurationsdatei settings.inc.php.";
$net2ftp_messages["Unable to connect to the server <b>%1\$s</b>."] = "Unable to connect to the server <b>%1\$s</b>.";
$net2ftp_messages["Unable to copy the file <b>%1\$s</b>"] = "Die Datei <b>%1\$s</b> kann nicht kopiert werden";
$net2ftp_messages["Unable to copy the local file to the remote file <b>%1\$s</b> using FTP mode <b>%2\$s</b>"] = "Unm&ouml;glich die lokale Datei zur entfernten Datei <b>%1\$s</b> unter Verwendung des FTP-Modus <b>%2\$s</b> zu kopieren";
$net2ftp_messages["Unable to copy the remote file <b>%1\$s</b> to the local file using FTP mode <b>%2\$s</b>"] = "Die entfernte Datei <b>%1\$s</b> konnte nicht lokal per FTP Modus <b>%2\$s</b> kopiert werden";
$net2ftp_messages["Unable to create a temporary directory (too many tries)"] = "Es konnte kein tempor&auml;res Verzeichnis angelegt werden (zu viele Versuche)";
$net2ftp_messages["Unable to create a temporary directory because (parent directory is not writeable)"] = "Es konnte kein tempor&auml;res Verzeichnis angelegt werden (Verzeichnis ist nicht beschreibbar)";
$net2ftp_messages["Unable to create a temporary directory because (unvalid parent directory)"] = "Es konnte kein tempor&auml;res Verzeichnis angelegt werden (ung&uuml;ltiges Verzeichnis)";
$net2ftp_messages["Unable to create the directory <b>%1\$s</b>"] = "Der neue Ordner <b>%1\$s</b> kann nicht angelegt werden";
$net2ftp_messages["Unable to create the subdirectory <b>%1\$s</b>. It may already exist. Continuing the copy/move process..."] = "Unm&ouml;glich das Unterverzeichnis <b>%1\$s</b> zu erstellen. Evtl. besteht es bereits. Setze das Kopieren/Verschieben fort...";
$net2ftp_messages["Unable to create the temporary file. Check the permissions of the %1\$s directory."] = "Die tempor&auml;re Datei kann nicht erstellt werden. Bitte Berechtigung des Verzeichnisses %1\$s &uuml;berpr&uuml;fen.";
$net2ftp_messages["Unable to delete file <b>%1\$s</b>"] = "Die Datei <b>%1\$s</b> kann nicht gel&ouml;scht werden";
$net2ftp_messages["Unable to delete the directory <b>%1\$s</b>"] = "L&ouml;schen des Verzeichnisses <b>%1\$s</b> fehlgeschlagen";
$net2ftp_messages["Unable to delete the file <b>%1\$s</b>"] = "L&ouml;schen der Datei <b>%1\$s</b> fehlgeschlagen";
$net2ftp_messages["Unable to delete the local file"] = "Lokale Datei kann nicht gel&ouml;scht werden";
$net2ftp_messages["Unable to delete the subdirectory <b>%1\$s</b> - it may not be empty"] = "Das Unterverzeichniss <b>%1\$s</b> konnte nicht gel&ouml;scht werden - es ist nicht leer";
$net2ftp_messages["Unable to delete the temporary directory"] = "Das tempor&aauml;re Verzeichnis konnte nicht gel&ouml;scht werden";
$net2ftp_messages["Unable to delete the temporary file"] = "Die tempor&auml;re Datei kann nicht gel&ouml;scht werden";
$net2ftp_messages["Unable to delete the temporary file %1\$s"] = "Die tempor&auml;re Datei %1\$s konnte nicht gel&ouml;scht werden";
$net2ftp_messages["Unable to determine your IP address."] = "Kann Ihre IP-Adresse nicht aufl&ouml;sen.";
$net2ftp_messages["Unable to execute site command <b>%1\$s</b>"] = "SITE-Kommando <b>%1\$s</b> fehlgeschlagen";
$net2ftp_messages["Unable to execute site command <b>%1\$s</b>. Note that the CHMOD command is only available on Unix FTP servers, not on Windows FTP servers."] = "Ausf&uuml;hrung des SITE-Kommandos <b>%1\$s</b> fehlgeschlagen. Hinweis: Das CHMOD Kommando ist nur auf Unix-FTP-Servern verf&uuml;gbar, nicht auf Windows-FTP-Servern.";
$net2ftp_messages["Unable to execute the SQL query <b>%1\$s</b>."] = "Die SQL-Abfrage <b>%1\$s</b> konnte nicht ausgef&uuml;hrt werden.";
$net2ftp_messages["Unable to execute the SQL query."] = "Kann die SQL-Abfrage nicht ausf&uuml;hren.";
$net2ftp_messages["Unable to extract the files and directories from the archive"] = "Die Dateien und die Verzeichnisse vom Archiv zu extrahieren war nicht m&ouml;glich";
$net2ftp_messages["Unable to get the archive <b>%1\$s</b> from the FTP server"] = "Archiv <b>%1\$s</b> konnte nicht vom FTP-Server geholt werden";
$net2ftp_messages["Unable to get the file <b>%1\$s</b> from the FTP server and to save it as temporary file <b>%2\$s</b>.<br />Check the permissions of the %3\$s directory.<br />"] = "Laden der Datei <b>%1\$s</b> vom FTP Server und Zwischenspeichern als <b>%2\$s</b> fehlgeschlagen.<br />Bitte pr&uuml;fen Sie die Zugriffsrechte des Ordners %3\$s.<br />";
$net2ftp_messages["Unable to get the list of packages"] = "Die Paketliste konnte nicht geholt werden";
$net2ftp_messages["Unable to login to FTP server <b>%1\$s</b> with username <b>%2\$s</b>.<br /><br />Are you sure your username and password are correct? Please contact your ISP helpdesk or system administrator for help.<br />"] = "Anmeldung am FTP Server  <b>%1\$s</b> mit Benutzername <b>%2\$s</b> fehlgeschlagen.<br /><br />Bitte pr&uuml;fen Sie Ihren Benutzernamen und das Kennwort. Kontaktieren Sie die Hotline Ihres Providers oder Fragen Sie Ihren Systemadministrator.<br />";
$net2ftp_messages["Unable to login to SSH server <b>%1\$s</b> with username <b>%2\$s</b> (%3\$s).<br /><br />Are you sure your username and password are correct? Please contact your ISP helpdesk or system administrator for help.<br />"] = "Unable to login to SSH server <b>%1\$s</b> with username <b>%2\$s</b> (%3\$s).<br /><br />Are you sure your username and password are correct? Please contact your ISP helpdesk or system administrator for help.<br />";
$net2ftp_messages["Unable to move the directory <b>%1\$s</b>"] = "Das Verzeichnis <b>%1\$s</b> konnte nicht verschoben werden.";
$net2ftp_messages["Unable to move the file <b>%1\$s</b>"] = "Unable to move the file <b>%1\$s</b>";
$net2ftp_messages["Unable to move the file <b>%1\$s</b>, aborting the move"] = "Verschieben der Datei <b>%1\$s</b> unm&ouml;glich, verschieben wird abgebrochen";
$net2ftp_messages["Unable to move the uploaded file to the temp directory.<br /><br />The administrator of this website has to <b>chmod 777</b> the /temp directory of net2ftp."] = "Es war nicht m&ouml;glich, die hochgeladene Datei ins tempor&auml;re Verzeichnis zu verschieben.<br /><br />Der Administrator dieser Seite muss die Zugriffsrechte des net2ftp - /tmp-Verzeichnisses auf <b>0777 (chmod)</b> setzen.";
$net2ftp_messages["Unable to open the system log."] = "Kann system log nicht &ouml;ffnen.";
$net2ftp_messages["Unable to open the template file"] = "Die Vorlage kann nicht ge&ouml;ffnet werden";
$net2ftp_messages["Unable to open the temporary file. Check the permissions of the %1\$s directory."] = "&Ouml;ffnen der zwischengespeicherten Datei fehlgeschlagen. Bitte pr&uuml;fen Sie die Zugriffsrechte des Ordners %1\$s.";
$net2ftp_messages["Unable to put the file <b>%1\$s</b> on the FTP server.<br />You may not have write permissions on the directory."] = "Konnte Datei <b>%1\$s</b> nicht auf dem FTP Server ablegen.<br />Bitte pr&uuml;fen Sie Ihre Schreibrechte in diesem Verzeichnis.";
$net2ftp_messages["Unable to read the template file"] = "Die Vorlage kann nicht gelesen werden";
$net2ftp_messages["Unable to read the temporary file"] = "Lesen der tempor&auml;ren Datei fehlgeschlagen.";
$net2ftp_messages["Unable to rename directory or file <b>%1\$s</b> into <b>%2\$s</b>"] = "Umbenennen der Datei oder des Verzeichnisses <b>%1\$s</b> in <b>%2\$s</b> fehlgeschlagen";
$net2ftp_messages["Unable to select the MySQL database. Please check your MySQL database settings in net2ftp's configuration file settings.inc.php."] = "Die MySQL Datenbank konnte nicht ausgew&auml;hlt werden. Bitte pr&uuml;fen Sie die MySQL Datenbankeinstellungen in net2ftp's Konfigurationsdatei settings.inc.php.";
$net2ftp_messages["Unable to select the database <b>%1\$s</b>."] = "Die Datenbank konnte nicht ausgew&auml;hlt werden <b>%1\$s</b>.";
$net2ftp_messages["Unable to send the file to the browser"] = "Die Datei konnte nicht an den Browser gesendet werden";
$net2ftp_messages["Unable to switch to the passive mode on FTP server <b>%1\$s</b>."] = "Konnte nicht in den passiven Modus auf dem FTP-Server <b>%1\$s</b> wechseln.";
$net2ftp_messages["Unable to write a message to the system log."] = "Unm&ouml;glich eine Nachricht ins system.log zu schreiben.";
$net2ftp_messages["Unable to write the string to the temporary file <b>%1\$s</b>.<br />Check the permissions of the %2\$s directory."] = "Speichern der Zeichenkette in die tempor&auml;re Datei <b>%1\$s</b> fehlgeschlagen.<br />Bitte pr&uuml;fen Sie die Zugriffsrechte des Ordners %2\$s.";
$net2ftp_messages["Unexpected state string: %1\$s. Exiting."] = "Unerwartete Zustandszeichenkette: %1\$s. Beende.";
$net2ftp_messages["Unrecognized FTP output"] = "Unerkannter FTP Output";
$net2ftp_messages["Unzip"] = "Unzip";
$net2ftp_messages["Unzip archive <b>%1\$s</b> to:"] = "Unzip archive <b>%1\$s</b> to:";
$net2ftp_messages["Unzip archives"] = "Entpacke Archive";
$net2ftp_messages["Unzip the selected archives on the FTP server"] = "Entpacke das ausgew&auml;hlte Archiv auf dem FTP-Server";
$net2ftp_messages["Up"] = "Aufw&auml;rts";
$net2ftp_messages["Update"] = "Aktualisieren";
$net2ftp_messages["Upload"] = "Upload";
$net2ftp_messages["Upload a new version of the file %1\$s and merge the changes"] = "Hochladen einer neuen Version der Datei %1\$s und zusammenf&uuml;gen der &Auml;nderungen";
$net2ftp_messages["Upload directories and files using a Java applet"] = "Upload von Ordnern und Dateien mit einem Java Applet";
$net2ftp_messages["Upload files and archives"] = "Dateien und Archive hochladen";
$net2ftp_messages["Upload more files and archives"] = "Weitere Dateien und Ordner hochladen";
$net2ftp_messages["Upload new files in directory %1\$s"] = "Upload neuer Dateien in Verzeichniss %1\$s";
$net2ftp_messages["Upload to directory:"] = "In Ordner hochladen:";
$net2ftp_messages["Username"] = "Benutzername";
$net2ftp_messages["Version information"] = "Versionsinformationen";
$net2ftp_messages["View"] = "Anzeigen";
$net2ftp_messages["View Macromedia ShockWave Flash movie %1\$s"] = "Macromedia ShockWave Flash Film %1\$s betrachten";
$net2ftp_messages["View file %1\$s"] = "Datei %1\$s anzeigen";
$net2ftp_messages["View image %1\$s"] = "View image %1\$s";
$net2ftp_messages["View logs"] = "Anzeigen";
$net2ftp_messages["View the file %1\$s from your HTTP web server"] = "Die Datei %1\$s von Ihrem Webserver ansehen";
$net2ftp_messages["View the highlighted source code of file %1\$s"] = "Den Quellcode der Datei %1\$s ansehen";
$net2ftp_messages["WAV sound file"] = "WAV Audiodatei";
$net2ftp_messages["Webmaster's email: "] = "E-Mail Adresse des Webmaster: ";
$net2ftp_messages["Writing some text to the file: "] = "Schreiben von Text in die Datei: ";
$net2ftp_messages["Wrong username or password. Please try again."] = "Falscher Benutzername oder Passwort. Bitte versuchen Sie es erneut.";
$net2ftp_messages["You did not enter a filename for the zipfile. Go back and enter a filename."] = "Sie haben keinen Dateinamen f&uuml;r das ZIP-Archiv spezifiziert. Gehen Sie zur&uuml;ck und geben Sie einen Dateinamen an.";
$net2ftp_messages["You did not enter your Administrator username or password."] = "Sie haben ihren Administrator-Benutzername oder das Passwort nicht eingegeben";
$net2ftp_messages["You did not provide any file to upload."] = "Sie haben keine Datei zum Upload ausgew&auml;hlt.";
$net2ftp_messages["You did not provide any text to send by email!"] = "Sie haben keinen Text f&uuml;r den EMail-Versand angegeben!";
$net2ftp_messages["You did not supply a From address."] = "Sie haben keine Absenderadresse eingegeben.";
$net2ftp_messages["You did not supply a To address."] = "Sie haben keine Empf&auml;ngeradresse eingegeben.";
$net2ftp_messages["You have logged out from the FTP server. To log back in, <a href=\"%1\$s\" title=\"Login page (accesskey l)\" accesskey=\"l\">follow this link</a>."] = "Sie haben sie sich abgemeldet. Um sich wieder anzumelden, <a href=\"%1\$s\" title=\"Login page (accesskey l)\" accesskey=\"l\">folgen Sie diesem Link</a>.";
$net2ftp_messages["Your IP address (%1\$s) is in the list of banned IP addresses."] = "Ihre IP-Adresse (%1\$s) ist in der Liste der verbotenen IP Addressen.";
$net2ftp_messages["Your IP address (%1\$s) is not in the list of allowed IP addresses."] = "Ihre IP-Adresse (%1\$s) is nicht in der Liste der erlaubten IP-Adressen";
$net2ftp_messages["Your IP address has changed; please enter your password for FTP server <b>%1\$s</b> to continue."] = "Ihre IP-Adresse hat sich ge&auml;ndert, bitte geben Sie zum Fortsetzen das Passwort f&uuml;r Ihren FTP-Server <b>%1\$s</b> ein.";
$net2ftp_messages["Your browser does not support applets, or you have disabled applets in your browser settings."] = "Ihr Browser unterst&uuml;tzt keine Java-Anwendungen oder Sie haben diese explizit in den Einstellungen deaktiviert.";
$net2ftp_messages["Your root directory <b>%1\$s</b> does not exist or could not be selected."] = "Ihr Root-Verzeichnis <b>%1\$s</b> existiert nicht oder kann nicht ausgew&auml;hlt werden.";
$net2ftp_messages["Your session has expired; please enter your password for FTP server <b>%1\$s</b> to continue."] = "Ihre Sitzung ist abgelaufen, bitte geben Sie zum Fortsetzen das Passwort f&uuml;r Ihren FTP-Server <b>%1\$s</b> ein.";
$net2ftp_messages["Your task was stopped"] = "Ihr Auftrag wurde angehalten";
$net2ftp_messages["Zip"] = "Zip";
$net2ftp_messages["Zip archive"] = "Zip Archiv";
$net2ftp_messages["Zip entries"] = "Zip Eintr&auml;ge";
$net2ftp_messages["Zip the selected entries to save or email them"] = "Zippen der ausgew&auml;lten Elemente zum speichern oder versenden per Mail";
$net2ftp_messages["en"] = "de";
$net2ftp_messages["files which were last modified"] = "Dateien die zuletzt ge&auml;ndert wurden am";
$net2ftp_messages["files with a filename like"] = "Dateien mit einem Namen wie";
$net2ftp_messages["files with a size"] = "Dateien mit einer Gr&ouml;&szlig;e";
$net2ftp_messages["from"] = "von";
$net2ftp_messages["left"] = "left";
$net2ftp_messages["ltr"] = "ltr";
$net2ftp_messages["net2ftp has tried to determine the directory mapping between the FTP server and the web server."] = "net2ftp hat versucht, die Verzeichnis-Abbildung zwischen FTP- und Webserver zu bestimmen.";
$net2ftp_messages["net2ftp is free software, released under the GNU/GPL license. For more information, go to http://www.net2ftp.com."] = "net2ftp ist freie Software, freigegeben unter der GNU/GPL Lizenz. F&uuml;r weitere Informationen, gehen Sie bitte auf http://www.net2ftp.com.";
$net2ftp_messages["no - please install it!"] = "Nein - bitte installieren!";
$net2ftp_messages["not OK"] = "not OK";
$net2ftp_messages["not OK. Check the permissions of the %1\$s directory"] = "nicht OK. Bitte die Berechtigung des Ordners %1\$s &uuml;berpr&uuml;fen";
$net2ftp_messages["right"] = "right";
$net2ftp_messages["to"] = "bis";
$net2ftp_messages["to:"] = "bis:";
$net2ftp_messages["yes"] = "Ja";

?>