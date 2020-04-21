<div class="pages">
    <div data-page="features" class="page no-navbar">
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

                <h2 class="page_title">SMART FEATURES</h2>

                <div class="page_single layout_fullwidth_padding toolbarpage">

                    <ul class="features_list_detailed">
                        @foreach($bingliSmalls as $bingliSmall)
                            <li class="bg{{ $loop->iteration % 6 }}" style="margin-top: 5px;">
                                <div class="feat_small_icon"><img src="{{ voyager::image($bingliSmall->image) }}" alt="" title="" /></div>
                                <div class="feat_small_details">
                                    <h4><a href="bingliList/{{ $bingliSmall->id }}">{{ $bingliSmall->name }}</a></h4>
                                    <a href="bingliList/{{ $bingliSmall->id }}">{{ $bingliSmall->description }}</a>
                                </div>
                            </li>
                        @endforeach

                    </ul>
                </div>


            </div>


        </div>
    </div>
</div>
