<!DOCTYPE html>
<html dir="rtl">

<head>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-153454345-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'UA-153454345-1');
    </script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-UA-160037128-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'UA-160037128-1');
    </script>
    <meta charset="utf-8">

    <title>מפת הקורונה של ישראל</title>

    <link rel="icon" href="data:;base64,iVBORw0KGgo=">
    
    <!--========== script ==========-->
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
    <script src="js/app.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBUJdl2h2JqN7NWOUKgG05emvLRY57-Fpg&callback=initMap" async defer></script>
    <!--========== script end ==========-->

    
    <!--========== web tags ==========-->
    <meta name="description" content="מפת הקורונה של ישראל" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="google-site-verification" content="QCadyck7Ws0MzeYVe3Cv0FPZxf2r--5fSd2CznTwi4Y" />

    <!--========== social media tags ==========-->

    <meta property="og:title" content="מפת הקורונה של ישראל" />
    <meta property="og:description" content="בדקו היכן ומתי שהו חולי קורונה מאומתים בישראל, בקלות ובמהירות באמצעות מפת הקורונה של ישראל" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="https://israelcoronamap.co.il/" />
    <meta property="og:image" content="https://firebasestorage.googleapis.com/v0/b/coronavirus-il.appspot.com/o/social-img.png?alt=media&token=086bc492-2ed7-4a0c-a7a7-35b26a103256" />

    <!--========== goolge fonts ==========-->
    <link href="https://fonts.googleapis.com/css?family=Assistant:200,300,400,600,700,800" rel="stylesheet">

    <!--========== css files ==========-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css" />
    <link rel="stylesheet" href="css/embed.css" />
    <link rel="stylesheet" href="css/map.css" />
    <link rel="stylesheet" href="css/flights.css" />

</head>

<body dir="rtl">
    <div id='overlay'></div>

    <!--========== navbar ==========-->
    <nav class="wonder-nav">
        <ul class="wonder-nav-ul">

            <li class="nav-logo">
                <a href="https://israelcoronamap.co.il/">
                    <img src="assets/images/icm.svg" style="width: 120px;margin-left: 10px;" alt="icon">
                </a>
            </li>
            <li class="wonder-nav-li" style="margin-right: 10px;">
                <button class="hamburger hamburger--minus menu-icon" type="button" data-toggle="modal">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span></span>
                </button>
            </li>
            <li style="margin-right: 10px;" class="wonder-nav-li d-none d-md-block">
                <a style="" class="nav-link sos-number mada" href="tel:101">
                    מד"א: 101
                </a>
            </li>
            <li class="wonder-nav-li d-none d-md-block">
                <a style="" class="nav-link sos-number health" href="tel:*5004">
                    משרד הבריאות: 5004*
                </a>
            </li>
        </ul>

    </nav>
    <!--========== navbar end ==========-->
    
    <!--========== map ==========-->    
    <div id="map-wrapper" dir="rtl">
        <div id="map"></div>
    </div>
    <!--========== map end ==========-->    

    <!--========== footer ==========-->
    <div class="footer-container">
        <div class="container-fluid" style="padding:0;">
            <div class="row text-center filter-bar-row" style="position:absolute;bottom: 0;">
                <div class="col-lg-2">
                    <a style="color: #26262C;text-decoration: none;">
                        <div class="time-filter-box" style="box-shadow: none;font-weight: 700;margin-top: 0;">
                            סננו מפה לפי:
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-6">
                    <a style="color: #26262C;text-decoration: none;" target="_blank"
                        onclick="selectFilter(&quot;3Days&quot;)">
                        <div class="time-filter-box" id="three-days-button">
                            3 ימים אחרונים
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-6">
                    <a style="color: #26262C;text-decoration: none;" target="_blank"
                        onclick="selectFilter(&quot;week&quot;)">
                        <div class="time-filter-box" style="" id="one-weeks-button">
                            שבוע אחרון
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-6">
                    <a style="color: #26262C;text-decoration: none;" target="_blank"
                        onclick="selectFilter(&quot;twoWeeks&quot;)">
                        <div class="time-filter-box-selected" style="" id="two-weeks-button">
                            שבועיים אחרונים
                        </div>
                    </a>
                </div>
                <div class="col-lg-2 col-6">
                    <a style="color: #26262C;text-decoration: none;" target="_blank"
                        onclick="selectFilter(&quot;all&quot;)">
                        <div class="time-filter-box" style="" id="all-days-button">
                            כל הזמן
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!--========== header end ==========-->
    
    <!--========== side-bar ==========-->
    <div class="side-bar" style="display: none;">
        <div class="container-fluid" style="padding:0;">
            <div class="row side-bar-row text-right">
                <div class="col-12">
                    <div class="side-bar-box">
                        <img class="side-bar-logo mx-auto d-block" style="margin-left:10px; max-width: 140px;"
                                src="assets/images/icm.svg" alt="icon">
                    </div>
                </div>
                <div class="col-12">
                    <div class="side-bar-box">
                        <a style="margin-right: 30px;" class="side-bar-link" href="https://israelcoronamap.co.il/flights">
                            <img class="side-bar-img" style="margin-left:10px; "
                                src="assets/images/side-bar-icons/plane.svg" alt="icon">
                            חפשו טיסות
                        </a>
                    </div>
                </div>
                
                <div class="col-12">
                    <div class="side-bar-box">
                        <a style="margin-right: 30px;cursor: pointer;" class="side-bar-link code-embed-pop-up-click">
                            <img class="side-bar-img" style="margin-left:10px; "
                                src="assets/images/side-bar-icons/coding.svg" alt="icon">
                            הטמיעו קוד באתר
                        </a>
                    </div>
                </div> 
                <br>
                <br>
                <br>
                <div class="col-12">
                    <div class="side-bar-box">
                        <a style="margin-right: 30px;" class="side-bar-link" href="https://israelcoronamap.co.il/info">
                            <img class="side-bar-img" style="margin-left:10px;" src="assets/images/side-bar-icons/info.svg"
                                alt="icon">
                            אודות המיזם
                        </a>
                    </div>
                </div>
                <br>
                <br>
                <br>
                 <div class="col-12">
                    <div class="side-bar-box">
                        <a style="margin-right: 30px;cursor: pointer;" class="side-bar-link map-reader-pop-up-click">
                            <img class="side-bar-img" style="margin-left:10px;" src="assets/images/side-bar-icons/pin.svg"
                                alt="icon">
                           מקרא מפה
                        </a>
                    </div>
                </div>
                <br>
                <br>
                <br>
                <div class="col-12">
                    <div class="side-bar-box">
                        <a style="margin-right: 30px;" class="side-bar-link" target="_blank"
                            href="mailto:blueofer@gmail.com" title="email">
                            <img class="side-bar-img" style="margin-left:10px;" src="assets/images/side-bar-icons/email.svg"
                                alt="icon">
                           צרו קשר
                        </a>
                    </div>
                </div>
                <br>
                <br>
                <div class="col-12 d-md-none">
                    <a style="padding-top:20px;padding-bottom: 20px;" class="nav-link sos-number mada" href="tel:101">
                        <img style="margin-left:10px; max-width: 25px;margin-right: 15px;" src="assets/images/phone.svg"
                            alt="icon">
                        מד"א
                        <a style="padding-top:20px;padding-bottom: 20px;" class="nav-link sos-number health"
                            href="tel:*5004">
                            <img class="side-bar-img" style="margin-left:10px; margin-right: 15px;"
                                src="assets/images/phone.svg" alt="icon">
                            משרד הבריאות
                        </a>
                </div>
            </div>
        </div>
        <p class="map-updated">
            <span style="font-weight: 600;">המפה עודכנה לאחרונה:</span>
            
            11.3.2020, 16:00</p>
        <a class="terms-link terms-of-use-pop-up-click ">
            תנאי שימוש באתר
        </a>
    </div>
    <!--========== side-bar end ==========-->
    
    <!--========== terms-of-use-pop-up ==========-->
    <div id="terms-of-use-pop-up" class="pop-up-area" style="display: none;">

        <div class="pop-up">
            <div class="container">
                <div class="row text-right">
                    <div class="col-12 ">
                        <div class="box-size">
                            <h1 class="pop-up-title">תנאי שימוש באתר</h1>
                            <hr class='hr-titels' width="85px" align="right">
                            <p>תנאי שימוש מעודכנים ל - 7.3.20</p>
                            <p class="pop-up-text">
                                1. האתר הכולל מפה שמרכזת את כלל מקרי הקורונה בישראל, נבנתה מתוך רצון טוב, בהתנדבות ובתצורת
                                קוד פתוח עבור כלל הציבור, יחד עם זאת האחראים על פיתוח האתר אינם אחראים על כל נזק עקב שימוש
                                במפה או באתר.
                                <br>
                                <br>
                                2. יש לשים לב: יתכנו עיקובים במידע המוצג על המפה, מכיוון שהמידע מתקבל קודם כל ממשרד הבריאות
                                ורק לאחר מכן מוזן במפה, יש תמיד להתעדכן באתר משרד הבריאות ולעקוב אחר הפרסומים וההצהרות שלו.
                                <br>
                                <br>
                                3. המפה כוללת אפשרות סינון זמנים, סינון הזמנים מתייחס לזמן שממנו אירע המקרה, לדוגמא אם מקרה
                                אירע ב - 1.3, והתאריך היום הוא ה 15.3, אז זה אומר שתראו את המקרה, בלשונית "שבועיים אחרונים"
                                ו"כל הזמנים" אבל לא בלשונית "שבוע אחרון" או "3 ימים אחרונים".
                            </p>
                            <br>
                            <p class="pop-up-text">
                                לכל שאלה, תיקון טעויות ששמתם לב אליהם, עזרה בעדכון הדטא, או עזרה בפיתוח מוזמנים לפנות אלינו
                                כאן:
                                <br>
                                <a target="_blank" href="mailto:blueofer@gmail.com" title="email">blueofer@gmail.com</a>
                            </p>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
            <img id='terms-close-x' class="close-pop-up" src="assets/images/x-icon.svg" alt="x-icon">

        </div>

    </div>
    <!--========== terms-of-use-pop-up end ==========-->

    <!--========== embed-pop-up ==========-->
    <div style="z-index: 99999;" class="modal fadeIn" id="embedCoronaMap" tabindex="-1" role="dialog" aria-labelledby="embedCoronaMap" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="embedCoronaMapLongTitle">הטמיעו קוד באתר</h5>
                    <button id="modalCloseButton" type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div id="iframeCodeBlock" dir="ltr">
                        <samp id="copyToClipboardContent">
                            &lt;iframe style="width:100%"; width="600" height="450" src="https://israelcoronamap.co.il/embed" allowfullscreen&gt;&lt;/iframe&gt;
                        </samp>
                    </div>
                    <button type="button" id="copyToClipboardButton" data-clipboard-target="#copyToClipboardContent" class="btn btn-copy-clipboard" onclick="copyToClipboard()">העתקה</button>
                </div>
            </div>
        </div>

    </div>
    <!--========== embed-pop-up end ==========-->
    
    <!--========== map-reader-pop-up ==========-->
    <div id="map-reader-pop-up" class="pop-up-area" style="display: none;">

        <div class="pop-up">
            <div class="container">
                <div class="row text-right">
                    <div class="col-12 ">
                        <div class="box-size">
                            <h1 class="pop-up-title">מקרא מפה</h1>
                            <hr class='hr-titels' width="85px" align="right">
                            <p class="pop-up-text">
                           מקרא מפה
                            </p>
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
            <img id='map-reader-close-x' class="close-pop-up" src="assets/images/x-icon.svg" alt="x-icon">

        </div>

    </div>
    <!--========== map-reader-pop-up end ==========-->

    <!---========== scripts ==========-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/clipboard.js/2.0.4/clipboard.min.js"></script>
    <script src="js/scripts.js"></script>
    <script src="js/embed.js"></script>

</body>

</html>

<!-- Made With ♥ By Yossi Molcho -->