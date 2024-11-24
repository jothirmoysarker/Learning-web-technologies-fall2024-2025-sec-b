<!DOCTYPE html>
<html lang="en">
<head>
    <title>Registration Page</title>
    <style>
        fieldset {
            display: inline-block;
        }
        legend {
            font-weight: bold;
            margin-bottom: 10px;
        }
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <form method="post" action="handler.php">
        <fieldset>
            <legend>Register</legend>
            <table>
                <tr>
                    <td>Email:</td>
                    <td><input type="email" name="email" required></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input type="password" name="password" required></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Register"></td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>
