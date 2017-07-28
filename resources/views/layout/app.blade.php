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