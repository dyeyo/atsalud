function tempory_password() {
    var data = $("#recoverform").serialize();
    var url = route('login.temporary.password');
    if ($("#recoverform").smkValidate()) {
        $.ajax({
            url: url,
            type: 'POST',
            data: data,
            beforeSend: function () {
                $('#recoverform')[0].reset();
            },
            success: function (ans) {
                if ($.isEmptyObject(ans.error)) {
                    $('#response').html('');
                    $('#response').append("<div class='alert alert-success alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>" + ans.success + " <a href='" + route('/') + "'> INICIAR SESSIÓN </a> </div>");
                } else {
                    $('#response').html('');
                    $('#response').append("<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>" + ans.error + "</div>");
                }

            },
        });
    }
}

function change_password() {
    var data = $("#changePassword").serialize();
    var url = route('change.password');
    if ($("#changePassword").smkValidate()) {
        $.ajax({
            url: url,
            type: 'POST',
            data: data,
            beforeSend: function () {
                $('#changePassword')[0].reset();
            },
            success: function (ans) {
                console.log(ans)
                if ($.isEmptyObject(ans.error)) {
                    $('#response').html('');
                    $('#response').append("<div class='alert alert-success alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>" + ans.success + "</div>");
                    location.reload(true);
                } else {
                    $('#response').html('');
                    $('#response').append("<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>" + ans.error + "</div>");
                }

            },
        });
    }
}

function create_role() {
    var data = $('#newRol').serialize();
    var url = route('roles.store');
    if ($('#newRol').smkValidate()) {
        $.ajax({
            url: url,
            type: 'POST',
            data: data,
            beforeSend: function () {
                $('#newRol')[0].reset();
            },
            success: function (ans) {
                if ($.isEmptyObject(ans.error)) {
                    $('#response').html('');
                    $('#response').append("<div class='alert alert-success alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>" + ans.success + "</div>");
                    setTimeout(function() {
                        $("#response").fadeOut(1500);
                    },3000);

                } else {
                    $('#response').html('');
                    $('#response').append("<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>" + ans.error + "</div>");
                }

            },
        });
    }
}

function update_role(id) {
    var data = $('#editRol').serialize();
    var url = route('roles.update', {id: id});
    if ($('#editRol').smkValidate()) {
        $.ajax({
            url: url,
            type: 'POST',
            data: data,
            success: function (ans) {
                if ($.isEmptyObject(ans.error)) {
                    $('#response').html('');
                    $('#response').append("<div class='alert alert-success alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>" + ans.success + "</div>");
                    setTimeout(function() {
                        $("#response").fadeOut(1500);
                    },3000);

                } else {
                    $('#response').html('');
                    $('#response').append("<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>" + ans.error + "</div>");
                }

            },
        });
    }
}

function municipalities() {
    var departament = $("#departament_id").val();
    if (departament != -1) {
        $.getJSON(route('load.municipalities', {id: departament}), function (data) {
            var html_selct = '<option value="-1">[Seleccione un Municipio]</option>';
            for (var i = 0; i < data.length; ++i) {
                html_selct += '<option value="' + data[i].id + '">' + data[i].name + '</option>';
                $('#municipality_id').html(html_selct);
            }
        })
    } else {
        $('#municipality_id').html('<option value="-1">[Seleccione un Municipio]</option>');
    }
}

function create_ips() {
    var data = $('#newIps').serialize();
    var url = route('ips.store');
    if ($('#newIps').smkValidate()) {
        $.ajax({
            url: url,
            type: 'POST',
            data: data,
            beforeSend: function () {
                $('#newIps')[0].reset();
            },
            success: function (ans) {
                if ($.isEmptyObject(ans.error)) {
                    $('#response').html('');
                    $("#myModal").modal('hide');//ocultamos el modal
                    $('body').removeClass('modal-open');//eliminamos la clase del body para poder hacer scroll
                    $('.modal-dialog').remove();//eliminamos el backdrop del modal
                    $('#response').append("<div class='alert alert-success alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>" + ans.success + "</div>");
                    setTimeout(function() {
                        $("#response").fadeOut(1500);
                    },3000);

                } else {
                    $('#response').html('');
                    $('#response').append("<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>" + ans.error + "</div>");
                }

            },
        });
    }
}

function update_Ips(id) {
    var data = $('#editIps').serialize();
    var url = route('ips.update', {id: id});
    if ($('#editIps').smkValidate()) {
        $.ajax({
            url: url,
            type: 'POST',
            data: data,
            success: function (ans) {
                if ($.isEmptyObject(ans.error)) {
                    $('#response').html('');
                    $('#response').append("<div class='alert alert-success alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>" + ans.success + "</div>");
                    setTimeout(function() {
                        $("#response").fadeOut(1500);
                    },3000);

                } else {
                    $('#response').html('');
                    $('#response').append("<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>" + ans.error + "</div>");
                }

            },
        });
    }
}

function create_socialSegurity() {
    var data = $('#newSG').serialize();
    var url = route('socialSecurity.store');
    if ($('#newSG').smkValidate()) {
        $.ajax({
            url: url,
            type: 'POST',
            data: data,
            beforeSend: function () {
                $('#newSG')[0].reset();
            },
            success: function (ans) {
                if ($.isEmptyObject(ans.error)) {
                    $('#response').html('');
                    $('#response').append("<div class='alert alert-success alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>" + ans.success + "</div>");
                    setTimeout(function() {
                        $("#response").fadeOut(1500);
                    },3000);

                } else {
                    $('#response').html('');
                    $('#response').append("<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>" + ans.error + "</div>");
                }

            },
        });
    }
}

function update_SegSoc(id) {
    var data = $('#editSegSoc').serialize();
    var url = route('socialSecurity.update', {id: id});
    if ($('#editSegSoc').smkValidate()) {
        $.ajax({
            url: url,
            type: 'POST',
            data: data,
            success: function (ans) {
                if ($.isEmptyObject(ans.error)) {
                    $('#response').html('');
                    $('#response').append("<div class='alert alert-success alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>" + ans.success + "</div>");
                    setTimeout(function() {
                        $("#response").fadeOut(1500);
                    },3000);

                } else {
                    $('#response').html('');
                    $('#response').append("<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>" + ans.error + "</div>");
                }

            },
        });
    }
}
