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
//  |     $messages[...] = ["Le fichier %1\$s a йtй copiй vers %2\$s "]             |
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
$net2ftp_messages["en"] = "ru";

// HTML dir attribute: left-to-right (LTR) or right-to-left (RTL)
$net2ftp_messages["ltr"] = "ltr";

// CSS style: align left or right (use in combination with LTR or RTL)
$net2ftp_messages["left"] = "left";
$net2ftp_messages["right"] = "right";

// Encoding
$net2ftp_messages["iso-8859-1"] = "windows-1251";

// -------------------------------------------------------------------------
// Messages
// -------------------------------------------------------------------------

$net2ftp_messages["%1\$s File"] = "%1\$s файл";
$net2ftp_messages["(Note: This link may not work if you don't have your own domain name.)"] = "(Примечание: Ссылка может не работать, если у вас нет доменного имени.)";
$net2ftp_messages["<b>%1\$s</b> could not be renamed to <b>%2\$s</b>"] = "<b>%1\$s</b> не удалось переименовать в <b>%2\$s</b>";
$net2ftp_messages["<b>%1\$s</b> was successfully renamed to <b>%2\$s</b>"] = "<b>%1\$s</b> было успешно переименовано в <b>%2\$s</b>";
$net2ftp_messages["ARC archive"] = "ARC-архив";
$net2ftp_messages["ARJ archive"] = "ARJ-архив";
$net2ftp_messages["ASP script"] = "Скрипт ASP";
$net2ftp_messages["Action"] = "Действие";
$net2ftp_messages["Actions"] = "Действия";
$net2ftp_messages["Add another"] = "Добавить другой";
$net2ftp_messages["Admin functions"] = "Функции администратора";
$net2ftp_messages["Adobe Acrobat document"] = "Документ Adobe Acrobat";
$net2ftp_messages["Advanced"] = "Опции";
$net2ftp_messages["Advanced FTP functions"] = "Дополнительные FTP функции";
$net2ftp_messages["Advanced functions"] = "Расширенные функции";
$net2ftp_messages["Advanced login"] = "Advanced login";
$net2ftp_messages["All"] = "Все";
$net2ftp_messages["All the selected directories and files have been processed."] = "Все выбранные папки и файлы проверены.";
$net2ftp_messages["All the subdirectories and files of the selected directories will also be deleted!"] = "Все подпапки и файлы в указанных папках будут удалены!";
$net2ftp_messages["Alternatively, use net2ftp's normal upload or upload-and-unzip functionality."] = "Alternatively, use net2ftp's normal upload or upload-and-unzip functionality.";
$net2ftp_messages["An error has occured"] = "Произошла ошибка";
$net2ftp_messages["Anonymous"] = "Анонимно";
$net2ftp_messages["Archive <b>%1\$s</b> was not processed because its filename extension was not recognized. Only zip, tar, tgz and gz archives are supported at the moment."] = "Архив <b>%1\$s</b> не был проверен, потому что расширение файла неправильно. Только zip, tar, tgz и gz архивы поддерживаются.";
$net2ftp_messages["Archive contains filenames with ../ or ..\\ - aborting the extraction"] = "Archive contains filenames with ../ or ..\\ - aborting the extraction";
$net2ftp_messages["Archives"] = "Архивы";
$net2ftp_messages["Archives entered here will be decompressed, and the files inside will be transferred to the FTP server."] = "Архивы введенные здесь будут распакованы и файлы будут перемещены на FTP-сервер.";
$net2ftp_messages["Are you sure you want to delete these directories and files?"] = "Вы действительно хотите удалить эти файлы и папки?";
$net2ftp_messages["Ascending order"] = "Убывание";
$net2ftp_messages["Automatic"] = "Автоматический";
$net2ftp_messages["Back"] = "Назад";
$net2ftp_messages["Basic FTP login"] = "Basic FTP login";
$net2ftp_messages["Basic SSH login"] = "Basic SSH login";
$net2ftp_messages["Bitmap file"] = "Изображение";
$net2ftp_messages["Bookmark"] = "Закладка";
$net2ftp_messages["Calculate the size of the selected entries"] = "Вычислить размер выбранного";
$net2ftp_messages["Cascading Style Sheet"] = "CSS";
$net2ftp_messages["Case sensitive search"] = "Чувствительно к регистру";
$net2ftp_messages["Changing the directory"] = "Смена директории";
$net2ftp_messages["Changing to the directory %1\$s: "] = "Переход в папку %1\$s: ";
$net2ftp_messages["Character encoding: "] = "Character encoding: ";
$net2ftp_messages["Check the SSH server's public key fingerprint"] = "Check the SSH server's public key fingerprint";
$net2ftp_messages["Checking files"] = "Проверка файлов";
$net2ftp_messages["Checking if the FTP module of PHP is installed: "] = "Проверка установки модуля FTP от PHP: ";
$net2ftp_messages["Checking the permissions of the directory on the web server: a small file will be written to the /temp folder and then deleted."] = "Проверка разрешений папки на веб-сервере: небольшой файл может быть записан в папку /temp и потом удален.";
$net2ftp_messages["Chmod"] = "Chmod";
$net2ftp_messages["Chmod also the files within this directory"] = "Chmod также на файлы внутри этой папки";
$net2ftp_messages["Chmod also the subdirectories within this directory"] = "Chmod также на подпапки внутри этой папки";
$net2ftp_messages["Chmod directories and files"] = "Chmod на папки и файлы";
$net2ftp_messages["Chmod the selected entries (only works on Unix/Linux/BSD servers)"] = "Chmod выбранного (работает на Unix/Linux/BSD серверах)";
$net2ftp_messages["Choose"] = "Выбор";
$net2ftp_messages["Choose a directory"] = "Выберите папку";
$net2ftp_messages["Click to sort by %1\$s in ascending order"] = "Нажмите для сортировки %1\$s в порядке убывания";
$net2ftp_messages["Click to sort by %1\$s in descending order"] = "Нажмите для сортировки %1\$s в порядке возрастания";
$net2ftp_messages["Closing the file: "] = "Закрытие файла: ";
$net2ftp_messages["Connecting to a test FTP server: "] = "Подключение к тестовому FTP серверу: ";
$net2ftp_messages["Connecting to the FTP server"] = "Соединение с FTP-сервером";
$net2ftp_messages["Connecting to the FTP server: "] = "Соединение с FTP-сервером: ";
$net2ftp_messages["Connection settings:"] = "Параметры соединения:";
$net2ftp_messages["Continue"] = "Продолжить";
$net2ftp_messages["Copied file %1\$s"] = "Скопирован файл %1\$s";
$net2ftp_messages["Copied file <b>%1\$s</b>"] = "Copied file <b>%1\$s</b>";
$net2ftp_messages["Copy"] = "Копир.";
$net2ftp_messages["Copy directories and files"] = "Копировать папки и файлы";
$net2ftp_messages["Copy directory <b>%1\$s</b> to:"] = "Копировать папку <b>%1\$s</b> в:";
$net2ftp_messages["Copy file <b>%1\$s</b> to:"] = "Копировать файл <b>%1\$s</b> в:";
$net2ftp_messages["Copy symlink <b>%1\$s</b> to:"] = "Копировать симлинк <b>%1\$s</b> в:";
$net2ftp_messages["Copy the selected entries"] = "Копировать выбранные папки";
$net2ftp_messages["Copying the net2ftp installer script to the FTP server"] = "Копирование установочного скрипта на FTP сервер";
$net2ftp_messages["Could not be saved"] = "Could not be saved";
$net2ftp_messages["Could not connect to SSH server"] = "Could not connect to SSH server";
$net2ftp_messages["Could not copy file %1\$s"] = "Не удалось скопировать файл %1\$s";
$net2ftp_messages["Could not create directory %1\$s"] = "Не удалость создать директорию %1\$s";
$net2ftp_messages["Could not generate a temporary file."] = "Не удалось сгенерировать временный файл.";
$net2ftp_messages["Could not get fingerprint"] = "Could not get fingerprint";
$net2ftp_messages["Could not get public host key"] = "Could not get public host key";
$net2ftp_messages["Could not unzip entry %1\$s (error code %2\$s)"] = "Could not unzip entry %1\$s (error code %2\$s)";
$net2ftp_messages["Create a new file in directory %1\$s"] = "Создать файл в папке %1\$s";
$net2ftp_messages["Create a website easily using ready-made templates"] = "Create a website easily using ready-made templates";
$net2ftp_messages["Create new directories"] = "Создать новые папки";
$net2ftp_messages["Create the MySQL database tables"] = "Создать таблицы в базе данных MySQL";
$net2ftp_messages["Created directory %1\$s"] = "Создана директория %1\$s";
$net2ftp_messages["Created target subdirectory <b>%1\$s</b>"] = "Created target subdirectory <b>%1\$s</b>";
$net2ftp_messages["Creating a temporary directory on the FTP server"] = "Создание временной директории на FTP сервере";
$net2ftp_messages["Creating filename: "] = "Имя файла для создания: ";
$net2ftp_messages["Daily limit reached: the file <b>%1\$s</b> will not be transferred"] = "Достигнут суточный лимит: файл <b>%1\$s</b> не будет передан";
$net2ftp_messages["Daily limit reached: you will not be able to transfer data"] = "Достигнут суточный лимит: Вы не можете больше передавать данные";
$net2ftp_messages["Data transferred from this IP address today"] = "Обьем данных, переданный с этого IP адреса за сегодня";
$net2ftp_messages["Data transferred to this FTP server today"] = "Обьем данных переданных этому FTP серверу сегодня";
$net2ftp_messages["Date from:"] = "Date from:";
$net2ftp_messages["Dear,"] = "Уважаемый,";
$net2ftp_messages["Decompressing archives and transferring files"] = "Распаковка архивов и перемещение файлов";
$net2ftp_messages["Default"] = "По умолчанию";
$net2ftp_messages["Delete"] = "Удалить";
$net2ftp_messages["Delete directories and files"] = "Удалить папки и файлы";
$net2ftp_messages["Delete the selected entries"] = "Удалить выбранные папки";
$net2ftp_messages["Deleted file <b>%1\$s</b>"] = "Удален файл <b>%1\$s</b>";
$net2ftp_messages["Deleted subdirectory <b>%1\$s</b>"] = "Удалена подпапка <b>%1\$s</b>";
$net2ftp_messages["Deleting the file: "] = "Удаление файла: ";
$net2ftp_messages["Descending order"] = "Возрастание";
$net2ftp_messages["Details"] = "Детали";
$net2ftp_messages["Different target FTP server:"] = "Другой FTP-сервер:";
$net2ftp_messages["Directories"] = "Папки";
$net2ftp_messages["Directories with names containing \' cannot be displayed correctly. They can only be deleted. Please go back and select another subdirectory."] = "Папки с именами, содержащими \' не могут корректно отображаться. Их можно только удалить. Пожалуйста, вернитесь и выберите другую папку.";
$net2ftp_messages["Directory"] = "Папка";
$net2ftp_messages["Directory <b>%1\$s</b>"] = "Папка <b>%1\$s</b>";
$net2ftp_messages["Directory <b>%1\$s</b> could not be created."] = "Директория <b>%1\$s</b> не может быть создана.";
$net2ftp_messages["Directory <b>%1\$s</b> successfully chmodded to <b>%2\$s</b>"] = "Папка <b>%1\$s</b> успешно chmodded <b>%2\$s</b>";
$net2ftp_messages["Directory <b>%1\$s</b> was successfully created."] = "Папка <b>%1\$s</b> была успешно создана.";
$net2ftp_messages["Directory Tree"] = "Дерево папок";
$net2ftp_messages["Disabled"] = "Отключено";
$net2ftp_messages["Double-click to go to a subdirectory:"] = "Нажмите дважды для перехода в подпапку:";
$net2ftp_messages["Download"] = "Скачать";
$net2ftp_messages["Download a zip file containing all selected entries"] = "Скачать zip-файл, содержащий выбранные файлы";
$net2ftp_messages["Download the file %1\$s"] = "Скачать файл%1\$s";
$net2ftp_messages["Drag and drop one of the links below to the bookmarks bar"] = "Drag and drop one of the links below to the bookmarks bar";
$net2ftp_messages["Due to technical problems the email to <b>%1\$s</b> could not be sent."] = "В связи с техническими проблемами email для <b>%1\$s</b> не может быть отправлен.";
$net2ftp_messages["Edit"] = "Редакт.";
$net2ftp_messages["Edit the source code of file %1\$s"] = "Редактировать исходный код файла %1\$s";
$net2ftp_messages["Email the zip file in attachment to:"] = "Email zip-файл прикрепленным:";
$net2ftp_messages["Empty logs"] = "Очистить логи";
$net2ftp_messages["Enter the FTP server port (21 for FTP, 22 for FTP SSH or 990 for FTP SSL) - if you're not sure leave it to 21"] = "Enter the FTP server port (21 for FTP, 22 for FTP SSH or 990 for FTP SSL) - if you're not sure leave it to 21";
$net2ftp_messages["Enter your password"] = "Enter your password";
$net2ftp_messages["Enter your username"] = "Enter your username";
$net2ftp_messages["Entries which contain banned keywords can't be managed using net2ftp. This is to avoid Paypal or Ebay scams from being uploaded through net2ftp."] = "С помощью net2ftp нельзя управлять данными, содержащими запрещенные слова. Это необходимо для защиты от подделок PayPal или Ebay.";
$net2ftp_messages["Example"] = "Пример";
$net2ftp_messages["Executable"] = "Приложение";
$net2ftp_messages["Execute %1\$s in a new window"] = "Выполнить %1\$s в новом окне";
$net2ftp_messages["FTP mode"] = "Режим работы FTP";
$net2ftp_messages["FTP server"] = "FTP-сервер";
$net2ftp_messages["FTP server port"] = "Порт FTP-сервера";
$net2ftp_messages["FTP server response:"] = "Ответ FTP сервера:";
$net2ftp_messages["File"] = "Файл";
$net2ftp_messages["File <b>%1\$s</b>"] = "Файл <b>%1\$s</b>";
$net2ftp_messages["File <b>%1\$s</b> could not be moved"] = "Файл <b>%1\$s</b> не может быть перемещен";
$net2ftp_messages["File <b>%1\$s</b> could not be transferred to the FTP server"] = "Файл <b>%1\$s</b> не может быть закачан на FTP-сервер";
$net2ftp_messages["File <b>%1\$s</b> has been transferred to the FTP server using FTP mode <b>%2\$s</b>"] = "Файл <b>%1\$s</b> был закачан на FTP-сервер, используя FTP-режим <b>%2\$s</b>";
$net2ftp_messages["File <b>%1\$s</b> is OK"] = "Файл <b>%1\$s</b> Ok";
$net2ftp_messages["File <b>%1\$s</b> is contains a banned keyword. This file will not be uploaded."] = "Файл <b>%1\$s</b> содержит запрещенные слова. Файл не будет загружен.";
$net2ftp_messages["File <b>%1\$s</b> is too big. This file will not be uploaded."] = "Файл <b>%1\$s</b> слишком большой. Файл не будет загружен.";
$net2ftp_messages["File <b>%1\$s</b> was successfully chmodded to <b>%2\$s</b>"] = "Файл <b>%1\$s</b> успешно chmodded <b>%2\$s</b>";
$net2ftp_messages["File: "] = "Файл: ";
$net2ftp_messages["Files"] = "Файлы";
$net2ftp_messages["Files entered here will be transferred to the FTP server."] = "Файлы, введенные здесь будут перемещены на FTP-сервер.";
$net2ftp_messages["Files which are too big can't be downloaded, uploaded, copied, moved, searched, zipped, unzipped, viewed or edited; they can only be renamed, chmodded or deleted."] = "Слишком большие файлы нельзя загружать, скачивать, копировать, перемещать, архивировать, распаковывать, просматривать или редактировать; их можно переименовывать, изменять права доступа или удалять.";
$net2ftp_messages["Find files which contain a particular word"] = "Найти файлы, содержащие часть слова";
$net2ftp_messages["Fingerprint"] = "Fingerprint";
$net2ftp_messages["Follow symlink %1\$s"] = "Следовать symlink'у %1\$s";
$net2ftp_messages["Font file"] = "Файл шрифта";
$net2ftp_messages["Forums"] = "Форумы";
$net2ftp_messages["GIF file"] = "GIF";
$net2ftp_messages["GIMP file"] = "Файл GIMP";
$net2ftp_messages["GZ archive"] = "GZ-архив";
$net2ftp_messages["Get fingerprint"] = "Get fingerprint";
$net2ftp_messages["Get the SSH server's public key fingerprint before logging in to verify the server's identity"] = "Get the SSH server's public key fingerprint before logging in to verify the server's identity";
$net2ftp_messages["Getting archive %1\$s of %2\$s from the FTP server"] = "Получение архива %1\$s of %2\$s с FTP сервера";
$net2ftp_messages["Getting fingerprint, please wait..."] = "Getting fingerprint, please wait...";
$net2ftp_messages["Getting the FTP server system type: "] = "Определяется тип системы FTP-сервера: ";
$net2ftp_messages["Getting the FTP system type"] = "Getting the FTP system type";
$net2ftp_messages["Getting the current directory"] = "Смена текущей директории";
$net2ftp_messages["Getting the list of directories and files"] = "Получение списка папок и файлов";
$net2ftp_messages["Getting the raw list of directories and files: "] = "Получение списка папок и файлов: ";
$net2ftp_messages["Go"] = "Вперед";
$net2ftp_messages["Go back"] = "Назад";
$net2ftp_messages["Go to the advanced functions"] = "Перейти в доп. функции";
$net2ftp_messages["Go to the login page"] = "На страницу входа";
$net2ftp_messages["Go to the parent directory"] = "Перейти на уровень выше";
$net2ftp_messages["Go to the subdirectory %1\$s"] = "Перейти в поддиректорию %1\$s";
$net2ftp_messages["Group"] = "Группа";
$net2ftp_messages["HTML file"] = "Файл HTML";
$net2ftp_messages["HTML templates"] = "HTML templates";
$net2ftp_messages["Help"] = "Помощь";
$net2ftp_messages["Help Guide"] = "Помощь";
$net2ftp_messages["IP address: "] = "IP-адрес: ";
$net2ftp_messages["Icons"] = "Значки";
$net2ftp_messages["If the destination file already exists, it will be overwritten"] = "Если файл уже существует, он будет перезаписан";
$net2ftp_messages["If you know nothing about this or if you don't trust that person, please delete this email without opening the Zip file in attachment."] = "Если Вы не знаете, что это за файлы, или не доверяете отправителю, пожалуйста, удалите это письмо, не открывая файлы.";
$net2ftp_messages["If you need unlimited usage, please install net2ftp on your own web server."] = "Если Вам необходимы неограниченные ресурсы, пожалуйста установите net2ftp на Ваш собственный ftp сервер.";
$net2ftp_messages["If you really need net2ftp to be able to handle big tasks which take a long time, consider installing net2ftp on your own server."] = "Если вы действительно хотите выполнить это задание через net2ftp, то установите net2ftp на собственном сервере.";
$net2ftp_messages["If you want to copy the files to another FTP server, enter your login data."] = "Если вы хотите открыть файлы на другом FTP-сервере, то введите данные для входа.";
$net2ftp_messages["Image"] = "Изображение";
$net2ftp_messages["In order to guarantee the fair use of the web server for everyone, the data transfer volume and script execution time are limited per user, and per day. Once this limit is reached, you can still browse the FTP server but not transfer data to/from it."] = "Чтобы гарантировать равную доступность этого сервера для каждого пользователя, накладывается ограничение на объём передаваемых данных и время выполнения скриптов для пользователя в день. Как только этот лимит превышен, Вы можете просматривать папки, но не можете закачивать или скачивать файлы.";
$net2ftp_messages["In order to run it, click on the link below."] = "Для запуска нажмите ссылку ниже";
$net2ftp_messages["Information about the sender: "] = "Информация о отправителе: ";
$net2ftp_messages["Initial directory"] = "Папка";
$net2ftp_messages["Install"] = "Установить";
$net2ftp_messages["Install software packages"] = "Установить пакеты ПО";
$net2ftp_messages["Install software packages (requires PHP on web server)"] = "Установить пакеты (требует наличия PHP на веб-сервере)";
$net2ftp_messages["JPEG file"] = "JPEG";
$net2ftp_messages["Java Upload"] = "Закачать Java";
$net2ftp_messages["Java source file"] = "Код Java";
$net2ftp_messages["JavaScript file"] = "Файл JavaScript";
$net2ftp_messages["Language:"] = "Язык:";
$net2ftp_messages["Leave empty if you want to copy the files to the same FTP server."] = "Оставьте пустым, если вы хотите скопировать файлы в ту же папку FTP-сервера.";
$net2ftp_messages["License"] = "Лицензия";
$net2ftp_messages["Line"] = "Строка";
$net2ftp_messages["List"] = "Список";
$net2ftp_messages["List of commands:"] = "Список команд:";
$net2ftp_messages["Logging"] = "Логирование ";
$net2ftp_messages["Logging into the FTP server"] = "Вход на FTP-сервер";
$net2ftp_messages["Logging into the FTP server: "] = "Вход на FTP-сервер: ";
$net2ftp_messages["Logging out of the FTP server"] = "Выход с FTP сервера";
$net2ftp_messages["Login"] = "Вход";
$net2ftp_messages["Login!"] = "Войти!";
$net2ftp_messages["Logout"] = "Выход";
$net2ftp_messages["MOV movie file"] = "Фильм MOV";
$net2ftp_messages["MPEG movie file"] = "Фильм MPEG";
$net2ftp_messages["MS Office - Access database"] = "MS Office - БД Access";
$net2ftp_messages["MS Office - Excel spreadsheet"] = "MS Office - таблица Excel";
$net2ftp_messages["MS Office - PowerPoint presentation"] = "MS Office - презентация PowerPoint";
$net2ftp_messages["MS Office - Project file"] = "MS Office - файл проекта";
$net2ftp_messages["MS Office - Visio drawing"] = "MS Office - рисунок Visio";
$net2ftp_messages["MS Office - Word document"] = "MS Office - документ Word";
$net2ftp_messages["Make a new subdirectory in directory %1\$s"] = "Создать подпапку в папке %1\$s";
$net2ftp_messages["Message of the sender: "] = "Message of the sender: ";
$net2ftp_messages["Mobile"] = "Mobile";
$net2ftp_messages["Mod Time"] = "Время";
$net2ftp_messages["Move"] = "Перемест.";
$net2ftp_messages["Move directories and files"] = "Переместить папки и файлы";
$net2ftp_messages["Move directory <b>%1\$s</b> to:"] = "Переместить папку <b>%1\$s</b> в:";
$net2ftp_messages["Move file <b>%1\$s</b> to:"] = "Переместить файл <b>%1\$s</b> в:";
$net2ftp_messages["Move symlink <b>%1\$s</b> to:"] = "Переместить симлинк <b>%1\$s</b> в:";
$net2ftp_messages["Move the selected entries"] = "Переместить выбранные папки";
$net2ftp_messages["Moved directory <b>%1\$s</b>"] = "Moved directory <b>%1\$s</b>";
$net2ftp_messages["Moved file <b>%1\$s</b>"] = "Перемещен файл <b>%1\$s</b>";
$net2ftp_messages["MySQL database"] = "База данных MySQL";
$net2ftp_messages["MySQL password"] = "Пароль MySQL";
$net2ftp_messages["MySQL password length"] = "Длина пароля MySQL";
$net2ftp_messages["MySQL server"] = "MySQL server";
$net2ftp_messages["MySQL username"] = "Имя пользователя MySQL";
$net2ftp_messages["Name"] = "Имя";
$net2ftp_messages["New dir"] = "Новая папка";
$net2ftp_messages["New directory name:"] = "Новое имя папки:";
$net2ftp_messages["New file"] = "Новый файл";
$net2ftp_messages["New file name: "] = "Новое имя файла: ";
$net2ftp_messages["New name: "] = "Новое имя: ";
$net2ftp_messages["No data"] = "Нет данных";
$net2ftp_messages["Not yet saved"] = "Not yet saved";
$net2ftp_messages["Note that if you don't open the Zip file, the files inside cannot harm your computer."] = "Если Вы не будете открывать zip-файл, файлы, содержащиеся в нём, не смогут повредить Вашему компьютеру.";
$net2ftp_messages["Note that sending files is not anonymous: your IP address as well as the time of the sending will be added to the email."] = "Заметьте, что отправка файлов не анонимна: ваш IP-адрес так же как и время отправления будет добавлен в email.";
$net2ftp_messages["Note: other users of this computer could click on the browser's Back button and access the FTP server."] = "Внимание: другие пользователи этого компьютера могут нажать на кнопку \"назад\" и получить доступ к FTP серверу.";
$net2ftp_messages["Note: the target directory must already exist before anything can be copied into it."] = "Примечание: папка должна уже существовать.";
$net2ftp_messages["Note: when you will use this bookmark, a popup window will ask you for your username and password."] = "Примечание: когда Вы будете использовать закладку, всплывающее окно спросит у Вас имя и пароль.";
$net2ftp_messages["OK"] = "OK";
$net2ftp_messages["OK. Filename: %1\$s"] = "OK. Имя файла: %1\$s";
$net2ftp_messages["Old name: "] = "Старое имя: ";
$net2ftp_messages["One click access (net2ftp won't ask for a password - less safe)"] = "One click access (net2ftp won't ask for a password - less safe)";
$net2ftp_messages["Open"] = "Открыть";
$net2ftp_messages["OpenOffice - Calc 6.0 spreadsheet"] = "OpenOffice - таблица Calc 6.0";
$net2ftp_messages["OpenOffice - Calc 6.0 template"] = "OpenOffice - шаблон Calc 6.0";
$net2ftp_messages["OpenOffice - Draw 6.0 document"] = "OpenOffice - документ Draw 6.0";
$net2ftp_messages["OpenOffice - Draw 6.0 template"] = "OpenOffice - шаблон Draw 6.0";
$net2ftp_messages["OpenOffice - Impress 6.0 presentation"] = "OpenOffice - презентация Impress 6.0";
$net2ftp_messages["OpenOffice - Impress 6.0 template"] = "OpenOffice - шаблон Impress 6.0";
$net2ftp_messages["OpenOffice - Math 6.0 document"] = "OpenOffice - документ Math 6.0";
$net2ftp_messages["OpenOffice - Writer 6.0 document"] = "OpenOffice - документ Writer 6.0";
$net2ftp_messages["OpenOffice - Writer 6.0 global document"] = "OpenOffice - документ Writer 6.0";
$net2ftp_messages["OpenOffice - Writer 6.0 template"] = "OpenOffice - шаблон Writer 6.0";
$net2ftp_messages["Opening the file in write mode: "] = "Открытие файла в режиме для записи: ";
$net2ftp_messages["Owner"] = "Пользователь";
$net2ftp_messages["PHP Source"] = "PHP код";
$net2ftp_messages["PHP script"] = "Скрипт PHP";
$net2ftp_messages["PNG file"] = "PNG";
$net2ftp_messages["Parsing the file"] = "Редактирование файла";
$net2ftp_messages["Parsing the list of directories and files"] = "Обработки списка файлов и директорий";
$net2ftp_messages["Passive mode"] = "Пассивный режим";
$net2ftp_messages["Password"] = "Пароль";
$net2ftp_messages["Password length"] = "Длина пароля";
$net2ftp_messages["Perms"] = "Разрешения";
$net2ftp_messages["Please enter a password."] = "Please enter a password.";
$net2ftp_messages["Please enter a username."] = "Please enter a username.";
$net2ftp_messages["Please enter a valid date in Y-m-d format in the \"from\" textbox."] = "Пожалуйста, введите правильную дату в формате г-м-д в поле \"из\".";
$net2ftp_messages["Please enter a valid date in Y-m-d format in the \"to\" textbox."] = "Пожалуйста, введите правильную дату в формате г-м-д в поле \"в\".";
$net2ftp_messages["Please enter a valid file size in the \"from\" textbox, for example 0."] = "Пожалуйста, введите правильное название в поле \"из\", например, 0.";
$net2ftp_messages["Please enter a valid file size in the \"to\" textbox, for example 500000."] = "Пожалуйста, введите правильный размер в поле \"в\", например, 500000.";
$net2ftp_messages["Please enter a valid filename."] = "Введите правильное имя файла.";
$net2ftp_messages["Please enter a valid search word or phrase."] = "Введите правильное слово или фразу.";
$net2ftp_messages["Please enter an FTP server."] = "Please enter an FTP server.";
$net2ftp_messages["Please enter your Administrator username and password."] = "Пожалуйста, введите логин и пароль администратора.";
$net2ftp_messages["Please enter your MySQL settings:"] = "Пожалуйста, укажите параметры работы с MySQL:";
$net2ftp_messages["Please enter your username and password for FTP server <b>%1\$s</b>."] = "Пожалуйста, введите логин и пароль к FTP серверу <b>%1\$s</b>.";
$net2ftp_messages["Please specify a filename"] = "Укажите имя файла";
$net2ftp_messages["Please wait..."] = "Пожалуйста, подождите...";
$net2ftp_messages["Powered by"] = "Создано на";
$net2ftp_messages["Printing the list of directories and files"] = "Вывод списка папок и файлов";
$net2ftp_messages["Printing the result"] = "Printing the result";
$net2ftp_messages["Processing archive nr %1\$s: <b>%2\$s</b>"] = "Проверка архива nr %1\$s: <b>%2\$s</b>";
$net2ftp_messages["Processing directory <b>%1\$s</b>"] = "Проверка папки <b>%1\$s</b>";
$net2ftp_messages["Processing entries within directory <b>%1\$s</b>:"] = "Обработка файлов директорий <b>%1\$s</b>:";
$net2ftp_messages["Processing entry %1\$s"] = "Обработка записи %1\$s";
$net2ftp_messages["Processing of directory <b>%1\$s</b> completed"] = "Проверка папки <b>%1\$s</b> завершена";
$net2ftp_messages["Processing the entries"] = "Обработка содержания";
$net2ftp_messages["Protocol"] = "Protocol";
$net2ftp_messages["Quicktime movie file"] = "Фильм Quicktime";
$net2ftp_messages["RPM"] = "RPM";
$net2ftp_messages["Reading the file"] = "Чтение файла";
$net2ftp_messages["Real movie file"] = "Фильм в формате Real";
$net2ftp_messages["Refresh"] = "Обновить";
$net2ftp_messages["Rename"] = "Переим.";
$net2ftp_messages["Rename directories and files"] = "Переименовать папки и файлы";
$net2ftp_messages["Rename the selected entries"] = "Переименовать выбранное";
$net2ftp_messages["Requested files"] = "Запрошенный файлы";
$net2ftp_messages["Restrict the search to:"] = "Запретить искать:";
$net2ftp_messages["Restrictions:"] = "Ограничения:";
$net2ftp_messages["Results:"] = "Результаты:";
$net2ftp_messages["Right-click on one of the links below and choose \"Add to Favorites...\""] = "Right-click on one of the links below and choose \"Add to Favorites...\"";
$net2ftp_messages["Right-click on one of the links below and choose \"Bookmark This Link...\""] = "Right-click on one of the links below and choose \"Bookmark This Link...\"";
$net2ftp_messages["Right-click on one of the links below and choose \"Bookmark link...\""] = "Right-click on one of the links below and choose \"Bookmark link...\"";
$net2ftp_messages["Right-click on one the links below and choose \"Add Link to Bookmarks...\""] = "Right-click on one the links below and choose \"Add Link to Bookmarks...\"";
$net2ftp_messages["SSH fingerprint"] = "SSH fingerprint";
$net2ftp_messages["SSH server"] = "SSH server";
$net2ftp_messages["Save"] = "Сохранить";
$net2ftp_messages["Save the zip file on the FTP server as:"] = "Сохранить zip-файл на FTP-сервере как:";
$net2ftp_messages["Saved at %1\$s"] = "Saved at %1\$s";
$net2ftp_messages["Script finished in %1\$s seconds"] = "Скрипт выполенен за %1\$s секунд";
$net2ftp_messages["Script halted"] = "Скрипт прерван";
$net2ftp_messages["Search"] = "Поиск";
$net2ftp_messages["Search directories and files"] = "Поиск папок и файлов";
$net2ftp_messages["Search for a word or phrase"] = "Поиск слова или фразы";
$net2ftp_messages["Search results"] = "Результаты поиска";
$net2ftp_messages["Searching the files..."] = "Поиск файла...";
$net2ftp_messages["Select the directory %1\$s"] = "Выбрать директорию %1\$s";
$net2ftp_messages["Select the file %1\$s"] = "Выбрать файл %1\$s";
$net2ftp_messages["Select the symlink %1\$s"] = "Выбрать symlink %1\$s";
$net2ftp_messages["Send arbitrary FTP commands"] = "Отправка случайной FTP команды";
$net2ftp_messages["Send arbitrary FTP commands to the FTP server"] = "Send arbitrary FTP commands to the FTP server";
$net2ftp_messages["Sending FTP command %1\$s of %2\$s"] = "Отправка FTP команды %1\$s of %2\$s";
$net2ftp_messages["Sent via the net2ftp application installed on this website: "] = "Отправлено через net2ftp с сайта ";
$net2ftp_messages["Set all permissions"] = "Сменить все права";
$net2ftp_messages["Set all targetdirectories"] = "Выбрать все папки";
$net2ftp_messages["Set the permissions of directory <b>%1\$s</b> to: "] = "Выбрать разрешения для папки <b>%1\$s</b>: ";
$net2ftp_messages["Set the permissions of file <b>%1\$s</b> to: "] = "Выбрать разрешения для файла <b>%1\$s</b>: ";
$net2ftp_messages["Set the permissions of symlink <b>%1\$s</b> to: "] = "Выбрать разрешения для симлинка <b>%1\$s</b>: ";
$net2ftp_messages["Setting the passive mode"] = "Установка пассивного режима";
$net2ftp_messages["Setting the passive mode: "] = "Переход на пассивный режим: ";
$net2ftp_messages["Setting the permissions of the temporary directory"] = "Установка прав на временную директорию";
$net2ftp_messages["Settings used:"] = "Используемые настройки:";
$net2ftp_messages["Setup MySQL tables"] = "Настроить таблицы MySQL";
$net2ftp_messages["Shell script"] = "Скрипт shell";
$net2ftp_messages["Shockwave file"] = "Файл Shockwave";
$net2ftp_messages["Shockwave flash file"] = "ФайлShockwave flash";
$net2ftp_messages["Should this link not be correct, enter the URL manually in your web browser."] = "Should this link not be correct, enter the URL manually in your web browser.";
$net2ftp_messages["Size"] = "Размер";
$net2ftp_messages["Size of selected directories and files"] = "Размер выбранных папок и файлов";
$net2ftp_messages["Skin:"] = "Скин:";
$net2ftp_messages["Some additional comments to add in the email:"] = "Комментарии к email:";
$net2ftp_messages["Someone has requested the files in attachment to be sent to this email account (%1\$s)."] = "Кто-то (возможно Вы) отправил файлы, приложенные к письму, на этот адрес (%1\$s).";
$net2ftp_messages["Standard"] = "Standard";
$net2ftp_messages["StarOffice - StarCalc 5.x spreadsheet"] = "StarOffice - таблица StarCalc 5.x";
$net2ftp_messages["StarOffice - StarChart 5.x document"] = "StarOffice - документ StarChart 5.x";
$net2ftp_messages["StarOffice - StarDraw 5.x document"] = "StarOffice - документ StarDraw 5.x";
$net2ftp_messages["StarOffice - StarImpress 5.x presentation"] = "StarOffice - презентация StarImpress 5.x";
$net2ftp_messages["StarOffice - StarImpress Packed 5.x file"] = "StarOffice - файл StarImpress Packed 5.x";
$net2ftp_messages["StarOffice - StarMail 5.x mail file"] = "StarOffice - файл почты StarMail 5.x";
$net2ftp_messages["StarOffice - StarMath 5.x document"] = "StarOffice - документ StarMath 5.x";
$net2ftp_messages["StarOffice - StarWriter 5.x document"] = "StarOffice - документ StarWriter 5.x";
$net2ftp_messages["StarOffice - StarWriter 5.x global document"] = "StarOffice - документ StarWriter 5.x";
$net2ftp_messages["Status: <b>This file could not be saved</b>"] = "Состояние: <b>этот файл не может быть сохранен</b>";
$net2ftp_messages["Status: Saved on <b>%1\$s</b> using mode %2\$s"] = "Состояние: сохранено в <b>%1\$s</b> в режиме %2\$s";
$net2ftp_messages["Status: This file has not yet been saved"] = "Состояние: файл не сохранен";
$net2ftp_messages["Submit"] = "Отправить";
$net2ftp_messages["Symlink"] = "Ссылка";
$net2ftp_messages["Symlink <b>%1\$s</b>"] = "Симлинк <b>%1\$s</b>";
$net2ftp_messages["Symlinks"] = "Ссылки";
$net2ftp_messages["Syntax highlighting powered by <a href=\"http://luminous.asgaard.co.uk\">Luminous</a>"] = "Подсветка синтаксиса реализована <a href=\"http://luminous.asgaard.co.uk\">Luminous</a>";
$net2ftp_messages["TAR archive"] = "TAR-архив";
$net2ftp_messages["TIF file"] = "TIF";
$net2ftp_messages["Table net2ftp_log_access contains duplicate entries."] = "Таблица net2ftp_log_access содержит одинаковые записи.";
$net2ftp_messages["Table net2ftp_log_access could not be updated."] = "Не удалось обновить таблицу net2ftp_log_access.";
$net2ftp_messages["Table net2ftp_log_consumption_ftpserver contains duplicate entries."] = "Table net2ftp_log_consumption_ftpserver contains duplicate entries.";
$net2ftp_messages["Table net2ftp_log_consumption_ftpserver contains duplicate rows."] = "Таблица net2ftp_log_consumption_ftpserver содержит одинаковые записи.";
$net2ftp_messages["Table net2ftp_log_consumption_ftpserver could not be updated."] = "Не удалось обновить таблицу net2ftp_log_consumption_ftpserver.";
$net2ftp_messages["Table net2ftp_log_consumption_ipaddress contains duplicate entries."] = "Таблица net2ftp_log_consumption_ipaddress содержит одинаковые записи.";
$net2ftp_messages["Table net2ftp_log_consumption_ipaddress contains duplicate rows."] = "Таблица net2ftp_log_consumption_ipaddress содержит одинаковые записи.";
$net2ftp_messages["Table net2ftp_log_consumption_ipaddress could not be updated."] = "Не удалось обновить таблицу net2ftp_log_consumption_ipaddress.";
$net2ftp_messages["Table net2ftp_log_status contains duplicate entries."] = "Table net2ftp_log_status contains duplicate entries.";
$net2ftp_messages["Table net2ftp_log_status could not be updated."] = "Table net2ftp_log_status could not be updated.";
$net2ftp_messages["Table net2ftp_users contains duplicate rows."] = "Таблица net2ftp_users содержит одинаковые записи.";
$net2ftp_messages["Target directory:"] = "Папка назначения:";
$net2ftp_messages["Target name:"] = "Имя назначения:";
$net2ftp_messages["Test the net2ftp list parsing rules"] = "Проверить правила разбора списка net2ftp";
$net2ftp_messages["Testing the FTP functions"] = "Тестирование функций FTP";
$net2ftp_messages["Text file"] = "Текст";
$net2ftp_messages["The <a href=\"http://www.php.net/manual/en/ref.ftp.php\" target=\"_blank\">FTP module of PHP</a> is not installed.<br /><br /> The administrator of this website should install this FTP module. Installation instructions are given on <a href=\"http://www.php.net/manual/en/ref.ftp.php\" target=\"_blank\">php.net</a>.<br />"] = "The <a href=\"http://www.php.net/manual/en/ref.ftp.php\" target=\"_blank\">FTP module of PHP</a> is not installed.<br /><br /> The administrator of this website should install this FTP module. Installation instructions are given on <a href=\"http://www.php.net/manual/en/ref.ftp.php\" target=\"_blank\">php.net</a>.<br />";
$net2ftp_messages["The FTP module of PHP and/or OpenSSL are not installed.<br /><br /> The administrator of this website should install these. Installation instructions are given on php.net: <a href=\"http://www.php.net/manual/en/ref.ftp.php\" target=\"_blank\">FTP module installation</a> and <a href=\"http://php.net/manual/en/openssl.installation.php\">OpenSSL installation</a>.<br />"] = "The FTP module of PHP and/or OpenSSL are not installed.<br /><br /> The administrator of this website should install these. Installation instructions are given on php.net: <a href=\"http://www.php.net/manual/en/ref.ftp.php\" target=\"_blank\">FTP module installation</a> and <a href=\"http://php.net/manual/en/openssl.installation.php\">OpenSSL installation</a>.<br />";
$net2ftp_messages["The FTP server <b>%1\$s</b> is in the list of banned FTP servers."] = "FTP-сервер <b>%1\$s</b> находится в списке запрещенных FTP-серверов.";
$net2ftp_messages["The FTP server <b>%1\$s</b> is not in the list of allowed FTP servers."] = "FTP-сервер <b>%1\$s</b> не найден в списке разрешенных FTP-серверов.";
$net2ftp_messages["The FTP server port %1\$s may not be used."] = "Порт FTP-сервера %1\$s не может использоваться.";
$net2ftp_messages["The FTP transfer mode (ASCII or BINARY) will be automatically determined, based on the filename extension"] = "Режим передачи FTP (ASCII или BINARY) будет автоматически определен, основан на расширении";
$net2ftp_messages["The SQL query nr <b>%1\$s</b> could not be executed."] = "SQL-запрос <b>%1\$s</b> не может быть выполнен.";
$net2ftp_messages["The SQL query nr <b>%1\$s</b> was executed successfully."] = "SQL-запрос <b>%1\$s</b> был успешно выполнен.";
$net2ftp_messages["The SSH server's fingerprint does not match the fingerprint which was validated previously.<br /><br />Current fingerprint: %1\$s <br />Fingerprint validated previously: %2\$s <br /><br />"] = "The SSH server's fingerprint does not match the fingerprint which was validated previously.<br /><br />Current fingerprint: %1\$s <br />Fingerprint validated previously: %2\$s <br /><br />";
$net2ftp_messages["The chmod nr <b>%1\$s</b> is out of the range 000-777. Please try again."] = "Chmod <b>%1\$s</b> выходит из диапазона 000-777. Попробуйте ещё раз.";
$net2ftp_messages["The directory <b>%1\$s</b> contains a banned keyword, aborting the move"] = "Директория <b>%1\$s</b> содержит запрещенное слово, перемещение не будет выполнено";
$net2ftp_messages["The directory <b>%1\$s</b> contains a banned keyword, so this directory will be skipped"] = "Директория <b>%1\$s</b> содержит запрещенное слово, поэтому директория будет пропущена";
$net2ftp_messages["The directory <b>%1\$s</b> could not be selected - you may not have sufficient rights to view this directory, or it may not exist."] = "Директория <b>%1\$s</b> не может быть выбрана - у Вас может быть недостаточно прав для просмотра или директория не существует.";
$net2ftp_messages["The directory <b>%1\$s</b> could not be selected, so this directory will be skipped"] = "Директория <b>%1\$s</b> не может быть выбрана, поэтому она будет пропущена";
$net2ftp_messages["The directory <b>%1\$s</b> does not exist or could not be selected, so the directory <b>%2\$s</b> is shown instead."] = "Директория <b>%1\$s</b> не существует или не может быть выбрана, поэтому выбрана директория <b>%2\$s</b> .";
$net2ftp_messages["The email address you have entered (%1\$s) does not seem to be valid.<br />Please enter an address in the format <b>username@domain.com</b>"] = "Email адрес, который вы ввели (%1\$s) неправилен.<br />Пожалуйста, введите адрес в формате <b>имя_пользователя@домен.ru</b>";
$net2ftp_messages["The file %1\$s could not be opened."] = "Файл %1\$s не может быть открыт.";
$net2ftp_messages["The file <b>%1\$s</b> contains a banned keyword, aborting the move"] = "Файл <b>%1\$s</b> содержит запрещенные слова, файл не будет перемещен";
$net2ftp_messages["The file <b>%1\$s</b> contains a banned keyword, so this file will be skipped"] = "Файл <b>%1\$s</b> содержит запрещенные слова, поэтому файл будет пропущен";
$net2ftp_messages["The file <b>%1\$s</b> is too big to be copied, so this file will be skipped"] = "Файл <b>%1\$s</b> слишком большой для копирования, поэтому он будет пропущен";
$net2ftp_messages["The file <b>%1\$s</b> is too big to be moved, aborting the move"] = "Файл <b>%1\$s</b> слишком большой для перемещения, перемещение не будет выполнено";
$net2ftp_messages["The file is too big to be transferred"] = "Файл слишком велик для передачи.";
$net2ftp_messages["The handle of file %1\$s could not be closed."] = "Не удалось закрыть указатель на файл %1\$s";
$net2ftp_messages["The handle of file %1\$s could not be opened."] = "Не удалось открыть указатель для файла %1\$s";
$net2ftp_messages["The latest version information could not be retrieved from the net2ftp.com server. Check the security settings of your browser, which may prevent the loading of a small file from the net2ftp.com server."] = "Не удалось получить информация о последней версии с сайта net2ftp.com. Проверьте настройки безопасности Вашего браузера, которые могут препятствовать загрузке небольшого файла с net2ftp.com.";
$net2ftp_messages["The log tables could not be copied."] = "The log tables could not be copied.";
$net2ftp_messages["The log tables could not be renamed."] = "The log tables could not be renamed.";
$net2ftp_messages["The log tables were copied successfully."] = "The log tables were copied successfully.";
$net2ftp_messages["The log tables were renamed successfully."] = "The log tables were renamed successfully.";
$net2ftp_messages["The maximum execution time is <b>%1\$s seconds</b>"] = "Максимальное время выполнения <b>%1\$s секунд</b>";
$net2ftp_messages["The maximum size of one file is restricted by net2ftp to <b>%1\$s</b> and by PHP to <b>%2\$s</b>"] = "Максимальный размер одного файла ограничен net2ftp до <b>%1\$s</b> и PHP до <b>%2\$s</b>";
$net2ftp_messages["The net2ftp installer script has been copied to the FTP server."] = "Установочный скрипт net2ftp был скопирован на FTP сервер.";
$net2ftp_messages["The new directories will be created in <b>%1\$s</b>."] = "Новые папки будут созданы в <b>%1\$s</b>.";
$net2ftp_messages["The new name may not contain any banned keywords. This entry was not renamed to <b>%1\$s</b>"] = "Имя не может содержать запрещенные слова. Файл не был переименован в <b>%1\$s</b>";
$net2ftp_messages["The new name may not contain any dots. This entry was not renamed to <b>%1\$s</b>"] = "Имя не может содержать точек. Не было переименовано в <b>%1\$s</b>";
$net2ftp_messages["The number of files which were skipped is:"] = "Количество файлов, которые были пропущены:";
$net2ftp_messages["The oldest log table could not be dropped."] = "The oldest log table could not be dropped.";
$net2ftp_messages["The oldest log table was dropped successfully."] = "The oldest log table was dropped successfully.";
$net2ftp_messages["The online installation is about 1-2 MB and the offline installation is about 13 MB. This 'end-user' java is called JRE (Java Runtime Environment)."] = "The online installation is about 1-2 MB and the offline installation is about 13 MB. This 'end-user' java is called JRE (Java Runtime Environment).";
$net2ftp_messages["The table <b>%1\$s</b> could not be emptied."] = "Таблица <b>%1\$s</b> не может быть очищена.";
$net2ftp_messages["The table <b>%1\$s</b> could not be optimized."] = "Таблица <b>%1\$s</b> не может быть оптимизирована.";
$net2ftp_messages["The table <b>%1\$s</b> was emptied successfully."] = "Таблица <b>%1\$s</b> успешно очищена.";
$net2ftp_messages["The table <b>%1\$s</b> was optimized successfully."] = "Таблица <b>%1\$s</b> успешно опти.";
$net2ftp_messages["The target directory <b>%1\$s</b> is the same as or a subdirectory of the source directory <b>%2\$s</b>, so this directory will be skipped"] = "Папка назначения <b>%1\$s</b> совпадает с подпапкой <b>%2\$s</b>, следовательно она будте пропущена";
$net2ftp_messages["The target for file <b>%1\$s</b> is the same as the source, so this file will be skipped"] = "Файл назначения <b>%1\$s</b> совпадает с исходным файлом, он будет пропущен";
$net2ftp_messages["The task you wanted to perform with net2ftp took more time than the allowed %1\$s seconds, and therefor that task was stopped."] = "Задание, которое вы хотели прекратить через net2ftp займет больше %1\$s разрешенных секунд. Выполнение остановлено.";
$net2ftp_messages["The total size taken by the selected directories and files is:"] = "Общий размер файлов и папок:";
$net2ftp_messages["The variable <b>consumption_ipaddress_datatransfer</b> is not numeric."] = "Переменная <b>consumption_ipaddress_datatransfer</b> не является числом.";
$net2ftp_messages["The word <b>%1\$s</b> was found in the following files:"] = "Слово <b>%1\$s</b> было найдено в следующих фразах:";
$net2ftp_messages["The word <b>%1\$s</b> was not found in the selected directories and files."] = "Слово <b>%1\$s</b> не было найдено.";
$net2ftp_messages["The zip file has been saved on the FTP server as <b>%1\$s</b>"] = "Zip-файл сохранен на FTP-сервере как <b>%1\$s</b>";
$net2ftp_messages["The zip file has been sent to <b>%1\$s</b>."] = "Zip-файл отправлен <b>%1\$s</b>.";
$net2ftp_messages["This SQL query is going to be executed:"] = "Будет выполнен следующий SQL-запрос:";
$net2ftp_messages["This file is not accessible from the web"] = "Этот файл не доступен из web-интерфейса";
$net2ftp_messages["This folder is empty"] = "Папка пуста";
$net2ftp_messages["This function has been disabled by the Administrator of this website."] = "Данная функция отключена Администратором.";
$net2ftp_messages["This function is available on PHP 5 only"] = "Эта функция доступна только с PHP 5";
$net2ftp_messages["This script runs on your web server and requires PHP to be installed."] = "Этот скрипт выполняется на Вашем сервере и требует наличие PHP.";
$net2ftp_messages["This time limit guarantees the fair use of the web server for everyone."] = "Это ограничение времени позволяет пользоваться сервером без перебоев.";
$net2ftp_messages["This version of net2ftp is up-to-date."] = "У Вас установлена последняя версия net2ftp.";
$net2ftp_messages["Time of sending: "] = "Время отправки: ";
$net2ftp_messages["To prevent this, you must close all browser windows."] = "Чтобы предотвратить это, закройте все окна браузера.";
$net2ftp_messages["To save the image, right-click on it and choose 'Save picture as...'"] = "Для сохранения нажмите правую клавишу мыши и выберите 'Save picture as...'";
$net2ftp_messages["To set a common target directory, enter that target directory in the textbox above and click on the button \"Set all targetdirectories\"."] = "Чтобы задать главную папку, введите её название в поле выше и выберите пункт \"Выбрать все папки\".";
$net2ftp_messages["To set all permissions to the same values, enter those permissions above and click on the button \"Set all permissions\""] = "To set all permissions to the same values, enter those permissions above and click on the button \"Set all permissions\"";
$net2ftp_messages["To set all permissions to the same values, enter those permissions and click on the button \"Set all permissions\""] = "Для выбора одинаковых разрешений, введите их значения ниже и нажмите на кнопку \"Выбрать разрешения\"";
$net2ftp_messages["To use this applet, please install the newest version of Sun's java. You can get it from <a href=\"http://www.java.com/\">java.com</a>. Click on Get It Now."] = "To use this applet, please install the newest version of Sun's java. You can get it from <a href=\"http://www.java.com/\">java.com</a>. Click on Get It Now.";
$net2ftp_messages["Transferring files to the FTP server"] = "Перемещение файлов на FTP-сервер";
$net2ftp_messages["Transform selected entries: "] = "Преобразовать выбранное: ";
$net2ftp_messages["Transform selected entry: "] = "Преобразовать выбранное: ";
$net2ftp_messages["Troubleshoot an FTP server"] = "Решение проблем FTP-сервера";
$net2ftp_messages["Troubleshoot net2ftp on this webserver"] = "Решение проблем net2ftp на этом веб-сервере";
$net2ftp_messages["Troubleshoot your net2ftp installation"] = "Решение проблем установки net2ftp";
$net2ftp_messages["Troubleshooting functions"] = "Функции для устранения проблем";
$net2ftp_messages["Try to split your task in smaller tasks: restrict your selection of files, and omit the biggest files."] = "Попробуйте разделить задание: например, запретите выбор отдельных файлов.";
$net2ftp_messages["Two click access (net2ftp will ask for a password - safer)"] = "Two click access (net2ftp will ask for a password - safer)";
$net2ftp_messages["Type"] = "Тип";
$net2ftp_messages["Unable to close the handle of the temporary file"] = "Не удалось закрыть временный файл";
$net2ftp_messages["Unable to connect to FTP server <b>%1\$s</b> on port <b>%2\$s</b>.<br /><br />Are you sure this is the address of the FTP server? This is often different from that of the HTTP (web) server. Please contact your ISP helpdesk or system administrator for help.<br />"] = "Не удалось соединиться с FTP-сервером <b>%1\$s</b> на порту <b>%2\$s</b>.<br /><br />Правильный ли адрес FTP-сервера? Он часто отличается от адреса HTTP-сервера. Пожалуйста, свяжитесь с поддержкой вашего ISP или с системным администратором.<br />";
$net2ftp_messages["Unable to connect to SSH server <b>%1\$s</b> on port <b>%2\$s</b> (%3\$s).<br /><br />Are you sure this is the address of the FTP server? This is often different from that of the HTTP (web) server. Please contact your ISP helpdesk or system administrator for help.<br />"] = "Unable to connect to SSH server <b>%1\$s</b> on port <b>%2\$s</b> (%3\$s).<br /><br />Are you sure this is the address of the FTP server? This is often different from that of the HTTP (web) server. Please contact your ISP helpdesk or system administrator for help.<br />";
$net2ftp_messages["Unable to connect to the MySQL database. Please check your MySQL database settings in net2ftp's configuration file settings.inc.php."] = "Невозможно соединиться с сервером MySQL. Проверьте параметры подключения в файле settings.inc.php.";
$net2ftp_messages["Unable to connect to the server <b>%1\$s</b>."] = "Unable to connect to the server <b>%1\$s</b>.";
$net2ftp_messages["Unable to copy the file <b>%1\$s</b>"] = "Не удалось скопировать файл <b>%1\$s</b>";
$net2ftp_messages["Unable to copy the local file to the remote file <b>%1\$s</b> using FTP mode <b>%2\$s</b>"] = "Не удалось скопировать локальный файл <b>%1\$s</b> на удаленный компьютер, используя режим <b>%2\$s</b>";
$net2ftp_messages["Unable to copy the remote file <b>%1\$s</b> to the local file using FTP mode <b>%2\$s</b>"] = "Не удалось скопировать удаленный файл <b>%1\$s</b> на локальный компьютер, используя FTP-ht;bv <b>%2\$s</b>";
$net2ftp_messages["Unable to create a temporary directory (too many tries)"] = "Unable to create a temporary directory (too many tries)";
$net2ftp_messages["Unable to create a temporary directory because (parent directory is not writeable)"] = "Unable to create a temporary directory because (parent directory is not writeable)";
$net2ftp_messages["Unable to create a temporary directory because (unvalid parent directory)"] = "Unable to create a temporary directory because (unvalid parent directory)";
$net2ftp_messages["Unable to create the directory <b>%1\$s</b>"] = "Не удалось создать папку <b>%1\$s</b>";
$net2ftp_messages["Unable to create the subdirectory <b>%1\$s</b>. It may already exist. Continuing the copy/move process..."] = "Не удалось создать подпапку <b>%1\$s</b>. Она уже существует. Продолжение процесса...";
$net2ftp_messages["Unable to create the temporary file. Check the permissions of the %1\$s directory."] = "Не удалось создать временный файл. Проверьте разрешения папки %1\$s.";
$net2ftp_messages["Unable to delete file <b>%1\$s</b>"] = "Не удалось удалить файл <b>%1\$s</b>";
$net2ftp_messages["Unable to delete the directory <b>%1\$s</b>"] = "Не удалось удалить папку <b>%1\$s</b>";
$net2ftp_messages["Unable to delete the file <b>%1\$s</b>"] = "Не удалось удалить файл <b>%1\$s</b>";
$net2ftp_messages["Unable to delete the local file"] = "Не удалось удалить локальный файл";
$net2ftp_messages["Unable to delete the subdirectory <b>%1\$s</b> - it may not be empty"] = "Не удалось удалить подпапку <b>%1\$s</b> - она не пуста";
$net2ftp_messages["Unable to delete the temporary directory"] = "Не удалось удалить временную директорию";
$net2ftp_messages["Unable to delete the temporary file"] = "Не удалось удалить временный файл";
$net2ftp_messages["Unable to delete the temporary file %1\$s"] = "Не удалось удалить временный файл %1\$s";
$net2ftp_messages["Unable to determine your IP address."] = "Не удается распознать Ваш ip адрес.";
$net2ftp_messages["Unable to execute site command <b>%1\$s</b>"] = "Не удалось выполнить команду <b>%1\$s</b>";
$net2ftp_messages["Unable to execute site command <b>%1\$s</b>. Note that the CHMOD command is only available on Unix FTP servers, not on Windows FTP servers."] = "Не удалось выполнить команду <b>%1\$s</b>. Команда CHMOD доступна только на Unix-серверах.";
$net2ftp_messages["Unable to execute the SQL query <b>%1\$s</b>."] = "Не удалось выполнить SQL запрос <b>%1\$s</b>.";
$net2ftp_messages["Unable to execute the SQL query."] = "Не удается выполнить SQL запрос.";
$net2ftp_messages["Unable to extract the files and directories from the archive"] = "Не удалось извлечь файлы из архива";
$net2ftp_messages["Unable to get the archive <b>%1\$s</b> from the FTP server"] = "Не удалось получить архив <b>%1\$s</b> с FTP сервера";
$net2ftp_messages["Unable to get the file <b>%1\$s</b> from the FTP server and to save it as temporary file <b>%2\$s</b>.<br />Check the permissions of the %3\$s directory.<br />"] = "Не удалось скачать файл <b>%1\$s</b> с FTP-сервера и сохранить его как временный файл <b>%2\$s</b>.<br />Проверьте разрешения папки %3\$s.<br />";
$net2ftp_messages["Unable to get the list of packages"] = "Не удается получить список пакетов";
$net2ftp_messages["Unable to login to FTP server <b>%1\$s</b> with username <b>%2\$s</b>.<br /><br />Are you sure your username and password are correct? Please contact your ISP helpdesk or system administrator for help.<br />"] = "Не удалось войти на FTP-сервер <b>%1\$s</b> с логином <b>%2\$s</b>.<br /><br />Правильны ли логин и пароль? Пожалуйста, свяжитесь с техподдержкой вашего ISP или сисадмином.<br />";
$net2ftp_messages["Unable to login to SSH server <b>%1\$s</b> with username <b>%2\$s</b> (%3\$s).<br /><br />Are you sure your username and password are correct? Please contact your ISP helpdesk or system administrator for help.<br />"] = "Unable to login to SSH server <b>%1\$s</b> with username <b>%2\$s</b> (%3\$s).<br /><br />Are you sure your username and password are correct? Please contact your ISP helpdesk or system administrator for help.<br />";
$net2ftp_messages["Unable to move the directory <b>%1\$s</b>"] = "Unable to move the directory <b>%1\$s</b>";
$net2ftp_messages["Unable to move the file <b>%1\$s</b>"] = "Unable to move the file <b>%1\$s</b>";
$net2ftp_messages["Unable to move the file <b>%1\$s</b>, aborting the move"] = "Не удалось переместить файл <b>%1\$s</b>, перемещение не выполнено.";
$net2ftp_messages["Unable to move the uploaded file to the temp directory.<br /><br />The administrator of this website has to <b>chmod 777</b> the /temp directory of net2ftp."] = "Не удалось переместить закачанный файл во временную папку.<br /><br />Администратору сайта надо сменить <b>chmod</b> на <b>777</b> папки /temp.";
$net2ftp_messages["Unable to open the system log."] = "Unable to open the system log.";
$net2ftp_messages["Unable to open the template file"] = "Не удалось открыть временный файл";
$net2ftp_messages["Unable to open the temporary file. Check the permissions of the %1\$s directory."] = "Не удалось открыть файл. Проверьте разрешения папки %1\$s.";
$net2ftp_messages["Unable to put the file <b>%1\$s</b> on the FTP server.<br />You may not have write permissions on the directory."] = "Не удалось закачать файл <b>%1\$s</b> на FTP-сервер.<br />Возможно, у вас нет прав.";
$net2ftp_messages["Unable to read the template file"] = "Не удалось прочитать временный файл";
$net2ftp_messages["Unable to read the temporary file"] = "Не удалось прочитать временный файл";
$net2ftp_messages["Unable to rename directory or file <b>%1\$s</b> into <b>%2\$s</b>"] = "Не удалось переименовать папку или файл <b>%1\$s</b> в <b>%2\$s</b>";
$net2ftp_messages["Unable to select the MySQL database. Please check your MySQL database settings in net2ftp's configuration file settings.inc.php."] = "Unable to select the MySQL database. Please check your MySQL database settings in net2ftp's configuration file settings.inc.php.";
$net2ftp_messages["Unable to select the database <b>%1\$s</b>."] = "Не удается выбрать базу данных <b>%1\$s</b>.";
$net2ftp_messages["Unable to send the file to the browser"] = "Невозможно передать файл браузеру";
$net2ftp_messages["Unable to switch to the passive mode on FTP server <b>%1\$s</b>."] = "Не удалось переключиться в пассивный режим FTP <b>%1\$s</b>.";
$net2ftp_messages["Unable to write a message to the system log."] = "Unable to write a message to the system log.";
$net2ftp_messages["Unable to write the string to the temporary file <b>%1\$s</b>.<br />Check the permissions of the %2\$s directory."] = "Не удалось записать строку во временный файл <b>%1\$s</b>.<br />Проверьте разрешения папки %2\$s.";
$net2ftp_messages["Unexpected state string: %1\$s. Exiting."] = "Неожиданный формат строки: %1\$s. Выход.";
$net2ftp_messages["Unrecognized FTP output"] = "Неизвестный выход FTP";
$net2ftp_messages["Unzip"] = "Распаковать";
$net2ftp_messages["Unzip archive <b>%1\$s</b> to:"] = "Распаковать архив <b>%1\$s</b> to:";
$net2ftp_messages["Unzip archives"] = "Распокавать архивы";
$net2ftp_messages["Unzip the selected archives on the FTP server"] = "Распаковать выбранные архивы на FTP сервер";
$net2ftp_messages["Up"] = "Вверх";
$net2ftp_messages["Update"] = "Обновить";
$net2ftp_messages["Upload"] = "Закачать";
$net2ftp_messages["Upload a new version of the file %1\$s and merge the changes"] = "Закачать новую версию файла 1\$s и применить изменения";
$net2ftp_messages["Upload directories and files using a Java applet"] = "Загрузить файлы и директории используя Java апплет";
$net2ftp_messages["Upload files and archives"] = "Закачать файлы и папки";
$net2ftp_messages["Upload more files and archives"] = "Закачать другие файлы и архивы";
$net2ftp_messages["Upload new files in directory %1\$s"] = "Закачать новые файлы в папку %1\$s";
$net2ftp_messages["Upload to directory:"] = "Закачать в папку:";
$net2ftp_messages["Username"] = "Логин";
$net2ftp_messages["Version information"] = "Информация о версии";
$net2ftp_messages["View"] = "Показ.";
$net2ftp_messages["View Macromedia ShockWave Flash movie %1\$s"] = "Посмотреть ролик Macromedia ShockWave Flash %1\$s";
$net2ftp_messages["View file %1\$s"] = "Просмотр файла %1\$s";
$net2ftp_messages["View image %1\$s"] = "Показать рисунок %1\$s";
$net2ftp_messages["View logs"] = "Просмотр логов";
$net2ftp_messages["View the file %1\$s from your HTTP web server"] = "Показать файл %1\$s с вашего HTTP-сервера";
$net2ftp_messages["View the highlighted source code of file %1\$s"] = "Показать исходный код %1\$s";
$net2ftp_messages["WAV sound file"] = "Звук WAV";
$net2ftp_messages["Webmaster's email: "] = "Адрес Веб-мастера: ";
$net2ftp_messages["Writing some text to the file: "] = "Запись текста в файл: ";
$net2ftp_messages["Wrong username or password. Please try again."] = "Неправильное имя пользователя или пароль. Пожалуйста, попробуйте еще раз.";
$net2ftp_messages["You did not enter a filename for the zipfile. Go back and enter a filename."] = "Вы не ввели имя файла для zip. Вернитесь назад и введите имя файла.";
$net2ftp_messages["You did not enter your Administrator username or password."] = "Вы не указали имя пользователя или пароль Администратора.";
$net2ftp_messages["You did not provide any file to upload."] = "Вы не выбрали файл.";
$net2ftp_messages["You did not provide any text to send by email!"] = "Нет текста для отправки по электронной почте!";
$net2ftp_messages["You did not supply a From address."] = "Вы не указали адрес отправителя.";
$net2ftp_messages["You did not supply a To address."] = "Вы не указали адрес получателя.";
$net2ftp_messages["You have logged out from the FTP server. To log back in, <a href=\"%1\$s\" title=\"Login page (accesskey l)\" accesskey=\"l\">follow this link</a>."] = "Вы вышли с FTP сервера. Чтобы зайти обратно, <a href=\"%1\$s\" title=\"Login page (accesskey l)\" accesskey=\"l\">нажмите на эту ссылку</a>.";
$net2ftp_messages["Your IP address (%1\$s) is in the list of banned IP addresses."] = "Ваш IP-адрес (%1\$s) находится в списке запрещенных IP-адресов.";
$net2ftp_messages["Your IP address (%1\$s) is not in the list of allowed IP addresses."] = "Ваш IP-адрес (%1\$s) не находится в списке разрешенных.";
$net2ftp_messages["Your IP address has changed; please enter your password for FTP server <b>%1\$s</b> to continue."] = "Ваш IP адрес изменился; пожалуйста, введите Ваш пароль от FTP сервера <b>%1\$s</b> чтобы продолжить.";
$net2ftp_messages["Your browser does not support applets, or you have disabled applets in your browser settings."] = "Your browser does not support applets, or you have disabled applets in your browser settings.";
$net2ftp_messages["Your root directory <b>%1\$s</b> does not exist or could not be selected."] = "Ваша корневая директория <b>%1\$s</b> не существует или не может быть выбрана.";
$net2ftp_messages["Your session has expired; please enter your password for FTP server <b>%1\$s</b> to continue."] = "Время действия сессии истекло; пожалуйста, введите Ваш пароль к FTP серверу <b>%1\$s</b> чтобы продолжить.";
$net2ftp_messages["Your task was stopped"] = "Ваше задание остановлено";
$net2ftp_messages["Zip"] = "Архивировать";
$net2ftp_messages["Zip archive"] = "Zip-архив";
$net2ftp_messages["Zip entries"] = "Содержимое Zip";
$net2ftp_messages["Zip the selected entries to save or email them"] = "Сжать выбранное и отправить по email";
$net2ftp_messages["en"] = "ru";
$net2ftp_messages["files which were last modified"] = "файлы, измененные";
$net2ftp_messages["files with a filename like"] = "имя файла как";
$net2ftp_messages["files with a size"] = "файлы с размером";
$net2ftp_messages["from"] = "от";
$net2ftp_messages["left"] = "left";
$net2ftp_messages["ltr"] = "ltr";
$net2ftp_messages["net2ftp has tried to determine the directory mapping between the FTP server and the web server."] = "net2ftp попытался определить связь директорий между FTP- и веб-сервером.";
$net2ftp_messages["net2ftp is free software, released under the GNU/GPL license. For more information, go to http://www.net2ftp.com."] = "net2ftp бесплатное ПО, выпускаемое под лицензией GNU/GPL. Более подробная информация находится по адресу http://www.net2ftp.com.";
$net2ftp_messages["no - please install it!"] = "нет - пожалуйста, установите его!";
$net2ftp_messages["not OK"] = "not OK";
$net2ftp_messages["not OK. Check the permissions of the %1\$s directory"] = "не OK. Проверьте разрешения папки %1\$s";
$net2ftp_messages["right"] = "right";
$net2ftp_messages["to"] = "до";
$net2ftp_messages["to:"] = "to:";
$net2ftp_messages["yes"] = "да";

?>