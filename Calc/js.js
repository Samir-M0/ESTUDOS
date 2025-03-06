var display = window.document.getElementById("display")

function clicar(valor){
  display.value += valor.innerText
}
function apagar(){
  display.value = ""
}


function calculo(){
  // entrada = display,value
  let arrayEntrada = display.value.split(/([+\-x/])/)
  console.log(arrayEntrada)
  console.log(display.value)

  for (let i = 0; i < arrayEntrada.length; i++) {

    console.log(arrayEntrada[i])
    if (/([+\-x/])/.test(arrayEntrada[i]) == true) {
      console.log("temos uma expressão aqui")
      
    }
    if (arrayEntrada[i] == "" || arrayEntrada == null) {
      alert("burro")
      
    }
    
  }
}