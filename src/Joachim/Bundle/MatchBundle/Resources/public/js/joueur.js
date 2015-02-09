/**
 * Created by joachim on 23/01/15.
 */
function Joueur() {
    this.licence = 0;
    this.numero = 0;

    this.setLicence = function (licence) {
        this.licence = licence;
    }

    this.setNumero = function (numero) {
        this.numero = numero;
    }
}