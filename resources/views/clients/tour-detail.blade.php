@include('clients.blocks.header')
<section class="page-banner-two rel z-1">
    <div class="container-fluid">
        <hr class="mt-0">
        <div class="container">
            <div class="banner-inner pt-15 pb-25">
                <h2 class="page-title mb-10 aos-init aos-animate" data-aos="fade-left" data-aos-duration="1500"
                    data-aos-offset="50">{{ $tourDetail->destination }}
                    @if ($tourDetail->weatherDestination)
                        , {{ $tourDetail->weatherDestination }}
                    @endif
                </h2>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-20 aos-init aos-animate" data-aos="fade-right"
                        data-aos-delay="200" data-aos-duration="1500" data-aos-offset="50">
                        <li class="breadcrumb-item"><a href="index.html">Trang chủ</a></li>
                        <li class="breadcrumb-item active">{{ $title }}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<!-- Tour Gallery start -->
<div class="tour-gallery">
    <div class="container-fluid">
        <div class="row gap-10 justify-content-center rel">
            <div class="col-lg-4 col-md-6">
                <div class="gallery-item">
                    <img src="{{ asset('clients/assets/images/gallery-tours/' . $tourDetail->images[0] . '') }}"
                        alt="Destination">
                </div>
                <div class="gallery-item">
                    <img src="{{ asset('clients/assets/images/gallery-tours/' . $tourDetail->images[1] . '') }}"
                        alt="Destination">
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="gallery-item gallery-between">
                    <img src="{{ asset('clients/assets/images/gallery-tours/' . $tourDetail->images[2] . '') }}"
                        alt="Destination">
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="gallery-item">
                    <img src="{{ asset('clients/assets/images/gallery-tours/' . $tourDetail->images[3] . '') }}"
                        alt="Destination">
                </div>
                <div class="gallery-item">
                    <img src="{{ asset('clients/assets/images/gallery-tours/' . $tourDetail->images[4] . '') }}"
                        alt="Destination">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Tour Gallery End -->

<!-- Tour Header Area start -->
<section class="tour-header-area pt-70 rel z-1">
    <div class="container">
        <div class="row justify-content-between">
            <div class="col-xl-6 col-lg-7">
                <div class="tour-header-content mb-15" data-aos="fade-left" data-aos-duration="1500"
                    data-aos-offset="50">
                    <span class="location d-inline-block mb-10">
                        <i class="fal fa-map-marker-alt"></i>
                        {{ $tourDetail->destination }}
                        @if ($tourDetail->weatherDestination)
                            , {{ $tourDetail->weatherDestination }}
                        @endif
                    </span>
                    <div class="section-title pb-5">
                        <h2>{{ $tourDetail->title }}</h2>
                    </div>
                    <div class="ratting">
                        @for ($i = 0; $i < 5; $i++)
                            @if ($avgStar && $i < $avgStar)
                                <i class="fas fa-star"></i>
                            @else
                                <i class="far fa-star"></i>
                            @endif
                        @endfor

                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5 text-lg-end" data-aos="fade-right" data-aos-duration="1500"
                data-aos-offset="50">
                <div class="tour-header-social mb-10">
                    <a href="#" class="share-btn"><i class="far fa-share-alt"></i>Share tours</a>
                    <!-- Wish List Button -->
                    <a href="#" id="wishlist-button" data-tour-id="{{ $tourDetail->tourId }}">
                        <i class="fas fa-heart" id="wishlist-icon"
                            style="color: {{ $isInWishlist ? 'red' : 'white' }}"></i> Wish list
                    </a>
                </div>

                <!-- Modal Share -->
                <div id="shareModal" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <h3>Chia sẻ tour</h3>
                        <div class="share-options">
                            <a href="#" id="facebookShare" target="_blank" class="share-button facebook">
                                <i class="fab fa-facebook"></i> Facebook
                            </a>
                            <a href="#" id="messengerShare" target="_blank" class="share-button messenger">
                                <i class="fab fa-facebook-messenger"></i> Messenger
                            </a>
                            <a href="#" id="instagramShare" target="_blank" class="share-button instagram">
                                <i class="fab fa-instagram"></i> Instagram
                            </a>
                        </div>
                        <button id="copyLink">📋 Sao chép liên kết</button>
                    </div>
                </div>
            </div>
        </div>
        <hr class="mt-50 mb-70">
    </div>
</section>
<!-- Tour Header Area end -->

<!-- Weather Tour Area start -->
<section class="weather-tour-area pt-50 pb-70 rel z-1">
    <div class="weather-container">
        <div class="section-title text-center mt-2 mb-40">
            <h3 class="weather-title">Dự báo thời tiết tại {{ $tourDetail->destination }}</h3>
        </div>
        <div id="weather-box" class="text-center">
            <p>Đang tải dữ liệu thời tiết cho {{ $tourDetail->destination }}...</p>
        </div>
    </div>
    <div class="weather-container">
        <!-- Kiểm tra xem weatherDestination có giá trị không -->
        @if ($tourDetail->weatherDestination)
            <div class="section-title text-center mt-2 mb-40">
                <h3 class="weather-title">Dự báo thời tiết tại {{ $tourDetail->weatherDestination }}</h3>
            </div>
            <div id="weather-box" class="text-center">
                <div id="weather-destination-box" class="text-center">
                    <p>Đang tải dữ liệu thời tiết cho {{ $tourDetail->weatherDestination }}...</p>
                </div>
            </div>
        @endif
    </div>
    <div id="weather-city" data-city="{{ Str::ascii(trim($tourDetail->destination)) }}" style="display: none;">
    </div>
    @if ($tourDetail->weatherDestination)
        <div id="weather-destination" data-city="{{ Str::ascii(trim($tourDetail->weatherDestination)) }}"
            style="display: none;"></div>
    @endif

</section>
<!-- Weather Tour Area end -->

<!-- Tour Details Area start -->
<section class="tour-details-page pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="tour-details-content">
                    <h3>Khám phá Tours</h3>
                    <p>{!! $tourDetail->description !!} </p>
                    <div class="row pb-55">
                        <div class="col-md-6">
                            <div class="tour-include-exclude mt-30">
                                <h5>Bao gồm và không bao gồm</h5>
                                <ul class="list-style-one check mt-25">
                                    <li><i class="far fa-check"></i> Dịch vụ đón và trả khách</li>
                                    <li><i class="far fa-check"></i> 1 bữa ăn mỗi ngày</li>
                                    <li><i class="far fa-check"></i> Bữa tối trên du thuyền & Sự kiện âm nhạc</li>
                                    <li><i class="far fa-check"></i> Tham quan 7 địa điểm tuyệt vời nhất trong thành
                                        phố
                                    </li>
                                    <li><i class="far fa-check"></i> Nước đóng chai trên xe buýt</li>
                                    <li><i class="far fa-check"></i> Phương tiện di chuyển Xe buýt du lịch hạng sang
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="tour-include-exclude mt-30">
                                <h5>Không bao gồm</h5>
                                <ul class="list-style-one mt-25">
                                    <li><i class="far fa-times"></i> Tiền boa</li>
                                    <li><i class="far fa-times"></i> Đón và trả khách tại khách sạn</li>
                                    <li><i class="far fa-times"></i> Bữa trưa, Đồ ăn & Đồ uống</li>
                                    <li><i class="far fa-times"></i> Nâng cấp tùy chọn lên một ly</li>
                                    <li><i class="far fa-times"></i> Dịch vụ bổ sung</li>
                                    <li><i class="far fa-times"></i> Bảo hiểm</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <h3>Lịch trình</h3>
                <div class="accordion-two mt-25 mb-60" id="faq-accordion-two">
                    @php
                        $day = 1;
                    @endphp
                    @foreach ($tourDetail->timeline as $timeline)
                        <div class="accordion-item">
                            <h5 class="accordion-header">
                                <button class="accordion-button collapsed" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo{{ $timeline->timeLineId }}">
                                    Ngày {{ $day++ }} - {{ $timeline->title }}
                                </button>
                            </h5>
                            <div id="collapseTwo{{ $timeline->timeLineId }}" class="accordion-collapse collapse"
                                data-bs-parent="#faq-accordion-two">
                                <div class="accordion-body">
                                    <p>{!! $timeline->description !!}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- Map start -->
                <div style="margin-bottom:50px;" class="tour-details-content">
                    <h3>Bản đồ 🌍</h3>
                    <div id="map" style="width: 100%; height: 350px; border-radius: 8px;"></div>
                </div>
                <!-- Map end -->
                <div id="partials_reviews">
                    @include('clients.partials.reviews')
                </div>

                <h3 class="{{ $checkDisplay }}">Thêm Đánh giá</h3>
                <form id="comment-form" class="comment-form bgc-lighter z-1 rel mt-30 {{ $checkDisplay }}"
                    name="review-form" action="{{ route('reviews') }}" method="post" data-aos="fade-up"
                    data-aos-duration="1500" data-aos-offset="50">
                    @csrf
                    <div class="comment-review-wrap">
                        <div class="comment-ratting-item">
                            <span class="title">Đánh giá</span>
                            <div class="ratting" id="rating-stars">
                                <i class="far fa-star" data-value="1"></i>
                                <i class="far fa-star" data-value="2"></i>
                                <i class="far fa-star" data-value="3"></i>
                                <i class="far fa-star" data-value="4"></i>
                                <i class="far fa-star" data-value="5"></i>
                            </div>
                        </div>

                    </div>
                    <hr class="mt-30 mb-40">
                    <h5>Để lại phản hồi</h5>
                    <div class="row gap-20 mt-20">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="message">Nội dung</label>
                                <textarea name="message" id="message" class="form-control" rows="5" required=""></textarea>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group mb-0">
                                <button type="submit" class="theme-btn bgc-secondary style-two" id="submit-reviews"
                                    data-url-checkBooking="{{ route('checkBooking') }}"
                                    data-tourId-reviews="{{ $tourDetail->tourId }}">
                                    <span data-hover="Gửi đánh giá">Gửi đánh giá</span>
                                    <i class="fal fa-arrow-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
            <div class="col-lg-4 col-md-8 col-sm-10 rmt-75">
                <div class="blog-sidebar tour-sidebar">

                    <div class="widget widget-booking" data-aos="fade-up" data-aos-duration="1500"
                        data-aos-offset="50">
                        <h5 class="widget-title">Tour Booking</h5>
                        <form action="{{ route('booking', ['id' => $tourDetail->tourId]) }}" method="POST">
                            @csrf
                            <div class="date mb-25">
                                <b>Ngày bắt đầu</b>
                                <input type="text" value="{{ date('d-m-Y', strtotime($tourDetail->startDate)) }}"
                                    name="startdate" disabled>
                            </div>
                            <hr>
                            <div class="date mb-25">
                                <b>Ngày kết thúc</b>
                                <input type="text" value="{{ date('d-m-Y', strtotime($tourDetail->endDate)) }}"
                                    name="enddate" disabled>
                            </div>
                            <hr>
                            <div class="time py-5">
                                <b>Thời gian :</b>
                                <p style="margin-top:16px";>{{ $tourDetail->time }}</p>
                                <input type="hidden" id="tourTime" value="{{ $tourDetail->time }}">
                            </div>
                            <hr class="mb-25">
                            <h6>Vé:</h6>
                            <ul class="tickets clearfix">
                                <li>
                                    Người lớn <span
                                        class="price">{{ number_format($tourDetail->priceAdult, 0, ',', '.') }}
                                        VND</span>
                                </li>
                                <li>
                                    Trẻ em <span
                                        class="price">{{ number_format($tourDetail->priceChild, 0, ',', '.') }}
                                        VND</span>
                                </li>
                            </ul>
                            @php
                                $currentDate = now();
                                $endDate = \Carbon\Carbon::parse($tourDetail->endDate);
                            @endphp
                            <button type="submit" class="theme-btn style-two w-100 mt-15 mb-5"
                                @if ($currentDate > $endDate) disabled style="background-color: #d3d3d3; color: #6c757d; cursor: not-allowed;" @endif>
                                <span data-hover="Đặt ngay">Đặt ngay</span>
                                <i class="fal fa-arrow-right"></i>
                            </button>
                            @if ($currentDate > $endDate)
                                <p class="text-danger text-center mt-2">Tour đã kết thúc, không thể đặt.</p>
                            @endif
                            <div class="text-center">
                                <a href="{{ route('contact') }}">Bạn cần trợ giúp không?</a>
                            </div>
                        </form>
                    </div>

                    <div class="widget widget-contact" data-aos="fade-up" data-aos-duration="1500"
                        data-aos-offset="50">
                        <h5 class="widget-title">Cần trợ giúp?</h5>
                        <ul class="list-style-one">
                            <li><i class="far fa-envelope"></i> <a
                                    href="emilto:minhhoangse6@gmail.com">minhhoangse6@gmail.com</a></li>
                            <li><i class="far fa-phone-volume"></i> <a href="callto:+84905530635">+84 905 530 635</a>
                            </li>
                        </ul>
                    </div>

                    @if (!empty($tourRecommendations) && $tourRecommendations->isNotEmpty())
                        <div class="widget widget-tour" data-aos="fade-up" data-aos-duration="1500"
                            data-aos-offset="50">
                            <h6 class="widget-title">Tours tương tự</h6>
                            @foreach ($tourRecommendations as $tour)
                                <div class="destination-item tour-grid style-three bgc-lighter">
                                    <div class="image">
                                        <img src="{{ asset('clients/assets/images/gallery-tours/' . ($tour->images[0] ?? 'default.jpg')) }}"
                                            alt="{{ $tour->title }}" style="max-height: 137px; width: 100%;">
                                    </div>
                                    <div class="content">
                                        <div class="destination-header">
                                            <span class="location"><i class="fal fa-map-marker-alt"></i>
                                                {{ $tour->destination }}</span>
                                            <div class="ratting">
                                                <i class="fas fa-star"></i>
                                                <span>({{ $tour->rating ?? '0' }})</span>
                                            </div>
                                        </div>
                                        <h6>
                                            <a
                                                href="{{ route('tour-detail', ['id' => $tour->tourId]) }}">{{ $tour->title }}</a>
                                        </h6>
                                        <p class="price">
                                            {{ number_format($tour->priceAdult, 0, ',', '.') }} VND
                                        </p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @else
                        <div class="widget widget-tour" data-aos="fade-up" data-aos-duration="1500"
                            data-aos-offset="50">
                            <h6 class="widget-title">Tours tương tự</h6>
                            <p>Không có tour tương tự nào để hiển thị.</p>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
</section>
<!-- Tour Details Area end -->

<!-- Leaflet -->
<link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>

<script>
    const origin = @json($tourDetail->destination);
    const destination = @json($tourDetail->weatherDestination);

    const map = L.map('map').setView([0, 0], 6); // tạm thời đặt giữa

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '© OpenStreetMap contributors'
    }).addTo(map);

    async function getCoordinates(location) {
        const response = await fetch(
            `https://nominatim.openstreetmap.org/search?format=json&q=${encodeURIComponent(location)}`);
        const data = await response.json();
        if (data.length > 0) {
            return {
                lat: parseFloat(data[0].lat),
                lon: parseFloat(data[0].lon)
            };
        }
        throw new Error('Không tìm thấy tọa độ cho ' + location);
    }

    async function initMap() {
        try {
            const start = await getCoordinates(origin);

            // Nếu không có điểm đến -> chỉ hiển thị điểm bắt đầu
            if (!destination) {
                map.setView([start.lat, start.lon], 10);
                L.marker([start.lat, start.lon]).addTo(map).bindPopup("Điểm: " + origin).openPopup();
                return;
            }

            const end = await getCoordinates(destination);
            map.setView([start.lat, start.lon], 7);

            // Thêm marker
            L.marker([start.lat, start.lon]).addTo(map).bindPopup("Điểm xuất phát: " + origin).openPopup();
            L.marker([end.lat, end.lon]).addTo(map).bindPopup("Điểm đến: " + destination);

            // Vẽ tuyến đường bằng OSRM
            const routeUrl =
                `https://router.project-osrm.org/route/v1/driving/${start.lon},${start.lat};${end.lon},${end.lat}?overview=full&geometries=geojson`;
            const routeResponse = await fetch(routeUrl);
            const routeData = await routeResponse.json();

            if (routeData.routes && routeData.routes.length > 0) {
                const route = routeData.routes[0].geometry;
                L.geoJSON(route, {
                    style: {
                        color: 'blue',
                        weight: 4,
                        opacity: 0.7
                    }
                }).addTo(map);

                const bounds = L.geoJSON(route).getBounds();
                map.fitBounds(bounds);
            } else {
                alert('Không tìm thấy tuyến đường.');
            }

        } catch (error) {
            console.error(error);
            alert('Đã có lỗi khi tải bản đồ.');
        }
    }

    initMap();
</script>


@include('clients.blocks.new_letter')
@include('clients.blocks.footer')
