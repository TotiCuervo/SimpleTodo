@component('mail::message')
<h1>Congratulations!</h1>

<h3>You have just created a new todo item:</h3>
<h5> {{ $todo->name }} </h5>
<p> {{ $todo->description }}</p>

@component('mail::button', ['url' => '/lists/'. $todo->id])
See your Todo List!
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
