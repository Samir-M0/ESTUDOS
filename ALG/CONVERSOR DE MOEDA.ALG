algoritmo "CONVERSOR DE MOEDA"
var
vezes, final:inteiro
dolar, reale:real

inicio
EscrevaL("Quantas vezes?: ")
leia(vezes)
Enquanto (final < vezes) faca
   Escreva("Digite a quantidade de real: ")
   EscrevaL()
   leia(reale)
   dolar <- reale/ 5.8596005
   Escreva("O valor da conversão é de:$",dolar:5:2)
   EscrevaL()
   final <- final + 1
FimEnquanto

fimalgoritmo