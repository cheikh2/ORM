<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="assets/css/Moral.css" />
    <title>Client Physique</title>
    <link rel="stylesheet" href="..assets/style.css">
</head>

<body>

    <div id="container">
        <header>
            <div id="entete">
                <img alt="logo" src="images/logo bancaire.jpg" id="img1" />
                <div id="text1">
                    <h2>Bienvenue à la banque du peuple</h2>
                </div>
            </div>
            <div id="lien">
                <ul id="naviguer">
                    <li><a href="#">Home</a></li>
                    <li><a href="add">Liste clients</a></li>
                    <li><a href="getAll">Liste des comptes</a></li>
                    <li><a href="deconnexion.php">Deconnexion</a></li>
                </ul>
            </div>
            <br />
        </header>

        <main>
            <div id="text2">
                <h2>Ouverture de compte</h2>
            </div>
            <nav>
                <ul id="navigation">
                    <li><a href="../moral/add">Client</a></li>
                    <li><a href="employeur.php">Client Moral</a></li>
                    <li><a href="compte.php">Compte</a></li>
                </ul>
            </nav>
            <br />

            <form action="" method="POST" id="myform2">

                <fieldset id="field1">
                    <legend id="legend1">Informations Client</legend>
                    <div id="infoClient">

                        <div id="infoClient1">
                            <label for="prenom" id="lab3">Prenom : </label>
                            <input type="text" id="prenom" name="prenom" placeholder="Prenom" required />
                            <span id="missPrenom"></span>

                            <label for="nom" id="lab3">Nom : </label>
                            <input type="text" id="nom" name="nom" placeholder="nom" required />
                            <span id="missNom"></span>

                            <label for="adress" id="lab1">Adress : </label>
                            <input type="text" id="adress" name="adress" placeholder="adress" required />
                            <span id="missAdress"></span>

                            <label for="email" id="lab">Email : </label>
                            <input type="email" id="email" name="email" placeholder="Email" required />
                            <span id="missEmail"></span>

                            <label for="telephone" id="lab">Telephone : </label>
                            <input type="telephone" id="telephone" name="telephone" placeholder="telephone" required />
                            <span id="missTelephone"></span>
                        </div>

                        <div id="infoClient2">
                            <label for="sexe" id="lab1">Sexe : </label>
                            <input type="sexe" id="sexe" name="sexe" placeholder="sexe" required />
                            <span id="missSexe"></span>

                            <label for="profession" id="lab1">Profession : </label>
                            <input type="text" id="profession" name="profession" placeholder="Profession" required />
                            <span id="missProfession"></span>

                            <label for="cni" id="lab1">Cni : </label>
                            <input type="text" id="cni" name="cni" placeholder="cni" required />
                            <span id="missCni"></span>

                            <label for="salaire" id="lab1">Cni : </label>
                            <input type="text" id="salaire" name="salaire" placeholder="salaire" required />
                            <span id="missSalaire"></span>

                            <label for="moral" id="lab1">Employeur : </label>
                            <select id="cni" name="moral">
                                <option value="">Faites votre choix</option>
                                <?php foreach ($data as $physique) : ?>
                                    <option value="<?= $physique->getMoral()->getId(); ?>"><?= $physique->getNomEmpl(); ?></option>
                                <?php endforeach ?>
                            </select>

                        </div>
                    </div>
                </fieldset>

                <button type="submit" name="ajouter">Valider</button>
            </form>
            <script type="text/javascript" src="JS/employeur.js"></script>
        </main>
    </div>
</body>
<style>
    body {
        background-image: url(images/bank.jpg);
        background-color: rgb(190, 190, 235);
        background-repeat: no-repeat;
        background-size: 100%;
    }

    #container {
        margin-left: 5%;
        margin-right: 5%;
    }

    header {
        display: flex;
        flex-direction: column;
    }

    #entete {
        width: 100%;
        height: 100px;
        background-color: bisque;
        display: flex;
    }

    #img1 {
        width: 120px;
        height: 100px;
    }

    #text1 {
        color: brown;
        font-size: 28px;
        font-family: "MS Serif", "New York", serif;
        margin-left: 20%;
    }

    #text2 {
        color: white;
        font-size: 15px;
        font-family: Arial, Helvetica, sans-serif;
        height: 40px;
        text-align: center;
        padding: 1px;
    }

    h2 {
        text-align: center;
    }

    #lien {
        background-color: #6CC;
        height: 50px;
    }

    #naviguer ul {
        list-style: none;
        text-align: center;
        margin: 0;
        padding: 0;
    }

    #naviguer li {
        display: inline-block;
        text-align: center;
        height: 50px;
    }

    #naviguer a {
        text-decoration: none;
        color: brown;
        width: 180px;
        display: block;
        font-size: 18px;
        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    }

    #naviguer a:hover {
        background: olive;
        transition: 0.4s;
        height: 25px;
    }

    nav {
        background-color: cadetblue;
        height: 40px;
        margin: 0;
        padding: 0;
    }

    #navigation ul {
        list-style: none;
        text-align: center;
        margin: 0;
        padding: 0;
    }

    #navigation li {
        display: inline-block;
        text-align: center;
    }

    #navigation a {
        text-decoration: none;
        color: #FFF;
        width: 330px;
        display: block;
        font-size: 24px;
        font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    }

    #navigation a:hover {
        background: olive;
        transition: 0.6s;
        height: 40px;
    }

    main {
        margin-left: 15%;
        margin-right: 15%;
        background: rgba(0, 0, 0, 0.5);
        border-radius: 15px;
    }

    #legend1,
    #legend2,
    #legend3 {
        color: #FFF;
        font-size: 22px;
        text-align: center;
    }

    #field1,
    #field2,
    #field3 {
        display: flex;
        flex-direction: column;
    }

    label {
        font-size: 18px;
        color: #FFF;
    }

    select {
        width: 320px;
        border-radius: 7px;
        padding: 8px;
    }

    #cni {
        width: 300px;
        border-radius: 7px;
        padding: 8px;
    }

    #cniList {
        background-color: white;
        border-radius: 7px;
        width: 81%;
    }

    ul {
        list-style-type: none;
    }

    #nomEmpl {
        width: 300px;
        border-radius: 7px;
        padding: 8px;
    }

    #ninea {
        width: 300px;
        border-radius: 7px;
        padding: 8px;
    }

    #rc {
        width: 300px;
        border-radius: 7px;
        padding: 8px;
    }

    #raisonSocial {
        width: 300px;
        border-radius: 7px;
        padding: 8px;
    }

    #adressEmpl {
        width: 300px;
        border-radius: 7px;
        padding: 8px;
    }

    #nom {
        width: 300px;
        border-radius: 7px;
        padding: 8px;
    }

    #prenom {
        width: 300px;
        border-radius: 7px;
        padding: 8px;
    }

    #DateDeNaissance {
        width: 300px;
        border-radius: 7px;
        padding: 8px;
    }

    #adress {
        width: 300px;
        border-radius: 7px;
        padding: 8px;
    }

    #email {
        width: 300px;
        border-radius: 7px;
        padding: 8px;
    }

    #telephone {
        width: 300px;
        border-radius: 7px;
        padding: 8px;
    }

    #profession {
        width: 300px;
        border-radius: 7px;
        padding: 8px;
    }

    #salaire {
        width: 300px;
        border-radius: 7px;
        padding: 8px;
    }

    #sexe {
        width: 317px;
        border-radius: 7px;
        padding: 8px;
    }

    #employeur {
        width: 300px;
        border-radius: 7px;
        padding: 8px;
    }

    #numAgence {
        width: 300px;
        border-radius: 7px;
        padding: 8px;
    }

    #numCompte {
        width: 300px;
        border-radius: 7px;
        padding: 8px;
    }

    #rib {
        width: 300px;
        border-radius: 7px;
        padding: 8px;
    }

    #montant {
        width: 300px;
        border-radius: 7px;
        padding: 8px;
    }

    #dateDebut {
        width: 300px;
        border-radius: 7px;
        padding: 8px;
    }

    #dateFin {
        width: 300px;
        border-radius: 7px;
        padding: 8px;
    }

    #clientT {
        width: 300px;
        border-radius: 7px;
        padding: 8px;
    }

    #compte,
    #infoClient,
    #infoSupp {
        display: flex;
        justify-content: space-around;
    }

    #fraiss,
    #infoClient1 {
        display: flex;
        flex-direction: column;
        justify-content: space-around;
    }

    #infoC,
    #infoClient2 {
        display: flex;
        flex-direction: column;
        justify-content: space-around;
    }

    button {
        background-color: forestgreen;
        border: none;
        display: block;
        width: 300px;
        height: 40px;
        position: relative;
        margin-left: auto;
        margin-right: auto;
        font-size: 20px;
        border-radius: 15px;
    }
</style>

</html>