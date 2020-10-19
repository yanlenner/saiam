var direccion='', rol='';
  $.ajax({
    url: '../recursos/php/sesion.php',
    type: 'POST',
    dataType: 'json',
    success: function (a) {
      rol = a;
        $(document).ready(function () {   
  if(rol===1)
    direccion = '../recursos/php/listar_admin.php';
  if(rol===2)
    direccion = '../recursos/php/listar_reest.php';
  if(rol===3)
    direccion = '../recursos/php/listar_remun.php';
  if(rol===4)
    direccion = '../recursos/php/listar_repar.php';
  if(rol>4 && rol<7)
    direccion = '../recursos/php/listar_recom.php';
  $('.ui.dropdown').dropdown(),
  $('table').tablesort(),
  $('#ordenar').click(),
  $('#nivel').change(function () {
    var a = $(this).val();
    if(a=='el')
      $('#ordenar').html('Estado');
    if(a=='ml')
      $('#ordenar').html('Municipio');
    if(a=='pl')
      $('#ordenar').html('Parroquia');
    if(a=='cl')
      $('#ordenar').html('Consejo comunal');
    t = $('tbody');
    '' != a && $.ajax({
      data: {
        nivel: a
      },
      url: direccion,
      type: 'POST',
      dataType: 'json',
      success: function (a) {
        var titulo='titulo', cedula='cedula', fecha='fecha', numero=0, aux, xua;
        t.find('.filas_actuales').remove(),
        $(a).each(function (a, o) {          
          numero+=1;
          aux=titulo+numero;
          xau=fecha+numero;
          xua=cedula+numero;
          t.append('<tr class=\'filas_actuales\'><td id='+xua+'>' + o.nombre_completo + '</td><td id='+aux+'>' + o.responsable + '</td><td>' + o.subordinados + '</td><td id='+xau+'>' + o.promedio + '</td></tr>'),
          document.getElementById(xua).setAttribute('title', o.no_cedula);
          document.getElementById(aux).setAttribute('title', o.titulo);
          document.getElementById(xau).setAttribute('title', o.registro)
        })
      }
    }),
    setTimeout(function () {
      $('#ordenar').click(),
      $('#ordenar').click()
    }, 999)
  })
});
    }
  });
