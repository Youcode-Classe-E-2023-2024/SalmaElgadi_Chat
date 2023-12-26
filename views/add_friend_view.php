<?php
if(!isset($_SESSION['id_user'])){
    header("location:index.php?page=login");
}
?>


    <h1 class="text-4xl text-yellow-400 py-4 text-center font-bold">Add Friends</h1>

    <div class=" m-4 flex flex-wrap gap-10 items-start justify-start rounded-tl grid-flow-col ">
        
        <!-- search friends -->
        <div class="flex w-full flex justify-center mx-10 rounded bg-white">
            <input class=" w-1/2 pl-20 border-none bg-gray-100 px-4 py-1 text-gray-700 outline-none focus:outline-none " type="search" id="searchInput" placeholder="Search..." />
            <button type="submit" class="m-2 rounded bg-blue-600 px-4 py-2 text-white">
                <svg class="fill-current h-6 w-6" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="512px" height="512px">
                <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z" />
                </svg>
            </button>
        </div>
        <!--  -->

        <!-- profiles -->
        <?php
            if (!empty($users)) {
            foreach ($users as $user) {
        ?>
        <section class="w-96 mx-auto bg-[#20354b] rounded-2xl px-8 ml-20 flex flex-col justify-center py-6 shadow-lg">
            <div class="flex items-center justify-between">
                <span class="text-emerald-400">
                    <form action="index.php?page=add_friend" method="post">
                        <input type="hidden" name="myid" value="<?php echo $_SESSION['id_user']; ?>">
                        <input type="hidden" name="friendid" value="<?php echo $user['id_user']; ?>">
                        <button class="py-2 px-4 bg-blue-500 text-white font-semibold rounded-lg shadow-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-400 focus:ring-opacity-75" name="addfriend">
                            add 
                        </button>
                    </form>
                </span>
            </div>

            <div class="mt-6 w-fit mx-auto">
                <img src="https://api.lorem.space/image/face?w=120&h=120&hash=bart89fe" class="rounded-full w-28 " alt="profile picture" srcset="">
            </div>

            <div class="mt-8 ">
                <h2 class="text-yellow-400 font-bold text-2xl tracking-wide username"><?php echo $user['username']; ?></h2>
            </div>
        </section>
        <?php
            }}
        ?>
        
        <!--  -->

    
<script>
    const searchInput = document.getElementById('searchInput');
searchInput.addEventListener('input', filterOptions);

function filterOptions() {
    const searchTerm = searchInput.value.toLowerCase();

    document.querySelectorAll('.username').forEach(option => {
        const optionText = option.textContent.toLowerCase();
        option.closest('section').style.display = optionText.includes(searchTerm) ? 'block' : 'none';
    });
}

</script>

