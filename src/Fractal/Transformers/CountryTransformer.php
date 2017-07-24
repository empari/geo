<?php
namespace Empari\Geo\Fractal\Transformers;

use Empari\Geo\Models\Country;
use League\Fractal\TransformerAbstract;

class CountryTransformer extends TransformerAbstract
{
    /**
     * Transform the \Country entity
     *
     * @param \Empari\Geo\Models\Country $model
     * @return array
     */
    public function transform(Country $model)
    {
        return [
            'ibge'   => (int) $model->id,
            'name' => (string) $model->name,
        ];
    }
}