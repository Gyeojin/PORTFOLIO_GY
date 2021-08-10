$(function(){

  // $(".pfimg").mouseenter(function(){
  //   //alert("abv");
  //   $(this).find("img").animate({'transform': 'scale(1.2)'},1200)
  //   //$(".pfimg img").animate({'transform': 'scale(1.2)'},1200);
  //   $(".scale").animate({display: 'block'},1200);
  // });

  // $(".pfimg").mouseleave(function(){
  //   $(".pfimg img").animate({transform: 'scale(1)'},1200)
  //   $(".scale").animate({display: 'none'},1200)
  // });


  // // 스크롤 제한 ON
  // $(".pf .center").mouseover(function(){
  //   $('body').on('mousewheel', function(e) {
  //     e.preventDefault();
  //     e.stopPropagation();
  //     return false;
  //   });
  // });

  // $(".pf .center").mouseout(function(){
  //   $('body').off('mousewheel');
  // });


//   $(".pf-center").on('mousewheel',function(e){

//     var wheelDelta = e.originalEvent.wheelDelta;
    
  
//     if(wheelDelta > 0){
  
//       //console.log("up");
  
//       $(this).scrollLeft(-wheelDelta + $(this).scrollLeft());
  
//     }else{
      
    
//     console.log("down");
  
//       $(this).scrollLeft(-wheelDelta + $(this).scrollLeft());
  
//     }
  
//   });
// });



// //section위에서 마우스 휠을 움직이면
// $("section").on("mousewheel",function(event,delta){    
      
//   //마우스 휠을 올렸을때   
//       if (delta > 0) {  
//      //변수 prev에 현재 휠을 움직인 section에서 이전 section의 offset().top위치 저장
//          var prev = $(this).prev().offset().top;
//       //문서 전체를 prev에 저장된 위치로 이동
//       $("html,body").stop().animate({"scrollTop":prev},1400,"easeOutBounce");
      
//   //마우스 휠을 내렸을때    
//       }else if (delta < 0) {  
//      //변수 next에 현재 휠을 움직인 section에서 다음 section의 offset().top위치 저장
//       var next = $(this).next().offset().top;
//       //문서 전체를 next에 저장된 위치로 이동
//       $("html,body").stop().animate({"scrollTop":next},1400,"easeOutBounce");                                         
//       }
      
 });