
<h1>
    Welcome to the home page
</h1>
<p>
    Olá, {{ $name }}
</p>

<p>
    Suas tarefas são:
</p>

<ul>
    @foreach ($tasks as $task)
        <li>
            {{ $task }}
        </li>
    @endforeach
</ul>

@auth
    <p>
        Você está logado!
    </p>
@endauth

@guest
    <p>
        Você não está logado!
    </p>
@endguest