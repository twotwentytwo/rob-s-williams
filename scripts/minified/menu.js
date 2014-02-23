/**
 * Info module
 */
define(["jquery"], function($) {

	var Menu = function () {    
        this.settings = $.extend({}, this.settings);
        this.init();
    };

    Menu.prototype = {

	   /**
     	* Settings
     	*/
     	settings : {
			context : $('body'),
            mainmenu_info : '.mm-info',
            mainmenu_close: '.mm-close',
            mainmenu_projects_link : '.i-projects',
            mainmenu_about_link : '.i-about',
            mainmenu_contact_link : '.i-contact',
            mainmenu_projects_panel : '.projects-content',
            mainmenu_about_panel : '.about-content',
            mainmenu_contact_panel : '.contact-content'
		},

		/**
     	 * init
     	 */
		init : function() {

            this.showProjectsPanel(
                this.settings.mainmenu_projects_link,
                this.settings.mainmenu_projects_panel,
                this.settings.mainmenu_about_panel,
                this.settings.mainmenu_contact_panel,
                this.settings.mainmenu_info
            );

        	this.showAboutPanel(
                this.settings.mainmenu_about_link,
                this.settings.mainmenu_about_panel,
                this.settings.mainmenu_projects_panel,
                this.settings.mainmenu_contact_panel,
                this.settings.mainmenu_info
            );

            this.showContactPanel(
                this.settings.mainmenu_contact_link,
                this.settings.mainmenu_contact_panel,
                this.settings.mainmenu_projects_panel,
                this.settings.mainmenu_about_panel,
                this.settings.mainmenu_info
            );

            this.closeInfoPanel(this.settings.mainmenu_info, this.settings.mainmenu_close);

        	//this.scrollToTopOfNextProject(this.settings.mainmenu_projects, this.settings.projects_start, this.settings.context);
        },

        /**
         * showProjectsPanel
         */
        showProjectsPanel : function (mainmenu_projects_link, mainmenu_projects_panel, mainmenu_about_panel, mainmenu_contact_panel, mainmenu_info) {    
            $(mainmenu_projects_link).on("click", function(e) {
                if (e.preventDefault) { e.preventDefault(); } else { e.returnValue = false; }

                // hide the contact panel
                $(mainmenu_contact_panel).hide();
                $(mainmenu_about_panel).hide();
                // make an object of the info panel
                var mainmenu_info_panel = $(mainmenu_info);
                mainmenu_info_panel.animate({"left":"0px"}, "slow").addClass('visible');
                $(mainmenu_projects_panel).fadeIn(1000);
            });
        }, 

        /**
     	 * showAboutPanel
     	 */
        showAboutPanel : function (mainmenu_about_link, mainmenu_about_panel, mainmenu_projects_panel, mainmenu_contact_panel, mainmenu_info) {	  
        	$(mainmenu_about_link).on("click", function(e) {
                if (e.preventDefault) { e.preventDefault(); } else { e.returnValue = false; }
                $(mainmenu_projects_panel).hide();
                $(mainmenu_contact_panel).hide();
                var mainmenu_info_panel = $(mainmenu_info);
                mainmenu_info_panel.animate({"left":"0px"}, "slow").addClass('visible');
                $(mainmenu_about_panel).fadeIn(1000);
			});
        }, 

        /**
         * showContactPanel
         */
        showContactPanel : function (mainmenu_contact_link, mainmenu_contact_panel, mainmenu_projects_panel, mainmenu_about_panel, mainmenu_info) {      
            $(mainmenu_contact_link).on("click", function(e) {
                if (e.preventDefault) { e.preventDefault(); } else { e.returnValue = false; }
                $(mainmenu_about_panel).hide();
                $(mainmenu_projects_panel).hide();
                var mainmenu_info_panel = $(mainmenu_info);
                mainmenu_info_panel.animate({"left":"0px"}, "slow").addClass('visible');
                $(mainmenu_contact_panel).fadeIn();
            });
        }, 

        /**
         * closeInfoPanel
         */
        closeInfoPanel : function (mainmenu_info, mainmenu_close) {    
            $(mainmenu_close).on("click", function(e) {
                if (e.preventDefault) { e.preventDefault(); } else { e.returnValue = false; }
                var mainmenu_info_panel = $(mainmenu_info);
                mainmenu_info_panel.animate({"left":"-1000px"}, "slow").removeClass('visible');
            });
        }//,

        /**
     	 * scrollToTopOfNextProject
     	 */
        /*scrollToTopOfNextProject : function (mainmenu_projects, projects_start, context) {	  
        	$(mainmenu_projects).on("click", function(e) {
        		if (e.preventDefault) { e.preventDefault(); } else { e.returnValue = false; }
				context.animate({
					scrollTop: $(projects_start).offset().top
				}, 500, function () {
					window.location.hash = projects_start;
				});
				return false;
			});
        }*/
    };

    return {
        init : function() {
            new Menu();
        }
    };	
});