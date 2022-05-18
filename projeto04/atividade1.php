<?php
   $inteiro = array();
   $par = array();
   $impar = array();

   $i=0;
      while($i<=9)
      {
          $inteiro[$i] = random_int(1,100);
          

          if($inteiro[$i] % 2 == 0){
            $par[]=$inteiro[$i];
            
       } else {
            $impar[]=$inteiro[$i];
           
       }
       $i++; }
       echo "<hr> Numeros Inteiros </hr>";
       print_r($inteiro);
       echo "<hr>Numeros PAR :</hr>";
       print_r($par);
       echo"<hr>Numeros impar  :</hr>";
       print_r($impar);

      

?>