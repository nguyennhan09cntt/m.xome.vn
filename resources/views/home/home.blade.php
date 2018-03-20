@extends('layouts.app')

@section('content')
<div id="content" class="bg-v-2">

  <!-- Toolbar -->
  <div id="toolbar" class="primary-color">
    <div class="open-left" id="open-left" data-activates="slide-out-left">
      <i class="ion-android-menu"></i>
    </div>
    <span class="title">XOME.VN</span>
    <div class="open-right">
      <a href="search.html">
        <i class="ion-android-search"></i>
      </a>
    </div>  
  </div>
        
  <!-- Slider -->         
  <div class="swiper-container slider-sliced">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="slider-bottom-right valign-wrapper">
          <div class="valign center-align width-100 p-b-5em">
            <h2 class="uppercase">Xome.vn</h2>
            <p>Tìm và thuê phòng trọ, căn hộ trực tuyến tại TPHCM nhanh chóng tiện lợi. ĐẶT TRƯỚC, XEM PHÒNG TRƯỚC, THANH TOÁN SAU. Giá tốt nhất và dịch vụ nhanh chóng chỉ có tại  xome.vn</p>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="slider-bottom-left valign-wrapper">
          <div class="valign left-align width-100 p-b-5em">
            <h2 class="uppercase">Xome.vn</h2>
            <p>Đăng tin cho thuê nhà nguyên căn, phòng trọ, tìm người ở ghép miễn phí dễ dàng và hiệu quả. </p>
          </div>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="slider-bottom-right valign-wrapper">
          <div class="valign right-align width-100 p-b-5em">
            <h2 class="uppercase">Xome.vn</h2>
            <p>Hơn 10000 tin đăng cho thuê phòng trọ, nhà trọ giá rẻ tại TP.HCM: phòng đẹp, mới xây, cao cấp, đầy đủ tiện nghi; phòng có gác, lửng giá tốt cho sinh viên; phòng 1 người ở, dưới 1 triệu; có phòng cần tìm người ở ghép tha hồ cho bạn lựa chọn.</p>
          </div>
        </div>
      </div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div>
  <!-- End of Slider -->

   <div class="animated fadeinup delay-1">
          <div class="shop-banner animated fadeinup delay-1">
            <a href="/thue-tro/sai-gon/quan-1/">
              <img src="/img/area/quan-1.png" alt="" style="max-height: 100%;">
              <div class="border-overlay valign-wrapper">
                <div class="valign center width-100" >
                  <h3 class="white-text">Quận 1</h3>
                  <p class="white-text">300 tin</p>
                </div>
              </div>
            </a>
          </div>
          <div class="shop-banner animated fadeinup delay-2">
            <a href="/thue-tro/sai-gon/quan-3/">
              <img src="/img/area/quan-3.jpg" alt="">
              <div class="border-overlay valign-wrapper">
                <div class="valign center width-100">
                  <h3 class="white-text">Quận 3</h3>
                  <p class="white-text">178 tin</p>
                </div>
              </div>
            </a>
          </div>
          <div class="shop-banner animated fadeinup delay-3">
            <a href="/thue-tro/sai-gon/quan-tan-binh/">
              <img src="/img/area/quan-tan-binh.jpg" alt="">
              <div class="border-overlay valign-wrapper">
                <div class="valign center width-100">
                  <h3 class="white-text">Quận Tân Bình</h3>
                  <p class="white-text">316 tin</p>
                </div>
              </div>
            </a>
          </div>
          <div class="shop-banner width-100 animated fadeinup delay-3">
            <a href="/thue-tro/sai-gon/quan-thu-duc/">
              <img src="/img/area/quan-thu-duc.jpg" alt="">
              <div class="border-overlay valign-wrapper">
                <div class="valign center width-100">
                  <h3 class="white-text">Quận Thủ Đức</h3>
                  <p class="white-text">235 tin</p>
                </div>
              </div>
            </a>
          </div>
          
          <div class="clr"></div>

          <!-- Footer -->
          <footer class="page-footer primary-color">
          <!-- <div class="container">
            <div class="row">
              <div class="col s12">
                <p class="center-align grey-text text-lighten-4">You can use rows and columns here to organize your footer content.</p>
                <div class="center-align">
                  <i class="ion-social-facebook m-10 white-text"></i>
                  <i class="ion-social-twitter m-10 white-text"></i>
                  <i class="ion-social-pinterest m-10 white-text"></i>
                  <i class="ion-social-dribbble m-10 white-text"></i>
                </div>
              </div>
            </div>
          </div> -->
          <div class="footer-copyright blue darken-1">
            <div class="container">
            2018 Xome.vn
            <a class="grey-text text-lighten-4 right" href="#!">Privacy Policy</a>
            </div>
          </div>
        </footer>
        </div> 
      
         
      </div>      
       
</div> <!-- End of Page Content --> 
@endsection