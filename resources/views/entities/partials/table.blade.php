<table id="myTable" class="table table-bordered table-striped">
    <thead>
    <tr align="center">
        <th>#</th>
        <th style="width:380px!important;">Razón social</th>
        <th>type</th>
        <th>Acciones</th>
    </tr>
    </thead>
    <tbody>
    <?php $i = 1?>
    @foreach($entities as $item)
        @if($item->slug != 'super.admin')
            <tr>
                <td align="center">{{$i}}</td>
                <td>{{$item->business_name}}</td>
                <td align="center">{{$item->type}}</td>
                <td align="center">
                    @can('entities.show')
                        <a data-toggle="modal" href="#showentities"
                           class="btn waves-effect waves-light btn-info font-white"
                           onclick="show_entity({{$item->id}})">
                            <i class="fa fa-eye" aria-hidden="true"></i>
                            Ver</a>
                    @endcan
                    @can('entities.edit')
                        <a data-toggle="modal" href="#entities"
                           class="btn waves-effect waves-light btn-warning font-white"  onclick="edit_entity({{$item->id}})"><i
                                class="fa fa-pencil-square-o" aria-hidden="true"></i> Editar</a>
                    @endcan
                    @can('entities.destroy')
                        <a href="{{route('entities.destroy',$item->id)}}"
                           onclick="event.preventDefault();document.getElementById('deleteentities').submit();"
                           class="btn waves-effect waves-light btn-danger font-white"><i
                                class="fa fa-trash"></i> Eliminar</a>
                        <form method="POST" id="deleteentities"
                              action="{{route('entities.destroy',$item->id)}}" style="display: none;">
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
