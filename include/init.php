<?php

$fmaps=array();

function create_fmap(){
  global $fmaps;
  $mapc=count($fmaps);
  $fmaps[$mapc]=array();
  return $mapc;
  }

function init_fmap($map_depth=2, $default_return='abcr'){
  $fmap=array();

  $arc=pow(4,$map_depth);
  for($i=0;$i<$arc;$i++){
    $fmap[]=$default_return;
    }
  return $fmap;
  }

function set_func($){
  
  }



?>