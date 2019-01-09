@extends('admin.layouts.app')

@section('title', trans('t.signed_up'))

@section('content')

    <div class="element-actions">
    </div>
    <h6 class="element-header">
        {{trans('t.signed_up')}}
    </h6>
    <div class="element-box">
        <div class="table-responsive">
            <table id="datatables" class="dataTables_wrapper table-sm" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>ID</th>
                    @if($row->need_org_name)
                    <th>{{trans('t.org_name')}}</th>
                    @endif
                    @if($row->need_full_name)
                    <th>{{trans('t.full_name')}}</th>
                    @endif
                    @if($row->need_phone)
                    <th>{{trans('t.phone_number')}}</th>
                    @endif
                    @if($row->need_email)
                    <th>Email</th>
                    @endif
                    <th>{{trans('t.seen')}}</th>
                    <th>{{trans('t.time')}}</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($row->replies as $key => $reply)
                    <tr>
                        <td>{{ $reply->id }}</td>
                        @if($row->need_org_name)
                        <td>{{ $reply->org_name }}</td>
                        @endif
                        @if($row->need_full_name)
                        <td>{{ $reply->full_name }}</td>
                        @endif
                        @if($row->need_phone)
                        <td>{{ $reply->phone }}</td>
                        @endif
                        @if($row->need_email)
                        <td>{{ $reply->email }}</td>
                        @endif
                        <td class="text-center ">
                            @status($reply->seen)
                        </td>
                        <td>
                            {{$reply->created_at}}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection

@section('scripts')
    <script src="https://use.fontawesome.com/691852923e.js"></script>
    <script>

        $(document).ready(function() {
            var table = $('#datatables').DataTable({
                "order": [],
                pageLength: 50,
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
            window.location.href = "reply/"+ data[0];
            });
        });
    </script>

@endsection

