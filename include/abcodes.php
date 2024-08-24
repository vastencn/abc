<?php

function abcodes_init($abcode_a){
  $abcode=array();
  
  $abcode['a']=abcode_clean($abcode_a);
  $abcode['b']=abcode_compliment($abcode_a);

  return $code;
  }

function abcode_clean($abcode){
  $newar=array();
  foreach($abcode as $quart){
    $newar[]=$quart & 0x3;
    }
  return $newar;
  }

function abcode_compliment($abcode_a){
  $abcode_b=$abcode_a;
  

  foreach($abcode_b as &$quart){
    $quart= ~$quart & 0x3;
    }

  return $abcode_b;
  }


?>