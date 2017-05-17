@extends('app')
@section('title')

@stop
@section('content')
    <div>
        <div class="routeBreadcrumb">
            <ol class="breadcrumb">
                <li><a href="/">Головна</a></li>
                <li class="active">Особистий кабінет</li>
            </ol>
        </div>
    </div>
    <div class="row">
        <div class="col-xs-11 col-md-7 header-tabs">
            <ul class="nav nav-tabs">
                @yield('titles')
            </ul>
        </div>
    </div>


    <div class="contentAjax">
        @yield('contents')

    </div>
<script>
//    $('li[role="presentation"] a').click(function(){
//        var link = $(this).attr('href');
//        $.ajax({
//            url: link,
//            success: function(data){
//                $('.contentAjax').html(data)
//            }
//        });
//
//        return false;
//    })
</script>

@stop

