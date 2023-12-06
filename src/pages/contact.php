<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../dist/output.css">
  <title>PeoplePerTask</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Fredoka:wght@500;600&family=Playfair+Display:wght@400;500;600;700;800;900&display=swap"
    rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@3.5.0/fonts/remixicon.css" rel="stylesheet">
  <script src="../../dist/sandbox.js"></script>

</head>

<body class="bg-body-bg bg-cover bg-center">
    <?php include("./headerIndex.php"); ?>
  <main>
    <div
      class="max-w-2xl h-fit mx-auto  my-12 bg-white p-8 pb-1 mt-16 rounded-xl shadow shadow-slate-200 drop-shadow-lg dark:bg-mainColorDark dark:shadow-slate-900 sm: w-full">
      <h1 class="text-4xl text-center font-bold font-fredoka dark:text-white">Contact <span
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
              <input type="email" name="email" id="last-name"
                class="flex w-[100%] py-3 border-gray-300 border-2 rounded-lg px-3 focus:outline-none focus:border-mainBlue dark:focus:border-mainPurple"
                placeholder="xxxx@xxx.xx">
            </div>
          </div>
          <div class="flex flex-col items-center justify-between space-y-5 w-[100%]">
            <label for="email" class="w-[100%]">
              <input id="email" name="subject" type="text"
                class="w-[100%] py-3 border-gray-300 border-2 rounded-lg px-3 focus:outline-none focus:border-mainBlue dark:focus:border-mainPurple"
                placeholder="Subject">
            </label>
            <label for="password" class="w-[100%]">
              <input id="password" name="message" type="Message"
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

  <footer>
  </footer>


</body>

</html>