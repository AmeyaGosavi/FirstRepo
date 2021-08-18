<<<<<<< HEAD

	var country = "India";
	var continent = "Asia";
	var population = 1392700000;
	let sym = Symbol('foo')
	console.log("Value & Variable");
	console.log(country);
	console.log(continent);
	console.log(population);
	
	let isIsand = true;
	let language;

	console.log("Data Types Of Variable");
	console.log(typeof(country));
	console.log(typeof(continent));
	console.log(typeof(population));
	console.log(typeof(isIsand));
	console.log(typeof(language));
	console.log(typeof (sym));
	console.log("A Variable defined by let, const and var keywords");

	const num = 1;
	console.log(num);
	//num = 2;
	//console.log(num);

	var variable = "First Var";
	console.log(variable);
	variable = "Second Var";
	console.log(variable);

	language = "Marathi";
	console.log("Language: "+language);
	language = "Hindi";
	console.log("Language: "+language);

	console.log("Basic Operators");
	console.log("half the population:"+ population/2);
	console.log(population+1);
	console.log("Finland has a population of 6 million. Does your country have more people than Finland");
	console.log(population>6000000);
	console.log("The average population of a country is 33 million people. Does your country have less people than the average country")
	console.log(population<33000000);

	console.log("Trying to compare their BMI (Body Mass Index)");
	let firstUserName = prompt("Enter A Name");
	let mass = prompt("Enter A Mass Value");
	let height = prompt("Enter A height Value");

	let BMI = mass / height ** 2;

	let secondUserName = prompt("Enter A Name");
	mass = prompt("Enter A Mass Value");
	height = prompt("Enter A Height Value");

	let BMISecondUser = mass / height ** 2;
	if(BMI > BMISecondUser)
	{
		console.log(`${firstUserName} BMI (${BMI}) is HIGHER than ${secondUserName} (${BMISecondUser})`);
	}
	else
	{
		console.log(`${firstUserName} BMI (${BMI}) is LESSER than ${secondUserName} (${BMISecondUser})`);
	}
	let description = country+" is in "+continent+", and its "+population+" million people speak "+language;
	console.log(description);
	description = `${country}  is in ${continent}, and its ${population} million people speak ${language}`;
	console.log(description);

	console.log("Type Conversion & Concern");
	console.log('9' - '5');
	console.log('19' - '13' + '17');
	console.log('19' - '13' + 17);
	console.log('123' < 57);
	console.log(5 + 6 + '4' + 9 - 4 - 2);
