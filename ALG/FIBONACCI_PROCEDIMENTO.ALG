algoritmo "Fibonacci_procedimento"
var
c: inteiro
r: inteiro
inicio
Procedimento Fibonacci()
var
a, fib1, fib2, fib: inteiro

Inicio
fib1 <- 1
fib2 <- 1
EscrevaL(fib1)
para a de 0 ate c faca
fib <- (fib1) + (fib2)
fib2 <- fib1
fib1 <- fib
EscrevaL(fib)
EscrevaL()


FimPara



FimProcedimento
repita
   Escreva("Quantas casas?:")
   leia(c)
   Fibonacci()
   Escreva("Continuar?[S/N]")
   leia(r)
ate(r = "N")


fimalgoritmo