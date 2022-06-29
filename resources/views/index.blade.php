@extends('layout.app')
@section('title', 'Protected Головна')
@section('content')
    <section class="about_us">
        <div class="container-general-info">
            <div class="about_us_desktop">
                <div class="row">
                    <div class=" col-md-6">
                        <div class="about_us_text_and_button">
                            <h1>Сервіс <span class="gold">антивірусного</span><br> захисту</h1>

                            <p class="about_us_text">Наш сервіс дозволяє придбати ліцензію на антивірус, що найбільше
                                підходить для
                                Ваших потреб та цілей. Антивірус Protected це один з найбільш поширених та безпечних
                                антивірусів на
                                ринку.</p>
                            <div class="about_us_button">
                                <a href="./plans/1">
                                    Обрати план
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class=" col-md-6">
                        <!--            <div class="photo">-->
                        <img class="photo_earth" src="/img/main_image/earth_telegram.png" alt="">
                        <!--            </div>-->
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <a href="#" class="scroll-down" id="scroll_down" address="true">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                 class="bi bi-arrow-down-short" viewBox="0 0 16 16">
                                <path fill-rule="evenodd"
                                      d="M8 4a.5.5 0 0 1 .5.5v5.793l2.146-2.147a.5.5 0 0 1 .708.708l-3 3a.5.5 0 0 1-.708 0l-3-3a.5.5 0 1 1 .708-.708L7.5 10.293V4.5A.5.5 0 0 1 8 4z"/>
                            </svg>
                            <i class="bi bi-arrow-down-short"></i>
                        </a>
                    </div>
                    <script>
                        /* begin Scroll Down Button */
                        (function () {
                            'use strict';

                            var btnScrollDown = document.querySelector('#scroll_down');

                            function scrollDown() {
                                var windowCoords = document.documentElement.clientHeight;
                                (function scroll() {
                                    if (window.pageYOffset < 1800) {
                                        window.scrollBy(0, 10);
                                        setTimeout(scroll, 0);
                                    }
                                    if (window.pageYOffset > 1800) {
                                        window.scrollTo(0, 1500);
                                    }
                                })();
                            }

                            btnScrollDown.addEventListener('click', scrollDown);
                        })();
                        /* end Scroll Down Button */
                    </script>
                </div>
            </div>
            <div class="about_us_mobile">
                <div class="row">
                    <div class="col-12">
                        <div class="photo">
                            <img class="earth" src="/img/main_image/earth_telegram.png" alt="">
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="about_us_text_and_button">
                            <h3>Сервіс <span class="gold">антивірусного</span><br> захисту</h3>
                            <div class="photo">
                                <p class="about_us_text">Наш сервіс дозволяє придбати ліцензію на антивірус, що
                                    найбільше
                                    підходить для
                                    Ваших потреб та цілей. Антивірус Protected це один з найбільш поширених та безпечних
                                    антивірусів на
                                    ринку.</p>
                                <div class="about_us_button">
                                    <a href="./plans/1">
                                        Обрати план
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <section class="how_it_works">
        <!--    <div class="container-general-info">-->

        <div class="container">
            <!--      <div class="how_it_works_dekstop">-->
            <h2>Про <span class="gold">нас</span></h2>
            <h3 class="grey">Ми всесвітньо відома компанія Protected, яка розробляє безпекове програмне забезпечення вже
                більше ніж 10 років.</h3>
            <div class="row">
                <div class="col-12 col-md-6">
                    <div class="about_us_text_and_button">
                        <h3 class="text">Як <span class="gold">це працює</span></h3>

                        <p class="about_us_text">Наш антивірус використовує найсучасніші технології захисту. Ми
                            врахували
                            весь наш
                            попередній досвід, взяли все найкраще з наших проектів та створили новий, надійний
                            антивірус,
                            який
                            гарантує безпеку ваших пристроїв.<br>
                            <br>
                            Антивірус забезпечений сучасною базою усіх можливих небезпечних програм та вірусів, що
                            постійно
                            оновлюється. Також він використовує новітню пошукову систему, яка захистить ваші пристрої
                            від
                            підозрілого
                            програмного забезпечення.
                            <br><br>
                            А наш новий VPN сервіс захистить Вас від загроз в Інтернеті.</p>

                        <div class="about_us_button">
                            <a href="./plans/1">
                                Будь захищений з нами
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-5">
                    <a href="#" class="catalog_lending">
                        <img class="background" src="/img/Rectangle%202704.png" alt="">
                        <img class="second_photo" src="/img/Composition_10%201.png" alt="">
                    </a>
                </div>
                <div class="row-cols-1 col-lg-1">
                    <div class="icons">
                        <img class="windows_photo" src="/img/os_icons/windows.png" alt="">

                        <img class="mac_photo" src="/img/os_icons/ios.png" alt="">

                        <img class="linux_photo" src="/img/os_icons/linux.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="plans">
        <h2>Обери <span class="gold">найкращий план</span> для себе</h2>

        <h3 class="grey">У нас є три різні плани антивірусу, кожен із яких підходить для особливих потреб. </h3>
        <div class="row">
            <div class="col-4">
                <div class="text_and_checkbox">
                    <p class="text_for_month">Щомісячно</p>
                    <script>
                        console.log('Глянь, что пришло:', data);
                    </script>
                </div>
            </div>
            <div class="col-4">
                <div class="text_and_checkbox">
                    <label class="toggle-control">
                        @if(!$status)
                            <input type="checkbox" name="checkix" id="checkix" >
                            <span class="control"></span>
                        @else
                            <input type="checkbox" name="checkix" id="checkix" checked>
                            <span class="control"></span>
                        @endif

                    </label>
                </div>
            </div>
            <div class="col-4">
                <div class="text_and_checkbox">
                    <p class="text_for_year">Щорічно (<span class="gold">економія до 20%</span>)</p>
                </div>
            </div>
            @if($plans)
                <div class="col-12 col-md-4">
                    <div class="tile_box_left">
                        <div class="tile_box">
                            <div class="tile_inner_box">{{$plans[0]->name}}</div>
                            <img class="photo_icon1" src="/img/plans_icons/icon1.png" alt="">
                            <div class="tile_inner_price">${{$plans[0]->price}}</div>
                            <div class="tile_inner_header_text">Для <span class="gold">пасивних</span> користувачів
                            </div>
                            <div class="tile_inner_text">{{$plans[0]->description}}
                            </div>
                            <div class="about_us_button">
                                <a href="./plans/1">
                                    Обрати
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="tile_box_right">
                        <div class="tile_box">
                            <div class="tile_inner_box_orange">{{$plans[1]->name}}</div>
                            <img class="photo_icon1" src="/img/plans_icons/icon2.png" alt="">
                            <div class="tile_inner_price"><span class="gold">${{$plans[1]->price}}</span></div>
                            <div class="tile_inner_header_text">Для <span class="gold">активних</span> користувачів
                            </div>
                            <div class="tile_inner_text_2">{{$plans[1]->description}}
                            </div>
                            <div class="about_us_button">
                                <a href="./plans/3">
                                    Обрати
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="tile_box_left">
                        <div class="tile_box">
                            <div class="tile_inner_box_purple">{{$plans[2]->name}}</div>
                            <img class="photo_icon1" src="/img/plans_icons/icon3.png" alt="">
                            <div class="tile_inner_price">${{$plans[2]->price}}</div>
                            <div class="tile_inner_header_text">Для <span class="gold">багатьох</span> акаунтів</div>
                            <div class="tile_inner_text_2">{{$plans[2]->description}}
                            </div>
                            <div class="about_us_button">
                                <a href="./plans/4">
                                    Обрати
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @else
                @component('errors')
                    Таких планів не існує
                @endcomponent
            @endif

        </div>
        <h3 class="grey_text">5 000+ задоволених користувачів з усього світу</h3>

        <div class="box">
            <img class="partners_image" src="/img/partners/image%2017.png" alt="">
            <img class="partners_image" src="/img/partners/image%2016.png" alt="">
            <img class="partners_image" src="/img/partners/image%2015.png" alt="">
            <img class="partners_image" src="/img/partners/image%2014.png" alt="">
            <img class="partners_image" src="/img/partners/image%2013.png" alt="">
            <img class="partners_image" src="/img/partners/image%2012.png" alt="">
        </div>

        <h2><span class="gold">Відгуки</span></h2>
        <div class="feedback">
            <div class="row">
                <div class="col-12 col-md-4">
                    <div class="tile_table_left">
                        <div class="tile_box_feedback">
                            <div class="row">
                                <div class="col-4">
                                    <img class="avatar" src="/img/avatars/unsplash_763-mBawsfg.png" alt="">
                                </div>
                                <div class="col-6">
                                    <div class="feedback_name">{{$users[0]->name}} {{$users[0]->surname}}</div>
                                </div>
                                <div class="col-2">
                                    <div class="estimation">{{$users[0]->feedbacks[0]->estimate}}</div>
                                    <img class="star_image" src="/img/icons/star.png" alt="">
                                </div>
                            </div>
                            <div class="feedback_text">{{$users[0]->feedbacks[0]->text}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="tile_table_right">
                        <div class="tile_box_feedback">
                            <div class="row">
                                <div class="col-4">
                                    <img class="avatar" src="/img/avatars/unsplash_mEZ3PoFGs_k.png" alt="">
                                </div>
                                <div class="col-6">
                                    <div class="feedback_name">{{$users[1]->name}} {{$users[1]->surname}}</div>
                                </div>
                                <div class="col-2">
                                    <div class="estimation">{{$users[1]->feedbacks[0]->estimate}}</div>
                                    <img class="star_image" src="/img/icons/star.png" alt="">
                                </div>
                            </div>
                            <div class="feedback_text">{{$users[1]->feedbacks[0]->text}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-4">
                    <div class="tile_table_left">
                        <div class="tile_box_feedback">
                            <div class="row">
                                <div class="col-4">
                                    <img class="avatar" src="/img/avatars/unsplash_xOjzehJ49Hk.png" alt="">
                                </div>
                                <div class="col-6">
                                    <div class="feedback_name">Paulina Rox</div>
                                </div>
                                <div class="col-2">
                                    <div class="estimation">9,5</div>
                                    <img class="star_image" src="/img/icons/star.png" alt="">
                                </div>
                            </div>
                            <div class="feedback_text">Best antivirus which keep my devices always secured and not cut
                                their
                                performance.
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swipe_box">
                    <a href="{{route('createFeedback')}}">
                        <img src="/img/icons/clicking%202handsClick.png" alt="">
                    </a>
                    <div class="swipe_text">Свайпніть, щоб пролистати карусель</div>
                </div>
            </div>
        </div>

    </section>

    <script src="http://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous">
    </script>
    <script>
        // jQuery(document).ready(function(){
        $('input[name="checkix"]').change(function () {
            // e.preventDefault();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            jQuery.ajax({
                url: "{{route('updatePrice')}}",
                method: 'post',
                data: {
                    isChecked: $('input[name="checkix"]').prop('checked')

                },
                success: function (result) {
                    $("body").html(result);
                }
            });
        });
        // });
    </script>
    <script>
        $(".btn").click(function () {
            $(this).toggleClass("active");
        });
    </script>
    <script>
        function checkBtnClick() {
            document.getElementById("checkix").checked = true;
        }

        function uncheckBtnClick() {
            document.getElementById("checkix").checked = false;
        }
    </script>
@endsection
