


$(document).ready(function(){
    $("#form-submit").bind("click",function(event) {
      var A = $("#A").val();
      var B = $("#B").val();
      var D = $("#D").val();
    var text = $("#text").val();
       
        alert(cafe_id);
     $.ajax({
        type: "POST",
        url: "form-process.php",
        data: "A=" + A+"&B=" + B+"&D=" + D 
        + "&cafe_id=" + cafe_id +'&text=' + text,
        success: function(jsondata){

          //function(jsondata){
            $('.results').html('Автор = ' + jsondata.avtor);
          }
                                    
                                                               
      /*                              
    var msgClasses = "h3 text-center tada animated text-success";
   $("#msgSubmit").removeClass().addClass(msgClasses).text(text);  
                      alert (text);    
                                }
*/
                        

        } )



} ) ;



 });


