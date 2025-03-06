algoritmo "entre0e10_Para"
var
N, C, ContDez, Simpar:inteiro
inicio
Simpar <- 0
para C de 1 ate 5 faca
   EscrevaL("============================")
   Escreva("|Digite um número: ")
   leia(N)
   se (N > 0) E (N <= 10) entao
      EscrevaL("|",N," é um número entre 0 e 10")
      EscrevaL("============================")
      ContDez <- ContDez + 1
   se (N % 2 = 1) entao
      Simpar <- Simpar + N
   Fimse

   FimSe
FimPara
Escreval("São ao todo ",ContDez," números entre 0 e 10")
EscrevaL("A soma de todos os ímpares é de:",Simpar)
fimalgoritmo