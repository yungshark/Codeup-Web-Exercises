// ignore these lines for now
// just know that the variable 'color' will end up with a random value from the colors array
var colors = ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'violet'];
var color = colors[Math.floor(Math.random()*colors.length)];

var favorite = 'indigo'; // TODO: change this to your favorite color from the list

// TODO: Create a block of if/else statements to check for every color except indigo and violet.
if (color == 'red') {
	console.log('its red and so is my bloody nose');
} else if (color == 'orange'){
	console.log('its orange and so is the sun');
} else if (color == 'yellow'){
	console.log('its yellow and so is a duck');
} else if (color == 'green'){
	console.log('its green and so is MONEY');
} else if (color == 'blue'){
	console.log('its blue and so is the sea');
} else {
	console.log('i dont know anything by that color other than like flowers and shit');
}

console.log((favorite == color)? color + "  is my favourite color!" : color + " is not my favourite color...");



// TODO: When a color is encountered log a message that tells the color, and an object of that color.
//       Example: Blue is the color of the sky.

// TODO: Have a final else that will catch indigo and violet.

// TODO: In the else, log: I do not know anything by that color.

// TODO: Using the ternary operator, conditionally log a statement that
//       says whether the random color matches your favorite color.
