<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>HTML</title>
    </head>
    <body>
        <h1 id="main-heading" class="main" style="background:red">Hello!</h1>
        <p class="main">My name is Tyler.</p>
        <div class="main">
            <p style="color:turquoise">Hello, this is a paragraph.</p>
            <a href="https://youtube.com" target="_blank">YouTube</a>
            <a href="#main-heading">This is the heading.</a><?php 

                // Check if set.
                if( isset( $_POST ) && ! empty( $_POST ) ) {

                    // Output. ?>
                    <p>Thanks for subscribing <?php echo $_POST['email']; ?>!</p><?php

                } ?>

            <form method="POST">
                <p>
                    <label for="email">Email</label>
                    <input name="email" type="email" placeholder="Your email address..." />
                </p>
                <p>
                    <label for="gender">Gender</label>
                    <select name="gender">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </p>
                <p>
                    <input type="submit" value="Send" />
                </p>
            </form>
        </div>
        <table>
            <thead>
                <tr>
                    <th>Hobby</th>
                    <th>About</th>
                </tr>    
            </thead>
            <tbody>
                <tr>
                    <td>Brazilian Jiu-Jitsu</td>
                    <td>Martial art and combat sport. Something about it.</td>
                </tr>
                <tr>
                    <td>Gaming</td>
                    <td>Playing video games and exploring virtual worlds.</td>
                </tr>
                <tr>
                    <td>Coding</td>
                    <td>Creating software and applications to solve problems.</td>
                </tr>
            </tbody>
        </table>
    </body>
</html>