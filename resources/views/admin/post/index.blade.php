@extends('admin.layouts.app')

@section('title', 'Все посты')

@section('content')

    <div class="element-actions">
        <a class="btn btn-primary btn-sm" href="{{ route('admin.post.create') }}"><i class="os-icon os-icon-ui-22"></i><span>Новый пост</span></a>
    </div>
    <h6 class="element-header">
        Все посты
    </h6>
    <div class="element-box">
        <div class="table-responsive">
            <table id="datatables" class="dataTables_wrapper table-sm" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Заголовок</th>
                    <th>Категория</th>
                    <th>Автор</th>
                    <th>Статус</th>
                    <th class="text-center"><i class="fa fa-eye" aria-hidden="true"></i></th>
                    <th width="150px" class="text-center">Действия</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($data as $key => $row)
                    <tr>
                        <td>{{ $row->id }}</td>
                        <td>{{ $row->title }}</td>
                        <td>{{ $row->getCategoryName() }}</td>
                        <td>@isset($row->user){{ $row->user->name }}@endisset</td>
                        <td class="text-center">
                            {!! $row->getStatus() !!}
                        </td>
                        <td class="text-center">
                            {{$row->views}}
                        </td>
                        <td class="text-center">
                            <a class="btn btn-table btn-table-show" href="{{ route('admin.post.show',$row->id) }}"><i class="icon-feather-book-open"></i></a>
                            <a class="btn btn-table btn-table-edit" href="{{ route('admin.post.edit',$row->id) }}"><i class="icon-feather-edit"></i></a>
                            {!! Form::open(['method' => 'DELETE','route' => ['admin.post.destroy', $row->id],'style'=>'display:inline', 'onsubmit' => 'return confirmDelete()']) !!}
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
    <script src="https://use.fontawesome.com/691852923e.js"></script>
    <script>
        $(document).ready(function() {
            var table = $('#datatables').DataTable({
                "order": [],
                pageLength: 50,
                paging: false,
            });

            $('#datatables tbody').on( 'click', 'tr', function () {

                if ( $(this).hasClass('selected') ) {
                    $(this).removeClass('selected');
                }
                else {
                    table.$('tr.selected').removeClass('selected');
                    $(this).addClass('selected');
                }
                var data = table.row('.selected').data();
                window.location.href = "post/"+ data[0];
            });
        });
    </script>

@endsection

