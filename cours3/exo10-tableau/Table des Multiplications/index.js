'use strict';   // Mode strict du JavaScript

// Déclaration de quatre variables.
var size = prompt("Taille ?");


// Création en HTML de la table des multiplications.
document.write('<table>');

for(var x = 1; x <= size; x++)
{
    // Création de la ligne HTML.
    document.write('<tr>');

    for(var y = 1; y <= size; y++)
    {
        // Si les deux nombres multipliés sont les mêmes...
        if(x == y)
        {
            // ...Alors on créé une cellule HTML à laquelle on applique une classe CSS.
            document.write('<td class="same-number">');
        }
        else
        {
            // ...Sinon on créé simplement une cellule HTML.
            document.write('<td>');
        }

        // Écriture dans la cellule HTML du résultat contenu dans la table des multiplications.
        document.write(x*y);

        // Fermeture de la cellule HTML.
        document.write('</td>');
    }

    // Fermeture de la ligne HTML.
    document.write('</tr>');
}

// Fermeture du tableau HTML.
document.write('</table>');