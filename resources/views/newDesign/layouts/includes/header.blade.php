<div class="row colorBlack">
    <a name=href="{{ url('/') }}">
        <div class=" col-md-9 col-sm-9 col-xs-9 logo">
                     <img src={{asset('/image/logo.png')}} height="68" width="293"/></div>
    </a>
    <div class="col-md-3 col-sm-3 col-xs-3 Admin">
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                @if (Auth::guest())
                    <li><a href="{{ url('/auth/login') }}"><span>{!! Html::image('image/entry.png','Головна',['id'=>'entry']) !!}</span> Увійти</a></li>
                    <li><a href="{{ url('/auth/register') }}"><span>{!! Html::image('image/registry.png','Головна',['id'=>'registry']) !!}</span> Зареєструватись</a></li>
                @else
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" @if(Auth::user()->role_id==1)style="color:red" @endif>{{ Auth::user()->name }} @if(Auth::user()->role_id==1)(Адміністратор) @endif<span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">


                            <li><a href="{{ url('/auth/logout') }}" class="afterChange"><span>{!! Html::image('image/exit.png','Головна',['id'=>'exit']) !!}</span> Вийти</a></li>
                        </ul>
                    </li>
                @endif
            </ul>
        </div>
        {{--<div class="btn-group">--}}
            {{--<button type="button" data-toggle="dropdown" class="btn btn-default dropdown-toggle">Name <span class="caret"></span></button>--}}
            {{--<ul class="dropdown-menu">--}}
                {{--<li><a href="#">Пункт 1</a></li>--}}
                {{--<li><a href="#">Пункт 2</a></li>--}}
                {{--<li class="divider"></li>--}}
                {{--<li><a href="#">Выход</a></li>--}}
            {{--</ul>--}}
        {{--</div>--}}
    </div>
</div>