<ul class="main-menu">
    <li class="sub-header">
        <span>{{trans('t.main_items')}}</span>
    </li>
    @hasanyrole('Super Administrator|Administrator')
    <li class="has-sub-menu @active('post') @active('category')">
        <a href="#">
            <div class="icon-w">
                <div class="os-icon os-icon-edit-3"></div>
            </div>
            <span>{{ trans('t.news') }}</span>
        </a>
        <ul class="sub-menu">
            <li>
                <a href="{{ route('admin.post.index') }}">{{ trans('t.news') }}</a>
            </li>
            <li>
                <a href="{{ route('admin.category.index') }}">{{ trans('t.categories') }}</a>
            </li>
        </ul>
    </li>
    <li class="@active('event')">
        <a href="{{ route('admin.event.index') }}">
            <div class="icon-w">
                <div class="os-icon os-icon-tasks-checked"></div>
            </div>
            <span>{{ trans('t.events') }}</span>
        </a>
    </li>
    @endhasanyrole
    @hasanyrole('Super Administrator|Administrator')
    <li class="sub-header">
        <span>{{trans('t.special_pages')}}</span>
    </li>
    <li class="has-sub-menu @active('page') @active('pagecategory')">
        <a href="#">
            <div class="icon-w">
                <div class="os-icon os-icon-hierarchy-structure-2"></div>
            </div>
            <span>{{ trans('t.pages') }}</span>
        </a>
        <ul class="sub-menu">
            <li>
                <a href="{{ route('admin.page.index') }}">{{ trans('t.pages') }}</a>
            </li>
            <li>
                <a href="{{ route('admin.pagecategory.index') }}">{{trans('t.categories')}}</a>
            </li>
        </ul>
    </li>
    <li class="has-sub-menu @active('modules')">
        <a href="#">
            <div class="icon-w">
                <div class="os-icon os-icon-agenda-1"></div>
            </div>
            <span>{{ trans('t.modules') }}</span>
        </a>
        <ul class="sub-menu">
            <li>
                <a href="{{route('admin.module.index')}}">{{ trans('t.modules') }}</a>
            </li>
            <li>
                <a href="{{ route('admin.curriculum.index') }}">{{trans('t.curricula')}}</a>
            </li>
            <li>
                <a href="{{route('admin.obligatory-catalogue.index')}}">{{ trans('t.obligatory-catalogues') }}</a>
            </li>
            <li>
                <a href="{{ route('admin.specialisation.index') }}">{{trans('t.specialisations')}}</a>
            </li>
            <li>
                <a href="{{ route('admin.program.index') }}">{{trans('t.programs')}}</a>
            </li>
        </ul>
    </li>
    <li class="@active('gallery')">
        <a href="{{route('admin.gallery.index')}}">
            <div class="icon-w">
                <div class="os-icon os-icon-documents-07"></div>
            </div>
            <span>{{ trans('t.gallery') }}</span>
        </a>
    </li>
    <li class="@active('about')">
        <a href="{{ route('admin.page.about') }}">
            <div class="icon-w">
                <div class="os-icon os-icon-mail-07"></div>
            </div>
            <span>{{trans('t.about')}}</span>
        </a>
    </li>
    <li class="@active('contact')">
        <a href="{{route('admin.contact.index')}}">
            <div class="icon-w">
                <div class="os-icon os-icon-link-3"></div>
            </div>
            <span>{{trans('t.contacts')}}</span>
        </a>
    </li>
    @endhasanyrole
</ul>