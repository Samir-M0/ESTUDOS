algoritmo "Maior nota"
var
qtd, aux:inteiro
nota, maiorn: real
nome, maiornome: caractere

inicio
maiorn <- 0
Escreva("Digite a quantidade de alunos: ")
leia(qtd)
Enquanto (aux < qtd) faca
     aux <- aux + 1
     EscrevaL("-----------------------------------")
     Escreva("Informe o nome do aluno ",aux,"°: ")
     leia(nome)
     Escreva("Informe a nota do aluno",aux,"°: ")
     leia(nota)
     EscrevaL("-----------------------------------")
     EscrevaL()
     se (nota > maiorn) entao
         maiorn <- nota
         maiornome <- nome
     FimSe

     
FimEnquanto

Escreval("O aluno com a melhor nota foi ",maiornome," com uma nota de:",maiorn)
fimalgoritmo