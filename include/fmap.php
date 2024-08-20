<?php

$fmaps=array();
$maps=0;

function create_fmap(){
  global $fmaps,$maps;
  $mapc=count($fmaps);
  $fmaps[$mapc]=array();
  $maps=$mapc+1;
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

function fmap_set_func($fname,$fid,$mapid=0){
  global $fmaps,$maps;

  if(!$maps)return NULL;
  if($mapid+1>$maps)$mapid=$maps-1;

  $fmaps[$mapid][$fid]=$fname;  

  return TRUE;
  }



?>