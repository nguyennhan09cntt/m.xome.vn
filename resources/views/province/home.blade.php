@extends('layouts.app')

@section('content') 
<div id="content" class="grey-blue page">

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
        
 

   <div class="animated fadeinup delay-1">          
      <div class="blog-card animated fadein delay-1">
        <div class="blog-header">
          <img class="avatar circle" src="/img/user4.jpg" alt="">
          <div class="blog-author">
            <span>Jassie North</span>
            <span class="small">1hour ago - 62 Share</span>
          </div>
        </div>
        <div class="blog-image">
          <img src="/img/10.jpg" alt="">
        </div>
        <div class="blog-preview p-20">
          <h4 class="uppercase">It really makes no sense</h4>
          <p>This is dummy caption. It has been placed here solely to demonstrate the look and feel of finished, typeset text.</p>
          <a href="article.html" class="waves-effect waves-light btn primary-color">Read</a>
        </div>
    </div>         
         
   </div>      
       
</div> <!-- End of Page Content --> 
        
@endsection