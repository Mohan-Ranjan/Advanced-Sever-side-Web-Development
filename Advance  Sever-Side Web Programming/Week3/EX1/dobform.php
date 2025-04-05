<doctype! html>
    <html>
        <head>
            <title>Ask for date of birth</title>
            <!-- use bootstrap CSS framework from CDN -->
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        
        </head>
        <body>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h2>Find out how old you are</h2>
                        <p>
                            Enter your date of birth to find out how old you are...
                        </p>
                        <!-- note here we provide the address of the CI function that will return
                             the webpage that displays the age -->
                        <form action="../index.php/Person/age" method="GET">
                            <div class="form-group col-md-6">
                                <label for="DOB">Enter date of birth as DD-MMM-YYYY</label>
                                <input type="text" class="form-control" id="DOB" name="DOB" placeholder="DD-MM-YYYY">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </body>
    </html>
