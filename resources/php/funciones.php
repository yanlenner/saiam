<?php 
  function query_r( $a,  $b){     
  	$c = pg_query($a, $b);
  	return pg_fetch_assoc($c);
  }
  function query_c( $a,  $b){
  	pg_query($a, $b);
  }
      function spar(int $b){//Función para saber si un número es par
      if($b % 2 == 0)
        return true;
      else
        return false;
    }
    function lenner(string $a){//Función para encriptar el usuario
      $sz = strlen($a);
      $vector;
      $b;
      $i;
      $cadena;
      $x;
      for($i=0; $i<$sz; $i++)
        $vector[$i]=ord($a[$i]);
      for($i=0; $i<$sz; $i++){
        $x=$vector[$i];
        if(spar($x)){
          $vector[$i]+=5;
        }
        else
          $vector[$i]+=1;
      }
      $cadena='';
      for($i=0; $i<$sz; $i++){
        $b[$i]=chr($vector[$i]);
        $cadena .=$b[$i];
      }
      return $cadena;
    }
?>