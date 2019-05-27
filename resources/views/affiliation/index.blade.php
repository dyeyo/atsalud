@extends('layouts.layout-dashboard')

@section('content')
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            @include('affiliation.partials.breadcrumb')
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb m-b-10">
                    <li class="breadcrumb-item"><a href="{{route('/')}}">Dasboard</a></li>
                    <li class="breadcrumb-item"><a href="{{route('affiliations.index')}}">Afiliaciones</a></li>
                </ol>
                @can('affiliations.create')
                    <a href="{{route('affiliations.create')}}" class="btn btn-info d-none d-lg-block m-l-15"
                       style="color: #fff !important;"><i class="fa fa-plus-circle"></i> Nueva Afiliacion</a>
                @endcan
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header bg-info">
            <h4 class="m-b-0 text-white">Afiliaciones del sistema</h4>
        </div>
        <div class="card-body">
            <div class="table-responsive m-t-40">
                <table id="myTable" class="table table-bordered table-striped">
                    <thead>
                    <tr align="center">
                        <th>#</th>
                        <th>Fecha de aplicación</th>
                        <th>Tipo de proceso</th>
                        <th>Tipo de codigo</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php $i = 1?>
                    @foreach($affiliation as $item)
                        @if($item->slug != 'super.admin')
                            <tr>
                                <td align="center">{{$i}}</td>
                                <td>{{$item->application_date}}</td>
                                <td>{{$item->type_procedure}}</td>
                                <td>{{$item->code}}</td>
                                <td align="center">
                                    @can('affiliations.show')
                                        <a href="{{route('affiliations.show',$item->id)}}"
                                           class="btn waves-effect waves-light btn-info font-white">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                            Ver</a>
                                    @endcan
                                    @can('affiliations.edit')
                                        <a href="{{route('affiliations.edit',$item->id)}}"
                                           class="btn waves-effect waves-light btn-warning font-white"><i
                                                class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</a>
                                    @endcan
                                    @can('affiliations.destroy')
                                        <a href="{{route('affiliations.destroy',$item->id)}}"
                                           onclick="event.preventDefault();document.getElementById('deleteAffiliation').submit();"
                                           class="btn waves-effect waves-light btn-danger font-white"><i
                                                class="fa fa-trash"></i> Eliminar</a>
                                        <form method="POST" id="deleteAffiliation"
                                              action="{{route('affiliations.destroy',$item->id)}}" style="display: none;">
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
