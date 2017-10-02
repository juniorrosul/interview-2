<table class="table table-hover">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Points</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($teams as $team)
        <tr>
            <td></td>
            <td><img src="{{ $team->getIconURL() }}" width="20" alt=""> {{ $team->getName() }}</td>
            <td></td>
        </tr>
        @endforeach

    </tbody>
</table>
