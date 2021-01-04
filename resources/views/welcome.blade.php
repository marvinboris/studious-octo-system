@extends('layouts.app')

@section('content')
    <div class="vh-100">
        <div id="home-page-banner-carousel" class="carousel slide carousel-fade h-100" data-ride="carousel">
            <ol class="carousel-indicators" style="z-index: 1001;">
                <li data-target="#home-page-banner-carousel" data-slide-to="0" class="carousel-indicator active"></li>
                <li data-target="#home-page-banner-carousel" data-slide-to="1" class="carousel-indicator"></li>
                <li data-target="#home-page-banner-carousel" data-slide-to="2" class="carousel-indicator"></li>
                <div class="bg-transparent circle-carousel-indicator rounded-circle border border-thick border-yellow position-absolute d-none" style="width: 26px; height: 26px; transform: translateX(-50%);"></div>
            </ol>
            <div class="carousel-inner h-100 position-relative">
                <div class="carousel-item h-100 active">
                </div>
                <div class="carousel-item h-100">
                </div>
                <div class="carousel-item h-100">
                </div>
                <div class="w-75 h-100 py-5 d-flex align-items-center position-absolute text-white" style="left: 12.5%; top: 0; z-index: 1000;">
                    <div class="">
                        <div class="d-flex">
                            <div class="position-relative rectangle group pr-4" style="top: 20px;">
                                <div class="bg-yellow position-relative rectangle yellow" style="width: 20px; height: 420px;"></div>
                                <div class="bg-blue position-absolute rectangle blue" style="width: 66px; height: 39px; top: 66px; left: -46px;"></div>
                            </div>
                            <div class="flex-fill">
                                <div class="position-relative text block">
                                    <div class="d-inline-flex text-allexist border-bottom border-mywhite-50 mb-3 align-items-center">
                                        <div class="text-50 title white">We design &</div>
                                        <div class="text-70 text-yellow title yellow pl-5">Develop</div>
                                    </div>
                                    <div class="mb-5 text content text-30">
                                        We are a software design company<br>
                                        We do all our tasks to get your<br>
                                        job done !
                                    </div>
                                    <div>
                                        <a href="#" class="btn btn-yellow py-3 px-4 font-weight-bold text-montserrat-alt mr-4">Try Today</a>
                                        <a href="#" class="btn btn-blue py-3 px-4 font-weight-bold text-montserrat-alt">Get a quote</a>
                                    </div>
                                </div>
                                <img src="{{ url('/images/Groupe 7@2x.png') }}" alt="Phone & laptop" class="position-absolute" style="right: 0; top: 50%; transform: translateY(-50%); width: 35%;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(function() {
            const activeCarouselIndicator = $('.carousel-indicator.active');
            const { top, left } = activeCarouselIndicator.position();
            $('.circle-carousel-indicator').css({ top: top + 4, left: left + 14 }).removeClass('d-none');

            const homePageBannerCarousel = $('#home-page-banner-carousel');
            const homePageBannerCarouselData = [
                {
                    title: {
                        white: 'We design &',
                        yellow: 'Develop'
                    },
                    text: `
                    We are a software design company<br>
                    We do all our tasks to get your<br>
                    job done !
                    `,
                    block: {
                        top: 0,
                        left: 0
                    },
                    group: {
                        top: 20,
                        left: 0,
                    },
                    blue: {
                        top: 66
                    },
                    yellow: {
                        top: 0,
                        height: 420
                    }
                },
                {
                    title: {
                        white: 'A software dev',
                        yellow: 'Company'
                    },
                    text: `
                    One of our biggest qualification is<br>
                    based on our satisfying products.<br>
                    Get started with us today
                    `,
                    block: {
                        top: 26,
                        left: 0
                    },
                    group: {
                        top: 20,
                        left: 0,
                    },
                    blue: {
                        top: 121
                    },
                    yellow: {
                        top: 0,
                        height: 320.9
                    }
                },
                {
                    title: {
                        white: 'Get the best',
                        yellow: 'Service'
                    },
                    text: `
                    You want a free trial from us ? OK !<br>
                    Send your requirements today<br>
                    and get a discounted quotation.
                    `,
                    block: {
                        top: 0,
                        left: -17
                    },
                    group: {
                        top: -13,
                        left: -17,
                    },
                    blue: {
                        top: 66
                    },
                    yellow: {
                        top: 0,
                        height: 371.45
                    }
                }
            ];

            homePageBannerCarousel.on('slide.bs.carousel', function () {
                setTimeout(() => {
                    const activeCarouselIndicator = $('.carousel-indicator.active');
                    const { top, left } = activeCarouselIndicator.position();
                    $('.circle-carousel-indicator').animate({ top: top + 4, left: left + 14 }, 'fast');

                    const activeCarouselIndicatorIndex = +activeCarouselIndicator.attr('data-slide-to');
                    const { block, blue, group, text, title, yellow } = homePageBannerCarouselData[activeCarouselIndicatorIndex];
                    
                    homePageBannerCarousel.find('.rectangle.group').stop().animate({ top: group.top, left: group.left }, 'slow');
                    homePageBannerCarousel.find('.rectangle.yellow').stop().animate({ top: yellow.top, height: yellow.height }, 'slow');
                    homePageBannerCarousel.find('.rectangle.blue').stop().animate({ top: blue.top }, 'slow');
                    homePageBannerCarousel.find('.text.block').stop().animate({ top: block.top, left: block.left }, 'slow');
                    homePageBannerCarousel.find('.title.white').html(title.white);
                    homePageBannerCarousel.find('.title.yellow').html(title.yellow);
                    homePageBannerCarousel.find('.text.content').html(text);
                }, 1);
            });
        });
    </script>
@endsection