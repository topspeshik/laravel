@extends('layout')

@section('title') Регистрация @endsection

@section('main_content')
    <h1>Форма регистрации</h1>

    @if($errors->any())
        <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>

    @endif

    <form method="post" action="{{route('registration_check')}}">
       @csrf

        <div class="container">
            <p>Заполните форму, что бы создать заявку(письмо об успешной регистрации придёт к вам на указанную почту):</p>
            <hr>
            <label for="email"><b>Email</b></label>
            <input type="email" name="email" id="email" placeholder="Enter Email" required>

            <label for="login"><b>Login</b></label>
            <input type="text" name="login" id="login" placeholder="Enter Login"  required>

            <label for="password"><b>Password</b></label>
            <input type="password" name="password" id="password" placeholder="Enter Password" required>


            <button type="submit" class="btn_btn-success">Register</button>
        </div>

    </form>

        <h1> Заявки на регистрацию </h1>
        @forelse($registration as $el )
                <div class="container2">
                    <h2>Карточка подачи заявки </h2>
                    <hr>
                    <label><b>Email:</b></label>
                    <h3>{{$el->email}}</h3>
                    <hr>
                    <label><b>Login:</b></label>
                    <h3>{{$el->login}}</h3>

                    <hr>
                    <a href="{{route('send-mess',$el->id)}}"><button type="submit1" class="btn_accept">Send</button></a>
                    <a href="{{route('delete-mess',$el->id)}}"><button type="submit1" class="btn_del">Delete</button></a>
                </div>
                <p></p>
        @empty
                <div>На текущий момент, нет заявок на регистрацию</div>
        @endforelse


@endsection
