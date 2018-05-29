// @aurthor:Shyam Bodke

function yesnoCheck(that) {
    switch (that.value != null) {
        case (that.value == "color"):
            document.getElementById("ifColor").style.display = "block";
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
            break;
        case (that.value == "pro-2"):
            document.getElementById("subpro-2").style.display = "block";
            break;

        default:
            break;
    }

}
