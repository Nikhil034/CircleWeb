var deleteData = function(id){
    console.log('hello');
    $.ajax({    
        type: "GET",
        url: "removepost.php", 
        data:{deleteId:id},            
        dataType: "html",                  
        success: function(data){   
       //  $('#msg').html(data);
       // $('#table-container').load('userpost.php');
       console.log('done');
           
        }
    });
};