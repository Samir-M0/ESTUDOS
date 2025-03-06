algoritmo "SomentePares_Para"
var
N, Cont: inteiro
inicio

Escreva("Digite o número: ")
leia(N)

se (N % 2 = 1) entao
   N <- N - 1
FimSe

para Cont <- N ate 0 passo -2 faca
   EscrevaL(Cont)
FimPara


fimalgoritmo