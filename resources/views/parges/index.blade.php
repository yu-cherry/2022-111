@extends('layouts.master')
@section('content')

    <!doctype html>
<html lang="en">

<head>
    <title>星街すいせい 非公式</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <script type="text/javascript" src="{{asset("/js/snowstorm.js")}}"></script>
    <link rel="stylesheet" type="text/css" href="{{asset("/css/app.css")}}">

    <style>
        body {
            background-image: url('{{asset("/img/sora3.jpg")}}');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
        table {
            border-collapse: separate;
        }
    </style>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>
<div class="container mt-4 " border="1">

    <div class="row">
        <!--標題1-->
        <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
            <h4 style="color:rgb(255, 255, 255);">
                News
            </h4>
            <h1 style="color:rgb(255, 255, 255)">各路☄️消息</h1>
            <hr style="border: 2px solid rgb(119, 223, 241);">
        </div>
        <!--NEWS-->
        <div class="col-lg-8 col-xl-8 col-md-12 col-sm-12  mt-1">
            <table style="width:100%;" border="0">
                　<tr>
                    　<td colspan="2">
                        <h4 class="animate__animated animate__bounce" style="color: rgb(255, 255, 255); ">星街すいせいの重大消息</h4>
                    </td>
                    　</tr>
                <tr>
                    　
                    <td style="width:220px;">
                        <img class="animate__animated animate__backInLeft" src="{{asset("/img/act4.jpg")}}"
                             style="width:200px;border-radius:10px;padding:5px;" alt="">
                    </td>
                    <td style="vertical-align:text-top;">
                        <h5 class="animate__animated animate__fadeInUp" style="color: rgb(255, 255, 255);">2021/12/30~2022/3/22</h5>
                        <h6 class="animate__animated animate__fadeInUp" style="color: rgb(255, 255, 255);">
                            歡迎來參加我們的150萬人慶祝活動,留下你想對星姊說的話吧~</h6>
                        <h6 class="animate__animated animate__fadeInUp" style="color: rgb(255, 255, 255);"><a style="color: rgb(255, 255, 255);"
                        href="{{route('get_create_page')}}">點我參加</a> </h6>
                    </td>
                </tr>
                <tr>
                    　
                    <td style="width:220px;">
                        <img class="animate__animated animate__backInLeft" src="{{asset("/img/act1.jpg")}}"
                             style="width:200px;border-radius:10px;padding:5px;" alt="">
                    </td>
                    <td style="vertical-align:text-top;">
                        <h5 class="animate__animated animate__fadeInUp" style="color: rgb(255, 255, 255); ">2021/12/21</h5>
                        <h6 class="animate__animated animate__fadeInUp" style="color: rgb(255, 255, 255); ">
                            Merry Christmas 3D LIVE</h6>
                        <h6 class="animate__animated animate__fadeInUp" style="color: rgb(255, 255, 255); ">
                            <a style="color: rgb(255, 255, 255); " target="_blank" href="https://youtu.be/VVQQcI6r3NU">點我前往觀看</a> </h6>
                    </td>
                </tr>
                <tr>
                    　
                    <td style="width:220px;">
                        <img class="animate__animated animate__backInLeft" src="{{asset("/img/act3.jpeg")}}"
                             style="width:200px;	border-radius:10px;padding:5px;" alt="">
                    </td>
                    <td style="vertical-align:text-top;">
                        <h5 class="animate__animated animate__fadeInUp" style="color: rgb(255, 255, 255); ">2021/10/21</h5>
                        <h6 class="animate__animated animate__fadeInUp" style="color: rgb(255, 255, 255); ">
                            星姊將在豐洲舉辦首場個人SOLO LIVE,與眾多星詠者一起享受星姊這璀璨的時刻吧~</h6>
                        <h6 class="animate__animated animate__fadeInUp" style="color: rgb(255, 255, 255); ">
                            <a style="color: rgb(255, 255, 255); " target="_blank" href="">太慢了買不到了現在都幾月了</a> </h6>
                    </td>
                </tr>
                <tr>
                    　
                    <td style="width:220px;">
                        <img class="animate__animated animate__backInLeft" src="{{asset("/img/act2.jpg")}}"
                             style="width:200px;	border-radius:10px;padding:5px;" alt="">q
                    </td>
                    <td style="vertical-align:text-top;">
                        <h5 class="animate__animated animate__fadeInUp" style="color: rgb(255, 255, 255); ">2021/09/29</h5>
                        <h6 class="animate__animated animate__fadeInUp" style="color: rgb(255, 255, 255); ">
                            星姊首張個人第一張原創專輯《Still Still Stellar》,現正熱售中</h6>
                        <h6 class="animate__animated animate__fadeInUp" style="color: rgb(255, 255, 255); ">
                            <a style="color: rgb(255, 255, 255); " target="_blank" href="https://booth.pm/ja/items/3231690">點我前往購買</a> </h6>
                    </td>
                </tr>

            </table>
        </div>
        <!--推特-->
        <div class="col-lg-4 col-xl-4 col-md-12 col-sm-12 mt-1">
            <table style="width:100%;" border="0">
                　<tr>
                    　<td>
                        <h4 class="animate__animated animate__bounce" style="color: rgb(255, 255, 255); padding-left: 10px;">
                            星街すいせいのTwitter</h4>
                    </td>
                    　</tr>
                <tr>
                    <td>
                        <iframe src="{{asset("/hml/html.blade.php")}}" style="width:100%;" align="middle" height="500px" scrolling="auto"
                                frameborder="0" class="backdrop-blur" id="side">
                        </iframe>
                    </td>
                </tr>
            </table>
        </div>
        <!--標題配信-->

        <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12">
            <h4 style="color:rgb(255, 255, 255);">
                Video
            </h4>
            <h1 style="color:rgb(255, 255, 255)">星姊☄️Live</h1>
            <hr style="border: 2px solid rgb(119, 223, 241);">
        </div>
        <div class="col-lg-4 col-xl-4 col-md-4 col-sm-12  mt-3 animate__animated animate__backInUp">
            <div style="position: relative;padding-bottom: 56.25%;height: 0;overflow: hidden;">


                <iframe style="position: absolute; top: 0;left: 0;width: 100%;height: 100%;"
                        src="https://www.youtube.com/embed/FZnG1t34wCs" title="YouTube video player" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
            </div>

            <h4 class="animate__animated animate__backInUp" style="color:rgb(255, 255, 255) ">【#星街すいせい3D】全編ライブ！歌って踊る姿を見てください！✨【ホロライブ / 星街すいせい】</h4>

        </div>

        <div class="col-lg-4 col-xl-4 col-md-4 col-sm-12  mt-3 animate__animated animate__backInUp animate__fast">
            <div style="position: relative;padding-bottom: 56.25%;height: 0;overflow: hidden;">


                <iframe style="position: absolute; top: 0;left: 0;width: 100%;height: 100%;"
                        src="https://www.youtube.com/embed/VVQQcI6r3NU" title="YouTube video player"
                        frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope;
                         picture-in-picture" allowfullscreen></iframe>

            </div>

            <h4 class="animate__animated animate__backInUp animate__fast" style="color:rgb(255, 255, 255) ">【3DLIVE】桃鈴ねね x 星街すいせい x 常闇トワ　Christmas Live【 #ねねすいトワクリスマスライブ 】</h4>

        </div>
        <div class="col-lg-4 col-xl-4 col-md-4 col-sm-12  mt-3 ">
            <div style="position: relative;padding-bottom: 56.25%;height: 0;overflow: hidden;">


                <iframe style="position: absolute; top: 0;left: 0;width: 100%;height: 100%;"
                        src="https://www.youtube.com/embed/LOdnaA7IQoU" title="YouTube video player"
                        frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media;
                  gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>

            <h4 class="animate__animated animate__backInUp animate__fast" style="color:rgb(255, 255, 255) ">星街すいせい - STELLAR into the GALAXY特別映像</h4>

        </div>



        <!--標題3-->


        <div class="col-lg-12 col-md-12 col-sm-12 col-xl-12 mt-2" style="text-align: center;">
            <h4 style="color:rgb(255, 255, 255);">
                Project
            </h4>
            <h1 style="color:rgb(255, 255, 255) ">角色☄️介紹</h1>
            <hr style="border: 2px solid rgb(119, 223, 241);">
        </div>
        <!--角色介紹-->
        <div class="col-lg-6 col-md-12 col-sm-6 col-xl-6 mt-3 text-center" style="height:700px ;">


            <img src="{{asset("img/suisei1.png")}} " style="height: 100%; margin:auto">
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12 col-xl-6 mt-3">
            <h3 align="left" style="color:#4bd5ff;">「彗星の如く現れたスターの原石！ <hr>
                　アイドルVTuberの星街すいせいです！」</h3>

            <hr>

            <h2 align="left" style="color:#009bfc;">開場口號</h2>
            <h4>
            <align="left" style="color:#ffffff;">彗星の如く現れた星の原石<br>アイドルvtuberほしまちすいせいです<br>
            すいちゃんは 今日もかわいい</h4>
            <hr>

            <h2 align="left" style="color:#009bfc;">自分紹介</h2>
            <h4 align="left" style="color:#ffffff;">歌とアイドルをこよなく愛する永遠の18歳のアイドルVTuber。
                いつか武道館でライブをすることを夢見て活動している</h4>
            <hr>
            <h2 align="left" style="color:#009bfc;">別稱</h2>
            <h4 align="left" style="color:#ffffff;">星姐、六邊形戰士、<s>有點神經病的藍髮大姊姊</s>、<s>有點大姐姐的藍髮神經病</s></h4>
            <hr>

            <div class="row">
                <div class="">
                    <img>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <h2 align="left" style="color:#009bfc;">年齡:</h2>
                    <h4 align="left" style="color:#ffffff;">18歲</h4>
                    <hr>

                </div>

                <div class="col-lg-6">
                    <h2 align="left" style="color:#009bfc;">粉絲愛稱:</h2>
                    <h4 align="left" style="color:#ffffff;">星詠み(ほしよみ)</h4>
                    <hr>
                </div>
            </div>

        </div>





    </div>

</div>

</div>





<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>

</html>
@endsection
