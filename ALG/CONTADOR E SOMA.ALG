algoritmo "Contador e soma"
var
inicial: inteiro
contador: inteiro
iniciald, MAIOR: inteiro
N:inteiro
S: real
inicio
Escreva("Digite o número: ")
leia(contador)
inicial <- 0
iniciald <- 0
Enquanto (inicial < contador) faca
     inicial <- inicial + 1
     se (inicial > MAIOR) entao
        MAIOR <- inicial
     FimSe
     EscrevaL(inicial)

FimEnquanto
N <- contador
S <- N * (N + 1) / 2
EscrevaL("A soma desses números é de: ", S)
EscrevaL("O maior número da sequência foi: ", MAIOR)
fimalgoritmo