@extends('web.layouts.base')

@section('title', trans('t.modules') . " | INAI.KG")

@section('social_meta')
    <!-- Twitter Meta -->
    {{-- <meta name="twitter:site" content="@centraltoday"> --}}
    {{-- <meta name="twitter:creator" content="@centraltoday"> --}}
    <meta name="twitter:card" content="{{ trans('t.kgiai') }}">
    <meta name="twitter:title" content="{{ trans('t.kgiai') }}">
    <meta name="twitter:description" content="{{ trans('t.kgiai') }}">
    <meta name="twitter:image" content={{ asset('images/favicon.ico') }}">

    <!-- Facebook Meta -->
    <meta property="og:description" content="{{ trans('t.kgiai') }}">
    <meta property="og:title" content="{{ trans('t.modules') }} | INAI.KG">

    @include('partials.ogdata')
    
@endsection

@section('content')

<section class="section pt-5">
    <div class="container">
        <div class="row">
            <div class="col-12 mb-3 text-center">
                <h2 class="text-bold section-title mb-3">{{ $title }}</h2>
                <hr class="divider w-75">
            </div>

            <div class="col-12 mb-5">
                <table width='100%' cellspacing="0" id="datatables" class="table table-bordered table-hover display responsive">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>NR</th>
                            <th>Label</th>
                            <th class="none">Ects</th>
                            <th class="none">Professor</th>
                            <th class="none">Content</th>
                            <th class="none">Learning goals</th>
                            <th class="none">Literature</th>
                            <th class="none">Preleminary knowledge</th>
                            <th class="none">Preleminary work</th>
                            <th class="none">Examination</th>
                            <th class="none">Exam duration</th>
                            <th class="none">Comment</th>
                            <th class="none">Specialisation</th>
                            <th class="none">Semester</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $row)
                        <tr>
                            <td>{{$row->id}}</td>
                            <td>{{$row->nr}}</td>
                            <td>{{$row->label}}</td>
                            <td>{{$row->ects}}</td>
                            <td>{{$row->professor}}</td>
                            <td>{{$row->content}}</td>
                            <td>{{$row->learning_goals}}</td>
                            <td>{{$row->literature}}</td>
                            <td>{{$row->preliminary_knowledge}}</td>
                            <td>{{$row->preliminary_work}}</td>
                            <td>{{$row->examination}}</td>
                            <td>{{$row->exam_duration}}</td>
                            <td>{{$row->comment}}</td>
                            <td>{{$row->specialisation->label}}</td>
                            <td>{{$row->curriculum->semester}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</section>

@endsection
                
@section('scripts')
<script>

    $(document).ready(function() {

        /* Formatting function for row details - modify as you need */
        function format ( d ) {
            // `d` is the original data object for the row
            return '<table cellpadding="5" cellspacing="0" border="0" style="padding-left:50px;">'+
                '<tr>'+
                    '<td>Full name:</td>'+
                    '<td>'+d.name+'</td>'+
                '</tr>'+
                '<tr>'+
                    '<td>Extension number:</td>'+
                    '<td>'+d.extn+'</td>'+
                '</tr>'+
                '<tr>'+
                    '<td>Extra info:</td>'+
                    '<td>And any further details here (images etc)...</td>'+
                '</tr>'+
            '</table>';
        }

        var table = $('#datatables').DataTable({
            "order": [],
            pageLength: 50,
            responsive: true,
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

        // Add event listener for opening and closing details
        // $('#datatables tbody').on('click', 'tr', function () {
        //     var tr = $(this);
        //     var row = table.row( tr );
    
        //     if ( row.child.isShown() ) {
        //         // This row is already open - close it
        //         row.child.hide();
        //         tr.removeClass('shown');
        //     }
        //     else {
        //         // Open this row
        //         row.child( format(row.data()) ).show();
        //         tr.addClass('shown');
        //     }
        // } );
    });

</script>
@endsection