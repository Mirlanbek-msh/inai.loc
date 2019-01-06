<ul class="main-menu">
    <li class="sub-header">
        <span>{{trans('t.main_items')}}</span>
    </li>
    @hasanyrole('Super Administrator|Administrator')
    <li class="has-sub-menu @if($current_three == 'category') current @endif">
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
    <li class="has-sub-menu @if($current_three == 'category') current @endif">
        <a href="#">
            <div class="icon-w">
                <div class="os-icon os-icon-hierarchy-structure-2"></div>
            </div>
            <span>{{ trans('t.events') }}</span>
        </a>
        <ul class="sub-menu">
            <li>
                <a href="{{ route('admin.category.index') }}">{{ trans('t.events') }}</a>
            </li>
            <li>
                <a href="{{ route('admin.category.index') }}">{{trans('t.categories')}}</a>
            </li>
        </ul>
    </li>
    @endhasanyrole
    @hasanyrole('Super Administrator|Administrator')
    <li class="sub-header">
        <span>{{trans('t.special_pages')}}</span>
    </li>
    <li class="has-sub-menu @if($current_three == 'category') current @endif">
        <a href="#">
            <div class="icon-w">
                <div class="os-icon os-icon-hierarchy-structure-2"></div>
            </div>
            <span>{{ trans('t.for_graduates') }}</span>
        </a>
        <ul class="sub-menu">
            <li>
                <a href="{{ route('admin.category.index') }}">{{ trans('t.events') }}</a>
            </li>
            <li>
                <a href="{{ route('admin.category.index') }}">{{trans('t.categories')}}</a>
            </li>
        </ul>
    </li>
    <li>
        <a href="{{ route('admin.user.index') }}" class="@if($current_three == 'user') current @endif">
            <div class="icon-w">
                <div class="os-icon os-icon-users"></div>
            </div>
            <span>{{ trans('t.gallery') }}</span>
        </a>
    </li>
    <li>
        <a href="{{ route('admin.user.index') }}" class="@if($current_three == 'user') current @endif">
            <div class="icon-w">
                <div class="os-icon os-icon-users"></div>
            </div>
            <span>{{trans('t.about')}}</span>
        </a>
    </li>
    <li>
        <a href="{{ route('admin.user.index') }}" class="@if($current_three == 'user') current @endif">
            <div class="icon-w">
                <div class="os-icon os-icon-users"></div>
            </div>
            <span>{{trans('t.contacts')}}</span>
        </a>
    </li>
    @endhasanyrole
</ul>