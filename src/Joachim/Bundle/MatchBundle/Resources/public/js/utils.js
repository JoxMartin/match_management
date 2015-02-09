function Element() {
    this.valeur = '';
    this.reference = [];


}

function Utils() {
    this.checkDoublon = function (current) {
        var champ, prefix, currentVal, internalValues = [], found, selectVal, selectName;
        // Valeur du champ courant
        currentVal = current.val();

        // Récupération du nom du champ et extraction du préfixe de sélection
        champ = current.attr('name');
        prefix = champ.substr(0,champ.length -2);

        /*if (internalValues.currentNumber === undefined) {
            internalValues.currentNumber = [];
        }

        $(internalValues).each(function (elmt) {
            console.log(elmt);
        });*/

        //internalValues[current.val()].push(champ);
        $("select[name^=" + prefix).each(function () {
            selectVal = $(this).val();
            selectName = $(this).attr('name');
            /*if (selectVal == currentVal &&
                champ != selectName) {
                $(this).parent().addClass("danger");
                current.parent().addClass("danger");
            }*/

            found = false;

            // On boucle sur le tableau interne pour voir si on trouve la valeur
            $(internalValues).each(function () {
                //  On indique qu'elle est trouvée
                if (this.valeur == currentVal) {
                    found = true;
                    this.reference.push(selectName);
                    // TODO : break?
                    /*$(this.reference).each(function() {
                        console.log('Utilisé :' + this);
                    })*/
                }
                //console.log(this);
                //if ($(this)) {

                //}
            });

            // La valeur n'a pas été trouvée
            if (!found) {
                element = new Element();

                element.valeur = currentVal;
                element.reference.push(selectName);
                internalValues.push(element)

                $(internalValues).each(function () {
                    var i= 0, tabLength = this.reference.length;
                    for(i; i < tabLength; ++i) {
                        if (this.reference[i] == selectName) {
                            this.reference.splice(i, 1);
                        }
                    };
                });
            }

            // Suppression de toutes les classes d'alerte
            $("select[name^=" + prefix).each(function () {
               $(this).parent().removeClass('danger');
            });

            // On effectue une dernière boucle sur les éléments pour
            $(internalValues).each(function () {
                if (this.reference.length > 1) {
                    var i = 0, tabLength = this.reference.length;

                    for (i; i < tabLength; ++ i) {
                        $("select[name=" + this.reference[i] + "]").addClass('danger');
                    }
                }
            })
        });
    }
}