var swMin = true;
var swMax = false;
function changeProfileMin(){
    if(swMin){
        var childs = $('#navbarCollapse').children();
        var auxChild = childs[0];
        console.log(childs[0]);
        childs[0] = childs[childs.length-1];
        console.log(childs[0]);
        childs[childs.length-1] = auxChild;
        $('#navbarCollapse').html("");
        $('#navbarCollapse').html(childs);
        swMin = false;
    }



}
function changeProfileMax(){
    if(swMax){
        var childs = $('#navbarCollapse').children();
        var auxChild = childs[0];
        console.log(childs[0]);
        childs[0] = childs[childs.length-1];
        console.log(childs[0]);
        childs[childs.length-1] = auxChild;
        $('#navbarCollapse').html("");
        $('#navbarCollapse').html(childs);
        swMax = false;
    }

}
$(window).on('resize load', function () {
    if ($(window).width() <= 576 ) {
        changeProfileMin();
        swMax = true;
    } else {
        changeProfileMax();
        swMin = true;


    }
});