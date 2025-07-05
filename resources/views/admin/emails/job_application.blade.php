<p>Chào Admin,</p>

<p>Bạn vừa nhận được một ứng tuyển mới từ Travela:</p>

<ul>
    <li><strong>Họ và tên:</strong> {{ $application->name }}</li>
    <li><strong>Email:</strong> {{ $application->email }}</li>
    <li><strong>Số điện thoại:</strong> {{ $application->phone }}</li>
    <li><strong>Vị trí ứng tuyển:</strong> {{ $application->position }}</li>
    <li><strong>Lời nhắn:</strong> {{ $application->message ?? 'Không có' }}</li>
    <li><strong>File CV:</strong>
        @if ($application->cv_path)
            <a href="{{ asset('storage/' . $application->cv_path) }}" target="_blank">Tải xuống CV</a>
        @else
            Không có
        @endif
    </li>
</ul>

<p>Vui lòng kiểm tra và liên hệ với ứng viên.</p>
