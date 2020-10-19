function consoleText(d, l, c) {
  void 0 === c && (c = [
    '#fff'
  ]);
  var g = !0,
  k = document.getElementById('console'),
  a = 1,
  e = 1,
  b = !1,
  f = document.getElementById(l);
  f.setAttribute('style', 'color:' + c[0]);
  window.setInterval(function () {
    0 === a && !1 === b ? (b = !0, f.innerHTML = d[0].substring(0, a), window.setTimeout(function () {
      var h = c.shift();
      c.push(h);
      h = d.shift();
      d.push(h);
      e = 1;
      f.setAttribute('style', 'color:' + c[0]);
      a += e;
      b = !1
    }, 250))  : a === d[0].length + 1 && !1 === b ? (b = !0, window.setTimeout(function () {
      a += e = - 1;
      b = !1
    }, 250))  : !1 === b && (f.innerHTML = d[0].substring(0, a), a += e)
  }, 83);
  window.setInterval(function () {
    !0 === g ? (k.className = 'console-underscore hidden', g = !1)  : (k.className = 'console-underscore', g = !0)
  }, 250)
}
consoleText(['Gracias por hacer uso del',
'Sistema de Atención Integral al Sector Adulto Mayor "Hugo Rafael Chávez Frías"'], 'text', [
  'black',
  'black'
]);
setTimeout(function () {
  location.href = './'
}, 14321);