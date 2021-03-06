@extends('admin.layouts.app')

@section('title', trans('t.all_modules'))

@section('content')

    <div class="element-actions">
        <a class="btn btn-primary btn-sm" href="{{ route('admin.module.create') }}"><i class="os-icon os-icon-ui-22"></i><span>{{trans('t.create_module')}}</span></a>
    </div>
    <h6 class="element-header">
        {{trans('t.all_modules')}}
    </h6>
    <div class="element-box">
        <div class="table-responsive">
            <table id="datatables" class="dataTables_wrapper table-sm" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>{{trans('t.label')}}</th>
                    <th>{{trans('t.nr')}}</th>
                    <th>{{trans('t.ects')}}</th>
                    <th>{{trans('t.professor')}}</th>
                    <th width="150px" class="text-center">{{trans('t.actions')}}</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($data as $key => $row)
                    <tr>
                        <td>{{ $row->id }}</td>
                        <td>{{ $row->label_lang }}</td>
                        <td>{{ $row->nr }}</td>
                        <td>{{ $row->ects }}</td>
                        <td>{{ $row->professor_lang }}</td>
                        <td class="text-center">
                            <a class="btn btn-table btn-table-show" href="{{ route('admin.module.show',$row->id) }}"><i class="icon-feather-book-open"></i></a>
                            <a class="btn btn-table btn-table-edit" href="{{ route('admin.module.edit',$row->id) }}"><i class="icon-feather-edit"></i></a>
                            {!! Form::open(['method' => 'DELETE','route' => ['admin.module.destroy', $row->id],'style'=>'display:inline', 'onsubmit' => 'return confirmDelete()']) !!}
                            <input type="hidden" value="Delete">
                            <button class="btn btn-table btn-table-trash" type="submit"><i class="icon-feather-trash-2"></i></button>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection

@section('scripts')
    <script>

        $(document).ready(function() {
            var table = $('#datatables').DataTable({
                "order": [],
                pageLength: 50,
                paging: true,
                @if(app()->getLocale() == 'ru')
                language: {
                    "processing": "??????????????????...",
                    "search": "??????????:",
                    "lengthMenu": "???????????????? _MENU_ ??????????????",
                    "info": "???????????? ?? _START_ ???? _END_ ???? _TOTAL_ ??????????????",
                    "infoEmpty": "???????????? ?? 0 ???? 0 ???? 0 ??????????????",
                    "infoFiltered": "(?????????????????????????? ???? _MAX_ ??????????????)",
                    "infoPostFix": "",
                    "loadingRecords": "???????????????? ??????????????...",
                    "zeroRecords": "???????????? ??????????????????????.",
                    "emptyTable": "?? ?????????????? ?????????????????????? ????????????",
                    "paginate": {
                        "first": "????????????",
                        "previous": "????????????????????",
                        "next": "??????????????????",
                        "last": "??????????????????"
                    },
                    "aria": {
                        "sortAscending": ": ???????????????????????? ?????? ???????????????????? ?????????????? ???? ??????????????????????",
                        "sortDescending": ": ???????????????????????? ?????? ???????????????????? ?????????????? ???? ????????????????"
                    }
                }
                @endif
            });

            $('#datatables tbody').on( 'click', 'tr', function (el) {
                if($(el.target).hasClass('icon-feather-trash-2')) return;
                if ( $(this).hasClass('selected') ) {
                    $(this).removeClass('selected');
                }
                else {
                    table.$('tr.selected').removeClass('selected');
                    $(this).addClass('selected');
                }
                var data = table.row('.selected').data();
                window.location.href = "module/"+ data[0];
            });
        });
    </script>

@endsection

