/**
 * Info module
 */
define(["jquery"], function($) {

	var Info = function () {    
        this.settings = $.extend({}, this.settings);
        this.init();
    };

    Info.prototype = {

	   /**
     	* Settings
     	*/
     	settings : {
			context : $('body'),
			project_info_container: '.pjt-info', 
			project_info_link: '.pm-project-info', 
			project_next_link: '.pm-next-project', 
            project_close_link: '.pi-close',
            main_menu_about : '.i-about', 
            main_menu_contact : '.i-contact', 
            main_menu_close_link: '.mm-close'
		},

		/**
     	 * init
     	 */
		init : function() {
            
        	this.showHideMenu(this.settings.project_info_link, this.settings.project_info_container, this.settings.context);
            this.closeMenu(this.settings.project_info_container, this.settings.project_close_link);
        	//this.scrollToTopOfNextProject(this.settings.project_next_link, this.settings.context);
        },

        /**
     	 * showHideMenu
     	 */
        showHideMenu : function (project_info_link, project_info_container, context) {	  
        	$(project_info_link).on("click", function(e) {
                if (e.preventDefault) { e.preventDefault(); } else { e.returnValue = false; }

                // make sure to only open the info panel of the project you are looking at 
                info_panel = '#' + $(this).closest('.project').attr('id') + ' ' + project_info_container;
	  			var projectinfo = $(info_panel);
			    if (projectinfo.hasClass('visible')){
			        projectinfo.animate({"left":"-1000px"}, "slow").removeClass('visible');
			    } else {
			        projectinfo.animate({"left":"0px"}, "slow").addClass('visible');
			    }
			});
        }, 

        /**
         * closeMenu
         */
        closeMenu : function(project_info_container, project_close_link) {
            $(project_close_link).on("click", function(e) {
                if (e.preventDefault) { e.preventDefault(); } else { e.returnValue = false; }   
                $(project_info_container).animate({"left":"-1000px"}, "slow").removeClass('visible');
            });
        }//, 

        /**
     	 * scrollToTopOfNextProject
     	 
        scrollToTopOfNextProject : function (project_next_link, context) {	  
        	$(project_next_link).on("click", function(e) {
        		if (e.preventDefault) { e.preventDefault(); } else { e.returnValue = false; }

                next_project = $(this).closest('.project').next().context.hash;
                console.log(next_project);

				context.animate({
					scrollTop: $(next_project).offset().top
				}, 500, function () {
					window.location.hash = next_project;
				});
				return false;
			});
        } */
    };

    return {
        init : function() {
            new Info();
        }
    };	
});