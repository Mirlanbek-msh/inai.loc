@extends('admin.layouts.app')

@section('title', 'Все роли')

@section('content')
    @can('role-create')
    <div class="element-actions">
        {{-- <a class="mr-2 mb-2 btn btn-success" href="{{ route('admin.role.create') }}">
        <i class="os-icon os-icon-user-male-circle"></i> Новая роль</a> --}}
    </div>
    @endcan
    <h6 class="element-header">
        Все роли
    </h6>
    <div class="element-box">
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif
        <div class="row">
            <div class="col-sm-12">
                <div class="table-responsive">
                    <table id="datatables" class="dataTables_wrapper table-sm" cellspacing="0" width="100%">
                        <thead>    
                            <tr>
                                <th>№</th>
                                <th>Название</th>
                                <th width="280px">Действия</th>
                            </tr>
                    	</thead>
                        <tbody>
                        @foreach ($roles as $key => $role)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $role->name }}</td>
                                <td>
                                    <a class="btn btn-table btn-table-show" href="{{ route('admin.role.show',$role->id) }}"><i class="icon-feather-book-open"></i></a>
                                    @can('role-edit')
                                    <a class="btn btn-table btn-table-edit" href="{{ route('admin.role.edit',$role->id) }}"><i class="icon-feather-edit"></i></a>
                                    @endcan
                                    @can('role-edit')
                                    {{-- {!! Form::open(['method' => 'DELETE','route' => ['admin.role.destroy', $role->id],'style'=>'display:inline', 'onsubmit' => 'return confirmDelete()']) !!}
                                        <input type="hidden" value="Delete">
                                        <button class="btn btn-table btn-table-trash" type="submit"><i class="icon-feather-trash-2"></i></button>
                                    {!! Form::close() !!} --}}
                                    @endcan
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
                {!! $roles->render() !!}
            </div>
        </div>
    </div>

@endsection

@section('scripts')

    <script>
        $(document).ready(function() {
            $('#datatables').DataTable();
        });
    </script>

@endsection