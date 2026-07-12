function fadeIn() {
    var text = $('.content').text().replace(/^\s+|\s+$/g, '');
    var length = text.length;
    var i = 0;
    var txt;
    var html = [];
    var sp = 4;
    document.querySelector("body").style.backgroundColor = "#542246";
  
    for (; i < length; i += sp) {
      txt = text.substring(i, i + sp);
      html.push('<span class="c animated">' + txt + '</span>');
    }
  
    $('.content').removeClass('c').html(html.join(''));
  
    var contentHeight = $('.content').outerHeight();
    var windowHeight = $(window).height();
  
    for (i = 0, length = html.length; i < length; i++) {
      !function(i) {
        setTimeout(function() {
          $('.content').find('.animated').eq(i).addClass('fadeIn');
  
          // Kiểm tra nếu chiều cao của content vượt quá chiều cao của cửa sổ
          if ($('.content').outerHeight() > windowHeight) {
            // Cuộn trang đến vị trí của phần tử hiện tại
            $('html, body').animate({
              scrollTop: $('.animated').eq(i).offset().top - (windowHeight / 2)
            }, 'slow');
          }
        }, i * 400);
      }(i);
    }
  };



// document.querySelector(".content").onclick=()=>{
//     document.querySelector("#heart").hidden=false
//     document.querySelector("body").style.backgroundColor="#542246"
//     document.querySelector("#heart").hidden=false
//     fadeIn()
// }