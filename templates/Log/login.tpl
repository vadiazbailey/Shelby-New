{include file="header.tpl" }

<form action="verifyUser" method="post">

    <h1>Login</h1>
    <div class="container">
        <div class="userName">
            <label for="email">Username</label>
            <input type="email" id="email" placeholder="Username" name="email" required>
        </div>
        <div class="password">
            <label for="password">Password</label>
            <input type="password" id="password" placeholder="Password" name="password" required>

            <div class="alert-error">
                {if $error}
                    {$error}
                </div>
            {/if}
            <button type="submit">Login</button>
        </div>
    </div>
</form>


{include file="footer.tpl" }