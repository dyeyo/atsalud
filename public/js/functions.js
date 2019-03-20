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
                    setTimeout(function () {
                        $("#response").fadeOut(1500);
                    }, 3000);

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
                    setTimeout(function () {
                        $("#response").fadeOut(1500);
                    }, 3000);

                } else {
                    $('#response').html('');
                    $('#response').append("<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>" + ans.error + "</div>");
                }

            },
        });
    }
}

function municipalities2(id) {
    if (id != -1) {
        $.getJSON(route('load.municipalities', {id: id}), function (data) {
            var html_selct = '<option value="-1">[Seleccione un Municipio]</option>';
            for (var i = 0; i < data.length; ++i) {
                html_selct += '<option value="' + data[i].id + '">' + data[i].name + '</option>';
                $('#municipality').html(html_selct);
            }
        })
    } else {
        $('#municipality').html('<option value="-1">[Seleccione un Municipio]</option>');
    }
}

function municipalities(id) {
    if (id != -1) {
        $.getJSON(route('load.municipalities', {id: id}), function (data) {
            var html_selct = '';
            for (var i = 0; i < data.length; ++i) {
                html_selct += '<option value="' + data[i].id + '">' + data[i].name + '</option>';
                $('#municipality_id').html(html_selct);
            }
        })
    } else {
        $('#municipality_id').html('<option value="-1">[Seleccione un Municipio]</option>');
    }
}

function load_ips(id) {

    $.get(route('ips.load', {id: id}), function (data) {
        $("#table").html(data)
    });
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
                $("#departament_id").select2({allowClear: true});
                $("#municipality_id").html('<option value="-1">[Seleccione un Municipio]</option>');
            },
            success: function (ans) {
                if ($.isEmptyObject(ans.error)) {
                    $('#response').html('');
                    $('#response').append("<div class='alert alert-success alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>" + ans.success + "</div>");
                    setTimeout(function () {
                        $("#response").fadeOut(1500);
                    }, 3000);

                    load_ips($("#municipality").val())

                } else {
                    $('#response').html('');
                    $('#response').append("<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>" + ans.error + "</div>");
                }

            },
        });
    }
}

function show_ips(id) {
    $.getJSON(route('ips.show', {id: id}), function (data) {
        var html;
        html = '<h4 class="card-title">Razón Social: <b>' + data.business_name + '</b></h4>' +
            '<p class="card-title"><strong>Nombre comercial: </strong>' + data.tradename + '</p>' +
            ' <p class="card-title"><strong>NIT: </strong>' + data.nit + '</p>' +
            '<p class="card-title"><strong>Dirección: </strong>' + data.address + '</p>' +
            '<p class="card-title"><strong>Teléfono: </strong>' + data.phone + '</p>' +
            '<p class="card-title"><strong>Correo Electronico: </strong>' + data.email + '</p>' +
            '<p class="card-title"><strong>Departamento: </strong>' + data.municipality.departament.name + '</p>' +
            '<p class="card-title"><strong>Municipio: </strong>' + data.municipality.name + '</p>';
        $('#dataips').html(html);

    })
}

function edit_ips(id) {
    $("#titlemodal").html('Editar Ips')
    $.getJSON(route('ips.edit', {id: id}), function (data) {
        $("#business_name").val(data.business_name)
        $("#tradename").val(data.tradename)
        $("#nit").val(data.nit)
        $("#address").val(data.address)
        $("#phone").val(data.phone)
        $("#email").val(data.email)
        $("#departament_id option[value=" + data.municipality.departament.id + "]").attr("selected", true);
        $("#departament_id").select2();
        municipalities(data.municipality.departament.id);
        $("#municipality_id option[value=" + data.municipality.id + "]").attr("selected", true);
        $("#municipality_id").select2();
        $("#_method").val("PUT")
        $(".modal-footer").html('<button class="btn btn-success" onclick="update_ips(' + data.id + ')"><i class="fa fa-check"></i> Guardar</button>')
    })
}

function update_ips(id) {
    var data = $('#newIps').serialize();
    var url = route('ips.update', {id: id});
    if ($('#newIps').smkValidate()) {
        $.ajax({
            url: url,
            type: 'POST',
            data: data,
            beforeSend: function () {
                $('#newIps')[0].reset();
                $("#departament_id").select2({allowClear: true});
                $("#municipality_id").html('<option value="-1">[Seleccione un Municipio]</option>');
            },
            success: function (ans) {
                if ($.isEmptyObject(ans.error)) {
                    $('#response').html('');
                    $('#response').append("<div class='alert alert-success alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>" + ans.success + "</div>");
                    setTimeout(function () {
                        $("#response").fadeOut(1500);
                    }, 3000);
                    load_ips($("#municipality").val())
                    $("#titlemodal").html('Agregar Ips')
                    $("#departament_id option[value='-1']").attr("selected", true);
                    $("#_method").val("")
                    $(".modal-footer").html('<button class="btn btn-success" onclick="create_ips()"><i class="fa fa-check"></i> Guardar</button>')

                } else {
                    $('#response').html('');
                    $('#response').append("<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>" + ans.error + "</div>");
                }

            },
        });
    }
}

function load_entities() {
    $.get(route('entities.load'), function (data) {
        $("#table").html(data)
    });
}

function show_entity(id) {
    var html = '';
    $.getJSON(route('entities.show', {id: id}), function (data) {

        html = '<h4 class="card-title">Razón Social: <b>' + data.business_name + '</b></h4>' +
            '<p class="card-title"><strong>Nombre comercial: </strong>' + data.tradename + '</p>' +
            ' <p class="card-title"><strong>NIT: </strong>' + data.nit + '</p>' +
            '<p class="card-title"><strong>Dirección: </strong>' + data.address + '</p>' +
            '<p class="card-title"><strong>Teléfono: </strong>' + data.phone + '</p>' +
            '<p class="card-title"><strong>Correo Electronico: </strong>' + data.email + '</p>' +
            '<p class="card-title"><strong>Tipo de entidad: </strong><i style="text-transform: uppercase">' + data.type + '</i></p>'
        if (data.type == 'eps') {
            html += '<img src="uploads/logos-eps/' + data.image + '" class="logo-eps">'
        }
        $('#dataentity').html(html);

    })
}

function upload_logo(value) {
    if (value == 'eps') {
        $(".logo").css("display", "block");
    } else {
        $(".logo").css("display", "none");
    }
}

function create_entity() {
    var data = new FormData($('#newEntity')[0]);
    var url = route('entities.store');
    if ($('#newEntity').smkValidate()) {
        $.ajax({
            url: url,
            type: 'POST',
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            beforeSend: function () {
                $('#newEntity')[0].reset();
                $("#type option[value='-1']").attr("selected", true);
                $(".logo").css("display", "none");
            },
            success: function (ans) {
                if ($.isEmptyObject(ans.error)) {
                    $('#response').html('');
                    $('#response').append("<div class='alert alert-success alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>" + ans.success + "</div>");
                    setTimeout(function () {
                        $("#response").fadeOut(1500);
                    }, 3000);
                    load_entities();


                } else {
                    $('#response').html('');
                    $('#response').append("<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>" + ans.error + "</div>");
                }

            },
        });
    }
}

function edit_entity(id) {
    $("#titlemodal").html('Editar Entidad')
    $.getJSON(route('entities.edit', {id: id}), function (data) {
        $("#business_name").val(data.business_name)
        $("#tradename").val(data.tradename)
        $("#nit").val(data.nit)
        $("#address").val(data.address)
        $("#phone").val(data.phone)
        $("#email").val(data.email)

        $('#type').selectpicker('val', data.type);
        upload_logo(data.type)

        var drEvent = $('#image').dropify(
            {
                defaultFile: 'uploads/logos-eps/' + data.image
            });
        drEvent = drEvent.data('dropify');
        drEvent.resetPreview();
        drEvent.clearElement();
        drEvent.settings.defaultFile = 'uploads/logos-eps/' + data.image;
        drEvent.destroy();
        drEvent.init();

        $("#_method").val("PUT")
        $(".modal-footer").html('<button class="btn btn-success" onclick="update_entity(' + data.id + ')"><i class="fa fa-check"></i> Guardar</button>')
    })
}

function update_entity(id) {
    var data = new FormData($('#newEntity')[0]);
    var url = route('entities.update', {id: id});
    if ($('#newEntity').smkValidate()) {
        $.ajax({
            url: url,
            type: 'POST',
            data: data,
            cache: false,
            contentType: false,
            processData: false,
            success: function (ans) {
                if ($.isEmptyObject(ans.error)) {
                    $('#response').html('');
                    $('#response').append("<div class='alert alert-success alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>" + ans.success + "</div>");
                    setTimeout(function () {
                        $("#response").fadeOut(1500);
                    }, 3000);
                    $('#newEntity')[0].reset();
                    $('#type').selectpicker('val', '-1');
                    upload_logo('-1')
                    var drEvent = $('#image').dropify();
                    drEvent = drEvent.data('dropify');
                    drEvent.resetPreview();
                    drEvent.clearElement();
                    $("#titlemodal").html('Agregar Entidad')
                    $("#_method").val("")
                    load_entities();
                    $(".modal-footer").html('<button class="btn btn-success" onclick="create_entity()"><i class="fa fa-check"></i> Guardar</button>')

                } else {
                    $('#response').html('');
                    $('#response').append("<div class='alert alert-danger alert-dismissable'><button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>" + ans.error + "</div>");
                }

            },
        });
    }
}

function delete_entity(id) {
    delete = confirm("¿Deseas eliminar este registro?");
    if (delete){
        //window.location.href = route('entities_destroy', {id: id});
        alert(id)
    }
}

