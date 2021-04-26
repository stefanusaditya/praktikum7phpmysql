<!DOCTYPE html>
<html>
<head>
    <title>Halaman Login</title>
</head>
    <!--Form Login-->
    <body>
        <h3>Silahkan Login Untuk Melihat Data</h3>
        <form action="ceklogin.php" method="post">
            <div class="container">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Masukkan Username" name="username" required>
                <br><br>
                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Masukkan Password" name="password" required>
            <!--Button Login-->
                <button name="login" type="submit">Login</button>
            </div>
        </form>
    </body>
</html>