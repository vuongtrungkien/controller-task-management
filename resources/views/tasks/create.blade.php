<form method="post" action="{{route('tasks.store')}}">
    @csrf
    <table>
        <tr>
            <td>id</td>
            <td><input type="number" name="id"></td>
        </tr>
        <tr>
            <td>Name</td>
            <td><input type="text" name="name"></td>
        </tr>
        <tr>
            <td>Description</td>
            <td><textarea name="description"></textarea></td>
        </tr>
        <tr>
            <td>Date</td>
            <td><input type="date" name="date"></td>
        </tr>
        <tr>
            <td>Person in charge</td>
            <td><input type="text" name="person"></td>
        </tr>

    </table>
    <input type="submit" value="Add">
</form>
