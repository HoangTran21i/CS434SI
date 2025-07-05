<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Đăng nhập</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/bs-brain@2.0.4/components/logins/login-9/assets/css/login-9.css">
</head>

<section class="bg-primary py-3 py-md-5 py-xl-8">
    <div class="container">
        <div class="row gy-4 align-items-center">
            <div class="col-12 col-md-6 col-xl-7">
            <div class="d-flex justify-content-center text-bg-primary">
                <div class="col-12 col-xl-9">
                <img class="img-fluid rounded mb-4" loading="lazy" src="/admin/assets/images/logo/logo.jpg" width="400" height="80" alt="Admin website Logo">
                <hr class="border-primary-subtle mb-4">
                <h2 class="h1 mb-4">Chào mừng đến với trang quản lý website Travela.</h2>
                <p class="lead mb-5">Chào mừng admin đã quay lại!</p>
                <div class="text-endx">
                    <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" fill="currentColor" class="bi bi-grip-horizontal" viewBox="0 0 16 16">
                    <path d="M2 8a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm3 3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm3 3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm3 3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm3 3a1 1 0 1 1 0 2 1 1 0 0 1 0-2zm0-3a1 1 0 1 1 0 2 1 1 0 0 1 0-2z" />
                    </svg>
                </div>
                </div>
            </div>
        </div>
        <div class="col-12 col-md-6 col-xl-5">
            <div class="card border-0 rounded-4">
                <div class="card-body p-3 p-md-4 p-xl-5">
                    {{-- <div class="row">
                        <div class="col-12">
                            <div class="mb-4">
                            <h3>Sign in</h3>
                            <p>Don't have an account? <a href="#!">Sign up</a></p>
                            </div>
                        </div>
                    </div> --}}
                    <form action="{{ route('admin.login-account') }}" method="POST" id="formLoginAdmin">
                        <div class="row gy-3 overflow-hidden">
                        <h1>Đăng nhập ADMIN</h1>
                        @csrf
                        <div class="col-12">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" name="username" id="username" placeholder="Tài khoản" required>
                                <label for="email" class="form-label">Tài khoản</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating mb-3">
                                <input type="password" class="form-control" name="password" id="password" value="" placeholder="Mật khẩu" required>
                                <label for="password" class="form-label">Mật khẩu</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="d-grid">
                                <button class="btn btn-primary btn-lg" type="submit">Đăng nhập</button>
                            </div>
                        </div>
                    </form>
                    <div class="row">
                        <div class="col-12">
                            <p class="mt-4 mb-4">Nếu gặp sự cố, hãy liên hệ ngay: </p> 
                            <div class="d-flex gap-2 gap-sm-3 justify-content-centerX">
                                <a href="https://mail.google.com/mail/?view=cm&to=minhhoangse6@gmail.com" class="btn btn-outline-danger bsb-btn-circle bsb-btn-circle-2xl">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-google" viewBox="0 0 16 16">
                                    <path d="M15.545 6.558a9.42 9.42 0 0 1 .139 1.626c0 2.434-.87 4.492-2.384 5.885h.002C11.978 15.292 10.158 16 8 16A8 8 0 1 1 8 0a7.689 7.689 0 0 1 5.352 2.082l-2.284 2.284A4.347 4.347 0 0 0 8 3.166c-2.087 0-3.86 1.408-4.492 3.304a4.792 4.792 0 0 0 0 3.063h.003c.635 1.893 2.405 3.301 4.492 3.301 1.078 0 2.004-.276 2.722-.764h-.003a3.702 3.702 0 0 0 1.599-2.431H8v-3.08h7.545z" />
                                </svg>
                                </a>
                                <a href="https://www.facebook.com/profile.php?id=100024356621721" class="btn btn-outline-primary bsb-btn-circle bsb-btn-circle-2xl">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                    <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z" />
                                </svg>
                                </a>
                                <a href="https://zalo.me/0905530635" class="btn btn-outline-info bsb-btn-circle bsb-btn-circle-2xl">
                                    <img src="https://upload.wikimedia.org/wikipedia/commons/9/91/Icon_of_Zalo.svg" alt="Zalo" style="width: 24px; height: 24px;">
                                </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
    @include('admin.blocks.footer')
