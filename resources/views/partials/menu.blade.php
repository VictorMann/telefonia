<nav class="barra-lateral">
    <ul class="list-unstyled lista-nav">
        @foreach ($menu as $m)
            <li>
                <a href="{{ $m->route ? route($m->route) : 'javascript:;' }}" class="{{ $m->hasSub() ? 'btn-com-sub' : '' }}">
                    @if ($m->icon) <span class="icon-menu"><i class="{{ $m->icon }}"></i></span> @endif
                    <span class="title-menu">{{ $m->nome }}</span>
                    @if ($m->hasSub()) <span class="icon-sub-nav"><i class="fas fa-angle-right"></i></span> @endif
                </a>

                @if ($m->hasSub())
                    <ul class="list-unstyled sub-nav">
                        @foreach ($m->subs as $sub)
                            <li>
                                <a href="{{ $sub->route ? route($sub->route) : 'javascript:;' }}" class="{{ $sub->hasSub() ? 'btn-com-sub' : '' }}">
                                    <span class="title-menu">{{ $sub->nome }}</span>
                                    @if ($sub->hasSub()) <span class="icon-sub-nav"><i class="fas fa-angle-right"></i></span> @endif
                                </a>

                                @if ($sub->hasSub())
                                    <ul class="list-unstyled sub-nav links">
                                        @foreach ($sub->subs as $s)
                                            <li><a href="{{ $s->route ? route($s->route) : 'javascript:;' }}">{{ $s->nome }}</a></li>
                                        @endforeach
                                    </ul>
                                @endif
                            </li>
                        @endforeach
                    </ul>
                @endif
            </li>
        @endforeach
    </ul>
</nav>
