{{-- Pagination Starts --}}
<div>
    <div class="col-12">
        @if ($products->hasPages())
            <div class="pagination d-flex justify-content-center mt-5">
                {{-- Previous Page Link --}}
                @if ($products->onFirstPage())
                    <a href="#" class="rounded disabled" onclick="return false;">&laquo;</a>
                @else
                    <a href="{{ $products->previousPageUrl() }}" class="rounded">&laquo;</a>
                @endif

                {{-- Pagination Elements --}}
                @foreach ($products->getUrlRange(1, $products->lastPage()) as $page => $url)
                    @if ($page == $products->currentPage())
                        <a href="#" class="active rounded"
                           onclick="return false;">{{ $page }}</a>
                    @else
                        <a href="{{ $url }}" class="rounded">{{ $page }}</a>
                    @endif
                @endforeach

                {{-- Next Page Link --}}
                @if ($products->hasMorePages())
                    <a href="{{ $products->nextPageUrl() }}"
                       class="rounded">&raquo;</a>
                @else
                    <a href="#" class="rounded disabled" onclick="return false;">&raquo;</a>
                @endif
            </div>
        @endif
    </div>
</div>
{{-- Pagination Ends --}}
