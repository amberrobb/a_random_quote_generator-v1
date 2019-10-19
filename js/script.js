// generate a random rgb-color and set it as background
function changeBackgroundColor() {
  // generate random integer between 0 and 230
  // we skip rgb values 231 to 255 to avoid white and light backgrounds
  // that would clash with the white font color   
  var r = Math.floor(Math.random() * 230);
  var g = Math.floor(Math.random() * 230);
  var b = Math.floor(Math.random() * 230);
 
  //build rgb-style string
  var randomColor = "rgb(" + r + "," + g + "," + b + ")";
  // set generated color
  document.body.style.backgroundColor = randomColor;
}

// reload the page with a new quote after a set time
setInterval(function() {
  window.location.reload(true);
}, 15000);