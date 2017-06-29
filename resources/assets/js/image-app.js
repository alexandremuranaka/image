$(document).ready(function(){

  var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');



$("#btn_add_img").on("click",function(event){
  event.preventDefault();
  $("#img_select").toggleClass("show");
  $(".img_bg").toggleClass("show");
  $("#img_display").empty();

  $.ajax({
      url: '/admin/images/jlist',
      type: 'POST',
      data: {_token: CSRF_TOKEN},
      dataType: 'JSON',
      success: function (data) {
          i = 0;
          $.each( data, function( n,d ) {
            mod_img ='<div class="img_holder"><img src="/assets/images/thumb/'+d.src+'" alt="'+d.alt+'" data-id="'+d.id+'" /></div>';
            $(mod_img).appendTo("#img_display");
          });


      }
  });

});
function closeImageSelect()
{
  $("#img_select").removeClass("show");
  $(".img_bg").removeClass("show");

}
$(".img_bg").on("click",function(){
  closeImageSelect();
});

$("#img_display").on("click",'.img_holder img',function(){

  $(this).parent().siblings().removeClass("selected");
  $(this).parent().addClass("selected");
  id = $(this).attr("data-id");
  src = $(this).attr("src");
  alt = $(this).attr("alt");

  $("#img_data .url").val(src);
  $("#img_data .alt").val(alt);
  $("#img_data img").attr("src",src);
  $("#img_data img").attr("alt",alt);
  $("#img_data img").attr("data-id",id);

});

$("#btn_img_select").on("click",function(){
  id = $("#img_data img").attr("data-id");
  console.log("image id: "+ id);
  $(".input_img").val(id);
  closeImageSelect();
});


//end of js
});
