<?php

$testo = "Tu dici che questo pezzotto, ovvero questa piccola funzioncina che ho fatto, dovrebbe essere sufficiente per applicare il bionic reading sul blog?";
$consentiti = explode(" ","0 1 2 3 4 5 6 7 8 9 A B C D E F G H I J K L M N O P Q R S T U V W X Y Z a b c d e f g h i j k l m n o p q r s t u v w x y z - _ '");

$wtesto = array();

// Divido il testo in array
$word = "";
for($i=0; $i<strlen($testo); $i++) {
   
   if(in_array($testo[$i], $consentiti)) {
      $word = $word.$testo[$i];
   } else {
      if ($word!="") {
         array_push($wtesto,$word);
         array_push($wtesto,$testo[$i]);
      } else
         array_push($wtesto,$testo[$i]);
      
      $word="";
   }
   
}

//Applico il bionic
for ($i=0; $i<sizeof($wtesto); $i++) {
   if (strlen($wtesto[$i])>1) {
      $oldword = $wtesto[$i];
      $size = strlen($oldword);
      $bioniclenght = round($size/2);
      
      $newword = "<b>";
      for ($y=0; $y<$size; $y++) {
         $newword = $newword.$oldword[$y];
         if (($y+1)==$bioniclenght)
            $newword = $newword."</b>";
      }
      
      $wtesto[$i]=$newword;
   }
}

foreach ($wtesto as $value) {
   echo $value;
}

?>