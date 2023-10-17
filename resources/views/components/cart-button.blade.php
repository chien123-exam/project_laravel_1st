<style>
    .btn-primary{
        float: right;
    }
</style>
<div>
    @php
        $total = 0;
        $cart = Session::get('cart', []);
        foreach ($cart as $item) {
            $total += $item['quantity'];
        }
    @endphp
    @if($total > 0)
        <a href="{{ route('cart.index') }}" class="btn btn-primary">
            Giỏ hàng ({{ $total }})
        </a>
    @else
        <a href="{{ route('cart.index') }}" class="btn btn-primary">Giỏ hàng</a>
    @endif
</div>






