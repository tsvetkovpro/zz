<?
// подключаем файл с функциями
include "functions.php";

// контактная форма
if (isset($_POST['send_form'])) {

  $name = $_POST['user_name'];
  $phone = $_POST['user_phone'];

  $title = 'Заявка с сайта ZберZайм';
  $from = 'kpkzberzaim@gmail.com';
  $to = 'kpkzberzaim@gmail.com';
  $text = '
  <u>
    <b>
      Внимание!
    </b>
      Поступила заявка с сайта ЗберЗайм
  </u>
  <br><br>
    //---------- начало сообщения ----------//
  <br><br>
    <b>Имя клиента: '.$name.'
    <br>
    Номер телефона для связи: <b>'.$phone.'</b>
  <br><br>
    //---------- конец сообщения ----------//
  ';

  $send_email = send_email($title, $from, $to, $text);

  if ($send_email) {
    echo 'success';
  } else {
    echo 'fail';
  }

}

?>