<?php

namespace APP\Model;

class Provider{
    private int $providercnpj;
    private string $providername;
    private Address $address;

    public function __construct(
        int  $providercnpj,
        string $providername,
        Address $address,
    )
    {
        $this->providercnpj = $providercnpj;
        $this->providername = $providername;
        $this->Address = $address;
        
  }
}
?>