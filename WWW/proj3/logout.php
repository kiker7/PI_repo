<?php
// Inicjalizuj sesję
// Jeśli używasz sesion_name("cośtam"), nie zapomnij o tym teraz!
session_start();
// Usuń wszystkie zmienne sesyjne
$_SESSION = array();

// Jeśli pożądane jest zabicie sesji, usuń także ciasteczko sesyjne.
// Uwaga: to usunie sesję, nie tylko dane sesji
if (isset($_COOKIE[session_name()])) { 
   setcookie(session_name(), '', time()-42000, '/'); 
}

// Na koniec zniszcz sesję
session_destroy();

?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content="pl">
    <meta http-equiv="Reply-to" content="rutynar@ee.pw.edu.pl">
    <meta name="Author" content="Rafał Rutyna">
    <link rel="stylesheet" type="text/css" href="../proj2/style/style.css">
    <title>Wylogowanie</title>
  </head>
  <body>
  <table><tr><td class = "link"><a href = "http://www.ee.pw.edu.pl/">Strona startowa</a></td></tr></table>
    <div class="formularz">
		<?php 
			echo "Zostałeś wylogowany !";
		?>
    </div>
      <div class="valid">
        <table>
            <tr>
                <td class= "link">
                    <a href ="http://viewsource.in/http://volt.iem.pw.edu.pl/~rutynar/proj2/style/style.css">Kod źródłowy CSS</a>
                </td>
                <td class = "link">
                    <a href ="syntax/p1_1.html">Kod źródłowy</a>
                </td>
                <td class = "link">
                    <a href ="http://viewsource.in/http://volt.iem.pw.edu.pl/~rutynar/proj2/skrypt/script_form.js">Kod źródłowy JS</a>
                </td>
                <td>
            <a href="http://jigsaw.w3.org/css-validator/check/referer">
            <img style="border:0;width:88px;height:31px"
            src="http://jigsaw.w3.org/css-validator/images/vcss"
            alt="Poprawny CSS!" >
            </a>
                </td>
            </tr>
            <tr>
                <td></td><td></td><td></td>
                <td>
        <a href="http://validator.w3.org/check?uri=referer"><img
        src="http://www.w3.org/Icons/valid-html401" alt="Valid HTML 4.01 Strict" height="31" width="88"></a>
                </td>
            </tr>
        </table>
      </div>
  </body>
