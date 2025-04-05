<!doctype html>
<!-- A very basic webpage.
     The file extension is always ".php" for CodeIgniter views,
     even if the file only contains HTML.
-->
<html>
<head>
            <title>Geological Periods</title>
            <!-- use bootstrap CSS framework from CDN -->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        </head>
<body>
    <div class="container">
                
        <div class="row">
            <div class="col-md-12">
                <h2>The <?php echo $periodName ?> period</h2>
                <table>
                    <tr>
                        <td style="padding-right:30px"> <strong>Period</strong></td>
                        <td> <?php echo $period ?></td>
                        
                    </tr>
                    <tr>
                        <td style="padding-right:30px"> <strong>Land Animals</strong></td>
                        <td> <?php echo $landAnimals ?></td>
                    </tr>
                    <tr>
                        <td style="padding-right:30px"> <strong>Marine Animals</strong></td>
                        <td> <?php echo $marineAnimals ?></td>
                    </tr>
                    <tr>
                        <td style="padding-right:30px"> <strong>Avian Animals</strong></td>
                        <td> <?php echo $avianAnimals ?></td>
                        
                    </tr>
                    <tr>
                        <td style="padding-right:30px"> <strong>Plant Life</strong> </td>
                        <td> <?php echo $plantLife ?></td>
                        
                    </tr>
                </table>
                <div style="margin-top:20px">
                    <p> Go back to the <a href="<?php echo base_url() ?>index.php/Dinosaurs/periods">main page </a></p>
                </div>
            </div>
        </div>
    </div>               
</body>
</html>