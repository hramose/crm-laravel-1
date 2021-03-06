<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="{{ URL::to('users/dashboard') }}" title="{{ trans('main.menu.brand.tooltip') }}">{{ trans('main.menu.brand') }}</a>
</div>
<!-- /.navbar-header -->

<ul class="nav navbar-top-links navbar-left">
    @if(Auth::check())
        <li>{{ HTML::link('clients/list', trans('main.menu.client')) }}</li>

        <li>{{ HTML::link('import/data', trans('main.menu.import')) }}</li>

        @if(Session::get('user.original')->admin)
            <li>{{ HTML::link('mailings/list', trans('main.menu.mailing')) }}</li>
        @endif

    @endif
</ul>

<ul class="nav navbar-top-links navbar-right">
    <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
            <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
        </a>
        <ul class="dropdown-menu dropdown-user">
            @if(Auth::check())
                <li>
                    @if(Session::get('user.original')->admin)
                        <a href="{{ URL::to('profile/profiles') }}">
                            <i class="fa fa-user fa-fw"></i>
                            {{ trans('main.menu.profile') }}
                        </a>
                    @else
                        <a href="{{ URL::to('profile/profile') }}">
                            <i class="fa fa-user fa-fw"></i>
                            {{ trans('main.menu.profile') }}
                        </a>
                    @endif
                </li>

                <li class="divider"></li>

                <li>
                    <a href="{{ URL::to('users/logout') }}">
                        <i class="fa fa-sign-out fa-fw"></i>
                        {{ trans('main.menu.logout') }}
                    </a>
                </li>
            @endif
        </ul>
        <!-- /.dropdown-user -->
    </li>
    <!-- /.dropdown -->
</ul>
<!-- /.navbar-top-links -->