<html>
	<head>
		<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
	</head>
	<body>
		<h1 x-data="{ message: 'Working with AlpineJS...' }" x-text="message"></h1>
		<p>Counter</p>
		<div x-data="{ count: 0 }">
			<button @click="count++">Increment</button>
			<span x-text="count * 3"></span>
			<button @click="count--">Decrement</button>
		</div>
		<hr>
		<div x-data="{ open: false }">
			<p>Toggle Content</p>
			<button @click="open = !open">Toggle</button>
			<div x-show="open" @click.outside="open = false">Contents...</div>
		</div>
		<hr>
		<div
			x-data="{
				search: '',
				items: ['foo', 'bar', 'baz'],
				get filteredItems() {
					return this.items.filter(
						i => i.startsWith(this.search)
					)
				}
			}"
		>
			<p>Search items</p>
			<input x-model="search" placeholder="Search...">
			<ul>
				<template x-for="item in filteredItems" :key="item">
					<li x-text="item"></li>
				</template>
			</ul>
		</div>
	</body>
</html>
