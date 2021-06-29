
var nomeinvio = "";
var emailinvio = "";
var messaggioinvio = "";
var privacyinvio = "";


function checkinvio() {

 if (nomeinvio == "ok"  && emailinvio == "ok" && messaggioinvio == "ok" && privacyinvio == "ok") {

  document.getElementById('send').disabled = false;
  document.getElementById('send').className = "tastoinviosi";

 } else {

  document.getElementById('send').disabled = true;
  document.getElementById('send').className = "btn_form";
 }
}//. funzione controllo per abilitare tasto invio

//funzione nome
function checknome() {

 var nome = document.getElementById("nome").value;

 var caratteriammessi = /^([a-zA-Z\xE0\xE8\xE9\xF9\xF2\xEC\x27]\s?)+$/;

 if (caratteriammessi.test(nome) == false || (nome == "") || (nome == "undefined")) {

  document.getElementById("errornome").style.display = "block";
  document.getElementById("nome").style.borderBottom = "1px solid red";

  nomeinvio = "notok";
  checkinvio();

 }//.if nome

 else {

  document.getElementById("errornome").style.display = "none";
  document.getElementById("nome").style.borderBottom = "2px solid #115117";

  nomeinvio = "ok";
  checkinvio();
 }//.else
}//.checknome

//funzione email
function checkmail() {
 var email = document.getElementById("email").value;

 var email_valid = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;

 if (!email_valid.test(email) || (email == "") || (email == "undefined")) {

  document.getElementById("errormail").style.display = "block";
  document.getElementById("email").style.borderBottom = "1px solid red";

 
  emailinvio = "notok";
  checkinvio();
 } else {

  document.getElementById("errormail").style.display = "none";
  document.getElementById("email").style.borderBottom = "2px solid #115117";
  emailinvio = "ok";
  checkinvio();

 }//.else
}//.checkmail

//funzione messaggio
function checkmessaggio() {

 var messaggio = document.getElementById("messaggio").value;

 var caratteriammessi = /^[a-zA-Z0-9?$@#()'èòàìùçé!,+\-=_:.&€£*%\s]+$/;

 if (caratteriammessi.test(messaggio) == false || (messaggio == "") || (messaggio == "undefined")) {
  document.getElementById("errormessaggio").style.display = "block";
  document.getElementById("messaggio").style.borderColor = "red";

  messaggioinvio = "notok";
  checkinvio();

 }//.if messaggio

 else {

  document.getElementById("errormessaggio").style.display = "none";
  document.getElementById("messaggio").style.borderColor = "#115117";

  messaggioinvio = "ok";
  checkinvio();
 }//.else
}//.checkmessaggio

//funzione privacy
function checkprivacy() {

 var privacy = document.getElementById("box-1").value;

 var checkbox = document.getElementById("box-1").checked;
 if (checkbox == true) {

  document.getElementById("errorprivacy").style.display = "none";
  document.getElementById("box-1").style.borderColor = "#115117";

  privacyinvio = "ok";
  checkinvio();

 }//.if privacy

 else {

  document.getElementById("errorprivacy").style.display = "block";
  document.getElementById("box-1").style.borderColor = "red";

  privacyinvio = "notok";
  checkinvio();

 }//.else
}//.checkprivacy
