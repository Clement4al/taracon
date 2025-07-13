@props(['products', 'id', 'style' => ''])

<!-- Modal Search Start -->
<div class="modal fade" id="searchModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-screen">
        <div class="modal-content rounded-0">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Search by keyword</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <div class="modal-body d-flex align-items-center">
                <div class="w-75 mx-auto">
                    <form id="{{ $id }}" action="{{ route('shop.index') }}" class="search">
                        <livewire:site-search />
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Modal Search End -->
