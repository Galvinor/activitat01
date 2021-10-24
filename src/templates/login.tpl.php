<?php
include 'header.tpl.php';
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
                <input type="text" name="usename" placeholder="Nombre de usuario">
                <input type="password" name="passwd" placeholder="Password">
                <button type="submit">Login</button>


            </form>
            
        </main>
    </body>
</html>