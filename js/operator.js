$(document).ready(function(){
    var list_drink = $('.row-list-drink');
    for( var n= 0; n< list_drink.length; n++){
        var operator = list_drink[n].getElementsByClassName('operator');
        operator[0].innerHTML='=';
        for (var k = 0; k < operator.length-1; k++) {
            operator[k+1].innerHTML = '+';
        }
    }
});