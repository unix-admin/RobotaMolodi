@extends ('cabinet/cabinet')

@section ('contents')

    <div>
        <ul class="nav nav-tabs">
            <li role = "presentation">{!!link_to_route('vacancy.create','Створити вакансію')!!}</li>


        </ul>
    </div>


    @yield('contents')
    <?php echo $child ?>



@stop