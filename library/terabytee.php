<?php
  function get_self(){
    $self = $_SERVER["PHP_SELF"];
    return ($self);
  }

  function encrypt($string) {
    return strtr(base64_encode($string), '+/=', '-_,');
  }

  function decrypt($string) {
    return base64_decode(strtr($string, '-_,', '+/='));
  }

  function url_encode($string){
    return urlencode(utf8_encode($string));
  }

  function url_decode($string){
    return utf8_decode(urldecode($string));
  }

?>
