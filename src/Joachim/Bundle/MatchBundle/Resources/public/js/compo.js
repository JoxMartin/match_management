/**
 * Created by joachim on 17/01/15.
 */
function Compo() {
    this.equipeR = [];
    this.equipeV = [];

    // Définit une équipe
    this.setEquipe = function (equipe) {
        var me =  this, pattern = "licence" + equipe, joueur, options;

        // Réinitialise l'équipe
        me['equipe' + equipe] = [];

        $("select[name^=licence" + equipe + "]").each(function () {
            if ($(this).val()) {
                joueur = new Joueur();
                joueur.setLicence($(this).val());
                joueur.setNumero($('input', $(this).parent().next()).val());
                me['equipe'+ equipe].push(joueur);
            }
        });

        if (me['equipe' + equipe].length != 0 && me['equipe' + equipe].length < 6) {
            alert('Equipe ' + equipe + ' incomplète');
        } else {
            // Génère les options pour les équipes
            options = me.generateEquipeOption(equipe);
            $("select[name^=rotation_" + equipe + "]").each(function () {
                $(this).empty();
                $(this).append(options);
            })
        }
    };

    // Génération de la liste des numéros de joueurs en fonction de la composition
    this.generateEquipeOption= function(equipe) {
        var me = this, equipeLength = me['equipe' + equipe].length, i = 0, options = "<option>Choisir</option>";

        for (i;i<equipeLength;++i) {
            options += '<option value="' + me['equipe' + equipe][i].numero + '">' + me['equipe' + equipe][i].numero + '</option>';
        }

        return options;
    };

    // Vérifie que la composition des équipes est valide
    this.isValid = function () {
        if (this.equipeR.length >= 6 && this.equipeV.length >= 6) {
            return true;
        }
        return false;
    };
}