<doctype! html>
    <html>
        <head>
            <title>Your age</title>
            <!-- use bootstrap CSS framework from CDN -->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        </head>
        <body>
            <div class="container">
                <!-- 
                    see https://getbootstrap.com/docs/4.0/layout/grid/
                    for bootstrap page layout styles
                -->
                <div class="row">
                    <div class="col-md-12">
                        <h2>Your age</h2>
                        <p>
                            You are <?php echo $yourAge ?> years old.  Congratulations!    
                        </p>
                        
                    </div>
                </div>
            </div>
        </body>
    </html>
