<?php

$this->group([
    'namespace' => 'Clinic'
],function($route){
    $route->screen('clinic/patient/create', 'Patient\PatientEdit','dashboard.clinic.patient.create');
    $route->screen('clinic/patient/{patient}/edit', 'Patient\PatientEdit','dashboard.clinic.patient.edit');
    $route->screen('clinic/patient', 'Patient\PatientList','dashboard.clinic.patient.list');


    $route->screen('clinic/product/create', 'Product\ProductEdit','dashboard.clinic.product.create');
    $route->screen('clinic/product/{product}/edit', 'Product\ProductEdit','dashboard.clinic.product.edit');
    $route->screen('clinic/product', 'Product\ProductList','dashboard.clinic.product.list');

});

