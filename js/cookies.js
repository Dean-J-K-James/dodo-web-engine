/***************************************************/
/** Dean James - Content Management System Engine **/
/***************************************************/

/**
 * 
 */
$("#cookies-accept").click(function () {
    $.post('/ajax', { 'ajax': 'cookies-accept.php' }, function () {
        location.reload();
    });
});