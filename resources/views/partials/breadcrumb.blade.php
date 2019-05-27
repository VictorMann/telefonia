@if ($breadcrumb->count())
    <ul class="paginacao-topo list-unstyled">
        @foreach ($breadcrumb as $m)
            <li>
                @if (!$loop->last)
                <a href="{{ $m->route ? route($m->route) : 'javascript:;' }}">
                    {{ $m->nome }}
                </a>
                @else {{ $m->nome }}
                @endif
            </li>
        @endforeach
    </ul>
@endif
