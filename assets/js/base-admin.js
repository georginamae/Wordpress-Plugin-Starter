$ = jQuery;

$(function(){
	$(document).ready(function(){
		$('.data-table').DataTable();
		viewReview();
		pvTabs();
		viewFeedback();
	});
});
function viewReview(){
	var _trig = $(".view-review");
	
	var _fname = $("#fname");
	var _lname = $("#lname");
	var _service = $("#service");
	var _recommend = $("#recommend");
	var _experience = $("#experience");
	var _review = $("#review");
	var _summary = $("#review-summary");
	var _state = $("#state");
	var _city = $("#city");
	var _reviewerid = $("#ReviewerID");
	var _reviewid = $("#ReviewID");
	
	_trig.on("click", function () {
	
		_lname.val(($(this).data('lname')));
		_fname.val(($(this).data('fname')));
		_summary.val(($(this).data('summary')));
		_review.val(($(this).data('review')));
		_state.val(($(this).data('state')));
		_city.val(($(this).data('city')));
		_reviewid.val(($(this).data('reviewid')));
		_reviewerid.val(($(this).data('reviewerid')));

		_service.find('option[value='+$(this).data('service')+']').attr('selected',true);
		_recommend.find('option[value='+$(this).data('recommend')+']').attr('selected',true);
		_experience.find('option[value='+$(this).data('experience')+']').attr('selected',true);
		
	});
} 
function viewFeedback(){
	var _trig = $('.view-feedback');
	var _name = $('.feedback_name');
	var _cont = $('.feedback-container');
	 
	_cont.empty();
	
	_trig.on('click',function(){
		_name.html('<b>'+$(this).data('name')+'</b>');
		_cont.load($(this).data('url')+'/ajax-load.php?mode=feedback&id='+$(this).data('id')+'&dir='+$(this).data('dir'));
	});
}
function pvTabs(){
	$('.tab_content').hide();
	$('.tab_content:first').show();
	$('ul.tabs li').click(function () {
		$('.tab_content').hide();
		var activeTab = $(this).attr('rel');
		$('#' + activeTab).fadeIn();
		$('ul.tabs li').removeClass('active');
		$(this).addClass('active');
		$('.tab_drawer_heading').removeClass('d_active');
		$('.tab_drawer_heading[rel^=\'' + activeTab + '\']').addClass('d_active');
	});
	$('.tab_drawer_heading').click(function () {
		$('.tab_content').hide();
		var d_activeTab = $(this).attr('rel');
		$('#' + d_activeTab).fadeIn();
		$('.tab_drawer_heading').removeClass('d_active');
		$(this).addClass('d_active');
		$('ul.tabs li').removeClass('active');
		$('ul.tabs li[rel^=\'' + d_activeTab + '\']').addClass('active');
	});
	$('ul.tabs li').last().addClass('tab_last');
}
