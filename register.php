<html>
    <form action="action_page.php" method="POST">
        <table border="1">
            <tr>
                <th>Question</th>
                <th>Answer</th>
            </tr>
            <tr>
                
                <td> <input type="text" name="name" value="trinity"> </td>
            </tr>
            <tr>
                <td> Gender: </td>
                <td>
                    <input type="radio" name="gender" value="male" > Male
                    <input type="radio" name="gender" value="female"checked> Female
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