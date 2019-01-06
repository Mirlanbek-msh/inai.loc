<ul class="main-menu">
    <li class="sub-header">
        <span>Главные</span>
    </li>
    @hasanyrole('Super Administrator|Administrator|Editor')
    <li class="@if($current_three == 'post') current @endif">
        <a href="{{ route('admin.post.index') }}">
            <div class="icon-w">
                <div class="os-icon os-icon-edit-3"></div>
            </div>
            <span>Новости</span>
        </a>
    </li>
    @endhasanyrole
    @hasanyrole('Super Administrator|Administrator')
    <li class="has-sub-menu @if($current_three == 'category') current @endif">
        <a href="#">
            <div class="icon-w">
                <div class="os-icon os-icon-hierarchy-structure-2"></div>
            </div>
            <span>Категории</span>
        </a>
        <ul class="sub-menu">
            <li>
                <a href="{{ route('admin.category.index') }}">Все категории</a>
            </li>
            <li>
                <a href="{{ route('admin.country.index') }}">Страны</a>
            </li>
        </ul>
    </li>
    @endhasanyrole
    @hasanyrole('Super Administrator|Administrator')
    <li class="sub-header">
        <span>Пользователи</span>
    </li>
    <li>
        @hasanyrole('Super Administrator|Administrator')
        <a href="{{ route('admin.user.index') }}" class="@if($current_three == 'user') current @endif">
            <div class="icon-w">
                <div class="os-icon os-icon-users"></div>
            </div>
            <span>Все пользователи</span>
        </a>
        @endhasanyrole

        @hasanyrole('Super Administrator')
        <a href="{{ route('admin.role.index') }}" class="@if($current_three == 'role') current @endif">
            <div class="icon-w">
                <div class="os-icon os-icon-tasks-checked"></div>
            </div>
            <span>Роли</span>
        </a>
        <a href="{{ route('admin.permission.index') }}" class="@if($current_three == 'permission') current @endif">
            <div class="icon-w">
                <div class="os-icon os-icon-tasks-checked"></div>
            </div>
            <span>Права</span>
        </a>
        @endhasanyrole
    </li>
    @endhasanyrole
</ul>