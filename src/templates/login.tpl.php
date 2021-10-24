<?php
include 'header.tpl.php';
$email=filter_input(INPUT_COOKIE,'email');
?>


            <ul>
                <li>
                    <a href="?url=home">Home</a>
                </li>
            </ul>

        </aside>

        
        <h1>Bienvenidos al Login</h1>
        
        
        <main>
            <form action="?url=login_action" method="post">
                <input type="text" name="email" placeholder="e-mail" value=<?php echo $email?>>
                <input type="password" name="passwd" placeholder="Password">
                Quieres recordar tu usuario para la próxima vez? <input type="checkbox" name="remind">
                <button type="submit">Login</button>


            </form>
            
        </main>
    </body>
</html>