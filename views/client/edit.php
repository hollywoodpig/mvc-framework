<a href="/"><p>back</p></a>
<form action="/edit" method="post">
	<input
		required
		type="hidden"
		name="id"
		value="<?= $client['id'] ?>"
	>
	<input
		required
		type="text"
		name="name"
		value="<?= $client['name'] ?>"
	>
	<button>edit</button>
</form>