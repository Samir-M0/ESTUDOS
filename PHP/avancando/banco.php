<?php

include 'funcoes.php';

$contasCorrente = [
  '123.456.789-10' => [
    'titular' => 'Mihai',
    'saldo' => 700
  ],

  '123.456.789-11' => [
    'titular' => 'Codd',
    'saldo' => 900
  ]

];



depositar(
  $contasCorrente['123.456.789-10'],
  valorDeDeposito: 456
);

sacar(
  $contasCorrente['123.456.789-11'],
  valorDeSaque: 456
);

titularComLetrasMaiusculas($contasCorrente['123.456.789-10']);
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body>

  <h1>Contas Correntes</h1>

  <dl>
    </dl><?php foreach ($contasCorrente as $cpf => $conta) {?>
    <dt>
      <h3><?= $conta['titular'];?> - <?= $cpf;?></h3>
    </dt>
    <dd>
      Saldo:<?= $conta['saldo'];?>
    </dd>
    <?php } ?>
  </dl>

</body>

</html>