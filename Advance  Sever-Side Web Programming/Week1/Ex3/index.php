<doctype! html>
    <html>
        <head>
            <title>Find book</title>
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        </head>
        <body>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
<?php

    // if we don't have form data, then we build the form.  If we *do* have form data, then we assume
    // that we have been called from the form, and so connect to database and query it with
    // the form data.  Then output results.

    if (!isset($_POST['title']) && !isset($_POST['author']) && !isset($_POST['year'])) {
        // no form data for title of book, author and year of publication, so build form
?>
                        <h2>Find book</h2>
                        <p>Enter at least one of title, author, and year of publication </p>
                        <form method="POST">
                           <!-- by not specifying an action, the data will be submitted to
                                the same program that built the form in the first place -->
                            <div class="form-group col-md-6">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="title" placeholder="Enter book title">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="author">Author</label>
                                <input type="text" class="form-control" id="author" name="author" placeholder="Enter author">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="year">Author</label>
                                <input type="text" class="form-control" id="year" name="year" placeholder="Enter year of publication">
                            </div>
                            <!-- https://getbootstrap.com/docs/4.0/components/buttons/ - button styling -->
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>



<?php
    }
    else {
        $title = filter_var($_POST["title"],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $author = filter_var($_POST["author"],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        $year = filter_var($_POST["year"],FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        // handle connect to database
        // insert your own db hostname, username, password and database name
        $conn = mysqli_connect('db_hostname','db_username','db_password','db_name');
        if (!$conn) {
?>
            <strong>Unable to connect to database</strong>
<?php
        }
        else {
            $query = "SELECT * FROM BOOKS WHERE ";
            $clauses = array();
            if ($title != '') {
                $clauses[] = "title='$title'";
            }
            if ($author != '') {
                $clauses[] = "author='$author'";
            }
            if ($year != '') {
                $clauses[] = "pubyear=$year";
            }
            $wheres = join(' AND ',$clauses);
            $query .= $wheres;
            $res = mysqli_query($conn,$query);
?>
            <table>
                <tr>
                    <th>Title</th>
                    <th>Author</th>
                    <th>Year of publication</th>
                </tr>
<?php
            while ($row = $res->fetch_assoc()) {
?>
                <tr>
                    <!-- the indexes are names of database columns from the books table -->
                    <td><?php echo $row['title'] ?></td>
                    <td><?php echo $row['author'] ?></td>
                    <td><?php echo $row['pubyear'] ?></td>
                </tr>
<?php
            }
            $res->free_result();
            mysqli_close($conn);
        }
?>
        </table>
        <div>
           <p><a href="">Click here to search again</a></p>
        </div>
<?php
    }
?>

</div> <!-- col-md-12 -->
                </div> <!-- row -->
                

            </div> <!-- container -->
            
        </body>
    </html>