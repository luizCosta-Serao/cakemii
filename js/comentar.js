export default function comentar() {
  $('input[name="comentar"]').click(function(e) {
    e.preventDefault()
    let comentario = $('#comentario').val();
    let id = window.location.search.split('=')[1]
    
    $.ajax({
      url: 'http://localhost/cakemii/ajax/comentar.php',
      method: 'post',
      data: {
        'comentario': comentario,
        'id': id
      },
      dataType: 'html'
    }).done(function(data) {
      $('.comentarios form').append(data)
    })
  })
}