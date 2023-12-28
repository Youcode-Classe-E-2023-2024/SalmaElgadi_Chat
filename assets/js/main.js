  
    function sendMessage() {
        const messageText = document.getElementById('messageInput').value.trim();
        const roomIdInput = document.getElementById('roomId');
        const roomId = roomIdInput.value;
    
        if (messageText !== '') {
            fetch('index.php?page=chat', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json',
                },
                body: JSON.stringify({
                    roomId: roomId,
                    message: messageText,
                }),
            })
            .then(response => response.json())
            .then(response => {
                console.log('Server response:', response);
                if (response.success) {
                    displayData(response.messages);
                }
            })
            .catch(error => console.error('Error', error));
    
            document.getElementById('messageInput').value = '';
        }
    }
    
    //     function displayData(messages) {
    //     console.log('Displaying data:', messages);
    
    //     const rows = messages.map((message) => {
    //             return (`
    //             <div class="flex w-full mt-2 space-x-3 max-w-xs">
    // 				<div class="flex-shrink-0 h-10 w-10 rounded-full bg-gray-300"></div>
    // 				<div>
    // 					<div class="bg-gray-300 p-3 rounded-r-lg rounded-bl-lg">
    //                     <p class="text-sm">${message.text}</p>
    //                     </div>
    // 				</div>
    // 			</div>
    //         `);
    //     })
    //     document.getElementById('chatContainer').innerHTML = rows.join('');
    
    //     function ff(){
    //         var urlParams = new URLSearchParams(window.location.search);
    //         var id = urlParams.get('id');
    //         var url1 = `index.php?page=message&room=${id}`;
            
    //         fetch(url1, {
    //             method: 'POST',
    //         })
    //         .then((responseData) => {
    //           if(responseData){
    //                (responseData.json().then((data)=> {
    //                 console.log(data)
    //                })
    //             )}
    //         })
    //     }
    // }
    