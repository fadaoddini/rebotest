
<div class="suha-sidenav-wrapper" id="sidenavWrapper">

@auth
    <!-- Sidenav Profile-->
        <div class="sidenav-profile">
            <div class="user-profile"><img src="{{url('front/img/bg-img/9.jpg')}}" alt=""></div>
            <div class="user-info">
                <h6 class="user-name mb-0">نیلوفر</h6>
                <p class="available-balance">حساب شما <span><span class="counter">350000</span></span><span> تومان</span></p>
            </div>
        </div>


        @if(Auth::user()->role=='1')
            <ul class="sidenav-nav pl-0">

                <li><a href="{{route('rebo')}}"><i class="lni lni-cog"></i>مدیریت</a></li>

            </ul>

    @endif
    <!-- Sidenav Nav-->
        <ul class="sidenav-nav pl-0">
            <li><a href="profile.html"><i class="lni lni-user"></i>پروفایل من</a></li>
            <li><a href="notifications.html"><i class="lni lni-alarm lni-tada-effect"></i>اطلاعیه ها <span class="ml-3 badge badge-warning">3</span></a></li>



            <li><a href="settings.html"><i class="lni lni-cog"></i>تنظیمات</a></li>
            <li>
                <form action="{{route('logout')}}" method="post">

                    @csrf
                    <button class="btn btn-danger" type="submit"><i class="lni lni-power-switch"></i>خروج از سیستم</button>

                </form>
            </li>
        </ul>




@else
    <!-- Sidenav Profile-->
        <div class="sidenav-profile">
            <div class="user-profile"><img src="{{url('front/img/core-img/logo-small.png')}}" alt=""></div>
            <div class="user-info">
                <h6 class="user-name mb-0">ربو تولدی دوباره</h6>
            </div>
        </div>
        <!-- Sidenav Nav-->
        <ul class="sidenav-nav pl-0">
            <li><a href="login"><i class="lni lni-user"></i>ورود</a></li>

        </ul>


@endauth

<!-- Go Back Button-->
    <div class="go-home-btn" id="goHomeBtn"><i class="lni lni-arrow-right"></i></div>
</div>