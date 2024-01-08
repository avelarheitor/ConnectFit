const modal = document.querySelector('.modal-container')
const tbody = document.querySelector('tbody')
const sDia = document.querySelector('#dia')
const sGrupo = document.querySelector('#grupo')
const sEx1 = document.querySelector('#ex1')
const sEx2 = document.querySelector('#ex2')
const sEx3 = document.querySelector('#ex3')
const sEx4 = document.querySelector('#ex4')
const sEx5 = document.querySelector('#ex5')
const sEx6 = document.querySelector('#ex6')
const sEx7 = document.querySelector('#ex7')
const btnSalvar = document.querySelector('#btnSalvar')

function openModal1(dia, grupo, ex1, ex2, ex3, ex4, ex5, ex6, ex7) {//openModal1(edit = false, index = 0) {
  var element = document.getElementById("_dia");
  element.value = dia;
  var element1 = document.getElementById("grupoAnt");
  element1.value = grupo;

  var egrupo = document.getElementById("grupo");
  egrupo.value = grupo;

  var eEx1 = document.getElementById("ex1");
  eEx1.value = ex1;
  var eEx2 = document.getElementById("ex2");
  eEx2.value = ex2;
  var eEx3 = document.getElementById("ex3");
  eEx3.value = ex3;
  var eEx4 = document.getElementById("ex4");
  eEx4.value = ex4;
  var eEx5 = document.getElementById("ex5");
  eEx5.value = ex5;
  var eEx6 = document.getElementById("ex6");
  eEx6.value = ex6;
  var eEx7 = document.getElementById("ex7");
  eEx7.value = ex7;

  const sDia = dia;
  modal.classList.add('active')

  modal.onclick = e => {
    if (e.target.className.indexOf('modal-container') !== -1) {
      modal.classList.remove('active')
    }
  }
}