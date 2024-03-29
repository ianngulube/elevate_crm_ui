<?php
namespace App\Utilities;
namespace App\Http\Controllers\Admin;
use \stdClass;


class Functions {
    public function __construct() {
        return "construct function was initialized.";
    }

    public function sendSMS($msisdn,$textMessage,) {
        $credentials = "shelone8@gmail.com:4f7ef913-cd46-4e5f-b392-ed4461658b3f";

        $url = "https://www.zoomconnect.com/app/api/rest/v1/sms/send.json";

        $data = new stdClass();
        $data->message = $textMessage;
        $data->recipientNumber = $msisdn;

        $data_string = json_encode($data);

        $result = file_get_contents($url, null, stream_context_create(array(
            'http' => array(
                'method'           => 'POST',
                'header'           => "Content-type: application/json\r\n".
                                      "Connection: close\r\n" .
                                      "Content-length: " . strlen($data_string) . "\r\n" .
                                      "Authorization: Basic " . base64_encode($credentials) . "\r\n",
                'content'          => $data_string,
            ),
        )));

        if ($result) {


        return $result;
        } else {
            return "404";
        }
    }


}
