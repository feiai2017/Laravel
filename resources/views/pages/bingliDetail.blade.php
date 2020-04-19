
<div class="pages">
    <div data-page="blogsingle" class="page no-toolbar no-navbar">
        <div class="page-content">

            <div class="navbarpages">
                <div class="navbar_left">
                    <div class="logo_text"><a href="index.html"><span>up</span>mobile</a></div>
                </div>
                <a href="#" data-panel="left" class="open-panel">
                    <div class="navbar_right"><img src="images/icons/green/menu.png" alt="" title="" /></div>
                </a>
            </div>

            <div id="pages_maincontent">

                <a href="blog.html" class="backto"><img src="images/icons/green/back.png" alt="" title="" /></a>
                <h2 class="blog_title">{{ $bingliDetail->name }}</h2>

                <!-- Slider -->
                <div class="swiper-container-pages swiper-init" data-effect="slide" data-pagination=".swiper-pagination">
                    <div class="swiper-wrapper">

                        @foreach(json_decode($bingliDetail->image, true) as $image)
                            <div class="swiper-slide">
                                <img src="{{ voyager::image($image) }}" alt="" title="" />
                            </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                <div class="page_single layout_fullwidth_padding">
                    <div class="post_single">
                        <p>
                            {{ $bingliDetail->content }}
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>
