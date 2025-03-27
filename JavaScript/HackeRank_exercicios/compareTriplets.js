var pontuacaoGeral = [];

function compareTriplets(a, b) {

  let pontuacaoAlice = 0;
  let pontuacaoBob = 0;

  for (let i = 0; i < a.length; i++) {
    if (a[i] > b[i]) {
      pontuacaoAlice++;

    } else if (b[i] > a[i]) {
      pontuacaoBob++;


    }
    else {
      continue
    }

  }
  pontuacaoGeral.push(pontuacaoAlice);
  pontuacaoGeral.push(pontuacaoBob);

  return pontuacaoGeral

}

a = [17, 28, 30]
b = [99, 16, 8]
compareTriplets(a, b);
console.log(pontuacaoGeral)