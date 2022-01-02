@extends('layouts.master')
@section('content')


    <style>
        body {
            background-image: url('{{asset("/img/sora3.jpg")}}');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
    </style>
    <script type="text/javascript" src="{{asset("/js/snowstorm.js")}}"></script>

    <form align="center" style="margin:20px;border-color: #ffffff" action="{{route('suisei_create_data')}}" method="post">
        @csrf
        <table style="width:450px" align="center" >
            <tr>
                <td>
                    <h3  style="width:450px;text-align: left;color: white"  >你想對星姊說的話</h3>
                </td>
            </tr>
            <tr>
                <td>
                    <textarea style="background-image:url('{{asset("/img/oen2.png")}}');width:450px;height:320px;
                        padding:20px;border-color: #ffffff;max-width:450px;max-height:320px;max-length:300;
                        border-radius: 20px"
                              name="message"></textarea>
                </td>
            </tr>
            <tr>
                <td>
                    <h3  style="width:450px;text-align:left;color: white">你的名字</h3>
                </td>
            </tr>
            <tr>
                <td>
                    <input style="width:450px;text-align:left;border-radius:10px;"  name="name">
                </td>
            </tr>
            <tr>
                <td style="padding-top:10px">
                    <button style="width: 300px;height:50px;"  type="submit">送出</button>
                </td>
            </tr>
        </table>
    </form>

@endsection
