var display = window.document.getElementById("display")
let arrayEntrada = []
var temVirgula = false
var temOperador
let parentesisDireito = []
let parentesisEsquerdo = []
let arrayPraContaParentesis = []
let ultimoParentesis


function clicar(valor) {

  if (valor.innerText == ',') {
    if (temVirgula == false) {
      display.value += valor.innerText
      temVirgula = true
    }
    if (temVirgula == true) {
      return;
    }
  }



  if (valor.innerText == '+' || valor.innerText == '-' || valor.innerText == '/' || valor.innerText == 'x' || valor.innerText == '%') {
    temVirgula = false;

    if (temOperador) {
      return;
    }

    display.value += valor.innerText;
    temOperador = true;

  }
  else if (valor.innerText == '(' || valor.innerText == ')') {
    display.value += valor.innerText;
    temOperador = false;



  }
  else if (/([0-9()])/.test(valor.innerText)) {
    display.value += valor.innerText;
    temOperador = false;
  }

}
function apagar() {
  display.value = ""
  temVirgula = false
  arrayEntrada = []
  arrayPraContaParentesis = []
  parentesisDireito = []
  parentesisEsquerdo = []

}


function calculo() {
  temVirgula = false
  // entrada = display,value
  let resultadoTratamento = true
  arrayEntrada = display.value.replaceAll(',', '.').split(/([+\-x/\(\)%])/).filter(token => token.trim() !== "")
  // console.log(arrayEntrada)
  // console.log(display.value)

  for (let i = 0; i < arrayEntrada.length; i++) {

    // console.log(arrayEntrada[i])
    if (/([+\-x/])/.test(arrayEntrada[i]) == true) {
      // console.log("temos uma expressão aqui")

    }
    if (arrayEntrada == null || /[a-wy-zA-WY-Z@#$¨&_]/.test(arrayEntrada) == true || arrayEntrada.length == 2) {
      alert("Entrada invalida!")
      display.value = ""
      resultadoTratamento = false
      break;
    }
    else if (arrayEntrada.length == 1) {
      display.value = Number(arrayEntrada[0])
      return;
    }

  }
  if (resultadoTratamento == true) {
    resultado()

  }
}

function multiDiv(params) {
  for (let i = 1; i <= arrayEntrada.length; i += 2) {


    operador = arrayEntrada[i]
    // console.log(operador)
    if (operador == 'x') {
      // console.log(arrayEntrada[i-1])
      // console.log(arrayEntrada[i+1])
      resultadoConta = Number(arrayEntrada[i - 1]) * Number(arrayEntrada[i + 1]);
      // console.log(resultadoConta) 

      arrayEntrada.splice(i - 1, i + 2, resultadoConta)
      console.log(arrayEntrada)

      if (arrayEntrada.length >= 1) {
        i = -1
        // console.log(i)
        // console.log(arrayEntrada)
      }
    }
    if (operador == '/') {
      resultadoConta = Number(arrayEntrada[i - 1]) / Number(arrayEntrada[i + 1]);
      arrayEntrada.splice(i - 1, i + 2, resultadoConta)
      // console.log(arrayEntrada)
      if (arrayEntrada.length >= 1) {
        i = -1
        // console.log(i)
        // console.log(arrayEntrada)
      }

    }

    if (operador == '%') {
      arrayEntrada[i - 1] = Number(arrayEntrada[i - 1]) / 100
      resultadoConta = Number(arrayEntrada[i - 1]) * Number(arrayEntrada[i + 1]);
      // console.log(resultadoConta) 

      arrayEntrada.splice(i - 1, i + 2, resultadoConta)
      // console.log(arrayEntrada)

      if (arrayEntrada.length >= 1) {
        i = -1
        // console.log(i)
        // console.log(arrayEntrada)
      }
    }
    display.value = resultadoConta.toFixed(2).replaceAll(".", ",")




  }

}
function somaSubtracao(params) {
  for (let i = 1; i < arrayEntrada.length; i += 2) {

    operador = arrayEntrada[i]


    if (operador == '+') {
      // console.log(arrayEntrada[i-1])
      // console.log(arrayEntrada[i+1])
      resultadoConta = Number(arrayEntrada[i - 1]) + Number(arrayEntrada[i + 1]);
      // console.log(resultadoConta) 

      arrayEntrada.splice(i - 1, i + 2, resultadoConta)
      // console.log(arrayEntrada)

      if (arrayEntrada.length >= 1) {
        i = -1
        // console.log(i)
        // console.log(arrayEntrada)
      }
    }


    if (operador == '-') {
      // console.log(arrayEntrada[i-1])
      // console.log(arrayEntrada[i+1])
      resultadoConta = Number(arrayEntrada[i - 1]) - Number(arrayEntrada[i + 1]);
      // console.log(resultadoConta) 

      arrayEntrada.splice(i - 1, i + 2, resultadoConta)
      // console.log(arrayEntrada)

      if (arrayEntrada.length >= 1) {
        i = -1
        // console.log(i)
        // console.log(arrayEntrada)
      }
    }


  }
  display.value = resultadoConta.toFixed(2).replaceAll(".", ",")

}

function cacador() {

  arrayEntrada.forEach((element, index) => {

    if (element == "(") {

      //  console.log(index)
      return parentesisDireito.push(index);

    }
    if (element == ")") {

      //  console.log(index)
      return parentesisEsquerdo.push(index);

    }
  });
}
function isParentesis(val) {
  return val !== '(' && val !== ')';

}

function resultado() {
  // console.log(arrayEntrada)
  let operador
  let resultadoConta
  let numero1
  // console.log(arrayEntrada[0])
  // console.log(arrayEntrada[1])
  // console.log(arrayEntrada[2])
  if (arrayEntrada.includes('(') && arrayEntrada.includes(")") && parentesisDireito.length == parentesisEsquerdo.length) {
    cacador(arrayEntrada)
    console.log(parentesisDireito)
    console.log(parentesisEsquerdo)
    for (let i = parentesisDireito.length - 1; i >= 0; i--) {
      // console.log(parentesisDireito[i])
      // console.log(parentesisEsquerdo[i])
      // console.log(i)
      arrayPraContaParentesis = arrayEntrada.slice(parentesisDireito[i], parentesisEsquerdo[i + 1])
      // console.log(arrayPraContaParentesis)
      if (arrayPraContaParentesis.includes('(')) {
        console.log("Ai meu")
        arrayPraContaParentesis = arrayPraContaParentesis.filter(isParentesis)
        console.log(arrayPraContaParentesis)

        for (let j = 1; j <= arrayPraContaParentesis.length; j += 2) {
          operador = arrayPraContaParentesis[j]

          if (operador == 'x') {
            resultadoConta = Number(arrayPraContaParentesis[j - 1]) * Number(arrayPraContaParentesis[j + 1])
      
            arrayPraContaParentesis.splice(j - 1, j + 2, resultadoConta)
            
            arrayEntrada.splice(5,9, resultadoConta)
            parentesisDireito.shift()
            parentesisEsquerdo.shift()
            console.log(arrayPraContaParentesis)
            console.log(arrayEntrada)

            if (arrayEntrada.length >= 1) {
              j = -1
              // console.log(j)
              // console.log(arrayEntrada)
            }
          }
          if (operador == '/') {
            resultadoConta = Number(arrayPraContaParentesis[j - 1]) / Number(arrayPraContaParentesis[j + 1])
      
            arrayPraContaParentesis.splice(j - 1, j + 2, resultadoConta)
            console.log(arrayPraContaParentesis)
            if (arrayEntrada.length >= 1) {
              j = -1
              // console.log(j)
              // console.log(arrayEntrada)
            }
          }
          if (operador == '*') {
            arrayPraContaParentesis[j - 1] = Number(arrayPraContaParentesis[j - 1]) / 100

            resultadoConta = Number(arrayPraContaParentesis[j - 1]) * Number(arrayPraContaParentesis[j + 1])
      
            arrayPraContaParentesis.splice(j - 1, j + 2, resultadoConta)
            console.log(arrayPraContaParentesis)
            if (arrayEntrada.length >= 1) {
              j = -1
              // console.log(j)
              // console.log(arrayEntrada)
            }
          }

        }



      }




    }
  }
  else{
    for (let i = 1; i <= arrayEntrada.length; i += 2) {
  
  
      operador = arrayEntrada[i]
      // console.log(operador)
      if (operador == 'x') {
        multiDiv()
    
    
      }
      if (operador == '/') {
        multiDiv()
    
    
    
      }
    
      if (operador == '%') {
        multiDiv()
    
    
      }
    
    
    }
    
    for (let i = 1; i < arrayEntrada.length; i += 2) {
    
      operador = arrayEntrada[i]
    
    
      if (operador == '+') {
        somaSubtracao()
    
      }
    
      if (operador == '-') {
        somaSubtracao()
    
      }
    }
  
  
  
  }
  
}


// resultadoConta.replace(".", ",")



