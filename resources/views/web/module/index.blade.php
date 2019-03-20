@extends('web.layouts.base')

@section('title', trans('t.modules') . ": $title | INAI.KG")

@section('social_meta')
    <!-- Twitter Meta -->
    {{-- <meta name="twitter:site" content="@centraltoday"> --}}
    {{-- <meta name="twitter:creator" content="@centraltoday"> --}}
    <meta name="twitter:card" content="{{ trans('t.kgiai') }}">
    <meta name="twitter:title" content="{{trans('t.modules')}}: $title | INAI.KG">
    <meta name="twitter:description" content="{{ trans('t.kgiai') }}">
    <meta name="twitter:image" content={{ asset('images/favicon.ico') }}">

    <!-- Facebook Meta -->
    <meta property="og:description" content="{{ trans('t.kgiai') }}">
    <meta property="og:title" content="{{trans('t.modules')}}: $title | INAI.KG">

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
                            {{-- <th>ID</th> --}}
                            <th></th>
                            <th>Label</th>
                            <th>Subject #</th>
                            @if($semester)
                            <th>Semester</th>
                            <th class="none">Ects</th>
                            @else
                            <th>Ects</th>
                            @endif
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
                            @if(!$semester)
                            <th class="none">Semester</th>
                            @endif
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $row)
                        <tr>
                            <td>
                                <span></span>
                            </td>
                            {{-- <td>{{$row->id}}</td> --}}
                            <td>{{$row->label}}</td>
                            <td>{{$row->nr}}</td>
                            @if($semester)
                            <td>{{optional($row)->semester}}</td>
                            @endif
                            <td>{{$row->ects}}</td>
                            <td>{{$row->professor}}</td>
                            <td>{{$row->content}}</td>
                            <td>{{$row->learning_goals}}</td>
                            <td>{{$row->literature}}</td>
                            <td>{{$row->preliminary_knowledge}}</td>
                            <td>{{$row->preliminary_work}}</td>
                            <td>{{$row->examination}}</td>
                            <td>{{$row->exam_duration}}</td>
                            <td>{{optional($row)->comment}}</td>
                            <td>{{optional($row)->specialisation}}</td>
                            @if(!$semester)
                            <td>{{optional($row)->semester}}</td>
                            @endif
                        </tr>
                        @endforeach
                        <tfoot>
                            <tr>
                                {{-- <th>ID</th> --}}
                                <th></th>
                                <th>Label</th>
                                <th>Subject #</th>
                                @if($semester)
                                <th>Semester</th>
                                <th class="none">Ects</th>
                                @else
                                <th>Ects</th>
                                @endif
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
                                @if(!$semester)
                                <th class="none">Semester</th>
                                @endif
                            </tr>
                        </tfoot>
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

        $.fn.dataTableExt.oSort['test-asc'] = function(x,y) {
            var retVal;
            x = $.trim(x);
            y = $.trim(y);

            if (x==y) retVal= 0;
            else if (x == "" || x == " ") retVal= 1;
            else if (y == "" || y == " ") retVal= -1;
            else if (x > y) retVal= 1;
            else retVal = -1;
            return retVal;
        }
        $.fn.dataTableExt.oSort['test-desc'] = function(y,x) {
            var retVal;
            x = $.trim(x);
            y = $.trim(y);

            if (x==y) retVal= 0; 
            else if (x == "" || x == " ") retVal= -1;
            else if (y == "" || y == " ") retVal= 1;
            else if (x > y) retVal= 1;
            else retVal = -1;

            return retVal;
        }

        var table = $('#datatables').DataTable({
            pageLength: 25,
            responsive: true,
            columnDefs: [
                {
                    className: 'control',
                    orderable: false,
                    targets: 0,
                },
                {
                    type: 'test',
                    targets: 3,
                }
            ],
            @if($semester)
            order: [3, 'asc'],
            @else
            order: [2, 'asc'],
            @endif
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
    });

</script>
@endsection