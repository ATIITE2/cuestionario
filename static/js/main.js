(function (){
    $("#formregister").on('submit', function(ev){

      const form = $(this);

      ev.preventDefault();
      ev.stopPropagation();

      var obj= new Object;
      Object.keys(form[0].getElementsByTagName('input')).filter(function(key) {
        obj[form[0][key].id] = form[0][key].value;
      });

      if (this.checkValidity()) {
          $.ajax({
          type: "POST",
          url: "posts/registrar.php",
          data: obj,
          cache: false,
          success: function(data) {
            $(".del-msj").html("");
            if(!data.success) {
              if(data.error){
                $("#"+data.error).addClass("is-invalid").focus();
                $("#"+data.error).next().html(data.mssg).addClass("del-msj");
              }else 
                $("#result").attr("class", "alert alert-danger").html(data.mssg);
            }else{
              
              $("#result").attr("class", "alert alert-success alert-dismissible fade show");
              $("#result").attr("role", "alert");
              $("#result").html("Que chido liro.");
              
            }
          }
          });
      }else form.find(":invalid").first().focus();

      form.addClass("was-validated");
    });

})();