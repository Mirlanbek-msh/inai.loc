@extends('admin.layouts.app')

@section('title', 'Все страны')

@section('content')
    <div class="element-actions">
        <a class="btn btn-primary btn-sm" href="{{ route('admin.country.create') }}"><i class="os-icon os-icon-ui-22"></i><span>Добавить страну</span></a>
    </div>
    <h6 class="element-header">
        Все страны
    </h6>
    <div class="element-box">
        <div class="table-responsive">
            <table id="datatables" class="dataTables_wrapper table-sm" cellspacing="0" width="100%">
                <thead>    
                    <tr>
                        <th>ID</th>
                        <th>Название</th>
                        <th>Статус</th>
                        <th width="150px" class="text-center">Действия</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($data as $key => $row)
                <tr>
                    <td>{{ $row->id }}</td>
                    <td>{{ $row->name }}</td>
                    <td><a href="{{ route('admin.country.toggle', $row->id) }}">{!! $row->getStatus() !!}</a></td>
                    <td class="text-center">
                        {{-- <a class="btn btn-table btn-table-show" href="{{ route('admin.country.show',$row->id) }}"><i class="icon-feather-book-open"></i></a> --}}
                        <a class="btn btn-table btn-table-edit" href="{{ route('admin.country.edit',$row->id) }}"><i class="icon-feather-edit"></i></a>
                        {!! Form::open(['method' => 'DELETE','route' => ['admin.country.destroy', $row->id],'style'=>'display:inline', 'onsubmit' => 'return confirmDelete()']) !!}
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
            var table = $('#datatables').DataTable();

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