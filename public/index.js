if (void 0 === localStorage.saiam_local) var objeto = {
  aceptoCookies: 'no'
};
 else objeto = JSON.parse(localStorage.saiam_local);
function rayita() {
  768 > $(window).width() ? ($('#rayitaparada').removeClass('ui vertical divider'), $('#rayitaparada').attr('hidden', 'true'), $('#rayitacostada').html(''), $('#rayitacostada').removeAttr('hidden'), $('#mensajes').removeClass('cincuenta'), $('#rayitacostada').html('O'), $('#rayitacostada').addClass('ui horizontal divider'))  : ($('#rayitacostada').removeClass('ui horizontal divider'), $('#rayitacostada').attr('hidden', 'true'), $('#rayitaparada').html(''), $('#mensajes').addClass('cincuenta'), $('#rayitaparada').removeAttr('hidden'), $('#rayitaparada').html('O'), $('#rayitaparada').addClass('ui vertical divider'))
}
function Colab() {
  $('.ui.longer.modal.m1').modal('setting', 'transition', 'fade').modal({
    blurring: true
  }).modal('show')
}
function Conta() {
  $('.ui.longer.modal.m2').modal('setting', 'transition', 'fade').modal({
    blurring: true
  }).modal('show')
}
function Termi() {
  $('.ui.longer.modal.m3').modal('setting', 'transition', 'fade').modal({
    blurring: true
  }).modal('show')
}
function compruebaAceptaCookies() {
  'si' != JSON.parse(localStorage.saiam_local).aceptoCookies && ($('.ui.longer.modal.m3').modal('setting', 'transition', 'fade').modal('show'), $('#terminos').scroll(function () {
    2345 < $(this).scrollTop() ? ($('#bac').fadeIn(567), $('#bac').removeClass('escondido'))  : ($('#bac').fadeOut(567), $('#bac').addClass('escondido'))
  }))
}
function aceptarCookies() {
  var a = JSON.parse(localStorage.saiam_local);
  a.aceptoCookies = 'si',
  localStorage.saiam_local = JSON.stringify(a),
  $('.ui.longer.modal.m3').modal('setting', 'transition', 'fade').modal('close')
}
localStorage.setItem('saiam_local', JSON.stringify(objeto)),
document.oncontextmenu = function () {
  return !1
},
$(document).ready(function () {
  rayita(),
  compruebaAceptaCookies(),
  setTimeout(function () {
    $('#preloader').remove()
  }, 1234),
  $(window).resize(function () {
    rayita()
  })
});
/*
var input = document.getElementById('password');
input.addEventListener('keyup', function (a) {
  a.getModifierState('CapsLock') ? $('#mayus').removeClass('escondido')  : $('#mayus').addClass('escondido')
});
*/