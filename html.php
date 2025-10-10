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
        <div class="main" style="height:100vh">
            <a href="https://youtube.com"><p style="color:turquoise">Hello, this is a paragraph.</p></a>
            <a href="https://youtube.com" target="_blank">YouTube</a>
            <table>
                <thead>
                    <tr>
                        <th>Hobby</th>
                        <th>Name</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Ride Horses</td>
                        <td>Elizabeth</td>
                    </tr>
                    <tr>
                        <td>Play Video Games</td>
                        <td>Timothy</td>
                    </tr>
                </tbody>
            </table>
            <form method="POST">
                <p>
                    <label for="email">Email:</label>
                    <input type="email" name="email" placeholder="Enter your email..." />
                </p>
                <p>
                    <label for="gender">Gender:</label>
                    <select name="gender">
                        <option value="">--Please choose an option--</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </p>
                <p>
                    <input type="submit" value="Send" />
                </p>
            </form>
        </div>
    </body>
</html>