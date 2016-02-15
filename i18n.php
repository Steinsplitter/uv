<?php
// TRANSLATION
if($_GET["lang"] == "de") {
$lang = "de";
$langf = "Deutsch";
$th = "Benutzernamen tool";
$un = "Benutzername";
$t0 = "<p>Dieses tool prüfft ob ein Benutzernam bereits existiert und valid ist.</p>";
$t1 = "Der Benutzername muss mit einen GROSSBUCHSTABEN beginnen.";
$t2 = "<b>@</b> in Benutzernamen ist nicht möglich.";
$t3 = "Benutzername zu lang.";
$t4 = "Benutzername enthält verbotene Zeichen. (#, <, >, [, ], |, {, }, ...).";
$t5 = "Der gewählte Benutzername ist in Valide (Verbotene Zeichen/Format scan war negativ).";
$t6 = "Der Benutzername existiert bereits,";
$t7 = "Der Benutzernamen ist noch nicht registriert.";
$t8 = "Bitte einen Nutzernamen eingaben.";
$t9 = "Los!";
}
elseif($_GET["lang"] == "ru") {
$lang = "ru";
$langf = "Pусский";
$th = "Инструмент для проверки имён пользователей";
$un = "Имя участника";
$t0 = "<p>Этот инструмент проверяет является ли имя пользователя действительным и находится ли оно в использовании.</p>";
$t1 = "Имя пользователя должно начинаться с заглавной буквы.";
$t2 = "<b>@</b> в имени пользователя не разрешается.";
$t3 = "Имя пользователя слишком длинное.";
$t4 = "Имя пользователя содержит запрещённые символы  (#, <, >, [, ], |, {, }, ...).";
$t5 = "Выбранное имя пользователя действительно (проверка формата имени пользователя дала отрицательный результат).";
$t6 = "Имя пользователя уже существует.";
$t7 = "Имя пользователя не зарегистрировано.";
$t8 = "Пожалуйста, введите имя пользователя для проверки.";
$t9 = "НАЧАТЬ!";
}
elseif($_GET["lang"] == "zh") {
$lang = "zh";
$langf = "中文";
$th = "用户名检查";
$un = "用户名";
$t0 = "<p>这个工具检查用户名是否有效且未被使用。</p>";
$t1 = "用户名必须以大写字母开头。";
$t2 = "用户名内不能包含<b>@</b>。";
$t3 = "用户名过长。";
$t4 = "用户名包含被禁止的字符（#、<、>、[、]、|、{、} ...)。";
$t5 = "用户名 有效（未搜索到被禁止的字符）。";
$t6 = "用户名已经存在。";
$t7 = "用户名未被注册。";
$t8 = "请输入一个要检查的用户名";
$t9 = "开始！";
}
else
{
$lang = "en";
$langf = "English";
$th = "Username validator";
$un = "Username";
$t0 = "<p>This tool checks if a username is valid and not in use.</p>";
$t1 = "Username must start with a big letter.";
$t2 = "<b>@</b> in username is not allowed.";
$t3 = "Username is too long.";
$t4 = "Username contains forbidden characters (#, <, >, [, ], |, {, }, ...).";
$t5 = "The selected username is valid (disallowed username format scan was negative).";
$t6 = "Username exists yet.";
$t7 = "Username is not registered.";
$t8 = "Please enter a username to check.";
$t9 = "GO!";
}
?>
