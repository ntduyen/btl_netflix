<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
     <!-- cdnjs -->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
     <link rel="stylesheet" href="./stylemain.css">
    <title>Netflix clone</title>
</head>
  
<body>
    <!--  heading -->
    <div class="fixed-div" id="home">
    <div class="parent-div">
    <img src="./image/netflixlogo.png" alt="netflix img" class="logo">
        <div class="dropdown">
            <span class="browse-el">Browse</span>
            <div class="dropdown-content">
              <p><a href="#dramas">Trang chủ</a></p>
               <p><a href="#dramas">Phim T.hình</a></p>
                <p><a href="#new_popular">Phim</a></p>
                <p><a href="#new_popular">Mới & phổ biến</a></p>
              <p><a href="#list">Danh sách của tôi</a></p> 
            </div>
    </div>
    </div>
    <!-- search -->

 <div class="box" style="float: right;">
    <input type="text" placeholder="Tìm kiếm..">
    <i class="fas fa-search"></i>
</div>
 

    <!-- <div class="float-op">
        <input type="text" placeholder="Tìm kiếm..">
        <a ><i class="fas fa-search"></i></a>
    </div> -->
   <div class="box" style="float: right;">
    <input type="text" placeholder="Tìm kiếm..">
    <i class="fas fa-search"></i>
       </div>

      <!-- btn đăng xuất -->
      <a class="button1" href="">
        <span class="btn1">Đăng Xuất</span>
        </a>
</div>
  <!-- image and logo -->
<div class="between-img-div" >
    <img src="./image/anhphim.png" class="between-img" alt="">
</div>
    <div class="logo-and-text">
        <div class="titleWrapper" style="transform-origin: left bottom; transform: scale(1) translate3d(0px, 0px, 0px); transition-duration: 1300ms; transition-delay: 0ms;">
            <div class="billboard-title">
                <img class="title-logo" src="./image/tenphim.png" title="Between" alt="Between">
            </div>
        </div>
            <div class="info-wrapper" style="transform: translate3d(0px, 0px, 0px); transition-duration: 1300ms; transition-delay: 0ms; opacity: 1;">
                <div class="info-wrapper-fade" style="opacity: 1; transition-duration: 600ms; transition-delay: 200ms;">
                        <div class="series-synopsis">After a mysterious disease kills every resident over 21 years old,<br> survivors of a town must fend for<br> themselves when the government quarantines them.</div>
                    </div>
                    <button class="color-primary" tabindex="-1" type="button"><div class="ltr-1ksxkn9"><div class="medium ltr-dguo2f" role="presentation">
                        <svg class="svg-radius" viewBox="0 0 24 24"><path d="M6 4l15 8-15 8z" fill="currentColor"></path></svg></div></div>
                        <div class="just-div" style="width:1rem"></div>

                    <a href="./Movies/videos/video4.mp4">
                    <a href="./Movies/videos/video32.mp4">

                    <span class="info-btn" >Play</span></button>
                   </a>
</div>
</div>                 

<!-- rating -->
<div class="ratin-div" style="float: right;">
        <button aria-label="Replay" class="color-supplementary" type="button">
                <div class="small-div">
                    <svg class="style-svg" viewBox="0 0 24 24">
                        <path d="M20 12.35l1.919-1.371 1.162 1.627-4.08 2.915-4.082-2.915 1.162-1.627L18 12.349V12c0-3.87-3.13-7-7-7s-7 3.13-7 7 3.13 7 7 7c1.93 0 3.68-.79 4.94-2.06l1.42 1.42A8.954 8.954 0 0 1 11 21a9 9 0 1 1 9-9v.35z" fill="currentColor">
 </path></svg>
</div></button>
<span class="rating">
    <span class="maturity-number">16+</span>
</span></div>
</div>
<!-- drama collection -->
<section class="all-drama">
<div class="tv-dramas ">
    <h2 class="tvd-h2" id="dramas">Phổ biến trên Netflix</h2>
    <div class="div-width">
    <div class="all-movie-div filtering">
 

<a href="./Movies/videos/video1.mp4">

   <div >

   <div >

        <img src="./Movies/images/img1.jpg" alt="">
    </div>
</a> 
</a>
<a href="./Movies/videos/video2.mp4">
    <div>
        <img src="./Movies/images/img2.webp" alt="">
    </div>
</a>
</a>
<a href="./Movies/videos/video3.mp4">
    <div >
        <img src="./Movies/images/img3.webp" alt="">
    </div>
</a>
</a>
<a href="./Movies/videos/video4.mp4">

    <div>

    <div >

        <img src="./Movies/images/img4.jpg" alt="">
    </div>
</a>
</a>
<a href="./Movies/videos/video5.mp4">
    <div >
        <img src="./Movies/images/img5.jpg" alt="">
    </div>
</a>
<a href="./Movies/videos/video6.mp4">
    <div >
        <img src="./Movies/images/img6.jpg" alt="">
    </div>
</a>
<a href="./Movies/videos/video7.mp4">
    <div >
        <img src="./Movies/images/img7.jpg"  alt="">
    </div>
</a>
<a href="./Movies/videos/video8.mp4">
    <div >
        <img src="./Movies/images/img8.jpg" alt="">
    </div>
</a>
<a href="./Movies/videos/video9.mp4">
    <div >
        <img src="./Movies/images/img9.webp" alt="">
    </div>
</a>
<a href="./Movies/videos/video10.mp4">
    <div >
        <img src="./Movies/images/img10.jpg"  alt="">
    </div>
</a>
</div>
</div>
</div>
<div class="tv-dramas ">
    <h2 class="tvd-h2">Hiện đang thịnh hành </h2>
    <div class="div-width">
    <div class="all-movie-div filtering">
    

        <a href="./Movies/videos/video11.mp4">
            <div >
                 <img src="./Movies/images/img11.webp" alt="">
             </div>
         </a> 
         </a>
         <a href="./Movies/videos/video12.mp4">
             <div>
                 <img src="./Movies/images/img12.jpg" alt="">
             </div>
         </a>
         </a>
         <a href="./Movies/videos/video13.mp4">
             <div >
                 <img src="./Movies/images/img13.webp" alt="">
             </div>
         </a>
         </a>
         <a href="./Movies/videos/video14.mp4">
             <div >
                 <img src="./Movies/images/img14.webp" alt="">
             </div>
         </a>
         </a>
         <a href="./Movies/videos/video15.mp4">
             <div >
                 <img src="./Movies/images/img15.webp" alt="">
             </div>
         </a>
         <a href="./Movies/videos/video16.mp4">
             <div >
                 <img src="./Movies/images/img16.webp" alt="">
             </div>
         </a>
         <a href="./Movies/videos/video17.mp4">
             <div >
                 <img src="./Movies/images/img17.jpeg" alt="">
             </div>
         </a>
         <a href="./Movies/videos/video18.mp4">
             <div >
                 <img src="./Movies/images/img18.webp" alt="">
             </div>
         </a>
         <a href="./Movies/videos/video19.mp4">
             <div >
                 <img src="./Movies/images/img19.webp" alt="">
             </div>
         </a>
         <a href="./Movies/videos/video20.mp4">
             <div >
                 <img src="./Movies/images/img20.webp"  alt="">
             </div>
         </a>
</div>
</div>
</div>
<div class="tv-dramas ">
    <h2 class="tvd-h2">Chương trình truyền hình lãng mạn Hàn Quốc</h2>
    <div class="div-width">
    <div class="all-movie-div filtering">
        <a href="./Movies/videos/video11.mp4">
            <div >
                 <img src="./Movies/images/img21.jpg" alt="">
             </div>
         </a> 
         </a>
         <a href="./Movies/videos/video12.mp4">
             <div>
                 <img src="./Movies/images/img22.webp" alt="">
             </div>
         </a>
         </a>
         <a href="./Movies/videos/video13.mp4">
             <div >
                 <img src="./Movies/images/img23.webp" alt="">
             </div>
         </a>
         </a>
         <a href="./Movies/videos/video14.mp4">
             <div >
                 <img src="./Movies/images/img24.webp" alt="">
             </div>
         </a>
         </a>
         <a href="./Movies/videos/video15.mp4">
             <div >
                 <img src="./Movies/images/img25.jpg" alt="">
             </div>
         </a>
         <a href="./Movies/videos/video16.mp4">
             <div >
                 <img src="./Movies/images/img26.webp" alt="">
             </div>
         </a>
         <a href="./Movies/videos/video17.mp4">
             <div >
                 <img src="./Movies/images/img27.webp" alt="">
             </div>
         </a>
         <a href="./Movies/videos/video18.mp4">
             <div >
                 <img src="./Movies/images/img28.jpg" alt="">
             </div>
         </a>
         <a href="./Movies/videos/video19.mp4">
             <div >
                 <img src="./Movies/images/img29.webp" alt="">
             </div>
         </a>
         <a href="./Movies/videos/video20.mp4">
             <div >
                 <img src="./Movies/images/img30.webp"  alt="">
             </div>
         </a>
</div>
</div>
</div>
<div class="tv-dramas ">
    <h2 class="tvd-h2">Anime</h2>
    <div class="div-width">
    <div class="all-movie-div filtering">
    
        <a href="./Movies/videos/video1.mp4">
            <div >
                 <img src="./Movies/images/img31.webp" alt="">
             </div>
         </a> 
         </a>
         <a href="./Movies/videos/video2.mp4">
             <div>
                 <img src="./Movies/images/img32.webp" alt="">
             </div>
         </a>
         </a>
         <a href="./Movies/videos/video3.mp4">
             <div >
                 <img src="./Movies/images/img33.jpg" alt="">
             </div>
         </a>
         </a>
         <a href="./Movies/videos/video4.mp4">
             <div >
                 <img src="./Movies/images/img34.jpg" alt="">
             </div>
         </a>
         </a>
         <a href="./Movies/videos/video5.mp4">
             <div >
                 <img src="./Movies/images/img35.webp" alt="">
             </div>
         </a>
         <a href="./Movies/videos/video6.mp4">
             <div >
                 <img src="./Movies/images/img36.webp" alt="">
             </div>
         </a>
         <a href="./Movies/videos/video7.mp4">
             <div >
                 <img src="./Movies/images/img37.webp"  alt="">
             </div>
         </a>
         <a href="./Movies/videos/video8.mp4">
             <div >
                 <img src="./Movies/images/img38.webp" alt="">
             </div>
         </a>
         <a href="./Movies/videos/video9.mp4">
             <div >
                 <img src="./Movies/images/img39.webp" alt="">
             </div>
         </a>
         <a href="./Movies/videos/video10.mp4">
             <div >
                 <img src="./Movies/images/img40.webp"  alt="">
             </div>
         </a>
</div>
</div>
</div>
<div class="tv-dramas ">
    <h2 class="tvd-h2" >Phim & chương trình truyền hình Việt Nam</h2>
    <div class="div-width">
    <div class="all-movie-div filtering">
    

        <a href="./Movies/videos/video1.mp4">
            <div >
                 <img src="./Movies/images/img41.webp" alt="">
             </div>
         </a> 
         </a>
         <a href="./Movies/videos/video2.mp4">
             <div>
                 <img src="./Movies/images/img42.webp" alt="">
             </div>
         </a>
         </a>
         <a href="./Movies/videos/video3.mp4">
             <div >
                 <img src="./Movies/images/img43.webp" alt="">
             </div>
         </a>
         </a>
         <a href="./Movies/videos/video4.mp4">
             <div >
                 <img src="./Movies/images/img44.webp" alt="">
             </div>
         </a>
         </a>
         <a href="./Movies/videos/video5.mp4">
             <div >
                 <img src="./Movies/images/img45.webp" alt="">
             </div>
         </a>
         <a href="./Movies/videos/video6.mp4">
             <div >
                 <img src="./Movies/images/img46.webp" alt="">
             </div>
         </a>
         <a href="./Movies/videos/video7.mp4">
             <div >
                 <img src="./Movies/images/img47.webp"  alt="">
             </div>
         </a>
         <a href="./Movies/videos/video8.mp4">
             <div >
                 <img src="./Movies/images/img48.webp" alt="">
             </div>
         </a>
         <a href="./Movies/videos/video9.mp4">
             <div >
                 <img src="./Movies/images/img49.webp" alt="">
             </div>
         </a>
         <a href="./Movies/videos/video10.mp4">
             <div >
                 <img src="./Movies/images/img50.webp"  alt="">
             </div>
         </a>
</div>
</div>
</div>

<div class="tv-dramas ">
    <h2 class="tvd-h2" id="new_popular" >Chương trình truyền hình Mỹ chuyển thể từ truyện tranh</h2>
    <div class="div-width">
    <div class="all-movie-div filtering">
    
        <a href="./Movies/videos/video1.mp4">
            <div >
                 <img src="./Movies/images/img60.jpg" alt="">
             </div>
         </a> 
         </a>
         <a href="./Movies/videos/video2.mp4">
             <div>
                 <img src="./Movies/images/img51.jpg" alt="">
             </div>
         </a>
         </a>
         <a href="./Movies/videos/video3.mp4">
             <div >
                 <img src="./Movies/images/img52.jpg" alt="">
             </div>
         </a>
         </a>
         <a href="./Movies/videos/video4.mp4">
             <div >
                 <img src="./Movies/images/img53.jpg" alt="">
             </div>
         </a>
         </a>
         <a href="./Movies/videos/video5.mp4">
             <div >
                 <img src="./Movies/images/img54.jpg" alt="">
             </div>
         </a>
         <a href="./Movies/videos/video6.mp4">
             <div >
                 <img src="./Movies/images/img55.jpg" alt="">
             </div>
         </a>
         <a href="./Movies/videos/video7.mp4">
             <div >
                 <img src="./Movies/images/img56.jpg"  alt="">
             </div>
         </a>
         <a href="./Movies/videos/video8.mp4">
             <div >
                 <img src="./Movies/images/img57.jpg" alt="">
             </div>
         </a>
         <a href="./Movies/videos/video9.mp4">
             <div >
                 <img src="./Movies/images/img58.jpg" alt="">
             </div>
         </a>
         <a href="./Movies/videos/video10.mp4">
             <div >
                 <img src="./Movies/images/img59.jpg"  alt="">
             </div>
         </a>
</div>
</div>
</div>
<div class="tv-dramas ">
    <h2 class="tvd-h2"  id="list">Phim mới phổ biến</h2>
    <div class="div-width">
    <div class="all-movie-div filtering">
    
        <a href="./Movies/videos/video1.mp4">
            <div >
                 <img src="./Movies/images/img61.jpg" alt="">
             </div>
         </a> 
         </a>
         <a href="./Movies/videos/video2.mp4">
             <div>
                 <img src="./Movies/images/img62.jpg" alt="">
             </div>
         </a>
         </a>
         <a href="./Movies/videos/video3.mp4">
             <div >
                 <img src="./Movies/images/img63.jpg" alt="">
             </div>
         </a>
         </a>
         <a href="./Movies/videos/video4.mp4">
             <div >
                 <img src="./Movies/images/img64.webp" alt="">
             </div>
         </a>
         </a>
         <a href="./Movies/videos/video5.mp4">
             <div >
                 <img src="./Movies/images/img65.jpg" alt="">
             </div>
         </a>
         <a href="./Movies/videos/video6.mp4">
             <div >
                 <img src="./Movies/images/img66.webp" alt="">
             </div>
         </a>
         <a href="./Movies/videos/video7.mp4">
             <div >
                 <img src="./Movies/images/img67.webp"  alt="">
             </div>
         </a>
         <a href="./Movies/videos/video8.mp4">
             <div >
                 <img src="./Movies/images/img68.webp" alt="">
             </div>
         </a>
         <a href="./Movies/videos/video9.mp4">
             <div >
                 <img src="./Movies/images/img69.webp" alt="">
             </div>
         </a>
         <a href="./Movies/videos/video10.mp4">
             <div >
                 <img src="./Movies/images/img70.jpg"  alt="">
             </div>
         </a>
</div>
</div>
</div>
<div class="tv-dramas ">
    <h2 class="tvd-h2" >Danh sách của tôi</h2>
    <div class="div-width">
    <div class="all-movie-div filtering">
        <a href="./Movies/videos/video10.mp4">
            <div >
                <img src="./Movies/images/img70.jpg"  alt="">
            </div>
        </a>
        <a href="./Movies/videos/video7.mp4">
            <div >
                <img src="./Movies/images/img67.webp"  alt="">
            </div>
        </a>
        <a href="./Movies/videos/video10.mp4">
            <div >
                <img src="./Movies/images/img59.jpg"  alt="">
            </div>
        </a>
        <a href="./Movies/videos/video4.mp4">
            <div >
                <img src="./Movies/images/img53.jpg" alt="">
            </div>
        </a>
        <a href="./Movies/videos/video10.mp4">
            <div >
                <img src="./Movies/images/img40.webp"  alt="">
            </div>
        </a>
        <a href="./Movies/videos/video1.mp4">
            <div >
                 <img src="./Movies/images/img1.jpg" alt="">
             </div>
         </a> 
         <a href="./Movies/videos/video5.mp4">
            <div >
                <img src="./Movies/images/img5.jpg" alt="">
            </div>
        </a>
        <a href="./Movies/videos/video14.mp4">
            <div >
                <img src="./Movies/images/img14.webp" alt="">
            </div>
        </a>
        <a href="./Movies/videos/video14.mp4">
            <div >
                <img src="./Movies/images/img24.webp" alt="">
            </div>
        </a>
        <a href="./Movies/videos/video1.mp4">
            <div >
                 <img src="./Movies/images/img31.webp" alt="">
             </div>
         </a> 

</div>
</div>
</div>
<div class="tv-dramas ">
    <h2 class="tvd-h2" >Hài</h2>
    <div class="div-width">
    <div class="all-movie-div filtering">
    

        <a href="./Movies/videos/video10.mp4">
            <div >
                <img src="./Movies/images/img71.jpg"  alt="">
            </div>
        </a>
        <a href="./Movies/videos/video7.mp4">
            <div >
                <img src="./Movies/images/img72.webp"  alt="">
            </div>
        </a>
        <a href="./Movies/videos/video10.mp4">
            <div >
                <img src="./Movies/images/img73.webp"  alt="">
            </div>
        </a>
        <a href="./Movies/videos/video4.mp4">
            <div >
                <img src="./Movies/images/img74.webp" alt="">
            </div>
        </a>
        <a href="./Movies/videos/video10.mp4">
            <div >
                <img src="./Movies/images/img75.webp"  alt="">
            </div>
        </a>
        <a href="./Movies/videos/video1.mp4">
            <div >
                 <img src="./Movies/images/img76.webp" alt="">
             </div>
         </a> 
         <a href="./Movies/videos/video5.mp4">
            <div >
                <img src="./Movies/images/img77.webp" alt="">
            </div>
        </a>
        <a href="./Movies/videos/video14.mp4">
            <div >
                <img src="./Movies/images/img78.webp" alt="">
            </div>
        </a>
        <a href="./Movies/videos/video14.mp4">
            <div >
                <img src="./Movies/images/img79.webp" alt="">
            </div>
        </a>
        <a href="./Movies/videos/video1.mp4">
            <div >
                 <img src="./Movies/images/img80.jpg" alt="">
             </div>
         </a> 

</div>
</div>
</div>

<div class="tv-dramas ">
    <h2 class="tvd-h2">Chỉ có trên Netflix</h2>
    <div class="div-width">
    <div class="all-movie-div filtering">
    

        <a href="./Movies/videos/video10.mp4">
            <div >
                <img src="./Movies/images/img81.webp"  alt="">
            </div>
        </a>
        <a href="./Movies/videos/video7.mp4">
            <div >
                <img src="./Movies/images/img82.jpg"  alt="">
            </div>
        </a>
        <a href="./Movies/videos/video10.mp4">
            <div >
                <img src="./Movies/images/img83.webp"  alt="">
            </div>
        </a>
        <a href="./Movies/videos/video4.mp4">
            <div >
                <img src="./Movies/images/img84.webp" alt="">
            </div>
        </a>
        <a href="./Movies/videos/video10.mp4">
            <div >
                <img src="./Movies/images/img85.webp"  alt="">
            </div>
        </a>
        <a href="./Movies/videos/video1.mp4">
            <div >
                 <img src="./Movies/images/img86.webp" alt="">
             </div>
         </a> 
         <a href="./Movies/videos/video5.mp4">
            <div >
                <img src="./Movies/images/img87.jpg" alt="">
            </div>
        </a>
        <a href="./Movies/videos/video14.mp4">
            <div >
                <img src="./Movies/images/img88.webp" alt="">
            </div>
        </a>
        <a href="./Movies/videos/video14.mp4">
            <div >
                <img src="./Movies/images/img89.jpg" alt="">
            </div>
        </a>
        <a href="./Movies/videos/video1.mp4">
            <div >
                 <img src="./Movies/images/img90.webp" alt="">
             </div>
         </a> 

</div>
</div>
</div>

<!-- <footer> -->

<footer>
<div class="grid-container">
    <div class="grid-item">
        <span><i class="fab fa-facebook-square"></i></i></span>
        <span><i class="fab fa-instagram"></i></span>
        <span><i class="fab fa-youtube"></i></span>
        <p>Audio and Subtitle</p>
        <p>Media Center</p>
        <p>Privacy</p>
        <p>Contact Us</p>
        <p class="p-grid">Service code</p>
        <p>&copy;1997-2021 Netflix, inc,(7cBab736-9ae4-4251-9ea9-cf9fdd09f7cc)</p>
    </div>
    <div class="grid-item"> 
        <p>Audio Description</p>
        <p>Investor Relations</p>
        <p>Legal Notices</p></div>
    <div class="grid-item"> 
        <p>Help Center</p>
        <p>Jobs</p>
        <p>Cookie Preference</p>
       </div>  
    <div class="grid-item"> 
        <p>Gift Cards</p>
        <p>Terms Of Use</p>
        <p>Corperate Information</p> 
  </div>
</footer>
</section>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js" integrity="sha512-eP8DK17a+MOcKHXC5Yrqzd8WI5WKh6F1TIk5QZ/8Lbv+8ssblcz7oGC8ZmQ/ZSAPa7ZmsCU4e/hcovqR8jfJqA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $('.filtering').slick({
  slidesToShow: 5,   //số phần tử hiện của slider
  slidesToScroll: 3, // số phần tử mỗi lần lướt sang
  arrows:false //phím mũi tên 2 beên
});

var filtered = false;

$('.js-filter').on('click', function(){
  if (filtered === false) {
    $('.filtering').slick('slickFilter',':even');
    $(this).text('Unfilter Slides');
    filtered = true;
  } else {
    $('.filtering').slick('slickUnfilter');
    $(this).text('Filter Slides');
    filtered = true;
  }
});
</script>


</body>
</html>