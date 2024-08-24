<?php


//default return function
function abcr($abcore=NULL,$cmd_len=1,$ret_len=1){
  if(!$abcore)return NULL;
  $rval=abcore_read($cmd_len,$ret_len);
  abcore_step($ab_core,$cmd_len+$ret_len);
  return $rval;
  }

?>