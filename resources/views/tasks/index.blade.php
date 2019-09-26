<table border="1">
    <tr>
        <td>STT</td>
        <td>Name</td>
        <td>Description</td>
        <td>Date</td>
        <td>Person in charge</td>
    </tr>
        <tr>
            <td>{{$tasks->getId()}}</td>
            <td>{{$tasks->getName()}}</td>
            <td>{{$tasks->getDescription()}}</td>
            <td>{{$tasks->getDate()}}</td>
            <td>{{$tasks->getPerson()}}</td>
        </tr>

</table>
<a href="{{route('tasks.create')}}">Create</a>
