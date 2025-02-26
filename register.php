<html>
    <form action="action.php" method="POST">
        <table border="1">
            <tr>
                <td> Name: </td>
                <td> <input type="text" name="name"> </td>
            </tr>
            <tr>
                <td> Gender: </td>
                <td>
                    <input type="radio" name="gender" value="male"> Male
                    <input type="radio" name="gender" value="female"> Female
                </td>
            </tr>
            <tr>
                <td> Country: </td>
                <td>
                    <select name="country">
                        <option value="PH">PH</option>
                        <option value="AUS">AUS</option>
                        <option value="US">US</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" value="Save">
                </td>
            </tr>
        </table>
    </form>
</html>