// ignore these lines for now
// just know that the variable 'color' will end up with a random value from the colors array
var colors = ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'violet'];
var color = colors[Math.floor(Math.random()*colors.length)];

switch (color) {
	case "red":
		console.log('this color is red');
		break;
	case "orange":
		console.log('this color is orange');
		break;
	case "yellow":
		console.log('this color is yellow');
		break;
	case "green":
		console.log('this color is green');
		break;
	case "blue":
		console.log('this color is blue');
		break;
	default:
		

    // todo: create a case statement that will handle every color except indigo and violet
    // todo: when a color is encountered log a message that tells the color, and an object of that color
    //       example: Blue is the color of the sky.

    // todo: create a default case that will catch indigo and violet
    // todo: for the default case, log: I do not know anything by that color.
}