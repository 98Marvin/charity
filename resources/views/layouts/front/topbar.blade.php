<div class="top-bar d-none d-md-block">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="top-bar-left">
                    <div class="text">
                        <i class="fa fa-phone-alt"></i>
                        <p>+254 793 912 038</p>
                    </div>
                    <div class="text">
                        <i class="fa fa-envelope"></i>
                        <p>eliaskelly@gmail.com</p>
                    </div>
                    @if (Auth::user() && Auth::user()->role->id === 1)
                        <div class="text">
                            <i class="fa fa-home"></i>
                        <p>
                            <a class="text-white" href="{{ route('dashboard') }}">Admin</a>
                        </p>
                        </div>
                    @endif
                </div>
            </div>
            <div class="col-md-4">
                <div class="top-bar-right">
                    <div class="social">
                        <a href=""><i class="fab fa-twitter"></i></a>
                        <a href=""><i class="fab fa-facebook-f"></i></a>
                        <a href=""><i class="fab fa-linkedin-in"></i></a>
                        <a href=""><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>