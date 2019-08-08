<?php
require_once('./vendor/autoload.php');
//Namespace
use \LINE\LINEBot\HTTPClient\CurlHTTPClient;
use \LINE\LINEBot;
use \LINE\LINEBot\MessageBuilder\TextMessageBuilder;
$channel_token ='DYKKHgUhUFUOGn1tPbP1UGEJFV/Ww+MsAJ8liQVFG5RkZ6D/EryVeymFXbDpn+zciZiMIJ3mx0lAltZjwKX3mDu50NVNb5itvd7pP8w+pXzWogTAjgUVC1BiO8ibanzREjPMJ/GJZK14yTclSGs8/QdB04t89/1O/w1cDnyilFU=';
$channel_secret = 'c0236b5dc114d1e52688890efdd16b93';
//Get message from Line API
$content = file_get_contents('php://input');
$events = json_decode($content, true);
if (!is_null($events['events'])) {
//Loop through each event
foreach ($events['events'] as $event) {
//Line API send a lot of event type, we interested in message only.
    if ($event['type'] == 'message') {
        // Get replyToken
        $replyToken = $event['replyToken'];
        switch($event['message']['type']) {
            
            case 'text':
                // Reply message
                $respMessage = 'Hello, your message is '. $event['message']['text'];

            case 'image':
                $messageID = $event['message']['id'];
                $respMessage = 'Hello, your image ID is '. $messageID;
            break;
            default:
                $respMessage = 'Please send test or image only';
            break;
            }
            $httpClient = new CurlHTTPClient($channel_token);
            $bot = new LINEBot($httpClient, array('channelSecret' => $channel_secret));
            $textMessageBuilder = new TextMessageBuilder($respMessage);
            $response = $bot->replyMessage($replyToken, $textMessageBuilder);
        }
    }
}
echo 'OK';
echo 'HELLO AIC BOT';

