<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/css/owl.carousel.min.css">
    <link rel="stylesheet" href="../../dist/output.css">
    <script src="../../dist/sandbox.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <meta name="keywords"
        content="freelancer, PeoplePreTask, web development, graphic design, writing, maintenance, service, homecare, home, project, task">
    <meta name="description"
        content="Welcome to PeoplePerTask, your go-to expert for a wide range of freelance services. Whether you need web development, graphic design, writing, or other specialized skills, I deliver high-quality and reliable solutions. As a freelancer, I am dedicated to meeting your project needs with professionalism and expertise. Contact me today for efficient, friendly, and affordable freelance services you can trust.">
    <meta name="author" content="PeoplePerTask">
    <title>PeoplePerTask</title>
</head>

<body class="dark:bg-mainColorDark">
    <?= include('./headerIndex.php');?>
    <main>
        <section class="flex p-16 flex-col md:flex-row p-8 md:p-16 w-full">
            <div class="w-full md:w-2/4 flex flex-col justify-center">
                <h1 class="text-4xl md:text-6xl font-bold dark:text-white">Welcome to <span
                        class="text-bluepeople">PeoplePerTask</span>
                    Your Gateway to <span class="text-bluepeople">Freelance
                        Excellence</span></h1>
                <div>
                    <p class="pt-6 md:pt-10 text-base md:text-xl dark:text-white">
                        At People per Task, we're driven by a passion for delivering top-notch freelance work. We
                        understand
                        the
                        challenges
                        businesses and entrepreneurs face when seeking independent talent for their projects. That's why
                        we're
                        dedicated to
                        simplifying the process for you.
                        Feel free to personalize this text according to the values, services, and mission of your
                        "PeoplePerTask" company.</p>
                </div>
            </div>
            <div class="w-full md:w-2/4 flex justify-center md:justify-end mt-6 md:mt-0">
                <img class="w-full md:max-w-lg" src="../../images/about_main_section_pic.svg" alt="aboutUs">

            </div>
        </section>
        <section class="px-8 md:px-16 flex flex-col justify-evenly text-center h-auto md:h-screen">
            <div>
                <h2 class="text-2xl md:text-3xl font-bold dark:text-white">Why choose us</h2>
                <p class="pt-2 dark:text-white">It's very important to have a customer service, but it's just the way it
                    is
                </p>
                <p class="pt-2 dark:text-white">tempor incididunt ut labore et dolore magna aliqua</p>
            </div>
            <div class="flex flex-col md:flex-row justify-evenly items-center">
                <div
                    class="w-full md:w-1/3 max-w-sm p-6 mb-6 md:mb-0 border border-gray-200 rounded-xl dark:bg-gray-800 dark:border-cardDarkMod shadow-shadowBox">
                    <img class="w-15" src="../../images/orange.svg" alt="trusted">
                    <h3 class="font-semibold text-xl  dark:text-white">Trusted</h3>
                    <p class="text-pColorWightMode dark:text-pColorDarkMode">Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <div
                    class="w-full md:w-1/3 max-w-sm p-6 mb-6 md:mb-0 border border-gray-200 rounded-xl dark:bg-gray-800 dark:border-cardDarkMod shadow-shadowBox">
                    <img src="../../images/purple.svg" alt="easy to use">
                    <h3 class="font-semibold text-xl dark:text-white">Easy to Use</h3>
                    <p class="text-pColorWightMode dark:text-pColorDarkMode">Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <div
                    class="w-full md:w-1/3 max-w-sm p-6 mb-6 md:mb-0 border border-gray-200 rounded-xl dark:bg-gray-800 dark:border-cardDarkMod shadow-shadowBox">
                    <img src="../../images/blue.svg" alt="faster">
                    <h3 class="font-semibold text-xl  dark:text-white">Faster</h3>
                    <p class="text-pColorWightMode dark:text-pColorDarkMode">Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit, sed do eiusmod tempor
                        incididunt ut labore et dolore magna aliqua.</p>
                </div>
            </div>
        </section>
        <section class="px-4 md:px-16 flex flex-col mt-8 text-center min-h-screen overflow-x-hidden md:p-px md:m-px">
            <div class="pb-10 md:p-px md:m-px">
                <h2 class="text-3xl font-bold dark:text-white">What our Customer Says</h2>
                <p class=" dark:text-white">It's very important to have a customer service, but it's just the way it is
                </p>
                <p class=" dark:text-white">tempor incididunt ut labore et dolore magna aliqua</p>
            </div>
            <div class="pl-[0rem] flex flex-col md:flex-row mx-auto md:pl-[10rem]">
                <div>
                    <div class="flex carousel-img " id="carousel">
                        <div class="flex item w-[70vw] pl-[2rem] mr-[20rem] animate__backOutLeft ">
                            <div><img class="max-w-none w-[14rem] h-[14rem] mr-10" src="../../images/chinesworker.webp "
                                    alt="our clients">
                            </div>
                            <div>
                                <h3 class="flex text-start font-bold pb-5 dark:text-nameTitleColor">William Smith</h3>
                                <div class="flex justify-between">
                                    <span class="dark:text-white">Dev of True Love Studios</span>
                                    <div class="flex"><img class="sm:hidden" src="../../images/stars.svg"
                                            alt="our rating">
                                        <span class="text-xl font-bold dark:text-white pl-3">4.8</span>
                                    </div>

                                </div>
                                <div>
                                    <p class="text-pColorWightMode text-start dark:text-pColorDarkMode">Sed ut
                                        perspiciatis
                                        unde omnis iste
                                        natus error sit
                                        voluptatem
                                        accusantium doloremque laudantium, totam rem
                                        aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae
                                        vitae
                                        dicta
                                        sunt explicabo. Nemoenim ipsam voluptatem quia voluptas sit aspernatur aut odit
                                        aut
                                        fugit,
                                        sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                                        Neque
                                        porro
                                        quisquam est, qui dolorem ipsum quia dolor sit amet,consectetur
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="flex item w-[70vw] pl-[8rem] mr-[20rem] animate__backOutLeft">
                            <div><img class="max-w-none w-[14rem] h-[14rem] mr-10"
                                    src="../../images/circle-profile-pic.jpg " alt="our clients">
                            </div>
                            <div>
                                <h3 class="text-start font-bold pb-5 dark:text-nameTitleColor">Nicolas Smith</h3>
                                <div class="flex justify-between">
                                    <span class="dark:text-white">Designer of True Love Studios</span>
                                    <div class="flex"><img src="../../images/stars.svg" alt="our rating"> <span
                                            class="text-xl font-bold dark:text-white pl-3">4.3</span></div>

                                </div>
                                <div>
                                    <p class="text-pColorWightMode text-start dark:text-pColorDarkMode">Sed ut
                                        perspiciatis
                                        unde omnis iste
                                        natus error sit
                                        voluptatem
                                        accusantium doloremque laudantium, totam rem
                                        aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae
                                        vitae
                                        dicta
                                        sunt explicabo. Nemoenim ipsam voluptatem quia voluptas sit aspernatur aut odit
                                        aut
                                        fugit,
                                        sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                                        Neque
                                        porro
                                        quisquam est, qui dolorem ipsum quia dolor sit amet,consectetur
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="flex item w-[70vw] ml-[10rem]  pl-[8rem] mr-[20rem] animate__backOutLeft">
                            <div><img class="max-w-none w-[14rem] h-[14rem] mr-10" src="../../images/circle-man.webp "
                                    alt="our clients">
                            </div>
                            <div>

                                <h3 class="text-start font-bold pb-5 dark:text-nameTitleColor">Smith Andrew</h3>
                                <div class="flex justify-between">
                                    <span class="dark:text-white">CEO of True Love Studios</span>
                                    <div class="flex"><img src="../../images/stars.svg" alt="our rating"> <span
                                            class="text-xl font-bold dark:text-white pl-3">5.0</span></div>

                                </div>
                                <div>
                                    <p class="text-pColorWightMode text-start dark:text-pColorDarkMode">Sed ut
                                        perspiciatis
                                        unde omnis iste
                                        natus error sit
                                        voluptatem
                                        accusantium doloremque laudantium, totam rem
                                        aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae
                                        vitae
                                        dicta
                                        sunt explicabo. Nemoenim ipsam voluptatem quia voluptas sit aspernatur aut odit
                                        aut
                                        fugit,
                                        sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                                        Neque
                                        porro
                                        quisquam est, qui dolorem ipsum quia dolor sit amet,consectetur
                                    </p>
                                </div>
                            </div>

                        </div>
                        <div class="flex item w-[70vw] ml-[20rem] animate__backOutLeft">
                            <div><img class="max-w-none w-[14rem] h-[14rem] mr-10"
                                    src="../../images/debashree-banerjee-circle.jpg " alt="our clients">
                            </div>
                            <div>
                                <h3 class="text-start font-bold pb-5 dark:text-nameTitleColor">Pablo toree</h3>
                                <div class="flex justify-between">
                                    <span class="dark:text-white">Dev of True Love Studios</span>
                                    <div class="flex"><img src="../../images/stars.svg" alt="our rating"> <span
                                            class="text-xl font-bold dark:text-white pl-3">4.5</span></div>

                                </div>
                                <div>
                                    <p class="text-pColorWightMode text-start dark:text-pColorDarkMode">Sed ut
                                        perspiciatis
                                        unde omnis iste
                                        natus error sit
                                        voluptatem
                                        accusantium doloremque laudantium, totam rem
                                        aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae
                                        vitae
                                        dicta
                                        sunt explicabo. Nemoenim ipsam voluptatem quia voluptas sit aspernatur aut odit
                                        aut
                                        fugit,
                                        sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
                                        Neque
                                        porro
                                        quisquam est, qui dolorem ipsum quia dolor sit amet,consectetur
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="flex justify-between w-[70rem]">
                        <div>
                            <button id="previous"><img src="../../images/arrow_left.svg" alt="scroll left"></button>
                            <button id="next"><img src="../../images/arrow_write.svg" alt="scroll write"></button>
                        </div>
                        <div><img src="../../images/div.avatar-group.png" alt="our clients"></div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <?= include('./Footer.php') ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script>
    <script>
        const slider = document.querySelector("#carousel");
        const clients = document.querySelectorAll(".item");
        const nextbtn = document.querySelector("#next");
        const prvbtn = document.querySelector("#previous");
        let index = 0;
        let move = 0;
        const slideWidth = 95;

        function next() {
            if (index < clients.length - 1) {
                index++;
                move += slideWidth;
            } else {
                index = 0;
                move = 0;
            }
            slider.style.transform = `translateX(${-move}rem)`;
        }

        function previous() {
            if (index > 0) {
                index--;
                move -= slideWidth;
            } else {
                index = clients.length - 1;
                move = index * slideWidth;
            }
            slider.style.transform = `translateX(${-move}rem)`;
        }

        nextbtn.addEventListener("click", next);
        prvbtn.addEventListener("click", previous);

        ////////////////////////////////////

        const sliderImg = document.querySelector(".carousel-wrapper");
        const image = document.querySelectorAll(".img");
        let i = 0;
        let m = 0;
        const slideWidthImg = 95;

        function next_img() {
            if (i < image.length - 1) {
                i++;
                m += slideWidthImg;
            } else {
                i = 0;
                m = 0;
            }
            sliderImg.style.transform = `translateX(${-m}rem)`;
        }

        function previous_img() {
            if (i > 0) {
                i--;
                m -= slideWidthImg;
            } else {
                i = image.length - 1;
                m = i * slideWidthImg;
            }
            sliderImg.style.transform = `translateX(${-m}rem)`;
        }

        nextbtn.addEventListener("click", next_img);
        prvbtn.addEventListener("click", previous_img);


    </script>
</body>

</html>