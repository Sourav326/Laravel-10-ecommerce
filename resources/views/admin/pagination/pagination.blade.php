
@if ($paginator->hasPages())
    <div class="btn-group mt-4" role="group" aria-label="Basic example">
        @if ($paginator->onFirstPage())
            <span class="paginateNext btn btn-outline-secondary" disabled aria-hidden="true">&laquo;</span>
        @else
            <a class="btn btn-outline-secondary " href="{{ $paginator->previousPageUrl() }}" rel="prev" aria-label="@lang('pagination.previous')">&laquo;</a>
        @endif
        @foreach ($elements as $element)
            {{-- "Three Dots" Separator --}}
            @if (is_string($element))
                <span class="paginateNext btn btn-outline-secondary">{{ $element }}</span>
            @endif

            {{-- Array Of Links --}}
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page == $paginator->currentPage())
                        <span class="active paginateNext btn btn-outline-secondary">{{ $page }}</span>
                    @else
                        <a class="btn btn-outline-secondary" href="{{ $url }}" rel="prev">{{ $page }}</a>
                    @endif
                @endforeach
            @endif
        @endforeach

        @if ($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="btn btn-outline-secondary" rel="next" aria-label="@lang('pagination.next')">&raquo;</a>
        @else
            <span class="paginateNext btn btn-outline-secondary" disabled aria-hidden="true">&raquo;</span>
        @endif
    </div>
@endif