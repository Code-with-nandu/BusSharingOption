$(document).on('submit','.database_operation_form',function(){
    alert(1)
const data = $(this).serialize();
console.log("data",data);
return false;
});
$(document).on("change",".manage_status",function(){
const selector = $(this).attr("data-selector");
const url = $(this).attr("data-url");
const data = $('input[id="'+selector+'"]:checked').val();
console.log(selector);
console.log(url);
console.log(data);
});


