<html>
<body>
<form action=""method="post">
    <table>
        <tr>
            <td>Category name</td>
            <td><input type="text"name="name"></td>
        </tr>
        <tr>
            <td>order_display</td>
            <td><input type="number" name="order_display"></td>
        </tr>
        <tr>
            <td colspan="2">
                <button type="submit"name="save">Save</button>
                <button type="submit"name="cancel">Cancel</button>
            </td>
            {{csrf_field()}}
        </tr>
    </table>
</form>
</body>
</html>