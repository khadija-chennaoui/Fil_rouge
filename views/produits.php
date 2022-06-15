<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">

<head>
  <meta charset="UTF-8">
  <!--<title> Responsiive Admin Dashboard | CodingLab </title>-->
  <link rel="stylesheet" href="views/assets/css/styl2.css">
  <!-- Boxicons CDN Link -->
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  <link rel="stylesheet" type="text/css" href="http://parsleyjs.org/src/parsley.css" />
</head>

<body>
  <section class="home-section">
    <nav>
      <div class="sidebar-button">
        <i class='bx bx-menu sidebarBtn'></i>
        <span class="dashboard">Dashboard</span>
      </div>
    </nav>
    <div class="home-content">
      <div class="sales-boxes d-flex justify-content-center ">
        <div class="recent-sales box">
          <div class="title">Les Produits</div>
          <div class="table-responsive">
            <table class="table table-hover" id="myTable">
              <thead>
                <tr>
                  <th scope="col">Image</th>
                  <th scope="col">Nom</th>
                  <th scope="col">prix</th>
                  <th scope="col">Quantité</th>
                  <th scope="col">Modifier</th>
                  <th scope="col">suprimer</th>
                </tr>
              </thead>
              <tbody>
                <?php $produitcontrol = new ProduitController();
                $produit = $produitcontrol->getProduit();
                foreach ($produit as $rows) {
                ?>
                  <tr>
                    <td hidden data-target="id"> <?= $rows['id']; ?> </td>
                    <td data-target="image"><img src="views\assets\img\product\<?= $rows['image'] ?>" style="width: 55px;height: 58px;" alt=""> </td>
                    <td data-target="nom"><?= $rows['nom']?></td>
                    <td data-target="prix"><?= $rows['prix']?></td>
                    <td data-target="quanti"><?= $rows['quanti']?></td>
                    <td>
                      <a href="" class="fa fa-refresh fs-2 link-info update"  style="color:primary;" data-bs-toggle="modal" data-bs-target="#myModel"  value="<?= $rows['id'] ?>"></a>
                    </td>
                    <td>
                      <form action="operation" method="POST"><button type="submit" name="deletproduit" class="fa fa-trash fs-2 link-danger" data-toggle="modal"><input type="text" hidden name="id" value="<?= $rows['id'] ?>"></button></form>
                    </td>
                  </tr>
                <?php } ?>
              </tbody>
            </table>
          </div>
          <div class="button">
            <button type="button" class="btn btn-dark" data-bs-toggle="modal" data-bs-target="#ajouterpro">Ajouter un produit</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Button trigger modal -->
    <!-- Modal  d'ajout-->
    <div class="modal fade" id="ajouterpro" data-bs-backdrop="ajouterprpLabel" data-bs-keyboard="false" tabindex="-1" aria-labelledby="ajouterprpLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="ajouterprpLabel">Ajouter Les Produit</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="operation" method="POST" data-parsley-validate>
              <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input class="form-control" name="image" type="file" id="image" required data-parsley-trigger="change">
              </div>
              <div class="mb-3">
                <label for="nom" class="form-label">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" data-parsley-length="[4, 20]" data-parsley-trigger="change" required>
              </div>
              <div class="mb-3">
                <label for="prix" class="form-label">Prix</label>
                <input type="text" class="form-control" id="prix" name="prix" required data-parsley-trigger="change" data-parsley-type="digits">
              </div>
              <div class="mb-3">
                <label for="quanti" class="form-label">Quantité</label>
                <input type="text" class="form-control" id="quanti" name="quanti" required data-parsley-type="digits" data-parsley-trigger="change">
              </div>
              <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" name="saveproduit" class="btn btn-primary">Save</button>
          </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- Model updeat -->
    <div class="modal fade" id="myModel" data-bs-backdrop="exampleModalLabel" data-bs-keyboard="false" tabindex="-1" aria-labelledby="myModelLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Updeat</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form action="operation" method="POST" data-parsley-validate>
            <div class="mb-3">
                <input class="form-control" hidden type="text" name="id" id="id" >
              </div>
             
              <div class="mb-3">
                <label for="image" class="form-label">nom</label>
                <input class="form-control" type="text" name="nom" id="nomproduit" data-parsley-length="[4, 20]" required data-parsley-trigger="change">
              </div>
              <div class="mb-3">
                <label for="prix" class="form-label">Prix</label>
                <input type="text" class="form-control"name="prix" id="prixp" required data-parsley-trigger="change" data-parsley-type="digits">
              </div>
              <div class="mb-3">
                <label for="quanti" class="form-label">Quantité</label>
                <input type="text" class="form-control" name="quanti" id="quantip" required data-parsley-trigger="change" data-parsley-type="digits">
              </div>
              <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                
                <input class="form-control" type="file" name="image" id="imagep" required data-parsley-trigger="change">
              </div>
              <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" name="bntupdate" class="btn btn-primary">Updeat</button>
          </div>
            </form>
          </div>
        
        </div>
      </div>
    </div>
  </section>


  <script>
    $(document).ready(function() {
      $("#myTable").on('click', '.update', function() {
        var currentRow = $(this).closest("tr");
        $('#id').val(currentRow.find("td:eq(0)").text());
        $('#nomproduit').val(currentRow.find("td:eq(2)").text());
        $('#prixp').val(currentRow.find("td:eq(3)").text());
        $('#quantip').val(currentRow.find("td:eq(4)").text());
        $('#imagep').val(currentRow.find("td:eq(1)").text());
      })
    })
  </script>

  <script>
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".sidebarBtn");
    sidebarBtn.onclick = function() {
      sidebar.classList.toggle("active");
      if (sidebar.classList.contains("active")) {
        sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
      } else
        sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
    }
  </script>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/parsley.js/2.9.2/parsley.min.js"></script>
</body>

</html>