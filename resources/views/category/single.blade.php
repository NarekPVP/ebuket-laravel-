@extends('layouts.app')

@section('content')

    @include('layouts.sidebar')
    @if(isset($category) && !empty($category))
        <div class="right-col">
        @if(isset($products))
            <div class="product-view" data-categoryid="{{ $category->id }}" style="
            width: 1200px;
            margin: auto;
        ">
                    <div class="bord-div">
                        <div class="heading-white">
                            <h2 class="relative bg-white">{{ $category->name }}</h2>
                        </div>
                    </div>
                <div class="grid-item flex products-card-body">
                    @foreach($products as $product)
                        <div class="item-view">
                            <div class="item">
                                <div class="img-item">
                                    <a href="{{ route('bouquets.single', [App()->getLocale(), $product->id]) }}"><img src="{{ asset($product->img) }}"></a>
                                </div>
                                <div class="info-item flex">
                                    <div class="name-item">
                                        <a href="#"><p>{{ $product->title }}</p></a>
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
                </div>
                @endif
            </div>
        @else
            <div class="container">
                <h2 class="relative bg-white">У цій категорії немає товарів</h2>
            </div>
        @endif
        </div>

@endsection

@section('js')
    <script>
        function sendPriceFilterAjax() {
            let min = parseInt($('#price-min').val());
            let max = parseInt($('#price-max').val());
            let categoryId = $('.product-view').data('categoryid');

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type: 'GET',
                url: "{{ route('bouquets.filter.category', App()->getLocale()) }}",
                data: {min: min, max: max, category_id: categoryId},
                success: function(data){
                    $('.products-card-body').html(data);
                }
            });

        }
        $('.polzunok-5').on('click', sendPriceFilterAjax);
        $('#price-min').on('change', sendPriceFilterAjax);
        $('#price-max').on('change', sendPriceFilterAjax);
        $('.ui-slider-handle').on('click', sendPriceFilterAjax);
    </script>
@endsection
