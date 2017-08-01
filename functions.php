<?

// отправка email
function send_email($title, $from, $to, $text){
  $headers= "MIME-Version: 1.0\r\n";
  $headers  .= "Content-type: text/html; charset=windows-1251 \r\n";
  $headers .= "From: ".$from." <".$from.">\r\n";
  // $title = iconv('utf-8', 'windows-1251', $title);
  $title = '=?UTF-8?B?'.base64_encode($title).'?=';
  $text = iconv('utf-8', 'windows-1251', $text);
  if (mail($to, $title, $text, $headers)){
    return true;
  } else {
    return false;
  };
}

?>