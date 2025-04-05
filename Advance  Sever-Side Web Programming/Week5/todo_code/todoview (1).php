<!DOCTYPE html>
    <html lang="en">
    <head>
        <title>To Do List</title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	    <link href='https://fonts.googleapis.com/css?family=Libre+Baskerville' rel='stylesheet' type='text/css'>
		
    </head>
    <body>
        <div class="container" style="margin-top:20px">
            <div class="row">
                <div class="col-md-8">
                    <h2>Add to My To Do List</h2>
                    <form method=POST action="<?php echo base_url() ?>index.php/todo/add" method="GET">
                    <input class="form-control" type=text name="action" placeholder="Action">
                    <input class="btn btn-default" type=submit value="Add action">
                    </form>
                
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <h2>My To Do List</h2>
                    <table class="table">
                    <?php
                        if ($actions !== false) {
                            foreach ($actions as $a) {
                                ?>
                                    <tr>
                                        <td>
                                            <?php echo $a ?>
                                        </td>
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