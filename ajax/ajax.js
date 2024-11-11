function peticionAjax(metodo, recurso, dom) {
  var ajax = new XMLHttpRequest();
  ajax.onreadystatechange = function () {
    if (this.readyState === 4 && this.status === 200) {
      respuestaAjax(this, dom);
    }
  };
  ajax.open(metodo, recurso, dom);
  ajax.send();
}

function respuestaAjax(ajax, dom) {
  dom.innerHTML = ajax.responseText;
}
