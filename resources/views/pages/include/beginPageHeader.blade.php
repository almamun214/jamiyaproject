<!-- BEGIN PAGE BAR -->


<div class="page-bar">
    <ul class="page-breadcrumb">
      {{--  @if($basenameUrl != 'home')
            <li>
                <a href="{{ route('home') }}">Home</a>
                <i class="fa fa-circle"></i>
            </li>
        @endif--}}
        <li>

           {{-- @if(!empty($basenameUrl))
                <span>{{ ucfirst($basenameUrl)}}</span>
            @else
                <span>{{ucfirst('no url')}}</span>
            @endif--}}

        </li>
        {{--<li>  @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif

        </li>--}}
    </ul>
    <div class="page-toolbar">
        <div class="btn-group pull-right">
            <button type="button" class="btn green btn-sm btn-outline dropdown-toggle"
                    data-toggle="dropdown"> Actions
                <i class="fa fa-angle-down"></i>
            </button>
            <ul class="dropdown-menu pull-right" role="menu">
                <li>
                    <a href="#">
                        <i class="icon-bell"></i> Action</a>
                </li>
                <li>
                    <a href="#">
                        <i class="icon-shield"></i> Another action</a>
                </li>
                <li>
                    <a href="#">
                        <i class="icon-user"></i> Something else here</a>
                </li>
                <li class="divider"></li>
                <li>
                    <a href="#">
                        <i class="icon-bag"></i> Separated link</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- END PAGE BAR -->
<!-- BEGIN PAGE TITLE-->

<!-- END PAGE TITLE-->