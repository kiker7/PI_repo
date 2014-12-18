var wyslij = function(){
  var i = document.formul1.imie.value;
  var n = document.formul1.nazwisko.value;
  var p = document.formul1.pesel.value;
  var z = document.getElementById("zgoda").checked;
  var k = vkierunek();
  if(i ==="" || n ==="" || p ==="" || z === false || k === false){
      confirm("Nalezy wypełnic wszystkie pola oznaczone gwiazdką");
      return false;
  }

};

var upImie = function(){
  var x = document.getElementById("fimie");
  x.value = x.value.charAt(0).toUpperCase() + x.value.substring(1).toLowerCase();
  return true;
};

var upNazw = function(){
  var x = document.getElementById("fnazw");
  x.value = x.value.charAt(0).toUpperCase() + x.value.substring(1).toLowerCase();
  return true;
};

function blockNumbers(e){
  var key;
  var keychar;
  var reg;
  if(window.event) {
    key = e.keyCode;
  }else if(e.which) {
    key = e.which;
  }else {
    return true;
  }
  keychar = String.fromCharCode(key);
  reg = /\d/;
  return !reg.test(keychar);
}

function blockLetters(e){
  var key;
  var keychar;
  var reg;
  if(window.event) {
    key = e.keyCode;
  }else if(e.which) {
    key = e.which;
  }else {
    return true;
  }
  keychar = String.fromCharCode(key);
  reg = /[a-z,A-Z]/;
  return !reg.test(keychar);
}

var licznik = function(){
  var com = document.getElementById("commsize");
  com.value = document.getElementById("comment").value.length;
};

var fpesell = function(){
  var x = document.formul1.pesel.value;
  if(x.length != 11){
    confirm("Pesel powinien miec 11 cyfr a nie " + x.length +"!");
  }
  var d = document.formul1.dataud.value;
  var data = d.split("-");
  document.formul1.wiek.value = 2014 - parseInt(data[2]);
  var koncrok = data[2][2] + data[2][3];
  var dzien = x.charAt(4) + x.charAt(5);
  var miesiac = x.charAt(2) + x.charAt(3);
  var rok = x.charAt(0) + x.charAt(1);
  if(dzien != data[0] || miesiac != data[1] || rok != krok){
    confirm("Pesel niezgodny z datą urodzenia");
  }

};

var vkierunek = function(){
  var k = document.getElementsByName("kierunek");
  for(var i = 0; i < 3; i++){
    if(k[i].checked === true){
      return true;
    }
  }
  return false;
};
