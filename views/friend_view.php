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

        <!-- Theme -->
        <a href="#">
            <div class="h-10 w-10 flex items-center justify-center rounded-lg cursor-pointer hover:text-gray-800 hover:bg-white  hover:duration-300 hover:ease-linear focus:bg-white">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z" />
            </svg>
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
        <button type="submit" name="logout">Log out</button>
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
    

    
    <main class="max-w-full ml-34 h-full flex flex-col gap-5 py-24 relative overflow-y-hidden">
    <h1 class="text-4xl text-yellow-400 py-4 text-center font-bold">My Friends</h1>

    <!-- invitation -->
    <div class="pl-80 flex">
        <h1 class="text-3xl">
            Invitations
        </h1>
    </div>
    <div class="px-3 py-4 flex justify-center">
        <table class="w-2/3	 text-md bg-white shadow-md rounded mb-4">
            <tbody>
                <tr class="border-b">
                    <th class="text-left p-3 px-5">User Name</th>
                    <th class="text-left p-3 px-5">Email</th>
                    <th></th>
                </tr>
                <?php
                    if (!empty($invitations)) {
                    foreach ($invitations as $invitation) {
                ?>
                <tr class="border-b hover:bg-orange-100 bg-gray-100">
                    <td class="p-3 px-5"><?php echo $invitation['username'] ;?></td>
                    <td class="p-3 px-5"><?php echo $invitation['email'] ;?></td>
                    <td class="p-3 px-5 flex justify-end"><button type="button" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Accepter</button><button type="button" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Refuser</button></td>
                </tr>
                <?php
                    }}
                ?>
            </tbody>
        </table>
    </div>
    <!--  -->


    <!-- Mes amis -->
    <div class="pl-80 flex">
        <h1 class="text-3xl">
            Mes amis
        </h1>
    </div>
    <div class="px-3 py-4 flex justify-center">
        <table class="w-2/3	 text-md bg-white shadow-md rounded mb-4">
            <tbody>
                <tr class="border-b">
                    <th class="text-left p-3 px-5">User Name</th>
                    <th class="text-left p-3 px-5">Email</th>
                    <th></th>
                </tr>
                <tr class="border-b hover:bg-orange-100 bg-gray-100">
                    <td class="p-3 px-5"><input type="text" value="user.name" class="bg-transparent"></td>
                    <td class="p-3 px-5"><input type="text" value="user.email" class="bg-transparent"></td>
                    <td class="p-3 px-5 flex justify-end"><button type="button" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Supprimer</button></td>
                </tr>
            </tbody>
        </table>
    </div>
    <!--  -->

    </main>
    </div>

</div>

