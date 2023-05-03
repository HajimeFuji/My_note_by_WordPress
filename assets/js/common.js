$(function(){

  $("#en-menu").on('click', function() { 
    $("#sec2").text("Profile"); 
    $("#sec3").text("Portfolio"); 
    $("#sec4").text("Blog"); 
    $("#sec5").text("Contact"); 
  });
  $("#jp-menu").on('click', function() { 
    $("#sec2").text("プロフィール"); 
    $("#sec3").text("制作実績"); 
    $("#sec4").text("新着記事"); 
    $("#sec5").text("お問い合わせ"); 
  });   

  $("#img-change").on('click', function() {
    $(".profile-contents img").attr("src", "img/thumb_01.png"); // 好きな画像を用意してください
    });
  $("#size-up").on('click', function() {
    $(".profile-contents img").css({"width": "300px","height":"300px"}); 
    });

    $(window).on('load scroll', function(){
      if ($(window).scrollTop() > 300) {
        $('#pagetop').fadeIn(400);
      } else {
        $('#pagetop').fadeOut(400);
      }
    });
  // jsの課題：h1にお邪魔機能(うざすぎるのでコメントアウト)
  //  $("#sec1-firstview h1").on("click",function(){
  //   for(var num = 0; num < 3; num++){
  //     alert("あと"+(3-num)+"回クリックすると何かが起こる...！");
  //   if(num==2){
  //     $("#sec1-firstview").css('background-image','url(img/yodare.jpg)')
  //   }
  //   }

  //  });




   // スライドイン
$(window).fadeThis();

//ドロワーメニュー
$(".drawer").drawer();
});



function triangle(teihen,takasa){

  return teihen*takasa/2
}