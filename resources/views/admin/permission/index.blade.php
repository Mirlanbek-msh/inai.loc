@extends('admin.layouts.app')

@section('title', 'Все права')

@section('content')
    @can('role-create')
    <div class="element-actions">
        {{-- <a class="mr-2 mb-2 btn btn-success" href="{{ route('admin.permission.create') }}"> --}}
        {{-- <i class="os-icon os-icon-user-male-circle"></i> Добавить права</a> --}}
    </div>
    @endcan
    <h6 class="element-header">
        Все права
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
                                <th>Права</th>
                                <th width="280px">Действия</th>
                            </tr>
                    	</thead>
                        <tbody>
                        @foreach ($permissions as $permission)
                            <tr>
                                <td>{{ $permission->name }}</td>
                                <td>
                                    <a class="btn btn-table btn-table-show" href="{{ route('admin.permission.show',$permission->id) }}"><i class="icon-feather-book-open"></i></a>
                                    {{-- @can('role-edit')
                                    <a class="btn btn-table btn-table-edit" href="{{ route('admin.permission.edit',$permission->id) }}"><i class="icon-feather-edit"></i></a>
                                    @endcan --}}
                                    {{-- @can('role-edit')
                                    {!! Form::open(['method' => 'DELETE','route' => ['admin.permission.destroy', $permission->id],'style'=>'display:inline', 'onsubmit' => 'return confirmDelete()']) !!}
                                        <input type="hidden" value="Delete">
                                        <button class="btn btn-table btn-table-trash" type="submit"><i class="icon-feather-trash-2"></i></button>
                                    {!! Form::close() !!}
                                    @endcan --}}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
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