<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
  <?php
  //ativiade 1
 $nomes = ["brendon "," caetano","Marcos", "joao"];
 echo "<pre>";
 print_r($nomes);
 
 


  //ativade para deixar automaticamente
// dentro do for count($nomes);

  for($i=0; $i < count($nomes) ; $i++) { 
    echo "<pre>";
    print_r ($nomes[$i]);  
  }


  
  ?>
</body>
</html>
