@extends('admin.layouts.app')

@section('title', 'Все пользователи')

@section('content')
    <div class="element-actions">
        <a class="btn btn-primary btn-sm" href="{{ route('admin.user.create') }}"><i class="os-icon os-icon-ui-22"></i><span>Новый пользователь</span></a>
    </div>
    <h6 class="element-header">
        Все пользователи
    </h6>
    <div class="element-box">
        <div class="table-responsive">
            <table id="datatables" class="dataTables_wrapper table-sm" cellspacing="0" width="100%">
                <thead>    
                    <tr>
                        <th>№</th>
                        <th>Имя</th>
                        <th>Email</th>
                        <th>Роль</th>
                        <th>Категория</th>
                        <th>Статус</th>
                        <th width="150px" class="text-center">Действия</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($data as $key => $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        @if(!empty($user->getRoleNames()))
                            @foreach($user->getRoleNames() as $v)
                                <label class="badge badge-primary-inverted">{{ $v }}</label>
                            @endforeach
                        @endif
                    </td>
                    <td>
                        @isset($user->user_id)
                            @if($user->user_id->categories())
                                {{ $user->user_id->categories()->title['ru'] }}
                            @elseif($user->user_id->postcategories())
                                {{ $user->user_id->postcategories()->title['ru'] }}
                            @endif
                        @endisset
                    </td>
                    <td>
                        {!! $user->getStatus() !!}
                    </td>
                    <td class="text-center">
                        <a class="btn btn-table btn-table-show" href="{{ route('admin.user.show',$user->id) }}"><i class="icon-feather-book-open"></i></a>
                        <a class="btn btn-table btn-table-edit" href="{{ route('admin.user.edit',$user->id) }}"><i class="icon-feather-edit"></i></a>
                        {!! Form::open(['method' => 'DELETE','route' => ['admin.user.destroy', $user->id],'style'=>'display:inline', 'onsubmit' => 'return confirmDelete()']) !!}
                            <input type="hidden" value="Delete">
                            <button class="btn btn-table btn-table-trash" type="submit"><i class="icon-feather-trash-2"></i></button>
                        {!! Form::close() !!}
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>

        </div>
        {!! $data->render() !!}
    </div>

@endsection

@section('scripts')

    <script>
        $(document).ready(function() {
            var table = $('#datatables').DataTable({
                pageLength:50
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
                window.location.href = "user/"+ data[0];
            });
        });
    </script>

@endsection