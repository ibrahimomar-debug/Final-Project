// Variable for Modal
var modalButton = document.querySelector('.au-btn');
var modalOut = document.querySelector('.modal-container');
var modalClose = document.querySelector('.modal-close');

// Variable for Input File
var	inputFile = document.getElementById("inputFile");
var	previewContainer = document.getElementById("imagePreview");
var previewContent = previewContainer.querySelector(".image-preview");
var	previewDefaultText = previewContainer.querySelector(".imagePreview-text");

// For Modal

modalButton.addEventListener('click', function(){
	modalOut.classList.add('modal-pop');
});

modalClose.addEventListener('click', function(){
	modalOut.classList.remove('modal-pop');
});

// End of Modal code

//For input file

inputFile.addEventListener("change", function(){
 	var	file = this.files[0];

 	if (file) {
 		var reader = new FileReader();

 		previewDefaultText.style.display = "none";
 		previewContent.style.display = "block";

 		reader.addEventListener("load", function(){
 			console.log(this);
 			previewContent.setAttribute("src", this.result);
 		});

 		reader.readAsDataURL(file);
 	} else{
 		previewDefaultText.style.display = null;
 		previewContent.style.display = null;
 		previewContent.setAttribute("src", "");
 	}
});

//End of input file