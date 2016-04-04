<h1>Friend List</h1>

<h2>Followers</h2>
<ol>
	@foreach ($followers as $follower)
		<li>{{ $follower }}</li>
	@endforeach
</ol>

<h2>Following</h2>
<ol>
	@foreach($following as $following)
		<li>{{ $following }}</li>
	@endforeach
</ol>
