<?php

echo '<script type="text/javascript">
    <!-- 
    // spam protected email
    emailE=("enquiries@" + "example.co.uk")
    document.write('<a title="E-mail Example" href="mailto:' + emailE + '">' + emailE + '</a>')
     //-->
    </script>
    <noscript>
        <span class="spam-protected">Email address protected by JavaScript. Please enable JavaScript.</span>
    </noscript>';

?>
