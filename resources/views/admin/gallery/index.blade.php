@extends('admin.layouts.app')

@section('title', trans('t.all_galleries'))

@section('content')
    <div class="element-actions">
        <a class="btn btn-primary btn-sm" href="{{ route('admin.gallery.create') }}">
            <i class="os-icon os-icon-ui-22"></i><span>{{trans('t.create_gallery')}}</span>
        </a>
    </div>
    <h6 class="element-header">
        {{trans('t.all_galleries')}}
    </h6>
    <div class="element-box">
        <div class="table-responsive">
            <table id="datatables" class="dataTables_wrapper table-sm" cellspacing="0" width="100%">
                <thead>    
                    <tr>
                        <th>ID</th>
                        <th>{{trans('t.description')}}</th>
                        <th>{{trans('t.image')}}</th>
                        <th>{{trans('t.status')}}</th>
                        <th>{{trans('t.date')}}</th>
                        <th width="150px" class="text-center">{{trans('t.actions')}}</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($data as $key => $row)
                <tr>
                    <td>{{ $row->id }}</td>
                    <td>{{ $row->description_lang }}</td>
                    <td><img src="{{asset($row->thumb)}}" alt="" class="img-responsive h-25"></td>
                    <td>
                        <div class="d-flex align-items-center flex-column">
                            @status($row->status)
                            <a href="{{route('admin.gallery.toggle', $row)}}">{{trans('t.change')}}</a>
                        </div>
                    </td>
                    <td>{{ $row->created_at }}</td>
                    <td class="text-center">
                        {{-- <a class="btn btn-table btn-table-show" href="{{ route('admin.gallery.show',$row->id) }}"><i class="icon-feather-book-open"></i></a> --}}
                        {!! Form::open(['method' => 'DELETE','route' => ['admin.gallery.destroy', $row->id],'style'=>'display:inline', 'onsubmit' => 'return confirmDelete()']) !!}
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