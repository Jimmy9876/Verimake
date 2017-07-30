<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>@yield('title', config('verimake.name'))</title>
    <link rel="icon" type="image/svg+xml" href="/assets/img/urku-ico.svg">
    <link rel="stylesheet" href="/assets/css/aurora-pack.min.css">
    <link rel="stylesheet" href="/assets/css/aurora-theme-base.min.css">
    <link rel="stylesheet" href="/assets/css/urku.css">
    <link rel="stylesheet" href="/highlight/styles/default.css">
    {{--  <link rel="stylesheet" href="/css/bootstrap.min.css">  --}}
    <link rel="stylesheet" href="/font-awesome/css/font-awesome.min.css">
    {{--  自定分页样式  --}}
    <style>
    .pagination ul li{
        float: left;
        list-style-type:none;
        padding-left: 5px;
        padding-right: 5px;
    }
    .pagination{
        position: relative; 
    }
    .pagination ul{
        display: block;
        width: 200px;
        margin: 0 auto;
        position: relative;
    }
    .pagination .active{
        background-color: #CDCDCD;
        border-radius: 50px;
    }
    .blog-info .blog-info__title{
        font-size: 25px;
    }
    .blog-info__author{
        font-size: 18px;
    }
    .rk-portfolio-title{
        font-size: 25px;
    }
    .rk-portfolio-category{
        font-size: 18px;
    }
    .ae-grid__item p{
        font-size: 16px;
    }
     .ae-grid__item blockquote {
	    border-left: 5px solid #EEEEEE; 
        margin-left: 5px;
        margin-right: 5px;
        font-style: italic;
        padding-left: 15px;
    }
    .ae-grid__item blockquote p:before {
	    content: '"'; 
    }
    .ae-grid__item blockquote p:after {
	    content: '"'; 
    } 
    a.weixin {
        position: relative;
    } 
    .weixin img {
        position: absolute;
        z-index: 99;
        top: -135px;
        right: -50px;
        width: 7.5rem;
        max-width: none;
        height: 7.5rem;
        transform: scale(0);
        transform-origin: bottom;
        opacity: 0;
        border: .3125rem solid #A9B9B8; 
        border-radius: .25rem;
        -webkit-transition: all .4s ease-in-out;
        -o-transition: all .4s ease-in-out;
        transition: all .4s ease-in-out;
    }
    .weixin:hover img {
        transform: scale(1);
        opacity: 1;
    }
    .ae-grid__item p {
        font-size: 12px; 
    }
    .rk-footer__text span{
        font-size: 12px;
    }
    .fa-lg{
        font-size: 0.875em;
    }
    body
    {
        font-family: Georgia, "Times New Roman", 
             "Microsoft YaHei", "微软雅黑", 
             STXihei, "华文细黑", 
             serif;
    }
    @media screen and (max-width: 500px) {
        html {font-size: 17px;}
        i{
            color: #787878;
        }
        .rk-dark-color{
            color: #787878;
        }
        .rk-footer-menu{
            color: #787878;
        }
        .fa-lg{
            font-size: 10px;
        }
        .rk-footer__text span{
            font-size: 10px;
        } 
        .ae-grid__item p{
            font-size: 10px;
        }
    }   
    </style>
</head>
<body class="top-fixed">
 <header class="ae-container-fluid ae-container-fluid--full rk-header ">
    <input type="checkbox" id="mobile-menu" class="rk-mobile-menu">
      <label for="mobile-menu">
         <svg>
            <use xlink:href="/assets/img/symbols.svg#bar"></use>
        </svg>
        <svg>
            <use xlink:href="/assets/img/symbols.svg#bar"></use>
        </svg>
         <svg>
            <use xlink:href="/assets/img/symbols.svg#bar"></use>
        </svg>  
    </label>  
    <div class="ae-container-fluid rk-topbar">
         <h1 class="rk-logo"><a href="index">@yield('title', config('verimake.name'))<sup>©</sup></a></h1> 

        @include('layout.navbar')
        
    </div>
</header> 
<section class="ae-container-fluid rk-main">
    <input type="radio" name="layout-ctrl" checked id="layout-base" class="layout-ctrl-input">
    <div class="ae-container-fluid rk-layout-ctrl-cont">
        <label for="layout-base" class="rk-layout-ctrl">
            <svg>
                <use xlink:href="/assets/img/symbols.svg#icon-view-default"></use>
            </svg>
        </label>
    </div>
    <input type="radio" name="layout-ctrl" id="layout-grid" class="layout-ctrl-input">
    <div class="ae-container-fluid rk-layout-ctrl-cont">
        <label for="layout-grid" class="rk-layout-ctrl">
            <svg>
                <use xlink:href="/assets/img/symbols.svg#icon-view-alt"></use>
            </svg>
        </label>
    </div>
      <div class="rk-layout-ctrl-mobile">
        <svg viewBox="0 0 9 9" class="layout-mob-1">
            <rect width="100%" height="100%" fill="currentColor"></rect>
        </svg>
        <svg viewBox="0 0 9 9" class="layout-mob-2">
            <rect width="100%" height="100%" fill="currentColor"></rect>
        </svg>
        <svg viewBox="0 0 9 9" class="layout-mob-3">
            <rect width="100%" height="100%" fill="currentColor"></rect>
        </svg>
        <svg viewBox="0 0 9 9" class="layout-mob-4">
            <rect width="100%" height="100%" fill="currentColor"></rect>
        </svg> 
    </div>  

@yield('content')

</section>

@include('layout.footer')

{{--  <script src="/js/bootstrap.min.js"></script>  --}}
<script src="/highlight/highlight.pack.js"></script>
<script>hljs.initHighlightingOnLoad();</script>
<script src="/assets/js/svg4everybody.min.js"></script>
<script>svg4everybody();</script>
</body>
</html>