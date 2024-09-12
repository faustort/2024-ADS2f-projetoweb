<?php
$title = "Página Inicial";
include "header.php";
?>

<?php
$nome = "Onofre";
$saudacao = "Olá";
// echo $saudacao . $nome;
$idade = 20; // escreva a idade do nome
// echo "Sua idade é:" . $idade;
?>
<h1>Olá <?php echo $nome; ?></h1>
<p>Bem vindx a página da minha empresa!</p>
<img src="" class="img-fluid">

<div class="container">
    <div class="row">
        <div class="col-md-6">Coluna de metade</div>
        <div class="col-md-6">Coluna de metade</div>
    </div>
</div>

<?php
include "footer.php";
?>