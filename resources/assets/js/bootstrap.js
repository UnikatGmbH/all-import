window._ = require("lodash");

try {
	window.$ = window.jQuery = require("jquery");
	require("jquery-ui/ui/widgets/draggable");
	require("jquery-ui/ui/widgets/droppable");
} catch (e) {
}

// $('.draggable').draggable();

$(document).ready(function() {
	$(".draggable").draggable({
		revert: true
	}, "snap", ".droppable");
	$(".droppable").droppable({
		hoverClass: "bg-blue",
		drop: function(event, ui) {
			$(this).val($(ui.draggable).data('field'));
		}
	});
});
