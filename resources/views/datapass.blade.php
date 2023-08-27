<h1>Here Data is Passing</h1>
<h1 style="text-transform: uppercase">

    {{--
        first way
        {{"$data $data2"}}

        second way with Script value
        {{"$data"}}
        {!!"$data2"!!}
     --}}
    @foreach ($datas as $id=>$d)
        <h3 style="text-transform: uppercase">{{ $d['name'] }}
            {{-- <a href="{{route('user_file')}}">Show</a> --}}
            <a href="{{route('user_file',$id)}}">Show</a>
        </h3>
    @endforeach
</h1>
