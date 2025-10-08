<form class="mx-auto w-max flex flex-col"
	method="post"
	action="/api/createjrnl.php"
>
	<label for="name">
		<input type="text" name="name"
			placeholder="jrnl name"
			class="p-1 border rounded
			dark:border-slate-200 border-slate-700
			placeholder:text-gray-400"
		/>
	</label>
	<input class="block" type="submit" value="Create jrnl" />
</form>
