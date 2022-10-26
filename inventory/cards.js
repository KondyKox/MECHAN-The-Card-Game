

function show(img) {
    let dc = document.getElementById('cards');
    let item = "<div id='res_show' class='item class_red_item' style='background-image:" + img.style.backgroundImage + "'></div>";
    document.getElementById('cards').innerHTML = "";
    dc.style.display = "";
    $(item).appendTo('#cards');

    let im = "<div id='exit' onclick='hide()'>X</div>";
    $(im).appendTo('#res_show');
}

function hide() {
    $('#cards').css({
        display: "none"
    });
}