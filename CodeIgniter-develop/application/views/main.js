$(function() {
    var Bookmark = Backbone.Model.extend({
        defaults: {
            title: '',
            url: '',
            tags: ''
        }
    });

    var BookmarkList = Backbone.Collection.extend({
        model: Bookmark,
        url: '/bookmarks'
    });

    var BookmarkView = Backbone.View.extend({
        tagName: 'div',
        template: _.template($('#bookmark-template').html()),

        render: function() {
            this.$el.html(this.template(this.model.toJSON()));
            return this;
        }
    });

    var AppView = Backbone.View.extend({
        el: '#app',

        initialize: function() {
            this.listenTo(bookmarks, 'add', this.addOne);
            this.listenTo(bookmarks, 'reset', this.addAll);
            bookmarks.fetch();
        },

        addOne: function(bookmark) {
            var view = new BookmarkView({ model: bookmark });
            $('#bookmark-list').append(view.render().el);
        },

        addAll: function() {
            bookmarks.each(this.addOne, this);
        }
    });

    var bookmarks = new BookmarkList;
    var app = new AppView;
});
