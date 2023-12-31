<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../../dist/sandbox.js"></script>
    <link rel="stylesheet" href="../../dist/output.css">
    <title>Validation</title>
</head>

<body class="bg-body-bg bg-cover bg-center">
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
                        <li><a href="../../index.php"
                                class="dark:text-mainPurple text-mainBlue font-poppins font-normal text-base border-b-mainBlue dark:border-b-mainPurple border-b-[3px] py-[0.6rem]">Home</a>
                        </li>
                        <li><a href="./become.php"
                                class="dark:text-slate-50 text-defaultText font-poppins font-normal text-base py-4">Become
                                a
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
                            <button type="button"
                                class="flex text-defaultText rounded-full bg-loginBtnBg py-2 px-8 justify-center items-center font-poppins text-base font-medium w-[full]">Log
                                In</button>
                            <button
                                class="text-slate-50 rounded-full bg-mainBlue py-2 px-8 flex justify-center items-center dark:bg-mainPurple font-poppins text-base font-medium w-[full]">Dash
                                Board</button>
                        </li>
                        <li>
                            <div class="flex ht:hidden burgerMenu">
                                <img src="../../images/burger-menu-light.svg" alt="burger-menu-light"
                                    id="burger-menu-light" class="cursor-pointer">
                                <img src="../../images/burger-menu-dark.svg" alt="burger-menu-dark"
                                    id="burger-menu-dark" class="cursor-pointer">
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
        <nav id="navDropdown" class="hf:hidden flex overflow-hidden hf:pb-0 dark:border-b-[1px] border-b-seperator">
            <ul class="flex px-16 justify-center items-center w-full flex-col gap-4 transition-max-h duration-500 max-h-[0rem] ease-in-out"
                id="navBurgerNav">
                <li>
                    <ul class="justify-center items-center gap-4 hf:hidden flex flex-col hs:pb-6">
                        <li><a href="#"
                                class="dark:text-mainPurple text-mainBlue font-poppins font-normal text-base border-b-mainBlue dark:border-b-mainPurple border-b-[3px] py-[0.6rem]">Home</a>
                        </li>
                        <li><a href="#"
                                class="dark:text-slate-50 text-defaultText font-poppins font-normal text-base py-4">Become
                                a
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
        </nav>
    </header>
    <main>
        <div
            class="max-w-2xl h-fit mx-auto  my-12 bg-white p-8 pb-1 mt-16 rounded-xl shadow shadow-slate-200 drop-shadow-lg dark:bg-mainColorDark dark:shadow-slate-900 sm: w-full">
            <h1 class="text-4xl text-center font-bold font-fredoka dark:text-white">Log in to <span
                    class="text-mainBlue dark:text-mainPurple">PeoplePerTask</span></h1>
            <form action="./validation.php" class="mt-10 mb-6" method="POST">

                <div class="flex flex-col space-y-5 items-center justify-center w-[100%]">
                    <div class="flex flex-row items-center justify-between w-[100%] ">
                        <div class="w-[47%]">
                            <label for="email"></label>
                            <input id="first-name" type="text" name="fname"
                                class="flex w-[100%] py-3 border-gray-300 border-2 rounded-lg px-3 focus:outline-none focus:border-mainBlue dark:focus:border-mainPurple"
                                placeholder="First Name">
                        </div>
                        <div class="w-[47%]">
                            <label for=""></label>
                            <input type="text" name="lname" id="last-name"
                                class="flex w-[100%] py-3 border-gray-300 border-2 rounded-lg px-3 focus:outline-none focus:border-mainBlue dark:focus:border-mainPurple"
                                placeholder="Last Name">
                        </div>
                    </div>
                    <div class="flex flex-row items-center justify-between w-[100%] ">
                        <div class="w-[47%]">
                            <label for="email"></label>
                            <input id="first-name" type="text" name="phone"
                                class="flex w-[100%] py-3 border-gray-300 border-2 rounded-lg px-3 focus:outline-none focus:border-mainBlue dark:focus:border-mainPurple"
                                placeholder="Phone">
                        </div>
                        <div class="w-[47%]">
                            <label for=""></label>
                            <input type="text" name="email" id="last-name"
                                class="flex w-[100%] py-3 border-gray-300 border-2 rounded-lg px-3 focus:outline-none focus:border-mainBlue dark:focus:border-mainPurple"
                                placeholder="xxxx@xxx.xx">
                        </div>
                    </div>
                    <div class="flex flex-col items-center justify-between space-y-5 w-[100%]">
                        <label for="email" class="w-[100%]">
                            <input id="email" name="subject" type="email"
                                class="w-[100%] py-3 border-gray-300 border-2 rounded-lg px-3 focus:outline-none focus:border-mainBlue dark:focus:border-mainPurple"
                                placeholder="Subject">
                        </label>
                        <label for="password" class="w-[100%]">
                            <input id="password" name="message" type="password"
                                class="w-full py-3 border-gray-300 border-2 rounded-lg px-3 focus:outline-none focus:border-mainBlue dark:focus:border-mainPurple"
                                placeholder="Message">
                        </label>
                    </div>
                    <button type="submit"
                        class="w-full py-3 font-medium text-white bg-mainBlue dark:bg-mainPurple dark:hover:bg-violet-500 hover:bg-indigo-600 rounded-lg border-indigo-500 hover:shadow inline-flex space-x-2 items-center justify-center">
                        Submit
                    </button>
                    <div class="pt-1">
                        <span class="m-2">
                            <a href="#" class="text-mainBlue hover:text-white"><i
                                    class="ri-facebook-fill bg-slate-100 hover:bg-mainBlue  dark:text-mainPurple dark:hover:text-white dark:hover:bg-mainPurple text-xl border rounded-full border-none drop-shadow-lg p-2.5"></i></a>

                        </span>
                        <span class="m-2">
                            <a href="#" class="text-mainBlue hover:text-white"><i
                                    class="ri-twitter-fill bg-slate-100 hover:bg-mainBlue  dark:text-mainPurple dark:hover:text-white dark:hover:bg-mainPurple text-xl border rounded-full border-none drop-shadow-lg p-2.5 "></i></a>

                        </span>

                        <span class="m-2">
                            <a href="#" class="text-mainBlue hover:text-white"><i
                                    class="ri-linkedin-fill bg-slate-100 hover:bg-mainBlue  dark:text-mainPurple dark:hover:text-white dark:hover:bg-mainPurple text-xl border rounded-full border-none drop-shadow-lg p-2.5"></i></a>

                        </span>
                        <span class="m-2">
                            <a href="#" class="text-mainBlue hover:text-white"><i
                                    class="ri-instagram-line bg-slate-100 hover:bg-mainBlue  dark:text-mainPurple dark:hover:text-white dark:hover:bg-mainPurple text-xl border rounded-full border-none drop-shadow-lg p-2.5"></i></a>

                        </span>
                    </div>
                </div>
            </form>
        </div>
    </main>
    <div class="relative z-10 block" aria-labelledby="modal-title" role="dialog" aria-modal="true" id="modal">

        <div class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

        <div class="fixed inset-0 z-10 w-screen overflow-y-auto">
            <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                <div
                    class="relative transform overflow-hidden rounded-lg bg-white text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-lg">
                    <div class="bg-white px-4 pb-4 pt-5 sm:p-6 sm:pb-4">
                        <div class="sm:flex sm:items-start">
                            <div
                                class="mx-auto flex h-12 w-12 flex-shrink-0 items-center justify-center rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                                <svg class="h-6 w-6 text-red-600" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 9v3.75m-9.303 3.376c-.866 1.5.217 3.374 1.948 3.374h14.71c1.73 0 2.813-1.874 1.948-3.374L13.949 3.378c-.866-1.5-3.032-1.5-3.898 0L2.697 16.126zM12 15.75h.007v.008H12v-.008z" />
                                </svg>
                            </div>
                            <div class="mt-3 text-center sm:ml-4 sm:mt-0 sm:text-left">
                                <h3 class="text-base font-semibold leading-6 text-gray-900" id="modal-title">Error</h3>
                                <div class="mt-2">
                                    <p class="text-sm text-black text-bold font-semibold">Please correct the following
                                        errors before
                                        proceeding:</p>
                                    <li class="pt-[0.5rem] text-gray-500">some of your field cannot be empty.</li>
                                    <li class="pt-[0.5rem] text-gray-500">Password must be at least 8 characters long.
                                    </li>
                                    <li class="pt-[0.5rem] text-gray-500">Email address is required.</li>
                                    <li class="list-none">...</li>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6">
                        <a href="./contact.php" type="submit" id="close" name="save"
                            class="inline-flex w-full justify-center rounded-md bg-red-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-red-500 sm:ml-3 sm:w-auto">OK</a
                            href="./contact.php">
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script>
        const close = document.querySelector('#close');
        const modal = document.querySelector('#modal');
        close.addEventListener('click', () => {
            modal.classList.add('hidden');
        });
    </script>

    <?php
    if (isset($_POST['save'])) {
        header('location: /contact.php');
    }
    ?>

</body>

</html>