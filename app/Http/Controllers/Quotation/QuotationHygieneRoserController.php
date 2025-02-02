<?php

namespace App\Http\Controllers\Quotation;

use App\Http\Controllers\QuotationController;
use App\Models\Quotation;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Inertia\Response;

class QuotationHygieneRoserController extends QuotationController
{
    public function __construct()
    {
        $this->post_type_id = 4;
        $this->title = 'Roser';
        $this->url = 'hygienes-roser';
    }

    public function update($shipment, Request $request, Quotation $hygienes_roser): Redirector|RedirectResponse|Application
    {
        return parent::update($shipment, $request, $hygienes_roser); // TODO: Change the autogenerated stub
    }

    public function edit($shipment, Quotation $hygienes_roser): Response
    {
        return parent::edit($shipment, $hygienes_roser); // TODO: Change the autogenerated stub
    }

    public function show($shipment, Quotation $hygienes_roser)
    {
        return parent::show($shipment, $hygienes_roser); // TODO: Change the autogenerated stub
    }

    public function updatePhoto($shipment, Request $request, Quotation $hygienes_roser): RedirectResponse
    {
        return parent::updatePhoto($shipment, $request, $hygienes_roser); // TODO: Change the autogenerated stub
    }

    public function destroy($shipment, Quotation $hygienes_roser): RedirectResponse
    {
        return parent::destroy($shipment, $hygienes_roser); // TODO: Change the autogenerated stub
    }
}
