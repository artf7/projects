"use strict";

/*
   New Perspectives on HTML5 and CSS3, 8th Edition
   Tutorial 10
   Case Problem 2

   Author: Artem Fedorov
   Date:  2/6/2023
   
   Filename: vw_results.js
   
   Functions:
   
   The calcSum() function is a callback function used to
   calculte the total value from items within an array
   
   The calcPercent(value, sum) function calculates the percentage given
   a value and a sum
   
   The createBar(partyType, percent) function writes a different
   table data table based on the candidates party affilication.
   
      
*/

var reportHTML = "<h1>"+ raceTitle +"</h1>"



/* Callback Function to calculate an array sum */
function calcSum(value) {
   totalVotes += value;
}

/* Function to calculate a percentage */
function calcPercent(value, sum) {
   return (100*value/sum);
}


for(var i = 0; i < race.length; i++){
   var totalVotes = 0;
   //totalVotes = votes.forEach(calcSum(votes));
   reportHTML += "<table>";
   reportHTML += "<caption>"+ race[i]+"</caption>";
   reportHTML += "<tr><th>Candidate</th><th>Votes</th></tr>";
   reportHTML += candidateRows(i,totalVotes);
   reportHTML += "</table>";
}
reportHTML = document.getElementsByTagName("section");

function candidateRows(raceNum, totalVotes){
var rowHTML = "";
for(var j = 0; j < 2; j++){
   var candidateName = candidate[raceNum][j];
   var candidateParty = candidate[party][j];
   var candidateVotes = candidate[votes][j];
   var candidatePercent = calcPercent(candidateVotes,totalVotes);
   rowHTML += "<tr>";
   rowHTML += "<td>"+candidateName+" ("+candidateParty +")</td>";
   rowHTML += "<td>"+votes.toLocaleString()+candidatePercent.toFixed(1)+"</td>";
}
return rowHTML;
}
