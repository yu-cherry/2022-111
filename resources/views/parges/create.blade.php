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

        <table class="mt-5" style="width:450px" align="center" >

        <tr>
            <td>
                <div class="row">
                    <div class="col-lg-6 col-md-6 ">
                        <h3  style="width:450px;text-align: left;color: white"  >你想對星姊說的話</h3>

                    </div>
                    <div class="col-lg-6 col-md-6 ">
                        <button class="btn btn-outline-info" style="width: 100px; " onclick="change()" >更改樣式</button>

                    </div>

                </div>
            </td>
        </tr>
    </table>
    <form align="center" style="margin:20px;border-color: #ffffff"  action="{{route('suisei_create_data')}}"
          method="post">
        @csrf
        <table style="width:450px" align="center" >

            <tr>
                <td>
                    <textarea style="background-image:url('{{asset("/img/oen2.png")}}');width:450px;height:320px;
                        padding:20px;border-color: #ffffff;max-width:450px;max-height:320px;max-length:100;
                        border-radius: 20px" id="backimg"
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
                    <button class="btn btn-outline-info" style="width: 300px;height:50px;"  type="submit">送出</button>
                </td>
            </tr>
        </table>
        <input type="hidden" name="back" id="back" value=/img/oen2.png>

    </form>
    <script>
        val=0;
        oen="oen2.png";
        function change() {
            if (val == 0) {
                val += 1;
                document.getElementById('backimg').style.backgroundImage ='url("{{asset("img/oen.png")}}")';
                document.getElementById('back').value="/img/oen.png";




            }
            else {
                val -= 1;
                document.getElementById('backimg').style.backgroundImage ='url("{{asset("img/oen2.png")}}")';
                document.getElementById('back').value="/img/oen2.png";

            }
        }
        function create() {
        }

    </script>

@endsection
