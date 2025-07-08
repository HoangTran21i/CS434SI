{{-- filepath: d:\travela-master\resources\views\clients\careers.blade.php --}}
@include('clients.blocks.header')
@include('clients.blocks.banner')

<section class="careers-page pb-100">
    <div class="container">
        <div class="section-title text-center mb-50">
            <h2 style="font-size: 28px;">Cơ hội nghề nghiệp tại Travela</h2>
            <p style="font-size: 22px;">Tham gia cùng chúng tôi để xây dựng những trải nghiệm du lịch tuyệt vời nhất.</p>
        </div>
        <div class="row">
            <!-- Danh sách vị trí tuyển dụng -->
            <div class="col-lg-8 offset-lg-2" id="job-list">
                <h3 class="mb-4">Các vị trí đang mở:</h3>
                <ul class="list-group">
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Nhân viên kinh doanh
                        <button class="btn btn-primary btn-sm"
                            onclick="showApplicationForm('Nhân viên kinh doanh')">Đăng ký ứng tuyển</button>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Hướng dẫn viên du lịch
                        <button class="btn btn-primary btn-sm"
                            onclick="showApplicationForm('Hướng dẫn viên du lịch')">Đăng ký ứng tuyển</button>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Chuyên viên Marketing
                        <button class="btn btn-primary btn-sm"
                            onclick="showApplicationForm('Chuyên viên Marketing')">Đăng ký ứng tuyển</button>
                    </li>
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        Lập trình viên
                        <button class="btn btn-primary btn-sm" onclick="showApplicationForm('Lập trình viên')">Đăng ký
                            ứng tuyển</button>
                    </li>
                </ul>
            </div>

            <!-- Form đăng ký ứng tuyển (ẩn ban đầu) -->
            <div class="col-lg-8 offset-lg-2" id="application-form" style="display: none;">
                <h3 class="mb-4">Đăng ký ứng tuyển</h3>

                <!-- Hiển thị thông báo thành công -->
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <!-- Hiển thị thông báo lỗi -->
                @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('error') }}
                    </div>
                @endif

                <!-- Hiển thị lỗi validate -->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('careers.apply') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="name">Họ và tên</label>
                        <input type="text" name="name" id="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Số điện thoại</label>
                        <input type="text" name="phone" id="phone" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="position">Vị trí ứng tuyển</label>
                        <input type="text" name="position" id="position" class="form-control" readonly>
                    </div>
                    <div class="form-group">
                        <label for="message">Lời nhắn (không bắt buộc)</label>
                        <textarea name="message" id="message" class="form-control" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="cv">Nộp CV (ảnh hoặc file PDF)</label>
                        <input type="file" name="cv" id="cv" class="form-control"
                            accept=".jpg,.jpeg,.png,.pdf" required>
                    </div>
                    <button type="submit" class="theme-btn style-two w-100 mt-15">Gửi ứng tuyển</button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Contact Map Start -->
<div class="contact-map">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3834.311996576998!2d108.15752167490372!3d16.049291584627326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x31421938d61a3ce5%3A0x29d80f3ebbdcb44a!2sDuy%20Tan%20University%2C%20South%20Hoa%20Khanh!5e0!3m2!1sen!2s!4v1740469766174!5m2!1sen!2s"
        style="border:0; width: 100%;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>
<!-- Contact Map End -->

@include('clients.blocks.footer')

<script>
    function showApplicationForm(position) {
        // Ẩn danh sách vị trí
        document.getElementById('job-list').style.display = 'none';

        // Hiển thị form ứng tuyển
        document.getElementById('application-form').style.display = 'block';

        // Gán giá trị vị trí ứng tuyển vào input
        document.getElementById('position').value = position;
    }
</script>
