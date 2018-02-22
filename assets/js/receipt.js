var tests = document.getElementById("tests").value.split("\n");
console.log(tests);
addTests("select1");

function addTests(id){
    var temp = document.getElementById(id);
    for(var i = 1; i < tests.length; i++){
        var option = document.createElement("option");
        var text = document.createTextNode(tests[i]);
        option.appendChild(text);
        temp.appendChild(option);
    }
    
}