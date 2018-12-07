<div class="side-nav expand-lg">
    <div class="side-nav-inner">
        <ul class="side-nav-menu scrollable">
            <li class="side-nav-header">
                <span>{{ __('eng.nav') }}</span>
            </li>
            <li class="nav-item dropdown open">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder"><i class="mdi mdi-gauge"></i></span>
                    <span class="title">{{ __('eng.dashboard') }}</span>
                    <span class="arrow"><i class="mdi mdi-chevron-right"></i></span>
                </a>
                <ul class="dropdown-menu">
                    <li class="nav-item dropdown">
                        <a href="javascript:void(0);"><span>{{ __('eng.exercise') }}</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="javascript:void(0);">
                            <span>{{ __('eng.group') }}</span>
                            <span class="arrow"><i class="mdi mdi-chevron-right"></i></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="{{ url('group/create') }}">{{ __('eng.createGroup') }}</a></li>
                            <li><a href="{{ url('group')}}">{{ __('eng.viewGroup') }}</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder"><i class="mdi mdi-image-filter-drama"></i></span>
                    <span class="title">{{ __('eng.calendar') }}</span>
                    <span class="arrow"><i class="mdi mdi-chevron-right"></i></span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="calendar.html">{{ __('eng.deadline') }}</a></li>
                    <li><a href="task.html">{{ __('eng.history') }}</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>
