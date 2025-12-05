<x-site>
    <x-home.hero />
    <x-home.feature />
    <x-home.deals :$discountedProducts/>
    <x-home.catergory />
    <x-home.bestseller :$bestSellers />
{{--    <x-home.shopfruit />--}}
{{--    <x-home.breakfast />--}}
    <x-home.trending :$latestProducts/>
</x-site>
