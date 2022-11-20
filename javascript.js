	//function for search bar
function myFunction() {
  //variables
  var input, filter, ul, li, a, i, txtValue;
  input = document.getElementsByClassName('text1')[0];
  filter = input.value.toUpperCase();
  ul = document.getElementsByClassName("myUL")[0];
  li = ul.getElementsByTagName('li');
  if(input.value.length == 0){
     ul.style.display = "none";
     return;
  }else{
     ul.style.display = "block";
  }
  // Loop through all list items, and hide those who don't match the search query
  for (i = 0; i < li.length-1; i++) {
    a = li[i].getElementsByTagName("a")[0];
    txtValue = a.textContent || a.innerText;
    if (txtValue.toUpperCase().indexOf(filter) > -1) {
      li[i].style.display = "";
    } else {
      li[i].style.display = "none";
    }
  }
}

//Functions for slides and dots
function plusSlides(n) {
  showSlides(slideIndex += n);
}
 function currentSlide(n) {
  showSlides(slideIndex = n);
}
 function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  //if slides all displayed, replay
  if (n > slides.length) {
    slideIndex = 1
  }
  if (n < 1) {
    slideIndex = slides.length
  }
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {
    slideIndex = 1
  }
  //display dots 
  for (i = 0; i < dots.length; i++) {
     dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  // Change image every 2 seconds
  setTimeout(showSlides, 2000); 
}

//Jquery script for sending email (php)
function submitForm(){
 var form = document.getElementById("form");
 var fd = new FormData(form);
 //send data to mail.php
    $.ajax({
        url: 'mail.php',
        data: fd,
        processData: false,
        contentType: false,
        type: 'POST',
        success: function(data){
            $("#messages").html(data);
        }
     });
   }

//script for adding slash in expire date of card in donate once
function addSlashes (element) { 
  let ele = document.getElementsByClassName('expmonth')[0];
    ele = ele.value.split('/').join('');   
    if(ele.length < 4 && ele.length > 0){
        let finalVal = ele.match(/.{1,2}/g).join('/');
   document.getElementsByClassName('expmonth')[0].value = finalVal;
    }
}
//script for adding slash in expire date of card in donate monthly
function addSlashesM (element) {  
  let ele = document.getElementsByClassName('expmonth')[1];
    ele = ele.value.split('/').join('');   
    if(ele.length < 4 && ele.length > 0){
        let finalVal = ele.match(/.{1,2}/g).join('/');
   document.getElementsByClassName('expmonth')[1].value = finalVal;
    }
}
//script for adding slash in expire date of card in donate yearly
function addSlashesY (element) {  
  let ele = document.getElementsByClassName('expmonth')[2];
    ele = ele.value.split('/').join('');   
    if(ele.length < 4 && ele.length > 0){
        let finalVal = ele.match(/.{1,2}/g).join('/');
   document.getElementsByClassName('expmonth')[2].value = finalVal;
    }
}


var xValues = ["Italy", "France", "Spain", "USA", "Argentina"];
var yValues = [55, 49, 44, 24, 15];
var barColors = ["red", "green","blue","orange","brown"];

new Chart("myChart", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "World Wine Production 2018"
    }
  }
});
