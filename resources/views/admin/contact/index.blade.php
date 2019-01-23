@extends('admin.layouts.app')

@section('title', trans('t.contacts'))

@section('content')
    <div class="element-actions">
        {{-- <a class="btn btn-primary btn-sm" href="{{ route('admin.gallery.create') }}">
            <i class="os-icon os-icon-ui-22"></i><span>{{trans('t.create_gallery')}}</span>
        </a> --}}
    </div>
    <h6 class="element-header">
        {{trans('t.contacts')}}
    </h6>
    <div class="element-box">
        <div class="table-responsive">
            <table id="datatables" class="dataTables_wrapper table-sm" cellspacing="0" width="100%">
                <thead>    
                    <tr>
                        <th>ID</th>
                        <th>{{trans('t.name')}}</th>
                        <th>{{trans('t.value')}}</th>
                        <th class="text-center">{{trans('t.status')}}</th>
                        {{-- <th>{{trans('t.date')}}</th> --}}
                        <th width="150px" class="text-center">{{trans('t.actions')}}</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($data as $key => $row)
                <tr>
                    <td>{{ $row->id }}</td>
                    <td>{{ trans("t.$row->name") }}</td>
                    <td>{{$row->value_lang ? $row->value_lang : trans('t.not_specified')}}</td>
                    <td>
                        <div class="d-flex align-items-center flex-column">
                            @status($row->status)
                        </div>
                    </td>
                    <td class="text-center">
                        {{-- <a class="btn btn-table btn-table-show" href="{{ route('admin.gallery.show',$row->id) }}"><i class="icon-feather-book-open"></i></a> --}}
                        <a class="btn btn-table btn-table-edit" href="{{ route('admin.contact.edit',$row->id) }}"><i class="icon-feather-edit"></i></a>
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

            // $('#datatables tbody').on( 'click', 'tr', function () {

            //     if ( $(this).hasClass('selected') ) {
            //         $(this).removeClass('selected');
            //     }
            //     else {
            //         table.$('tr.selected').removeClass('selected');
            //         $(this).addClass('selected');
            //     }
                
            //     if($(this).hasClass('status'))
            //     {
            //         console.log('status');
            //     }
            //     return;

            //     var data = table.row('.selected').data();
            //     window.location.href = "country/"+ data[0];
            // });
        });
    </script>

@endsection