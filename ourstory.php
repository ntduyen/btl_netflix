<!DOCTYPE html>
<html lang="en">
<!-- duyen -->
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Netflix</title>
    <link rel="stylesheet" href="CSS/styles.css">
</head>

<body>
        <!-- Phần header do Đinh Hồng Quân làm-->
    <header class="showcase">
        <div class="showcase-head"> <!--Phần background-->
            <img src="Image/background.jpg" alt="Netflix Background" class="fit">
        </div>
        <div class="showcase-top" > <!--Phần mở đầu gồm logo và các button-->
            <img src="Image/netflixlogo.png"alt="Netflix Logo">
            <div class="lang-selection-container" id="lang-switcher">
                <div data-uia="language-picker-header+container" class="ui-select-wrapper"> <!--tạo button chọn ngôn ngữ-->
                    <i class="bi bi-globe"></i>
                    <label for="lang-switcher-header-select" class="ui-label">
                        <div class="select-arrow medium prefix globe"> <!--Thiết lập ngôn ngữ-->
                            <select data-uia="language-picker-header" class="ui-select medium" id="lang-switcher-header-select" tabindex="0" placeholder="lang-switcher">
                                <option selected="" lang="vi" value="/vn/" data-language="vi" data-country="VN">Vietnamese</option>
                                <option lang="en" value="/vn-en/" data-language="en" data-country="VN">English</option>
                            </select>
                        </div>        
                    </label>              
                </div>
            </div>
            <a href="signin.php" class="btn btn-rounded" data-uia="header-login-link">Sign In</a> <!--tạo button đăng nhập-->
        </div>
        <div class="showcase-content">  <!--Phần tiêu đề nội dung-->
            <h1>Unlimited movies, TV shows, and more.</h1>
            <h3>Watch anywhere. Cancel anytime.</h3>
            <p>Ready to watch? Enter your email to create or restart your membership.</p>
            <input type="email" name="email" id="email" placeholder="Email Address"> <!--Tạo input nhập email-->
            <a href="#" class="btn-lg" data-uia="header-getstart-link">Get Start ></a> <!--Tạo button bắt đầu-->
        </div>
    </header>
    <section class="style-cards"> <!-- chèn thêm các hình ảnh và nội dung-->
        <div class="card-0">
            <img src="Image/2.jpg" alt="Netflix Mobile">
            <div class="desc-0">
                <h1>Create profiles for kids.</h1>
                <h3>Take your kids on adventures with their favorite characters in a space dedicated to them for free with your membership.</h3>
            </div>
        </div>
        <div class="card-1">
            <div class="desc-1">
                <h1>Enjoy on your TV</h1>
                <h3>Watch on smart devices like TVs, PlayStation, Xbox, Chromecast, Apple TV, Blu-ray and more.</h3>
            </div>
            <img src="Image/tv.png" alt="Netflix TV">
            <video class="video-1" autoplay="" playinline=""muted="" loop=""><source src="Image/1.m4v" type="video/mp4"></video>
        </div>
        <div class="card-2">
            <img src="Image/part2.jpg" alt="Netflix Mobile">
            <div class="desc-2">
                <h1>Download your shows for offline viewing.</h1>
                <h3>Store your favorite episodes easily and always have something to watch.</h3>
            </div>
        </div>
        <div class="card-3">
            <div class="desc-3">
                <h1>Do you have an Android phone? Try our new free service plan!</h1>
                <h3>Watch newly curated movies and TV shows without providing payment information!</h3>
                <div class="app-link">
                    <a data-uia="our-story-cta-freePlanAndroid" class="btn btn-app" href="https://play.google.com/store/apps/details?id=com.netflix.mediaclient" target="_top">
                        <span id="" class="app-text" data-uia="Download Netflix App">Get the app ></span>
                        <span id="" class="chevron-right-arrow" data-uia=""></span>
                    </a>
                </div>
            </div>
            <img src="Image/vn.jpg" alt="Netflix Application"> <!-- Ảnh ứng dựng netflix-->
        </div>
        <div class="card-4">
            <div class="desc-4">
                <h1>Watch anytime, anywhere.</h1>
                <h3>Stream unlimited movies and TV entertainment on phones, tablets, laptops and TVs.</h3>
            </div>
            <img src="Image/4.png" alt="Device-Pile-In">
            <video class="video-2" autoplay="" playinline=""muted="" loop=""><source src="Image/2.m4v" type="video/mp4"></video>
        </div>
    </section>
    <section class="list">
        <h1>Frequently Asked Questions</h1>
        <div class="accordion-menu">
            <div class="item" id="item1">
                <a href="#item1" class="title">
                    <span>What is Netflix?</span>
                    <i class="icon"></i>
                </a>
                <p class="text">
                    Netflix is a streaming service that offers a wide variety of award-winning TV shows, movies, anime,
                    documentaries, and more on thousands of internet-connected devices.
                    <br>
                    <br>
                    You can watch as much as you want, whenever you want without a single commercial – all for one low
                    monthly price. There's always something new to discover and new TV shows and movies are added every
                    week!

                </p>
            </div>
            <div class="item" id="item2">
                <a href="#item2" class="title">
                    <span>How much does Netflix cost ?</span>
                    <i class="icon"></i>
                </a>
                <p class="text">
                    Watch Netflix on your smartphone, tablet, Smart TV, laptop, or streaming device, all for one fixed
                    monthly fee. Plans range from 70,000 ₫ to 260,000 ₫ a month. No extra costs, no contracts.

                </p>
            </div>
            <div class="item" id="item3">
                <a href="#item3" class="title">
                    <span>Where can I watch?</span>
                    <i class="icon"></i>
                </a>
                <p class="text">
                    Watch anywhere, anytime. Sign in with your Netflix account to watch instantly on the web at
                    netflix.com from your personal computer or on any internet-connected device that offers the Netflix
                    app, including smart TVs, smartphones, tablets, streaming media players and game consoles.

                    <br>
                    <br>
                    You can also download your favorite shows with the iOS, Android, or Windows 10 app. Use downloads to
                    watch while you're on the go and without an internet connection. Take Netflix with you anywhere.

                </p>
            </div>
            <div class="item" id="item4">
                <a href="#item4" class="title">
                    <span>How do I cancel?</span>
                    <i class="icon"></i>
                </a>
                <p class="text">
                    Netflix is flexible. There are no pesky contracts and no commitments. You can easily cancel your
                    account online in two clicks. There are no cancellation fees – start or stop your account anytime.
                </p>
            </div>
            <div class="item" id="item5">
                <a href="#item5" class="title">
                    <span>What can I watch on Netflix?</span>
                    <i class="icon"></i>
                </a>
                <p class="text">
                    Netflix has an extensive library of feature films, documentaries, TV shows, anime, award-winning
                    Netflix originals, and more. Watch as much as you want, anytime you want.

                </p>
            </div>
            <div class="item" id="item6">
                <a href="#item6" class="title">
                    <span>Is Netflix good for kids?</span>
                    <i class="icon"></i>
                </a>
                <p class="text">
                    The Netflix Kids experience is included in your membership to give parents control while kids enjoy
                    family-friendly TV shows and movies in their own space.
                    <br>
                    <br>
                    Kids profiles come with PIN-protected parental controls that let you restrict the maturity rating of
                    content kids can watch and block specific titles you don’t want kids to see.
                </p>
            </div>

        </div>
    </section>

    <!-- input email -->
    <section class="banner">
        <div class="box">
            <div class="heading">
                <p>Ready to watch? Enter your email to create or restart your membership.</p>
            </div>
            <div class="search">
                <input type="text" name="email" placeholder="Email address">
                <button type="button">GET STARTED > </button>
    
            </div>
        </div>
    </section>
    <hr>
    <!-- Tạo footer -->
    <footer class="footer">
        <p>Questions? Contact us.</p>
        <div class="footer-cols">
            <ul>
                <li><a href="https://help.netflix.com/en/node/412">FAQ</a></li>
                <li><a href="https://ir.netflix.net/ir-overview/profile/default.aspx">Invertor Relations</a></li>
                <li><a href="https://help.netflix.com/legal/privacy">Privacy</a></li>
                <li><a href="https://fast.com/">Speed Test</a></li>
            </ul>
            <ul>
                <li><a href="https://help.netflix.com/en/">Help Center</a></li>
                <li><a href="https://jobs.netflix.com/">Jobs</a></li>
                <li><a href="#">Cookie Preferences</a></li>
                <li><a href="https://help.netflix.com/legal/notices">Legal Notices</a></li>
            </ul>
            <ul>
                <li><a href="#">Account</a></li>
                <li><a href="https://devices.netflix.com/en/">Ways to Watch</a></li>
                <li><a href="https://help.netflix.com/legal/corpinfo">Corporate Information</a></li>
                <li><a href="https://www.netflix.com/vn-en/browse/genre/839338">Only on Netflix</a></li>
            </ul>
            <ul>
                <li><a href="https://media.netflix.com/en/">Media Center</a></li>
                <li><a href="https://help.netflix.com/legal/termsofuse">Terms of Use</a></li>
                <li><a href="https://help.netflix.com/en/contactus">Contact Us</a></li>
            </ul>
        </div>
        
        <p>NETFLIX VIETNAM</p>

        </div>
        <div data-uia="language-picker-header+container" class="ui-select-wrapper"> <!--tạo button chọn ngôn ngữ-->
            <i class="bi bi-globe"></i>
            <label for="lang-switcher-header-select" class="ui-label">
                <div class="select-arrow medium prefix globe">           
                    <select data-uia="language-picker-header" class="ui-select medium" id="lang-switcher-header-select" tabindex="0" placeholder="lang-switcher">
                        <option selected="" lang="vi" value="/vn/" data-language="vi" data-country="VN">Tiếng Việt</option>
                        <option lang="en" value="/vn-en/" data-language="en" data-country="VN">English</option>
                    </select>
                </div>        
            </label>              
        </div>
        
    </footer>
</body>

</html>