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
		<hr>
		<div>
			<p>Text to speech</p>
			<textarea name="" class="textarea" cols="30" rows="5" placeholder="Start typing..."></textarea><br><br>
			<button class="convert">Convert to Speech</button>
		</div>
		<script>
			// Turing programming question.
			function find_max(nums){
				var max = nums[0];
				let max_num = Number.NEGATIVE_INFINITY;
				for(let num of nums){
					if(num > max_num){
						max_num = num;
					}
				}
				return max_num;
			}
			console.log(find_max([1,2,3,4,5,6,7,8,9,10]));

			// Text to speech in Javascript.
			let convert = document.querySelector('.convert');
			let textarea = document.querySelector('.textarea');
			let speech = new SpeechSynthesisUtterance();
			convert.addEventListener('click', function(){
				speech.text = textarea.value;
				speech.pitch = 1;
				speech.volume = 1;
				speech.lang = 'en-US';
				speech.rate = 1;
				speechSynthesis.speak(speech);
			});
		</script>
	</body>
</html>
