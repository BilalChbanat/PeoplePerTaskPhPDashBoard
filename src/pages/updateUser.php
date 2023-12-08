<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../dist/output.css">
    <link rel="stylesheet" href="../../global.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
    <script src="../../dist/sandbox.js"></script>
    <title>PeoplePerTask</title>
</head>

<body class="">
    <?php
    include 'dbh.inc.php';
    include("./headerIndex.php");
    if (!isset($_SESSION["email"])) {
        header("Location: login.php");
    }

    if (isset($_POST['save'])) {
        $title_projet = $_POST['title_projet'];
        $descreption = $_POST['description'];
        $id_user = $_POST['id_user'];
        $id_cat = $_POST['category'];
        if (empty($title_projet)) {
            echo "barca";
        } else {
            $sqlAddcat = "INSERT INTO projets (title_projet, descreption, id_cat , id_user) 
                    VALUES ('$title_projet', '$descreption', $id_cat, $id_user)";
            $resultaddcat = mysqli_query($conn, $sqlAddcat);
        }
        if (!$resultaddcat) {
            die("query failed " . mysqli_error());
        }

    }

    $sql = "SELECT id_user, name_user FROM user";
    $re = mysqli_query($conn, $sql);
    if (mysqli_num_rows($re) > 0):
        ob_start();
        while ($row = mysqli_fetch_assoc($re)):
            echo "<option value=" . $row['id_user'] . ">" . $row['id_user'] . "-" . $row['name_user'] . "</option>";
        endwhile;
        $opt = ob_get_clean();
    endif;

    $sql = "SELECT * FROM category";
    $re = mysqli_query($conn, $sql);
    if (mysqli_num_rows($re) > 0):
        ob_start();
        while ($row = mysqli_fetch_assoc($re)):
            echo "<option value=" . $row['id_cat'] . ">" . $row['id_cat'] . "-" . $row['name_cat'] . "</option>";
        endwhile;
        $optcat = ob_get_clean();
    endif;
    ?>
    <div class="flex flex-col items-center justify-center" style="justify-content:center;height:40rem; ">
        <div class="bg-white max-w-2xl shadow overflow-hidden sm:rounded-lg"
            style="box-shadow: 0 5px 25px rgba(1 1 1 / 15%);">
            <div class="px-4 py-5 sm:px-6">
                <div class="flex items-center">
                    <img src="../../images/profile.jpg" alt="profile" style="width:8rem;height:8rem;">
                    <h3 class="text-lg leading-6 font-medium text-gray-900">
                        <?php echo $_SESSION['name'] ?>
                    </h3>
                </div>
                <p class="mt-1 max-w-2xl text-sm text-gray-500">
                    Details and informations about user.
                </p>
            </div>
            <div class="border-t border-gray-200">
                <dl>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Full name
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            <?php echo $_SESSION['name'] ?>
                        </dd>
                    </div>

                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Best techno
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            <?php echo $_SESSION['skills'] ?>
                        </dd>
                    </div>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Email address
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            <?php echo $_SESSION['email'] ?>
                        </dd>
                    </div>
                    <div class="bg-white px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Salary
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            $10,000
                        </dd>
                    </div>
                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            About
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            To get social media testimonials like these, keep your customers engaged with your social
                            media
                            accounts by posting regularly yourself
                        </dd>
                    </div>

                    <div class="bg-gray-50 px-4 py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
                        <dt class="text-sm font-medium text-gray-500">
                            Add Projet
                        </dt>
                        <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
                            <!-- Modal toggle -->
                            <button data-modal-target="crud-modal" data-modal-toggle="crud-modal"
                                class="text-green-700 hover:text-white border border-green-700 hover:bg-green-800 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-green-500 dark:text-green-500 dark:hover:text-white dark:hover:bg-green-600 dark:focus:ring-green-800"
                                type="button">
                                ADD
                            </button>

                            <!-- <button type="submit" name="yellow"
                                class="text-yellow-400 hover:text-white border border-yellow-400 hover:bg-yellow-500 focus:ring-4 focus:outline-none focus:ring-yellow-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-yellow-300 dark:text-yellow-300 dark:hover:text-white dark:hover:bg-yellow-400 dark:focus:ring-yellow-900">UPDATE</button>
                            <button type="submit" name="red"
                                class="text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 dark:border-red-500 dark:text-red-500 dark:hover:text-white dark:hover:bg-red-600 dark:focus:ring-red-900">DELETE</button> -->

                        </dd>
                    </div>

                    <!-- Main modal -->
                    <div id="crud-modal" tabindex="-1" aria-hidden="true"
                        class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                        <div class="relative p-4 w-full max-w-md max-h-full">
                            <!-- Modal content -->
                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                <!-- Modal header -->
                                <div
                                    class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">
                                        Create New Product
                                    </h3>
                                    <button type="button"
                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                        data-modal-toggle="crud-modal">
                                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 14 14">
                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                                stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                </div>
                                <!-- Modal body -->
                                <form class="p-4 md:p-5" method="POST">
                                    <div class="grid gap-4 mb-4 grid-cols-2">
                                        <div class="col-span-2">
                                            <label for="name"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Name</label>
                                            <input type="text" name="title_projet" id="name"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500"
                                                placeholder="Type Project Title" required="">
                                        </div>
                                        <div class="col-span-2 sm:col-span-1">
                                            <label for="id_user"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">User</label>
                                            <select id="id_user" name="id_user"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                <?= $opt ?>
                                            </select>
                                        </div>
                                        <div class="col-span-2 sm:col-span-1">
                                            <label for="category"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Category</label>
                                            <select id="category" name="category"
                                                class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500">
                                                <?= $optcat ?>
                                            </select>
                                        </div>
                                        <div class="col-span-2">
                                            <label for="description"
                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Project
                                                Description</label>
                                            <textarea id="description" rows="4" name="description"
                                                class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                                                placeholder="Write product description here"></textarea>
                                        </div>
                                    </div>
                                    <button type="submit" name="save"
                                        class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                        <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        Add new product
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>

                </dl>
            </div>
        </div>
    </div>
</body>

</html>