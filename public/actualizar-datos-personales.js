function buscar() {
  $.ajax({
    type: 'POST',
    url: '../recursos/php/buscar_estado.php'
  }).done(function (e) {
    $('.item.estado_3').each(function () {
      $(this).attr('data-value') == e && ($(this).addClass('active'), $(this).addClass('selected'), $(this).click())
    }),
    setTimeout(function () {
      $.ajax({
        type: 'POST',
        url: '../recursos/php/buscar_municipio.php'
      }).done(function (e) {
        $('.item.municipio_3').each(function () {
          $(this).attr('data-value') == e && ($(this).addClass('active'), $(this).addClass('selected'), $(this).click())
        }),
        setTimeout(function () {
          $.ajax({
            type: 'POST',
            url: '../recursos/php/buscar_parroquia.php'
          }).done(function (e) {
            $('.item.parroquia_3').each(function () {
              $(this).attr('data-value') == e && ($(this).addClass('active'), $(this).addClass('selected'), $(this).click())
            }),
            setTimeout(function () {
              $.ajax({
                type: 'POST',
                url: '../recursos/php/buscar_consejo.php'
              }).done(function (e) {
                $('.item.consejo_3').each(function () {
                  $(this).attr('data-value') == e && ($(this).addClass('active'), $(this).addClass('selected'), $(this).click())
                })
              })
            }, 888)
          })
        }, 777)
      })
    }, 666)
  }),
  $.ajax({
    type: 'POST',
    url: '../recursos/php/buscar_ciudad.php'
  }).done(function (e) {
    $('input[name=ciudad]').val(e)
  }),
  $.ajax({
    type: 'POST',
    url: '../recursos/php/buscar_ubicacion.php'
  }).done(function (e) {
    $('input[name=ubicacion]').val(e)
  }),
  $.ajax({
    type: 'POST',
    url: '../recursos/php/buscar_calle.php'
  }).done(function (e) {
    $('input[name=calle]').val(e)
  }),
  $.ajax({
    type: 'POST',
    url: '../recursos/php/buscar_estructura.php'
  }).done(function (e) {
    $('input[name=estructura]').val(e)
  }),
  $.ajax({
    type: 'POST',
    url: '../recursos/php/buscar_correo.php'
  }).done(function (e) {
    $('input[name=correo]').val(e)
  }),
  $.ajax({
    type: 'POST',
    url: '../recursos/php/buscar_celular.php'
  }).done(function (e) {
    $('input[name=celular]').val(e)
  }),
  $.ajax({
    type: 'POST',
    url: '../recursos/php/buscar_telefono.php'
  }).done(function (e) {
    $('input[name=telefono]').val(e)
  }),
  $.ajax({
    type: 'POST',
    url: '../recursos/php/buscar_impedimento.php'
  }).done(function (e) {
    'false' == e ? ($(':checkbox').prop('checked', 0), $('#si').addClass('blanco'), $('#no').removeClass('blanco'))  : ($(':checkbox').prop('checked', 1), $('#no').addClass('blanco'), $('#si').removeClass('blanco'))
  })
}
$(document).ready(function () {
  $('.ui.dropdown').dropdown(),
  $('.ui.form').form({
    on: 'blur',
    fields: {
      email: {
        identifier: 'correo',
        rules: [
          {
            type: 'regExp[/^([a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5})+$/]',
            prompt: 'Debes escribir un correo electrónico válido'
          }
        ]
      },
      cellphone: {
        identifier: 'celular',
        rules: [
          {
            type: 'empty',
            prompt: 'Debes escribir un número de celular'
          }
        ]
      },
      city: {
        identifier: 'ciudad',
        rules: [
          {
            type: 'empty',
            prompt: 'Debes escribir el nombre de la Ciudad / Pueblo donde resides'
          }
        ]
      },
      locate: {
        identifier: 'ubicacion',
        rules: [
          {
            type: 'empty',
            prompt: 'Debes escribir el nombre del Barrio / Sector / Urbanización / Zona donde resides'
          }
        ]
      },
      roadway: {
        identifier: 'calle',
        rules: [
          {
            type: 'empty',
            prompt: 'Debes escribir el nombre de la Avenida / Calle donde resides'
          }
        ]
      },
      struct: {
        identifier: 'estructura',
        rules: [
          {
            type: 'empty',
            prompt: 'Debes escribir el nombre de la Casa / Edificio / Quinta donde resides'
          }
        ]
      }
    },
    inline: !0,
    duration: 789
  }).form('add rule', 'estado', {
    rules: [
      {
        type: 'empty',
        prompt: 'Debes seleccionar el estado donde resides'
      }
    ]
  }).form('add rule', 'municipio', {
    rules: [
      {
        type: 'empty',
        prompt: 'Debes seleccionar el municipio donde resides'
      }
    ]
  }).form('add rule', 'parroquia', {
    rules: [
      {
        type: 'empty',
        prompt: 'Debes seleccionar la parroquia donde resides'
      }
    ]
  })
}),
$('.eyedata').on('click', function () {
  buscar(),
  $('.primary').removeClass('escondido')
}),
$(':checkbox').change(function () {
  $(this).is(':checked') ? ($('#no').addClass('blanco'), $('#si').removeClass('blanco'))  : ($('#si').addClass('blanco'), $('#no').removeClass('blanco'))
}),
$('.recycle').on('click', function () {
  $('form').form('clear'),
  $('.primary').addClass('escondido'),
  $('.ui.dropdown').dropdown()
}),
$('#estado').change(function () {
  var e = $('#municipio_1'),
  a = $(this);
  '' != $(this).val() ? $.ajax({
    data: {
      id: a.val()
    },
    url: '../recursos/php/buscar_municipios.php',
    type: 'POST',
    dataType: 'json',
    success: function (i) {
      a.prop('disabled', !1),
      e.find('.municipio_3').remove(),
      $(i).each(function (a, i) {
        e.find('.menu').append('<div class="item municipio_3" data-value="' + i[0] + '">' + i[1] + '</div>')
      }),
      e.find('#municipio_2').prop('disabled', !1)
    }
  })  : (e.find('.menu').remove(), e.find('#municipio_2').prop('disabled', !0))
}),
$('#municipio_2').change(function () {
  var e = $('#parroquia_1'),
  a = $(this);
  '' != $(this).val() ? $.ajax({
    data: {
      id: a.val()
    },
    url: '../recursos/php/buscar_parroquias.php',
    type: 'POST',
    dataType: 'json',
    success: function (i) {
      a.prop('disabled', !1),
      e.find('.parroquia_3').remove(),
      $(i).each(function (a, i) {
        e.find('.menu').append('<div class="item parroquia_3" data-value="' + i[0] + '">' + i[1] + '</div>')
      }),
      e.find('#parroquia_2').prop('disabled', !1)
    }
  })  : (e.find('.menu').remove(), e.find('#parroquia_2').prop('disabled', !0))
}),
$('#parroquia_2').change(function () {
  var e = $('#consejo_1'),
  a = $(this);
  '' != $(this).val() ? $.ajax({
    data: {
      id: a.val()
    },
    url: '../recursos/php/buscar_consejos.php',
    type: 'POST',
    dataType: 'json',
    success: function (i) {
      a.prop('disabled', !1),
      e.find('.consejo_3').remove(),
      $(i).each(function (a, i) {
        e.find('.menu').append('<div class="item consejo_3" data-value="' + i[0] + '">' + i[1] + '</div>')
      }),
      e.find('#consejo_2').prop('disabled', !1)
    }
  })  : (e.find('.menu').remove(), e.find('#consejo_2').prop('disabled', !0))
});