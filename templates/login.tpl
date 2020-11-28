{include file="header.tpl" }

<form action="verifyUser" method="post">


    <div class="container">
        <label for="user">Username</label>
        <input type="text" placeholder="Enter Username" name="input_user" required>

        <label for="psw">Password</label>
        <input type="password" placeholder="Enter Password" name="input_pass" required>

        <button type="submit">Login</button>
        <button type="submit"> <a href="registrarse">Registrarse</a></button>
    </div>
</form>


{include file="footer.tpl" }