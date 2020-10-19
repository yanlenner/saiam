function Busca() {
  var a = $('.cedula');
  '' != a.val() && $.ajax({
    data: {
      ci: a.val()
    },
    url: '../recursos/php/consultar_responsable.php',
    type: 'POST',
    success: function (a) {
      'false' == a ? $('#persona').modal('show')  : (inicia(a), $('.cuadrito').each(function () {
        $(this).removeClass('escondido')
      }), $('.field').each(function () {
        $(this).removeClass('escondido')
      }), $('.fields').each(function () {
        $(this).removeClass('escondido')
      }), $('.e1').addClass('completed'), $('.e2').addClass('active'))
    }
  })
}
function inicia(a) {
  $.ajax({
    data: {
      persona: a
    },
    url: '../recursos/php/consultar_edad.php',
    type: 'POST',
    success: function (a) {
      $('input[name=edad]').val(a)
    }
  }),
  $.ajax({
    data: {
      persona: a
    },
    url: '../recursos/php/consultar_genero.php',
    type: 'POST',
    success: function (a) {
      $('input[name=genero]').val(a)
    }
  }),
  $.ajax({
    data: {
      persona: a
    },
    url: '../recursos/php/consultar_pais.php',
    type: 'POST',
    success: function (a) {
      $('input[name=pais]').val(a)
    }
  }),
  $.ajax({
    data: {
      persona: a
    },
    url: '../recursos/php/consultar_pnombre.php',
    type: 'POST',
    success: function (a) {
      $('input[name=pnombre]').val(a)
    }
  }),
  $.ajax({
    data: {
      persona: a
    },
    url: '../recursos/php/consultar_papellido.php',
    type: 'POST',
    success: function (a) {
      $('input[name=papellido]').val(a)
    }
  }),
  $.ajax({
    data: {
      persona: a
    },
    url: '../recursos/php/consultar_snombre.php',
    type: 'POST',
    success: function (a) {
      $('input[name=snombre]').val(a)
    }
  }),
  $.ajax({
    data: {
      persona: a
    },
    url: '../recursos/php/consultar_sapellido.php',
    type: 'POST',
    success: function (a) {
      $('input[name=sapellido]').val(a)
    }
  }),
  $.ajax({
    data: {
      persona: a
    },
    url: '../recursos/php/consultar_impedimento.php',
    type: 'POST',
    success: function (a) {
      'false' == a ? ($('#impedimento').prop('checked', 0), $('#si').addClass('blanco'), $('#no').removeClass('blanco'))  : ($('#impedimento').prop('checked', 1), $('#no').addClass('blanco'), $('#si').removeClass('blanco'))
    }
  }),
  $.ajax({
    data: {
      persona: a
    },
    url: '../recursos/php/consultar_estado.php',
    type: 'POST',
    success: function (a) {
      $('input[name=estado]').val(a)
    }
  }),
  $.ajax({
    data: {
      persona: a
    },
    url: '../recursos/php/consultar_municipio.php',
    type: 'POST',
    success: function (a) {
      $('input[name=municipio]').val(a)
    }
  }),
  $.ajax({
    data: {
      persona: a
    },
    url: '../recursos/php/consultar_parroquia.php',
    type: 'POST',
    success: function (a) {
      $('input[name=parroquia]').val(a)
    }
  }),
  $.ajax({
    data: {
      persona: a
    },
    url: '../recursos/php/consultar_consejo.php',
    type: 'POST',
    success: function (a) {
      $('input[name=consejo]').val(a)
    }
  }),
  $.ajax({
    data: {
      persona: a
    },
    url: '../recursos/php/consultar_ciudad.php',
    type: 'POST',
    success: function (a) {
      $('input[name=ciudad]').val(a)
    }
  }),
  $.ajax({
    data: {
      persona: a
    },
    url: '../recursos/php/consultar_ubicacion.php',
    type: 'POST',
    success: function (a) {
      $('input[name=ubicacion]').val(a)
    }
  }),
  $.ajax({
    data: {
      persona: a
    },
    url: '../recursos/php/consultar_calle.php',
    type: 'POST',
    success: function (a) {
      $('input[name=calle]').val(a)
    }
  }),
  $.ajax({
    data: {
      persona: a
    },
    url: '../recursos/php/consultar_estructura.php',
    type: 'POST',
    success: function (a) {
      $('input[name=estructura]').val(a)
    }
  }),
  $.ajax({
    data: {
      persona: a
    },
    url: '../recursos/php/consultar_correo.php',
    type: 'POST',
    success: function (a) {
      $('input[name=correo]').val(a)
    }
  }),
  $.ajax({
    data: {
      persona: a
    },
    url: '../recursos/php/consultar_celular.php',
    type: 'POST',
    success: function (a) {
      $('input[name=celular]').val(a)
    }
  }),
  $.ajax({
    data: {
      persona: a
    },
    url: '../recursos/php/consultar_telefono.php',
    type: 'POST',
    success: function (a) {
      $('input[name=telefono]').val(a)
    }
  }),
  $.ajax({
    data: {
      persona: a
    },
    url: '../recursos/php/consultar_superior.php',
    type: 'POST',
    success: function (a) {
      $('input[name=superior]').val(a)
    }
  }),
  $.ajax({
    data: {
      persona: a
    },
    url: '../recursos/php/consultar_trabaja.php',
    type: 'POST',
    success: function (a) {
      $('input[name=trabaja]').val(a)
    }
  }),
  $.ajax({
    data: {
      persona: a
    },
    url: '../recursos/php/consultar_permisos.php',
    type: 'POST',
    success: function (a) {
      a = a.split(' '),
      $(':checkbox').val(a) && $(this).prop('checked', 1)
    }
  }),
  $('input[name=pais]').attr('readonly', ''),
  $('.cedula').attr('readonly', ''),
  $('#validar_bo').addClass('escondido'),
  $('.e2').addClass('completed'),
  $('.e2').removeClass('active')
}
function revisar() {
  $('#formulario').submit()
}
function scheck() {
  var a = $('.primary');
  $(':checkbox').on('click', function () {
    return !!a.hasClass('actualiza')
  })
}
$('.recycle').on('click', function () {
  $('form').form('clear'),
  $('.e1').removeClass('completed'),
  $('.e2').removeClass('active'),
  $('.cuadrito').each(function () {
    $(this).addClass('escondido')
  }),
  $('.field').each(function () {
    $(this).addClass('escondido')
  }),
  $('.fields').each(function () {
    $(this).addClass('escondido')
  }),
  $('.cedula').removeClass('escondido'),
  $('.d1').removeClass('escondido'),
  $('.dcedu').removeClass('escondido'),
  $('input[name=pais]').removeAttr('readonly'),
  $('.cedula').removeAttr('readonly'),
  $('#validar_bo').removeClass('escondido'),
  $('.e2').removeClass('completed'),
  $('.primary').html('Modificar permisos'),
  $('.primary').removeAttr('data-tooltip'),
  $('.primary').removeClass('actualiza'),
  $('.primary').attr('data-tooltip', 'Modifica los permisos del encargado.')
}),
$('.primary').on('click', function () {
  $(this).hasClass('actualiza') && revisar(),
  $(this).html('Actualizar permisos'),
  $(this).removeAttr('data-tooltip'),
  $(this).addClass('actualiza'),
  $(this).attr('data-tooltip', 'Actualiza los permisos del responsable.'),
  scheck()
}),
$(document).ready(function () {
  scheck()
}),
$('#impedimento').on('click', function () {
  return !1
});