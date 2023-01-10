<header class="bg-warning">
    <div class="container d-flex justify-content-between align-items-center py-3">
        <div class="logo">
            <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/1/12/British_Rail_-_colour_reversed_logo.svg/800px-British_Rail_-_colour_reversed_logo.svg.png" alt="train logo">
        </div>
        <h2 class="text-uppercase">train station</h2>
        <nav>
            <ul class="d-flex">
                @foreach (config('db.menu') as $item)
                <li class="mx-2 text-capitalize {{Route::currentRouteName() == $item['routeName'] ? 'fw-bold' : ''}}">
                    <a href="{{route($item['routeName'])}}">{{$item['text']}}</a>
                </li>
                @endforeach
            </ul>
        </nav>
    </div>
</header>
