<?php
if(!isset($_SESSION['id_user'])){
    header("location:index.php?page=login");
}
?>

<h1 class="text-4xl text-yellow-400  text-center font-bold">Your rooms</h1>
<!-- Container -->
<div class="h-full  mx-24 flex flex-wrap items-start justify-start rounded-tl grid-flow-col auto-cols-max gap-4 ">
  <?php
      if (!empty($rooms)) {
      foreach ($rooms as $room) {
  ?>
  <div class="w-96 h-60 rounded-lg flex-shrink-0 flex-grow bg-gray-400">
    <div class="mt-8 flex justify-center">
      <div>
          <p class="text-center text-4xl font-extrabold text-[#FE5401]"><?php echo $room['title']; ?></p>
          <p class="text-center text-2xl font-extrabold text-[#FE5401]"><ins>Membre :</ins></p>

      </div>  
    </div>
  </div>
<?php }}else{ ?>
  <p class="text-center text-2xl font-extrabold text-[#FE5401]">Aucune room trouve</p>
  <?php }?>
  
    
  </div>
</div>  