<html>
    <form action="action_page.php" method="POST">
        <table border="1">
            <tr>
                <th>Question</th>
                <th>Answer</th>
            </tr>
            <tr>
                <td> Name: </td>
                <td> <input type="text" name="name" value="john"> </td>
            </tr>
            <tr>
                <td> Gender: </td>
                <td>
                    <input type="radio" name="gender" value="male" checked> Male
                    <input type="radio" name="gender" value="female"> Female
                </td>
            </tr>
            <tr>
                <td> Country: </td>
                <td>
                    <select name="country">
                        <option value="">-SELECT COUNTRY</option>
                        <option value="PH">PH</option>
                        <option value="AUS" selected>AUS</option>
                        <option value="US">US</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit"  name="Save" value="Save">
                </td>
            </tr>
        </table>
    </form>
</html>