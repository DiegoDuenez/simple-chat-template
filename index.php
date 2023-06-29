<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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
                    <textarea class="chat__input" placeholder="Escribe..." id="text"></textarea>
                    <!-- <input class="chat__input" placeholder="Escribe..." type="text" id="text"> -->
                    <button class="chat__button" id="sendButton">ENVIAR</button>
                    <!-- <button class="chat__button">IMG</button> -->
                </div>
            
            </div>
        </div>
        
    </div>
    

    <script src="js/index.js"></script>
    
    
</body>
</html>