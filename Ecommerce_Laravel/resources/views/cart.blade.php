@extends('layout')
@section('content')
<h1>Panier</h1>
<table class="table table-dark table-striped">
    <tr>
        <td>Nom du produit</td>
        <td>Prix Unitaire</td>
        <td>Quantité</td>
        <td>Total</td>
    </tr>
    <tr>
        <td>Produit</td>
        <td>1€</td>
        <td>2</td>
        <td>1 €</td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td>Total :</td>
        <td>1 €</td>
    </tr>

    <tr>
        <td></td>
        <td></td>
        <td>Total HT :</td>
        <td>1€</td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td>TVA :</td>
        <td>20%</td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td></td>
        <td>
            <form method="post">
                <select name="transporteur" id="select_transporteur">
                    <option value="La_poste">La poste
                    </option>
                    <option value="Amazon">Amazon
                    </option>
                    <option value="daron">Mon daron
                    </option>
                    <option value="Musk">Elon Musk qui envoi ton colis sur Mars
                    </option>
                </select>
                <input type="submit" value="VALIDER" class="btn btn-light">
            </form>
        </td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td>Prix transport :</td>
        <td>1 €</td>
    </tr>
    <tr>
        <td></td>
        <td></td>
        <td>Total TTC :</td>
        <td>1 €</td>
    </tr>
</table>
<a href="product" class="btn btn-primary">Return</a>
<a href="#" class="btn btn-success">Valider la commande</a>
@endsection
