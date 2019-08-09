<?php
require_once('./vendor/autoload.php');
//Namespace
use \LINE\LINEBot\HTTPClient\CurlHTTPClient;
use \LINE\LINEBot;
use \LINE\LINEBot\MessageBuilder\TextMessageBuilder;
use \LINE\LINEBot\MessageBuilder\ImageMessageBuilder;
use \GeniusTS\PrayerTimes\Prayer;
use \GeniusTS\PrayerTimes\Coordinates;


    //$prayer = new Prayer(new Coordinates($longitude, $latitude));
    // Or
    $prayer = new Prayer();
    $prayer->setCoordinates(100.4786648,6.994023);

    // Return an \GeniusTS\PrayerTimes\Times instance
    $times = $prayer->times('2019-8-9');
    $times->setTimeZone(+7);
    echo $times->fajr->format('h:i a');
    echo $times->sunrise->format('h:i a');
    echo $times->duhr->format('h:i a');
    echo $times->asr->format('h:i a');
    echo $times->maghrib->format('h:i a');
    echo $times->isha->format('h:i a');


$channel_token ='DYKKHgUhUFUOGn1tPbP1UGEJFV/Ww+MsAJ8liQVFG5RkZ6D/EryVeymFXbDpn+zciZiMIJ3mx0lAltZjwKX3mDu50NVNb5itvd7pP8w+pXzWogTAjgUVC1BiO8ibanzREjPMJ/GJZK14yTclSGs8/QdB04t89/1O/w1cDnyilFU=';
$channel_secret = 'c0236b5dc114d1e52688890efdd16b93';
//Get message from Line API
$content = file_get_contents('php://input');
$events = json_decode($content, true);
if (!is_null($events['events'])) {
//Loop through each event
foreach ($events['events'] as $event) {
//Line API send a lot of event type, we interested in message only.
    $replyToken = $event['replyToken'];
    //Image
    $originalContentUrl ='https://cdn.shopify.com/s/files/1/1217/6360/products/Shinkansen_Tokaido_ShinFuji_001_1e44e709-ea47-41ac-91e4-89b2b5eb193a_grande.jpg?v=1489641827';    
    $previewImageUrl ='https://cdn.shopify.com/s/files/1/1217/6360/products/Shinkansen_Tokaido_ShinFuji_001_1e44e709-ea47-41ac-91e4-89b2b5eb193a_grande.jpg?v=1489641827';
    $httpClient = new CurlHTTPClient($channel_token);
    $bot = new LINEBot($httpClient, array('channelSecret' => $channel_secret));
    $textMessageBuilder = new ImageMessageBuilder($originalContentUrl, $previewImageUrl);
    $response = $bot->replyMessage($replyToken, $textMessageBuilder);

    //$prayer = new Prayer(new Coordinates($longitude, $latitude));
    // Or
    $prayer = new Prayer();
    $prayer->setCoordinates($longitude, $latitude);

    // Return an \GeniusTS\PrayerTimes\Times instance
    $times = $prayer->times('2017-5-9');
    $times->setTimeZone(+3);
    //echo $times->fajr->format('h:i a');


/*

if ($event['type'] == 'message') {
        // Get replyToken
        $replyToken = $event['replyToken'];
        $ask = $event['message']['text'];

        switch(strtolower($ask)) {
            case 'm':
            $respMessage = 'What sup man. Go away!';
            break;
            case 'f':
            $respMessage = 'Love you lady.';
            break;
            default:
            $respMessage = 'What is your sex? M or F';
            break;
        }
        
        
      */  
        
        
        
        
        
        
        //---------------------------`[บ้านๆ ]
        /*
        
        switch($event['message']['type']) {
            case 'location':
            $address = $event['message']['address'];
            //            Reply message
            $respMessage = 'Hello, your address is '. $address;
            break;
            case 'audio':
            $messageID = $event['message']['id'];
            //            Create audio file on server.
            $fileID = $event['message']['id'];
            $response = $bot->getMessageContent($fileID);
            $fileName = 'linebot.m4a';
            $file = fopen($fileName, 'w');
            fwrite($file, $response->getRawBody());
            //            Reply message
            $respMessage = 'Hello, your audio ID is '. $messageID;
            break;
            case 'video':
            $messageID = $event['message']['id'];
            //Create video file on server.
            $fileID = $event['message']['id'];
            $response = $bot->getMessageContent($fileID);
            $fileName = 'linebot.mp4';
            $file = fopen($fileName, 'w');
            fwrite($file, $response->getRawBody());
            //Reply message
            $respMessage = 'Hello, your video ID is '. $messageID;
            break;
            case 'sticker':
            $messageID = $event['message']['packageId'];
            //Reply message
            $respMessage = 'Hello, your Sticker Package ID is '. $messageID;
            break;
            case 'text':
                // Reply message
                $respMessage = 'Hello, your message is '. $event['message']['text'];
            break;
            case 'image':
                $messageID = $event['message']['id'];
                $respMessage = 'Hello, your image ID is '. $messageID;
            break;
            default:
                $respMessage = 'Please send text or image or Sticker';
            break;
            }
            */
            /*
            $httpClient = new CurlHTTPClient($channel_token);
            $bot = new LINEBot($httpClient, array('channelSecret' => $channel_secret));
            $textMessageBuilder = new TextMessageBuilder($respMessage);
            $response = $bot->replyMessage($replyToken, $textMessageBuilder);

            */
        //}
    }
}
echo 'OK';
echo 'HELLO AIC BOT';

