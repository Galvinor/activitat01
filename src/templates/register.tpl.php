<?php
include 'header.tpl.php';
?>


            <ul>
                <li>
                    <a href="?url=home">Home</a>
                </li>
            </ul>

        </aside>
        
        <h1>Bienvenidos al Registro</h1>
        
        <main>
            <form action="?url=register_action" method="post">
                <input type="text" name="username" placeholder="Nombre de usuario" />
                <input type="password" name="passwd" placeholder="Password" />
                <input type="email" name="email" placeholder="Email" />
                <input type="submit" value="Registrarse" />


            </form>
            
        </main>
    </body>
</html>