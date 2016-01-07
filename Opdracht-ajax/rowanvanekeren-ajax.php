<?php 




?>



<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="UTF-8">
    <title>ajax</title>
</head>
<body>
                        <form id="target" method="post" action="contact.php" >
                            <ul>
                                <li>
                                    <label for="email">E-mailadres</label>
                                    <input type="text" id="email" name="email">
                                </li>
                                <li>
                                    <label for="message">Boodschap</label>
                                    <textarea name="message" id="message" cols="30" rows="10"></textarea>
                                </li>
                                <li>
                                    <input type="checkbox" name="copy" id="copy">
                                    <label for="copy">Stuur een kopie naar mezelf</label>
                                </li>
                            </ul>
                            <input type="submit" name="submit">
                        </form>
                        <div class="placeholder"> </div>
                        
                        <script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
                        <script> 
$(function(){
$("#target").submit(function(){
    var formData = $('#target').serialize();
    console.log('formData:' + formData);
   
    $.ajax({
      type: "post",
       url:  "contact-api.php",
       data: formData,
       success: function(data){
           console.log (data);
           	parsedData	=	JSON.parse(data);
           
           console.log(parsedData[0])
           $('.placeholder').append('<p>' +       parsedData['status'] + '</p>');
           
       }
   });
    return false;
    
    
});



});


</script>
  
</body>
</html>