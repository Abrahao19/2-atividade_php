 <?php
    $operacao = $_POST["operacao"];
    $nome = $_POST ["Nome"];
    $number = $_POST["number"];
    $number2 = $_POST["number2"];
    $resposta;

    function saudar($nome) {
    echo "Olá, $nome! Seja bem-vindo.<br>";
}

saudar("$nome");

   function calculo($operacao,$number,$number2){
      if($operacao === "+"){
        $resposta = $number + $number2; 
        echo "O resultado da adição $resposta";
      }elseif ($operacao === "-"){
        $resposta = $number - $number2; 
        echo "O resultado da subtraçaõ $resposta";
      }elseif ($operacao === "*"){
        $resposta = $number * $number2; 
        echo "O resultado da multiplicação $resposta";
      }elseif ($operacao === "/"){
        if($number == "0") {
           echo " zero é um numero indivisível";
        } elseif ($number2 == "0"){
          echo " zero é um numero indivisível";
        }else{
         $resposta = $number / $number2; 
          echo "O resultado da divisão $resposta";
        };
      }
   };
    calculo($operacao,$number,$number2);

  ?>