<?php
if(!isset($_SESSION['id_user'])){
    header("location:index.php?page=login");
}
?>

<!-- component -->
<div class="fixed w-full bg-white flex overflow-hidden" style="height: 200vh;"> 

  <!-- Sidebar -->
    <aside class="fixed h-full w-16 flex flex-col space-y-10 pt-20 items-center z-10	 justify-center bg-gray-800 text-white">

    <!-- Home -->
        <a href="<?= PATH ?>index.php?page=page1">
            <div class="h-10 w-10 flex items-center justify-center rounded-lg cursor-pointer hover:text-gray-800 hover:bg-white  hover:duration-300 hover:ease-linear focus:bg-white">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-yellow-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
              </svg>
            </div>
        </a>
        
        <!-- friend -->
        <a href="index.php?page=friend">
           <div class="h-10 w-10 flex items-center justify-center rounded-lg cursor-pointer hover:text-gray-800 hover:bg-white  hover:duration-300 hover:ease-linear focus:bg-white">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" /></svg>
        </div> 
        </a>

        <!-- Add friends -->
        <a href="<?= PATH ?>index.php?page=add_friend">
        <div class="h-10 w-10 flex items-center justify-center rounded-lg cursor-pointer hover:text-gray-800 hover:bg-white  hover:duration-300 hover:ease-linear focus:bg-white">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
            </svg>
        </div> 
        </a>

        <!-- Add room -->
        <a href="<?= PATH ?>index.php?page=add_room">
          <div class="h-10 w-10 flex items-center justify-center rounded-lg cursor-pointer hover:text-gray-800 hover:bg-white  hover:duration-300 hover:ease-linear focus:bg-white">
              <img src="<?= PATH ?>assets/image/room.png" alt="">
            </div>  
        </a>
        

        <!-- Configuration -->
        <a href="#">
        <div class="h-10 w-10 flex items-center justify-center rounded-lg cursor-pointer hover:text-gray-800 hover:bg-white  hover:duration-300 hover:ease-linear focus:bg-white">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
        </svg>
        </div>
        </a>
        

        <div class="h-10 w-10 flex items-center justify-center rounded-lg cursor-pointer hover:text-gray-800 hover:bg-white  hover:duration-300 hover:ease-linear focus:bg-white">
        
        <form action="index.php?page=page1" method="POST">
        <button type="submit" name="logout"><img src="<?= PATH ?>assets/image/logout.png" alt=""></button>
        </form>
        </div>

    </aside>

    <div class="w-full fixed h-full flex flex-col justify-between"  style="height: 200vh;">
    <!-- Header -->
    <header class="fixed h-16 w-full flex items-center justify-end px-5 space-x-10 bg-gray-800">
      <!-- Informação -->
      <div class="flex flex-shrink-0 items-center space-x-4 text-white">
        
        <!-- Texto -->
        <div class="flex flex-col items-end ">
          <!-- Nome -->
          <div class="text-md font-medium "><?php echo$_SESSION['username']; ?></div>
          <!-- Título -->
          <div class="text-sm font-regular">Utilisateur</div>
        </div>
        
        <!-- Foto -->
        <div class="h-10 w-10 rounded-full cursor-pointer bg-gray-200 border-2 border-blue-400"></div>
      </div>
    </header>
    

    
    <main class="max-w-full ml-34 h-full flex flex-col  relative overflow-y-hidden">
    <div class="flex mx-auto items-center justify-center shadow-lg mt-56 mx-8 ">
    <form class="w-full max-w-2xl bg-gray-100 rounded-lg px-4 pt-2" method="post" action="index.php?page=add_room">
      <div class="flex flex-wrap -mx-3 mb-6 justify-center ">
         <h2 class="px-4 pt-3 pb-2 text-gray-800 text-lg">Add a new room</h2>
         <div class="w-full md:w-full px-3 mb-2 mt-2">
            <textarea class="bg-gray-100 rounded border border-gray-400 leading-normal resize-none w-full h-20 py-2 px-3 font-medium placeholder-gray-700 focus:outline-none focus:bg-white" name="title" placeholder='Type Title' required></textarea>
         </div>
         <div class="flex">
            <div class="w-full md:w-full px-3 mb-2 mt-2">
                <input type="text"   placeholder="Search" class="bg-gray-100 rounded border border-gray-400 focus:outline-none border-b w-full pb-2 py-2 px-3 font-medium placeholder-gray-700" style="width: 35rem;">
            <div class="absolute max-h-40  z-10 mt-2 bg-white border border-gray-300 rounded-md shadow-lg  hidden"  id="dropdownContent">
         <?php
            if (!empty($amis)) {
            foreach ($amis as $ami) {
            ?>
                    <div class="p-2">
                        <label><input type="checkbox" name="selected_users[]" multiple value="<?php echo $ami['id_user']; ?>" class="mr-2"><?php echo $ami['username']; ?></label>
                    </div>
            <?php
            }
            } else {
                echo "amis indisponibles";
            }
            ?>
            
        </div>
         </div>
         <button type="button" onclick="toggleDropdown()">^_^</button>
         </div>

         <div class="w-full md:w-full flex justify-center py-2 items-start md:w-full px-3">
            <div class="-mr-1">  
               <button type='submit' name="addRoom" class="bg-blue-300 text-gray-700 font-medium py-1 px-4 border border-gray-400 rounded-lg tracking-wide mr-1 hover:bg-gray-100">Add Room</button>
            </div>
         </div>
      </form>
   </div>
</div>
    </main>
    </div>

</div>

<script>
    const searchInput = document.getElementById('searchInput');
    const dropdownContent = document.getElementById('dropdownContent');
    const checkboxes = document.querySelectorAll('input[type="checkbox"]');

    searchInput.addEventListener('input', filterOptions);

    checkboxes.forEach(checkbox => {
        checkbox.addEventListener('change', updateSelection);
    });

    function filterOptions() {
        const searchTerm = searchInput.value.toLowerCase();

        Array.from(dropdownContent.children).forEach(option => {
            const optionText = option.textContent.toLowerCase();
            option.style.display = optionText.includes(searchTerm) ? 'block' : 'none';
        });
    }

    function updateSelection() {
        const selectedOptions = Array.from(checkboxes)
            .filter(checkbox => checkbox.checked)
            .map(checkbox => checkbox.value);

        // Display the selected options (customize based on your needs)
        console.log('Selected Options:', selectedOptions);
    }
    function toggleDropdown() {
        var dropdown = document.getElementById('dropdownContent');
        dropdown.classList.toggle('hidden');
    }
    function toggle() {
        var dropdown = document.getElementById('dropdown');
        dropdown.classList.toggle('hidden');
    }
</script>