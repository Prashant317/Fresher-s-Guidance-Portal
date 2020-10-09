<?php 

require_once ('vendor/autoload.php');
use \Statickidz\GoogleTranslate;

$source = 'hi';
$target = 'en';
$text = $_POST['msg'];

$trans = new GoogleTranslate();
$result = $trans->translate($source, $target, $text);

echo $result;

?>