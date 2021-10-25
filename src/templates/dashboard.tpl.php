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

        <div class="breadcrumb">
            <div><a href="?url=home">Home</a></div>/<div><a href="?url=home">Dashboard</a></div>
        </div>
        <br>
        <section class='dashboard'>
            <h2 id='welcome' >Welcome, recruit<?= $_SESSION['username'];  ?>!</h2>
        </section>
    </body>
</html>