function Disponible(a) {
  $('.usuario').addClass('loading'),
  '' != a ? $.ajax({
    data: {
      usr: a
    },
    url: '../recursos/php/buscar_usuario.php',
    type: 'POST',
    beforeSend: function () {
      $('.usuario').prop('disabled', !0)
    },
    success: function (a) {
      $('.usuario').prop('disabled', !1),
      'true' === a ? ($('.user.icon').removeClass('green'), $('.user.icon').addClass('red'), $('#error1').removeClass('hidden'), $('.usuario').removeClass('loading'), $('.submit').addClass('desactivado'), $('.desactivado').removeClass('submit'))  : ($('.user.icon').removeClass('red'), $('.user.icon').addClass('green'), $('#error1').addClass('hidden'), $('.usuario').removeClass('loading'), $('.desactivado').addClass('submit'), $('.submit').removeClass('desactivado'))
    }
  })  : ($('.user.icon').removeClass('green'), $('.user.icon').removeClass('red'), $('.usuario').removeClass('loading'), $('#error1').addClass('hidden'))
}
$(document).ready(function () {
  $('.ui.form').form({
    on: 'blur',
    fields: {
      password: {
        identifier: 'contraseña',
        rules: [
          {
            type: 'empty',
            prompt: 'Si deseas realizar alguna modificación es obligatorio que introduzcas tu contraseña actual'
          },
          {
            type: 'regExp[/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%*-_=+])([A-Za-z0-9!@#$%*-_=+]){8,}$/]',
            prompt: 'Tu contraseña debe tener entre ocho y treintaidós caracteres, al menos un dígito, al menos una minúscula, al menos una mayúscula y al menos un caracter especial'
          }
        ]
      }
    },
    inline: !0,
    duration: 789
  }),
  $('.submit').addClass('desactivado'),
  $('.desactivado').removeClass('submit'),
  $(document).keydown(function (a) {
    if (a.ctrlKey && 13 == a.keyCode) return !1
  });
  var a = $('#pregunta_1');
  $.ajax({
    url: '../recursos/php/buscar_preguntas.php',
    type: 'POST',
    dataType: 'json',
    success: function (e) {
      a.find('.pregunta_3').remove(),
      $(e).each(function (e, s) {
        a.find('.menu').append('<div class="item pregunta_3" data-value="' + s[0] + '">' + s[1] + '</div>')
      })
    }
  }),
  $('.ui.dropdown').dropdown(),
  $('.recycle').on('click', function () {
    location.reload()
  })
}),
$('.s1').on('click', function () {
  $.ajax({
    data: {
      passwd: $('.contraseña').val()
    },
    url: '../recursos/php/validar_contraseña.php',
    type: 'POST',
    success: function (a) {
      'true' == a ? ($('.d1').addClass('escondido'), $('.s1').addClass('escondido'), $('.d2').removeClass('escondido'), $('.primary').removeClass('escondido'), $('.e1').addClass('completed'), $('.e2').addClass('active'), $('.ui.form').form('add rule', 'ncontraseña', {
        optional: !0,
        rules: [
          {
            type: 'regExp[/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%*-_=+])([A-Za-z0-9!@#$%*-_=+]){8,}$/]',
            prompt: 'Tu nueva contraseña debe tener entre ocho y treintaidós caracteres, al menos un dígito, al menos una minúscula, al menos una mayúscula y al menos un caracter especial'
          }
        ]
      }), $.ajax({
        url: '../recursos/php/buscar_pregunta.php',
        type: 'POST',
        success: function (a) {
          $('.item.pregunta_3').each(function () {
            $(this).attr('data-value') == a && ($(this).addClass('active'), $(this).addClass('selected'), $(this).click(), $('input[name=pseguridad]').change(function () {
              $('.ui.form').form('add rule', 'rseguridad', {
                rules: [
                  {
                    type: 'empty',
                    prompt: 'Debes escribir la respuesta a tu nueva pregunta de seguridad'
                  }
                ]
              }),
              $('input[name=rseguridad]').focus(),
              $('input[name=rseguridad]').blur()
            }))
          })
        }
      }))  : '' != $('.contraseña').val() ? $('#error').modal('show')  : $('.contraseña').val('')
    }
  })
}),
$('.primary').on('click', function () {
  var a = 0;
  $('.d2i').each(function () {
    '' != $(this).val() && (a += 1),
    $('.user.icon').hasClass('red') && --a
  }),
  $('.ui.form').form('is valid') && 0 < a ? ($('.desactivado').addClass('submit'), $('.submit').removeClass('desactivado'))  : ($('.submit').addClass('desactivado'), $('.desactivado').removeClass('submit'))
});