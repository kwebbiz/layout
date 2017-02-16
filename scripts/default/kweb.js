$$(document).ready(
    function()
    {
        /*----------------------------------------------------------
         Scrollbar
         -----------------------------------------------------------*/
        function scrollBar(selector, theme, mousewheelaxis) {
            $$(selector).mCustomScrollbar({
                theme: theme,
                scrollInertia: 100,
                axis:'yx',
                mouseWheel: {
                    enable: true,
                    axis: mousewheelaxis,
                    preventDefault: true
                }
            });
        }

        if (!$$('html').hasClass('ismobile')) {
            //On Custom Class
            if ($$('.c-overflow')[0]) {
                scrollBar('.c-overflow', 'minimal-dark', 'y');
            }
        }

        /*-----------------------------------------------------------
         Waves
         -----------------------------------------------------------*/
        (function(){
            Waves.attach('.btn:not(.btn-icon):not(.btn-float)');
            Waves.attach('.btn-icon, .btn-float', ['waves-circle', 'waves-float']);
            Waves.init();
        })();


        /*----------------------------------------------------------
         Text Field
         -----------------------------------------------------------*/

        //Add blue animated border and remove with condition when focus and blur
        if($$('.fg-line')[0]) {
            $$('body').on('focus', '.fg-line .form-control', function(){
                $$(this).closest('.fg-line').addClass('fg-toggled');
            })

            $$('body').on('blur', '.form-control', function(){
                var p = $$(this).closest('.form-group, .input-group');
                var i = p.find('.form-control').val();

                if (p.hasClass('fg-float')) {
                    if (i.length == 0) {
                        $$(this).closest('.fg-line').removeClass('fg-toggled');
                    }
                }
                else {
                    $$(this).closest('.fg-line').removeClass('fg-toggled');
                }
            });
        }

        /**
         * To top
         */

        jQuery('#totop').click(
            function()
            {
                jQuery('html,body').animate({scrollTop:0},'slow');
                return false;
            }
        );


        if ( (jQuery(window).height() + 100) < jQuery(document).height() ) {
            jQuery('#top-link-block').removeClass('hidden').affix({
                offset: {top:100}
            });
        };

        jQuery('#myAffix').affix({
            offset: {
                top: 150,
                bottom: function () {
                    return (this.bottom = jQuery('.page-footer').outerHeight(true))
                }
            }
        });

    }
)