        <nav class="rk-navigation">
            <ul class="rk-menu">
                <li class="active rk-menu__item"><a href="/index" class="rk-menu__link">@lang('verimake.home')</a>
                </li>
                <li class="rk-menu__item"><a href="/portfolio" class="rk-menu__link">@lang('verimake.portfolio')</a>
                    <nav class="rk-menu__sub">
                        <ul class="rk-container">
                            <li class="rk-menu__item"><a href="portfolio.html" class="rk-menu__link">Flex</a></li>
                            <li class="rk-menu__item"><a href="portfolio-alt.html" class="rk-menu__link">Switch</a></li>
                            <li class="rk-menu__item"><a href="portfolio-raw.html" class="rk-menu__link">Static</a></li>
                            <li class="rk-menu__item"><a href="portfolio-masonry.html" class="rk-menu__link">Masonry</a></li>
                        </ul>
                    </nav>
                </li>
                <li class="rk-menu__item"><a href="/blog" class="rk-menu__link">@lang('verimake.blog')</a>
                </li>
                <li class="rk-menu__item"><a href="#0" class="rk-menu__link">@lang('verimake.pages')</a>
                    <nav class="rk-menu__sub">
                        <ul class="rk-container">
                            <li class="rk-menu__item"><a href="about.html" class="rk-menu__link">About</a></li>
                            <li class="rk-menu__item"><a href="documentation.html" class="rk-menu__link">Documentation</a></li>
                            <li class="rk-menu__item"><a href="design-styles.html" class="rk-menu__link">Design Styles</a></li>
                        </ul>
                    </nav>
                </li>
                <li class="rk-menu__item"><a href="contact" class="rk-menu__link">@lang('verimake.contactus')</a>
                </li>
            </ul>
            <form class="rk-search">
                <input type="text" placeholder="Search" id="urku-search" class="rk-search-field">
                <label for="urku-search">
                    <svg>
                        <use xlink:href="assets/img/symbols.svg#icon-search"></use>
                    </svg>
                </label>
            </form>
        </nav>