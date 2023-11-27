const modal = document.querySelector('.modal-container')
const tbody = document.querySelector('tbody')
const sNome = document.querySelector('#m-nome')
const sIdade = document.querySelector('#m-idade')
const sPeso = document.querySelector('#m-peso')
const sFicha = document.querySelector('#m-ficha')
const btnSalvar = document.querySelector('#btnSalvar')

function openModal(edit = false, index = 0) {
  modal.classList.add('active')

  modal.onclick = e => {
    if (e.target.className.indexOf('modal-container') !== -1) {
      modal.classList.remove('active')
    }
  }
}

function confirmarExclusao(id, nome) {
  if (window.confirm("Deseja realmente excluir o registro: \n" + id + " - " + nome)) {
    window.location = "excluirUsuario.php?idUsuario=" + id;
  }
}