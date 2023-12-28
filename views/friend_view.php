<?php
if(!isset($_SESSION['id_user'])){
    header("location:index.php?page=login");
}
?>
    
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
                <td class="p-3 px-5 flex justify-end">

                <form action="<?= PATH ?>index.php?page=friend" method="post">
                    <input type="hidden" name="myid" value="<?php echo $_SESSION['id_user']; ?>">
                    <input type="hidden" name="friendid" value="<?php echo $invitation['id_user'] ; ?>">
                    <button type="submit" name="accept" class="mr-3 text-sm bg-blue-500 hover:bg-blue-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Accepter</button>
                </form>

                <form action="<?= PATH ?>index.php?page=friend" method="post">
                    <input type="hidden" name="myid" value="<?php echo $_SESSION['id_user']; ?>">
                    <input type="hidden" name="friendid" value="<?php echo $invitation['id_user'] ; ?>">
                    <button type="submit" name="decline" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Refuser</button>
                </form> 
                </td>
            </tr>
            <?php
                }}else{?>
                <td class="text-red-700 p-3 px-5"><?php echo 'Aucune invitation trouvée';?></td>
                <?php }
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
                <?php
                if (!empty($amis)) {
                foreach ($amis as $ami) {
                ?>
                <tr class="border-b hover:bg-orange-100 bg-gray-100">
                    <td class="p-3 px-5"><?php echo $ami['username'] ;?></td>
                    <td class="p-3 px-5"><?php echo $ami['email'] ;?></td>
                    <td class="p-3 px-5 flex gap-5 justify-end">
                        <form action="<?= PATH ?>index.php?page=friend" method="post">
                            <input type="hidden" name="myid" value="<?php echo $_SESSION['id_user']; ?>">
                            <input type="hidden" name="friendid" value="<?php echo $ami['id_user'] ; ?>">
                            <button type="submit" name="supprimer" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">Supprimer</button>
                        </form>

                        <form action="<?= PATH ?>index.php?page=friend" method="post">
                            <input type="hidden" name="myid" value="<?php echo $_SESSION['id_user']; ?>">
                            <input type="hidden" name="friendid" value="<?php echo $ami['id_user'] ; ?>">
                            <button type="submit" name="blocker" class="text-sm bg-red-500 hover:bg-red-700 text-white py-1 px-2 rounded focus:outline-none focus:shadow-outline">blocker</button>
                        </form> 
                    </td>
                </tr>
                <?php
                }}else{?>
                <td class="text-red-700 p-3 px-5"><?php echo 'Aucun ami trouvé ';?></td>
                <?php }
            ?>
            </tbody>
        </table>
    </div>
    <!--  -->

    