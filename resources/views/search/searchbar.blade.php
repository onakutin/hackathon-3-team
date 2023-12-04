<form action="{{ route('search') }}" method="get">
    {{-- @csrf not neeeded for get --}}
    <input type="text" name="name" id="name" placeholder="Name...">
    <input type="submit" value="search">
</form>