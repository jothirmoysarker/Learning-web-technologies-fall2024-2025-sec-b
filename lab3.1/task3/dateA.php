<html lang="en">
<head>
    <title>Date Validation Form</title>
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
            <legend>DATE</legend>
            <table>
                <tr>
                    <td>
                        <label for="day">dd &nbsp;&nbsp;&nbsp;&nbsp;/&nbsp;</label>
                        <label for="month">mm &nbsp;&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <label for="year">yyyy &nbsp;&nbsp;</label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="text" id="day" name="day">&nbsp;/
                        <input type="text" id="month" name="month">&nbsp;/
                        <input type="text" id="year" name="year">
                    </td>
                </tr>
            </table>
            <hr>
            <input type="submit" value="Submit">
        </fieldset>
    </form>
</body>
</html>
