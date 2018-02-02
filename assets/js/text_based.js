

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