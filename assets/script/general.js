/* JavaScript for Pizza Ordering Form */
// Name: Matthew Rutter
// Date: 11/7/18

function validateForm()
{
	//Variable to determine whether or not form if valid for submission.
	var isValid = false;

	//Variables for the entry areas needed to be verified.
	var pizzaToppings = document.getElementsByName('toppingsNum');
	var pizzaSizes = document.getElementsByName('pizzaSize');
	var nameBox = document.getElementsByName("customerName")[0].value;
	var idBox = document.getElementsByName('customerID')[0].value;

	//Variables for the areas where red warnings will pop up.
	var toppingsError = document.getElementById('toppingsError');
	var sizesError = document.getElementById('sizeError');
	var nameError = document.getElementById('nameError');
	var idError = document.getElementById('idError');


	//boolean computed from the return values(bools) of:
	//entryIsEmpty for the name entry verification and
	//entryIsEmpty and validNumber for the id verification

	
	isValid = (!(entryIsEmpty(nameBox, nameError))) &
			  (!(entryIsEmpty(idBox, idError)) && isValidNumber(idBox, idError)) &
			  (validRadio(pizzaToppings, toppingsError)) &
			  (validRadio(pizzaSizes, sizesError));
	
	console.log(isValid);

	if (isValid === 0)
	{
		return false;
	}
	
	return true; //return whether or not data was determined valid
} //End of validateForm function.


//This function returns t/f based on whether or not entry box is empty.
function entryIsEmpty(entryData, entryError) 
{
	var isValid = false;

	if (entryData == "") // if there is not name entered
	{
		entryError.innerHTML = "*please enter a value";
		entryError.style.color = "red";

	} else 
		{
			entryError.innerHTML = "";
			isValid = true;
		}

	return !(isValid); //Opposite of whether its valid because determining if entry is empty.
} //End of entryIsEmpty function.


//This function returns t/f based on whether or not entry is a number.
function isValidNumber(numberData, numberError) 
{
	var isValid = false;
	if (isNaN(numberData))
	{
		numberError.innerHTML = "*please enter a number";
		numberError.style.color = "red";
	} else 
		{
			idError.innerHTML = "";
			isValid = true;
		}

	return isValid;	
} //End of validNumber function.


//This function returns t/f based on whether or not radio list is not empty and therefor valid.
function validRadio(radioArray, radioError) 
{
	var isValid = false;
	numOfChoices = radioArray.length;

	for (var cnt = 0; cnt < numOfChoices; cnt++) 
	{	
		if (radioArray[cnt].checked) 
		{
			// console.log("Chosen choice was " + radioArray[cnt].value);
			isValid = true;
		}
	}


	if (!(isValid))
	{
		radioError.innerHTML = "*please select an option";
		radioError.style.color = "red";
	} else
		{
			radioError.innerHTML = "";
		}
	return isValid;
} //End of validRadio function.