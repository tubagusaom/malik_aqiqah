<?php
  function get_self(){
    $self = $_SERVER["PHP_SELF"];
    return ($self);
  }

  function base64_encode_image ($filename=string,$filetype=string) {

    $fileimg = 'assets/img/foto/'.$filename;

    if ($fileimg) {
        $imgbinary = fread(fopen($fileimg, "r"), filesize($fileimg));
        return 'data:image/' . $filetype . ';base64,' . base64_encode($imgbinary);
    }
  }

  function base64_encode_image_size ($filename=string) {

    $fileimg = 'assets/img/foto/'.$filename;

    $size_info1 = getimagesize($fileimg);

    $data       = file_get_contents($fileimg);
    $size_info2 = getimagesizefromstring($data);

    return $size_info2;
  }

  function loadImage ($fileimg) {
    $file = 'assets/img/foto/'.$fileimg;

    $data = getimagesize($file);
        die(var_export($data));
    switch($data["mime"]){
        case "image/jpeg":
            $im = imagecreatefromjpeg($file);
            break;
        case "image/png":
            $im = imagecreatefrompng($file);
            break;
        default:
            throw new Exception('Img Type not managed');
    }

    return $im;
  }

  // function resizeImage($filename){
  //   $ret = base64_encode(file_get_contents($filename));
  //   return $ret;
  // }

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
