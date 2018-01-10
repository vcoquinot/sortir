
var photoEvenement = document.getElementById("visuel_evenement");
var boutonTelechargerImage = document.getElementById("file_image");

console.log(photoEvenement);
console.log(boutonTelechargerImage);


boutonTelechargerImage.addEventListener("change", function() {
    console.log("click bouton");
});

//var src = element.getAttribute("src");

// var imageSourceOriginel = element.src;
// var index = 0;
// var tableauImage = [
//     imageSourceOriginel,
//     "https://images.pexels.com/photos/248797/pexels-photo-248797.jpeg?h=350&auto=compress&cs=tinysrgb",
//     "https://images.pexels.com/photos/33109/fall-autumn-red-season.jpg?h=350&auto=compress&cs=tinysrgb",
// ];
//
//
// setInterval(function () {
//     //element.width
//     index = index < tableauImage.length-1 ? index+1 : 0;
//     element.src = tableauImage[index];
// }, 1000);