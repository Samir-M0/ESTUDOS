algoritmo "Valores_Para"
var
valor, divi5, null, Spar, c:inteiro
media, soma: real
inicio
media <- 0
divi5 <- 0
null <- 0
para c de 1 ate 5 faca
   Escreva("Digite o",c,"° valor:")
   leia(valor)
   media <- media + valor
   
   se (valor % 5 = 0) E (valor <> 0) entao
      divi5 <- divi5 + 1
   FimSe

   se (valor = 0) entao
      null <- null + 1
   FimSe
FimPara
soma <- media

media <- media/5
EscrevaL("A média da soma desses valores é de:",media)
EscrevaL("A soma total desses valores é de:", soma)
EscrevaL("Valores divisiveis por 5:",divi5)
EscrevaL("Valores nulos:", null)

fimalgoritmo