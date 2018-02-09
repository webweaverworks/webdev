<HTML>
<HEAD>
</HEAD>

<BODY>
<b>About Us, hello  $name </b>
<ul>
@foreach  ($tasks as $task)
<li>{{ $task->body }}</li>
@endforeach
</ul>
<br>test
</BODY>


</HTML>
