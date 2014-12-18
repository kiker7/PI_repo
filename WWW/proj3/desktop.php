<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<meta http-equiv="Content-Language" content="pl">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link type="text/css" rel="stylesheet" href="../style/desktop.css">
</head>
<?php
 $iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");
 $android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");
 $palmpre = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");
 $berry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");
 $ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");
 if ($iphone || $android || $palmpre || $ipod || $berry == true)
     header('Location: mobile.html');
 ?>
<body>
  <div id="header"><h1>Programowanie Internetowe</h1><h3>Rafał Rutyna</h3></div>
  <div id="content">Wyświetlona została DESKTOPOWA wersja strony</div>
  <div id="footer"><a href="http://www.ee.pw.edu.pl">Powrót do strony głównej</a><p><a href="syntax/p1_3.html">Kod źrółowy </a></p></div>
</body>
</html>
