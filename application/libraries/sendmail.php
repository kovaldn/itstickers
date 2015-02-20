<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

require_once './' . APPPATH . '/libraries/libs/autoload.php';

/**
 * Class Sendmailer - библиотека для отправки писем на email
 */
class Sendmail extends PHPMailer
{


    public function __construct()
    {

        $this->CharSet = 'UTF-8';
        $this->WordWrap = 80;
        $this->isHTML(true);
        $this->isSMTP();
        $this->Host = 'smtp.yandex.ru';
        $this->SMTPAuth = true;
        $this->SMTPSecure = 'ssl';
        $this->Port = 465;
        $this->Username = 'it-stikers@yandex.ru';
        $this->Password = '6008252913cesar';
        $this->FromName = 'Команда IT Stickers';

    }

    /**
     *  Метод для отправки письма
     *
     * @param $from - откуда отправлено письмо
     * @param $subject - тема письма
     * @param $email - Email, куда отправляется письмо
     * @param $name - имя, кому отправляется письмо
     * @param $message - тект письма
     */
    public function send($subject, $email, $name, $message, $file = null)
    {

        $this->From = $this->Username;
        $this->Subject = $subject;
        $this->addAddress($email, $name);
        $this->Body = $message;
        parent::send();

    }



}