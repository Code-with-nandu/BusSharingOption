$(document).on('submit','.database_operation_form',function(){
const data = $(this).serialize();
console.log("data",data);
return false;
});