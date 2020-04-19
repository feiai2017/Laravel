<div class="pages">
    <div data-page="toggle" class="page no-toolbar no-navbar">
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

                <h2 class="page_title" >病理搜索<span style="float:right"><input style="outline-style: none ;border: 1px solid #ccc; border-radius: 3px; padding: 4px 4px;font-size: 14px;font-family: 'Microsoft soft';width: 75%" placeholder="输入病理"><i class="icon icon-plus" ><span id="bingli-plus"><img src="https://img.icons8.com/ios-filled/50/000000/search.png"/></span></i></span></h2>

                <div class="page_single layout_fullwidth_padding">

                    <div class="buttons-row">
                        @foreach ($bingliBigs as $bingliBig)
                            @if ($loop->first)
                                <a href="#tab1" class="tab-link active button">{{ $bingliBig->name }}</a>
                                @continue
                            @endif
                                <a href="#tab{{ $loop->iteration }}" class="tab-link button">{{ $bingliBig->name }}</a>
                        @endforeach
                    </div>

                    <div class="tabs-animated-wrap">
                        <div class="tabs">
                            @foreach ($bingliBigs as $bingliBig)
                                @if ($loop->iteration == 1)
                                    <div id="tab{{ $loop->iteration }}" class="tab active">
                                @else
                                    <div id="tab{{ $loop->iteration }}" class="tab">
                                @endif
                                        @foreach($bingliMids as $bingliMi)
                                            @if($bingliMi->father_type_num == $bingliBig->type_num)
                                                <a href="/binglier/{{ $bingliMi->type_num }}"><div class="item_price" style="float: left;margin: 4px 4px 4px 0px;width: 18%;font-size: 14px">{{ $bingliMi->name }}</div></a>
                                            @endif
                                        @endforeach
                                        <p style="margin-top: 100px">{{ $bingliBig->discription }}</p>
                                    </div>
                            @endforeach

                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
