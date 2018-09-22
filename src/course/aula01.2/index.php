<?php

  //if
  $number = 0;
  if($number == 0 ){
    echo "É true";
  }
  else{
    echo "É falso";
  }

  //array
  $alunos = array(
    array(
      "Nome" => "Felipe 0",
      "Idade" => 29,
      "Sexo" => "Masculino",
      "Nascimento" => "06/7777",
      array(
        "RG" => "000333888666",
        "CPF" => "000.333.888.666",
      )
    ),
    array(
        "Nome" => "Felipe 1",
        "Idade" => 28,
        "Sexo" => "Feminino",
        "Nome" => "06/7777",
    )
  );

  echo "<pre>";
    print_r($people); //read array
  echo "</pre>";

  //for
  for ($i=0; $i < ; $i++) {
    echo "<p>".$alunos[$i] ["Nome"]."<br>" ;
    echo $alunos[$i] ["Idade"]."<br></p>" ;
  }
