var cronometro;
var contadorSegundos = 0;
var contadorMinutos = 0;
var contadorHoras = 8;
var cronometroActivo = true;

function iniciarCronometro() {
  cronometro = setInterval(function() {
    if (contadorSegundos === 0 && contadorMinutos === 0 && contadorHoras === 0) {
      detenerCronometro();
      alert("¡Su tiempo ha terminado!");
      return;
    }

    contadorSegundos--;
    if (contadorSegundos < 0) {
      contadorSegundos = 59;
      contadorMinutos--;
      if (contadorMinutos < 0) {
        contadorMinutos = 59;
        contadorHoras--;
      }
    }
    mostrarTiempo();
  }, 1000);
}

function detenerCronometro() {
  clearInterval(cronometro);
}

function mostrarTiempo() {
  var segundosMostrar = pad(contadorSegundos);
  var minutosMostrar = pad(contadorMinutos);
  var horasMostrar = pad(contadorHoras);
  var tiempo = horasMostrar + ":" + minutosMostrar + ":" + segundosMostrar;
  document.getElementById("tiempo").innerHTML = tiempo;
}

function pad(valor) {
  return valor < 8 ? "0" + valor : valor;
}
// Llamada inicial al cargar la página
window.addEventListener("load", function() {
  var tiempoGuardado = localStorage.getItem("tiempoCronometro");
  if (tiempoGuardado) {
    var tiempo = JSON.parse(tiempoGuardado);
    contadorSegundos = tiempo.segundos;
    contadorMinutos = tiempo.minutos;
    contadorHoras = tiempo.horas;
  }
  iniciarCronometro();
});

// Guardar el estado del cronómetro antes de recargar la página
window.addEventListener("beforeunload", function() {
  var tiempo = {
    segundos: contadorSegundos,
    minutos: contadorMinutos,
    horas: contadorHoras
  };
  localStorage.setItem("tiempoCronometro", JSON.stringify(tiempo));
});

