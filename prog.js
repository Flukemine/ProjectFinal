

      
function calc() {
min = 1;
max = 10;
  ans =  Math.floor(Math.random() * (max - min + 1)) + min;
  ans2 =  Math.floor(Math.random() * (max - min + 1)) + min;
  if(ans == ans2){
        do{
          ans2 =  Math.floor(Math.random() * (max - min + 1)) + min; 
        }while(ans2 == ans)
    }
  ans3 =  Math.floor(Math.random() * (max - min + 1)) + min;
      if(ans3 == ans2  || ans3 == ans){
        do{
          ans3 =  Math.floor(Math.random() * (max - min + 1)) + min; 
        }while(ans3 == ans || ans3 == ans2)
    }
      ans4 =  Math.floor(Math.random() * (max - min + 1)) + min;
          if(ans4 == ans2  || ans4 == ans  || ans4 == ans3 ){
        do{
          ans4 =  Math.floor(Math.random() * (max - min + 1)) + min; 
        }while(ans4 == ans || ans4 == ans2  || ans4 == ans3)
    }
      ans5 =  Math.floor(Math.random() * (max - min + 1)) + min;
              if(ans5 == ans || ans5 == ans2 || ans5 == ans3 || ans5 == ans4 ){
        do{
          ans5 =  Math.floor(Math.random() * (max - min + 1)) + min; 
        }while(ans5 == ans || ans5 == ans2 || ans5 == ans3 || ans5 == ans4  )
    }
    

anss = document.getElementById("ans1");
anss.innerHTML = ans;
anss2 = document.getElementById("ans2");
anss2.innerHTML = ans2;
anss3 = document.getElementById("ans3");
anss3.innerHTML = ans3;
anss4 = document.getElementById("ans4");
anss4.innerHTML = ans4;
anss5 = document.getElementById("ans5");
anss5.innerHTML = ans5;


    
//    if(ans == 1){
//         var x = document.getElementById("img1");
//    if (x.style.display === "none") {
//        x.style.display = "block";
//          } else {
//        x.style.display = "none";
//    }
}


function myFunction() {
    var x = document.getElementById("img1");
    if (x.style.display === "none") {
        x.style.display = "block";
    } else {
        x.style.display = "none";
    }
}
              
              
              function startTime() {
    var today = new Date();
    var h = today.getHours();
    var m = today.getMinutes();
    var s = today.getSeconds();
    m = checkTime(m);
    s = checkTime(s);
    document.getElementById('txt').innerHTML =
    h + ":" + m + ":" + s;
    var t = setTimeout(startTime, 500);
}
function checkTime(i) {
    if (i < 10) {i = "0" + i};  // add zero in front of numbers < 10
    return i;
}

              
      var place = 0;        
function changeColour(){
         //    document.getElementById("myDiv").style.backgroundColor = "lightblue";
            if(place == 0){
                document.body.style.backgroundColor = "#000080"; 
            }
    else if(place == 1){
                        document.body.style.backgroundColor = "#b30000"; 

    }
      else if(place == 2){
                        document.body.style.backgroundColor = "#009900"; 

    }
   
      else if(place > 2){
          place = -1;
    }
            place++;
            // if place is greater than the list size, reset
           console.log(place);
}
 
            
 //var count = 0;
function playMusic(){
    var snd = new Audio("song.mp3");
    snd.play();
    count++;
    if(count > 2){
        snd.pause=0;
        count = 0;
        
    }

}

    
              
              
function findProfit(){
    var answer = document.getElementById("final");
    var choice = document.getElementById("nums").value;
    var percentage = 0;
    var amount = 0;
    var result = 0;
    if(choice == 5 ){
        percentage = 1.6;
    }
    else if(choice == 7.50){
                    percentage = 2.9;

            }
            
    else if(choice == 10){
        
                percentage = 4.4;

        
    }
    
    if (document.getElementById("first").checked) {
        amount = 1;
}
    else if (document.getElementById("second").checked) {
        amount = 2;
}
    
    else if (document.getElementById("third").checked) {
        amount = 3;
}
    
    else if (document.getElementById("fourth").checked) {
        amount = 4;
}
    
    else if (document.getElementById("fifth").checked) {
        amount = 5;
}
    
    result = amount * percentage;
    alert(result);
    
    
    
    

}
          