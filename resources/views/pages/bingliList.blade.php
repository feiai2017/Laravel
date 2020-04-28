<div class="pages">
    <div data-page="blog" class="page no-toolbar no-navbar">
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

                <h2 class="page_title">JOURNAL</h2>
                <div class="page_single layout_fullwidth_padding">


                    <div class="posts">
                        @foreach($bingliList as $binglione)
                            <div class="post_entry">
                                @if($loop->iteration % 2 ==1)
                                    <div class="post_thumb">
                                        <a href="bingliDetail/{{ $binglione->id }}"><img src="{{ voyager::image($binglione->image_description) }}" alt="" title="" style="max-height: 500px"/></a>
                                        <div class="post_thumb_details">
                                            <a href="post_thumb_details" class="open-popup" data-popup=".popup-social"></a>
                                        </div>
                                    </div>
                                    <div class="post_details" style="margin-top: 5px;">
                                        <h2><a href="bingliDetail/{{ $binglione->id }}">{{ $binglione->name }}</a></h2>
                                        <p style="max-height: 120px;overflow: hidden">{{ $binglione->description }}</p>
                                    </div>
                                @else
                                    <div class="post_details" style="margin-top: 5px;">
                                        <h2><a href="bingliDetail/{{ $binglione->id }}">{{ $binglione->name }}</a></h2>
                                        <p style="max-height: 120px;overflow: hidden">{{ $binglione->description }}</p>
                                    </div>
                                    <div class="post_thumb">
                                        <a href="bingliDetail/{{ $binglione->id }}"><img src="{{ voyager::image($binglione->image_description) }}" alt="" title="" /></a>
                                        <div class="post_thumb_details">
                                            <a href="bingliDetail/{{ $binglione->id }}" class="open-popup" data-popup=".popup-social"></a>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
