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
            mainmenu_projects : '.i-projects',
            mainmenu_info : '.mm-info',
            mainmenu_close: '.mm-close',
            mainmenu_about_link : '.i-about',
            mainmenu_contact_link : '.i-contact',
            mainmenu_about_panel : '.about-content',
            mainmenu_contact_panel : '.contact-content', 
            projects_start : '#ben_eine'
		},

		/**
     	 * init
     	 */
		init : function() {
        	this.showAboutPanel(
                this.settings.mainmenu_about_link,
                this.settings.mainmenu_about_panel,
                this.settings.mainmenu_contact_panel,
                this.settings.mainmenu_info
            );

            this.showContactPanel(
                this.settings.mainmenu_contact_link,
                this.settings.mainmenu_contact_panel,
                this.settings.mainmenu_about_panel,
                this.settings.mainmenu_info
            );

            this.closeInfoPanel(this.settings.mainmenu_info, this.settings.mainmenu_close);

        	this.scrollToTopOfNextProject(this.settings.mainmenu_projects, this.settings.projects_start, this.settings.context);
        },

        /**
     	 * showAboutPanel
     	 */
        showAboutPanel : function (mainmenu_about_link, mainmenu_about_panel, mainmenu_contact_panel, mainmenu_info) {	  
        	$(mainmenu_about_link).on("click", function(e) {
                if (e.preventDefault) { e.preventDefault(); } else { e.returnValue = false; }

                // hide the contact panel
                $(mainmenu_contact_panel).hide();

                // make an object of the info panel
                var mainmenu_info_panel = $(mainmenu_info);

                mainmenu_info_panel.animate({"left":"0px"}, "slow").addClass('visible');

                //fade out the contact and fade in the about
                $(mainmenu_contact_panel).fadeOut(1000, function() {
                    $(mainmenu_about_panel).fadeIn(1000);
                });
			});
        }, 

        /**
         * showContactPanel
         */
        showContactPanel : function (mainmenu_contact_link, mainmenu_contact_panel, mainmenu_about_panel, mainmenu_info) {      
            $(mainmenu_contact_link).on("click", function(e) {
                if (e.preventDefault) { e.preventDefault(); } else { e.returnValue = false; }

                // hide the about panel
                $(mainmenu_about_panel).hide();

                // make an object of the info panel
                var mainmenu_info_panel = $(mainmenu_info);

                // close the info panel and set the contact panel state to f
                mainmenu_info_panel.animate({"left":"0px"}, "slow").addClass('visible');

                //fade out the about and fade in the contact
                $(mainmenu_about_panel).fadeOut('fast', function() {
                    $(mainmenu_contact_panel).fadeIn();
                });
            });
        }, 

        /**
         * scrollToTopOfNextProject
         */
        closeInfoPanel : function (mainmenu_info, mainmenu_close) {    
            $(mainmenu_close).on("click", function(e) {
                if (e.preventDefault) { e.preventDefault(); } else { e.returnValue = false; }
                var mainmenu_info_panel = $(mainmenu_info);
                mainmenu_info_panel.animate({"left":"-1000px"}, "slow").removeClass('visible');
            });
        },

        /**
     	 * scrollToTopOfNextProject
     	 */
        scrollToTopOfNextProject : function (mainmenu_projects, projects_start, context) {	  
        	$(mainmenu_projects).on("click", function(e) {
        		if (e.preventDefault) { e.preventDefault(); } else { e.returnValue = false; }
				context.animate({
					scrollTop: $(projects_start).offset().top
				}, 500, function () {
					window.location.hash = projects_start;
				});
				return false;
			});
        }
    };

    return {
        init : function() {
            new Menu();
        }
    };	
});