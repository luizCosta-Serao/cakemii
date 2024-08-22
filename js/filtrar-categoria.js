export default function filtrarCategoria() {
  $('.categorias-cardapio span').click(function() {
    let nome_categoria = this.innerText

    $.ajax({
      url: 'http://localhost/cakemii/ajax/filtrar-categoria.php',
      method: 'get',
      data: {
        'categoria': nome_categoria
      },
      dataType: 'html'
    }).done(function(data) {
      let json = JSON.parse(data)
      $('.itens-cardapio').empty()
      json.forEach((item) => {
        $('.itens-cardapio').append(`
          <li>
            <a href="http://localhost/cakemii/">
              <img src="http://localhost/cakemii/uploads/${item.imagem}" alt="<?php echo $value['nome'] ?>">
              <h2>${item.nome}</h2>
              <p>R$ ${item.preco}</p>
            </a>
          </li>
        `)
      })
    })
  })
}