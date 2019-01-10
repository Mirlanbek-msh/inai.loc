@extends('admin.layouts.app')

@section('title', trans('t.all_events'))

@section('content')

    <div class="element-actions">
        <a class="btn btn-primary btn-sm" href="{{ route('admin.event.create') }}"><i class="os-icon os-icon-ui-22"></i><span>{{trans('t.create_event')}}</span></a>
    </div>
    <h6 class="element-header">
        {{trans('t.all_events')}}
    </h6>
    <div class="element-box">
        <div class="table-responsive">
            <table id="datatables" class="dataTables_wrapper table-sm" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>{{trans('t.title')}}</th>
                    <th>{{trans('t.signed_up')}}</th>
                    <th>{{trans('t.status')}}</th>
                    <th class="text-center"><i class="fa fa-eye" aria-hidden="true"></i></th>
                    <th width="150px" class="text-center">{{trans('t.actions')}}</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($data as $key => $row)
                    <tr>
                        <td>{{ $row->id }}</td>
                        <td>{{ $row->title_lang }}</td>
                        <td class="text-center">
                            {{$row->replies->count()}} -
                            <a href="{{route('admin.event.reply', $row)}}">
                                {{trans('t.view')}}
                            </a>
                        </td>
                        <td class="text-center">
                            @status($row->status)
                        </td>
                        <td class="text-center">
                            {{$row->views}}
                        </td>
                        <td class="text-center">
                            <a class="btn btn-table btn-table-show" href="{{ route('admin.event.show',$row->id) }}"><i class="icon-feather-book-open"></i></a>
                            <a class="btn btn-table btn-table-edit" href="{{ route('admin.event.edit',$row->id) }}"><i class="icon-feather-edit"></i></a>
                            {!! Form::open(['method' => 'DELETE','route' => ['admin.event.destroy', $row->id],'style'=>'display:inline', 'onsubmit' => 'return confirmDelete()']) !!}
                            <input type="hidden" value="Delete">
                            <button class="btn btn-table btn-table-trash" type="submit"><i class="icon-feather-trash-2"></i></button>
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        {!! $data->links() !!}
    </div>

@endsection

@section('scripts')
    <script>

        $(document).ready(function() {
            var table = $('#datatables').DataTable({
                "order": [],
                pageLength: 50,
                paging: false,
                @if(app()->getLocale() == 'ru')
                language: {
                    "processing": "Подождите...",
                    "search": "Поиск:",
                    "lengthMenu": "Показать _MENU_ записей",
                    "info": "Записи с _START_ до _END_ из _TOTAL_ записей",
                    "infoEmpty": "Записи с 0 до 0 из 0 записей",
                    "infoFiltered": "(отфильтровано из _MAX_ записей)",
                    "infoPostFix": "",
                    "loadingRecords": "Загрузка записей...",
                    "zeroRecords": "Записи отсутствуют.",
                    "emptyTable": "В таблице отсутствуют данные",
                    "paginate": {
                        "first": "Первая",
                        "previous": "Предыдущая",
                        "next": "Следующая",
                        "last": "Последняя"
                    },
                    "aria": {
                        "sortAscending": ": активировать для сортировки столбца по возрастанию",
                        "sortDescending": ": активировать для сортировки столбца по убыванию"
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
                window.location.href = "event/"+ data[0];
            });
        });
    </script>

@endsection

