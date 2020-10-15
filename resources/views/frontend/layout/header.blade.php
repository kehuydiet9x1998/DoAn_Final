 <div class="header">
   <div class="wrapper" style="background: transparent none repeat scroll 0% 0%;">
     <div class="a-menu"><img src="/assets/menualt.png" alt="menu"></div><a href="/">
       <div class="width-logo sm-logo"><img class="logo" src="/assets/images/TEKY-Logo-W.png" alt="TEKY Online" style="margin-left: 40px;"></div>
     </a>
     <ul class="navi">
       <li><a href="/">Trang chủ</a></li>
       <li><a class="has_menu" href="/khoa-hoc">Khóa học</a>
         <ul class="navi-1">
           <li><a href="/robot">Khóa học lập trình robot</a></li>
           <li><a href="/robot">Lap trinh web</a></li>
         </ul>
       </li>
       <li><a class="has_menu" href="/tai-lieu-mien-phi">Tài liệu miễn phí</a>
         <ul class="navi-1">
           <li><a href="/robot">Lap trinh web</a></li>
           <li><a href="/robot">Lap trinh web</a></li>
         </ul>
       </li>
       <li><a href="/giao-vien">Đội ngũ giáo viên</a></li>
       <li><a href="/contact-us">Liên hệ</a></li>
       <li><a href="/login">Đăng nhập</a></li>
     </ul>
   </div>
 </div>

 <script>
   $(window).scroll(function(event) {
     var scroll = $(window).scrollTop();
     if (scroll > 0) {
       $('.header').css('background', 'lightgreen');
     } else {
       $('.header').css('background', 'transparent');
     }
   });

 </script>
