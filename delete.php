
<?php
include "db.php";
if($_SERVER["REQUEST_METHOD"] === "POST"){
$p_id=$_POST["p_id"];
$sql=$conn->prepare("delete from products where p_id=?");
$sql->bind_param('i',$p_id);
if ($sql->execute()) {
   header("Location:home.php");
}
}
?>

<!doctype html>
<html lang="en" data-bs-theme="light">
    <head>
        <title>Title</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />

        <!-- Bootstrap CSS v5.3.8 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
            crossorigin="anonymous"
        />
    </head>

    <body>
        <header>
            <!-- place navbar here -->
        </header>
        <main>
        
            <div
                class="container text-center mt-5"
            >
                <h2>Delete Products</h2>
            </div>
            
        
            <div
                class="container border mt-5 p-4 col-6 shadow"
            >
                <form method="POST">
                    <div class="mb-3">
                        <label for="" class="form-label">Product Id</label>
                        <input
                            type="number"
                            class="form-control"
                            name="p_id"
                            id=""
                            aria-describedby="helpId"
                            placeholder=""
                        />
                       
                    </div>   
                   
                   <button
                    type="submit"
                    class="btn btn-primary"
                   >
                    Submit
                   </button>
                   
                   
                    
                </form>
            </div>
            
        </main>
        <footer>
            <!-- place footer here -->
        </footer>
        <!-- Bootstrap JavaScript Bundle (includes Popper) -->
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI"
            crossorigin="anonymous"
        ></script>
    </body>
</html>





