
var randomNumber = [];
var guessNumber;
var corrects;
var tries = 0;
var digits;
var numberRanging;


function GenerateNumber() 
{
	digits=0;
	numberRanging=0;
	randomNumber= [];
	
	var e = document.getElementById("digitSelector");
	digits = e.value;

	var r = document.getElementById("rangingSelector");
	numberRanging = r.value;

	FinishGame();

	for(i=0; i<digits; i++)
	{
		randomNumber[i] = Math.floor((Math.random() * numberRanging) + 1);
	}
	
	alert(" A number with " + digits + " digits, wich each one ranging from 1 to " + numberRanging + " has been generated. Try to guess it");
	//alert(randomNumber);  
	//var result = randomNumber.join("");
	//alert(result);
}

function Check() 
{
	guessNumber = document.getElementById("tbGuessNumber").value;
	var guessNumberLength = guessNumber.length;
	
	corrects = 0;

	if ( guessNumberLength > digits || guessNumberLength < digits ) 
	{ 
		alert("The number has to have the same number of digits has the random number generated. In this case " + digits + " digits");
		document.getElementById("tbGuessNumber").value = "";
	}
	else 
	{

		var guessArray = guessNumber.split("");
		tries = tries + 1;
		//alert(guessArray);
		for(i=0; i<guessNumberLength; i++)
		{
			if (guessArray[i] == randomNumber[i]) 
				{ 
					corrects = corrects + 1;
				}
		}

		CreateLI();

		if(corrects == digits ) {
			
			$.ajax({
							type: "POST",
							url: "./php/scoresave.php",
							data: {tries:tries,digits:digits}
						}).done(function( result ) {
							if(result != null){
								alert("Congratulations!!! You finished the game in " + tries + " tries");				
							}
						});
			FinishGame();
		}

	}

}

function CreateLI () 
{
	var newLi, newLiCo;
	newLi = document.createElement('li');
	newLiCo = document.createElement('li');
	
		newLi.className = 'full-width';
		newLi.innerHTML = guessNumber;
		document.getElementById('ulGuessedNumbers').appendChild(newLi);
		
		newLiCo.className = 'full-width';
		newLiCo.innerHTML = corrects;
		document.getElementById('ulCorrects').appendChild(newLiCo);
	
}

function FinishGame() 
{
	tries = 0;
	document.getElementById("ulGuessedNumbers").innerHTML = "";
	document.getElementById("ulCorrects").innerHTML = "";
}


/*

document.getElementById("tbGuessNumber").value
document.getElementById("root").innerHTML = "";
document.getElementById("tbNumber").value = result;
guessNumber.toString(numbersize).split("").map(function(t){return parseInt(t)}) 
^^ this returns an array of integers

numberSize = array.lenght;

for (i=0; i < numberSize; i++) {
	if(array[i]= guessedNumber[i]) then
		correct = correct + 1;
}

correct = 0;

 var ul = document.getElementById('<ul id>');
  if (ul) 
  {
    while (ul.firstChild) {
      ul.removeChild(ul.firstChild));
    }
  }

*/


// (123456789).toString(10).split("")    this will return an array of strings