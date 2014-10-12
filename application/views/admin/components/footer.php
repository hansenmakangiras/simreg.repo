<!-- Fides Admin JS -->

        <script type="text/javascript" src="<?php echo base_url('assets/theme/assets/js/minified/aui-production.min.js');?>"></script>

        <script>
            jQuery(window).load(
                    function() {

                        var wait_loading = window.setTimeout(function() {
                            $('#loading').slideUp('fast');
                            jQuery('body').css('overflow', 'auto');
                        }, 1000
                                );

                    });

        </script>
        
    </body>
</html>