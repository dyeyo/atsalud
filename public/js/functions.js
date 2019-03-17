function tempory_password () {
    var data = $("#recoverform").serialize();
    var url = route('login.temporary.password');
    if($("#recoverform").smkValidate()){
        $.ajax({
            url:url,
            type:'POST',
            data:data,
            beforeSend:function(){
                $('#recoverform')[0].reset();
            },
            success: function(ans) {
                if($.isEmptyObject(ans.error)){
                    $('#response').html('');
                    $('#response').append("<div class='alert alert-success alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>"+ ans.success +" <a href='" +route('/')+ "'> INICIAR SESSIÓN </a> </div>");
                }else {
                    $('#response').html('');
                    $('#response').append("<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>"+ ans.error +"</div>");
                }

            },
        });
  }
}
function change_password () {
    var data = $("#changePassword").serialize();
    var url = route('change.password');

    if($("#changePassword").smkValidate()){
        alert("Hoal")

       /* $.ajax({
            url:url,
            type:'POST',
            data:data,
            beforeSend:function(){
                $('#changePassword')[0].reset();
            },
            success: function(ans) {
                if($.isEmptyObject(ans.error)){
                    $('#response').html('');
                    $('#response').append("<div class='alert alert-success alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>"+ ans.success +" <a href='" +route('/')+ "'> INICIAR SESSIÓN </a> </div>");
                }else {
                    $('#response').html('');
                    $('#response').append("<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>"+ ans.error +"</div>");
                }

            },
        });*/
    }
}
