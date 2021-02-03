<?php
  function Fstrlen($input){
    return strlen($input);
  }

  function Fchr($input){
    return chr($input);
  }

  function Ford($input){
    return ord($input);
  }

  function Fcount_chars($input){
    return count_chars($input)[1];
  }

  function Fstr_shuffle($input){
    return str_shuffle($input);
  } 
  
  function Fstrrev($input){
    return strrev($input);
  }

  function Fctype_alnum($input){
    return ctype_alnum($input);
  }

  function Fctype_alpha($input){
    return ctype_alpha($input);
  }

  function Fctype_xdigit($input){
    return ctype_xdigit($input);
  }

  function Fctype_cntrl($input){
    return ctype_cntrl($input);
  }
  
  function Fctype_digit($input){
    return ctype_digit($input);
  }

  function Fctype_print($input){
    return ctype_print($input);
  }

  function Fctype_graph($input){
    return ctype_graph($input);
  }
?>

