
@if ($paginator->hasPages())
  
            {{-- Previous Page Link --}}
            @if ($paginator->onFirstPage())
                <li><a class="prev page-numbers disabled" aria-disabled="true"  aria-label="@lang('pagination.previous')" ><i class="ot-flaticon-left-arrow"></i></a></li>
            @else
            <li><a class="prev page-numbers" aria-label="@lang('pagination.previous')" rel="prev"   href="{{ $paginator->previousPageUrl() }}"  ><i class="ot-flaticon-left-arrow"></i></a></li>
            @endif


            {{-- Pagination Elements --}}
            @foreach ($elements as $element)
                {{-- "Three Dots" Separator --}}
                @if (is_string($element))
                <li><a class="page-numbers disabled" aria-disabled="true">{{ $element }}</a></li>
                    @endif

                {{-- Array Of Links --}}
                @if (is_array($element))
                    @foreach ($element as $page => $url)
                        @if ($page == $paginator->currentPage())
                        <li><a aria-current="page" class="page-numbers current" >{{ $page }}</a></li>
               
                        @else
                            <li><a class="page-numbers"   href="{{ $url }}">{{ $page }}</a></li>
                        @endif
                    @endforeach
                @endif
            @endforeach

            {{-- Next Page Link --}}
            @if ($paginator->hasMorePages())
            <li><a class="next page-numbers" href="{{ $paginator->nextPageUrl() }}" aria-label="@lang('pagination.next')"><i class="ot-flaticon-right-arrow"></i></a></li>
            
            @else
            <li><a class="next page-numbers disabled" aria-disabled="true"  href="{{ $paginator->nextPageUrl() }}" aria-label="@lang('pagination.next')"><i class="ot-flaticon-right-arrow"></i></a></li>
            @endif
        
@endif

