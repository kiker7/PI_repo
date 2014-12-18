<?php
session_start();
if(!isset($_SESSION['zalogowany'])){
  $_SESSION['komunikat'] = "Nie jestes zalogowany!";
  include('form.php');
  exit();
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd">
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="Content-Language" content="pl">
    <meta http-equiv="Reply-to" content="rutynar@ee.pw.edu.pl">
    <meta name="Description" content="Formularz">
    <meta name="Keywords" content="formularz , form, cv">
    <meta name="Author" content="Rafał Rutyna">
    <link rel="stylesheet" type="text/css" href="../proj2/style/style.css">
    <script type="text/javascript" src="../proj2/skrypt/script_form.js"></script>
    <title>Formularz</title>
    <script type="text/javascript" src="../proj2/skrypt/CalendarPopup.js"></script>
    <script type="text/javascript">
      var cal1 = new CalendarPopup("kalendarz");
        cal1.showNavigationDropdowns();
        cal1.setCssPrefix("KAL");
    </script>
  </head>
  <body>
    Jestes zalogowany jako: <?php echo $_SESSION['zalogowany'] ?>
  <button><a href = "logout.php">Wylogowanie</a></button>
  <button><a href = "http://www.ee.pw.edu.pl/">Strona startowa</a></button>
    <div class="formularz">
        <h7>
		<?php
          session_start();
          echo "Imię: <b>" . $_SESSION['imie']."</b>";
          echo "<br />";
          echo "Nazwisko: <b>" . $_SESSION['nazwisko']."</b>";
          echo "<br />";
          echo "Data urodzenia: <b>" . $_SESSION['dataud']."</b>";
          echo "<br />";
          echo "PESEL: <b>" . $_SESSION['pesel']."</b>";
          echo "<br />";
          echo "Wiek: <b>" . $_SESSION['wiek']."</b>";
          echo "<br />";
          echo "Płeć: <b>" . $_SESSION['plec']."</b>";
          echo "<br />";
          echo "Kierunek: <b>" . $_SESSION['kierunek']."</b>";
          echo "<br />";
        ?>
      </h7>
	  <button><a href = "main.php">Powrót</a> </button>
    </div>
      <div class="valid">
        <table>
            <tr>
                <td class= "link">
                    <a href ="http://viewsource.in/http://volt.iem.pw.edu.pl/~rutynar/proj2/style/style.css">Kod źródłowy CSS</a>
                </td>
                <td class = "link">
                    <a href ="syntax/p1_2.html">Kod źródłowy </a>
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
    </div>
  </body>
