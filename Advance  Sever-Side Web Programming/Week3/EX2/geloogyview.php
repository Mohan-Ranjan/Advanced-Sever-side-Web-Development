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
                <h2>Geological Periods with Dinosaurs!</h2>
                <div>
                    <p>Ages of the Dinosaurs (The Mesozoic Era)
                </div>
                <table>
                    <tr>
                        <td><a href="<?php echo base_url() ?>index.php/Dinosaurs/getinfo/Triassic">Triassic</a> </td>
                        
                    </tr>
                    <tr>
                        <td> <a href="<?php echo base_url() ?>index.php/Dinosaurs/getinfo/Jurassic">Jurassic </a></td>
                        
                    </tr>
                    <tr>
                        <td> <a href="<?php echo base_url() ?>index.php/Dinosaurs/getinfo/Cretaceous">Cretaceous </a> </td>
                        
                    </tr>
                </table>
            </div>
        </div>
    </div>
</body>
</html>