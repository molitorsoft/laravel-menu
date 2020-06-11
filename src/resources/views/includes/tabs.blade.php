@php $menu = app('MenuManager')->build($name) @endphp
@if($menu->getNumItems() > 0)
    <ul class="nav">
        @foreach($menu->getItems() as $item)
            <li class="nav-item">
                <a class="nav-link active" href="{{ $item->getHref() }}">{{ $item->getLabel() }}</a>
            </li>
        @endforeach
    </ul>
@endif
