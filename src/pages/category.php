<?php
include 'dbh.inc.php';
$name_cat = "";

$errorMessage = "";
$successMessage = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name_cat = $_POST['name_cat'];

    do {
        if (empty($name_cat)) {
            $errorMessage = "The fields can't be blank";
            break;
        }

        $sqlAdd = "INSERT INTO category (name_cat) 
                    VALUES ('$name_cat')";
        $resultadd = mysqli_query($conn, $sqlAdd);

        if (!$resultadd) {
            $errorMessage = "Invalid query " . $conn->error;
            break;
        }

        $successMessage = "User added successfully";

        header('location: category.php');
        exit;
    } while (false);
}
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name_cat="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../dist/output.css">
    <link rel="stylesheet" href="../global.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="../../dist/sandbox.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Ruslan+Display&display=swap" rel="stylesheet">
    <title>PeoplePerTask</title>
</head>

<body class="font-poppins dark:bg-gray-900 text-mainBlue dark:text-white">
    <section class="flex flex-row">
        <side class="dark:bg-indigo-950 dark:border-none text-base rounded-3xl w-[25%] py-[1%] px-[1%] border">
            <?php include('../../nav.php') ?>
        </side>
        <main style="width: 100%;" class="bg-white dark:bg-gray-900">
            <?php  include('../../header.php') ?>
            <section>
                <div
                    class="table-auto text-black dark:text-white dark:bg-indigo-950 p-4 w-[90%] m-[2%] pl-[5%] py-[2%] rounded-2xl border dark:border-none">
                    <table class="w-[95%] border-2 border-slate- dark:border-white text-center">
                        <tr class="border-b-2 text-xl bg-mainBlue dark:bg-purple-500 text-white">
                            <th class="py-2">Id</th>
                            <th>name category</th>
                            <th></th>
                        </tr>
                        <tbody id="tbody">
                            <?php
                            $sql = "SELECT * FROM category ";
                            $result = mysqli_query($conn, $sql);
                            if (mysqli_num_rows($result) > 0):
                                while ($row = mysqli_fetch_assoc($result)):
                                    echo "<tr>
                                        <td>$row[id_cat]</td>
                                        <td>$row[name_cat]</td>
                                        <td>
                                            <a href='./editcat.php?id=$row[id_cat]'>
                                                <script src='https://cdn.lordicon.com/lordicon.js'></script>
                                                <lord-icon src='https://cdn.lordicon.com/ylvuooxd.json' trigger='loop'
                                                    delay='50' state='hover-line'
                                                    colors='primary:#b4b4b4,secondary:#545454,tertiary:#66ee78,quaternary:#3a3347'
                                                    style='width:25px;height:25px'>
                                                </lord-icon>
                                            </a>
                                            <a href='./deletecat.php?id=$row[id_cat]'>
                                                <script src='https://cdn.lordicon.com/lordicon.js'></script>
                                                <lord-icon src='https://cdn.lordicon.com/hjbrplwk.json' trigger='loop'
                                                    delay='500'
                                                    colors='primary:#646e78,secondary:#c71f16,tertiary:#ffffff,quaternary:#3a3347'
                                                    style='width:25px;height:25px'>
                                                </lord-icon>
                                            </a>
                                        </td>
                                    </tr>";
                                endwhile;
                            endif;
                            ?>
                        </tbody>
                    </table>
                    <button id="add"
                        class="bg-AddB dark:bg-slate-900 dark:border-violet-400 flex items-center justify-center rounded-[58px] h-16 border-AddCB border-2 w-[30%]  mx-[35%] mt-[2%] text-white dark:text-yellow-400 font-poppins">
                        <script src="https://cdn.lordicon.com/lordicon-1.4.0.js"></script>
                        <script src="https://cdn.lordicon.com/lordicon-1.4.0.js"></script>
                        <lord-icon src="https://cdn.lordicon.com/hqymfzvj.json" trigger="loop" delay="28"
                            colors="primary:#ffffff" style="width:28px;height:28px">
                        </lord-icon>
                        <p>Add a New Category</p>
                    </button>
                </div>
                <?php
                if (!empty($errorMessage)) {
                    echo "
                            <div class='popup fixed top-0 left-0 w-full h-screen bg-black bg-opacity-80' style='display:block;' id='okid' style='border-radius:10px; display:none;'>
                                <div class='fixed top-[30%] right-[30%] w-[40%] p-7 bg-white py-2 text-center text-black'>
                                    <script src='https://cdn.lordicon.com/lordicon.js'></script>
                                    <lord-icon
                                        src='https://cdn.lordicon.com/wkppeqfv.json'
                                        trigger='loop'
                                        stroke='bold'
                                     colors='primary:#e83a30,secondary:#e83a30'
                                        style='width:130px;height:130px'>
                                    </lord-icon>
                                    <p class='mb-[7%]'>$errorMessage</p>
                                    <button id='OK'>OK</button>
                                </div>
                            </div>
                            ";
                    $errorMessage = "";
                }
                ?>

                <!-- form -->
                <div class="fixed hidden top-0 left-0 w-full h-screen bg-black bg-opacity-80" id="formAdd">
                    <div class="fixed top-[30%] right-[30%] w-[45%] h-[40%] rounded-3xl bg-white py-2">
                        <button class="top-0 mx-[94%] w-10 h-10 rounded-full border-2 p-1 " id="closeButton">
                            <img src="../../images/close.svg" alt="close">
                        </button>
                        <div class="py-2 px-10 text-center">
                            <h3 class=" text-3xl subpixel-antialiased font-bold mb-[2%] dark:text-indigo-950">
                                Informations</h3>
                            <form class="bg-popup flex flex-col text-gray-500" method="post">
                                <input class="mb-[1%] rounded py-[1%] pl-[2%] border" type="text"
                                    placeholder="Category name" value="<?php echo $name_cat; ?>" name="name_cat"
                                    id="name_cat">
                                <button
                                    class="text-white text-2xl font-bold border mx-auto w-52 h-14 rounded-2xl bg-yellow-500"
                                    type="submit" id="save">save</button>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="hidden fixed top-0 left-0 w-full h-screen bg-black bg-opacity-80" id="formUpdate">
                    <div class="fixed top-[30%] right-[30%] w-[45%] h-[40%] rounded-3xl bg-white py-2">
                        <button class="top-0 mx-[94%] w-10 h-10 rounded-full border-2 p-1 " id="closeButton">
                            <img src="../../images/close.svg" alt="close">
                        </button>
                        <div class="py-2 px-10 text-center">
                            <h2 class="text-AddC text-3xl subpixel-antialiased font-bold mb-[2%] dark:text-indigo-950">
                                Modifier le projet</h2>
                            <form id="updateForm" class="bg-popup flex flex-col text-gray-500">
                                <input class="mb-[1%] rounded py-[1%] pl-[2%] border" type="text" placeholder="name cat"
                                    id="update-name">
                                <input class="mb-[1%] rounded py-[1%] pl-[2%] border" type="text"
                                    placeholder="Competence" id="update-project">
                                <input class="mb-[1%] rounded py-[1%] pl-[2%] border" type="text" placeholder="contact"
                                    id="update-contact">
                                <button
                                    class="text-white text-2xl font-bold border mx-auto w-52 h-14 rounded-2xl bg-yellow-500"
                                    type="button" id="update-save">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- popup -->
                <?php
                if (!empty($successMessage)) {
                    echo "
                        <div class='popup fixed top-0 left-0 w-full h-screen bg-black bg-opacity-80' id='sok' style='display:none;'>
                            <div class='fixed top-[30%] right-[30%] w-[40%] p-7 bg-white py-2 text-center text-black'>
                                <img class='mx-auto w-16 h-16' src='../../images/done.svg' alt=''>
                                <p class='mb-[7%]'>$successMessage</p>
                                <button id='OKi'>OK</button>
                            </div>
                        </div>
                        ";
                }
                ?>
            </section>
            <?php
            mysqli_close($conn);

            ?>
        </main class="bg-slate-50">
        <script>
            const closeButton = document.querySelector('#closeButton');
            const addform = document.querySelector('#formAdd');
            const add = document.querySelector('#add');

            const ok = document.querySelector('#OK');
            const OKi = document.querySelector('#OKi');

            const okid = document.querySelector('#okid');
            const sok = document.querySelector('#sok');

            closeButton.addEventListener('click', () => {
                addform.style.display = 'none';
            });
            add.addEventListener('click', () => {
                addform.style.display = 'block';
            });
            ok.addEventListener('click', () => {
                okid.style.display = 'none';
            });
            Oki.addEventListener('click', () => {
                sok.style.display = 'none';
            });
        </script>

</html>