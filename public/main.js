function Mayus(a) {
  var c = 0;
  var b = '' + a.charAt(0).toUpperCase();
  for (var d = 1; d < a.length; d++) 1 == c && (b += a.charAt(d).toUpperCase(), c = 2),
  - 1 != ' '.indexOf(a.charAt(d)) ? (c = 1, b += a.charAt(d))  : 2 == c ? c = 0 : b += a.charAt(d).toLowerCase();
  return b
}
function Numeros(a) {
  for (var c = '', b = 0; b < a.length; b++) - 1 != '1234567890'.indexOf(a.charAt(b)) && (c += a.charAt(b));
  return c
}
function Letras(a) {
  for (var c = '', b = 0; b < a.length; b++) - 1 != ' áéíóúabcdefghijklmnñopqrstuvwxyzÁÉÍÓÚABCDEFGHIJKLMNÑOPQRSTUVWXYZ'.indexOf(a.charAt(b)) && (c += a.charAt(b));
  return c
}
function Direccion(a) {
  for (var c = '', b = 0; b < a.length; b++) - 1 != ' áéíóúabcdefghijklmnñopqrstuvwxyzÁÉÍÓÚABCDEFGHIJKLMNÑOPQRSTUVWXYZ1234567890,-#/.'.indexOf(a.charAt(b)) && (c += a.charAt(b));
  return c
}
function NoEscribir(a) {
  for (var c = '', b = 0; b < a.length; b++) - 1 != ''.indexOf(a.charAt(b)) && (c += a.charAt(b));
  return c
}
$(document).ready(function () {
  document.querySelector('form').reset()
});
$(function () {
  $('.rif').mask('C-19999999', {
    translation: {
      0: {
        pattern: /\d/
      },
      1: {
        pattern: /[1-9]/
      },
      9: {
        pattern: /\d/,
        optional: !0
      },
      '#': {
        pattern: /\d/,
        recursive: !0
      },
      C: {
        pattern: /C|E|G|J|P|V/,
        fallback: 'C'
      }
    }
  });
  $('.cedula').mask('C-19999999', {
    translation: {
      0: {
        pattern: /\d/
      },
      1: {
        pattern: /[1-9]/
      },
      9: {
        pattern: /\d/,
        optional: !0
      },
      '#': {
        pattern: /\d/,
        recursive: !0
      },
      C: {
        pattern: /V|E/,
        fallback: 'V'
      }
    }
  });
  $('.cedula').on('input', function (a) {
    a = $(this).val();
    5 < a.length && (80000000 < a.substring(2) ? $(this).val('E-' + a.substring(2))  : $(this).val('V-' +
    a.substring(2)))
  })
});
$(function () {
  $('.numero').mask('0122 2222222', {
    translation: {
      0: {
        pattern: /0/
      },
      1: {
        pattern: /2|4/
      },
      2: {
        pattern: /[0-9]/
      }
    }
  })
});