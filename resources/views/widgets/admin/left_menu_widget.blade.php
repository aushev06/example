<div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
            <a class="nav-link" href="{{route('admin.index')}}">
                <i class="fa fa-fw fa-dashboard"></i>
                <span class="nav-link-text">Доска</span>
            </a>
        </li>


        {{--        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">--}}
        {{--            <a class="nav-link" href="{{route('ingridients.index')}}">--}}
        {{--                <i class="fa fa-stop" aria-hidden="true"></i>--}}
        {{--                <span class="nav-link-text">Стоп лист</span>--}}
        {{--            </a>--}}
        {{--        </li>--}}


    </ul>
    <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
            <a class="nav-link text-center" id="sidenavToggler">
                <i class="fa fa-fw fa-angle-left"></i>
            </a>
        </li>
    </ul>
    <ul class="navbar-nav ml-auto">
        <a class="nav-link" data-toggle="modal" data-target="#exampleModal">
            <i class="fa fa-fw fa-sign-out"></i>ВЫХОД</a>
        </li>
    </ul>
</div>
