@extends('layouts.app')

@section('content')

    <section class="personal-cab">
        <div class="content">
            <div class="profile-container flex">
                <div class="align-center just-center w-100">
                    <h1 class="profile-mob-title">Кабинет пользователя</h1>
                </div>
                <div class="set-div flex w-100 setting-profile-tab">
                    @include('profile.menu')
                    <div class="profile-info">
                        <div class="contacts-container grid bottom-tier">
                            <div class="contacts-form-main-wrapper">
                                <div class="heading-cab">
                                    <h2>Персонал</h2>
                                </div>
                                @foreach($staffs as $staff)
                                    @if(!isset($staff->user->name)) @continue @endif
                                    <div class="shop-card">
                                        <div class="name-shop w-100 m-10">
                                            <h3>{{ $staff->user->name }}</h3>
                                        </div>
                                        <div class="abs-edit">
                                            <a class="edit" href="{{ route('staff.delete', [app()->getLocale(), $staff]) }}"><i class="fa fa-trash-o" aria-hidden="true"></i></a>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="succes-div">
                                    <h3>Менеджер доданий</h3>
                                </div>
                                <div class="add-new w-50">
                                    <h3>Додати нового менеджера</h3>
                                    <form class="add-manager" method="POST" action="{{ route('staff.invite', app()->getLocale()) }}">
                                        @csrf
                                        <div class="req-div">
                                            <span class="req-span">
                                                *Обов'язкове поле
                                            </span>
                                            <input class="form-input required-input m-inp" type="text" placeholder="Ім'я" name="name-manager">
                                        </div>
                                        <div class="req-div">
                                            <span class="req-span-2">
                                                *Данний email вже зареєстровано
                                            </span>
                                            <span class="req-span">
                                                *Обов'язкове поле
                                            </span>
                                            <input class="form-input required-input m-inp" type="email" placeholder="E-mail" name="email">
                                        </div>
                                        <button class="main-btn main-blue click-mail" type="submit">Додати</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection

@section('js')
    @if (session('message'))
        <script>
             $('.add-manager').addClass('active-2');
        </script>
    @endif

    @if (session('invite_staff'))
        <script>
            $('.succes-div').addClass('active');
        </script>
    @endif
@endsection
