<nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
        <a href="{{ route('frontend.index') }}" class="navbar-brand">{{ app_name() }}</a>
    
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="@lang('labels.general.toggle_navigation')">
            <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item"><a href="{{route('frontend.index')}}" class="nav-link {{ active_class(Active::checkRoute('frontend.index')) }}">Home</a></li>
                <li class="nav-item"><a href="{{route('frontend.aboutus')}}" class="nav-link {{ active_class(Active::checkRoute('frontend.aboutus')) }}">About Us</a></li>
                <li class="nav-item"><a href="{{route('frontend.assessment')}}" class="nav-link {{ active_class(Active::checkRoute('frontend.assessment')) }}">Assessment</a></li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuUser" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">Services</a>
    
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuUser">
                        <a href="{{route('frontend.hiring')}}" class="dropdown-item {{ active_class(Active::checkRoute('frontend.hiring')) }}">Hiring</a>
                        <a href="{{route('frontend.training')}}" class="dropdown-item {{ active_class(Active::checkRoute('frontend.training')) }}">Training</a>
                    </div>
                </li>
    
                <li class="nav-item"><a href="{{route('frontend.blog')}}" class="nav-link {{ active_class(Active::checkRoute('frontend.blog')) }}">Blog</a></li>
                <li class="nav-item"><a href="{{route('frontend.contact')}}" class="nav-link {{ active_class(Active::checkRoute('frontend.contact')) }}">@lang('navs.frontend.contact')</a></li>
    
                @if(config('locale.status') && count(config('locale.languages')) > 1)
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownLanguageLink" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">@lang('menus.language-picker.language') ({{ strtoupper(app()->getLocale()) }})</a>
    
                        @include('includes.partials.lang')
                    </li>
                @endif
    
                @guest
                    <li class="nav-item"><a href="{{route('frontend.auth.login')}}" class="nav-link {{ active_class(Active::checkRoute('frontend.auth.login')) }}">@lang('navs.frontend.login')</a></li>
    
                    @if(config('access.registration'))
                        <li class="nav-item"><a href="{{route('frontend.auth.register')}}" class="nav-link {{ active_class(Active::checkRoute('frontend.auth.register')) }}">@lang('navs.frontend.register')</a></li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" id="navbarDropdownMenuUser" data-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">{{ $logged_in_user->name }}</a>
    
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuUser">
                                <a href="{{ route('frontend.user.dashboard') }}" class='dropdown-item {{ active_class(Active::checkRoute('frontend.user.dashboard')) }}'>@lang('navs.frontend.dashboard')</a>
                                @can('view backend')
                                    <a href="{{ route('admin.dashboard') }}" class="dropdown-item">@lang('navs.frontend.user.administration')</a>
                                @endcan
                                <a href="{{ route('frontend.user.account') }}" class="dropdown-item {{ active_class(Active::checkRoute('frontend.user.account')) }}">@lang('navs.frontend.user.account')</a>
                                <a href="{{ route('frontend.auth.logout') }}" class="dropdown-item">@lang('navs.general.logout')</a>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </nav>
    