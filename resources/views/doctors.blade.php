@extends('layouts.app')
@section('title', 'Лікарі')
@section('doctors', 'selected')
@section('css', 'css/doctors.css')

@section('doctors-content')
<div class="container">
  <section class="doctors-content">
    <h1 class="title">НАШІ ЛІКАРІ</h1>
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
    <div class="main-doc">
      <div class="doc-form" style="display: none;">
        <div class="doc-form2">
            <div class="flex-btn">
                <p class="form-name">Запис до лікаря</p>
                <span class="doc-closebtn">&times;</span>
            </div>
                <form action="/doctors/sign" method="post" name="doc">
                    @csrf
                    <input type="text" name="docname" placeholder="Ваше ім'я" required>
                    <input type="text" name="docSecondName" placeholder="Ваше прізвище" required>
                    <br>
                    <label for="">Оберіть будь ласка дату та час запису</label>
                    <br>
                    <input type="date" name="date" required>
                    <input type="datetime" name="datetime" placeholder="Напишіть час" required>
                    <br>
                    <label for="nom">Номер для зворотнього зв'язку</label>
                    <br>
                    <input type="number" name="nom" placeholder="Номер" required>
                    <br>
                    <input type="submit" value="Надіслати" name="sub" class="send-btn">
                </form>
        </div>
    </div>
      <ul class="doc-list grid">
        <li class="doc-block">
          <div class="doc-name grid">
            <h3>Гераклид Гиппократ</h3>
          </div>
          <hr>
          <div class="doc-info grid">
            <div class="doc-img">
              <img src="images/doc.jpg" alt="gipo">
            </div>
            <ul>
              <li>Отец медицины</li>
              <li>Великий врач-асклепиад</li>
              <li>Врач и философ</li>
              <li class="exp">Опыт работы с 460 года до н.э.</li>
              <li class="call">
                <button class="call-btn">
                  <p class="call-btn-p">Записатися на прийом</p>
              </button>
              </li>
            </ul>
          </div>
        </li>
        <li class="doc-block">
          <div class="doc-name grid">
            <h3>Гераклид Гиппократ</h3>
          </div>
          <hr>
          <div class="doc-info grid">
            <div class="doc-img">
              <img src="images/doc.jpg" alt="gipo">
            </div>
            <ul>
              <li>Отец медицины</li>
              <li>Великий врач-асклепиад</li>
              <li>Врач и философ</li>
              <li class="exp">Опыт работы с 460 года до н.э.</li>
              <li class="call">
                <button class="call-btn">
                  <p class="call-btn-p">Записатися на прийом</p>
              </button>
              </li>
            </ul>
          </div>
        </li>
        <li class="doc-block">
          <div class="doc-name grid">
            <h3>Гераклид Гиппократ</h3>
          </div>
          <hr>
          <div class="doc-info grid">
            <div class="doc-img">
              <img src="images/doc.jpg" alt="gipo">
            </div>
            <ul>
              <li>Отец медицины</li>
              <li>Великий врач-асклепиад</li>
              <li>Врач и философ</li>
              <li class="exp">Опыт работы с 460 года до н.э.</li>
              <li class="call">
                <button class="call-btn">
                  <p class="call-btn-p">Записатися на прийом</p>
              </button>
              </li>
            </ul>
          </div>
        </li>
        <li class="doc-block">
          <div class="doc-name grid">
            <h3>Гераклид Гиппократ</h3>
          </div>
          <hr>
          <div class="doc-info grid">
            <div class="doc-img">
              <img src="images/doc.jpg" alt="gipo">
            </div>
            <ul>
              <li>Отец медицины</li>
              <li>Великий врач-асклепиад</li>
              <li>Врач и философ</li>
              <li class="exp">Опыт работы с 460 года до н.э.</li>
              <li class="call">
                <button class="call-btn">
                  <p class="call-btn-p">Записатися на прийом</p>
              </button>
              </li>
            </ul>
          </div>
        </li>
        <li class="doc-block">
          <div class="doc-name grid">
            <h3>Гераклид Гиппократ</h3>
          </div>
          <hr>
          <div class="doc-info grid">
            <div class="doc-img">
              <img src="images/doc.jpg" alt="gipo">
            </div>
            <ul>
              <li>Отец медицины</li>
              <li>Великий врач-асклепиад</li>
              <li>Врач и философ</li>
              <li class="exp">Опыт работы с 460 года до н.э.</li>
              <li class="call">
                <button class="call-btn">
                  <p class="call-btn-p">Записатися на прийом</p>
              </button>
              </li>
            </ul>
          </div>
        </li>
        <li class="doc-block">
          <div class="doc-name grid">
            <h3>Гераклид Гиппократ</h3>
          </div>
          <hr>
          <div class="doc-info grid">
            <div class="doc-img">
              <img src="images/doc.jpg" alt="gipo">
            </div>
            <ul>
              <li>Отец медицины</li>
              <li>Великий врач-асклепиад</li>
              <li>Врач и философ</li>
              <li class="exp">Опыт работы с 460 года до н.э.</li>
              <li class="call">
                <button class="call-btn">
                  <p class="call-btn-p">Записатися на прийом</p>
              </button>
              </li>
            </ul>
          </div>
        </li>
        <li class="doc-block">
          <div class="doc-name grid">
            <h3>Гераклид Гиппократ</h3>
          </div>
          <hr>
          <div class="doc-info grid">
            <div class="doc-img">
              <img src="images/doc.jpg" alt="gipo">
            </div>
            <ul>
              <li>Отец медицины</li>
              <li>Великий врач-асклепиад</li>
              <li>Врач и философ</li>
              <li class="exp">Опыт работы с 460 года до н.э.</li>
              <li class="call">
                <button class="call-btn">
                  <p class="call-btn-p">Записатися на прийом</p>
              </button>
              </li>
            </ul>
          </div>
        </li>
        <li class="doc-block">
          <div class="doc-name grid">
            <h3>Гераклид Гиппократ</h3>
          </div>
          <hr>
          <div class="doc-info grid">
            <div class="doc-img">
              <img src="images/doc.jpg" alt="gipo">
            </div>
            <ul>
              <li>Отец медицины</li>
              <li>Великий врач-асклепиад</li>
              <li>Врач и философ</li>
              <li class="exp">Опыт работы с 460 года до н.э.</li>
              <li class="call">
                <button class="call-btn">
                  <p class="call-btn-p">Записатися на прийом</p>
              </button>
              </li>
            </ul>
          </div>
        </li>
        <li class="doc-block">
          <div class="doc-name grid">
            <h3>Гераклид Гиппократ</h3>
          </div>
          <hr>
          <div class="doc-info grid">
            <div class="doc-img">
              <img src="images/doc.jpg" alt="gipo">
            </div>
            <ul>
              <li>Отец медицины</li>
              <li>Великий врач-асклепиад</li>
              <li>Врач и философ</li>
              <li class="exp">Опыт работы с 460 года до н.э.</li>
              <li class="call">
                <button class="call-btn">
                  <p class="call-btn-p">Записатися на прийом</p>
              </button>
              </li>
            </ul>
          </div>
        </li>
      </ul>
    </div>
  </section>
</div>
@endsection