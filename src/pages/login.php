<!DOCTYPE html>
<html lang="en">

<?php
include('./script.php');
?>

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
  <script src="../../dist/sandbox.js"></script>
</head>

<body class="bg-body-bg bg-cover bg-center">
  <?=include('./headerIndex.php')?>
  <main>
    <div
      class="max-w-2xl  mx-auto  my-12 bg-white p-8 pb-1 mt-16 rounded-xl shadow shadow-slate-200 drop-shadow-lg dark:bg-mainColorDark dark:shadow-slate-900 sm: w-full">
      <h1 class="text-4xl text-center font-bold font-fredoka dark:text-white">Log in to <span
          class="text-mainBlue">PeoplePerTask</span></h1>
      <form method="POST" class="my-10" action="./script.php">
        <div class="flex flex-col space-y-5">
          <label for="email">
            <input id="email" name="email" type="email" value="<?= isset($_COOKIE['email']) ? $_COOKIE['email'] : '' ?>"
              class="w-full py-3 border-gray-300 border-2 rounded-lg px-3 focus:outline-none focus:border-mainBlue"
              placeholder="Enter email address">
          </label>
          <label for="password">
            <input id="password" name="password" type="password"
              value="<?= isset($_COOKIE['password']) ? $_COOKIE['password'] : '' ?>"
              class="w-full py-3 border-gray-300 border-2 rounded-lg px-3 focus:outline-none focus:border-mainBlue"
              placeholder="••••••••">
          </label>
          <div class="flex flex-row justify-between items-center">
            <div>
              <label for="remember" class=" font-medium dark:text-white">
                <input type="checkbox" id="remember" class="w-4 h-4 border-none focus:bg-mainBlue">
                Remember me
              </label>
            </div>
            <div>
              <span> You don't have an Account?</span>
              <a href="./signup2.php" class="font-normal text-sm text-zinc-500 dark:text-gray-300">Sign up</a>
            </div>
          </div>
          <button type="submit" name="login"
            class="w-full py-3 font-medium text-white bg-mainBlue hover:bg-indigo-600 rounded-lg border-indigo-500 hover:shadow inline-flex space-x-2 items-center justify-center">
            <span>Login</span>
          </button>

          <div class="flex justify-center items-center">
            <span class="w-full border border-zinc-400"></span>
            <span class="px-3 text-sm text-zinc-600 dark:text-darkGrey">Or</span>
            <span class="w-full border border-zinc-400"></span>
          </div>

          <button
            class="w-full flex items-center justify-center py-3 font-medium text-black text-sm  bg-white border border-1 border-black rounded-full ">
            <img class=" w-6 h-6 " src="../../images/logo-Apple.png" alt="">
            <a href="#">Continue with Apple</a>
          </button>

          <button
            class="w-full flex items-center justify-center py-3 font-medium text-sm text-white bg-sky-500 border border-none rounded-full ">
            <span class="absolute bg-white border rounded-full p-2 left-8">
              <svg width="24px" height="24px" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink">
                <path fill="#EA4335 "
                  d="M5.26620003,9.76452941 C6.19878754,6.93863203 8.85444915,4.90909091 12,4.90909091 C13.6909091,4.90909091 15.2181818,5.50909091 16.4181818,6.49090909 L19.9090909,3 C17.7818182,1.14545455 15.0545455,0 12,0 C7.27006974,0 3.1977497,2.69829785 1.23999023,6.65002441 L5.26620003,9.76452941 Z" />
                <path fill="#34A853"
                  d="M16.0407269,18.0125889 C14.9509167,18.7163016 13.5660892,19.0909091 12,19.0909091 C8.86648613,19.0909091 6.21911939,17.076871 5.27698177,14.2678769 L1.23746264,17.3349879 C3.19279051,21.2936293 7.26500293,24 12,24 C14.9328362,24 17.7353462,22.9573905 19.834192,20.9995801 L16.0407269,18.0125889 Z" />
                <path fill="#4A90E2"
                  d="M19.834192,20.9995801 C22.0291676,18.9520994 23.4545455,15.903663 23.4545455,12 C23.4545455,11.2909091 23.3454545,10.5272727 23.1818182,9.81818182 L12,9.81818182 L12,14.4545455 L18.4363636,14.4545455 C18.1187732,16.013626 17.2662994,17.2212117 16.0407269,18.0125889 L19.834192,20.9995801 Z" />
                <path fill="#FBBC05"
                  d="M5.27698177,14.2678769 C5.03832634,13.556323 4.90909091,12.7937589 4.90909091,12 C4.90909091,11.2182781 5.03443647,10.4668121 5.26620003,9.76452941 L1.23999023,6.65002441 C0.43658717,8.26043162 0,10.0753848 0,12 C0,13.9195484 0.444780743,15.7301709 1.23746264,17.3349879 L5.27698177,14.2678769 Z" />
              </svg>
            </span>
            <a href="#">Continue with Google</a>
          </button>
        </div>
      </form>
    </div>
  </main>

  <footer>
  </footer>


</body>

</html>