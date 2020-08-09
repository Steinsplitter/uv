<?php
// TRANSLATION
if($_GET["lang"] == "de") {
$lang = "de";
$langf = "Deutsch";
$th = "Benutzernamen-Tool";
$un = "Benutzername";
$t0 = "<p>Dieses Tool prüft ob ein Benutzername bereits existiert und valide ist.</p>";
$t1 = "Der Benutzername muss mit einem GROSSBUCHSTABEN beginnen.";
$t2 = "<b>@</b> in Benutzernamen ist nicht möglich.";
$t3 = "Benutzername zu lang.";
$t4 = "Benutzername enthält verbotene Zeichen. (#, <, >, [, ], |, {, }, ...).";
$t5 = "Der Benutzername ist gültig (Verbotene Zeichen/Format scan war negativ).";
$t6 = "Der Benutzername existiert bereits.";
$t7 = "Der Benutzername ist noch nicht registriert.";
$t8 = "Bitte einen Nutzernamen eingeben.";
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
elseif($_GET["lang"] == "hy") {
$lang = "hy";
$langf = "Հայերեն";
$th = "Մասնակցային անունները ստուգելու գործիք";
$un = "Մասնակցային անուն";
$t0 = "<p>Այս գործիքը ստուգում է՝ արդյո՞ք մասնակցային անունը վավեր է կամ օգտագործվում է:</p>";
$t1 = "Մասնակցային անունը պետք է սկսվի մեծատառով:";
$t2 = "<b>@</b> մասնակցային անվան մեջ չի թույլատրվում:";
$t3 = "Մասնակցային անունը չափազանց երկար է:";
$t4 = "Մասնակցային անունը պարունակում է արգելված նշաններ (#, <, >, [, ], |, {, }, ...):";
$t5 = "Ընտրված մասնակցային անունը վավեր է (անվան ձևաչափի ստուգումը տվեց բացասական արդյունք):";
$t6 = "Մասնակցային անունն արդեն գոյություն ունի:";
$t7 = "Մասնակցային անունը գրանցված է:";
$t8 = "Խնդրում ենք մուտքագրել մասնակցային անունը՝ ստուգելու համար:";
$t9 = "ՍԿՍԵԼ";
}
elseif($_GET["lang"] == "es") {
$lang = "es";
$langf = "Español";
$th = "Validador de nombre de usuario";
$un = "Nombre de usuario";
$t0 = "<p>Esta herramienta comprueba si un nombre de usuario es válido y no está en uso.</p>";
$t1 = "El nombre de usuario debe empezar por una letra mayúscula.";
$t2 = "No se permiten arrobas (<b>@</b>) en los nombres de usuario.";
$t3 = "El nombre de usuario es demasiado largo.";
$t4 = "El nombre de usuario contiene caracteres no permitidos (#, <, >, [, ], |, {, }, ...).";
$t5 = "El nombre de usuario seleccionado es válido (la comprobación de formato de nombres de usuario no permitidos ha sido negativa).";
$t6 = "El nombre de usuario ya existe.";
$t7 = "El nombre de usuario no está registrado.";
$t8 = "Por favor, introduce un nombre de usuario para ser comprobado.";
$t9 = "¡Vamos!";
}
elseif($_GET["lang"] == "ca") {
$lang = "ca";
$langf = "Català";
$th = "Validador de nom d'usuari";
$un = "Nom d'usuari";
$t0 = "<p>Aquesta ferramenta comprova si un nom d'usuari és vàlid i no està en ús.</p>";
$t1 = "El nom d'usuari ha de començar per una lletra majúscula.";
$t2 = "No es permeten caràcters <b>@</b> als noms d'usuari.";
$t3 = "El nom d'usuari és massa llarg.";
$t4 = "El nom d'usuari conté caràcters no permesos (#, <, >, [, ], |, {, }, ...).";
$t5 = "El nom d'usuari seleccionat és vàlid (la comprovació de format de noms d'usuari no permesos ha sigut negativa).";
$t6 = "El nom d'usuari ja existeix.";
$t7 = "El nom d'usuari no està registrat.";
$t8 = "Per favor, introdueix un nom d'usuari per a ser comprovat.";
$t9 = "Som-hi!";
}
elseif($_GET["lang"] == "ar") {
$lang = "ar";
$langf = "العربية";
$th = "أداة التحقق لأسماء المستخدمين";
$un = "اسم المستخدم";
$t0 = "<p>هذه الأداة تتحقق من وجود الاسم من قبل أو لا.</p>";
$t1 = "الأسماء بالإنجليزية يجب ان تبدأ بحروف كابيتال.";
$t2 = "<b>@</b> هذا الاسم غير مسموح به.";
$t3 = "اسم المستخدم طويل جداً.";
$t4 = "يحتوي على حروف ممنوعة مثل (#, <, >, [, ], |, {, }, ...).";
$t5 = "الاسم المطلوب متاح ولكن مكتوب بصيغة ممنوعة ولا يمكن التسجيل به.";
$t6 = "الاسم تم تسجيله من قبل، يرجى اختيار اسم اخر.";
$t7 = "الاسم غير مسجل من قبل.";
$t8 = "أدخل الاسم المطلوب للفحص.";
$t9 = "أذهب!";
}
elseif($_GET["lang"] == "id") {
$lang = "id";
$langf = "Bahasa Indonesia";
$th = "Validator nama pengguna";
$un = "Nama pengguna";
$t0 = "<p>Alat ini memeriksa apakah sebuah nama pengguna valid dan tidak digunakan.</p>";
$t1 = "Nama pengguna wajib diawali dengan huruf kapital.";
$t2 = "<b>@</b> dalam nama pengguna tidak diizinkan.";
$t3 = "Nama pengguna terlalu panjang.";
$t4 = "Nama pengguna mengandung karakter yang tidak diizinkan (#, <, >, [, ], |, {, }, ...).";
$t5 = "Nama pengguna terpilih valid (pencarian format nama pengguna yang tidak diizinkan nihil).";
$t6 = "Nama pengguna telah ada.";
$t7 = "Nama pengguna belum terdaftar.";
$t8 = "Masukkan nama pengguna untuk diperiksa.";
$t9 = "Jalankan!";
}
elseif($_GET["lang"] == "ja") {
$lang = "ja";
$langf = "日本語";
$th = "利用者名 バリデータ";
$un = "利用者名";
$t0 = "<p> このツールでは、利用者名が有効で使用されていないかどうかを確認します。 </p>";
$t1 = "利用者名は大文字で始める必要があります。";
$t2 = "ユーザー名に<b>@</b>は使用できません。";
$t3 = "利用者名が長すぎます。";
$t4 = "利用者名に禁止されている文字(#, <, >, [, ], |, {, }, ...)が含まれています。";
$t5 = "選択した利用者名は有効です（許可されていない利用者名の形式は見つかりませんでした）。";
$t6 = "利用者名は既に利用されています。";
$t7 = "利用者名は登録されていません。";
$t8 = "確認する利用者名を入力してください。";
$t9 = "実行!";
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
$t6 = "Username already exists.";
$t7 = "Username is not registered.";
$t8 = "Please enter a username to check.";
$t9 = "GO!";
}
?>
