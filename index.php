<?php
include 'script-login.php';
include "./conn/connect.php";
@$key_search = $_GET["s"];
if ($key_search) {
    $sql = "SELECT * FROM articles WHERE topic_name LIKE '%" . $key_search . "%' ";
    $q = mysqli_query($conn, $sql) or die("Error in query: $sql " . mysqli_error($conn));
} else {
    $sql = "SELECT * FROM articles ORDER BY id DESC LIMIT 0,6 ";
    $q = mysqli_query($conn, $sql) or die("Error in query: $sql " . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html lang="th">

<head>
    <title>หวยยี่กี เว็บใหญ่จ่ายหนัก รับแทงหวยยี่กี บริการครบวงจร</title>
    <meta name="title" content="หวยยี่กี เว็บใหญ่จ่ายหนัก รับแทงหวยยี่กี บริการครบวงจร " />
    <meta name="description" content="หวยยี่กี เป็นเกมที่รู้จักกันดีในประเทศไทยและเล่นค่อนข้างง่าย สิ่งที่คุณต้องทำคือเลือกหมายเลขของคุณและรอผลลัพธ์ อัตราการจ่ายต่อบาทที่น่าสนใจ จ่ายหนัก จ่ายจริง" />

    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta http-equiv="content-language" content="th" />
    <meta http-equiv="content-type" content="text/html;" charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="robots" content="index,follow" />
    <meta name="Author" content="หวยยี่กี">
    <meta name="googlebots" content="all">
    <meta name="audience" content="all">
    <meta name="Rating" content="General">
    <meta name="distribution" content="Global">
    <meta name="allow-search" content="yes">

    <meta property="og:locale" content="th_TH" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="หวยยี่กี เว็บใหญ่จ่ายหนัก รับแทงหวยยี่กี บริการครบวงจร" />
    <meta property="og:description" content="หวยยี่กี เป็นเกมที่รู้จักกันดีในประเทศไทยและเล่นค่อนข้างง่าย สิ่งที่คุณต้องทำคือเลือกหมายเลขของคุณและรอผลลัพธ์ อัตราการจ่ายต่อบาทที่น่าสนใจ จ่ายหนัก จ่ายจริง" />
    <meta property="og:url" content="#/" />
    <meta property="og:site_name" content="หวยยี่กี" />
    <meta property="og:image" content="./img/logo-lotto-yeekee.webp" />

    <meta property="twitter:url" content="#/">
    <meta property="twitter:image" content="./img/logo-lotto-yeekee.webp">
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="หวยยี่กี เว็บใหญ่จ่ายหนัก รับแทงหวยยี่กี บริการครบวงจร" />
    <meta name="twitter:description" content="หวยยี่กี เป็นเกมที่รู้จักกันดีในประเทศไทยและเล่นค่อนข้างง่าย สิ่งที่คุณต้องทำคือเลือกหมายเลขของคุณและรอผลลัพธ์ อัตราการจ่ายต่อบาทที่น่าสนใจ จ่ายหนัก จ่ายจริง" />
    <meta name="twitter:site" content="หวยยี่กี">
    <meta name="twitter:creator" content="หวยยี่กี">

    <link rel="canonical" href="#/" />
    <link rel="alternate" href="#/" hreflang="th-TH" />

    <link rel="shortcut icon" href="./favicon.webp" type="image/x-icon" />
    <link rel="icon" href="./favicon.webp" type="image/x-icon" />
    <link rel="apple-touch-icon" href="./favicon.webp" />

    <link href="https://fonts.googleapis.com/css2?family=Kanit:wght@100;200;300;400;500;600;700;800&display=swap" rel="stylesheet">
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Organization",
            "url": "#/",
            "logo": "#/img/logo-lotto-yeekee.webp"
        }
    </script>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "WebPage",
            "name": "หวยยี่กี",
            "speakable": {
                "@type": "SpeakableSpecification",
                "xPath": [
                    "/html/head/title",
                    "/html/head/meta[@name='description']/@content"
                ]
            },
            "url": "#/"
        }
    </script>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org/",
            "@type": "WebSite",
            "url": "#/",
            "name": "หวยยี่กี",
            "description": "เว็บใหญ่จ่ายหนัก รับแทงหวยยี่กี บริการครบวงจร ",
            "potentialAction": [{
                "@type": "SearchAction",
                "target": {
                    "@type": "EntryPoint",
                    "urlTemplate": "#/?s={search_term_string}"
                },
                "query-input": "required name=search_term_string"
            }]
        }
    </script>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "BreadcrumbList",
            "itemListElement": [{
                "@type": "ListItem",
                "position": 1,
                "name": "หวยยี่กี"
            }]
        }
    </script>
    <script type="application/ld+json">
        {
            "@context": "https://schema.org",
            "@type": "Store",
            "image": [
                "#/img/logo-lotto-yeekee.webp",
                "#/img/baner-lotto-yeekee.webp",
                "#/img/lottoYiKi-img01.webp",
                "#/img/lottoYiKi-img02.webp",
                "#/img/lottoYiKi-img03.webp"
            ],
            "name": "หวยยี่กี",
            "address": {
                "@type": "PostalAddress",
                "addressCountry": "TH"
            },
            "url": "#/",
            "priceRange": "฿฿฿",
            "telephone": "+6696-921-9245",
            "openingHoursSpecification": [{
                    "@type": "OpeningHoursSpecification",
                    "dayOfWeek": [
                        "Monday",
                        "Tuesday",
                        "Wednesday",
                        "Thursday",
                        "Friday",
                        "Saturday"
                    ],
                    "opens": "08:00",
                    "closes": "23:59"
                },
                {
                    "@type": "OpeningHoursSpecification",
                    "dayOfWeek": "Sunday",
                    "opens": "08:00",
                    "closes": "23:00"
                }
            ]

        }
    </script>
    <style>
        <?php
        include('bootstrap/bootstrap.css');
        include('css/style.css');
        ?>
    </style>

</head>

<body>
    <header class="header">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-12 col-lg-4 logo">
                    <a href="./">
                        <img data-src="./img/logo-lotto-malay.webp" class="lazy zoom img-fluid" width="564" height="194" alt="logo หวยมาเลย์">
                    </a>
                </div>
                <div class="col-md-12 col-lg-8">
                    <nav class="site-navlinks">
                        <ul>
                            <li><a href="./"><img data-src="./img/icon/icon-01.webp" class="lazy img-fluid" width="40" height="40" alt="icon หวยมาเลย์"> หวยมาเลย์</a></li>
                            <li><a href="./register/"><img data-src="./img/icon/icon-02.webp" class="lazy img-fluid" width="40" height="40" alt="icon สมัคร"> สมัคร</a></li>
                            <li><a href="./entrance/"><img data-src="./img/icon/icon-03.webp" class="lazy img-fluid" width="40" height="40" alt="icon ทางเข้า"> ทางเข้า</a></li>
                            <li><a href="./contact/"><img data-src="./img/icon/icon-04.webp" class="lazy img-fluid" width="40" height="40" alt="icon ติดต่อ"> ติดต่อ</a></li>

                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <details>
            <summary></summary>
            <nav class="menu">
                <a href="./"> หวยมาเลย์</a>
                <a href="./register/"> สมัคร</a>
                <a href="./entrance/"> ทางเข้า</a>
                <a href="./contact/"> ติดต่อ</a>
            </nav>
        </details>
    </header>
    <section class="main-banner">
        <img data-src="./img/main-banner.webp" class="lazy img-fluid" width="100%" height="100%" alt="หวยมาเลเซียจ่ายจริงการันตี 100%">
    </section>
    <section class="main-login">
        <div class="container py-3 mb-3">
            <div class="row">
                <div class="col-md-12 col-lg-4">
                    <form action="" method="post" class="form-login">
                        <p>เข้าสู่ระบบสมาชิก</p>
                        <br>
                        <div style="padding: 0 10px; margin-top:22px;">
                            <label for="username">ชื่อผู้ใช้งาน</label>
                            <div class="bt-input">
                                <img data-src="./img/icon/icon-user.webp" class="lazy img-fluid" width="27" height="27" alt="icon user">
                                <input type="text" name="name" class="txt-user" required>
                            </div>
                            <label for="password">รหัสผ่าน</label>
                            <div class="bt-input">
                                <img data-src="./img/icon/icon-pass.webp" class="lazy img-fluid" width="27" height="27" alt="icon password">
                                <input type="password" name="pass" class="txt-pass" required>
                            </div>
                            <button type="submit" name="login"><img data-src="./img/icon/icon-log.webp" class="lazy img-fluid" width="22" height="22" alt="icon login"><span>เข้าสู่ระบบ</span></button>
                            <span class="spn-foget">ลืมรหัสผ่าน?</span>
                            <a href="">สมัครสมาชิก</a>
                        </div>
                    </form>
                </div>
                <div class="col-md-12 col-lg-8 ">
                    <div class="row ">
                        <div class="bg-blue">
                            <span>ฝากเงิน</span>
                            <span>ถอนเงิน</span>
                            <a href="">สมัครผ่านไลน์</a>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-7 my-1">
                            <img data-src="./img/check-lotto.webp" class="lazy img-max" width="100%" height="482" alt="ตรวจหวย">
                        </div>
                        <div class="col-5 my-1">
                            <img data-src="./img/date-lotto.webp" class="lazy img-max" width="100%" height="482" alt="วันเวลา การออกรางวัล">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
    if (!$key_search) {
    ?>
        <article class="content">
            <img data-src="./img/huay-malay.webp" class="lazy img-max" width="100%" height="100%" alt="ทำความรู้จัก หวยมาเลย์ คืออะไร">
            <section class="main-content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 my-2">
                            <div class="bg-gray">
                                <h1 class="bghead">
                                    หวยมาเลย์
                                </h1>
                                <p><strong>หวยมาเลย์</strong> จัดอยู่ในหมวดหมู่หวยต่างประเทศ ออกรางวัลโดยประเทศมาเลเซียแต่คนไทยนำหวยชนิดนี้เข้ามาเล่นในประเทศไทย มีรูปแบบเหมือนกับหวยใต้ดินทุกประการ และมีวิธีการเล่นเหมือนหวยต่างประเทศ หวยลาว หวยปิงปอง ในลักษณะรางวัล เลข 3 ตัวบนโต๊ด เลข 2 ตัวบนล่าง และเลขวิ่งบนล่างเป็นต้น หวยมาเลย์กำลังเป็นที่นิยมในไทยอย่างมาก เนื่องจากจำนวนรอบการออกรางวัลสัปดาห์ละ 3 ครั้ง แถมในบางรอบอาจมีหวยมาเลย์พิเศษ นับเป็นลักษณะเด่นของหวยประเภทนี้ </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 my-2">
                            <div class="bg-gray">
                                <h2 class="bghead">
                                    ทำความรู้จัก หวยมาเลย์ คืออะไร
                                </h2>
                                <p><strong>หวยมาเลย์</strong> คือหวยที่ออกโดยถูกต้องตามกฎหมายของประเทศมาเลเซีย คนไทยนำผลการออกรางวัลของหวยมาเลย์มาอ้างอิงเพื่อเล่น มีกติกาคล้ายการเล่นหวยใต้ดินมีทั้งการซื้อเลขแบบสามตัว สองตัว เลขวิ่ง และเลขชุด โดยลักษณะการอ้างอิงตัวเลขจะคล้ายกับหวยลาวคือออกรางวัล 4 ตัวเหมือนกันแต่จะแตกต่างตรงที่หวยลาวออกรางวัลใหญ่เพียง 1 ชุดแต่หวยมาเลย์มีการออกรางวัลใหญ่ทั้งหมด 3 รางวัลด้วยกัน หวยของทางรัฐบาลมาเลย์เซีย หวยมาเลย์ หรือ หวยมาเล เปรียบเสมือนการออกรางวัลลอตเตอรี่ประเทศมาเลเซีย สิ่งที่ทำให้หวยมาเลย์เริ่มนิยมในบ้านเรา เนื่องจากหวยมาเลย์ออกรางวัลบ่อยถึงสัปดาห์ละ 3 ครั้ง ซึ่งหากเปรียบเทียบกับสลากกินแบ่งรัฐบาลไทยที่ออกรางวัลเพียงเดือนละ 2 งวดเท่านั้น จึงทำให้หวยมาเลย์กลายมาเป็นที่ชื่นชอบของคอหวยอย่างมาก แถมยังมีช่องทางการเข้าถึงหวยมาเลย์ที่ทุกคนสามารถเลือกซื้อได้ภายใน <strong><em>หวยมาเลย์ออนไลน์</em></strong> และเว็บไซต์หวยทั่วไป </p>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 my-2">
                            <div class="bg-gray">
                                <h2 class="bghead">
                                    วัน เวลา การออกรางวัลหวยมาเลย์
                                </h2>
                                <p>หวยมาเลย์ออกวันไหน หวยมาเลย์ออกกี่โมง มีการประกาศผลการออกรางวัล 3 ครั้งต่อสัปดาห์ในทุก<span class="clr">วันพุธ วันเสาร์และวันอาทิตย์</span> อาจมีการหยุดกรณีตรงกับวันนักขัตฤกษ์ เวลาการออกรางวัลจะอยู่ในช่วงเวลา 18.30 นตามเวลาไทย ในบางครั้งหวยมาเลย์อาจมีการออกรางวัลในวันอังคารเรียกว่ารอบพิเศษหรือ magnum ซึ่งนานๆทีถึงจะมีการออกรางวัลพิเศษส่วนเวลาการออกรางวัล ทุกท่านสามารถที่จะติดตามผลการออกรางวัลถ่ายทอดสดหวยมาเลย์ได้ผ่านทาง YouTube Facebook หรืออินเตอร์เน็ตทั่วไปรวมไปถึงการอัพเดทผลการออกรางวัลหวยมาเลย์ที่ หวยออนไลน์ </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="secondary-content">
                <div class="container">
                    <h2 class="text-center">รางวัลหวยหวยมาเลย์ ออนไลน์</h2>
                    <p class="white">รางวัล และวิธีการเล่นหวยมาเลย์เหมือนกับหวยใต้ดิน หรือหวยต่างประเทศที่คนไทยชื่นชอบ ใช้ผลการออกรางวัลเลขท้าย 3 ตัวของรางวัลที่ 1 และเลขท้าย 2 ตัวของรางวัลที่ 2 มาอ้างอิง แตกต่างกับวิธีการเล่นหวยมาเลย์ในรูปแบบลอตเตอรี่ ซึ่งในประเทศไทยไม่มีขายต้องซื้อกับประเทศมาเลเซียเท่านั้น แต่รูปแบบการออกรางวัล <strong style="color: #f7ff00;">หวยมาเลย์ออนไลน์</strong> ที่มีเปิดให้ซื้อในประเทศไทยก็จะมีรูปแบบรางวัลดังนี้ </p>
                    <div class="row my-2">
                        <div class="col-lg-4 col-md-6 col-sm-12 my-1">
                            <div class="bg-red">
                                <p><strong class="d-flex justify-content-center">รางวัลสามตัวบน</strong> ต้องซื้อเลขแบบเจาะจงตัวเลข 3 ตัว 000-990 ในตำแหน่งรางวัลเลขบน ผลรางวัลเลข 3 ตัวจะต้องออกมาตรงกับเลขที่ซื้อแบบเจาะจงตำแหน่งและตัวเลข </p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 my-1">
                            <div class="bg-red">
                                <p><strong class="d-flex justify-content-center">รางวัลสามตัวโต๊ด</strong> คล้ายกับการเล่นเลข 3 ตัวบน คือต้องซื้อเลขแบบเจาะจงตัวเลข 3 ตัว 000-999 ในตำแหน่งรางวัลบน แต่ผลรางวัล 3 ตัวที่ออกสามารถสลับตำแหน่งได้ </p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 my-1">
                            <div class="bg-red">
                                <p><strong class="d-flex justify-content-center">รางวัลสองตัวบน</strong> ต้องซื้อเลขแบบเจาะจงตัวเลข 00-99 ในตำแหน่งรางวัลเลขบน ส่วนผลรางวัลเลข 2 ตัวบนจะต้องตรงกับตำแหน่งเลขที่ซื้อไว้แบบเจาะจงตำแหน่งและตัวเลข </p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 my-1">
                            <div class="bg-red">
                                <p><strong class="d-flex justify-content-center">รางวัลสองตัวล่าง</strong> ต้องซื้อเลขแบบเจาะจงตัวเลข 00-99 ในตำแหน่งรางวัลเลขล่าง ส่วนผลรางวัลเลข 2 ตัวบนจะต้องตรงกับตำแหน่งเลขที่ซื้อไว้แบบเจาะจงตำแหน่งและตัวเลข </p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 my-1">
                            <div class="bg-red">
                                <p><strong class="d-flex justify-content-center">รางวัลเลขวิ่งบน</strong> ต้องซื้อเลขแบบเจาะจงตัวเลข 1 ตัว 0-9 ในตำแหน่งรางวัลเลขบน ส่วนผลรางวัลเลข 3 ตัวบนจะต้องออกมาตรงกับเลขที่ซื้อ 1 ใน 3 </p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-12 my-1">
                            <div class="bg-red">
                                <p><strong class="d-flex justify-content-center">รางวัลเลขวิ่งล่าง</strong> ต้องซื้อเลขแบบเจาะจงตัวเลข 1 ตัว 0-9 ในตำแหน่งรางวัลเลขล่าง ส่วนผลรางวัลเลข 2 ตัวล่างจะต้องออกมาตรงกับเลขที่ซื้อ 1 ใน 2 </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="main-content">
                <div class="container py-3">
                    <div class="bg-gray">
                        <h2 class="bghead">
                            จุดเด่นของการแทงหวยหวยมาเลย์ กับเรา
                        </h2>
                        <p>รูปแบบการออกรางวัลหวยมาเลย์มีความใกล้เคียงกับหวยใต้ดินทุกประการ แถมมีเปิดให้บริการในรูปแบบออนไลน์ที่อำนวยความสะดวกสบาย มีอัตราการจ่ายผลตอบแทนสูงถึงบาทละ 900 บาท เปิดให้บริการแทงหวยไม่มีขั้นต่ำเริ่มต้น 1 บาทก็สามารถเสี่ยงโชคหวยมาเลย์ได้ ตลอดจนถึงจุดเด่นพิเศษมากมาย </p>
                    </div>
                    <div class="row py-2">
                        <div class="col-lg-6 col-md-6 col-sm-12 my-2">
                            <div class="bg-card-blue">
                                <p>• เว็บหวยมาเลย์ออนไลน์ ซื้อง่าย โอนไว มาพร้อมความทันสมัย </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 my-2">
                            <div class="bg-card-blue">
                                <p>• ราคาการจ่ายหวยมาเลย์สูงสุด ส่วนลดเยอะ </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 my-2">
                            <div class="bg-card-blue">
                                <p>• มีบริการหวยครบทุกประเภท หวยรัฐบาล หวยไทย หวยลาว หวยยี่กี </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 my-2">
                            <div class="bg-card-blue">
                                <p>• รับแทงหวยมาเลย์ ซื้อหวย มีความมั่นคงทางการเงินจ่ายสูง </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 my-2">
                            <div class="bg-card-blue">
                                <p>• แทงหวยมาเลย์ไม่มีขั้นต่ำ 1 บาทก็สามารถแทงได้ ไม่มีเลขอั้น จ่ายเต็ม </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 my-2">
                            <div class="bg-card-blue">
                                <p>• ทีมงานบริการทุกวัน ฝากถอนรวดเร็ว ด้วยระบบ AI ตลอด 24 ชั่วโมง </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 my-2">
                            <div class="bg-card-blue">
                                <p>• รองรับทุกระบบ เข้ากันได้ดีกับทุกอุปกรณ์ </p>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 my-2">
                            <div class="bg-card-blue">
                                <p>• จ่ายเยอะที่สุดในไทย จ่ายหนัก จ่ายเต็ม </p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </article>
        <article class="article-content">
            <div class="container">
                <p class="str-news text-center  mb-0"><a href="./all-articles/">บทความ / ข่าวสาร หวยยี่กี</a></p>
                <br>
                <div class="row justify-content-center align-items-end ">
                    <?php
                    $sql = "SELECT * FROM articles 
    ORDER BY id DESC  LIMIT 0,3 ";
                    $q = mysqli_query($conn, $sql) or die("Error in query: $sql " . mysqli_error($conn));
                    while ($resuret = mysqli_fetch_array($q)) {
                        $d_topic = $resuret['topic_name'];
                        $d_dec = strip_tags(mb_substr($resuret['descripion'], 0, 100, 'utf-8'));
                        $img = $resuret['image_banner'];
                        $date = date("Y-m-d", strtotime($resuret['create_at']));
                        $view = $resuret['view'];
                        $seo_dec = $resuret['descripion_seo'];
                        $url_articles_seo = $resuret['url_articles_seo'];
                        $article_id = $resuret['id'];
                    ?>
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="bg_articles my-2">
                                <a href="./view/<?php echo $url_articles_seo; ?>" class="article-link" rel="ugc">
                                    <figure class="news-articles-img">
                                        <div class="bg-img">
                                            <img class="lazy img-fluid zoom" data-src="./backend/uploads/article-img/<?php echo $img ?>" alt="<?php echo $d_topic ?>" width="100%" height="100%">
                                        </div>
                                    </figure>
                                    <div class="px-2">
                                        <strong class="news-articles-h4"><?php echo trim(strip_tags(mb_substr($d_topic, 0, 30, 'utf-8'))); ?></strong>
                                        <div class="view_date">
                                            <span>
                                                โพสเมื่อ : <?php echo $date; ?>
                                            </span>
                                            <span>
                                                ผู้เข้าชม : <?php echo $view; ?>
                                            </span>
                                        </div>

                                        <p class="news-articles-p "><?php echo trim(strip_tags(mb_substr($seo_dec, 0, 120, 'utf-8'))); ?></p>
                                    </div>
                                </a>
                                <div class="usertag">
                                    <div class="tag__info">
                                        <?php
                                        $sql_tag = "SELECT tag.tag_url as tag_url,tag.name as name FROM (tag
                                    left join tag_log on tag.id = tag_log.tag_id)
                                    where articles_id = $article_id ";
                                        $query_tag = mysqli_query($conn, $sql_tag) or die("Error in query: $sql " . mysqli_error($conn));
                                        while ($result_tag = $query_tag->fetch_assoc()) {
                                        ?>
                                            <a href="./tag/<?php echo $result_tag['tag_url']; ?>" style="text-decoration: none;">
                                                <span class="tag tag-red"><?php echo $result_tag['name'] ?></span>
                                            </a>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }
                    ?>
                </div>
            </div>
        </article>
    <?php
    } else {
    ?>
        <article class="article-container-card pt-4">
            <div class="container">
                <div class="text-center ">
                    <p class="text-bold-search mb-0 ">
                        Search By : <?php echo $key_search; ?>
                    </p>
                </div>
                <div class="row justify-content-center align-items-end mt-2">
                    <?php
                    while ($resuret = mysqli_fetch_array($q)) {
                        $d_topic = $resuret['topic_name'];
                        $d_dec = strip_tags(mb_substr($resuret['descripion'], 0, 100, 'utf-8'));
                        $img = $resuret['image_banner'];
                        $date = date("Y-m-d", strtotime($resuret['create_at']));
                        $view = $resuret['view'];
                        $seo_dec = $resuret['descripion_seo'];
                        $url_articles_seo = $resuret['url_articles_seo'];
                        $article_id = $resuret['id'];
                    ?>
                        <div class="col-sm-12 col-md-6 col-lg-4">
                            <div class="bg_articles my-2">
                                <a href="./view/<?php echo $url_articles_seo; ?>" class="article-link" rel="ugc">
                                    <figure class="news-articles-img">
                                        <div class="bg-img">
                                            <img class="lazy img-fluid zoom" data-src="./backend/uploads/article-img/<?php echo $img ?>" alt="<?php echo $d_topic ?>" width="100%" height="100%">
                                        </div>
                                    </figure>
                                    <div class="px-2">
                                        <strong class="news-articles-h4"><?php echo trim(strip_tags(mb_substr($d_topic, 0, 30, 'utf-8'))); ?></strong>
                                        <div class="view_date">
                                            <span>
                                                โพสเมื่อ : <?php echo $date; ?>
                                            </span>
                                            <span>
                                                ผู้เข้าชม : <?php echo $view; ?>
                                            </span>
                                        </div>

                                        <p class="news-articles-p "><?php echo trim(strip_tags(mb_substr($seo_dec, 0, 120, 'utf-8'))); ?></p>

                                    </div>
                                </a>
                                <div class="usertag">
                                    <div class="tag__info">

                                        <?php
                                        $sql_tag = "SELECT tag.tag_url as tag_url,tag.name as name FROM (tag
                                    left join tag_log on tag.id = tag_log.tag_id)
                                    where articles_id = $article_id ";
                                        $query_tag = mysqli_query($conn, $sql_tag) or die("Error in query: $sql " . mysqli_error($conn));
                                        while ($result_tag = $query_tag->fetch_assoc()) {
                                        ?>
                                            <a href="./tag/<?php echo $result_tag['tag_url']; ?>" style="text-decoration: none;">
                                                <span class="tag tag-red"><?php echo $result_tag['name'] ?></span>
                                            </a>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }
                    ?>
                </div>
            </div>
        </article>
    <?php
    }
    ?>
    <footer class="footer">
        <div class="container">
            <div class="row align-items-center justify-content-center " style="border-bottom: 3px solid #fff;padding-bottom:20px;">
                <div class="col-lg-4 col-md-12">
                    <img data-src="./img/logo-lotto-malay.webp" class="lazy zoom img-fluid" width="264" height="194" alt="logo หวยมาเลย์">
                </div>
                <div class="col-lg-8 col-md-12">
                    <div class="d-block text-center">
                        <a class="a_link_end" href="./"> หวยมาเลย์</a>
                        <a class="a_link_end" href="./register/"> สมัคร</a>
                        <a class="a_link_end" href="./entrance/"> ทางเข้า</a>
                        <a class="a_link_end" href="./contact/"> ติดต่อ</a>
                        <a class="a_link_end" href="./backend/login.php">เข้าสู่ระบบ</a>
                    </div>
                </div>
            </div>
            <img data-src="./img/bank.webp" class="lazy img-max pt-3" width="1027" height="65" alt="logoธนาคาร">
        </div>
    </footer>
    <div id="nav-footer-bottom">
        <a href="./"><img data-src="./img/icon/icon-01.webp" class="lazy img-fluid" width="38" height="38" alt="icon หน้าหลัก"><span>หน้าหลัก</span></a>
        <a href="./entrance/"><img data-src="./img/icon/icon-02.webp" class="lazy img-fluid" width="38" height="38" alt="icon เข้าสู่ระบบ"><span>เข้าสู่ระบบ</span> </a>
        <a href="./register/"><img data-src="./img/icon/icon-03.webp" class="lazy img-fluid" width="38" height="38" alt="icon สมัครสมาชิก"><span>สมัครสมาชิก</span> </a>
        <a href="./contact/"><img data-src="./img/icon/icon-04.webp" class="lazy img-fluid" width="38" height="38" alt="icon ติดต่อ"><span>ติดต่อ</span> </a>
    </div>

    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "80%";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
        }
    </script>
    <!-- start lazyload -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var lazyloadImages;

            if ("IntersectionObserver" in window) {
                lazyloadImages = document.querySelectorAll(".lazy");
                var imageObserver = new IntersectionObserver(function(entries, observer) {
                    entries.forEach(function(entry) {
                        if (entry.isIntersecting) {
                            var image = entry.target;
                            image.src = image.dataset.src;
                            image.classList.remove("lazy");
                            imageObserver.unobserve(image);
                        }
                    });
                });

                lazyloadImages.forEach(function(image) {
                    imageObserver.observe(image);
                });
            } else {
                var lazyloadThrottleTimeout;
                lazyloadImages = document.querySelectorAll(".lazy");

                function lazyload() {
                    if (lazyloadThrottleTimeout) {
                        clearTimeout(lazyloadThrottleTimeout);
                    }

                    lazyloadThrottleTimeout = setTimeout(function() {
                        var scrollTop = window.pageYOffset;
                        lazyloadImages.forEach(function(img) {
                            if (img.offsetTop < (window.innerHeight + scrollTop)) {
                                img.src = img.dataset.src;
                                img.classList.remove('lazy');
                            }
                        });
                        if (lazyloadImages.length == 0) {
                            document.removeEventListener("scroll", lazyload);
                            window.removeEventListener("resize", lazyload);
                            window.removeEventListener("orientationChange", lazyload);
                        }
                    }, 20);
                }

                document.addEventListener("scroll", lazyload);
                window.addEventListener("resize", lazyload);
                window.addEventListener("orientationChange", lazyload);
            }
        })
    </script>
    <!--end lazyload -->
</body>

</html>