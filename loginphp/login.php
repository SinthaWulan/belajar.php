<?php
    session_start();
    include "koneksi(1)s.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Halaman Login</title>
</head>
<body>
    <form method="post">
        <label>Username :</label>
        <input type="text" name="fusername"><br>
        <label>Password :</label>
        <input type="password" name="fpassword"><br>
        <button type="submit" name="fmasuk">Login</button>
    </form>

    <?php
        if (isset($_POST['fmasuk'])) {
            $username = $_POST['fusername'];
            $password = $_POST['fpassword'];
            $qry = mysqli_query($koneksi, "SELECT * FROM tab_login WHERE username = '$username' AND password = md5('$password')");
            $cek = mysqli_num_rows($qry);
            if($cek==1){
                $_SESSION['userweb']=$username;
                header ("location:admin.php");
                exit;
            }
            else{
                echo "Maaf username dan password anda salah";
            }
        }
    ?>
</body>
</html>