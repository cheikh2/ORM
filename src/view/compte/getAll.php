<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link type="text/css" rel="stylesheet" href="../assets/style.css" />
</head>

<body>
    <div class="container">
        <h2>Liste de Comptes</h2>
        <div class="title-underline"></div>

        <table class="bordered">
            <thead>
                <tr>
                    <th>Id_Compte</th>
                    <th>Numero Agence</th>
                    <th>Numero Compte</th>
                    <th>Cle Rib</th>
                    <th>Montant</th>
                    <th>Debut Blocage</th>
                    <th>Fin Blocage</th>
                </tr>
            </thead>

            <?php foreach ($data as $moral) : ?>

                <td><?= $moral->getId(); ?></td>
                <td><?= $moral->getNumAgence();  ?></td>
                <td><?= $moral->getNumCompte();  ?></td>
                <td><?= $moral->getRib();  ?></td>
                <td><?= $moral->getMontant();  ?></td>       
                <td><?= $moral->getDateDebut();  ?></td>
                <td><?= $moral->getDateFin();  ?></td>
                </tr>
            <?php endforeach ?>
        </table>
    </div>
</body>
<style>
    @import url("https://fonts.googleapis.com/css?family=Lobster&display=swap");
body {
  background: linear-gradient(
    90deg,
    rgba(69, 87, 266, 0.9),
    rgba(196, 80, 193, 1)
  );
}
.container {
  max-width: 1100px;
  margin: auto;
  padding: 0 2rem;
  overflow: hidden;
}

h2 {
  padding: 1rem;
  color: #fff;
  text-align: center;
  font-size: 3rem;
  position: relative;
}

.title-underline {
  width: 200px;
  border: 3px solid white;
  position: absolute;
  top: 26%;
  right: 43%;
  border-radius: 7px;
}

table {
  border-collapse: collapse;
  width: 100%;
  text-align: center;
}
table thead {
  font-family: "Lobster", cursive;
  background-color: #000;
  color: #fff;
  font-size: 1.5rem;
}
table th {
  border: 2px solid #ddd;
  padding: 14px 12px;
  color: #fff;
  position: sticky;
  top: 0;
  z-index: 5;
}

table tbody td {
  border: 2px solid #ddd;
  /*    padding: 15px 12px;*/
  color: #fff;
  font-size: 18px;
}

table tr:nth-child(even) {
  background-color: rgba(237, 237, 237, 0.5);
}

table tr:hover {
  background-color: #36314a;
}

table tbody td a {
  display: block;
  padding: 10px;
  text-decoration: none;
  color: #fff;
}
table tbody td a:hover {
  background-color: aqua;
}

</style>
</html>