<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    @vite(['resources/sass/app.scss', 'resources/js/app.js', 'resources/css/app.css'])
    <style>
        .form-label {
            font-size: 12px;
            font-weight: bold;
            margin-bottom: 0;
        }
        .form-control {
            height: 45px;
            border: none; 
            border-radius: 8px; 
            background-color: #D9D9D9;
            font-size: 12px;
        }
        .form-control::placeholder {
            font-size: 10px;
            font-weight: normal;
            color: #6c757d;
        }
        .btn {
            height: 40px;
            border: none;
            border-radius: 17px;
            background-color: #FFCC33;
            font-size: 13px;
            font-weight: bold;
        }
        .btn:hover {
            background-color: #fdbe00;
        }
    </style>
</head>

<body class="h-100">
    <div class="container h-100">
        <div class="row d-flex align-items-center justify-content-center min-vh-100">
            <div class="col-lg-6 col-md-9">
                <div class="card" style="border-radius: 45px">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="card h-100" style="border-radius: 45px 30px 30px 45px; background-color: #FFCC33">
                                <div class="card-body d-flex flex-column justify-content-center align-items-center">
                                    <img src="{{ asset('assets/images/kiders.png') }}" alt="logo"
                                        class="w-100  ps-2">
                                    <h1 style="font-weight: 900">Kider'S</h1>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card-body ps-0 pe-4">
                                <h2 class="mt-3" style="font-size: 22px; font-weight: bold">Dapatkan Ilmu Lebih Dengan
                                    Buku</h2>
                                <p class="mb-1" style="font-size: 10px">Masuk untuk mengakses seluruh fitur pada Kider'S</p>
                                <form action="">
                                    <div class="mb-1">
                                        <label for="email" class="form-label">Email / No Hp</label>
                                        <input type="email" class="form-control" id="email"
                                            name="email" placeholder="Masukkan Email / No Hp" autocomplete="off">
                                    </div>
                                    <div class="mb-3">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" class="form-control" id="password"
                                            name="password" placeholder="Masukkan Password" autocomplete="off">
                                    </div>
                                    <button type="submit" class="btn w-100">
                                        Masuk
                                    </button>
                                </form>
                                <div class="text-center">
                                    <p style="font-size: 10px">Belum punya akun? <a href="">Daftar</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
