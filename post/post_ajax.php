<?php

$file = 'doa.php';

// $dataold = @readfile(($newfile));

$myfile = fopen($file, "r") or die("Unable to open file!");
$dataold =  fread($myfile,filesize($file));
fclose($myfile);

$old_replace = str_replace(array('[', ']'), '', $dataold);

$create_waktu = date('d F Y - H:i:s a', time());

$data['nama']       = $_POST['nama'];
// $data['email']      = $_POST['email'];
// $data['handphone']  = $_POST['handphone'];
$data['doa']        = $_POST['doa'];
// $data['hadir']      = $_POST['hadir'];
$data['datetime']   = $create_waktu;
$data['ip_address'] = $_SERVER['REMOTE_ADDR'];

$convjsn = json_encode($data);

$php_string  = '['.$convjsn.','.$old_replace.']';

$fp = fopen($file, 'w');
fwrite($fp, $php_string);

fclose($fp);

echo "<script type='text/javascript'>alert('Terimakasih ya om dan tante atas doanya 🙂 ');window.location='../#doa'</script>";

// var_dump(json_decode($dataold)); die();

?>
