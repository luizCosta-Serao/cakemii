export default function adicionarAoCarrinho() {
  $('#add-carrinho').click(function(e) {
    e.preventDefault()
    let idProduto = window.location.search.split('=')[1];
    let quantidade = $('.quantidade p').text();

    $.ajax({
      url: 'http://localhost/cakemii/ajax/carrinho.php',
      method: 'post',
      data: {
        'id_produto': idProduto,
        'quantidade': quantidade
      },
      dataType: 'html'
    }).done(function(data) {
      $('.single-produto-content').append(data)
    })
  })
}