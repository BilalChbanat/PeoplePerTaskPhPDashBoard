<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../dist/output.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&family=Ruslan+Display&display=swap" rel="stylesheet">
  <script src="../../dist/sandbox.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  <title>PeoplePerTask</title>
</head>

<body class="font-poppins dark:bg-gray-900 text-mainBlue dark:text-white">
  <?php include('dbh.inc.php'); ?>

  <section class="flex flex-row">
    <side
      class="hidden md:block dark:bg-indigo-950 dark:border-none text-base rounded-3xl w-[25%]  py-[1%] px-[1%]  border">
      <?php include('../../nav.php') ?>

      </div>
      </div>
    </side>
    <main style="width: 100%;" class="bg-white dark:bg-gray-900">
      <div class="hidden md:block">
        <?php include('../../header.php') ?>
      </div>
      <section class="text-black dark:text-white">
        <div class="py-[1%] px-[2%] ">
          <ul class="flex flex-col md:flex-row gap-5 ">
            <li
              class="flex flex-row border border-mainBlue w-[50%] md:w-[20%] h-24 px-[1%] rounded-2xl items-center mx-auto md:ml-[7%]">
              <img class="h-[50%] mr-[10%]" src="../../images/fleche1.svg" alt="niveau">
              <h2>Users
                <br><span class="text-AddCB">
                  <?php
                  $dash_user_query = "SELECT * FROM user";
                  $dash_user_query_run = mysqli_query($conn, $dash_user_query);
                  if ($user_total = mysqli_num_rows($dash_user_query_run)) {
                    echo '<h2>' . $user_total . '</h2>';
                  } else {
                    echo "<h4> No Data </h4>";
                  }
                  ?>
                </span>
              </h2>
            </li>
            <li
              class="flex flex-row border border-mainBlue w-[50%] md:w-[20%] h-24 px-[1%] rounded-2xl items-center mx-auto md:ml-[7%]">
              <img class="h-[50%] mr-[10%]" src="../../images/fleche2.svg" alt="niveau">
              <h2>Projects
                <br><span class="text-AddCB">
                  <?php
                  $dash_pro_query = "SELECT * FROM projets";
                  $dash_pro_query_run = mysqli_query($conn, $dash_pro_query);
                  if ($projets_total = mysqli_num_rows($dash_pro_query_run)) {
                    echo '<h2>' . $projets_total . '</h2>';
                  } else {
                    echo "<h4> No Data </h4>";
                  }
                  ?>
                </span>
              </h2>
            </li>
            <li
              class="flex flex-row border border-mainBlue w-[50%] md:w-[20%] h-24 px-[1%] rounded-2xl items-center mx-auto md:ml-[7%]">
              <img class="h-[50%] mr-[10%]" src="../../images/fleche2.svg" alt="niveau">
              <h2>Freelancers
                <br><span class="text-AddCB">
                  <?php
                  $dash_free_query = "SELECT * FROM freelancers";
                  $dash_free_query_run = mysqli_query($conn, $dash_free_query);
                  if ($free_total = mysqli_num_rows($dash_free_query_run)) {
                    echo '<h2>' . $free_total . '</h2>';
                  } else {
                    echo "<h4> No Data </h4>";
                  }
                  ?>
                </span>
              </h2>
            </li>
            <li
              class="flex flex-row border border-mainBlue w-[50%] md:w-[20%] h-24 px-[1%] rounded-2xl items-center mx-auto md:ml-[7%]">
              <img class="h-[50%] mr-[10%]" src="../../images/fleche2.svg" alt="niveau">
              <h2>Categories
                <br><span class="text-AddCB">
                  <?php
                  $dash_cat_query = "SELECT * FROM category";
                  $dash_cat_query_run = mysqli_query($conn, $dash_free_query);
                  if ($cat_total = mysqli_num_rows($dash_cat_query_run)) {
                    echo '<h2>' . $cat_total . '</h2>';
                  } else {
                    echo "<h4> No Data </h4>";
                  }
                  ?>
                </span>
              </h2>
            </li>
          </ul>
        </div>
      </section>
      <section class="flex flex-col md:flex-row items-center mt-[2%] mx-[2%]">
        <div
          class="w-[90%] md:w-[60%] border-2 rounded-3xl mb-4 md:mx-[2%] border-mainBlue p-[2%] dark:bg-indigo-950 dark:border-none">
          <h4 class="text-xl text-black dark:text-white">Analytics</h4>
          <div id="chart">
          </div>
        </div>
        <div
          class="w-[50%] md:w-[30%] border-2 rounded-3xl mx-[2%] border-mainBlue dark:bg-indigo-950 dark:border-none p-[2%]">
          <div class="flex items-center justify-between text-black dark:text-white">
            <h4 class="text-xl font-bold">Activity</h4>
            <div class="flex items-center text-black dark:text-white">
              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 12 12" fill="none">
                <ellipse cx="6" cy="6.26262" rx="6" ry="5.55181" fill="#64CFF6" />
              </svg>
              <span>Likes 67</span>
            </div>
          </div>
          <div id="chart2"></div>
        </div>
      </section>
      <section class="flex flex-col md:flex-row items-center text-black dark:text-white">
        <div
          class="w-[80%] md:w-[60%] border-2 p-[1%] rounded-3xl mx-[2%] border-mainBlue my-[2%] dark:bg-indigo-950 dark:border-none">
          <div class="flex flex-row justify-between">
            <h1 class="text-xl font-bold">Transaction </h1>
            <div class="flex flex-row items-center border w-48 rounded-xl p-1">
              <p class="mr-[60%] font-light">search</p>
              <img src="../../images/search-2905 1.svg" alt="search">
            </div>
          </div>

          <table class="w-[100%] mt-[2%]">
            <tr>
              <td class="p-3">Name</td>
              <td class="p-3">Date</td>
              <td class="p-3">Amount</td>
              <td class="p-3">Status</td>
            </tr>
            <tr>
              <td class="p-3 flex flex-row items-center">
                <img src="../../images/Adob.svg" alt="client">
                <p>Adobe After Effect</p>
              </td>
              <td class="p-3">Sat, 20 Apr 2020</td>
              <td class="p-3">$80.09</td>
              <td class="p-3">Deposited</td>
            </tr>
            <tr>
              <td class="p-3 flex flex-row items-center">
                <img src="../../images/Mac.svg" alt="client">
                <p>Mcdonald's</p>
              </td>
              <td class="p-3">Fri, 19 Apr 2020</td>
              <td class="p-3">$7.03</td>
              <td class="p-3">Deposited</td>
            </tr>
            <tr>
              <td class="p-3 flex flex-row items-center">
                <img src="../../images/Levi's.svg" alt="client">
                <p>Levi's</p>
              </td>
              <td class="p-3">Tue, 19 Apr 2020</td>
              <td class="p-3">$30.09</td>
              <td class="p-3">Deposited</td>
            </tr>
          </table>

        </div>
        <div class="w-[50%] md:w-[30%] border-2 p-[1%] rounded-3xl border-mainBlue dark:bg-indigo-950 dark:border-none">
          <h2 class="text-xl font-bold">Employee region</h2>
          <div>
            <table class="w-[100%]">
              <tr>
                <td class="p-3">
                  <span>Morroco<br>20 employee</span>
                </td>
                <td class="p-3">
                  <span>England</span><br>4 employee
                </td>
              </tr>
              <tr>
                <td class="p-3"><span>Algerie</span><br>4 employee</td>
                <td class="p-3"><span>Turky</span><br>9 employee</td>
              </tr>
              <tr>
                <td class="p-3"><span>France</span><br>8 employee</td>
                <td class="p-3"><span>Poland</span><br>2 employee</td>
              </tr>
            </table>
          </div>
        </div>
      </section>
    </main>
  </section>
  <script>
    const options = {
      chart: {
        type: 'bar',
      },
      series: [
        {
          name: 'Income',
          data: [15, 20, 30, 33, 38, 43, 47, 49],
        },
        {
          name: 'Outcome',
          data: [20, 25, 32, 35, 39, 45, 48, 50],
        }
      ],
      xaxis: {
        categories: ['Jan', 'Feb', 'Mar', 'Api', 'May', 'Jun', 'Jul', 'Aug'],
      },
      yaxis: {
        tickAmount: 5,
        min: 10,
        max: 50,
      },
      // colors: isDarkMode ? ['#fff', '#fff'] : ['#64CFF6', '#6359E9'],
      colors: ['#64CFF6', '#6359E9'],
      plotOptions: {
        bar: {
          horizontal: false,
          columnWidth: '50%',
          borderRadius: 10,
        }
      }
    };
    const chart = new ApexCharts(document.querySelector('#chart'), options);
    chart.render();

    var options2 = {
      chart: {
        height: 280,
        type: "radialBar",
      },
      series: [67],
      // colors: isDarkMode ? ['#fff'] : ['#6359E9'],
      // colors: ["#64CFF6"],
      plotOptions: {
        radialBar: {
          startAngle: -90,
          endAngle: 90,
          track: {
            background: '#333',
            startAngle: -90,
            endAngle: 90,
          },
          dataLabels: {
            name: {
              show: false,
            },
            value: {
              fontSize: "30px",
              show: true
            }
          }
        }
      },
      fill: {
        type: "gradient",
        gradient: {
          shade: "dark",
          type: "horizontal",
          gradientToColors: ["#87D4F9"],
          stops: [0, 100]
        }
      },
      stroke: {
        lineCap: "butt"
      },
      labels: ["Progress"]
    };

    new ApexCharts(document.querySelector("#chart2"), options2).render();

  </script>

</body>

</html>
</body>

</html>