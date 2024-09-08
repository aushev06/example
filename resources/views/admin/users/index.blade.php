@extends('admin.layout.main')

@section('content')
    <div class="content-wrapper">
        <div class="container-fluid">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{route('admin.index')}}">Доска</a>
                </li>
                <li class="breadcrumb-item active">Пользователи</li>
            </ol>

            <h2></h2>
            <div class="box_general padding_bottom">
                <div class="header_box version_2">
                    <h2><i class="fa fa-user"></i>Пользователи</h2>
                    <div class="pull-right">
                        {{--                        <a href="{{route('sms.create')}}" class="btn badge-primary">Добавить</a>--}}
                    </div>
                </div>

                <div class="options">
                    <table class="table">
                        <tbody>
                        <tr>
                            <th>Имя</th>
                            <th>Почта</th>
                            <th>Создан</th>
                            {{--                            <th>Удалить</th>--}}
                            <th>Действия</th>
                        </tr>

                        @foreach($users as $user)
                            <tr>
                                <td>
                                    {{$user->name}}
                                </td>
                                <td>
                                    {{$user->email}}
                                </td>
                                <td>
                                    {{ \Carbon\Carbon::parse($user->created_at)->format('d.m.Y H:i:s') }}
                                </td>

                                <td>
                                    <a href="{{route('users.show', $user->id)}}"><i
                                            class="fa fa-fw fa-eye"></i></a>

                                    <a href="{{route('users.edit', $user->id)}}"><i
                                            class="fa fa-fw fa-edit"></i></a>

                                    <a href="{{route('users.destroy', $user->id)}}" title="Удалить"
                                       aria-label="Удалить"
                                       data-confirm="Вы уверены, что хотите удалить этот элемент?" data-method="delete"
                                       data-redirect="{{route('users.index')}}"><i
                                            class="fa fa-fw fa-trash"></i></a>
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



