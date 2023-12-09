<?php
include 'dbh.inc.php';

$name = $_POST['name'];

$sql = "SELECT * FROM projets WHERE title_projet LIKE '$name%'";
$query = mysqli_query($conn, $sql);
$data = '';

while ($row = mysqli_fetch_assoc($query)) {
    ?>
    <div
        class="lg:w-1/4 md:w-1/2 p-4 w-full ring-1 rounded-lg ring-gray-300 dark:ring-gray-700 bg-white dark:bg-gray-900">
        <h3 class="text-gray-900 font-bold text-lg p-2 lg:p-4 lg:text-xl tracking-widest title-font mb-1 dark:text-white">
            <a href="../src/error404.html">
                <?= $row['title_projet'] ?>
            </a>
        </h3>
        <p class="text-sm text-gray-400 pl-2 lg:pl-4">
            Fixed-price - Posted 3 days ago
        </p>
        <ul class="pl-2 py-4 lg:pt-4 lg:py-6 flex gap-20">
            <li>
                <p class="text-black font-semibold dark:text-white">
                    $1,000
                </p>
                <p class="text-sm pt-1 dark:text-gray-400">
                    Fixed-price
                </p>
            </li>
            <li>
                <p class="text-black font-semibold dark:text-white">
                    Intermediate
                </p>
                <p class="text-sm pt-1 dark:text-gray-400">
                    Experience level
                </p>
            </li>
        </ul>
        <p class="text-gray-400 truncate pl-2 lg:pl-4">
            <?= $row['descreption'] ?>
        </p>
        <br>
        <p class="text-gray-400 truncate pl-2 lg:pl-4">
            Category
        </p>
        <div>
            <ul class="pl-2 py-4 lg:pt-4 lg:py-10 flex gap-5">
                <li class="bg-orange-300 text-orange-600 rounded-3xl py-1.5 px-3 text-xs font-semibold">
                    website
                </li>
                <!-- Add more categories here using $row['category_field'] -->
            </ul>
            <div class="pl-2 py-4 lg:pt-4 lg:py-10">
                <a href="../src/error404.html"
                    class="bg-orange-600 text-white rounded-3xl py-2 px-4 text-sm font-semibold">See
                    more</a>
            </div>
        </div>
    </div>
    <?php
}

echo $data;
?>