algoritmo "jogo da velha"
var
l, c, cont, a:inteiro
simb, posi:caractere
ocupado, mudou, acabou:logico
m: vetor[1..3, 1..3] de caractere


procedimento ver_jogo()
var

inicio

para l <- 1 ate 3 faca
   para c <- 1 ate 3 faca
      escreva("|", m[l, c]:1)
   fimpara
      escrevaL("|")
fimpara
fimprocedimento



procedimento vez()
var

inicio
se (simb = "X") entao
   simb <- "O"
senao
   simb <- "X"
fimSe
fimprocedimento

procedimento jogada()
var

inicio
   para l <- 1 ate 3 faca
       para c <- 1 ate 3 faca
         se m[l,c] = posi entao
            m[l,c] <-simb
         fimse
       fimpara
   fimpara

fimprocedimento

procedimento verificacao()
var

inicio
mudou <- falso
   para l <- 1 ate 3 faca
       para c <- 1 ate 3 faca
          se (m[l,c] = posi) entao
             m[l,c] <- simb
             mudou <- verdadeiro
          fimse
       fimpara
   fimpara


fimprocedimento

procedimento terminou_jogo()
var

inicio
   para l <- 1 ate 3 faca
      se(m[l,1] = m[l,2]) e (m[l,3] = m[l,2]) entao
         Escreval("Jogador de '",m[l,1],"' é o vencedor!")
         acabou <- verdadeiro
         interrompa
      fimse
       fimpara
       
   para c <- 1 ate 3 faca
      se(m[1,c] = m[2,c]) e (m[3,c] = m[2,c]) entao
         Escreval("Jogador de '",m[1, c],"' é o vencedor!")
         acabou <- verdadeiro
         interrompa
      fimse

   
   se(m[3,1] = m[2,2]) e (m[1,3] = m[2,2])entao
         Escreval("Jogador de '",m[3,1],"' é o vencedor!")
         acabou <- verdadeiro
         interrompa
   fimse
   se(m[1,1] = m[2,2]) e (m[3,3] = m[2,2])entao
         Escreval("Jogador de '",m[1,1],"' é o vencedor!")
         acabou <- verdadeiro
         interrompa
   fimse

   fimpara
   se (cont = 9) e (acabou = falso)entao
      Escreval("EMPATE!DEU VELHA")
      acabou <- verdadeiro
   fimse
   
   se(acabou = verdadeiro)entao
      escreva("FIM DE JOGO!")
   fimse

fimprocedimento

inicio


m[1,1] <- "1"
m[1,2] <- "2"
m[1,3] <- "3"
m[2,1] <- "4"
m[2,2] <- "5"
m[2,3] <- "6"
m[3,1] <- "7"
m[3,2] <- "8"
m[3,3] <- "9"

simb <- "X"
cont <- 0
   
   
ver_jogo()
repita
      repita
         escreva("Informe a posição de ", simb,":")
         leia(posi)
         verificacao()
         se (mudou = falso) entao
            limpatela
            escreval("Jogada invalida, tente novamente")
            ver_jogo()


         senao
            cont <- cont + 1
            jogada()
         fimse
      ate(mudou = verdadeiro)

   limpatela
   vez()
   ver_jogo()
   terminou_jogo()
ate(acabou = verdadeiro)


fimalgoritmo