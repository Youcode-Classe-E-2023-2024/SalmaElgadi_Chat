<?php
if(!isset($_SESSION['id_user'])){
    header("location:index.php?page=login");
}
?>

<div class="flex justify-center">

<div class=" h-screen">
<div class="flex border border-grey rounded shadow-lg w-full h-full">
<!-- Right -->
<div class="w-full border flex flex-col">

<!-- Header -->
<div class="py-2 px-3 bg-grey-lighter flex flex-row justify-between items-center">
    <div class="flex items-center">
        <div>
            <img class="w-10 h-10 rounded-full" src="<?= PATH ?>assets/image/22072231_6563382.jpg"/>
        </div>
        <div class="ml-4">
            <p class="text-grey-darkest">
                Room name
            </p>
            <p class="text-grey-darker text-xs mt-1">
                Members
            </p>
        </div>
    </div>
</div>

<!-- Messages -->
<div class="flex-1 overflow-auto" style="background-color: #DAD3CC">
    <div class="py-2 px-3">

        <div class="flex justify-center mb-4">
            <div class="rounded py-2 px-4" style="background-color: #FCF4CB">
                <p class="text-xs">
                    Messages to this chat and calls are now secured with end-to-end encryption. Tap for more info.
                </p>
            </div>
        </div>

        <div class="flex mb-2">
            <div class="rounded py-2 px-3" style="background-color: #F2F2F2">
                <p class="text-sm text-teal">
                    Sylverter Stallone
                </p>
                <p class="text-sm mt-1">
                    Hi everyone! Glad you could join! I am making a new movie.
                </p>
                <p class="text-right text-xs text-grey-dark mt-1">
                    12:45 pm
                </p>
            </div>
        </div>

        <div class="flex mb-2">
            <div class="rounded py-2 px-3" style="background-color: #F2F2F2">
                <p class="text-sm text-purple">
                    Tom Cruise
                </p>
                <p class="text-sm mt-1">
                    Hi all! I have one question for the movie
                </p>
                <p class="text-right text-xs text-grey-dark mt-1">
                    12:45 pm
                </p>
            </div>
        </div>

        <div class="flex mb-2">
            <div class="rounded py-2 px-3" style="background-color: #F2F2F2">
                <p class="text-sm text-orange">
                    Harrison Ford
                </p>
                <p class="text-sm mt-1">
                    Again?
                </p>
                <p class="text-right text-xs text-grey-dark mt-1">
                    12:45 pm
                </p>
            </div>
        </div>

        <div class="flex mb-2">
            <div class="rounded py-2 px-3" style="background-color: #F2F2F2">
                <p class="text-sm text-orange">
                    Russell Crowe
                </p>
                <p class="text-sm mt-1">
                    Is Andrés coming for this one?
                </p>
                <p class="text-right text-xs text-grey-dark mt-1">
                    12:45 pm
                </p>
            </div>
        </div>

        <div class="flex mb-2">
            <div class="rounded py-2 px-3" style="background-color: #F2F2F2">
                <p class="text-sm text-teal">
                    Sylverter Stallone
                </p>
                <p class="text-sm mt-1">
                    He is. Just invited him to join.
                </p>
                <p class="text-right text-xs text-grey-dark mt-1">
                    12:45 pm
                </p>
            </div>
        </div>

        <div class="flex justify-end mb-2">
            <div class="rounded py-2 px-3" style="background-color: #E2F7CB">
                <p class="text-sm mt-1">
                    Hi guys.
                </p>
                <p class="text-right text-xs text-grey-dark mt-1">
                    12:45 pm
                </p>
            </div>
        </div>

        <div class="flex justify-end mb-2">
            <div class="rounded py-2 px-3" style="background-color: #E2F7CB">
                <p class="text-sm mt-1">
                    Count me in
                </p>
                <p class="text-right text-xs text-grey-dark mt-1">
                    12:45 pm
                </p>
            </div>
        </div>

        <div class="flex mb-2">
            <div class="rounded py-2 px-3" style="background-color: #F2F2F2">
                <p class="text-sm text-purple">
                    Tom Cruise
                </p>
                <p class="text-sm mt-1">
                    Get Andrés on this movie ASAP!
                </p>
                <p class="text-right text-xs text-grey-dark mt-1">
                    12:45 pm
                </p>
            </div>
        </div>

    </div>
</div>



</div>
</div>
</div>  