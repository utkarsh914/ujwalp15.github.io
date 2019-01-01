var slideIndexSpark = 1;
showDivsSpark(slideIndexSpark);

function plusDivsSpark(n) {
  showDivsSpark(slideIndexSpark += n);
}

function currentDivSpark(n) {
  showDivsSpark(slideIndexSpark = n);
}

function showDivsSpark(n) {
  var i;
  var x = document.getElementsByClassName("slideSpark");
  var dotsSpark = document.getElementsByClassName("demo-i");
  if (n > x.length) {slideIndexSpark = 1};
  if (n < 1) {slideIndexSpark = x.length};
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  for (i = 0; i < dotsSpark.length; i++) {
    dotsSpark[i].className = dotsSpark[i].className.replace(" white", "");
  }
  x[slideIndexSpark-1].style.display = "block";
  dotsSpark[slideIndexSpark-1].className += " white";
}

// for tecnoesis
var slideIndexTech = 1;
showDivsTech(slideIndexTech);

function plusDivsTech(n) {
  showDivsTech(slideIndexTech += n);
}

function currentDivTech(n) {
  showDivsTech(slideIndexTech = n);
}

function showDivsTech(n) {
  var j;
  var y = document.getElementsByClassName("slideTech");
  var dotsTech = document.getElementsByClassName("demo-j");
  if (n > y.length) {slideIndexTech = 1};
  if (n < 1) {slideIndexTech = y.length};
  for (j = 0; j < y.length; j++) {
    y[j].style.display = "none";
  }
  for (j = 0; j < dotsTech.length; j++) {
    dotsTech[j].className = dotsTech[j].className.replace(" white", "");
  }
  y[slideIndexTech-1].style.display = "block";  
  dotsTech[slideIndexTech-1].className += " white";
}

//for incand
var slideIndexIncand = 1;
showDivsIncand(slideIndexIncand);

function plusDivsIncand(n) {
  showDivsIncand(slideIndexIncand += n);
}

function currentDivIncand(n) {
  showDivsIncand(slideIndexIncand = n);
}

function showDivsIncand(n) {
  var k;
  var z = document.getElementsByClassName("slideIncand");
  var dotsIncand = document.getElementsByClassName("demo-k");
  if (n > z.length) {slideIndexIncand = 1};
  if (n < 1) {slideIndexIncand = z.length};
  for (k = 0; k < z.length; k++) {
    z[k].style.display = "none";
  }
  for (k = 0; k < dotsIncand.length; k++) {
    dotsIncand[k].className = dotsIncand[k].className.replace(" white", "");
  }
  z[slideIndexIncand-1].style.display = "block";  
  dotsIncand[slideIndexIncand-1].className += " white";
}