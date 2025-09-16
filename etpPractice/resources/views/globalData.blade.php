<h1>Global Data</h1>
<p>Data: {{$name}}</p>

<p>Array:</p>
@foreach($features as $item)
    <p>{{ $item }}</p>
@endforeach

<h2>Follow us:</h2>
<ul>
    @foreach($socialLinks as $platform => $link)
        <li><a href="{{ $link }}" target="_blank">{{ $platform }}</a></li>
    @endforeach
</ul>
