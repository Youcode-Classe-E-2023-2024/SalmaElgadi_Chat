
    function sendMessage() {
        const messageText = document.getElementById('messageInput').value.trim();
        const roomIdInput = document.getElementById('roomId');
        const roomId = roomIdInput.value;
    
        if (messageText !== '') {
            fetch(`index.php?page=message&id=${id}`, {
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
                    fetchDataAndDisplay();                }
            })
            .catch(error => console.error('Error', error));
    
            document.getElementById('messageInput').value = '';
        }
    }
    // setInterval(()=>{yy()}, 5000)
    
    function getQueryVariable(variable) {
    var query = window.location.search.substring(1);
    var vars = query.split("&");
    for (var i=0;i<vars.length;i++) {
        var pair = vars[i].split("=");
        if (pair[0] == variable) {
        return pair[1];
        }
    } 
    // alert('Query Variable ' + variable + ' not found');
    }


    
    function fetchDataAndDisplay() {
        var id = getQueryVariable("id");

        fetch(`index.php?page=message&id=${id}`, {
            method: 'GET',
            headers: {
                'Content-Type': 'application/json',
            },    
        })
        .then(response => response.text().then(html => displayData(html))) 
        .catch(error => console.error('Error', error));
    }

    function displayData(messages) {
        console.log('Displaying data:', messages);

        document.getElementById('chatContainer').innerHTML = messages;
    }

    fetchDataAndDisplay();