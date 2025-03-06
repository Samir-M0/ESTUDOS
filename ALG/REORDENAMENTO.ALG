algoritmo "Reordenamento"
var
i, j, aux: inteiro
v: vetor[1..5] de inteiro
inicio
para i <- 1 ate 5 faca
     Escreva("Digite o número na posição",i,"°:")
     leia(v[i])

FimPara

para i <- 1 ate 5 faca
     Escreva("(",v[i],")")
FimPara
EscrevaL()

para i <- 1 ate 5 faca
     para j <- i + 1 ate 5 faca
          se (v[i] < v[j]) entao
             aux <- v[i]
             v[i] <- v[j]
             v[j] <- aux
          FimSe
     FimPara
FimPara
para i <- 1 ate 5 faca
     Escreva("(",v[i],")")
FimPara

fimalgoritmo