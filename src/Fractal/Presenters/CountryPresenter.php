<?php
namespace Empari\Geo\Fractal\Presenters;

use Empari\Geo\Fractal\Transformers\CountryTransformer;
use Prettus\Repository\Presenter\ModelFractalPresenter;

class CountryPresenter extends ModelFractalPresenter
{
    /**
     * Transformer
     *
     * @return \League\Fractal\TransformerAbstract
     */
    public function getTransformer()
    {
        return new CountryTransformer();
    }
}