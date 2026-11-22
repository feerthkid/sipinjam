@if (session('sukses'))
<p style="color:green">{{ session('sukses') }}</p>
@endif

@if ($errors->any())
<ul style="color:red">
@foreach ($errors->all() as $e)
<li>{{ $e }}</li>
@endforeach
</ul>
@endif