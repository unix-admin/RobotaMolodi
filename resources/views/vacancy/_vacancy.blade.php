<address>

    @foreach($vacancies as $vacancy)
    <article>
        <a href="vacancy/{{$vacancy->id}}" class="link">
            <div class="list">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2 class="list-group-item-heading panel-title"><span class="text-info" >{{$vacancy->position}} </span> &#183;  {{$vacancy->salary}} грн
                            <span class="text-muted text-right pull-right"><h5 id="{{$vacancy->id}}">
                                    <script>
                                        $('#'+'{{$vacancy->id}}').text(FormatDate({{strtotime($vacancy->created_at)}}));
                                    </script>
                                </h5></span></h2></div>
                    <div class="panel-body">
                        <h4 class="list-group-item-heading">{{ $vacancy->Industry()->name}}</h4>
                        <h4 class="list-group-item-heading">{{ $vacancy->Company()->company_name}}</h4>
                        <h4 class="list-group-item-heading">@foreach($vacancy->City() as $city){{ $city->name}} @endforeach</h4>
                    </div>
                </div>
            </div>

            </a>
    </article>


    @endforeach
        {!! str_replace('/?', '?', $vacancies->render()) !!}
</address>
<br>
