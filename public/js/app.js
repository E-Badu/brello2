"use strict";

console.log('Hello');

var LaneModel = Backbone.Model.extend({

	urlRoot:"/lanes"
})


var subredditsListView = new SubbredditsListView({ collection: subbreddits});

subbredditsListView render();

$('#all-subbreddits').html(subbredditsListView.el);

return this;

var SubbredditsListView = Backbone.View.extend({
	el: '<ul></ul>',

	template:_.template('\
	<% subbreddits.each(function(subbreddit){ %>\
	<li><a href="#"> <$= subbreddit.get("name")$></a></li>\
	<% }) %>\
		'),

	render: function(){

		this.$el.html(template({subbreddits: this.collection};
	}

})


