<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <style type="text/css" media="all">
        .-c-custom-blue { color: #67caff; }
            .Section--head:after {
              content: '';
              position: absolute;
              top: 0;
              left: 0;
              width: 100%;
              height: 100%;
              display: block;
              background: url(https://d117h1jjiq768j.cloudfront.net/images/default-source/customer-and-partner-logos/diagram.png?Status=Temp&sfvrsn=5675ea59_2) no-repeat center 210px;
              margin-left: 25px;
            }

            .Section--diagram {
              max-height: 350px;
              background-color: rgba(0, 38, 76, 0.55);
              border-radius: 3px;
              box-shadow: 0px 0px 52px 20px rgba(0, 38, 76, 0.32);
              transition: max-height 0.3s;
            }

            .Section--diagram .Diagram {
              transform: scale(1.5) translate(-100px, 100px);
              transition: transform 0.3s;
            }

            .Section--diagram.is-triggered {
              max-height: 1000px;
            }

            .Section--diagram.is-triggered .Diagram {
              transform: scale(1) translate(0);
            }

            .Section--CTA {
              background-color: #f1f8ff;
              background-image: linear-gradient(-180deg, #f1f8ff 0%, #d4e8ff 100%);
            }

            .Section--CTA:before,
            .Section--CTA:after {
              content: '';
              width: 50%;
              height: 36px;
              position: absolute;
              top: -35px;
              background: #f1f8ff;
            }

            .Section--CTA:before {
              left: 0;
              border-top-right-radius: 36px;
            }

            .Section--CTA:after {
              left: 50%;
              border-top-left-radius: 36px;
            }</style><style type="text/css" media="all">.Diagram-row {
              display: flex;
              flex-wrap: wrap;
              margin: 0 -5px;
            }

            .Diagram-col {
              flex: 1;
              margin: 0 5px;
            }

            .Diagram-col svg { max-width: 100%; }

            .Diagram-col--left {
              max-width: 18.3%;
            }

            .Diagram--top {
              margin-left: 16.7%;
              margin-right: 1%;
            }

            .Diagram--last {
              margin-left: 24%;
              margin-right: 13%;
            }

            .Diagram-col--right {
              max-width: 13.4%;
            }

            .Diagram-col--right .Diagram-box {
              height: 100%;
            }

            .Diagram-box {
              display: flex;
              flex-direction: column;
              align-items: center;
              justify-content: center;
              width: 100%;
              min-height: 190px;
              position: relative;
              border-radius: 2px;
              box-shadow: 0 0 12px rgba(0, 0, 0, 0.2);
              background: white;
            }

            .Diagram-visible {
              top: 50%;
              left: 50%;
              transform: translate(-50%, -50%);
            }

            .Diagram-box .Diagram-visible,
            .Diagram-box .Diagram-hover {
              transition: opacity 0.2s;
            }

            .Diagram-hover {
              background: #4b4e52;
              width: 100%;
              height: 100%;
            }

            .Diagram-box .Diagram-hover { opacity: 0;  }

            .Diagram-box:hover .Diagram-visible { opacity: 0; }

            .Diagram-box:hover .Diagram-hover { opacity: 1; }

            .Diagram-box--transparent {
              box-shadow: none;
              justify-content: flex-end;
              align-items: flex-start;
              background: rgba(255,255,255,0) !important;
            }

            .Diagram-box:after {
              content: '';
              position: absolute;
              left: 0;
              bottom: 0;
              width: 100%;
              height: 4px;
              border-radius: 0 0 2px 2px;
              background: currentColor;
            }

            .Diagram-col.emerging-channels {
              min-width: 21%;
            }

            .-accent-custom-green:before,
            .-accent-custom-green:after {
              color: #009852;
            }

            .-accent-custom-blue:before,
            .-accent-custom-blue:after {
              color: #2c9fe7;
            }

            .-accent-custom-blue2:before,
            .-accent-custom-blue2:after {
              color: #003765;
            }

            .-accent-custom-purple:before,
            .-accent-custom-purple:after {
              color: #84329b;
            }


            .PRGS-Bar .PRGS-Bar-mobile a { color: #fff; }
            .PRGS-Bar.is-triggered .PRGS-Bar-mobile a { color: rgb(77, 79, 82); }


            @media screen and (max-width: 960px) {
              .Diagram-col {
                  max-width: 100%;
                  flex-basis: 33%;
                }
               .Diagram-col.-ml0 {
                  margin-left: 5px !important;
               }
               .Diagram-col--left {
                  flex-basis: 100%;
                  min-height: auto;
                }

              .Diagram-col--right {
                  flex-basis: 100%;
                }
              .Diagram h6 { font-size: 20px !important; }
              .Section--head:after { margin-left: 0; }
            }</style>
        <link href="https://d3ba5g9yhie26y.cloudfront.net/cache/1241f6b455339f47dfdff0cba411b10578a17088/css/style.min.css" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
        <div class="-tal"><div class="Diagram -mb7">
            <div class="Diagram-row Diagram--top -mb3 -l-dn">
            <div class="Diagram-col">
            <div class="-w5 -h5 -mb1 -ma">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 53 53">
            <g fill="none" fill-rule="evenodd" stroke="#000" stroke-width="2.098">
            <path d="M25.866 41.963h17.142c.581 0 1.054-.448 1.054-1.001V3.098c0-.552-.473-1-1.054-1H16.792c-.583 0-1.055.448-1.055 1v12.957m11.54 22.236h3.147">
            </path>
            <path d="M12.434 50.356h9.752c2.232 0 4.041-1.757 4.041-3.923V19.658c0-2.166-1.81-3.922-4.041-3.922h-9.752c-2.231 0-4.041 1.756-4.041 3.922v26.775c0 2.166 1.81 3.923 4.041 3.923z">
            </path>
            <path d="M16.786 46.684a.524.524 0 1 0 1.048 0 .524.524 0 0 0-1.048 0z"></path>
            </g>
            </svg>
            </div>
            <p class="-fs16 -c-black -mb0 -tac -lh100">Mobile</p>
            </div>
            <div class="Diagram-col">
            <div class="-w5 -h5 -mb1 -ma">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 55 53">
            <g fill="none" fill-rule="evenodd" stroke="#000" stroke-width="2.098">
            <path d="M50.184 2.098H4.271c-1.226 0-2.22.995-2.22 2.221v34.063c0 1.226.994 2.22 2.22 2.22h45.913c1.227 0 2.221-.994 2.221-2.22l.001-34.063c0-1.226-.994-2.22-2.222-2.22z">
            </path>
            <path d="M41.15 21.136c0 7.78-6.307 14.087-14.087 14.087-7.78 0-14.087-6.307-14.087-14.087 0-7.78 6.307-14.087 14.087-14.087 7.78 0 14.087 6.307 14.087 14.087z">
            </path>
            <path d="M32.186 21.136c0 7.78-2.293 14.087-5.123 14.087s-5.122-6.307-5.122-14.087c0-7.78 2.293-14.087 5.122-14.087 2.83 0 5.123 6.307 5.123 14.087zm7.414-5.5H14.244m0 11.27H39.6M27.23 40.607v7.401m-12.59 0h25.175">
            </path>
            </g>
            </svg>
            </div>
            <p class="-fs16 -c-black -mb0 -tac -lh100">Web</p>
            </div>
            <div class="Diagram-col">
            <div class="-w5 -h5 -mb1 -ma">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 53 53">
            <defs>
            <path id="a" d="M0 38.816h52.454V0H0z"></path>
            </defs>
            <g fill="none" fill-rule="evenodd" transform="translate(0 6.294)">
            <path stroke="#000" stroke-width="2.098" d="M9.966 26.227h0c-3.187 0-5.77-2.546-5.77-5.689V8.835c0-3.14 2.583-5.688 5.77-5.688 3.186 0 5.77 2.547 5.77 5.688v11.703c0 3.143-2.584 5.689-5.77 5.689z">
            </path>
            <path stroke="#000" stroke-width="2.098" d="M18.883 11.54v9.093c0 4.828-3.992 8.741-8.917 8.741s-8.917-3.913-8.917-8.74V11.54m0 3.672h17.834M4.196 37.242h12.59m-6.82.525v-11.54m34.095 3.147a1.049 1.049 0 1 0 2.098 0 1.049 1.049 0 0 0-2.098 0zm-6.294 0a1.05 1.05 0 1 0 2.099 0 1.05 1.05 0 0 0-2.1 0zm-6.295 0a1.049 1.049 0 1 0 2.098 0 1.049 1.049 0 0 0-2.098 0z">
            </path>
            <path stroke="#000" stroke-width="2.098" d="M22.03 26.751h4.896v-3.146c0-.87.731-1.574 1.633-1.574h21.214c.901 0 1.632.704 1.632 1.574v12.588c0 .87-.73 1.574-1.632 1.574H28.559c-.902 0-1.633-.705-1.633-1.574v-4.72l-4.895-4.722z">
            </path>
            <mask id="b" fill="#fff">
            <use xlink:href="#a"></use>
            </mask>
            <path stroke="#000" stroke-width="2.098" mask="url(#b)" d="M30.423 16.785h20.982V1.049H30.423zM34.62 5.77h8.392M34.62 8.917h12.589m-12.59 3.147h12.59M20.457 3.147v4.197M24.653 0v10.49">
            </path>
            </g>
            </svg>
            </div>
            <p class="-fs16 -c-black -mb0 -tac -lh100">Chatbots</p>
            </div>
            <div class="Diagram-col">
            <div class="-w5 -h5 -mb1 -ma">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 56 53">
            <g fill="none" fill-rule="evenodd" stroke="#000" stroke-width="2.098">
            <path d="M17.97 37.767H5.305c-1.717 0-3.109-1.361-3.109-3.04v-17c0-1.68 1.392-3.04 3.11-3.04H17.97c1.718 0 3.11 1.36 3.11 3.04v17c0 1.679-1.392 3.04-3.11 3.04zM6.392 37.767v9.441h11.54v-9.441">
            </path>
            <path d="M17.932 15.736V6.294H6.392v9.442M33.668 38.816v9.441h11.54v-9.441M45.208 13.638V4.196h-11.54v9.442">
            </path>
            <path d="M52.552 26.226c0 7.532-6.106 13.639-13.639 13.639-7.531 0-13.637-6.107-13.637-13.639 0-7.531 6.106-13.637 13.637-13.637 7.533 0 13.639 6.106 13.639 13.637z">
            </path>
            </g>
            </svg>
            </div>
            <p class="-fs16 -c-black -mb0 -tac -lh100">Wearables</p>
            </div>
            <div class="Diagram-col">
            <div class="-w5 -h5 -mb1 -ma">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 53 53">
            <defs>
            <path id="a" d="M0 38.816h51.492V.733H0z"></path>
            </defs>
            <g fill="none" fill-rule="evenodd" transform="translate(0 5.245)">
            <mask id="b" fill="#fff">
            <use xlink:href="#a"></use>
            </mask>
            <path stroke="#000" stroke-width="2.098" mask="url(#b)" d="M32.377 17.109h18.125V3.087H32.377zM35.863 7.294h6.971m-6.971 2.804h11.154m-11.154 2.804h11.154M40.077 32.04l4.671-2.89-4.671-2.891z">
            </path>
            <path stroke="#000" stroke-width="2.098" d="M50.144 29.15c0 4.79-3.86 8.671-8.623 8.671-4.761 0-8.622-3.882-8.622-8.67 0-4.79 3.86-8.672 8.622-8.672 4.763 0 8.623 3.882 8.623 8.671z" mask="url(#b)"></path>
            <path stroke="#000" stroke-width="1.836" mask="url(#b)" d="M16.48 33.996h-2.806l1.403-5.611"></path>
            <path stroke="#000" stroke-width="1.836" d="M24.896 20.67v1.403m0-4.209v1.403m.702.701H27m-4.208 0h1.403M5.257 15.76h19.64a4.209 4.209 0 0 1 4.208 4.209v4.208a4.208 4.208 0 0 1-4.209 4.208H5.257a4.208 4.208 0 0 1-4.208-4.208v-4.208a4.208 4.208 0 0 1 4.208-4.209z" mask="url(#b)"></path>
            <path stroke="#000" stroke-width="1.836" d="M25.976 15.9a11.222 11.222 0 0 0-21.799 0M26.3 38.906V28.14m-22.444 0v10.766" mask="url(#b)"></path>
            </g>
            </svg>
            </div>
            <p class="-fs16 -c-black -mb0 -tac -lh100">AR/VR</p>
            </div>
            <div class="Diagram-col emerging-channels">
            <div class="-w5 -h5 -mb1 -ma">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
            <g fill="none" fill-rule="evenodd">
            <path fill="#000" d="M45.267 6.67a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3zm-5.348 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3zm-5.349 0a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3z">
            </path>
            <path stroke="#000" stroke-width="2" d="M42 20h0c2.761 0 5 2.317 5 5.176v10.648C47 38.683 44.761 41 42 41s-5-2.317-5-5.176V25.176C37 22.317 39.239 20 42 20z">
            </path>
            <path stroke="#000" stroke-width="2" d="M50 27v8.67c0 4.6-3.582 8.33-8 8.33s-8-3.73-8-8.33V27m0 4.183h17m-15 19h12M42.275 50l-.183-9M26.047 5.664h4.012V2.99c0-.738.598-1.337 1.337-1.337h17.383c.738 0 1.337.599 1.337 1.337v10.697c0 .739-.599 1.337-1.337 1.337H31.396a1.337 1.337 0 0 1-1.337-1.337V9.676l-4.012-4.012zM1.653 14.653h17.383v-13H1.653zM17 46h-3l1.5-6">
            </path>
            <path stroke="#000" stroke-width="2" d="M25.168 33v1m0-4v1M26 32.168h1m-4 0h1M6.2 28h19.6c2.32 0 4.2 1.791 4.2 4v4c0 2.21-1.88 4-4.2 4H6.2C3.88 40 2 38.21 2 36v-4c0-2.209 1.88-4 4.2-4zM26 28c-1.183-4.696-5.519-8-10.5-8S6.183 23.304 5 28m21.168 23V40m-22 0v11m.828-45.336h6.685m-6.685 4.349h10.697">
            </path>
            </g>
            </svg>
            </div>
            <p class="-fs16 -c-black -mb0 -tac -lh100">Emerging Channels</p>
            </div>
            </div>
            <div class="Diagram-row">
            <div class="Diagram-col">
            <div class="Diagram-row -mb2 -l-mb4">
            <div class="Diagram-col Diagram-col--left Diagram-box Diagram-box--transparent -accent-custom-green -l-mb2">
            <h6 class="-fs20 -c-black -lh100 -pb1 -mb0">Adaptive Experience</h6>
            </div>
            <div class="Diagram-col">
            <div class="Diagram-row">
            <div class="Diagram-col Diagram-box -ml0 -accent-custom-green -l-mb2">
            <div class="Diagram-visible -pa -full">
            <div class="-w7 -h7 -mb2 -ma">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 73 70">
            <g fill="none" fill-rule="evenodd">
            <path d="M1.47 0h70v70h-70z"></path>
            <g stroke="#000" stroke-width="2" transform="translate(2.47 1)">
            <path d="M36 6h6"></path>
            <circle cx="39" cy="60" r="1"></circle>
            <circle cx="63" cy="33" r="1"></circle>
            <path d="M42 14h8v8h-8zM28 28h40v22H28z"></path>
            <path d="M56 28V4a4 4 0 0 0-4-4H26a4 4 0 0 0-4 4v60a4 4 0 0 0 4 4h26a4 4 0 0 0 4-4V50M35 18H22">
            </path>
            <path d="M31.53 11.97L34.95 18l-3.42 5.94M18 19c0 5-9 14.4-9 14.4S0 24 0 19a9 9 0 0 1 18 0z">
            </path>
            <circle cx="9" cy="19" r="3"></circle>
            <circle cx="47" cy="39" r="7"></circle>
            <path d="M11.993 55.38l3.975 7.59L16 44 4 59.17z"></path>
            <circle cx="47" cy="39" r="3"></circle>
            </g>
            </g>
            </svg>
            </div>
            <h5 class="-fs20 -mb0 -pl1 -pr1 -tac -lh100 -full">Native Apps</h5>
            </div>
            <a href="https://www.progress.com/nativescript" class="Diagram-hover -df -p2 -z2 -xl-p1">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 108 23" class="-mb1" width="108" height="23">
            <defs>
            <path id="a" d="M0 .124h21.734v21.734H0z"></path>
            <path id="c" d="M0 21.876h107.403V.142H0z"></path>
            </defs>
            <g fill="none" fill-rule="evenodd">
            <g transform="translate(0 .018)">
            <mask id="b" fill="#fff">
            <use xlink:href="#a"></use>
            </mask>
            <path fill="#3D5AFE" d="M0 16.425c0 3 2.433 5.433 5.433 5.433h10.868c3 0 5.433-2.433 5.433-5.433V5.558c0-3.001-2.433-5.434-5.433-5.434H5.433C2.433.124 0 2.557 0 5.558v10.867z" mask="url(#b)"></path>
            </g>
            <path fill="#FFF" d="M19.923 11.009c-1 0-1.811-.811-1.811-1.811V5.575c0-1-.811-1.81-1.811-1.81h-1.812v9.054L7.245 3.766v-.002H5.434c-1 0-1.812.811-1.812 1.812v3.622c0 1-.81 1.81-1.81 1.81 1 0 1.81.811 1.81 1.811v3.624c0 1 .811 1.81 1.812 1.81h1.81V9.202l7.245 9.052h1.812c1 0 1.81-.81 1.81-1.81V12.82c0-1 .812-1.811 1.812-1.811M35.992 14.934h-1.869L29.462 9.6v5.334h-2.268V5.723h1.883l4.661 5.499V5.723h2.254zM41.923 11.483c0-1.058-.798-1.787-1.691-1.787-.963 0-1.664.729-1.664 1.787 0 1.073.701 1.787 1.664 1.787.893 0 1.69-.714 1.69-1.787zm2.2 3.451h-2.2v-.55c-.536.481-1.251.756-2.145.756-1.828 0-3.368-1.47-3.368-3.657 0-2.172 1.54-3.657 3.368-3.657.894 0 1.609.275 2.145.756v-.55h2.2v6.902zm6.371-.302c-.536.288-1.1.508-1.883.508-1.719 0-2.75-.935-2.75-2.75V9.779H44.61V8.033h1.25V5.998h2.2v2.035h2.035v1.745h-2.034v2.393c0 .714.343 1.003.921 1.003.302 0 .715-.11 1.003-.275l.51 1.733z">
            </path>
            <mask id="d" fill="#fff">
            <use xlink:href="#c"></use>
            </mask>
            <path fill="#FFF" d="M51.224 14.934h2.2V8.032h-2.2v6.902zm2.378-8.936c0 .7-.536 1.223-1.278 1.223-.743 0-1.265-.522-1.265-1.223 0-.674.522-1.251 1.265-1.251.742 0 1.278.577 1.278 1.25zM58.862 14.934h-2.241l-2.86-6.915h2.324l1.663 4.262 1.65-4.262h2.324zM63.477 10.7h2.845c-.206-.743-.756-1.087-1.388-1.087-.619 0-1.251.385-1.457 1.087zm5.018 1.347h-5.06c.18.825.743 1.333 1.485 1.333.509 0 1.1-.123 1.471-.797l1.952.399c-.59 1.457-1.842 2.158-3.423 2.158-1.993 0-3.643-1.47-3.643-3.657 0-2.172 1.65-3.657 3.657-3.657 1.952 0 3.52 1.403 3.56 3.657v.564zm8.04-3.863l-2.228.453c-.165-.866-.88-1.292-1.608-1.292-.757 0-1.238.412-1.238.935 0 .371.165.646.742.77l1.911.426c1.595.357 2.53 1.224 2.53 2.68 0 1.967-1.746 2.984-3.794 2.984-2.076 0-3.781-.99-4.029-2.79l2.338-.454c.233.948.893 1.36 1.814 1.36.853 0 1.361-.384 1.361-.948 0-.412-.192-.674-.852-.811l-1.925-.413c-1.32-.302-2.474-.99-2.474-2.667 0-1.787 1.484-2.9 3.643-2.9 2.007 0 3.464.99 3.808 2.667m5.808 3.822l2.021.44c-.344 1.636-1.8 2.694-3.52 2.694-2.062 0-3.766-1.47-3.766-3.657 0-2.172 1.704-3.657 3.767-3.657 1.677 0 3.134 1.031 3.519 2.654l-2.062.494c-.192-.838-.756-1.223-1.457-1.223-.99 0-1.65.729-1.65 1.732 0 1.018.66 1.733 1.65 1.733.7 0 1.265-.372 1.498-1.21m7.7-4.015l-.096 2.2h-.399c-1.54 0-2.378.797-2.378 2.585v2.158h-2.2V8.032h2.2v1.32c.494-.825 1.25-1.416 2.378-1.416.192 0 .33.014.495.055m.638 6.943h2.2V8.032h-2.2v6.902zm2.378-8.936c0 .7-.536 1.223-1.278 1.223-.743 0-1.265-.522-1.265-1.223 0-.674.522-1.251 1.265-1.251.742 0 1.278.577 1.278 1.25zm6.219 5.485c0-1.058-.701-1.787-1.664-1.787-.893 0-1.69.729-1.69 1.787 0 1.073.797 1.787 1.69 1.787.963 0 1.664-.714 1.664-1.787m2.158 0c0 2.186-1.54 3.657-3.368 3.657-.894 0-1.608-.275-2.145-.756v2.887h-2.2V8.033h2.2v.55c.537-.482 1.251-.757 2.145-.757 1.828 0 3.368 1.485 3.368 3.657m5.968 3.149c-.536.288-1.1.508-1.884.508-1.718 0-2.75-.935-2.75-2.75V9.779h-1.25V8.033h1.25V5.998h2.2v2.035h2.035v1.745h-2.035v2.393c0 .714.344 1.003.921 1.003.303 0 .715-.11 1.004-.275l.509 1.733z" mask="url(#d)"></path>
            </g>
            </svg>
            <p class="-fs13 -c-white">As AIGS we have done quite a few Proof of Concept (POC) projects with Partners to assist them with
              a Mobile App Offering on their own Systems/Data. An example of this was a POC we did for RCL
              Foods where they required a Mobile App to do their internal asset management processes with
              regards to movable and immovable assets in all locations and all branches. AIGS assisted them to get
              such an app up and running with an OpenEdge Back-End and Database.</p>
            <p class="-fs12 -c-custom-blue -mta">Learn More</p>
            </a>
            </div>
            <div class="Diagram-col Diagram-box js-responsive-web -accent-custom-green -l-mb2">
            <div class="Diagram-visible -pa -full" style="">
            <div class="-w7 -h7 -mb2 -ma">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 73 70">
            <g fill="none" fill-rule="evenodd">
            <path d="M1.47 0h70v70h-70z"></path>
            <g stroke="#000" stroke-width="2" transform="translate(2.477 3)">
            <path d="M30.01 46v9.99m-17 0h34"></path>
            <rect width="26" height="52" x="42.01" y="11.99" rx="4"></rect>
            <circle cx="55.01" cy="56.07" r="1"></circle>
            <path d="M60 12V3a3 3 0 0 0-3-3H3a3 3 0 0 0-3 3v40a3 3 0 0 0 3 3h39"></path>
            <path d="M0 28.71C1.92 27.52 3.35 26 7 26c6 0 6 4.11 12 4.11S25 26 31 26s6 4.11 12 4.11S49 26 55 26s6 4.11 12 4.11h1m-68 6.6C1.92 35.52 3.35 34 7 34c6 0 6 4.11 12 4.11S25 34 31 34s6 4.11 12 4.11S49 34 55 34s6 4.11 12 4.11h1m0 7.95h-1C61 46.1 61 42 55 42s-6 4.1-12 4.1h-1">
            </path>
            </g>
            </g>
            </svg>
            </div>
            <h5 class="-fs20 -mb0 -pl1 -pr1 -tac -lh100 -full">Responsive Web</h5>
            </div>
            <a href="/kendo-ui" class="Diagram-hover -df -p2 -z2 -xl-p1">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 35" width="72" height="35" class="-mb1">
            <g fill="none" fill-rule="evenodd">
            <g fill-rule="nonzero">
            <path fill="#5CE500" d="M13.443 11.737a.544.544 0 0 1-.251.432l-3.486 2.006v-7.74l-6.72-3.87L6.472.556a.55.55 0 0 1 .501 0l6.47 3.73v7.45zm-5.23-4.44L3.612 4.646a.568.568 0 0 0-.502 0L0 6.436 4.853 9.23v5.59l3.11-1.791a.562.562 0 0 0 .25-.433v-5.3zM0 12.025l3.357 1.937v-3.87L0 12.024z">
            </path>
            <path fill="#FFF" d="M20.677 4.256h-3.664v9.919h1.622v-3.892h2.05c2.216 0 3.44-1.081 3.44-3.054.003-.894-.334-2.973-3.451-2.973h.003zm1.8 3c0 1.118-.58 1.575-2.004 1.575h-1.838V5.72h2.05c1.204 0 1.79.502 1.79 1.536h.001zm6.484-.306l.122.059-.275 1.465-.19-.058a1.61 1.61 0 0 0-.47-.073c-1.519 0-1.642 1.21-1.642 2.672v3.16H25.01v-7.28h1.412v.877a1.941 1.941 0 0 1 1.46-.97c.369-.05.745.001 1.086.15l-.006-.002zm3.706-.204a3.214 3.214 0 0 0-2.744 1.304 4.383 4.383 0 0 0-.736 2.496c0 2.302 1.365 3.79 3.48 3.79 2.569 0 3.48-2.07 3.48-3.842a4.078 4.078 0 0 0-.85-2.605 3.286 3.286 0 0 0-2.63-1.143zm0 6.247c-1.178 0-1.909-.936-1.909-2.443 0-1.524.733-2.472 1.909-2.472 1.168 0 1.922.959 1.922 2.444 0 1.523-.735 2.471-1.922 2.471zm16.129-6.045l.122.058-.275 1.466-.19-.058a1.606 1.606 0 0 0-.468-.073c-1.518 0-1.64 1.21-1.64 2.672v3.16H44.84V6.893h1.412v.878a1.941 1.941 0 0 1 1.46-.97c.367-.05.741.002 1.081.15l.003-.004zm5.402 4.894l-.028.08a1.602 1.602 0 0 1-1.64 1.081c-1.14 0-1.873-.757-1.942-1.984h5.15l.019-.142c.018-.192.024-.386.017-.58 0-.047-.003-.088-.003-.13-.075-2.04-1.406-3.405-3.307-3.405a3.141 3.141 0 0 0-2.636 1.264 4.334 4.334 0 0 0-.78 2.541c0 2.251 1.398 3.764 3.483 3.764a2.99 2.99 0 0 0 3.126-2.304l.047-.178H54.2l-.002-.007zm-3.56-2.126a1.75 1.75 0 0 1 1.8-1.65 1.714 1.714 0 0 1 1.764 1.65h-3.564zm-8.545-2.212a2.568 2.568 0 0 0-1.936-.757c-2.21 0-3.213 1.942-3.213 3.747 0 1.852.995 3.722 3.213 3.722a2.575 2.575 0 0 0 1.878-.763c-.006.32-.014.627-.023.757-.08 1.2-.66 1.76-1.816 1.76-.63 0-1.351-.222-1.49-.85l-.03-.139h-1.48l.026.198c.156 1.284 1.281 2.081 2.942 2.081 1.454 0 2.49-.549 2.995-1.585.276-.686.4-1.424.365-2.163V6.894H42.1v.61h-.007zm-1.842 5.368c-.526 0-1.75-.239-1.75-2.443 0-1.448.686-2.351 1.79-2.351.852 0 1.763.618 1.763 2.351 0 1.53-.674 2.443-1.803 2.443zm22.472-.888c0 1.159-.96 2.324-3.109 2.324-1.9 0-3.031-.822-3.182-2.315l-.016-.153h1.483l.023.111c.18.898 1.036 1.087 1.721 1.087.753 0 1.555-.242 1.555-.922 0-.343-.223-.588-.666-.725-.262-.077-.582-.167-.925-.265a32.4 32.4 0 0 1-1.568-.462 1.915 1.915 0 0 1-1.454-1.77c0-1.468 1.43-2.125 2.845-2.125 1.892 0 2.875.713 2.998 2.181l.01.15h-1.457l-.02-.114c-.147-.844-.986-.97-1.474-.97-.42 0-1.402.076-1.402.775 0 .318.27.552.83.713.168.048.416.112.7.184.595.153 1.335.346 1.708.474a1.83 1.83 0 0 1 1.401 1.82v.002zm6.953-.003c0 1.159-.961 2.324-3.11 2.324-1.9 0-3.03-.821-3.181-2.315l-.017-.153h1.482l.022.112c.182.897 1.037 1.086 1.722 1.086.752 0 1.555-.242 1.555-.922 0-.343-.223-.588-.666-.724-.262-.078-.585-.167-.925-.265a30.456 30.456 0 0 1-1.563-.463 1.915 1.915 0 0 1-1.454-1.77c0-1.467 1.43-2.125 2.844-2.125 1.892 0 2.876.713 2.998 2.182l.014.15h-1.46l-.019-.114c-.147-.845-.986-.97-1.474-.97-.42 0-1.401.075-1.401.775 0 .317.27.552.83.713.167.047.415.111.703.183.594.153 1.334.346 1.707.474a1.83 1.83 0 0 1 1.393 1.82v.002zm1.191-4.31a1.036 1.036 0 1 1 1.027-1.035 1.018 1.018 0 0 1-1.027 1.036zm0-1.896a.861.861 0 1 0 .838.86.83.83 0 0 0-.838-.86zm-.12 1.053v.345h-.306v-1.09h.51a.363.363 0 0 1 .4.38.32.32 0 0 1-.209.328l.248.378h-.34l-.209-.345h-.095l.001.004zm.17-.487h-.17v.242h.17c.092 0 .142-.044.142-.12 0-.075-.05-.122-.142-.122z">
            </path>
            </g>
            <g fill="#FFF"><text font-family="Metric-Light, Metric" font-size="16.216" font-weight="300" letter-spacing="-.341" transform="translate(16 18)">
            <tspan x="0" y="11">Kendo UI</tspan>
            </text>
            <path fill-rule="nonzero" d="M67.316 21.694a1.036 1.036 0 1 1 1.027-1.036 1.018 1.018 0 0 1-1.027 1.036zm0-1.897a.861.861 0 1 0 .838.86.83.83 0 0 0-.838-.86zm-.12 1.053v.345h-.307v-1.09h.51a.363.363 0 0 1 .401.38.32.32 0 0 1-.21.328l.249.378h-.34l-.21-.345h-.094v.004zm.17-.487h-.17v.242h.17c.091 0 .142-.044.142-.12 0-.075-.05-.122-.143-.122z">
            </path>
            </g>
            </g>
            </svg>
            <p class="-fs13 -c-white">Easily build compelling experiences with industry leading web UI for
            JavaScript</p>
            <p class="-fs12 -c-custom-blue -mta">Learn More</p>
            </a>
            </div>
            <div class="Diagram-col Diagram-box js-pwa -accent-custom-green">
            <div class="Diagram-visible -pa -full" style="">
            <div class="-w7 -h7 -mb2 -ma">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 73 70">
            <g fill="none" fill-rule="evenodd">
            <path d="M1.47 0h70v70h-70z"></path>
            <g stroke="#000" stroke-width="2" transform="translate(2.47 5)">
            <path d="M15.14 25.76l-6.68 6.69-3.32-3.32M41 23.76L30.31 34.45 25 29.14M63.59 26.43l-5.35 5.35-2.65-2.66">
            </path>
            <rect width="16" height="20" x="52.01" y="20.01" rx="3"></rect>
            <path d="M55.01 40.01v8H65v-8M65 20.01v-8h-9.99v8"></path>
            <rect width="30" height="60" x="18" y=".01" rx="4"></rect>
            <path d="M0 10.01h18v40H0zM11 46.01H7"></path>
            <circle cx="33" cy="54.09" r="1"></circle>
            </g>
            </g>
            </svg>
            </div>
            <h5 class="-fs20 -mb0 -pl1 -pr1 -tac -lh100 -full">PWA</h5>
            </div>
            <a href="/telerik" target="_blank" class="Diagram-hover -df -p2 -z2 -xl-p1">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 35" width="72" height="35" class="-mb1">
            <g fill="none" fill-rule="evenodd">
            <g fill-rule="nonzero">
            <path fill="#5CE500" d="M13.443 11.737a.544.544 0 0 1-.251.432l-3.486 2.006v-7.74l-6.72-3.87L6.472.556a.55.55 0 0 1 .501 0l6.47 3.73v7.45zm-5.23-4.44L3.612 4.646a.568.568 0 0 0-.502 0L0 6.436 4.853 9.23v5.59l3.11-1.791a.562.562 0 0 0 .25-.433v-5.3zM0 12.025l3.357 1.937v-3.87L0 12.024z">
            </path>
            <path fill="#FFF" d="M20.677 4.256h-3.664v9.919h1.622v-3.892h2.05c2.216 0 3.44-1.081 3.44-3.054.003-.894-.334-2.973-3.451-2.973h.003zm1.8 3c0 1.118-.58 1.575-2.004 1.575h-1.838V5.72h2.05c1.204 0 1.79.502 1.79 1.536h.001zm6.484-.306l.122.059-.275 1.465-.19-.058a1.61 1.61 0 0 0-.47-.073c-1.519 0-1.642 1.21-1.642 2.672v3.16H25.01v-7.28h1.412v.877a1.941 1.941 0 0 1 1.46-.97c.369-.05.745.001 1.086.15l-.006-.002zm3.706-.204a3.214 3.214 0 0 0-2.744 1.304 4.383 4.383 0 0 0-.736 2.496c0 2.302 1.365 3.79 3.48 3.79 2.569 0 3.48-2.07 3.48-3.842a4.078 4.078 0 0 0-.85-2.605 3.286 3.286 0 0 0-2.63-1.143zm0 6.247c-1.178 0-1.909-.936-1.909-2.443 0-1.524.733-2.472 1.909-2.472 1.168 0 1.922.959 1.922 2.444 0 1.523-.735 2.471-1.922 2.471zm16.129-6.045l.122.058-.275 1.466-.19-.058a1.606 1.606 0 0 0-.468-.073c-1.518 0-1.64 1.21-1.64 2.672v3.16H44.84V6.893h1.412v.878a1.941 1.941 0 0 1 1.46-.97c.367-.05.741.002 1.081.15l.003-.004zm5.402 4.894l-.028.08a1.602 1.602 0 0 1-1.64 1.081c-1.14 0-1.873-.757-1.942-1.984h5.15l.019-.142c.018-.192.024-.386.017-.58 0-.047-.003-.088-.003-.13-.075-2.04-1.406-3.405-3.307-3.405a3.141 3.141 0 0 0-2.636 1.264 4.334 4.334 0 0 0-.78 2.541c0 2.251 1.398 3.764 3.483 3.764a2.99 2.99 0 0 0 3.126-2.304l.047-.178H54.2l-.002-.007zm-3.56-2.126a1.75 1.75 0 0 1 1.8-1.65 1.714 1.714 0 0 1 1.764 1.65h-3.564zm-8.545-2.212a2.568 2.568 0 0 0-1.936-.757c-2.21 0-3.213 1.942-3.213 3.747 0 1.852.995 3.722 3.213 3.722a2.575 2.575 0 0 0 1.878-.763c-.006.32-.014.627-.023.757-.08 1.2-.66 1.76-1.816 1.76-.63 0-1.351-.222-1.49-.85l-.03-.139h-1.48l.026.198c.156 1.284 1.281 2.081 2.942 2.081 1.454 0 2.49-.549 2.995-1.585.276-.686.4-1.424.365-2.163V6.894H42.1v.61h-.007zm-1.842 5.368c-.526 0-1.75-.239-1.75-2.443 0-1.448.686-2.351 1.79-2.351.852 0 1.763.618 1.763 2.351 0 1.53-.674 2.443-1.803 2.443zm22.472-.888c0 1.159-.96 2.324-3.109 2.324-1.9 0-3.031-.822-3.182-2.315l-.016-.153h1.483l.023.111c.18.898 1.036 1.087 1.721 1.087.753 0 1.555-.242 1.555-.922 0-.343-.223-.588-.666-.725-.262-.077-.582-.167-.925-.265a32.4 32.4 0 0 1-1.568-.462 1.915 1.915 0 0 1-1.454-1.77c0-1.468 1.43-2.125 2.845-2.125 1.892 0 2.875.713 2.998 2.181l.01.15h-1.457l-.02-.114c-.147-.844-.986-.97-1.474-.97-.42 0-1.402.076-1.402.775 0 .318.27.552.83.713.168.048.416.112.7.184.595.153 1.335.346 1.708.474a1.83 1.83 0 0 1 1.401 1.82v.002zm6.953-.003c0 1.159-.961 2.324-3.11 2.324-1.9 0-3.03-.821-3.181-2.315l-.017-.153h1.482l.022.112c.182.897 1.037 1.086 1.722 1.086.752 0 1.555-.242 1.555-.922 0-.343-.223-.588-.666-.724-.262-.078-.585-.167-.925-.265a30.456 30.456 0 0 1-1.563-.463 1.915 1.915 0 0 1-1.454-1.77c0-1.467 1.43-2.125 2.844-2.125 1.892 0 2.876.713 2.998 2.182l.014.15h-1.46l-.019-.114c-.147-.845-.986-.97-1.474-.97-.42 0-1.401.075-1.401.775 0 .317.27.552.83.713.167.047.415.111.703.183.594.153 1.334.346 1.707.474a1.83 1.83 0 0 1 1.393 1.82v.002zm1.191-4.31a1.036 1.036 0 1 1 1.027-1.035 1.018 1.018 0 0 1-1.027 1.036zm0-1.896a.861.861 0 1 0 .838.86.83.83 0 0 0-.838-.86zm-.12 1.053v.345h-.306v-1.09h.51a.363.363 0 0 1 .4.38.32.32 0 0 1-.209.328l.248.378h-.34l-.209-.345h-.095l.001.004zm.17-.487h-.17v.242h.17c.092 0 .142-.044.142-.12 0-.075-.05-.122-.142-.122z">
            </path>
            </g>
            <g fill="#FFF"><text font-family="Metric-Light, Metric" font-size="16.216" font-weight="300" letter-spacing="-.341" transform="translate(16 18)">
            <tspan x="0" y="11">Telerik</tspan>
            </text>
            <path fill-rule="nonzero" d="M56.316 21.694a1.036 1.036 0 1 1 1.027-1.036 1.018 1.018 0 0 1-1.027 1.036zm0-1.897a.861.861 0 1 0 .838.86.83.83 0 0 0-.838-.86zm-.12 1.053v.345h-.307v-1.09h.51a.363.363 0 0 1 .401.38.32.32 0 0 1-.21.328l.249.378h-.34l-.21-.345h-.094v.004zm.17-.487h-.17v.242h.17c.091 0 .142-.044.142-.12 0-.075-.05-.122-.143-.122z">
            </path>
            </g>
            </g>
            </svg>
            <p class="-fs13 -c-white">Deliver an outstanding UI with the most complete toolboxes for .NET, web and
            mobile</p>
            <p class="-fs12 -c-custom-blue -mta">Learn More</p>
            </a>
            </div>
            <div class="Diagram-col Diagram-box -accent-custom-green">
            <div class="Diagram-visible -pa -full">
            <div class="-w7 -h7 -mb2 -ma">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 73 70">
            <g fill="none" fill-rule="evenodd">
            <path d="M.97 0h70v70h-70z"></path>
            <g stroke="#000" stroke-width="2">
            <path d="M46.767 10.49h21.326a3.877 3.877 0 0 1 3.877 3.876v50.406a3.877 3.877 0 0 1-3.877 3.878H46.767a3.877 3.877 0 0 1-3.877-3.878V37.234">
            </path>
            <path d="M58.399 62.915a.97.97 0 1 1-1.938 0 .97.97 0 0 1 1.938 0zM66.154 55.053V38.714l-8.602-8.602-8.846 8.846v16.095zM37.28 10.258h7.863a4.148 4.148 0 0 1 4.148 4.148V32.38a4.148 4.148 0 0 1-4.148 4.148H29.93v5.95l-5.95-5.95h-3.726">
            </path>
            <path d="M7.118 3h24.89a4.148 4.148 0 0 1 4.147 4.147V25.12a4.148 4.148 0 0 1-4.148 4.148h-15.21v5.95l-5.95-5.95H7.117a4.147 4.147 0 0 1-4.147-4.148V7.147A4.148 4.148 0 0 1 7.117 3zm22.816 19.354H9.194m20.74-5.531H9.194m20.74-5.532h-11.06">
            </path>
            </g>
            </g>
            </svg>
            </div>
            <h5 class="-fs20 -mb0 -pl1 -pr1 -tac -lh100 -full">Conversational</h5>
            </div>
            <a href="/nativechat" class="Diagram-hover -df -p2 -z2 -xl-p1">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 88 35" width="88" height="35" class="-mb1">
            <g fill="none" fill-rule="evenodd">
            <g fill-rule="nonzero">
            <path fill="#5CE500" d="M13.443 11.737a.544.544 0 0 1-.251.432l-3.486 2.006v-7.74l-6.72-3.87L6.472.556a.55.55 0 0 1 .501 0l6.47 3.73v7.45zm-5.23-4.44L3.612 4.646a.568.568 0 0 0-.502 0L0 6.436 4.853 9.23v5.59l3.11-1.791a.562.562 0 0 0 .25-.433v-5.3zM0 12.025l3.357 1.937v-3.87L0 12.024z">
            </path>
            <path fill="#FFF" d="M20.677 4.256h-3.664v9.919h1.622v-3.892h2.05c2.216 0 3.44-1.081 3.44-3.054.003-.894-.334-2.973-3.451-2.973h.003zm1.8 3c0 1.118-.58 1.575-2.004 1.575h-1.838V5.72h2.05c1.204 0 1.79.502 1.79 1.536h.001zm6.484-.306l.122.059-.275 1.465-.19-.058a1.61 1.61 0 0 0-.47-.073c-1.519 0-1.642 1.21-1.642 2.672v3.16H25.01v-7.28h1.412v.877a1.941 1.941 0 0 1 1.46-.97c.369-.05.745.001 1.086.15l-.006-.002zm3.706-.204a3.214 3.214 0 0 0-2.744 1.304 4.383 4.383 0 0 0-.736 2.496c0 2.302 1.365 3.79 3.48 3.79 2.569 0 3.48-2.07 3.48-3.842a4.078 4.078 0 0 0-.85-2.605 3.286 3.286 0 0 0-2.63-1.143zm0 6.247c-1.178 0-1.909-.936-1.909-2.443 0-1.524.733-2.472 1.909-2.472 1.168 0 1.922.959 1.922 2.444 0 1.523-.735 2.471-1.922 2.471zm16.129-6.045l.122.058-.275 1.466-.19-.058a1.606 1.606 0 0 0-.468-.073c-1.518 0-1.64 1.21-1.64 2.672v3.16H44.84V6.893h1.412v.878a1.941 1.941 0 0 1 1.46-.97c.367-.05.741.002 1.081.15l.003-.004zm5.402 4.894l-.028.08a1.602 1.602 0 0 1-1.64 1.081c-1.14 0-1.873-.757-1.942-1.984h5.15l.019-.142c.018-.192.024-.386.017-.58 0-.047-.003-.088-.003-.13-.075-2.04-1.406-3.405-3.307-3.405a3.141 3.141 0 0 0-2.636 1.264 4.334 4.334 0 0 0-.78 2.541c0 2.251 1.398 3.764 3.483 3.764a2.99 2.99 0 0 0 3.126-2.304l.047-.178H54.2l-.002-.007zm-3.56-2.126a1.75 1.75 0 0 1 1.8-1.65 1.714 1.714 0 0 1 1.764 1.65h-3.564zm-8.545-2.212a2.568 2.568 0 0 0-1.936-.757c-2.21 0-3.213 1.942-3.213 3.747 0 1.852.995 3.722 3.213 3.722a2.575 2.575 0 0 0 1.878-.763c-.006.32-.014.627-.023.757-.08 1.2-.66 1.76-1.816 1.76-.63 0-1.351-.222-1.49-.85l-.03-.139h-1.48l.026.198c.156 1.284 1.281 2.081 2.942 2.081 1.454 0 2.49-.549 2.995-1.585.276-.686.4-1.424.365-2.163V6.894H42.1v.61h-.007zm-1.842 5.368c-.526 0-1.75-.239-1.75-2.443 0-1.448.686-2.351 1.79-2.351.852 0 1.763.618 1.763 2.351 0 1.53-.674 2.443-1.803 2.443zm22.472-.888c0 1.159-.96 2.324-3.109 2.324-1.9 0-3.031-.822-3.182-2.315l-.016-.153h1.483l.023.111c.18.898 1.036 1.087 1.721 1.087.753 0 1.555-.242 1.555-.922 0-.343-.223-.588-.666-.725-.262-.077-.582-.167-.925-.265a32.4 32.4 0 0 1-1.568-.462 1.915 1.915 0 0 1-1.454-1.77c0-1.468 1.43-2.125 2.845-2.125 1.892 0 2.875.713 2.998 2.181l.01.15h-1.457l-.02-.114c-.147-.844-.986-.97-1.474-.97-.42 0-1.402.076-1.402.775 0 .318.27.552.83.713.168.048.416.112.7.184.595.153 1.335.346 1.708.474a1.83 1.83 0 0 1 1.401 1.82v.002zm6.953-.003c0 1.159-.961 2.324-3.11 2.324-1.9 0-3.03-.821-3.181-2.315l-.017-.153h1.482l.022.112c.182.897 1.037 1.086 1.722 1.086.752 0 1.555-.242 1.555-.922 0-.343-.223-.588-.666-.724-.262-.078-.585-.167-.925-.265a30.456 30.456 0 0 1-1.563-.463 1.915 1.915 0 0 1-1.454-1.77c0-1.467 1.43-2.125 2.844-2.125 1.892 0 2.876.713 2.998 2.182l.014.15h-1.46l-.019-.114c-.147-.845-.986-.97-1.474-.97-.42 0-1.401.075-1.401.775 0 .317.27.552.83.713.167.047.415.111.703.183.594.153 1.334.346 1.707.474a1.83 1.83 0 0 1 1.393 1.82v.002zm1.191-4.31a1.036 1.036 0 1 1 1.027-1.035 1.018 1.018 0 0 1-1.027 1.036zm0-1.896a.861.861 0 1 0 .838.86.83.83 0 0 0-.838-.86zm-.12 1.053v.345h-.306v-1.09h.51a.363.363 0 0 1 .4.38.32.32 0 0 1-.209.328l.248.378h-.34l-.209-.345h-.095l.001.004zm.17-.487h-.17v.242h.17c.092 0 .142-.044.142-.12 0-.075-.05-.122-.142-.122z">
            </path>
            </g>
            <g fill="#FFF"><text font-family="Metric-Light, Metric" font-size="16.216" font-weight="300" letter-spacing="-.341" transform="translate(16 18)">
            <tspan x="0" y="11">NativeChat</tspan>
            <tspan x="65" y="4" font-size="3" font-weight="700">SM</tspan>
            </text>
            </g>
            </g>
            </svg>
            <p class="-fs13 -c-white">Deliver superior user experiences with AI-driven chatbots</p>
            <p class="-fs12 -c-custom-blue -mta">Learn More</p>
            </a>
            </div>
            </div>
            </div>
            </div>
            <div class="Diagram-row -mb2 -l-mb4">
            <div class="Diagram-col Diagram-col--left Diagram-box Diagram-box--transparent -accent-custom-blue -l-mb2">
            <h6 class="-fs20 -c-black -lh100 -pb1 -mb0">Cognitive <br>
            Cloud</h6>
            </div>
            <div class="Diagram-col">
            <div class="Diagram-row">
            <div class="Diagram-col -ml0 Diagram-box -accent-custom-blue -l-mb2">
            <div class="Diagram-visible -pa -full">
            <div class="-w7 -h7 -mb2 -ma">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 70 70">
            <g fill="none" fill-rule="evenodd">
            <path d="M0 0h70v70H0z"></path>
            <g stroke="#000" stroke-width="2" transform="translate(0 3)">
            <circle cx="35" cy="43" r="4"></circle>
            <circle cx="35" cy="4.89" r="4"></circle>
            <path d="M49.46 47a15 15 0 0 0 0-8h-3.15c-.14-.398-.3-.789-.48-1.17l2.22-2.22a15.07 15.07 0 0 0-5.66-5.66l-2.22 2.22a11.92 11.92 0 0 0-1.17-.49v-3.14a15 15 0 0 0-8 0v3.14c-.398.14-.789.3-1.17.48l-2.22-2.22A15.07 15.07 0 0 0 22 35.6l2.22 2.22a11.92 11.92 0 0 0-.53 1.18h-3.15a15 15 0 0 0 0 8h3.14c.14.398.3.789.48 1.17L22 50.39A15.07 15.07 0 0 0 27.61 56l2.22-2.22c.381.18.772.34 1.17.48v3.14a15 15 0 0 0 8 0v-3.09c.398-.14.789-.3 1.17-.48L42.39 56a15.07 15.07 0 0 0 5.66-5.66l-2.22-2.22c.179-.365.34-.739.48-1.12h3.15z">
            </path>
            <path d="M13 41h.09a22 22 0 0 1 42.73-5.13c7.747.761 13.534 7.466 13.155 15.24-.38 7.776-6.791 13.886-14.575 13.89H13C6.373 65 1 59.627 1 53s5.373-12 12-12h0zM0 5.01h31m8 0h31M35 21V8.72">
            </path>
            </g>
            </g>
            </svg>
            </div>
            <h5 class="-fs20 -mb0 -pl1 -pr1 -tac -lh100 -full">Serverless Cloud Platform</h5>
            </div>
            <a href="/kinvey" class="Diagram-hover -df -p2 -z2 -xl-p1">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 35" width="72" height="35" class="-mb1">
            <g fill="none" fill-rule="evenodd">
            <g fill-rule="nonzero">
            <path fill="#5CE500" d="M13.443 11.737a.544.544 0 0 1-.251.432l-3.486 2.006v-7.74l-6.72-3.87L6.472.556a.55.55 0 0 1 .501 0l6.47 3.73v7.45zm-5.23-4.44L3.612 4.646a.568.568 0 0 0-.502 0L0 6.436 4.853 9.23v5.59l3.11-1.791a.562.562 0 0 0 .25-.433v-5.3zM0 12.025l3.357 1.937v-3.87L0 12.024z">
            </path>
            <path fill="#FFF" d="M20.677 4.256h-3.664v9.919h1.622v-3.892h2.05c2.216 0 3.44-1.081 3.44-3.054.003-.894-.334-2.973-3.451-2.973h.003zm1.8 3c0 1.118-.58 1.575-2.004 1.575h-1.838V5.72h2.05c1.204 0 1.79.502 1.79 1.536h.001zm6.484-.306l.122.059-.275 1.465-.19-.058a1.61 1.61 0 0 0-.47-.073c-1.519 0-1.642 1.21-1.642 2.672v3.16H25.01v-7.28h1.412v.877a1.941 1.941 0 0 1 1.46-.97c.369-.05.745.001 1.086.15l-.006-.002zm3.706-.204a3.214 3.214 0 0 0-2.744 1.304 4.383 4.383 0 0 0-.736 2.496c0 2.302 1.365 3.79 3.48 3.79 2.569 0 3.48-2.07 3.48-3.842a4.078 4.078 0 0 0-.85-2.605 3.286 3.286 0 0 0-2.63-1.143zm0 6.247c-1.178 0-1.909-.936-1.909-2.443 0-1.524.733-2.472 1.909-2.472 1.168 0 1.922.959 1.922 2.444 0 1.523-.735 2.471-1.922 2.471zm16.129-6.045l.122.058-.275 1.466-.19-.058a1.606 1.606 0 0 0-.468-.073c-1.518 0-1.64 1.21-1.64 2.672v3.16H44.84V6.893h1.412v.878a1.941 1.941 0 0 1 1.46-.97c.367-.05.741.002 1.081.15l.003-.004zm5.402 4.894l-.028.08a1.602 1.602 0 0 1-1.64 1.081c-1.14 0-1.873-.757-1.942-1.984h5.15l.019-.142c.018-.192.024-.386.017-.58 0-.047-.003-.088-.003-.13-.075-2.04-1.406-3.405-3.307-3.405a3.141 3.141 0 0 0-2.636 1.264 4.334 4.334 0 0 0-.78 2.541c0 2.251 1.398 3.764 3.483 3.764a2.99 2.99 0 0 0 3.126-2.304l.047-.178H54.2l-.002-.007zm-3.56-2.126a1.75 1.75 0 0 1 1.8-1.65 1.714 1.714 0 0 1 1.764 1.65h-3.564zm-8.545-2.212a2.568 2.568 0 0 0-1.936-.757c-2.21 0-3.213 1.942-3.213 3.747 0 1.852.995 3.722 3.213 3.722a2.575 2.575 0 0 0 1.878-.763c-.006.32-.014.627-.023.757-.08 1.2-.66 1.76-1.816 1.76-.63 0-1.351-.222-1.49-.85l-.03-.139h-1.48l.026.198c.156 1.284 1.281 2.081 2.942 2.081 1.454 0 2.49-.549 2.995-1.585.276-.686.4-1.424.365-2.163V6.894H42.1v.61h-.007zm-1.842 5.368c-.526 0-1.75-.239-1.75-2.443 0-1.448.686-2.351 1.79-2.351.852 0 1.763.618 1.763 2.351 0 1.53-.674 2.443-1.803 2.443zm22.472-.888c0 1.159-.96 2.324-3.109 2.324-1.9 0-3.031-.822-3.182-2.315l-.016-.153h1.483l.023.111c.18.898 1.036 1.087 1.721 1.087.753 0 1.555-.242 1.555-.922 0-.343-.223-.588-.666-.725-.262-.077-.582-.167-.925-.265a32.4 32.4 0 0 1-1.568-.462 1.915 1.915 0 0 1-1.454-1.77c0-1.468 1.43-2.125 2.845-2.125 1.892 0 2.875.713 2.998 2.181l.01.15h-1.457l-.02-.114c-.147-.844-.986-.97-1.474-.97-.42 0-1.402.076-1.402.775 0 .318.27.552.83.713.168.048.416.112.7.184.595.153 1.335.346 1.708.474a1.83 1.83 0 0 1 1.401 1.82v.002zm6.953-.003c0 1.159-.961 2.324-3.11 2.324-1.9 0-3.03-.821-3.181-2.315l-.017-.153h1.482l.022.112c.182.897 1.037 1.086 1.722 1.086.752 0 1.555-.242 1.555-.922 0-.343-.223-.588-.666-.724-.262-.078-.585-.167-.925-.265a30.456 30.456 0 0 1-1.563-.463 1.915 1.915 0 0 1-1.454-1.77c0-1.467 1.43-2.125 2.844-2.125 1.892 0 2.876.713 2.998 2.182l.014.15h-1.46l-.019-.114c-.147-.845-.986-.97-1.474-.97-.42 0-1.401.075-1.401.775 0 .317.27.552.83.713.167.047.415.111.703.183.594.153 1.334.346 1.707.474a1.83 1.83 0 0 1 1.393 1.82v.002zm1.191-4.31a1.036 1.036 0 1 1 1.027-1.035 1.018 1.018 0 0 1-1.027 1.036zm0-1.896a.861.861 0 1 0 .838.86.83.83 0 0 0-.838-.86zm-.12 1.053v.345h-.306v-1.09h.51a.363.363 0 0 1 .4.38.32.32 0 0 1-.209.328l.248.378h-.34l-.209-.345h-.095l.001.004zm.17-.487h-.17v.242h.17c.092 0 .142-.044.142-.12 0-.075-.05-.122-.142-.122z">
            </path>
            </g>
            <g fill="#FFF"><text font-family="Metric-Light, Metric" font-size="16.216" font-weight="300" letter-spacing="-.341" transform="translate(16 18)">
            <tspan x="0" y="11">Kinvey</tspan>
            </text>
            <path fill-rule="nonzero" d="M56.316 21.694a1.036 1.036 0 1 1 1.027-1.036 1.018 1.018 0 0 1-1.027 1.036zm0-1.897a.861.861 0 1 0 .838.86.83.83 0 0 0-.838-.86zm-.12 1.053v.345h-.307v-1.09h.51a.363.363 0 0 1 .401.38.32.32 0 0 1-.21.328l.249.378h-.34l-.21-.345h-.094v.004zm.17-.487h-.17v.242h.17c.091 0 .142-.044.142-.12 0-.075-.05-.122-.143-.122z">
            </path>
            </g>
            </g>
            </svg>
            <p class="-fs13 -c-white">Cloud-native platform for mobile, wearable, voice and chat experiences</p>
            <p class="-fs12 -c-custom-blue -mta">Learn More</p>
            </a>
            </div>
            <div class="Diagram-col Diagram-box -accent-custom-blue -l-mb2">
            <div class="Diagram-visible -pa -full">
            <div class="-w7 -h7 -mb2 -ma">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 70 70">
            <g fill="none" fill-rule="evenodd">
            <path d="M0 0h70v70H0z"></path>
            <g stroke="#000" stroke-width="2" transform="translate(7 1)">
            <rect width="20" height="20" x="22" y="14" rx="2.86"></rect>
            <path d="M28 20h8v8h-8zM28 8.99v5m4-5v5m4-5v5M28 34v5m4-5v5m4-5v5M17 27.99h5m-5-4h5m-5-4h5M42 28h5m-5-4.01h5m-5-4h5">
            </path>
            <circle cx="11.01" cy="25.1" r="1"></circle>
            <path d="M54 69V25.16C53.994 11.263 42.727 0 28.83 0h0C16.747-.003 6.366 8.58 4.1 20.45L0 42h8v12a6 6 0 0 0 6 6h8a4 4 0 0 1 4 4v5">
            </path>
            </g>
            </g>
            </svg>
            </div>
            <h5 class="-fs20 -mb0 -pl1 -pr1 -tac -lh100 -full">Intelligence as a Service</h5>
            </div>
            <a href="/datarpm" class="Diagram-hover -df -p2 -z2 -xl-p1">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 75 35" width="75" height="35" class="-mb1">
            <g fill="none" fill-rule="evenodd">
            <g fill-rule="nonzero">
            <path fill="#5CE500" d="M13.443 11.737a.544.544 0 0 1-.251.432l-3.486 2.006v-7.74l-6.72-3.87L6.472.556a.55.55 0 0 1 .501 0l6.47 3.73v7.45zm-5.23-4.44L3.612 4.646a.568.568 0 0 0-.502 0L0 6.436 4.853 9.23v5.59l3.11-1.791a.562.562 0 0 0 .25-.433v-5.3zM0 12.025l3.357 1.937v-3.87L0 12.024z">
            </path>
            <path fill="#FFF" d="M20.677 4.256h-3.664v9.919h1.622v-3.892h2.05c2.216 0 3.44-1.081 3.44-3.054.003-.894-.334-2.973-3.451-2.973h.003zm1.8 3c0 1.118-.58 1.575-2.004 1.575h-1.838V5.72h2.05c1.204 0 1.79.502 1.79 1.536h.001zm6.484-.306l.122.059-.275 1.465-.19-.058a1.61 1.61 0 0 0-.47-.073c-1.519 0-1.642 1.21-1.642 2.672v3.16H25.01v-7.28h1.412v.877a1.941 1.941 0 0 1 1.46-.97c.369-.05.745.001 1.086.15l-.006-.002zm3.706-.204a3.214 3.214 0 0 0-2.744 1.304 4.383 4.383 0 0 0-.736 2.496c0 2.302 1.365 3.79 3.48 3.79 2.569 0 3.48-2.07 3.48-3.842a4.078 4.078 0 0 0-.85-2.605 3.286 3.286 0 0 0-2.63-1.143zm0 6.247c-1.178 0-1.909-.936-1.909-2.443 0-1.524.733-2.472 1.909-2.472 1.168 0 1.922.959 1.922 2.444 0 1.523-.735 2.471-1.922 2.471zm16.129-6.045l.122.058-.275 1.466-.19-.058a1.606 1.606 0 0 0-.468-.073c-1.518 0-1.64 1.21-1.64 2.672v3.16H44.84V6.893h1.412v.878a1.941 1.941 0 0 1 1.46-.97c.367-.05.741.002 1.081.15l.003-.004zm5.402 4.894l-.028.08a1.602 1.602 0 0 1-1.64 1.081c-1.14 0-1.873-.757-1.942-1.984h5.15l.019-.142c.018-.192.024-.386.017-.58 0-.047-.003-.088-.003-.13-.075-2.04-1.406-3.405-3.307-3.405a3.141 3.141 0 0 0-2.636 1.264 4.334 4.334 0 0 0-.78 2.541c0 2.251 1.398 3.764 3.483 3.764a2.99 2.99 0 0 0 3.126-2.304l.047-.178H54.2l-.002-.007zm-3.56-2.126a1.75 1.75 0 0 1 1.8-1.65 1.714 1.714 0 0 1 1.764 1.65h-3.564zm-8.545-2.212a2.568 2.568 0 0 0-1.936-.757c-2.21 0-3.213 1.942-3.213 3.747 0 1.852.995 3.722 3.213 3.722a2.575 2.575 0 0 0 1.878-.763c-.006.32-.014.627-.023.757-.08 1.2-.66 1.76-1.816 1.76-.63 0-1.351-.222-1.49-.85l-.03-.139h-1.48l.026.198c.156 1.284 1.281 2.081 2.942 2.081 1.454 0 2.49-.549 2.995-1.585.276-.686.4-1.424.365-2.163V6.894H42.1v.61h-.007zm-1.842 5.368c-.526 0-1.75-.239-1.75-2.443 0-1.448.686-2.351 1.79-2.351.852 0 1.763.618 1.763 2.351 0 1.53-.674 2.443-1.803 2.443zm22.472-.888c0 1.159-.96 2.324-3.109 2.324-1.9 0-3.031-.822-3.182-2.315l-.016-.153h1.483l.023.111c.18.898 1.036 1.087 1.721 1.087.753 0 1.555-.242 1.555-.922 0-.343-.223-.588-.666-.725-.262-.077-.582-.167-.925-.265a32.4 32.4 0 0 1-1.568-.462 1.915 1.915 0 0 1-1.454-1.77c0-1.468 1.43-2.125 2.845-2.125 1.892 0 2.875.713 2.998 2.181l.01.15h-1.457l-.02-.114c-.147-.844-.986-.97-1.474-.97-.42 0-1.402.076-1.402.775 0 .318.27.552.83.713.168.048.416.112.7.184.595.153 1.335.346 1.708.474a1.83 1.83 0 0 1 1.401 1.82v.002zm6.953-.003c0 1.159-.961 2.324-3.11 2.324-1.9 0-3.03-.821-3.181-2.315l-.017-.153h1.482l.022.112c.182.897 1.037 1.086 1.722 1.086.752 0 1.555-.242 1.555-.922 0-.343-.223-.588-.666-.724-.262-.078-.585-.167-.925-.265a30.456 30.456 0 0 1-1.563-.463 1.915 1.915 0 0 1-1.454-1.77c0-1.467 1.43-2.125 2.844-2.125 1.892 0 2.876.713 2.998 2.182l.014.15h-1.46l-.019-.114c-.147-.845-.986-.97-1.474-.97-.42 0-1.401.075-1.401.775 0 .317.27.552.83.713.167.047.415.111.703.183.594.153 1.334.346 1.707.474a1.83 1.83 0 0 1 1.393 1.82v.002zm1.191-4.31a1.036 1.036 0 1 1 1.027-1.035 1.018 1.018 0 0 1-1.027 1.036zm0-1.896a.861.861 0 1 0 .838.86.83.83 0 0 0-.838-.86zm-.12 1.053v.345h-.306v-1.09h.51a.363.363 0 0 1 .4.38.32.32 0 0 1-.209.328l.248.378h-.34l-.209-.345h-.095l.001.004zm.17-.487h-.17v.242h.17c.092 0 .142-.044.142-.12 0-.075-.05-.122-.142-.122z">
            </path>
            </g>
            <g fill="#FFF"><text font-family="Metric-Light, Metric" font-size="16.216" font-weight="300" letter-spacing="-.341" transform="translate(16 18)">
            <tspan x="0" y="11">DataRPM</tspan>
            </text>
            <path fill-rule="nonzero" d="M73.316 21.694a1.036 1.036 0 1 1 1.027-1.036 1.018 1.018 0 0 1-1.027 1.036zm0-1.897a.861.861 0 1 0 .838.86.83.83 0 0 0-.838-.86zm-.12 1.053v.345h-.307v-1.09h.51a.363.363 0 0 1 .401.38.32.32 0 0 1-.21.328l.249.378h-.34l-.21-.345h-.094v.004zm.17-.487h-.17v.242h.17c.091 0 .142-.044.142-.12 0-.075-.05-.122-.143-.122z">
            </path>
            </g>
            </g>
            </svg>
            <p class="-fs13 -c-white">Automated data science adds predictive capabilities to your apps</p>
            <p class="-fs12 -c-custom-blue -mta">Learn More</p>
            </a>
            </div>
            <div class="Diagram-col Diagram-box -accent-custom-blue -l-mb2">
            <div class="Diagram-visible -pa -full">
            <div class="-w7 -h7 -mb2 -ma">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 70 71">
            <g fill="none" fill-rule="evenodd">
            <path d="M0 0h70v70H0z"></path>
            <g stroke="#000" stroke-width="2" transform="translate(5 1)">
            <path d="M46.22 24.71l-13.38 7.73M40.02 21.34l5.98 3.5v6.85M6.04 47.88L27.51 35.4"></path>
            <circle cx="30" cy="34.01" r="3"></circle>
            <circle cx="30" cy="3.01" r="3"></circle>
            <circle cx="30" cy="65.01" r="3"></circle>
            <circle cx="3" cy="49.01" r="3"></circle>
            <circle cx="3" cy="18.01" r="3"></circle>
            <circle cx="57" cy="49.01" r="3"></circle>
            <circle cx="57" cy="18.01" r="3"></circle>
            <path d="M56 46.21v-25.4M31.85 62.65l22.24-12.92m-48.19.03l22.28 12.87M4 20.81v25.38m23.75-41.2L5.98 17.64m48.05-.03L32.23 5.02">
            </path>
            </g>
            </g>
            </svg>
            </div>
            <h5 class="-fs20 -mb0 -pl1 -pr1 -tac -lh100 -full">Rules <br>
            as a Service</h5>
            </div>
            <a href="/corticon" class="Diagram-hover -df -p2 -z2 -xl-p1">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 35" width="72" height="35" class="-mb1">
            <g fill="none" fill-rule="evenodd">
            <g fill-rule="nonzero">
            <path fill="#5CE500" d="M13.443 11.737a.544.544 0 0 1-.251.432l-3.486 2.006v-7.74l-6.72-3.87L6.472.556a.55.55 0 0 1 .501 0l6.47 3.73v7.45zm-5.23-4.44L3.612 4.646a.568.568 0 0 0-.502 0L0 6.436 4.853 9.23v5.59l3.11-1.791a.562.562 0 0 0 .25-.433v-5.3zM0 12.025l3.357 1.937v-3.87L0 12.024z">
            </path>
            <path fill="#FFF" d="M20.677 4.256h-3.664v9.919h1.622v-3.892h2.05c2.216 0 3.44-1.081 3.44-3.054.003-.894-.334-2.973-3.451-2.973h.003zm1.8 3c0 1.118-.58 1.575-2.004 1.575h-1.838V5.72h2.05c1.204 0 1.79.502 1.79 1.536h.001zm6.484-.306l.122.059-.275 1.465-.19-.058a1.61 1.61 0 0 0-.47-.073c-1.519 0-1.642 1.21-1.642 2.672v3.16H25.01v-7.28h1.412v.877a1.941 1.941 0 0 1 1.46-.97c.369-.05.745.001 1.086.15l-.006-.002zm3.706-.204a3.214 3.214 0 0 0-2.744 1.304 4.383 4.383 0 0 0-.736 2.496c0 2.302 1.365 3.79 3.48 3.79 2.569 0 3.48-2.07 3.48-3.842a4.078 4.078 0 0 0-.85-2.605 3.286 3.286 0 0 0-2.63-1.143zm0 6.247c-1.178 0-1.909-.936-1.909-2.443 0-1.524.733-2.472 1.909-2.472 1.168 0 1.922.959 1.922 2.444 0 1.523-.735 2.471-1.922 2.471zm16.129-6.045l.122.058-.275 1.466-.19-.058a1.606 1.606 0 0 0-.468-.073c-1.518 0-1.64 1.21-1.64 2.672v3.16H44.84V6.893h1.412v.878a1.941 1.941 0 0 1 1.46-.97c.367-.05.741.002 1.081.15l.003-.004zm5.402 4.894l-.028.08a1.602 1.602 0 0 1-1.64 1.081c-1.14 0-1.873-.757-1.942-1.984h5.15l.019-.142c.018-.192.024-.386.017-.58 0-.047-.003-.088-.003-.13-.075-2.04-1.406-3.405-3.307-3.405a3.141 3.141 0 0 0-2.636 1.264 4.334 4.334 0 0 0-.78 2.541c0 2.251 1.398 3.764 3.483 3.764a2.99 2.99 0 0 0 3.126-2.304l.047-.178H54.2l-.002-.007zm-3.56-2.126a1.75 1.75 0 0 1 1.8-1.65 1.714 1.714 0 0 1 1.764 1.65h-3.564zm-8.545-2.212a2.568 2.568 0 0 0-1.936-.757c-2.21 0-3.213 1.942-3.213 3.747 0 1.852.995 3.722 3.213 3.722a2.575 2.575 0 0 0 1.878-.763c-.006.32-.014.627-.023.757-.08 1.2-.66 1.76-1.816 1.76-.63 0-1.351-.222-1.49-.85l-.03-.139h-1.48l.026.198c.156 1.284 1.281 2.081 2.942 2.081 1.454 0 2.49-.549 2.995-1.585.276-.686.4-1.424.365-2.163V6.894H42.1v.61h-.007zm-1.842 5.368c-.526 0-1.75-.239-1.75-2.443 0-1.448.686-2.351 1.79-2.351.852 0 1.763.618 1.763 2.351 0 1.53-.674 2.443-1.803 2.443zm22.472-.888c0 1.159-.96 2.324-3.109 2.324-1.9 0-3.031-.822-3.182-2.315l-.016-.153h1.483l.023.111c.18.898 1.036 1.087 1.721 1.087.753 0 1.555-.242 1.555-.922 0-.343-.223-.588-.666-.725-.262-.077-.582-.167-.925-.265a32.4 32.4 0 0 1-1.568-.462 1.915 1.915 0 0 1-1.454-1.77c0-1.468 1.43-2.125 2.845-2.125 1.892 0 2.875.713 2.998 2.181l.01.15h-1.457l-.02-.114c-.147-.844-.986-.97-1.474-.97-.42 0-1.402.076-1.402.775 0 .318.27.552.83.713.168.048.416.112.7.184.595.153 1.335.346 1.708.474a1.83 1.83 0 0 1 1.401 1.82v.002zm6.953-.003c0 1.159-.961 2.324-3.11 2.324-1.9 0-3.03-.821-3.181-2.315l-.017-.153h1.482l.022.112c.182.897 1.037 1.086 1.722 1.086.752 0 1.555-.242 1.555-.922 0-.343-.223-.588-.666-.724-.262-.078-.585-.167-.925-.265a30.456 30.456 0 0 1-1.563-.463 1.915 1.915 0 0 1-1.454-1.77c0-1.467 1.43-2.125 2.844-2.125 1.892 0 2.876.713 2.998 2.182l.014.15h-1.46l-.019-.114c-.147-.845-.986-.97-1.474-.97-.42 0-1.401.075-1.401.775 0 .317.27.552.83.713.167.047.415.111.703.183.594.153 1.334.346 1.707.474a1.83 1.83 0 0 1 1.393 1.82v.002zm1.191-4.31a1.036 1.036 0 1 1 1.027-1.035 1.018 1.018 0 0 1-1.027 1.036zm0-1.896a.861.861 0 1 0 .838.86.83.83 0 0 0-.838-.86zm-.12 1.053v.345h-.306v-1.09h.51a.363.363 0 0 1 .4.38.32.32 0 0 1-.209.328l.248.378h-.34l-.209-.345h-.095l.001.004zm.17-.487h-.17v.242h.17c.092 0 .142-.044.142-.12 0-.075-.05-.122-.142-.122z">
            </path>
            </g>
            <g fill="#FFF"><text font-family="Metric-Light, Metric" font-size="16.216" font-weight="300" letter-spacing="-.341" transform="translate(16 18)">
            <tspan x="0" y="11">Corticon</tspan>
            </text>
            <path fill-rule="nonzero" d="M66.316 21.694a1.036 1.036 0 1 1 1.027-1.036 1.018 1.018 0 0 1-1.027 1.036zm0-1.897a.861.861 0 1 0 .838.86.83.83 0 0 0-.838-.86zm-.12 1.053v.345h-.307v-1.09h.51a.363.363 0 0 1 .401.38.32.32 0 0 1-.21.328l.249.378h-.34l-.21-.345h-.094v.004zm.17-.487h-.17v.242h.17c.091 0 .142-.044.142-.12 0-.075-.05-.122-.143-.122z">
            </path>
            </g>
            </g>
            </svg>
            <p class="-fs13 -c-white">Easily manage complex business rules for demanding enterprise applications</p>
            <p class="-fs12 -c-custom-blue -mta">Learn More</p>
            </a>
            </div>
            <div class="Diagram-col Diagram-box -accent-custom-blue -l-mb2">
            <div class="Diagram-visible -pa -full -full">
            <div class="-w7 -h7 -mb2 -ma">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 70 70">
            <g fill="none" fill-rule="evenodd">
            <path d="M0 0h70v70H0z"></path>
            <g stroke="#000" stroke-width="2">
            <path d="M41.51 63.79A1.4 1.4 0 0 0 41 65a4.26 4.26 0 0 0 1.93 3.35c.376.264.856.33 1.29.18">
            </path>
            <path d="M41.43 63.86l18.12-10.77H65l-2.72 4.71-18.12 10.77M7 47H4a3 3 0 0 1-3-3V4a3 3 0 0 1 3-3h17.4L26 5h40a3 3 0 0 1 3 3v36a3 3 0 0 1-3 3H39.4">
            </path>
            <path d="M7 39.01h32v20H7zM45 13.01h18v20H45zM45 46.81v-7.8h18v7.8M23 44.01v10"></path>
            <path d="M29 47.78l-6-3.37-6 3.37M12 13.01H7v5M28 13.01H18m10 20H18M7 28.01v5h5M39 18.01v-5h-5M34 33.01h5v-5">
            </path>
            </g>
            </g>
            </svg>
            </div>
            <h5 class="-fs20 -mb0 -pl1 -pr1 -tac -lh100 -full">Content as a Service</h5>
            </div>
            <a href="/sitefinity-cms" class="Diagram-hover -df -p2 -z2 -xl-p1">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 35" width="72" height="35" class="-mb1">
            <g fill="none" fill-rule="evenodd">
            <g fill-rule="nonzero">
            <path fill="#5CE500" d="M13.443 11.737a.544.544 0 0 1-.251.432l-3.486 2.006v-7.74l-6.72-3.87L6.472.556a.55.55 0 0 1 .501 0l6.47 3.73v7.45zm-5.23-4.44L3.612 4.646a.568.568 0 0 0-.502 0L0 6.436 4.853 9.23v5.59l3.11-1.791a.562.562 0 0 0 .25-.433v-5.3zM0 12.025l3.357 1.937v-3.87L0 12.024z">
            </path>
            <path fill="#FFF" d="M20.677 4.256h-3.664v9.919h1.622v-3.892h2.05c2.216 0 3.44-1.081 3.44-3.054.003-.894-.334-2.973-3.451-2.973h.003zm1.8 3c0 1.118-.58 1.575-2.004 1.575h-1.838V5.72h2.05c1.204 0 1.79.502 1.79 1.536h.001zm6.484-.306l.122.059-.275 1.465-.19-.058a1.61 1.61 0 0 0-.47-.073c-1.519 0-1.642 1.21-1.642 2.672v3.16H25.01v-7.28h1.412v.877a1.941 1.941 0 0 1 1.46-.97c.369-.05.745.001 1.086.15l-.006-.002zm3.706-.204a3.214 3.214 0 0 0-2.744 1.304 4.383 4.383 0 0 0-.736 2.496c0 2.302 1.365 3.79 3.48 3.79 2.569 0 3.48-2.07 3.48-3.842a4.078 4.078 0 0 0-.85-2.605 3.286 3.286 0 0 0-2.63-1.143zm0 6.247c-1.178 0-1.909-.936-1.909-2.443 0-1.524.733-2.472 1.909-2.472 1.168 0 1.922.959 1.922 2.444 0 1.523-.735 2.471-1.922 2.471zm16.129-6.045l.122.058-.275 1.466-.19-.058a1.606 1.606 0 0 0-.468-.073c-1.518 0-1.64 1.21-1.64 2.672v3.16H44.84V6.893h1.412v.878a1.941 1.941 0 0 1 1.46-.97c.367-.05.741.002 1.081.15l.003-.004zm5.402 4.894l-.028.08a1.602 1.602 0 0 1-1.64 1.081c-1.14 0-1.873-.757-1.942-1.984h5.15l.019-.142c.018-.192.024-.386.017-.58 0-.047-.003-.088-.003-.13-.075-2.04-1.406-3.405-3.307-3.405a3.141 3.141 0 0 0-2.636 1.264 4.334 4.334 0 0 0-.78 2.541c0 2.251 1.398 3.764 3.483 3.764a2.99 2.99 0 0 0 3.126-2.304l.047-.178H54.2l-.002-.007zm-3.56-2.126a1.75 1.75 0 0 1 1.8-1.65 1.714 1.714 0 0 1 1.764 1.65h-3.564zm-8.545-2.212a2.568 2.568 0 0 0-1.936-.757c-2.21 0-3.213 1.942-3.213 3.747 0 1.852.995 3.722 3.213 3.722a2.575 2.575 0 0 0 1.878-.763c-.006.32-.014.627-.023.757-.08 1.2-.66 1.76-1.816 1.76-.63 0-1.351-.222-1.49-.85l-.03-.139h-1.48l.026.198c.156 1.284 1.281 2.081 2.942 2.081 1.454 0 2.49-.549 2.995-1.585.276-.686.4-1.424.365-2.163V6.894H42.1v.61h-.007zm-1.842 5.368c-.526 0-1.75-.239-1.75-2.443 0-1.448.686-2.351 1.79-2.351.852 0 1.763.618 1.763 2.351 0 1.53-.674 2.443-1.803 2.443zm22.472-.888c0 1.159-.96 2.324-3.109 2.324-1.9 0-3.031-.822-3.182-2.315l-.016-.153h1.483l.023.111c.18.898 1.036 1.087 1.721 1.087.753 0 1.555-.242 1.555-.922 0-.343-.223-.588-.666-.725-.262-.077-.582-.167-.925-.265a32.4 32.4 0 0 1-1.568-.462 1.915 1.915 0 0 1-1.454-1.77c0-1.468 1.43-2.125 2.845-2.125 1.892 0 2.875.713 2.998 2.181l.01.15h-1.457l-.02-.114c-.147-.844-.986-.97-1.474-.97-.42 0-1.402.076-1.402.775 0 .318.27.552.83.713.168.048.416.112.7.184.595.153 1.335.346 1.708.474a1.83 1.83 0 0 1 1.401 1.82v.002zm6.953-.003c0 1.159-.961 2.324-3.11 2.324-1.9 0-3.03-.821-3.181-2.315l-.017-.153h1.482l.022.112c.182.897 1.037 1.086 1.722 1.086.752 0 1.555-.242 1.555-.922 0-.343-.223-.588-.666-.724-.262-.078-.585-.167-.925-.265a30.456 30.456 0 0 1-1.563-.463 1.915 1.915 0 0 1-1.454-1.77c0-1.467 1.43-2.125 2.844-2.125 1.892 0 2.876.713 2.998 2.182l.014.15h-1.46l-.019-.114c-.147-.845-.986-.97-1.474-.97-.42 0-1.401.075-1.401.775 0 .317.27.552.83.713.167.047.415.111.703.183.594.153 1.334.346 1.707.474a1.83 1.83 0 0 1 1.393 1.82v.002zm1.191-4.31a1.036 1.036 0 1 1 1.027-1.035 1.018 1.018 0 0 1-1.027 1.036zm0-1.896a.861.861 0 1 0 .838.86.83.83 0 0 0-.838-.86zm-.12 1.053v.345h-.306v-1.09h.51a.363.363 0 0 1 .4.38.32.32 0 0 1-.209.328l.248.378h-.34l-.209-.345h-.095l.001.004zm.17-.487h-.17v.242h.17c.092 0 .142-.044.142-.12 0-.075-.05-.122-.142-.122z">
            </path>
            </g>
            <g fill="#FFF"><text font-family="Metric-Light, Metric" font-size="16.216" font-weight="300" letter-spacing="-.341" transform="translate(16 18)">
            <tspan x="0" y="11">Sitefinity</tspan>
            </text>
            <path fill-rule="nonzero" d="M67.316 21.694a1.036 1.036 0 1 1 1.027-1.036 1.018 1.018 0 0 1-1.027 1.036zm0-1.897a.861.861 0 1 0 .838.86.83.83 0 0 0-.838-.86zm-.12 1.053v.345h-.307v-1.09h.51a.363.363 0 0 1 .401.38.32.32 0 0 1-.21.328l.249.378h-.34l-.21-.345h-.094v.004zm.17-.487h-.17v.242h.17c.091 0 .142-.044.142-.12 0-.075-.05-.122-.143-.122z">
            </path>
            </g>
            </g>
            </svg>
            <p class="-fs13 -c-white">Deliver engaging content-driven digital experiences personalized with machine
            learning</p>
            <p class="-fs12 -c-custom-blue -mta">Learn More</p>
            </a>
            </div>
            <div class="Diagram-col Diagram-box -accent-custom-blue">
            <div class="Diagram-visible -pa -full">
            <div class="-w7 -h7 -mb2 -ma">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 70 70">
            <g fill="none" fill-rule="evenodd">
            <path d="M0 0h70v70H0z"></path>
            <g stroke="#000" stroke-width="2" transform="translate(1 1)">
            <path d="M24.09 24.08L1.48 37.21A2.53 2.53 0 0 0 0 39.31v8.8a2.56 2.56 0 0 0 1.51 2.09l29 16.74a8 8 0 0 0 7.22 0L66.52 50.2A2.53 2.53 0 0 0 68 48.11v-8.8a2.56 2.56 0 0 0-1.51-2.09L44.11 24.29">
            </path>
            <path d="M0 39.31a2.56 2.56 0 0 0 1.51 2.09l29 16.74a8 8 0 0 0 7.22 0L66.52 41.4A2.53 2.53 0 0 0 68 39.31">
            </path>
            <rect width="20" height="37" x="24" y="9" rx="3"></rect>
            <path d="M34 18.6v12.2M14 9.4v12.2"></path>
            <circle cx="34" cy="40" r="1"></circle>
            <path d="M4 35.4V3a3 3 0 0 1 3-3h10l3.87 4H61a3 3 0 0 1 3 3v28.4"></path>
            <path d="M39.99 22.36l-6-3.36-6 3.36M19.99 13.16l-6-3.36-6 3.36"></path>
            </g>
            </g>
            </svg>
            </div>
            <h5 class="-fs20 -mb0 -pl1 -pr1 -tac -lh100 -full">Mission-critical App Platform</h5>
            </div>
            <a href="/openedge" class="Diagram-hover -df -p2 -z2 -xl-p1">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 81 35" width="81" height="35">
            <g fill="none" fill-rule="evenodd">
            <g fill-rule="nonzero">
            <path fill="#5CE500" d="M13.443 11.737a.544.544 0 0 1-.251.432l-3.486 2.006v-7.74l-6.72-3.87L6.472.556a.55.55 0 0 1 .501 0l6.47 3.73v7.45zm-5.23-4.44L3.612 4.646a.568.568 0 0 0-.502 0L0 6.436 4.853 9.23v5.59l3.11-1.791a.562.562 0 0 0 .25-.433v-5.3zM0 12.025l3.357 1.937v-3.87L0 12.024z">
            </path>
            <path fill="#FFF" d="M20.677 4.256h-3.664v9.919h1.622v-3.892h2.05c2.216 0 3.44-1.081 3.44-3.054.003-.894-.334-2.973-3.451-2.973h.003zm1.8 3c0 1.118-.58 1.575-2.004 1.575h-1.838V5.72h2.05c1.204 0 1.79.502 1.79 1.536h.001zm6.484-.306l.122.059-.275 1.465-.19-.058a1.61 1.61 0 0 0-.47-.073c-1.519 0-1.642 1.21-1.642 2.672v3.16H25.01v-7.28h1.412v.877a1.941 1.941 0 0 1 1.46-.97c.369-.05.745.001 1.086.15l-.006-.002zm3.706-.204a3.214 3.214 0 0 0-2.744 1.304 4.383 4.383 0 0 0-.736 2.496c0 2.302 1.365 3.79 3.48 3.79 2.569 0 3.48-2.07 3.48-3.842a4.078 4.078 0 0 0-.85-2.605 3.286 3.286 0 0 0-2.63-1.143zm0 6.247c-1.178 0-1.909-.936-1.909-2.443 0-1.524.733-2.472 1.909-2.472 1.168 0 1.922.959 1.922 2.444 0 1.523-.735 2.471-1.922 2.471zm16.129-6.045l.122.058-.275 1.466-.19-.058a1.606 1.606 0 0 0-.468-.073c-1.518 0-1.64 1.21-1.64 2.672v3.16H44.84v-7.28h1.412v.878a1.941 1.941 0 0 1 1.46-.97c.367-.05.741.002 1.081.15l.003-.004zm5.402 4.894l-.028.08a1.602 1.602 0 0 1-1.64 1.081c-1.14 0-1.873-.757-1.942-1.984h5.15l.019-.142c.018-.192.024-.386.017-.58 0-.047-.003-.088-.003-.13-.075-2.04-1.406-3.405-3.307-3.405a3.141 3.141 0 0 0-2.636 1.264 4.334 4.334 0 0 0-.78 2.541c0 2.251 1.398 3.764 3.483 3.764a2.99 2.99 0 0 0 3.126-2.304l.047-.178H54.2l-.002-.007zm-3.56-2.126a1.75 1.75 0 0 1 1.8-1.65 1.714 1.714 0 0 1 1.764 1.65h-3.564zm-8.545-2.212a2.568 2.568 0 0 0-1.936-.757c-2.21 0-3.213 1.942-3.213 3.747 0 1.852.995 3.722 3.213 3.722a2.575 2.575 0 0 0 1.878-.763c-.006.32-.014.627-.023.757-.08 1.2-.66 1.76-1.816 1.76-.63 0-1.351-.222-1.49-.85l-.03-.139h-1.48l.026.198c.156 1.284 1.281 2.081 2.942 2.081 1.454 0 2.49-.549 2.995-1.585.276-.686.4-1.424.365-2.163V6.894H42.1v.61h-.007zm-1.842 5.368c-.526 0-1.75-.239-1.75-2.443 0-1.448.686-2.351 1.79-2.351.852 0 1.763.618 1.763 2.351 0 1.53-.674 2.443-1.803 2.443zm22.472-.888c0 1.159-.96 2.324-3.109 2.324-1.9 0-3.031-.822-3.182-2.315l-.016-.153h1.483l.023.111c.18.898 1.036 1.087 1.721 1.087.753 0 1.555-.242 1.555-.922 0-.343-.223-.588-.666-.725-.262-.077-.582-.167-.925-.265a32.4 32.4 0 0 1-1.568-.462 1.915 1.915 0 0 1-1.454-1.77c0-1.468 1.43-2.125 2.845-2.125 1.892 0 2.875.713 2.998 2.181l.01.15h-1.457l-.02-.114c-.147-.844-.986-.97-1.474-.97-.42 0-1.402.076-1.402.775 0 .318.27.552.83.713.168.048.416.112.7.184.595.153 1.335.346 1.708.474a1.83 1.83 0 0 1 1.401 1.82v.002zm6.953-.003c0 1.159-.961 2.324-3.11 2.324-1.9 0-3.03-.821-3.181-2.315l-.017-.153h1.482l.022.112c.182.897 1.037 1.086 1.722 1.086.752 0 1.555-.242 1.555-.922 0-.343-.223-.588-.666-.724-.262-.078-.585-.167-.925-.265a30.456 30.456 0 0 1-1.563-.463 1.915 1.915 0 0 1-1.454-1.77c0-1.467 1.43-2.125 2.844-2.125 1.892 0 2.876.713 2.998 2.182l.014.15h-1.46l-.019-.114c-.147-.845-.986-.97-1.474-.97-.42 0-1.401.075-1.401.775 0 .317.27.552.83.713.167.047.415.111.703.183.594.153 1.334.346 1.707.474a1.83 1.83 0 0 1 1.393 1.82v.002zm1.191-4.31a1.036 1.036 0 1 1 1.027-1.035 1.018 1.018 0 0 1-1.027 1.036zm0-1.896a.861.861 0 1 0 .838.86.83.83 0 0 0-.838-.86zm-.12 1.053v.345h-.306v-1.09h.51a.363.363 0 0 1 .4.38.32.32 0 0 1-.209.328l.248.378h-.34l-.209-.345h-.095l.001.004zm.17-.487h-.17v.242h.17c.092 0 .142-.044.142-.12 0-.075-.05-.122-.142-.122z">
            </path>
            </g>
            <g fill="#FFF"><text font-family="Metric-Light, Metric" font-size="16.216" font-weight="300" letter-spacing="-.341" transform="translate(16 18)">
            <tspan x="0" y="11">OpenEdge</tspan>
            </text>
            <path fill-rule="nonzero" d="M79.316 21.694a1.036 1.036 0 1 1 1.027-1.036 1.018 1.018 0 0 1-1.027 1.036zm0-1.897a.861.861 0 1 0 .838.86.83.83 0 0 0-.838-.86zm-.12 1.053v.345h-.307v-1.09h.51a.363.363 0 0 1 .401.38.32.32 0 0 1-.21.328l.249.378h-.34l-.21-.345h-.094v.004zm.17-.487h-.17v.242h.17c.091 0 .142-.044.142-.12 0-.075-.05-.122-.143-.122z">
            </path>
            </g>
            </g>
            </svg>
            <p class="-fs13 -c-white -full">Highest performing, agile, secure and scalable platform for
            mission-critical apps</p>
            <p class="-fs12 -c-custom-blue -mta">Learn More</p>
            </a>
            </div>
            </div>
            </div>
            </div>
            <div class="Diagram-row -l-mb4">
            <div class="Diagram-col Diagram-col--left Diagram-box Diagram-box--transparent -accent-custom-purple -l-mb2">
            <h6 class="-fs20 -c-black -lh100 -pb1 -mb0">Connected <br>
            Data</h6>
            </div>
            <div class="Diagram-col">
            <div class="Diagram-row">
            <div class="Diagram-col -ml0 Diagram-box -accent-custom-purple">
            <div class="Diagram-visible -pa -full">
            <div class="-fs0 -tac">
            <div class="-dib -w7 -h7 -mb2 -mr4 -fs18">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 70 70">
            <g fill="none" fill-rule="evenodd">
            <g stroke="#000" stroke-width="2" transform="translate(12 1)">
            <circle cx="38" cy="29.01" r="1"></circle>
            <path d="M45 12.86c0-3.26-2.19-6.52-6.49-9-8.62-5-22.55-5-31.11 0C3.11 6.34 1 9.6 1 12.86m0 0c0 3.26 2.18 6.52 6.5 9 8.62 5 22.55 5 31.11 0 4.28-2.49 6.41-5.75 6.39-9M1 41.26c0 3.26 2.18 6.52 6.5 9 8.62 5 22.55 5 31.11 0 4.28-2.49 6.41-5.75 6.39-9M1 27.06c0 3.26 2.18 6.52 6.5 9 8.62 5 22.55 5 31.11 0 4.28-2.49 6.41-5.75 6.39-9">
            </path>
            <circle cx="38" cy="43.01" r="1"></circle>
            <circle cx="38" cy="57.01" r="1"></circle>
            <path d="M1 55.14c0 3.26 2.18 6.52 6.5 9 8.62 5 22.55 5 31.11 0 4.28-2.49 6.41-5.75 6.39-9M1 13.02v42.71m44-42.51v42.51M16 12.01h14m-7 7v-14">
            </path>
            </g>
            <path d="M0 0h70v70H0z"></path>
            </g>
            </svg>
            </div>
            <div class="-dib -w7 -h7 -mb2 -mr4 -fs18">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 70 70">
            <g fill="none" fill-rule="evenodd">
            <path d="M0 0h70v70H0z"></path>
            <g stroke="#000" stroke-width="2" transform="translate(2 1)">
            <circle cx="38.01" cy="29.39" r="1"></circle>
            <path d="M45 13c0-3.26-2.19-6.52-6.49-9C29.89-1 16-1 7.39 4 3.11 6.45 1 9.72 1 13m0 0c0 3.26 2.18 6.52 6.5 9 8.62 5 22.55 5 31.11 0 4.28-2.5 6.39-5.76 6.39-9M1 41.38c0 3.26 2.18 6.52 6.5 9 8.62 5 22.55 5 31.11 0 4.28-2.49 6.41-5.75 6.39-9M1 27.18c0 3.26 2.18 6.52 6.5 9 8.62 5 22.55 5 31.11 0 4.28-2.49 6.41-5.75 6.39-9">
            </path>
            <circle cx="38.01" cy="43.43" r="1"></circle>
            <circle cx="38.01" cy="57.46" r="1"></circle>
            <path d="M1 55.25c0 3.26 2.18 6.52 6.5 9 8.62 5 22.55 5 31.11 0 4.28-2.49 6.41-5.75 6.39-9M1 13.14v42.71m44-42.51v42.51M16 12.32h13.93M23 19.28V5.35m28 6.96h16v8a8 8 0 0 1-8 8h0a8 8 0 0 1-8-8v-8zm4-.12v-7m8 7v-7m-4 23.2v3.24a8.68 8.68 0 0 1-8.68 8.68H46">
            </path>
            </g>
            </g>
            </svg>
            </div>
            <div class="-dib -w7 -h7 -mb2 -fs18">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 71 70">
            <g fill="none" fill-rule="evenodd">
            <path d="M.507 0h70v70h-70z"></path>
            <g stroke="#000" stroke-width="2">
            <path d="M17.457 47.2h-2.869c-6.415 0-11.616-5.276-11.616-11.783s5.2-11.78 11.616-11.78c.03 0 .058 0 .087.002.977-11.01 10.097-19.64 21.207-19.64 9.345 0 17.284 6.107 20.15 14.6 7.163.7 12.763 6.819 12.763 14.267 0 7.916-6.328 14.334-14.134 14.334H52.7">
            </path>
            <path d="M41.676 28.335v7.909h7.798"></path>
            <path d="M41.676 28.335H20.882V67.88h28.592V36.244zM40.095 58.428h19.78M56.245 65.732l4.157-7.302-4.157-7.302M29.592 58.428H9.812M13.442 65.732L9.285 58.43l4.157-7.302">
            </path>
            </g>
            </g>
            </svg>
            </div>
            </div>
            <h5 class="-fs20 -mb0 -pl1 -pr1 -tac -lh100 -full">Data Connectivity and Integration / Secure File
            Transfer
            </h5>
            </div>
            <div class="Diagram-hover -df -p2 -z2 -xl-p1">
            <div class="-full -tac" style="display: block !important;">
            <a href="/datadirect-connectors">
            <div class="col-7 -tal -s-mt2 -s-mb4">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 81 35" width="81" height="35" class="-mb1">
            <g fill="none" fill-rule="evenodd">
            <g fill-rule="nonzero">
            <path fill="#5CE500" d="M13.443 11.737a.544.544 0 0 1-.251.432l-3.486 2.006v-7.74l-6.72-3.87L6.472.556a.55.55 0 0 1 .501 0l6.47 3.73v7.45zm-5.23-4.44L3.612 4.646a.568.568 0 0 0-.502 0L0 6.436 4.853 9.23v5.59l3.11-1.791a.562.562 0 0 0 .25-.433v-5.3zM0 12.025l3.357 1.937v-3.87L0 12.024z">
            </path>
            <path fill="#FFF" d="M20.677 4.256h-3.664v9.919h1.622v-3.892h2.05c2.216 0 3.44-1.081 3.44-3.054.003-.894-.334-2.973-3.451-2.973h.003zm1.8 3c0 1.118-.58 1.575-2.004 1.575h-1.838V5.72h2.05c1.204 0 1.79.502 1.79 1.536h.001zm6.484-.306l.122.059-.275 1.465-.19-.058a1.61 1.61 0 0 0-.47-.073c-1.519 0-1.642 1.21-1.642 2.672v3.16H25.01v-7.28h1.412v.877a1.941 1.941 0 0 1 1.46-.97c.369-.05.745.001 1.086.15l-.006-.002zm3.706-.204a3.214 3.214 0 0 0-2.744 1.304 4.383 4.383 0 0 0-.736 2.496c0 2.302 1.365 3.79 3.48 3.79 2.569 0 3.48-2.07 3.48-3.842a4.078 4.078 0 0 0-.85-2.605 3.286 3.286 0 0 0-2.63-1.143zm0 6.247c-1.178 0-1.909-.936-1.909-2.443 0-1.524.733-2.472 1.909-2.472 1.168 0 1.922.959 1.922 2.444 0 1.523-.735 2.471-1.922 2.471zm16.129-6.045l.122.058-.275 1.466-.19-.058a1.606 1.606 0 0 0-.468-.073c-1.518 0-1.64 1.21-1.64 2.672v3.16H44.84v-7.28h1.412v.878a1.941 1.941 0 0 1 1.46-.97c.367-.05.741.002 1.081.15l.003-.004zm5.402 4.894l-.028.08a1.602 1.602 0 0 1-1.64 1.081c-1.14 0-1.873-.757-1.942-1.984h5.15l.019-.142c.018-.192.024-.386.017-.58 0-.047-.003-.088-.003-.13-.075-2.04-1.406-3.405-3.307-3.405a3.141 3.141 0 0 0-2.636 1.264 4.334 4.334 0 0 0-.78 2.541c0 2.251 1.398 3.764 3.483 3.764a2.99 2.99 0 0 0 3.126-2.304l.047-.178H54.2l-.002-.007zm-3.56-2.126a1.75 1.75 0 0 1 1.8-1.65 1.714 1.714 0 0 1 1.764 1.65h-3.564zm-8.545-2.212a2.568 2.568 0 0 0-1.936-.757c-2.21 0-3.213 1.942-3.213 3.747 0 1.852.995 3.722 3.213 3.722a2.575 2.575 0 0 0 1.878-.763c-.006.32-.014.627-.023.757-.08 1.2-.66 1.76-1.816 1.76-.63 0-1.351-.222-1.49-.85l-.03-.139h-1.48l.026.198c.156 1.284 1.281 2.081 2.942 2.081 1.454 0 2.49-.549 2.995-1.585.276-.686.4-1.424.365-2.163V6.894H42.1v.61h-.007zm-1.842 5.368c-.526 0-1.75-.239-1.75-2.443 0-1.448.686-2.351 1.79-2.351.852 0 1.763.618 1.763 2.351 0 1.53-.674 2.443-1.803 2.443zm22.472-.888c0 1.159-.96 2.324-3.109 2.324-1.9 0-3.031-.822-3.182-2.315l-.016-.153h1.483l.023.111c.18.898 1.036 1.087 1.721 1.087.753 0 1.555-.242 1.555-.922 0-.343-.223-.588-.666-.725-.262-.077-.582-.167-.925-.265a32.4 32.4 0 0 1-1.568-.462 1.915 1.915 0 0 1-1.454-1.77c0-1.468 1.43-2.125 2.845-2.125 1.892 0 2.875.713 2.998 2.181l.01.15h-1.457l-.02-.114c-.147-.844-.986-.97-1.474-.97-.42 0-1.402.076-1.402.775 0 .318.27.552.83.713.168.048.416.112.7.184.595.153 1.335.346 1.708.474a1.83 1.83 0 0 1 1.401 1.82v.002zm6.953-.003c0 1.159-.961 2.324-3.11 2.324-1.9 0-3.03-.821-3.181-2.315l-.017-.153h1.482l.022.112c.182.897 1.037 1.086 1.722 1.086.752 0 1.555-.242 1.555-.922 0-.343-.223-.588-.666-.724-.262-.078-.585-.167-.925-.265a30.456 30.456 0 0 1-1.563-.463 1.915 1.915 0 0 1-1.454-1.77c0-1.467 1.43-2.125 2.844-2.125 1.892 0 2.876.713 2.998 2.182l.014.15h-1.46l-.019-.114c-.147-.845-.986-.97-1.474-.97-.42 0-1.401.075-1.401.775 0 .317.27.552.83.713.167.047.415.111.703.183.594.153 1.334.346 1.707.474a1.83 1.83 0 0 1 1.393 1.82v.002zm1.191-4.31a1.036 1.036 0 1 1 1.027-1.035 1.018 1.018 0 0 1-1.027 1.036zm0-1.896a.861.861 0 1 0 .838.86.83.83 0 0 0-.838-.86zm-.12 1.053v.345h-.306v-1.09h.51a.363.363 0 0 1 .4.38.32.32 0 0 1-.209.328l.248.378h-.34l-.209-.345h-.095l.001.004zm.17-.487h-.17v.242h.17c.092 0 .142-.044.142-.12 0-.075-.05-.122-.142-.122z">
            </path>
            </g>
            <g fill="#FFF"><text font-family="Metric-Light, Metric" font-size="16.216" font-weight="300" letter-spacing="-.341" transform="translate(16 18)">
            <tspan x="0" y="11">DataDirect</tspan>
            </text>
            <path fill-rule="nonzero" d="M79.316 21.694a1.036 1.036 0 1 1 1.027-1.036 1.018 1.018 0 0 1-1.027 1.036zm0-1.897a.861.861 0 1 0 .838.86.83.83 0 0 0-.838-.86zm-.12 1.053v.345h-.307v-1.09h.51a.363.363 0 0 1 .401.38.32.32 0 0 1-.21.328l.249.378h-.34l-.21-.345h-.094v.004zm.17-.487h-.17v.242h.17c.091 0 .142-.044.142-.12 0-.075-.05-.122-.143-.122z">
            </path>
            </g>
            </g>
            </svg>
            <p class="-fs13 -c-white">Connect to all data from any cloud or on-premise location; make any data
            accessible via standard SQL or REST
            </p>
            <p class="-fs12 -c-custom-blue -mta">Learn More</p>
            </div>
            </a>
            <a href="/managed-file-transfer" target="_blank">
            <div class="col-7 col--offset-2 -tal -s-mb2">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 72 35" width="72" height="35" class="-mb1">
            <g fill="none" fill-rule="evenodd">
            <g fill-rule="nonzero">
            <path fill="#5CE500" d="M13.443 11.737a.544.544 0 0 1-.251.432l-3.486 2.006v-7.74l-6.72-3.87L6.472.556a.55.55 0 0 1 .501 0l6.47 3.73v7.45zm-5.23-4.44L3.612 4.646a.568.568 0 0 0-.502 0L0 6.436 4.853 9.23v5.59l3.11-1.791a.562.562 0 0 0 .25-.433v-5.3zM0 12.025l3.357 1.937v-3.87L0 12.024z">
            </path>
            <path fill="#FFF" d="M20.677 4.256h-3.664v9.919h1.622v-3.892h2.05c2.216 0 3.44-1.081 3.44-3.054.003-.894-.334-2.973-3.451-2.973h.003zm1.8 3c0 1.118-.58 1.575-2.004 1.575h-1.838V5.72h2.05c1.204 0 1.79.502 1.79 1.536h.001zm6.484-.306l.122.059-.275 1.465-.19-.058a1.61 1.61 0 0 0-.47-.073c-1.519 0-1.642 1.21-1.642 2.672v3.16H25.01v-7.28h1.412v.877a1.941 1.941 0 0 1 1.46-.97c.369-.05.745.001 1.086.15l-.006-.002zm3.706-.204a3.214 3.214 0 0 0-2.744 1.304 4.383 4.383 0 0 0-.736 2.496c0 2.302 1.365 3.79 3.48 3.79 2.569 0 3.48-2.07 3.48-3.842a4.078 4.078 0 0 0-.85-2.605 3.286 3.286 0 0 0-2.63-1.143zm0 6.247c-1.178 0-1.909-.936-1.909-2.443 0-1.524.733-2.472 1.909-2.472 1.168 0 1.922.959 1.922 2.444 0 1.523-.735 2.471-1.922 2.471zm16.129-6.045l.122.058-.275 1.466-.19-.058a1.606 1.606 0 0 0-.468-.073c-1.518 0-1.64 1.21-1.64 2.672v3.16H44.84v-7.28h1.412v.878a1.941 1.941 0 0 1 1.46-.97c.367-.05.741.002 1.081.15l.003-.004zm5.402 4.894l-.028.08a1.602 1.602 0 0 1-1.64 1.081c-1.14 0-1.873-.757-1.942-1.984h5.15l.019-.142c.018-.192.024-.386.017-.58 0-.047-.003-.088-.003-.13-.075-2.04-1.406-3.405-3.307-3.405a3.141 3.141 0 0 0-2.636 1.264 4.334 4.334 0 0 0-.78 2.541c0 2.251 1.398 3.764 3.483 3.764a2.99 2.99 0 0 0 3.126-2.304l.047-.178H54.2l-.002-.007zm-3.56-2.126a1.75 1.75 0 0 1 1.8-1.65 1.714 1.714 0 0 1 1.764 1.65h-3.564zm-8.545-2.212a2.568 2.568 0 0 0-1.936-.757c-2.21 0-3.213 1.942-3.213 3.747 0 1.852.995 3.722 3.213 3.722a2.575 2.575 0 0 0 1.878-.763c-.006.32-.014.627-.023.757-.08 1.2-.66 1.76-1.816 1.76-.63 0-1.351-.222-1.49-.85l-.03-.139h-1.48l.026.198c.156 1.284 1.281 2.081 2.942 2.081 1.454 0 2.49-.549 2.995-1.585.276-.686.4-1.424.365-2.163V6.894H42.1v.61h-.007zm-1.842 5.368c-.526 0-1.75-.239-1.75-2.443 0-1.448.686-2.351 1.79-2.351.852 0 1.763.618 1.763 2.351 0 1.53-.674 2.443-1.803 2.443zm22.472-.888c0 1.159-.96 2.324-3.109 2.324-1.9 0-3.031-.822-3.182-2.315l-.016-.153h1.483l.023.111c.18.898 1.036 1.087 1.721 1.087.753 0 1.555-.242 1.555-.922 0-.343-.223-.588-.666-.725-.262-.077-.582-.167-.925-.265a32.4 32.4 0 0 1-1.568-.462 1.915 1.915 0 0 1-1.454-1.77c0-1.468 1.43-2.125 2.845-2.125 1.892 0 2.875.713 2.998 2.181l.01.15h-1.457l-.02-.114c-.147-.844-.986-.97-1.474-.97-.42 0-1.402.076-1.402.775 0 .318.27.552.83.713.168.048.416.112.7.184.595.153 1.335.346 1.708.474a1.83 1.83 0 0 1 1.401 1.82v.002zm6.953-.003c0 1.159-.961 2.324-3.11 2.324-1.9 0-3.03-.821-3.181-2.315l-.017-.153h1.482l.022.112c.182.897 1.037 1.086 1.722 1.086.752 0 1.555-.242 1.555-.922 0-.343-.223-.588-.666-.724-.262-.078-.585-.167-.925-.265a30.456 30.456 0 0 1-1.563-.463 1.915 1.915 0 0 1-1.454-1.77c0-1.467 1.43-2.125 2.844-2.125 1.892 0 2.876.713 2.998 2.182l.014.15h-1.46l-.019-.114c-.147-.845-.986-.97-1.474-.97-.42 0-1.401.075-1.401.775 0 .317.27.552.83.713.167.047.415.111.703.183.594.153 1.334.346 1.707.474a1.83 1.83 0 0 1 1.393 1.82v.002zm1.191-4.31a1.036 1.036 0 1 1 1.027-1.035 1.018 1.018 0 0 1-1.027 1.036zm0-1.896a.861.861 0 1 0 .838.86.83.83 0 0 0-.838-.86zm-.12 1.053v.345h-.306v-1.09h.51a.363.363 0 0 1 .4.38.32.32 0 0 1-.209.328l.248.378h-.34l-.209-.345h-.095l.001.004zm.17-.487h-.17v.242h.17c.092 0 .142-.044.142-.12 0-.075-.05-.122-.142-.122z">
            </path>
            </g>
            <g fill="#FFF"><text font-family="Metric-Light, Metric" font-size="16.216" font-weight="300" letter-spacing="-.341" transform="translate(16 18)">
            <tspan x="0" y="11">MOVEit</tspan>
            </text>
            <path fill-rule="nonzero" d="M63.316 21.694a1.036 1.036 0 1 1 1.027-1.036 1.018 1.018 0 0 1-1.027 1.036zm0-1.897a.861.861 0 1 0 .838.86.83.83 0 0 0-.838-.86zm-.12 1.053v.345h-.307v-1.09h.51a.363.363 0 0 1 .401.38.32.32 0 0 1-.21.328l.249.378h-.34l-.21-.345h-.094v.004zm.17-.487h-.17v.242h.17c.091 0 .142-.044.142-.12 0-.075-.05-.122-.143-.122z">
            </path>
            </g>
            </g>
            </svg>
            <p class="-fs13 -c-white">Enterprise-grade file transfer for secure movement of your critical
            assets
            </p>
            <p class="-fs12 -c-custom-blue -mta">Learn More</p>
            </div>
            </a>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            </div>
            <div class="Diagram-col Diagram-col--right">
            <div class="Diagram-box -accent-custom-blue2">
            <div class="Diagram-visible -pa -full">
            <div class="-w7 -h7 -mb2 -ma">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 73 70">
            <g fill="none" fill-rule="evenodd">
            <path d="M.507 0h70v70h-70z"></path>
            <g stroke="#000" stroke-width="2">
            <path d="M35.552 50.5v-4.052m0-11.115v-4.051M13.123 46.707h44.855V35.333H13.123zM47.7 41.016H43.96m9.346 0H49.57M57.978 26.696v4.845H13.123V20.167h36.6M47.7 25.85H43.96m9.346 0H49.57M13.123 61.873h44.855V50.499H13.123zM47.7 56.182H43.96m9.346 0H49.57M11.702 41.021H1.986V24.444h10.671">
            </path>
            <path d="M9.234 45.989l2.828-4.966-2.828-4.968M60.349 55.949H71V41.505H57.978"></path>
            <path d="M62.818 60.917L59.99 55.95l2.828-4.967M58.605 9.713c-.714 0-1.406.096-2.065.274l-.458-.805a8.837 8.837 0 0 0-3.585 2.102l.457.804a8.124 8.124 0 0 0-2.064 3.625h-.916a9.154 9.154 0 0 0 0 4.2h.916a8.113 8.113 0 0 0 2.064 3.626l-.457.804a8.826 8.826 0 0 0 3.585 2.102l.458-.804a7.903 7.903 0 0 0 4.13 0l.457.804a8.823 8.823 0 0 0 3.585-2.102l-.458-.804a8.106 8.106 0 0 0 2.065-3.625h.916a9.151 9.151 0 0 0 .243-2.1c0-.724-.084-1.427-.243-2.101h-.916a8.116 8.116 0 0 0-2.065-3.625l.458-.804a8.834 8.834 0 0 0-3.585-2.102l-.458.805a7.903 7.903 0 0 0-2.064-.274z">
            </path>
            <path d="M60.548 17.967c0 .917-.732 1.66-1.636 1.66a1.646 1.646 0 0 1-1.634-1.66c0-.916.731-1.658 1.634-1.658.904 0 1.636.742 1.636 1.658z">
            </path>
            </g>
            </g>
            </svg>
            </div>
            <h5 class="-fs20 -mb0 -pl1 -pr1 -tac -lh100 -full">Management <br>
            and <br>
            Monitoring</h5>
            </div>
            <a href="/network-monitoring" target="_blank" class="Diagram-hover -df -p2 -z2 -xl-p1">
            <div class="-pa -pr2 -s-pr1" style="top: 50%; transform: translateY(-50%);">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 35" width="100" height="35" class="-mb1">
            <g fill="none" fill-rule="evenodd">
            <g fill-rule="nonzero">
            <path fill="#5CE500" d="M13.443 11.737a.544.544 0 0 1-.251.432l-3.486 2.006v-7.74l-6.72-3.87L6.472.556a.55.55 0 0 1 .501 0l6.47 3.73v7.45zm-5.23-4.44L3.612 4.646a.568.568 0 0 0-.502 0L0 6.436 4.853 9.23v5.59l3.11-1.791a.562.562 0 0 0 .25-.433v-5.3zM0 12.025l3.357 1.937v-3.87L0 12.024z">
            </path>
            <path fill="#FFF" d="M20.677 4.256h-3.664v9.919h1.622v-3.892h2.05c2.216 0 3.44-1.081 3.44-3.054.003-.894-.334-2.973-3.451-2.973h.003zm1.8 3c0 1.118-.58 1.575-2.004 1.575h-1.838V5.72h2.05c1.204 0 1.79.502 1.79 1.536h.001zm6.484-.306l.122.059-.275 1.465-.19-.058a1.61 1.61 0 0 0-.47-.073c-1.519 0-1.642 1.21-1.642 2.672v3.16H25.01v-7.28h1.412v.877a1.941 1.941 0 0 1 1.46-.97c.369-.05.745.001 1.086.15l-.006-.002zm3.706-.204a3.214 3.214 0 0 0-2.744 1.304 4.383 4.383 0 0 0-.736 2.496c0 2.302 1.365 3.79 3.48 3.79 2.569 0 3.48-2.07 3.48-3.842a4.078 4.078 0 0 0-.85-2.605 3.286 3.286 0 0 0-2.63-1.143zm0 6.247c-1.178 0-1.909-.936-1.909-2.443 0-1.524.733-2.472 1.909-2.472 1.168 0 1.922.959 1.922 2.444 0 1.523-.735 2.471-1.922 2.471zm16.129-6.045l.122.058-.275 1.466-.19-.058a1.606 1.606 0 0 0-.468-.073c-1.518 0-1.64 1.21-1.64 2.672v3.16H44.84V6.893h1.412v.878a1.941 1.941 0 0 1 1.46-.97c.367-.05.741.002 1.081.15l.003-.004zm5.402 4.894l-.028.08a1.602 1.602 0 0 1-1.64 1.081c-1.14 0-1.873-.757-1.942-1.984h5.15l.019-.142c.018-.192.024-.386.017-.58 0-.047-.003-.088-.003-.13-.075-2.04-1.406-3.405-3.307-3.405a3.141 3.141 0 0 0-2.636 1.264 4.334 4.334 0 0 0-.78 2.541c0 2.251 1.398 3.764 3.483 3.764a2.99 2.99 0 0 0 3.126-2.304l.047-.178H54.2l-.002-.007zm-3.56-2.126a1.75 1.75 0 0 1 1.8-1.65 1.714 1.714 0 0 1 1.764 1.65h-3.564zm-8.545-2.212a2.568 2.568 0 0 0-1.936-.757c-2.21 0-3.213 1.942-3.213 3.747 0 1.852.995 3.722 3.213 3.722a2.575 2.575 0 0 0 1.878-.763c-.006.32-.014.627-.023.757-.08 1.2-.66 1.76-1.816 1.76-.63 0-1.351-.222-1.49-.85l-.03-.139h-1.48l.026.198c.156 1.284 1.281 2.081 2.942 2.081 1.454 0 2.49-.549 2.995-1.585.276-.686.4-1.424.365-2.163V6.894H42.1v.61h-.007zm-1.842 5.368c-.526 0-1.75-.239-1.75-2.443 0-1.448.686-2.351 1.79-2.351.852 0 1.763.618 1.763 2.351 0 1.53-.674 2.443-1.803 2.443zm22.472-.888c0 1.159-.96 2.324-3.109 2.324-1.9 0-3.031-.822-3.182-2.315l-.016-.153h1.483l.023.111c.18.898 1.036 1.087 1.721 1.087.753 0 1.555-.242 1.555-.922 0-.343-.223-.588-.666-.725-.262-.077-.582-.167-.925-.265a32.4 32.4 0 0 1-1.568-.462 1.915 1.915 0 0 1-1.454-1.77c0-1.468 1.43-2.125 2.845-2.125 1.892 0 2.875.713 2.998 2.181l.01.15h-1.457l-.02-.114c-.147-.844-.986-.97-1.474-.97-.42 0-1.402.076-1.402.775 0 .318.27.552.83.713.168.048.416.112.7.184.595.153 1.335.346 1.708.474a1.83 1.83 0 0 1 1.401 1.82v.002zm6.953-.003c0 1.159-.961 2.324-3.11 2.324-1.9 0-3.03-.821-3.181-2.315l-.017-.153h1.482l.022.112c.182.897 1.037 1.086 1.722 1.086.752 0 1.555-.242 1.555-.922 0-.343-.223-.588-.666-.724-.262-.078-.585-.167-.925-.265a30.456 30.456 0 0 1-1.563-.463 1.915 1.915 0 0 1-1.454-1.77c0-1.467 1.43-2.125 2.844-2.125 1.892 0 2.876.713 2.998 2.182l.014.15h-1.46l-.019-.114c-.147-.845-.986-.97-1.474-.97-.42 0-1.401.075-1.401.775 0 .317.27.552.83.713.167.047.415.111.703.183.594.153 1.334.346 1.707.474a1.83 1.83 0 0 1 1.393 1.82v.002zm1.191-4.31a1.036 1.036 0 1 1 1.027-1.035 1.018 1.018 0 0 1-1.027 1.036zm0-1.896a.861.861 0 1 0 .838.86.83.83 0 0 0-.838-.86zm-.12 1.053v.345h-.306v-1.09h.51a.363.363 0 0 1 .4.38.32.32 0 0 1-.209.328l.248.378h-.34l-.209-.345h-.095l.001.004zm.17-.487h-.17v.242h.17c.092 0 .142-.044.142-.12 0-.075-.05-.122-.142-.122z">
            </path>
            </g>
            <g fill="#FFF"><text font-family="Metric-Light, Metric" font-size="16.216" font-weight="300" letter-spacing="-.341" transform="translate(16 18)">
            <tspan x="0" y="11">WhatsUp Gold</tspan>
            </text>
            <path fill-rule="nonzero" d="M70.045 21.694a1.036 1.036 0 1 1 1.027-1.036 1.018 1.018 0 0 1-1.027 1.036zm0-1.897a.861.861 0 1 0 .839.86.83.83 0 0 0-.839-.86zm-.12 1.053v.345h-.306v-1.09h.51a.363.363 0 0 1 .4.38.32.32 0 0 1-.208.328l.248.378h-.34l-.21-.345h-.094v.004zm.17-.487h-.17v.242h.17c.092 0 .142-.044.142-.12 0-.075-.05-.122-.142-.122z">
            </path>
            </g>
            </g>
            </svg>
            <p class="-fs13 -c-white -full">Avoid downtime with network monitoring from the network edge to the cloud
            </p>
            <p class="-fs12 -c-custom-blue -mta">Learn More</p>
            </div>
            </a>
            </div>
            </div>
            </div>
            <div class="Diagram-row Diagram--last -mt4 -l-dn">
            <div class="Diagram-col">
            <div class="-w5 -h5 -mb1 -ma">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 52">
            <g fill="none" fill-rule="evenodd" stroke="#000" stroke-width="2" transform="translate(1 1)">
            <path d="M47.77 50H35.83V38.06h11.94zM29.85 50H17.91V38.06h11.94zM31.342 15.663H16.417V.738h14.925zM11.94 50H0V38.06h11.94zM5.97 38.06v-5.448a3.507 3.507 0 0 1 3.508-3.508H38.29a3.507 3.507 0 0 1 3.5 3.508v5.448m-17.91 0V15.672">
            </path>
            <circle cx="23.881" cy="8.209" r="2.239"></circle>
            <circle cx="41.791" cy="44.03" r="2.239"></circle>
            <circle cx="23.881" cy="44.03" r="2.239"></circle>
            <circle cx="5.97" cy="44.03" r="2.239"></circle>
            </g>
            </svg>
            </div>
            <p class="-fs16 -c-black -mb0 -tac -lh100">Systems of Record</p>
            </div>
            <div class="Diagram-col">
            <div class="-w5 -h5 -mb1 -ma">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50">
            <g fill="none" fill-rule="evenodd" stroke="#000" stroke-width="2">
            <path d="M25.085 0v2.857m0 44.286V50M10.391 4.774l1.68 2.312M38.1 42.914l1.68 2.312M1.309 17.274l2.717.883m42.118 13.686l2.718.883m-47.553 0l2.717-.883m6.365 13.383l1.68-2.312M25.085 5.716v38.57M6.745 19.042l18.64 6.056m22.801-7.602a24.334 24.334 0 0 0-8.827-12.141l-14.16 19.49c-.035.049.012.116.07.097l22.917-7.446z">
            </path>
            <path d="M36.42 9.4a19.195 19.195 0 0 0-11.334-3.684C14.435 5.716 5.8 14.35 5.8 25.001c0 10.65 8.634 19.285 19.285 19.285 10.65 0 19.284-8.635 19.284-19.285 0-2.08-.33-4.083-.94-5.96">
            </path>
            </g>
            </svg>
            </div>
            <p class="-fs16 -c-black -mb0 -tac -lh100">Big Data</p>
            </div>
            <div class="Diagram-col">
            <div class="-w5 -h5 -mb1 -ma">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50">
            <g fill="none" fill-rule="evenodd" stroke="#000" stroke-width="2">
            <path d="M44 16.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0zM49 49V37.763l-5.916-5.916L37 37.931V49z"></path>
            <path d="M40 44.077c1.062 0 1.923.861 1.923 1.923M40 41a5 5 0 0 1 5 5M7.227 20.059a6.227 6.227 0 0 1-.604-12.423A9.387 9.387 0 0 1 15.5 1.294c4.894 0 8.913 3.748 9.343 8.53h.039a5.117 5.117 0 0 1 0 10.235h-2.446">
            </path>
            <path d="M15 15v12a1 1 0 0 0 1 1h14.757a3 3 0 0 1 2.122.879l6.586 6.586"></path>
            <path d="M19 10v13a1 1 0 0 0 1 1h9.757a3 3 0 0 0 2.122-.879l4.871-4.871M11 20v11.847M47 22h-8a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v17a2 2 0 0 1-2 2zM17.566 46c0 1.66 1.34 3 3 3s3-1.34 3-3m-19 0a3 3 0 1 0 6 0 3 3 0 0 0-6 0z">
            </path>
            <path d="M10.566 46h7m-13 0h-1.5a2 2 0 0 1-2-2V34a2 2 0 0 1 2-2h13.887c.771 0 1.474.444 1.806 1.141l2.077 4.369c4.18.128 7.61 3.288 8.155 7.355.08.6-.395 1.135-1 1.135h-4.425m-6 0c0-1.66 1.34-3 3-3s3 1.34 3 3M12 20a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4-5a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4-5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z">
            </path>
            </g>
            </svg>
            </div>
            <p class="-fs16 -c-black -mb0 -tac -lh100">Internet of Things</p>
            </div>
            <div class="Diagram-col">
            <div class="-w5 -h5 -mb1 -ma">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 50 50">
            <defs>
            <path id="a" d="M0 50h50V0H0z"></path>
            </defs>
            <g fill="none" fill-rule="evenodd">
            <path stroke="#000" stroke-width="2" d="M1 14v32.5A2.5 2.5 0 0 0 3.5 49H31V17H3.5a2.5 2.5 0 1 1 0-5H19">
            </path>
            <mask id="b" fill="#fff">
            <use xlink:href="#a"></use>
            </mask>
            <path stroke="#000" stroke-width="2" mask="url(#b)" d="M9 32h14v-5H9zM24 12h9m-9-5h9m-2 10h12m-12 5h12m-12 5h12m-12 5h12M31 38h18V12L38 1H19v16"></path>
            <path stroke="#000" stroke-width="2" mask="url(#b)" d="M38 1v11h11"></path>
            </g>
            </svg>
            </div>
            <p class="-fs16 -c-black -mb0 -tac -lh100">Files and Reports/</p>
            </div>
            </div>
            </div>

            </div>
    </body>
</html>
