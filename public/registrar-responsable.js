function Busca() {
  var e = $('.cedula');
  '' != e.val() && $.ajax({
    data: {
      ci: e.val()
    },
    url: '../recursos/php/buscar_responsable.php',
    type: 'POST',
    beforeSend: function () {
      e.prop('disabled', !0)
    },
    success: function (s) {
      e.prop('disabled', !1),
      'true' === s ? ($('#persona').modal('show'), $('.s1').attr('escondido'))  : $('.s1').removeClass('escondido')
    },
    error: function () {
      alert('Ocurrio un error en el servidor ..'),
      e.prop('disabled', !1)
    }
  })
}
function Disponible(e) {
  $('.usuario').addClass('loading'),
  $('.submit').addClass('desactivado'),
  $('.desactivado').removeClass('submit'),
  '' != e ? $.ajax({
    data: {
      usr: e
    },
    url: '../recursos/php/buscar_usuario.php',
    type: 'POST',
    beforeSend: function () {
      $('.usuario').prop('disabled', !0)
    },
    success: function (e) {
      $('.usuario').prop('disabled', !1),
      'true' === e ? ($('.user.icon').removeClass('green'), $('.user.icon').addClass('red'), $('#error1').removeClass('hidden'), $('.usuario').removeClass('loading'))  : ($('.user.icon').removeClass('red'), $('.user.icon').addClass('green'), $('#error1').addClass('hidden'), $('.usuario').removeClass('loading'))
    },
    error: function () {
      alert('Ocurrio un error en el servidor ..'),
      $('.usuario').prop('disabled', !1)
    }
  })  : ($('.user.icon').removeClass('green'), $('.user.icon').removeClass('red'), $('.usuario').removeClass('loading'))
}
function Terms() {
  $('#terminos').modal('show')
}
$('.ui.form').form({
  on: 'blur',
  fields: {
    id: {
      identifier: 'cedula',
      rules: [
        {
          type: 'empty',
          prompt: 'Debes escribir el número de cédula del responsable'
        }
      ]
    },
    name: {
      identifier: 'primernombre',
      rules: [
        {
          type: 'empty',
          prompt: 'Debes escribir el primer nombre del responsable'
        }
      ]
    },
    fname: {
      identifier: 'primerapellido',
      rules: [
        {
          type: 'empty',
          prompt: 'Debes escribir el primer apellido del responsable'
        }
      ]
    },
    city: {
      identifier: 'ciudad',
      rules: [
        {
          type: 'empty',
          prompt: 'Debes escribir el nombre de la Ciudad / Pueblo donde reside el responsable'
        }
      ]
    },
    locate: {
      identifier: 'ubicacion',
      rules: [
        {
          type: 'empty',
          prompt: 'Debes escribir el nombre del Barrio / Sector / Urbanización / Zona donde reside el responsable'
        }
      ]
    },
    roadway: {
      identifier: 'calle',
      rules: [
        {
          type: 'empty',
          prompt: 'Debes escribir el nombre de la Avenida / Calle donde reside el responsable'
        }
      ]
    },
    struct: {
      identifier: 'estructura',
      rules: [
        {
          type: 'empty',
          prompt: 'Debes escribir el nombre de la Casa / Edificio / Quinta donde reside el responsable'
        }
      ]
    },
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
    username: {
      identifier: 'usuario',
      rules: [
        {
          type: 'empty',
          prompt: 'Debes escribir un nombre de usuario'
        }
      ]
    },
    password: {
      identifier: 'contraseña',
      rules: [
        {
          type: 'regExp[/^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%*-_=+])([A-Za-z0-9!@#$%*-_=+]){8,}$/]',
          prompt: 'La contraseña debe tener entre ocho y treintaidós caracteres, al menos un dígito, al menos una minúscula, al menos una mayúscula y al menos un caracter especial'
        }
      ]
    },
    response: {
      identifier: 'rseguridad',
      rules: [
        {
          type: 'empty',
          prompt: 'Debes escribir la respuesta a la pregunta de seguridad'
        }
      ]
    },
    terms: {
      identifier: 'terminos',
      rules: [
        {
          type: 'checked',
          prompt: 'Debes estar de acuerdo con los términos y condiciones'
        }
      ]
    }
  },
  inline: !0,
  duration: 789
}).form('add rule', 'fecha', {
  rules: [
    {
      type: 'empty',
      prompt: 'Debes escribir la fecha de nacimiento del responsable'
    }
  ]
}).form('add rule', 'genero', {
  rules: [
    {
      type: 'empty',
      prompt: 'Debes seleccionar el género del responsable'
    }
  ]
}).form('add rule', 'estado_civil', {
  rules: [
    {
      type: 'empty',
      prompt: 'Debes seleccionar el estado civil del responsable'
    }
  ]
}).form('add rule', 'pais', {
  rules: [
    {
      type: 'empty',
      prompt: 'Debes seleccionar el país de nacimiento del responsable'
    }
  ]
}).form('add rule', 'estado', {
  rules: [
    {
      type: 'empty',
      prompt: 'Debes seleccionar el estado donde reside el responsable'
    }
  ]
}).form('add rule', 'municipio', {
  rules: [
    {
      type: 'empty',
      prompt: 'Debes seleccionar el municipio donde reside el responsable'
    }
  ]
}).form('add rule', 'parroquia', {
  rules: [
    {
      type: 'empty',
      prompt: 'Debes seleccionar la parroquia donde reside el responsable'
    }
  ]
}).form('add rule', 'pseguridad', {
  rules: [
    {
      type: 'empty',
      prompt: 'Debes seleccionar la pregunta de seguridad'
    }
  ]
}).form('add rule', 'testado', {
  rules: [
    {
      type: 'empty',
      prompt: 'Debes seleccionar una opción'
    }
  ]
}).form('add rule', 'tmunicipio', {
  rules: [
    {
      type: 'empty',
      prompt: 'Debes seleccionar una opción'
    }
  ]
}).form('add rule', 'tparroquia', {
  rules: [
    {
      type: 'empty',
      prompt: 'Debes seleccionar una opción'
    }
  ]
}).form('add rule', 'tconsejo', {
  rules: [
    {
      type: 'empty',
      prompt: 'Debes seleccionar una opción'
    }
  ]
}),
$('.ui.radio.checkbox').checkbox(),
$('.s1').on('click', function () {
  var e = 0;
  $('.d1i').each(function () {
    '' != $(this).val() && (e += 1)
  }),
  5 < e && ($('.d1').addClass('escondido'), $('.e1').addClass('completed'), $('.e2').addClass('active'), $('.d2').removeClass('escondido'), $('.d3').removeClass('escondido'), $('.s1').addClass('escondido'), $('.a1').removeClass('escondido'), $('.s2').removeClass('escondido'))
}),
$('.a1').on('click', function () {
  $('.d1').removeClass('escondido'),
  $('.e1').removeClass('completed'),
  $('.e1').addClass('active'),
  $('.e2').removeClass('active'),
  $('.d2').addClass('escondido'),
  $('.d3').addClass('escondido'),
  $('.a1').addClass('escondido'),
  $('.s1').removeClass('escondido'),
  $('.s2').addClass('escondido')
}),
$('.s2').on('click', function () {
  'H' == $('#genero').val() ? $('#superuser').html('Este nuevo usuario podrá')  : $('#superuser').html('Esta nueva usuaria podrá');
  var e = 0;
  $('.d2i').each(function () {
    '' != $(this).val() && (e += 1)
  }),
  8 < e && ($('.d2').addClass('escondido'), $('.d3').addClass('escondido'), $('.e2').addClass('completed'), $('.e3').addClass('active'), $('.d4').removeClass('escondido'), $('.d5').removeClass('escondido'), $('.d6').removeClass('escondido'), $('.a1').addClass('escondido'), $('.s2').addClass('escondido'), $('.a2').removeClass('escondido'), $('.primary').removeClass('escondido'), $('.primary').removeClass('submit'))
}),
$('.a2').on('click', function () {
  $('.d2').removeClass('escondido'),
  $('.d3').removeClass('escondido'),
  $('.e2').removeClass('completed'),
  $('.e2').addClass('active'),
  $('.e3').removeClass('active'),
  $('.d4').addClass('escondido'),
  $('.d5').addClass('escondido'),
  $('.d6').addClass('escondido'),
  $('.a1').removeClass('escondido'),
  $('.a2').addClass('escondido'),
  $('.s2').removeClass('escondido'),
  $('.primary').addClass('escondido')
}),
$('.recycle').on('click', function () {
  location.reload()
}),
$('.primary').on('click', function () {
  var e = 0;
  $('.d3i').each(function () {
    '' != $(this).val() && (e += 1)
  }),
  $('.user.icon').hasClass('red') && (--e, $('.primary').removeClass('submit')),
  4 < e && $('#c_responsable').submit()
}),
$(document).keydown(function (e) {
  if (e.ctrlKey && 85 == e.keyCode || 13 == e.keyCode) return !1
}),
$('.ui.dropdown').dropdown(),
$(document).ready(function () {
  $(':input[name=asistente]').click(),
  $('#municipio_2').prop('disabled', !0),
  $('#estado').change(function () {
    var e = $('#municipio_1'),
    s = $(this);
    '' != $(this).val() ? $.ajax({
      data: {
        id: s.val()
      },
      url: '../recursos/php/buscar_municipios.php',
      type: 'POST',
      dataType: 'json',
      beforeSend: function () {
        s.prop('disabled', !0)
      },
      success: function (o) {
        s.prop('disabled', !1),
        e.find('.municipio_3').remove(),
        $(o).each(function (s, o) {
          e.find('.menu').append('<div class="item municipio_3" data-value="' + o[0] + '">' + o[1] + '</div>')
        }),
        e.find('#municipio_2').prop('disabled', !1)
      },
      error: function () {
        alert('Ocurrio un error en el servidor ..'),
        s.prop('disabled', !1)
      }
    })  : (e.find('.menu').remove(), e.find('#municipio_2').prop('disabled', !0))
  }),
  $('#municipio_2').change(function () {
    var e = $('#parroquia_1'),
    s = $(this);
    '' != $(this).val() ? $.ajax({
      data: {
        id: s.val()
      },
      url: '../recursos/php/buscar_parroquias.php',
      type: 'POST',
      dataType: 'json',
      beforeSend: function () {
        s.prop('disabled', !0)
      },
      success: function (o) {
        s.prop('disabled', !1),
        e.find('.parroquia_3').remove(),
        $(o).each(function (s, o) {
          e.find('.menu').append('<div class="item parroquia_3" data-value="' + o[0] + '">' + o[1] + '</div>')
        }),
        e.find('#parroquia_2').prop('disabled', !1)
      },
      error: function () {
        alert('Ocurrio un error en el servidor ..'),
        s.prop('disabled', !1)
      }
    })  : (e.find('.menu').remove(), e.find('#parroquia_2').prop('disabled', !0))
  }),
  $('#parroquia_2').change(function () {
    var e = $('#consejo_1'),
    s = $(this);
    '' != $(this).val() ? $.ajax({
      data: {
        id: s.val()
      },
      url: '../recursos/php/buscar_consejos.php',
      type: 'POST',
      dataType: 'json',
      beforeSend: function () {
        s.prop('disabled', !0)
      },
      success: function (o) {
        s.prop('disabled', !1),
        e.find('.consejo_3').remove(),
        $(o).each(function (s, o) {
          e.find('.menu').append('<div class="item consejo_3" data-value="' + o[0] + '">' + o[1] + '</div>')
        }),
        e.find('#consejo_2').prop('disabled', !1)
      },
      error: function () {
        alert('Ocurrio un error en el servidor ..'),
        s.prop('disabled', !1)
      }
    })  : (e.find('.menu').remove(), e.find('#consejo_2').prop('disabled', !0))
  }),

  $('#genero').change(function () {
             if($(this).val()=='H'){
              $('#estado_civil').html("<div class='item' data-value='1'>Soltero</div><div class='item' data-value='2'>Casado</div><div class='item' data-value='3'>Divorciado</div><div class='item' data-value='4'>Viudo</div>"), $('#estado_civil_p').val('1')}
             if($(this).val()=='M'){
              $('#estado_civil').html("<div class='item' data-value='1'>Soltera</div><div class='item' data-value='2'>Casada</div><div class='item' data-value='3'>Divorciada</div><div class='item' data-value='4'>Viuda</div>"), $('#estado_civil_p').val('1')}
});

}),
$(':input[name=asistente]').change(function () {
  $(this).is(':checked') ? ($('#no').addClass('blanco'), $('#nop').addClass('blanco'), $('#no').html(''), $('#si').removeClass('blanco'), $('#sip').removeClass('blanco'), $('#si').html('Responsable comunal'), $('#trabajarenserio').html('<label>Trabajar por el consejo comunal (<element>*</element>)</label><div class=\'ui fluid search selection dropdown\'><input name=\'tconsejo\' type=\'hidden\' class=\'d3i\'><i class=\'dropdown icon\'></i><div class=\'default text\'>Seleccione un consejo comunal</div><div id=\'menuconsejo\' class=\'menu\'> </div></div></div>'), $('.ui.dropdown').dropdown(), $.ajax({
    url: '../recursos/php/buscar_consejo_dos.php',
    type: 'POST',
    dataType: 'json',
    success: function (e) {
      $(e).each(function (e, s) {
        $('#trabajarenserio').find('#menuconsejo').append('<div class="item consejo responsable" data-value="' + s[0] + '">' + s[1] + '</div>')
      })
    }
  }))  : ($('#si').addClass('blanco'), $('#sip').addClass('blanco'), $('#si').html(''), $('#no').removeClass('blanco'), $('#nop').removeClass('blanco'), $('#no').html('Asistente parroquial'), $('#trabajarenserio').html('<label>Trabajar por la parroquia (<element>*</element>)</label><div class=\'ui fluid search selection dropdown\'><input name=\'tparroquia\' type=\'hidden\' class=\'d3i\'><i class=\'dropdown icon\'></i><div class=\'default text\'>Seleccione una parroquia</div><div id=\'menuparroquia\' class=\'menu\'> </div></div></div>'), $('.ui.dropdown').dropdown(), $.ajax({
    url: '../recursos/php/buscar_parroquia_dos.php',
    type: 'POST',
    dataType: 'json',
    success: function (e) {
      $(e).each(function (e, s) {
        $('#trabajarenserio').find('#menuparroquia').append('<div class="item parroquia asistente" data-value="' + s[0] + '">' + s[1] + '</div>')
      })
    }
  }))
});