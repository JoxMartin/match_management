/**
 * Created by joachim on 17/01/15.
 */

var compo = null, utils = new Utils(), doublons = {};

$(document).ready(function () {
    $('h4 > a').click(function () {
        if (!compo) {
            compo = new Compo();
        }
        compo.setEquipe('R');
        compo.setEquipe('V');
    });

    $('button.currentSet').click(function () {
        //if (compo.isValid()) {

            var numSet = $(this).text();

            $('.composition').addClass('hidden');
            $('.composition-' + numSet).removeClass('hidden');
        //} else {
        //    alert('Merci de compléter vos équipes');
        //}
    });

    $('button.timeout').click(function () {
        var remaininingTimeOut = $(this).next().text();


        if (remaininingTimeOut > 0) {
            remaininingTimeOut--;
        }

        $(this).next().text(remaininingTimeOut);
        if (remaininingTimeOut == 0) {
            $(this).removeClass('timeout');
            $(this).removeClass('btn-success');
            $(this).addClass('btn-danger');
        }


    });


    $('select.rotation').change(function () {
        utils.checkDoublon($(this));
    });
});
