<?php
namespace App\Http\Controllers;
use BotMan\BotMan\BotMan;
use Illuminate\Http\Request;
use BotMan\BotMan\Messages\Incoming\Answer;
class BotManController extends Controller
{
    /**
     * Handle the incoming messages from the Botman chatbot.
     */
    public function handle()
    {
     $botman = app('botman');
        
     $botman->hears('{message}', function($botman, $message) {
      $botman->reply('Halo! Saya adalah chatbot yang dapat membantu Anda dengan diagnosis wajah. Mari kita mulai!');

            $message = strtolower($message);
      if ($message == 'hi') {
       $this->askName($botman);
      } else if ($message == 'siapa nama kamu?' || $message == 'siapa nama kamu' || $message == 'siapa nama anda?' || $message == 'siapa nama anda' || $message == 'nama kamu siapa?' || $message == 'nama kamu siapa' || $message == 'nama anda siapa?' || $message == 'nama anda siapa' || $message == 'kamu siapa?' || $message == 'kamu siapa') {
       $this->askName($botman);
      } else {
       $botman->reply('Maaf, saya tidak mengerti apa yang kamu katakan. Silakan ulangi dengan mengatakan "hi".');
      }
     
     });
     $botman->listen();
    }
   
    
    public function askName($botman)
    {
     $botman->ask('Siapa nama kamu?', function(Answer $answer, $conversation) {
      $name = $answer->getText();
      $this->say('Senang bertemu dengan mu, ' . $name);
      $conversation->ask('Apa keluhan anda.', function(Answer $answer, $conversation){
       $disease = $answer->getText();
       if (strpos($disease, 'jerawat') !== false) {
        $conversation->say('Oh, jerawat ya? Berikut adalah beberapa saran untuk mengatasi jerawat:');
        $conversation->say('1. Jaga kebersihan wajah dengan mencuci wajah dua kali sehari.<br>' .
    '2. Gunakan produk perawatan wajah yang mengandung vitamin C.<br>' . 
    '3. Hindari memencet atau menggaruk jerawat.<br>' . 
    '4. Jika jerawat parah, pertimbangkan untuk berkonsultasi dengan dokter kulit.');
    $conversation->say('Semoga saran ini bermanfaat. Silakan gunakan aplikasi kami untuk mendiagnosa lebih lanjut!');
       }
       elseif (stripos($disease, 'kemerahan') !== false) {
        $conversation->say('Kemerahan pada wajah bisa disebabkan oleh berbagai faktor. Berikut adalah beberapa saran:');
        $conversation->say('1. Hindari produk yang mengandung bahan iritan.<br>' .
            '2. Gunakan pelembap yang menenangkan.<br>' . 
            '3. Jika kemerahan berlanjut, sebaiknya konsultasikan dengan dokter.');
            $conversation->say('Semoga saran ini bermanfaat. Silakan gunakan aplikasi kami untuk mendiagnosa lebih lanjut!');
    } elseif (stripos($disease, 'kering') !== false) {
        $conversation->say('Kulit kering bisa sangat tidak nyaman. Berikut adalah beberapa saran:');
        $conversation->say('1. Gunakan pelembap yang cocok untuk kulit kering.<br>' .
            '2. Hindari mencuci wajah dengan air panas.<br>' . 
            '3. Pertimbangkan untuk menggunakan humidifier di rumah.');
            $conversation->say('Semoga saran ini bermanfaat. Silakan gunakan aplikasi kami untuk mendiagnosa lebih lanjut!');
    }elseif (stripos($disease, 'gatal') !== false) {
        $conversation->say('Gatal pada wajah bisa sangat mengganggu. Berikut adalah beberapa saran:');
        $conversation->say('1. Hindari menggaruk area yang gatal.<br>' .
            '2. Gunakan krim atau salep yang menenangkan.<br>' . 
            '3. Jika gatal berlanjut, sebaiknya konsultasikan dengan dokter.');
            $conversation->say('Semoga saran ini bermanfaat. Silakan gunakan aplikasi kami untuk mendiagnosa lebih lanjut!');
    } elseif (stripos($disease, 'flek hitam') !== false) {
        $conversation->say('Flek hitam bisa disebabkan oleh paparan sinar matahari. Berikut adalah beberapa saran:');
        $conversation->say('1. Gunakan tabir surya setiap hari.<br>' .
            '2. Pertimbangkan untuk menggunakan produk yang mengandung bahan pencerah kulit.<br>' . 
            '3. Jika flek hitam berlanjut, sebaiknya konsultasikan dengan dokter.');
            $conversation->say('Semoga saran ini bermanfaat. Silakan gunakan aplikasi kami untuk mendiagnosa lebih lanjut!');
    } else {
        $conversation->say('Saya tidak memiliki saran khusus untuk keluhan tersebut. Silakan anda menggunakan aplikasi kami untuk mendiagnosa lebih lanjut. Atau konsultasikan dengan dokter untuk diagnosis yang lebih tepat.');
    }
      });
     });
    }
}