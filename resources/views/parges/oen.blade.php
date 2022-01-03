@extends('layouts.master')
@section('content')

    <h1 class="mt-5" style="color: #4bd5ff;text-align: center"><strong>150万人おめでとうー!!</strong></h1>
    <h2 class="" style="color: white;text-align: center"><strong>星詠みより</strong></h2>



    <script type="text/javascript" src="{{asset("/js/snowstorm.js")}}"></script>
    <style>
        body {
            background-image: url('{{asset("/img/sora3.jpg")}}');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }

    </style>
    <div class="container">
        <hr style="border: 2px solid rgb(119, 223, 241);">
        <div class="row">
 @foreach($data as $row)

        <div class="col-lg-4  col-md-12 mr-2 ml-2 mt-5">
            <div class="aspect-ratio">
            <div class="card" style="background-image:url('{{asset($row->back)}}');background-size:100%;
                padding:20px;border-color: #ffffff;border-radius: 20px;aspect-ratio: 450 / 320;">
                <div>
                    {{$row->message}}
                </div>
                <h4 style="bottom: 0px;text-align:right ; position:absolute;padding: 20px;right:12px;">
                    {{$row->name}}
                </h4>

        </div>
        </div>

        </div>

    @endforeach()
        </div>
        </div>
    <script>
        function delete_data(id){
            window.location.href = "{{route('delete_data')}}"+"?id="+id;
        }
        function edit_data(id) {
            window.location.href = "{{route('get_edit_page')}}"+"?id="+id;
        }
    </script>







@endsection
