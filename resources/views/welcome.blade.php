<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/skeleton/2.0.4/skeleton.min.css" rel="stylesheet" type="text/css">
        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Laravel 5</div>
            </div>
        </div>
         <script text="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.min.js"></script>
       <script text="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/underscore.js/1.8.3/underscore-min.js"></script>
       <script text="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/backbone.js/1.3.2/backbone-min.js"></script>
         <script>
           var LaneModel = Backbone.Model.extend({urlRoot:"/lanes"});
           var LanesCollection = Backbone.Collection.extend({url:"/lanes", model:LaneModel})
           /** 
            snippets added in class, Originally meant for Breddit
           var HomeView = Backbone.View.extend({
            el:'\
                <div class="container">\
                    <div class="row">\
                        <div class =" three columns">three cols</div>\
                        <div class="six columns">\
                            <div class="row">\
                                <div class="twelve columns"></div>\
                            </div>\
                            <div class="row">\
                                <div class="twelve columns"></div>\
                            </div>\
                        </div>\   
        '
        
        render: function() {
            this.$el.html(this.template({ subbreddits: this.collection}));
            return this:
        }

        });   **/


        </script>
    </body>
</html>


<!-- todoLane.set({name:"Done"});

var LanesCollection = Backbone.Collection.extend({
    url:"\lanes"
    model:LaneModel
})
-->