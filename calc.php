 <?php
    $operacao = $_POST["operacao"];

    $number = $_POST["number"];
    $number2 = $_POST["number2"];
    $resposta;


   function calculador($operacao,$number,$number2){
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
    calculador($operacao,$number,$number2);

  ?>