<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
</head>
<body>
    <h1>
        Welcome to the Veterinary Clinic database
    </h1>
    <div class="main-container">
        <div class="options">
            <h2>
                What do you want to do?
            </h2>
            <h3>
                Search for owners or pets:
            </h3>
            @include('search/searchbar')
            <h3>
                Or go to the database
            </h3>
            <h4>
                Pets:
            </h4>
            <a href="{{ route('animals.index')}}">Animals database</a>
            <a href="{{ route('animals.create')}}">Insert new pet</a>
            <h4>
                Owners:
            </h4>
            <a href="{{ route('owners.index')}}">Owners database</a>
            <a href="{{ route('owners.create')}}">Insert new owner</a>
            <h4>
                Visits:
            </h4>
            "Visits search bar"
        </div>
</body>
</html>