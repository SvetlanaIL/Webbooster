// POPUP
document.addEventListener('DOMContentLoaded', function() {
	let buttons = document.querySelectorAll('.four-block__button'),
		popup = document.querySelector('.popup'),
		overlay = document.querySelector('.popup__overlay'),
		closeButton = document.querySelector('.popup__close');

		buttons.forEach(function(item) {
			item.addEventListener('click', function(e) {
				e.preventDefault();

				popup.classList.add('active');
			});
		});

		closeButton.addEventListener('click', function(e) {
			popup.classList.remove('active');
			e.preventDefault();
		});

		overlay.addEventListener('click', function(e) {
			popup.classList.remove('active');
			e.preventDefault();
		});


		
});

