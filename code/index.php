<?php
include('conection.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    /* $email = $mysqli->real_escape_string($_POST['email']);
    $password = md5($mysqli->real_escape_string($_POST['password'])); */
    $user = $_POST['email'];
    $password = $_POST['password'];

    $query = "SELECT * FROM usuarios WHERE email = '$user' AND password = '$password'";
    $sql_query = $conn->query($query);


    if ($sql_query->num_rows > 0) {
        $usuario = $sql_query->fetch_assoc();

        if (!isset($_SESSION)) {
            session_start();
        }
        $_SESSION['id'] = $user;
        echo $row->idusuarios;
        $_SESSION['email'] = $user;
        header("Location: home.php");
    } else {
        header("Location: err.php");
        exit();
    }

    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://kit.fontawesome.com/069a3296de.js" crossorigin="anonymous"></script>
</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap');

    * {
        margin: 0;
        box-sizing: border-box;
    }

    body {
        width: 100%;
        max-width: 1440px;
        height: 100vh;
        font-family: Roboto, sans-serif;
    }

    .container-login {
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .container-img {
        width: 50%;
        display: flex;
        height: 100vh;
        padding: 5px 10px 10px;
        flex-direction: column;
        align-items: flex-start;
    }

    .container-form{
        width: 50%;
        height: 100vh;
        background-color: #2769FF;
        padding: 5px 10px 10px;
        display: flex;
        flex-direction: column;
        gap: 50px;
        align-items: center;
        justify-content: center;
    }

    .container-form h1 {
        font-size: 38px;
        color: #fff;
        font-weight: 700;
    }

    .main-form {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        gap: 30px;
    }

    .input {
        width: 50%;
        height: 35px;
        outline: none;
        border-radius: 15px;
        border: none;
        padding: 3px 15px;
    }
    .password-container{
        width: 50%;
        height: 35px;
        outline: none;
        border-radius: 15px;
        border: none;
        padding: 3px 15px;
        background-color: #fff;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }
    .password-container input{
        width: 70%;
        border: none;
        outline: none;
    }

    .btn-form {
        width: 50%;
        height: 35px;
        outline: none;
        border-radius: 15px;
        border: none;
        padding: 3px 15px;
        color: #2769FF;
        font-size: 14px;
        font-weight: 700;
        cursor: pointer;
    }
</style>

<body>
    <section class="container-login">
        <div class="container-img">
            <img src="img/logoAzul.png" alt="logo" width="100px" />
            <img src="img/login-animate.svg" alt="login img" width="450px" />
        </div>
        <div class="container-form">
            <h1>WELCOME</h1>
            <form method="post" class="main-form">
                <input class="input" type="text" name="email">
                <div class="password-container">
                    <input type="password" id="password" name="password">
                    <i class="toggle-password fa-solid fa-eye"></i>
                </div>
                <input class="btn-form" type="submit" value="Login" />
            </form>
        </div>
    </section>

    <script>

    document.querySelector('.toggle-password').addEventListener('click', function (e) {
        const passwordInput = document.querySelector('#password'); 
        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput.setAttribute('type', type);
        this.classList.toggle('fa-eye-slash'); 
        this.classList.toggle('fa-eye'); 
    });
</script>
</script>
</body>

</html>