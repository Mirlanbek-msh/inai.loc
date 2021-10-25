<nav class="navbar navbar-expanded-lg navbar-top top-bar-menu">
    <div class="container">
        <nav class="nav navbar-social">
            @isset($contact_data['phone_1'])
            <a class="nav-link" href="tel:{{preg_replace("/\s+/","", $contact_data['phone_1'])}}">
                <i class="fa fa-phone"></i> {{$contact_data['phone_1']}}
            </a>
            @endif
            @isset($contact_data['email'])
            <a class="nav-link" href="mailto:{{$contact_data['email']}}">
                <i class="fa fa-envelope"></i> {{$contact_data['email']}}
            </a>
            @endif
        </nav>
        {{-- <ul class="nav justify-content-center nav-info">
            <li class="nav-item">
                <span>asdfasdfasdf</span>
            </li>
        </ul> --}}
        <ul class="nav navbar-navs locale">
            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                @if(app()->getLocale() != $localeCode)
                <li class="nav-item">
                    <a class="nav-link" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                        <span class="label label-default"><span class="flag-icon flag-icon-{{$localeCode}}"></span> {{ strtoupper($localeCode) }}</span>
                    </a>
                </li>
                @endif
            @endforeach
        </ul>
    </div>
</nav>
<header class="header sticky-top sps sps--abv" >
    <div class="container">
        <div class="main-header">
            <div id="hamburger-menu" class="hamburger">
                <span class="line"></span>
                <span class="line"></span>
                <span class="line"></span>
            </div>
            <div class="logo">
                <a href="{{ route('web.home') }}" class="navbar-brand">
                    <img src="{{ asset('/assets/images/logo.png') }}" alt="">
                </a>
            </div>
            <nav id="main-nav">
                <ul class="nav float-right">
                                         <li class="nav-item active">
                                            <a class="nav-link" href="{{ route('web.home') }}">{{ trans('t.home') }}</a>
                                        </li>

{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="{{ route('web.event.index') }}">{{ trans('t.events') }}</a>--}}
{{--                    </li>--}}

                    <li class="nav-item dropdown mega-dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" data-flip="false" data-display="static">
                            {{ trans('t.about') }}
                        </a>
                        <ul class="dropdown-menu mega-dropdown-menu">
                            <div class="container">
                                <div class="row">
                                    <li class="col-lg-6 col-md-12 col-sm-12">
                                        <ul>
                                            <li class="dropdown-header"><a class="dropdown-header" href="{{ route('web.about') }}" style="text-transform: uppercase; color:white">{{ trans('t.about') }}</a></li>
                                            <li class="dropdown-header">{{ trans('t.organigram') }}</li>
                                            @foreach($organigram->pages as $row)
                                                <li><a href="{{ route('web.application.show', $organigram->slug) }}#p{{$loop->iteration}}">{{$row->title_lang}}</a></li>
                                            @endforeach
                                            <li class="dropdown-header"><a class="dropdown-header" href="https://inai.kg/uploads/filemanager/INAI.KG_Charter.pdf" target="_blank">{{ trans('t.charter') }}</a></li>
                                            <li class="dropdown-header"><a class="dropdown-header" href="https://inai.kg/uploads/filemanager/License-INAI.KG_.pdf" target="_blank">{{ trans('t.license') }}</a></li>
                                            {{--                                            <li><a href="{{ route('web.managements') }}">Рукодовтсва</a></li>--}}
                                        </ul>
                                    </li>
                                    <li class="col-lg-6 col-md-12 col-sm-12">
                                        <ul>
                                            <li class="dropdown-header">{{ trans('t.accreditation') }}</li>
                                            <li><a href="https://inai.kg/uploads/filemanager/Accreditation_BS_INAI.kg.pdf" target="_blank">{{ trans('t.accreditation_cert') }}</a></li>
                                            <li><a href="https://inai.kg/uploads/filemanager/Accreditation_MS_INAI.kg.pdf" target="_blank">{{ trans('t.rep_accreditation') }}</a></li>
{{--                                            <li class="dropdown-header"><a class="dropdown-header" href="{{ route('web.projects') }}" >{{ trans('t.projects') }}</a></li>--}}
                                        </ul>
                                        <ul>
                                            <li class="dropdown-header">{{ $internationalization->title_lang }}</li>
                                            @foreach($internationalization->pages as $row)
                                                <li><a href="{{ route('web.application.show', $internationalization->slug) }}#p{{$loop->iteration}}">{{$row->title_lang}}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                </div>
                            </div>
                        </ul>
                    </li>
                    <li class="nav-item dropdown mega-dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" data-flip="false" data-display="static">
                            {{--                        <i class="fa fa-graduation-cap"></i>--}} {{ trans('t.for_graduates') }}{{-- Абитуриентам --}}
                        </a>
                        <ul class="dropdown-menu mega-dropdown-menu">
                            <div class="container">
                                <div class="row">
                                    <li class="col-lg-6 col-md-12 col-sm-12">
                                        <ul>
                                            <li class="dropdown-header" >{{ $bachelor_for_graduates->title_lang }}</li>
                                            @foreach($bachelor_for_graduates->pages as $row)
                                                <li><a href="{{ route('web.application.show', $bachelor_for_graduates->slug) }}#p{{$loop->iteration}}">{{$row->title_lang}}</a></li>
                                            @endforeach
                                        </ul>
                                        <ul>
                                            <li class="dropdown-header" >{{ $master_for_graduates->title_lang }}</li>
                                            @foreach($master_for_graduates->pages as $row)
                                                <li><a href="{{ route('web.application.show', $master_for_graduates->slug) }}#p{{$loop->iteration}}">{{$row->title_lang}}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="col-lg-6 col-md-12 col-sm-12">

                                        <ul><li class="dropdown-header">{{trans('t.learning_programs')}}</li></ul>
                                        <ul style="margin-left: 15px;">
                                            <li class="dropdown-header" style="font-weight: 500">{{ $bachelor->title_lang }}</li>
                                            @foreach($bachelor->pages as $row)
                                                <li><a href="{{ route('web.application.show', $bachelor->slug) }}#p{{$loop->iteration}}">{{$row->title_lang}}</a></li>
                                            @endforeach
                                            {{--                                                 scholarship programsfor Bishkek for Zwickau--}}
                                            {{--                                                <li class="dropdown-header" style="font-weight: 500">{{ $scholarship_programs->title_lang }}</li>--}}
                                            {{--                                                @foreach($scholarship_programs->pages as $row)--}}
                                            {{--                                                    <li><a href="{{ route('web.application.show', $scholarship_programs->slug) }}#p{{$loop->iteration}}">{{$row->title_lang}}</a></li>--}}
                                            {{--                                                @endforeach--}}
                                            <li class="dropdown-header" style="font-weight: 500">{{ $master->title_lang }}</li>
                                            @foreach($master->pages as $row)
                                                <li><a href="{{ route('web.application.show', $master->slug) }}#p{{$loop->iteration}}">{{$row->title_lang}}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
{{--                                    <li class="col-lg-6 col-md-12 col-sm-12">--}}
{{--                                        <ul>--}}
{{--                                            <li class="dropdown-header">{{ $admission->title_lang }}</li>--}}
{{--                                            @foreach($admission->pages as $row)--}}
{{--                                                <li><a href="{{ route('web.application.show', $admission->slug) }}#p{{$loop->iteration}}">{{$row->title_lang}}</a></li>--}}
{{--                                            @endforeach--}}
{{--                                        </ul>--}}
{{--                                    </li>--}}
                                </div>
                            </div>
                        </ul>
                    </li>
                    @if($services->pages->count())
                        <li class="nav-item dropdown mega-dropdown">
                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" data-flip="false" data-display="static">
                                {{ $services->title_lang }} {{-- Студентам --}}
                            </a>
                            <ul class="dropdown-menu mega-dropdown-menu">
                                <div class="container">
                                    <div class="row">
                                        <li class="col-lg-6 col-md-12 col-sm-12">
                                            <ul>
                                                <li class="dropdown-header">{{trans('t.educ_process')}}</li>
                                                {{-- <li class="dropdown-header">{{trans('t.modules')}}</li> --}}
                                                @foreach($services->pagesChunk()[0] as $row)
                                                    @if($row->link)
                                                        <li><a href="{{$row->link}}" target="_blank">{{$row->title_lang}}<i style="margin-left: 5px;" class="fa fa-external-link-alt"></i></a></li>
                                                    @else
                                                        <li><a href="{{ route('web.page.show', $row->slug) }}">{{$row->title_lang}}</a></li>
                                                    @endif
                                                @endforeach
                                                @if($services->pagesChunk()->count() > 1)
                                                    @foreach($services->pagesChunk()[1] as $row)
                                                        @if($row->link)
                                                            <li><a href="{{$row->link}}" target="_blank">{{$row->title_lang}}<i style="margin-left: 5px" class="fa fa-external-link-alt"></i></a></li>
                                                        @else
                                                            <li><a href="{{ route('web.page.show', $row->slug) }}">{{$row->title_lang}}</a></li>
                                                        @endif
                                                    @endforeach
                                                @endif

                                                @foreach($portal->pages as $row)
                                                    <li><a style="padding: 0px 5px;" href="{{ route('web.application.show', $portal->slug) }}#p{{$loop->iteration}}">{{$row->title_lang}}</a></li>
                                                @endforeach
                                                
{{--                                                <hr>--}}
{{--                                                <li class=""><a href="/" target="_blank">Расписание<i style="margin-left: 5px;" class="fa fa-external-link-alt"></i></a></li>--}}
{{--                                                <li class=""><a href="https://drive.google.com/file/d/1SlSg8gFjOTNtcWKTtxvyQu-jCvFM8Gwu/view?usp=sharing" target="_blank">Рабочий учебный план<i style="margin-left: 5px;" class="fa fa-external-link-alt"></i></a></li>--}}
{{--                                                <li class=""><a href="https://inai.kg/uploads/filemanager/educational_process_schedule.pdf" target="_blank">График учебного процесса<i style="margin-left: 5px;" class="fa fa-external-link-alt"></i></a></li>--}}
{{--                                                <li class=""><a href="https://inai.kg/uploads/filemanager/educational_schedule_2.pdf" target="_blank">График сессии<i style="margin-left: 5px;" class="fa fa-external-link-alt"></i></a></li>--}}

                                                <li class="dropdown-header"><a class="dropdown-header" style="color:white" href="{{ route('web.application.show', $normative_documents->slug) }}">{{ $normative_documents->title_lang }}</a></li>

                                                {{-- Студенческая жизнь --}}
                                                <li class="dropdown-header"> {{trans('t.students_life')}} </li>
                                                {{-- Студенческий сенат, Энактус --}}
                                                @foreach($educational_process->pages as $row)
                                                    <li><a style="padding: 0px 5px;" href="{{ route('web.application.show', $educational_process->slug) }}#p{{$loop->iteration}}">{{$row->title_lang}}</a></li>
                                                @endforeach
                                                {{-- END Студенческий сенат, Энактус --}}

                                                {{-- END Студенческая жизнь --}}

                                                <li class="dropdown-header">{{trans('t.q_assurance')}}</li>
                                                @foreach($q_assurance->pages as $row)
                                                    <li><a style="padding: 0px 5px;" href="{{ route('web.application.show', $q_assurance->slug) }}#p{{$loop->iteration}}">{{$row->title_lang}}</a></li>
                                                @endforeach

                                            </ul>

                                        </li>
                                        <li class="col-lg-6 col-md-12 col-sm-12">
                                            <ul>

                                                <li >
                                                    <ul ><li class="dropdown-header">{{trans('t.curricula')}}</li></ul>
                                                    <ul style="margin-left: 15px;">
                                                        <li class="dropdown-header" style="font-weight: 500">
                                                            <a href="{{ route('web.module.index', $row->slug) }}">{{trans('t.modules')}}</a>
                                                        </li>
                                                        @foreach ($study_programs as $program)
                                                            <li class="dropdown-header" style="font-weight: 500">{{$program->label}} {{$program->degree}}
                                                                ({{$program->licensedYear()}})
                                                            </li>
                                                            @foreach ($program->specialisations as $spec)
                                                                <li>
                                                                    <a href="{{ route('web.module.show', $spec->slug) }}">{{optional($spec)->label_lang}}</a>
                                                                </li>
                                                            @endforeach
                                                            <li>
                                                                <a href="{{ route('web.module.obligatoryCatalog',$program->id) }}">{{trans('t.obligatory_modules')}}</a>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                </li>


                                                {{-- <li class="dropdown-header">{{trans('t.modules')}}</li> --}}
                                                {{--                                            @if($services->pagesChunk()->count() > 1)--}}
                                                {{--                                                @foreach($services->pagesChunk()[1] as $row)--}}
                                                {{--                                                    @if($row->link)--}}
                                                {{--                                                        <li><a href="{{$row->link}}" target="_blank">{{$row->title_lang}}<i style="margin-left: 5px" class="fa fa-external-link-alt"></i></a></li>--}}
                                                {{--                                                    @else--}}
                                                {{--                                                        <li><a href="{{ route('web.page.show', $row->slug) }}">{{$row->title_lang}}</a></li>--}}
                                                {{--                                                    @endif--}}
                                                {{--                                                @endforeach--}}
                                                {{--                                            @endif--}}

                                                <hr>
                                                {{-- Портал практикантов и работодателей --}}

                                                {{-- END Портал практикантов и работодателей --}}
                                            </ul>

                                        </li>
                                    </div>
                                </div>
                            </ul>
                        </li>
                    @endif
                    <li class="nav-item dropdown mega-dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" data-flip="false" data-display="static">
                            {{--                        <i class="fa fa-graduation-cap"></i>--}} {{ trans('t.graduates') }}
                        </a>
                        <ul class="dropdown-menu mega-dropdown-menu">
                            <div class="container">
                                <div class="row">
                                    <li class="col-lg-6 col-md-12 col-sm-12">
                                        <ul>
                                            @foreach($graduates2->pages as $row)
                                                <li><a href="{{ route('web.application.show', $graduates2->slug) }}#p{{$loop->iteration}}">{{$row->title_lang}}</a></li>
                                            @endforeach
                                            <li class="dropdown-header">{{ $graduates->title_lang }}</li>
{{--                                            @foreach($graduates->pages as $row)--}}
{{--                                                <li><a href="{{ route('web.application.show', $graduates->slug) }}#p{{$loop->iteration}}">{{$row->title_lang}}</a></li>--}}
{{--                                            @endforeach--}}
                                                @foreach($graduates->pages as $row)
                                                    @if($row->link)
                                                        <li><a href="{{$row->link}}" target="_blank">{{$row->title_lang}}<i style="margin-left: 5px;" class="fa fa-external-link-alt"></i></a></li>
                                                    @else
                                                        <li><a href="{{ route('web.application.show', $graduates->slug) }}#p{{$loop->iteration}}">{{$row->title_lang}}</a></li>
                                                    @endif
                                                @endforeach
                                        </ul>
                                    </li>
                                    <li class="col-lg-6 col-md-12 col-sm-12">

                                    </li>
                                </div>
                            </div>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('web.contact') }}">{{ trans('t.contacts') }}</a>
                    </li>
{{--                    <li class="nav-item">--}}
{{--                        <a class="nav-link" href="{{ route('web.gallery') }}">{{ trans('t.gallery') }}</a>--}}
{{--                    </li>--}}
                    <li class="nav-item">
                        <a class="nav-link" href="https://www.inai.kg/en/application/summer_school">{{ trans('t.summer_school') }}</a>
                    </li>
                    {{--                    <li class="nav-item">--}}
                    {{--                        <a class="nav-link" href="{{ route('web.about') }}">{{ trans('t.about') }}</a>--}}
                    {{--                    </li>--}}

{{--                    @if($bachelor_specs->count())--}}
{{--                        <li class="nav-item dropdown mega-dropdown">--}}
{{--                            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" data-flip="false" data-display="static">--}}
{{--                                {{ trans('t.modules') }}?--}}
{{--                            </a>--}}
{{--                            <ul class="dropdown-menu mega-dropdown-menu">--}}
{{--                                <div class="container">--}}
{{--                                    <div class="row">--}}
{{--                                        <li class="col-lg-6 col-md-12 col-sm-12">--}}
{{--                                            <ul>--}}
{{--                                                <li class="dropdown-header">{{trans('t.bachelor')}}</li>--}}
{{--                                                @foreach ($bachelor_specs as $spec)--}}
{{--                                                    <li>--}}
{{--                                                        <a href="{{ route('web.module.show', $spec->slug) }}">{{optional($spec)->label_lang}}</a>--}}
{{--                                                    </li>--}}
{{--                                                @endforeach--}}
{{--                                                <li>--}}
{{--                                                    <a href="{{ route('web.module.obligatoryCatalog') }}">{{trans('t.obligatory_modules')}}</a>--}}
{{--                                                </li>--}}
{{--                                            </ul>--}}
{{--                                        </li>--}}
{{--                                        <li class="col-lg-6 col-md-12 col-sm-12">--}}
{{--                                            <ul>--}}
{{--                                                <li class="dropdown-header">{{trans('t.master')}}</li>--}}
{{--                                                @foreach ($master_specs as $spec)--}}
{{--                                                    <li>--}}
{{--                                                        <a href="{{ route('web.module.show', $spec->slug) }}">{{optional($spec)->label_lang}}</a>--}}
{{--                                                    </li>--}}
{{--                                                @endforeach--}}
{{--                                            </ul>--}}
{{--                                        </li>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
{{--                    @endif--}}

                </ul>
                <ul class="nav navbar-navs locale d-lg-none mt-3 float-left">
                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                        @if(app()->getLocale() != $localeCode)
                        <li class="nav-item">
                            <a class="nav-link" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                                <span class="label label-default"><span class="flag-icon flag-icon-{{$localeCode}}"></span> {{ strtoupper($localeCode) }}</span>
                            </a>
                        </li>
                        @endif
                    @endforeach
                    <li class="nav-item contacts-item">
                        <ul class="nav-contacts">
                            @isset($contact_data['email'])
                            <li><a href="mailto:{{$contact_data['email']}}"> <i class="fa fa-envelope"></i> {{$contact_data['email']}}</a></li>
                            @endif
                            @isset($contact_data['phone_1'])
                            <li><a href="tel:{{preg_replace("/\s+/","", $contact_data['phone_1'])}}"> <i class="fa fa-phone"></i> {{$contact_data['phone_1']}}</a></li>
                            @endif
                        </ul>

                    </li>
                    <li class="nav-item social-item">
                        <div class="ml-3 mt-1 social-links">
                            <ul>
                                @isset($contact_data['fb'])
                                <li><a class="fab fa-facebook-f fb" href="{{$contact_data['fb']}}" target="_blank"></a></li>
                                @endif
                                @isset($contact_data['tw'])
                                <li><a class="fab fa-twitter twitter" href="{{$contact_data['tw']}}" target="_blank"></a></li>
                                @endif
                                @isset($contact_data['yt'])
                                <li><a class="fab fa-youtube youtube" href="{{$contact_data['yt']}}" target="_blank"></a></li>
                                @endif
                            </ul>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</header>
<div id="shadow-layer"></div>
<div id="fbplikebox" style="top: 250px; right: 0px;">
    <a href="http://lms.inai.kg/" style="color: #007bff; text-decoration: none; background-color: transparent;">
        <div class="fbplbadge"></div>
    </a>
</div>
<style>
    #fbplikebox{
        top: 250px;
        right: 0px;
        display: block;
        padding: 0;
        z-index: 99999;
        position: fixed;
    }
    .fbplbadge{
        display: block;
        height: 105px;
        top: 50%;
        margin-top: -209px;
        position: absolute;
        left: -100px;
        width: 100px;
        background: url("https://inai.kg/assets/images/ebilim2.png") no-repeat;
        overflow: hidden;
        border-top-left-radius: 8px;
        border-bottom-left-radius: 8px;
        cursor: pointer;
    }
    .fbplbadge:hover{
        left: -105px;
    }
</style>


