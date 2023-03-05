/*<---========Scroll Animation======--->*/
const observer = new IntersectionObserver((entries) =>{
	entries.forEach((entry) => {
		console.log(entry)
		if (entry.isIntersecting){
			entry.target.classList.add('show');
		} else {
			entry.target.classList.remove('show');
		}
	});
});

const hiddenElements = document.querySelectorAll('.hidden');
hiddenElements.forEach((el) => observer.observe(el));

/*<---========Auto-type======--->*/
const mainMenu = document.querySelector('.mainMenu');
		const closeMenu = document.querySelector('.closeMenu');
		const openMenu = document.querySelector('.openMenu');
		const menu_items = document.querySelectorAll('nav .mainMenu li a');

		openMenu.addEventListener('click',show);
		closeMenu.addEventListener('click',close);

		// close menu when you click on a menu item 
		menu_items.forEach(item => {
			item.addEventListener('click',function(){
        close();
			})
		})

		function show(){
			mainMenu.style.display = 'flex';
			mainMenu.style.top = '0';
		}
		function close(){
			mainMenu.style.top = '-100%';
		}

