<?php
include 'header.tpl.php';
$email=filter_input(INPUT_COOKIE,'email');
$passwd=filter_input(INPUT_COOKIE,'passwd');
?>


            <ul>
                <li>
                    <a href="?url=home">Home</a>
                </li>
            </ul>

        </aside>

        
        <h1>Welcome, visitor! Log in to view your academy record!</h1>
        
        
        <main>
            <form action="?url=login_action" method="post">
                <input type="text" name="email" placeholder="e-mail" value=<?php echo $email?>>
                <input type="password" name="passwd" placeholder="Password" value=<?php echo $passwd?>>
                Quieres recordar tu usuario para la próxima vez? <input type="checkbox" name="remind">
                <button type="submit">Login</button>


            </form>
            
        </main>
    </body>
</html>