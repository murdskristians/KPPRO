<?php

require $_SERVER['DOCUMENT_ROOT'] . '/server/PHPMailer/src/Exception.php';
require $_SERVER['DOCUMENT_ROOT'] . '/server/PHPMailer/src/PHPMailer.php';
require $_SERVER['DOCUMENT_ROOT'] . '/server/PHPMailer/src/SMTP.php';
//include_once $_SERVER['DOCUMENT_ROOT'] . "/admin/server/db.php";

use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;


if (isset($_POST['contact_form'])) {
    contact_form();
}

function contact_form(): void
{
    $name = $_POST['contact_form'];
    $email = $_POST['email'];
    $product_id_url = $_POST['url'];
    $phone_nr = $_POST['phone'];
    $message = $_POST['message'];

    date_default_timezone_set('Europe/Riga');

    $date = date('Y-m-d H:i:s');

    $p_contact = strpos($product_id_url, "contacts");
//    $p_product = strpos($product_id_url, "product");
//    $product_id = substr($product_id_url, strpos($product_id_url, "&") + 4);
//    $product_id = intval($product_id);

//    $product_title = '';
//    if(is_int($product_id)){
//        $product_title_json = get_product_data_by_id($product_id);
//        $product_title = json_decode($product_title_json,true);
//        $product_title = $product_title['lv'];
//    }

    $first_row = "";
    $sender_text_add = "";

//    if ($p_contact !== false) {
//        $first_row = "Ziņa no kontaktformas: <br>";
//        $sender_text_add = "kontaktformas";
//    }

//    if ($p_product !== false) {
//        $first_row = "Produkts: " . $product_title. "<br>";
//        $sender_text_add = "produktu lapas";
//    }

    $message_2_send = $first_row . "<br>
            Vārds: " . $name . "  <br>
            E-pasts: " . $email . "  <br>
            Telefona Nr: " . $phone_nr . " <br> 
            Ziņa: " . $message;

    $subject = "Ziņa no kppro.lv kontaktformas";

//    $file = $_SERVER['DOCUMENT_ROOT'] . '/server/log_contact_form.txt';

    $content = "\n  " . $first_row .
        "\n  vārds: " . $name .
        "\n  e-pasts: " . $email .
        "\n  telefona Nr: " . $phone_nr .
        "\n  ziņa: " . $message .
        "\n  datums: " . $date .
        "\n ____________";

//    file_put_contents($file, $content, FILE_APPEND);

    if ($message != "" && $name != '' && $email != '' && $phone_nr != '') {

        $mail = new PHPMailer(true);

        try {

            $mail->SMTPDebug = 0;                                   // 1 vai 2 ar atkļūdošanu, ja epasti nesūtās, 0 bez atkļūdošanas
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
//            $mail->SMTPOptions = array(
//                'ssl' => array(
//                    'verify_peer' => false,
//                    'verify_peer_name' => false,
//                    'allow_self_signed' => true
//                )
//            );

            $mail->Username = 'notif.dnreply@gmail.com';
            $mail->Password = 'thse escg nckh kyrb';
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;

            $mail->setFrom('notif.dnreply@gmail.com', 'kppro.lv ziņa no kontaktformas');

            //Recipients
            $mail->addBCC('notif.dnreply@gmail.com');
            $mail->addBCC('emils.boreiko@gmail.com');
            $mail->addBCC('transport@kppro.eu');

            // Content
            $mail->isHTML(true);

            $mail->Subject = $subject;

            $mail->Body = $message_2_send;

            $mail->AltBody = $message_2_send;

            $mail->CharSet = 'UTF-8'; //Pievienoju kodejumu
            $mail->send();

            echo 'Email sent successfully.';

        } catch (Exception $e) {
            echo "Ziņu nevar nosūtīt. e-pasta kļūda: {$mail->ErrorInfo}";
        }

    }

    exit();

}

//function get_product_data_by_id($id)
//{
//    global $con;
//
//    $query = "SELECT * FROM products WHERE id = $id;";
//
//    $result = mysqli_query($con,$query);
//
//    $row = mysqli_fetch_assoc($result);
//
//    return $row['product_title'];
//}