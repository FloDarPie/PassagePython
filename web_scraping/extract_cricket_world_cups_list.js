const fetch = require("node-fetch");

// function to get the raw data
const getRawData = (URL) => {
   return fetch(URL)
      .then((response) => response.text())
      .then((data) => {
         return data;
      });
};

// URL for data
const URL = "https://en.wikipedia.org/wiki/Cricket_World_Cup";

// start of the program
const getCricketWorldCupsList = async () => {
   const cricketWorldCupRawData = await getRawData(URL);
   console.log(cricketWorldCupRawData);
};

// invoking the main function
getCricketWorldCupsList();
