var dodaj = "<input type = 'button' value = 'Dodaj' name = 'dodaj' onclick ='dodajKolumne()'>";
var poleTxt = "<input type='text' name='poletxt' id = 'poletxt'>";
Imiona = new Array("Rafał","Marek","Magdalena","Piotr","Tomasz","Mateusz","Konrad","Klaudia","Aleksandra","Barbara","Kuba");
Nazwiska = new Array("Nowak","Rutyna","Kowal","Czech","Kowalczyk","Mazur","Dudek","Grabek","Pawlak","Kubiak","Kurek");

var generuj = function(){
  document.getElementById("gen_tab").innerHTML = '<table id = "tabela"></table> <br>';
  var lstud = document.forml.liczba_stud.value;
  var tab = document.getElementById("tabela");
  naglowek(tab);
  for(var i = 0; i < lstud; i++){
    dodajWiersz(tab);
  }
};

var naglowek = function(tab){
  var wiersz = tab.insertRow(0);
  wiersz.insertCell(0).innerHTML = "Lp:";
  wiersz.insertCell(1).innerHTML = "Imię:";
  wiersz.insertCell(2).innerHTML = "Nazwisko:";
  wiersz.insertCell(3).innerHTML = dodaj;
};

var dodajWiersz = function(tab){
  var row = tab.insertRow(tab.rows.length);
  row.insertCell(0).innerHTML = tab.rows.length -1;
  row.insertCell(1).innerHTML = Imiona[Math.floor((Math.random() * 10) +1) -1];
  row.insertCell(2).innerHTML = Nazwiska[Math.floor((Math.random() * 10) +1) -1];
  row.insertCell(3).innerHTML = poleTxt;
};

var dodajKolumne = function(){
  var tab = document.getElementById("tabela");
  if(tab.offsetWidth + tab.rows[0].cells[3].offsetWidth < document.getElementById("top").offsetWidth - 5){
    var row = tab.rows[0];
    var numerKolumny = row.cells.length;
    row.cells[numerKolumny -1].innerHTML = "";
    row.insertCell(numerKolumny).innerHTML = dodaj;
    for(var i = 1; i < tab.rows.length; i++){
      tab.rows[i].insertCell(numerKolumny).innerHTML = poleTxt;
      tab.rows[i].cells[numerKolumny - 1].getElementsByTagName("INPUT")[0].setAttribute("disabled","disabled");
      }
  }else{
    confirm("Za mało miejsca aby dodac następną kolumne!");
  }
};
