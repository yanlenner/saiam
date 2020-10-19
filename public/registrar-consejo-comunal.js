function Busca() {
  var a = $('.rif');
  '' != a.val() && $.ajax({
    data: {
      rif: a.val()
    },
    url: '../recursos/php/buscar_consejo_comunal.php',
    type: 'POST',
    beforeSend: function () {
      a.prop('disabled', !0)
    },
    success: function (b) {
      a.prop('disabled', !1);
      'true' === b ? ($('#alerta').modal('show'), $('.s1').attr('escondido'))  : ($('.s1').removeClass('escondido'), $('.s1').removeClass('escondido'))
    }
  })
}
$('.ui.form').form({
  on: 'blur',
  fields: {
    id: {
      identifier: 'rif',
      rules: [
        {
          type: 'empty',
          prompt: 'Debes escribir el número de registro único de información fiscal del consejo comunal'
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
      prompt: 'Debes escribir la fecha de creación del consejo comunal'
    }
  ]
}).form('add rule', 'estado', {
  rules: [
    {
      type: 'empty',
      prompt: 'Debes seleccionar el estatus actual del consejo comunal'
    }
  ]
}).form('add rule', 'nombre', {
  rules: [
    {
      type: 'empty',
      prompt: 'Debes escribir el nombre del consejo comunal'
    }
  ]
});
$('.ui.radio.checkbox').checkbox();
$('.s1').on('click', function () {
  var a = 0;
  $('.d1i').each(function () {
    '' != $(this).val() && (a += 1)
  });
  3 < a && ($('.d1').addClass('escondido'), $('.e1').addClass('completed'), $('.e2').addClass('active'), $('.d2').removeClass('escondido'), $('.s1').addClass('escondido'), $('.a1').removeClass('escondido'), $('.primary').removeClass('escondido'))
});
$('.a1').on('click', function () {
  $('.d2').addClass('escondido');
  $('.d1').removeClass('escondido');
  $('.e1').removeClass('completed');
  $('.e1').addClass('active');
  $('.e2').removeClass('active');
  $('.a1').addClass('escondido');
  $('.s1').removeClass('escondido');
  $('.primary').addClass('escondido')
});
$(document).keydown(function (a) {
  if (a.ctrlKey && 85 == a.keyCode || 13 == a.keyCode) return !1
});
$('.ui.dropdown').dropdown();
$('.recycle').on('click', function () {
  location.reload()
});