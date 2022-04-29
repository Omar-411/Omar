<?php




    $token= "Bearer 14|Nenh9dMcL4hSjHVHgkr7MDTxouYAY5dRJaoy4fp4";
    $fromTokenId = substr($token, strpos($token, " ") + 1);
    $afterTokenId = substr($fromTokenId, strpos($fromTokenId, "|") + 1);
    $tokenId = $fromTokenId - $afterTokenId ;
    print_r($tokenId);

