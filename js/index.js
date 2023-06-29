
var input = document.getElementById("text")
var sendButton = document.getElementById("sendButton")

var messagesContainer = document.getElementById("messages")

input.addEventListener("keydown", function(event) {

    if (event.key === "Enter") {
        event.preventDefault();
        sendButton.click();
    
    }

});

sendButton.addEventListener("click", function(event){

    if(input.value.trim() != ""){


        messagesContainer.innerHTML += `
        <div class="chat__bubble">
            ${input.value}
        </div>
        `

        input.value =""
        input.focus()
        input.setSelectionRange(0,0);
        messagesContainer.scrollTop = messagesContainer.scrollHeight;

    }
    

})