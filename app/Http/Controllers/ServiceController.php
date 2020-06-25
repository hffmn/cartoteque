<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\AddServiceRequest;
use App\Service;

class ServiceController extends Controller
{
    public function index() {
      $services = Service::getAllServices();
      return view('services.services', ['services' => $services]);
    }

    public function addServicePage() {
      return view('services.add_service');
    }

    public function addService(AddServiceRequest $request) {
      Service::addingNewService($request);
      return redirect('/services');
    }
}
