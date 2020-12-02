{include file="header.tpl" }
<div class="container">
    <form action="checkIn" method="POST" class="form">
        <div>
            <label>E-Mail</label>
            <div>
                <input type="mail" name="mail" required autofocus>
            </div>
        </div>

        <div>
            <label>Password</label>
            <div>
                <input type="password" name="password" required>
            </div>
        </div>

        <div>
            <button type="submit">Registrarse</button>
        </div>
    </form>
</div>
{include file="footer.tpl" }