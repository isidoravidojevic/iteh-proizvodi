<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css.css">
    <title>ITEH - PROIZVODI</title>
</head>

<body>


    <table class="table table-bordered table-striped border border-3 border-primary" id="proizvoditabela">
        <thead class="table-primary border-primary">
            <tr>
                <th>ID</th>
                <th>Naziv</th>
                <th>Cena</th>
                <th>Merna Jedinica</th>
                <th>Količina</th>
                <th>Dobavljač</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $konekcija = new mysqli("localhost", "root", "", "proizvodi");
            $sql = "SELECT proizvod.*, dobavljac.naziv as dob_naziv FROM proizvod JOIN dobavljac ON proizvod.dobavljac_id = dobavljac.id";
            $result_set = $konekcija->query($sql);

            while ($p = $result_set->fetch_object()) {
            ?>
                <tr>
                    <td><?php echo $p->id;  ?></td>
                    <td><?php echo $p->naziv;  ?></td>
                    <td><?php echo $p->cena;  ?></td>
                    <td><?php echo $p->merna_jedinica; ?></td>
                    <td><?php echo $p->kolicina; ?></td>
                    <td><?php echo $p->dob_naziv; ?></td>

                </tr>
            <?php } ?>
        </tbody>

    </table>

</body>

</html>