<div>
    <style>
        button {
            border: none;
            background: none;
        }
    </style>
    @if ($all_cart->count() > 0)
        <table class="table table-cart table-mobile">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($all_cart as $cart)
                    <tr>
                        <td class="product-col">
                            <div class="product">
                                <figure class="product-media">
                                    <a href="#">
                                        <img src="{{ asset('assets/images/products/' . $cart->image) }}"
                                            alt="Product image">
                                    </a>
                                </figure>

                                <h3 class="product-title">
                                    <a href="#">{{ $cart->product_name }}</a>
                                </h3><!-- End .product-title -->
                            </div><!-- End .product -->
                        </td>
                        <td class="price-col">
                            @if ($cart->discount != null)
                                <span class="">đ
                                    {{ number_format((int) ($cart->price - $cart->price * ($cart->discount / 100)), 0, ',', '.') }}</span>
                            @else
                                <span class="">đ {{ number_format((int) $cart->price, 0, ',', '.') }}</span>
                            @endif
                        </td>
                        <td class="quantity-col">
                            <div class="cart-product-quantity">
                                <div class="input-group w-auto justify-content-start align-items-center">
                                    <button wire:click="decrementQuantity({{ $cart->id }})">-</button>
                                    <input type="text" value="{{ $cart->quantity }}" name="quantity"
                                        class="quantity-field border-0 text-center w-25" />
                                    <button wire:click="incrementQuantity({{ $cart->id }})">+</button>
                                </div>
                            </div>
                        </td>
                        <td class="total-col">đ {{ number_format((int) $cart->money, 0, ',', '.') }}</td>
                        <td class="remove-col"><a href="{{ route('cart.delete', ['id' => $cart->id]) }}"
                                class="btn-remove"><i class="icon-close"></i></a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Product is not found</p>
    @endif

    <script>
        window.addEventListener('show-alert', function(event) {
            alert(event.detail);
        });
    </script>
</div>
