{{--
    Copyright 2015 ppy Pty. Ltd.

    This file is part of osu!web. osu!web is distributed with the hope of
    attracting more community contributions to the core ecosystem of osu!.

    osu!web is free software: you can redistribute it and/or modify
    it under the terms of the Affero GNU General Public License as published by
    the Free Software Foundation, either version 3 of the License, or
    (at your option) any later version.

    osu!web is distributed WITHOUT ANY WARRANTY; without even the implied
    warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
    See the GNU Affero General Public License for more details.

    You should have received a copy of the GNU Affero General Public License
    along with osu!web.  If not, see <http://www.gnu.org/licenses/>.
--}}
@extends("master")

@section("content")
<div class="row-page wiki-header">
    <div class="text">
        <h1>osu!tournaments</h1>
        <h2>A listing of all active officially-recognised tournaments</h2>
    </div>
</div>

<div class='row-page tournaments'>

@foreach($tournaments as $t)
<div class='tournament clickable-row'>
    <div class='mode'>
        <i class="fa osu fa-{!! play_mode_string($t->play_mode) !!}-o"></i>
    </div>
    <div class='info'>
        <div class='title'>{{ $t->name }}</div>
        <div class='dates-tournament'>{{ $t->start_date->toDateString() }} ~ {{ $t->end_date->toDateString() }}</div>
        <div class='dates-reg'>Registrations open {{ $t->signup_open->toDateString() }} through {{ $t->signup_close->toDateString() }}</div>

        <div><a href='{{ route("tournaments.show", $t) }}' class='clickable-row-link'>{{ number_format($t->registrations->count()) }} registered player(s).</a></div>
    </div>
</div>
@endforeach

</div>

@stop