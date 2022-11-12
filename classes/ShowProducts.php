<?php

class ShowProducts {
    public function show(ProductInterface $productType) {
        
        $productType->showProducts();
        
    }
}

