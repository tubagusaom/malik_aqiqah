<?php
  function get_self(){
    $self = $_SERVER["PHP_SELF"];
    return ($self);
  }

  function base64_encode_image ($filename=string,$filetype=string,$filepath=string) {

    $fileimg = $filepath.$filename;

    if ($fileimg) {
        $imgbinary = fread(fopen($fileimg, "r"), filesize($fileimg));
        return 'data:image/' . $filetype . ';base64,' . base64_encode($imgbinary);
    }

  }

  // function base64_encode_image ($filename=string,$filetype=string,$filepath=string) {

  //   // $path = 'assets/img/foto/malik-4.jpeg';
  //   // $img_path = 'assets/img/foto/malik-4.jpeg';
                
  //   $image              = ($filename);
  //   $theme_image        = ($filepath.$image);
  //   $bin_string         = file_get_contents("$theme_image"); 
  //   $theme_image_enc    = base64_encode($bin_string); 

  //   $WIDTH      = 400; // The size of your new image
  //   $HEIGHT     = 300;  // The size of your new image
  //   $QUALITY    = 100; //The quality of your new image
  //   $org_w      = 850;
  //   $org_h      = 660;

  //   $theme_image_little     = imagecreatefromstring(base64_decode($theme_image_enc));
  //   $image_little           = imagecreatetruecolor($WIDTH, $HEIGHT);
  //   imagecopyresampled($image_little, $theme_image_little, 0, 0, 0, 0, $WIDTH, $HEIGHT, $org_w, $org_h);
  //   ob_start();
  //   imagepng($image_little);
  //   $contents =  ob_get_contents();
  //   ob_end_clean();

  //   // $theme_image_enc_little = base64_encode($contents);
  //   return $theme_image_enc_little = base64_encode($contents);
  //   // var_dump($theme_image_enc);
  // }

  function base64_encode_image_size ($filename=string) {

    $fileimg = $filename;

    $size_info1 = getimagesize($fileimg);

    $data       = file_get_contents($fileimg);
    $size_info2 = getimagesizefromstring($data);

    return $size_info2;
  }

  function pregmatchall ($fileimg) {
    $html = '<img src="'.$fileimg.'" style="width:100%">';

    preg_match_all('/<img.*?src=[\'"](.*?)[\'"].*?>/i', $html, $matches);

    $elements = $matches[1];
    // var_dump($matches);
    return $elements;
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
