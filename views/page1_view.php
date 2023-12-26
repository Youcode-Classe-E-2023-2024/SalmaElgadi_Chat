<?php
if(!isset($_SESSION['id_user'])){
    header("location:index.php?page=login");
}
?>

<h1 class="text-4xl text-yellow-400  text-center font-bold">Your rooms</h1>
<!-- Container -->
<div class="h-full  mx-24 flex flex-wrap items-start justify-start rounded-tl grid-flow-col auto-cols-max gap-4 ">
  <div class="w-96 h-60 rounded-lg flex-shrink-0 flex-grow bg-gray-400">

  </div>
  
  <div class="w-96 h-60 rounded-lg flex-shrink-0 flex-grow bg-gray-400">
    
  </div>
</div>  