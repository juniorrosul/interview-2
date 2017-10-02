<table class="table">
    <thead>
        <tr>
            <th>Name</th>
            <th>Year</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($leagues as $league)
        <tr @if ($league->getSeason() < \Carbon\Carbon::now()->format('Y')) class="danger" @endif>
            <td>{{ $league->getName() }}</td>
            <td>{{ $league->getSeason() }}</td>
            <td>
                @if ($league->getSeason() == \Carbon\Carbon::now()->format('Y'))
                <a href="{{ route('league.upcoming_matches', ['league_short'=>$league->getShortcut()]) }}" class="btn btn-default">Upcoming Matches</a>
                @endif
                <a href="{{ route('league.all_matches', ['league_short'=>$league->getShortcut(), 'year'=>$league->getSeason()]) }}" class="btn btn-default">All Matches</a>
            </td>
        </tr>
    </tbody>
    @endforeach
</table>
