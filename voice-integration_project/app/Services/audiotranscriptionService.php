<?php
namespace App\Services;

# Includes the autoloader for libraries installed with composer
//require __DIR__ . '/../vendor/autoload.php';

# Imports the Google Cloud client library
use Google\Cloud\Speech\V1\SpeechClient;
use Google\Cloud\Speech\V1\RecognitionAudio;
use Google\Cloud\Speech\V1\RecognitionConfig;
use Google\Cloud\Speech\V1\RecognitionConfig\AudioEncoding;

# The name of the audio file to transcribe
// $audioFile = __DIR__ . "/audio.webm";

class audiotranscriptionService
{  
            function audiotranscription($audiofile)
        {    
                # get contents of a file into a string
                $content = file_get_contents($audiofile);

                # set string as audio content
                $audio = (new RecognitionAudio())
                    ->setContent($content);

                # The audio file's encoding, sample rate and language
                $config = new RecognitionConfig([
                    'encoding' => AudioEncoding::LINEAR16,
                    'sample_rate_hertz' => 32000,
                    'language_code' => 'en-US'
                ]);

                # Instantiates a client
                $client = new SpeechClient();

                # Detects speech in the audio file
                $response = $client->recognize($config, $audio);

                # Print most likely transcription
                foreach ($response->getResults() as $result) {
                    $alternatives = $result->getAlternatives();
                    $mostLikely = $alternatives[0];
                    $transcript = $mostLikely->getTranscript();
                // printf('Transcript: %s' . PHP_EOL, $transcript);
                        $trans = [];
                        foreach ($audiofile as $key => $value){
                            $trans[] = $transcript;
                        }
                }

                $client->close();

                return $trans;
        }   
}
?>