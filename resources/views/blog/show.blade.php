@extends('layout.app')

@section('content')

    <section class="ae-container-fluid ae-container-fluid--full">
      {{--  <header class="rk-portfolio-cover  post-inside-1">  --}}
        <div class="item-inside__meta">
          <h1 class="ae-u-bolder rk-portfolio-title ">{{ $blog->title }}</h1>
          <p class="ae-theta rk-portfolio-category ">by <span class="ae-u-bolder">Pixeden</span></p>
          <p class="ae-kappa ae-u-bold rk-portfolio-inner-date ">{{ $blog->created_at->toFormattedDateString() }}</p>
        </div>
      {{--  </header>  --}}
      {{--  <div class="ae-container-fluid">
        <div class="ae-grid ae-grid--collapse rk-portfolio-info ">  --}}
          {{--  <div class="ae-grid__item item-lg-8 item-sm--center au-xs-ta-center au-lg-ta-left">
            <h2 class="rk-portfolio-inner-title ">{{ $blog->title }}</h2>
          </div>  --}}
          {{--  <div class="ae-grid__item item-lg-4 au-xs-ta-center au-lg-ta-right rk-portfolio-details" style="text-align: center">  --}}
            {{--  <p class="rk-portfolio-inner-client "><span class="ae-lambda">Client: </span><span class="ae-u-bolder">Agency Design Studio</span></p>  --}}
            {{--  <p class="au-underline rk-portfolio-inner-website "><a href="#0" class="ae-kappa">www.agencydesign.com</a></p>  --}}
            {{--  <p class="ae-kappa ae-u-bold rk-portfolio-inner-date ">12 August, 2015</p>  --}}
          {{--  </div>  --}}
        {{--  </div>
      </div>  --}}
      {{--  <div class="ae-container-fluid ae-container-fluid--inner rk-portfolio--inner">  --}}
         {{--  <div class="ae-grid ae-grid--collapse au-xs-ptp-1">
          <div class="ae-grid__item item-lg-5 au-lg-ptp-1">
            <p class="ae-u-bolder">Left Box Text</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>  --}}
          {{--  <div class="ae-grid__item item-lg-6 item-lg--offset-1"><img src="/assets/img/post-inner-1.jpg" alt="Urku Portfolio"></div>  --}}
        {{--  </div>   --}}
        {{--  <div class="ae-grid ae-grid--collapse">
          <div class="ae-grid__item item-lg--auto"><img src="/assets/img/post-inner-3.jpg" alt="Urku Portfolio"></div>
        </div>
          {{--  <div class="ae-grid ae-grid--collapse au-xs-ptp-1 au-xs-pbp-1">
          <div class="ae-grid__item item-lg-8 item-lg--offset-2">
            <h4 class="ae-u-bolder">Full Wide Text</h4>
            <p class="ae-eta">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>
            <p>totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea co</p>
          </div>
        </div>    --}}
        {{--  <div class="ae-grid ae-grid--collapse">
          <div class="ae-grid__item item-lg-6"><img src="/assets/img/post-inner-2.jpg" alt="Urku Portfolio"></div>
          <div class="ae-grid__item item-lg-5 item-lg--offset-1 au-lg-ptp-1">
            <p class="ae-u-bolder">Right Box Text</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
        </div>
        <div class="ae-grid ae-grid--alt au-lg-ta-left au-xs-ptp-1">
          <div class="ae-grid__item--alt item-lg-4"><span class="ae-u-boldest">1.</span>
            <p>Suspendisse ultricies tellus eget nisl molestie, quis sagittis mauris placerat.</p><span class="ae-u-boldest">2.</span>
            <p>Pellentesque et nulla pulvinar, bibendum quam ac, cursus turpis.</p>
          </div>
          <div class="ae-grid__item--alt item-lg-4"><span class="ae-u-boldest">3.</span>
            <p>Sed quam odio, blandit sit amet dapibus id, aliquet sollicitudin enim. </p><span class="ae-u-boldest">4.</span>
            <p>Morbi hendrerit laoreet lectus a fringilla.</p>
          </div>
          <div class="ae-grid__item--alt item-lg-4"><span class="ae-u-boldest">5.</span>
            <p>Sed quam odio, blandit sit amet dapibus id, aliquet sollicitudin enim. </p><span class="ae-u-boldest">6.</span>
            <p>Morbi hendrerit laoreet lectus a fringilla.</p>
          </div>
        </div>  --}}
        <div class="ae-grid ae-grid--collapse au-xs-ptp-1">
          <div class="ae-grid__item item-lg-8 item-lg--offset-2">
            {{--  <h4 class="ae-u-bolder">Full Wide Text</h4>  --}}
            {{--  <p class="ae-eta">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium.</p>  --}}
             {!! $blog->content !!}
          </div>
        </div>
        {{--  <div class="ae-grid ae-grid--collapse inner-box-3">
          <div class="ae-grid__item item-lg-10 item-lg--offset-1">
            <blockquote class="au-xs-ta-center">
              <p class="ae-delta au-italic">“Love is the answer, and you know that for sure. Love is a flower, you've got to let it grow.”</p>
              <footer> 
                <p class="ae-theta">By <span class="ae-u-bolder">John Lenon</span></p>
              </footer>
            </blockquote>
          </div>
        </div>
        <div class="ae-grid ae-grid--collapse au-xs-ptp-1">
          <div class="ae-grid__item item-lg-8 item-lg--offset-2">
            <p>Totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet.</p>
          </div>  
        </div> --}}
        {{--  <div class="ae-grid ae-grid--collapse au-xs-ptp-1">
          <div class="ae-grid__item item-lg-12 au-xs-ta-center">
            <p class="ae-theta">Written by <span class="ae-u-bolder">Pixeden</span></p>
            <p class="ae-theta">in <span class="ae-u-bolder">Photography </span></p>
          </div>
        </div>  --}}
        {{--  <div class="ae-grid ae-grid--collapse au-xs-ptp-1">
          <div class="ae-grid__item item-lg-12"></div>
        </div>  --}}
      {{--  </div>  --}}
    </section>
    {{--  <ul class="ae-container-fluid ae-container-fluid--inner rk-comments">
      <h3 class="rk-comments__title ae-u-bolder">3 Comments</h3>
      <li>
        <article class="rk-comment">
          <aside class="rk-comment__avatar"><img src="/assets/img/user-1.jpg" alt="" class="rk-comment__avatar au-circle"></aside>
          <div class="rk-comment__content">
            <header class="rk-comment__header">
              <h5 class="rk-comment__author ae-u-bolder"><a href="#0">Michael Smith</a><small class="ae-u-regular">&nbsp; (Author)</small></h5>
              <div class="rk-comment__meta">
                <p class="ae-kappa">&nbsp; at <a href="#0">14:30 pm </a><a href="#0">July 4, 2015</a></p>
              </div>
            </header>
            <div class="rk-comment__body">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
            </div>
            <div class="rk-comment__actions ae-kappa"><a href="#0" class="ae-u-bold arrow-button arrow-button--compress">Reply
                <svg>
                  <use xlink:href="assets/img/symbols.svg#refresh"></use>
                </svg></a></div>
          </div>
        </article>
        <ul>
          <li>
            <article class="rk-comment">
              <aside class="rk-comment__avatar"><img src="/assets/img/user-2.jpg" alt="" class="rk-comment__avatar au-circle"></aside>
              <div class="rk-comment__content">
                <header class="rk-comment__header">
                  <h5 class="rk-comment__author ae-u-bolder"><a href="#0">Anna Watson</a></h5>
                  <div class="rk-comment__meta">
                    <p class="ae-kappa">&nbsp; at <a href="#0">14:30 pm </a><a href="#0">July 4, 2015</a></p>
                  </div>
                </header>
                <div class="rk-comment__body">
                  <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                </div>
                <div class="rk-comment__actions ae-kappa"><a href="#0" class="ae-u-bold arrow-button arrow-button--compress">Reply
                    <svg>
                      <use xlink:href="/assets/img/symbols.svg#refresh"></use>
                    </svg></a></div>
              </div>
            </article>
          </li>
        </ul>
      </li>
      <li>
        <article class="rk-comment">
          <aside class="rk-comment__avatar"><img src="/assets/img/user-3.jpg" alt="" class="rk-comment__avatar au-circle"></aside>
          <div class="rk-comment__content">
            <header class="rk-comment__header">
              <h5 class="rk-comment__author ae-u-bolder"><a href="#0">Arthur Hawk</a></h5>
              <div class="rk-comment__meta">
                <p class="ae-kappa">&nbsp; at <a href="#0">14:30 pm </a><a href="#0">July 4, 2015</a></p>
              </div>
            </header>
            <div class="rk-comment__body">
              <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci veli.</p>
            </div>
            <div class="rk-comment__actions ae-kappa"><a href="#0" class="ae-u-bold arrow-button arrow-button--compress">Reply
                <svg>
                  <use xlink:href="/assets/img/symbols.svg#refresh"></use>
                </svg></a></div>
          </div>
        </article>
      </li>
      <div class="ae-grid ae-grid--collapse inner-box-3">
        <div class="ae-grid__item item-lg-8 item-lg--offset-2">
          <form action="#0" class="ae-form--full">
            <textarea placeholder="Leave your comment here ..." cols="30" rows="7"></textarea>
            <input type="text" placeholder="* Name" required>
            <input type="email" placeholder="* Email" required>
            <input type="text" placeholder="Website">
            <div class="au-pt-3 group-buttons"><a href="#0" class="au-mt-2 arrow-button arrow-button--right arrow-button--out">Post Comment<span class="arrow-cont">
                  <svg>
                    <use xlink:href="/assets/img/symbols.svg#arrow"></use>
                  </svg></span></a></div>
          </form>
        </div>
      </div>
    </ul>  --}}

    {{--  <section class="ae-container-fluid au-pt-4 au-pb-4">
      <div class="group-buttons au-mt-2"><a href="#0" class="arrow-button arrow-button--reverse">Prev Post
          <div class="arrow-cont arrow-cont-rev">
            <svg>
              <use xlink:href="/assets/img/symbols.svg#arrow"></use>
            </svg>
          </div></a><a href="#0" class="arrow-button">Next Post<span class="arrow-cont">
            <svg>
              <use xlink:href="/assets/img/symbols.svg#arrow"></use>
            </svg></span></a></div>
    </section>  --}}

@endsection