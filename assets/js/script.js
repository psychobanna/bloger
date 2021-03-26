function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('#showimg').show();
            $('#showimg')
                .attr('src', e.target.result)
                .width(200)
                .height(200);
        };

        reader.readAsDataURL(input.files[0]);
    }
}

// Ajax
// Login
$("#login").submit(function(){

    var data = $("#login").serialize();
    // console.log(data);
    data = data+'&action=login';
    // console.log(data);
    
                $("#view").html("Loading...");
        $.ajax({
            type: "POST",
            data: data,
            url: base_url+"action",
            success :function(result){
                // console.log(result);
                $("#view").html(result);
                setInterval(function(){
                    if(result == "Welcome"){
                        window.location.href = base_url+"home";
                    }
                },1000);

            }
        })
      .done(function() {
        console.log( "success" );
      })
      .fail(function() {
        console.log( "error" );
      });
    //   $("input").val("");
      return false;
    });

    // Register
    $("#register").submit(function(){

        var data = $("#register").serialize();
        
        data = data+'&action=register';
        console.log(data);
        // console.log(data);
        
                    $("#view").html("Loading...");
            $.ajax({
                type: "POST",
                data: data,
                url: base_url+"action",
                success :function(result){
                    // console.log(result);
                    $("#view").html(result);
                    setInterval(function(){
                        if(result == "Thanks for registeration"){
                            window.location.href = base_url+"login";
                        }
                    },1000);
    
                }
            })
          .done(function() {
            console.log( "success" );
          })
          .fail(function() {
            console.log( "error" );
          });
        //   $("input").val("");
          return false;
        });
// Profile Update
        $("#profile").submit(function(){

            var data = $("#profile").serialize();
            
            data = data+'&action=profile';
            console.log(data);
            // console.log(data);
            
                        $("#view").html("Loading...");
                $.ajax({
                    type: "POST",
                    data: data,
                    url: base_url+"action",
                    success :function(result){
                        // console.log(result);
                        $("#view").html(result);        
                    }
                })
              .done(function() {
                console.log( "success" );
              })
              .fail(function() {
                console.log( "error" );
              });
            //   $("input").val("");
              return false;
            });
            // Profile Update
        $("#password").submit(function(){

            var data = $("#password").serialize();
            
            data = data+'&action=password';
            console.log(data);
            // console.log(data);
            
                        $("#view").html("Loading...");
                $.ajax({
                    type: "POST",
                    data: data,
                    url: base_url+"action",
                    success :function(result){
                        // console.log(result);
                        $("#view").html(result);  
                           
                        setInterval(function(){
                            if(result == "Password Updated"){
                                window.location.href = base_url+"profile";
                            }
                        },1000);   
                    }
                })
              .done(function() {
                console.log( "success" );
              })
              .fail(function() {
                console.log( "error" );
              });
            //   $("input").val("");
              return false;
            });
// Blog Add
        $("#blog").submit(function(){

            // var data = $("#blog").serializeArray();
            // var file_data = $('#bimg').prop('files')[0];   

            // data = data+'&action=addblog';
                $("#view").html("Loading...");
                $.ajax({
                    url: base_url+"action",
                    type:"post",
                    data:new FormData(this),
                    processData:false,
                    contentType:false,
                    cache:false,
                    async:false,
                    success :function(result){
                        // console.log(result);
                        $("#view").html(result);  
                              
                        setInterval(function(){
                            if(result == "Blog Updated" || result == "Blog Uploaded"){
                                window.location.href = base_url+"blogs";
                            }
                        },1000);
                    }
                })
            .done(function() {
                console.log( "success" );
            })
            .fail(function() {
                console.log( "error" );
            });
            return false;
            });
            
// Blog Delete
        function blogdelete(n){
            data = 'bid='+n+'&action=blogdelete';
            // console.log(data);
            
                $("#view").html("Loading...");
                $.ajax({
                    type: "POST",
                    data: data,
                    url: base_url+"action",
                    success :function(result){
                        // console.log(result);
                        $("#view").html(result);   
                        setInterval(function(){
                            if(result == "A blog Deleted"){
                                window.location.href = base_url+"blogs";
                            }
                        },1000);     
                    }
                })
              .done(function() {
                console.log( "success" );
              })
              .fail(function() {
                console.log( "error" );
              });
            //   $("input").val("");
              return false;
        }
        // Blog status
        function blogstatus(n,m){
            data = 'bid='+n+'&status='+m+'&action=blogstatus';
            // console.log(data);
            
                $("#view").html("Loading...");
                $.ajax({
                    type: "POST",
                    data: data,
                    url: base_url+"action",
                    success :function(result){
                        // console.log(result);
                        $("#view").html(result);   
                        setInterval(function(){
                            if(result == "Blog status Updated"){
                                window.location.href = base_url+"blogs";
                            }
                        },1000);     
                    }
                })
              .done(function() {
                console.log( "success" );
              })
              .fail(function() {
                console.log( "error" );
              });
            //   $("input").val("");
              return false;
        }

        function searchcategory(n){
          data = 'bcate='+n+'&action=searchcategory';
        // console.log(data);
        
            $("#view").html("Loading...");
            $.ajax({
                type: "POST",
                data: data,
                url: base_url+"action",
                success :function(result){
                    // console.log(result);
                    $("#view").html(result);   
                    setInterval(function(){
                        if(result == "searchcategory"){
                            window.location.href = base_url;
                        }
                    },1000);     
                }
            })
          .done(function() {
            console.log( "success" );
          })
          .fail(function() {
            console.log( "error" );
          });
        //   $("input").val("");
          return false;
    }