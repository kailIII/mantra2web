<?php

function _undoOrder(){
    
    
unset($_SESSION['PEDIDO_PRODID']); 
unset($_SESSION['PEDIDO_PRODNOMBRE']);
unset($_SESSION['PEDIDO_PRODCANT']);
unset($_SESSION['PEDIDO_PRODPRECIO']);

echo ' &nbsp;';
    
}

