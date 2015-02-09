function Element() {
    this.valeur = '';
    this.reference = [];


}

function Utils() {
    this.checkDoublon = function (current) {
        var champ, prefix, currentVal, internalValues = [], found, selectVal, selectName, element;
        // Valeur du champ courant
        currentVal = current.val();

        // Récupération du nom du champ et extraction du préfixe de sélection
        champ = current.attr('name');
        prefix = champ.substr(0,champ.length -2);

        if (doublons[prefix] !== undefined) {
            internalValues = doublons[prefix];
        }

        // On boucle sur le tableau interne pour voir si on trouve la valeur
        $(internalValues).each(function () {
            //  On indique qu'elle est trouvée
            if (this.valeur == currentVal) {
                found = true;
                this.reference.push(champ);

                // On quitte la boucle
                return false;
            }
        });

        // La valeur n'a pas été trouvée
        if (!found) {
            // On ajoute l'élément au tableau
            element = new Element();

            element.valeur = currentVal;
            element.reference.push(champ);
            internalValues.push(element);
        }

        // On boucle sur les valeurs du tableau pour supprimer une éventuelle association existante
        $(internalValues).each(function () {
            var i= 0, tabLength = this.reference.length;
            for(i; i < tabLength; ++i) {
                // On ne supprime que si :
                // -> La valeur trouvée est différente de celle choisie
                if (this.valeur != currentVal) {
                    // -> On trouve le nom du champ dans les références
                    if (this.reference[i] == champ) {
                        this.reference.splice(i, 1);
                    }
                }
            }
        });

        // Suppression de toutes les classes d'alerte
        $("select[name^=" + prefix).each(function () {
           $(this).parent().removeClass('danger');
        });

        // On effectue une dernière boucle sur les éléments pour
        $(internalValues).each(function () {
            if (this.reference.length > 1) {
                var i = 0, tabLength = this.reference.length;

                for (i; i < tabLength; ++ i) {
                    $("select[name=" + this.reference[i] + "]").parent().addClass('danger');
                }
            }
        });

        // Retourne les doublones à la variable globale
        doublons[prefix] = internalValues;
    }
}