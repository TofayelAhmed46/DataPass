@php
    $user="tofayel";
    $fruit=["Apple","Tomato","Orange", "Graps"];
@endphp

<script>
    //var data=@json($fruit);
    var data={{Js::from($fruit)}};

    console.log(data);

    data.forEach(function(a){
        console.log(a);
    })

</script>
