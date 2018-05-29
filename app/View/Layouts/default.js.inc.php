<?php
$js_files = array(
    JS . 'libs/jquery.js',
	JS . 'libs/bootstrap-tab.js',
	JS . 'libs/bootstrap-dropdown.js',
	JS . 'libs/bootstrap-collapse.js',
	JS . 'libs/bootstrap-tooltip.js',
	JS . 'libs/bootstrap-affix.js',
	JS . 'libs/bootstrap-modal.js',
	JS . 'libs/bootstrap-alert.js',
	JS . 'libs/bootstrap-datetimepicker.min.js',
	JS . 'libs/bootstrap-popover.js',
    JS . 'libs/jquery.cookie.js',	
    JS . 'libs/jquery.lazyload.mini.js',
    JS . 'libs/jquery.form.js',
	JS . 'libs/jquery.blockUI.js',
	JS . 'libs/jquery-ui-1.10.3.custom.js',
	JS . 'libs/jquery.scrollTo.js',
	JS . 'libs/jquery.metadata.js',
	JS . 'libs/jquery.uploader.js',
	JS . 'libs/AC_RunActiveContent.js',
	JS . 'libs/jquery.autogeocomplete.js',
	JS . 'libs/jquery.fuploader.js',
	JS . 'libs/jquery.slideViewerPro.1.0.js',		
	JS . 'libs/jquery.simplyCountable.js',	
	JS . 'libs/jquery.overlabel.js',
	JS . 'libs/date.format.js',
	JS . 'libs/jquery.flash.js',
	JS . 'libs/iepngfix_tilebg.js',
    JS . 'libs/jquery.oauthpopup.js',
	JS . 'libs/bootstrap-carousel.js',
	JS . 'libs/jquery.easytabs.min.js',
	JS . 'libs/highcharts.js',
	JS . 'libs/bootstro.js',
	JS . 'libs/markerclusterer.js',
	JS . 'libs/jquery.pjax.js',
	JS . 'libs/jquery.easy-pie-chart.min.js',
	JS . 'libs/jquery.sparkline.min.js',
	JS . 'libs/jquery.payment.js',
	JS . 'libs/socialite.js',
	JS . 'libs/uploader/load-image.min.js',
	JS . 'libs/uploader/canvas-to-blob.min.js',	
	JS . 'libs/uploader/tmpl.min.js',
	JS . 'libs/uploader/jquery.iframe-transport.js',
	JS . 'libs/uploader/jquery.fileupload.js',
	JS . 'libs/uploader/jquery.fileupload-process.js',
	JS . 'libs/uploader/jquery.fileupload-image.js',
	JS . 'libs/uploader/jquery.fileupload-validate.js',
	JS . 'libs/uploader/jquery.fileupload-ui.js',
	JS . 'libs/uploader/locale.js',
	JS . 'common.js'
); 
$js_files = Set::merge($js_files, Configure::read('site.default.js_files'));    
?>