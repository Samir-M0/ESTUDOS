algoritmo "MostrarMatriz"
var
acao: inteiro
l, c: inteiro
M:vetor[1..4, 1..4] de inteiro

inicio
Procedimento adicionar_valores()
var

inicio
para l <- 1 ate 4 faca
   para c <- 1 ate 4 faca
      Escreva("Digite o valor de [",l,",",c,"]:")
      leia(M[l,c])
   FimPara
FimPara
FimProcedimento



Procedimento ver_matriz_inteira()
var

inicio
para l <- 1 ate 4 faca
   para c <- 1 ate 4 faca
      Escreva(m[l,c]:3)
   FimPara
    EscrevaL()
FimPara
FimProcedimento


procedimento ver_diagonal_principal()
var

inicio
para l <- 1 ate 4 faca
   para c <- 1 ate 4 faca
      se(l = c)entao
         Escreva(m[l,c]:3)
      Senao
         Escreva("   ")
      FimSe
   FimPara
    EscrevaL()
FimPara

FimProcedimento

Procedimento ver_triangulo_superior()
var

inicio
para l <- 1 ate 4 faca
   para c <- 1 ate 4 faca
      se(l + c = 2) ou (l + c = 3) ou (l + c = 4) entao
         Escreva(m[l,c]:3)
      Senao
         Escreva("   ")
      fimse
   FimPara
    EscrevaL()
FimPara

FimProcedimento



Procedimento ver_triangulo_inferior()
var

inicio
para l <- 1 ate 4 faca
   para c <- 1 ate 4 faca
      se(l + c = 8) ou (l + c = 7) ou (l + c = 6) entao
         Escreva(m[l,c]:3)
      Senao
         Escreva("   ")
      FimSe
   FimPara
    EscrevaL()
FimPara



FimProcedimento



adicionar_valores()
limpatela
repita

   EscrevaL("AÇÕES")
   Escreval("-----------------")
   EscrevaL("Digite 1 para ver matriz")
   EscrevaL("Digite 2 para ver diagonal principal")
   EscrevaL("Digite 3 para ver triangulo superior")
   EscrevaL("Digite 4 para ver triangulo inferior")
   EscrevaL("Digite 5 para encerrar programa")
   leia(acao)
   Escreval("-----------------")
   escolha acao
      caso 1
         limpatela
         ver_matriz_inteira()
      caso 2
         limpatela
         ver_diagonal_principal()
      caso 3
         limpatela
         ver_triangulo_superior()
      caso 4
         limpatela
         ver_triangulo_inferior()
      
   FimEscolha
ate(acao = 5)
fimalgoritmo