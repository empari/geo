<?php
namespace Empari\Geo\Fractal\Transformers;

use Empari\Geo\Models\State;
use League\Fractal\TransformerAbstract;

class StateTransformer extends TransformerAbstract
{
    /**
     * @var array
     */
    protected $availableIncludes = ['country'];

    /**
     * Transform the \State entity
     * @param \Empari\Geo\Models\State $model
     *
     * @return array
     */
    public function transform(State $model)
    {
        return [
            'ibge' => (int) $model->id,
            'name'=> (string) $model->name,
            'uf' => (string) $model->initials,
        ];
    }

    public function includeCountry(State $state)
    {
        return $this->item($state->country, new CountryTransformer());
    }
}