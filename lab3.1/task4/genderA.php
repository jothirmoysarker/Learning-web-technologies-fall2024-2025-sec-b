<html lang="en">
<head>
    <title>HTML-FORM</title>
    <style>
        fieldset {
            display: inline-block;
        }
        legend {
            font-weight: bold;
            margin-bottom: 10px;
        }
        hr {
            width: 100%;
        }
        .error {
            color: red;
        }
    </style>
</head>
<body>
    <form method="post" action="handler.php">
        <fieldset>
            <legend>Gender</legend>
            <table>
                <tr>
                    <td>
                        <input type="radio" name="gender" value="Male"> Male  
                        <input type="radio" name="gender" value="Female"> Female  
                        <input type="radio" name="gender" value="Other"> Other
                    </td>
                </tr>
                <tr>
                    <td>
                        <br>
                        <hr> <!-- Adding a horizontal line -->
                        <input type="submit" value="Submit">
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>
