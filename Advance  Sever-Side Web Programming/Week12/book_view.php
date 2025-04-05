<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/backbone.js/1.2.3/backbone-min.js"></script>
</head>
<body>
    <!-- Exercise 3 -->
    <div id="exercise3">
        <form id="bookForm">
            <input type="text" id="bookIdInput">
            <button type="submit">Fetch Book Details</button>
        </form>
        <div id="bookDetails"></div>
    </div>

    <script>
        var BookModel = Backbone.Model.extend({
            urlRoot: '/books/get_book/' // Replace with the appropriate URL
        });

        var BookView = Backbone.View.extend({
            el: '#exercise3',
            events: {
                'submit #bookForm': 'fetchBookDetails'
            },
            fetchBookDetails: function (event) {
                event.preventDefault();
                var bookId = $('#bookIdInput').val();
                var book = new BookModel({ id: bookId });
                var self = this;
                book.fetch({
                    success: function (model, response) {
                        self.render(model);
                    },
                    error: function (model, response) {
                        $('#bookDetails').html("Error: " + response.status);
                    }
                });
            },
            render: function (book) {
                $('#bookDetails').html(JSON.stringify(book.toJSON()));
            }
        });

        var bookView = new BookView();
    </script>
</body>
</html>
