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
	/*let firstUserName = prompt("Enter A Name");
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
	}*/
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

	const numNeighbours = Number(prompt("'How many neighbour countries does your country have?"));
	if(numNeighbours == 1)
	{
			console.log("Only 1 border!");
	}
	else if(numNeighbours > 1)
	{
			console.log("More than 1 border");
	}
	else
	{
			console.log("No borders");
	}

	if(numNeighbours === 1)
	{
		console.log("Only 1 border!");
	}
	else if(numNeighbours > 1)
	{
			console.log("More than 1 border");
	}
	else
	{
			console.log("No borders");
	}

	if(language === 'english' && population < 50000000 && !isIsand)
	{
		console.log(`You should live in ${country}:).`);
	}
	else
	{
		console.log(`you live in Canada :D`);
	}

	const Dolphins = (96+108+89)/3;
	const Koalas = (88+91+110)/3;

	console.log("Average Score Of Dolphins "+Dolphins);
	console.log("Average Score Of Koalas "+Koalas);
	if(Dolphins > Koalas)
	{
		console.log("Dolphins Are Winner");
	}
	else if(Dolphins < Koalas)
	{
		console.log("Koalas Are Winner")
	}
	else if(Dolphins === Koalas )
	{
		console.log("Match Tie");
	}
	
	const  avgscrdol = (97+112+101)/3;
	const  avgscrkol = (109+95+106)/3;
	if(avgscrdol > avgscrkol && avgscrdol >=100)
	{
		console.log("Dolphins Are Winner");
	}
	else if(avgscrdol < avgscrkol && avgscrkol >=100)
	{
		console.log("Koalas Are Winner")
	}
	else if(avgscrkol === avgscrkol && avgscrkol>=100 && avgscrdol >=100)
	{
		console.log("Both Win The Trophy");
	}
	else{
		console.log("No One Win Trophy");
	}
	console.log(language);
	switch (language) {
 		case 'chinese':
 		case 'mandarin':
 			console.log('MOST number of native speakers!');
 			break;
 		case 'spanish':
 			console.log('2nd place in number of native speakers');
 			break;
 		case 'english':
 			console.log('3rd place');
 			break;
 		case 'Hindi':
 			console.log('Number 4');
 			break;
 		case 'arabic':
 			console.log('5th most spoken language');
 			break;
 		default:
 			console.log('Great language too :D');
 	}

 	population > 33000000 ? console.log(`${country}'s population is above average`) : console.log(`${country}'s population is below average'`);

 	const bill = prompt("How Much Your Bill Amount");
 	let tip;

 	bill >= 50 && bill <=300 ? tip = (bill*15)/100: tip = (bill*20)/100
 	console.log(`The bill was ${bill}, the tip was ${tip} and the total value ${Number(bill)+Number(tip)}`);

 	function calcAverage(score1,score2,score3) {
 		return (score1+score2+score3)/3;
 	}
 	function checkWinner(avgDolhins,avgKoalas)
 	{
 		if(avgDolhins >= avgKoalas*2)
 		{
 			console.log(`Dolphins Wins (${avgDolhins} vs ${avgKoalas})`);
 		}
 		else if(avgKoalas >= avgDolhins*2)
 		{
			console.log(`Koalas Wins (${avgKoalas} vs ${avgDolhins})`); 	
 		}
 		else
 		{
 			console.log(`No One Wins. Match Is Drawn`);
 		}
 	}
 	avgKoalas = calcAverage(3,2,1);
 	avgDolhins = calcAverage(4,8,6);
 	console.log(avgDolhins, avgKoalas);
 	checkWinner(avgDolhins,avgKoalas);

 	const calcTip = function (bill){ 
 		return bill>50 && bill <300 ?  (bill * 0.15) : bill * 0.20;
 	}

 	const bills = new Array();
 	bills.push(125);
 	bills.push(555);
 	bills.push(44);
 	const bill_tip = [calcTip(bills[0]), calcTip(bills[1]), calcTip(bills[2])];
 	console.log(bill_tip);

 	const data = {
		firstName:"Ameya",
		lastName:"Gosavi",
		birthYear:1999,
		job:"Software Developer",
		friends:["Manish","Siddhesh","Chinmay"],
		hasDriverLicense:false,
		calcAge : function()
				{
					this.age = 2021 - this.birthYear;
					return this.age;
				},
		challange: function()
				{
					this.output = `${this.firstName} is a ${this.calcAge()} year's old ${this.job}, and he has a ${this.hasDriverLicense ? 'driver License': 'not driver License'}`;
					return this.output
				}		
	};			
	console.log(data.challange());
	console.log(data.output);

	const mark = {
		fullName:"Mark Miller",
		mass:78,
		height:1.69,
		calcBMI: function () {
					this.BMI = this.mass / this.height ** 2 ;
					return this.BMI;
				}
	};
	const john = {
		fullName:"John Smith",
		mass:92,
		height:1.95,
		calcBMI: function () {
					this.BMI = this.mass / this.height ** 2 ;
					return this.BMI;
				}
	}
	john.calcBMI() > mark.calcBMI() ? console.log(`${john.fullName} BMI (${john.calcBMI()}) is higher than ${mark.fullName} (${mark.calcBMI()})!`) : 
		 	console.log(`${mark.fullName} BMI (${mark.calcBMI()}) is higher than ${john.fullName} (${john.calcBMI()})!`);


		 	const challange4_bills = [22, 295, 176, 440, 37, 105, 10, 1100, 86, 52];
		 	const challange4_tips = new Array();
		 	const challange4_total = new Array();

		 	for(let i =0; i<challange4_bills.length;i++)
		 	{
		 		challange4_tips.push(calcTip(challange4_bills[i]));
		 		challange4_total.push(challange4_bills[i]+calcTip(challange4_bills[i]));
		 	}
		 	console.log(challange4_tips);
		 	console.log(challange4_total);

		 	var sum = 0;
		 	function calcAverage(arr) {
		 		for(let i=0; i<arr.length;i++)
		 		{
		 			sum+=arr[i];
		 		}
		 		console.log("The Average of bill: "+sum/arr.length);
		 	}
		 	calcAverage(challange4_total);
