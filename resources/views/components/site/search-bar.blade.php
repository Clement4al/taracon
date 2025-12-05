@props(['products', 'id', 'style' => ''])
<div class="col-auto p0">
    <div class="top-search home7_style">
            <form id="{{ $id }}" action="{{ route('shop.index') }}" class="form-search" >
                <livewire:site-search />
            </form>
        <!-- /.form-search -->
    </div>
    <!-- /.top-search -->
</div>
<div class="col-auto p0">
    <div class="advscrh_frm_btn home7_style">
        <button type="submit" class="btn search-btn"  form="{{ $id }}">
            <span class="flaticon-search"></span>
        </button>
    </div>
</div>
