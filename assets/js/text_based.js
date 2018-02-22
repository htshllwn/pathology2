

function addTest() {
    var container = document.getElementById('textTests');
    var dummyHTML = '<br><div class="form-group"><div class="col-xs-6 col-md-4"><input type="text" class="form-control text-based" placeholder="Test Name"></div><div class="col-xs-12 col-sm-6 col-md-8"><input type="text" class="form-control text-based" placeholder="Test Details"></div></div><br>';
    container.insertAdjacentHTML('beforeend',dummyHTML);
}

function removeTest() {
    var container = document.getElementById('textTests');
    for(var i = 0; i < 3; i++){
        container.removeChild(container.lastChild);
    }
    
}

function print_text_based(){
    console.log("Printing Text Based");
    var i = 1;
    var max_i = parseInt($("#max_i").val());

    for( ; i <= max_i ; i++){
        var rowChild = document.getElementById(i).children;
        var left = rowChild[0].children;
        var right = rowChild[1].children;
        //left[0].val();
        console.log(rowChild);

        if(right.length != 0){
            if(right[0].value == ""){
                document.getElementById(i).style.display = 'none';
            }
        }
        else{
            if(left.length != 0){
                if(left[0].value == ""){
                    document.getElementById(i).style.display = 'none';
                }
            }
        }

        
        console.log(left[0].value);
        console.log(right.length);
    }


    console.log(max_i);

    window.print();
}