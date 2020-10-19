$(document).ready(function () {
  $('.ui.dropdown').dropdown(),
  $('table').tablesort(),
  $('#ordenar').click(),
  $('#tiempo').change(function () {
    var a = $(this),
    t = $('tbody');
    '' != a.val() && $.ajax({
      data: {
        tiempo: a.val()
      },
      url: '../recursos/php/buscar_bitacoras.php',
      type: 'POST',
      dataType: 'json',
      success: function (a) {
        t.find('.filas_actuales').remove(),
        $(a).each(function (a, o) {
          t.append('<tr class=\'filas_actuales\'><td>' + o.id_bitacora + '</td><td>' + o.operacion + '</td><td>' + o.momento + '</td></tr>')
        })
      }
    }),
    setTimeout(function () {
      $('#ordenar').click(),
      $('#ordenar').click()
    }, 999)
  })
});