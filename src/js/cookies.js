/**********************************************************/
/** Dean James - Pangean Flying Cactus - The Coding Dodo **/
/**********************************************************/

/**
 * 
 */
$("#cookies-accept").click(function () {
    $.post('/ajax.php', { 'ajax': 'ajax/cookies-accept.php' }, function () {
        location.reload();
    });
});