/*   
Template Name: Source Admin - Responsive Admin Dashboard Template build with Twitter Bootstrap 3.3.7 & Bootstrap 4
Version: 1.5.0
Author: Sean Ngu
Website: http://www.seantheme.com/source-admin-v1.5/admin/
*/

var handleMobileEmailSidebarToggle = function() {
	"use strict";
	
	if ($('[data-toggle="email-sidebar"]').length !== 0) {
        $(document).on('click', '[data-toggle="email-sidebar"]', function(e) {
            e.preventDefault();
            if ($(this).closest('.dropdown').hasClass('open')) {
                $(this).closest('.dropdown').removeClass('open');
            } else {
                $(this).closest('.dropdown').addClass('open');
            }
        });
    }
};

var handleCheckboxToggle = function() {
	"use strict";
	
	if ($('[data-toggle="email-checkbox"]').length !== 0) {
        $(document).on('click', '[data-toggle="email-checkbox"]', function(e) {
            e.preventDefault();
        
            var targetCheckbox = $(this).closest('.email-checkbox').find('input[type="checkbox"]');
            var targetRow = $(this).closest('tr');
        
            if ($(targetCheckbox).is(':checked')) {
                $(targetCheckbox).prop('checked', false);
                $(targetRow).removeClass('checked');
            } else {
                $(targetCheckbox).prop('checked', true);
                $(targetRow).addClass('checked');
            }
        });
    }
};

var handleCheckboxCheckedAll = function() {
	"use strict";
	
	if ($('[data-click="check-all"]').length !== 0) {
    	$(document).on('click', '[data-click="check-all"]', function(e) {
            e.preventDefault();
        
            var targetCheckbox = $(this).find('i');
        
            if ($(targetCheckbox).hasClass('fa-square')) {
                $(targetCheckbox).removeClass('fa-square').addClass('fa-check-square text-inverse');
                $('.email-checkbox').find('input[type="checkbox"]').prop('checked', false);
                $('[data-toggle="email-checkbox"]').click();
            } else {
                $(targetCheckbox).removeClass('fa-check-square text-inverse').addClass('fa-square');
                $('.email-checkbox').find('input[type="checkbox"]').prop('checked', true);
                $('[data-toggle="email-checkbox"]').click();
            }
        });
	}
};

var handleSummernoteActivation = function() {
    "use strict";
    
	if ($('#mail-compose-box').length !== 0) {
        var targetOffset = $('#mail-compose-box').offset();
        var targetHeight = $(window).height() - targetOffset.top - 66;
            targetHeight = ($(window).width() < 768) ? 400 : targetHeight;
        $('#mail-compose-box').summernote({
            height: targetHeight,
        });
    }
};

    
/* Application Controller
------------------------------------------------ */
var PageDemo = function () {
	"use strict";
	
	return {
		//main function
		init: function () {
            handleMobileEmailSidebarToggle();
            handleCheckboxToggle();
            handleCheckboxCheckedAll();
            handleSummernoteActivation();
		}
    };
}();