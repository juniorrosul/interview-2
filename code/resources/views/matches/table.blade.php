@forelse($matches as $id => $match)
    @if (!$match->isEmpty())
    <tr>
        <td>{{ $id+1 }}</td>
        <td>{{ $match->getDateTimeUTC()->format('d/m/Y H:i') }}</td>
        <td>
            <div class="col-xs-5">
                <div class="text-right">
                    {{ $match->getNameTeam1() }}
                    <img class="img-responsive" align="right" width="20" src="{{ $match->getIconUrlTeam1() }}" alt="{{ $match->getNameTeam1() }}">
                </div>
            </div>

            <div class="col-xs-2">
                @if($match->isFinished())
                    <div class="text-center">
                        {{ $match->getFinalResult()->getPointsTeam1() }} x {{ $match->getFinalResult()->getPointsTeam2() }}
                    </div>
                @else
                    <div class="text-center">
                        - x -
                    </div>
                @endif
            </div>

            <div class="col-xs-5">
                <div class="text-left">
                    <img class="img-responsive" align="left" width="20" src="{{ $match->getIconUrlTeam2() }}" alt="{{ $match->getNameTeam2() }}">
                    {{ $match->getNameTeam2() }}
                </div>
            </div>


        </td>
    </tr>
    @endif
@empty
<tr>
    <td colspan="3">

        Nenhum partida foi encontrada.
    </td>
</tr>
@endforelse
