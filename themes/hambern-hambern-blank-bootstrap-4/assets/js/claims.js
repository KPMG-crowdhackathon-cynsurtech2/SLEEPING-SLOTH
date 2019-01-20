$( document ).ready(function() {
  
   $('.fileUpload').change(function(){
        
        console.log($(this));
    
    
      var files = $("[type='file']")[0].files;
    
        var formData = new FormData();
    
       var id = $(this).attr("data-id");
       var base64Image;
       


         if (this.files && this.files[0]) {
             
             
    
            var FR= new FileReader();
            
            FR.addEventListener("load", function(e) {
              //ocument.getElementById("img").src       = e.target.result;
              //document.getElementById("b64").innerHTML = e.target.result;
              console.log(id);
              base64Image = e.target.result;
              
                $.request('onSaveImage', {
                   //pass the inputed data code & descritpion to the ajax call
                   data: { id: id, base64 : base64Image},
                   success: function(data) {
                         this.success(data).done(function() {
                             //if the image was succesfully added to the DB we then show it to the appropriate photoDisplayRow of the selected question
                      //     console.log(data);
                        //   console.log(data[0].incidentDetailsID);
    //                       console.log('#photoDisplayRow-'+evaluationID+'-'+questionID);
                   //             var photoID = data[0].id; //incidentID
                             
                               
                                $('#photoDisplayRow').append("<div id='' class='column photo'><p class='imglist' ><a href='"+base64Image+"'  data-fancybox='' data-type='image'><img src='"+base64Image+"' width='200' /></a> </p>    ");   
                    });
                },       
                });
            
            }); 
            
            FR.readAsDataURL( this.files[0] );
          }
    
    


    });

});
