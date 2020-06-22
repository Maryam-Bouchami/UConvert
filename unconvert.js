const timeUnits=
["Milliseconds","Second","Minute","Hour","Day"];
const lengthUnits=              ["Meter","Kilometer","Centimeter","Millimeter","Micrometer","Nanometer","Mile","Yard","Foot","Inch"];

const weightUnits=
["Kilogram","Gram","Milligram","Metric Ton","Long Ton","Short Ton","Pound","Ounce","Carrat","Atomic Mass Unit"];

const volumeUnits=["Cubic Meter","Cubic Kilometer","Cubic Centimeter","Cubic Millimeter","Liter","Milliliter","US Gallon","US Quart","US Pint","US Fluid Ounce","US Table Spoon","Imperial Gallon","Imperial Quart","Imperial Pint","Imperial Fluid Ounce","Imperial Table Spoon","Imperial Tea Spoon","Cubic Mile","Cubic Yard","Cubic Foot","Cubic Inch"];
	;

let choices=document.getElementsByClassName("qu-choice");

let fromUnit=document.getElementById("fromUnit");
let toUnit=document.getElementById("toUnit");
let choix ="";


document.getElementById("time").addEventListener("click",function(e){
document.getElementById("value").value="";
document.querySelector(".result").innerHTML="";
fromUnit.innerHTML="";
toUnit.innerHTML="";
choix="time";
for (let i=0;i<choices.length;i++){
	choices[i].classList.remove("activeChoice");
}
document.getElementById("time").classList.add("activeChoice");
for (let i=0; i<timeUnits.length;i++){
	let unitOption=document.createElement("option");
	unitOption.value=timeUnits[i];
	unitOption.textContent=timeUnits[i];
	fromUnit.appendChild(unitOption);
    
}
	
for (let j=0; j<timeUnits.length;j++){
	let unitOption=document.createElement("option");
	unitOption.value=timeUnits[j];
	unitOption.textContent=timeUnits[j];
    toUnit.appendChild(unitOption);
    
}
console.log(choix);	
});



document.getElementById("length").addEventListener("click",function(e){
	document.getElementById("value").value="";
	document.querySelector(".result").innerHTML="";
	 choix="length";
	fromUnit.innerHTML="";
	toUnit.innerHTML="";
	for (let i=0;i<choices.length;i++){
	choices[i].classList.remove("activeChoice");
}
document.getElementById("length").classList.add("activeChoice");
	for (let i=0; i<lengthUnits.length;i++){
	let unitOption=document.createElement("option");
	unitOption.value=lengthUnits[i];
	unitOption.textContent=lengthUnits[i];
	fromUnit.appendChild(unitOption);
    
}
	
for (let j=0; j<lengthUnits.length;j++){
	let unitOption=document.createElement("option");
	unitOption.value=lengthUnits[j];
	unitOption.textContent=lengthUnits[j];
    toUnit.appendChild(unitOption);
    
}
	
	
	
     console.log(choix);
	
});


document.getElementById("weight").addEventListener("click",function(e){
	document.getElementById("value").value="";
	document.querySelector(".result").innerHTML="";
		choix="weight";
	   	fromUnit.innerHTML="";
	    toUnit.innerHTML="";    
	for (let i=0;i<choices.length;i++){
	choices[i].classList.remove("activeChoice");
}
document.getElementById("weight").classList.add("activeChoice");
	for (let i=0; i<weightUnits.length;i++){
	let unitOption=document.createElement("option");
	unitOption.value=weightUnits[i];
	unitOption.textContent=weightUnits[i];
	fromUnit.appendChild(unitOption);
    
}
	
for (let j=0; j<weightUnits.length;j++){
	let unitOption=document.createElement("option");
	unitOption.value=weightUnits[j];
	unitOption.textContent=weightUnits[j];
    toUnit.appendChild(unitOption);
    
}
	
        console.log(choix);
});



document.getElementById("volume").addEventListener("click",function(e){
	document.getElementById("value").value="";
	document.querySelector(".result").innerHTML="";
	choix="volume";
	fromUnit.innerHTML="";
	toUnit.innerHTML="";
	for (let i=0;i<choices.length;i++){
	choices[i].classList.remove("activeChoice");
}
document.getElementById("volume").classList.add("activeChoice");
	for (let i=0; i<volumeUnits.length;i++){
	let unitOption=document.createElement("option");
	unitOption.value=volumeUnits[i];
	unitOption.textContent=volumeUnits[i];
	fromUnit.appendChild(unitOption);
    
}
	
for (let j=0; j<volumeUnits.length;j++){
	let unitOption=document.createElement("option");
	unitOption.value=volumeUnits[j];
	unitOption.textContent=volumeUnits[j];
    toUnit.appendChild(unitOption);
    
}
     console.log(choix);
	
});


let form=document.getElementById("myForm");
form.addEventListener("submit",function(e){
	e.preventDefault();
	document.querySelector(".result").innerHTML="";
	let data = new FormData(form);
data.append("quantity",choix);
urlPost="http://localhost/UConvert/convert.php";
urlGet="http://localhost/UConvert/result.log";
	ajaxPost(urlPost, data, function (reponse) {
		console.log("ok");
		ajaxGet(urlGet,function(response){
			
			console.log(response);
			let result=document.createElement("span");
			result.textContent=response;
			document.querySelector(".result").appendChild(result);
			
								 });
	}, false);
});



