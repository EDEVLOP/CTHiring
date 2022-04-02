<script>
function position() {
    var positions = $('#opening').val();
    position_store = $('#position_store').val(positions);

}

function openPopup() {
    $("#myModal").modal();

}

function positionselect() {
    var position_store;
    var minusposition_store;
    var minusposition_stores;

    var no_positions;

    var position = $('#opening').val();
    position_store = $('#position_store').val();



    //alert (position)
    var x = document.getElementById("type_val");

    for (var i = 0; i < x.options.length; i++) {
        if (x.options[i].selected == true) {
            var no_positions = $('#no_position').val();
            //alert(position_store);
            //alert(x.options[i].value);
            //alert(no_positions);

        }
    }
    //alert(position_store);
    if (no_positions != '') {
        minusposition_stores = parseInt(position_store) - parseInt(no_positions);

        minusposition_store = $('#position_store').val(minusposition_stores);
    } else {
        minusposition_store = $('#position_store').val();

    }
    $('#no_position').val('');

}

function showMe(e) {
    var position_store;
    var minusposition_store;
    var minusposition_stores;

    var no_positions;
    var name_positions = '';
    var position = $('#opening').val();
    position_store = $('#position_store').val();
    var no_positions = $('#no_position').val();
    minusposition_stores = parseInt(position_store) - parseInt(no_positions);

    minusposition_store = $('#position_store').val();

    var x = document.getElementById("type_val");

    for (var i = 0; i < x.options.length; i++) {
        if (x.options[i].selected == true) {
            var no_positions = $('#no_position').val();
            //alert(position_store);
            //alert(x.options[i].value);
            //alert(no_positions);
            //name_positions= name_positions + $('#name_position').val(e.concat('#').concat(x.options[i].value).concat(';'));

            //name_positions = name_positions + e.concat('#').concat(x.options[i].value).concat(';');
            name_positions = $('#name_position').val() + e.concat('#').concat(x.options[i].value).concat(';');
            //name_positions = e.concat('#').concat(name_positions) + x.options[i].value;
            //alert('gg');
            //alert(name_positions);
        }

    }



    $('#name_position').val(name_positions);



    if (e > minusposition_store) {
        alert("please check the values");
    }






}

document.getElementsByClassName('select2-selection__choice__remove').onclick = closemodal;

function closemodal() {


    var close = document.getElementById(myModal);
    close.style.display = "none";



}
</script>