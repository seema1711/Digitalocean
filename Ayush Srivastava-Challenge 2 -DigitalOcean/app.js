const express = require("express");
const bodyParser = require("body-parser");
const https = require("https");
const axios = require("axios");
const ejs = require("ejs");
const _ = require("lodash");
const date = require(__dirname + "/date.js");
const app = express();
app.set('view engine', 'ejs');
// variable for covid data over indian reginon with state
let covidData, confirmed, recovered, active, deceased, deltaConfirmed, deltaRecovered, deltaDeceased, lastUpdated;
// variable for making chart
let dailyDateChange = [],
  dailyCnf = [],
  dailyRcvd = [],
  dailyDecsd = [];
// variable for Covid Zones and charts
let covidZones,
  redZone = 0,
  orangeZone = 0,
  greenZone = 0;
// variable for tested Samples
let covidTest,
     testPerMillion=[],
     testByDate=[];
//variables for age bracket and male to female ratio
let rawData,
    agebracket,
    maleGenderCases=0,
    femaleGenderCases=0,
    otherGenderCases=0;
app.use(bodyParser.urlencoded({
  extended: true
}));
app.use(express.static("public"));
let currentDate = date.getDate();
const url1 = "https://api.covid19india.org/data.json";
const covidDataApi = axios.get(url1).then(function(response) {
  covidData = response.data;
  confirmed = covidData.statewise[0].confirmed;
  deltaConfirmed = covidData.statewise[0].deltaconfirmed;
  recovered = covidData.statewise[0].recovered;
  deltaRecovered = covidData.statewise[0].deltarecovered;
  deceased = covidData.statewise[0].deaths;
  deltaDeceased = covidData.statewise[0].deltadeaths;
  active = covidData.statewise[0].active;
  lastUpdated = covidData.statewise[0]['lastupdatedtime'];
  for (let i = 0; i < covidData.cases_time_series.length; i++) {
    let day = (i + 1);
    let cnf = covidData.cases_time_series[i].totalconfirmed;
    let rcvd = covidData.cases_time_series[i].totalrecovered;
    let decsd = covidData.cases_time_series[i].totaldeceased;
    dailyDateChange.push(day)
    dailyCnf.push(cnf);
    dailyRcvd.push(rcvd);
    dailyDecsd.push(decsd);
  }
   covidTest =covidData.tested;
   for(let i=0;i<covidTest.length;i++){
  let date =i+1;
  let tested=covidTest[i].testspermillion;
  testPerMillion.push(tested);

  testByDate.push(date);
  }
});
const url2 = "https://api.covid19india.org/zones.json";
axios.get(url2).then(function(response) {
  covidZones = response.data.zones;

  for (let i = 0; i < covidZones.length; i++) {
    let zone = covidZones[i].zone;
    if (zone === "Red") {
      redZone++;
    } else if (zone === "Orange") {
      orangeZone++;

    } else {
      greenZone++;
    }
  }


});

const url3 ="https://api.covid19india.org/raw_data5.json";
axios.get(url3).then(function(response){
  rawData=response.data.raw_data;
for(let i=31;i<rawData.length;i++){
  if(rawData[i].gender==="M")
  {
   maleGenderCases++;
 }else if (rawData[i].gender==="F") {
   femaleGenderCases++;

 }
 else{
   otherGenderCases++;
 }

}

})
app.get("/", function(req, res) {

  res.render("home", {
    date: currentDate,
    confirmed: confirmed,
    active: active,
    recovered: recovered,
    deceased: deceased,
    covidData: covidData,
    deltaConfirmed: deltaConfirmed,
    deltaRecovered: deltaRecovered,
    deltaDeceased: deltaDeceased,
    lastUpdated: lastUpdated,
    dailyDate: dailyDateChange,
    dailyCnf: dailyCnf,
    dailyRcvd: dailyRcvd,
    dailyDecsd: dailyDecsd,
  });
});
app.get("/precaution", function(req, res) {
  res.render("precaution");
});
app.get("/aboutCOVID", function(req, res) {
  res.render("aboutCOVID");
});
app.get("/analytics", function(req, res) {
  res.render("analytics", {
    dailyDate: dailyDateChange,
    dailyCnf: dailyCnf,
    dailyRcvd: dailyRcvd,
    dailyDecsd: dailyDecsd,
    redZone: redZone,
    orangeZone: orangeZone,
    greenZone: greenZone,
    testPerMillion:testPerMillion,
    testByDate:testByDate,
    maleGenderCases:maleGenderCases,
    femaleGenderCases:femaleGenderCases,
    otherGenderCases:otherGenderCases
    });
});
app.get("/about", function(req, res) {
  res.render("about");
});
app.listen(process.env.PORT || 3000, function() {
  console.log("Server is up and running at port 3000");
});
