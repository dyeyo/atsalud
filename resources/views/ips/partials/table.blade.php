<table id="myTable" class="table table-bordered table-striped">
    <thead>
    <tr align="center">
        <th>#</th>
        <th style="width:660px!important;">Nombre</th>
        <th>Acciones</th>
    </tr>
    </thead>
    <tbody>
<?php $i = 1?>
@foreach($ips as $item)
    <tr>
        <td align="center">{{$i}}</td>
        <td>{{$item->business_name}}</td>
        <td align="center">
            @can('ips.show')
                <a data-toggle="modal" href="#showips"
                   class="btn waves-effect waves-light btn-info font-white" onclick="show_ips({{$item->id}})">
                    <i class="fa fa-eye" aria-hidden="true"></i>
                    Ver</a>
            @endcan
            @can('ips.edit')
                <a data-toggle="modal" href="#ips"
                   class="btn waves-effect waves-light btn-warning font-white"
                   onclick="edit_ips({{$item->id}})"><i
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
@endforeach

    </tbody>
</table>
<script>
    $(document).ready(function () {
        $('#myTable').DataTable();
        $(document).ready(function () {
            $(".select2").select2();
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
