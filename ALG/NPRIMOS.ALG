algoritmo "NPrimos"
var
N, C, contp:inteiro

inicio
C <- 10
contp <- 0
repita
   Escreva("Digite um número: ")
   leia(N)
   C <- C -1
   se (N % 2 = 1) entao
      EscrevaL("O número ",N," é um número primo")
      contp <- contp + 1
   senao
      EscrevaL("O mnmúmero",N," não é primo")
   FimSe
ate (C < 0)
EscrevaL("--------------------------------------")
Escreva("São ao todo ",contp," múmeros primos")
fimalgoritmo