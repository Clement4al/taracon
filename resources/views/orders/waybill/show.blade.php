@if(request()->has('tses'))
    @include('orders.waybill.partials.tses')
@else
    @include('orders.waybill.partials.taracon')
@endif
