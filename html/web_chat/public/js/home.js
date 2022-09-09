function loadCurrentChat() {
    if (window.current_chat_id) {
       fetch(`/${window.current_chat_id}/get-chat`)
       .then(res=>res.json())
       .then(res => {
           if (res.status == 'success') {
              document.getElementById('chat-image').src = `https://ui-avatars.com/api/?name=${res.chat.name}&color=7F9CF5&background=0f0230`;
              document.getElementById('chat-name').innerHTML = res.chat.name;

           }
       })
       .catch(err => {
         console.error(err);
       })
    }
}

function changeChat(event, id) {
    document.querySelectorAll('.clearfix').forEach((item, i) => {
       item.classList.remove('active');
    });
    event.target.classList.add('active');
    window.current_chat_id = id;
}

loadCurrentChat();
setInterval(function () {
    loadCurrentChat();
}, 5000);
