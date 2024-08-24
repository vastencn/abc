<?php

function abcore_init($cmap=NULL,$codes=NULL){
  $acore=array();
  
  if($codes&&@count($codes)==2){
    $clen=count($codes[0]);
    $clen2=count($codes[1]);
    if($clen2<$clen)$clen=$clen2;
    }else{
    $codes=array(NULL,NULL);
    $clen=0;	
    }

  $abcore['calcs']=$cmap;
  $abcore['codes']=$codes;
  $abcore['codelen']=$clen;
  $abcore['codelast']=$clen-1;
  $abcore['pos']=0;
  $abcore['dir']=1;
  $abcore['side']=0;

  return $abcore;
  }

function abcore_switch_side(&$abcore){
  $abcore['side']=!$abcore['side'];
  return;
  }

function abcore_switch_dir(&$abcore){
  $abcore['dir']=0-$abcore['dir'];
  return;
  }

//yes, this is a very heavy pos move function (conditionals)
//in C I would make lenth an exponent of 2 and bitmask instead
function abcore_move_pos_rel(&$abcore,$pstep){
  $p=$abcore['pos']+$pstep;
  if($p<0)$p=0;
  if($p>$abcore['codelast'])$p=$abcore['codelast'];
  $abcore['pos']=$p;
  return;
  }

?>