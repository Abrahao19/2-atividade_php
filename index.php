<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade PHP</title>
</head>
<body>
    <pre>
     <form action="calc.php" method="post">
         <label for="number">Numeros:</label>
         <input type="number" name="number" >

        <label for="number2">Numeros2:</label>
         <input type="number" name="number2" >
         
         
        <select name="operacao" >
            <option value="+">Adição</option>
            <option value="-">Subtrair</option>
            <option value="*">Multiplicar</option>
            <option value="/">Dividir</option>
        </select>
         <input type="submit" value="Enviar">
         <input type="reset" value="limpar">
        
     </form>
     </pre>
</body>
</html>