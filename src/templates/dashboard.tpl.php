<?php
include 'header.tpl.php';
?>
            <ul>
                <li>
                    <a href="?url=home">Home</a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="?url=logout">Log out</a>
                </li>
            </ul>

        </aside>
        <br>
        <section class='dashboard'>
            <h2 id='welcome' >Welcome, recruit<?= $_SESSION['username'];  ?>!</h2>
        </section>
    </body>
</html>