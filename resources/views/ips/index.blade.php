@extends('layouts.layout-dashboard')

@section('content')
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            @include('ips.partials.breadcrumb')
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb m-b-10">
                    <li class="breadcrumb-item"><a href="{{route('/')}}">Dasboard</a></li>
                    <li class="breadcrumb-item"><a href="{{route('ips.index')}}">ips</a></li>
                </ol>
                @can('ips.create')
                    <a data-toggle="modal" class="btn btn-info d-none d-lg-block m-l-15"
                           style="color: #fff !important;" href="#myModal"><i class="fa fa-plus-circle"></i>Nueva IPS</a>
                @endcan
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header bg-info">
            <h4 class="m-b-0 text-white">ips del sistema</h4>
        </div>
        <div id="response"></div>
        <div class="card-body">
            <div class="table-responsive m-t-40">
                <table id="myTable" class="table table-bordered table-striped">
                    <thead>
                    <tr align="center">
                        <th>#</th>
                        <th>Nombre</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1?>
                    @foreach($ips as $item)
                        @if($item->slug != 'super.admin')
                            <tr>
                                <td align="center">{{$item->id}}</td>
                                <td>{{$item->business_name}}</td>
                                <td align="center">
                                    @can('ips.show')
                                        <a href="{{route('ips.show',$item->id)}}"
                                           class="btn waves-effect waves-light btn-info font-white">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                            Ver</a>
                                    @endcan
                                    @can('ips.edit')
                                            <a href="{{route('ips.edit',$item->id)}}"
                                               class="btn waves-effect waves-light btn-warning font-white"><i
                                                        class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</a>
                                    @endcan
                                    @can('ips.destroy')
                                        <a href="{{route('ips.destroy',$item->id)}}"
                                           onclick="event.preventDefault();document.getElementById('deleteIps').submit();"
                                           class="btn waves-effect waves-light btn-danger font-white"><i
                                                class="fa fa-trash"></i> Eliminar</a>
                                        <form method="POST" id="deleteIps"
                                              action="{{route('ips.destroy',$item->id)}}" style="display: none;">
                                            {{method_field('DELETE')}}
                                            {{csrf_field()}}
                                        </form>
                                    @endcan
                                </td>
                            </tr>
                            <?php $i++?>
                        @endif
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Agregar IPS</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <form action="javascript:void(0)" method="post" id="newIps" name="newIps">
                        {{csrf_field()}}
                        <div class="form-body">
                            <h3 class="card-title">Datos de la IPS</h3>
                            <hr>
                            <div class="row p-t-20">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" id="business_name" name="business_name" class="form-control" placeholder="Nombre del Negocio (*)" required>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" id="tradename" name="tradename" class="form-control form-control-danger" placeholder="Nombre comercial(*)" required>
                                    </div>
                                    <!--/span-->
                                </div>
                            </div>
                            <div class="row p-t-20">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" id="nit" name="nit" class="form-control" placeholder="NIT(*)" required>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" id="address" name="address" class="form-control form-control-danger" placeholder="Dirección" required>
                                    </div>
                                    <!--/span-->
                                </div>
                            </div>
                            <div class="row p-t-20">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" id="phone" name="phone" class="form-control" placeholder="Teléfono" required>
                                    </div>
                                </div>
                                <!--/span-->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" id="email" name="email" class="form-control form-control-danger" placeholder="Correo Electronico(*)" required>
                                    </div>
                                    <!--/span-->
                                </div>
                            </div>
                            <h3 class="card-title">Ubicación</h3>
                            <hr>
                            <div class="row p-t-20">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select name="departament_id" id="departament_id" class="select2 form-control custom-select" style="width: 100%; height:36px;" onchange="municipalities()">
                                            <option value="-1">[Seleccione un Departamento]</option>
                                            @foreach($departaments as $departament)
                                                <option value="{{$departament->id}}">{{$departament->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <select name="municipality_id" id="municipality_id" class="select2 form-control custom-select" >
                                            <option value="-1">[Seleccione un Municipio]</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success" onclick="create_ips()"> <i class="fa fa-check"></i> Guardar</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    {{--EDITAR--}}
    {{--<div class="modal fade" id="myModalEditar" role="dialog">--}}
        {{--<div class="modal-dialog">--}}
            {{--<!-- Modal content-->--}}
            {{--<div class="modal-content">--}}
                {{--<div class="modal-header">--}}
                    {{--<h4 class="modal-title">Agregar IPS</h4>--}}
                    {{--<button type="button" class="close" data-dismiss="modal">&times;</button>--}}
                {{--</div>--}}
                {{--<div class="modal-body">--}}
                    {{--<form action="javascript:void(0)" method="post" id="editIps" name="editIps">--}}
                        {{--{{method_field('PUT')}}--}}
                        {{--{{csrf_field()}}--}}
                        {{--<div class="form-body">--}}
                            {{--<h3 class="card-title">Datos de la IPS</h3>--}}
                            {{--<hr>--}}
                            {{--<div class="row p-t-20">--}}
                                {{--<div class="col-md-6">--}}
                                    {{--<div class="form-group">--}}
                                        {{--<input type="text" id="business_name" name="business_name" value="{{$ips->business_name}}"  class="form-control" placeholder="Nombre del Negocio (*)" required>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<!--/span-->--}}
                                {{--<div class="col-md-6">--}}
                                    {{--<div class="form-group">--}}
                                        {{--<input type="text" id="tradename" name="tradename" value="{{$ips->tradename}}"  class="form-control form-control-danger" placeholder="Nombre comercial(*)" required>--}}
                                    {{--</div>--}}
                                    {{--<!--/span-->--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="row p-t-20">--}}
                                {{--<div class="col-md-6">--}}
                                    {{--<div class="form-group">--}}
                                        {{--<input type="text" id="nit" name="nit" class="form-control" value="{{$ips->nit}}"  placeholder="NIT(*)" required>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<!--/span-->--}}
                                {{--<div class="col-md-6">--}}
                                    {{--<div class="form-group">--}}
                                        {{--<input type="text" id="address" name="address" value="{{$ips->address}}"  class="form-control form-control-danger" placeholder="Dirección" required>--}}
                                    {{--</div>--}}
                                    {{--<!--/span-->--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<div class="row p-t-20">--}}
                                {{--<div class="col-md-6">--}}
                                    {{--<div class="form-group">--}}
                                        {{--<input type="text" id="phone" name="phone" value="{{$ips->phone}}"  class="form-control" placeholder="Teléfono" required>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<!--/span-->--}}
                                {{--<div class="col-md-6">--}}
                                    {{--<div class="form-group">--}}
                                        {{--<input type="email" id="email" name="email" value="{{$ips->email}}"  class="form-control form-control-danger" placeholder="Correo Electronico(*)" required>--}}
                                    {{--</div>--}}
                                    {{--<!--/span-->--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<h3 class="card-title">Ubicación</h3>--}}
                            {{--<hr>--}}
                            {{--<div class="row p-t-20">--}}
                                {{--<div class="col-md-6">--}}
                                    {{--<div class="form-group">--}}
                                        {{--<select name="departament_id" id="departament_id" class="select2 form-control custom-select" style="width: 100%; height:36px;" onchange="municipalities()">--}}
                                            {{--<option value="{{$ips->departament_id}}" >[Seleccione un Departamento]</option>--}}
                                            {{--@foreach($departaments as $departament)--}}
                                                {{--<option value="{{$departament->departament_id}}">{{$departament->departament_id}}</option>--}}
                                            {{--@endforeach--}}
                                        {{--</select>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-md-6">--}}
                                    {{--<div class="form-group">--}}
                                        {{--<select name="municipality_id" id="municipality_id" class="select2 form-control custom-select" >--}}
                                            {{--<option value="{{$ips->municipality_id}}" ></option>--}}
                                        {{--</select>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</form>--}}
                {{--</div>--}}
                {{--<div class="modal-footer">--}}
                    {{--<button class="btn btn-success" onclick="update_Ips({{$ips->id}})"> <i class="fa fa-check"></i> Guardar</button>--}}
                    {{--<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
@endsection
@section('script')
    <!-- This is data table -->
    <script src="{{asset('node_modules/datatables/jquery.dataTables.min.js')}}"></script>
    <!-- start - This is for export functionality only -->
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <script src="{{asset('js/dashboard1.js')}}"></script>
    <script src="{{asset('js/functions.js')}}"></script>
    <script>
        $(document).ready(function () {
            $('#myTable').DataTable();
            $(document).ready(function () {
                var table = $('#example').DataTable({
                    "columnDefs": [{
                        "visible": false,
                        "targets": 2
                    }],
                    "order": [
                        [2, 'asc']
                    ],
                    "displayLength": 25,
                    "drawCallback": function (settings) {
                        var api = this.api();
                        var rows = api.rows({
                            page: 'current'
                        }).nodes();
                        var last = null;
                        api.column(2, {
                            page: 'current'
                        }).data().each(function (group, i) {
                            if (last !== group) {
                                $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                                last = group;
                            }
                        });
                    }
                });
                // Order by the grouping
                $('#example tbody').on('click', 'tr.group', function () {
                    var currentOrder = table.order()[0];
                    if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                        table.order([2, 'desc']).draw();
                    } else {
                        table.order([2, 'asc']).draw();
                    }
                });
            });
        });
    </script>
@endsection
