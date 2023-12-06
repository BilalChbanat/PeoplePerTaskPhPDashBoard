<?php
require_once('./dbh.inc.php');
if (isset($_POST['done'])) {
    signup();
} else if (isset($_POST["login"])) {
    login();
}

// setcokie(name, value, expire, path, domain, secure, httponty)
function signup()
{
    global $conn;

    $city_id = $_POST['ville_id'];
    $skills = $_POST['skills'];
    $firstname = $_POST["first_name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["repeat_password"];

    $role = $_POST['role'];
    $password = password_hash($_POST["password"], PASSWORD_BCRYPT);
    if (empty($firstname) || empty($email) || empty($password) || empty($confirmPassword)) {
        echo "<span style='color:red;'> Error Invalide Fields</span>";
    } else {
        if ($_POST['password'] == $confirmPassword) {

            $sql = "INSERT INTO user (name_user, email, id_ville, skills, password, role) VALUES (?,?,?,?,?,?)";

            // préparez une requête stmt (mysqli_prepare)
            $stmt = mysqli_prepare($conn, $sql);

            // liez le paramètre (mysqli_stmt_bind_param)


            mysqli_stmt_bind_param($stmt, 'ssisss', $firstname, $email, $city_id, $skills, $password, $role);

            // exécutez la requête préparée (mysqli_stmt_execute )

            $result = mysqli_stmt_execute($stmt);

            if ($result) {
                echo '<script type="text/javascript">';
                echo 'window.location.href = "./login.php";';
                echo '</script>';
                exit();
            }

            // Assurez-vous de quitter le script après une redirection

            mysqli_stmt_close($stmt);
            mysqli_close($conn);

        }
    }

}


function login()
{
    session_start();

    global $conn;

    $email = $_POST["email"];
    $password = $_POST["password"];


    // préparez une requête avec un seul paramètre pour l'e-mail

    $sql = 'SELECT * FROM user WHERE email = ?';


    // préparez la requête

    $stmt = mysqli_prepare($conn, $sql);


    // liez le paramètre (uniquement pour l'e-mail)
    mysqli_stmt_bind_param($stmt, 's', $email);

    // exécutez la requête préparée

    mysqli_stmt_execute($stmt);


    // obtenez le résultat (mysqli_stmt_get_result)

    $result = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($result)) {
        if (password_verify($password, $row['password'])) {
            $_SESSION['email'] = $row['email'];
            $_SESSION['name'] = $row['name_user'];
            $_SESSION['ville'] = $row['ville'];
            $_SESSION['skills'] = $row['skills'];

            if ($row['role'] == 'user') {
                $_SESSION['email'] = $row['email'];
                $_SESSION['name'] = $row['name_user'];
                $_SESSION['ville'] = $row['ville'];
                $_SESSION['skills'] = $row['skills'];
                header("location: ./index.php");
            } elseif ($row['role'] == 'freelancer') {
                $_SESSION['email'] = $row['email'];
                $_SESSION['name'] = $row['name_user'];
                $_SESSION['ville'] = $row['ville'];
                $_SESSION['skills'] = $row['skills'];
                // echo '<script type="text/javascript">';
                // echo 'window.location.href = ./index.php';
                // echo '</script>';
                // exit();
            } elseif ($row['role'] == 'admin') {
                // Set admin session details
                // $_SESSION["email"] = $email;
                // $_SESSION["username"] = $row['username'];
                // $_SESSION["image"] = $row['image'];
                $_SESSION["role"] = $row["role"];
                header("location: dashstats.php");
            }
        } else {
            echo 'password invalid';
        }

    } else {
        echo 'email invalid';
    }

}