const cfg = {
    type:'carousel',
    perView: 1,
}
new Glide('.glide', cfg).mount()

$('.btn').click(function(){
    $(".main-form").fadeToggle(300);
    $(".glide__arrows").fadeToggle(300);
  });

  $('.main-form').click( function(e){
    if ( $(e.target).closest('.form').length ) {
        return;
    }
    $(".main-form").fadeToggle(300);
    $(".glide__arrows").fadeToggle(300);
});
$('.call-btn').click(function(){
    $(".doc-form").fadeToggle(300);
    $(".glide__arrows").fadeToggle(300);
  });
  $('.doc-form').click( function(e){
    if ( $(e.target).closest('.doc-form2').length ) {
        return;
    }
    $(".doc-form").fadeToggle(300);
    $(".glide__arrows").fadeToggle(300);
});
$('.closebtn').click( function(){
    $(".main-form").fadeToggle(300);
    $(".glide__arrows").fadeToggle(300);
});
$('.doc-closebtn').click( function(){
    $(".doc-form").fadeToggle(300);
    $(".glide__arrows").fadeToggle(300);
});




$(document).ready(function (){
    $("#lab").click(function (){
        $('html, body').animate({
            scrollTop: $("#lab-info").offset().top
        }, 1000);
    });
    $("#list").click(function (){
        $('html, body').animate({
            scrollTop: $("#list-info").offset().top
        }, 1000);
    });
    $("#vac").click(function (){
        $('html, body').animate({
            scrollTop: $("#vac-info").offset().top
        }, 1000);
    });
    $("#serv").click(function (){
        $('html, body').animate({
            scrollTop: $("#serv-info").offset().top
        }, 1000);
    });
});

const $news = document.querySelectorAll('.new');

$news.forEach(oneNew => {
    const $readMore = oneNew.querySelector('span');
    $readMore.addEventListener('click', e => {
        e.target.closest('.new').children[3].classList.toggle('show');
    })
});