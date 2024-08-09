export default function menuMobile() {
  const baseUrl = 'http://localhost/cakemii/'
  $('.header .btn-menu').click(function() {
    // Exibindo menu ao clicar no btn-menu
    $('.header nav').toggleClass('active');

    // Alterando img do btn-menu
    if($('.header nav').hasClass('active')) {
      $('.header .btn-menu img').attr('src', `${baseUrl}assets/close-menu.svg`)
      // Animando img do btn-menu
      this.animate({
        transform: 'rotate(180deg)'
      }, 400)
    } else {
      $('.header .btn-menu img').attr('src', `${baseUrl}assets/menu.svg`)
      // Animando img do btn-menu
      this.animate({
        transform: 'rotate(-180deg)'
      }, 400)
    }
  })
}