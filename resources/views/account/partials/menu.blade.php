<div class="overflow-scroll">
    <ul class="flex space-x-1">
        <li>
            <x-rapidez::button href="/account" variant="outline">
                @lang('Overview')
            </x-rapidez::button>
        </li>
        <li>
            <x-rapidez::button href="/account/edit" variant="outline">
                @lang('Account')
            </x-rapidez::button>
        </li>
        <li>
            <x-rapidez::button href="/account/addresses" variant="outline">
                @lang('Addresses')
            </x-rapidez::button>
        </li>
        <li>
            <x-rapidez::button href="/account/orders" variant="outline">
                @lang('Orders')
            </x-rapidez::button>
        </li>
        @if(App::providerIsLoaded('Rapidez\Wishlist\WishlistServiceProvider'))
            <li>
                <x-rapidez::button href="/account/wishlist" variant="outline">
                    @lang('Wishlist')
                </x-rapidez::button>
            </li>
        @endif
    </ul>
</div>
