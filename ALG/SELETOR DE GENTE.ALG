algoritmo "Seletor de gente"
var
idade, CabeloEscolha: inteiro
sexo, r, cabelo: caractere
inicio
repita
Escreva("Informe o sexo[M/F]: ")
leia(sexo)
Escreval("Informe a cor do cabelo")
EscrevaL("1. Preto")
EscrevaL("2. Castanho")
EscrevaL("3. Loiro")
EscrevaL("4. Ruivo")
leia(CabeloEscolha)
ESCOLHA CabeloEscolha
   caso 1
      cabelo <- "preto"
   caso 2
      cabelo <- "castanho"
   caso 3
      cabelo <- "loiro"
   caso 4
      cabelo <- "ruivo"
FIMESCOLHA

Escreva("Digite a idade: ")
leia(idade)

Se (sexo = "M") E (idade > 18) E (Cabelo = "castanho") entao
   EscrevaL("Essa pessoa cumpre os requisitos!")
senao (sexo = "F") E (idade > 25) E (idade < 30) E (cabelo = "loiro") entao
      EscrevaL("Essa pessoa cumpre os requisitos!")
FimSe
Escreva("Quer continuar[S/N]")
leia(r)



ate(r = "N")



fimalgoritmo