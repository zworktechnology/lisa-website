<style>
    .show {
        display: block;
    }
</style>
<nav class=" bg-transparent text-gray-700 fixed top-0 z-50 w-full">
    <div class="flex justify-between items-center shadow-2xl w-full bg-white">
        <div class="flex items-center pl-8">
            <img src="images\Lisa Final Logo File_page-0001.jpg" class="img-responsive w-20 h-20" alt="logo" />
        </div>

        <!-- MOBILE NAV ICON -->
        <div class="md:hidden block absolute top-8 right-8">
            <button aria-label="navigation" type="button"
                class="md:hidden text-gray-800 transition duration-300 focus:outline-none focus:text-blue-300 hover:text-blue-300"><i
                    class="fas fa-bars text-3xl" id="bars"></i> </button>
        </div>

        <!-- NAVIGATION - LARGE SCREENS -->
        <div class="hidden md:flex">
            <ul class="hidden md:flex">
                <li class="text-lg pr-8 "><a href="#home"
                        class="transition duration-300 focus:outline-none focus:text-blue-500 focus:underline hover:underline hover:text-blue-500"
                        style="text-underline-offset: 8px;">Home</a></li>
                <li class="text-lg pr-8"><a href="#why"
                        class="transition duration-300 focus:outline-none focus:text-blue-500 focus:underline hover:underline hover:text-blue-500"
                        style="text-underline-offset: 8px;">Why Lisa</a></li>
                <li class="text-lg pr-8"><a href="#features"
                        class="transition duration-300 focus:outline-none focus:text-blue-500 focus:underline hover:underline hover:text-blue-500"
                        style="text-underline-offset: 8px;">Features</a></li>
                <li class="text-lg pr-8"><a href="#faq"
                        class="transition duration-300 focus:outline-none focus:text-blue-500 focus:underline hover:underline hover:text-blue-500"
                        style="text-underline-offset: 8px;">FAQ</a></li>
                <li class="text-lg pr-8"><a href="#contact"
                        class="transition duration-300 focus:outline-none focus:text-blue-500 focus:underline hover:underline hover:text-blue-500"
                        style="text-underline-offset: 8px;">Contact</a></li>
            </ul>
        </div>

        <div class="hidden md:flex">
            <a href="https://www.facebook.com/profile.php?id=100092315981533&mibextid=ZbWKwL" target="_blank"><i
                    class="fab fa-facebook text-2xl pr-8 transition duration-300 focus:text-blue-500 hover:text-blue-500"></i></a>

            <a href="https://instagram.com/lisahealth?igshid=MzRlODBiNWFlZA==" target="_blank"><i
                    class="fab fa-instagram text-2xl pr-8 transition duration-300 focus:text-blue-500 hover:text-blue-500"></i></a>

        </div>
    </div>

    <!-- MOBILE MENU -->
    <div id="mobileMenu" class="hidden flex w-full mx-auto py-8 text-center bg-blue-300">
        <div class="flex flex-col justify-center items-center w-full">
            <a href="#home"
                class="font-bold text-lg block text-gray-200 cursor-pointer py-3 transition duration-300 focus:outline-none focus:text-blue-500 focus:underline hover:underline hover:text-blue-500"
                style="text-underline-offset: 8px;">Home</a>
            <a href="#why"
                class="font-bold text-lg block text-gray-200 cursor-pointer mt-1 py-3 transition duration-300 focus:outline-none focus:text-blue-500 focus:underline hover:underline hover:text-blue-500"
                style="text-underline-offset: 8px;">Why Lisa</a>
            <a href="#features"
                class="font-bold text-lg block text-gray-200 cursor-pointer mt-1 py-3 transition duration-300 focus:outline-none focus:text-blue-500 focus:underline hover:underline hover:text-blue-500"
                style="text-underline-offset: 8px;">Features</a>
                <a href="#faq"
                class="font-bold text-lg block text-gray-200 cursor-pointer mt-1 py-3 transition duration-300 focus:outline-none focus:text-blue-500 focus:underline hover:underline hover:text-blue-500"
                style="text-underline-offset: 8px;">FAQ</a>
            <a href="#contact"
                class="font-bold text-lg block text-gray-200 cursor-pointer mt-1 py-3 transition duration-300 focus:outline-none focus:text-blue-500 focus:underline hover:underline hover:text-blue-500"
                style="text-underline-offset: 8px;">Contact</a>
        </div>
    </div>
</nav>
<script>
    // Gets the Mobile Nav icon by its ID
    let bars = document.getElementById('bars');

    // Gets the Mobile Nav container
    let mobileMenu = document.getElementById('mobileMenu');

    // Displays the Mobile Nav when clicked and changes the Nav Icon from three bars to an 'X'
    bars.addEventListener('click', function() {
        mobileMenu.classList.toggle('show');
        bars.classList.toggle('fa-times');
    });
</script>
