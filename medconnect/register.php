<?php
session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesdraft.css" />
    <title>Get Started!</title>
    <script defer src="script.js"></script>
</head>
<body>
    <header>
        <a href="index.html" >
            <object data="Logo.svg" height="20vh" style="margin-top: 5vh; margin-left: 6vh;"> </object>
        </a>
    </header>
    <div>
        <h1 class="hg4">Create your account</h1>
        <h2 class="hg5">Already have an acount? <a href="loginpage.html" style="color: #2D9CDA;">Login</a></h2>
    </div>
    <div class="two-column-container" style="margin-left: 3.5vw;">
    <form action="insert.php" method="POST">
        <div class="leftsideofregister">
            <div class="two-column-container" style="margin-top: 0;">
                <div class="formcolumn">
                    <div>
                        <div class="labelline">FIRST NAME</div>
                        <input class="name" type="text" name="u_first_name" required="required" placeholder="Max">
                    </div>
                </div>
                <div class="formcolumn">
                    <div>
                        <div class="labelline">LAST NAME</div>
                        <input class="name" type="text" name="u_last_name" required="required" placeholder="Mustermann">
                    </div>
                </div>
            </div>
            <div class="entryarea2">
            <div class="labelline">INSTITUTION</div>
            <select class="inputboxname">
                <option value="" disabled selected>Select an institution</option>
                <option value="klinikum">Klinikum München</option>
                <option value="hospital">General Hospital</option>
            </select>
            </div>
            <div class="formcolumn">
                <div>
                    <div class="labelline">USERNAME</div>
                    <input class="rest" type="text" name="u_username" required="required" placeholder="m.muster">
                </div>
            </div>
            <div class="formcolumn">
                <div>
                    <div class="labelline">EMAIL ADDRESS</div>
                    <input class="rest" type="text" name="u_email_address" required="required" placeholder="max.mustermann@email.com">
                </div>
            </div>
            <div class="formcolumn">
                <div>
                    <div class="labelline">PASSWORD</div>
                    <input class="rest" type="password" name="u_password" required="required" placeholder="●●●●●●●●●●●">
                </div>
            </div>
            <div class="formcolumn">
                <div>
                    <div class="labelline">REPEAT PASSWORD</div>
                    <input class="rest" type="password" required="required" placeholder="●●●●●●●●●●●">
                </div>
            </div>
            <div class="formcolumn">
                <button type="submit" formaction="insert.php" class="custombutton" style="width: 206px; height: 55px; margin-left: 9vw; margin-top: 3vh;">REGISTER</button>
            </form>
            </div>
            </div>
        <div class="column">
            <div class="rightsideofregister">
            <div class="plus">+</div>
            <h1 style="margin-top: -40%;">Comfortable Doctor,</h1>
            <h1>Comfortable Patient.</h1>
            <h2 style="margin-top: 10px;">Health records made easy.</h2>
            </div>
        </div>
    </div>

</body>
</html>