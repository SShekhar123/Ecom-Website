
// @aurthor:Shyam Bodke

var room = 1;
var value = 1;
function add_fields() {
    room++;
    value++;
    var objTo = document.getElementById('color_fileds')
    var divtest = document.createElement("div");
    divtest.innerHTML = '<label for="product-color" class="col-md-3 control-label">Color ' + room + ':</label><div class="content col-md-7"><input type="color" id="product-color" name="color" name="width[]" value="'+ value + '"> <input type="button" class="btn btn-primary btn-sm" id="more_fields" onclick="add_fields();" value="Add More" /></div>';

    objTo.appendChild(divtest)
}
function yesnoCheck(that) {
    switch (that.value != null) {
        case (that.value == "color"):
            document.getElementById("color_fileds").style.display = "block";
            break;
        case (that.value == "size"):
            document.getElementById("ifSize").style.display = "block";
            break;

        default:
            break;
    }

}

function subcategory(that) {
    switch (that.value != null) {
        case (that.value == "pro-1"):
            document.getElementById("subpro-1").style.display = "block";
            document.getElementById("subpro-2").style.display = "none";
            
            break;
        case (that.value == "pro-2"):
            document.getElementById("subpro-2").style.display = "block";
            document.getElementById("subpro-1").style.display = "none";
            
            break;

        default:
            break;
    }

}

// Slider
var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
output.innerHTML = slider.value;

slider.oninput = function () {
    output.innerHTML = this.value;
}



$(document).ready(function() {
    $(".btn-pref .btn").click(function () {
        $(".btn-pref .btn").removeClass("btn-primary").addClass("btn-default");
        // $(".tab").addClass("active"); // instead of this do the below 
        $(this).removeClass("btn-default").addClass("btn-primary");
    });
});