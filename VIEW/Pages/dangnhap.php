<div class="loichao">
<div class = "left">
<img class="logo" src="../VIEW/img/logocus.png"/>
</div>
<div class ="right">
<p> XIN CHÀO ! </p>
</div>
<div class="loginform">
    <form method="POST">
    <table class="logintable">
        <tr>
            <td>
            <label> Tài khoản : </label>
            </td>
            <td>
                <input type="text" name="user" id="" placeholder="Nhập tài khoản của bạn">
             </td>
        </tr>
        <tr>
            <td>
            <label> Mật khẩu : </label>
            </td>
            <td>
                <input type="text" name="pass" id="" placeholder="Nhập mật khẩu của bạn">
             </td>
        </tr>
        <tr>
            <td colspan ="2">
                <button type="submit" name="dangnhap"> Đăng nhập</button>

            </td>
        </tr>
    </table>
    </form>

    <?php
    if((isset($_POST["dangnhap"])) && ($_POST['dangnhap']))
    {
        $user =$_POST['user'];
        $pass =$_POST['pass'];

    }
    ?>

</div>
</div>