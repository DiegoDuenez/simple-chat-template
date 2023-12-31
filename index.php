<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.2.0/css/all.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/root.css">
    <link rel="stylesheet" href="css/index.css">

    <title>Simple Chat Template</title>

</head>
<body>

    <div class="container">

        <div class="chat">
            <div class="chat__header">
                CHAT
            </div>
            <div class="chat__messages" id="messages">
                <div class="chat__bubble chat__bubble--gray">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatum, amet, optio in dolores atque ea minus ab cupiditate, beatae eius dignissimos tempora architecto sit recusandae enim debitis qui deserunt molestiae!
                </div>
                
            </div>
            <div class="chat__form">
                <div class="chat__form-bg">

                    <textarea class="chat__input" placeholder="Message..." id="text"></textarea>
                    <button title="Stickers" class="chat__button chat__button--transparent" id="stickerButton"><i class="fa-solid fa-face-smile"></i></button>
                    <button title="Attachment" class="chat__button chat__button--transparent" id="imageButton"><i class="fa-solid fa-paperclip"></i></button>
                    <button title="Voice Message" class="chat__button chat__button--transparent" id="microphoneButton"><i class="fa-solid fa-microphone"></i></button>
                    <button title="Camera" class="chat__button chat__button--transparent" id="cameraButton"><i class="fa-solid fa-camera"></i></button>
                    <button title="Send Message" class="chat__button" id="sendButton"><i class="fa-solid fa-paper-plane-top"></i></button>

                </div>
            
            </div>
        </div>
        
    </div>
    

    <script src="js/index.js"></script>
    
    
</body>
</html>