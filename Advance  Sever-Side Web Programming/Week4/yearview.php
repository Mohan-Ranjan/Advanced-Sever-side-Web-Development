<html>
<head>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<style>
    td {
        padding: 10px;
    }
</style>
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-10" id="moviearea">
<h1>Movie search - films released in <?php echo $year ?></h1>
<?php 
    if ($movies === false) {
        // no movies found
?>
    <p> No movies found for this year. </p>
    <p> <a href="/terminator/movies/index.php/Movies">Go back</a> </p>
<?php
    }
    else {
        // display the table of movies
?>
<table>
    <tr>
        <th> Title </th>
        <th> Director </th>
        <th> Genre </th>
    </tr>
<?php
        foreach ($movies as $m) {
            // one movie per table row
            // indexes into movie array come from the array returned from the Moviemodel
?>
    <tr>
        <td> <?php echo $m['title'] ?> </td>
        <td> <?php echo $m['director'] ?> </td>
        <td> <?php echo $m['genre'] ?> </td>
    </tr>
<?php
    
        }
    }
?>
</table>

</div>
</div>
</div>


 
</body>
</html>