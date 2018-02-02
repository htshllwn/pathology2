

var condition_count = [];


function addColumns(id){
	//alert(id);

  
  		
	var customHTML;

	customHTML = '<div id="'+id+'col1" class="col-md-3"></div>';
	customHTML += '<div id="'+id+'col2" class="col-md-2"></div>';
	customHTML += '<div id="'+id+'col3" class="col-md-1"></div>';
	//customHTML += '<div id="'+id+'col4" class="col-md-6"></div>';
	customHTML += '<div id="'+id+'col4" class="col-md-2"></div>';
	customHTML += '<div id="'+id+'col5" class="col-md-1"></div>';
	customHTML += '<div id="'+id+'col6" class="col-md-2"></div>';
	customHTML += '<div id="'+id+'col7" class="col-md-1"></div>';
	
	document.getElementById(id).innerHTML = customHTML;
}

function addElement () { 
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
  for (i=1;i<=number;i++){
  	CKEDITOR.replace( 'row'+i+'input2' );
   }
   
   var submitBtn = document.getElementById('submit');
   submitBtn.classList.remove("btn-hidden");
}

function addColHeadings(){
	var label1 = document.createElement("label");
    var t1 = document.createTextNode("Test Name");
    label1.appendChild(t1);
    label1.className = "FormLabel";

    var label2 = document.createElement("label");
    var t2 = document.createTextNode("Reference Range");
    label2.appendChild(t2);
    label2.className = "FormLabel";

    var label3 = document.createElement("label");
    var t3 = document.createTextNode("Units");
    label3.appendChild(t3);
    label3.className = "FormLabel";

    var label4 = document.createElement("label");
    var t4 = document.createTextNode("Conditions");
    label4.appendChild(t4);
    label4.className = "FormLabel";

    colHead1.appendChild(label1);
    colHead1.appendChild(document.createElement("br"));

    colHead2.appendChild(label2);
    colHead2.appendChild(document.createElement("br"));

    colHead3.appendChild(label3);
    colHead3.appendChild(document.createElement("br"));

    colHead4.appendChild(label4);
    colHead4.appendChild(document.createElement("br"));
}

function addinputFields(id){
	/*
		function addCondition(id) {
			// body...
			alert(id);
		}
	*/
		
		//newConButton.innerHTML = 'New';
    	var count = id.substr(3);
        var input1 = document.createElement("input");
        input1.type = "text";
        input1.className = "form-control";
        input1.name = id+"input1";

        var input2 = document.createElement("textarea");
        input2.cols = 5;
        input2.rows = 1;
        input2.className = "form-control";
        input2.name = id+"input2";

        var input3 = document.createElement("input");
        input3.type = "text";
        input3.className = "form-control";
        input3.name = id+"input3";
        condition_count[count] = 0;
		
		var hid_con_count = document.createElement("input");
        hid_con_count.type = "hidden";
        hid_con_count.className = "form-control";
        hid_con_count.name = id+"hid_con_count";
        hid_con_count.value = 0;
             

		var newConButton = document.createElement("button");
		newConButton.type = "button";
		newConButton.id = 'newConButton' + id;
		
		newConButton.onclick = function() {
			condition_count[count] += 1;
			hid_con_count.value = condition_count[count];
			//alert(condition_count[count]);
			
			var col = document.getElementById(id+"col4");    
			var input4 = document.createElement("select");
		        var condition_array = ["LESSERTHAN","LESSERTHANEQUAL","GREATERTHAN","GREATERTHANEQUAL","EQUAL"];
		        input4.className = "form-control";
		        for (var i = 0; i < condition_array.length; i++) {
		 		   	var option = document.createElement("option");
		    		option.value = condition_array[i];
		    		option.text = condition_array[i];
		   			input4.appendChild(option);
				}
				input4.name = id+"con"+condition_count[count]+"input4";

		        var input5 = document.createElement("input");
		        input5.type = "text";
		        input5.className = "form-control";
		        input5.placeholder = "VAL1";
		        input5.name = id+"con"+condition_count[count]+"input5";

		        var input6 = document.createElement("input");
		        input6.type = "text";
		        input6.className = "form-control";
		        input6.placeholder = "RESULT";
		        input6.name = id+"con"+condition_count[count]+"input6";

		        var input7 = document.createElement("select");
		        input7.className = "form-control";
		        for (var i = 0; i < condition_array.length; i++) {
		 		   	var option = document.createElement("option");
		    		option.value = condition_array[i];
		    		option.text = condition_array[i];
		   			input7.appendChild(option);
				}
				input7.name = id+"con"+condition_count[count]+"input7";

		        var input8 = document.createElement("input");
		        input8.type = "text";
		        input8.className = "form-control";
		        input8.placeholder = "VAL2";
		        input8.name = id+"con"+condition_count[count]+"input8";

		        var input9 = document.createElement("input");
		        input9.disabled = true;
		        input9.type = "text";
		        input9.className = "form-control";
		        input9.name = id+"con"+condition_count[count]+"input9";

		        var input10 = document.createElement("select");
		        var and_or_array = ["NULL","AND","OR"];
		        input10.className = "form-control";
		        for (var i = 0; i < and_or_array.length; i++) {
		 		   	var option = document.createElement("option");
		    		option.value = and_or_array[i];
		    		option.text = and_or_array[i];
		   			input10.appendChild(option);
				}
				input10.name = id+"con"+condition_count[count]+"input10";

				

				var input11 = document.createElement("select");
				var show_hide_array = ["SHOW","HIDE"];
		        input11.className = "form-control";
		        for (var i = 0; i < show_hide_array.length; i++) {
		 		   	var option = document.createElement("option");
		    		option.value = show_hide_array[i];
		    		option.text = show_hide_array[i];
		   			input11.appendChild(option);
				}
				input11.name = id+"con"+condition_count[count]+"input11";

				var conAddBtn = document.getElementById('newConButton'+id);
				

			temp = id+'col4';
			col.insertBefore(input4, conAddBtn);
			col.insertBefore(input7, conAddBtn);
			col.insertBefore(document.createElement("br"), conAddBtn);

	        //document.getElementById(temp).appendChild(input4);
	        //col4.appendChild(document.createElement("br"));
	        //document.getElementById(temp).appendChild(input7);
	        //document.getElementById(temp).appendChild(document.createElement("br"));

	        temp = id+'col5';
	        document.getElementById(temp).appendChild(input5);
	        //col5.appendChild(document.createElement("br"));
	        document.getElementById(temp).appendChild(input8);
	        document.getElementById(temp).appendChild(document.createElement("br"));

	        temp = id+'col6';
	        document.getElementById(temp).appendChild(input6);
	        //col6.appendChild(document.createElement("br"));
	        document.getElementById(temp).appendChild(input11);
	        document.getElementById(temp).appendChild(document.createElement("br"));

	        temp = id+'col7';
	        document.getElementById(temp).appendChild(input10);
	        //col6.appendChild(document.createElement("br"));
	        document.getElementById(temp).appendChild(input9);
	        document.getElementById(temp).appendChild(document.createElement("br"));
	        
		};
		newConButton.className = "btn btn-default glyphicon glyphicon-plus";

		var delConButton = document.createElement("button");
		delConButton.type = "button";
		delConButton.className = "btn btn-default glyphicon glyphicon-minus";
		delConButton.onclick = delConButtonListener;

		function delConButtonListener() {

			if (condition_count[count] != 0){
				var i = condition_count[count];
				condition_count[count] -= 1;
				hid_con_count.value = condition_count[count];
			
				var elem = document.getElementById(id).children;
				var noOfChildren = elem[3].children.length;
				for(var k=3;k<=5;k++){
					var tempElement = elem[3].children[noOfChildren - k];
							tempElement.parentNode.removeChild(tempElement);	
				}
						
				//console.log(elem[3].children[noOfChildren - 1]);
						
				for(var j = 4; j <= 6; j++){
					var tempID = id + 'con' + i + 'input' + j;
					var noOfChildren = elem[j].children.length;
					//console.log(elem[j].children[noOfChildren - 1]);
					//console.log(elem[j].children[noOfChildren - 2]);
					//console.log(elem[j].children[noOfChildren - 3]);
					for(var k =1; k<=3; k++){
						var tempElement = elem[j].children[noOfChildren - k];
						tempElement.parentNode.removeChild(tempElement);	
					}
							//elem.parentNode.removeChild(noOfChildren - 1);
				}
			}
			
		};
		
		
        

        var temp;


        temp = id+'col1';
        document.getElementById(temp).appendChild(hid_con_count);

        temp = id+'col1';
        document.getElementById(temp).appendChild(input1);
        document.getElementById(temp).appendChild(document.createElement("br"));
        document.getElementById(temp).appendChild(document.createElement("br"));

        temp = id+'col2';
        document.getElementById(temp).appendChild(input2);
        document.getElementById(temp).appendChild(document.createElement("br"));
        document.getElementById(temp).appendChild(document.createElement("br"));

        temp = id+'col3';
        document.getElementById(temp).appendChild(input3);
        document.getElementById(temp).appendChild(document.createElement("br"));
        document.getElementById(temp).appendChild(document.createElement("br"));

        temp = id+'col4';
        document.getElementById(temp).appendChild(newConButton);
        document.getElementById(temp).appendChild(delConButton);
        //document.getElementById(temp).appendChild(document.createElement("br"));
        //document.getElementById(temp).appendChild(document.createElement("br"));
/*
        temp = id+'col4';
        document.getElementById(temp).appendChild(input4);
        //col4.appendChild(document.createElement("br"));
        document.getElementById(temp).appendChild(input7);
        document.getElementById(temp).appendChild(document.createElement("br"));

        temp = id+'col5';
        document.getElementById(temp).appendChild(input5);
        //col5.appendChild(document.createElement("br"));
        document.getElementById(temp).appendChild(input8);
        document.getElementById(temp).appendChild(document.createElement("br"));

        temp = id+'col6';
        document.getElementById(temp).appendChild(input6);
        //col6.appendChild(document.createElement("br"));
        document.getElementById(temp).appendChild(input9);
        document.getElementById(temp).appendChild(document.createElement("br"));

        temp = id+'col7';
        document.getElementById(temp).appendChild(input10);
        //col6.appendChild(document.createElement("br"));
        document.getElementById(temp).appendChild(input11);
        document.getElementById(temp).appendChild(document.createElement("br"));
*/
        //cols.appendChild(document.createElement("hr"));

        //catForm.appendChild(document.createElement("br"));
    
}