<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../dist/output.css" />
    <script src="../../dist/sandbox.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/charts.css/dist/charts.min.css" />
    <title>Find A Work</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.2.0/flowbite.min.js"></script>
    <!--  -->
</head>

<body class="bg-gray-100 dark:bg-gray-900">
    <?php include "headerIndex.php";
    require "./dbh.inc.php";
    $sql = 'SELECT * FROM projets ORDER BY id_projet DESC';
    $result = mysqli_query($conn, $sql);

    $projects = mysqli_fetch_all($result, MYSQLI_ASSOC);


    $sqlo = 'SELECT * FROM offres ORDER BY id_offre DESC';
    $resulto = mysqli_query($conn, $sqlo);

    $offers = mysqli_fetch_all($resulto, MYSQLI_ASSOC);

    mysqli_close($conn);

    ?>
    <!-- search -->
    <div style="display:flex;justify-content:center;">
        <form class="flex items-center" style="width:23cm;">
            <label for="voice-search" class="sr-only">Search</label>
            <div class="relative w-full">
                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 21 21">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M11.15 5.6h.01m3.337 1.913h.01m-6.979 0h.01M5.541 11h.01M15 15h2.706a1.957 1.957 0 0 0 1.883-1.325A9 9 0 1 0 2.043 11.89 9.1 9.1 0 0 0 7.2 19.1a8.62 8.62 0 0 0 3.769.9A2.013 2.013 0 0 0 13 18v-.857A2.034 2.034 0 0 1 15 15Z" />
                    </svg>
                </div>
                <input type="text" id="getName"
                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                    placeholder="Search Mockups, Logos, Design Templates..." required>
                <button type="button" class="absolute inset-y-0 end-0 flex items-center pe-3">
                    <svg class="w-4 h-4 text-gray-500 dark:text-gray-400 hover:text-gray-900 dark:hover:text-white"
                        aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 16 20">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M15 7v3a5.006 5.006 0 0 1-5 5H6a5.006 5.006 0 0 1-5-5V7m7 9v3m-3 0h6M7 1h2a3 3 0 0 1 3 3v5a3 3 0 0 1-3 3H7a3 3 0 0 1-3-3V4a3 3 0 0 1 3-3Z" />
                    </svg>
                </button>
            </div>
            <button type="submit"
                class="inline-flex items-center py-2.5 px-3 ms-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg class="w-4 h-4 me-2" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 20 20">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z" />
                </svg>Search
            </button>
        </form>
    </div>
    <!-- searchh -->
    <div class="bg-gray-100 dark:bg-gray-900">
        <div>
            <div class="relative z-40 lg:hidden" role="dialog" aria-modal="true">
                <div class="fixed inset-0 bg-black bg-opacity-25"></div>

                <div class="fixed inset-0 z-40 flex">
                    <div
                        class="relative ml-auto flex h-full w-full max-w-xs flex-col overflow-y-auto bg-white py-4 pb-12 shadow-xl dark:bg-gray-900">
                        <div class="flex items-center justify-between px-4">
                            <h2 class="text-lg font-medium text-gray-900 dark:text-white">
                                Filters
                            </h2>
                            <button type="button"
                                class="-mr-2 flex h-10 w-10 items-center justify-center rounded-md bg-white p-2 text-gray-400 dark:bg-gray-900">
                                <span class="sr-only dark:text-white">Close menu</span>
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                    stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>

                        <!-- Filters -->
                        <form class="mt-4 border-t border-gray-200">
                            <h3 class="sr-only">Categories</h3>
                            <ul role="list" class="px-2 py-3 font-medium text-gray-900">
                                <li>
                                    <a href="#" class="block px-2 py-3 dark:text-white">It & Development</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-2 py-3 dark:text-white">Design</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-2 py-3 dark:text-white">Video Editing</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-2 py-3 dark:text-white">Translation</a>
                                </li>
                                <li>
                                    <a href="#" class="block px-2 py-3 dark:text-white">Micro Services</a>
                                </li>
                            </ul>

                            <div class="border-t border-gray-200 px-4 py-6">
                                <h3 class="-mx-2 -my-3 flow-root">
                                    <!-- Expand/collapse section button -->
                                    <button type="button"
                                        class="flex w-full items-center justify-between bg-white px-2 py-3 text-gray-400 hover:text-gray-500 dark:bg-gray-900"
                                        aria-controls="filter-section-mobile-0" aria-expanded="false">
                                        <span class="font-medium text-gray-900 dark:text-white">Payment Terms</span>
                                        <span class="ml-6 flex items-center">
                                            <!-- Expand icon, show/hide based on section open state. -->
                                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"
                                                aria-hidden="true">
                                                <path
                                                    d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
                                            </svg>
                                            <!-- Collapse icon, show/hide based on section open state. -->
                                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"
                                                aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                    </button>
                                </h3>
                                <!-- Filter section, show/hide based on section state. -->
                                <div class="pt-6" id="filter-section-mobile-0">
                                    <div class="space-y-6">
                                        <div class="flex items-center">
                                            <input id="filter-mobile-color-0" name="color[]" value="all" type="checkbox"
                                                class="h-4 w-4 rounded border-gray-300 text-orange-600 focus:ring-orange-500" />
                                            <label for="filter-mobile-color-0"
                                                class="ml-3 min-w-0 flex-1 text-gray-500">All</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="filter-mobile-color-2" name="color[]" value="hourly"
                                                type="checkbox" checked
                                                class="h-4 w-4 rounded border-gray-300 text-orange-600 focus:ring-orange-500" />
                                            <label for="filter-mobile-color-2"
                                                class="ml-3 min-w-0 flex-1 text-gray-500">Hourly</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="filter-mobile-color-3" name="color[]" value="fixed-price"
                                                type="checkbox"
                                                class="h-4 w-4 rounded border-gray-300 text-orange-600 focus:ring-orange-500" />
                                            <label for="filter-mobile-color-3"
                                                class="ml-3 min-w-0 flex-1 text-gray-500">Fixed Price</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="border-t border-gray-200 px-4 py-6">
                                <h3 class="-mx-2 -my-3 flow-root">
                                    <!-- Expand/collapse section button -->
                                    <button type="button"
                                        class="flex w-full items-center justify-between bg-white px-2 py-3 text-gray-400 hover:text-gray-500 dark:bg-gray-900"
                                        aria-controls="filter-section-mobile-0" aria-expanded="false">
                                        <span class="font-medium text-gray-900 dark:text-white">Level</span>
                                        <span class="ml-6 flex items-center">
                                            <!-- Expand icon, show/hide based on section open state. -->
                                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"
                                                aria-hidden="true">
                                                <path
                                                    d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
                                            </svg>
                                            <!-- Collapse icon, show/hide based on section open state. -->
                                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"
                                                aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                    </button>
                                </h3>
                                <!-- Filter section, show/hide based on section state. -->
                                <div class="pt-6" id="filter-section-mobile-0">
                                    <div class="space-y-6">
                                        <div class="flex items-center">
                                            <input id="filter-mobile-color-0" name="color[]" value="all" type="checkbox"
                                                class="h-4 w-4 rounded border-gray-300 text-orange-600 focus:ring-orange-500" />
                                            <label for="filter-mobile-color-0"
                                                class="ml-3 min-w-0 flex-1 text-gray-500">Expert</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="filter-mobile-color-2" name="color[]" value="hourly"
                                                type="checkbox" checked
                                                class="h-4 w-4 rounded border-gray-300 text-orange-600 focus:ring-orange-500" />
                                            <label for="filter-mobile-color-2"
                                                class="ml-3 min-w-0 flex-1 text-gray-500">Intermediate</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="filter-mobile-color-3" name="color[]" value="fixed-price"
                                                type="checkbox"
                                                class="h-4 w-4 rounded border-gray-300 text-orange-600 focus:ring-orange-500" />
                                            <label for="filter-mobile-color-3"
                                                class="ml-3 min-w-0 flex-1 text-gray-500">Beginner</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="border-t border-gray-200 px-4 py-6">
                                <h3 class="-mx-2 -my-3 flow-root">
                                    <!-- Expand/collapse section button -->
                                    <button type="button"
                                        class="flex w-full items-center justify-between bg-white px-2 py-3 text-gray-400 hover:text-gray-500 dark:bg-gray-900"
                                        aria-controls="filter-section-mobile-1" aria-expanded="false">
                                        <span class="font-medium text-gray-900 dark:text-white">Quotes Received</span>
                                        <span class="ml-6 flex items-center">
                                            <!-- Expand icon, show/hide based on section open state. -->
                                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"
                                                aria-hidden="true">
                                                <path
                                                    d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
                                            </svg>
                                            <!-- Collapse icon, show/hide based on section open state. -->
                                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"
                                                aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                    </button>
                                </h3>
                                <!-- Filter section, show/hide based on section state. -->
                                <div class="pt-6" id="filter-section-mobile-1">
                                    <div class="space-y-6">
                                        <div class="flex items-center">
                                            <input id="filter-mobile-category-0" name="category[]" value="any"
                                                type="checkbox"
                                                class="h-4 w-4 rounded border-gray-300 text-orange-600 focus:ring-orange-500" />
                                            <label for="filter-mobile-category-0"
                                                class="ml-3 min-w-0 flex-1 text-gray-500">Any</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="filter-mobile-category-1" name="category[]" value="below-10"
                                                type="checkbox"
                                                class="h-4 w-4 rounded border-gray-300 text-orange-600 focus:ring-orange-500" />
                                            <label for="filter-mobile-category-1"
                                                class="ml-3 min-w-0 flex-1 text-gray-500">Below 10</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="filter-mobile-category-2" name="category[]" value="below-20"
                                                type="checkbox" checked
                                                class="h-4 w-4 rounded border-gray-300 text-orange-600 focus:ring-orange-500" />
                                            <label for="filter-mobile-category-2"
                                                class="ml-3 min-w-0 flex-1 text-gray-500">Below 20</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="filter-mobile-category-3" name="category[]" value="below-30"
                                                type="checkbox"
                                                class="h-4 w-4 rounded border-gray-300 text-orange-600 focus:ring-orange-500" />
                                            <label for="filter-mobile-category-3"
                                                class="ml-3 min-w-0 flex-1 text-gray-500">Below 30</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="filter-mobile-category-4" name="category[]" value="below-50"
                                                type="checkbox"
                                                class="h-4 w-4 rounded border-gray-300 text-orange-600 focus:ring-orange-500" />
                                            <label for="filter-mobile-category-4"
                                                class="ml-3 min-w-0 flex-1 text-gray-500">Below 50</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="border-t border-gray-200 px-4 py-6">
                                <h3 class="-mx-2 -my-3 flow-root">
                                    <!-- Expand/collapse section button -->
                                    <button type="button"
                                        class="flex w-full items-center justify-between bg-white px-2 py-3 text-gray-400 hover:text-gray-500 dark:bg-gray-900"
                                        aria-controls="filter-section-mobile-2" aria-expanded="false">
                                        <span class="font-medium text-gray-900 dark:text-white">Location</span>
                                        <span class="ml-6 flex items-center">
                                            <!-- Expand icon, show/hide based on section open state. -->
                                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"
                                                aria-hidden="true">
                                                <path
                                                    d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
                                            </svg>
                                            <!-- Collapse icon, show/hide based on section open state. -->
                                            <svg class="h-5 w-5" viewBox="0 0 20 20" fill="currentColor"
                                                aria-hidden="true">
                                                <path fill-rule="evenodd"
                                                    d="M4 10a.75.75 0 01.75-.75h10.5a.75.75 0 010 1.5H4.75A.75.75 0 014 10z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </span>
                                    </button>
                                </h3>
                                <!-- Filter section, show/hide based on section state. -->
                                <div class="pt-6" id="filter-section-mobile-2">
                                    <div class="space-y-6">
                                        <div class="flex items-center">
                                            <input id="filter-mobile-size-0" name="size[]" value="united-states"
                                                type="checkbox"
                                                class="h-4 w-4 rounded border-gray-300 text-orange-600 focus:ring-orange-500" />
                                            <label for="filter-mobile-size-0"
                                                class="ml-3 min-w-0 flex-1 text-gray-500">United States (57)</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="filter-mobile-size-1" name="size[]" value="india" type="checkbox"
                                                class="h-4 w-4 rounded border-gray-300 text-orange-600 focus:ring-orange-500" />
                                            <label for="filter-mobile-size-1"
                                                class="ml-3 min-w-0 flex-1 text-gray-500">India (22)</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="filter-mobile-size-2" name="size[]" value="united-kingdom"
                                                type="checkbox"
                                                class="h-4 w-4 rounded border-gray-300 text-orange-600 focus:ring-orange-500" />
                                            <label for="filter-mobile-size-2"
                                                class="ml-3 min-w-0 flex-1 text-gray-500">United Kingdom (8)</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="filter-mobile-size-3" name="size[]" value="canada"
                                                type="checkbox"
                                                class="h-4 w-4 rounded border-gray-300 text-orange-600 focus:ring-orange-500" />
                                            <label for="filter-mobile-size-3" class="ml-3 min-w-0 flex-1 text-gray-500">
                                                Canada (7)</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="filter-mobile-size-4" name="size[]" value="philippines"
                                                type="checkbox"
                                                class="h-4 w-4 rounded border-gray-300 text-orange-600 focus:ring-orange-500" />
                                            <label for="filter-mobile-size-4"
                                                class="ml-3 min-w-0 flex-1 text-gray-500">Philippines (5)</label>
                                        </div>
                                        <div class="flex items-center">
                                            <input id="filter-mobile-size-5" name="size[]" value="moroccco"
                                                type="checkbox" checked
                                                class="h-4 w-4 rounded border-gray-300 text-orange-600 focus:ring-orange-500" />
                                            <label for="filter-mobile-size-5"
                                                class="ml-3 min-w-0 flex-1 text-gray-500">Morocco (2)</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <main class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex items-baseline justify-between border-b border-gray-200 pb-6 pt-24">
                    <h1 class="text-4xl font-bold tracking-tight text-gray-900 dark:text-white">
                        Find Freelance Jobs
                    </h1>

                    <div class="relative inline-block text-left">
                        <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown-2"
                            class="inline-flex py-2 pr-4 pl-3 cursor-pointer text-black lg:p-0 dark:text-white"
                            type="button">
                            Sort
                            <svg class="h-5 w-5 ml-2.5 mt-1" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd"
                                    d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="dropdown-2"
                            class="absolute right-0 z-10 mt-2 w-40 origin-top-right rounded-md bg-white shadow-2xl focus:outline-none dark:bg-gray-800">
                            <div class="py-1">
                                <a href="#" class="font-medium text-gray-900 block px-4 py-2 text-sm dark:text-white"
                                    role="menuitem" tabindex="-1" id="menu-item-0">Most Popular</a>
                                <a href="#" class="text-gray-500 dark:text-gray-400 block px-4 py-2 text-sm"
                                    role="menuitem" tabindex="-1" id="menu-item-1">Best Rating</a>
                                <a href="#" class="text-gray-500 dark:text-gray-400 block px-4 py-2 text-sm"
                                    role="menuitem" tabindex="-1" id="menu-item-2">Newest</a>
                                <a href="#" class="text-gray-500 dark:text-gray-400 block px-4 py-2 text-sm"
                                    role="menuitem" tabindex="-1" id="menu-item-3">Price: Low to High</a>
                                <a href="#" class="text-gray-500 dark:text-gray-400 block px-4 py-2 text-sm"
                                    role="menuitem" tabindex="-1" id="menu-item-4">Price: High to Low</a>
                            </div>
                        </div>

                        <button type="button" class="-m-2 ml-5 p-2 text-gray-400 hover:text-gray-500 sm:ml-7">
                            <span class="sr-only">View grid</span>
                            <svg class="h-5 w-5" aria-hidden="true" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M4.25 2A2.25 2.25 0 002 4.25v2.5A2.25 2.25 0 004.25 9h2.5A2.25 2.25 0 009 6.75v-2.5A2.25 2.25 0 006.75 2h-2.5zm0 9A2.25 2.25 0 002 13.25v2.5A2.25 2.25 0 004.25 18h2.5A2.25 2.25 0 009 15.75v-2.5A2.25 2.25 0 006.75 11h-2.5zm9-9A2.25 2.25 0 0011 4.25v2.5A2.25 2.25 0 0013.25 9h2.5A2.25 2.25 0 0018 6.75v-2.5A2.25 2.25 0 0015.75 2h-2.5zm0 9A2.25 2.25 0 0011 13.25v2.5A2.25 2.25 0 0013.25 18h2.5A2.25 2.25 0 0018 15.75v-2.5A2.25 2.25 0 0015.75 11h-2.5z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                        <button type="button" class="-m-2 ml-4 p-2 text-gray-400 hover:text-gray-500 sm:ml-6 lg:hidden">
                            <span class="sr-only">Filters</span>
                            <svg class="h-5 w-5" aria-hidden="true" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd"
                                    d="M2.628 1.601C5.028 1.206 7.49 1 10 1s4.973.206 7.372.601a.75.75 0 01.628.74v2.288a2.25 2.25 0 01-.659 1.59l-4.682 4.683a2.25 2.25 0 00-.659 1.59v3.037c0 .684-.31 1.33-.844 1.757l-1.937 1.55A.75.75 0 018 18.25v-5.757a2.25 2.25 0 00-.659-1.591L2.659 6.22A2.25 2.25 0 012 4.629V2.34a.75.75 0 01.628-.74z"
                                    clip-rule="evenodd" />
                            </svg>
                        </button>
                    </div>
                </div>

                <section aria-labelledby="products-heading" class="pb-24 pt-6">
                    <h2 id="products-heading" class="sr-only">Products</h2>

                    <div class="grid grid-cols-1 gap-x-8 gap-y-10 lg:grid-cols-4">
                        <!-- Filters -->
                        <form class="hidden lg:block">
                            <h3 class="sr-only dark:text-white">Categories</h3>
                            <ul role="list"
                                class="space-y-4 border-b border-gray-200 pb-6 text-sm font-medium text-gray-900 dark:text-white">
                                <li>
                                    <a href="#">IT & Development</a>
                                </li>
                                <li>
                                    <a href="#">Design</a>
                                </li>
                                <li>
                                    <a href="#">Video Editing</a>
                                </li>
                                <li>
                                    <a href="#">Translation</a>
                                </li>
                                <li>
                                    <a href="#">Micro Services</a>
                                </li>
                            </ul>

                            <div class="mt-12 space-y-8">
                                <!-- payment -->
                                <details class="group [&_summary::-webkit-details-marker]:hidden" open>
                                    <summary
                                        class="flex cursor-pointer items-center justify-between gap-1.5 rounded-lg text-gray-900 dark:text-white">
                                        <h3 class="font-medium">Payment Terms</h3>

                                        <svg class="h-5 w-5 shrink-0 transition duration-300 group-open:-rotate-180"
                                            viewBox="0 0 24 24" fill="currentColor">
                                            <path
                                                d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
                                        </svg>
                                    </summary>

                                    <div class="pt-6 pl-3 dark:text-white" id="filter-section-0">
                                        <div class="space-y-4">
                                            <div class="flex items-center">
                                                <input id="filter-mobile-color-0" name="color[]" value="all"
                                                    type="checkbox"
                                                    class="h-4 w-4 rounded border-gray-300 text-orange-600 focus:ring-orange-500" />
                                                <label for="filter-mobile-color-0"
                                                    class="ml-3 min-w-0 flex-1 text-gray-500">All</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="filter-mobile-color-2" name="color[]" value="hourly"
                                                    type="checkbox" checked
                                                    class="h-4 w-4 rounded border-gray-300 text-orange-600 focus:ring-orange-500" />
                                                <label for="filter-mobile-color-2"
                                                    class="ml-3 min-w-0 flex-1 text-gray-500">Hourly</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="filter-mobile-color-3" name="color[]" value="fixed-price"
                                                    type="checkbox"
                                                    class="h-4 w-4 rounded border-gray-300 text-orange-600 focus:ring-orange-500" />
                                                <label for="filter-mobile-color-3"
                                                    class="ml-3 min-w-0 flex-1 text-gray-500">Fixed Price</label>
                                            </div>
                                        </div>
                                    </div>
                                </details>
                                <!-- level -->
                                <details class="group [&_summary::-webkit-details-marker]:hidden">
                                    <summary
                                        class="flex cursor-pointer items-center justify-between gap-1.5 rounded-lg text-gray-900 dark:text-white">
                                        <h3 class="font-medium">Level</h3>

                                        <svg class="h-5 w-5 shrink-0 transition duration-300 group-open:-rotate-180"
                                            viewBox="0 0 24 24" fill="currentColor">
                                            <path
                                                d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
                                        </svg>
                                    </summary>
                                    <div class="pt-6 pl-3 dark:text-white" id="filter-section-0">
                                        <div class="space-y-4">
                                            <div class="flex items-center">
                                                <input id="filter-mobile-category-0" name="category[]" value="any"
                                                    type="checkbox" checked
                                                    class="h-4 w-4 rounded border-gray-300 text-orange-600 focus:ring-orange-500" />
                                                <label for="filter-mobile-category-0"
                                                    class="ml-3 min-w-0 flex-1 text-gray-500">Expert</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="filter-mobile-category-1" name="category[]" value="below-10"
                                                    type="checkbox"
                                                    class="h-4 w-4 rounded border-gray-300 text-orange-600 focus:ring-orange-500" />
                                                <label for="filter-mobile-category-1"
                                                    class="ml-3 min-w-0 flex-1 text-gray-500">Intermediate</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="filter-mobile-category-2" name="category[]" value="below-20"
                                                    type="checkbox"
                                                    class="h-4 w-4 rounded border-gray-300 text-orange-600 focus:ring-orange-500" />
                                                <label for="filter-mobile-category-2"
                                                    class="ml-3 min-w-0 flex-1 text-gray-500">Beginner</label>
                                            </div>
                                        </div>
                                    </div>
                                </details>
                                <!-- quotes -->
                                <details class="group [&_summary::-webkit-details-marker]:hidden">
                                    <summary
                                        class="flex cursor-pointer items-center justify-between gap-1.5 rounded-lg text-gray-900 dark:text-white">
                                        <h3 class="font-medium">Quotes Received</h3>

                                        <svg class="h-5 w-5 shrink-0 transition duration-300 group-open:-rotate-180"
                                            viewBox="0 0 24 24" fill="currentColor">
                                            <path
                                                d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
                                        </svg>
                                    </summary>
                                    <div class="pt-6 pl-3 dark:text-white" id="filter-section-0">
                                        <div class="space-y-4">
                                            <div class="flex items-center">
                                                <input id="filter-mobile-category-0" name="category[]" value="any"
                                                    type="checkbox"
                                                    class="h-4 w-4 rounded border-gray-300 text-orange-600 focus:ring-orange-500" />
                                                <label for="filter-mobile-category-0"
                                                    class="ml-3 min-w-0 flex-1 text-gray-500">Any</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="filter-mobile-category-1" name="category[]" value="below-10"
                                                    type="checkbox"
                                                    class="h-4 w-4 rounded border-gray-300 text-orange-600 focus:ring-orange-500" />
                                                <label for="filter-mobile-category-1"
                                                    class="ml-3 min-w-0 flex-1 text-gray-500">Below 10</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="filter-mobile-category-2" name="category[]" value="below-20"
                                                    type="checkbox" checked
                                                    class="h-4 w-4 rounded border-gray-300 text-orange-600 focus:ring-orange-500" />
                                                <label for="filter-mobile-category-2"
                                                    class="ml-3 min-w-0 flex-1 text-gray-500">Below 20</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="filter-mobile-category-3" name="category[]" value="below-30"
                                                    type="checkbox"
                                                    class="h-4 w-4 rounded border-gray-300 text-orange-600 focus:ring-orange-500" />
                                                <label for="filter-mobile-category-3"
                                                    class="ml-3 min-w-0 flex-1 text-gray-500">Below 30</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="filter-mobile-category-4" name="category[]" value="below-50"
                                                    type="checkbox"
                                                    class="h-4 w-4 rounded border-gray-300 text-orange-600 focus:ring-orange-500" />
                                                <label for="filter-mobile-category-4"
                                                    class="ml-3 min-w-0 flex-1 text-gray-500">Below 50</label>
                                            </div>
                                        </div>
                                    </div>
                                </details>
                                <!-- location -->
                                <details class="group [&_summary::-webkit-details-marker]:hidden">
                                    <summary
                                        class="flex cursor-pointer items-center justify-between gap-1.5 rounded-lg text-gray-900 dark:text-white">
                                        <h3 class="font-medium">Location</h3>
                                        <svg class="h-5 w-5 shrink-0 transition duration-300 group-open:-rotate-180"
                                            viewBox="0 0 24 24" fill="currentColor">
                                            <path
                                                d="M10.75 4.75a.75.75 0 00-1.5 0v4.5h-4.5a.75.75 0 000 1.5h4.5v4.5a.75.75 0 001.5 0v-4.5h4.5a.75.75 0 000-1.5h-4.5v-4.5z" />
                                        </svg>
                                    </summary>

                                    <div class="pt-6 pl-3 dark:text-white" id="filter-section-0">
                                        <div class="space-y-4">
                                            <div class="flex items-center">
                                                <input id="filter-mobile-size-0" name="size[]" value="united-states"
                                                    type="checkbox"
                                                    class="h-4 w-4 rounded border-gray-300 text-orange-600 focus:ring-orange-500" />
                                                <label for="filter-mobile-size-0"
                                                    class="ml-3 min-w-0 flex-1 text-gray-500">United States (57)</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="filter-mobile-size-1" name="size[]" value="india"
                                                    type="checkbox"
                                                    class="h-4 w-4 rounded border-gray-300 text-orange-600 focus:ring-orange-500" />
                                                <label for="filter-mobile-size-1"
                                                    class="ml-3 min-w-0 flex-1 text-gray-500">India (22)</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="filter-mobile-size-2" name="size[]" value="united-kingdom"
                                                    type="checkbox"
                                                    class="h-4 w-4 rounded border-gray-300 text-orange-600 focus:ring-orange-500" />
                                                <label for="filter-mobile-size-2"
                                                    class="ml-3 min-w-0 flex-1 text-gray-500">United Kingdom (8)</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="filter-mobile-size-3" name="size[]" value="canada"
                                                    type="checkbox"
                                                    class="h-4 w-4 rounded border-gray-300 text-orange-600 focus:ring-orange-500" />
                                                <label for="filter-mobile-size-3"
                                                    class="ml-3 min-w-0 flex-1 text-gray-500">
                                                    Canada (7)</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="filter-mobile-size-4" name="size[]" value="philippines"
                                                    type="checkbox"
                                                    class="h-4 w-4 rounded border-gray-300 text-orange-600 focus:ring-orange-500" />
                                                <label for="filter-mobile-size-4"
                                                    class="ml-3 min-w-0 flex-1 text-gray-500">Philippines (5)</label>
                                            </div>
                                            <div class="flex items-center">
                                                <input id="filter-mobile-size-5" name="size[]" value="moroccco"
                                                    type="checkbox" checked
                                                    class="h-4 w-4 rounded border-gray-300 text-orange-600 focus:ring-orange-500" />
                                                <label for="filter-mobile-size-5"
                                                    class="ml-3 min-w-0 flex-1 text-gray-500">Morocco (2)</label>
                                            </div>
                                        </div>
                                    </div>
                                </details>
                            </div>
                        </form>

                        <!-- Product grid -->
                        <div class="lg:col-span-3">
                            <section class="text-gray-600 body-font">
                                <div class="container px-5 py-24 mx-auto">
                                    <div class="flex flex-wrap -m-4">
                                        <?php foreach ($projects as $project): ?>
                                            <?php
                                            // Find the corresponding offer for the current project
                                            $matchingOffer = null;
                                            foreach ($offers as $offer) {
                                                if ($offer['id_projet'] == $project['id_projet']) {
                                                    $matchingOffer = $offer;
                                                    break;
                                                }
                                            }
                                            ?>
                                            <div id="searchResultsContainer">
                                                <div id="showdata"
                                                    class="lg:w-1/4 md:w-1/2 p-4 w-full ring-1 rounded-lg ring-gray-300 dark:ring-gray-700 bg-white dark:bg-gray-900">
                                                    <h3
                                                        class="text-gray-900 font-bold text-lg p-2 lg:p-4 lg:text-xl tracking-widest title-font mb-1 dark:text-white">
                                                        <a href="../src/error404.html">
                                                            <?= $project['title_projet'] ?>
                                                        </a>
                                                    </h3>
                                                    <p class="text-sm text-gray-400 pl-2 lg:pl-4">
                                                        Fixed-price - Posted 3 days ago
                                                    </p>
                                                    <ul class="pl-2 py-4 lg:pt-4 lg:py-6 flex gap-20">
                                                        <li>
                                                            <p class="text-black font-semibold dark:text-white">
                                                                <?php
                                                                if ($matchingOffer) {
                                                                    echo $matchingOffer['montant'];
                                                                } else {
                                                                    echo "No offer available";
                                                                }
                                                                ?>
                                                            </p>
                                                            <p class="text-sm pt-1 dark:text-gray-400">
                                                                Fixed-price
                                                            </p>
                                                        </li>
                                                        <li>
                                                            <p class="text-black font-semibold dark:text-white">
                                                                Delai
                                                            </p>
                                                            <p class="text-sm pt-1 dark:text-gray-400">
                                                                <?php if ($matchingOffer) {
                                                                    echo $matchingOffer['delai'];
                                                                } else {
                                                                    echo "No offer available";
                                                                } ?>
                                                            </p>
                                                        </li>
                                                    </ul>
                                                    <p class="text-gray-400 truncate pl-2 lg:pl-4">
                                                        <?= $project['descreption'] ?>
                                                    </p>
                                                    <br>
                                                    <p class="text-gray-400 truncate pl-2 lg:pl-4">
                                                        Category
                                                    </p>
                                                    <div>
                                                        <ul class="pl-2 py-4 lg:pt-4 lg:py-10 flex gap-5">
                                                            <li
                                                                class="bg-orange-300 text-orange-600 rounded-3xl py-1.5 px-3 text-xs font-semibold">
                                                                website
                                                            </li>
                                                            <li
                                                                class="bg-orange-300 text-orange-600 rounded-3xl py-1.5 px-3 text-xs font-semibold">
                                                                HTML
                                                            </li>
                                                            <li
                                                                class="bg-orange-300 text-orange-600 rounded-3xl py-1.5 px-3 text-xs font-semibold">
                                                                CSS
                                                            </li>
                                                            <li
                                                                class="bg-orange-300 text-orange-600 rounded-3xl py-1.5 px-3 text-xs font-semibold">
                                                                JavaScript
                                                            </li>
                                                            <li
                                                                class="bg-orange-300 text-orange-600 rounded-3xl py-1.5 px-3 text-xs font-semibold">
                                                                Web Flow
                                                            </li>
                                                            <li
                                                                class="bg-orange-300 text-orange-600 rounded-3xl py-1.5 px-3 text-xs font-semibold">
                                                                User Experience
                                                            </li>
                                                        </ul>
                                                        <div class="pl-2 py-4 lg:pt-4 lg:py-10">
                                                            <a href="../src/error404.html"
                                                                class="bg-orange-600 text-white rounded-3xl py-2 px-4 text-sm font-semibold">See
                                                                more</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <?php endforeach; ?>

                                    </div>
                                </div>
                            </section>
                            <div class="flex">
                                <!-- Previous Button -->
                                <a href="#"
                                    class="flex items-center justify-center px-4 h-10 text-base font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                    Previous
                                </a>

                                <!-- Next Button -->
                                <a href="#"
                                    class="flex items-center justify-center px-4 h-10 ml-3 text-base font-medium text-gray-500 bg-white border border-gray-300 rounded-lg hover:bg-gray-100 hover:text-gray-700 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white">
                                    Next
                                </a>
                            </div>
                        </div>

                    </div>
                </section>
            </main>
        </div>
    </div>
    <footer class="p-4 bg-white sm:p-6 dark:bg-gray-800">
        <div class="mx-auto max-w-screen-xl ">
            <div class="md:flex md:justify-between">
                <div class="mb-6 md:mb-0">
                    <a href="../src/index.html" class="flex items-center">
                        <img src="../images/logo.webp" class="mr-3 h-6 sm:h-9" alt="peoplepertask Logo">
                        <span
                            class="self-center lg:visible: lg:text-xl font-semibold whitespace-nowrap dark:text-white">PeoplePerTask</span>
                    </a>
                </div>
                <div class="grid grid-cols-2 gap-8 px-4 py-6 lg:py-8 md:grid-cols-4">
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">
                            Company
                        </h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="mb-4">
                                <a href="./about.html" class="hover:underline">About</a>
                            </li>
                            <li class="mb-4">
                                <a href="./about.html" class="hover:underline">Careers</a>
                            </li>
                            <li class="mb-4">
                                <a href="./about.html" class="hover:underline">Brand Center</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">
                            Help center
                        </h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="mb-4">
                                <a href="../src/error404.html" class="hover:underline">Discord Server</a>
                            </li>
                            <li class="mb-4">
                                <a href="../src/error404.html" class="hover:underline">Twitter</a>
                            </li>
                            <li class="mb-4">
                                <a href="./contact.html" class="hover:underline">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">
                            Legal
                        </h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="mb-4">
                                <a href="../src/error404.html" class="hover:underline">Privacy Policy</a>
                            </li>
                            <li class="mb-4">
                                <a href="../src/error404.html" class="hover:underline">Licensing</a>
                            </li>
                            <li class="mb-4">
                                <a href="../src/error404.html" class="hover:underline">Terms &amp; Conditions</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">
                            Download
                        </h2>
                        <ul class="text-gray-500 dark:text-gray-400 font-medium">
                            <li class="mb-4">
                                <a href="../src/error404.html" class="hover:underline">iOS</a>
                            </li>
                            <li class="mb-4">
                                <a href="../src/error404.html" class="hover:underline">Android</a>
                            </li>
                            <li class="mb-4">
                                <a href="../src/error404.html" class="hover:underline">Windows</a>
                            </li>
                            <li class="mb-4">
                                <a href="../src/error404.html" class="hover:underline">MacOS</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8">
            <div class="sm:flex sm:items-center sm:justify-between">
                <span class="text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="#"
                        class="hover:underline">PeoplePerTask™</a>. All
                    Rights Reserved.
                </span>
                <div class="flex mt-4 space-x-6 sm:justify-center sm:mt-0">
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M22 12c0-5.523-4.477-10-10-10S2 6.477 2 12c0 4.991 3.657 9.128 8.438 9.878v-6.987h-2.54V12h2.54V9.797c0-2.506 1.492-3.89 3.777-3.89 1.094 0 2.238.195 2.238.195v2.46h-1.26c-1.243 0-1.63.771-1.63 1.562V12h2.773l-.443 2.89h-2.33v6.988C18.343 21.128 22 16.991 22 12z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12.315 2c2.43 0 2.784.013 3.808.06 1.064.049 1.791.218 2.427.465a4.902 4.902 0 011.772 1.153 4.902 4.902 0 011.153 1.772c.247.636.416 1.363.465 2.427.048 1.067.06 1.407.06 4.123v.08c0 2.643-.012 2.987-.06 4.043-.049 1.064-.218 1.791-.465 2.427a4.902 4.902 0 01-1.153 1.772 4.902 4.902 0 01-1.772 1.153c-.636.247-1.363.416-2.427.465-1.067.048-1.407.06-4.123.06h-.08c-2.643 0-2.987-.012-4.043-.06-1.064-.049-1.791-.218-2.427-.465a4.902 4.902 0 01-1.772-1.153 4.902 4.902 0 01-1.153-1.772c-.247-.636-.416-1.363-.465-2.427-.047-1.024-.06-1.379-.06-3.808v-.63c0-2.43.013-2.784.06-3.808.049-1.064.218-1.791.465-2.427a4.902 4.902 0 011.153-1.772A4.902 4.902 0 015.45 2.525c.636-.247 1.363-.416 2.427-.465C8.901 2.013 9.256 2 11.685 2h.63zm-.081 1.802h-.468c-2.456 0-2.784.011-3.807.058-.975.045-1.504.207-1.857.344-.467.182-.8.398-1.15.748-.35.35-.566.683-.748 1.15-.137.353-.3.882-.344 1.857-.047 1.023-.058 1.351-.058 3.807v.468c0 2.456.011 2.784.058 3.807.045.975.207 1.504.344 1.857.182.466.399.8.748 1.15.35.35.683.566 1.15.748.353.137.882.3 1.857.344 1.054.048 1.37.058 4.041.058h.08c2.597 0 2.917-.01 3.96-.058.976-.045 1.505-.207 1.858-.344.466-.182.8-.398 1.15-.748.35-.35.566-.683.748-1.15.137-.353.3-.882.344-1.857.048-1.055.058-1.37.058-4.041v-.08c0-2.597-.01-2.917-.058-3.96-.045-.976-.207-1.505-.344-1.858a3.097 3.097 0 00-.748-1.15 3.098 3.098 0 00-1.15-.748c-.353-.137-.882-.3-1.857-.344-1.023-.047-1.351-.058-3.807-.058zM12 6.865a5.135 5.135 0 110 10.27 5.135 5.135 0 010-10.27zm0 1.802a3.333 3.333 0 100 6.666 3.333 3.333 0 000-6.666zm5.338-3.205a1.2 1.2 0 110 2.4 1.2 1.2 0 010-2.4z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path
                                d="M8.29 20.251c7.547 0 11.675-6.253 11.675-11.675 0-.178 0-.355-.012-.53A8.348 8.348 0 0022 5.92a8.19 8.19 0 01-2.357.646 4.118 4.118 0 001.804-2.27 8.224 8.224 0 01-2.605.996 4.107 4.107 0 00-6.993 3.743 11.65 11.65 0 01-8.457-4.287 4.106 4.106 0 001.27 5.477A4.072 4.072 0 012.8 9.713v.052a4.105 4.105 0 003.292 4.022 4.095 4.095 0 01-1.853.07 4.108 4.108 0 003.834 2.85A8.233 8.233 0 012 18.407a11.616 11.616 0 006.29 1.84" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12 2C6.477 2 2 6.484 2 12.017c0 4.425 2.865 8.18 6.839 9.504.5.092.682-.217.682-.483 0-.237-.008-.868-.013-1.703-2.782.605-3.369-1.343-3.369-1.343-.454-1.158-1.11-1.466-1.11-1.466-.908-.62.069-.608.069-.608 1.003.07 1.531 1.032 1.531 1.032.892 1.53 2.341 1.088 2.91.832.092-.647.35-1.088.636-1.338-2.22-.253-4.555-1.113-4.555-4.951 0-1.093.39-1.988 1.029-2.688-.103-.253-.446-1.272.098-2.65 0 0 .84-.27 2.75 1.026A9.564 9.564 0 0112 6.844c.85.004 1.705.115 2.504.337 1.909-1.296 2.747-1.027 2.747-1.027.546 1.379.202 2.398.1 2.651.64.7 1.028 1.595 1.028 2.688 0 3.848-2.339 4.695-4.566 4.943.359.309.678.92.678 1.855 0 1.338-.012 2.419-.012 2.747 0 .268.18.58.688.482A10.019 10.019 0 0022 12.017C22 6.484 17.522 2 12 2z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                    <a href="#" class="text-gray-500 hover:text-gray-900 dark:hover:text-white">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                            <path fill-rule="evenodd"
                                d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10c5.51 0 10-4.48 10-10S17.51 2 12 2zm6.605 4.61a8.502 8.502 0 011.93 5.314c-.281-.054-3.101-.629-5.943-.271-.065-.141-.12-.293-.184-.445a25.416 25.416 0 00-.564-1.236c3.145-1.28 4.577-3.124 4.761-3.362zM12 3.475c2.17 0 4.154.813 5.662 2.148-.152.216-1.443 1.941-4.48 3.08-1.399-2.57-2.95-4.675-3.189-5A8.687 8.687 0 0112 3.475zm-3.633.803a53.896 53.896 0 013.167 4.935c-3.992 1.063-7.517 1.04-7.896 1.04a8.581 8.581 0 014.729-5.975zM3.453 12.01v-.26c.37.01 4.512.065 8.775-1.215.25.477.477.965.694 1.453-.109.033-.228.065-.336.098-4.404 1.42-6.747 5.303-6.942 5.629a8.522 8.522 0 01-2.19-5.705zM12 20.547a8.482 8.482 0 01-5.239-1.8c.152-.315 1.888-3.656 6.703-5.337.022-.01.033-.01.054-.022a35.318 35.318 0 011.823 6.475 8.4 8.4 0 01-3.341.684zm4.761-1.465c-.086-.52-.542-3.015-1.659-6.084 2.679-.423 5.022.271 5.314.369a8.468 8.468 0 01-3.655 5.715z"
                                clip-rule="evenodd" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </footer>
    <script src="../js/theme.js"></script>
    <!-- <script type="text/JavaScript">

        function get_data() {

            var text = document.getElementById('voice-search').value;
            var form = new FormData();
            form.append('text', text);

            var ajax = new XMLHttpRequest();
            
            ajax.addEventListener('readystatechange', function(e){

                if(ajax.readyState = 4 && ajax.status == 200){
                    handle_result(ajax.responseText);
                }
            });
            ajax.open('POST','api.php',true);
            ajax.send(form);
        }

        function handle_result(result){
            console.log(result);
        }
    </script> -->
    <!-- <script>
        $(document).ready(function () {
            $('#getName').on("keyup", function () {
                var getName = $(this).val();
                $.ajax({
                    method: 'POST',
                    url: 'searchajax.php',
                    data: { name: getName },
                    success: function (response) {
                        $("#showdata").html(response);
                    }
                });
            });
        });
    </script> -->
    <script>
        $(document).ready(function () {
            $('#getName').on("keyup", function () {
                var getName = $(this).val();
                $.ajax({
                    method: 'POST',
                    url: 'searchajax.php',
                    data: { name: getName },
                    success: function (response) {
                        // Append the new search results to the container
                        $("#searchResultsContainer").html(response);
                    }
                });
            });
        });

    </script>
</body>

</html>