        <x-guest-layout>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendor.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Chilanka&family=Montserrat:wght@300;400;500&display=swap"
        rel="stylesheet">
        
            <section id="register" style="background: url('images/background-img.png') no-repeat; background-size: cover;">
                <div class="container">
                    <div class="row my-5 py-5">
                        <div class="offset-md-3 col-md-6 my-5">
                            <h2 class="display-3 fw-normal text-center">Welcome to <span class="text-primary">Register</span></h2>

                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <!-- Name -->
                                <div class="mb-3">
                                    <input type="text" class="form-control form-control-lg" name="name" id="name" placeholder="Enter Your Name" required value="{{ old('name') }}">
                                </div>

                                <!-- Email -->
                                <div class="mb-3">
                                    <input type="email" class="form-control form-control-lg" name="email" id="email" placeholder="Enter Your Email Address" required value="{{ old('email') }}">
                                </div>

                                <!-- Password -->
                                <div class="mb-3">
                                    <input type="password" class="form-control form-control-lg" name="password" id="password1" placeholder="Enter Your Password" required>
                                </div>

                                <!-- Confirm Password -->
                                <div class="mb-3">
                                    <input type="password" class="form-control form-control-lg" name="password_confirmation" id="password_confirmation" placeholder="Confirm Your Password" required>
                                </div>

                                <!-- Register Button -->
                                <div class="d-grid gap-2">
                                    <button type="submit" class="btn btn-dark btn-lg rounded-1">Register</button>
                                </div>

                                <!-- Space between buttons -->
                                <div class="my-3"></div>

                                <!-- Link to Login -->
                                <div class="d-grid gap-2">
                                    <a href="{{ route('welcome') }}" class="btn btn-outline-dark btn-lg rounded-1">Already Registered? Login</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            
        <script src="{{ asset('assets/js/jquery-1.11.0.min.js') }}"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
        <script src="{{ asset('assets/js/plugins.js') }}"></script>
        <script src="{{ asset('assets/js/script.js') }}"></script>
        <script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>


        </x-guest-layout>
