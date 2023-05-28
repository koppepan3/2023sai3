<?php 
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>投票</title>
        <meta name="description" content="2023年度浜松西高等学校・同中等部文化祭「彩西祭」公式ウェブサイトへようこそ。当日の情報から準備の様子まで、様々なことを発信していきます。" />
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/form.css">
        <!-- Favicon設定-->
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link type="image/x-icon" rel="icon" href="favicon.ico">
        <!-- Googlebot-->
        <meta name="robots" content="noindex">
        <!-- OG image settings-->
        <meta property="og:description" content="2023年度浜松西高等学校・同中等部文化祭「彩西祭」公式ウェブサイトへようこそ。当日の情報から準備の様子まで、様々なことを発信していきます。">
        <meta property="og:image" content="file/og_image.png">
        <!--Google Fonts読み込み-->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@400;500;700&family=Zen+Kaku+Gothic+Antique:wght@500;700&family=Zen+Kaku+Gothic+New:wght@500;700&display=swap"
            rel="stylesheet">
        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-V9BGKPTSGR"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag(){dataLayer.push(arguments);}
            gtag('js', new Date());

            gtag('config', 'G-V9BGKPTSGR');
        </script>
    </head>
    <body>
        <header>
            <a href="index.html"><img id="header_icon" src="files/header_icon.png"></a>
            <!--  ハンバーガーボタン  -->
            <div class="hamburger"><span></span><span></span><span></span></div>
            <nav class="hamburger_list">
                <div id="header_top" class="header_menu"><a href="index.html" class="header_menu"><p>トップページ</p></a></div>
                <div id="header_contents" class="header_menu toggle_menu"><a href="index.html#section_contents" class="header_menu"><p>コンテンツ</p></a><div class="subMenu"><span></span><span></span></div></div>
                <a class="menu_open" href="pamphlet.html"><h3>デジタル版パンフレット</h3></a>
                <a class="menu_open" href="themeillust.html"><h3>テーマイラスト紹介</h3></a>
                <a class="menu_open" href="map.html"><h3>校内マップ</h3></a>
                <a class="menu_open" href="tenji.html"><h3>展示内容紹介</h3></a>
                <div id="header_articles" class="header_menu"><a href="articles.html"><p>記事一覧</p></a></div>
                <div id="header_about" class="header_menu"><a href="about.html" class="header_menu"><p>彩西祭について</p></a></div>
            </nav>
            <div class="circle-bg"></div>
        </header>
        <iframe name="to_success" style="display:none;" onload="if(submitted){window.location='index.html';}"></iframe>
        <form action="https://docs.google.com/forms/d/e/1FAIpQLScoQ9qllKNb7BU6SHNCXMxxlj4cZ20PQBQ2O1FxU5BddVed6Q/formResponse" method="post" target="to_success" onsubmit="submitted=true;">
            <div id="top" style=" display:none;"></div>
            <div class="section">
                <div class="page1">
                        <div id="question1" class="title">
                            <h3>１．当てはまるものを選んでください<span class="red">(必須)</span></h3>
                            <p><input type="radio" name="entry.1503197076" value="中等部生">中等部生</p>
                            <p><input type="radio" name="entry.1503197076" value="高校生">高校生</p>
                            <p><input type="radio" name="entry.1503197076" value="一般の方">一般の方</p>
                        </div>
                        <div id="question2" class="title">
                            <h3>２．所属するHRを選んでください<span class="red">(必須)</span></h3>
                            <p><input type="radio" name="entry.538058966" value="1AHR">1AHR</p>
                            <p><input type="radio" name="entry.538058966" value="1BHR">1BHR</p>
                            <p><input type="radio" name="entry.538058966" value="1CHR">1CHR</p>
                            <p><input type="radio" name="entry.538058966" value="1DHR">1DHR</p>
                            <p><input type="radio" name="entry.538058966" value="2AHR">2AHR</p>
                            <p><input type="radio" name="entry.538058966" value="2BHR">2BHR</p>
                            <p><input type="radio" name="entry.538058966" value="2CHR">2CHR</p>
                            <p><input type="radio" name="entry.538058966" value="2DHR">2DHR</p>
                            <p><input type="radio" name="entry.538058966" value="3AHR">3AHR</p>
                            <p><input type="radio" name="entry.538058966" value="3BHR">3BHR</p>
                            <p><input type="radio" name="entry.538058966" value="3CHR">3CHR</p>
                            <p><input type="radio" name="entry.538058966" value="3DHR">3DHR</p>
                            <p><input type="radio" name="entry.538058966" value="11HR" onclick="$('#group11').addClass('hide_default');">11HR</p>
                            <p><input type="radio" name="entry.538058966" value="12HR">12HR</p>
                            <p><input type="radio" name="entry.538058966" value="13HR">13HR</p>
                            <p><input type="radio" name="entry.538058966" value="14HR">14HR</p>
                            <p><input type="radio" name="entry.538058966" value="15HR">15HR</p>
                            <p><input type="radio" name="entry.538058966" value="16HR">16HR</p>
                            <p><input type="radio" name="entry.538058966" value="17HR">17HR</p>
                            <p><input type="radio" name="entry.538058966" value="21HR">21HR</p>
                            <p><input type="radio" name="entry.538058966" value="22HR">22HR</p>
                            <p><input type="radio" name="entry.538058966" value="23HR">23HR</p>
                            <p><input type="radio" name="entry.538058966" value="24HR">24HR</p>
                            <p><input type="radio" name="entry.538058966" value="25HR">25HR</p>
                            <p><input type="radio" name="entry.538058966" value="26HR">26HR</p>
                            <p><input type="radio" name="entry.538058966" value="31HR">31HR</p>
                            <p><input type="radio" name="entry.538058966" value="32HR">32HR</p>
                            <p><input type="radio" name="entry.538058966" value="33HR">33HR</p>
                            <p><input type="radio" name="entry.538058966" value="34HR">34HR</p>
                            <p><input type="radio" name="entry.538058966" value="35HR">35HR</p>
                            <p><input type="radio" name="entry.538058966" value="36HR">36HR</p>
                        </div>
                        <div id="question3" class="title">
                            <h3>３．所属する部活動を選んでください<span class="red">(必須)</span></h3>
                            <p><input type="radio" name="entry.290451178" value="科学研究部自然化学班">科学研究部自然化学班</p>
                            <p><input type="radio" name="entry.290451178" value="科学研究部工学情報班">科学研究部工学情報班</p>
                            <p><input type="radio" name="entry.290451178" value="国際文化部">国際文化部</p>
                            <p><input type="radio" name="entry.290451178" value="演劇部">演劇部</p>
                            <p><input type="radio" name="entry.290451178" value="美術写真部美術班">美術写真部美術班</p>
                            <p><input type="radio" name="entry.290451178" value="美術写真部写真班">美術写真部写真班</p>
                            <p><input type="radio" name="entry.290451178" value="吹奏楽部">吹奏楽部</p>
                            <p><input type="radio" name="entry.290451178" value="弦楽部">弦楽部</p>
                            <p><input type="radio" name="entry.290451178" value="百人一首部">百人一首部</p>
                            <p><input type="radio" name="entry.290451178" value="生活文化部">生活文化部</p>
                            <p><input type="radio" name="entry.290451178" value="その他">その他</p>
                        </div>
                    </div>
                <div class="page2 hide_default">
                    <div id="question4" class="title">
                        <h2>HR展賞</h2>
                        <h5>入場した展示を0点～2点の中で評価してください</h5>
                        <p class="points">0点</p>
                        <p class="points">1点</p>
                        <p class="points">2点</p>
                        <div class="hide_default" id="group11">
                            <label for="">11HR</label>
                            <input type="radio" name="entry.885215657" value="０点">
                            <input type="radio" name="entry.885215657" value="１点">
                            <input type="radio" name="entry.885215657" value="２点">
                        </div>
                        <div class="hide_default" id="group12">
                            <label for="">12HR</label>
                            <input type="radio" name="entry.1150789038" value="０点">
                            <input type="radio" name="entry.1150789038" value="１点">
                            <input type="radio" name="entry.1150789038" value="２点">
                        </div>
                        <div class="hide_default" id="group13">
                            <label for="">13HR</label>
                            <input type="radio" name="entry.1923943701" value="０点">
                            <input type="radio" name="entry.1923943701" value="１点">
                            <input type="radio" name="entry.1923943701" value="２点">
                        </div>
                        <div class="hide_default" id="group14">
                            <label for="">14HR</label>
                            <input type="radio" name="entry.755345731" value="０点">
                            <input type="radio" name="entry.755345731" value="１点">
                            <input type="radio" name="entry.755345731" value="２点">
                        </div>
                        <div class="hide_default" id="group15">
                            <label for="">15HR</label>
                            <input type="radio" name="entry.72649444" value="０点">
                            <input type="radio" name="entry.72649444" value="１点">
                            <input type="radio" name="entry.72649444" value="２点">
                        </div>
                        <div class="hide_default" id="group16">
                            <label for="">16HR</label>
                            <input type="radio" name="entry.797552058" value="０点">
                            <input type="radio" name="entry.797552058" value="１点">
                            <input type="radio" name="entry.797552058" value="２点">
                        </div>
                        <div class="hide_default" id="group17">
                            <label for="">17HR</label>
                            <input type="radio" name="entry.36314777" value="０点">
                            <input type="radio" name="entry.36314777" value="１点">
                            <input type="radio" name="entry.36314777" value="２点">
                        </div>
                        <div class="hide_default" id="group21">
                            <label for="">21HR</label>
                            <input type="radio" name="entry.1356478900" value="０点">
                            <input type="radio" name="entry.1356478900" value="１点">
                            <input type="radio" name="entry.1356478900" value="２点">
                        </div>
                        <div class="hide_default" id="group22">
                            <label for="">22HR</label>
                            <input type="radio" name="entry.1159793844" value="０点">
                            <input type="radio" name="entry.1159793844" value="１点">
                            <input type="radio" name="entry.1159793844" value="２点">
                        </div>
                        <div class="hide_default" id="group23">
                            <label for="">23HR</label>
                            <input type="radio" name="entry.1697085817" value="０点">
                            <input type="radio" name="entry.1697085817" value="１点">
                            <input type="radio" name="entry.1697085817" value="２点">
                        </div>
                        <div class="hide_default" id="group24">
                            <label for="">24HR</label>
                            <input type="radio" name="entry.1735837588" value="０点">
                            <input type="radio" name="entry.1735837588" value="１点">
                            <input type="radio" name="entry.1735837588" value="２点">
                        </div>
                        <div class="hide_default" id="group25">
                            <label for="">25HR</label>
                            <input type="radio" name="entry.593853303" value="０点">
                            <input type="radio" name="entry.593853303" value="１点">
                            <input type="radio" name="entry.593853303" value="２点">
                        </div>
                        <div class="hide_default" id="group26">
                            <label for="">26HR</label>
                            <input type="radio" name="entry.177526831" value="０点">
                            <input type="radio" name="entry.177526831" value="１点">
                            <input type="radio" name="entry.177526831" value="２点">
                        </div>
                        <div class="hide_default" id="group31">
                            <label for="">31HR</label>
                            <input type="radio" name="entry.1368722233" value="０点">
                            <input type="radio" name="entry.1368722233" value="１点">
                            <input type="radio" name="entry.1368722233" value="２点">
                        </div>
                        <div class="hide_default" id="group32">
                            <label for="">32HR</label>
                            <input type="radio" name="entry.1670704581" value="０点">
                            <input type="radio" name="entry.1670704581" value="１点">
                            <input type="radio" name="entry.1670704581" value="２点">
                        </div>
                        <div class="hide_default" id="group33">
                            <label for="">33HR</label>
                            <input type="radio" name="entry.1483849224" value="０点">
                            <input type="radio" name="entry.1483849224" value="１点">
                            <input type="radio" name="entry.1483849224" value="２点">
                        </div>
                        <div class="hide_default" id="group34">
                            <label for="">34HR</label>
                            <input type="radio" name="entry.42765907" value="０点">
                            <input type="radio" name="entry.42765907" value="１点">
                            <input type="radio" name="entry.42765907" value="２点">
                        </div>
                        <div class="hide_default" id="group35">
                            <label for="">35HR</label>
                            <input type="radio" name="entry.614844642" value="０点">
                            <input type="radio" name="entry.614844642" value="１点">
                            <input type="radio" name="entry.614844642" value="２点">
                        </div>
                        <div class="hide_default" id="group36">
                            <label for="">36HR</label>
                            <input type="radio" name="entry.1290732062" value="０点">
                            <input type="radio" name="entry.1290732062" value="１点">
                            <input type="radio" name="entry.1290732062" value="２点">
                        </div>
                    </div>
                    <div id="question5" class="title">
                        <h2>クラT賞<span class="red">(必須)</span></h2>
                        <h5>クラスTシャツのデザインで良いと思ったHRを１つ選んでください</h5>
                        <p><input type="radio" name="entry.1755872211" value="11HR">11HR</p>
                        <p><input type="radio" name="entry.1755872211" value="12HR">12HR</p>
                        <p><input type="radio" name="entry.1755872211" value="13HR">13HR</p>
                        <p><input type="radio" name="entry.1755872211" value="14HR">14HR</p>
                        <p><input type="radio" name="entry.1755872211" value="15HR">15HR</p>
                        <p><input type="radio" name="entry.1755872211" value="16HR">16HR</p>
                        <p><input type="radio" name="entry.1755872211" value="17HR">17HR</p>
                        <p><input type="radio" name="entry.1755872211" value="21HR">21HR</p>
                        <p><input type="radio" name="entry.1755872211" value="22HR">22HR</p>
                        <p><input type="radio" name="entry.1755872211" value="23HR">23HR</p>
                        <p><input type="radio" name="entry.1755872211" value="24HR">24HR</p>
                        <p><input type="radio" name="entry.1755872211" value="25HR">25HR</p>
                        <p><input type="radio" name="entry.1755872211" value="26HR">26HR</p>
                        <p><input type="radio" name="entry.1755872211" value="31HR">31HR</p>
                        <p><input type="radio" name="entry.1755872211" value="32HR">32HR</p>
                        <p><input type="radio" name="entry.1755872211" value="33HR">33HR</p>
                        <p><input type="radio" name="entry.1755872211" value="34HR">34HR</p>
                        <p><input type="radio" name="entry.1755872211" value="35HR">35HR</p>
                        <p><input type="radio" name="entry.1755872211" value="36HR">36HR</p>
                        <p><input type="radio" name="entry.1755872211" value="投票しない">投票しない</p>
                    </div>
                    <div id="question6" class="title">
                        <h3>ベストコーディネート賞<span class="red">(必須)</span></h3>
                        <h5>異装のデザインで良いと思ったHR・部活動を１つ選んでください。</h5>
                        <p><input type="radio" name="entry.401001952" value="11HR">11HR</p>
                        <p><input type="radio" name="entry.401001952" value="12HR">12HR</p>
                        <p><input type="radio" name="entry.401001952" value="13HR">13HR</p>
                        <p><input type="radio" name="entry.401001952" value="14HR">14HR</p>
                        <p><input type="radio" name="entry.401001952" value="15HR">15HR</p>
                        <p><input type="radio" name="entry.401001952" value="16HR">16HR</p>
                        <p><input type="radio" name="entry.401001952" value="17HR">17HR</p>
                        <p><input type="radio" name="entry.401001952" value="21HR">21HR</p>
                        <p><input type="radio" name="entry.401001952" value="22HR">22HR</p>
                        <p><input type="radio" name="entry.401001952" value="23HR">23HR</p>
                        <p><input type="radio" name="entry.401001952" value="24HR">24HR</p>
                        <p><input type="radio" name="entry.401001952" value="25HR">25HR</p>
                        <p><input type="radio" name="entry.401001952" value="26HR">26HR</p>
                        <p><input type="radio" name="entry.401001952" value="31HR">31HR</p>
                        <p><input type="radio" name="entry.401001952" value="32HR">32HR</p>
                        <p><input type="radio" name="entry.401001952" value="33HR">33HR</p>
                        <p><input type="radio" name="entry.401001952" value="34HR">34HR</p>
                        <p><input type="radio" name="entry.401001952" value="35HR">35HR</p>
                        <p><input type="radio" name="entry.401001952" value="36HR">36HR</p>
                        <p><input type="radio" name="entry.401001952" value="投票しない">投票しない</p>
                    </div>
                </div>
            </div>
        </div>
        <div id="buttons">
            <a class="button unavailable_button" id="returnButton" onclick="pageReturn()">＜戻る</a>
            <a class="button" id="forwardButton" onclick="pageForward()">次に進む＞</a>
            <button id="submit" class="button hide_default" type="submit">送信する</button>
        </div>
        </form>
        <footer>
            <div class="footer_contents">
                <div class="footer_icon"><img src="files/header_icon.svg" alt=""></div>
                <div class="footer_items" id="footer_items_1">
                    <a href="about.html"><img src="files/footer_about.svg" alt=""></a>
                    <a href="map.html"><img src="files/footer_map.svg" alt=""></a>
                    <a href="timetable.html"><img src="files/footer_timetable.svg" alt=""></a>
                </div>
                <div class="footer_items" id="footer_items_2">
                    <a href="tenji.html"><img src="files/footer_display.svg" alt=""></a>
                    <a href="http://www.edu.pref.shizuoka.jp/hamamatsunishi-h/home.nsf/IndexFormView?OpenView"><img src="files/footer_HP.svg" alt=""></a>
                    <a href="access.html"><img src="files/footer_access.svg" alt=""></a>
                </div>
                <div class="school_addres"><img src="files/school_addres.svg" alt=""></div>
            </div>
        </footer>
        <!--jQuery読み込み-->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
        <!--Hamburger buttond JS-->
        <script>
            $(function() {
                $('.hamburger').click(function() {
                    $(this).toggleClass('active');
                    
                    if ($(this).hasClass('active')) {
                        $('.hamburger_list').addClass('active');
                        $(".circle-bg").addClass('circleactive');//丸背景にcircleactiveクラスを付与
                    } else {
                        $('.hamburger_list').removeClass('active');
                        $(".circle-bg").removeClass('circleactive');//丸背景にcircleactiveクラスを付与
                    }
                });

                $('.subMenu').click(function() {
                    $(this).toggleClass('active');
                    
                    if ($(this).hasClass('active')) {
                        $('.subMenu').addClass('active');
                        $('.menu_open').addClass('active');
                    } else {
                        $('.subMenu').removeClass('active');
                        $('.menu_open').removeClass('active');
                    }
                });
            });

            let page = 1;

            function pageReturn(){
                if(page == 2){
                    $('.page1').removeClass('hide_default');
                    $('.page2').addClass('hide_default');
                    //スクロールさせる条件を指定
                    var scrollToOptions = {
                        top : 0, //スクロール位置にページ最上部を指定
                        behavior : 'smooth' //スムーズに移動させる条件を指定
                    };
                    //スクロールを実施する
                    window.scrollTo(scrollToOptions);
                    $('#forwardButton').removeClass('hide_default');
                    $('#returnButton').addClass('unavailable_button');
                    $('#submit').addClass('hide_default');
                    page--;
                }
            }

            function pageForward(){
                if(page == 1){
                    $('.page2').removeClass('hide_default');
                    $('.page1').addClass('hide_default');
                    //スクロールさせる条件を指定
                    var scrollToOptions1 = {
                        top : 0, //スクロール位置にページ最上部を指定
                        behavior : 'smooth' //スムーズに移動させる条件を指定
                    };
                    //スクロールを実施する
                    window.scrollTo(scrollToOptions1);
                    $('#returnButton').removeClass('unavailable_button');
                    $('#forwardButton').addClass('hide_default');
                    $('#submit').removeClass('hide_default');
                    page++;
                }
            }
        </script>
        <?php
        $count = 11;
        while($count <= 51) {
            if(isset($_COOKIE[$count])){
            if($_COOKIE[$count] == 1){
            ?>
        <script>
            $(<?php echo "\"#group".$count."\""; ?>).removeClass("hide_default");
        </script>
        <?php
            }}
           $count++;
        }
        ?>
        <script>
            console.log('Radio: ', formElements.radio.entry.538058966);
        </script>
    </body>
</html>
