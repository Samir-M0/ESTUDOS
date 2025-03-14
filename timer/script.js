function horarioAtual() {
  var date = new Date();
  var horaAtual = date.getHours() + ":" + date.getMinutes();
  document.getElementById("hora_atual").innerHTML = horaAtual;

}

setInterval(horarioAtual, 1000)


const contagemRegressiva = document.getElementById("timer");
//----------------------------------------------------------------------------------------------------------------------------
//                                                    SETAR O TEMPO
const tempoInicial = 120;

//----------------------------------------------------------------------------------------------------------------------------
let tempo = tempoInicial * 60;
let casoCancele = tempo
var intervalo = setInterval(contagem, 1000)

function contagem() {

  let horas = Math.floor(tempo / 3600)
  let minutos = Math.floor((tempo % 3600) / 60)
  let segundos = tempo % 60


  segundos = segundos < 10 ? '0' + segundos : segundos
  horas = horas < 10 ? '0' + horas : horas
  minutos = minutos < 10 ? '0' + minutos : minutos
  contagemRegressiva.innerHTML = `${horas}:${minutos}:${segundos}`;

  tempo--;
  if(tempo == 0){
    alert("Tempo esgotado!")
  }
}
function PararRetornar() {

  if (document.getElementById("retomar").innerHTML == "Parar") {
    document.getElementById("retomar").innerHTML = "Retomar"
    document.getElementById("retomar").style.backgroundColor = "blue"
    console.log("oi")

    clearInterval(intervalo)
    intervalo = null

  }
  else if (document.getElementById("retomar").innerHTML == "Retomar") {

    document.getElementById("retomar").innerHTML = "Parar"
    document.getElementById("retomar").style.backgroundColor = "red"
    console.log("oi")

    intervalo = setInterval(contagem, 1000)

  }
}

function cancelar() {
  clearInterval(intervalo)
  intervalo = null
  document.getElementById("retomar").innerHTML = "Retomar"
  document.getElementById("retomar").style.backgroundColor = "blue"

  tempo = casoCancele
  
}
