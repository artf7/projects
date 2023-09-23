/*
Prorgram: Arrays in JavaScript
Author: Artem Fedorov
Date: Jan 30, 2023
Filename arrays.js
Purpose: Play with arrays
*/


function isBoolean(variable){
    if (typeof(variable) === 'boolean'){
        return true;
    }else{
        return false;
    }
}
function isNumber(variable){
    if (typeof(variable) === 'number'){
        return true;
    }else{
        return false;
    }
}
function isString(variable){
    if (typeof(variable) === 'string'){
        return true;
    }else{
        return false;
    }
}

let stuff = ["cat",45,"yellow", 53, 22, 893, "dog", "butterscotch", "horse", true, true, false, 3, "rocky road", "heavenly hash", "hamster", "neopolitan", "vanilla", "goldfish"];

let sum = 0;
for (var i = 0;i<stuff.length;i++){
    if (isString(stuff)){
        console.log(stuff[i] + " -- string");
    }else if (isNumber(stuff)){
        console.log("Else if " + stuff[i]);
        sum += stuff[i];
    }else if (!stuff[i] === true){
        console.log("It's false");
    }
 
}
console.log(checkToAll(stuff[9]));
console.log("The sum is", sum)
// let x = stuff.length; 

// for (var i = 0; i < x; i++){
//     console.log("i: "+ typeof i + "stuff[i]"  + typeof stuff[i]);
// }


//While loop 
let dt = new Date();

console.log(dt.getSeconds());


