<?php

$abcalc_maps=array();
$maps=0;

function create_abcalc(){
  global $abcalc_maps,$maps;
  $mapc=count($abcalc_maps);
  $abcalc_maps[$mapc]=array();
  $maps=$mapc+1;
  return $mapc;
  }

function abcalc_get_map($mapid=0){
  global $maps,$abcalc_maps;
  if($maps<=$mapid)return NULL;
  return $abcalc_maps[$mapid];
  }

function init_abcalc_map($mapid=0, $map_depth=2, $default_return='abcr'){
  global $maps,$abcalc_maps;
  if($maps<=$mapid)return NULL;
  $abcalc_map=array();

  $arc=pow(4,$map_depth);
  $abcalc_map['abcalcs']=array();
  $abcalc_map['size']=$arc;
  

  for($i=0;$i<$arc;$i++){
    $abcalc_map['abcalcs'][]=$default_return;
    }
    
  $abcalc_maps[$mapid]=$abcalc_map;
  return TRUE;
  }

function abcalcs_set_abcalc($cname,$fid,$mapid=0){
  global $fmaps,$maps;

  if(!$maps)return NULL;
  if($mapid+1>$maps)$mapid=$maps-1;

  $fmaps[$mapid]['abcalcs'][$fid]=$cname;  

  return TRUE;
  }



?>