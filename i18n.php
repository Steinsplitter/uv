<?php
// TRANSLATION
if($_GET["lang"] == "de") {
$lang = "de";
$langf = "Deutsch";
$th = "Benutzernamen tool";
$t0 = "<p>Dieses tool prüfft ob ein Benutzernam bereits existiert und valid ist.</p>";
$t1 = "Der Benutzername muss mit einen GROSSBUCHSTABEN beginnen.";
$t2 = "<b>@</b> in Benutzernamen ist nicht möglich.";
$t3 = "Benutzername zu lang.";
$t4 = "Benutzername enthält verbotene Zeichen. (#, <, >, [, ], |, {, }, ...).";
$t5 = "Der gewählte Venutzername ". htmlspecialchars($username) ." ist OK (Verbotene Zeichen/Format scan).";
$t6 = "Der Benutzername existiert bereits,";
$t7 = "Der Benutzernamen ist noch nicht registriert.";
$t8 = "Bitte einen Nutzernamen eingaben.";
$t9 = "Los!";
}
elseif($_GET["lang"] == "ru") {
$lang = "ru";
$langf = "Pусский";
$th = "Инструмент для проверки имён пользователей";
$t0 = "<p>Этот инструмент проверяет является ли имя пользователя действительным и находится ли оно в использовании.</p>";
$t1 = "Имя пользователя должно начинаться с заглавной буквы.";
$t2 = "<b>@</b> в имени пользователя не разрешается.";
$t3 = "Имя пользователя слишком длинное.";
$t4 = "Имя пользователя содержит запрещённые символы  (#, <, >, [, ], |, {, }, ...).";
$t5 = "Выбранное имя пользователя ". htmlspecialchars($username) ." действительно (проверка формата имени пользователя дала отрицательный результат).";
$t6 = "Имя пользователя уже существует.";
$t7 = "Имя пользователя не зарегистрировано.";
$t8 = "Пожалуйста, введите имя пользователя для проверки.";
$t9 = "НАЧАТЬ!";
}
else
{
$lang = "en";
$langf = "English";
$th = "Username validator";
$t0 = "<p>This tool checks if a username is valid and not in use.</p>";
$t1 = "Username must start with a big letter.";
$t2 = "<b>@</b> in username is not allowed.";
$t3 = "Username is too long.";
$t4 = "Username contains forbidden characters (#, <, >, [, ], |, {, }, ...).";
$t5 = "The selected username ". htmlspecialchars($username) ." is valid (disallowed username format scan was negative).";
$t6 = "Username exists yet.";
$t7 = "Username is not registered.";
$t8 = "Please enter a username to check.";
$t9 = "GO!";
}
?>
