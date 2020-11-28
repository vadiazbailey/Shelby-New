{include file="header.tpl" }

<form action="checkIn" method="POST">

   
        <div>
            <label>E-Mail</label>
            <div>
                <input type="email" name="email" required autofocus>
            </div>
        </div>

        <div>
            <label>Password</label>
            <div>
                <input type="password" name="password" required>
            </div>
        </div>

        <div>
            <button type="submit">Enviar</button>
        </div>
    </div>
</form>

{include file="footer.tpl" }