<?php
if (!isset($_SESSION['id_user'])) {
    header("location:index.php?page=login");
}

?>

<div class="flex flex-col items-center justify-center w-full h-screen text-gray-800 p-5">
    
    <!-- Component Start -->
    <div class="flex flex-col flex-grow w-full max-w-xl shadow-xl  rounded-lg overflow-hidden">
    <div class="flex flex-col flex-grow h-0 p-2 overflow-auto">
    <div class="fixed " style="width: 35rem;">
        <div class="py-2 rounded-md px-3 flex flex-row justify-between bg-purple-200 items-center">

                <!-- Room name -->
                <div class="flex items-center">
                    <div>
                        <img class="w-10 h-10 rounded-full" src="<?= PATH ?>assets/image/22072231_6563382.jpg" />
                    </div>
                    <div class="ml-4">
                        <?php
                        foreach ($rooms as $room) {
                        ?>
                            <p class="text-grey-darkest">
                                <?php echo $room['title']; ?>
                            </p>
                            <input type="hidden" id="roomId" value="<?php echo $room['id_room']; ?>" >
                        <?php
                        }
                        ?>
                    </div>
                </div>
                <!--  -->
        </div>
    </div>

    <div id="chatContainer">

    </div>
        <?php
        foreach ($messages as $message) {
        ?>

            <div class="flex w-full mt-2 space-x-3 max-w-xs">
				<div class="flex-shrink-0 h-10 w-10 rounded-full bg-gray-300"></div>
				<div>
					<div class="bg-gray-300 p-3 rounded-r-lg rounded-bl-lg">
						<p class="text-sm"><?php echo $message['text']; ?></p>
					</div>
				</div>
			</div>
        <?php
        }
        ?>

        <!-- inputs -->
        <div class="bg-purple-100  flex content-end	 gap-2 w-full  p-4">
            <input id="messageInput" class="flex items-center h-10 w-3/4 rounded py-1 px-3 text-sm" type="text" placeholder="Type your message…">
            <div class="-mr-1 ">
                <button id="sendMessageButton" class="bg-blue-200 text-gray-700 font-medium py-2 px-3 border border-gray-400 rounded-lg tracking-wide mr-1 hover:bg-gray-100" onclick="sendMessage()">Envoyer</button>
            </div>
        </div>

        <!--  -->
    </div>

    <!-- Component End  -->

</div>
</div>

<script>
    
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


</script>
