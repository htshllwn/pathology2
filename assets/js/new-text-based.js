function addElement(){
    // create a new div element 
  var nextButton = document.getElementById("nextButton");
  nextButton.removeAttribute("onclick");
  nextButton.parentNode.removeChild(nextButton);

  var number = document.getElementById("input_no_of_tests").value;
  addColHeadings();
  
  for (i=1;i<=number;i++){ 
  		var newDiv = document.createElement("div");
		newDiv.className = "row";
		newDiv.id = "row"+i;
  		catForm.appendChild(newDiv);
  		catForm.appendChild(document.createElement("br"));
  		addColumns(newDiv.id);

  		addinputFields(newDiv.id);

  }
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

function addColumns(id){
	//alert(id);

  
  		
	var customHTML;

  customHTML = '<div id="'+id+'col1" class="col-md-6"></div>';
  customHTML += '<div id="'+id+'col2" class="col-md-6"></div>';
	
	document.getElementById(id).innerHTML = customHTML;
}

function addinputFields(id){

    	
        var input1 = document.createElement("input");
        input1.type = "text";
        input1.className = "form-control";
        input1.name = id+"input1";
        
        var input2 = document.createElement("select");
		    var condition_array = ["TITLE","TEST"];
		    input2.className = "form-control";
		    for (var i = 0; i < condition_array.length; i++) {
		 		   	var option = document.createElement("option");
		    		option.value = condition_array[i];
		    		option.text = condition_array[i];
		   			input2.appendChild(option);
				}
				input2.name = id+"input2";
        
        var temp;

        temp = id+'col1';
        document.getElementById(temp).appendChild(input1);

        temp = id+'col2';
        document.getElementById(temp).appendChild(input2);
      
}

