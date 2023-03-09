@if ($paginator->hasPages())
    <ul class="page-numbers">
        @foreach ($elements[0] as $page => $url)
            @if ($page == $paginator->currentPage())
                <li class="active"><a href="{{ $url }}">{{ $page }}</a></li>
            @else
                <li><a href="{{ $url }}">{{ $page }}</a></li>
            @endif
        @endforeach
        <li><a href="{{ $paginator->nextPageUrl() }}"><i class="fa fa-angle-double-right"></i></a></li>
    </ul>
@endif
