<!DOCTYPE html>
<html>
    <head>
        <title>Духът на вселената</title>
        <link rel="shortcut icon" href="images/Symbol_Purpel.ico">
        <link href='https://fonts.googleapis.com/css?family=Marck+Script&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
        <script src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
        <style>
            html{
               background: url(images/giphy.gif) no-repeat center center fixed;
              -webkit-background-size: cover;
              -moz-background-size: cover;
              -o-background-size: cover;
              background-size: cover;
            }

            html, body {
                height: 100%;
                width: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                display: table;
                font-weight: 100;
                font-family: 'Marck Script', cursive;
                font-size: 30px;
            }

            a {
                text-decoration: none;
                color:#eba847;
                text-shadow: 0 0 2px #D6965E;

            }

            .wrapper {
                display: flex;
            }

            .menu{
                float: left;
                position: relative;
                 max-width: 500px;
                 min-width: 100px;
            }

            .menu ul li {
                list-style: none;
            }

            #menu1 {
                  position: absolute;
                   top: 15px;
                   left: 64px;
                   width: 100%;
                }
            #menu2 {
                 position: absolute;
                   top: 99px;
                   left: 59px;
                   width: 100%;
            }
             #menu3 {
                 position: absolute;
                   top: 182px;
                   left: 62px;
                   width: 100%;
            }
            .item-2 {
                margin-top: -19px;
            }
            .item-3 {
                margin-top: -19px;
            }
         /*  .body {
            float: left;
            position: fixed;
            top: 40px;
            left: 500px;
            margin: 0 auto;
            max-width: 700px;
            max-height: 570px;
            min-width: 400px;
            background-color: white;
           }
    */      #slide {
                left: 165px;
                width:604px;
                height:453px;
                position:relative;
            }

            #slide ul {
                width:604px;
                height:453px;
                list-style:none outside none;
                position:relative;
                overflow:hidden;
                padding: 0;
            }

            #slide li:first-child{
                display:list-item;
                position:absolute;
            }

            #slide li{
                position:absolute;
                display:none;
            }

            #slide ul li img {
                border-radius: 10px;
            }

            #slide .prevButton{
                height:72px;
                width:68px;
                position:absolute;
                background:url('slide/buttons.png') no-repeat;
                top:50%;
                margin-top:-36px;
                cursor:pointer;
                z-index:4000;
                background-position:left top;
                left:0
            }

            #slide .prevButton:hover{
                background-position:left bottom;left:0;
            }

            #slide .nextButton{
                height:72px;
                width:68px;
                position:absolute;
                background:url('slide/buttons.png') no-repeat;
                top:50%;
                margin-top:-36px;
                cursor:pointer;
                z-index:4000;
                background-position:right top;
                right:0
            }

            #slide .nextButton:hover{
                background-position:right bottom;right:0;
            }
            #info{
                margin: 50px 13px;
                width: 950px;
                height: 800px;
                float: left;
                background: url(images/paper2.jpg) no-repeat center center;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                -o-background-size: cover;
                background-size: 100% 100%;
                border-radius: 10px;
            }

            #info h1 {
                color: white;
                text-shadow: 1px 1px 8px #F8FFC9;
                text-align: center;
                margin-bottom: 10px;
            }

            #info p {
                text-indent: 50px;
            }

            #separator{
                margin-bottom: -20px;

            }

            .btn1 {
              position: absolute;
              top: 380px;
              left: 590px;
              background: #e6c9aa;
              background-image: -webkit-linear-gradient(top, #e6c9aa, #bd600f);
              background-image: -moz-linear-gradient(top, #e6c9aa, #bd600f);
              background-image: -ms-linear-gradient(top, #e6c9aa, #bd600f);
              background-image: -o-linear-gradient(top, #e6c9aa, #bd600f);
              background-image: linear-gradient(to bottom, #e6c9aa, #bd600f);
              -webkit-border-radius: 15;
              -moz-border-radius: 15;
              border-radius: 15px;
              text-shadow: 0px 1px 15px #fcd59a;
              -webkit-box-shadow: 0px 1px 8px #666666;
              -moz-box-shadow: 0px 1px 8px #666666;
              box-shadow: 0px 1px 8px #666666;
              font-family: Georgia;
              color: #82571a;
              font-size: 24px;
              padding: 7px 11px 9px 13px;
              border: solid #8c6427 6px;
              text-decoration: none;
            }

            .btn1:hover {
              background: #754a1b;
              background-image: -webkit-linear-gradient(top, #754a1b, #e6aa12);
              background-image: -moz-linear-gradient(top, #754a1b, #e6aa12);
              background-image: -ms-linear-gradient(top, #754a1b, #e6aa12);
              background-image: -o-linear-gradient(top, #754a1b, #e6aa12);
              background-image: linear-gradient(to bottom, #754a1b, #e6aa12);
              text-decoration: none;
            }

            .btn2 {
              position: absolute;
              top: 380px;
              left: 940px;
              background: #e6c9aa;
              background-image: -webkit-linear-gradient(top, #e6c9aa, #bd600f);
              background-image: -moz-linear-gradient(top, #e6c9aa, #bd600f);
              background-image: -ms-linear-gradient(top, #e6c9aa, #bd600f);
              background-image: -o-linear-gradient(top, #e6c9aa, #bd600f);
              background-image: linear-gradient(to bottom, #e6c9aa, #bd600f);
              -webkit-border-radius: 15;
              -moz-border-radius: 15;
              border-radius: 15px;
              text-shadow: 0px 1px 15px #fcd59a;
              -webkit-box-shadow: 0px 1px 8px #666666;
              -moz-box-shadow: 0px 1px 8px #666666;
              box-shadow: 0px 1px 8px #666666;
              font-family: Georgia;
              color: #82571a;
              font-size: 24px;
              padding: 7px 11px 9px 13px;
              border: solid #8c6427 6px;
              text-decoration: none;
            }

            .btn2:hover {
              background: #754a1b;
              background-image: -webkit-linear-gradient(top, #754a1b, #e6aa12);
              background-image: -moz-linear-gradient(top, #754a1b, #e6aa12);
              background-image: -ms-linear-gradient(top, #754a1b, #e6aa12);
              background-image: -o-linear-gradient(top, #754a1b, #e6aa12);
              background-image: linear-gradient(to bottom, #754a1b, #e6aa12);
              text-decoration: none;
            }

            #blanket {
                background-color:#111;
                opacity: 0.65;
                filter:alpha(opacity=65);
                position:absolute;
                z-index: 9001;
                top:0px;
                left:0px;
                width:100%;
            }
            #popUpDiv {
                position:absolute;
                background-color:#eeeeee;
                width:500px;
                height:500px;
                z-index: 9002;
            }
            #popUpDiv img {
                width: 500px;
                height: 500px;
            }

              #popUpDiv2 {
                position:absolute;
                background-color:#eeeeee;
                width:500px;
                height:500px;
                z-index: 9002;
            }
            #popUpDiv2 img {
                width: 500px;
                height: 500px;
            }

            .fb-share-button {
                position: absolute;
                top: -50px;
                left: 400px;
            }

            .centered {
                position: fixed;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
            }
        </style>
    </head>
    <body>
        @yield('body')
        <div class="wrapper">
            <div class="menu">
                <ul>
                    <li>
                         <img src="images/candle-vertical.png" width="300" height="90" class="item-1">
                         <a href="{{action('pagesController@index')}}"><h3 id="menu1">Начало</h3></a>
                    </li>
                <li>
                    <img src="images/candle-vertical.png" width="300" height="90" class="item-2">
                    <a href="{{action('pagesController@collages')}}"><h3 id="menu2">Колажи</h3></a>
                </li>
                <li>
                    <img src="images/candle-vertical.png" width="300" height="90" class="item-3">
                    <a href="{{action('pagesController@info')}}"><h3 id="menu3">Инфо</h3></a>
                </li>
                </ul>
            </div>
            <div class="body">
            @yield('content')
            </div>
        </div>
        @yield('footer')
    </body>
</html>
