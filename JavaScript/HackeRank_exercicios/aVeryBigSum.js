let soma = 0

function aVeryBigSum(arr) {
  // Write your code here
  for (let i = 0; i < arr.length; i++) {
    soma += Number(arr[i])
  }
  console.log(arr)

  return soma

}


arraySoma = [1000000001, 1000000002, 1000000003, 1000000004, 1000000005]
aVeryBigSum(arraySoma)
console.log(soma)
