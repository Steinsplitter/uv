<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
  <title><?php require ("i18n.php"); echo $th; ?></title>
  <link href="//tools-static.wmflabs.org/cdnjs/ajax/libs/twitter-bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
  <script src="//tools-static.wmflabs.org/cdnjs/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
  <script src="//tools-static.wmflabs.org/cdnjs/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js"></script>
  <style>
    body {
      padding-top: 60px;
    }
  </style>
</head>
<body>
  <div class="navbar navbar-default navbar-fixed-top">
   <div class="container-fluid">
      <div class="navbar-header">
        <a class="navbar-brand" href="#"><?php echo $th; ?></a>
      </div>
        <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span> <?php require ("i18n.php"); echo $langf; ?>
        <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="index.php?lang=ca">Català (ca)</a></li>
            <li><a href="index.php?lang=de">Deutsch (de)</a></li>
            <li><a href="index.php?lang=es">Español (es)</a></li>
            <li><a href="index.php?lang=en">English (en)</a></li>
            <li><a href="index.php?lang=id">Bahasa Indonesia (id)</a></li>
            <li><a href="index.php?lang=ru">Pусский (ru)</a></li>
            <li><a href="index.php?lang=zh">中文 (zh)</a></li>
            <li><a href="index.php?lang=ar">العربية</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="https://github.com/steinsplitter/uv">Edit / Translate</a></li>
          </ul>
        </li>
        </ul>
    </div>
  </div>

  <div class="container">
<?php echo $t0; ?>
<br>
<div class="well form-submit">
<form action="index.php">
<?php
if($_GET["specialform"] == "dewiki") {
echo "<input type=\"hidden\" name=\"specialform\" value=\"dewiki\" />";
echo "<b><p>Neuer Benutzername:</p></b>";
} elseif($_GET["specialform"] == "eswiki") {
echo "<input type=\"hidden\" name=\"specialform\" value=\"eswiki\" />";
echo "<b><p>Solicita un nombre de usuario nuevo por el que quieras que se te conozca a través de todos los proyectos:</p></b>";
}
?>
<input type="text" name="username" class="form-control" id="username" placeholder="<?php echo $un; ?>"><br>
<input type="hidden" name="lang" value="<?php  echo $lang; ?>" />
<input class="btn btn-primary btn-success" value="<?php echo $t9; ?>" type="submit">
</form>
</div>
<br>

<?php
function errormsg($text) {
echo "<div class=\"alert alert-danger\" role=\"alert\"><span class=\"glyphicon glyphicon-remove\" aria-hidden=\"true\"></span> ";
echo "$text";
echo "</div>";
}

function okmsg($text) {
echo "<div class=\"alert alert-success\" role=\"alert\"><span class=\"glyphicon glyphicon-ok\" aria-hidden=\"true\"></span> ";
echo "$text";
echo "</div>";
}

$username = $_GET['username'];
if(isset($username) && !empty($username)) {

echo "<span class=\"glyphicon glyphicon-user\" aria-hidden=\"true\"></span> <b>";
echo $un; echo ":</b> "; echo htmlspecialchars($username);
echo "<br><br>";

if (preg_match('/^[a-z].*$/', $username)) {
    errormsg($t1);
    $valid = "false";
} elseif (preg_match('/\@/', $username)) {
    errormsg($t2);
   $valid = "false";
} elseif (preg_match('/.{40}/', $username)) {
    errormsg($t3);
   $valid = "false";
} elseif (preg_match('/(\#|\<|\>|\[|\]|\||\{|\}\/)/', $username)) {
    errormsg($t4);
   $valid = "false";
} else {
    $valid = "true";
}

if ($valid == "true")  {
    okmsg($t5);
        $tools_pw = posix_getpwuid(posix_getuid());
        $tools_mycnf = parse_ini_file($tools_pw['dir'] . "/replica.my.cnf");
        $db = new mysqli('s1.labsdb', $tools_mycnf['user'], $tools_mycnf['password'],
                'centralauth_p');
        if ($db->connect_errno)
                die("Failed to connect to MySQL: (" . $db->connect_errno . ") " . $db->connect_error);
        $r = $db->query('select gu_name from globaluser where gu_name = "' . $db->real_escape_string($username) . '" limit 1;');
        unset($tools_mycnf, $tools_pw);
        $cnt = $r->num_rows;
        if ($cnt == "1"){
         errormsg($t6);
        } else  {
        okmsg($t7);

        if($_GET["specialform"] == "dewiki") {
        echo "<div class=\"form-group\">
<form id=\"upload\" method=\"post\" enctype=\"multipart/form-data\" action=\"https://de.wikipedia.org/w/index.php?title=Wikipedia:Benutzernamen_%C3%A4ndern&action=edit&section=new&nosummary=1\" style=\"display:inline\">
<h1>Benutzername &auml;ndern</h1>
<p class=\"bg-info\">Achte darauf, dass du mit deinem aktuellen Benutzernamen angemeldet bist.<br>Bitte ersetze \"Hinweise etc.\" solltest du eine Hinweis oder eine Begr&uuml;ndung hinterlassen wollen.</p>
<textarea rows=\"8\" class=\"form-control\" name=\"wpTextbox1\">{{subst:Wikipedia:Benutzernamen &auml;ndern/Preloadvorlage
|1= ". htmlspecialchars($username) ."
|2= Hinweise etc.
}}
</textarea>
<input name=\"wpPreview\" value=\"wpPreview\" type=\"hidden\">
<input value=\"0\" name=\"wpStarttime\" type=\"hidden\">
<input value=\"0\" name=\"wpEdittime\" type=\"hidden\">
<input value=\"0\" name=\"wpMinoredit\" type=\"hidden\">
<br>
<input class=\"btn btn-primary\" name=\"wpPreview\" value=\"Vorschau & Speichern\" type=\"submit\">
</form>
</div>";
        } elseif($_GET["specialform"] == "eswiki") {
echo "<div class=\"form-group\">
<form id=\"upload\" method=\"post\" enctype=\"multipart/form-data\" action=\"https://es.wikipedia.org/w/index.php?title=Wikipedia:Cambiar_el_nombre_de_usuario&action=edit&section=new&nosummary=1\" style=\"display:inline\">
<h1>Cambiar el nombre de usuario</h1>
<p class=\"bg-info\">Por favor verifica que has iniciado sesión con tu cuenta.<br>Por favor reemplaza \"razones para el cambio\" con una justificación.</p>
<textarea rows=\"8\" class=\"form-control\" name=\"wpTextbox1\">{{subst:renombrar usuario
|1= {{subst:REVISIONUSER}}
|2= ". htmlspecialchars($username) ."
|3= razones para el cambio
}}
</textarea>
<input name=\"wpPreview\" value=\"wpPreview\" type=\"hidden\">
<input value=\"0\" name=\"wpStarttime\" type=\"hidden\">
<input value=\"0\" name=\"wpEdittime\" type=\"hidden\">
<input value=\"0\" name=\"wpMinoredit\" type=\"hidden\">
<br>
<input class=\"btn btn-primary\" name=\"wpPreview\" value=\"Previsualizar y guardar\" type=\"submit\">
</form>
</div>";
        }

        }
}



} else {

echo $t8;
}

?>
