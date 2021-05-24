function changeCheckbox(id){
    var n = id.startsWith("all_");
    if(n===true){
        // id all__checkbox
        var allCheckBox = document.getElementById(id);
        if(allCheckBox.checked==false){
            allCheckBox.checked=true
        }else{
            allCheckBox.checked=true
            var CheckBox = document.getElementsByClassName(id.substring(4));
            for(i = 0; i < CheckBox.length; i++){
                CheckBox[i].checked = false;
            }
        }
    }else{
        // claa __checkbox
        var allCheckBox = document.getElementById("all_"+id);
        var CheckBox = document.getElementsByClassName(id);
        var i;
        var check = 0;
        for(i = 0; i < CheckBox.length; i++){
            if(CheckBox[i].checked == true){
                allCheckBox.checked=false;
                check = 1;
            }
        }
        if(check==0){
            allCheckBox.checked=true;
        }
    }
}
function filter__by__rating__choice(){
    var choice = document.getElementById("filter__by__rating__choice__div");
    if(choice.classList.contains("filter__by__rating__choice__unshown")){
        choice.classList.remove("filter__by__rating__choice__unshown")
    }else{
        choice.classList.add("filter__by__rating__choice__unshown")
    }
}
function filter__by__rating__choice__button(value){
    filter__by__rating__choice();
    var choice = document.getElementById("filter__by__rating__button");
    choice.value=value
}