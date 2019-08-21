# Platform voice integration project 
     
This project that is geared at providing an additional source of data collection to the Ushahidi platform.  
Presently the data sources for the Ushahidi platform are Email,FrontlineSMS,Nexmo,Twilio,Twitter,SMSSync.The voice application has the feature of transcribing speech to text for users viewing and choice of editing. 

## Motivation 
The project came about as a suggestion from Ushahidi users. Suggestions came in mentioning  that it will be good to also include voice as a data source. 
 Reasons being because it is easier for those of them that are not very educated to use without any trouble,It is instant that is the message can be sent at the spot without any elaborate preparation.
 
## Build status 
Currently the work done on the project has been   
    • The creation of the project  
    • creating the routes and controllers for the project  
    • Adding the Google cloud speech-to-text to the application and testing it using short audio files.  
    
 ## Coding Styles and Conventions
* The coding Standards being used here are those used on the  Ushahidi platform which are found here https://app.gitbook.com/@ushahidi/s/platform-developer-documentation/getting-started/development-process/coding-standards   
* Ushahidi uses PSR2 coding style. PSR2 codong style guide can be found here https://www.php-fig.org/psr/psr-2/

 ## Tech/framework used
Built with
* PHP
* Laravel/Lumen

  ## Features
The voice application will have the features of        
    • The user calls to Twilio      
    • The user hears a message that they can leave a message    
    • The user leaves a message     
    • The Voice integration Application gets a message through a http-request      
    • The voice Integration Application receives the audio and Parse it into text using the Google cloud speech-to-text Library that has been inserted into the application.     
    • Once the post is successfully submitted,the user hears a message in their phone.     
    
 ## Installation
To setup the development environment for the project  
    •  clone the project with git clone url to the project.    
    • cd into the voice integration project    
    • run composer install    
    • If you want to test the application, start a local dev-server with php-S localhost:8000 -t public     	

    
    
   ## API Reference
* Google cloud speech-to-text which is used to transcribe the voice message by the receiver to text https://cloud.google.com/speech-to-text/  
* The Twilio Voice API https://www.twilio.com/voice

    ## Contribute
If you are interested in contributing to the project  .     
    • Firstly have php environment and Laravel development environment    
    • Setup the Ushahidi development environment from this link https://docs.ushahidi.com/platform-developer-documentation/getting-started/setting-up-your-development-environment     
    • Clone and  fork the project.
  
  ## Authors
  * Jenniline Ebai - initial work 
  
  
   
      
