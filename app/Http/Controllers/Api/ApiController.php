<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use League\Fractal;

use League\Fractal\Serializer\DataArraySerializer;

use App\Models\Charge;

use App\Transformers\ChargeTransformer;

class ApiController extends Controller
{
    public function __construct()
    {
        $this->manager = new Fractal\Manager();

        $this->manager->setSerializer(new DataArraySerializer());

        $this->charges = $this->getCharges();

    }

    private function getCharges()
    {
        $charges = Charge::all();

        $resource = new Fractal\Resource\Collection($charges, new ChargeTransformer);

        return $this->manager->createData($resource)->toArray();
    }
}
