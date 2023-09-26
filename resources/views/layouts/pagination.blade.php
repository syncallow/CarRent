
@if($paginator->hasPages())
<div class="row">
    <div class="col-5">
        <div class="custom-pagination">
            @foreach($elements as $element)
                @if (is_string($element))
                    <span>{{$element}}</span>
                @endif
                @if(is_array($element))
                    @foreach($element as $page => $url)
                        @if($page == $paginator->currentPage())
                                <span>{{ $page }}</span>
                            @else
                                <a href="{{ $url }}">{{ $page }}</a>
                            @endif
                        @endforeach
                    @endif
            @endforeach
        </div>
    </div>
</div>
@endif




