$(function(){
//	$( 'textarea.texteditor' ).ckeditor({toolbar:'Full'});
	$( 'textarea.texteditor' ).ckeditor();
	$( 'textarea.mini-texteditor' ).ckeditor({toolbar:'Basic',width:700});
});