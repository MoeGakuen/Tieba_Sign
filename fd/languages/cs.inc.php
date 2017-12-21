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
$net2ftp_messages["en"] = "cs";

// HTML dir attribute: left-to-right (LTR) or right-to-left (RTL)
$net2ftp_messages["ltr"] = "ltr";

// CSS style: align left or right (use in combination with LTR or RTL)
$net2ftp_messages["left"] = "left";
$net2ftp_messages["right"] = "right";

// Encoding
$net2ftp_messages["iso-8859-1"] = "windows-1250";

// -------------------------------------------------------------------------
// Messages
// -------------------------------------------------------------------------

$net2ftp_messages["%1\$s File"] = "Soubor %1\$s";
$net2ftp_messages["(Note: This link may not work if you don't have your own domain name.)"] = "(Poznámka: tento odkaz nemusí fungovat, pokud nemáte vlastní doménu.)";
$net2ftp_messages["<b>%1\$s</b> could not be renamed to <b>%2\$s</b>"] = "<b>%1\$s</b> nemohl bıt pøejmenován na <b>%2\$s</b>";
$net2ftp_messages["<b>%1\$s</b> was successfully renamed to <b>%2\$s</b>"] = "<b>%1\$s</b> byl úsp?nì pøejmenován na <b>%2\$s</b>";
$net2ftp_messages["ARC archive"] = "Archiv ARC";
$net2ftp_messages["ARJ archive"] = "Archiv ARJ";
$net2ftp_messages["ASP script"] = "ASP skript";
$net2ftp_messages["Action"] = "Action";
$net2ftp_messages["Actions"] = "Akce";
$net2ftp_messages["Add another"] = "Pøidat dal?í";
$net2ftp_messages["Admin functions"] = "Administrátorské funkce";
$net2ftp_messages["Adobe Acrobat document"] = "dokument Adobe Acrobat";
$net2ftp_messages["Advanced"] = "Pokroèilé";
$net2ftp_messages["Advanced FTP functions"] = "Advanced FTP functions";
$net2ftp_messages["Advanced functions"] = "Pokroèilé funkce";
$net2ftp_messages["Advanced login"] = "Advanced login";
$net2ftp_messages["All"] = "V?e";
$net2ftp_messages["All the selected directories and files have been processed."] = "V?echny oznaèené adresáøe a soubory byly zpracovány.";
$net2ftp_messages["All the subdirectories and files of the selected directories will also be deleted!"] = "Ve vybranıch adresáøích budou smazány také v?echny podadresáøe a soubory!";
$net2ftp_messages["Alternatively, use net2ftp's normal upload or upload-and-unzip functionality."] = "Alternatively, use net2ftp's normal upload or upload-and-unzip functionality.";
$net2ftp_messages["An error has occured"] = "Do?lo k chybì";
$net2ftp_messages["Anonymous"] = "Anonymní";
$net2ftp_messages["Archive <b>%1\$s</b> was not processed because its filename extension was not recognized. Only zip, tar, tgz and gz archives are supported at the moment."] = "Archiv <b>%1\$s</b> nebyl zpracován, proto?e pøíponu jeho souboru se nepodaøilo rozpoznat. Momentálnì jsou podporovány pouze archivy zip, tar, tgz a gz.";
$net2ftp_messages["Archive contains filenames with ../ or ..\\ - aborting the extraction"] = "Archive contains filenames with ../ or ..\\ - aborting the extraction";
$net2ftp_messages["Archives"] = "Archivù";
$net2ftp_messages["Archives entered here will be decompressed, and the files inside will be transferred to the FTP server."] = "Zde zadané archivy budou rozbaleny a soubory uvnitø budou pøeneseny na FTP server.";
$net2ftp_messages["Are you sure you want to delete these directories and files?"] = "Jste si jist, ?e chcete smazat tyto adresáøe a soubory?";
$net2ftp_messages["Ascending order"] = "Vzestupné tøídìní";
$net2ftp_messages["Automatic"] = "Automatic";
$net2ftp_messages["Back"] = "Zpìt";
$net2ftp_messages["Basic FTP login"] = "Basic FTP login";
$net2ftp_messages["Basic SSH login"] = "Basic SSH login";
$net2ftp_messages["Bitmap file"] = "Bitmapa";
$net2ftp_messages["Bookmark"] = "Oblíbené";
$net2ftp_messages["Calculate the size of the selected entries"] = "Spoèítat velikost vybranıch polo?ek";
$net2ftp_messages["Cascading Style Sheet"] = "Kaskádovı styl";
$net2ftp_messages["Case sensitive search"] = "Rozli?ovat velikost písmen";
$net2ftp_messages["Changing the directory"] = "Changing the directory";
$net2ftp_messages["Changing to the directory %1\$s: "] = "Zmìna adresáøe na %1\$s: ";
$net2ftp_messages["Character encoding: "] = "Character encoding: ";
$net2ftp_messages["Check the SSH server's public key fingerprint"] = "Check the SSH server's public key fingerprint";
$net2ftp_messages["Checking files"] = "Kontrolování souborù";
$net2ftp_messages["Checking if the FTP module of PHP is installed: "] = "Kontrolování pøítomnosti FTP modulu PHP: ";
$net2ftp_messages["Checking the permissions of the directory on the web server: a small file will be written to the /temp folder and then deleted."] = "Kontrolování práv adresáøe na webovém serveru: do /temp bude zapsán a následnì smazán malı soubor.";
$net2ftp_messages["Chmod"] = "Práva";
$net2ftp_messages["Chmod also the files within this directory"] = "Zmìnit práva také v?em souborùm v tomto adresáøi";
$net2ftp_messages["Chmod also the subdirectories within this directory"] = "Zmìnit práva také v?em podadresáøùm v tomto adresáøi";
$net2ftp_messages["Chmod directories and files"] = "Zmìnit práva adresáøùm a souborùm";
$net2ftp_messages["Chmod the selected entries (only works on Unix/Linux/BSD servers)"] = "Zmìnit práva u vybranıch polo?ek (funguje pouze na serverech Unix/Linux/BSD)";
$net2ftp_messages["Choose"] = "Vybrat";
$net2ftp_messages["Choose a directory"] = "Vyberte adresáø";
$net2ftp_messages["Click to sort by %1\$s in ascending order"] = "Kliknìte pro vzestupné setøídìní podle sloupce %1\$s.";
$net2ftp_messages["Click to sort by %1\$s in descending order"] = "Kliknìte pro sestupné setøídìní podle sloupce %1\$s.";
$net2ftp_messages["Closing the file: "] = "Zavírání souboru: ";
$net2ftp_messages["Connecting to a test FTP server: "] = "Connecting to a test FTP server: ";
$net2ftp_messages["Connecting to the FTP server"] = "Pøipojování k FTP serveru";
$net2ftp_messages["Connecting to the FTP server: "] = "Pøipojování k FTP serveru: ";
$net2ftp_messages["Connection settings:"] = "Nastavení pøipojení:";
$net2ftp_messages["Continue"] = "Continue";
$net2ftp_messages["Copied file %1\$s"] = "Copied file %1\$s";
$net2ftp_messages["Copied file <b>%1\$s</b>"] = "Copied file <b>%1\$s</b>";
$net2ftp_messages["Copy"] = "Kopírovat";
$net2ftp_messages["Copy directories and files"] = "Kopírovat adresáøe a soubory";
$net2ftp_messages["Copy directory <b>%1\$s</b> to:"] = "Zkopírovat adresáø <b>%1\$s</b> do:";
$net2ftp_messages["Copy file <b>%1\$s</b> to:"] = "Zkopírovat soubor <b>%1\$s</b> do:";
$net2ftp_messages["Copy symlink <b>%1\$s</b> to:"] = "Zkopírovat symlink <b>%1\$s</b> do:";
$net2ftp_messages["Copy the selected entries"] = "Zkopírovat vybrané polo?ky";
$net2ftp_messages["Copying the net2ftp installer script to the FTP server"] = "Copying the net2ftp installer script to the FTP server";
$net2ftp_messages["Could not be saved"] = "Could not be saved";
$net2ftp_messages["Could not connect to SSH server"] = "Could not connect to SSH server";
$net2ftp_messages["Could not copy file %1\$s"] = "Could not copy file %1\$s";
$net2ftp_messages["Could not create directory %1\$s"] = "Could not create directory %1\$s";
$net2ftp_messages["Could not generate a temporary file."] = "Nepodaøilo se vytvoøit doèasnı soubor.";
$net2ftp_messages["Could not get fingerprint"] = "Could not get fingerprint";
$net2ftp_messages["Could not get public host key"] = "Could not get public host key";
$net2ftp_messages["Could not unzip entry %1\$s (error code %2\$s)"] = "Could not unzip entry %1\$s (error code %2\$s)";
$net2ftp_messages["Create a new file in directory %1\$s"] = "Vytvoøit novı soubor v adresáøi %1\$s";
$net2ftp_messages["Create a website easily using ready-made templates"] = "Create a website easily using ready-made templates";
$net2ftp_messages["Create new directories"] = "Vytvoøit nové adresáøe";
$net2ftp_messages["Create the MySQL database tables"] = "Vytvoøit databázové MySQL tabulky";
$net2ftp_messages["Created directory %1\$s"] = "Created directory %1\$s";
$net2ftp_messages["Created target subdirectory <b>%1\$s</b>"] = "Created target subdirectory <b>%1\$s</b>";
$net2ftp_messages["Creating a temporary directory on the FTP server"] = "Creating a temporary directory on the FTP server";
$net2ftp_messages["Creating filename: "] = "Vytváøení souboru: ";
$net2ftp_messages["Daily limit reached: the file <b>%1\$s</b> will not be transferred"] = "Denní limit dosa?en: soubor <b>%1\$s</b> nebude pøenesen";
$net2ftp_messages["Daily limit reached: you will not be able to transfer data"] = "Denní limit byl dosa?en: nebudete moci pøenZet data";
$net2ftp_messages["Data transferred from this IP address today"] = "Data transferred from this IP address today";
$net2ftp_messages["Data transferred to this FTP server today"] = "Data transferred to this FTP server today";
$net2ftp_messages["Date from:"] = "Datum od:";
$net2ftp_messages["Dear,"] = "V^ení,";
$net2ftp_messages["Decompressing archives and transferring files"] = "Rozbalování archivù a pøenZení souborù";
$net2ftp_messages["Default"] = "Vıchozí";
$net2ftp_messages["Delete"] = "Smazat";
$net2ftp_messages["Delete directories and files"] = "Smazat adresáøe a soubory";
$net2ftp_messages["Delete the selected entries"] = "Smazat vybrané polo?ky";
$net2ftp_messages["Deleted file <b>%1\$s</b>"] = "Soubor <b>%1\$s</b> byl smazán";
$net2ftp_messages["Deleted subdirectory <b>%1\$s</b>"] = "Podadresáø <b>%1\$s</b> byl smazán";
$net2ftp_messages["Deleting the file: "] = "Mazání souboru: ";
$net2ftp_messages["Descending order"] = "Sestupné tøídìní";
$net2ftp_messages["Details"] = "Detaily";
$net2ftp_messages["Different target FTP server:"] = "Jinı cílovı FTP server:";
$net2ftp_messages["Directories"] = "Adresáøe";
$net2ftp_messages["Directories with names containing \' cannot be displayed correctly. They can only be deleted. Please go back and select another subdirectory."] = "Adresáøe, jejich? jméno obsahuje \', nemohou bıt korektnì zobrazeny. Mohou bıt pouze smazány. Prosím vrate se zpìt a vyberte jinı jinı podadresáø.";
$net2ftp_messages["Directory"] = "Adresáø";
$net2ftp_messages["Directory <b>%1\$s</b>"] = "Adresáø <b>%1\$s</b>";
$net2ftp_messages["Directory <b>%1\$s</b> could not be created."] = "Directory <b>%1\$s</b> could not be created.";
$net2ftp_messages["Directory <b>%1\$s</b> successfully chmodded to <b>%2\$s</b>"] = "Práva adresáøe <b>%1\$s</b> byla v poøádku zmìnìna na <b>%2\$s</b>";
$net2ftp_messages["Directory <b>%1\$s</b> was successfully created."] = "Adresáø <b>%1\$s</b> byl v poøádku vytvoøen.";
$net2ftp_messages["Directory Tree"] = "Strom adresáøù";
$net2ftp_messages["Disabled"] = "Disabled";
$net2ftp_messages["Double-click to go to a subdirectory:"] = "Poklepejte pro pøechod do podadresáøe:";
$net2ftp_messages["Download"] = "Stáhnout";
$net2ftp_messages["Download a zip file containing all selected entries"] = "Stáhnout ZIP soubor obsahující v?echny vybrané polo?ky";
$net2ftp_messages["Download the file %1\$s"] = "Stáhnout soubor %1\$s";
$net2ftp_messages["Drag and drop one of the links below to the bookmarks bar"] = "Drag and drop one of the links below to the bookmarks bar";
$net2ftp_messages["Due to technical problems the email to <b>%1\$s</b> could not be sent."] = "Kvùli technickım problémùm nebylo mo?né odeslat e-mail na adresu <b>%1\$s</b>.";
$net2ftp_messages["Edit"] = "Upravit";
$net2ftp_messages["Edit the source code of file %1\$s"] = "Upravit zdrojovı kód souboru %1\$s";
$net2ftp_messages["Email the zip file in attachment to:"] = "Poslat zip v pøíloze e-mailem na:";
$net2ftp_messages["Empty logs"] = "Vyprázdnit záznamy";
$net2ftp_messages["Enter the FTP server port (21 for FTP, 22 for FTP SSH or 990 for FTP SSL) - if you're not sure leave it to 21"] = "Enter the FTP server port (21 for FTP, 22 for FTP SSH or 990 for FTP SSL) - if you're not sure leave it to 21";
$net2ftp_messages["Enter your password"] = "Enter your password";
$net2ftp_messages["Enter your username"] = "Enter your username";
$net2ftp_messages["Entries which contain banned keywords can't be managed using net2ftp. This is to avoid Paypal or Ebay scams from being uploaded through net2ftp."] = "Entries which contain banned keywords can't be managed using net2ftp. This is to avoid Paypal or Ebay scams from being uploaded through net2ftp.";
$net2ftp_messages["Example"] = "Pøíklad";
$net2ftp_messages["Executable"] = "Spustitelnı soubor";
$net2ftp_messages["Execute %1\$s in a new window"] = "Spustit %1\$s v novém oknì";
$net2ftp_messages["FTP mode"] = "FTP mód";
$net2ftp_messages["FTP server"] = "FTP server" ;
$net2ftp_messages["FTP server port"] = "Port FTP serveru";
$net2ftp_messages["FTP server response:"] = "FTP server response:";
$net2ftp_messages["File"] = "Soubor";
$net2ftp_messages["File <b>%1\$s</b>"] = "Soubor <b>%1\$s</b>";
$net2ftp_messages["File <b>%1\$s</b> could not be moved"] = "Soubor <b>%1\$s</b> nem?e bıt pøesunut";
$net2ftp_messages["File <b>%1\$s</b> could not be transferred to the FTP server"] = "Soubor <b>%1\$s</b> nemohl bıt pøenesen na FTP server";
$net2ftp_messages["File <b>%1\$s</b> has been transferred to the FTP server using FTP mode <b>%2\$s</b>"] = "Soubor <b>%1\$s</b> byl na FTP server pøenesen v re?imu <b>%2\$s</b>";
$net2ftp_messages["File <b>%1\$s</b> is OK"] = "Soubor <b>%1\$s</b> je v poøádku";
$net2ftp_messages["File <b>%1\$s</b> is contains a banned keyword. This file will not be uploaded."] = "File <b>%1\$s</b> is contains a banned keyword. This file will not be uploaded.";
$net2ftp_messages["File <b>%1\$s</b> is too big. This file will not be uploaded."] = "Soubor <b>%1\$s</b> je moc velkı. Tento soubor nebude nahrán.";
$net2ftp_messages["File <b>%1\$s</b> was successfully chmodded to <b>%2\$s</b>"] = "Práva souboru <b>%1\$s</b> byla v poøádku zmìnìna na <b>%2\$s</b>";
$net2ftp_messages["File: "] = "Soubor: ";
$net2ftp_messages["Files"] = "Soubory";
$net2ftp_messages["Files entered here will be transferred to the FTP server."] = "Zde zadané soubory budou pøenesené na FTP server.";
$net2ftp_messages["Files which are too big can't be downloaded, uploaded, copied, moved, searched, zipped, unzipped, viewed or edited; they can only be renamed, chmodded or deleted."] = "Files which are too big can't be downloaded, uploaded, copied, moved, searched, zipped, unzipped, viewed or edited; they can only be renamed, chmodded or deleted.";
$net2ftp_messages["Find files which contain a particular word"] = "Najít soubory obsahující zadané slovo";
$net2ftp_messages["Fingerprint"] = "Fingerprint";
$net2ftp_messages["Follow symlink %1\$s"] = "Follow symlink %1\$s";
$net2ftp_messages["Font file"] = "Soubor fontu";
$net2ftp_messages["Forums"] = "Forums";
$net2ftp_messages["GIF file"] = "Obrázek GIF";
$net2ftp_messages["GIMP file"] = "Obrázek GIMP";
$net2ftp_messages["GZ archive"] = "Archiv GZ";
$net2ftp_messages["Get fingerprint"] = "Get fingerprint";
$net2ftp_messages["Get the SSH server's public key fingerprint before logging in to verify the server's identity"] = "Get the SSH server's public key fingerprint before logging in to verify the server's identity";
$net2ftp_messages["Getting archive %1\$s of %2\$s from the FTP server"] = "Getting archive %1\$s of %2\$s from the FTP server";
$net2ftp_messages["Getting fingerprint, please wait..."] = "Getting fingerprint, please wait...";
$net2ftp_messages["Getting the FTP server system type: "] = "Získávání typu systému FTP serveru: ";
$net2ftp_messages["Getting the FTP system type"] = "Getting the FTP system type";
$net2ftp_messages["Getting the current directory"] = "Getting the current directory";
$net2ftp_messages["Getting the list of directories and files"] = "Získávání seznamu adresáøù a souborù";
$net2ftp_messages["Getting the raw list of directories and files: "] = "Získávání syrového seznamu adresáøù a souborù: ";
$net2ftp_messages["Go"] = "OK";
$net2ftp_messages["Go back"] = "Pøejít zpìt";
$net2ftp_messages["Go to the advanced functions"] = "Pøejít na pokroèilé funkce";
$net2ftp_messages["Go to the login page"] = "Pøejít na pøihla?ovací stránku";
$net2ftp_messages["Go to the parent directory"] = "Pøejít do nadøazeného adresáøe";
$net2ftp_messages["Go to the subdirectory %1\$s"] = "Go to the subdirectory %1\$s";
$net2ftp_messages["Group"] = "Skupina";
$net2ftp_messages["HTML file"] = "HTML soubor";
$net2ftp_messages["HTML templates"] = "HTML templates";
$net2ftp_messages["Help"] = "Nápovìda";
$net2ftp_messages["Help Guide"] = "Help Guide";
$net2ftp_messages["IP address: "] = "IP adresa: ";
$net2ftp_messages["Icons"] = "Ikony";
$net2ftp_messages["If the destination file already exists, it will be overwritten"] = "Pokud cílovı soubor existuje, bude pøepsán";
$net2ftp_messages["If you know nothing about this or if you don't trust that person, please delete this email without opening the Zip file in attachment."] = "Pokud o tom nic nevíte nebo dotyèné osobì nedùvìøujete, tak prosím tento e-mail sma?te, ani? byste Zip soubor v pøíloze otevírali.";
$net2ftp_messages["If you need unlimited usage, please install net2ftp on your own web server."] = "Pokud potøebujete neomezené pou?ití, tak prosím net2ftp nainstalujte na vlastní webovı server.";
$net2ftp_messages["If you really need net2ftp to be able to handle big tasks which take a long time, consider installing net2ftp on your own server."] = "Pokud opravdu potøebujete, aby net2ftp dokázalo zpracovat nároèné dlouhotrvající úlohy, zva?te instalaci net2ftp na vlastním serveru.";
$net2ftp_messages["If you want to copy the files to another FTP server, enter your login data."] = "Pokud chcete soubory zkopírovat na jinı FTP server, zadejte va?e pøihla?ovací údaje.";
$net2ftp_messages["Image"] = "Obrázek";
$net2ftp_messages["In order to guarantee the fair use of the web server for everyone, the data transfer volume and script execution time are limited per user, and per day. Once this limit is reached, you can still browse the FTP server but not transfer data to/from it."] = "Pro zaji?tìní spravedlivého u?ívání webového serveru kımkoliv je objem pøene?enıch dat a èasu spu?tìní skriptù omezen pro ka?dou dvojici u?ivatel - den. Jakmile je tento limit dosa?en, m?ete procházet FTP server, ale u? na nìj ani z nìj nem?ete pøenZet data.";
$net2ftp_messages["In order to run it, click on the link below."] = "In order to run it, click on the link below.";
$net2ftp_messages["Information about the sender: "] = "Informace o odesílateli: ";
$net2ftp_messages["Initial directory"] = "Vıchozí adresáø";
$net2ftp_messages["Install"] = "Install";
$net2ftp_messages["Install software packages"] = "Install software packages";
$net2ftp_messages["Install software packages (requires PHP on web server)"] = "Install software packages (requires PHP on web server)";
$net2ftp_messages["JPEG file"] = "Obrázek JPEG";
$net2ftp_messages["Java Upload"] = "Java Nahrát";
$net2ftp_messages["Java source file"] = "Zdrojovı soubor Java";
$net2ftp_messages["JavaScript file"] = "soubor JavaScript";
$net2ftp_messages["Language:"] = "Jazyk:";
$net2ftp_messages["Leave empty if you want to copy the files to the same FTP server."] = "Nechte prázdné, pokud chcete soubory zkopírovat na stejnı FTP server.";
$net2ftp_messages["License"] = "Licence";
$net2ftp_messages["Line"] = "Line";
$net2ftp_messages["List"] = "Seznam";
$net2ftp_messages["List of commands:"] = "List of commands:";
$net2ftp_messages["Logging"] = "Záznamy";
$net2ftp_messages["Logging into the FTP server"] = "Logging into the FTP server";
$net2ftp_messages["Logging into the FTP server: "] = "Logování na FTP server: ";
$net2ftp_messages["Logging out of the FTP server"] = "Logging out of the FTP server";
$net2ftp_messages["Login"] = "Pøihlásit";
$net2ftp_messages["Login!"] = "Login!";
$net2ftp_messages["Logout"] = "Odhlásit";
$net2ftp_messages["MOV movie file"] = "Video MOV";
$net2ftp_messages["MPEG movie file"] = "Video MPEG";
$net2ftp_messages["MS Office - Access database"] = "MS Office - databáze Access";
$net2ftp_messages["MS Office - Excel spreadsheet"] = "MS Office - tabulka Excel";
$net2ftp_messages["MS Office - PowerPoint presentation"] = "MS Office - prezentace PowerPoint";
$net2ftp_messages["MS Office - Project file"] = "MS Office - projekt aplikace Project";
$net2ftp_messages["MS Office - Visio drawing"] = "MS Office - kresba Visio";
$net2ftp_messages["MS Office - Word document"] = "MS Office - dokument Word";
$net2ftp_messages["Make a new subdirectory in directory %1\$s"] = "Vytvoøit novı podadresáø v adresáøi %1\$s";
$net2ftp_messages["Message of the sender: "] = "Zpráva odesílatele: ";
$net2ftp_messages["Mobile"] = "Mobile";
$net2ftp_messages["Mod Time"] = "Èas zmìny";
$net2ftp_messages["Move"] = "Pøesunout";
$net2ftp_messages["Move directories and files"] = "Pøesunout adresáøe a soubory";
$net2ftp_messages["Move directory <b>%1\$s</b> to:"] = "Pøesunout adresáø <b>%1\$s</b> do:";
$net2ftp_messages["Move file <b>%1\$s</b> to:"] = "Pøesunout soubor <b>%1\$s</b> do:";
$net2ftp_messages["Move symlink <b>%1\$s</b> to:"] = "Pøesunout symlink <b>%1\$s</b> do:";
$net2ftp_messages["Move the selected entries"] = "Pøesunout vybrané polo?ky";
$net2ftp_messages["Moved directory <b>%1\$s</b>"] = "Moved directory <b>%1\$s</b>";
$net2ftp_messages["Moved file <b>%1\$s</b>"] = "Soubor <b>%1\$s</b> byl pøesunut";
$net2ftp_messages["MySQL database"] = "MySQL databáze";
$net2ftp_messages["MySQL password"] = "MySQL heslo";
$net2ftp_messages["MySQL password length"] = "Délka MySQL hesla";
$net2ftp_messages["MySQL server"] = "MySQL server" ;
$net2ftp_messages["MySQL username"] = "MySQL u?ivatelské jméno";
$net2ftp_messages["Name"] = "Název";
$net2ftp_messages["New dir"] = "Novı adresáø";
$net2ftp_messages["New directory name:"] = "Jméno nového adresáøe:";
$net2ftp_messages["New file"] = "Novı soubor";
$net2ftp_messages["New file name: "] = "Novı název souboru: ";
$net2ftp_messages["New name: "] = "Nové jméno: ";
$net2ftp_messages["No data"] = "?ádná data";
$net2ftp_messages["Not yet saved"] = "Not yet saved";
$net2ftp_messages["Note that if you don't open the Zip file, the files inside cannot harm your computer."] = "Pokud Zip soubor neotevøete, nemohou soubory uvnitø po?kodit vZ poèítaè.";
$net2ftp_messages["Note that sending files is not anonymous: your IP address as well as the time of the sending will be added to the email."] = "Vezmìte prosím na vìdomí, ?e pøenZení souborù není anonymní: do e-mailu bude pøidána va?e IP adresa a èas odeslání.";
$net2ftp_messages["Note: other users of this computer could click on the browser's Back button and access the FTP server."] = "Note: other users of this computer could click on the browser's Back button and access the FTP server.";
$net2ftp_messages["Note: the target directory must already exist before anything can be copied into it."] = "Poznámka: cílovı adresáø musí existovat døíve, ne? do nìj bude cokoliv zkopírováno.";
$net2ftp_messages["Note: when you will use this bookmark, a popup window will ask you for your username and password."] = "Poznámka: Kdy? pou?ijete tento odkaz, zeptá se vás vyskakovací okénko na u?ivatelské jméno a heslo.";
$net2ftp_messages["OK"] = "OK";
$net2ftp_messages["OK. Filename: %1\$s"] = "OK. Soubor: %1\$s";
$net2ftp_messages["Old name: "] = "Staré jméno: ";
$net2ftp_messages["One click access (net2ftp won't ask for a password - less safe)"] = "One click access (net2ftp won't ask for a password - less safe)";
$net2ftp_messages["Open"] = "Otevøít";
$net2ftp_messages["OpenOffice - Calc 6.0 spreadsheet"] = "OpenOffice - tabulka Calc 6.0";
$net2ftp_messages["OpenOffice - Calc 6.0 template"] = "OpenOffice - ?ablona Calc 6.0";
$net2ftp_messages["OpenOffice - Draw 6.0 document"] = "OpenOffice - dokument Draw 6.0";
$net2ftp_messages["OpenOffice - Draw 6.0 template"] = "OpenOffice - ?ablona Draw 6.0";
$net2ftp_messages["OpenOffice - Impress 6.0 presentation"] = "OpenOffice - prezentace Impress 6.0";
$net2ftp_messages["OpenOffice - Impress 6.0 template"] = "OpenOffice - ?ablona Impress 6.0";
$net2ftp_messages["OpenOffice - Math 6.0 document"] = "OpenOffice - dokument Math 6.0";
$net2ftp_messages["OpenOffice - Writer 6.0 document"] = "OpenOffice - dokument Writer 6.0";
$net2ftp_messages["OpenOffice - Writer 6.0 global document"] = "OpenOffice - globální dokument Writer 6.0";
$net2ftp_messages["OpenOffice - Writer 6.0 template"] = "OpenOffice - ?ablona Writer 6.0";
$net2ftp_messages["Opening the file in write mode: "] = "Otevírání souboru v re?imu zápisu: ";
$net2ftp_messages["Owner"] = "Vlastník";
$net2ftp_messages["PHP Source"] = "PHP zdrojovı kód";
$net2ftp_messages["PHP script"] = "PHP skript";
$net2ftp_messages["PNG file"] = "Obrázek PNG";
$net2ftp_messages["Parsing the file"] = "Parsing the file";
$net2ftp_messages["Parsing the list of directories and files"] = "Parsing the list of directories and files";
$net2ftp_messages["Passive mode"] = "Pasivní re?im";
$net2ftp_messages["Password"] = "Heslo";
$net2ftp_messages["Password length"] = "Délka hesla";
$net2ftp_messages["Perms"] = "Práva";
$net2ftp_messages["Please enter a password."] = "Please enter a password.";
$net2ftp_messages["Please enter a username."] = "Please enter a username.";
$net2ftp_messages["Please enter a valid date in Y-m-d format in the \"from\" textbox."] = "Zadejte prosím platné datum ve formátu Y-m-d do textového pole \"od\".";
$net2ftp_messages["Please enter a valid date in Y-m-d format in the \"to\" textbox."] = "Zadejte prosím platné datum ve formátu Y-m-d do textového pole \"do\".";
$net2ftp_messages["Please enter a valid file size in the \"from\" textbox, for example 0."] = "Zadejte prosím platnou velikost souboru do textového pole \"od\", napøíklad 0.";
$net2ftp_messages["Please enter a valid file size in the \"to\" textbox, for example 500000."] = "Zadejte prosím platnou velikost souboru do textového pole \"do\", napøíklad 50000.";
$net2ftp_messages["Please enter a valid filename."] = "Zadejte prosím platné jméno souboru.";
$net2ftp_messages["Please enter a valid search word or phrase."] = "Zadejte prosím platné slovo nebo slovní spojení pro vyhledávání.";
$net2ftp_messages["Please enter an FTP server."] = "Please enter an FTP server.";
$net2ftp_messages["Please enter your Administrator username and password."] = "Please enter your Administrator username and password.";
$net2ftp_messages["Please enter your MySQL settings:"] = "Please enter your MySQL settings:";
$net2ftp_messages["Please enter your username and password for FTP server <b>%1\$s</b>."] = "Please enter your username and password for FTP server <b>%1\$s</b>.";
$net2ftp_messages["Please specify a filename"] = "Vyberte prosím soubor";
$net2ftp_messages["Please wait..."] = "Prosím èekejte...";
$net2ftp_messages["Powered by"] = "B?í díky";
$net2ftp_messages["Printing the list of directories and files"] = "Vypisování seznamu adresáøù a souborù";
$net2ftp_messages["Printing the result"] = "Printing the result";
$net2ftp_messages["Processing archive nr %1\$s: <b>%2\$s</b>"] = "Zpracování archivu è. %1\$s: <b>%2\$s</b>";
$net2ftp_messages["Processing directory <b>%1\$s</b>"] = "Zpracování adresáøe <b>%1\$s</b>";
$net2ftp_messages["Processing entries within directory <b>%1\$s</b>:"] = "Processing entries within directory <b>%1\$s</b>:";
$net2ftp_messages["Processing entry %1\$s"] = "Processing entry %1\$s";
$net2ftp_messages["Processing of directory <b>%1\$s</b> completed"] = "Zpracování adresáøe <b>%1\$s</b> bylo dokonèeno";
$net2ftp_messages["Processing the entries"] = "Zpracovávání záznamù";
$net2ftp_messages["Protocol"] = "Protocol";
$net2ftp_messages["Quicktime movie file"] = "Video Quicktime";
$net2ftp_messages["RPM"] = "RPM" ;
$net2ftp_messages["Reading the file"] = "Reading the file";
$net2ftp_messages["Real movie file"] = "Video Real";
$net2ftp_messages["Refresh"] = "Obnovit";
$net2ftp_messages["Rename"] = "Pøejmenovat";
$net2ftp_messages["Rename directories and files"] = "Pøejmenovat adresáøe nebo soubory";
$net2ftp_messages["Rename the selected entries"] = "Pøejmenovat vybrané polo?ky";
$net2ftp_messages["Requested files"] = "Po?adované soubory";
$net2ftp_messages["Restrict the search to:"] = "Omezit vyhledávání na:";
$net2ftp_messages["Restrictions:"] = "Omezení:";
$net2ftp_messages["Results:"] = "Vısledky:";
$net2ftp_messages["Right-click on one of the links below and choose \"Add to Favorites...\""] = "Right-click on one of the links below and choose \"Add to Favorites...\"";
$net2ftp_messages["Right-click on one of the links below and choose \"Bookmark This Link...\""] = "Right-click on one of the links below and choose \"Bookmark This Link...\"";
$net2ftp_messages["Right-click on one of the links below and choose \"Bookmark link...\""] = "Right-click on one of the links below and choose \"Bookmark link...\"";
$net2ftp_messages["Right-click on one the links below and choose \"Add Link to Bookmarks...\""] = "Right-click on one the links below and choose \"Add Link to Bookmarks...\"";
$net2ftp_messages["SSH fingerprint"] = "SSH fingerprint";
$net2ftp_messages["SSH server"] = "SSH server";
$net2ftp_messages["Save"] = "Ulo?it";
$net2ftp_messages["Save the zip file on the FTP server as:"] = "Ulo?it zip na FTP serveru jako:";
$net2ftp_messages["Saved at %1\$s"] = "Saved at %1\$s";
$net2ftp_messages["Script finished in %1\$s seconds"] = "Skript skonèil za %1\$s sekund";
$net2ftp_messages["Script halted"] = "Skript zastavil";
$net2ftp_messages["Search"] = "Vyhledat";
$net2ftp_messages["Search directories and files"] = "Prohledat adresáøe a soubory";
$net2ftp_messages["Search for a word or phrase"] = "Hledat slovo nebo slovní spojení";
$net2ftp_messages["Search results"] = "Vısledky vyhledávání";
$net2ftp_messages["Searching the files..."] = "Prohledávání souborù...";
$net2ftp_messages["Select the directory %1\$s"] = "Select the directory %1\$s";
$net2ftp_messages["Select the file %1\$s"] = "Select the file %1\$s";
$net2ftp_messages["Select the symlink %1\$s"] = "Select the symlink %1\$s";
$net2ftp_messages["Send arbitrary FTP commands"] = "Send arbitrary FTP commands";
$net2ftp_messages["Send arbitrary FTP commands to the FTP server"] = "Send arbitrary FTP commands to the FTP server";
$net2ftp_messages["Sending FTP command %1\$s of %2\$s"] = "Sending FTP command %1\$s of %2\$s";
$net2ftp_messages["Sent via the net2ftp application installed on this website: "] = "Posláno aplikací net2ftp nainstalovanou na tomto webovém serveru: ";
$net2ftp_messages["Set all permissions"] = "Nastavit v?echna práva";
$net2ftp_messages["Set all targetdirectories"] = "Nastavit v?echny cílové adresáøe";
$net2ftp_messages["Set the permissions of directory <b>%1\$s</b> to: "] = "Nastavit práva adresáøe <b>%1\$s</b> na: ";
$net2ftp_messages["Set the permissions of file <b>%1\$s</b> to: "] = "Nastavit práva souboru <b>%1\$s</b> na: ";
$net2ftp_messages["Set the permissions of symlink <b>%1\$s</b> to: "] = "Nastavit práva symlinku <b>%1\$s</b> na: ";
$net2ftp_messages["Setting the passive mode"] = "Setting the passive mode";
$net2ftp_messages["Setting the passive mode: "] = "Nastavování pasivního re?imu: ";
$net2ftp_messages["Setting the permissions of the temporary directory"] = "Setting the permissions of the temporary directory";
$net2ftp_messages["Settings used:"] = "Pou?itá nastavení:";
$net2ftp_messages["Setup MySQL tables"] = "Nastavit MySQL tabulky";
$net2ftp_messages["Shell script"] = "Shellovskı skript";
$net2ftp_messages["Shockwave file"] = "Soubor Shockwave";
$net2ftp_messages["Shockwave flash file"] = "Shockwave Flash";
$net2ftp_messages["Should this link not be correct, enter the URL manually in your web browser."] = "Should this link not be correct, enter the URL manually in your web browser.";
$net2ftp_messages["Size"] = "Velikost";
$net2ftp_messages["Size of selected directories and files"] = "Velikost vybranıch adresáøù a souborù";
$net2ftp_messages["Skin:"] = "Motiv:";
$net2ftp_messages["Some additional comments to add in the email:"] = "Dal?í komentáø, kterı chcete pøipojit k e-mailu:";
$net2ftp_messages["Someone has requested the files in attachment to be sent to this email account (%1\$s)."] = "Nìkdo po?ádal o poslání souborù v pøíloze na va?i e-mailovou adresu (%1\$s).";
$net2ftp_messages["Standard"] = "Standard";
$net2ftp_messages["StarOffice - StarCalc 5.x spreadsheet"] = "StarOffice - tabulka StarCalc 5.x";
$net2ftp_messages["StarOffice - StarChart 5.x document"] = "StarOffice - dokument StarChart 5.x";
$net2ftp_messages["StarOffice - StarDraw 5.x document"] = "StarOffice - dokument StarDraw 5.x";
$net2ftp_messages["StarOffice - StarImpress 5.x presentation"] = "StarOffice - prezentace StarImpress 5.x";
$net2ftp_messages["StarOffice - StarImpress Packed 5.x file"] = "StarOffice - soubor StarImpress Packed 5.x";
$net2ftp_messages["StarOffice - StarMail 5.x mail file"] = "StarOffice - soubor po?ty StarMail 5.x";
$net2ftp_messages["StarOffice - StarMath 5.x document"] = "StarOffice - dokument StarMath 5.x";
$net2ftp_messages["StarOffice - StarWriter 5.x document"] = "StarOffice - dokument StarWriter 5.x";
$net2ftp_messages["StarOffice - StarWriter 5.x global document"] = "StarOffice - globální dokument StarWriter 5.x";
$net2ftp_messages["Status: <b>This file could not be saved</b>"] = "Stav: <b>Tento soubor nem?e bıt ulo?en</b>";
$net2ftp_messages["Status: Saved on <b>%1\$s</b> using mode %2\$s"] = "Stav: Ulo?ení <b>%1\$s</b> v módu %2\$s";
$net2ftp_messages["Status: This file has not yet been saved"] = "Stav: Tento soubor je?tì nebyl ulo?en";
$net2ftp_messages["Submit"] = "Odeslat";
$net2ftp_messages["Symlink"] = "Symlink" ;
$net2ftp_messages["Symlink <b>%1\$s</b>"] = "Symlink <b>%1\$s</b>" ;
$net2ftp_messages["Symlinks"] = "Symlinky";
$net2ftp_messages["Syntax highlighting powered by <a href=\"http://luminous.asgaard.co.uk\">Luminous</a>"] = "Syntax highlighting powered by <a href=\"http://luminous.asgaard.co.uk\">Luminous</a>";
$net2ftp_messages["TAR archive"] = "Archiv TAR";
$net2ftp_messages["TIF file"] = "Obrázek TIF";
$net2ftp_messages["Table net2ftp_log_access contains duplicate entries."] = "Table net2ftp_log_access contains duplicate entries.";
$net2ftp_messages["Table net2ftp_log_access could not be updated."] = "Table net2ftp_log_access could not be updated.";
$net2ftp_messages["Table net2ftp_log_consumption_ftpserver contains duplicate entries."] = "Tabulka net2ftp_log_consumption_ftpserver obsahuje duplicitní záznamy.";
$net2ftp_messages["Table net2ftp_log_consumption_ftpserver contains duplicate rows."] = "Tabulka net2ftp_log_consumption_ftpserver obsahuje duplicitní záznamy.";
$net2ftp_messages["Table net2ftp_log_consumption_ftpserver could not be updated."] = "Tabulka net2ftp_log_consumption_ftpserver nemohla bıt aktualizována.";
$net2ftp_messages["Table net2ftp_log_consumption_ipaddress contains duplicate entries."] = "Tabulka net2ftp_log_consumption_ipaddress obsahuje duplicitní záznamy.";
$net2ftp_messages["Table net2ftp_log_consumption_ipaddress contains duplicate rows."] = "Tabulka net2ftp_log_consumption_ipaddress obsahuje duplicitní záznamy.";
$net2ftp_messages["Table net2ftp_log_consumption_ipaddress could not be updated."] = "Tabulka net2ftp_log_consumption_ipaddress nemohla bıt aktualizována.";
$net2ftp_messages["Table net2ftp_log_status contains duplicate entries."] = "Table net2ftp_log_status contains duplicate entries.";
$net2ftp_messages["Table net2ftp_log_status could not be updated."] = "Table net2ftp_log_status could not be updated.";
$net2ftp_messages["Table net2ftp_users contains duplicate rows."] = "Table net2ftp_users contains duplicate rows.";
$net2ftp_messages["Target directory:"] = "Cílovı adresáø:";
$net2ftp_messages["Target name:"] = "Cílové jméno:";
$net2ftp_messages["Test the net2ftp list parsing rules"] = "Test the net2ftp list parsing rules";
$net2ftp_messages["Testing the FTP functions"] = "Testing the FTP functions";
$net2ftp_messages["Text file"] = "Textovı soubor";
$net2ftp_messages["The <a href=\"http://www.php.net/manual/en/ref.ftp.php\" target=\"_blank\">FTP module of PHP</a> is not installed.<br /><br /> The administrator of this website should install this FTP module. Installation instructions are given on <a href=\"http://www.php.net/manual/en/ref.ftp.php\" target=\"_blank\">php.net</a>.<br />"] = "The <a href=\"http://www.php.net/manual/en/ref.ftp.php\" target=\"_blank\">FTP module of PHP</a> is not installed.<br /><br /> The administrator of this website should install this FTP module. Installation instructions are given on <a href=\"http://www.php.net/manual/en/ref.ftp.php\" target=\"_blank\">php.net</a>.<br />";
$net2ftp_messages["The FTP module of PHP and/or OpenSSL are not installed.<br /><br /> The administrator of this website should install these. Installation instructions are given on php.net: <a href=\"http://www.php.net/manual/en/ref.ftp.php\" target=\"_blank\">FTP module installation</a> and <a href=\"http://php.net/manual/en/openssl.installation.php\">OpenSSL installation</a>.<br />"] = "The FTP module of PHP and/or OpenSSL are not installed.<br /><br /> The administrator of this website should install these. Installation instructions are given on php.net: <a href=\"http://www.php.net/manual/en/ref.ftp.php\" target=\"_blank\">FTP module installation</a> and <a href=\"http://php.net/manual/en/openssl.installation.php\">OpenSSL installation</a>.<br />";
$net2ftp_messages["The FTP server <b>%1\$s</b> is in the list of banned FTP servers."] = "FTP server <b>%1\$s</b> je na seznamu zakázanıch serverù.";
$net2ftp_messages["The FTP server <b>%1\$s</b> is not in the list of allowed FTP servers."] = "FTP server <b>%1\$s</b> není na seznamu povolenıch serverù.";
$net2ftp_messages["The FTP server port %1\$s may not be used."] = "Port %1\$s FTP serveru nem?e bıt pou?it.";
$net2ftp_messages["The FTP transfer mode (ASCII or BINARY) will be automatically determined, based on the filename extension"] = "Re?im FTP pøenosu (ASCII nebo BINARY) bude automaticky nastaven podle koncovky";
$net2ftp_messages["The SQL query nr <b>%1\$s</b> could not be executed."] = "The SQL query nr <b>%1\$s</b> could not be executed.";
$net2ftp_messages["The SQL query nr <b>%1\$s</b> was executed successfully."] = "The SQL query nr <b>%1\$s</b> was executed successfully.";
$net2ftp_messages["The SSH server's fingerprint does not match the fingerprint which was validated previously.<br /><br />Current fingerprint: %1\$s <br />Fingerprint validated previously: %2\$s <br /><br />"] = "The SSH server's fingerprint does not match the fingerprint which was validated previously.<br /><br />Current fingerprint: %1\$s <br />Fingerprint validated previously: %2\$s <br /><br />";
$net2ftp_messages["The chmod nr <b>%1\$s</b> is out of the range 000-777. Please try again."] = "Èíslo pro chmod <b>%1\$s</b> je mimo rozsah 000-777. Zkuste to prosím znovu.";
$net2ftp_messages["The directory <b>%1\$s</b> contains a banned keyword, aborting the move"] = "The directory <b>%1\$s</b> contains a banned keyword, aborting the move";
$net2ftp_messages["The directory <b>%1\$s</b> contains a banned keyword, so this directory will be skipped"] = "The directory <b>%1\$s</b> contains a banned keyword, so this directory will be skipped";
$net2ftp_messages["The directory <b>%1\$s</b> could not be selected - you may not have sufficient rights to view this directory, or it may not exist."] = "The directory <b>%1\$s</b> could not be selected - you may not have sufficient rights to view this directory, or it may not exist.";
$net2ftp_messages["The directory <b>%1\$s</b> could not be selected, so this directory will be skipped"] = "The directory <b>%1\$s</b> could not be selected, so this directory will be skipped";
$net2ftp_messages["The directory <b>%1\$s</b> does not exist or could not be selected, so the directory <b>%2\$s</b> is shown instead."] = "The directory <b>%1\$s</b> does not exist or could not be selected, so the directory <b>%2\$s</b> is shown instead.";
$net2ftp_messages["The email address you have entered (%1\$s) does not seem to be valid.<br />Please enter an address in the format <b>username@domain.com</b>"] = "Zdá se, ?e e-mailová adresa, kterou jste zadal (%1\$s), není platná.<br />Zadejte prosím adresu ve formátu <b>uzivatel@domena.cz</b>";
$net2ftp_messages["The file %1\$s could not be opened."] = "The file %1\$s could not be opened.";
$net2ftp_messages["The file <b>%1\$s</b> contains a banned keyword, aborting the move"] = "The file <b>%1\$s</b> contains a banned keyword, aborting the move";
$net2ftp_messages["The file <b>%1\$s</b> contains a banned keyword, so this file will be skipped"] = "The file <b>%1\$s</b> contains a banned keyword, so this file will be skipped";
$net2ftp_messages["The file <b>%1\$s</b> is too big to be copied, so this file will be skipped"] = "The file <b>%1\$s</b> is too big to be copied, so this file will be skipped";
$net2ftp_messages["The file <b>%1\$s</b> is too big to be moved, aborting the move"] = "The file <b>%1\$s</b> is too big to be moved, aborting the move";
$net2ftp_messages["The file is too big to be transferred"] = "The file is too big to be transferred";
$net2ftp_messages["The handle of file %1\$s could not be closed."] = "The handle of file %1\$s could not be closed.";
$net2ftp_messages["The handle of file %1\$s could not be opened."] = "The handle of file %1\$s could not be opened.";
$net2ftp_messages["The latest version information could not be retrieved from the net2ftp.com server. Check the security settings of your browser, which may prevent the loading of a small file from the net2ftp.com server."] = "The latest version information could not be retrieved from the net2ftp.com server. Check the security settings of your browser, which may prevent the loading of a small file from the net2ftp.com server.";
$net2ftp_messages["The log tables could not be copied."] = "The log tables could not be copied.";
$net2ftp_messages["The log tables could not be renamed."] = "The log tables could not be renamed.";
$net2ftp_messages["The log tables were copied successfully."] = "The log tables were copied successfully.";
$net2ftp_messages["The log tables were renamed successfully."] = "The log tables were renamed successfully.";
$net2ftp_messages["The maximum execution time is <b>%1\$s seconds</b>"] = "Maximální èas provádìní je <b>%1\$s sekund</b>";
$net2ftp_messages["The maximum size of one file is restricted by net2ftp to <b>%1\$s</b> and by PHP to <b>%2\$s</b>"] = "Maximální velikost jednoho souboru je v net2ftp omezena na <b>%1\$s</b> a v PHP na <b>%2\$s</b>";
$net2ftp_messages["The net2ftp installer script has been copied to the FTP server."] = "The net2ftp installer script has been copied to the FTP server.";
$net2ftp_messages["The new directories will be created in <b>%1\$s</b>."] = "Nové adresáøe budou vytvoøené v <b>%1\$s</b>.";
$net2ftp_messages["The new name may not contain any banned keywords. This entry was not renamed to <b>%1\$s</b>"] = "The new name may not contain any banned keywords. This entry was not renamed to <b>%1\$s</b>";
$net2ftp_messages["The new name may not contain any dots. This entry was not renamed to <b>%1\$s</b>"] = "Nové jméno nesmí obsahovat ?ádné teèky. Tato polo?ka byla pøejmenována na <b>%1\$s</b>";
$net2ftp_messages["The number of files which were skipped is:"] = "The number of files which were skipped is:";
$net2ftp_messages["The oldest log table could not be dropped."] = "The oldest log table could not be dropped.";
$net2ftp_messages["The oldest log table was dropped successfully."] = "The oldest log table was dropped successfully.";
$net2ftp_messages["The online installation is about 1-2 MB and the offline installation is about 13 MB. This 'end-user' java is called JRE (Java Runtime Environment)."] = "The online installation is about 1-2 MB and the offline installation is about 13 MB. This 'end-user' java is called JRE (Java Runtime Environment).";
$net2ftp_messages["The table <b>%1\$s</b> could not be emptied."] = "Nepodaøilo se vyprázdnit tabulku <b>%1\$s</b>.";
$net2ftp_messages["The table <b>%1\$s</b> could not be optimized."] = "The table <b>%1\$s</b> could not be optimized.";
$net2ftp_messages["The table <b>%1\$s</b> was emptied successfully."] = "Tabulka <b>%1\$s</b> byla úsp?nì vyprázdnìna.";
$net2ftp_messages["The table <b>%1\$s</b> was optimized successfully."] = "The table <b>%1\$s</b> was optimized successfully.";
$net2ftp_messages["The target directory <b>%1\$s</b> is the same as or a subdirectory of the source directory <b>%2\$s</b>, so this directory will be skipped"] = "Cílovı adresáø <b>%1\$s</b> je stejnı jako zdrojovı adresáø <b>%2\$s</b> nebo je jeho podadresáøem, tento adresáø proto bude pøeskoèen";
$net2ftp_messages["The target for file <b>%1\$s</b> is the same as the source, so this file will be skipped"] = "Cílové umístìní souboru <b>%1\$s</b> je stejné jako zdrojové, proto bude tento soubor pøeskoèen";
$net2ftp_messages["The task you wanted to perform with net2ftp took more time than the allowed %1\$s seconds, and therefor that task was stopped."] = "Úloha, kterou jste chtìli pomocí net2ftp provést, trvala více ne? povolenıch %1\$s sekund, a proto byla zastavena.";
$net2ftp_messages["The total size taken by the selected directories and files is:"] = "Celková velikost vybranıch adresáøù a souborù je:";
$net2ftp_messages["The variable <b>consumption_ipaddress_datatransfer</b> is not numeric."] = "Promìnná <b>consumption_ipaddress_datatransfer</b> není èíselná.";
$net2ftp_messages["The word <b>%1\$s</b> was found in the following files:"] = "Slovo <b>%1\$s</b> bylo nalezeno v tìchto souborech:";
$net2ftp_messages["The word <b>%1\$s</b> was not found in the selected directories and files."] = "Slovo <b>%1\$s</b> nebylo ve vybranıch adresáøích a souborech nalezeno.";
$net2ftp_messages["The zip file has been saved on the FTP server as <b>%1\$s</b>"] = "Soubor ZIP byl na FTP server ulo?en jako <b>%1\$s</b>";
$net2ftp_messages["The zip file has been sent to <b>%1\$s</b>."] = "Soubor ZIP byl odeslán na adresu <b>%1\$s</b>.";
$net2ftp_messages["This SQL query is going to be executed:"] = "Vykoná se tento SQL dotaz:";
$net2ftp_messages["This file is not accessible from the web"] = "This file is not accessible from the web";
$net2ftp_messages["This folder is empty"] = "Tento adresáø je prázdnı";
$net2ftp_messages["This function has been disabled by the Administrator of this website."] = "This function has been disabled by the Administrator of this website.";
$net2ftp_messages["This function is available on PHP 5 only"] = "This function is available on PHP 5 only";
$net2ftp_messages["This script runs on your web server and requires PHP to be installed."] = "This script runs on your web server and requires PHP to be installed.";
$net2ftp_messages["This time limit guarantees the fair use of the web server for everyone."] = "Tento èasovı limit zaruèuje spravedlivé vyu?ití webového serveru v?emi u?ivateli.";
$net2ftp_messages["This version of net2ftp is up-to-date."] = "This version of net2ftp is up-to-date.";
$net2ftp_messages["Time of sending: "] = "Èas odeslání: ";
$net2ftp_messages["To prevent this, you must close all browser windows."] = "To prevent this, you must close all browser windows.";
$net2ftp_messages["To save the image, right-click on it and choose 'Save picture as...'"] = "Pokud chcete ulo?it obrázek, tak na nìj kliknìte pravım tlaèítkem my?i a zvolte 'Ulo?it obrázek jako...'";
$net2ftp_messages["To set a common target directory, enter that target directory in the textbox above and click on the button \"Set all targetdirectories\"."] = "Pokud chcete nastavit obvyklı cílovı adresáø, zadejte ho do textového políèka v?e a stisknìte tlaèítko \"Nastavit v?echny cílové adresáøe\".";
$net2ftp_messages["To set all permissions to the same values, enter those permissions above and click on the button \"Set all permissions\""] = "To set all permissions to the same values, enter those permissions above and click on the button \"Set all permissions\"";
$net2ftp_messages["To set all permissions to the same values, enter those permissions and click on the button \"Set all permissions\""] = "Pokud chcete nastavit v?echna práva na stejnou hodnotu, zadejte tato práva v?e a stisknìte tlaèítko \"Nastavit v?echna práva\"";
$net2ftp_messages["To use this applet, please install the newest version of Sun's java. You can get it from <a href=\"http://www.java.com/\">java.com</a>. Click on Get It Now."] = "To use this applet, please install the newest version of Sun's java. You can get it from <a href=\"http://www.java.com/\">java.com</a>. Click on Get It Now.";
$net2ftp_messages["Transferring files to the FTP server"] = "PøenZení souborù na FTP server";
$net2ftp_messages["Transform selected entries: "] = "Zmìnit vybrané polo?ky: ";
$net2ftp_messages["Transform selected entry: "] = "Transform selected entry: ";
$net2ftp_messages["Troubleshoot an FTP server"] = "Øe?ení problémù FTP serveru";
$net2ftp_messages["Troubleshoot net2ftp on this webserver"] = "Øe?ení problémù net2ftp na tomto webovém serveru";
$net2ftp_messages["Troubleshoot your net2ftp installation"] = "Øe?ení problémù va?í instalace net2ftp";
$net2ftp_messages["Troubleshooting functions"] = "Funkce pro odstraòování problémù";
$net2ftp_messages["Try to split your task in smaller tasks: restrict your selection of files, and omit the biggest files."] = "Pokuste se va?e úlohy rozdìlit na men?í èásti: omezte vıbìr souborù a vynechejte ty nejvìt?í.";
$net2ftp_messages["Two click access (net2ftp will ask for a password - safer)"] = "Two click access (net2ftp will ask for a password - safer)";
$net2ftp_messages["Type"] = "Typ";
$net2ftp_messages["Unable to close the handle of the temporary file"] = "Nepodaøilo se uzavøít doèasnı soubor";
$net2ftp_messages["Unable to connect to FTP server <b>%1\$s</b> on port <b>%2\$s</b>.<br /><br />Are you sure this is the address of the FTP server? This is often different from that of the HTTP (web) server. Please contact your ISP helpdesk or system administrator for help.<br />"] = "Nepodaøilo se pøipojit k FTP serveru <b>%1\$s</b> na portu <b>%2\$s</b>.<br /><br />Víte jistì, ?e se jedná o adresu FTP serveru? Ta se èasto li?í od adresy HTTP (webového) serveru. Pro získání pomoci prosím kontaktujte odbornou pomoc svého ISP nebo systémového administrátora.<br />";
$net2ftp_messages["Unable to connect to SSH server <b>%1\$s</b> on port <b>%2\$s</b> (%3\$s).<br /><br />Are you sure this is the address of the FTP server? This is often different from that of the HTTP (web) server. Please contact your ISP helpdesk or system administrator for help.<br />"] = "Unable to connect to SSH server <b>%1\$s</b> on port <b>%2\$s</b> (%3\$s).<br /><br />Are you sure this is the address of the FTP server? This is often different from that of the HTTP (web) server. Please contact your ISP helpdesk or system administrator for help.<br />";
$net2ftp_messages["Unable to connect to the MySQL database. Please check your MySQL database settings in net2ftp's configuration file settings.inc.php."] = "Unable to connect to the MySQL database. Please check your MySQL database settings in net2ftp's configuration file settings.inc.php.";
$net2ftp_messages["Unable to connect to the server <b>%1\$s</b>."] = "Unable to connect to the server <b>%1\$s</b>.";
$net2ftp_messages["Unable to copy the file <b>%1\$s</b>"] = "Nepodaøilo se zkopírovat soubor <b>%1\$s</b>";
$net2ftp_messages["Unable to copy the local file to the remote file <b>%1\$s</b> using FTP mode <b>%2\$s</b>"] = "Nepodaøilo se zkopírovat místní soubor do vzdáleného souboru <b>%1\$s</b> v FTP re?imu <b>%2\$s</b>";
$net2ftp_messages["Unable to copy the remote file <b>%1\$s</b> to the local file using FTP mode <b>%2\$s</b>"] = "Nepodaøilo se zkopírovat vzdálenı soubor <b>%1\$s</b> do místního v FTP re?imu <b>%2\$s</b>";
$net2ftp_messages["Unable to create a temporary directory (too many tries)"] = "Unable to create a temporary directory (too many tries)";
$net2ftp_messages["Unable to create a temporary directory because (parent directory is not writeable)"] = "Unable to create a temporary directory because (parent directory is not writeable)";
$net2ftp_messages["Unable to create a temporary directory because (unvalid parent directory)"] = "Unable to create a temporary directory because (unvalid parent directory)";
$net2ftp_messages["Unable to create the directory <b>%1\$s</b>"] = "Nepodaøilo se vytvoøit adresáø <b>%1\$s</b>";
$net2ftp_messages["Unable to create the subdirectory <b>%1\$s</b>. It may already exist. Continuing the copy/move process..."] = "Nepodaøilo se vytvoøit podadresáø <b>%1\$s</b>. Mo?ná u? existuje. Pokraèuje se v kopírování/pøesouvání...";
$net2ftp_messages["Unable to create the temporary file. Check the permissions of the %1\$s directory."] = "Nepodaøilo se vytvoøit doèasnı soubor. Zkontrolujte oprávnìní adresáøe %1\$s.";
$net2ftp_messages["Unable to delete file <b>%1\$s</b>"] = "Nepodaøilo se smazat soubor <b>%1\$s</b>";
$net2ftp_messages["Unable to delete the directory <b>%1\$s</b>"] = "Nepodaøilo se smazat adresáø <b>%1\$s</b>";
$net2ftp_messages["Unable to delete the file <b>%1\$s</b>"] = "Nepodaøilo se smazat soubor <b>%1\$s</b>";
$net2ftp_messages["Unable to delete the local file"] = "Nepodaøilo se smazat místní soubor";
$net2ftp_messages["Unable to delete the subdirectory <b>%1\$s</b> - it may not be empty"] = "Nepodaøilo se smazat podadresáø <b>%1\$s</b> - mo?ná není prázdnı";
$net2ftp_messages["Unable to delete the temporary directory"] = "Unable to delete the temporary directory";
$net2ftp_messages["Unable to delete the temporary file"] = "Nepodaøilo se smazat doèasnı soubor";
$net2ftp_messages["Unable to delete the temporary file %1\$s"] = "Unable to delete the temporary file %1\$s";
$net2ftp_messages["Unable to determine your IP address."] = "Nepodaøilo se zjistit va?i IP adresu.";
$net2ftp_messages["Unable to execute site command <b>%1\$s</b>"] = "Nepodaøilo se vykonat pøíkaz serveru <b>%1\$s</b>";
$net2ftp_messages["Unable to execute site command <b>%1\$s</b>. Note that the CHMOD command is only available on Unix FTP servers, not on Windows FTP servers."] = "Nepodaøilo se vykonat serverovı pøíkaz <b>%1\$s</b>. Vezmìte prosím na vìdomí, ?e pøíkaz CHMOD je k dispozici pouze na Unixovıch FTP serverech a ne na FTP serverech pod Windows.";
$net2ftp_messages["Unable to execute the SQL query <b>%1\$s</b>."] = "Unable to execute the SQL query <b>%1\$s</b>.";
$net2ftp_messages["Unable to execute the SQL query."] = "Unable to execute the SQL query.";
$net2ftp_messages["Unable to extract the files and directories from the archive"] = "Unable to extract the files and directories from the archive";
$net2ftp_messages["Unable to get the archive <b>%1\$s</b> from the FTP server"] = "Unable to get the archive <b>%1\$s</b> from the FTP server";
$net2ftp_messages["Unable to get the file <b>%1\$s</b> from the FTP server and to save it as temporary file <b>%2\$s</b>.<br />Check the permissions of the %3\$s directory.<br />"] = "Nepodaøilo se získat soubor <b>%1\$s</b> z FTP serveru a ulo?it ho do doèasného souboru <b>%2\$s</b>.<br />Zkontrolujte oprávnìní adresáøe %3\$s.<br />";
$net2ftp_messages["Unable to get the list of packages"] = "Unable to get the list of packages";
$net2ftp_messages["Unable to login to FTP server <b>%1\$s</b> with username <b>%2\$s</b>.<br /><br />Are you sure your username and password are correct? Please contact your ISP helpdesk or system administrator for help.<br />"] = "Nepodaøilo se pøihlásit k FTP serveru <b>%1\$s</b> pod u?ivatelskım jménem <b>%2\$s</b>.<br /><br />Jste si jist, ?e je u?ivatelské jméno a heslo správné? Pro získání pomoci prosím kontaktujte odbornou pomoc svého ISP nebo systémového administrátora.<br />";
$net2ftp_messages["Unable to login to SSH server <b>%1\$s</b> with username <b>%2\$s</b> (%3\$s).<br /><br />Are you sure your username and password are correct? Please contact your ISP helpdesk or system administrator for help.<br />"] = "Unable to login to SSH server <b>%1\$s</b> with username <b>%2\$s</b> (%3\$s).<br /><br />Are you sure your username and password are correct? Please contact your ISP helpdesk or system administrator for help.<br />";
$net2ftp_messages["Unable to move the directory <b>%1\$s</b>"] = "Unable to move the directory <b>%1\$s</b>";
$net2ftp_messages["Unable to move the file <b>%1\$s</b>"] = "Unable to move the file <b>%1\$s</b>";
$net2ftp_messages["Unable to move the file <b>%1\$s</b>, aborting the move"] = "Unable to move the file <b>%1\$s</b>, aborting the move";
$net2ftp_messages["Unable to move the uploaded file to the temp directory.<br /><br />The administrator of this website has to <b>chmod 777</b> the /temp directory of net2ftp."] = "Nepodaøilo se pøesunout nahranı soubor do doèasného adresáøe.<br /><br />Administrátor tohoto webového serveru musí na adresáø net2ftp /temp provést <b>chmod 777</b>.";
$net2ftp_messages["Unable to open the system log."] = "Unable to open the system log.";
$net2ftp_messages["Unable to open the template file"] = "Nepodaøilo se otevøít soubor se ?ablonami";
$net2ftp_messages["Unable to open the temporary file. Check the permissions of the %1\$s directory."] = "Nepodaøilo se otevøít doèasnı soubor. Zkontrolujte oprávnìní adresáøe %1\$s.";
$net2ftp_messages["Unable to put the file <b>%1\$s</b> on the FTP server.<br />You may not have write permissions on the directory."] = "Nepodaøilo se nahrát soubor <b>%1\$s</b> na FTP server.<br />Mo?ná nemáte práva zápisu do daného adresáøe.";
$net2ftp_messages["Unable to read the template file"] = "Nepodaøilo se naèíst soubor se ?ablonami";
$net2ftp_messages["Unable to read the temporary file"] = "Nepodaøilo se pøeèíst doèasnı soubor";
$net2ftp_messages["Unable to rename directory or file <b>%1\$s</b> into <b>%2\$s</b>"] = "Nepodaøilo se pøejmenovat adresáø nebo soubor <b>%1\$s</b> na <b>%2\$s</b>";
$net2ftp_messages["Unable to select the MySQL database. Please check your MySQL database settings in net2ftp's configuration file settings.inc.php."] = "Unable to select the MySQL database. Please check your MySQL database settings in net2ftp's configuration file settings.inc.php.";
$net2ftp_messages["Unable to select the database <b>%1\$s</b>."] = "Unable to select the database <b>%1\$s</b>.";
$net2ftp_messages["Unable to send the file to the browser"] = "Nepodaøilo se odeslat soubor prohl?eèi";
$net2ftp_messages["Unable to switch to the passive mode on FTP server <b>%1\$s</b>."] = "Nepodaøilo se pøepnout do pasivního re?imu na FTP serveru <b>%1\$s</b>.";
$net2ftp_messages["Unable to write a message to the system log."] = "Unable to write a message to the system log.";
$net2ftp_messages["Unable to write the string to the temporary file <b>%1\$s</b>.<br />Check the permissions of the %2\$s directory."] = "Nepodaøilo se zapsat øetìzec do doèasného souboru <b>%1\$s</b>.<br />Zkontrolujte oprávnìní adresáøe %2\$s.";
$net2ftp_messages["Unexpected state string: %1\$s. Exiting."] = "Unexpected state string: %1\$s. Exiting.";
$net2ftp_messages["Unrecognized FTP output"] = "Nerozpoznanı FTP vıstup";
$net2ftp_messages["Unzip"] = "Unzip";
$net2ftp_messages["Unzip archive <b>%1\$s</b> to:"] = "Unzip archive <b>%1\$s</b> to:";
$net2ftp_messages["Unzip archives"] = "Unzip archives";
$net2ftp_messages["Unzip the selected archives on the FTP server"] = "Unzip the selected archives on the FTP server";
$net2ftp_messages["Up"] = "V?e";
$net2ftp_messages["Update"] = "Aktualizovat";
$net2ftp_messages["Upload"] = "Nahrát";
$net2ftp_messages["Upload a new version of the file %1\$s and merge the changes"] = "Nahrát novou verzi souboru %1\$s a slouèit zmìny";
$net2ftp_messages["Upload directories and files using a Java applet"] = "Upload directories and files using a Java applet";
$net2ftp_messages["Upload files and archives"] = "Nahrát soubory a archivy";
$net2ftp_messages["Upload more files and archives"] = "Nahrát více souborù a archivù";
$net2ftp_messages["Upload new files in directory %1\$s"] = "Nahrát nové soubory do adresáøe %1\$s";
$net2ftp_messages["Upload to directory:"] = "Nahrát do adresáøe:";
$net2ftp_messages["Username"] = "U?ivatelské jméno";
$net2ftp_messages["Version information"] = "Informace o verzi";
$net2ftp_messages["View"] = "Zobrazit";
$net2ftp_messages["View Macromedia ShockWave Flash movie %1\$s"] = "Prohlédnout si klip Macromedia ShockWave Flash %1\$s";
$net2ftp_messages["View file %1\$s"] = "Zobrazit soubor %1\$s";
$net2ftp_messages["View image %1\$s"] = "Zobrazit obrázek %1\$s";
$net2ftp_messages["View logs"] = "Zobrazit záznamy";
$net2ftp_messages["View the file %1\$s from your HTTP web server"] = "Zobrazit soubor %1\$s z va?eho HTTP webového serveru";
$net2ftp_messages["View the highlighted source code of file %1\$s"] = "Zobrazit zvıraznìnı zdrojovı kód souboru %1\$s";
$net2ftp_messages["WAV sound file"] = "Zvuk WAV";
$net2ftp_messages["Webmaster's email: "] = "E-mail webmastera: ";
$net2ftp_messages["Writing some text to the file: "] = "Zapisování nìjakého textu do souboru: ";
$net2ftp_messages["Wrong username or password. Please try again."] = "Wrong username or password. Please try again.";
$net2ftp_messages["You did not enter a filename for the zipfile. Go back and enter a filename."] = "Nezadali jste jméno zip souboru. Vrate se zpìt a zadejte jméno souboru.";
$net2ftp_messages["You did not enter your Administrator username or password."] = "You did not enter your Administrator username or password.";
$net2ftp_messages["You did not provide any file to upload."] = "Neposkytl jste ?ádnı soubor, kterı se má nahrát";
$net2ftp_messages["You did not provide any text to send by email!"] = "Neuvedl jste ?ádnı text, kterı by se mìl poslat e-mailem!";
$net2ftp_messages["You did not supply a From address."] = "Neuvedl jste adresu odesílatele.";
$net2ftp_messages["You did not supply a To address."] = "Neuvedl jste adresu pøíjemce.";
$net2ftp_messages["You have logged out from the FTP server. To log back in, <a href=\"%1\$s\" title=\"Login page (accesskey l)\" accesskey=\"l\">follow this link</a>."] = "You have logged out from the FTP server. To log back in, <a href=\"%1\$s\" title=\"Login page (accesskey l)\" accesskey=\"l\">follow this link</a>.";
$net2ftp_messages["Your IP address (%1\$s) is in the list of banned IP addresses."] = "Va?e IP adresa (%1\$s) je na seznamu zakázanıch adres.";
$net2ftp_messages["Your IP address (%1\$s) is not in the list of allowed IP addresses."] = "Your IP address (%1\$s) is not in the list of allowed IP addresses.";
$net2ftp_messages["Your IP address has changed; please enter your password for FTP server <b>%1\$s</b> to continue."] = "Your IP address has changed; please enter your password for FTP server <b>%1\$s</b> to continue.";
$net2ftp_messages["Your browser does not support applets, or you have disabled applets in your browser settings."] = "Your browser does not support applets, or you have disabled applets in your browser settings.";
$net2ftp_messages["Your root directory <b>%1\$s</b> does not exist or could not be selected."] = "Your root directory <b>%1\$s</b> does not exist or could not be selected.";
$net2ftp_messages["Your session has expired; please enter your password for FTP server <b>%1\$s</b> to continue."] = "Your session has expired; please enter your password for FTP server <b>%1\$s</b> to continue.";
$net2ftp_messages["Your task was stopped"] = "Va?e úloha byla zastavena";
$net2ftp_messages["Zip"] = "Zip" ;
$net2ftp_messages["Zip archive"] = "Archiv Zip";
$net2ftp_messages["Zip entries"] = "Zazipovat polo?ky";
$net2ftp_messages["Zip the selected entries to save or email them"] = "Zazipovat vybrané polo?ky a ulo?it nebo poslat e-mailem";
$net2ftp_messages["en"] = "cs";
$net2ftp_messages["files which were last modified"] = "soubory, které byly naposledy zmìnìny";
$net2ftp_messages["files with a filename like"] = "soubory se jménem vyhovujícímu";
$net2ftp_messages["files with a size"] = "soubory s velikostí";
$net2ftp_messages["from"] = "od";
$net2ftp_messages["left"] = "left";
$net2ftp_messages["ltr"] = "ltr";
$net2ftp_messages["net2ftp has tried to determine the directory mapping between the FTP server and the web server."] = "net2ftp has tried to determine the directory mapping between the FTP server and the web server.";
$net2ftp_messages["net2ftp is free software, released under the GNU/GPL license. For more information, go to http://www.net2ftp.com."] = "net2ftp je volnı software, uvolnìnı pod licencí GNU/GPL. Pro více informací nav?tivte http://www.net2ftp.com.";
$net2ftp_messages["no - please install it!"] = "ne - prosím nainstalujte ho";
$net2ftp_messages["not OK"] = "not OK";
$net2ftp_messages["not OK. Check the permissions of the %1\$s directory"] = "není OK. Zkontrolujte oprávnìní adresáøe %1\$s.";
$net2ftp_messages["right"] = "right";
$net2ftp_messages["to"] = "do";
$net2ftp_messages["to:"] = "do:";
$net2ftp_messages["yes"] = "ano";

?>