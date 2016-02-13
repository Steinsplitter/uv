<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
  <meta http-equiv="Content-type" content="text/html;charset=UTF-8" />
  <title>Username vaidator</title>
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
        <a class="navbar-brand" href="#">Username validator</a>
      </div>
        <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-wrench" aria-hidden="true"></span> <?php require ("i18n.php"); echo $langf; ?>
        <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="index.php?lang=de">Deutsch</a></li>
            <li><a href="index.php?lang=en">English</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="https://github.com/steinsplitter/uv">Edit / Translate</a></li>
          </ul>
        </li>
        </ul>
    </div>
  </div>

  <div class="container">
<?php
require ("i18n.php");
echo $t0;
?>
<br>
<div class="well form-submit">
<form action="index.php">
<input type="text" name="username" class="form-control" id="username" placeholder="Username..."><br>
<input type="hidden" name="lang" value="<?php require ("i18n.php"); echo $lang; ?>" />
<input class="btn btn-primary btn-success" value="<?php require ("i18n.php"); echo $t9; ?>" type="submit">
</form>
</div>
<br>


<?
require ("i18n.php");

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
if(isset($username)) {

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
        }
}



} else {

echo $t8;
}

?>
</body>
</html>
