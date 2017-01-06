<!--Script open Intercom chat box -->
<!--
https://developers.intercom.com/reference#update-lead
https://github.com/intercom/intercom-php
-->
<?php
        if(isset($current_user)){
            ?>
            <?php if(!empty($current_user->name)) { ?>
                <!-- Intercom SDK for login user -->
                <!-- login to Intercom chat-->


                <script>
                    window.intercomSettings = {
                        app_id: "v8m8hova",
                        name: "<?php echo $current_user->name; ?>", // Full name (need if Engage Onn)
                        email: "<?php echo $current_user->email; ?>", // Email address (need if Engage Onn)
                        created_at: "<?php echo $current_user->created_at; ?>" // Signup date as a Unix timestamp (need if Engage Onn)

                    };
                </script>
                <script>(function(){var w=window;var ic=w.Intercom;if(typeof ic==="function"){ic('reattach_activator');ic('update',intercomSettings);}else{var d=document;var i=function(){i.c(arguments)};i.q=[];i.c=function(args){i.q.push(args)};w.Intercom=i;function l(){var s=d.createElement('script');s.type='text/javascript';s.async=true;s.src='https://widget.intercom.io/widget/v8m8hova';var x=d.getElementsByTagName('script')[0];x.parentNode.insertBefore(s,x);}if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})()</script>

            <?php } ?>
        <?php } ?>