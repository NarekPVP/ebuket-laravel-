<div class="menu">
    <div class="profile-menu">
        <h4 class="profile-menu-header">Добро пожаловать,
            <h4 class="profile-menu-header-name"><b>{{ Auth::user()->name }}</b></h4>
        </h4>
        <div class="parent-menu-list">
            <ul class="profile-menu-list">
                <li>
                    <a class="{{ Request::is(app()->getLocale().'/home')?'active':'' }}" href="{{ route('home', app()->getLocale()) }}">
                        <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M18.4945 18.8036L18.4946 18.8036L18.4941 18.7948C18.3915 17.0249 16.9751 15.6085 15.2052 15.5059L15.198 15.5055L15.1907 15.5053L15.0144 15.5002L15.0072 15.5H15H5C3.067 15.5 1.5 17.067 1.5 19C1.5 19.2761 1.27614 19.5 1 19.5C0.723858 19.5 0.5 19.2761 0.5 19C0.5 16.582 2.40732 14.6092 4.79923 14.5044L5.00532 14.5H15C17.4853 14.5 19.5 16.5147 19.5 19C19.5 19.2761 19.2761 19.5 19 19.5C18.7493 19.5 18.5411 19.3151 18.5054 19.0744L18.4945 18.8036ZM10 0.5C13.0376 0.5 15.5 2.96243 15.5 6C15.5 9.03757 13.0376 11.5 10 11.5C6.96243 11.5 4.5 9.03757 4.5 6C4.5 2.96243 6.96243 0.5 10 0.5ZM10 1.5C7.51472 1.5 5.5 3.51472 5.5 6C5.5 8.48528 7.51472 10.5 10 10.5C12.4853 10.5 14.5 8.48528 14.5 6C14.5 3.51472 12.4853 1.5 10 1.5Z" fill="#9DA5AF" stroke="#9DA5AF"></path></svg>
                        <span>Налаштування бренду</span>
                    </a>
                </li>
                <li>
                    <a class="{{ Request::is(app()->getLocale().'/shops*')?'active':'' }}" href="{{ route('shops', app()->getLocale()) }}">
                        <i class="fa fa-shopping-bag" aria-hidden="true" style="color: #9CA5AF;"></i>
                        <span>Точки самовивозу</span>
                    </a>
                </li>
                <li>
                    <a class="{{ Request::is(app()->getLocale().'/staff')?'active':'' }}" href="{{ route('staff', app()->getLocale()) }}">
                        <i class="fa fa-briefcase" aria-hidden="true" style="color: #9CA5AF;"></i>
                        <span>Персонал</span>
                    </a>
                </li>
                <li>
                    <a class="{{ Request::is(app()->getLocale().'/shop/cities')?'active':'' }}" href="{{ route('shop.city', app()->getLocale()) }}">
                        <i class="fa fa-briefcase" aria-hidden="true" style="color: #9CA5AF;"></i>
                        <span>Онлайн магазини</span>
                    </a>
                </li>
                <li>
                    <a class="{{ Request::is(app()->getLocale().'/price')?'active':'' }}" href="{{ route('price', app()->getLocale()) }}">
                        <i class="fa fa-briefcase" aria-hidden="true" style="color: #9CA5AF;"></i>
                        <span>Прайсинг</span>
                    </a>
                </li>
                <li>
                    <a class="{{ Request::is(app()->getLocale().'/bouquets')?'active':'' }}" href="{{ route('bouquets', app()->getLocale()) }}">
                        <i class="fa fa-briefcase" aria-hidden="true" style="color: #9CA5AF;"></i>
                        <span>Букеты</span>
                    </a>
                </li>
            </ul>
            <div class="exit">
                <a class="quit" href="javascript:;" onclick="$('#logout-form').submit()"><b>Выйти</b></a>
            </div>
        </div>
    </div>
</div>
