        <div class="nav">
            <h2>Functions</h2>
            <ul>
                <li><div><a<?php if($_GET['action'] == 'start'){echo ' class="li-active"';} ?> href="/views/?action=start" target="_blank">Start transaction (init, start)</a></div></li>
                <li><div><a<?php if($_GET['action'] == 'result'){echo ' class="li-active"';} ?> href="/views/?action=result" target="_blank">Get result (result)</a></div></li>
                <li><div><a<?php if($_GET['action'] == 'close'){echo ' class="li-active"';} ?> href="/views/?action=close" target="_blank">Allow/Revoke two-step transaction (close)</a></div></li>
                <li><div><a<?php if($_GET['action'] == 'details'){echo ' class="li-active"';} ?> href="/views/?action=details" target="_blank">Get details (details)</a></div></li>
                <li><div><a<?php if($_GET['action'] == 'refund'){echo ' class="li-active"';} ?> href="/views/?action=refund" target="_blank">Refund (refund)</a></div></li>
                <li><div><a<?php if($_GET['action'] == 'selectOcp'){echo ' class="li-active"';} ?> href="/views/?action=selectOcp" target="_blank">One Click Payment (without any intermediate page)</a></div></li>
                <li><div><a<?php if($_GET['action'] == 'startRP'){echo ' class="li-active"';} ?> href="/views/?action=startRP" target="_blank">Start recurring payment (initRP, startRP)</a></div></li>
                <li><div><a<?php if($_GET['action'] == 'invoice'){echo ' class="li-active"';} ?> href="/views/?action=invoice" target="_blank">Invoice (invoice)</a></div></li>
            </ul>
        </div><!-- /.nav -->

