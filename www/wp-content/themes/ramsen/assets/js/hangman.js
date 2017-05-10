/*
 * ==============
 *	Easteregg
 * ==============
 */
cheet('r a', function () {
	// Disable the cheet code so we won't create doble games
	cheet.disable('r a');

	jQuery('body').append('<div class="hangman"></div>');
	var game = jQuery('.hangman');

	var lives = 6;
	var correctLetters = 0;
	var word = ['r', 'a', 'm', 's', 'e', 'n'];

	// Draw the word area
	game.html(createWordArea(word));

	// Draw hangman stick figure	
	game.append('<img src="assets/img/hangman/6.png" width="116" height="110">');
	var hangmanImage = jQuery('.hangman img');

	// Draw the letters keyboard
	game.append('<div class="hangman_keys">'+ createLetters() + '</div>');

	// Draw the lives counter
	game.append('<span class="hangman_lives">' + lives + '</span>');
	var livesCounter = jQuery('.hangman_lives');

	// Create a close button for the whole game window
	game.append('<button class="hangman_close">X</button>');

	// When close button is clicked...
	jQuery('.hangman_close').click(function(event) {
		event.preventDefault();
		jQuery('.hangman').remove();
	});

	// Handle button keypress
	jQuery('.hangman_keys button').click(function(event) {
		event.preventDefault();
		var buttonPressed = jQuery(this).text();
		guessLetter(buttonPressed);
	});

	function createWordArea(word) {
		// Build array of "ghost" words to be guessed later
		var arr = [];
		for (var i = word.length - 1; i >= 0; i--) {
			arr[i] = '<span class="hangman_word" data-index="'+ i +'">_</span>';
		}

		return '<div id="h_wordArea">' + arr.join(' ') + '</div>';
	}

	function createLetters() {
		var letters = [
			"A","B","C","D","E","F","G","H","I",
			"J","K","L","M","N","O","P","Q","R",
			"S","T","U","V","W","X","Y","Z","Å",
			"Ä","Ö"
		];

		var keys = [];
		for (var i = letters.length - 1; i >= 0; i--) {
			keys[i] = '<button data-key="'+ letters[i] +'">'+ letters[i] +'</button>';
		}

		return keys;
	}

	function guessLetter(letter) {
		// do we have lives?
		if (lives < 1)
			return;

		letter = letter.toLowerCase();

		if (word.indexOf(letter) !== -1 ) {
			i = word.indexOf(letter);
			jQuery('.hangman_word[data-index='+ i +']').text(letter);

			// Remove correct guessed letter from keyboard
			// to prevent multiple guesses
			jQuery('.hangman_keys button[data-key="'+ letter.toUpperCase() +'"]').remove();

			// Count correct letters
			correctLetters++;
		}
		else {
			decreaseLives();
		}

		// Check for game win by comparing 
		if (correctLetters === word.length) {
			winGame();
		}
	}

	function decreaseLives() {
		livesCounter.html(--lives);
		
		if (lives >= 0)
			hangmanImage.attr('src', 'assets/img/hangman/'+ lives +'.png');

		if (lives < 1) {
			livesCounter.html('Hangman died');
		}
	}

	function winGame() {
		livesCounter.html('You win!');
	}
});