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
        <h2>Clients Moraux</h2>
        <div class="title-underline"></div>

        <table class="bordered">
            <thead>
                <tr>
                    <th>IdEmployeur</th>
                    <th>Nom de l'Employeur</th>
                    <th>Ninea</th>
                    <th>RC</th>
                    <th>Raison Sociale</th>
                    <th>Adresse</th>
                    <th>Action</th>
                    <th>Action</th>
                </tr>
            </thead>

            <?php foreach ($data as $moral) : ?>

                <td><?= $moral->getId(); ?></td>
                <td><?= $moral->getNomEmpl();  ?></td>
                <td><?= $moral->getNinea();  ?></td>
                <td><?= $moral->getRc();  ?></td>
                <td><?= $moral->getRaisonSocial();  ?></td>
                <td><?= $moral->getAdressEmpl();  ?></td>
                <td><a href="../Moral/edit/<?= $moral->getId(); ?>">Editer</a></td>
                <td><a href="../Moral/delete/<?= $moral->getId(); ?>" onclick="return confirm('Voulez-vous supprimer')">Supprimer</a></td>
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