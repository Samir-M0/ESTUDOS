algoritmo "Super Contador"
var
acao, C: inteiro
inicio
EscrevaL("==============")
EscrevaL("|1. De 0 a 10|")
EscrevaL("|2. De 10 a 0|")
EscrevaL("|3. Sair     |")
EscrevaL("==============")

Escreva("Digite uma ação: ")
leia(acao)
ESCOLHA acao
   caso 1
      c <- 0
      repita
         EscrevaL(C)
         C <- C + 1
      ate (c > 10)
   caso 2
      C <- 10
      repita
         Escreval(C)
         C <- C -1
      ate (C < 0)
   caso 3
      interrompa


FIMESCOLHA

fimalgoritmo