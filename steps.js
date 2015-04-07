var i = 2;
$("#addStep").on("click", function () {
    if (i < 2) {
        i = 2;
    }
    $('#steps').append($('#step').html()).attr('id', 'newStep' + i);

    //$("#step").clone().attr('id', 'newStep' + i).fadeIn('slow').appendTo("#steps");
    $("#newStep" + i + " div h5").html("Этап № " + i);
    $("#newStep" + i + " input[name=startStepPlanning]").attr('name', 'startStepPlanning' + i);
    $("#newStep" + i + " label[for=startStepPlanning]").attr('for', 'startStepPlanning' + i);

    $("#newStep" + i + " input[name=stopStepPlanning]").attr('name', 'stopStepPlanning' + i);
    $("#newStep" + i + " label[for=stopStepPlanning]").attr('for', 'stopStepPlanning' + i);

    $("#newStep" + i + " input[name=startStepWorking]").attr('name', 'startStepWorking' + i);
    $("#newStep" + i + " label[for=startStepWorking]").attr('for', 'startStepWorking' + i);

    $("#newStep" + i + " input[name=stopStepWorking]").attr('name', 'stopStepWorking' + i);
    $("#newStep" + i + " label[for=stopStepWorking]").attr('for', 'stopStepWorking' + i);
    i++;
});

$("#delStep").on("click", function () {
    i--;
    $("#newStep" + i).detach();
});
