<?php

   namespace App\Http\Controllers;
      
   $router->get('/audio-transcribe',['uses' => 'audiofileController@parseAudio']);
   