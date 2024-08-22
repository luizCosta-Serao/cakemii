export default function alterarQuantidade() {
  const btnAddQuantidade = document.querySelector('.add-quantidade');
  const btnRemoveQuantidade = document.querySelector('.remove-quantidade');
  const quantidade = document.querySelector('.quantidade p');

  btnAddQuantidade.addEventListener('click', function() {
    quantidade.innerText = Number(quantidade.innerText) + 1
  })

  btnRemoveQuantidade.addEventListener('click', function() {
    if (quantidade.innerText > 0) {
      quantidade.innerText = Number(quantidade.innerText) - 1
    }
  })
}