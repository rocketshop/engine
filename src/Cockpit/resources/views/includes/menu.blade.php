<div class="list-group">

    @foreach($menu as $group)

    <div class="list-group-item flex-column align-items-start px-0">

        <div class="d-flex w-100 justify-content-between">
          <h5 class="mb-1 px-3">{{ $group['name'] }}</h5>
          <small></small>
        </div>

        <nav class="nav flex-column">

            @foreach($group['items'] as $item) 

                <a class="nav-link" href="{{ $item['url'] }}">{{ $item['name'] }}</a>

            @endforeach

        </nav>

    </div>

    @endforeach
    
</div>