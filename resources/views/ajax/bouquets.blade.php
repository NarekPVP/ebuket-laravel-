@foreach($bouquets as $product)
    <div class="item-view">
        <div class="item">
            <div class="img-item">
                <a href="{{ route('bouquets.single', [app()->getLocale(), $product->id]) }}"><img src="{{ asset($product->img) }}"></a>
            </div>
            <div class="info-item flex">
                <div class="name-item">
                    <a href="#"><p>{{ $product->name }}</p></a>
                </div>
                <div class="shop-and-grade flex">
                    <a href="#"><p class="name-store">магазин</p></a>
                    <div class="grade-store">
                        <img src="{{ asset('img/star-grade.png') }}">
                        <p class="grade">4.3</p>
                        <p class="count-grade">(108)</p>
                    </div>
                </div>
                <div class="shipment flex">
                    <img src="{{ asset('img/ship-car.png') }}">
                    <p class="price-ship">80 грн</p>
                </div>
                <div class="like-and-buy">
                    <a href="#" class="svg-like"><i class="fa fa-heart-o active" aria-hidden="true"></i></a>
                    <button class="main-btn btn-buy"><span class="default">{{ $product->price }} грн</span><span class="hover">Купить</span></button>
                </div>
            </div>
        </div>
    </div>
@endforeach
