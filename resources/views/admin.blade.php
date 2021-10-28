@extends('layouts.app')
@section('title', 'Адміністрація')
@section('admin', 'selected')
@section('css', 'css/admin.css')

@section('admin-content')
<div class="container">
  <h1 class="title">АДМIНIСТРАЦIЯ ЛIКАРНI</h1>
    <div class="main_slider">
        <div class="glide">
            <div class="glide__track" data-glide-el="track">
              <ul class="glide__slides">
                <li class="glide__slide"><img src="images/pic1.jpg" alt=""></li>
                <li class="glide__slide"><img src="images/pic2.jpg" alt=""></li>
                <li class="glide__slide"><img src="images/pic3.jpg" alt=""></li>
              </ul>
            </div>
            <div class="glide__arrows" data-glide-el="controls">
                <button class="glide__arrow glide__arrow--left" data-glide-dir="<"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" width="40" height="40"><path d="m15.5 0.932-4.3 4.38 14.5 14.6-14.5 14.5 4.3 4.4 14.6-14.6 4.4-4.3-4.4-4.4-14.6-14.6z"></path></svg></button>
                <button class="glide__arrow glide__arrow--right" data-glide-dir=">"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" width="40" height="40"><path d="m15.5 0.932-4.3 4.38 14.5 14.6-14.5 14.5 4.3 4.4 14.6-14.6 4.4-4.3-4.4-4.4-14.6-14.6z"></path></svg></button>
            </div>
        </div>
    </div>
    <section class="admin-content">
      <ul class="grid admin-list">
          <li class="grid admin-card">
              <div class="admin-pic">
                  <img src="images/me.jpg" alt="admin01">
              </div>
              <div class="admin-info">
                  <h3>МІЛЛЕР ЄГОР ДМИТРОВИЧ</h3>
                  <ul>
                      <li>Директор (головний лікар)</li>
                  </ul>
              </div>
          </li>
      </ul>
      <ul class="grid admin-list">
          <li class="grid admin-card">
              <div class="admin-pic">
                  <img src="images/me.jpg" alt="admin02">
              </div>
              <div class="admin-info">
                  <h3>МІЛЛЕР ЄГОР ДМИТРОВИЧ</h3>
                  <ul>
                      <li>Собсна разработчик</li>
                  </ul>
              </div>
          </li>
      </ul>
      <ul class="grid admin-list">
          <li class="grid admin-card">
              <div class="admin-pic">
                  <img src="images/me.jpg" alt="admin03">
              </div>
              <div class="admin-info">
                  <h3>МІЛЛЕР ЄГОР ДМИТРОВИЧ</h3>
                  <ul>
                      <li>Собсна разработчик</li>
                  </ul>
              </div>
          </li>
      </ul>
      <ul class="grid admin-list">
          <li class="grid admin-card">
              <div class="admin-pic">
                  <img src="images/me.jpg" alt="admin05">
              </div>
              <div class="admin-info">
                  <h3>МІЛЛЕР ЄГОР ДМИТРОВИЧ</h3>
                  <ul>
                      <li>Собсна разработчик</li>
                  </ul>
              </div>
          </li>
      </ul>
  </section>
</div>
@endsection