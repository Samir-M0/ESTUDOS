algoritmo "Cinema"
var
lugar: vetor[1..10] de caractere
r: caractere
reservar: inteiro
inicio
procedimento VerLugares()
var
i: inteiro
inicio
para i <- 1 ate 10 faca

     se (lugar[i] = "") entao
        Escreva("[B",i,"]":2)
     senao
        Escreva("[ -- ]")
     FimSe
     

FimPara

FimProcedimento



repita
   LimpaTela
   VerLugares()
   EscrevaL()
   EscrevaL("Escolha a posição da cadeira para ser reservada:")
   leia(reservar)
   se(lugar[reservar] = "") entao
      LimpaTela
      Escreval("Seu lugar foi reservado com sucesso!")
      lugar[reservar] <- "--"
      VerLugares()
   senao
      EscrevaL("LUGAR OCUPADO!")
   FimSe
   EscrevaL()
   Escreval("Continuar a reservar mais cadeiras?[S/N]")
   leia(r)
ate(r="N")

fimalgoritmo