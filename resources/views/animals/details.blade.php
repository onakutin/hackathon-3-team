<body>
    @if (Request::is('animals/*'))
    @include('components.topmenu')
    @endif
    <div class="pet" style="border: solid 2px black; background-color: beige; max-width: 70em; padding: 10px 50px;">
        <div style="display: flex; flex-direction: row; justify-content: space-between;">
            @if (!Request::is('animals/*'))
            <a href="{{ route('animals.show', $animal->id) }}">
                <h1> {{ $animal->name }}</h1>
            </a>
            @else
            <h1> {{ $animal->name }} </h1>
            @endif

            <div>
                <a href="{{ route('animals.edit', $animal->id ) }}">[eddit]</a>
                <a href="{{ route('animals.destroy', $animal->id ) }}">[delete]</a>
                <a href="{{ route('visits.create', ['animal_id' => $animal->id, 'owner_id' => $animal->owner->id]) }}">[new
                    visit]</a>
            </div>
        </div>

        @if (!Request::is('owners/*'))
        <h3> owner:
            <a href="{{ route('owners.show', $animal->owner->id) }}">
                {{ $animal->owner->first_name.' '.$animal->owner->surname }}
        </h3>
        </a>
        @else
        <h3> owner: {{ $animal->owner->first_name.' '.$animal->owner->surname }} </h3>
        @endif
        <br>

        <div class="info" style="display: flex; flex-direction: row; justify-content: space-between;">
            <img src="/images/pets/{{ $animal->image->path }}" alt="{{ $animal->name }}" style="max-height: 20em;" />
            <div class="details" style="border: solid 2px black; background-color: lightgray; max-height: 20em; padding: 1.5em;">
                <span> species: {{ $animal->species }} </span>
                <br>
                <span> breed: {{ $animal->breed }} </span>
                <br>
                <span> age: {{ $animal->age }} </span>
                <br>
                <span> weight: {{ $animal->weight }} </span>
                <br>
            </div>
        </div>
        <div>
            <style>
                table,
                th,
                td {
                    border: 1px solid black;
                    border-collapse: collapse;
                }

                td {
                    padding: 0 1em;
                }
            </style>
            <table style="margin: 2em;">
                <tr>
                    <th>Date</th>
                    <th>Detail</th>
                    <tr />
                    @foreach ($animal->visits as $visit)
                <tr>
                    <td>{{ $visit->visit_date }}</td>
                    <td>{{ $visit->description }}</td>
                    <tr />
                    @endforeach
            </table>
        </div>
    </div>
</body>
