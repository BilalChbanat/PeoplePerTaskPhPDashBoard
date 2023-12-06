<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../dist/output.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Fredoka:wght@500;600&family=Playfair+Display:wght@400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
    <script src="../../dist/sandbox.js"></script>
    <title>PeoplePerTask</title>
</head>

<body class="bg-slate-50 dark:bg-mainColorDark">
    <?php include("./headerIndex.php"); ?>
    <main>
        <section class="flex flex-row justify-center items-center p-10 ">
            <div class="w-[47%] flex flex-col justify-start space-y-5">
                <div>
                    <h1
                        class="font-poppins font-semibold text-defaultText text-[3.6rem] mobile:text-[1.6rem] dark:text-slate-50">
                        Find your <span class="text-mainBlue dark:text-mainPurple">dream</span> jobs through <span
                            class="text-mainBlue dark:text-mainPurple">PeoplePerTask</span> easily </h1>
                </div>
                <form class="flex relative justify-center items-center">
                    <input type="search" name="search" id="search"
                        class="w-[43rem] h-[3.7rem] p-6 outline-none shadow-[0px_1px_20px_0px_#00000014] rounded-full placeholder:text-[#818181]"
                        placeholder="Search here...">
                    <button
                        class="absolute w-[8rem] h-[3rem] right-[0.41rem] bg-mainBlue p-2 text-slate-50 font-poppins rounded-full flex justify-center items-center dark:bg-mainPurple">Search
                        Job</button>
                </form>
                <div class="">
                    <buttom
                        class="p-[0.5rem] px-4 border-gray-200 text-defaultText dark:text-slate-50 font-semibold tracking-wider text-[14px] rounded-full font-poppins border-2 hover:bg-mainBlue dark:hover:bg-mainPurple hover:text-slate-50 hover:border-none">
                        <a href="#">Web Dev</a>
                    </buttom>
                    <buttom
                        class="p-[0.5rem] ml-2 px-4 border-gray-200 text-defaultText dark:text-slate-50 font-semibold tracking-wider text-[14px] rounded-full font-poppins border-2 hover:bg-mainBlue dark:hover:bg-mainPurple hover:text-slate-50 hover:border-none">
                        <a href="#">Mobile Dev</a>
                    </buttom>
                    <buttom
                        class="p-[0.5rem] ml-2 px-4 border-gray-200 text-defaultText dark:text-slate-50 font-semibold tracking-wider text-[14px] rounded-full font-poppins border-2 hover:bg-mainBlue dark:hover:bg-mainPurple hover:text-slate-50 hover:border-none">
                        <a href="#">Design</a>
                    </buttom>
                    <buttom
                        class="p-[0.5rem] ml-2 px-4 border-gray-200 text-defaultText dark:text-slate-50 font-semibold tracking-wider text-[14px] rounded-full font-poppins border-2 hover:bg-mainBlue dark:hover:bg-mainPurple hover:text-slate-50 hover:border-none">
                        <a href="#">Writing</a>
                    </buttom>
                    <buttom
                        class="p-[0.5rem] ml-2 px-4 border-gray-200 text-defaultText dark:text-slate-50 font-semibold tracking-wider text-[14px] rounded-full font-poppins border-2 hover:bg-mainBlue dark:hover:bg-mainPurple hover:text-slate-50 hover:border-none">
                        <a href="#">Admin Support</a>
                    </buttom>
                    <div class="mt-5">
                        <buttom
                            class="p-[0.5rem] mt-3 px-4 border-gray-200 text-defaultText dark:text-slate-50 font-semibold tracking-wider text-[14px] rounded-full font-poppins border-2 hover:bg-mainBlue dark:hover:bg-mainPurple hover:text-slate-50 hover:border-none">
                            <a href="#">Customer Service</a>
                        </buttom>
                        <buttom
                            class="p-[0.5rem] mt-3 ml-2 px-4 border-gray-200 text-defaultText dark:text-slate-50 font-semibold tracking-wider text-[14px] rounded-full font-poppins border-2 hover:bg-mainBlue dark:hover:bg-mainPurple hover:text-slate-50 hover:border-none">
                            <a href="#">Accounting</a>
                        </buttom>
                        <buttom
                            class="p-[0.5rem] ml-2 px-4 border-gray-200 text-defaultText dark:text-slate-50 font-semibold tracking-wider text-[14px] rounded-full font-poppins border-2 hover:bg-mainBlue dark:hover:bg-mainPurple hover:text-slate-50 hover:border-none">
                            <a href="#">View all categories</a>
                        </buttom>
                    </div>
                </div>
            </div>
            <div class="w-[47%]">
                <img src="../../images/Main → heroImage.svg" alt="">
            </div>
        </section>

        <section>
            <div>
                <h2>Showing 34 Jobs</h2>
            </div>
            <div>
                <div>
                    <label class="relative inline-flex cursor-pointer items-center">
                        <input id="switch-2" type="checkbox" class="peer sr-only" />
                        <label for="switch-2" class="hidden"></label>
                        <div
                            class="peer h-4 w-11 rounded-full border bg-slate-200 after:absolute after:-top-1 after:left-0 after:h-6 after:w-6 after:rounded-full after:border after:border-gray-300 after:bg-white after:transition-all after:content-[''] peer-checked:bg-mainBlue peer-checked:after:translate-x-full peer-focus:ring-mainBlue">
                        </div>
                    </label>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                    <div></div>
                </div>
        </section>
        <section class="py-12 flex justify-around items-start flex-wrap">
            <img src="../../images/company1.svg" alt="company1">
            <img src="../../images/company2.svg" alt="company2">
            <img src="../../images/company3.svg" alt="company3">
            <img src="../../images/company4.svg" alt="company4">
            <img src="../../images/company5.svg" alt="company5">
        </section>
    </main>

    <footer>
        <script type="module" src="../scripts/sandbox.js"></script>
    </footer>


    < </body>

</html>