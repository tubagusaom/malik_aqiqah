<?php
  function get_self(){
    $self = $_SERVER["PHP_SELF"];
    return ($self);
  }

  function b64image($url){
    $b64image = base64_encode(file_get_contents('assets/img/foto/'.$url));
    return $b64image;
  }

  function base64_encode_image ($filename=string,$filetype=string) {

    $fileimg = 'assets/img/foto/'.$filename;

    if ($fileimg) {
        $imgbinary = fread(fopen($fileimg, "r"), filesize($fileimg));
        return 'data:image/' . $filetype . ';base64,' . base64_encode($imgbinary);
    }
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
