<?php
namespace Empari\Geo\Fractal\Transformers;

use Empari\Geo\Models\City;
use League\Fractal\TransformerAbstract;

class CityTransformer extends TransformerAbstract
{
    /**
     * @var array
     */
    protected $availableIncludes = ['state', 'country'];

    /**
     * Transform the \City entity
     * @param \Empari\Geo\Models\City $model
     *
     * @return array
     */
    public function transform(City $model)
    {
        return [
            'ibge' => (int) $model->id,
            'name' => (string) $model->name,
            'uf' => (string) $model->state->initials
        ];
    }

    public function includeState(City $city)
    {
        return $this->item($city->state, new StateTransformer());
    }

    public function includeCountry(City $city)
    {
        return $this->item($city->state->country, new CountryTransformer());
    }
}