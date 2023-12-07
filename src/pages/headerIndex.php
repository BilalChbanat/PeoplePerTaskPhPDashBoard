<?php session_start(); ?>
<header class="dark:bg-mainColorDark bg-slate-50">
    <nav class="h-20 flex hf:dark:border-b-[1px] hf:border-b-seperator">
        <ul class="flex px-16 herothird:px-8 justify-between items-center w-full">
            <li class="flex gap-1">
                <img src="../../images/main-logo.svg" alt="main-logo">
                <div class="hf:hidden hl:hidden flex burgerMenu">
                    <img src="../../images/burger-menu-light.svg" alt="burger-menu-light" id="burger-menu-light"
                        class="cursor-pointer">
                    <img src="../../images/burger-menu-dark.svg" alt="burger-menu-dark" id="burger-menu-dark"
                        class="cursor-pointer">
                </div>
            </li>
            <li>
                <ul class="justify-center items-center gap-4 hf:flex hidden">
                    <li><a href="./index.php"
                            class="dark:text-mainPurple text-mainBlue font-poppins font-normal text-base border-b-mainBlue dark:border-b-mainPurple border-b-[3px] py-[0.6rem]">Home</a>
                    </li>
                    <li><a href="./become.php"
                            class="dark:text-slate-50 text-defaultText font-poppins font-normal text-base py-4">Become a
                            member</a></li>
                    <li><a href="./about.php"
                            class="dark:text-slate-50 text-defaultText font-poppins font-normal text-base py-4">About
                            Us</a></li>
                    <li><a href="./contact.php"
                            class="dark:text-slate-50 text-defaultText font-poppins font-normal text-base py-4">Contact
                            Us</a></li>
                </ul>
            </li>
            <li>
                <ul class="flex justify-center items-center gap-4">
                    <li>
                        <form class="relative hs:flex hidden">
                            <input type="text" class="shadow-[0px_4px_16px_0px_#00000014] placeholder:text-[#818181]
                  dark:shadow-none bg-slate-50 rounded-full py-2 pl-6 pr-12 w-[18rem] border-none outline-none"
                                placeholder="Search Here...">
                            <button type="submit" class="absolute z-10 top-[10px] right-5"><img
                                    src="../../images/search-icon.svg" alt="search-icon"></button>
                        </form>
                    </li>
                    <li class="hidden ht:flex justify-center items-center gap-3 flex-row">
                        <?php if (!isset($_SESSION["email"])): ?>
                            <a href="./login.php"
                                class="flex text-defaultText rounded-full bg-loginBtnBg py-2 px-8 justify-center items-center font-poppins text-base font-medium w-[full]">Log
                                In</a>
                            <a href="./signup2.php"
                                class="text-slate-50 rounded-full bg-mainBlue py-2 px-8 flex justify-center items-center dark:bg-mainPurple font-poppins text-base font-medium w-[full]"
                                style="cursor:pointer;">Sign
                                Up</a>

                        <?php else: ?>
                            <!-- drop profile -->
                            <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"></script>
                            <div class=" bg-gray-200 flex justify-center items-center dark:bg-gray-500">
                                <div x-data="{ open: false }"
                                    class=" dark:bg-gray-800 w-60 flex justify-center items-center" style="height:10%;">
                                    <div @click="open = !open" class="relative border-b-4 border-transparent py-3"
                                        :class="{'border-indigo-700 transform transition duration-300 ': open}"
                                        x-transition:enter-end="transform opacity-100 scale-100"
                                        x-transition:leave="transition ease-in duration-75"
                                        x-transition:leave-start="transform opacity-100 scale-100">
                                        <div class="flex justify-center items-center space-x-3 cursor-pointer">
                                            <div style="margin-right:1rem;"
                                                class="w-12 h-12 rounded-full overflow-hidden border-2 dark:border-white border-gray-900">
                                                <img src="../../images/profile.jpg" alt="profile"
                                                    style="width:3rem;height:3rem;">
                                            </div>
                                            <div class="font-semibold dark:text-white text-gray-900 text-lg">
                                                <div class="cursor-pointer">
                                                    <?php echo $_SESSION['name'] ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div x-show="open" x-transition:enter="transition ease-out duration-100"
                                            x-transition:enter-start="transform opacity-0 scale-95"
                                            x-transition:enter-end="transform opacity-100 scale-100"
                                            x-transition:leave="transition ease-in duration-75"
                                            x-transition:leave-start="transform opacity-100 scale-100"
                                            x-transition:leave-end="transform opacity-0 scale-95"
                                            class="absolute w-48 px-5 py-3 flex dark:bg-gray-800 bg-white rounded-lg shadow border dark:border-transparent mt-5 justify-center">
                                            <ul class="space-y-3 dark:text-white">
                                                <li class="font-medium">
                                                    <a href="#"
                                                        class="flex items-center transform transition-colors duration-200 border-r-4 border-transparent hover:border-indigo-700">
                                                        <div class="mr-3">
                                                            <svg class="w-6 h-6" fill="none" stroke="currentColor"
                                                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                        Account
                                                    </a>
                                                </li>
                                                <li class="font-medium">
                                                    <a href="./userprofile.php"
                                                        class="flex items-center transform transition-colors duration-200 border-r-4 border-transparent hover:border-indigo-700">
                                                        <div class="mr-3">
                                                            <svg class="w-6 h-6" fill="none" stroke="currentColor"
                                                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z">
                                                                </path>
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                        Setting
                                                    </a>
                                                </li>
                                                <hr class="dark:border-gray-700">
                                                <li class="font-medium">
                                                    <a href="./logout.php"
                                                        class="flex items-center transform transition-colors duration-200 border-r-4 border-transparent hover:border-red-600">
                                                        <div class="mr-3 text-red-600">
                                                            <svg class="w-6 h-6" fill="none" stroke="currentColor"
                                                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                <path stroke-linecap="round" stroke-linejoin="round"
                                                                    stroke-width="2"
                                                                    d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1">
                                                                </path>
                                                            </svg>
                                                        </div>
                                                        Logout
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endif ?>
                    </li>
                    <li>
                        <div class="flex ht:hidden burgerMenu">
                            <img src="../../images/burger-menu-light.svg" alt="burger-menu-light" id="burger-menu-light"
                                class="cursor-pointer">
                            <img src="../../images/burger-menu-dark.svg" alt="burger-menu-dark" id="burger-menu-dark"
                                class="cursor-pointer">
                        </div>
                    </li>
                    <li>
                        <div id="theme-switcher" class="relative">
                            <div id="selectThemeDropdown"
                                class="transform translate-y-3 hidden herothird:right-[-18px] right-[-50px] min-w-[11rem] top-[2.5rem] mt-2 z-10 opacity-0 transition duration-200 mb-2 origin-bottom-left bg-white shadow-md rounded-lg p-2 space-y-1 dark:bg-gray-800 dark:border dark:border-gray-700 dark:divide-gray-700 absolute">
                                <a
                                    class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 cursor-pointer">
                                    Auto (system default)
                                </a>
                                <a
                                    class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 cursor-pointer">
                                    Default (light mode)
                                </a>
                                <a
                                    class="flex items-center gap-x-3.5 py-2 px-3 rounded-md text-sm text-gray-800 hover:bg-gray-100 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-gray-300 cursor-pointer">
                                    Dark
                                </a>
                            </div>
                        </div>
                        <button id="theme-toggle" type="button"
                            class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
                            <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                            </svg>
                            <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                                    fill-rule="evenodd" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
    <!-- dropdown menu -->
    <!-- <nav id="navDropdown" class="hf:hidden flex overflow-hidden hf:pb-0 dark:border-b-[1px] border-b-seperator">
        <ul class="flex px-16 justify-center items-center w-full flex-col gap-4 transition-max-h duration-500 max-h-[0rem] ease-in-out"
            id="navBurgerNav">
            <li>
                <ul class="justify-center items-center gap-4 hf:hidden flex flex-col hs:pb-6">
                    <li><a href="#"
                            class="dark:text-mainPurple text-mainBlue font-poppins font-normal text-base border-b-mainBlue dark:border-b-mainPurple border-b-[3px] py-[0.6rem]">Home</a>
                    </li>
                    <li><a href="#"
                            class="dark:text-slate-50 text-defaultText font-poppins font-normal text-base py-4">Become a
                            member</a></li>
                    <li><a href="#"
                            class="dark:text-slate-50 text-defaultText font-poppins font-normal text-base py-4">About
                            Us</a></li>
                    <li><a href="#"
                            class="dark:text-slate-50 text-defaultText font-poppins font-normal text-base py-4">Contact
                            Us</a></li>
                </ul>
            </li>
            <li class="hs:hidden flex">
                <ul class="flex justify-center items-center gap-4 flex-col">
                    <li>
                        <form class="relative hs:hidden flex">
                            <input type="text"
                                class="shadow-[0px_4px_16px_0px_#00000014] placeholder:text-[#818181] dark:shadow-none bg-slate-50 rounded-full py-2 pl-6 pr-12 w-[18rem] border-none outline-none"
                                placeholder="Search Here...">
                            <button type="submit" class="absolute z-10 top-[10px] right-5"><img
                                    src="../../images/search-icon.svg" alt="search-icon"></button>
                        </form>
                    </li>
                    <li class="flex ht:hidden justify-center items-center gap-3 flex-col">
                        <button type="button"
                            class="flex w-[18rem] text-defaultText rounded-full bg-loginBtnBg py-2 px-8 justify-center items-center font-poppins text-base font-medium">Log
                            In</button>
                        <button type="button"
                            class="text-slate-50 rounded-full bg-mainBlue py-2 px-8 flex justify-center items-center dark:bg-mainPurple font-poppins text-base font-medium w-[18rem]">Sign
                            Up</button>
                    </li>
                    <li>
                        <button id="theme-toggle" type="button"
                            class="text-gray-500 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-700 focus:outline-none focus:ring-4 focus:ring-gray-200 dark:focus:ring-gray-700 rounded-lg text-sm p-2.5">
                            <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                            </svg>
                            <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                                    fill-rule="evenodd" clip-rule="evenodd"></path>
                            </svg>
                        </button>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
    </nav> -->
</header>