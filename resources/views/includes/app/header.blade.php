<nav class="navbar navbar-expand-md navbar-dark bg-transparent border-bottom border-thin border-mywhite-50 fixed-top">
    <div class="px-4 py-0 d-flex w-100">
        <a class="navbar-brand" href="{{ url('/') }}">
            <span class="text-40 font-weight-bold text-montserrat"><span class="text-blue">M</span><span class="text-yellow">P</span></span>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse flex-fill" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav d-none mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto text-18 text-montserrat">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link active" href="#">{{ __('Home') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">{{ __('About Us') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">{{ __('News') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">{{ __('Contact') }}</a>
                    </li>
                    <li class="nav-item mr-4">
                        <a class="nav-link" href="#">{{ __('LiveChat') }}</a>
                    </li>
                    <li class="nav-item ml-4 position-relative d-flex align-items-center" style="width: 140px;">
                        <a id="sign-in-btn" class="nav-link btn-group text-15 position-absolute" style="left: 0;" href="#">
                            <div class="btn btn-yellow rounded-sm static position-relative">
                                {{ __('Sign In') }}
                                <div class="bg-darkyellow d-none active rounded-sm-right px-3 py-2 position-absolute h-100" style="top: 0; right: 0;">
                                    <i class="fas fa-sign-in-alt"></i>
                                </div>
                            </div>
                        </a>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} <span class="caret"></span>
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>