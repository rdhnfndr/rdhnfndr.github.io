<?php 
    session_start();
    require "../koneksi.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | 2631 Streetwear</title>
    <!-- Link CSS  -->
    <link rel="stylesheet" href="../assets/css/stylelogin.css">
    <!-- boxicon -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>
    <div class="login">
            <!-- <img src="../assets/image/login-bg.png" alt="login image" class="login__img"> -->

            <form action="" class="login__form" method="POST">
                <h1 class="login__title">Login</h1>
                <div class="login__content">
                    <div class="login__box">
                    <i class='bx bx-user'></i>

                        <div class="login__box-input">
                            <input type="text" name="username" required class="login__input" placeholder=" ">
                            <label for="username" class="login__label">Username</label>
                        </div>
                    </div>
                    
                    <div class="login__box">
                        <i class='bx bx-lock-alt'></i>
                        <div class="login__box-input">
                            <input type="password" name="password" required class="login__input" id="login-pass" placeholder=" ">
                            <label for="login-pass" class="login__label">Password</label>
                        </div>
                    </div>
                <div>
                <button type="submit" class="login__button mt-2" name="simpan">Login</button>
            </form>
    </div>

    <?php
    if(isset($_POST['simpan'])){
        $username = htmlspecialchars($_POST['username']);
        $password = htmlspecialchars($_POST['password']);

        $sql = mysqli_query($conn,"SELECT * FROM users WHERE username='$username'");
        $hasil = mysqli_num_rows($sql);
        $data = mysqli_fetch_array($sql);

        if($hasil>0){
            if (password_verify($password, $data['password'])){
                    $_SESSION['username'] = $data['username'];
                    $_SESSION['login'] = true;
                    header('location: index.php');
            }

            else{
        ?>
            <div class="alert alert-danger text-center" role="alert">
                Password Salah!
            </div>
        <?php
            }

        }
        else{
        ?>
            <div class="alert alert-danger text-center" role="alert">
                Login Gagal!
            </div>
        <?php
        }
    }
    ?>

    <!-- Script BS -->
    <script src="assets/js/main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>