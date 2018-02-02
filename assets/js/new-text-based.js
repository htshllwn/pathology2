function addElement(){
    // create a new div element 
  var nextButton = document.getElementById("nextButton");
  nextButton.removeAttribute("onclick");
  nextButton.parentNode.removeChild(nextButton);

  var number = document.getElementById("input_no_of_tests").value;
  addColHeadings();
    /*
  for (i=1;i<=number;i++){ 
  		var newDiv = document.createElement("div");
		newDiv.className = "row";
		newDiv.id = "row"+i;
  		catForm.appendChild(newDiv);
  		catForm.appendChild(document.createElement("br"));
  		addColumns(newDiv.id);

  		addinputFields(newDiv.id);

  }
  for (i=1;i<=number;i++){
  	CKEDITOR.replace( 'row'+i+'input2' );
   }
   */
   var submitBtn = document.getElementById('submit');
   submitBtn.classList.remove("btn-hidden");
}

function addColHeadings(){
	var label1 = document.createElement("label");
    var t1 = document.createTextNode("Test Name");
    label1.appendChild(t1);
    label1.className = "FormLabel";

    colHead1.appendChild(label1);
    colHead1.appendChild(document.createElement("br"));

}