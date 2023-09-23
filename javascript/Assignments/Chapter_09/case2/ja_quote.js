/*
   New Perspectives on HTML5 and CSS3, 8th Edition
   Tutorial 9
   Case Problem 2

   Random Jane Austen Quote Generator
   Author: Artem Fedorov
   Date:   1/20/2023
   
   This script randomly generates a Jane Austen quote from
   a list of 10 quotes and writes that quote into the first
   quotation tag in the Web page.

*/
"use strict";
// creating variable that calling the function and setting the range of the random number
var RandomQ = randomInt(0,9);
//getting the first element with "quote" tag
var quoteElem = document.getElementsByTagName("quote")[0];
quoteElem.innerHTML = getQuote(RandomQ);
// creating function that generating the random number
function randomInt(lowest, size){
   //creating variable that containign the random number approximately from 0 to 1 
   var rndm =  Math.random();
   // now this variable the range of random numbers from 0 to 9
   rndm = rndm * size;
   //setting up the the lowest number, in this case the lowest number is 0
   rndm = rndm + lowest;
   // roundnig the random numbers (that's why at the start of this function I noticed the value of random numbers are approximately because actually at the start values was 0 to 0.999... because math.random covers all numbers)
   rndm = Math.floor(rndm);
   return rndm
}

function getQuote(n) {
   var quotes = [
   "It is a truth universally acknowledged, that a single man in possession of a good fortune, must be in want of a wife.",
   "I hate to hear you talk about all women as if they were fine ladies instead of rational creatures. None of us want to be in calm waters all our lives.",
   "Silly things do cease to be silly if they are done by sensible people in an impudent way.",
   "Give a girl an education and introduce her properly into the world, and ten to one but she has the means of settling well, without further expense to anybody.",
   "Life seems but a quick succession of busy nothings.",
   "Our scars make us know that our past was for real.",
   "I cannot speak well enough to be unintelligible.",
   "One cannot be always laughing at a man without now and then stumbling on something witty.",
   "Men were put into the world to teach women the law of compromise.",
   "The person, be it gentlemen or lady, who has not pleasure in a good novel, must be intolerably stupid."
   ];
   
   return quotes[n];
}