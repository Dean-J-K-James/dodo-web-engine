$("#cookies-accept").click(function (e)
{
    $.ajax({
        type: "POST",
        url: root + '/ajax/cookies-accept',
        processData: false,
        contentType: false,
        success: function ()
        {
            location.reload();
        }
    });
});