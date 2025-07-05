{{-- filepath: d:\travela-master\resources\views\clients\wishlist.blade.php --}}
@include('clients.blocks.header')
@include('clients.blocks.banner')

<!-- Wishlist Area start -->
<section class="wishlist-page py-100 rel z-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-10 rmb-75">
                <div class="shop-sidebar mb-30">
                    <h5 class="widget-title">Danh sách tour du lịch yêu thích của bạn</h5>
                    <p style="font-size: 18px">Theo dõi các tour du lịch yêu thích của bạn tại đây. Sẵn sàng đặt tour
                        chưa? Truy cập <a href="{{ route('tours') }}"
                            style="color: blue; text-decoration: underline;">Tours</a> để xem
                        thêm chi tiết!</p>
                </div>
            </div>
            <div class="col-lg-9">
                @forelse ($wishlists as $wishlist)
                    <div class="destination-item style-three bgc-lighter" data-aos="fade-up" data-aos-duration="1500"
                        data-aos-offset="50">
                        <div class="image">
                            <img src="{{ asset('clients/assets/images/gallery-tours/' . $wishlist->images[0]) }}"
                                alt="Wishlist Tour">
                        </div>
                        <div class="content">
                            <div class="destination-header">
                                <span class="location"><i
                                        class="fal fa-map-marker-alt"></i>{{ $wishlist->destination }}</span>
                                <div class="ratting">
                                    @for ($i = 0; $i < 5; $i++)
                                        @if ($wishlist->rating && $i < $wishlist->rating)
                                            <i class="fas fa-star"></i>
                                        @else
                                            <i class="far fa-star"></i>
                                        @endif
                                    @endfor
                                </div>
                            </div>
                            <h5><a
                                    href="{{ route('tour-detail', ['id' => $wishlist->tourId]) }}">{{ $wishlist->title }}</a>
                            </h5>
                            <div class="truncate-3-lines">
                                {!! $wishlist->description !!}
                            </div>

                            <ul class="blog-meta">
                                <li><i class="far fa-clock"></i>{{ $wishlist->time }}</li>
                                <li><i class="far fa-user"></i> {{ $wishlist->quantity }}</li>
                            </ul>
                            <div class="destination-footer">
                                <span
                                    class="price"><span>{{ number_format($wishlist->priceAdult, 0) }}</span>/vnđ</span>
                                <a href="{{ route('tour-detail', ['id' => $wishlist->tourId]) }}"
                                    class="theme-btn style-two style-three">
                                    <span data-hover="Xem chi tiết">Xem chi tiết</span>
                                    <i class="fal fa-arrow-right"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <p>Chưa có tour nào trong danh sách mong muốn của bạn. Hãy bắt đầu khám phá và thêm tour yêu thích
                        của bạn vào danh sách mong muốn!</p>
                @endforelse
            </div>
        </div>
    </div>
</section>
<!-- Wishlist Area end -->
@include('clients.blocks.footer')
