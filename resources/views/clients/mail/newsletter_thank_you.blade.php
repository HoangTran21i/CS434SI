<p>Chào bạn,</p>

<p>Cám ơn bạn đã đăng ký nhận bản tin từ Travela. Chúng tôi sẽ gửi đến bạn những thông tin mới nhất về các chương trình
    khuyến mãi, tour du lịch hấp dẫn và nhiều hơn nữa.</p>

@if ($promotion)
    <p><strong>Mã khuyến mãi của bạn:</strong> {{ $promotion->code }}</p>
    <p><strong>Mô tả:</strong> {{ $promotion->description }}</p>
    <p><strong>Giảm giá:</strong> {{ $promotion->discount }}%</p>
    <p><strong>Thời gian áp dụng:</strong> {{ $promotion->start_date }} đến {{ $promotion->end_date }}</p>
@endif

@if ($randomTours->isNotEmpty())
    <p><strong>Tour ngẫu nhiên dành cho bạn:</strong></p>
    <div style="display: flex; justify-content: space-between; gap: 20px;">
        @foreach ($randomTours as $tour)
            <div
                style="width: 48%; border: 1px solid #ddd; border-radius: 8px; overflow: hidden; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
                <!-- Nội dung -->
                <div style="padding: 15px;">
                    <h3 style="margin: 0 0 10px; font-size: 18px; color: #333;">{{ $tour->title }}</h3>
                    <p style="margin: 0 0 5px; font-size: 14px; color: #555;">Thời gian: {{ $tour->time }}</p>
                    <p style="margin: 0 0 10px; font-size: 14px; color: #555;">Giá:
                        <strong>{{ number_format($tour->priceAdult, 0, ',', '.') }} VND</strong>
                    </p>
                    <!-- Thêm liên kết đến route home -->
                    Truy cập ngay <a href="{{ route('home') }}" style="color: #007bff; text-decoration: none;">Trang chủ
                        của chúng tôi</a> để biết
                    thêm thông tin chi tiết.
                </div>
            </div>
        @endforeach
    </div>
@endif

<p>Chúc bạn một ngày tốt lành!</p>

<p>Trân trọng,<br>Đội ngũ Travela</p>

<p>Chúc bạn một ngày tốt lành!</p>

<p>Trân trọng,<br>Đội ngũ Travela</p>
