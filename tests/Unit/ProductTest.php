<?php

use App\Models\Company;
use App\Models\Product;

it('belongs to a company', function () {

$company = Company::factory()->create();

$product = Product::factory()->create([
    'company_id' => $company->id
]);

expect($product->company->is($company))->toBeTrue();
});



it('can have tags', function() {
    $product = Product::factory()->create();

    $product->tag('Frontend');

    expect($product->tags)->toHaveCount(1);
});