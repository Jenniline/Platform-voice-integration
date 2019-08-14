<?php 
namespace App\Http\Controllers;
use App\Services\audiotranscriptionService;

class audiofileController 
{ 
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(audiotranscriptionService $audiotranscription )
    {   //first the validation 

        $this->audiotranscription = $audiotranscription;
        /* $this->validate($request,['audioFile' => 'required|mimes:audio/mp3']);      
            $audioFileObj = $request->file('audioFile');*/


            //$audioFileObj -> move(storage_path('app/audio'),'tmp.mp3');
         $this->audiofile = __DIR__ . "/audio.webm";


           
           /* $contents = Storage::get('tmp.mp3');
            $path =Storage::disk('local')->getAdapter()->getPath; //to get the path
                    audiotranscriptionrequest($audiofile);*/

            
    }
    
    public function parseAudio(){
     $text = $this->audiotranscription->audiotranscription($this->audiofile);
        \Log::info(print_r($text,true));
        return response('Accepted',200);
    }
        
    
}

    
    // $Audiofile = $Audiofile.mp3;
    //first the validation 

   

    


    

    
   
