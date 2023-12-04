<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/style.css">
</head>
<body>
    @include('welcome')
        
        <div class="search-results">
            <div class="search-results__owners">
                <h2>
                    Owners:
                </h2>
                @if ($owners)
                <ul>
                    @foreach($owners as $owner)
                    <li>
    
                        {{ $owner->surname }} {{ $owner->first_name}}
                        <ul>
                            @foreach($owner->animals as $animal)
                            <li> {{ $animal->name}}</li>
                            @endforeach
                        </ul>
                    </li>
                    @endforeach
                </ul>
                @else
                {{ $error }}
                    
                @endif
            </div>
           <div class="search-results__pets">
                <h2>
                    Pets:
                </h2>
                @if ($animals)
                <ul>
                    @foreach($animals as $animal)
                    <li>
                        {{-- @dd($animal->owner) --}}
                        {{ $animal->name}} ({{$animal->owner->surname}} {{$animal->owner->first_name}})
                    </li>
                    @endforeach
                </ul>
                @else
                Not found
                    
                @endif
           </div>
        </div>
    </div>
</body>
</html>