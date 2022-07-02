<h1>HI </h1>
    {{$divisions}}
<ul>
@foreach ($divisions as $division)
   <li> {{ $division->name }}  {{$division->employees}}</li>
@endforeach
</ul>
